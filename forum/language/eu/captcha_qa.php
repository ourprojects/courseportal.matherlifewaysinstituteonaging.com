<?php
/**
*
* 
*
* captcha_qa.php [Basque [eu]]
*
* @version $Id$
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Q&amp;A (Itaunak eta erantzunak',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Itaun hau spambotak bidalitako izen-emate automatikoak ekiditzeko erabiltzen da.',
	'CONFIRM_QUESTION_WRONG'	=> 'Ez duzu erantzun zuzena eman.',

	'QUESTION_ANSWERS'			=> 'Erantzunak',
	'ANSWERS_EXPLAIN'			=> 'Itaunari erantzun zuzenak sartu. Marra bakoitzeko bana.',
	'CONFIRM_QUESTION'			=> 'Itauna',

	'ANSWER'					=> 'Erantzuna',
	'EDIT_QUESTION'				=> 'Itauna aldatu',
	'QUESTIONS'					=> 'Itaunak',
	'QUESTIONS_EXPLAIN'			=> 'Q&amp;A plugina ezarritako lekuetan bidaltze-formulario bakoitzeko, hemen zehaztutako itaunen bat galdetuko zaie erabiltzaileei. Plugin hau erabiltzeko, gutxienez itaun bat ezarri beharko duzu foroan leheenetsitako hizkuntzan. Zure erabiltzaileentzako erraza baina Google™ bilaketak egiteko gai den robotentzako erantzutea zaila behar duen itauna jarri. Emaitzarik onenak itaun kopuru handi bat eta itaunak aldika aldatuz lortuko dituzu. Ezarri Egiaztapen zorrotza gaitu erantzunak tildeetan, letra-larrietan, puntuazioan edo hutsuneetan baldin badatza.',
	'QUESTION_DELETED'			=> 'Ezabatua itauna',
	'QUESTION_LANG'				=> 'Hizkuntza',
	'QUESTION_LANG_EXPLAIN'		=> 'Itauna (eta erantzuna) zein hizkuntzatan dagoen idatzita.',
	'QUESTION_STRICT'			=> 'Egiaztapen zorrotza',
	'QUESTION_STRICT_EXPLAIN'	=> 'Erantzunetan letra larriak, puntuazioa edo hutsuneak erabiltera derrigortu nahi baduzu gaitu aukera hau.',

	'QUESTION_TEXT'				=> 'Itauna',
	'QUESTION_TEXT_EXPLAIN'		=> 'Erabiltzaileari bistaratuko zaion itauna.',

	'QA_ERROR_MSG'				=> 'Mesedez, eremu guztiak bete eta gutxienez erantzunen bat sar ezazu.',
	'QA_LAST_QUESTION'			=> 'Ezin dituzu itaun guztiak ezabatu plugin-a gaituta dagoen bitartean.',

));

?>