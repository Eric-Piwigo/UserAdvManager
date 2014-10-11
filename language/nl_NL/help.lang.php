<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['UAM_GT_MainTitle_d'] = '- Automatisch of handmatig beheer van spook bezoekers<br/>
- E-mailing<br/>
...';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Als de beheerder of Webmaster van de galerie handmatig bevestigt dat de registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker gestuurd. Typ hier het onderwerp van je aangepaste handmatige validatie-email.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dat kan je veranderen. Gebruik hiervoor de vertaal-labels [lang=?] van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra labels voor aanpassingen zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemde gebruiker in de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_AddURL2Mail_d'] = 'Het activeren van deze optie voegt de URL van je galerie toe aan het eind van de emails die door de plugin worden gegenereerd. Te vergelijken met een handtekening.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Pas hier je tekst aan om onbevestigde gebruikers uit te leggen dat ze geen verbinding kunnen maken met de galerie totdat ze hun registratie hebben bevestigd.
<br/><br/>
Dit veld is compatibel met de FCK Tekstbewerker. Als je meerdere talen nodig hebt, kan je de [lang] labels gebruiken van de plugin Extended description, als je deze hebt geactiveerd.';
$lang['UAM_RedirTitle_d'] = 'Deze optie schakelt een geregistreerde gebruiker direct door naar zijn aanpassingspagina, maar alleen bij zijn eerste verbinding met de galerie.<br/><br/>
Let op: Deze functie is niet van toepassing op alle gebruikers. Degenen met de &quot;admin&quot;, &quot;webmaster&quot; or &quot;generic&quot; status worden uitgesloten.';
$lang['UAM_HidePasswTitle_d'] = 'Kies dit als je het wachtwoord, gekozen door de bezoeker in het emailbericht, te zien wilt krijgen. Als je deze optie inschakelt zal het wachtwoord in normale tekst verschijnen. Bij uitschakeling verschijnt het wachtwoord helemaal niet.';
$lang['UAM_GTAutoDelTitle'] = 'Aangepast bericht bij een verwijderd account';
$lang['UAM_DumpTitle_d'] = 'Hiermee is het mogelijk de totale instellingen van de plugin te bewaren in een bestand, zodat je het kan herstellen als er iets mis gaat (bv. na een verkeerde handeling of voordat je een update verricht). Standaard wordt het backup-bestand opgeslagen in deze map ../plugins/UserAdvManager/include/backup/ en hij wordt genoemd &quot;UAM_dbbackup.sql&quot;.
<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing: Het bestand wordt bij iedere backup actie overschreven! </b>
<br/><br/>
Het kan soms handig zijn het backup-bestand op je computer over te zetten. Bv. Om het in een andere database te kunnen herstellen, of om meerdere bestanden op te slaan. Om dit te doen, vink het blokje aan om het bestand te downloaden.
<br/><br/>
Het herstel middels deze koppeling is alleen beschikbaar voor een lokaal backup-bestand (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Een gedownload backup-bestand kan niet langs deze weg worden hersteld. Om dit voor elkaar te krijgen moet je een hiertoe aangewezen databasebeheer gereedschap gebruiken(zoals PhpMyAdmin voor MySql database).
<br/><br/>  
<b style=&quot;color: red;&quot;>Waarschuwing: Na het herstel moet je de beheerpagina van de plugin opnieuw inladen om de herstelde instellingen te kunnen zien!</b>';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Standaard ontvangt een gebruiker een email met alleen zijn gebruikersnaam en een nieuw wachtwoord wanneer hij zijn wachtwoord kwijt is en de hersteloptie heeft gekozen.
<br/><br/>
Hier kan je tekst naar keuze toevoegen om ingevoegd te worden<b><u>voor</u></b>de standaard informatie.
<br/><br/>
Je kunt verder de inhoud verder aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van je galerie URL als het tenminste is ingesteld in Piwigo\'s intellingen.
<br/><br/>
Om meerdere talen te gebruiken kan je de labels van de Extended Description plugin gebruiken. Als deze plugin tenminste geactiveerd is.';
$lang['UAM_AdminValidationMail_d'] = 'Als een beheerder of webmaster van de galerie handmatig bevestigt dat een registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker verzonden. Voeg hier de tekst in voor de email.
<br/><br/>
Je kunt de inhoud verder aanpassen met speciaal ingevoegde labels:
- <br/><b style=&quot;color: red;&quot;>[username]</b> het automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> het invoegen van de galerie-URL als dit is ingesteld in Piwigo\'s instellingen.
<br/><br/>
Om meerdere talen te gebruiken kan je de labels van de Extended Description plugin gebruiken. Als deze plugin tenminste geactiveerd is.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Voeg hier het onderwerp in van je aangepaste registratie bevestiging email.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar je kan dit veranderen en de vertalings labels [lang=?][/lang]gebruiken van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassings labels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Voeg hier het onderwerp in van je aangepaste registratie bevestiging herinnerings email (met of zonder nieuwe sleutel aanmaak).<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar je kan dit veranderen en de vertalings labels [lang=?][/lang]gebruiken van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassings labels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> het automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> het invoegen van de titel van je galerie.<br/>';