<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['UserAdvManager']);


/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Anmeldedatum';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, finden Sie hier Ihre Informationen um die Galerie Login:';
$lang['UAM_User: %s'] = 'Benutzer : %s';
$lang['UAM_Password: %s'] = 'Passwort: %s';
$lang['UAM_Link: %s'] = 'Klicken Sie bitte auf diesen Link bestätigen Sie Ihre Anmeldung: %s';


/* Email confirmation page */
$lang['UAM_title_confirm_mail'] = 'Überprüfen Sie Ihre Registrierung';
$lang['UAM_confirm_mail_page_title'] = 'Überprüfen Sie Ihre Registrierung';
$lang['confirm_mail_ok'] = '<br><br><br>Wir danken Ihnen, Ihre E-Mail-Adresse bestätigt haben und Ihre Anmeldung auf der Galerie. Viel Spaß!<br><br><br><br>';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Audit OK';
$lang['UAM_Err_audit_username_char'] = '<b>Dieses Konto verwendet eine oder mehrere der verbotenen Zeichen:</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Dieses Konto verwendet eine E-Mail-Anbieter sind untersagt:</b> ';
$lang['UAM_Err_audit_advise'] = '<b>Sie müssen Korrekturen an mit neuen Regeln die Sie aktiviert haben, nachzukommen durchzuführen.<br>Verwenden Sie ein Datenbank-Management-Dienstprogramm, um Benutzer-Accounts direkt in der Tabelle richtig ###_USERS';
$lang['UAM_reg_err_login2'] = 'Benutzername muss nicht die folgenden Zeichen übereinstimmen: ';
$lang['UAM_reg_err_login5'] = 'Ihre E-Mail-Anbieter für die Registrierung ist verboten. Gebannten E-Mail-Anbieter sind: ';
$lang['UAM_empty_pwd'] = '[leeren Passwort]';
$lang['UAM_no_update_pwd'] = '[Profil aktualisiert ohne Passwort geändert]';
$lang['UAM_No_validation_for_Guest'] = 'Der &quot;Gast&quot;-Konto ist nicht Gegenstand der Validierung';
$lang['UAM_No_validation_for_default_user'] = 'Der Standard-Konto ist nicht Gegenstand der Validierung';
$lang['UAM_No_validation_for_Webmaster'] = 'Der &quot;Webmaster&quot;-Konto ist nicht Gegenstand der Validierung';
$lang['UAM_No_validation_for_your_account'] = 'Ihre personnal admin-Konto ist nicht Gegenstand der Validierung';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d Nachricht mit wichtigen Erneuerung gesendet wurde';
$lang['UAM_%d_Mails_With_Key'] = '%d Nachrichten mit den wichtigsten Erneuerung geschickt wurden';
$lang['UAM_%d_Reminder_Sent'] = '%d Erinnerung Nachricht wurde gesendet';
$lang['UAM_%d_Reminders_Sent'] = '%d Erinnerung Nachrichten wurden gesendet';
$lang['UAM_%d_Validated_User'] = '%d Benutzer manuell validiert';
$lang['UAM_%d_Validated_Users'] = '%d Benutzer manuell validiert';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Löschen';
$lang['UAM_Mail_without_key'] = 'Erinnerung ohne Schlüssel';
$lang['UAM_Mail_with_key'] = 'Erinnerung mit Schlüssel';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Ergebnis Berechnung';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'Geist Tracker';
$lang['UAM_Reminder'] = 'E-Mail-Erinnerung';
$lang['UAM_Reminder_Sent_OK'] = 'JA';
$lang['UAM_Reminder_Sent_NOK'] = 'NEIN';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Konfiguration gespeichert.';
$lang['UAM_reg_err_login3'] = 'Sicherheit: Das Passwort ist obligatorisch !';
$lang['UAM_reg_err_login4_%s'] = 'Sicherheit: Ein Steuer-System berechnet eine Partitur von der gewählten Passwörter Komplexität. Die Komplexität des Passworts zu niedrig ist (score = %s). Bitte wählen Sie ein neues Passwort zu mehr Sicherheit, indem Sie folgende Regeln:<br>
- Verwenden Sie Buchstaben und Zahlen<br>
- Verwenden Sie Groß-und Kleinschreibung<br>
- Erhöhung ihrer Länge (Anzahl Zeichen)<br>
Die minimale Passwörter der Gäste ist: ';
$lang['UAM_No_reminder_for_Guest'] = 'Der &quot;Gast&quot;-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['UAM_No_reminder_for_default_user'] = 'Der Standard-Account ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['UAM_No_reminder_for_Webmaster'] = 'Der &quot;Webmaster&quot;-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
$lang['UAM_No_reminder_for_your_account'] = 'Sie personnal Admin-Konto ist nicht zu empfangen Mahnungen Geist Tracker';
/* Action button names */
$lang['UAM_audit'] = 'Audit-Einstellungen';
$lang['UAM_submit'] = 'Einstellungen speichern';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = 'Geist Tracker neu gehstellt !';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Geist Tracker neu stellen';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = 'Warnung! Sie haben eine neue Zeile eingetragen (CR-LF) an den Anfang der E-Mail-Ausschluss-Liste (in rot siehe unten). Obwohl diese neue Linie nicht sichtbar ist, ist es noch vorhanden und kann zu Funktionsstörungen des Plugins verursachen. Bitte, re-Typ in Ihrem Ausschluss-Liste in einer Weise, die nicht durch einen Zeilenumbruch beginnen wird.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UAM_UserList_Title'] = 'Monitoring registrierte Benutzer';
$lang['UAM_Nb_Days'] = 'Anzahl der Tage seit<br>dem letzten Besuch';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Version : ';
$lang['UAM_SubTitle1'] = 'Plugin-Konfiguration';
$lang['UAM_Tab_Global'] = 'Konfiguration';
$lang['UAM_Title1'] = 'Einstellen Einschränkungen für Registrierungen';
$lang['UAM_Title2'] = 'Einstellen Bestätigungen und Validierungen der Registrierung';
$lang['UAM_Title3'] = 'Einstellen der Registrierung durchgeführt und andere Optionen';
$lang['UAM_Title4'] = 'Tipps und Beispiele für die Benutzung';
$lang['UAM_No_Casse'] = 'Benutzernamen: Groß-und Kleinschreibung';
$lang['UAM_Username_Char'] = ' Benutzernamen: Ausschluss von Zeichen';
$lang['UAM_Username_Char_true'] = ' Zeichen Verboten:<br>(Verwenden Sie ein Komma, um ein Zeichen getrennt)<br><br>';
$lang['UAM_Username_Char_false'] = ' Erlauben Sie alle (Standard)';
$lang['UAM_Password_Enforced'] = 'Stärkung des Sicherheitsniveaus von Kennwörtern';
$lang['UAM_AdminPassword_Enforced'] = 'Die Anwendung für Administratoren';
$lang['UAM_PasswordTest'] = 'Passwort testen : ';
$lang['UAM_ScoreTest'] = 'Ergebnis : ';
$lang['UAM_MailExclusion'] = 'E-Mail-Domänen Ausgrenzung';
$lang['UAM_MailExclusion_true'] = ' Schließen Sie die folgenden E-Mail-Domänen:<br>(Verwenden Sie ein Komma zu trennen jede Domain)';

