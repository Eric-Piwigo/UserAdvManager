<?php

//global $lang,$conf;

//$conf_UAM = unserialize($conf['UserAdvManager']);


/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Reģistrācijas datums';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, lūdzu meklējiet šeit savu informāciju, lai ielogotos galerijā :';
$lang['UAM_User: %s'] = 'Lietotājs: %s';
$lang['UAM_Password: %s'] = 'Parole: %s';
$lang['UAM_Link: %s'] = 'Lūdzu, uzklikšķiniet uz šīs saites, lai apstiprinātu savu reģistrāciju : %s';


/* Email confirmation page */
$lang['UAM_title_confirm_mail'] = 'Apstipriniet savu reģistrāciju';
$lang['UAM_confirm_mail_page_title'] = 'Apstipriniet savu reģistrāciju';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Pārbaude OK';
$lang['UAM_Err_audit_username_char'] = '<b>Šinī kontā izmantotas neatļautas rakstzīmes :</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Šinī kontā izmanots neatļauts e-pasta pakalpojuma sniedzējs :</b> ';
$lang['UAM_Err_audit_advise'] = '<b>Jums ir jāveic korekcijas, lai panāktu atbilstību jaunajiem nosacījumiem, ko esat aktivizējuši.<br> Izmantojiet datu bāzes pārvaldības rīku, lai koriģētu lietotāja kontus tieši tabulā ###_USERS';
$lang['UAM_reg_err_login2'] = 'Lietotājvārdam nav jāsakrīt ar sekojošām rakstzīmēm: ';
$lang['UAM_reg_err_login5'] = 'Jūsu e-pasta pakalpojumu sniedzējam aizliegta reģistrācija. Aizniegtie e-pasta pakalpojumu sniedzēji ir: ';
$lang['UAM_empty_pwd'] = '[tukša parole]';
$lang['UAM_no_update_pwd'] = '[profile atjaunināts neizmainot paroli]';
$lang['UAM_No_validation_for_Guest'] = 'Viesa konts "Guest" nav pārbaudes objekts';
$lang['UAM_No_validation_for_default_user'] = 'Konts pēc noklusēšanas nav pārbaudes objekts';
$lang['UAM_No_validation_for_Webmaster'] = 'Konts "Webmaster" nav pārbaudes objekts';
$lang['UAM_No_validation_for_your_account'] = 'Jūsu personīgais admin konts nav pārbaudes objekts';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d ziņojums ar atslēgas jauninājumu tika nosūtīts';
$lang['UAM_%d_Mails_With_Key'] = '%d ziņojumi ar atslēgas jauninājumu tika nosūtīti';
$lang['UAM_%d_Reminder_Sent'] = '%d atgādinājuma ziņojums tika nosūtīts';
$lang['UAM_%d_Reminders_Sent'] = '%d atgādinājuma ziņojumi tika nosūtīti';
$lang['UAM_%d_Validated_User'] = '%d Lietotājs apstiprināts manuāli';
$lang['UAM_%d_Validated_Users'] = '%d Lietotāji apstiprināti manuāli';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Dzēst';
$lang['UAM_Mail_without_key'] = 'Atgādinājums bez atslēgas';
$lang['UAM_Mail_with_key'] = 'Atgādinājums ar atslēgu';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Rezultāta aprēķins';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'Ghost Tracker (neredzamais izsekotājs)';
$lang['UAM_Reminder'] = 'Atgādinājuma e-pasts';
$lang['UAM_Reminder_Sent_OK'] = 'JĀ';
$lang['UAM_Reminder_Sent_NOK'] = 'NĒ';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Konfigurācija saglabāta.';
$lang['UAM_reg_err_login3'] = 'Drošība : Parole ir obligāta !';
$lang['UAM_reg_err_login4_%s'] = 'Drošība : Kontrolsistēma aprēķina izvēlētās paroles sarežģītības pakāpi. Jūsu paroles sarežģītība ir par zemu (rezultāts = %s). Lūdzu, izveidojiet jaunu, drošāku paroli, sekojot šiem nosacījumiem:<br>
- Lietojiet burtus un ciparus<br>
- Lietojiet apakšējo un augšējo reģistru<br>
- Palieliniet tās garumu (rakstzīmju skaits)<br>
Minimālais, administratora pieprasītais paroles sarežģītības līmenis ir: ';
$lang['UAM_No_reminder_for_Guest'] = 'Konts "Guest" nav atgādinājumu no GhostTracker saņēmējsubjekts';
$lang['UAM_No_reminder_for_default_user'] = 'Konts pēc noklusējumu nav atgādinājumu no GhostTracker saņēmējsubjekts';
$lang['UAM_No_reminder_for_Webmaster'] = 'Konts "Webmaster" nav atgādinājumu no GhostTracker saņēmējsubjekts ';
$lang['UAM_No_reminder_for_your_account'] = 'Jūsu personīgais admin konts nav atgādinājumu no GhostTracker saņēmējsubjekts';
/* Action button names */
$lang['UAM_audit'] = 'Pārbaudes iestatījumi';
$lang['UAM_submit'] = 'Saglabāt iestatījumus';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = 'Ghost Tracker atiestatīšana (reset) paveikta !';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Atiestatīt Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = 'Brīdinājums! Jūs esat ievadījis jaunu rindu (CR-LF) e-pasta izņēmumu saraksta sākumā (parādīts ar sarkanu zemāk). Lai gan šī jaunā rinda nav redzama, tā joprojām eksistē un var būt par iemeslu spraudņa kļūmīgai darbībai. Lūdzu pārrakstiet jūsu izņēmumu sarakstu, lai tas nesāktos ar jaunu tukšu rindu.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Versija : ';
$lang['UAM_SubTitle1'] = 'Spraudņa konfigurācija';
$lang['UAM_Tab_Global'] = 'Konfigurācija';
$lang['UAM_Title1'] = 'Reģistrācijas ierobežojumu iestatīšana';
$lang['UAM_Title2'] = 'Reģistrācijas apstiprinājumu un pārbaudes iestatīšana';
$lang['UAM_Title3'] = 'Pēcreģistrācijas un citu opciju iestatīšana';
$lang['UAM_Title4'] = 'Lietošanas piemēri un ieteikumi';
$lang['UAM_No_Casse'] = 'Lietotājvārdi: Reģistrjutība';
$lang['UAM_Username_Char'] = 'Lietotājvārdi: Rakstzīmju izslēgšana';
$lang['UAM_Username_Char_true'] = ' Aizliegtās rakstzīmes:<br>(Lietot komatu, atdalot rakstzīmes)<br><br>';
$lang['UAM_Username_Char_false'] = ' Atļaut visas (pēc noklusēšanas)';
$lang['UAM_Password_Enforced'] = 'Paroļu drošības līmeņa stiprināšana';
$lang['UAM_Password_Enforced_true'] = ' Iespējot. Minimālais līmenis: ';
$lang['UAM_AdminPassword_Enforced'] = 'Attiecas uz administratoriem';
$lang['UAM_PasswordTest'] = 'Paroles tests: ';
$lang['UAM_ScoreTest'] = 'Rezultāts: ';
$lang['UAM_MailExclusion'] = 'E-pasta domēnu izslēgšana';
$lang['UAM_MailExclusion_true'] = ' Izslēgt sekojošus domēnus:<br>(Lietojiet komatu, lai atdalītu domēnus)';

