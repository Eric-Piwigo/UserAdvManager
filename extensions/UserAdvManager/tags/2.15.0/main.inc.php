<?php
/*
Plugin Name: UserAdvManager
Version: 2.15.0
Description: Renforcer la gestion des utilisateurs - Enforce users management
Plugin URI: http://fr.piwigo.org/ext/extension_view.php?eid=216
Author: Nicco, Eric
Author URI: http://gallery-nicco.no-ip.org, http://www.infernoweb.net
*/

/* History:  UAM_PATH.'Changelog.txt.php' */

/*
 ***** TODO List *****
++ Adding ASC and DESC ordering for user's lists tables (Ghost Tracker, UserList and Unvalidated) ?

++ No validation needed for admins users comments (new trigger needed in comments.php ?)

++ No single email check for admins (new trigger needed in functions_user.inc.php ?)

++ Password control and enforcement
  ?? Can not be the same as username -> Could password score control be sufficient ? 
  
++ Security : Blocking brut-force attacks !
              -> Way to do that : Count the number of failed attempts to connect and lock the targetted account after x attempts. Where x will be settable by admin.
              To unlock the locked account :
               -> A new table in admin's plugin panel which would display the locked accounts.
               -> Sending an email to account owner to inform him his account is blocked due to multiple failed connexions attempts. This email could have a link with a security key to unlock the account.
               -> Both of above solutions ?

++ Opportunity to copy a registered user for new user creation
  ++ new copied user will (or not) belong to the same groups
  ++ new copied user will (or not) get the same status (visitor, admin, webmaster, guest (??))
  ++ new copied user will (or not) get the same properties
  ++ new copied user will (or not) get the same language
  ... and so on
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!defined('UAM_DIR')) define('UAM_DIR' , basename(dirname(__FILE__)));
if (!defined('UAM_PATH')) define('UAM_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

load_language('plugin.lang', UAM_PATH);


/* Plugin admin */
add_event_handler('get_admin_plugin_menu_links', 'UAM_admin_menu');

function UAM_admin_menu($menu)
{
// +-----------------------------------------------------------------------+
// |                      Getting plugin name                              |
// +-----------------------------------------------------------------------+
  $plugin =  PluginInfos(UAM_PATH);
  $name = $plugin['name'];
  
  array_push($menu,
    array(
      'NAME' => $name,
      'URL'  => get_admin_plugin_menu_link(UAM_PATH.'/admin/UAM_admin.php')
    )
  );

  return $menu;
}

/* Lastvisit table feed for Ghost Tracker */
add_event_handler('loc_begin_index', 'UAM_GhostTracker');

function UAM_GhostTracker()
{
  global $conf, $user;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  /* Admins and Guests are not tracked for Ghost Tracker or Users Tracker */
  if (!is_admin() and !is_a_guest())
  {
    if ((isset($conf_UAM[17]) and $conf_UAM[17] == 'true') or (isset($conf_UAM[20]) and $conf_UAM[20] == 'true'))
    {

      $userid = get_userid($user['username']);
     	  
      /* Looking for existing entry in last visit table */
      $query = '
SELECT *
  FROM '.USER_LASTVISIT_TABLE.'
WHERE user_id = '.$userid.'
;';
        
      $count = mysql_num_rows(pwg_query($query));
         
      if ($count == 0)
      {
        /* If not, data are inserted in table */
        $query = '
INSERT INTO '.USER_LASTVISIT_TABLE.' (user_id, lastvisit, reminder)
VALUES ('.$userid.', now(), "false")
;';
        pwg_query($query);
      }
      else if ($count > 0)
      {
        /* If yes, data are updated in table */
        $query = '
UPDATE '.USER_LASTVISIT_TABLE.'
SET lastvisit = now(), reminder = "false"
WHERE user_id = '.$userid.'
LIMIT 1
;';
        pwg_query($query);
      }
    }
  }
}


/* User creation */
add_event_handler('register_user', 'UAM_Adduser');

function UAM_Adduser($register_user)
{
  global $conf;

  $conf_UAM = unserialize($conf['UserAdvManager']);
  
  /* Sending registration confirmation by email */
  if ((isset($conf_UAM[0]) and $conf_UAM[0] == 'true') or (isset($conf_UAM[2]) and $conf_UAM[2] == 'true'))
  {
    if (is_admin() and isset($conf_UAM[21]) and $conf_UAM[21] == 'true')
    {
    $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
    SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true); 
    }
    elseif (is_admin() and isset($conf_UAM[21]) and $conf_UAM[21] == 'false')
    {
    $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
    SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], false);
    }
    elseif (!is_admin())
    {
    $passwd = (isset($_POST['password'])) ? $_POST['password'] : '';
    SendMail2User(1, $register_user['id'], $register_user['username'], $passwd, $register_user['email'], true);
    }
  }
}


