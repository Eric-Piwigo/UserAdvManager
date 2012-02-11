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
$lang['UAM_Username_Char'] = 'Benutzernamen: Ausschluss von Zeichen';
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
$lang['UAM_GT_Init'] = 'Initialisieren Geist Tracker';
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
            Tore: Informieren Sie die Besucher, dass die Registrierung wartet auf die Genehmigung durch die Anzeige eines persönlichen Block auf der Homepage der Galerie, und dies, da eine Registrierung ist nicht zugelassen.
            <br><br>
            <b>Erinnern: Im Standard-Modus, der "Gast" sieht nur die öffentlichen Kategorien, ohne Informationen Nachricht.</b>
            </li><br><br>
            <li>
Voraussetzung:<br>
- Eine Galerie mit allen oder einigen privaten Kategorien, sichtbar nur von registrierten Benutzern<br>
- Mindestens 2 nach Piwigo der Anwender Gruppen: "Warten", ohne Erlaubnis auf privatem Kategorien und "Bestätigt" mit alle den Berechtigungen für die private Kategorien<br>
- UAM plugin<br>
- PWG Stuffs plugin, zum Addieren eines speziellen UAM-Modul<br>
- Optional für das Hinzufügen, das Plugin Extended Description zu Multi-Sprachen unterstützen<br>
            </li><br><br>
            <li>
Schritte:<br><br>
A. Im plugin UAM:
              <ol>
                <li>Aktivieren Sie Anmeldebestätigung</li>
                <li>Aktivieren PWG Stuffs Modul Option</li>
                <li>Geben Sie den Text für zusätzliche Erklärung, die auf Mail-Registrierung eine Bestätigung beigefügt werden. Wenn das Plugin Extended Description aktiviert ist, können die Sprach-Tags verwendet werden</li>
                <li>Wählen Sie das "Warten"-Gruppe unter "Für Anwender, die nicht ihre Anmeldung bestätigt haben"</li>
                <li>Wählen Sie den "Bestätigt"-Gruppe unter "Für Anwender, die ihre Anmeldung bestätigt haben"</li>
                <li>Speichern Sie das Plugin-Konfiguration</li>
              </ol>
<br>
B. Im plugin PWG Stuffs :
              <ol>
                <li>Auf der Registerkarte "Hinzufügen eines neuen Moduls"</li>
                <li>Wählen Sie "UAM-Modul"</li>
                <li>Konfigurieren Sie das Modul unter Angabe des Titels (z. B.: "Anmeldung bis zur Bestätigung") und ihre Beschreibung, und nur überprüfen, "Waiting" in der Liste der Gruppen erlaubt</li>
                <li>Kompletten Inhalt des Moduls mit der Meldung Informationen zu den Benutzern nicht bestätigt angezeigt werden. Als UAM, kann Markup Sprachen verwendet werden, wenn das Plugin aktiviert ist Extended Description werden</li>
                <li>Aktivieren Sie "Zeigen Sie das Modul auf der Homepage der Website"</li>
                <li>Bestätigen Sie die Konfiguration des Moduls</li>
              </ol>
            </li>
          </ul>';
$lang['UAM_Tips2_txt'] = '          <ul>
            <li>
           Tore: Informieren Sie die Besucher, dass die Registrierung auf eine Bestätigung durch Entsendung einer zusätzlichen Seite anstelle der Standard-Index-Seite Galerie an jeder dieser Anschlüsse, und dies, da eine Registrierung ist nicht zugelassen.
            <br><br>
            Vorteile gegenüber dem Verfahren mit PWG_Stuffs: Lassen Sie die Formatierung und Darstellung von Informationen sofort nach der Registrierung der Besucher.
            </li><br><br>
            <li>
