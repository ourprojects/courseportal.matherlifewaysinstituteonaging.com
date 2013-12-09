<?php
/**
*
* acp_users [Macedonian]
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
	'ADMIN_SIG_PREVIEW'		=> 'Преглед на потпис',
	'AT_LEAST_ONE_FOUNDER'	=> 'Не можете да го смените овој основач во обичен член. На форумот треба да има најмалку еден основач. Ако сакате да им го смените статусот на овие членови, прво промовирајте друг член како основач .',

	'BAN_ALREADY_ENTERED'	=> 'Банирањето дадено претходно е успешно внесено. Но бан листата не е апдејтувана.',
	'BAN_SUCCESSFUL'		=> 'Успешно е внесено банирањето.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Вие немате дозвола да банирате акаунт на анонимен. Дозволите за анонимните членови може да бидат подесени во страната Дозволи.',
	'CANNOT_BAN_FOUNDER'			=> 'Вие немате дозвола да банирате акаунти на основачи.',
	'CANNOT_BAN_YOURSELF'			=> 'Немате дозвола да се банирате себеси.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Немате дозвола да деактивирате бот акаунти. Ве молиме деактивирајте го ботот преку Бот страната.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Вие немате дозвола да деактивирате акаунти на основачи.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Вие немате дозвола да деактивирате акаунт на самиот себеси.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Немате дозвола да присилите реактивација на бот акаунти. Ве молиме деактивирајте го ботот преку Бот страната.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Вие немате дозвола да присилите реактивација на акаунти на основачи.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Вие немате дозвола да присилите реактивација на акаунт на самиот себеси.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Вие неможете да одстраните посетителски членски акаунт.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Вие немате дозвола да одстраните акаунт на самиот себеси.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Не можете да промовирате игнорирани членови во основачи.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Треба да ги активирате членовите пред да ги промовирате во основачи, само членови на кои им е активен акаунтот може да бидат промовирани.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Треба да го одредите ова ако ја менувате мејл адресата на членовите.',

	'DELETE_POSTS'			=> 'Избриши мислења',
	'DELETE_USER'			=> 'Избриши член',
	'DELETE_USER_EXPLAIN'	=> 'Ве молиме запамтете дека бришењето на член е финално, неможе да се поврати.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Реакивацијата е успешно спроведена.',
	'FOUNDER'						=> 'Основач',
	'FOUNDER_EXPLAIN'				=> 'Основачите имаат администраторски дозволи и никогаш не моќат да бидат банирани, избришани или изменети од членови не-основачи.',

	'GROUP_APPROVE'					=> 'Одобри член',
	'GROUP_DEFAULT'					=> 'Направи ја групата основна за членот',
	'GROUP_DELETE'					=> 'Одстрани член од група',
	'GROUP_DEMOTE'					=> 'Деградирај лидер на група',
	'GROUP_PROMOTE'					=> 'Промовирај во лидер на група',

	'IP_WHOIS_FOR'			=> 'IP кој е за %s',

	'LAST_ACTIVE'			=> 'Последна активност',

	'MOVE_POSTS_EXPLAIN'	=> 'Ве молиме одберете форум од каде што сакате да бидат премести сите мислења направени од овој член.',

	'NO_SPECIAL_RANK'		=> 'Не назначено специјален ранг',
	'NO_WARNINGS'			=> 'Нема предупредувања.',
	'NOT_MANAGE_FOUNDER'	=> 'Вие пробавте да менаџирате статус на основач. Само основачите можат да ги менаџираат другите основачи.',

	'QUICK_TOOLS'			=> 'Брзи алатки',

	'REGISTERED'			=> 'Регистриран',
	'REGISTERED_IP'			=> 'Регистриран од IP',
	'RETAIN_POSTS'			=> 'Задржани мислења',

	'SELECT_FORM'			=> 'Селектирајте форма',
	'SELECT_USER'			=> 'Селектирајте член',

	'USER_ADMIN'					=> 'Членска администрација',
	'USER_ADMIN_ACTIVATE'			=> 'Активирај акаунт',
	'USER_ADMIN_ACTIVATED'			=> 'Членот е успешно активиран.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Успешно е одстранед аватарот од членскиот акаунт.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Банирај мејл',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Мејл адресата е банирана од менаџментот',
	'USER_ADMIN_BAN_IP'				=> 'Банирај IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP банирана од менаџментот',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Членското име е банирано од менаџментот',
	'USER_ADMIN_BAN_USER'			=> 'Банирај корисничко име',
	'USER_ADMIN_DEACTIVATE'			=> 'Деактивирај акаунт',
	'USER_ADMIN_DEACTIVED'			=> 'Членот е успешно деактивиран.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Избрипи ги сите прикачувања',
	'USER_ADMIN_DEL_AVATAR'			=> 'Избриши аватар',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Испразни ја кутијата за праќање во приватни пораки.',
	'USER_ADMIN_DEL_POSTS'			=> 'Избриши ги сите мислења',
	'USER_ADMIN_DEL_SIG'			=> 'Избриши потпис',
	'USER_ADMIN_EXPLAIN'			=> 'Овде може да ја смените информацијата за членот како и одредени специфични опции.',
	'USER_ADMIN_FORCE'				=> 'Присили реактивација',
	'USER_ADMIN_LEAVE_NR'			=> 'Одстрани од Нови Членови',
	'USER_ADMIN_MOVE_POSTS'			=> 'Премести ги сите мислења',
	'USER_ADMIN_SIG_REMOVED'		=> 'Потписот е успешно одстранед.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Упсешно се одстранети си прикачувања направени од овој член.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Аватарот неможе да биде прикажан бидејќи аватарите не се дозволени.',
	'USER_AVATAR_UPDATED'			=> 'Успешно се апдејтувани членските детали за аватарот.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Моменталниот аватар неможе да биде прикажан бидејќи тој тип не е дозволен.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Вообичаени профил полиња',
	'USER_DELETED'					=> 'Членот е успешно избришан.',
	'USER_GROUP_ADD'				=> 'Додаде член во група',
	'USER_GROUP_NORMAL'				=> 'Од дефинираните групи членот е член во',
	'USER_GROUP_PENDING'			=> 'Членот во групата е на чекање за одобрување',
	'USER_GROUP_SPECIAL'			=> 'Од дефинираните групи членот е член во',
	'USER_LIFTED_NR'				=> 'Успешно се одстрати членовите од групата Нови Членови.',
	'USER_NO_ATTACHMENTS'			=> 'Нема прикачени фајлови за прикажување.',
	'USER_OUTBOX_EMPTIED'			=> 'Успешно е испразнета кутијата за праќање приватни пораки.',
	'USER_OUTBOX_EMPTY'				=> 'Кутијата за праќање приватни пораки е веќе празна.',
	'USER_OVERVIEW_UPDATED'			=> 'Апдејтувани се членските детали.',
	'USER_POSTS_DELETED'			=> 'Успешно се одстранети си мислења направени од овој член.',
	'USER_POSTS_MOVED'				=> 'Мислењата се успешно преместени во избраниот форум.',
	'USER_PREFS_UPDATED'			=> 'Апдејтувани се членските преференци.',
	'USER_PROFILE'					=> 'Членски профил',
	'USER_PROFILE_UPDATED'			=> 'Членскиот профил е апдејтуван.',
	'USER_RANK'						=> 'Членски ранг',
	'USER_RANK_UPDATED'				=> 'Членскиот ранг е упсешно апдејтуван.',
	'USER_SIG_UPDATED'				=> 'Членскиот потпис е успешно апдејтуван.',
	'USER_WARNING_LOG_DELETED'		=> 'Нема достапна информација. Можно е да е избришано.',
	'USER_TOOLS'					=> 'Базични алатки',
));

?>