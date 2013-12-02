<?php

global $lang,$conf;

$conf_UAM = unserialize($conf['UserAdvManager']);


/* UserManager Tab */
$lang['UAM_Registration_Date'] = 'Fecha de registro';


/* Mailing */
$lang['UAM_infos_mail %s'] = '%s, Aquí encontrará su información para entrar en la galería:';
$lang['UAM_User: %s'] = 'Usuario : %s';
$lang['UAM_Password: %s'] = 'Contraseña: %s';
$lang['UAM_Link: %s'] = 'Por favor, haga clic en este enlace para confirmar su registro: %s';


/* Email confirmation page */
$lang['UAM_title_confirm_mail'] = 'Validar su inscripción';
$lang['UAM_confirm_mail_page_title'] = 'Validar su inscripción';
$lang['confirm_mail_ok'] = '<br><br><br>Gracias por haber confirmado su dirección de correo electrónico y su registro en la galería. ¡Que disfrute!<br><br><br><br>';


/* Errors and Warnings */
$lang['UAM_audit_ok'] = 'Auditoría OK';
$lang['UAM_Err_audit_username_char'] = '<b>Esta cuenta utiliza uno o más caracteres prohibidos:</b> ';
$lang['UAM_Err_audit_email_forbidden'] = '<b>Esta cuenta utiliza un proveedor de correo electrónico  prohibido:</b> ';
$lang['UAM_Err_audit_advise'] = '<b>Usted tiene que realizar correcciones para cumplir con las nuevas normas que ha activado.<br>Use una herramienta de gestión de base de datos para corregir las cuentas de usuario directamente en la tabla ###_USERS';
$lang['UAM_reg_err_login2'] = 'El nombre de usuario no puede coincidir con los siguientes caracteres: ';
$lang['UAM_reg_err_login5'] = 'Su proveedor de correo electrónico está prohibido para el registro. Proveedores de correo electrónico en veda son: ';
$lang['UAM_empty_pwd'] = '[contraseña vacía]';
$lang['UAM_no_update_pwd'] = '[Perfil actualizado sin cambiar contraseña]';
$lang['UAM_No_validation_for_Guest'] = 'La cuenta "Invitado"  no está sujeta a la validación';
$lang['UAM_No_validation_for_default_user'] = 'La cuenta predeterminada no está sujeta a la validación';
$lang['UAM_No_validation_for_Webmaster'] = 'La cuenta "webmaster" no está sujeta a la validación';
$lang['UAM_No_validation_for_your_account'] = 'Tu cuenta de administrador personnal no está sujeta a la validación';


/* Processing messages */
$lang['UAM_%d_Mail_With_Key'] = '%d mensaje con la clave de renovación fue enviado';
$lang['UAM_%d_Mails_With_Key'] = '%d Mensajes con la clave de renovación fueron enviados';
$lang['UAM_%d_Reminder_Sent'] = '%d mensaje recordatorio fue enviado';
$lang['UAM_%d_Reminders_Sent'] = '%d mensajes recordatorios fueron enviados ';
$lang['UAM_%d_Validated_User'] = '%d usuario validado manualmente';
$lang['UAM_%d_Validated_Users'] = '%d usuarios validados manualmente';


/* Action button names */
$lang['UAM_Delete_selected'] = 'Suprimir';
$lang['UAM_Mail_without_key'] = 'Aviso sin clave';
$lang['UAM_Mail_with_key'] = 'Aviso con clave';




