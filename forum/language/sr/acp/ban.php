<?php
/** 
*
* acp_ban [Serbian]
*
* @package language
* @version $Id: ban.php,v 1.9 2006/10/02 15:10:29 acydburn Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 sat',
	'30_MINS'		=> '30 minuta',
	'6_HOURS'		=> '6 sati',

	'ACP_BAN_EXPLAIN'	=> 'Odavde kontrolišete zabrane korisnika po imenu, IP adresi ili email adresi. Ove metode sprečavaju korisnika da pristupi bilo kom delu boarda. Možete zadati kratak (255 karaktera) razlog za zabranu ako želite. Poruka će biti prikazana u admin logu. Dužina trajanja zabrane takođe može biti određena. Ako želite zabranu do kraja određenog datuma radije nego da podesite vremenski period <u>Sve do</u>, upišite datum u yyyy-mm-dd formatu.',

	'BAN_EXCLUDE'			=> 'Izuzeće od zabrana',
	'BAN_LENGTH'			=> 'Trajanje zabrane',
	'BAN_REASON'			=> 'Razlog zabrane',
	'BAN_GIVE_REASON'		=> 'Prikaži zabranjenom korisniku razlog',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista zabrana je uspešno ažurirana.',
	
	'BANNED_UNTIL_DATE'    =>  'do %s',
  'BANNED_UNTIL_DURATION' =>  '%1$s (do %2$s)',

	'EMAIL_BAN'					=> 'Zabrani jednu ili više email adresa',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Uključite ovu opciju da bi izuzeli unesene email adrese od svih trenutnih zabrana.',
	'EMAIL_BAN_EXPLAIN'			=> 'Da bi uneli više od jedne email adrese, unesite svaku od njih u novi red. Za nepotpune adrese koristite * kao džoker, na primer <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Nema zabranjenih email adresa',
	'EMAIL_UNBAN'				=> 'Ukloni zabranu email-a',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Možete ukloniti zabranu za više email adresa odjednom koristeći odgovarajuću kombinaciju miša i tastature. Izuzete email adrese su obeležene obojenom pozadinom.',

	'IP_BAN'					=> 'Zabrani jednu ili više IP adresa',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Uključite ovu opciju ukoliko želite da izuzmete unetu IP adresu od svih trenutnih zabrana.',
	'IP_BAN_EXPLAIN'			=> 'Da bi uneli više različitih IP adresa ili hostova unesite svaku u novi red. Za opseg IP adresa razdvojite počrtnu i krajnju sa crticom (-), za džoker koristite zvezdicu *',
	'IP_HOSTNAME'				=> 'IP adrese ili hostovi',
	'IP_NO_BANNED'				=> 'Nema zabranjenih IP adresa',
	'IP_UNBAN'					=> 'Ukloni zabranu IP adresa',
	'IP_UNBAN_EXPLAIN'			=> 'Možete ukloniti zabranu više IP adresa odjednom koristeći odgovarajuću kombinaciju miša i tastature. Izuzete IP adrese su obeležene obojenom pozadinom.',

	'LENGTH_BAN_INVALID'		=> 'Datum mora biti u formatu <kbd>GGGG-MM-DD</kbd>.',
	
	'OPTIONS_BANNED'			=> 'Zabranjen',
	'OPTIONS_EXCLUDED'			=> 'Izuzet',
	
	'PERMANENT'		=> 'Trajno',
	
	'UNTIL'						=> 'Sve do',
	'USER_BAN'					=> 'Zabrani jedno ili više korisničkih imena',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Uključite ovu opciju da izuzmete unešena korisnička imena od svih trenutnih zabrana.',
	'USER_BAN_EXPLAIN'			=> 'Možete zabraniti više korisnika odjednom tako što ćete uneti svako korisničko ime u novi red. Koristite <u>Pronađi člana</u> da pronađete i dodate jednog ili više korisnika automatski.',
	'USER_NO_BANNED'			=> 'Nema zabranjenih korisničkih imena',
	'USER_UNBAN'				=> 'Ukloni zabranu korisničkih imena',
	'USER_UNBAN_EXPLAIN'		=> 'Možete ukloniti zabranu više korisnika odjednom koristeći odgovarajuću kombinaciju miša i tastature. Izuzeti korisnici su obeleženi obojenom pozadinom.',
));

?>