$lang['UAM_Mail_Info'] = 'Informācijas sūtīšana lietotājiem ar e-pastu:';
$lang['UAM_MailInfo_Text'] = ' Insormācijas e-pasta pielāgošana:';
$lang['UAM_Confirm_Mail'] = 'Reģistrācijas apstiprināšana:';
$lang['UAM_ConfirmMail_Text'] = ' Apstiprinājuma e-pasta pielāgošana:';
$lang['UAM_Confirm_grpstat_notice'] = 'Brīdinājums: Ieteicams lietot vai nu grupu vai pārbaudes statūtus, bet ne abus vienlaicīgi.';
$lang['UAM_Confirm_Group'] = 'Pārbaudes Grupas <br>(atmest ------- lai neietekmētu grupu)';
$lang['UAM_Confirm_Status'] = 'Pārbaudes statūti<br>(atmest ------- lai saglabātu Piwigo noklusējumu)';
$lang['UAM_No_Confirm_Group'] = 'Grupa priekš reģistrāciju neapstiprinājušajiem lietotājiem<br>';
$lang['UAM_Validated_Group'] = 'Grupa priekš reģistrāciju apstiprinājušajiem lietotājiem <br>';
$lang['UAM_No_Confirm_Status'] = ' Reģistrāciju neapstiprinājušo lietotāju statuss<br>';
$lang['UAM_Validated_Status'] = ' Reģistrāciju apstiprinājušo lietotāju statuss<br>';
$lang['UAM_ValidationLimit_Info'] = 'Reģistrācijas apstiprināšanas limita robežlīnija';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Iespējot. Dienu skaits līdz termiņa beigām: ';
$lang['UAM_ConfirmMail_Remail'] = 'Atcerēties neakceptētos lietotājus';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Pielāgot atgādinājuma ziņu<b><u>ņemot vērā</u></b> jaunās reģenerācijas atslēgas pārbaudi.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Pielāgot atgādinājuma ziņu <b><u>bez</u></b> reģenerācijas atslēgas pārbaudes.';

