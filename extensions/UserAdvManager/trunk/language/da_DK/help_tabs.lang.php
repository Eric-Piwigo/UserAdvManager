<?php
// GhostTracker Tab
$lang['UAM_gtTitle_d'] = 'N�r Ghost Tracker er aktiveret og initialiseret, er der en liste over registrerede bes�gende, der ikke er vendt tilbage i x antal dage. &quot;x&quot; er antallet af dage opsat i fanen Generel ops�tning. Desuden er der en kolonne som angiver hvorvidt der er sendt en p�mindelsesmail til de p�g�ldende bes�gende. Dermed kan man f� et hurtigt overblik og h�ndtere bes�gende, der ikke har reageret p� p�mindelsen.<br><br>Her kan man:
<br><br>
- Manuelt slette konti <b>(manuel t�mning)</b>
<br>
- Generere mailp�mindelse <b>med nulstilling af den seneste bes�gsdato</b>. Dermed kan de p�g�ldende bes�gende f� et wildcard. Hvis den bes�gende allerede har modtaget en p�mindelse, er der intet i vejen for at sende en ny mail, som igen vil nulstille den seneste bes�gsdato.
<br><br>
<b>Tabelsorteringsfunktion</b>: Du kan sortere de viste data ved at klikke p� kolonneoverskifterne. Hold Shift-tasten ned for at sortere op til fire kolonner p� samme tid.';


// Userlist tab
$lang['UAM_userlistTitle_d'] = 'Denne side er til administratorens information.  Den viser en liste over alle galleriets registrerede brugere, med datoen og antal dage siden det seneste bes�g. Listen er sorteret i stigende orden efter antal dage.
<br><br>
<b><u>Kun n�r Ghost Tracker er aktiv</u></b>, antal dage uden et bes�g vises med f�lgende farvekode, j�vnf�r maksimummet opsat i Ghost Tracker valgmuligheder:
<br>
- <b style=&quot;color: lime;&quot;>Gr�n</b>: N�r en bruger har bes�gt galleriet <b style=&quot;color: lime;&quot;><u>mindre end 50 procent</u></b> af det i Ghost Tracker opsatte maksimum.<br>
- <b style=&quot;color: orange;&quot;>Orange</b>: N�r en bruger sidst har bes�gt galleriet <b style=&quot;color: orange;&quot;><u>mellem 50 og 99 procent</u></b> af det i Ghost Tracker opsatte maksimum.<br>
- <b style=&quot;color: red;&quot;>R�d</b>: N�r en bruger har bes�gt galleriet <b style=&quot;color: red;&quot;><u>mere end 100 procent</u></b> af det i Ghost Tracker opsatte maksimum. <b><u>I dette tilf�lde skal brugerens ogs� optr�de i Ghost Tracker-tabellen.</u></b><br>
<br>
Eksempel:
<br>
Den maksimale tid er i Ghost Tracker opsat til 100 dage.
<br>
En bruger vil optr�de som gr�n, hvis vedkommende bes�gte galleriet for mindre end 50 dage siden, i orange hvis det sidste bes�g fandt sted mellem 50 og 99 dage siden, og i r�d hvis det er 100 dage eller derover.
<br><br>
<b>BEM�RK</b>: Listen viser ikke hvem der har bekr�ftet sin registrering (hvis valgmuligheden vedr�rende registreringsbekr�ftelse er aktiveret). Disse brugere h�ndteres da p� en s�rlig m�de p� fanen &quot;Sporing af bekr�ftelser&quot;.
<br><br>
<b>Tabelsorteringsfunktion</b>: Du kan sortere de viste data ved at klikke p� kolonneoverskifterne. Hold Shift-tasten ned for at sortere op til fire kolonner p� samme tid.';


// UserManagement tab
$lang['UAM_usermanTitle_d'] = 'N�r begr�nset deadline for registering er aktiveret, er der derunder en liste over brugere, hvis registreringsbekr�ftelse afventes, <b style=&quot;text-decoration: underline;&quot;>uanset</b> om de stadig har tid til at bekr�fte eller ej.<br><br>
Registreringsdatoen vises i gr�nt n�r den p�g�ldende bruger er under tidsgr�nsen for registreringsbekr�ftelse. I dette tilf�lde er bekr�ftelsesn�glen stadig gyldig og vi kan sende en mail med eller uden en ny bekr�ftelsesn�gle.<br><br>
N�r en registreringsdato vises med r�dt, er bekr�ftelsesperioden udl�bet. I dette tilf�lde kan du sende en mail med en ny bekr�ftelsesn�gle, hvis du �nsker at g�re det muligt for brugeren at bekr�fte sin registrering.<br><br>
I alle tilf�lde er det muligt, manuelt at gennemtvinge bekr�ftelsen.<br><br>
Her kan du:
<br><br>
- Manuelt slette konti <b>(manuel t�mning)</b>
<br>
- Generere mailp�mindelse <b>uden</b> at generere en ny n�gle. Advarsel: Sender en p�mindelsesmail til de p�g�ldende bes�gende. Funktionen nulstiller ikke de p�g�ldende bes�gendes registreringsdato og timeout\'en er stadig gyldig.
<br>
- Generere mailp�mindelse <b>med</b> generering af ny n�gle. Advarsel: Sender en p�mindelsesmail til de p�g�ldende bes�gende. Funktionen nulstiller ogs� de p�g�ldende bes�gendes registreringsdato, hvilket svarer til at udvide bekr�ftelsesdeadline.
<br>
- Manuelt godkende en registrering som venter p� bekr�ftelse, selv hvis udl�besdatoen er passeret <b>(tvunget bekr�ftelse)</b>.
<br><br>
<b>Tabelsorteringsfunktion</b>: Du kan sortere de viste data ved at klikke p� kolonneoverskifterne. Hold Shift-tasten ned for at sortere op til fire kolonner p� samme tid.';
?>