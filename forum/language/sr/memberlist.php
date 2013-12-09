<?php
/** 
*
* memberlist [Serbian]
*
* @package language
* @version $Id: memberlist.php,v 1.26 2006/10/26 14:46:41 dhn2 Exp $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Najaktivniji forum',
	'ACTIVE_IN_TOPIC'		=> 'Najaktivnija tema',
	'ADD_FOE'				=> 'Dodaj protivnika',
	'ADD_FRIEND'			=> 'Dodaj prijatelja',
	'AFTER'					=> 'Posle',	

	'ALL'					=> 'Svi',
	
	'BEFORE'				=> 'Pre',

	'CC_EMAIL'				=> 'Pošaljite kopiju ovog email-a sebi',
	'CONTACT_USER'			=> 'Kontakt',

	'DEST_LANG'				=> 'Jezik',
	'DEST_LANG_EXPLAIN'		=> 'Izaberite odgovarajući jezik (ako postoji) za primaoca ove poruke.',

	'EMAIL_BODY_EXPLAIN'	=> 'Ova poruka će biti poslata kao običan tekst, nemojte ubacivati bilo kakav HTML ili BBKod. Povratna adresa za ovu poruku će biti podešena kao i vaša email adresa.',
	'EMAIL_DISABLED'		=> 'Žao nam je, ali sve funkcije vezane za email su isključene.',
	'EMAIL_SENT'			=> 'Email je poslat.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Ova poruka će biti poslata kao običan tekst, nemojte ubacivati bilo kakav HTML ili BBKod. Znajte da je informacija o temi već uključena u poruku. Povratna adresa za ovu poruku će biti podešena kao i vaša email adresa.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Morate uneti ispravnu email adresu za primaoca.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Morate uneti poruku koja će biti poslata.',
	'EMPTY_MESSAGE_IM'		=> 'Morate uneti poruku da bi bila poslata.',
	'EMPTY_NAME_EMAIL'		=> 'Morate uneti pravo ime primaoca.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Morate uneti naslov za ovaj email.',
	'EQUAL_TO'				=> 'Jednako',

	'FIND_USERNAME_EXPLAIN'	=> 'Koristite ovu formu da pronađete određene članove. Ne morate popuniti sva polja. Za delimično poklapanje koristite * kao džoker. Kada unosite datum koristite format <kbd>GGGG-MM-DD</kbd>, npr. <samp>2004-02-29</samp>. Koristite kućice da izaberete jedno ili više korisničkih imena (više korisničkih imena može biti prihvaćeno u zavisnosti od same forme) i kliknite na dugme Izaberi označene da se vratite na prethodnu formu.',
	'FLOOD_EMAIL_LIMIT'		=> 'Ne možete poslati još jedan email u ovom trenutku. Molimo vas da pokušate kasnije.',

	'GROUP_LEADER'			=> 'Vođa grupe',

	'HIDE_MEMBER_SEARCH'	=> 'Sakrij pretragu članova',

	'IM_ADD_CONTACT'		=> 'Dodaj kontakt',
	'IM_AIM'				=> 'Znajte da će vam trebati AOL Instant Messenger instaliran da bi mogli da koristite ovu opciju.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Preuzmi aplikaciju',
	'IM_ICQ'				=> 'Znajte da su korisnici možda izabrali da ne primaju unsolicited instant poruke.',
	'IM_JABBER'				=> 'Znajte da su korisnici možda izabrali da ne primaju unsolicited instant poruke.',
	'IM_JABBER_SUBJECT'		=> 'Ovo je automatska poruka - molimo vas da ne odgovarate! Poruka od korisnika %1$s na %2$s',
	'IM_MESSAGE'			=> 'Vaša poruka',
	'IM_MSNM'				=> 'Znajte da će vam trebati Windows Messenger instaliran da bi mogli da koristite ovu opciju.',
	'IM_MSNM_BROWSER'		=> 'Vaš browser ne podržava ovo.',
	'IM_MSNM_CONNECT'		=> 'MSNM nije konektovan.\nMorate se povezati na MSNM za nastavak.',		
	'IM_NAME'				=> 'Vaše ime',
	'IM_NO_DATA'			=> 'Nema pogodne informacije o kontaktu za ovog korisnika.',
	'IM_NO_JABBER'			=> 'Žao nam je, direktne poruke od Jabber korisnika nisu podržani na ovom serveru. Trebaće vam Jabber klijent instaliran na vašem računaruda bi kontaktirali primaoce iznad.',
	'IM_RECIPIENT'			=> 'Primaoc',
	'IM_SEND'				=> 'Pošalji poruku',
	'IM_SEND_MESSAGE'		=> 'Pošalji poruku',
	'IM_SENT_JABBER'		=> 'Vaša poruka za %1$s je uspešno poslata.',
	'IM_USER'				=> 'Pošalji instant poruku',
	
	'LAST_ACTIVE'				=> 'Poslednji put aktivan',
	'LESS_THAN'					=> 'Manje od',
	'LIST_USER'					=> '1 korisnik',
	'LIST_USERS'				=> '%d korisnika',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Administrator zahteva da budete registrovani i prijavljeni da bi pogledali članove tima.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Administrator zahteva da budete registrovani i prijavljeni za pristup listi članova.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Administrator zahteva da budete registrovani i prijavljeni da bi tražili korisnike.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Administrator zahteva da budete registrovani i prijavljeni da bi videli profile.',

	'MORE_THAN'				=> 'Više od',

	'NO_EMAIL'				=> 'Nemate dozvolu da pošaljete email ovom korisniku.',
	'NO_VIEW_USERS'			=> 'Niste autorizovani da pogledate listu članova ili profile.',

	'ORDER'					=> 'Redosled',
	'OTHER'					=> 'Ostalo',

	'POST_IP'				=> 'Poslato sa IP/domena',

	'RANK'					=> 'Čin',
	'REAL_NAME'				=> 'Ime primaoca',
	'RECIPIENT'				=> 'Primaoc',
	'REMOVE_FOE'			=> 'Ukloni protivnika',
	'REMOVE_FRIEND'			=> 'Ukloni prijatelja',

	'SEARCH_USER_POSTS'		=> 'Pretraži korisnikove postove',
	'SELECT_MARKED'			=> 'Izaberi obeležene',
	'SELECT_SORT_METHOD'	=> 'Izaberi metod sortiranja',
	'SEND_AIM_MESSAGE'		=> 'Pošalji AIM poruku',
	'SEND_ICQ_MESSAGE'		=> 'Pošalji ICQ poruku',
	'SEND_IM'				=> 'Instant poruke',
	'SEND_JABBER_MESSAGE'	=> 'Pošalji Jabber poruku',
	'SEND_MESSAGE'			=> 'Poruka',
	'SEND_MSNM_MESSAGE'		=> 'Pošalji MSNM/WLM poruku',
	'SEND_YIM_MESSAGE'		=> 'Pošalji YIM poruku',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Poslednje aktivanim',
	'SORT_POST_COUNT'		=> 'Broju postova',

	'USERNAME_BEGINS_WITH'	=> 'Korisničko ime počinje sa',
	'USER_ADMIN'			=> 'Administriraj korisnika',
	'USER_BAN'				=> 'Zabrani korisnika',
	'USER_FORUM'			=> 'Statistika korisnika',
	'USER_ONLINE'			=> 'OnLine',
	'USER_PRESENCE'			=> 'Prisustvo na forumu',
	
  'USER_LAST_REMINDED'	=> array(
		0		=> 'Do sada nije poslata opomena',
		1		=> '%1$d opomena poslata<br />» %2$s',
	),

	'VIEWING_PROFILE'		=> 'Pregled profila - %s',
	'VISITED'				=> 'Poslednja poseta',

	'WWW'					=> 'Sajt',
));

?>