$lang['UAM_Mail_Info'] = 'Informationen E-Mail an Benutzer:';
$lang['UAM_MailInfo_Text'] = ' Anpassen der Informationen per E-Mail:';
$lang['UAM_Confirm_Mail'] = 'Bestätigung der Anmeldung:';
$lang['UAM_ConfirmMail_Text'] = ' Anpassen der E-Mail-Bestätigung';
$lang['UAM_Confirm_grpstat_notice'] = 'Achtung: Es ist ratsam, entweder die Gruppe oder die Validierung Satzung und nicht beide gleichzeitig.';
$lang['UAM_Confirm_Group'] = 'Validation Gruppen<br>(verlassen ------- zum nicht zu beeinträchtigen Gruppe)';
$lang['UAM_Confirm_Status'] = 'Validation Satzung<br>(verlassen ------- ein Versäumnis des Piwigo zu halten)';
$lang['UAM_No_Confirm_Group'] = 'Gruppe für Benutzer, die nicht validiert ihrer Eintragung<br>';
$lang['UAM_Validated_Group'] = 'Gruppe für Benutzer, die ihre Anmeldung bestätigt<br>';
$lang['UAM_No_Confirm_Status'] = 'Status für Benutzer, die nicht validiert ihrer Eintragung<br>';
$lang['UAM_Validated_Status'] = 'Status für Benutzer, die ihre Anmeldung bestätigt<br>';
$lang['UAM_ValidationLimit_Info'] = 'Anmeldeschluss Validierung beschränkt';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Aktivieren. Anzahl der Tage bis zum Ablauf: ';
$lang['UAM_ConfirmMail_Remail'] = 'Erinnern Unvalidierte User';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Anpassen der Erinnerungs-Nachricht <b><u>mit</u></b> neue Regeneration der Schlüssel Validierung.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Anpassen der Erinnerungs-Nachricht <b><u>ohne</u></b> neue Regeneration der Schlüssel Validierung.';

