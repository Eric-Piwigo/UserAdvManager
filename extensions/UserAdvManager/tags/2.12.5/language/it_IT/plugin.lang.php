<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
/* TODO */$lang['Title_Tab1'] = 'UserAdvManager - General Setup';
/* TODO */$lang['Tab_Global'] = 'General Setup';
$lang['UserAdvManager_Mail_Info'] = ' Mail informazioni per l\'utente:';
/* TODO */$lang['UserAdvManager_Mail_Info_true'] = ' Send an information mail to the user when he registers or updates his profile.';
/* TODO */$lang['UserAdvManager_Mail_Info_false'] = ' Turns off the sending of mail. (default)';
/* TODO */$lang['UserAdvManager_MailInfo_Text'] = ' Text used to introduce the email sent to user to allow him to validate his email address<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if Mail information user is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
/* TODO */$lang['UserAdvManager_No_Casse'] = ' User insensitive';
/* TODO */$lang['UserAdvManager_No_Casse_true'] = ' Make the user account insensitive at the registration and the identification step';
/* TODO */$lang['UserAdvManager_No_Casse_false'] = ' Let the user-sensitive. (default)';
/* TODO */$lang['UserAdvManager_Username_Char'] = ' Limited charset for unsername';
/* TODO */$lang['UserAdvManager_Username_Char_true'] = ' The following characters will be forbidden for username choice';
/* TODO */$lang['UserAdvManager_Username_Char_false'] = ' Use the default username charset control. (default)';
/* TODO */$lang['UserAdvManager_Confirm_Mail'] = 'Email address confirmation:';
/* TODO */$lang['UserAdvManager_Confirm_Mail_true'] = ' Send an email to user to allow him to validate his email and his registration.';
/* TODO */$lang['UserAdvManager_Confirm_Mail_false'] = ' Use the default Piwigo registration system (without registration validation). (default)';
/* TODO */$lang['UserAdvManager_ConfirmMail_Text'] = ' Text used to introduce the email sent to user to allow him to validate his email address<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if Email address confirmation is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
/* TODO */$lang['UserAdvManager_Confirm_Group_Notice'] = 'WARNING : Using validation groups requires that you have created at least one user group and is defined "by default" in Piwigo\'s user groups management.';
/* TODO */$lang['UserAdvManager_No_Confirm_Group'] = 'Group to use for the users who haven\'t validated their email address.';
/* TODO */$lang['UserAdvManager_Validated_Group'] = 'Group to use for the users who have validated their email address.';
/* TODO */$lang['UserAdvManager_Confirm_Status_Notice'] = 'WARNING : The use of status validation requires that you have kept the "Guest" user with default setting (as user template) for new registered. Note you can set any other user as a template for new registered. Please refer to the Piwigo\'s documentation for more details.';
/* TODO */$lang['UserAdvManager_No_Confirm_Status'] = 'Status to use for the users who haven\'t validated their email address.';
/* TODO */$lang['UserAdvManager_Validated_Status'] = 'Status to use for the users who have validated their email address. Let ------- for using default Piwigo values';
/* TODO */$lang['UserAdvManager_No_Comment_Anonymous'] = 'Nickname are mandatory for comments';
/* TODO */$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' The author field have to be filled to send a comment.';
/* TODO */$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Use the default Piwigo settings on comments sending. (default)';
/* TODO */$lang['UserAdvManager_MailExclusion'] = 'Email provider exclusion:';
/* TODO */$lang['UserAdvManager_MailExclusion_true'] = ' Set the email provider exclusion ON (i.e. : @hotmail.* or @msn.*)';
/* TODO */$lang['UserAdvManager_MailExclusion_false'] = ' Set the email provider exclusion OFF. (default)';
/* TODO */$lang['UserAdvManager_MailExclusion_List'] = ' If email provider exclusion is set to ON, fill the email domains to exclude below. You have to use the following format :<br>@[domaine_name].[domaine_extension] - Example : @hotmail.com<br>Seperate the different domains with a comma (,)<br>';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* TODO */$lang['UserAdvManager_Title1'] = 'Users registration management';
/* TODO */$lang['UserAdvManager_Title2'] = 'Registration validation and groups / status management';
/* TODO */$lang['UserAdvManager_Password_Enforced'] = 'Strengthening passwords - Enabling this option makes the seizure of the password required for visitors registration. Also, the password entered by the visitor will meet with a score of complexity (<b style="color: green;">activate and save settings to display more informations</b>).';
/* TODO */$lang['UserAdvManager_Password_Enforced_Info'] = '<b style="text-decoration: underline; color: green;">Explanations:</b> <b style="color: green;">A password score is calculated on the basic parameters: length, type of characters used (letters, digits, uppercase, lowercase, special characters). If the password of the user does not score, the score reached is displayed with the minimal score to reach and an indication to increase the value of this score. To give you an idea, a score below 100 is considered "low complexity". Between 100 and 500, the complexity is increased and average. Beyond 500, that\'s Fort Knox! ;-)<br>You can do your passwords complexity tests by using the field below. This will allow you to get an idea of the score to define a custom complexity.</b>';
/* TODO */$lang['UserAdvManager_PasswordTest'] = 'Passowrd to test : ';
/* TODO */$lang['UserAdvManager_ScoreTest'] = 'Score : ';
/* TODO */$lang['PasswordTest'] = 'Score calculation';
/* TODO */$lang['UserAdvManager_Password_Enforced_true'] = ' Strong password required - Enter the minimum score (floor value) of passwords complexity == ';
/* TODO */$lang['UserAdvManager_Password_Enforced_false'] = ' Do not strengthen passwords. (default)';
/* TODO */$lang['UserAdvManager_AdminPassword_Enforced'] = 'Apply also the passwords complexity control when an administrator create a user? Note: If the created user wishes to change his password and strengthening passwords for users is active, he will be subject to the rules set.';
/* TODO */$lang['UserAdvManager_AdminPassword_Enforced_true'] = 'Enable strengthening passwords for admins.';
/* TODO */$lang['UserAdvManager_AdminPassword_Enforced_false'] = 'Disable strengthening passwords for admins. (default)';
/* TODO */$lang['UserAdvManager_GhostTracker'] = 'Ghost Tracker - Allows to manage registered users according their last visit date :';
/* TODO */$lang['UserAdvManager_GhostTracker_true'] = ' Enable Ghost Tracker.';
/* TODO */$lang['UserAdvManager_GhostTracker_false'] = ' Disable Ghost Tracker. (Default)';
/* TODO */$lang['UserAdvManager_GhostTracker_DayLimit'] = ' Type in here the maximum limit, in days, between two visits of a visitor. When this limit is reached, this visitor will appear in the table on "Ghost Tracker" tab.';
/* TODO */$lang['UserAdvManager_GhostTracker_ReminderText'] = ' Text used in the email reminder sent to encourage visitors to come back to the gallery (NB: The text pre-filled at the plugin installation is given as an example).<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if Ghost Tracker is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* TODO */$lang['UserAdvManager_GhostTracker_Notice'] = 'When the Ghost Tracker feature is enabled, you can manage your visitors depending on the frequency of their visits. <b style="color: red;">IMPORTANT : If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, visit the Ghost Tracker tab and follow the instructions for Ghost Tracker initialization.</b>';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