$lang['UAM_GhostTracker'] = 'Ghost (slēpto) apmeklētāju pārvaldība (Ghost Tracker)';
$lang['UAM_GhostTracker_true'] = ' Iespējot. Maksimālais periods dienās starp divām vizītēm: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Ghost Tracker atgadinājuma ziņojuma pielāgošana';


/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'Ghost Tracker';
$lang['UAM_GT_Init'] = 'Ghost Tracker inicializācija';
$lang['UAM_GhostTracker_Title'] = 'Ghost (slēpto) apmeklētāju pārvaldība';
$lang['UAM_GhostTracker_Init'] = 'Ja grasāties lietot šo iespēju pirmo reizi vai reaktivējat to pēc ilgāka laika, kurā reģistrējušies jauni lietotāji, jums jāinicializē vai jāresetē Ghost Tracker. Šī darbība ir veicama tikai pēc opcijas aktivēšanas vai reaktivēšanas. Lūdzu klikšķiniet <u>vienreiz</u> uz reset pogas zemāk.';
/* Mailing */
$lang['UAM_Add of %s'] = 'Profils izveidos priekš %s';
$lang['UAM_Update of %s'] = 'Profils %s atjaunināts';
$lang['UAM_Ghost_reminder_of_%s'] = '%s, šis ir atgādinājuma e-pasts';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, jūsu apstiprināšanas atslēga ir atjaunota';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, jūsu apstiprināšanas atslēgas darbība beigsies';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'Šī lapa pieejama tikai, ja "Ghost Tracker" ir aktīvs iekš "Setting the registrations followed and other options".';
$lang['UAM_Err_Userlist_Settings'] = 'Šī lapa ir pieejama tikai, ja "Monitoring registered users" ir aktīvs iekš "Setting the registrations followed and other options".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Reģistrācijas apstiprināšana administratoriem';
$lang['UAM_Tips1_txt'] = '
<ul>
<li>
             Mērķi:<br>
             - Pēc viņa ienākšanas galerijā: Informēt apmeklētāju, ka viņam jāpiereģistrējas, lai tiktu pie privātiem fotoattēliem<br>
             - Pie reģistrācijas: Ģenerēt tiešsaistes e-pasta apstiprinājumu, informēt jauno lietotāju par to, ka viņš vēl nav apstiprināts un iekļaut viņu gaidīšanas grupā "Waiting"<br>
             - Pie apstiprināšanas: Automātiski pārslēgt no gaidīšanas grupas "Waiting" uz apstiprināto grupu "Validated", kas dod pieeju privātām kategorijām<br><br>
