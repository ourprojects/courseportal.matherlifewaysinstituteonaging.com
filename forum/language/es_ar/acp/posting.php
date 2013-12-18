<?php
/** 
*
* acp_posting.php [Argentinian Spanish]
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'	=> 'BBCode es una implementación especial de HTML ofreciendo gran control sobre qué y cómo mostrar algo. Desde esta sección podes añadir, eliminar y editar BBCodes personalizados',
	'ADD_BBCODE'			=> 'Añadir un nuevo BBCode',

	'BBCODE_ADDED'				=> 'BBCode añadido correctamente.',
	'BBCODE_DANGER'				=> 'El BBCode que estás intentando añadir parece que usa la marca clave {TEXT} dentro de un atributo HTML. Eso puede traducirse en un agujero de seguridad XSS. Trata de usar en cambio los tipos {SIMPLETEXT} o {INTTEXT} que son más restrictivos. Solo continúe entiende los riesgos que corre y considera el uso de {TEXT} absolutamente inevitable.',
	'BBCODE_DANGER_PROCEED'		=> 'Proceder', //'Entiendo el riesgo',
	'BBCODE_EDITED'				=> 'BBCode editado correctamente.',
	'BBCODE_NOT_EXIST'			=> 'El BBCode seleccionado no existe.',
	'BBCODE_HELPLINE'			=> 'Línea de ayuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo contiene el consejo de ayuda del BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'Texto de la línea de ayuda',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'La línea de ayuda que insertaste es demasiado larga.',
	'BBCODE_INVALID_TAG_NAME'	=> 'El nombre elegido para este BBCode ya existe.',
	'BBCODE_INVALID'			=> 'Tu BBCode está construido en un formulario no válido.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Tu BBCode personalizado debe tener tanto la etiqueta de apertura como la de cierre.',
	'BBCODE_TAG'				=> 'Etiqueta',
	'BBCODE_TAG_TOO_LONG'		=> 'El nombre elegido es muy largo.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'La definición de etiqueta que introdujiste es muy larga, por favor acortala.',
	'BBCODE_USAGE'				=> 'Uso de BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Acá definís cómo usar el BBCode. Reemplaza las variables de entrada por la marca clave correspondiente (%sver abajo%s)',

	'EXAMPLE'					=> 'Ejemplo:',
	'EXAMPLES'					=> 'Ejemplos:',

	'HTML_REPLACEMENT'			=> 'Reemplazo HTML',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Acá definís el reemplazo HTML por defecto (cada plantilla puede tener su propio reemplazo HTML). ¡No olvides poner las marca claves que usaste arriba!!',

	'TOKEN'				=> 'marca clave',
	'TOKENS'			=> 'marca claves',
	'TOKENS_EXPLAIN'	=> 'Las marca claves son contenedores de la información suministrada por el usuario. La entrada será válida solo si coincide con la definición correspondiente. Si es necesario podes numerarlas, añadiendo un número como último caracter entre llaves, Ej. {USERNAME1}, {USERNAME2}.<br /><br />Sumado a estas marca claves podes usar cualquier palabra presente en tu directorio language/ como estas: {L_<em>&lt;stringname&gt;</em>} donde <em>&lt;stringname&gt;</em> es la palabra traducida que querés agregar. Por ejemplo, {L_WROTE} se mostrará como “escrito” o tu traducción de acuerdo al idioma usado por el usuario.<br /><br /><strong>Por favor tené en cuenta que solo las marca claves listadas debajo son las que se pueden usar en los BBCodes personalizados.</strong>',
	'TOKEN_DEFINITION'	=> '¿Qué puede ser?',
	'TOO_MANY_BBCODES'	=> 'No podes crear más BBCodes. Por favor borra uno o más BBCodes y luego inténtalo de nuevo.',

	'tokens'	=> array(
		'TEXT'		=> 'Cualquier texto, incluyendo caracteres extraños, números, etc. No deberías usar esta marca clave en etiquetas HTML. En cambio intenta usar IDENTIFIER, INTTEXT o SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caracteres del alfabeto latino (A-Z), números, espacios, comas, puntos, menos, más, guión y guión bajo',
		'INTTEXT'		=> 'Letras de caracteres Unicode, números, espacios, comas, puntos, menos, más, guión, guión bajo y espacios en blanco.',
		'IDENTIFIER'	=> 'Carecteres del alfabeto latino (A-Z), números, guión y guión bajo',
		'NUMBER'	=> 'Cualquier serie de dígitos',
		'EMAIL'		=> 'Una dirección de email válida',
		'URL'		=> 'Una URL válida usando cualquier protocolo (http, ftp, etc… no puede ser usado para exploits de javascript). Si no se proporciona, se asumirá “http://” antes de la cadena dada',
		'LOCAL_URL'		=> 'Una URL local. La URL debe ser relativa a la página del tema y no puede contener nombre de servidor o protocolo, los enlaces tienen el prefijo “%s”',
		'RELATIVE_URL'	=> 'Una URL relativa. Usted puede utilizar esto para que coincida con las partes de una URL, pero tenga cuidado: una URL completa es una URL relativa válida. Cuando se desea utilizar URLs relativas de su foro, utilice la ficha LOCAL_URL',
		'COLOR'		=> 'Un color HTML, puede ser bien en formato numérico <samp>#FF1234</samp> o un <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">color CSS</a> como ser <samp>fuchsia</samp> o <samp>InactiveBorder</samp>',
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Desde esta sección podes añadir, eliminar y editar los emoticones que los usuarios pueden añadir a sus temas o mensajes. Estos emoticones son mostrados por lo general cerca del título del tema en el listado de foros, o en los temas de los mensajes en el listado de temas. También podes instalar y crear nuevos paquetes de iconos.',
	'ACP_SMILIES_EXPLAIN'	=> 'Emoticones son usualmente pequeños, a veces imágenes animadas, usados para comunicar una emoción o sentimiento. Desde esta sección podes añadir, eliminar y editar los emoticones que los usuarios pueden añadir a sus mensajes y mensajes privados. También podes instalar y crear nuevos paquetes de emoticones.',
	'ADD_SMILIES'			=> 'Añadir múltiples emoticones',
	'ADD_SMILEY_CODE'		=> 'Añadir código de emoticon adicional',
	'ADD_ICONS'				=> 'Añadir múltiples iconos',
	'AFTER_ICONS'			=> 'Después %s',
	'AFTER_SMILIES'			=> 'Después %s',

	'CODE'						=> 'Código',
	'CURRENT_ICONS'				=> 'Iconos actuales',
	'CURRENT_ICONS_EXPLAIN'		=> 'Decidí qué hacer con los emoticones actualmente instalados',
	'CURRENT_SMILIES'			=> 'Emoticones actuales',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Decidí qué hacer con los emoticones actualmente instalados',

	'DISPLAY_ON_POSTING'		=> 'Mostrar en mensajes',
	'DISPLAY_POSTING'			=> 'En mensajes',
	'DISPLAY_POSTING_NO'		=> 'No en mensajes',	
	
	'EDIT_ICONS'				=> 'Editar iconos',
	'EDIT_SMILIES'				=> 'Editar emoticones',
	'EMOTION'					=> 'Emoción',
	'EXPORT_ICONS'				=> 'Exportar y descargar icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sSiguiendo este enlace, la configuración de tus emoticones instalados será empaquetada en <samp>icons.pak</samp> el cual, una vez descargado, puede usarse para crear un archivo <samp>.zip</samp> o <samp>.tgz</samp> conteniendo todos sus emoticones más este archivo de configuración <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Exportar y descargar smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sSiguiendo este enlace, la configuración de tus emoticones instalados será empaquetada en <samp>smiles.pak</samp> el cual una vez descargado puede usarse para crear un archivo <samp>.zip</samp> o <samp>.tgz</samp> conteniendo todos sus emoticones más este archivo de configuración <samp>smiles.pak</samp>%s.',

	'FIRST'						=> 'Primero',

	'ICONS_ADD'					=> 'Añadir un nuevo icono',
	'ICONS_NONE_ADDED'			=> 'No se han añadido iconos.',
	'ICONS_ONE_ADDED'			=> 'El icono se ha añadido correctamente.',
	'ICONS_ADDED'				=> 'Los iconos han sido añadidos correctamente.',
	'ICONS_CONFIG'				=> 'Configuración de iconos',
	'ICONS_DELETED'				=> 'El icono ha sido eliminado correctamente.',
	'ICONS_EDIT'				=> 'Editar icono',
	'ICONS_ONE_EDITED'			=> 'El icono se ha actualizado correctamente.',
	'ICONS_NONE_EDITED'			=> 'No se han actualizado iconos.',
	'ICONS_EDITED'				=> 'El icono ha sido actualizado correctamente.',
	'ICONS_HEIGHT'				=> 'Alto del icono',
	'ICONS_IMAGE'				=> 'Imagen del icono',
	'ICONS_IMPORTED'			=> 'El paquete de iconos ha sido instalado correctamente.',
	'ICONS_IMPORT_SUCCESS'		=> 'El paquete de iconos fue importado correctamente.',
	'ICONS_LOCATION'			=> 'Ubicación del icono',
	'ICONS_NOT_DISPLAYED'		=> 'Los siguientes iconos no son mostrados en los mensajes',
	'ICONS_ORDER'				=> 'Orden de iconos',
	'ICONS_URL'					=> 'Archivo de icono',
	'ICONS_WIDTH'				=> 'Ancho del icono',
	'IMPORT_ICONS'				=> 'Instalar paquete de iconos',
	'IMPORT_SMILIES'			=> 'Instalar paquete de emoticones',

	'KEEP_ALL'					=> 'Mantener todo',

	'MASS_ADD_SMILIES'			=> 'Añadir múltiples emoticones',
	
	'NO_ICONS_ADD'				=> 'No hay iconos disponibles para añadir.',
	'NO_ICONS_EDIT'				=> 'No hay iconos disponibles para modificar.',
	'NO_ICONS_EXPORT'			=> 'No tiene iconos con los que crear un paquete.',
	'NO_ICONS_PAK'				=> 'Paquete de iconos no encontrado.',
	'NO_SMILIES_ADD'			=> 'No hay emoticones disponibles para añadir.',
	'NO_SMILIES_EDIT'			=> 'No hay emoticones disponibles para modificar.',
	'NO_SMILIES_EXPORT'			=> 'No tiene emoticones con los que crear un paquete.',
	'NO_SMILIES_PAK'			=> 'Paquete de emoticones no encontrado.',

	'PAK_FILE_NOT_READABLE'		=> 'No se puede leer el archivo <samp>.pak</samp>.',

	'REPLACE_MATCHES'			=> 'Reemplazar coincidencias',

	'SELECT_PACKAGE'			=> 'Seleccione un paquete',
	'SMILIES_ADD'				=> 'Añadir un nuevo emoticon',
	'SMILIES_NONE_ADDED'		=> 'No se han añadido emoticones.',
	'SMILIES_ONE_ADDED'			=> 'El emoticon se ha añadido correctamente.',
	'SMILIES_ADDED'				=> 'Los emoticones han sido añadidos correctamente.',
	'SMILIES_CODE'				=> 'Código de emoticon',
	'SMILIES_CONFIG'			=> 'Configuración de emoticones',
	'SMILIES_DELETED'			=> 'El emoticon ha sido eliminado correctamente.',
	'SMILIES_EDIT'				=> 'Editar emoticon',
	'SMILIE_NO_CODE'			=> 'El emoticono “%s” fue ignorado, ya que no se introdujo ningún código.',
	'SMILIE_NO_EMOTION'			=> 'El emoticono “%s” fue ignorado, ya que no se introdujo ninguna emoción.',
	'SMILIE_NO_FILE'			=> 'El emoticono “%s” fue ignorado, ya que no se encuentra el archivo.',
	'SMILIES_NONE_EDITED'		=> 'No se han actualizado emoticones.',
	'SMILIES_ONE_EDITED'		=> 'El emoticon se ha actualizado correctamente.',
	'SMILIES_EDITED'			=> 'El emoticon ha sido editado correctamente.',
	'SMILIES_EMOTION'			=> 'Emoción',
	'SMILIES_HEIGHT'			=> 'Alto de emoticon',
	'SMILIES_IMAGE'				=> 'Imagen de emoticon',
	'SMILIES_IMPORTED'			=> 'El paquete de emoticones ha sido instalado correctamente.',
	'SMILIES_IMPORT_SUCCESS'	=> 'El paquete de emoticones ha sido importado correctamente.',
	'SMILIES_LOCATION'			=> 'Ubicación del emoticon',
	'SMILIES_NOT_DISPLAYED'		=> 'Los siguientes emoticones no son mostrados en los mensajes',
	'SMILIES_ORDER'				=> 'Orden de emoticones',
	'SMILIES_URL'				=> 'Archivo de emoticon',
	'SMILIES_WIDTH'				=> 'Ancho de emoticon',
	'TOO_MANY_SMILIES'			=> 'Alcanzado el límite de %d emoticones.',

	'WRONG_PAK_TYPE'			=> 'El paquete especificado no contiene la información apropiada.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'	=> 'Desde este panel de control podes añadir, editar, y eliminar palabras que serán censuradas automáticamente en tus foros. La gente seguirá pudiendo registrar nombres de usuario con estas palabras. Los comodines (*) son aceptados en los campos de palabras, por Ej. *test* coincidirá con detestable, test* coincidirá con testificar, *test coincidirá con detestar.',
	'ADD_WORD'			=> 'Añadir nueva palabra',

	'EDIT_WORD'			=> 'Editar palabra censurada',
	'ENTER_WORD'		=> 'Tenés que escribir una palabra y su reemplazo.',

	'NO_WORD'			=> 'No seleccionaste una palabra para editar.',

	'REPLACEMENT'		=> 'Sustituta',

	'UPDATE_WORD'		=> 'Actualizar palabra censurada',

	'WORD'				=> 'Palabra',
	'WORD_ADDED'		=> 'La palabra a censurar ha sido añadida correctamente.',
	'WORD_REMOVED'		=> 'La palabra censurada ha sido eliminada correctamente.',
	'WORD_UPDATED'		=> 'La palabra censurada ha sido actualizada correctamente.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'	=> 'Usando este formulario podes agregar, editar, ver y borrar rangos. También podes crear rangos personalizados los cuales se pueden aplicar a los usuarios vía administración de usuarios.',
	'ADD_RANK'			=> 'Añadir nuevo rango',

	'MUST_SELECT_RANK'	=> 'Tenés que seleccionar un rango.',

	'NO_ASSIGNED_RANK'	=> 'No se ha asignado rango.',
	'NO_RANK_TITLE'		=> 'No especificaste un título para el rango.',
	'NO_UPDATE_RANKS'	=> 'El rango fue borrado correctamente. Sin embargo las cuentas de usuario que usaban este rango no se han actualizado. Necesitas reestablecer manualmente el rango en esas cuentas.',

	'RANK_ADDED'			=> 'El rango fue añadido correctamente.',
	'RANK_IMAGE'			=> 'Imagen de rango',
	'RANK_IMAGE_EXPLAIN'	=> 'Usá esto para definir una pequeña imagen asociada al rango. La ruta es relativa al directorio raíz de phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(En uso)',
	'RANK_MINIMUM'			=> 'Mensajes mínimos',
	'RANK_REMOVED'			=> 'El rango fue borrado correctamente.',
	'RANK_SPECIAL'			=> 'Configurar como rango especial',
	'RANK_TITLE'			=> 'Título del rango',
	'RANK_UPDATED'			=> 'El rango fue actualizado correctamente.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Acá podes controlar qué nombres de usuario no se permitirá que sean utilizados. Nombres de usuario deshabilitados pueden contener un comodín (*).',
	'ADD_DISALLOW_EXPLAIN'	=> 'Podes deshabilitar un nombre de usuario usando el comodín (*) para coincidir cualquier carácter',
	'ADD_DISALLOW_TITLE'	=> 'Deshabilitar un nombre',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Podes eliminar un nombre deshabilitado seleccionándolo de esta lista y haciendo clic en Enviar',
	'DELETE_DISALLOW_TITLE'		=> 'Eliminar nombre deshabilitado',
	'DISALLOWED_ALREADY'		=> 'El nombre que ingresó no puede ser deshabilitado.',
	'DISALLOWED_DELETED'		=> 'El nombre ha sido eliminado correctamente.',
	'DISALLOW_SUCCESSFUL'		=> 'El nombre ha sido añadido correctamente.',

	'NO_DISALLOWED'				=> 'No hay nombres deshabilitados',
	'NO_USERNAME_SPECIFIED'		=> 'No has seleccionado o introducido un nombre.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Acá podes administrar las razones usadas en informes y mensajes de desaprobación de mensajes. Hay una razón por defecto (señalada con un *) que no podes eliminar, esta razón es normalmente empleada para mensajes personalizados si ninguna razón encaja.',
	'ADD_NEW_REASON'		=> 'Añadir nueva razón',
	'AVAILABLE_TITLES'		=> 'Títulos regionalizados disponibles',

	'IS_NOT_TRANSLATED'			=> 'La razón <strong>no</strong> ha sido traducida.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'La razón <strong>no</strong> ha sido regionalizada. Si querés traducirla, especificá el código de idioma.',
	'IS_TRANSLATED'				=> 'La razón ha sido traducida.',
	'IS_TRANSLATED_EXPLAIN'		=> 'La razón ha sido traducida. Si el título que especificaste ha sido incluído en el archivo de idioma, será empleado en el informe.',

	'NO_REASON'					=> 'No se puede encontrar la razón.',
	'NO_REASON_INFO'			=> 'Tenés que especificar un título y una descripción para esta razón.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'No podés eliminar la razon por defecto "Otro".',

	'REASON_ADD'				=> 'Añadir razón',
	'REASON_ADDED'				=> 'Razón añadida correctamente.',
	'REASON_ALREADY_EXIST'		=> 'Ya existe una razón con este título, por favor introducí otro título.',
	'REASON_DESCRIPTION'		=> 'Descripción de la razón',
	'REASON_DESC_TRANSLATED'	=> 'Descripción mostrada',
	'REASON_EDIT'				=> 'Editar razón',
	'REASON_EDIT_EXPLAIN'		=> 'Acá podes agregar o editar una razón. Si la razón ha sido incluída en el archivo de idioma, será empleada en el informe.',
	'REASON_REMOVED'			=> 'Razón eliminada correctamente.',
	'REASON_TITLE'				=> 'Título de la razón',
	'REASON_TITLE_TRANSLATED'	=> 'Título mostrado',
	'REASON_UPDATED'			=> 'Razón actualizada correctamente.',

	'USED_IN_REPORTS'			=> 'Usada en informes',
));

?>