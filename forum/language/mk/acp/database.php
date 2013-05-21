<?php
/**
*
* acp_database [Macedonian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_BACKUP_EXPLAIN'	=> 'овде може да направите целосен бекап на сите податоци од ваиот phpbb форум . Може да ја сочувате архивата во <samp>store/</samp> за да го симнете директно од серверот. Во зависност од конфигурацијата на вашиот сервер, овој фајл може да го компресирате во неколку формати.',
	'ACP_RESTORE_EXPLAIN'	=> 'Ова значи целосно враќање на  phpBB табелите од сочуваниот бекап фајл. Ако вашиот сервер подржува може да користите gzip или bzip2 компресирани фајлови кои ќе бидат автоматски декомпресирани. <strong>ПРЕДУПРЕДУВАЊЕ</strong> Ова ќе ги замени постоечките податоци. враќањето на податоците може да траее подолго време, не ја заворајте оваа страна се додека не биде комплетирано. Бекапите се зачувани во <samp>store/</samp> фолдерот и се превземени да се користат со phpBB’s бекап функционалноста. Бекапите кои не се направени или креирани од системот можеби нема да работат.',

	'BACKUP_DELETE'		=> 'Бекап фајлот беше успешно избришан.',
	'BACKUP_INVALID'	=> 'Селекираниот фајл за бекап е невалиден.',
	'BACKUP_OPTIONS'	=> 'Бекап опции',
	'BACKUP_SUCCESS'	=> 'Бекап фајлот е успешно креиран.',
	'BACKUP_TYPE'		=> 'Тип на бекап',

	'DATABASE'			=> 'Датабаза дејности',
	'DATA_ONLY'			=> 'Само податоци',
	'DELETE_BACKUP'		=> 'Избриши бекап',
	'DELETE_SELECTED_BACKUP'	=> 'Сигурни ли сте дека сакате да го избришете избраниот бекап?',
	'DESELECT_ALL'		=> 'Одселектирај ги сите',
	'DOWNLOAD_BACKUP'	=> 'Симни бекап',

	'FILE_TYPE'			=> 'Тип на фајл',
	'FILE_WRITE_FAIL'	=> 'Не е можно да се запишефајлот во фолдерот за меморирање.',
	'FULL_BACKUP'		=> 'Полн',

	'RESTORE_FAILURE'		=> 'Бекап фајлот можеби е расипан.',
	'RESTORE_OPTIONS'		=> 'Опции за враќање',
	'RESTORE_SELECTED_BACKUP'	=> 'Сигурни ли сте дека сакате да го вратите селектираниот бекап?',
	'RESTORE_SUCCESS'		=> 'Датабазата беше успешно вратена.<br /><br />Вашиот форум би требало да е вратен тогаш кога бекапот е направен.',

	'SELECT_ALL'			=> 'Селектирај ги сите',
	'SELECT_FILE'			=> 'Селектирај фајл',
	'START_BACKUP'			=> 'Стартувај бекап',
	'START_RESTORE'			=> 'Стартувај враќање',
	'STORE_AND_DOWNLOAD'	=> 'Меморирај и симни',
	'STORE_LOCAL'			=> 'Меморирај го фајлот локално/ на серверот',
	'STRUCTURE_ONLY'		=> 'Само структура',

	'TABLE_SELECT'		=> 'Селектирај табела',
	'TABLE_SELECT_ERROR'=> 'Мора да одберете најмалку една табела.',
));

?>