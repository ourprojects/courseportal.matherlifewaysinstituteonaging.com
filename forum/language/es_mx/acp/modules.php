<?php
/** 
*
* acp_modules.php [Mexican Spanish]
*
* @package language
* @copyright (c) 2007 phpBB Group. Modified by nextgen for phpbbargentina.com in 2012 & cisco007 for phpbbmexico.com 
* @author 2007-11-26 - Traducido por Charkleons junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) 
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'		=> 'Aquí puedes manejar toda clase de módulos. Por favor observa que el Panel de Administración (ACP) tiene una estructura de menú de tres niveles (Categoría -> SubCategoría -> Módulo) por lo cual los otros tienen una estructura de menú de dos niveles (Categoría -> Módulo) la cual debe ser respetada. Por favor observa que puedes bloquearte a ti mismo si deshabilitas o borras el módulo de administración de módulos.',
	'ADD_MODULE'						=> 'Añadir módulo',
	'ADD_MODULE_CONFIRM'				=> '¿Estás seguro de querer añadir el módulo seleccionado?',
	'ADD_MODULE_TITLE'					=> 'Añadir título',

	'CANNOT_REMOVE_MODULE'				=> 'No se puede eliminar el módulo, tiene hijos asignados. Por favor borra o mueve todos los hijos antes de realizar esta acción.',
	'CATEGORY'							=> 'Categoría',
	'CHOOSE_MODE'						=> 'Elegir modo',
	'CHOOSE_MODE_EXPLAIN'				=> 'Elegir en qué modo se usará el módulo.',
	'CHOOSE_MODULE'						=> 'Elegir módulo',
	'CHOOSE_MODULE_EXPLAIN'				=> 'Elegir el archivo asociado a este módulo.',
	'CREATE_MODULE'						=> 'Crear nuevo módulo',

	'DEACTIVATED_MODULE'				=> 'Módulo desactivado',
	'DELETE_MODULE'						=> 'Borrar módulo',
	'DELETE_MODULE_CONFIRM'				=> '¿Estás seguro de querer borrar este módulo?',

	'EDIT_MODULE'						=> 'Editar módulo',
	'EDIT_MODULE_EXPLAIN'				=> 'Aquí puedes introducir parámetros específicos del módulo',

	'HIDDEN_MODULE'					   	=> 'Módulo oculto',

	'MODULE'							=> 'Módulo',
	'MODULE_ADDED'						=> 'Módulo añadido correctamente.',
	'MODULE_DELETED'					=> 'Módulo eliminado correctamente.',
	'MODULE_DISPLAYED'					=> 'Módulo mostrado',
	'MODULE_DISPLAYED_EXPLAIN'			=> 'Si no quieres mostrar este módulo, pero quieres usarlo, selecciona No.',
	'MODULE_EDITED'						=> 'Módulo editado correctamente.',
	'MODULE_ENABLED'					=> 'Módulo habilitado',
	'MODULE_LANGNAME'					=> 'Idioma del módulo',
	'MODULE_LANGNAME_EXPLAIN'			=> 'Introduce el nombre del módulo. Usa idioma constante si el nombre es tomado del archivo de idioma.',
	'MODULE_TYPE'						=> 'Tipo de módulo',

	'NO_CATEGORY_TO_MODULE'				=> 'Imposible convertir categoría en módulo. Por favor borra o mueve todos los hijos antes de realizar esta acción.',
	'NO_MODULE'							=> 'No hay módulos.',
	'NO_MODULE_ID'						=> 'No se especificó ID de módulo.',
	'NO_MODULE_LANGNAME'				=> 'No se especificó idioma del módulo.',
	'NO_PARENT'							=> 'Sin Padre',

	'PARENT'							=> 'Padre',
	'PARENT_NO_EXIST'					=> 'Padre no existe.',

	'SELECT_MODULE'						=> 'Selecciona un módulo',
));

?>