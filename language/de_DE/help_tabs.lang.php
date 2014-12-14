<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'Als Ghost Tracker aktiviert ist und initialisiert wurde, finden Sie weiter unten die Liste der registrierten Besucher, die sich seit x Tagen zur&uuml;ckgegeben haben. &quot;x&quot; ist die Anzahl der Tage konfiguriert in der General-Setup. Dar&uuml;ber hinaus finden Sie eine Spalte angibt, ob eine E-Mail-Erinnerung hat, um die angestrebten Besucher gesendet wurde. So k&ouml;nnen Sie auf einen Blick sehen und zu behandeln Besucher, die nicht wegen der Erinnerung genommen haben.<br><br>In dieser Ansicht k�nnen Sie:
<br><br>
- L�schen Sie manuell Konten <b>(Handbuch Drain)</b>
<br>
- Generieren Sie per E-Mail-Erinnerung <b>mit dem Zur�cksetzen der letzte Besuch date</b>. Dies erlaubt es, einen Platzhalter, um die angestrebten Besucher geben. Wenn der Besucher bereits eine Mahnung erhalten haben, durch nichts daran gehindert, eine neue Mail, die wieder zur�ckgesetzt werden, in der Tat �bel, dem letzten Tag besuchen.
<br><br>
<b>Die Sortierung der Tabelle Function</b> : Sie k�nnen die Daten mit einem Klick auf die Spalten�berschriften angezeigt. Halten Sie SHIFT-Taste, um Art bis zu 4 gleichzeitige maximale Spalten.';

// Userlist tab
$lang['UAM_userlistTitle_d'] = 'Diese Seite gibt es zur Information an den Administrator. Es zeigt eine Liste von allen Nutzern auf der Galerie zeigt das Datum und die Anzahl der Tage seit dem letzten Besuch registriert. Die Liste ist in aufsteigender Reihenfolge der Anzahl der Tage sortiert.
<br><br>
<b><u>Erst wenn der Geist Tracker aktiv ist</u></b>, wird die Anzahl der Tage ohne einen Besuch wie der folgende Farbcode nach dem Maximum in der Geist Tracker Optionen:
<br>
- <b style=&quot;color: lime;&quot;>Gr�n</b> : Wenn der Benutzer hat die Galerie <b style=&quot;color:lime;&quot;><u>weniger als 50%</u></b> besucht der angegebene H&ouml;chstzahl in der Geist-Tracker.<br>
- <b style=&quot;color: orange;&quot;>Orange</b> : Wenn der Benutzer hat die Galerie <b style=&quot;color:orange;&quot;><u>zwischen 50% und 99%</u></b> besucht der angegebene H&ouml;chstzahl in der Geist-Tracker.<br>
- <b style=&quot;color: red;&quot;>Rot</b> : Wenn der Benutzer hat die Galerie <b style=&quot;color:red;&quot;><u>f&uuml;r mehr als 100%</u></b> besucht der angegebene H&ouml;chstzahl in der Geist-Tracker. <b><u>In diesem Fall muss der Benutzer sich auch in der Geist-Tracker-Tabelle.</u></b><br>
<br>
Beispiel:
<br>
Die H�chstdauer von Geist Tracker ist so konfiguriert, dass 100 Tage.
<br>
Ein Benutzer wird in gr�n angezeigt, wenn er die Galerie f�r weniger als 50 Tagen besucht haben, in orange, wenn sein letzter Besuch stattgefunden hat zwischen 50 und 99 Tage und rot f�r 100 Tage und mehr.
<br><br>
<b>HINWEIS</b>: Die Liste wird nicht angezeigt, die nicht validiert ihrer Registrierung (falls die M&ouml;glichkeit der Validierung der Registrierung aktiviert ist). Diese Benutzer werden dann in besonderer Weise in der &quot;Tracking Validierungen verwaltet&quot; aus.
<br><br>
<b>Die Sortierung der Tabelle Function</b>: Sie k�nnen die Daten mit einem Klick auf die Spalten�berschriften angezeigt. Halten Sie SHIFT-Taste, um Art bis zu 4 gleichzeitige maximale Spalten.';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'Wenn die Begrenzung der Frist f�r die Anmeldung aktiviert ist, finden Sie weiter unten die Liste der Benutzer, deren Validierung Eintragung erwartet wird, <b style=&quot;text-decoration: underline;&quot;>ob oder nicht</b> sind sie in der Zeit zu validieren.<br><br>
Das Datum der Eintragung wird in gr�n angezeigt, wenn der Benutzer unter dem betreffenden Frist wird auf seine Registrierung zu best�tigen. In diesem Fall ist die Validierung Schl�ssel noch g�ltig ist, und wir k�nnen eine E-Mail mit oder ohne eine neue Validierung Schl�ssel zu schicken.<br><br>
Wenn das Datum der Eintragung erscheint in Rot, die Validierung abgelaufen. In diesem Fall m�ssen Sie eine E-Mail mit der Regeneration der Validierung Schl�ssel senden, wenn Sie dem Benutzer die M�glichkeit, ihre Anmeldung best�tigen m�chten.<br><br>
In allen F�llen ist es m�glich, manuell die Validierung Kraft.<br><br>
In dieser Ansicht k�nnen Sie:
<br><br>
- L�schen Sie manuell Konten <b>(Handbuch Drain)</b>
<br>
- Generieren Sie per E-Mail-Erinnerung <b>ohne</b> erzeugt einen neuen Schl�ssel. Warnung: Senden Sie eine E-Mail-Erinnerung f�r die angestrebten Besucher. Diese Funktion kann nicht zur�ckgesetzt dem Zeitpunkt der Eintragung des angestrebten Besucher und das Zeitlimit ist weiterhin g�ltig.
<br>
- Generieren Sie per E-Mail-Erinnerung <b>mit</b> erzeugt einen neuen Schl�ssel. Warnung: Senden Sie eine E-Mail-Erinnerung f�r die angestrebten Besucher. Diese Funktion setzt auch den Zeitpunkt der Eintragung des angestrebten Besucher, die die Frist f�r die Validierung erweitern entspricht.
<br>
- Senden einer Registrierung erwartet Validierung von Hand, auch wenn das Ablaufdatum �berschritten ist <b>(zwingen Validierung)</b>.
<br><br>
<b>Die Sortierung der Tabelle Function</b> : Sie k�nnen die Daten mit einem Klick auf die Spalten�berschriften angezeigt. Halten Sie SHIFT-Taste, um Art bis zu 4 gleichzeitige maximale Spalten.';
?>