// --------- Starting below: New or revised $lang ---- from version 2.12.0 and 2.12.1
/* Global Configuration Tab */
$lang['UAM_PasswordTest'] = 'Cálculo de la puntuación';
/* Ghost Tracker Tab */
$lang['UAM_Tab_GhostTracker'] = 'Ghost Tracker';
$lang['UAM_Reminder'] = 'Recordatorio por email';
$lang['UAM_Reminder_Sent_OK'] = 'SI';
$lang['UAM_Reminder_Sent_NOK'] = 'NO';
/* Errors and Warnings */
$lang['UAM_save_config'] ='Configuración guardada.';
$lang['UAM_reg_err_login3'] = '¡Seguridad: Contraseña obligatoria!';
$lang['UAM_reg_err_login4_%s'] = 'Seguridad: Un sistema de control calcula la puntuación de la complejidad de la contraseñas. La complejidad de la contraseña es demasiado baja (puntuación = %s). Por favor, elija una nueva contraseña más segura siguiendo estas reglas:<br>
- Usar letras y números<br>
- Utilice minúsculas y mayúsculas<br>
- Aumentar su longitud (número de caracteres)<br>
La puntuación mínima de las contraseñas   exigida por el administrador es la siguiente: ';
$lang['UAM_No_reminder_for_Guest'] = 'La cuenta "Invitado" no está sujeta a recibir recordatorios de Ghost Tracker';
$lang['UAM_No_reminder_for_default_user'] = 'La cuenta predeterminada no está sujeto a recibir recordatorios de Ghost Tracker';
$lang['UAM_No_reminder_for_Webmaster'] = 'La cuenta "webmaster" no está sujeta a recibir recordatorios de Ghost Tracker';
$lang['UAM_No_reminder_for_your_account'] = 'Su cuenta de administrador personnal no está sujeta a recibir recordatorios de Ghost Tracker';
/* Action button names */
$lang['UAM_audit'] = 'Auditar la configuración';
$lang['UAM_submit'] = 'Guardar configuración';
// --------- End: New or revised $lang ---- from version 2.12.0 and 2.12.1


// --------- Starting below: New or revised $lang ---- from version 2.12.2
/* Errors and Warnings */
$lang['UAM_GhostTracker_Init_OK'] = '¡Ghost Tracker inicializado!';
/* Action button names */
$lang['UAM_GT_Reset'] = 'Inicializar Ghost Tracker';
// --------- End: New or revised $lang ---- from version 2.12.2


// --------- Starting below: New or revised $lang ---- from version 2.12.8
/* Errors and Warnings */
$lang['UAM_mail_exclusionlist_error'] = '¡Advertencia! Ha introducido una nueva línea (CR-LF) al principio de la lista de exclusión de correo electrónico (en rojo abajo). Aunque esta nueva línea no es visible, todavía está presente y puede causar un mal funcionamiento del plugin. Por favor, vuelva a escribir en su lista de exclusión de una manera que no comienza con una nueva línea.';
// --------- End: New or revised $lang ---- from version 2.12.8


// --------- Starting below: New or revised $lang ---- from version 2.13.0
/* UserList Tab */
$lang['UAM_UserList_Title'] = 'Seguimiento de los usuarios registrados';
// --------- End: New or revised $lang ---- from version 2.13.0


// --------- Starting below: New or revised $lang ---- from version 2.13.4
/* Global Configuration Tab */
$lang['UAM_Title_Tab'] = 'UserAdvManager - Versión: ';
$lang['UAM_SubTitle1'] = 'Configuración del plugin';
$lang['UAM_Tab_Global'] = 'Configuración';
$lang['UAM_Title1'] = 'Configuración de las restricciones de registro';
$lang['UAM_Title2'] = 'Configuración de las confirmaciones y validaciones de registro';
$lang['UAM_Title3'] = 'Configuración de los registros seguidos y otras opciones';
$lang['UAM_Title4'] = 'Consejos y ejemplos de uso';
$lang['UAM_No_Casse'] = 'Nombres de usuarios: mayúsculas y minúsculas';
$lang['UAM_Username_Char'] = 'Nombres de usuarios: Excluyendo los caracteres';
$lang['UAM_Username_Char_true'] = ' Prohibición de caracteres:<br>(Utilice una coma para separar cada caracteres)<br><br>';
$lang['UAM_Username_Char_false'] = ' Permiso de todos (por defecto)';
$lang['UAM_Password_Enforced'] = 'Fortalecimiento del nivel de seguridad de las contraseñas';
$lang['UAM_Password_Enforced_true'] = ' Activar. Puntuación mínima:';
$lang['UAM_AdminPassword_Enforced'] = 'Aplicar a los administradores';
$lang['UAM_PasswordTest'] = 'Test de Contraseña: ';
$lang['UAM_ScoreTest'] = 'Resultado: ';
$lang['UAM_MailExclusion'] = 'Exclusión de dominios de correo electrónico';
$lang['UAM_MailExclusion_true'] = ' Excluir los siguientes dominios: <br>(Utilice una coma para separar cada dominio)';