/* ConfirmMail Configuration Tab */
/* TODO */$lang['ConfirmMail_Title'] = 'Advanced management and settings of register confirmation by mail';
/* TODO */$lang['Title_Tab2'] = 'UserAdvManager - ConfirmMail Settings';
/* TODO */$lang['Tab_ConfirmMail'] = 'ConfirmMail Settings';
/* TODO */$lang['UserAdvManager_ConfirmMail_Info'] = 'Time limitation for validation of registration :<br>If you enable this option, select the desired time (x) )in the field below. Visitors who register will then have x days to validate their registration. After this period the validation link they have received by mail will be expired.<br>';
/* TODO */$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Enable limiting the registration deadline.';
/* TODO */$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Disable limiting the registration deadline. (Default)';
/* TODO */$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Validation delay :';
/* TODO */$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Enter the number of days before expiry of the registration validation : ';
/* TODO */$lang['UserAdvManager_ConfirmMail_Remail'] = 'Enable or disable email reminder of unvalidated registers :';
/* TODO */$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Enable email reminder';
/* TODO */$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Disable email reminder. (Default)';
/* TODO */$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Custom content of the reminder message with regeneration of validation key.<br>If left blank, the reminder email will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled at the plugin installation is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';
/* TODO */$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Custom content of the reminder message without regeneration of validation key.<br>If left blank, the reminder email will include only the validation link. It is therefore strongly advised to take a little explanatory text. (NB: The text pre-filled at the plugin installation is given as an example)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">WARNING !</b> <b style="color: red;">Text modification is available ONLY if email reminder is enabled. Use the multi language tags from Extended Description plugin if this plugin is activated !!!)</b>';


