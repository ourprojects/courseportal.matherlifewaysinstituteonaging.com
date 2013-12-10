<?php
/**
*
* acp_language [Macedonian]
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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Административни јазични фајлови',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Овде можете да инсталирате или да ги одстраните јазичните пакети. Основниот јазик на форумот е обележан со ѕвезда (*).',

	'EMAIL_FILES'			=> 'Мејл темплејти',

	'FILE_CONTENTS'				=> 'Содржина на фајлови',
	'FILE_FROM_STORAGE'			=> 'Фајл од фолдерот за меморирање',

	'HELP_FILES'				=> 'Помошни фајлови',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Инсталирани јазични пакети',
	'INVALID_LANGUAGE_PACK'		=> 'Одредениот јазичен пакет изгледа дека не е валиден. Ве молиме верификувајте го јазичниот пакет и уплодирајте го повторно ако е потребно.',
	'INVALID_UPLOAD_METHOD'		=> 'Одредениот метод за уплоад не е валиден, ве молиме изберете друг метод.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Деталите за јазикот се успешно апдејтувани.',
	'LANGUAGE_ENTRIES'					=> 'Јазични внесувања',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Овде може да ги промените постоечките јазични пакети или оние кои  сеуште не се преведени.<br /><strong>Важно:</strong> Еднаш изменетиот јазичен фајл, промените ќе бидат меморирани во одделен фолдер за вас, за да може да го симнете истиот. Промените нема да бидат видливи за вашите членови се додека не ги замените оригиналните фајлови со оние кои преведените (замена на истите со уплоадирање).',
	'LANGUAGE_FILES'					=> 'Јазични фајлови',
	'LANGUAGE_KEY'						=> 'Клуч за јазик',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Овој јазичен пакет е веќе инсталиран.',
	'LANGUAGE_PACK_DELETED'				=> 'Јазичниот пакет <strong>%s</strong> беше успешно одстранет. Сите членови кои го користеле овој јазик ќе бидат вратени на новиот основен јазик на форумот.',
	'LANGUAGE_PACK_DETAILS'				=> 'Детали за јазичниот пакет',
	'LANGUAGE_PACK_INSTALLED'			=> 'Јазичниот пакет <strong>%s</strong> беше успешно инсталиран.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Вообичаените профил полиња’ јазичните стрингови беа копирани од основниот јазик. Ве молиме променете ги ако е потребно.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Локално име',
	'LANGUAGE_PACK_NAME'				=> 'Име',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Одредениот јазичен пакет не постои.',
	'LANGUAGE_PACK_USED_BY'				=> 'Користен од (вклучувајќи роботи)',
	'LANGUAGE_VARIABLE'					=> 'Варијабла на јазикот',
	'LANG_AUTHOR'						=> 'Автор на јазичниот пакет',
	'LANG_ENGLISH_NAME'					=> 'Име на Англиски',
	'LANG_ISO_CODE'						=> 'ISO код',
	'LANG_LOCAL_NAME'					=> 'Локално име',

	'MISSING_LANGUAGE_FILE'		=> 'Недостасува јазичен фајл: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Недостасува варијабла на јазикот',
	'MODS_FILES'				=> 'МОД јазични фајлови',

	'NO_FILE_SELECTED'				=> 'Не одредивте јазичен фајл.',
	'NO_LANG_ID'					=> 'Не одредивте јазичен пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Не може да го одстраните основниот јазичен пакет.<br />Ако сакате да го одстраните овој јазичен пакет прво треба да го промените основниот јазик на форумот.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Нема одстранети јазични пакети',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Одстрани од фолдерот за меморирање',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Одберете формат за симнување',
	'SUBMIT_AND_DOWNLOAD'		=> 'Испрати и симни го фајлот',
	'SUBMIT_AND_UPLOAD'			=> 'Испрати и уплодирај го фајлот',

	'THOSE_MISSING_LANG_FILES'			=> 'Следните јазични фајлови недостасуваат во  %s јазичниот пакет',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Следните јазични варијабли недостасуваат од the <strong>%s</strong> јазичниот пакет',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Одстранети јазични пакети',

	'UNABLE_TO_WRITE_FILE'		=> 'Фёајлот неможе да биде запишан во %s.',
	'UPLOAD_COMPLETED'			=> 'Уплоадот беше успешно комплетиран.',
	'UPLOAD_FAILED'				=> 'Уплоадот не успеа од неразјаснети причини. Можеби ќе треба да го замените релевнтниот фајл рачно.',
	'UPLOAD_METHOD'				=> 'Метод за уплоад',
	'UPLOAD_SETTINGS'			=> 'Опции за уплоад',

	'WRONG_LANGUAGE_FILE'		=> 'Одредениот јазичен фајл е невалиден.',
));

?>