<b>Atgādinājums: Pie standartoperācijām "Guest" (viesis) redz tikai publiskās kategorijas bez informatīvā materiāla.</b>
</li><br><br>
<li>
Priekšnoteikumi:<br>
- Galerija ar visām vai dažām privātajām ketegorijām redzama tikai reģistrētiem lietotājiem<br>
- Vismaz 2 sekojošas Piwigo lietotāju grupas:gaidīšanas grupa  "Waiting," bez tiesībām darboties ar privātām kategorijām un apstiprināto grupa "Validated" ar visām tiesībām darbam ar privātām kategorijām<br>
- UAM spraudnis<br>
- PWG Stuffs spraudnis, moduļa "Personal Block" pievienošanai<br>
- Pēc izvēles (neobligāts), spraudnis Extended Description (paplašināts apraksts), lai nodrošinātu daudzvalodu atbalstu<br>
</li><br><br>
<li>
Posmi:<br><br>
A. UAM spraudnī:
<ol>
<li>Iespējo reģistrācijas apstiprināšanu</li>
<li>Ievada papildinformāciju-skaidrojumu, kas tiks pievienots e-pasta reģistrācijas apstiprinājumam. Gadījumā, ja ir aktivēts spraudnis Extended Description (papildus apraksts), var tikt lietotas valodu iezīmes (tagi)</li>
<li>Izvēlas gaidīšanas grupu "Waiting" sadaļā "Lietotājiem, kas nav apstiprinājuši savu reģistrāciju"</li>
<li>Izvēlas apstiprināto grupu "Validated" sadaļā "Lietotājiem, kas apstiprinājuši savu reģistrāciju"</li>
<li>Saglabā spraudņa konfigurāciju</li>
</ol>
<br>
B. PWG Stuffs spraudnī :
<ol>
<li>Pievieno jauna tipa moduli "Personal block: Rāda bloķētos darbiniekus (piem. redakcionāli)"</li>
<li>Konfigurē moduli, norādot nosaukumu (piem."Registration pending validation") un tā aprakstu, pārbaudot grupu "Waiting"  atļauto grupu sarakstā</li>
<li>Pabeidz moduļa saturu ar informatīvu ziņojumu neapstiprinātajiem lietotājiem.Kā UAM valodas iezīmes var tikt lietotas, ja spraudnī ir iespējota papildus apraksta Extended Description funkcija</li>
<li>Atzīmē "Rādīt moduli vietnes mājas lapā"</li>
<li>Pārbauda moduļa konfigurāciju</li>
</ol>
</li>
</ul>';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Apstiprinājuma lapas teksts – Apstiprinājums akceptēts';
$lang['UAM_confirmmail_custom_Txt2'] = 'Apstiprinājuma lapas teksts – Apstiprinājums noraidīts';
$lang['UAM_LastVisit_Date'] = 'Pēdējais apciemojums';
$lang['UAM_Nb_Days'] = 'Atšķirība dienās';
$lang['UAM_Err_UserManager_Settings'] = 'Šī lapa piejam tikai, ja "Reģistrācijas apstiprināšana" ir aktīva un neapstiprināto apmeklētāju grupa ir nokonfigurēta sadaļā "Setting confirmations and validations of registration" (reģistrācijas pārbaudes un apstiprinājuma iestatījumi).';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'Oficiāls šī spraudņa atbalsts ir pieejams tikai Piwigo forumā:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Forums angļu valodā - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
Vēl pieejasms projekta bugtracker: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Force_Validation'] = 'Manuālā apstiprināšana';
$lang['UAM_Confirm_Mail_true'] = ' Iespējot – Apstiprinājis lietotājs';
$lang['UAM_Confirm_Mail_local'] = ' Iespējot – Apstiprinājis administrators (netika nosūtīta apstiprināšanas atslēga)';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.20.0
$lang['UAM_Disable'] = ' Atspējot (pēc noklusējuma)';
$lang['UAM_Enable'] = ' Iespējot ';
// --------- End: New or revised $lang ---- from version 2.20.0