/* UserManager Tab */
/* TODO */$lang['UserManager_Title'] = 'Advanced settings of unvalidated registered users';
/* TODO */$lang['Title_Tab3'] = 'UserAdvManager - Visitors management';
/* TODO */$lang['Tab_UserManager'] = 'Visitors management';
/* TODO */$lang['UserAdvManager_ConfirmMail_User_List'] = 'When limiting the deadline for registration is enabled, you will find below the list of users awaiting validation, <b style="text-decoration: underline;">whether or not</b> they are in time to validate.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>without</b> generating a new key. Warning: Send an email reminder to targeted visitors. This function does not reset the date of registration of targeted visitors and the timeout is still valid.
<br>
- Generate email reminder <b>with</b> generating a new key. Warning : Send an email reminder to targeted visitors. This function also resets the date of registration of targeted visitors which equates to extend the deadline for validation.<br>
- Submit a registration awaiting validation manually even if the expiry date has passed <b>(forcing validation)</b>.
<br>';
/* TODO */$lang['Registration_Date'] = 'Registration date';


// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Ghost Tracker Tab */
/* TODO */$lang['GhostTracker_Title'] = 'Advanced ghost visitors management';
/* TODO */$lang['Title_Tab4'] = 'UserAdvManager - Ghost Tracker';
/* TODO */$lang['Tab_GhostTracker'] = 'Ghost Tracker';
/* TODO */$lang['LastVisit_Date'] = 'Last visit';
/* TODO */$lang['Ghost_Reminder'] = 'Email reminder';
/* TODO */$lang['Reminder_Sent_OK'] = 'YES';
/* TODO */$lang['Reminder_Sent_NOK'] = 'NO';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* TODO */$lang['UserAdvManager_GhostTracker_Init'] = 'If you enable this feature for the first time or you have reactivated after a long period off during which new visitors are registered, you must initialize or reset the Ghost Tracker. This action is done only after activation or reactivation of the option. Please click <u>once</u> the reset button below.';
/* TODO */$lang['UserAdvManager_GhostTracker_User_List'] = 'When Ghost Tracker is enabled and initialized, you will find below the list of registered visitors who have not returned since x days. "x" is the number of days configured in the General Setup tab. In addition, you will find a column indicating whether an email reminder has been sent to targeted visitors. So, you can see at a glance and treat visitors who have not taken account of the reminder.<br><br>In this view, you can:
<br><br>
- Manually delete accounts <b>(manual drain)</b>
<br>
- Generate email reminder <b>with resetting the last visit date</b>. This allows to give a wildcard to targeted visitors. If the visitor has already received a reminder, nothing prevents to resent a new mail which will reset again, in fact, the last visit date.
<br>';
// --------- End: New or revised $lang ---- from version 2.12.2


/* Mailing */
/* TODO */$lang['infos_mail %s'] = '%s, please find here your information to login the gallery :';
/* TODO */$lang['User: %s'] = 'User : %s';
/* TODO */$lang['Password: %s'] = 'Password: %s';
/* TODO */$lang['Add of %s'] = 'Add of %s';
/* TODO */$lang['Update of %s'] = 'Update of %s';
/* TODO */$lang['Link: %s'] = 'Please, click on this link to confirm your regsitration : %s';
/* TODO */$lang['Reminder_with_key_of_%s'] = '%s, your validation key has been renewed';
/* TODO */$lang['Reminder_without_key_of_%s'] = '%s, your validation key will expire';
/* TODO */$lang['Ghost_remainder_of_%s'] = '%s, this is a reminder email';


/* Email confirmation page */
/* TODO */$lang['title_confirm_mail'] = 'Validate your registration';
/* TODO */$lang['confirm_mail_page_title'] = 'Validate your registration';
/* TODO */$lang['confirm_mail_ok'] = '<br><br><br>Thank you to have confirmed your email address and your registration on the gallery. Have fun !<br><br><br><br>';
/* TODO */$lang['confirm_mail_bad'] = '<br><br><br>Your activation key is incorrect or expired or you have already validated your account, please contact the webmaster to fix this problem.<br><br><br><br>';


