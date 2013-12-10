<?php
/** 
*
* acp_email [Serbian]
*
* @package language
* @version $Id: email.php,v 1.6 2006/09/24 00:28:08 shs Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Ovde možete poslati email svim korisnicima ili svim korisnicima određene grupe. Da bi ovo uradili, email će biti poslat sa administratorove adrese koju ste priložili, sa BCC-om poslatim svim korisnicima. Ako šaljete email velikoj grupi korisnika molimo vas da budete strpljivi i ne stopirate stranicu u toku operacije. Normalno je da za slanje masovnog email-a treba puno vremena, i bićete obavešteni kada se skripta završi',
	'ALL_USERS'						=> 'Svi korisnici',

	'COMPOSE'				=> 'Pisanje poruke',

	'EMAIL_SEND_ERROR'		=> 'Došlo je do jedne ili više grešaka prilikom slanja email-a. Molimo vas da proverite %sLog grešaka%s za detaljne poruke o greškama.',
	'EMAIL_SENT'			=> 'Vaša poruka je poslata.',
	'EMAIL_SENT_QUEUE'		=> 'Vaša poruka je obeležena za slanje.',

	'LOG_SESSION'			=> 'Upiši sesiju mail-a u kritični log',
     
	'SEND_IMMEDIATELY'		=> 'Pošalji odmah',
	'SEND_TO_GROUP'			=> 'Pošalji grupi',
	'SEND_TO_USERS'			=> 'Pošalji korisnicima',
	'SEND_TO_USERS_EXPLAIN'	=> 'Unošenjem imena ovde će poništiti bilo koju grupu izabranu iznad. Unesite svako korisničko ime u novu liniju.',
	
	'MAIL_BANNED'			=> 'Mejlovi za zabranjene korisnike',
	'MAIL_BANNED_EXPLAIN'	=> 'Kada šaljete masovni email grupi, ovde možete izabrati da li će zabranjeni korisnici takođe dobiti e-mail.',
	'MAIL_HIGH_PRIORITY'	=> 'Visok',
	'MAIL_LOW_PRIORITY'		=> 'Nizak',
	'MAIL_NORMAL_PRIORITY'	=> 'Normalan',
	'MAIL_PRIORITY'			=> 'Prioritet',
	'MASS_MESSAGE'			=> 'Vaša poruka',
	'MASS_MESSAGE_EXPLAIN'	=> 'Znajte da možete uneti samo običan tekst. Sve ostalo će biti uklonjeno pre slanja.',
	
	'NO_EMAIL_MESSAGE'		=> 'Morate uneti poruku.',
	'NO_EMAIL_SUBJECT'		=> 'Morate uneti naslov vaše poruke.',
));

?>