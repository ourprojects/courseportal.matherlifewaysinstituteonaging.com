<?php
/** 
*
* acp_search.php [Argentinian Spanish]
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
	'ACP_SEARCH_INDEX_EXPLAIN'		=> 'Acá podes gestionar los índices de búsqueda. Ya que normalmente usa solo un índice deberías borrar los restantes. Después de modificar alguno de los parámetros del motor de búsqueda (p.ej. el número de caracteres min/máximos) sería importante actualizar el índice para que refleje estos cambios.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Acá podes definir qué índice de búsqueda se usará para indexar mensajes y efectuar búsquedas. Podes ajustar varias opciones que pueden influir en cuánto procesamiento requieran dichas acciones. Algunos de estos ajustes son los mismos para todos los motores de búsqueda.',
	
	'COMMON_WORD_THRESHOLD'				=> 'Umbral de palabra común',
	'COMMON_WORD_THRESHOLD_EXPLAIN'		=> 'Palabras que estén contenidas en un porcentaje mayor de todos los mensajes serán referidas como comunes. Las palabras comunes serán ignoradas en las consultas de las búsquedas. Solo se efectuará si hay más de 100 mensajes. Si querés que palabras que actualmente referidas como comunes sean tomadas en cuenta de nuevo tendrás que reformar el índice.',
	'CONFIRM_SEARCH_BACKEND'			=> '¿Estás seguro de que querés cambiar a un motor de búsqueda diferente? Después de cambiar debes crear un nuevo índice. Si no planeas volver al anterior, también podes borrar tu índice para liberar recursos de sistema.',
	'CONTINUE_DELETING_INDEX'			=> 'Continuar proceso de borrado de índices previos',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Se ha iniciado el proceso de borrado de un índice. Con el fin de acceder a la página de búsqueda nuevamente necesita completar este proceso primero.',
	'CONTINUE_INDEXING'					=> 'Continuar proceso de indexación previo',
	'CONTINUE_INDEXING_EXPLAIN'			=> 'Se ha iniciado un proceso de indexación. Con el fin de acceder a la página de búsqueda nuevamente necesita completar este proceso primero.',
	'CREATE_INDEX'						=> 'Crear índice',
	
	'DELETE_INDEX'							=> 'Borrar índice',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Borrado de índice en curso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'El motor de búsqueda actualmente está limpiando su índice. Esto puede llevar algunos minutos.',
	
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Texto completo solo puede usarse con MySQL4 y superiores.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Texto completo solo puede usarse con tablas MyISAM o con tablas InnoDB. MySQL 5.6.4 o superior para índices FULLTEXT en tablas InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Número total de mensajes indexados',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Soporte para caracteres no-latinos UTF-8 usando mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Soporte para caracteres no-latinos UTF-8 usando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Si PCRE no soporta caracteres unicode, el motor de búsqueda tratará de usar las expresiones regulares de mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Este motor de búsqueda requiere que PCRE soporte caracteres unicode, solo disponible en PHP 4.4, 5.1 y superior, si querés buscar caracteres no-latinos.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Palabras con al menos esta cantidad de caracteres serán indexadas para futuras búsquedas. Vos o tu hospedaje solo podrán cambiar esta configuración al cambiar la configuración de MySQL.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Palabras con no más de esta cantidad de caracteres serán indexadas para futuras búsquedas. Vos o tu hospedaje solo podrán cambiar esta configuración al cambiar la configuración de MySQL',

	'GENERAL_SEARCH_SETTINGS'	=> 'Configuración general de búsqueda',
	'GO_TO_SEARCH_INDEX'	=> 'Ir a índice de búsqueda',
	
	'INDEX_STATS'					=> 'Estadísticas de índice',
	'INDEXING_IN_PROGRESS'			=> 'Indexación en curso',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'El motor de búsqueda actualmente está indexando todos los mensajes del Sitio. Esto puede llevar desde un minuto a algunas horas dependiendo del tamaño del Sitio.',
	
	'LIMIT_SEARCH_LOAD'					=> 'Límite de carga de sistema de la página de búsqueda',
	'LIMIT_SEARCH_LOAD_EXPLAIN'			=> 'Si la carga de sistema por minuto excede este valor la página de búsqueda se pondrá offline, 1.0 equivale aprox. ~100% de utilización de un procesador. Solo funciona en servidores UNIX.',
	
	'MAX_SEARCH_CHARS'					=> 'Máximo de caracteres indexados para búsqueda',
	'MAX_SEARCH_CHARS_EXPLAIN'			=> 'Palabras con no más que esta cantidad de caracteres serán indexadas para búsqueda.',
    'MAX_NUM_SEARCH_KEYWORDS'            => 'Número máximo de palabras clave permitidas',
    'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => 'Número máximo de palabras que el usuario puede buscar. Un valor de 0 permite un número ilimitado de palabras.',
	'MIN_SEARCH_CHARS'					=> 'Mínimo de caracteres indexados para búsqueda',
	'MIN_SEARCH_CHARS_EXPLAIN'			=> 'Palabras con no menos que esta cantidad de caracteres serán indexadas para búsqueda.',
	'MIN_SEARCH_AUTHOR_CHARS'			=> 'Mínimo de caracteres de nombre de autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Los usuarios tienen que identificarse al menos esta cantidad de caracteres del nombre cuando efectúan una búsqueda de autor con comodines. Si el nombre del autor es más corto que este número, aún se podrá hacer la búsqueda ingresando el nombre completo.',
	
	'PROGRESS_BAR'					=> 'Barra de progreso',
	
	'SEARCH_GUEST_INTERVAL'			=> 'Intervalo entre búsquedas para invitados',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Número de segundos que los invitados deberán esperar entre búsquedas. Si un invitado busca, todos los demás deberán esperar que transcurra el intervalo.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'Todos los mensajes hasta id %1$d han sido indexados, de los cuales %2$d mensajes se hicieron en este paso.<br />El promedio actual de indexación es aproximadamente %3$.1f mensajes por segundo.<br />Indexando…',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'Todos los mensajes hasta  id %1$d han sido borrados del índice de búsqueda.<br />Borrando…',
	'SEARCH_INDEX_CREATED'			=> 'Indexados todos los mensajes en la base de datos del Sitio con éxito.',
	'SEARCH_INDEX_REMOVED'			=> 'Índices de búsquedas para este motor borrados con éxito.',
	'SEARCH_INTERVAL'				=> 'Intervalo entre búsquedas para usuarios',
	'SEARCH_INTERVAL_EXPLAIN'		=> 'Número de segundos que los usuarios deberán esperar entre búsquedas. Este intervalo es independiente para cada usuario.',
	'SEARCH_STORE_RESULTS'			=> 'Duración del caché de resultados de búsquedas',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Resultados de búsquedas cacheados expiran transcurrido este intervalo, en segundos. 0 significa deshabilitar caché de búsquedas.',
	'SEARCH_TYPE'					=> 'Buscar motor',
	'SEARCH_TYPE_EXPLAIN'			=> 'phpBB3 le permite elegir el motor que se usa para buscar texto en el contenido de los mensajes. Por defecto la búsqueda emplea el motor propio de phpBB.',
	'SWITCHED_SEARCH_BACKEND'		=> 'Cambiaste de motor de búsqueda. Para emplear el nuevo motor asegúrate de que haya un índice para el motor que elegiste.',
	
	'TOTAL_WORDS'				=> 'Número total de palabras indexadas',
	'TOTAL_MATCHES'				=> 'Número total de palabras para relacionar mensajes indexado',
	
	'YES_SEARCH'				=> 'Habilitar facilidades de búsqueda',
	'YES_SEARCH_EXPLAIN'		=> 'Habilita al usuario facilidades de búsqueda, incluyendo búsqueda de usuarios.',
	'YES_SEARCH_UPDATE'			=> 'Habilitar actualización de texto completo',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Actualización de índices de texto completo, desestimado si la búsqueda está deshabilitada.',
));

?>