// --------- Starting below: New or revised $lang ---- from version 2.30.2
$lang['UAM_RedirToProfile'] = 'Novirzīt uz pielāgošanas lapu';
// --------- End: New or revised $lang ---- from version 2.30.2
$lang['UAM %d user pwdreseted'] = 'Lietotājam %d nepieciešams atjautot paroli';
$lang['UAM %d users pwdreseted'] = 'Paroles atjaunošana nepieciešama %d lietotājiem';
$lang['UAM_Password_Reset_Msg'] = 'Lūdzu nomainiet savu paroli';
$lang['UAM_PwdReset_Done'] = 'Parole atjaunota';
$lang['UAM_PwdReset_NA'] = 'Oriģinālā parole';
$lang['UAM_PwdReset_Todo'] = 'Parole jāatjauno';
$lang['UAM_PwdReset'] = 'Paroles atjaunošana';
$lang['UAM_RejectConnexion_Custom_Txt'] = 'Pielāgot noraidījuma tekstu';
$lang['UAM_RejectConnexion'] = 'Noraidīt lietotāja konekciju, kamēr reģistrācija nav apstiprināta';
$lang['UAM_Reject_Page_Title'] = 'Konekcija nav atļauta!';
$lang['UAM_Admins cannot be pwdreset'] = 'Paroles atjaunošanu nevar veikt admins kontam!';
$lang['UAM_Confirm_Level'] = 'Konfidencialitātes līmenis (atstāt ------- lai paturētu Piwigo pēc noklusējuma)';
$lang['UAM_Default user cannot be pwgreset'] = 'Paroles atjaunošanu nevar veikt lietotāja pēc noklusējuma kontam!';
$lang['UAM_Default_AdminValidationMail_Subject'] = '[username] - Reģistrācija validēta [mygallery]';
$lang['UAM_Default_ConfirmMail_Subject'] = '[username] reģistrācijas apstiprināšana [mygallery]';
$lang['UAM_Default_GTAutoMail_Subject'] = '[username] - Jūsu konts [mygallery] ir pazemināts';
$lang['UAM_AdminValidationMail_Subject'] = 'Pielāgot manuālās reģistrācijas e-pasta tematu';
$lang['UAM_AdminValidationMail_Text'] = 'Paziņojums par reģistrācijas manuālo apstiprinājumu';
$lang['UAM_ConfirmMail_ReMail_Subject'] = 'Pielāgot reģistrācijas apstiprinājuma atgādinājuma e-pasta tematu';
$lang['UAM_ConfirmMail_Subject'] = 'Pielāgot reģistrācijas apstiprinājuma e-pasta tematu';
$lang['UAM_CustomPasswRetr'] = 'Pielāgot zaudētās paroles e-pasta saturu';
$lang['UAM_Default_CfmMail_Custom_Txt1'] = 'Sveicināti [username]! Ir apstiprinājies, ka esat saprātīga būtne un tagad varat izmantot [mygallery]!';
$lang['UAM_Default_CfmMail_Custom_Txt2'] = 'Jūsu aktivācijas atslēga ir nekorekta vai novecojusi vai jūsu konts jau ir apstiprināts, lūdzu sazinieties ar webmasteru, lai atrisinātu šo preoblēmu.';
$lang['UAM_Default_ConfirmMail_Remail_Subject'] = 'Atgādinājums - [username] reģistrācijas apstiprināšana galerijā [mygallery]';
$lang['UAM_Default_GTReminder_Subject'] = '[username] - Pagājis ilgs laiks kopš pēdējo reizi apmeklēta galerija [mygallery]';
$lang['UAM_Deleted_Account_Redirection_Page'] = 'Piekļuve liegta - Konts iznīcināts!';
$lang['UAM_Demotion of %s'] = '%s pazemināšana';
$lang['UAM_DumpTxt'] = 'Izveidot jūsu configurācijas rezerves kopiju un atjaunot konfigurāciju';
$lang['UAM_Dump_Download'] = 'Lai lejupielādētu rezerves kopijas failu, veiciet atzīmi šajā lodziņā.';
$lang['UAM_Dump_NOK'] = 'Kļūda: Nav iespējams izveidot rezerves kopijas failu!';
$lang['UAM_Dump_OK'] = 'Rezerves kopijas fails sekmīgi izveidots';
$lang['UAM_Expired_Level'] = '<b> Privātums līmenis </ b> lietotāja reģistrācijai ir beidzies <br>';
$lang['UAM_Expired_Status'] = 'Lietotāju reģistrācijas <b>Status</b> ir novecojis<br>';
$lang['UAM_GTAutoDel'] = 'Kontu automātiskā dzēšana';
$lang['UAM_GTAuto'] = 'Automātiska slēpto lietotāju pārvaldība';
$lang['UAM_Bad_version_backup'] = 'Šī rezerves kopijas versija nesakrīt ar spraudņa versiju! Atjaunošana netika veikta.';
$lang['UAM_Default_GhstDemotion_Txt'] = 'Atvainojiet [username], jūsu konts novecojis, jo pagājis pārāk ilgs laiks kopš jūsu pēdējā [mygallery] apmeklējuma. Lūdzu, izmantojiet šo saiti, lai atkārtoti apstiprinātu savu kontu:
   ';
