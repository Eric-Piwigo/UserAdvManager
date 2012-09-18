<?php
//----------------------------------------------------------- include
define('PHPWG_ROOT_PATH','./../../');

include_once( PHPWG_ROOT_PATH.'include/common.inc.php' );
include_once( PHPWG_ROOT_PATH.'include/functions_mail.inc.php' );

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

$title= l10n('UAM_confirm_mail_page_title');
$page['body_id'] = 'theAboutPage';
include(PHPWG_ROOT_PATH.'include/page_header.php');

@include(PHPWG_ROOT_PATH.'template/'.$user['template'].
  '/theme/'.$user['theme'].'/themeconf.inc.php');


if (isset($_GET['key']) and isset($_GET['userid']))
{

  global $user, $lang, $conf, $errors;
  
  $key = $_GET['key'];
  $userid = $_GET['userid'];
  $redirect = false;
  
  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);
  $conf_UAM = unserialize($conf['UserAdvManager']);

  $query = '
SELECT '.USERS_TABLE.'.username
FROM '.USERS_TABLE.'
WHERE ('.USERS_TABLE.'.id ='.$userid.')
;';
  $result = pwg_db_fetch_assoc(pwg_query($query));

  if (VerifyConfirmMail($key))
  {
    $status = true;
    log_user($userid, false);
    if (isset($conf_UAM[1]) and $conf_UAM[1] == 'local')
    {
      validation_mail($userid);
    }
// We have to get the user's language in database
// ----------------------------------------------
    $query = '
SELECT language
FROM '.USER_INFOS_TABLE.'
WHERE '.USER_INFOS_TABLE.'.user_id ='.$userid.'
;';
    $data = pwg_db_fetch_assoc(pwg_query($query));

// Check if user is already registered (profile changing) - If not (new registration), language is set to current gallery language
// -------------------------------------------------------------------------------------------------------------------------------
    if (empty($data))
    {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
      $language = pwg_get_session_var('lang_switch', $user['language']);
      switch_lang_to($language);
    }
    else
    {
// And switch gallery to this language before using personalized and multilangual contents
// ---------------------------------------------------------------------------------------
      switch_lang_to($data['language']);
      load_language('plugin.lang', UAM_PATH);
    }

    if (isset($conf_UAM_ConfirmMail[5]) and $conf_UAM_ConfirmMail[5] <> '')
    {
      // Management of Extension flags ([username], [mygallery], [myurl])
      // ----------------------------------------------------------------
      $patterns[] = '#\[username\]#i';
      $replacements[] = $result['username'];
      $patterns[] = '#\[mygallery\]#i';
      $replacements[] = $conf['gallery_title'];
      $patterns[] = '#\[myurl\]#i';
      $replacements[] = get_gallery_home_url();

      if (function_exists('get_user_language_desc'))
      {
        $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail[5]));
      }
      else $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail[5]));
    }
    
    $redirect = true;
  }  
  else
  {
    $status = false;
    $redirect = false;
    
    if (isset($conf_UAM_ConfirmMail[6]) and $conf_UAM_ConfirmMail[6] <> '')
    {
      // Management of Extension flags ([username], [mygallery], [myurl])
      // ----------------------------------------------------------------
      $patterns[] = '#\[username\]#i';
      $replacements[] = $result['username'];
      $patterns[] = '#\[mygallery\]#i';
      $replacements[] = $conf['gallery_title'];
      $patterns[] = '#\[myurl\]#i';
      $replacements[] = get_gallery_home_url();
   
      if (function_exists('get_user_language_desc'))
      {
        $custom_text = get_user_language_desc(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail[6]));
      }
      else $custom_text = l10n(preg_replace($patterns, $replacements, $conf_UAM_ConfirmMail[6]));
    }
  }

  $Path_UAM = UAM_PATH; // Path to be used in template to reach the icons

  $template->assign(
    array(
      'UAM_PATH'             => $Path_UAM,
      'REDIRECT'             => $redirect,
      'STATUS'               => $status,
		  		'CONFIRM_MAIL_MESSAGE' => $custom_text,
    )
  );
}

if (isset($lang['Theme: '.$user['theme']]))
{
  $template->assign(
  	'THEME_ABOUT',l10n('Theme: '.$user['theme'])
  );
}

$template->set_filenames(
  array(
  	'confirm_mail'=>dirname(__FILE__).'/template/ConfirmMail.tpl',
	)
);

$template->pparse('confirm_mail');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
?>