$lang['UAM_GhostTracker'] = 'Geist Besucher-Management (Geist Tracker)';
$lang['UAM_GhostTracker_true'] = ' Aktivieren. Maximale Zeit in Tagen zwischen zwei Besuche: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Anpassen der Geist Tracker Erinnerungs-Nachricht';
$lang['UAM_LastVisit'] = ' Tracking registrierte Benutzer';

$lang['UAM_Tab_UserManager'] = 'Tracking Validierungen';

/* UserManager Tab */
$lang['UAM_SubTitle3'] = 'Tracking Validierungen';
$lang['UAM_UserManager_Title'] = 'Tracking Validierungen';
/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'Geist Tracker';
$lang['UAM_GT_Init'] = 'Initializing Ghost Tracker';
$lang['UAM_GhostTracker_Title'] = 'Geist Besucher-Management';
$lang['UAM_GhostTracker_Init'] = 'Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, müssen Sie initialisieren, oder setzen Sie den Geist Tracker reaktiviert. Dieser Vorgang ist nur nach Aktivierung oder Reaktivierung von der Möglichkeit gemacht. Bitte klicken Sie <u>einmal</u> die Reset-Taste unten.';
/* UserList Tab */
$lang['UAM_SubTitle5'] = 'Tracking-Besucher';
$lang['UAM_Tab_UserList'] = 'Tracking-Besucher';
/* Mailing */
$lang['UAM_Add of %s'] = 'Profil erstellt für %s';
$lang['UAM_Update of %s'] = 'Profil aktualisieren %s';
/* Email confirmation page */
$lang['confirm_mail_bad'] = '<br><br><br>Ihre Aktivierungs-Schlüssel ist falsch oder abgelaufen oder Sie haben bereits validiert Ihrem Konto haben, wenden Sie sich bitte an den Webmaster, um dieses Problem zu beheben.<br><br><br><br>';
/* Mailing */
$lang['UAM_Ghost_reminder_of_%s'] = '%s, Dies ist eine Erinnerung per E-Mail';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, Ihre Validierungs-Zahl wurde erneuert';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, Ihre Validierung Schlüssel abläuft';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'Diese Seite ist nur verfügbar, wenn &quot;Geist Tracker&quot; aktiv &quot;Einstellen der Registrierung durchgeführt und andere Optionen&quot;.';
$lang['UAM_Err_Userlist_Settings'] = 'Diese Seite ist nur verfügbar, wenn &quot;Monitoring registrierte Benutzer&quot; ist aktiv in der &quot;Einstellung der Registrierung durchgeführt und andere Optionen&quot;';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Bestätigung der Anmeldung für Administratoren';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Text der Bestätigungs-Seite - Bestätigung akzeptiert';
$lang['UAM_confirmmail_custom_Txt2'] = 'Text der Bestätigungs-Seite - Bestätigung abgelehnt';
$lang['UAM_LastVisit_Date'] = 'Letzter Besuch';
$lang['UAM_Nb_Days'] = 'Differenz in Tagen';
$lang['UAM_Err_UserManager_Settings'] = 'Diese Seite ist nur verfügbar, wenn "Bestätigung der Anmeldung" aktiv ist und wenn eine Gruppe von nicht validierte Besuchern wird in "Einstellen Bestätigungen und Validierungen der Registrierung" konfiguriert.';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'Die offizielle Unterstützung für dieses Plugin ist nur auf diesem Diskussionsforum von Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Englisch-Forum - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
Ebenfalls erhältlich, das Projekt Bugtracker: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Force_Validation'] = 'Handbuch Validierung';
$lang['UAM_Confirm_Mail_true'] = ' Aktivieren - Validation von Benutzer';
$lang['UAM_Confirm_Mail_local'] = ' Aktivieren - Validation von admin (keine Validierung Key gesendet)';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_Expired_Group'] = '<b>Gruppe</b> für Benutzer-Registrierung abgelaufen<br>';
$lang['UAM_Expired_Status'] = '<b>Status</b> für Benutzer-Registrierung abgelaufen<br>';
$lang['UAM_GTAuto'] = 'Automatische Verwaltung von Geist Benutzern';
$lang['UAM_GTAutoDel'] = 'Automatisches Löschen von Konten';
$lang['UAM_Deleted_Account_Redirection_Page'] = 'Zugriff verweigert - Account zerstört!';
$lang['UAM_title_redir_page'] = 'Zugriff verweigert sich für ein Konto zerstört!';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Konsistenz-Fehler in der Konfiguration gewählt:<br><br>
"Einstellen der Registrierung durchgeführt und andere Optionen > Geist Besucher-Management (Geist Tracker) > Automatische Verwaltung von Geist Benutzern > Automatisches Versenden einer E-Mail beim Wechsel Gruppe / Status" kann nicht aktiviert werden, wenn "Einstellen Bestätigungen und Validierungen der Registrierung > Bestätigung der Anmeldung - Validation von Benutzer" ist zunächst nicht aktiviert.<br><br>
Um die Kohärenz, die Option "Automatisches Versenden einer E-Mail beim Wechsel Gruppe / Status" wurde automatisch "deaktiviert" neu positioniert.<br><br>';
$lang['UAM_Demotion of %s'] = 'Herabstufung von %s';
$lang['UAM_AdminValidationMail_Text'] = 'Mitteilung der manuellen Registrierung Validierung';
$lang['UAM_Validation of %s'] = 'Validierung von %s';
// --------- End: New or revised $lang ---- from version 2.16.0