$lang['UAM_Default_InfoMail_Subject'] = '[username] - Jūsu reģistrācijas informācija galerijai [mygallery]';
$lang['UAM_Default_PwdRequest_Txt'] = 'Jūs esat pieprasijis(usi) mūsu galerijas paroles atjaunošanu. Lūdzu, zemāk skatiet jūsu jaunos savienojuma iestatījumus.';
$lang['UAM_Default_ValidationTimeout_Txt'] = 'Atvainojiet, jūsu konts ir dzēsts, jo neesat apstiprinājis(usi) reģistrāciju paredzētajā laikā - ([Kdays] days). Lūdzu, atkārtojiet reģistrāciju, izmantojot derīgu, nebloķētu e-pasta kontu.';
$lang['UAM_GTAutomail_Text'] = 'Pielāgot pazemināšanas e-pasta tekstu';
$lang['UAM_Generic cannot be pwdreset'] = 'Vispārējiem kontiem nevar iestatīt paroles atjaunošanu!';
$lang['UAM_Guest cannot be pwdreset'] = 'Paroles atjaunošanu nevar iestatīt viesu kontam!';
$lang['UAM_HidePassw'] = 'Parole skaidrā teksta informācijas e-pastā';
$lang['UAM_MailInfo_Subject'] = 'Pielāgot informācijas e-pasta tematu';
$lang['UAM_MiscOptions'] = 'Dažādi citi varianti (opcijas)';
$lang['UAM_NewFeature'] = 'Jauna iespēja!';
$lang['UAM_No_Backup_File'] = 'Nav pieejamas rezerves kopijas!';
$lang['UAM_No_Ghosts'] = 'Uz doto brīdi nav slepeno apmeklētāju';
$lang['UAM_No_Usermanager'] = 'Uz doto momentu nav neapstiprinātu reģistru, ko rādīt';
$lang['UAM_Restore_File'] = 'Atjaunošanas Konfigurācija';
$lang['UAM_Save'] = 'Uzsākt rezerves kopijas veidošanu';
$lang['UAM_Stuffs_Desc'] = 'Pievieno informācijas bloku priekš neapstiprinātiem lietotājiem';
$lang['UAM_Stuffs_Title'] = 'UAM bloks';
$lang['UAM_Stuffs'] = 'PWG Personāla bloks';
$lang['UAM_Title5'] = 'Dažādi varianti';
$lang['UAM_Tracking confirmations'] = 'Izsekošanas apstiprinājumi';
$lang['UAM_Tracking registered users'] = 'Izsekot reģistrētos lietorājus';
$lang['UAM_USRAutoMail'] = 'Automātisks e-pasta atgādinātājs';
$lang['UAM_Valid_Level'] = 'Konfidencialitātes līmenis lietotājiem, kuri ir apliecinājuši savu reģistrāciju <br>';
$lang['UAM_Validation of %s'] = '%s apstiprinājums ';
$lang['UAM_Webmaster cannot be pwdreset'] = 'Paroles atjaunošanu nevar iestatīt webmastera kontam!';
$lang['UAM_You cannot pwdreset your account'] = 'Paroles atjaunošanu nevar iestatīt jūsu paša(as) kontam!';
$lang['UAM_You need to confirm pwdreset'] = 'Jums jāapstiprina paroles atjaunošana (atzīmēt rūtiņā)!';
$lang['UAM_title_redir_page'] = 'Piekļuve liegta konta iznīcināšanas dēļ!';
$lang['UAM_GTAutoGp'] = 'Grupas statusa/konfidencialitātes līmeņa automātiska nomaiņa';
$lang['UAM_No_Userlist'] = 'Uz doto momentu nav lietotāju ko attēlot ';
$lang['UAM_No_Valid_Level'] = 'Savu reģistrāciju neapstiprinājošo lietotāju konfidencialitātes līmenis<br>';
$lang['UAM_Password reset selected users'] = 'Pieprasīt paroles atjaunošanu atlasītajiem lietotājiem';
$lang['UAM_Tips2'] = 'Informācija par neapstiprinātu reģistrāciju ar UAM un Additional Pages (papildu lapas)';
$lang['UAM_Tips1'] = 'Informācija par neapstiprinātu reģistrāciju ar UAM un PWG_Stuffs';
$lang['UAM_USRAutoDel'] = 'Pielāgotais ziņojums par dzēsto kontu';
$lang['UAM_USRAuto'] = 'Neapstiprināto lietotāju automātiskā pārvaildība';
$lang['UAM_GTReminder_Subject'] = 'Pielāgot manuālā Ghost Tracker (Spoku Izsekotāja) atgādinājuma e-pasta tēmu';
$lang['UAM_Restoration_OK'] = 'Jūsu konfigurācijas atjaunošana pabeigta sekmīgi! Lai redzētu atjaunotos iestatījumus, lūdzu ielādējiet no jauna UAM administrēšanas lapu.';
$lang['UAM_GTAutomail_Subject'] = 'Pielāgot automātiskā Ghost Tracker (Spoku Izsekotāja) pazemināšanas e-pasta tēmu ';
$lang['UAM_Restoration_NOK'] = 'Atjaunojot konfigurāciju, notikusi kļūda. Lūdzu pārbaudiet sava rezerves kopijas faila derīgumu. ';
$lang['UAM_MailExclusion_No'] = 'Izslēgtie E-pasta domēni - Nav pieejami, jo šie e-pasti reģistrācijai nav atļauti!';
$lang['UAM_Default_InfoMail_Txt'] = 'Esat veicis(kusi) būtiskas izmaiņas savā profilā galerijā [mygallery]. Lūdzu, skatiet zemāk savus jaunos iestatījumus:';
$lang['UAM_Restore'] = 'Lai atjaunotu jūsu konfigurācijas rezerves kopijas failu. Vērā tiek ņemts tikai uz servera saglabātais fails.
<br><br>
<b style="color: red;">Pievērsiet uzmanību rezerves kopijas versijai!<br>Rezerves kopija, kas izveidota ar vienas versijas spraudni, var tikt atjaunota tikai uz to pašu versiju.</b>';
$lang['UAM_Default_ConfirmMail_Txt'] = 'Sveiki [lietotājvārds]! Paldies, ka  esat reģistrējies [mygallery].

