<?php
/**
*
* 
*
* search.php [Basque [eu]]
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

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'	=> 'Eskuragarri dauden guztiak',
	'ALL_RESULTS'	=> 'Emaitza guztiak',
	
	'DISPLAY_RESULTS'	=> 'Emaitzak honela bistaratu',
	
	'FOUND_SEARCH_MATCH'		=> 'Bilaketak agerraldi %d aurkitu du',
	'FOUND_SEARCH_MATCHES'		=> 'Bilaketak  %d agerraldi aurkitu ditu',
	'FOUND_MORE_SEARCH_MATCHES'	=> '%d agerraldi baino gehiago aurkitu dira',
	
	'GLOBAL'	=> 'Iragarki orokorra',
	
	'IGNORED_TERMS'			=> 'Baztertuta',
	'IGNORED_TERMS_EXPLAIN'	=> 'Hurrengo hitz hauek bilaketan baztertu egin dira arruntegitzat jo direlako: <strong>%s</strong>',
	
	'JUMP_TO_POST'	=> 'Mezura salto egin',
	
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Zuk zeuk bidalitako mezuak ikusteko, izena eman eta saioa hasi behar duzu.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Irakurri gabe dituzun mezuak ikusteko izena eman eta saioa hasi behar duzu.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Izena eman eta logeatu egin behar duzu, azkenengoz sartu zinenetik bidalitako mezu berriak ikusi nahi badituzu.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Hitz gehiegi zehaztu duzu bilaketarako. Mesedez, ez ezazu %1$d hitz baino gehiago sartu.',
	
	'NO_KEYWORDS'		=> 'Gutxienez terminoren bat zehaztu behar duzu bilaketa egiteko. Hitz bakoitzak %d karaktere izan behar ditu gutxienez eta %d karaktere gehienez (komodinak aparte).',
	'NO_RECENT_SEARCHES'=> 'Ez da bilaketarik egin azken aldian.',
	'NO_SEARCH'			=> 'Barkatu, baina ez du bilaketa sistema erabiltzeko baimenik.',
	'NO_SEARCH_RESULTS'	=> 'Ez da emaitzik aurkitu.',
	'NO_SEARCH_TIME'	=> 'Barkatu, baina ezin daiteke bilatze sistema momentu honetan erabili. Saiatu berriro minutu batzu barru.',
	'NO_SEARCH_UNREADS'		=> 'Barkatu baina irakurrigabeko mezuen bilaketa ezgaitu egin da foro honetan.',
	'WORD_IN_NO_POST'	=> 'Ez da <strong>%s</strong> hitza duen mezurik aurkitu.',
	'WORDS_IN_NO_POST'	=> 'Ez da <strong>%s</strong> hitzak duten mezurik aurkitu.',
	
	'POST_CHARACTERS'	=> 'Mezuetako karaktereak',
	
	'RECENT_SEARCHES'		=> 'Duela gutxiko bilaketak',
	'RESULT_DAYS'			=> 'Emaitzak lehenagorako mugatu',
	'RESULT_SORT'			=> 'Emaitzak ordenatu',
	'RETURN_FIRST'			=> 'Lehenengoak bistaratu',
	'RETURN_TO_SEARCH_ADV'	=> 'Bilaketa aurreratura itzuli',
	
	'SEARCHED_FOR'				=> 'Bilatutako terminoa',
	'SEARCHED_TOPIC'			=> 'Bilatutako mezua',
	'SEARCH_ALL_TERMS'			=> 'Termino guztiak bilatu',
	'SEARCH_ANY_TERMS'			=> 'Edozein termino bilatu',
	'SEARCH_AUTHOR'				=> 'Egileagatik bilatu',
	'SEARCH_AUTHOR_EXPLAIN'		=> '* erabil ezazu komodin bezala ez baldin baduzu hitz osoa gogoratzen.',
	'SEARCH_FIRST_POST'			=> 'Gaietako lehen mezuan baino ez bilatu',
	'SEARCH_FORUMS'				=> 'Foroetan bilatu',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Bilatu nahi d(it)uzun foroa(k) aukeratu. Bilaketak automatikoki jaurtikitzen dira subforoetara, beraz, prozesua arindu nahi baduzu "Subforoetan bilatu" aukera ezgaitu bilaketa aukeretan.',
	'SEARCH_IN_RESULTS'			=> 'Emaitzen artean bilatu',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Hitz baten aurrean <strong>+</strong> jar ezazu, berau aurkitu nahi baduzu eta <strong>-</strong> jar ezazu bilaketatik kanpo geratu daiten. Zerrenda bateko hitz bakar bat baino ez baduzu aurkitu nahi, jar ezazu zerrenda kortxeteen artean eta hitzak <strong>|</strong> zeinuarekin bana itzazu. Ez baduzu termino osoa jarri nahi <strong>*</strong> zeinua erabil ezazu komodin modura.',
	'SEARCH_MSG_ONLY'			=> 'Mezuko testua baino ez',
	'SEARCH_OPTIONS'			=> 'Bilaketa aukerak',
	'SEARCH_QUERY'				=> 'Bilaketa',
	'SEARCH_SUBFORUMS'			=> 'Subforoetan bilatu',
	'SEARCH_TITLE_MSG'			=> 'Mezuko izenburu eta testuan',
	'SEARCH_TITLE_ONLY'			=> 'Gaietako izenburuak baino ez',
	'SEARCH_WITHIN'				=> 'Hemen bilatu',
	'SORT_ASCENDING'			=> 'Gorantza',
	'SORT_AUTHOR'				=> 'Egilea',
	'SORT_DESCENDING'			=> 'Beherantza',
	'SORT_FORUM'				=> 'Foroa',
	'SORT_POST_SUBJECT'			=> 'Mezuko izenburua',
	'SORT_TIME'					=> 'Data',
	
	'TOO_FEW_AUTHOR_CHARS'		=> 'Gutxienez egilearen izenaren %d karaktere zehaztu behar dituzu.',
));

?>