<?php
/**
*
* viewtopic [Macedonian]
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
	'ATTACHMENT'						=> 'Атачменти',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Не може да испраќате “Атачменти“',

	'BOOKMARK_ADDED'		=> 'Маркирањето е успешно.',
	'BOOKMARK_ERR'			=> 'Маркирањето на темата не успеа. Ве молиме пробајте повторно.',
	'BOOKMARK_REMOVED'		=> 'Успешно извадено од надгледувај тема.',
	'BOOKMARK_TOPIC'		=> 'Запамтија темата',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Извади од надгледување',
	'BUMPED_BY'				=> 'Последно bumped од %1$s на %2$s',
	'BUMP_TOPIC'			=> 'Удри (Bump) тема',

	'CODE'					=> 'Код',
	'COLLAPSE_QR'			=> 'Сокриј брз одговор',

	'DELETE_TOPIC'			=> 'Бриши тема',
	'DOWNLOAD_NOTICE'		=> 'Немате дозвола да ги гледате “aтачменти“ во оваа тема.',

	'EDITED_TIMES_TOTAL'	=> 'Последна промена од %1$s на %2$s, променето е  %3$d пати',
	'EDITED_TIME_TOTAL'		=> 'Последна промена од %1$s на %2$s, променето е %3$d пати',
	'EMAIL_TOPIC'			=> 'Испрати на пријател',
	'ERROR_NO_ATTACHMENT'	=> 'Одбраниот “Атачмент“ не постои повеќе',

	'FILE_NOT_FOUND_404'	=> 'Фајлот <strong>%s</strong> не постои.',
	'FORK_TOPIC'			=> 'Копирај ја темата',
	'FULL_EDITOR'			=> 'Целосен изменувач',

	'LINKAGE_FORBIDDEN'		=> 'Немаш пристап да го гледаш ,данлодираш или да одиш оваа срана.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Ве предупредивме за оваа тема , ве молиме логирајтесе да ја видите.',
	'LOGIN_VIEWTOPIC'		=> 'Администраторот бара да бидете регистрирани и логирани да ја гледате оваа темата.',

	'MAKE_ANNOUNCE'				=> 'Промени во “Најава”',
	'MAKE_GLOBAL'				=> 'Промени во “Глобално”',
	'MAKE_NORMAL'				=> 'Промени во “Стандардна тема”',
	'MAKE_STICKY'				=> 'Промени во “Закачена”',
	'MAX_OPTIONS_SELECT'		=> 'Можеш за специфицираш до <strong>%d</strong> опции',
	'MAX_OPTION_SELECT'			=> 'Одберете <strong>1</strong> опција',
	'MISSING_INLINE_ATTACHMENT'	=> '“Атачментот“ <strong>%s</strong> не постои повеќе',
	'MOVE_TOPIC'				=> 'Премести тема',

	'NO_ATTACHMENT_SELECTED'=> 'Не одбравте „атачмент“ за „download“ или за да го видите.',
	'NO_NEWER_TOPICS'		=> 'Нема понови теми на форумот',
	'NO_OLDER_TOPICS'		=> 'Нема постари теми на форумот',
	'NO_UNREAD_POSTS'		=> 'Нема нови не прочитани теми тука.',
	'NO_VOTE_OPTION'		=> 'Специфицирај опција при гласање.',
	'NO_VOTES'				=> 'Нема гласови',

	'POLL_ENDED_AT'			=> 'Анкетата заврши во %s',
	'POLL_RUN_TILL'			=> 'Анкетата трае до %s',
	'POLL_VOTED_OPTION'		=> 'Гласавте за оваа опција',
	'PRINT_TOPIC'			=> 'Отпечати',

	'QUICK_MOD'				=> 'Брзи-мод алатки',
	'QUICKREPLY'			=> 'Брз одговор',
	'QUOTE'					=> 'Цитат',

	'REPLY_TO_TOPIC'		=> 'Одговори на тема',
	'RETURN_POST'			=> '%sВрати се на темата%s',

    'SHOW_QR'				=> 'Брз одговор',
	'SUBMIT_VOTE'			=> 'Гласај',

	'TOTAL_VOTES'			=> 'Вкупно гласови',

	'UNLOCK_TOPIC'			=> 'Заклучена тема',

	'VIEW_INFO'				=> 'Детали на темата',
	'VIEW_NEXT_TOPIC'		=> 'Следна тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Предходна тема',
	'VIEW_RESULTS'			=> 'Види Резултати',
	'VIEW_TOPIC_POST'		=> '1на тема',
	'VIEW_TOPIC_POSTS'		=> '%е теми',
	'VIEW_UNREAD_POST'		=> 'Прва непрочитана тема',
	'VISIT_WEBSITE'			=> 'Посети ја Веб страната',
	'VOTE_SUBMITTED'		=> 'Вашиот глас беше запишан',
	'VOTE_CONVERTED'		=> 'Сменувањето на гласовите не е подржано за конвертираните анкети .',

));

?>