Lai pabeigtu procesu un gūtu iespēju pārlūkot attēlus, laipni lūdzam apstiprināt savu reģistrāciju, noklikšķinot uz saites šajā ziņojumā.';
$lang['UAM_Expired_Group'] = '<b> Grupas </ b> lietotāja reģistrācijas termiņš ir beidzies <br>';
$lang['UAM_GTAutoMail'] = 'Automātiska e-pasta nosūtīšana, mainot grupu / statusu/ konfidencialitātes līmeni';
$lang['UAM_Default_RejectConnexion_Txt'] = 'Atvainojiet, bet jūs vēl neesat apstiprinājis(usi) savu reģistrāciju un tādēļ vēl nevarat pieslēgties galerijai. Lūdzu pārbaudiet savu e-pastu. Tur būtu jābūt no galerijas atsūtītai vēstulei, saturošai saiti uz reģistrācijas apstiprināšanu. Pretējā gadījumā, ja nav, sazinieties ar vebmāsteru. ';
$lang['UAM_Default_GhstDeletion_Txt'] = 'Atvainojiet [lietotājvārds], jūsu konts ir izdzēsts, jo pagājis pārāk ilgs laiks kopš Jūsu pēdējā apmeklējuma [mygallery]. Lūdzu reģistrējieties vēlreiz.';
$lang['UAM_Default_AdminValidation_Txt'] = 'Sveiki [username]! Paldies par reģistrēšanos un laipni lūgti galerijā [mygallery].

