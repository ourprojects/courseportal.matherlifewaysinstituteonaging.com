<?php
/**
*
* 
*
* viewforum.php [Basque [eu]]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License 2.0
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
//


$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Gai aktiboak',
	'ANNOUNCEMENTS'			=> 'Iragarkiak',

	'FORUM_PERMISSIONS'		=> 'Foroko baimenak',

	'ICON_ANNOUNCEMENT'		=> 'Iragarkia',
	'ICON_STICKY'			=> 'Itsaskorra',

	'LOGIN_NOTIFY_FORUM'	=> 'Foro honi buruz ohartarazi zaizu, mesedez saioa hasi ikusteko.',

	'MARK_TOPICS_READ'		=> 'Gaiak irakurriak bezala markatu',

	'NEW_POSTS_HOT'			=> 'Mezu berriak [ Gorian ]',// Dagoeneko ez da erabiltzen
	'NEW_POSTS_LOCKED'		=> 'Mezu berriak [ Itxita ]',// Dagoeneko ez da erabiltzen
	'NO_NEW_POSTS_HOT'		=> 'Ez da mezu berririk [ Gorian ]',// Dagoeneko ez da erabiltzen
	'NO_NEW_POSTS_LOCKED'	=> 'Ez da mezu berririk [ Itxita ]',// Dagoeneko ez da erabiltzen
	'NO_READ_ACCESS'		=> 'Ez duzu foro honetan gairik irakurtzeko baimenik.',
	'NO_UNREAD_POSTS_HOT'		=> 'Ez dago irakurri gabeko mezurik [ Gorian ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Ez dago irakurri gabeko mezurik [ Itxita ]',

	'POST_FORUM_LOCKED'		=> 'Foroa itxita dago',

	'TOPICS_MARKED'			=> 'Foro honetako gaiak irakurriak bezal markatu egin dira.',

	'UNREAD_POSTS_HOT'		=> 'Irakurri gabeko mezuak [ Gorian ]',
	'UNREAD_POSTS_LOCKED'	=> 'Irakurri gabeko mezuak [ Itxita ]',

	'VIEW_FORUM'			=> 'Foroa ikusi',
	'VIEW_FORUM_TOPIC'		=> 'Gai 1',
	'VIEW_FORUM_TOPICS'		=> '%d gai',
));

?>