<?php

global $lang,$conf;

$conf_UserAdvManager = isset($conf['UserAdvManager']) ? explode(";" , $conf['UserAdvManager']) : array();


/* Global Configuration Tab */
$lang['Title_Tab1'] = 'UserAdvManager - Configuration Générale';
$lang['Tab_Global'] = 'Configuration Générale';
$lang['UserAdvManager_Title1'] = 'Gestion de l\'inscription des utilisateurs';
$lang['UserAdvManager_Title2'] = 'Validation d\'inscription et gestion de groupes / statuts';
$lang['UserAdvManager_Mail_Info'] = 'Mail d\'information à l\'utilisateur (<b style="color: green;">activez puis sauvegardez pour afficher le contenu paramétrable du mail</b> - <b style="color: red;">Attention : Si, après configuration, vous désactivez cette option, vous perdrez les personnalisations s\'y afférant!</b>)';
$lang['UserAdvManager_Mail_Info_true'] = ' Envoyer un mail à l\'utilisateur reprenant ses infos lors de son inscription ou la mise à jour de son profil.';
$lang['UserAdvManager_Mail_Info_false'] = ' Désactive l\'envoi de mail d\'info. (valeur par défaut)';
$lang['UserAdvManager_MailInfo_Text'] = ' Texte utilisé pour l\'introduction du mail envoyé à l\'utilisateur pour son inscription ou la mise à jour de son profil<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENTION !</b> <b style="color: red;">Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)</b>';
$lang['UserAdvManager_No_Casse'] = 'Utilisateur insensible à la casse';
$lang['UserAdvManager_No_Casse_true'] = ' Rendre le compte utilisateur insensible à la casse, lors de l\'inscription et l\identification.';
$lang['UserAdvManager_No_Casse_false'] = ' Laisser les utilisateur sensible à la casse. (valeur par défaut)';
$lang['UserAdvManager_Username_Char'] = 'Caractères limités pour le nom d\'utilisateur';
$lang['UserAdvManager_Username_Char_true'] = ' Interdire les caractères saisis dans le champs ci-après pour le nom d\'utilisateur lors de l\'inscription == ';
$lang['UserAdvManager_Username_Char_false'] = ' Laisser le contrôle par défaut du nom d\'utilisateur. (valeur par défaut)';
$lang['UserAdvManager_Password_Enforced'] = 'Renforcement des mots de passe - Activer cette option rend la saisie du mot de passe obligatoire à l\'inscription des visiteurs. De plus, le mot de passe saisi par le visiteur devra répondre à un score de complexité <b style="color: green;">(activez puis sauvegardez pour afficher plus d\'infos</b>).';
$lang['UserAdvManager_Password_Enforced_Info'] = '<b style="text-decoration: underline; color: green;">Explications :</b> <b style="color: green;">Le score d\'un mot de passe est calculé en fonction des paramètres de base : longueur, types de caractères utilisés(lettres, chiffres, majuscules, minuscules, caractères spéciaux). Si le mot de passe de l\'utilisateur ne répond pas au score, le score réalisé est affiché ainsi que le score minimum à atteindre et une indication pour augmenter la valeur de ce score. Pour donner un ordre d\'idée, un score inférieur à 100 est considéré comme faible. Entre 100 et 500, la complexité est renforcée et dans la moyenne. Au dela de 500, c\'est Fort Knox !! ;-)<br>Vous pouvez faire vos essais de complexité d\'un mot de passe en utilisant le champ ci-dessous. Cela vous permettra de vous faire une idée du score à définir pour une complexité personnalisée.</b>';
$lang['UserAdvManager_PasswordTest'] = 'Mot de passe à tester : ';
$lang['UserAdvManager_ScoreTest'] = 'Score obtenu : ';
$lang['PasswordTest'] = 'Calcul du score';
$lang['UserAdvManager_Password_Enforced_true'] = ' Mot de passe renforcé obligatoire - Saisir le score minimum (valeur plancher) de complexité du mots de passe == ';
$lang['UserAdvManager_Password_Enforced_false'] = ' Ne pas renforcer les mots de passe. (valeur par défaut)';
$lang['UserAdvManager_AdminPassword_Enforced'] = 'Appliquer également le contrôle du renforcement de mots de passe lorsqu\'un administrateur créé un utilisateur? A noter : Si l\'utilisateur ainsi créé désire changer de mot de passe et que le renforcement des mots de passe pour les utilisateurs est actif, il sera soumis à la règle configurée.';
$lang['UserAdvManager_AdminPassword_Enforced_true'] = 'Activer le renforcement des mots de passe pour les admins.';
$lang['UserAdvManager_AdminPassword_Enforced_false'] = 'Désactiver le renforcement des mots de passe pour les admins. (valeur par défaut)';
$lang['UserAdvManager_Confirm_Mail'] = 'Confirmation de l\'adresse email (<b style="color: green;">activez puis sauvegardez pour afficher le contenu paramétrable du mail</b> - <b style="color: red;">Attention : Si, après configuration, vous désactivez cette option, vous perdrez les personnalisations s\'y afférant!</b>).';
$lang['UserAdvManager_Confirm_Mail_true'] = ' Envoyer un mail permettant a l\'utilisateur de confirmer son adresse email et donc son compte utilisateur.';
$lang['UserAdvManager_Confirm_Mail_false'] = ' Système d\'inscription et de mise à jour standard sans confirmation de l\'adresse email. (valeur par défaut)';
$lang['UserAdvManager_ConfirmMail_Text'] = ' Texte utilisé pour l\'introduction du mail envoyé à l\'utilisateur pour confirmer son adresse mail<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENTION !</b> <b style="color: red;">Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)</b>';
$lang['UserAdvManager_Confirm_Group_Notice'] = 'ATTENTION : L\'utilisation des groupes de validation nécessite que vous ayez créé au moins un groupe d\'utilisateurs et qu\'il soit défini "par défaut" dans la gestion des groupes d\'utilisateurs de Piwigo.';
$lang['UserAdvManager_No_Confirm_Group'] = 'Groupe à utiliser pour les utilisateurs qui n\'ont pas encore confirmé leur adresse email';
$lang['UserAdvManager_Validated_Group'] = 'Groupe à utiliser pour les utilisateurs qui ont validé leur adresse email';
$lang['UserAdvManager_Confirm_Status_Notice'] = 'ATTENTION : L\'utilisation des status de validation nécessite que vous ayez conservé l\'utilisateur "Guest" pour le paramétrage par défaut (modèle) pour les nouveaux inscrits. A noter : Vous pouvez définir n\'importe quel autre utilisateur comme modèle pour les nouveaux inscrits. Reportez-vous à la documentation de Piwigo pour plus de détails.';
$lang['UserAdvManager_No_Confirm_Status'] = 'Status utilisateur à utiliser pour les utilisateurs qui n\'ont pas encore confirmé leur adresse email';
$lang['UserAdvManager_Validated_Status'] = 'Status utilisateur à utiliser pour les utilisateurs qui ont validé leur adresse email, laissez ------- pour garder la valuer par défaut de PWG';
$lang['UserAdvManager_No_Comment_Anonymous'] = 'Pseudo obligatoire sur commentaire';
$lang['UserAdvManager_No_Comment_Anonymous_true'] = ' Le champs auteur doit être renseigné pour enregistrer un commentaire.';
$lang['UserAdvManager_No_Comment_Anonymous_false'] = ' Laisser le fonctionnement par défaut pour enregistrer un commentaire. (valeur par défaut)';
$lang['UserAdvManager_MailExclusion'] = 'Exclusion des domaines de messagerie (<b style="color: green;">activez puis sauvegardez pour afficher le cadre de la liste des exclusions</b> - <b style="color: red;">Attention : Si, après configuration, vous désactivez cette option, vous perdrez les personnalisations s\'y afférant!</b>)';
$lang['UserAdvManager_MailExclusion_true'] = ' Activer l\'exclusion des domaines de messagerie (par exemple @hotmail.* ou @msn.*)';
$lang['UserAdvManager_MailExclusion_false'] = ' Désactiver l\'exclusion des domaines de messagerie. (valeur par défaut)';
$lang['UserAdvManager_MailExclusion_List'] = ' Si l\'exclusion de domaines de messagerie est activée, saisissez les domaines à exclure ici. Il faut respecter le format suivant :<br>@[nom_du_domaine].[extension_du_domaine] - Exemple : @hotmail.com<br><br>Séparez les domaines par une virgule<br>';
$lang['UserAdvManager_GhostTracker'] = 'Gestion des visiteurs fantômes - Permet de gérer les inscrits en fonction de leur date de dernière visite (<b style="color: green;">activez puis sauvegardez pour afficher plus d\'options</b> - <b style="color: red;">Attention : Si, après configuration, vous désactivez cette option, vous perdrez les personnalisations s\'y afférant!</b>) :';
$lang['UserAdvManager_GhostTracker_true'] = ' Activer la gestion des visiteurs fantômes.';
$lang['UserAdvManager_GhostTracker_false'] = ' Désactiver la gestion des visiteurs fantômes. (valeur par défaut)';
$lang['UserAdvManager_GhostTracker_DayLimit'] = ' Saisissez ici le délai maximum, en jours, entre deux visites d\'un visiteur. Lorsque ce délai est atteind, le visiteur en question apparaitra dans le tableau de l\'onglet "Ghost Tracker".';
$lang['UserAdvManager_GhostTracker_ReminderText'] = ' Texte utilisé dans le mail de rappel envoyé à l\'utilisateur pour l\'inciter à revenir visiter la galerie (NB: Le texte pré-renseigné à l\'installation du plugin est donné à titre d\'exemple).<br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENTION !</b> <b style="color: red;">Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)</b>';