$lang['UAM_Mail_Info'] = 'Información por correo electrónico para el usuario:';
$lang['UAM_MailInfo_Text'] = ' Personalización del correo electrónico de información:';
$lang['UAM_Confirm_Mail'] = 'Confirmación de registro:';
$lang['UAM_ConfirmMail_Text'] = ' Personalización del correo electrónico de confirmación:';
$lang['UAM_Confirm_grpstat_notice'] = 'Precaución: Es recomendable utilizar el grupo o los estatutos de validación y no ambos simultáneamente.';
$lang['UAM_Confirm_Group'] = 'Grupos de validación<br>(Dejar ------- para no afectar grupo)';
$lang['UAM_Confirm_Status'] = 'Estatutos de validación<br>(Dejar ------- para mantener el valor predeterminado de Piwigo)';
$lang['UAM_No_Confirm_Group'] = 'Grupo para los usuarios que no han validado su registro<br>';
$lang['UAM_Validated_Group'] = 'Grupo para los usuarios que han validado su registro<br>';
$lang['UAM_No_Confirm_Status'] = 'Situación de los usuarios que no han validado su registro<br>';
$lang['UAM_Validated_Status'] = 'Situación de los usuarios que han validado su registro<br>';
$lang['UAM_ValidationLimit_Info'] = 'Plazo para la validación de registro limitado';
$lang['UAM_ConfirmMail_TimeOut_true'] = ' Activar. Número de días hasta el vencimiento: ';
$lang['UAM_ConfirmMail_Remail'] = 'Recuerde a los usuarios no validados';
$lang['UAM_ConfirmMail_Remail_true'] = ' Activar';
$lang['UAM_ConfirmMail_ReMail_Txt1'] = 'Personalización del mensaje recordatorio <b><u>con</u></b> la regeneración de validación de claves.';
$lang['UAM_ConfirmMail_ReMail_Txt2'] = 'Personalización del mensaje recordatorio <b><u>sin</u></b> la regeneración de la validación de claves.';

$lang['UAM_GhostTracker'] = 'Gestión de Espíritu visitantes (Tracker Ghost)';
$lang['UAM_GhostTracker_true'] = ' Activar. Período máximo de días entre dos visitas: ';
$lang['UAM_GhostTracker_ReminderText'] = 'Personalización del mensaje recordatorio de Ghost Tracker';
$lang['UAM_LastVisit'] = ' Seguimiento de usuarios registrados';

$lang['UAM_Tab_UserManager'] = 'Seguimiento de las validaciones';

/* UserManager Tab */
$lang['UAM_SubTitle3'] = 'Seguimiento de las validaciones';
$lang['UAM_UserManager_Title'] = 'Seguimiento de las validaciones';
/* Ghost Tracker Tab */
$lang['UAM_SubTitle4'] = 'Ghost Tracker';
$lang['UAM_GT_Init'] = 'Inicialización de Ghost Tracker';
$lang['UAM_GhostTracker_Title'] = 'Gestión de los espíritu visitantes';
$lang['UAM_GhostTracker_Init'] = 'Si habilita esta función por primera vez o ha reactivado después de un largo período durante el cual los visitantes se han registrado de nuevo, usted debe inicializar o restablecer el Rastreador de Ghost. Esta acción se realiza sólo después de la activación o reactivación de la opción. Por favor, haga clic <u>una vez</u>en el botón de reset de abajo.';
/* UserList Tab */
$lang['UAM_SubTitle5'] = 'Seguimiento de los usuarios';
$lang['UAM_Tab_UserList'] = 'Seguimiento de los usuarios';
/* Mailing */
$lang['UAM_Add of %s'] = 'Perfil creado para %s';
$lang['UAM_Update of %s'] = '%s Perfil actualizado';
/* Email confirmation page */
$lang['confirm_mail_bad'] = '<br><br><br>Su clave de activación es incorrecta o está vencida o ya ha validado su cuenta, por favor, póngase en contacto con el webmaster para solucionar este problema.<br><br><br><br>';
/* Mailing */
$lang['UAM_Ghost_reminder_of_%s'] = '%s, este es un recordatorio por correo electrónico';
$lang['UAM_Reminder_with_key_of_%s'] = '%s, su clave de validación se ha renovado';
$lang['UAM_Reminder_without_key_of_%s'] = '%s, su clave de validación expirará';
/* Errors and Warnings */
$lang['UAM_Err_GhostTracker_Settings'] = 'Esta página está disponible sólo si "Ghost Tracker" está activo en "Configuración de los registros seguido y otras opciones".';
$lang['UAM_Err_Userlist_Settings'] = 'Esta página está disponible sólo si "Seguimiento de los usuarios registrados" está activo en la "Configuración de los registros seguidos y otras opciones".';
// --------- End: New or revised $lang ---- from version 2.13.4


