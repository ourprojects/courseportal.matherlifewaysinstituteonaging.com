<?php
/**
*
* viewforum.php [Sorani Kurdish]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-26 - Chawg.org Group
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
	'ACTIVE_TOPICS'	=> 'بابەتە چالاکەکان',
	'ANNOUNCEMENTS'	=> 'ئاگادارییەکان',
	'FORUM_PERMISSIONS'	=> 'دەسەڵاتەکانی مەکۆ',
	'ICON_ANNOUNCEMENT'	=> 'ئاگاداریی',
	'ICON_STICKY'	=> 'جێگیر',
	'LOGIN_NOTIFY_FORUM'	=> 'ئاگادار کرایتەوە لەم مەکۆیە، تکایە بچۆ ژوورەوە بۆ بینینی.',
	'MARK_TOPICS_READ'	=> 'بابەتەکان وەک خوێندراوە نیشانە بکە',
	'NEW_POSTS_HOT'			=> 'New posts [ Popular ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'New posts [ Locked ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'No new posts [ Popular ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'No new posts [ Locked ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'تۆ دەسەڵاتت نییە بۆ بابەت بخوێنیتەوە لەناو ئەو مەکۆیە',
	'NO_UNREAD_POSTS_HOT'		=> 'هیچ پەیامی نەخوێندراو نییە [ پڕخوێنەرترین ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'هیچ پەیامێکی نەخوێندراو نییە [ داخراو ]',

	'POST_FORUM_LOCKED'		=> 'مەکۆ داخراوە',

	'TOPICS_MARKED'			=> 'بابەتەکان بۆ ئەو مەکۆیە بە خوێندراوە نیشانکران',

	'UNREAD_POSTS_HOT'		=> 'پەیامی نەخوێندراو [ پڕخوێنەرترین ]',
	'UNREAD_POSTS_LOCKED'	=> '[ داخراو ] پەیامە نەخوێندراوەکان',
	'VIEW_FORUM'	=> 'بینینی مەکۆ',
	'VIEW_FORUM_TOPIC'	=> '1 بابەت',
	'VIEW_FORUM_TOPICS'	=> '%d بابەت',
));

?>