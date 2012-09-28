<?php
//global $lang;

$lang['UAM_confirmTitle_d'] = '
- Informācijas e-pasta ģenerēšana<br>
- Reģistrācijas pārbaudes e-pasta ģenerēšana<br>
- Autopievienošanās grupas vai statusa ģenerēšana<br>
- Reģistrācijas robežlīnijas pārbaude<br>
- Atgādinājuma e-pasta ģenerēšana<br>
...
';
$lang['UAM_carexcTitle_d'] = 'Varētu būt saistoši aizliegt izmantot lietotājvārdos kādas noteiktas rakstzīmes (piemēram: noraidīt loginus saturošus @). Šī iespēja ļauj izslēgt rakstzīmes vai rakstzīmju secību, notikumus.<br>
NB: Šī iespēja ļauj izslēgt arī veselus vārdus.
<br><br>
<b style=&quot;color: red;&quot;>Uzmanību: Šī opcija neatstāj iespaidu uz lietotājvārdiem, kas izveidoti pirms to aktivēšanas.</b>';
$lang['UAM_passwTitle_d'] = 'Šīs opcijas iespējošana padara par obligātu paroles ietveršanu reģistrējoties, un pieprasa, lai apmeklētāju izvēlētā parole atbilstu minimālajam komplicētības prasībām. Ja šis līmenis nav sasniegts, tiem parādīts sasniegtais komplicētības rādītājs, minimāli pieļaujamais slieksnis, kā arī ieteikumi, kas jādara, lai sasniegtu labāku rezultātu.<br><br>
Pastāv paroles lauka tests, kas mēra paroles komplicētības pakāpi, un var sniegt padomu, kā uzlabot un padarīt šo rezultātu labāku.<br><br>
Note: Komplicētības rādītājs tiek aprēķināts izmantojot vairākus parametrus:
garumu, izmantoto rakstzīmju tipu (burti, cipari, lielie burti, mazie burti, speciālās rakstzīmes). Rezultāts zem100 tiek atzīts par nepietiekami zemu (low), no 100 līdz 500, kā vidēji sarežģīts; virs 500, drošības līmenis ir lielisks.';
$lang['UAM_passwtestTitle'] = 'Paroles komplicētības testēšana';
$lang['UAM_passwtestTitle_d'] = 'Ievadiet testēšanao paredzēto paroli un klikšķiniet uz&quot;Score calculation&quot; lai redzētu rezultātu.';
$lang['UAM_passwadmTitle_d'] = 'Administrators var izveidot lietotāja kontu ar vai bez paroles komplicētības pārbaudes aplikāciju.<br><br>
Note: Ja lietotājs, kura konts jau izveidots, grib nomainīt savu paroli un ir aktīva paroles stingrības uzlabišanas aplikācija, būs jāievēro visi stingrības uzlabošanas noteikumi.';
$lang['UAM_confirmgrpTitle'] = 'Pārbaudāmās Grupas';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color:
red;&quot;>UZMANĪBU : Pārbaudāmo grupu lietošana pieprasa, ka esat izveidojis vismaz vienu lietotājgrupu un, ka tā ir definēta &quot; pēc noklusējuma &quot; Piwigo grupu lietotāju pārvaldītājā.</b><br><br>
Grupas ir validētas (apstiprināti) lietošanai sasaistē ar (apstiprinājums un reģistrācija) &quot;Confirmation of registration&quot;';
$lang['UAM_confirmstatTitle'] = 'Validācijas statūti';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color:
red;&quot;>UZMANĪBU : Statusa pārbaudes lietošana prasa, lai lietotājam &quot;Guest&quot; jaunai reģistrācijai būtu iestatījumi pēc noklusējuma (kā lietotāja paraugā). Nēmiet vērā, ka ir iespējams par paraugu jaunai reģistrācijai izmantot jebkuru citu lietotāju. Papildus informācijai, lūdzu izmantojiet Piwigo dokumentāciju.</b><br><br>
Statūti ir validēti lietošanai sasaistē ar (apstiprinājums un reģistrācija)  &quot;Confirmation of registration&quot;';
$lang['UAM_remailtxt1Title'] = 'Atgādinājuma e-vēstule ar jauni uzģenerēto atslēgu';
$lang['UAM_remailtxt2Title'] = 'Atgādinājuma e-vēstule bez jauni uzģenerētās atslēgas';
$lang['UAM_tipsTitle_d'] = 'Padomi un dažādi izmantošanas piemēri';


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_adminconfmailTitle_d'] = 'Jūs varat atspējot šo apstiprināšanu tikai tiem lietotāju kontiem, ko izveidojis administrators, lietojot Piwigo lietotāju vadības saskarni.<br><br>
Aktivizējot šo iespēju, katram administratora izveidotajam lietotājam tiks nosūtīta elektroniskā pasta vēstuve ar reģistrācijas apstiprinājumu.<br><br>
Atspējojot šo iespēju (pēc noklusējuma), tiek nosūtīta tikai e-pasta informācija (ja &quot;Information email to user&quot;(Informācijas e-pasts lietotājam) ir iespējots).';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.2
// --------- End: New or revised $lang ---- from version 2.15.2

// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_restricTitle_d'] = '
- Rakstzīmes izslēgšana<br>
- Paroles izpilde<br>
- E-pasta domēnu izslēgšana<br>
...
';
$lang['UAM_userlistTitle_d'] = 'Šī lapa domāta administratoru informēšanai. Tajā ir visu galerijā reģistrēto lietotāju saraksts ar to reģistrācijas datumu un apmeklējumu skaitu dienās līdz pēdējai vizītei. Saraksts sakārtots pēc dienu skaita dilstošā secībā.
<br><br>
<b><u>Tikai tad, kad Ghost Tracker ir aktīvs</u></b>, dienu skaits bez apmeklējuma parādās kā sekojošs krāsu kods, pamatojoties uz Ghost Tracker opcijas maksimālajiem iestatījumiem:
<br>
- <b style=&quot;color: lime;&quot;>Zaļa</b> : Kad lietotājs apmeklējis galeriju <b style=&quot;color: lime;&quot;><u>mazāk par 50%</u></b> no Ghost Tracker norādītā maksimuma.<br>
- <b style=&quot;color: orange;&quot;>Oranža</b> : Kad lietotājs apmeklējis galeriju <b style=&quot;color: orange;&quot;><u> starp 50% un 99% </u></b> no Ghost Tracker norādītā maksimuma. <br>
- <b style=&quot;color: red;&quot;>Sarkana</b> : Kad lietotājs apmeklējis galeriju <b style=&quot;color: red;&quot;><u>vairāk kā 100%</u></b> no Ghost Tracker norādītā maksimuma. <b><u>Šajā gadījumā lietotājam jāparādas arī Ghost Tracker tabulā.</u></b><br>
<br>
Piemērs :
<br>
Maksimālais Ghost Tracker konfigurācijas periods ir 100 dienas.
<br>
Lietotājs būs zaļā krāsā, ja būs apmeklējis galeriju mazāk par 50 dienām, oranžā, ja apmeklējums būs starp 50 un 99 dienām, bet sarkanā, ja 100 un vairāk dienu.
<br><br>
<b>NOTE</b>: Saraksts neatspoguļo tos, kuri nav validējuši savu reģistrāciju (ja aktīva reģistrācijas validācijas opcija). Šie lietotāji, tad tiek pārvaldīti īpašā veidā caur &quot;Tracking validations&quot; iezīmi.
<br><br>
<b>Table Sorting Function</b>: Iespējams kārtot attēlojamos datus noklikšķinot uz tabulas galvenēm. Pieturot SHIFT var kārtot pēc maksimums 4 kolonām vienlaicīgi.';
$lang['UAM_usermanTitle_d'] = 'Kad iespējota reģistrācijas ierobežošana pēc laika, zemāk atradīsit to lietotāju sarakstu, no kuriem tiek gaidīta reģistrācijas validācija, <b style=&quot;text-decoration:
underline;&quot;>ir vai nav</b> laikā, lai validētos.<br><br>
Lietotāja reģistrēšanās datums ir zaļā krāsā, ja lietotājs tiek uzskatīts par esošu reģistrācijas validācijas laika periodā. Šinī gadījumā validācijas atslēga vēl ir derīga un mēs varam nosūtīt jums e-pastu ar vai bez jaunās validācijas atslēgas.<br><br>
Ja reģistrācijas datums parādās sarkanā krāsā, validācijas periods ir beidzies. Šinī gadījumā, ja gribat iespējot, lai lietotājs validē savu reģistrāciju, jums jāsūta e-pasts ar validācijas atslēgas reģenerāciju.<br><br>
Visos gadījumos manuāli veikt validāciju.<br><br>
Šajā logā jūs varat:
<br><br>
- Manuāli dzēst kontus <b>(manuālā drenēšana)</b>
<br>
- Ģenerēt e-atgādinātāja pastu  <b>bez</b> jaunas atslēgas ģenerēšanas. Brīdinājums:
Sūta e-atgādinājumus mērķapmeklētājiem. Šī funkcija neizdzēš mērķlietotāju reģistrācijas datumu un taimauts joprojām ir spēkā.
<br>
- Ģenerēt E-atgādinātāja pastu <b>ar</b> jaunas atslēgas ģenerēšanu. Brīdinājums :
Sūta e-atgādinājumus mērķapmeklētājiem. Šī funkcija atiestata mērķapmeklētāju reģistrācijas datumu, kas pielīdzināms validācijas termiņa pagarināšanai.
<br>
- Iesniegt reģistrācijas apstiprināšanu manuāli, pat ja derīguma termiņš ir beidzies <b>(piespiedu validācija)</b>.
<br><br>
<b>Table Sorting Function</b>: tabulas šķirošanas funkcija ļauj kārtot tabulu noklikšķinot uz tabulas galvenēm. Pieturot SHIFT var kārtot pēc maksimums 4 kolonām vienlaicīgi.';
$lang['UAM_gtTitle_d'] = 'Ja Ghost Tracker ir iespējots un inicializēts, zemāk būs pieejams reģistrēto lietotāju saraksts, kuri nav atgriezušies pēc x dienām. &quot;x&quot; ir General Setup iezīmē konfigurētais dienu skaits. Bez tam, ir kolonna, kas norāda, vai mērķapmeklētājiem ir nosūtīts e-pasta atgādinājums. Tādējādi, uzmetot aci, būs redzami tie lietotāji, kuri nav ņēmuši vērā atgādinājumus.<br><br>Šajā logā jūs varat:
<br><br>
- Manuāli dzēst kontus <b>(manual drain)</b>
<br>
- Ģenerēt e-atgādinātāja pastu <b> atiestatot beidzamā apmeklējuma datumu</b>.
Tas dot wildcard mērķapmeklētājiem. Ja apmeklētājs jau ir saņēmis atgādinājumu, nekas netraucē atsūtīt viņam jaunu e-pastu, kas no jauna atiestatīs beidzamā apmeklējuma datumu.
<br><br>
<b>Table Sorting Function</b>: tabulas šķirošanas funkcija ļauj kārtot tabulu noklikšķinot uz tabulas galvenēm. Pieturot SHIFT var kārtot pēc maksimums 4 kolonām vienlaicīgi.';
$lang['UAM_confirmmailTitle_d'] = 'Šī opcija dod iespēju lietotājam apstiprināt savu reģistrāciju ar pie reģistrācijas e-pastā saņemtās saites palīdzību vai to var izdarīt administrators manuāli.<br><br>
Pirmajā gadījumā, e-vēstule tiek veidota no pielāgojamas ievadošās daļas un fiksētās daļas, kas satur aktivēšanas saiti, kas uzģenerēta no gadījuma atslēgas, ko iespējams reģenerēt izmantojot &quot;Tracking validations&quot; iezīmi.<br><br>
Otrajā gadījumā, <b><u>validācijas atslēga ar e-pastu netiek sūtīta!</u></b>.
Apmeklētājiem jāgaida līdz administrators personīgi veic viņu reģistrācijas validāciju caur &quot;Validation tracking&quot; iezīmi. Ieteicams aktivēt Piwigo optciju &quot;Email admins when a new user registers&quot; (skatīt Piwigo konfigurācijas iespējas) un izmantot &quot;Information
email to user&quot; , lai brīdinātu jaunos reģistrantus par nepieciešamību sagaidīt kontu aktivāciju.
<br>
<b style=&quot;color: red;&quot;>NB: Opcijas &quot;Deadline for registration validation limited&quot; un &quot;Remind unvalidated users &quot; jāiestāda atslēgtā (off) stāvoklī, kad iespējota administratora manuālās validācijas funkcija.</b>
<br><br>
Šo iespēju parasti izmanto kopā ar grupas un/vai statūtu automātisku nozīmēšanu. Piemēram, lietotāji, kas nav validējuši savu reģistrāciju, tiks ielikti īpašā lietotāju grupā (ar vai bez ierobežojumie uz piekļuvi galerijai), kamēr lietotājs, kas ir apstiprinājis savu reģistrāciju tiks ielikts grupā &quot;normal&quot;.';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.15.6
$lang['UAM_RedirTitle_d'] = 'Šī opcija automātiski novirza reģistrēto lietotāju uz tā pielāgošanas lapu tikai pie pirmās viņa konekcijas galerijai. <br><br>
Lūdzu ņemiet vērā: Šī iespēja neaatiecas uz visiem reģistrētajiem lietotājiem. Lietotāji ar &quot;admin&quot;, &quot;webmaster&quot; or &quot;generic&quot; statusu nav iekļauti.';
// --------- End: New or revised $lang ---- from version 2.15.6


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_ghosttrackerTitle_d'] = 'Arī saukts par &quot;Ghost
Tracker&quot;, kad šī funkcija aktivēta, jūs varat pārvaldīt savus apmeklētājus atkarībā no viņu apmeklējumu biežuma. Iespējami 2 darbības režīmi:<br><br>
- Manuālā pārvaldība : Kad tiek sasniegts laiks starp 2 apmeklējumiem, apmeklētājs parādās &quot;Ghost Tracker&quot; tabulā, kur jums ir iespēja aizsūtīt atgādinājuma e-pastu lietotājam vai to izdzēst.<br><br>
- Automātiskā pārvaldība : Kad tiek sasniegts laiks starp 2 apmeklējumiem, apmeklētājs tiek automātiski izdzēsts vai pārvietots gaidītāju grupā. Šajā otrajā gadījumā lietotājam var tikt nosūtīts informējošs e-pasts.<br><br>
<b style=&quot;color: red;&quot;>Svarīga piezīme : Ja izmantojat šo variantu pirmo reizi vai pēc ilgāka laika, kurā klāt nākuši jauni lietotāji, to reaktivējat, jums jāinicializē vai jāveic Ghost Tracker reset funkcija (skatīt attiecīgās instrukcijas &quot;Ghost Tracker&quot; lapā).</b>';
$lang['UAM_miscTitle_d'] = '
- Ghosts lietotāju automātiskā un manuālā pārvaldība<br>
- Pēc reģistrētie lietotāji<br>
- Viesu komentāriem nepieciešams segvārds (nickname)<br>
...
';
$lang['UAM_mailexcTitle_d'] = 'Pēc noklusējuma Piwigo atbalsta visas e-pasta adreses formātā xxx@yyy.zz. Šīs opcijas iespējošana ļauj izslēgt no adresēm noteiktus domēnus formātā: @
[domain_name].[domain_extension].<br><br>
Piemēri :<br>
@hotmail.com -> izņemot adreses *@hotmail.com<br>
@hotmail -> izņemot visas adreses *@hotmail*';
$lang['UAM_GTAutoTitle_d'] = 'Šī opcija dod iespēju pielietot (slēptajiem) ghosts lietotājiem automātiskās pārvaldības nosacījumus.
<br><br>Pamatprincips: Lietotājs, kas sasniedzis maksimālo laiku starp apmeklējumiem <b><u>and</u></b> un ir jau par to ar e-pastu brīdināts, tiek uzskatīts kā vairs neesošs. Tad jūs varat pielietot automātiskās apstrādes nosacījumus, kā notecējušo kontu automātisko dzēšanu vai to pazemināšanu, ierobežojot piekļuvi galerijai (automātiski pārvirzot ierobežojumu grupā vai piešķirot šādu statusu).
<br><br>Šis automātiskais process tiek iedarbināts lietotājiem (jebkuram lietotājam!) pieslēdzoties galerijai.';
$lang['UAM_GTAutoDelTitle'] = 'Pielāgots ziņojums par dzēstu kontu';
$lang['UAM_GTAutoGpTitle_d'] = 'Automātiska konta grupas vai statusa maiņa ir ekvivalenta kontu, kas ir iesaistīti un darbojas uz vieniem un tiem pašiem principiem kā validācijas grupas, funkcionalitātes pazemināšanai (skatīt &quot;Setting confirmations and validations of registration&quot;).
Tādējādi jānosaka mainīto (pazemināto) grupu un/vai statusa piekļuves tiesības galerijai. Ja tas jau izdarītslietojot reģistrācijas apstiprināšanas funkciju, varat lietot to pašu grupu vai statusu.<br><br>
<b style=&quot;color: red;&quot;>Important note :</b> Ja no slēptā ghost lietotāja pēc termiņa limita, neskatoties uz informēšanu ar e-pastu (ja iespējots), nav nekādas ziņas, viņš automātiski tie dzēsts no datu bāzes';
// --------- End: New or revised $lang ---- from version 2.16.0
$lang['UAM_StuffsTitle_d'] = 'Šis iespējo papildus UAM bloku PWG Stuff spraudnī (ja instalēts), lai informētu apmeklētājus, kas kādu iemslu dēļ nav apstiprinājuši savu reģistrāciju.
<br><br>
Lūdzu pēc detaļām griezties <b>Tips and Examples of Use</b> šīs lapas apakšā. ';
$lang['UAM_HidePasswTitle_d'] = 'Izvēlieties šeit, ja gribat, lai apmeklētāja parole tiktu ietverta informatīvajā e-pastā. Ja iespējojat šo opciju, tad parole tiek atainota atklātā tekstā. Ja to neiespējojat, tad parole netiek rādīta vispār.';
$lang['UAM_GT_MainTitle_d'] = '-Automātiska vai manuāla slēpto lietotāju pārvaldība<br> 
-E-pasta sūtīšana<br>';
?>