Voraussetzung:<br>
- Eine Galerie mit allen oder einigen privaten Kategorien, sichtbar nur von registrierten Benutzern<br>
- Mindestens 2 nach Piwigo der Anwender Gruppen: "Warten", ohne Erlaubnis auf privatem Kategorien und "Bestätigt" mit alle den Berechtigungen für die private Kategorien<br>
- UAM plugin<br>
- "Additional Pages"-Plugin für das Hinzufügen und Verwalten einer zusätzlichen Seite, um die Standard-Index-Seite der Galerie ersetzen<br>
- Optional für das Hinzufügen, das Plugin Extended Description zu Multi-Sprachen unterstützen<br>
            </li><br><br>
            <li>
Schritte:<br><br>
A. Im plugin UAM:
              <ol>
                <li>Aktivieren Sie Anmeldebestätigung</li>
                <li>Geben Sie den Text für zusätzliche Erklärung, die auf Mail-Registrierung eine Bestätigung beigefügt werden. Wenn das Plugin Extended Description aktiviert ist, können die Sprach-Tags verwendet werden</li>
                <li>Wählen Sie das "Warten"-Gruppe unter "Für Anwender, die nicht ihre Anmeldung bestätigt haben"</li>
                <li>Wählen Sie den "Bestätigt"-Gruppe unter "Für Anwender, die ihre Anmeldung bestätigt haben"</li>
                <li>Speichern Sie das Plugin-Konfiguration</li>
              </ol>
<br>
B. Im plugin Additional Pages:<br>
                <b>HINWEIS: Die Verwaltung von Zugriffsrechten für Gruppen auf zusätzlichen Seiten muss eingeschaltet sein (siehe Plugin Konfigurationseinstellungen).</b>
                <br>
              <ol>
                <li>Fügen Sie eine neue Seite mit mindestens den folgenden Parametern:</li>
                <ul>
                  <li>Page name: Der Name, den Sie möchten, auf die zusätzliche Seite geben (z. B.: Registrierung nicht bestätigt)</li>
                  <li>Als Homepage überprüft</li>
                  <li>Gruppen erlaubt: Aktivieren Sie das Kästchen, um der Gruppe "Warten" in UAM konfiguriert</li>
                  <li>Inhalt: Der Text, den Sie für die Besucher zu nutzen.</li>
                </ul>
                <br>
                <li>Und das ist es! Nur registrierte Besucher und deren Eintragung wurde nicht bestätigt werden sehen, diese zusätzliche Index-Seite.</li>
              </ol>
            </li>
          </ul>';
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
$lang['UAM %d user pwdreseted'] = 'Passwort erneuern für %d Benutzer erforderlich';
$lang['UAM %d users pwdreseted'] = 'Passwort erneuern für %d Benutzer erforderlich';
$lang['UAM_Admins cannot be pwdreset'] = 'Passwort erneuern kann nicht f';
$lang['UAM_Bad_version_backup'] = 'Die Version der Backup-Datei entspricht nicht der Version des Plugins! Die Restaurierung wurde nicht durchgef';
$lang['UAM_Confirm_Level'] = 'Datenschutz Niveau<br>(------- verlassen, um die Piwigo der Standard zu halten)';
$lang['UAM_Default user cannot be pwgreset'] = 'Passwort erneuern kann nicht für Standard-Benutzer eingestellt werden!';
$lang['UAM_Default_AdminValidation_Txt'] = 'Hallo [username]! Danke für die Registrierung und willkommen bei [mygallery].

Ihr Konto wurde manuell durch den Webmaster von [mygallery] bestätigt. Sie können sich jetzt anmelden unter [myurl] und nehmen alle erforderlichen Änderungen an Ihrem Profil.';
$lang['UAM_Default_CfmMail_Custom_Txt1'] = 'Willkommen [username]! Sie haben best';
$lang['UAM_Default_CfmMail_Custom_Txt2'] = 'Ihr Aktivierungscode ist falsch oder abgelaufen oder haben Sie schon Ihren Account bestätigt, kontaktieren Sie bitte den Webmaster, um dieses Problem zu beheben.';
$lang['UAM_Default_CfmMail_Remail_Txt1'] = 'Hallo [username].

