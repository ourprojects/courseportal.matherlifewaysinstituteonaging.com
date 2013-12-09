<?php
/** 
*
* acp_users.php [Argentinian Spanish]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group. Modified by nextgen for phpbbargentina.com in 2012 
* @author 2007-11-26 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
* @author - ImagePack made nextgen (Styles Team Leader of http://www.phpbbargentina.com)
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'				=> 'Vista previa de la firma',
	'AT_LEAST_ONE_FOUNDER'			=> 'No podes cambiar este Fundador en usuario normal. Tiene que haber al menos un Fundador para el Sitio. Si querés cambiar el rango de Fundador de este usuario, promové primero a otro usuario.',

	'BAN_ALREADY_ENTERED'			=> 'Esta exclusión ha sido introducida previamente. La lista no ha sido actualizada.',
	'BAN_SUCCESSFUL'				=> 'Exclusión añadida correctamente.',
	'CANNOT_BAN_ANONYMOUS'         => 'No se te permite banear la cuenta anónima. Los permisos para usuarios anónimos pueden ser configurados en la pestaña de Permisos.',

	'CANNOT_BAN_FOUNDER'			=> 'No tenés permitido excluir Fundadores.',
	'CANNOT_BAN_YOURSELF'			=> 'No podes excluirte vos mismo.',
	'CANNOT_DEACTIVATE_BOT'			=> 'No tenés permitido desactivar cuentas de robots. Por favor, en su lugar desactívalo en la página de robots.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'No tenés permitido desactivar cuentas de Fundadores.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'No podes desactivar su propia cuenta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'No tenés permitido forzar reactivación de cuentas de robots. Por favor desactivá el robot en la página de robots.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'No tenés permitido forzar reactivación de cuentas de Fundadores.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'No podes forzar la reactivación de su propia cuenta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'No tenés permitido la cuenta de Invitado.',
	'CANNOT_REMOVE_YOURSELF'		=> 'No podes borrar su propia cuenta.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'No tenés permitido promover robots a Fundador.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Necesitas activar al usuario antes de promoverlo a Fundador, solo se pueden promover usuarios ya activados.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Solo necesitas completar este parámetro si deseas cambiar la dirección de email del usuario.',

	'DELETE_POSTS'					=> 'Borrar mensajes',
	'DELETE_USER'					=> 'Borrar usuario',
	'DELETE_USER_EXPLAIN'			=> 'Tene en cuenta que el borrado de un usuario es definitivo, no pueden ser recuperados. Los mensajes privados enviados sin leer por el usuario serán eliminados y no estarán disponibles para los destinatarios',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Reactivación forzada correctamente.',
	'FOUNDER'						=> 'Fundador',
	'FOUNDER_EXPLAIN'				=> 'Los Fundadores tienen todos los permisos administrativos y nunca pueden ser excluidos, borrados o modificados por usuarios que no lo sean.',

	'GROUP_APPROVE'					=> 'Aprobar usuarios',
	'GROUP_DEFAULT'					=> 'Definir grupo por defecto para el usuario',
	'GROUP_DELETE'					=> 'Borrar miembro del Grupo',
	'GROUP_DEMOTE'					=> 'Deponer responsable de Grupo',
	'GROUP_PROMOTE'					=> 'Promover a responsable de Grupo',

	'IP_WHOIS_FOR'					=> 'IP whois para %1$s',

	'LAST_ACTIVE'					=> 'Último activo',

	'MOVE_POSTS_EXPLAIN'			=> 'Por favor selecciona el Foro al cual quiere mover todos los mensajes que haya hecho este usuario.',

	'NO_SPECIAL_RANK'				=> 'No hay designado rango especial',
	'NO_WARNINGS'			=> 'Sin avisos.',
	'NOT_MANAGE_FOUNDER'			=> 'Intentas modificar un usuario que es Fundador. Solo los Fundadores pueden modificar otros fundadores.',

	'QUICK_TOOLS'					=> 'Herramientas rápidas',

	'REGISTERED'					=> 'Registrado',
	'REGISTERED_IP'					=> 'Registrado desde IP',
	'RETAIN_POSTS'					=> 'Retener mensajes',

	'SELECT_FORM'					=> 'Seleccionar Foro',
	'SELECT_USER'					=> 'Seleccionar usuario',

	'USER_ADMIN'					=> 'Administración de usuarios',
	'USER_ADMIN_ACTIVATE'			=> 'Activar cuenta',
	'USER_ADMIN_ACTIVATED'			=> 'Usuario activado correctamente.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar de usuario eliminado correctamente.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Excluir email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Dirección de email excluida vía Administración',
	'USER_ADMIN_BAN_IP'				=> 'Excluir IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP excluida vía Administración',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Usuario excluidas vía Administración',
	'USER_ADMIN_BAN_USER'			=> 'Excluir usuario',
	'USER_ADMIN_DEACTIVATE'			=> 'Desactivar cuenta',
	'USER_ADMIN_DEACTIVED'			=> 'Usuario desactivado con éxito.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Borrar todos los adjuntos',
	'USER_ADMIN_DEL_AVATAR'			=> 'Borrar avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Vaciar bandeja de salida de MP',
	'USER_ADMIN_DEL_POSTS'			=> 'Borrar todos los mensajes',
	'USER_ADMIN_DEL_SIG'			=> 'Borrar firma',
	'USER_ADMIN_EXPLAIN'			=> 'Acá podes cambiar la información de los usuarios y ciertas opciones específicas. Para modificar los permisos de usuario usa el sistema de permisos de usuario y grupo.',
	'USER_ADMIN_FORCE'				=> 'Forzar reactivación',
	'USER_ADMIN_LEAVE_NR'			=> 'Quitar de Nuevos Registrados',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mover todos los mensajes',
	'USER_ADMIN_SIG_REMOVED'		=> 'Firma borrada con éxito.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Todos los adjuntos del usuario borrados correctamente.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'El avatar no puede ser mostrado porque los avatares han sido deshabilitados.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'El avatar actual no puede ser mostrado porque su tipo de fichero ha sido deshabilitado.',
	'USER_AVATAR_UPDATED'			=> 'Avatar del usuario actualizado correctamente.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizado',
	'USER_DELETED'					=> 'Usuario borrado correctamente.',
	'USER_GROUP_ADD'				=> 'Añadir usuario a grupo',
	'USER_GROUP_NORMAL'				=> 'Grupos normales de los que el usuario es miembro',
	'USER_GROUP_PENDING'			=> 'Grupos en los que el usuario está pendiente',
	'USER_GROUP_SPECIAL'			=> 'Grupos especiales de los que el usuario es miembro',
	'USER_LIFTED_NR'				=> 'Borrado con éxito el status de Nuevo Usuario Registrado.',
	'USER_NO_ATTACHMENTS'			=> 'No hay adjuntos para visualizar.',
	'USER_NO_POSTS_TO_DELETE'		=> 'El usuario no tiene mensajes para retener o eliminar.',
	'USER_OUTBOX_EMPTIED'			=> 'Vaciada con éxito la bandeja de salida de los MP del usuario.',
	'USER_OUTBOX_EMPTY'				=> 'La bandeja de salida de los MP del usuario ya estaba vacía.',
	'USER_OVERVIEW_UPDATED'			=> 'Detalles del usuario actualizado.',
	'USER_POSTS_DELETED'			=> 'Todos los mensajes del usuario borrados correctamente.',
	'USER_POSTS_MOVED'				=> 'Mensajes movidos correctamente al Foro de destino.',
	'USER_PREFS_UPDATED'			=> 'Preferencias de usuario actualizadas.',
	'USER_PROFILE'					=> 'Perfil del usuario',
	'USER_PROFILE_UPDATED'			=> 'Perfil del usuario actualizado.',
	'USER_RANK'						=> 'Rango del usuario',
	'USER_RANK_UPDATED'				=> 'Rango del usuario actualizado.',
	'USER_SIG_UPDATED'				=> 'Firma del usuario actualizada correctamente.',
	'USER_TOOLS'					=> 'Herramientas básicas',
	'USER_WARNING_LOG_DELETED'		=> 'No hay información disponible. Es posible que la entrada en el log haya sido borrada.',
));

?>