// --------- Starting below: New or revised $lang ---- from version 2.20.0
$lang['UAM_Disable'] = ' Deaktivieren (Standard)';
$lang['UAM_Enable'] = ' Aktivieren ';
$lang['UAM_Stuffs_Title'] = 'UAM-Modul';
$lang['UAM_Stuffs'] = 'PWG Stuffs Modul';
// --------- End: New or revised $lang ---- from version 2.20.0


// --------- Starting below: New or revised $lang ---- from version 2.20.3
$lang['UAM_DumpTxt'] = 'Sichern Sie Ihre Konfiguration';
$lang['UAM_Dump_Download'] = 'Zum Download der Backup-Datei, überprüfen Sie bitte dieses Feld:';
$lang['UAM_Save'] = 'Starten der Backup';
$lang['UAM_Dump_OK'] = 'Backup-Datei erfolgreich erstellt';
$lang['UAM_Dump_NOK'] = 'Fehler: Backup-Datei kann nicht erstellt werden !';
// --------- End: New or revised $lang ---- from version 2.20.3


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePassw'] = 'Passwort im Klartext in der Informations-E-Mail';
// --------- End: New or revised $lang ---- from version 2.20.4


// --------- Starting below: New or revised $lang ---- from version 2.30.2
$lang['UAM_RedirToProfile'] = 'Umleitung auf Benutzerdaten Seite';
$lang['UAM_GTAutoGp'] = 'Automatischer Wechsel der Gruppe / Status / Vertraulichkeit Grad';
$lang['UAM_GTAutoMail'] = 'Automatisches Versenden einer E-Mail beim Wechsel Gruppe / Status / Vertraulichkeit Grad';
// --------- End: New or revised $lang ---- from version 2.30.2
$lang['UAM_Tips1_txt'] = '          <ul>
            <li>
            Goals: Inform the visitor that the registration is awaiting approval by displaying a personal block on the home page of the gallery, and this, as registration is not approved.
            <br><br>
            <b>Recall: In standard operation, the "Guest" only sees the public categories, without information message.</b>
            </li><br><br>
            <li>
