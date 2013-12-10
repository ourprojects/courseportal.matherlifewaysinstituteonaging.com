<?php
/** 
*
* viewforum [Serbian]
*
* @package language
* @version $Id: viewforum.php,v 1.14 2006/11/19 20:08:15 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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
	'ACTIVE_TOPICS'			=> 'Aktivne teme',
	'ANNOUNCEMENTS'			=> 'Obaveštenja',

	'FORUM_PERMISSIONS'		=> 'Dozvole foruma',

	'ICON_ANNOUNCEMENT'		=> 'Obaveštenje',
	'ICON_STICKY'			=> 'Lepljiva',

	'LOGIN_NOTIFY_FORUM'	=> 'Obavešteni ste ovom forumu, molimo vas da se prijavite da bi ga pogledali.',

	'MARK_TOPICS_READ'		=> 'Obeleži teme kao pročitane',
	'MOVED_TOPIC'			=> 'Pomerena tema',

	'NEW_POSTS_HOT'			=> 'Novi postovi [ Popularni ]',
	'NEW_POSTS_LOCKED'		=> 'Novi postovi [ Zaključani ]',
	'NO_NEW_POSTS_HOT'		=> 'Nema novih postova [ Popularni ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Nema novih postova [ Zaključanih ]',
	'NO_READ_ACCESS'		=> 'Nemate potrebne dozvole da pregledate teme u ovom forumu.',
	'NO_UNREAD_POSTS_HOT'	=> 'Nema privatnih postova [ Popularni ]', 
	'NO_UNREAD_POSTS_LOCKED' => 'Nema nepročitanih postova [ Zaključanih ]',

	'POST_FORUM_LOCKED'		=> 'Forum je zaključan',

	'TOPICS_MARKED'			=> 'Teme za ovaj forum su sada obeležene kao pročitane',
	
	'UNREAD_POSTS_HOT'		=> 'Nepročitani postovi [ Popularni ]',
	'UNREAD_POSTS_LOCKED'	=> 'Nepročitani postovi [ Zaključani ]',

	'VIEW_FORUM'			=> 'Pogledaj forum',
	'VIEW_FORUM_TOPIC'		=> '1 tema',
	'VIEW_FORUM_TOPICS'		=> '%d tema',
));

?>