<?php
/** 
*
* acp_database.php [Argentinian Spanish]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group. Modified by nextgen for phpbbargentina.com in 2012-Jul-24
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Acá podés hacer un copia de seguridad de toda la información relacionada con phpBB. Podés guardar el archivo resultante en tu carpeta <samp>store/</samp> o descargarlo a tu PC. Dependiendo de la configuración del servidor podés comprimir el archivo en varios formatos.',
	'ACP_RESTORE_EXPLAIN'	=> 'Esto efectuará una recuperación completa de todas las tablas de phpBB guardadas en el archivo. Si el servidor lo permite, podes usar un archivo comprimido con gzip o bzip2 y será descomprimido automáticamente. <strong>ADVERTENCIA</strong> Esto sobrescribirá cualquier dato existente. La recuperación puede llevar algún tiempo, por favor no lo muevas de esta página hasta que se complete.',

	'BACKUP_DELETE'		=> 'El archivo de copia de seguridad ha sido borrado correctamente.',
	'BACKUP_INVALID'	=> 'El archivo seleccionado para hacer la copia de seguridad no es válido.',
	'BACKUP_OPTIONS'	=> 'Opciones de copia de seguridad',
	'BACKUP_SUCCESS'	=> 'El archivo de copia de seguridad ha sido creado correctamente.',
	'BACKUP_TYPE'		=> 'Tipo de copia de seguridad',

	'DATABASE'					=> 'Utilidades de base de datos',
	'DATA_ONLY'					=> 'Solo los datos',
	'DELETE_BACKUP'				=> 'Borrar copia de seguridad',
	'DELETE_SELECTED_BACKUP'	=> '¿Estás seguro de que queres borrar la copia de seguridad seleccionada?',
	'DESELECT_ALL'				=> 'Desmarcar todo',
	'DOWNLOAD_BACKUP'			=> 'Descargar copia de seguridad',

	'FILE_TYPE'					=> 'Tipo de archivo',
	'FILE_WRITE_FAIL'	=> 'Ha sido imposible escribir el archivo en el directorio contenedor.',
	'FULL_BACKUP'				=> 'Completo',

	'RESTORE_FAILURE'			=> 'El archivo de copia de seguridad puede estar corrupto.',
	'RESTORE_OPTIONS'			=> 'Restaurar opciones',
    'RESTORE_SELECTED_BACKUP'	=> '¿Estás seguro de querer restaurar el backup seleccionado?',	
	'RESTORE_SUCCESS'			=> 'La base de datos ha sido restaurada correctamente.<br /><br />El Sitio debería volver al estado en que se encontraba cuando se hizo el resguardo.',

	'SELECT_ALL'				=> 'Seleccionar todo',
	'SELECT_FILE'				=> 'Seleccionar un archivo',
	'START_BACKUP'				=> 'Comenzar copia de seguridad',
	'START_RESTORE'				=> 'Comenzar restauración',
	'STORE_AND_DOWNLOAD'		=> 'Guardar y descargar',
	'STORE_LOCAL'				=> 'Guardar archivo localmente',
	'STRUCTURE_ONLY'			=> 'Solo la estructura',

	'TABLE_SELECT'			=> 'Seleccionar tabla/s',
	'TABLE_SELECT_ERROR'	=> 'Tenes que seleccionar al menos una tabla.',
));

?>