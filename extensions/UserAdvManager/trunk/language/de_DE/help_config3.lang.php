<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Automatische oder manuelle Verwaltung von Benutzern Gespenst<br>
- E-mailing<br>
...
';
$lang['UAM_ghosttrackerTitle_d'] = 'Auch bekannt als &quot;Geist Tracker&quot;, wenn diese Funktion aktiviert ist, k&ouml;nnen Sie verwalten Ihre Besucher je nach der H&auml;ufigkeit ihrer Besuche. 2 Betriebsarten stehen zur Verf�gung:
- Manuelle Verwaltung: Wenn die Zeit zwischen 2 Besuche erreicht ist, erscheint dem Besucher in der &quot;Ghost Tracker&quot; Table, an dem Sie in der Lage f�r die Besucher per E-Mail erinnern oder l�schen ihn wird.<br><br>
- Automatisiertes Management: Wenn der Zeitraum zwischen 2 aufeinander folgenden Aufenthalte erreicht ist, wird der Besucher automatisch gel�scht oder verschoben in eine Gruppe warten und / oder Status. In diesem zweiten Fall kann eine Information E-Mail an ihn gesendet werden.<br><br>
<b style=&quot;color: red;&quot;>Wenn Sie diese Funktion zum ersten Mal oder haben Sie nach einem langen Zeitraum aus, in dem neue Besucher registriert sind, m�ssen Sie initialisieren, oder setzen Sie den Geist Tracker reaktiviert.</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Geben Sie hier Ihre individuelle manuelle Ghost Tracker-Erinnerung per E-Mail Thema.<br>
Standardm��ig hat das Feld einen generischen Text in Deutsch, aber Sie k�nnen es �ndern, und verwenden Sie die �bersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zus�tzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verf�gung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzuf�gen.<br>';
$lang['UAM_gttextTitle_d'] = 'Geben Sie den gew�nschten Text in die E-Mail-Erinnerung angezeigt, die Benutzer rechtzeitig, um wieder zur Galerie zu besuchen (Anm.: Der Text Fertigpen mit der Installation des Plugins ist als Beispiel vorgesehen).
<br><br>
Further customize the content with special inserted tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> to automatically insert the name of the destination user of the email.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> to insert the title of your gallery.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> to insert your gallery URL if set in Piwigo\'s configuration options. Use <b style=&quot;color: red;&quot;>[days]</b> to insert the maximum numbers of days between two visits.
<br><br>
Um mehrere Sprachen zu benutzen, k�nnen Sie die Extended description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_GTAutoTitle_d'] = 'Diese Option erm�glicht es, Regeln f�r die automatisierte Verwaltung von Geistern Benutzer anwenden.
<br><br>Grundprinzip: Ein Benutzer, der die maximale Zeit zwischen den Besuchen <b><u>und</u></b> hat bereits per E-Mail gilt als abgelaufen gemeldet erreicht. Dann k�nnen Sie automatisierte Verarbeitung Regeln wie das automatische L�schen von abgelaufenen Konten oder Herabstufung durch Beschr�nkung des Zugangs zur Galerie (schaltet automatisch auf eine eingeschr�nkte Gruppe und / oder Status).
<br><br>Die Ansteuerung dieser Automatisierung wird erreicht, wenn eine Verbindung Nutzer (alle Benutzer!) Auf der Galerie.';
$lang['UAM_GTAutoDelTitle_d'] = 'Dies ist nur g�ltig, wenn der Benutzer, dessen Konto ist abgelaufen selbst l�st die Streichung Mechanismus (selten, aber m�glich). Er ist dann der Galerie getrennt und umgeleitet auf eine Seite mit der L�schung seines Accounts und gegebenenfalls die Gr�nde f�r die Streichung dieses Absatzes.
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> , um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.<br>
<b style=&quot;color: red;&quot;>[username]</b> ist hier nicht verf�gbar, weil betroffene Anwender gel�scht wurde.
<br><br>
Custom Text f�r die Weiterleitungsseite k�nnen in dieses Feld eingegeben werden dass ist kompatibel mit den FCK-Editor und, um mehrere Sprachen zu benutzen, k�nnen Sie die Extended Description Plugin-Tags verwenden, wenn er aktiv ist.';
$lang['UAM_GTAutoGpTitle_d'] = 'Der automatische Wechsel der Gruppe oder den gleichen Status zu einer Degradierung der Konten beteiligt und arbeiten nach dem gleichen Prinzip wie die Gruppe oder den Status der Validierung (finden Sie unter &quot;Einstellen Best�tigungen und Validierungen der Registrierung&quot;). Daher sein, eine Gruppe und / oder Status herabstufen Zugang zur Galerie zu definieren. Wenn dies bereits mit dem Einsatz von Anmeldebest�tigung Funktion definiert wurde, k�nnen Sie mit dem gleichen Gruppe / Status.<br><br>
<b style=&quot;color: red;&quot;>Wichtiger Hinweis:</b> Wenn ein Geist Benutzer hat noch kein von der nach Ablauf der Frist und trotz der automatische Benachrichtigung per E-Mail (wenn aktiviert) geh�rt, ist er automatisch aus der Datenbank gel�scht.';
$lang['UAM_GTAutoMailTitle_d'] = 'Wenn ein Konto abgelaufen ist (Gruppe / status / privacy Pegel�nderung herabstufen den Besucher), kann eine E-Mail-Informationen geschickt, um die Gr�nde f�r diese �nderung zu kl�ren und die Mittel, um den ersten Zugriff auf die Galerie zu erholen.
<br>Um dies zu tun, wird ein Link auf eine R�ckbest�tigung der Anmeldung an die E-Mail (automatische Generierung eines neuen Best�tigungs-Taste) befestigt.<b style=&quot;color: red;&quot;>Wenn der Benutzer bereits angemeldet ist, wird sein Konto automatisch zerst�rt.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Warnung: Nutzung dieser Funktion ist eng mit der Best�tigung der Anmeldung durch den Benutzer (per Mail) verbunden und kann nicht ohne diese Option aktiviert werden.</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Geben Sie hier Ihre individuelle automatische Ghost-Tracker E-Mail Herabstufung unterliegen.<br>
Standardm��ig hat das Feld einen generischen Text in Deutsch, aber Sie k�nnen es �ndern, und verwenden Sie die �bersetzung tags [lang =?] von Extended Description Plugin, wenn installiert.
<br><br>
Die folgenden zus�tzlichen Anpassungen Tags sind ohne die Verwendung der Extended Description Plugin zur Verf�gung:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzuf�gen.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Geben Sie den Text, die auch eine Erl�uterung der Gr�nde f�r die R�ckstufung, um die Best�tigungs-Link zu begleiten. Der Text ist nicht vorgeschrieben, aber dringend empfohlen. In der Tat werden Ihre Besucher nicht zu sch�tzen Empfang einer E-Mail mit nur einem einzigen Link ohne weitere Erkl�rung. ;-)
<br><br>
Weitere Anpassung des Inhalts mit speziellen eingef�gt tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> um automatisch den Namen des Zielbenutzers in der E-Mail.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> um den Titel Ihrer Galerie einzuf�gen.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> Ihre Galerie-URL einf�gen, wenn in den Konfigurationsoptionen Piwigo gesetzt.
<br><br>
Um mehrere Sprachen verwenden, k�nnen Sie die Extended description  Plugin-Tags, wenn installiert ist.';
$lang['UAM_GTAutoDelTitle'] = 'Benutzerdefinierte Meldung auf gel�schtes Konto';
?>