Dies ist eine Erinnerung Nachricht, weil Sie auf unserer Galerie registriert [mygallery] aber nicht bestätigen Ihre Anmeldung und Ihre Bestätigung Schlüssel abgelaufen ist. Um noch können Sie in unserer Galerie zuzugreifen, hat Ihre Bestätigung Zeitraum wurden zurückgesetzt. Sie haben wieder x Tage, um Ihre Registrierung zu bestätigen.

Hinweis: Nach Ablauf dieses Zeitraums wird Ihr Konto dauerhaft gelöscht.';
$lang['UAM_Default_CfmMail_Remail_Txt2'] = 'Hallo [username].

Dies ist eine Erinnerung Nachricht, weil Sie auf unserer Galerie registriert [mygallery] aber nicht bestätigen Ihre Anmeldung und Ihre Bestätigung Schlüssel abläuft. Damit Sie unsere Galerie zuzugreifen, müssen Sie x Tage, um Ihre Anmeldung durch Klick auf den Link in der Nachricht, die Sie erhalten haben, sollten Sie bei der Registrierung zu bestätigen.

Hinweis: Nach Ablauf dieses Zeitraums wird Ihr Konto dauerhaft gelöscht.';
$lang['UAM_Default_ConfirmMail_Txt'] = 'Hallo [username]! Wir danken Ihnen, auf [mygallery] haben registrieren lassen.

Um den Vorgang abzuschlie';
$lang['UAM_Default_GhstDeletion_Txt'] = 'Leider [username], Ihr Konto wurde aufgrund einer zu langen Zeit seit Ihrem letzten Besuch am [mygallery] weitergegeben gel';
$lang['UAM_Default_GhstDemotion_Txt'] = 'Leider [username], Ihr Konto wurde aufgrund einer zu langen Zeit seit Ihrem letzten Besuch am [mygallery] weitergegeben wurde verworfen. Bitte benutzen Sie den folgenden Link, um Ihr Konto zu bestätigen:';
$lang['UAM_Default_GhstReminder_Txt'] = 'Hallo [username].

Dies ist eine Erinnerung, weil eine sehr lange Zeit vergangen, seit Ihrem letzten Besuch auf unserer Galerie [mygallery]. Wenn Sie nicht mehr tun wollen Ihren Zugang Konto verwenden, informieren Sie uns bitte durch eine Beantwortung dieser E-Mail. Ihr Konto wird gel';
$lang['UAM_Default_InfoMail_Txt'] = 'Hallo [username]! Wir danken Ihnen, auf [mygallery] haben registrieren lassen.