/* User deletion */
add_event_handler('delete_user', 'UAM_Deluser');

function UAM_Deluser($user_id)
{
  /* Cleanup for ConfirmMail table */
  DeleteConfirmMail($user_id);
  /* Cleanup for LastVisit table */
  DeleteLastVisit($user_id);
}


/* Check users registration */
add_event_handler('register_user_check', 'UAM_RegistrationCheck', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);

function UAM_RegistrationCheck($err, $user)
{
  global $errors, $conf;

/* *********************************************************** */
/* We need to reset the standard Piwigo's register controls    */
/* because the call of register_user_check trigger resets them */
/* *********************************************************** */
  /* ********************************** */
  /* Standard Piwigo's username control */
  /* ********************************** */
  if ($_POST['login'] == '')
  {
    return l10n('reg_err_login1');
  }
  if (preg_match('/^.* $/', $_POST['login']))
  {
    return l10n('reg_err_login2');
  }
  if (preg_match('/^ .*$/', $_POST['login']))
  {
    return l10n('reg_err_login3');
  }
  if (get_userid($_POST['login']))
  {
    return l10n('reg_err_login5');
  }
  
  if (script_basename() == 'admin' and isset($_GET['page']) and $_GET['page'] == 'user_list') /* not the same email variable if we are on users registration page or on admin's user registration page*/
  {
  /* Email doblons check */
    $atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // before  arobase
    $domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // domain name
    $regex = '/^' . $atom . '+' . '(\.' . $atom . '+)*' . '@' . '(' . $domain . '{1,63}\.)+' . $domain . '{2,63}$/i';
  
    if (!preg_match($regex, $_POST['email']))
    {
      return l10n('reg_err_mail_address');
    }
    
    $query = '
SELECT count(*)
FROM '.USERS_TABLE.'
WHERE upper('.$conf['user_fields']['email'].') = upper(\''.$_POST['email'].'\')
;';
    list($count) = mysql_fetch_array(pwg_query($query));
    if ($count != 0)
    {
      return l10n('reg_err_mail_address_dbl');
    }
  }

  if (script_basename() == 'register') /* not the same email variable if we are on users registration page or on admin's user registration page*/
  {
  /* Email doblons check */
    $atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // before  arobase
    $domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // domain name
    $regex = '/^' . $atom . '+' . '(\.' . $atom . '+)*' . '@' . '(' . $domain . '{1,63}\.)+' . $domain . '{2,63}$/i';
  
    if (!preg_match($regex, $_POST['mail_address']))
    {
      return l10n('reg_err_mail_address');
    }
    
    $query = '
SELECT count(*)
FROM '.USERS_TABLE.'
WHERE upper('.$conf['user_fields']['email'].') = upper(\''.$_POST['mail_address'].'\')
;';
    list($count) = mysql_fetch_array(pwg_query($query));
    if ($count != 0)
    {
      return l10n('reg_err_mail_address_dbl');
    }
  }
/* ****************************************** */
/* End of Piwigo's standard register controls */
/* ****************************************** */


/* ****************************************** */
/* Here begins the advanced register controls */
/* ****************************************** */
  $PasswordCheck = 0;

  $conf_UAM = unserialize($conf['UserAdvManager']);

  /* Password enforcement control */
  if (isset($conf_UAM[14]) and $conf_UAM[14] == 'true' and !empty($conf_UAM[15]))
  {
    if (!empty($user['password']) and !is_admin())
    {
      $PasswordCheck = testpassword($user['password']);
  
      if ($PasswordCheck < $conf_UAM[15])
      {
        $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
        return($lang['reg_err_pass'] = l10n_args($message).$conf_UAM[15]);
      }
    }
    else if (!empty($user['password']) and is_admin() and isset($conf_UAM[16]) and $conf_UAM[16] == 'true')
    { 
      $PasswordCheck = testpassword($user['password']);
  
      if ($PasswordCheck < $conf_UAM[15])
      {
        $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
        return($lang['reg_err_pass'] = l10n_args($message).$conf_UAM[15]);
      }
    }
  }

  /* Username non case sensitive */
  if (isset($conf_UAM[1]) and $conf_UAM[1] == 'true' and NotSensibleSearchUsername($_POST['login']))
  {
    return($lang['reg_err_login5'] = l10n('reg_err_login5'));
  }

  /* Username without forbidden keys */
  if (isset($conf_UAM[7]) and $conf_UAM[7] == 'true' and !empty($_POST['login']) and ValidateUsername($_POST['login']) and !is_admin())
  {
    $_POST['login'] = '';
    return($lang['reg_err_login1'] = l10n('reg_err_login6')."'".$conf_UAM[8]."'");
  }

  /* Email without forbidden domains */
  if (isset($conf_UAM[12]) and $conf_UAM[12] == 'true' and !empty($_POST['mail_address']) and ValidateEmailProvider($_POST['mail_address']) and !is_admin())
  {
    $_POST['mail_address'] = '';
    return($lang['reg_err_login1'] = l10n('reg_err_login7')."'".$conf_UAM[13]."'");
  }
}


if (script_basename() == 'profile')
{
  add_event_handler('loc_begin_profile', 'UAM_Profile_Init');

  function UAM_Profile_Init()
  {
    global $conf, $user, $template;

    $conf_UAM = unserialize($conf['UserAdvManager']);

    if (isset($_POST['validate']) and !is_admin())
    {
      /* Email without forbidden domains */
      if (isset($conf_UAM[12]) and $conf_UAM[12] == 'true' and !empty($_POST['mail_address']))
      {
        if (ValidateEmailProvider($_POST['mail_address']))
        {
          $template->append('errors', l10n('reg_err_login7')."'".$conf_UAM[13]."'");
          unset($_POST['validate']);
        }
      }

      $typemail = 3;
      
      if (!empty($_POST['use_new_pwd']))
      {
        $typemail = 2;
        
        /* Password enforcement control */
        if (isset($conf_UAM[14]) and $conf_UAM[14] == 'true' and !empty($conf_UAM[15]))
        {
          $PasswordCheck = testpassword($_POST['use_new_pwd']);
         
          if ($PasswordCheck < $conf_UAM[15])
          {
            $message = get_l10n_args('reg_err_login4_%s', $PasswordCheck);
            $template->append('errors', l10n_args($message).$conf_UAM[15]);
            unset($_POST['use_new_pwd']);
            unset($_POST['validate']);
          }
        }
      }
      
      /* Sending registration confirmation by email */
      if ((isset($conf_UAM[0]) and $conf_UAM[0] == 'true') or (isset($conf_UAM[2]) and $conf_UAM[2] == 'true'))
      {
        $confirm_mail_need = false;
              
        if (!empty($_POST['mail_address']))
        {
          $query = '
SELECT '.$conf['user_fields']['email'].' AS email
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';
          
          list($current_email) = mysql_fetch_row(pwg_query($query));
      
          if ($_POST['mail_address'] != $current_email and ( isset($conf_UAM[2]) and $conf_UAM[2] == 'true'))
        
            $confirm_mail_need = true;
        }
        
        if ((!empty($_POST['use_new_pwd']) and (isset($conf_UAM[0]) and $conf_UAM[0] == 'true') or $confirm_mail_need))
        {
          $query = '
SELECT '.$conf['user_fields']['username'].'
FROM '.USERS_TABLE.'
WHERE '.$conf['user_fields']['id'].' = \''.$user['id'].'\'
;';
        
          list($username) = mysql_fetch_row(pwg_query($query));

          SendMail2User($typemail, $user['id'], $username, $_POST['use_new_pwd'], $_POST['mail_address'], $confirm_mail_need);
        }
      }
    }
  }
}


add_event_handler('init', 'UAM_InitPage');
/* *** Important ! This is necessary to make email exclusion work in admin's users management panel *** */
function UAM_InitPage()
{
  load_language('plugin.lang', UAM_PATH);
  global $conf, $template, $page, $lang, $errors;

  $conf_UAM = unserialize($conf['UserAdvManager']);

/* Admin user management */
  if (script_basename() == 'admin' and isset($_GET['page']) and $_GET['page'] == 'user_list')
  {
    if (isset($_POST['submit_add']))
    {
      /* Email without forbidden domains */
      if (isset($conf_UAM[12]) and $conf_UAM[12] == 'true' and !empty($_POST['email']) and ValidateEmailProvider($_POST['email']))
      {
        $template->append('errors', l10n('reg_err_login7')."'".$conf_UAM[13]."'");
        unset($_POST['submit_add']);
      }
    }
  }
}


add_event_handler('user_comment_check', 'UAM_CheckEmptyCommentAuthor', 50, 2);

function UAM_CheckEmptyCommentAuthor($comment_action, $comm)
{
  load_language('plugin.lang', UAM_PATH);
  global $infos, $conf, $template;

  $conf_UAM = unserialize($conf['UserAdvManager']);

/* User creation OR update */
  if (isset($conf_UAM[6]) and $conf_UAM[6] == 'true' and $conf['comments_forall'] == 'true' and $comm['author'] == 'guest')
  {
    $comment_action = 'reject';

    array_push($infos, l10n('UAM_Empty Author'));
  }

  return $comment_action;
}
?>