/* ConfirmMail Configuration Tab */
$lang['ConfirmMail_Title'] = 'Configuration et gestion avancée de la confirmation par mail';
$lang['Title_Tab2'] = 'UserAdvManager - Configuration de ConfirmMail';
$lang['Tab_ConfirmMail'] = 'Configuration de ConfirmMail';
$lang['UserAdvManager_ConfirmMail_Info'] = 'Limitation du délai de validation de l\'inscription :<br>Si vous activez cette option, sélectionnez le délai (x) )souhaité dans la liste qui suit. Les visiteurs qui s\'inscriront alors auront x jours de délais pour valider leur inscription. Passé ce délai, le lien de validation qu\'ils auront reçu par mail sera expiré.<br>';
$lang['UserAdvManager_ConfirmMail_TimeOut_true'] = 'Activer la limitation du délai d\'inscription.';
$lang['UserAdvManager_ConfirmMail_TimeOut_false'] = 'Désactiver la limitation du délai d\'inscription. (valeur par défaut)';
$lang['UserAdvManager_ConfirmMail_TimeOut'] = 'Délai d\activation :';
$lang['UserAdvManager_ConfirmMail_Delay_Info'] = 'Saisissez ici le nombre de jours avant expiration de la validation d\'inscription : ';
$lang['UserAdvManager_ConfirmMail_Remail'] = 'Activer ou désactiver la fonctionnalité de rappel des inscrits non validés :<br>';
$lang['UserAdvManager_ConfirmMail_Remail_true'] = 'Activer le rappel par mail.';
$lang['UserAdvManager_ConfirmMail_Remail_false'] = 'Désactiver le rappel par mail. (valeur par défaut)';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt1'] = 'Contenu personnalisé du message de rappel avec regénération de clé de validation.<br>Si laissé vide, le mail de rappel ne comportera que le lien de validation. Il est donc vivement conseillé de saisir un petit texte explicatif. (NB : Le texte pré-renseigné à l\'installation du plugin est donné en exemple)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENTION !</b> <b style="color: red;">La modification du texte n\'est possible <b>QUE</b> si le rappel par email est activé. Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)</b>';
$lang['UserAdvManager_ConfirmMail_ReMail_Txt2'] = 'Contenu personnalisé du message de rappel sans regénération de clé de validation.<br>Si laissé vide, le mail de rappel sera vide. Il est donc vivement conseillé de saisir un petit texte explicatif. (NB : Le texte pré-renseigné à l\'installation du plugin est donné en exemple)<br><br><b style="color: red;">(!!! </b><b style="text-decoration: underline; color: red;">ATTENTION !</b> <b style="color: red;">La modification du texte n\'est possible <b>QUE</b> si le rappel par email est activé. Utilisez la méthode multi language du plugin Extended Description si celui-ci est activé !!!)</b>';


/* UserManager Tab */
$lang['UserManager_Title'] = 'Gestion avancée des inscrits non validés';
$lang['Title_Tab3'] = 'UserAdvManager - Gestion des visiteurs';
$lang['Tab_UserManager'] = 'Gestion des visiteurs';
$lang['UserAdvManager_ConfirmMail_User_List'] = 'Lorsque la limitation du délai d\'inscription est activée, vous trouverez ci-dessous la liste des utilisateurs en attente de validation d\'inscription <b style="text-decoration: underline;">qu\'ils soient ou pas</b> dans les délais pour la valider.<br><br>Dans cette vue, vous pouvez :
<br><br>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br>
- Générer l\'email de rappel <b>sans génération</b> d\'une nouvelle clef. Rappel : Cette fonction ne réinitialise pas la date d\'inscription du visiteur ciblé et le délai d\'expiration est toujours d\'actualité.
<br>
- Générer l\'email de rappel <b>avec génération</b> d\'une nouvelle clef. Rappel : Cette fonction réinitialise également la date d\'inscription du visiteur ciblé ce qui équivaut à prolonger le délai de validation.<br>
- Valider manuellement une inscription en attente de validation même si la date d\'expiration est révolue <b>(forçage de la validation)</b>.
<br>';
$lang['Registration_Date'] = 'Date d\'enregistrement';


/* Ghost Tracker Tab */
$lang['GhostTracker_Title'] = 'Gestion avancée des visiteurs fantômes';
$lang['Title_Tab4'] = 'UserAdvManager - Ghost Tracker';
$lang['Tab_GhostTracker'] = 'Ghost Tracker';
$lang['UserAdvManager_GhostTracker_User_List'] = 'Lorsque la gestion des visiteurs fantômes est activée, vous trouverez ci-dessous la liste des visiteurs inscrits sur votre galerie et qui ne sont pas revenus depuis x jours. "x" étant le nombre de jours paramétrés dans l\'onglet de configuration générale. De plus, vous trouverez une colonne précisant si un mail de rappel a déjà été envoyé aux visiteurs ciblés, vous permettant de visualiser d\'un coup d\'oeil et traiter les visiteurs qui n\'auraient pas tenu compte du rappel.<br><br>Dans cette vue, vous pouvez :
<br><br>
- Supprimer manuellement les comptes <b>(purge manuelle)</b>
<br>
- Générer l\'email de rappel <b>avec réinitialisation de la date de dernière visite</b>. Ce qui permet de donner un "joker" au visiteur ciblé. Si le visiteur a déjà bénéficié d\'un mail de rappel, rien n\'empêche de renvoyer un nouveau mail qui réinitialisera, de fait, la date de dernière visite.
<br>';
$lang['LastVisit_Date'] = 'Date de dernière visite';
$lang['Ghost_Reminder'] = 'Email de rappel';
$lang['Reminder_Sent_OK'] = 'OUI';
$lang['Reminder_Sent_NOK'] = 'NON';


/* Mailing */
$lang['infos_mail %s'] = '%s, voici vos informations pour vous identifier sur la galerie :';
$lang['User: %s'] = 'Utilisateur : %s';
$lang['Password: %s'] = 'Mot de passe: %s';
$lang['Add of %s'] = 'Création de %s';
$lang['Update of %s'] = 'Mise à jour de %s';
$lang['Link: %s'] = 'Cliquez sur le lien suivant pour confirmer votre inscription : %s';
$lang['Reminder_with_key_of_%s'] = '%s, votre clé de confirmation a été renouvelée';
$lang['Reminder_without_key_of_%s'] = '%s, votre clé de confirmation va expirer';


/* Email confirmation page */
$lang['title_confirm_mail'] = 'Confirmation de votre inscription';
$lang['confirm_mail_page_title'] = 'Confirmation d\'inscription';
$lang['confirm_mail_ok'] = '<br><br><br>Merci d\'avoir confirmé votre mail et aussi et surtout votre inscription sur le site, profitez bien des photos ...<br><br><br><br>';
$lang['confirm_mail_bad'] = '<br><br><br>Votre clef d\'activation unique est érronée ou expirée ou vous avez déjà validé votre compte, veuillez contacter le webmaster pour régler ce problème.<br><br><br><br>';


/* Errors and Warnings */
$lang['UserAdvManager_audit_ok'] = 'Audit OK';
$lang['UserAdvManager_save_config'] ='Configuration enregistrée.';
$lang['Err_audit_no_casse'] = '<b>Ces comptes sont identiques à la casse près :</b> ';
$lang['Err_audit_username_char'] = '<b>Ce compte contient un ou des caractères interdits :</b> ';
$lang['Err_audit_email_forbidden'] = '<b>Ce compte contient des domaines de messagerie interdit :</b> ';
$lang['Err_audit_advise'] = '<b>Vous avez des corrections a faire pour respecter les nouvelles règles que vous avez activées.<br>Utilisez un utilitaire de gestion de base de données pour corriger les comptes utilisateurs directement dans la table ###_USERS si nécessaire.</b><br><br>';
$lang['UserAdvManager_Empty Author'] = 'Le champs auteur doit être rempli pour enregistrer un commentaire.';
$lang['reg_err_login3'] = 'Sécurité : Le mot de passe est obligatoire !';
$lang['reg_err_login4_%s'] = 'Sécurité : Un système de contrôle calcule un score de complexité sur les mots de passe choisis. La complexité de votre mot de passe est trop faible (score = %s). Veuillez choisir un nouveau mot de passe plus sûre en respectant les règles suivantes :<br>
- Utiliser des lettres et des chiffres<br>
- Utiliser des minuscules et des majuscules<br>
- Augmenter sa longueur (nombre de caractères)<br>
Le score minimal des mots de passe imposé par l\'administrateur est de : ';
if ( isset($conf_UserAdvManager[1]) and $conf_UserAdvManager[1] == 'true' )
	$lang['reg_err_login5'] = 'ce nom utilisateur est déjà pris, ATTENTION le nom est insensible à la casse (Majuscule = Minuscule).';
$lang['reg_err_login6'] = 'le nom utilisateur ne doit pas contenir les caractère suivants : ';
$lang['reg_err_login7'] = 'L\'adresse email est issue d\'un prestataire interdit. Les prestataires d\'adresses email interdits à l\'inscription sont : ';
$lang['UserAdvManager_empty_pwd'] = '[mot de passe vide]';
$lang['UserAdvManager_no_update_pwd'] = '[mise à jour du profil sans changement du mot de passe]';
$lang['invalid_pwd'] = 'Nom utilisateur ou Mot de passe invalide !';
$lang['Err_ConfirmMail_Settings'] = 'Cette page n\'est accessible que si "Confirmation de l\'adresse email" est actif dans l\'onglet "Configuration Générale".';
$lang['Err_UserManager_Settings'] = 'Cette page n\'est accessible que si "Délai de validation d\'inscription" est actif dans l\'onglet "Configuration de ConfirmMail" et si un groupe de visiteurs non validés est configuré dans l\'onglet "Configuration Générale".';
$lang['Err_GhostTracker_Settings'] = 'Cette page n\'est accessible que si "Gestion des visiteurs fantômes" est actif dans l\'onglet "Configuration Générale".';
$lang['No_validation_for_Guest'] = 'Le compte Guest n\'est pas soumis à validation';
$lang['No_validation_for_default_user'] = 'Le compte par défaut n\'est pas soumis à validation';
$lang['No_validation_for_Webmaster'] = 'Le compte du Webmaster n\'est pas soumis à validation';
$lang['No_validation_for_your_account'] = 'Votre compte d\'admin n\'est pas soumis à validation';
$lang['Database_Error'] = '<b><u>Attention ! Erreur critique d\'intégrité dans votre base de données.</u></b><br><br>Veuillez contrôler l\'intégrité de la table #_user_confirm_mail.';
$lang['No_reminder_for_Guest'] = 'Le compte Guest n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['No_reminder_for_default_user'] = 'Le compte par défaut n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['No_reminder_for_Webmaster'] = 'Le compte du Webmaster n\'est pas soumis à recevoir des rappels du GhostTracker';
$lang['No_reminder_for_your_account'] = 'Votre compte d\'admin n\'est pas soumis à recevoir des rappels du GhostTracker';


/* Processing messages */
$lang['%d_Mail_With_Key'] = '%d message avec renouvellement de clé a été envoyé';
$lang['%d_Mails_With_Key'] = '%d messages avec renouvellement de clé ont été envoyés';
$lang['%d_Reminder_Sent'] = '%d message de rappel a été envoyé';
$lang['%d_Reminders_Sent'] = '%d messages de rappel ont été envoyés';
$lang['%d_Validated_User'] = '%d Utilisateur validé manuellement';
$lang['%d_Validated_Users'] = '%d Utilisateurs validés manuellement';


/* Action button names */
$lang['audit'] = 'Auditer les paramètres';
$lang['submit'] = 'Sauvegarder les paramètres';
$lang['Delete_selected'] = 'Supprimer';
$lang['Mail_without_key'] = 'Rappel sans clé';
$lang['Mail_with_key'] = 'Rappel avec clé';
$lang['Force_Validation'] = 'Validation forcée';
$lang['Reminder_Email'] = 'Email de rappel';
?>