/* Errors and Warnings */
/* TODO */$lang['UserAdvManager_audit_ok'] = 'Audit OK';
/* TODO */$lang['Err_audit_no_casse'] = '<b>These accounts are identical to the case closely :</b> ';
/* TODO */$lang['Err_audit_username_char'] = '<b>This account uses one or more forbidden characters :</b> ';
/* TODO */$lang['Err_audit_email_forbidden'] = '<b>This account uses a forbidden email provider :</b> ';
/* TODO */$lang['Err_audit_advise'] = '<b>you have to perform corrections to comply with new rules that you have activated.<br>Use a database management utility to correct user accounts directly in the table ### _USERS';
/* TODO */$lang['UserAdvManager_Empty Author'] = 'The author field have to be filled to send a comment.';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	/* TODO */$lang['reg_err_login5'] = 'Username already exist, WARNING name is case insensitive (Shift = Tiny).';
/* TODO */$lang['reg_err_login6'] = 'Username does not match the following characters: ';
/* TODO */$lang['reg_err_login7'] = 'Your email provider is banned for registration. Banned email providers are: ';
/* TODO */$lang['UserAdvManager_empty_pwd'] = '[empty password]';
/* TODO */$lang['UserAdvManager_no_update_pwd'] = '[profile updated without password changed]';
/* TODO */$lang['invalid_pwd'] = 'Invalid username or password !';
/* TODO */$lang['Err_ConfirmMail_Settings'] = 'This page will be available only if "Email address confirmation" is activated in "General Setup" tab.';
/* TODO */$lang['Err_UserManager_Settings'] = 'This page is available only if "Enable limiting the registration deadline" is active in the "ConfirmMail Settings" tab and an unvalidated users group is set in "General Setup" tab.';
/* TODO */$lang['No_validation_for_Guest'] = 'The "Guest" account is not subject to validation';
/* TODO */$lang['No_validation_for_default_user'] = 'The default account is not subject to validation';
/* TODO */$lang['No_validation_for_Webmaster'] = 'The "Webmaster" account is not subject to validation';
/* TODO */$lang['No_validation_for_your_account'] = 'You personnal admin account is not subject to validation';
/* TODO */$lang['Database_Error'] = '<b><u>Warning! Critical integrity error in your database.</u></b><br><br>Please check the integrity of the #_user_confirm_mail table.';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* TODO */$lang['UserAdvManager_save_config'] ='Configuration saved.';
/* TODO */$lang['reg_err_login3'] = 'Security : Password is mandatory !';
/* TODO */$lang['reg_err_login4_%s'] = 'Security : A control system calculates a score on the chosen passwords complexity. The complexity of your password is too low (score = %s). Please, choose a new password more secure by following these rules:<br>
- Use letters and numbers<br>
- Use lowercase and uppercase<br>
- Increase its length (number of characters)<br>
The minimum passwords score required by the administrator is: ';
/* TODO */$lang['No_reminder_for_Guest'] = 'The "Guest" account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['No_reminder_for_default_user'] = 'The default account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['No_reminder_for_Webmaster'] = 'The "Webmaster" account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['No_reminder_for_your_account'] = 'You personnal admin account is not subject to receive reminders from GhostTracker';
/* TODO */$lang['Err_GhostTracker_Settings'] = 'This page is available only if "Ghost Tracker" is active in the "General Setup" tab.';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* TODO */$lang['GhostTracker_Init_OK'] = 'Ghost Tracker reset done !';
// --------- End: New or revised $lang ---- from version 2.12.2


/* Processing messages */
/* TODO */$lang['%d_Mail_With_Key'] = '%d message with key renewal was sent';
/* TODO */$lang['%d_Mails_With_Key'] = '%d messages with key renewal were sent';
/* TODO */$lang['%d_Reminder_Sent'] = '%d reminder message was sent';
/* TODO */$lang['%d_Reminders_Sent'] = '%d reminder messages were sent';
/* TODO */$lang['%d_Validated_User'] = '%d User validated manually';
/* TODO */$lang['%d_Validated_Users'] = '%d Users validated manually';


/* Action button names */
/* TODO */$lang['Delete_selected'] = 'Delete';
/* TODO */$lang['Mail_without_key'] = 'Reminder without key';
/* TODO */$lang['Mail_with_key'] = 'Reminder with key';
/* TODO */$lang['Force_Validation'] = 'Forced validation';
/* TODO */$lang['Reminder_Email'] = 'Email reminder';
// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* TODO */$lang['audit'] = 'Audit settings';
/* TODO */$lang['submit'] = 'Save settings';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1
// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* TODO */$lang['GT_Reset'] = 'Reset Ghost Tracker.';
// --------- End: New or revised $lang ---- from version 2.12.2
?>