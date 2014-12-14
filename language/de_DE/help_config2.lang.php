<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Informationen E-Mail generation<br>
- Registrieren und Validierung E-Mail generation<br>
- Gruppen oder Status automatisch Beitritt<br>
- Anmeldeschluss Validierung<br>
- Reminder per E-Mail generation<br>
...
';
$lang['UAM_confirmmailTitle_d'] = 'Diese Option erm�glicht es einem Benutzer, entweder best�tigen Anmeldung durch Klick auf einen Link in einer E-Mail bei der Registrierung oder den Administrator gesendet, um manuell aktivieren Sie die Registrierung erhalten haben.<br><br>
Im ersten Fall wird die E-Mail von einem anpassbaren Teil zusammengesetzt, um ein wenig Begr��ung und einem festen Teil mit dem Aktivierungs-Link, die von einem zuf�lligen Schl�ssel, die m�glicherweise durch den &quot;Tracking Best�tigungen&quot;-Reiter k�nnen sich regenerieren erzeugt wird, einzuf�hren.<br><br>
Im zweiten Fall, <b><u>gibt es keine Best�tigung Schl�ssel per E-Mail!</u></b>. Besucher m�ssen warten, bis ein Administrator best�tigen sie sich in &quot;Best�tigung Tracking&quot;-Registerkarte. Es ist recommanded des Piwigo die Option &quot;E-Mail-Admins, wenn ein neuer Benutzer registriert&quot; aktivieren (siehe Konfigurationsoptionen in der Piwigo) und die &quot;Information E-Mail an Benutzer&quot; verwenden, um neue Register zu warnen, sich auf ihre Freischaltung warten.
<br>
<b style=&quot;color: red;&quot;>NB: Die Optionen &quot;Deadline zur Best�tigung der Registrierung begrenzt&quot; und &quot;Remind unbest�tigte Benutzer&quot; m�ssen gesetzt werden ausgeschaltet, wenn der Admin manuelle Best�tigung aktiviert ist.</b>
<br><br>
Diese Option wird in der Regel mit der automatischen Zuordnung von Gruppen-und / oder Satzung verwendet. Zum Beispiel wird ein Benutzer, der nicht ihrer Registrierung hat best�tigt, in einer bestimmten Gruppe von Benutzern (mit oder ohne Einschr�nkungen auf der Galerie) eingestellt werden, w�hrend ein Benutzer, der seine Anmeldung best�tigt in einem &quot;normalen&quot; Gruppe festgesetzt werden.';
$lang['UAM_StuffsTitle_d'] = 'Dies erm�glicht eine zus�tzliche UAM-Block in PWG Stuffs Plugin (wenn installiert) um Ihre Besucher die nicht validiert hat ihre Registrierung �ber ihren Zustand informieren.
<br><br>
Bitte beachten Sie die <b>Tipps und Beispiele</b> am unteren Ende dieser Seite f�r Details.';
$lang['UAM_adminconfmailTitle_d'] = 'Sie k&ouml;nnen diese Validierung deaktivieren nur f&uuml;r Benutzer-Accounts durch den Administrator &uuml;ber Piwigo\'s Benutzer-Management-Schnittstelle geschaffen.<br><br>
Bei Aktivierung dieser Option, E-Mail-Best&auml;tigung f&uuml;r die Registrierung wird f&uuml;r jeden Benutzer vom Administrator erstellt wurde gesendet werden.<br><br>
Durch die Deaktivierung dieser Option (Standard), nur die E-Mail-Informationen gesendet werden (wenn &quot;Informations-E-Mail an Benutzer&quot; aktiviert ist).';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Wenn ein Administrator oder Webmaster der Galerie manuell best�tigen Registrierung anh�ngig ist, wird eine Benachrichtigung per E-Mail automatisch an den Benutzer gesendet. Geben Sie hier Ihre individuelle manuelle Validierung E-Mail-Betreff.<br>
Standardm��ig hat das Feld einen generischen Text in Deutsch, aber Sie k�nnen es �ndern, und verwenden Sie die �bersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zus�tzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verf�gung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzuf�gen.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Wenn ein Administrator oder Webmaster der Galerie manuell g�ltige Registrierung anh�ngig ist, ist eine Benachrichtigungs-Email automatisch an den Benutzer gesendet. Geben Sie hier den Text ein, in dieser E-Mail angezeigt.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Um mehrere Sprachen zu benutzen, k�nnen Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Geben Sie hier Ihre individuelle Anmeldebest�tigung per E-Mail Thema.<br>
Standardm��ig hat das Feld einen generischen Text in Deutsch, aber Sie k�nnen es �ndern, und verwenden Sie die �bersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zus�tzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verf�gung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzuf�gen.<br>';
$lang['UAM_confirmtxtTitle_d'] = 'Geben Sie den einleitenden Text, den Sie in der E-Mail-Best�tigung der Anmeldung erscheinen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> um die Anzahl von Tagen einf�gen, um eine Registrierung zu best�tigen (&quot;Anmeldeschluss Validierung beschr�nkt;&quot; m�ssen aktiviert werden).
<br><br>
Um mehrere Sprachen zu benutzen, k�nnen Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_confirmmail_custom1_d'] = 'Wenn die Option &quot;Best�tigung der Anmeldung&quot; aktiv ist, k�nnen Sie in diesem zu <b><u>Akzeptanz Text anpassen</u></b> auf der Anmeldebest�tigung Seite angezeigt, wenn Benutzer auf den Best�tigungs-Link, die empfangen wurde per E-Mail.
<br><br>
Nach der Installation des Plugin ist ein Standard-Text als Beispiel vorangehen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Dieses Feld ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, k�nnen Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_confirmmail_custom2_d'] = 'Wenn die Option &quot;Best�tigung der Anmeldung&quot; aktiv ist, k�nnen Sie in diesem zu <b><u>rejectance Text anpassen</u></b> auf der Anmeldebest�tigung Seite angezeigt, wenn Benutzer auf den Best�tigungs-Link, die empfangen wurde per E-Mail.
<br><br>
Nach der Installation des Plugin ist ein Standard-Text als Beispiel vorangehen.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Dieses Feld ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, k�nnen Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_RejectConnexion_d'] = 'Wenn aktiviert, wird neu registrierten Benutzern nicht best�tigen, haben ihre Anmeldung nicht in der Lage sein, um zur Galerie zu verbinden. Sie werden auf eine spezielle Seite umgeleitet werden, um sie von diesem Zustand zu informieren.<br><br>
<b style=&quot;color: red;&quot;>Warnung - Dies funktioniert nur in Verbindung mit der Best�tigung Gruppen! Siehe unten, um die Gruppen nach Bedarf eingestellt.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Passen Sie hier Ihre Erkl�rung Text zum unbest�tigten Benutzer informieren dass sie nicht in der Lage um die Galerie verbinden bis sie ihre Anmeldung best�tigt haben.
<br>
Dieses Feld ist kompatibel mit FCK Editor und, f�r Multi-Sprachen, k�nnen Sie die [lang] Tags der Extended Description Plugin zu benutzen, wenn es aktiv ist.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Validierung Gruppen setzt voraus, dass Sie mindestens einen Benutzer Gruppe angelegt haben und definiert ist standardm��ig im User-Gruppen Piwigo-Management.</b><br><br>
Die Gruppen sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Die Verwendung des Status Validierung erfordert, dass Sie die &quot;Gast&quot;-Nutzer mit Standard-Einstellung (als User Template) f&uuml;r neu registrierte gehalten haben. Hinweis: Sie k&ouml;nnen einem anderen Benutzer als neue Vorlage f&uuml;r registrierte gesetzt. Bitte beachten Sie die Dokumentation des Piwigo f&uuml;r weitere Details.</b><br><br>
Die Satzung sind validiert f&uuml;r den Einsatz in Verbindung mit der &quot;Best&auml;tigung der Anmeldung&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WARNUNG: Die Verwendung von Privatsph�re Ebene erforderlich, dass Sie sie mit Ihren Bildern verwendet. Bitte beachten Sie die Piwigo in der Dokumentation f�r weitere Details.</b><br><br>
Das Niveau der Privatsph�re ist f�r den Einsatz in Verbindung mit der &quot;Best�tigung der Anmeldung&quot validiert;';
$lang['UAM_validationlimitTitle_d'] = 'Diese Option erm�glicht es, die G�ltigkeit der Schl�ssel Validierung E-Mail-Grenze geschickt, um neue Registranten. Besucher, wer x Tage Zeit haben, um sich identifizieren, zu registrieren. Nach Ablauf dieser Frist die Validierung Link l�uft.
<br><br>
Diese Option ist in Verbindung mit der &quot;Best�tigung der Anmeldung verwendet&quot;
<br><br>
If this option and the option &quot;Erinnern Unvalidierte User&quot; are activated, new options will appear below in this section to enable the automation of unvalidated users management.';
$lang['UAM_remailTitle_d'] = 'Mit dieser Option k�nnen Sie eine Erinnerung per E-Mail an registrierte Benutzer zu senden, aber noch nicht best�tigt ihre Eintragung in die Zeit. Es funktioniert also in Verbindung mit der &quot;Best�tigung der Anmeldung&quot;
<br><br>
2 Arten von E-Mails gesendet werden k�nnen: Mit oder ohne Regeneration der Validierung Schl�ssel. Gegebenenfalls kann der Inhalt von E-Mails angepasst werden.
<br><br>
Wenden Sie sich an die &quot;Tracking Validierungen&quot; aus.
<br><br>
If this option and the option &quot;Anmeldeschluss Validierung beschr�nkt&quot; are activated, new options will appear below in this section to enable the automation of unvalidated users management.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Geben Sie hier Ihre individuelle Anmeldebest�tigung per E-Mail Betreff Mahnung (mit oder ohne neuen Schl�ssel Generation).<br>
Standardm��ig hat das Feld einen generischen Text in Deutsch, aber Sie k�nnen es �ndern, und verwenden Sie die �bersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zus�tzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verf�gung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzuf�gen.<br>';
$lang['UAM_remailtxt1Title_d'] = 'Geben Sie den einleitenden Text, den Sie in der E-Mail-Erinnerung angezeigt wird, zus�tzlich zu der Pr�fschl�ssel regeneriert.
<br><br>
Wenn leer, wird die E-Mail-Erinnerung nur den Best�tigungslink. Es wird daher dringend empfohlen, ein wenig erl�uternden Text zu nehmen. (NB: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> um die Anzahl von Tagen einf�gen, um eine Registrierung zu best�tigen (&quot;Anmeldeschluss Validierung beschr�nkt;&quot; m�ssen aktiviert werden).
<br><br>
Um mehrere Sprachen zu benutzen, k�nnen Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_remailtxt2Title_d'] = 'Geben Sie den einleitenden Text, den Sie in der Erinnerung, ohne eine Best�tigung per E-Mail-Taste erscheinen regeneriert.
<br><br>
Wenn links leer ist, wird die E-Mail-Erinnerung leer sein. Es wird daher dringend empfohlen, ein wenig erl�uternden Text zu nehmen. (NB: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> , um automatisch den Namen des Zielbenutzers der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> um die Anzahl von Tagen einf�gen, um eine Registrierung zu best�tigen (&quot;Anmeldeschluss Validierung beschr�nkt;&quot; m�ssen aktiviert werden).
<br><br>
Um mehrere Sprachen zu benutzen, k�nnen Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_USRAutoTitle_d'] = 'Automatic handling of unvalidated visitors is triggered each time you connect to the gallery and works as follows:
<br><br>
- Automatic deletion of accounts not validated in the allotted time without sending automatic email reminder -> &quot;Deadline for registration validation limited&quot; <b><u>enabled</u></b> and &quot;Remind unvalidated users&quot; <b><u>disabled</u></b>.
<br><br>
- Automatically sending a reminder message with a new generation of validation key and automatic deletion of accounts not validated in the time after sending the reminder -> &quot;Deadline for registration validation limited&quot; <b><u>enabled</u></b> et &quot;Remind unvalidated users&quot; <b><u>enabled</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Dies ist nur g�ltig, wenn der Benutzer, dessen Konto ist abgelaufen selbst l�st die L�schung Mechanismus (selten, aber m�glich). er hat dann von der Galerie getrennt und umgeleitet zu einer Seite mit der L�schung seines Accounts und ggf. die Gr�nde f�r diese L�schung.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
<b style=&quot;color: red;&quot;>[username]</b> ist hier nicht verf�gbar, weil betroffene Anwender gel�scht wurde.
<br><br>
Custom Text f�r die Weiterleitungsseite k�nnen in dieses Feld eingegeben werden dass ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, k�nnen Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_USRAutoMailTitle_d'] = 'Wenn aktiviert, wird diese Funktion automatisch zu senden personalisierte Inhalte in &quot;Reminder per E-Mail mit neuer Schl�ssel generiert&quot;, um Besucher, die Kriterien entsprechen.';
?>