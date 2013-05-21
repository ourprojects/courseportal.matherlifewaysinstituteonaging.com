<?php
/** 
*
* groups.php [Argentinian Spanish]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group. Modified by nextgen for phpbb-es.com in 2012 
* @author 2007-11-26 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
* @author - ImagePack made nextgen (Styles Team Leader of http://www.phpbbargentina.com)
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
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
//


$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'El grupo seleccionado ya es tu grupo por defecto',
	'ALREADY_IN_GROUP'			=> 'Ya sos miembro del grupo seleccionado',
	'ALREADY_IN_GROUP_PENDING'		=> 'Ya solicitaste ingresar en el grupo seleccionado.',

	'CANNOT_JOIN_GROUP'         => 'No podes unirte a este grupo. Solo podes unirte a grupos abiertos y grupos libres.',
	'CANNOT_RESIGN_GROUP'      => 'No podes abandonar este grupo. Solo podes abandonar grupos abiertos y grupos libres.',
	'CHANGED_DEFAULT_GROUP'		=> 'Grupo por defecto cambiado correctamente',

	'GROUP_AVATAR'				=> 'Avatar de grupo',
	'GROUP_CHANGE_DEFAULT'		=> '¿Estás seguro de cambiar tu pertenencia por defecto al grupo "%s"?',
	'GROUP_CLOSED'				=> 'Cerrado',
	'GROUP_DESC'				=> 'Descripción del grupo',
	'GROUP_HIDDEN'				=> 'Oculto',
	'GROUP_INFORMATION'			=> 'Información del grupo',
	'GROUP_IS_CLOSED'			=> 'Este es un grupo cerrado, donde no pueden identificarse automáticamente nuevos usuarios, solo por invitación de un líder del grupo.',
	'GROUP_IS_FREE'				=> 'Este es un grupo libre abierto, todos los nuevos usuarios son bienvenidos.',
	'GROUP_IS_HIDDEN'			=> 'Este es un grupo oculto, solo usuarios de este grupo pueden ver su pertenencia.',
	'GROUP_IS_OPEN'				=> 'Este es un grupo abierto, usuarios nuevos pueden identificarse mediante una solicitud.',
	'GROUP_IS_SPECIAL'			=> 'Este es un grupo especial, los grupos especiales son administrados por los administradores del Sitio.',
	'GROUP_JOIN'				=> 'Ingresar en el grupo',
	'GROUP_JOIN_CONFIRM'		=> '¿Estás seguro de que querés identificarte en el grupo seleccionado?',
	'GROUP_JOIN_PENDING'		=> 'Ingreso en el grupo solicitado',
	'GROUP_JOIN_PENDING_CONFIRM'	=> '¿Estás seguro de que querés solicitar identificarte en el grupo seleccionado?',
	'GROUP_JOINED'				=> 'Ingresado correctamente al grupo elegido',
	'GROUP_JOINED_PENDING'		=> 'Solicitada correctamente tu pertenencia al grupo. Por favor espera que un líder del grupo apruebe tu membresía.',
	'GROUP_LIST'				=> 'Administrar usuarios',
	'GROUP_MEMBERS'				=> 'Usuarios del grupo',
	'GROUP_NAME'				=> 'Nombre del grupo',
	'GROUP_OPEN'				=> 'Abierto',
	'GROUP_RANK'				=> 'Rango del grupo',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Renunciar al grupo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '¿Estás seguro de que querés renunciar al grupo seleccionado?',
	'GROUP_RESIGN_PENDING'			=> 'Renuncia al grupo solicitada',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> '¿Estás seguro de que querés renunciar a tu membresía pendiente para el grupo seleccionado?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> 'Has sido eliminado correctamente del grupo seleccionado',
	'GROUP_RESIGNED_PENDING'		=> 'Tu membresía pendiente ha sido eliminada con éxito del grupo seleccionado',
	'GROUP_TYPE'					=> 'Tipo de grupo',
	'GROUP_UNDISCLOSED'				=> 'Grupo oculto',
	'FORUM_UNDISCLOSED'				=> 'Moderación de foro(s) oculto(s)',

	'LOGIN_EXPLAIN_GROUP'			=> 'Necesitas identificarte para ver los detalles del grupo',

	'NO_LEADERS'					=> 'No sos líder de ningún grupo',
	'NOT_LEADER_OF_GROUP'			=> 'La operación requerida no puede llevarse a cabo porque no sos líder del grupo seleccionado.',
	'NOT_MEMBER_OF_GROUP'			=> 'La operación requerida no puede llevarse a cabo porque no sos miembro del grupo seleccionado.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'No podes renunciar a tu grupo por defecto.',

	'PRIMARY_GROUP'					=> 'Grupo primario',

	'REMOVE_SELECTED'				=> 'Eliminar selección',

	'USER_GROUP_CHANGE'				=> 'Desde grupo "%1$s" hasta "%2$s"',
	'USER_GROUP_DEMOTE'				=> 'Deponer liderazgo',
	'USER_GROUP_DEMOTE_CONFIRM'		=> '¿Estás seguro de que querés deponer tu liderazgo del grupo seleccionado?',
	'USER_GROUP_DEMOTED'			=> 'Liderazgo depuesto correctamente.',
));

?>