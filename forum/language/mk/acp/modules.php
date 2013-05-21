<?php
/**
*
* acp_modules [Macedonian]
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Овде може да ги менаџирате сите видови на модули. Запамтете дека  Админ панелот има три нивоа на мени структура (Категорија -> Категорија -> Модул) при што другите имаат две нивоа на мени структура(Категорија -> Модул) кој што мора да се сочува. Исто така бидете свесни дека може да се заклучите себеси ако оневозможите или избришете некој од модулите одговорни за управување со модул менаџментот.',
	'ADD_MODULE'					=> 'Додај модул',
	'ADD_MODULE_CONFIRM'			=> 'Сигурни ли сте дека сакате да го додадете селектираниот модул со селектираниот Мод?',
	'ADD_MODULE_TITLE'				=> 'Додај модул',

	'CANNOT_REMOVE_MODULE'	=> 'Невозможно е одстранување на модулот, назначен е за децата. Ве молиме одстранете или преместете ги сите деца пред да продолжите со оваа акција.',
	'CATEGORY'				=> 'Категорија',
	'CHOOSE_MODE'			=> 'Одбери модул мод',
	'CHOOSE_MODE_EXPLAIN'	=> 'Одбери модул мод кој што е користен од овој модул.',
	'CHOOSE_MODULE'			=> 'Одбери модул',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Одбери фајл кој што е повикан од овој модул.',
	'CREATE_MODULE'			=> 'Креирај нов модул',

	'DEACTIVATED_MODULE'	=> 'Деактивиран модул',
	'DELETE_MODULE'			=> 'Избриши модул',
	'DELETE_MODULE_CONFIRM'	=> 'Сигурни ли сте дека сакате даго одстраните овој модул?',

	'EDIT_MODULE'			=> 'Измени модул',
	'EDIT_MODULE_EXPLAIN'	=> 'Овде може да внесете одредени подесувања за модлуот.',

	'HIDDEN_MODULE'			=> 'Сокриен модул',

	'MODULE'					=> 'Модул',
	'MODULE_ADDED'				=> 'Модулот е успешно додаден.',
	'MODULE_DELETED'			=> 'Модулот е успешно одстранет.',
	'MODULE_DISPLAYED'			=> 'Прикажан модул',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ако не сакате да се прикаже овој модул, но сакате да го користите, наместете го ова на НЕ.',
	'MODULE_EDITED'				=> 'Модулот е успешно изменет.',
	'MODULE_ENABLED'			=> 'Модулот е овозможен',
	'MODULE_LANGNAME'			=> 'Име на јазик за модулот',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Внесете име за модулот кое ќе се прикажува. Користете ги јазичните константни ако името е сервирано од јазичниот фајл.',
	'MODULE_TYPE'				=> 'Тип на модулот',

	'NO_CATEGORY_TO_MODULE'	=> 'Не е можно категорија да ставите како модул. Ве молиме одстранете или преместете ги сите деца пред да продолжите.',
	'NO_MODULE'				=> 'Не е пронајден модул.',
	'NO_MODULE_ID'			=> 'нема определен мод.',
	'NO_MODULE_LANGNAME'	=> 'Не е определено име на јазик за модулот.',
	'NO_PARENT'				=> 'Нема во низа',

	'PARENT'				=> 'Во низа',
	'PARENT_NO_EXIST'		=> 'Не постои во низа.',

	'SELECT_MODULE'			=> 'Одбери модул',
));

?>