// --------- Starting below: New or revised $lang ---- from version 2.14.0
$lang['UAM_AdminConfMail'] = 'Confirmación de registro por los administradores';
$lang['UAM_Tips1_txt'] = '
          <ul>
            <li>
            Objectivos:<br>
            - A su llegada a la galería: Avisar al visitante de que tiene que registrarse para acceder a fotos privadas<br>
            - En el registro: Generar una validación de correo electrónico con enlace directo, informar al nuevo usuario de su falta de validación y integrarlo al grupo "Espera"<br>
            - En la validación: cambiar automáticamente de grupo "Espera" al grupo "Validado", que proporciona acceso a categorías particulares<br><br>
            <b>Recuerde: En funcionamiento normal, el "Invitado" sólo ve las categorías de público, sin mensaje de información.</b>
            </li><br><br>
            <li>
Requisito previo:<br>
- Una galería con todas o algunas categorías privadas, visible sólo por los usuarios registrados<br>
- Al menos los 2 grupos de usuarios siguientes de Piwigo : "Espera," sin permiso en las categorías de privados, y "Validado" con todos los permisos en las categorías de privados<br>
- UAM plugin<br>
- PWG Stuffs plugin, para agregar un tipo de módulo "Personal Block"<br>
- Opcionalmente, la Extended Description plugin para soportar múltiples idiomas<br>
            </li><br><br>
            <li>
Etapas:<br><br>
A. En el plugin UAM:
              <ol>
                <li>Activar la confirmación de registro</li>
                <li>Introduzca el texto para la explicación adicional, que se adjunta al correo de confirmación de registro. Si se activa el plugin Extended Description, las etiquetas de idioma se pueden utilizar</li>
                <li>Seleccione la opción "Espera" del grupo en "Para los usuarios que no han validado su registro"</li>
                <li>Seleccione la opción "Validado" en grupo "Para los usuarios que han validado su registro"</li>
                <li>Guardar la configuración del plug-in</li>
              </ol>
<br>
B. En plugin PWG Stuffs :
              <ol>
                <li>Añadir un tipo de módulo nuevo "bloque Personal: Muestra una plantilla de bloque (por ejemplo, un editorial)"</li>
                <li>Configurar el módulo, lo que indica el título (por ejemplo, "en espera de la validación de Registro") y su descripción, y solamente "Espera" en la lista de grupos permitido</li>
                <li>El contenido completo del módulo con la información del mensaje que se mostrará a los usuarios no validados. Como UAM, las balisas de  lenguajes pueden ser utilizadas si el plugin Extended Description está activado</li>
                <li>Active la casilla "Mostrar el módulo en la página principal del sitio"</li>
                <li>Validar la configuración del módulo</li>
              </ol>
            </li>
          </ul>';
// --------- End: New or revised $lang ---- from version 2.14.0