Jūsu kontu manuāli ir apstiprinājis galerijas  [mygallery] vebmāsters. Tagad varat pieteikties kontā [myurl] un veikt nepieciešamās izmaiņas savā profilā. ';
$lang['UAM_Error_Using_illegal_flag'] = 'Sintakses kļūda! [Kdays] Automātiskā Teksts karodziņš tiek lietots kā "reģistrācijas termiņa apstiprināšanas limita robeža"- opcija nav aktivēta. Lūdzu, aktivējiet opciju vai izlabojiet sarkanā krāsā iekrāsotos teksta laukus.';
$lang['UAM_Error_Using_illegal_Kdays'] = '[Kdays] tega (birka) izmantošana tiek atļauta tikai tad, ja ir aktīva reģistrācijas apstiprināšanas limita robeža. Atsaukties uz teksta lauku sarkanā krāsā, lai novērstu problēmu.';
$lang['UAM_Default_CfmMail_Remail_Txt2'] = 'Sveiki [username].

Šis ir atgādinājums, jo esat reģistrējies mūsu galerijā [mygallery], bet neesat apstiprinājis savu reģistrāciju un jūsu  apstiprinājuma atslēgas termiņš drīz beigsies.Lai ļautu piekļūt mūsu galerijai, jums ir x dienas, lai apstiprinātu savu reģistrāciju, ejot pa saiti, ko jums bija jāsaņem, kad reģistrējāties.

Piezīme: Pēc šī perioda, jūsu konts tiks neatgriezeniski izdzēsts.';
$lang['UAM_Default_CfmMail_Remail_Txt1'] = 'Sveiki [username].

Šis ir atgādinājums, jo esat reģistrējies mūsu galerijā [mygallery], bet neesat apstiprinājis savu reģistrāciju un jūsu  apstiprinājuma atslēgas termiņš ir beidzies. Lai joprojām ļautu piekļūt mūsu galerijai, jūsu apstiprinājumu periods ir atjaunots. Jums ir atkal x dienas, lai apstiprinātu savu reģistrāciju.

Piezīme: Pēc šī perioda, jūsu konts tiks neatgriezeniski izdzēsts.';
$lang['UAM_Default_GhstReminder_Txt'] = 'Sveiki [username].

Šis ir atgādinājums, jo pagājis ļoti ilgs laiks kopš Jūsu pēdējā mūsu galerijas [mygallery] apmeklējuma. Ja vairs nevēlaties zmantot savu piekļuves kontu, lūdzu, dariet mums to zināmu, atbildot uz šo e-pastu. Jūsu konts tiks izdzēsts.

Ja saņemsit šo ziņu un [days] dienu laikā nebūs apmeklējumu, mēs būsim spiesti automātiski izdzēst jūsu kontu.

Vēlot to vislabāko,

Galerijas [mygallery] - [myurl] administrators.';
?>