Bitte, finden Sie unten Ihre Verbindung Informationen.';
$lang['UAM_Default_PwdRequest_Txt'] = 'Sie haben ein Passwort-Reset auf unserer Galerie anzubieten. Bitte unten Ihre neue Verbindung Einstellungen zu finden.';
$lang['UAM_Default_RejectConnexion_Txt'] = 'Leider müssen Sie nicht Ihre Anmeldung bestätigt noch haben, so können Sie nicht schließen Sie die Galerie jetzt. Bitte überprüfen Sie Ihre E-Mail-Box. Sie sollten eine E-Mail durch die Galerie geschickt, mit einem Link zu Ihrer Bestätigung durchzuführen. Wenn nicht, wenden Sie sich bitte an den Webmaster.';
$lang['UAM_Default_ValidationTimeout_Txt'] = 'Sorry, dein Konto wurde gelöscht, weil Sie nicht Ihre Anmeldung im gewünschten Zeitraum ([Kdays] Tage) bestätigt haben. Bitte versuchen Registrierung mit einer gültigen und nicht blockiert E-Mail-Konto.';
$lang['UAM_Error_Using_illegal_flag'] = 'Syntax-Fehler! Die [Kdays] AutoText Flagge wird als "Anmeldeschluss Bestätigung begrenzt"-Option verwendet wurde nicht aktiviert. Bitte aktivieren Sie die Option, oder korrigieren Sie die Text-Feld rot eingefärbt.';
$lang['UAM_Error_Using_illegal_Kdays'] = 'Mit dem [Kdays]-Tag ist nur zulässig, wenn die Frist für die Anmeldebestätigung begrenzt aktiv ist. Lesen Sie das Textfeld in rot, um das Problem zu beheben.';
$lang['UAM_Expired_Level'] = '<b>Datenschutz Niveau</b> für Benutzer-Registrierung abgelaufen<br>';
$lang['UAM_Generic cannot be pwdreset'] = 'Passwort erneuern kann nicht f';
$lang['UAM_Guest cannot be pwdreset'] = 'Passwort erneuern kann nicht für die Gäste gestellt werden!';
$lang['UAM_MailExclusion_No'] = 'E-Mail-Domänen Ausgrenzung - Nicht verfügbar, da E-Mails nicht zwingend notwendig sind für die Registrierung!';
$lang['UAM_MiscOptions'] = 'Andere Verschiedene Optionen';
$lang['UAM_NewFeature'] = 'Neue Funktion!';
$lang['UAM_No_Backup_File'] = 'Kein Backup-Datei verf';
$lang['UAM_No_Ghosts'] = 'Keine Geister Besucher im Moment';
$lang['UAM_No_Userlist'] = 'Keine Besucher Liste im Moment';
$lang['UAM_No_Usermanager'] = 'Keine unbestätigten registriert sich vor Liste';
$lang['UAM_No_Valid_Level'] = 'Datenschutz Niveau für Benutzer, die nicht ihre Registrierung bestätigt haben<br>';
$lang['UAM_Password reset selected users'] = 'Passwort anfordern Erneuerung für ausgewählte Benutzer';
$lang['UAM_Password_Reset_Msg'] = 'Bitte, ändern Sie Ihr Passwort!';
$lang['UAM_PwdReset'] = 'Passwort erneuern';
$lang['UAM_PwdReset_Done'] = 'Passwort erneuert';
$lang['UAM_PwdReset_NA'] = 'Original-Passwort';
$lang['UAM_PwdReset_Todo'] = 'Passwort erneuert werden';
$lang['UAM_RejectConnexion'] = 'Ablehnen Benutzer-Verbindung, bis die Registrierung bestätigt wird,';
$lang['UAM_RejectConnexion_Custom_Txt'] = 'Passen Ablehnung Text';
$lang['UAM_Reject_Page_Title'] = 'Connexion nicht erlaubt!';
$lang['UAM_Restoration_NOK'] = 'Fehler beim Wiederherstellen der Konfiguration. Bitte pr';
$lang['UAM_Restoration_OK'] = 'Wiederherstellen der Konfiguration wurde erfolgreich abgeschlossen! Bitte laden UAM-Administration, um die wiederhergestellten Einstellungen anzuzeigen.';
$lang['UAM_Restore_File'] = 'Konfiguration wiederherstellen';
$lang['UAM_Stuffs_Desc'] = 'Fügt einen Informationsblock für unbestätigte Benutzer';
$lang['UAM_Tips1'] = 'Informationen von unbestätigten Registrierung mit UAM und PWG_Stuffs';
$lang['UAM_Tips2'] = 'Informationen von unbestätigten Registrierung mit UAM und zusätzliche Seiten';
$lang['UAM_Title5'] = 'Verschiedene Optionen';
$lang['UAM_USRAuto'] = 'Automatische Verwaltung von Benutzern unbestätigte';
$lang['UAM_Valid_Level'] = 'Datenschutz Niveau für Anwender, die ihre Anmeldung bestätigt haben<br>';
$lang['UAM_Webmaster cannot be pwdreset'] = 'Passwort erneuern können nicht für den Webmaster eingestellt werden!';
$lang['UAM_You cannot pwdreset your account'] = 'Passwort erneuern können nicht auf eigene Rechnung eingestellt werden!';
$lang['UAM_You need to confirm pwdreset'] = 'Sie müssen bestätigen, Passwort erneuern (check box)!';
?>