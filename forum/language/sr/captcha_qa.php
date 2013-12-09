<?php
/**
*
* captcha_qa [English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Ovo pitanje je način za identifikovanje i prevenciju autromatskog slanja.',
	'CONFIRM_QUESTION_WRONG'	=> 'Uneli ste netačan odgovor na pitanje za potvrdu.',

	'QUESTION_ANSWERS'			=> 'Odgovori',
	'ANSWERS_EXPLAIN'			=> 'Unesite ispravne odgovore, svaki u novom redu.',
	'CONFIRM_QUESTION'			=> 'Pitanje',

	'ANSWER'					=> 'Odgovor',
	'EDIT_QUESTION'				=> 'Izmeni pitanje',
	'QUESTIONS'					=> 'Pitanja',
	'QUESTIONS_EXPLAIN'			=> 'Tokom registracije, članovima će biti postavljeno jedno od pitanja koje unesete ovde. Da bi koristili ovaj dodatak, najmanje jedno piranje mora biti uneto u podgrazumevanom jeziku. Pitanja bi trebalo da budu laka, ali iznad mogućnosti robota koji vrše Google™ pretragu. Koristeći puno pitanja i njihovo redovno menjanje daje najbolje rezultate. Uključite striktnu prover podešavanje ako vaše pitanje zahteva velika slova ili razmake.',
	'QUESTION_DELETED'			=> 'Pitanje je obrisano',
	'QUESTION_LANG'				=> 'Jezik',
	'QUESTION_LANG_EXPLAIN'		=> 'Jezik na kome je napisano pitanje i odgovor.',
	'QUESTION_STRICT'			=> 'Striktna provera',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ukoliko je uključeno, velika slova i razmaci će biti zahtevani.',

	'QUESTION_TEXT'				=> 'Pitanje',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pitanje koje će biti postavljeno prilikom registracije.',

	'QA_ERROR_MSG'				=> 'Popunite sva polja i unesite najmanje jedan odgovor.',
	'QA_LAST_QUESTION'			=> 'Ne možete obrisati sva pitanja dok je ovaj plugin aktivan.',
));

?>