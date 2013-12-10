<?php
/**
*
* 
*
* viewtopic.php [Basque [eu]]
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
	'ATTACHMENT'						=> 'Fitxategi erantsia',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Fitxategi erantsiak gehitzeko aukera desgaitu egin da',
	
	'BOOKMARK_ADDED'					=> 'Gaia gogokoenetara zuzen gehituta.',
	'BOOKMARK_ERR'						=> 'Ezin izan da gaia gogokoenetara gehitu. Mesedez, saia zaitez berriro.',
	'BOOKMARK_REMOVED'					=> 'Gaia zuzen ezabatu da gogokoenetatik.',
	'BOOKMARK_TOPIC'					=> 'Gaia gogokoenetara gehitu',
	'BOOKMARK_TOPIC_REMOVE'				=> 'Gogokoenetatik ezabatu',
	'BUMPED_BY'							=> '%1$s(e)k sustatuta azkenengoz %2$s(e)an',
	'BUMP_TOPIC'						=> 'Gaia sustatu',
	
	'CODE'								=> 'Kodea',
	'COLLAPSE_QR'			=> 'Erantzun Azkarra gorde',	
	'DELETE_TOPIC'						=> 'Gaia ezabatu',
	'DOWNLOAD_NOTICE'					=> 'Ez duzu mezu honetako fitxategi erantsiak ikusteko baimenik.',
	
	'EDITED_TIMES_TOTAL'				=> '%1$s(e)k aldatuta azkenengoz %2$s(e)an, guztira %3$d aldiz aldatuta.',
	'EDITED_TIME_TOTAL'					=> '%1$s(e)k aldatuta azkenengoz %2$s(e)an, guztira aldi %3$dez aldatuta.',
	'EMAIL_TOPIC'						=> 'Lagun bati bidali',
	'ERROR_NO_ATTACHMENT'				=> 'Aukeratutako fitxategi erantsia ez da existitzen dagoeneko.',
	
	'FILE_NOT_FOUND_404'				=> '<strong>%s</strong> fitxategia ez da existitzen.',
	'FORK_TOPIC'						=> 'Gaia banatu',
	'FULL_EDITOR'			=> 'Editorea osoan',	
	'LINKAGE_FORBIDDEN'					=> 'Ez duzu webgune hau ikusi, deskargatu edo loturarik egiteko baimenik.',
	'LOGIN_NOTIFY_TOPIC'				=> 'Gai honi buruz jakinarazi zaizu, mesedez saioa hasi ikusteko.',
	'LOGIN_VIEWTOPIC'					=> 'Gai hau ikusteko izena eman eta saioa hasi behar duzu.',
	
	'MAKE_ANNOUNCE'						=> '"Iragarkia"ra aldatu',
	'MAKE_GLOBAL'						=> '"Orokorra"ra aldatu',
	'MAKE_NORMAL'						=> '"Normala"ra aldatu',
	'MAKE_STICKY'						=> '"Itsaskorra"ra aldatu',
	'MAX_OPTIONS_SELECT'				=> '<strong>%d</strong> aukera hauta zenitzake opciones',
	'MAX_OPTION_SELECT'					=> 'Aukera <strong>1</strong> hauta zenezake',
	'MISSING_INLINE_ATTACHMENT'			=> '<strong>%s</strong> fitxategi erantsia ez dago erabilgarri dagoeneko.',
	'MOVE_TOPIC'						=> 'Gaia mugitu',
	
	'NO_ATTACHMENT_SELECTED'			=> 'Ez duzu fitxategi erantsirik aukeratu ikusi edo deskargatzeko.',
	'NO_NEWER_TOPICS'					=> 'Ez da gai berririk foro honetan.',
	'NO_OLDER_TOPICS'					=> 'Ez da gai zaharrik foro honetan.',
	'NO_UNREAD_POSTS'					=> 'Ez da irakurri gabeko mezu berririk gai honetan.',
	'NO_VOTE_OPTION'					=> 'Bozkatzerakoan aukeraren bat hautatu behar duzu.',
	'NO_VOTES'							=> 'Ez da bozkarik',
	
	'POLL_ENDED_AT'						=> 'Inkesta %s(e)an bukatuta',
	'POLL_RUN_TILL'						=> 'Inkestak %s(e)raino darrai',
	'POLL_VOTED_OPTION'					=> 'Aukera hau bozkatu duzu',
	'PRINT_TOPIC'						=> 'Inprimatze bista',
	
	'QUICK_MOD'							=> 'Quick-mod tresnak',
	'QUICKREPLY'			=> 'Erantzun Azkarra',
	'QUOTE'								=> 'Aipatu',
	
	'REPLY_TO_TOPIC'					=> 'Gaia erantzun',
	'RETURN_POST'						=> '%sMezura itzuli%s',

	'SHOW_QR'				=> 'Erantzun Azkarra',	
	'SUBMIT_VOTE'						=> 'Bozka bidali',
	
	'TOTAL_VOTES'						=> 'Bozka guztira',
	
	'UNLOCK_TOPIC'						=> 'Gaia zabaldu',
	
	'VIEW_INFO'							=> 'Xehetasunak',
	'VIEW_NEXT_TOPIC'					=> 'Hurrengo gaia',
	'VIEW_PREVIOUS_TOPIC'				=> 'Aurreko gaia',
	'VIEW_RESULTS'						=> 'Emaitzak ikusi',
	'VIEW_TOPIC_POST'					=> 'Mezu 1',
	'VIEW_TOPIC_POSTS'					=> '%d mezu',
	'VIEW_UNREAD_POST'					=> 'Irakurri gabeko lehenengo mezua',
	'VISIT_WEBSITE'						=> 'WWW',
	'VOTE_SUBMITTED'					=> 'Zure bozka bidali egin da.',
	'VOTE_CONVERTED'					=> 'Ezin da bozkarik aldatu eraldatutako inkestetan.',
	
));

?>