// --------- Starting below: New or revised $lang ---- from version 2.15.0
$lang['UAM_confirmmail_custom_Txt1'] = 'Texto de la página de confirmación - Confirmación aceptada';
$lang['UAM_confirmmail_custom_Txt2'] = 'Texto de la página de confirmación - Confirmación rechazada';
$lang['UAM_LastVisit_Date'] = 'Su última visita';
$lang['UAM_Nb_Days'] = 'Diferencia en días';
$lang['UAM_Err_UserManager_Settings'] = 'Esta página está disponible sólo si "Confirmación de registro" está activo y si un grupo de visitantes no ha sido validada está configurado en "Configuración de las confirmaciones y validaciones de registro".';
// --------- End: New or revised $lang ---- from version 2.15.0


// --------- Starting below: New or revised $lang ---- from version 2.15.1
$lang['UAM_Support_txt'] = 'El apoyo oficial sobre este plugin se encuentra solo en el foro de Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=15015" onclick="window.open(this.href);return false;">Foro Inglés - http://piwigo.org/forum/viewtopic.php?id=15015</a><br><br>
También está disponible, el bugtracker del proyecto: <a href="http://piwigo.org/bugs/" onclick="window.open(this.href);return false;">http://piwigo.org/bugs/</a>';
// --------- End: New or revised $lang ---- from version 2.15.1


// --------- Starting below: New or revised $lang ---- from version 2.15.4
$lang['UAM_Force_Validation'] = 'Validación manual';
$lang['UAM_Confirm_Mail_true'] = ' Activar - La validación por el usuario';
$lang['UAM_Confirm_Mail_local'] = ' Activar - La validación por el administrador (sin clave de validación enviado)';
$lang['UAM_RedirToProfile'] = 'Redirigir a la página de "personalización"';
// --------- End: New or revised $lang ---- from version 2.15.4


// --------- Starting below: New or revised $lang ---- from version 2.16.0
$lang['UAM_Expired_Group'] = '<b>Grupo</b> para el registro de usuario ha caducado<br>';
$lang['UAM_Expired_Status'] = '<b>Estado </b> para el registro de usuario ha caducado<br>';
$lang['UAM_GTAuto'] = 'Gestión automática de los Espíritus usuarios';
$lang['UAM_GTAutoDel'] = 'Borrado automático de las cuentas';
$lang['UAM_GTAutoGp'] = 'Cambio automático de grupo / estado';
$lang['UAM_GTAutoMail'] = 'Automáticamente el envío de un correo electrónico cuando se cambia de grupo / estado';
$lang['UAM_Deleted_Account_Redirection_Page'] = 'Acceso denegado - Cuenta destruido!';
$lang['UAM_title_redir_page'] = 'Acceso denegado por haber destruido una cuenta!';
$lang['UAM_Error_GTAutoMail_cannot_be_set_without_ConfirmMail'] = 'Error de coherencia en la configuración elegida:<br><br>
"Configuración de los registros seguidos y otras opciones > Gestión de Espíritu visitantes (Tracker Ghost) > Gestión automática de los Espíritus usuarios > Automáticamente el envío de un correo electrónico cuando se cambia de grupo / estado" no se puede activar si "Configuración de las confirmaciones y validaciones de registro > Confirmación de registro - La validación por el usuario" no está habilitada en un principio.<br><br>
Para garantizar la coherencia, la opción "Automáticamente el envío de un correo electrónico cuando se cambia de grupo / estado" fue colocado de nuevo de forma automática "Desactivar".<br><br>';
$lang['UAM_Demotion of %s'] = 'Degradación de %s';
$lang['UAM_AdminValidationMail_Text'] = 'Notificación de la validación manual de registro';
$lang['UAM_Validation of %s'] = 'Validación de %s';
// --------- End: New or revised $lang ---- from version 2.16.0

$lang['UAM_Disable'] = ' Desactivar (por defecto)';
$lang['UAM_Enable'] = ' Activar ';
$lang['UAM_Stuffs_Title'] = 'Módulo de la UAM';
$lang['UAM_Stuffs'] = 'PWG Stuffs módulo';


// --------- Starting below: New or revised $lang ---- from version 2.20.4
$lang['UAM_HidePassw'] = 'Contraseña en texto claro en la información del correo electrónico';
// --------- End: New or revised $lang ---- from version 2.20.4
?>