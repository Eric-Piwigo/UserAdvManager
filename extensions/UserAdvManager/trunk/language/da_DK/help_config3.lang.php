<?php
// GhostTracker Options section
$lang['UAM_GT_MainTitle_d'] = '- Automatisk eller manuel h�ndtering af sp�gelsesbrugere<br>
- Mailing<br>
...';
$lang['UAM_ghosttrackerTitle_d'] = 'Ogs� kaldet &quot;Ghost Tracker&quot;, n�r funktionen er aktiveret, kan du h�ndtere dine bes�gende afh�ngigt af bes�gshyppigheden. Der er to funktionsmetoder:<br><br>
- Manuel h�ndtering: N�r tiden mellem to bes�g er n�et, vil den bes�gende blive vist i &quot;Ghost Tracker&quot;-tabellen, hvor du kan p�minde brugeren via mail eller slette vedkommende.<br><br>
- Automatisk h�ndtering: N�r tiden mellem to p� hinanden f�lgende bes�g er n�et, vil den bes�gende automatisk blive slettet eller flyttet til en ventegruppe og/eller -status. I det andet tilf�lde vil en informationsmail blive sendt til vedkommende.<br><br>
<b style=&quot;color: red;&quot;>Vigtig bem�rkning: Hvis du aktiverer funktionen for f�rste gang eller genaktiverer den efter en l�ngere deaktivering, hvor nye brugere har registreret sig, skal du initialisere eller nulstille Ghost Tracker (se vejledning derom p� &quot;Ghost Tracker&quot;-fanen).</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Her skrives emnet p� den automatiske Ghost Tracker-p�mindelsesmail.<br>
Som standard indeholder feltet en generisk tekst p� engelsk, men du kan �ndre den samt anvende overs�ttelsestags [lang =?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
F�lgende yderligere tilpasningstags er tilg�ngelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af navnet p� modtageren af mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af titlen p� dit galleri.<br>';
$lang['UAM_gttextTitle_d'] = 'Skriv teksten, der skal vises i mailp�mindelsen, for at f� brugeren til at vende tilbage til dit galleri. (Bem�rk: Teksten forudfyldes under installeringen med et eksempel.)
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af den p�g�ldende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af dit galleris URL, hvis opsat i Piwigos ops�tningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[days]</b> til inds�ttelse af det maksimale antal dage mellem to bes�g.

<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_GTAutoTitle_d'] = 'Valgmuligheden g�r det muligt at iv�rks�tte regler til automatisk h�ndtering af sp�gelsesbrugere.
<br><br>Grundl�ggende princip: En bruger der n�r den maksimale tid mellem bes�g <b><u>og</u></b> allerede er blevet p�mindet via mail, betragtes som udl�bet. Du kan iv�rks�tte automatiserede behandlingsregler s� som automatisk sletning af udl�bne konti eller nedgradering ved at begr�nse adgangen til galleriet (autmatisk skift til en begr�nsende gruppe og/eller status).
<br><br>Aktiveringen af automatikkerne opn�s ved at en (hvilken som helst) bruger logger p� galleriet.';
$lang['UAM_GTAutoDelTitle_d'] = 'Det er kun gyldigt n�r en bruger, hvis konto er udl�bet, af sig selv iv�rks�tter sletningsmekanismen (sj�ldent, men muligt).  Vedkommende sendes v�k fra galleriet til en side, som viser sletningen af kontoen samt, m�ske, sletnings�rsagen.
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> inds�tter titlen p� dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> inds�tter dit galleris URL, hvis det er opsat i Piwigos ops�tningsvalgmuligheder.<br>
<b style=&quot;color: red;&quot;>[username]</b> er ikke tilg�ngeligt her, fordi brugeren er blevet slettet.
<br><br>
Tilpassset tekst til omdirigeringssiden kan skrives feltet, som er kompatibelt med FCK Editor og, ved flere sprog, kan man anvendes [lang]-tags fra plugin\'en Extended Description, hvis denne er aktiv.';
$lang['UAM_GTAutoGpTitle_d'] = 'Den automatiske �ndring af gruppe, status eller privatlivsniveau svarer til en nedgradering af de involverede konti og arbejder efter samme princip som bekr�ftedes gruppe, status eller privatlivsniveau (se &quot;Ops�tning af registreringsbekr�ftelse&quot;). Dvs. at der defineres en gruppe. status og/eller niveau som nedgraderer adgangen til galleriet. Hvis det allerede er opsat med brug af funktionen til registreringsbekr�ftelser, kan du anvende samme gruppe/status/niveau.<br><br>
<b style=&quot;color: red;&quot;>Vigtigt:</b> Hvis en sp�gelsesbruger stadig ikke har ladet h�re fra sig efter tidsbegr�nsningen og p� trods af automatisk mailnotifikation (hvis aktiveret), vil vedkommende automatisk blive slettet fra databasen.';
$lang['UAM_GTAutoMailTitle_d'] = 'N�r en konto s�ttes til at udl�be (�ndring af gruppe/status/privatlivsniveau som nedgraderer den bes�gende), vil en informationsmail blive sendt for at klarl�gge �rsagerne til �ndringen og som en m�de hvorved den indledende adgang til galleriet kan genskabes.
<br>For at g�re dette muligt indeholder mailen et link til genregistreringsbekr�ftelse (automatisk generering af ny bekr�ftelsesn�gle).<b style=&quot;color: red;&quot;>Hvis brugeren allerede er blevet p�mindet, vil kontoen automatisk blive nedlagt.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Anvendelse af funktionen h�nger t�t sammen med brugeres registreringsbekr�ftelser (mailbekr�ftelse) og kan ikke aktiveres uden denne valgmulighed.</b>';
$lang['UAM_GTAutomail_Subject_d'] = 'Her skrives emnet p� den automatiske Ghost Tracker-nedgraderingsmail.<br>
Som standard indeholder feltet en generisk tekst p� engelsk, men du kan �ndre den samt anvende overs�ttelsestags [lang =?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
F�lgende yderligere tilpasningstags er tilg�ngelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af navnet p� modtageren af mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af titlen p� dit galleri.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Skriv en tilpasset tekst, som forklarer �rsagerne til nedgraderingen; den f�lger med bekr�ftelseslinket.  Den tilpassede tekst er ikke et krav, men anbefales kraftigt.  Faktisk vil dine bes�gende ikke v�re glade for at modtage en mail, som blot indeholder et enkelt link uden yderligere forklaring. ;-)
<br><br>
Yderligere tilpasning af indholdet med s�rlige, inds�tte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af navnet p� mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af titlen p� dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af dit galleris URL, hvis opsat i Piwigos ops�tningsvalgmuligheder.
<br><br>
For at anvende flere sprog, kan kan anvende tags fra plugin\'en Extended Description, hvis den er aktiv.';
$lang['UAM_GTAutoDelTitle'] = 'Tilpasset meddelelse ved slettet konto';
?>