Prerequisite:<br>
- A gallery with all or some private categories, visible only by registered users<br>
- At least 2 following Piwigo\'s users groups: "Waiting," without permission on private categories, and "Confirmed" with all the permissions on the private categories<br>
- UAM plugin<br>
- PWG Stuffs plugin, for adding a special UAM module<br>
- Optionally, the plugin Extended Description to support multi-languages<br>
            </li><br><br>
            <li>
Stages:<br><br>
A. In plugin UAM:
              <ol>
                <li>Enable registration confirmation</li>
                <li>Enable PWG Stuffs module option</li>
                <li>Enter text for additional explanation which will be attached to mail registration confirmation. If the plugin Extended Description is activated, the language tags can be used</li>
                <li>Select the "Waiting" group under "For users who have not confirmed their registration"</li>
                <li>Select the "Confirmed" group under "For users who have confirmed their registration"</li>
                <li>Save the plugin configuration</li>
              </ol>
<br>
B. In plugin PWG Stuffs :
              <ol>
                <li>Go to tab "Add a new module"</li>
                <li>Choose "UAM Module"</li>
                <li>Configure the module, indicating the title (eg "Registration pending confirmation") and its description, and only check "Waiting" in the list of groups allowed</li>
                <li>Complete content of the module with the message information to be displayed to users not confirmed. As UAM, languages markup may be used if the plugin is enabled Extended Description</li>
                <li>Check "Display the module on the homepage of the site"</li>
                <li>Validate the configuration of the module</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_Tips2_txt'] = '          <ul>
            <li>
            Goals: Inform the visitor that the registration is awaiting confirmation by posting an additional page replacing the standard index page gallery at each of these connections, and this, as registration is not approved.
            <br><br>
            Advantages over the method with PWG_Stuffs: Allow formatting information and displaying the information immediately upon registration of visitors.
            </li><br><br>
            <li>
Prerequisite:<br>
- A gallery with all or some private categories, visible only by registered users<br>
- At least 2 following Piwigo\'s users groups: "Waiting," without permission on private categories, and "Confirmed" with all the permissions on the private categories<br>
- UAM plugin<br>
- Additional Pages plugin for adding and managing an additional page to replace the default index page of the gallery<br>
- Optionally, the plugin Extended Description to support multi-languages<br>
            </li><br><br>
            <li>
Stages:<br><br>
A. In plugin UAM:
              <ol>
                <li>Enable registration confirmation</li>
                <li>Enter text for additional explanation which will be attached to mail registration confirmation. If the plugin Extended Description is activated, the language tags can be used</li>
                <li>Select the "Waiting" group under "For users who have not confirmed their registration"</li>
                <li>Select the "Confirmed" group under "For users who have confirmed their registration"</li>
                <li>Save the plugin configuration</li>
              </ol>
<br>
B. In plugin Additional Pages:<br>
                <b>NOTE : The management of access rights for groups on Additional Pages must be turned on (see plugin configuration settings).</b>
                <br>
              <ol>
                <li>Add a new page with at least the following parameters:</li>
                <ul>
                  <li>Page name: The name you wish to give to the additional page (ie: Registration not confirmed)</li>
                  <li>Set as homepage checked</li>
                  <li>Groups allowed: Check the box corresponding to the group "Waiting" configured in UAM</li>
                  <li>Content: The text you want to use for visitors.</li>
                </ul>
                <br>
                <li>And that\'s it! Only visitors registered and whose registration has not been confirmed will see this additional index page.</li>
              </ol>
            </li>
          </ul>';
?>