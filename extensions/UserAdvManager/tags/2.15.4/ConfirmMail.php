<?php
//----------------------------------------------------------- include
define('PHPWG_ROOT_PATH','./../../');

include_once( PHPWG_ROOT_PATH.'include/common.inc.php' );

include_once (UAM_PATH.'include/constants.php');
include_once (UAM_PATH.'include/functions.inc.php');

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
//check_status(ACCESS_NONE);
load_language('plugin.lang', UAM_PATH);

$title= l10n('confirm_mail_page_title');
$page['body_id'] = 'theAboutPage';
include(PHPWG_ROOT_PATH.'include/page_header.php');

@include(PHPWG_ROOT_PATH.'template/'.$user['template'].
  '/theme/'.$user['theme'].'/themeconf.inc.php');


if (isset($_GET['key']))
{

  global $conf;
  
  $conf_UAM_ConfirmMail = unserialize($conf['UserAdvManager_ConfirmMail']);

  if (VerifyConfirmMail($_GET['key']))
  {
    $status = true;
    
    $template->assign(
			array(
        'STATUS'               => $status,
				'CONFIRM_MAIL_MESSAGE' => $conf_UAM_ConfirmMail[5],
			)
		);
  }  
  else
  {
    $status = false;
    $template->assign(
			array(
        'STATUS'               => $status,
				'CONFIRM_MAIL_MESSAGE' => $conf_UAM_ConfirmMail[6],
			)
		);
  }
}

if (isset($lang['Theme: '.$user['theme']]))
{
  $template->assign(
  	'THEME_ABOUT',l10n('Theme: '.$user['theme'])
  );
}

if ( isset($conf['gallery_url']) )
	{
	$template->assign(
		array(
    	'GALLERY_URL' =>
      		isset($page['gallery_url']) ?
          		$page['gallery_url'] : $conf['gallery_url'],
		)
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