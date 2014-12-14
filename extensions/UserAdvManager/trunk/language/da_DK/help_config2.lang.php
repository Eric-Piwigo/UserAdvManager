<?php
// ConfirmMail options section
$lang['UAM_confirmTitle_d'] = '- Generering af informationsmail<br>
- Generering af registreringsbekr�ftelsesmail<br>
- Grupper, statusser eller privatlivsniveau ved autotilmelding<br>
- Deadline for bekr�ftelse af registrering<br>
- Generering af p�mindelsesmail<br>
...';
$lang['UAM_confirmmailTitle_d'] = 'Valgmuligheden g�r det muligt for en bruger enten at bekr�fte sin registrering ved at klikke p� et link modtaget i en mail sendt ved registreringen eller ved at en administrator manuelt aktiverer registreringen.
<br><br>
I det f�rste tilf�lde best�r mailen af en del, der kan tilpasses til at indeholde en lille velkomst, samt en fast del, som indeholder aktiveringslinket, der genereres fra en tilf�ldig n�gle, der m�ske kan genereres via fanen &quot;Sporing af bekr�ftelser&quot; tab.
<br><br>
I det andet tilf�lde sendes godkendelseslinket til galleriets administratorer.  Bes�gende skal vente p� at en administrator bekr�fter ved hj�lp af godkendelseslinket eller via fanen &quot;Sporing af bekr�ftelser&quot;.
<br>
<b style=&quot;color: red;&quot;>Bem�rk: Valgmulighederne  &quot;Begr�nset deadline for registreringsbekr�ftelse&quot; og &quot;P�mind ikke-bekr�ftede brugere&quot; er deaktiverede n�r administrators manuelle bekr�ftelse er aktiveret.</b>
<br><br>
Valgmuligheden anvendes generelt med den automatisk tildeling af gruppe og/eller status.  Eksempelvis vil en bruger, der endnu ikke har bekr�ftet sin registrering, blive placeret i en s�rlig brugergruppe (med eller uden galleribegr�nsinger), mens en bruger, der har bekr�ftet sin registrering placeres i gruppen &quot;normal&quot;.';
$lang['UAM_StuffsTitle_d'] = 'Dette aktiverer en ekstra UAM-blok i plugin\'en PWG Stuffs (hvis installeret), der informerer bes�gende, som ikke har bekr�ftet deres registrering, om deres situation.
<br><br>
Se <b>Tips og eksempler p� brug</b> nederst p� siden for flere oplysninger.';
$lang['UAM_adminconfmailTitle_d'] = 'Du kan kun deaktivere bekr�ftelsen p� brugerkonti oprettet af adminstratoren via Piwigos brugerh�ndtering.<br><br>
Ved at aktivere valgmuligheden, sendes der mailbekr�ftelser vedr�rende registrering til hver bruger, som administratoren opretter.<br><br>
Ved at deaktivere valgmuligheden (standard), sendes kun informationsmailen (hvis &quot;Informationsmail til bruger&quot; er aktiveret).';
$lang['UAM_AdminValidationMail_Subject_d'] = 'N�r en administrator eller webmaster i galleriet manuelt bekr�fter en afventende registrering, bliver der automatisk sendt en notifikationsmail til brugeren. Her skriver man sit tilpassede emne til brug i mailen om manuel godkendelse.<br>
Som standard har feltet en genrisk tekst p� engelsk, men du kan �ndre den samt benytte overs�ttelsestags [lang=?] fra plugin\'en Extended Description, hvis den er installeret.
<br><br>
F�lgende yderligere tilpasningstags er tilg�ngelige uden brug af plugin\'en Extended Description:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af brugernavnet i mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af navnet p� dit galleri.<br>';
$lang['UAM_AdminValidationMail_d'] = 'N�r en administrator eller webmaster i galleriet manuelt bekr�fter en afventende registrering, bliver der automatisk sendt en notifikationsmail til brugeren. Her man den tekst som bruges i mailen.
<br><br>
Yderligere tilpasning af indholdet kan inds�ttes med s�rlige tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af brugernavnet i mailen.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af navnet p� dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af URL\'en pegende p� dit galleri, hvis defineret i Piwigos ops�tning.
<br><br>
For at benytte flere sprog, kan du anvende tags fra plugin\'en Extended Description, s�fremt den er aktiv.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Skriv her dit tilpassede emne p� den e-mail, der sendes som p�mindelse om bekr�ftelse af registrering.<br>
Som standard indeholder feltet en generisk tekst p� engelsk, men du kan �ndre den samt benytte overs�ttelsestags [lang=?], if plugin\'en Extended Description er installeret.
<br><br>
F�lgende yderligere tilpasningstags er tilg�ngelige uden brug af plugin\'en Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af brugernavnet p� mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af navnet p� dit galleri.<br>
';
$lang['UAM_confirmtxtTitle_d'] = 'Skriv introduktionsteksten, som medtages i mailen vedr�rende registreringsbekr�ftelse.
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af den p�g�ldende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af dit galleris URL, hvis opsat i Piwigos ops�tningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[Kdays]</b> til inds�ttelse af antal dage-begr�sningen p� registreringsgodkendelse (&quot;Begr�nset deadline for registeringsgodkendelse;&quot; skal v�re aktiveret).
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_confirmmail_custom1_d'] = 'N�r valgmuligheden &quot;Registreringsbekr�ftelse&quot; er aktiv giver feltet mulighed for at tilpasse <b><u>godkendelsesteksten</u></b> p� registreringsbekr�ftelsessiden, der vises n�r en bruger klikker p� bekr�ftelseslinket, der blev modtaget pr. mail.
<br><br>
Efter installering af plugin\'en, vil en standardtekst blive opsat som eksempel.
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af den p�g�ldende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af dit galleris URL, hvis opsat i Piwigos ops�tningsvalgmuligheder.
<br><br>
Feltet er kompatibelt med FCK Editor og, ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_confirmmail_custom2_d'] = 'N�r valgmuligheden &quot;Registreringsbekr�ftelse&quot; er aktiv, giver feltet mulighed for at tilpasse <b><u>afvisningsteksten</u></b> p� registreringsbekr�ftelsessiden, der vises n�r en bruger klikker p� bekr�ftelseslinket, der blev modtaget pr. mail.
<br><br>
Efter installering af plugin\'en, vil en standardtekst blive opsat som eksempel.
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af den p�g�ldende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af dit galleris URL, hvis opsat i Piwigos ops�tningsvalgmuligheder.
<br><br>
Feltet er kompatibelt med FCK Editor og, ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_RejectConnexion_d'] = 'Hvis aktiveret kan nyregistrerede brugere, der ikke har bekr�ftet registreringen endnu, ikke logger p� galleriet.  De vil blive omdirigeret til en s�rlig side, som informerer dem om deres status.<br><br>
<b style=&quot;color: red;&quot;>Advarsel: Funktionen fungerer kun sammen med bekr�ftelsesgrupper! Se herunder for oplysninger om den p�kr�vede ops�tning af grupperne.</b>';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Her angives en tilpasset, forklarende tekst til ubekr�ftede brugere, som fort�ller at de ikke vil kunne logge p� galleriet f�r de har bekr�ftet deres registrering.
<br><br>
Feltet er kompatiblet med FCK Editor og ved flere sprog, kan man anvende [lang]-tags fra plugin\'en Extended Description, hvis den er aktiv.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af grupper ved bekr�ftelse kr�ver at du har oprettet mindst en brugergruppe, som er defineret &quot;som standard&quot; i Piwigos h�ndtering af brugergrupper.</b><br><br>
Grupperne godkendes til brug i forbindelse med &quot;Bekr�ftelse af registrering&quot;';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af statusser ved bekr�ftelse af registering, kr�ver at du har beholdt standardindstillinger for brugeren &quot;Guest&quot; (&quot;G�st&quot;) (som brugerskabelon) til nye registreringer. Bem�rk at du kan ops�tte enhver anden bruger som skabelon til nye registreringer. Se Piwigos dokumentation for flere oplysninger.</b><br><br>
Stausserne godkendes til brug i forbindelse med  &quot;Bekr�ftelse af registrering&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ADVARSEL: Anvendelse af privatlivsniveau kr�ver at du har benyttet dem sammen med dine billeder. Se Piwigos dokumentation for flere oplysninger.</b><br><br>
Privatlivsniveauet godkendes til brug i forbindelse med  &quot;Bekr�ftelse af registrering&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Valgmuligheden g�r det muligt at begr�nse gyldigheden p� den pr.  mail fremsendte bekr�ftelsesn�gle, der sendes til nyregistrerede brugere. Bes�gende, der lader sig registrere, har x dage til at bekr�fte deres registrering. Herefter udl�ber bekr�ftelseslinket.
<br><br>
Valgmuligheden anvendes sammen med &quot;Bekr�ftelse af registrering&quot;
<br><br>
Hvis denne valgmulighed samt valgmuligheden &quot;P�mind ikke-bekr�ftede brugere&quot; er aktive, s� vil der dukke nye valgmuligheder op i dette afsnit, som g�r det muligt at aktivere autoh�ndtering af ikke-bekr�ftede brugere.';
$lang['UAM_remailTitle_d'] = 'Valgmuligheden g�r det muligt at sende p�mindelsesmails to registrerede bruger, der ikke har bekr�ftet registreringen i tide. Den arbejder derfor sammen med &quot;Registreringsbekr�ftelse&quot;
<br><br>
To former for mail kan sendes: Med eller uden generering af en ny bekr�ftelsesn�gle. Alt efter behov kan indholdet af mailene tilpasses.
<br><br>
Se fanen &quot;Bekr�ftelsesporing&quot;.
<br><br>
Hvis denne valgmuligheden samt valgmuligheden &quot;Begr�nset deadline for registreringsbekr�ftelse&quot; er aktiverede, vil nye valgmuligheder blive vist neden for i dette afsnit, til aktivering af automatisk h�ndtering af ikke-bekr�ftede brugere.';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Skriv her dit tilpassede emne p� den e-mail, der sendes som p�mindelse om bekr�ftelse af registrering (med eller uden generering af ny n�gle).<br>
Som standard indeholder feltet en generisk tekst p� engelsk, men du kan �ndre den samt benytte overs�ttelsestags [lang=?], if plugin\'en Extended Description er installeret.
<br><br>
F�lgende yderligere tilpasningstags er tilg�ngelige uden brug af plugin\'en Extended Description plugin:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af brugernavnet p� mailens modtager.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af navnet p� dit galleri.<br>';
$lang['UAM_remailtxt1Title_d'] = 'Skriv introduktionsteksten, som medtages i p�mindelsesmailen, ud over den genererede bekr�ftelsesn�gle.
<br><br>
Hvis feltet er tomt, vil p�mindelsesmailen kun indeholde bekr�ftelseslinket. Der opfordres derfor kraftigt til at skrive en kort, forklarende tekst. (Bem�rk: Teksten forudfyldes under installeringen med et eksempel.)
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af den p�g�ldende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af dit galleris URL, hvis opsat i Piwigos ops�tningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[Kdays]</b> til inds�ttelse af antal dage-begr�sningen p� registreringsgodkendelse (&quot;Begr�nset deadline for registeringsgodkendelse;&quot; skal v�re aktiveret).
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_remailtxt2Title_d'] = 'Skriv introduktionsteksten, som medtages i p�mindelsesmailen, uden den genererede bekr�ftelsesn�gle.
<br><br>
Hvis feltet er tomt, vil p�mindelsesmailen kun indeholde bekr�ftelseslinket. Der opfordres derfor kraftigt til at skrive en kort, forklarende tekst. (Bem�rk: Teksten forudfyldes under installeringen med et eksempel.)
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[username]</b> til automatisk inds�ttelse af den p�g�ldende brugers navn.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> til inds�ttelse af galleriets titel.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> til inds�ttelse af dit galleris URL, hvis opsat i Piwigos ops�tningsvalgmuligheder.
- <b style=&quot;color: red;&quot;>[Kdays]</b> til inds�ttelse af antal dage-begr�sningen p� registreringsgodkendelse (&quot;Begr�nset deadline for registeringsgodkendelse;&quot; skal v�re aktiveret).
<br><br>
Ved flere sprog, kan du benytte [lang]-tags fra plugin\'en Extended Descriptions, hvis den er aktiv.';
$lang['UAM_USRAutoTitle_d'] = 'Automatisk h�ndtering af ikke-bekr�ftede bes�gende udl�ses hver gang du logger p� galleriet, og den fungerer som f�lger::
<br><br>
- Automatisk sletning af ikke-bekr�ftede konti inden for den tilladte tid, uden at sende automatisk mailp�mindelse -> &quot;Begr�nset deadline for registreringsbekr�ftelse&quot; <b><u>aktiveret</u></b> og &quot;P�mind ikke-bekr�ftede brugere&quot; <b><u>deaktiveret</u></b>.
<br><br>
- Automatisk udsendelse af p�mindelsesbeskeder med generering af ny bekr�ftelsesn�gle og automatisk sletning af konti ikke bekr�ftet i tiden efter udsendelsen af p�mindelsen -> &quot;Begr�nset deadline for registreringsbekr�ftelse&quot; <b><u>aktiveret</u></b> og &quot;P�mind ikke-bekr�ftede brugere&quot; <b><u>aktiveret</u></b>.';
$lang['UAM_USRAutoDelTitle_d'] = 'Det er kun gyldigt n�r en bruger, hvis konto er udl�bet, af sig selv iv�rks�tter sletningsmekanismen (sj�ldent, men muligt).  Vedkommende sendes v�k fra galleriet til en side, som viser sletningen af kontoen samt, m�ske, sletnings�rsagen.
<br><br>
Yderligere tilpasning af indholdet med s�rlige, indsatte tags:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> inds�tter titlen p� dit galleri.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> inds�tter dit galleris URL, hvis det er opsat i Piwigos ops�tningsvalgmuligheder.<br>
<b style=&quot;color: red;&quot;>[username]</b> er ikke tilg�ngeligt her, fordi brugeren er blevet slettet.
<br><br>
Tilpassset tekst til omdirigeringssiden kan skrives feltet, som er kompatibelt med FCK Editor og, ved flere sprog, kan man anvendes [lang]-tags fra plugin\'en Extended Description, hvis denne er aktiv.';
$lang['UAM_USRAutoMailTitle_d'] = 'N�r den er aktiveret, vil denne funktio automatisk sende persontilpasset indhold i &quot;P�mindelsesmail med nygenereret n�gle&quot; til bes�gende som opfylder kriteriet.';
?>