<?php
/*
Plugin Name: NBC_UserAdvManager
** Change log **
***** Plugin history (branch 2.10)*****

-- 2.10.0-beta : Initial beta release for Piwigo compatibility
-- 2.10.1-beta : Small correction on generated path
-- 2.10.2-beta : Bug resolved on register validation page

-- 2.10.3 : Final and fully functional release
						Bug resolved on plugin activation

-- 2.10.4 : Bug fixed on profiles update

-- 2.10.5 : Improved code on profiles update

-- 2.10.6 : Old language packs (iso) deleted (forget from PWG 1.7.x version)

-- 2.10.7 : Bug fixed on user's validation email sending

-- 2.10.8 : ConfirmMail page looks better (Sylvia theme only)
						Improved code for checking author on guest comments

-- 2.10.9 : Bug fixed - Missing english translation
						Bug fixed - Notice on forbidden characters function use
						Bug fixed - Audit on forbidden characters in username didn't work
						Adding of email provider exclusion (like *@hotmail.com) - Warning ! -> Known bug : This feature doesn't work on user profile page. So, already registered users can change their email address to a forbiden one.

-- 2.10.9a : Email provider exclusion is no longer case sensitive

-- 2.10.9b : Bug fixed - Home icon wasn't linked to gallery url in ConfirmMail page. If GALLERY_URL is not set, Home icon gets the pwg root path.

-- 2.10.9c : Bug fixed - If Email provider exclusion is set off, new registered user will have a PHP notice on "Undefined variable: ncsemail"

-- 2.10.9d : Code simplification - need no more ""template"" sub-directory in plugin directory for enhance "back link" icon in ConfirMail.tpl

-- 2.10.9e : Compatibility improvement with PHP 5.3 - Some old functions will be deprecated like :
							ereg replaced by preg_match
							eregi replace by preg_match with "i" moderator
							split replace by preg_split
				
-- 2.10.9f : Compatibility bug fixed when used with DynamicRecentPeriod plugin


***** Plugin history (branch 2.11)***** 

-- 2.11.0 : New tabsheet menu to manage ConfirMail functions (setting a timeout without validation, Cleanup expired user's accounts, Force confirmation, Renew validation key, list unvalidated users,...)
						Beautify plugin's main admin panel
						
-- 2.11.1 : Bug fixed with install and upgrade functions
						Language files correction

-- 2.11.2 : Bug fixed on bad query for unvalidated users display in unvalidated users list
						Bug fixed : Sql syntax error on plugin activation

-- 2.11.3 : On Patricia's request (french forum and bug 1173), the unvalidated users management tab shows users according with the settings of unvalidated group and / or unvalidated status.
						Feature 1172 added : Email providers exclusion list can be set with CR/LF between each entry. The comma seperator (,) is still mandatory.
						Bug 1175 fixed : Bad translation tag in french language file.
						Improvement of unvalidated users management tab (feature 1174)- Expired users are displayed in red color text.

-- 2.11.4 : Bug 1177 fixed : Width of excluded email providers list reset to ancient value (80 col)
						Bug 1179 fixed : Adding a notice in plugin inline documentation for use of validation groups and status. A default group must be set in Piwigo's groups settings and the "Guest" (or another user) must be set as default for status values.
						Bug 1182 fixed : Language tag missing in confirmation email generation 

-- 2.11.5 : Bug 1195 fixed : Registration displays the good title


***** Plugin history (branch 2.12)*****

-- 2.12.0 : Bug 1206 fixed : All plugin functionnalities work in user's profile page
            Plugin's core code and admin panel refactoring
            Password control and enforcement : A complexity score is computed on user registration. If this score is less than the goal set by admin, the password choosen is rejected.
            Feature 1194 "Ghost Tracker" added : New plugin tab displays users who don't comes back to the gallery since x days. Ability to send email reminders and to delete reminded but "dead" users. It's the reason why this feature is called "Ghost Tracker".

-- 2.12.1 : Rollback on admin panel improvement (it was a bad idea)

-- 2.12.2 : Bug 1221 fixed - Adding of a new funtion to populate the lastvisit table on Ghost Tracker activation
            Bug 1224 fixed - Error in database after plugin activation
            Bug 1225 fixed - "Reminder" status don't change from "false" to "true" after the sent of a reminder email
            Some code beautify (SQL requests and HTML 4 strict for tpl)

-- 2.12.3 : Bug 1226 fixed - "duplicate key error" when lastvisit table is not empty and on using Ghost Tracker init function

-- 2.12.4 : Adding a password field control for SendMail2User - Neighborhood plugin compatibility improvement 
            Bug 1229 fixed - Email was no longer mandatory when plugin was active, even if Piwigo's email madatory option was set. 

-- 2.12.5 : Bug 1233 fixed -  "duplicate key error" when a user wants to register with an existing username. In fact, all standard Piwigo's register controls didn't work when plugin was activated. That fixes this too.
            Adding DE, ES and IT languages. All translations are not finalized and could be improved.
            Adding of description.txt file in language directories.

-- 2.12.6 : Bug 1236 fixed -  Admins was unable to add a new user in the user_list page.
            Beginning of IT translations
            
-- 2.12.7 : Bug 1238 fixed - Simple custom email text wasn't send when Extended Description plugin wasn't set
            Bug 1245 fixed - Semicolons (;) are no longer allowed in text areas (mail info text, ConfirmMail text, reminder text,...). They'll be replaced by dots (.).
            Bug 1248 fixed - Php notice on user registration with a forbidden email domain
            Bug 1250 fixed - Email provider didn't work after the third exclusion in list
            Escaping all special characters typed in login name and recover them


***** Plugin history (branch 2.13)*****
 
-- 2.13.0 : Bug 1246 fixed - Extended Description tags are working again ! Caution : The language used and saved in database is the one configured by default in the visitor's browser and not the language given by Language Switch.
            Evolution 1239 - New option to add a new tab that shows the number of days since their last visit for each registered user.
            Bug 1257 fixed - If email exclusion list begins with a CR-LF, an informative warning message is displayed (I was unable to delete automatically this CR-LF).
            Bug 1259 fixed - PHP notice on user addition by admin in user_list page.
            Bug 1260 fixed - Username case sensitivity is now fully functionnal in all users entries (user registration and admin panel)
            Evolution 1273 - Adding of reminder field in advanced user management tab. This allows to see if a reminder have already been send.
            Evolution 1292 - Adding of navigation bar in tabs where users are listed (when more than 1 page is needed to display users).
            Code refactory and improvements.
            Translations improvements.

-- 2.13.1 : Bug 1302 fixed - Re-coded double email check on registration.
            Bug 1304 fixed - Adding of plugin version in plugin admin panel title.

-- 2.13.2 : Bug 1308 fixed - Reminder emails have the good translated subject.

-- 2.13.3 : Bug 1309 fixed - Forbidden characters in login name work fine again.
            Bug 1340 fixed - Explanation improvement for option "Nickname is mandatory for comments" 
            Bug 1342 fixed - Calculation between last visit and today is ok and displays the good color in user list.
            Italian language improvement (thx to Rio)

*/
?>