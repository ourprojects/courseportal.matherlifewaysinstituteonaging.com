<?php
/**
*
* viewforum [Macedonian]
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
	'ACTIVE_TOPICS'			=> 'Активни теми',
	'ANNOUNCEMENTS'			=> 'Известувања',

	'FORUM_PERMISSIONS'		=> 'Дозволи на форумите',

	'ICON_ANNOUNCEMENT'		=> 'Иконка за известување',
	'ICON_STICKY'			=> 'Иконка за важна тема',

	'LOGIN_NOTIFY_FORUM'	=> 'Вие бевте известени за овој форум. Логирајте се да го видите.',

	'MARK_TOPICS_READ'		=> 'Маркирај ги темите како прочитани',

	'NEW_POSTS_HOT'			=> 'Нови мислења [ Популарна ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Нови мислења [ Затворена ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Нема нови мислења [ Популарна ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Нема нови мислења [ Затворена ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Вие немате доволно дозвола да читате мислења на овој форум',
	'NO_UNREAD_POSTS_HOT'		=> 'Нема непрочитани мислења [ Популарни ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Нема непрочитани мислења [ Затворени ]',

	'POST_FORUM_LOCKED'		=> 'Форумот е заклучен',

	'TOPICS_MARKED'			=> 'Темите се маркирани како прочитани',

	'UNREAD_POSTS_HOT'		=> 'Непрочитани мислења [ Популарни ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочитани мислења [ Затворени ]',

	'VIEW_FORUM'			=> 'Преглед на форумот',
	'VIEW_FORUM_TOPIC'		=> '1 тема',
	'VIEW_FORUM_TOPICS'		=> '%d теми',
));

?>