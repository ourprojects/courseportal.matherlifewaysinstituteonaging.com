<?php
/** 
*
* acp_bots [Serbian]
*
* @package language
* @version $Id: bots.php,v 1.6 2006/10/02 15:10:29 acydburn Exp $
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Rad sa botovima',
	'BOTS_EXPLAIN'		=> 'Botovi su automatski agenti najčešće korišćeni od pretraživača da bi ažurirali njihove baze. Obzirom da retko kada pravilno koriste sesije mogu izokrenuti broj posetioca, povećati opterećenje i ponekad ne uspeju da indeksiraju sajt pravilno. Ovde možete definisati specijalni tip korisnika da bi prevazišli ove probleme.',
	'BOT_ACTIVATE'		=> 'Aktivirajte',
	'BOT_ACTIVE'		=> 'Bot aktivan',
	'BOT_ADD'			=> 'Dodaj bot-a',
	'BOT_ADDED'			=> 'Novi bot je uspešno dodat.',
	'BOT_AGENT'			=> 'Poklapanja agenta',
	'BOT_AGENT_EXPLAIN'	=> 'String koji se poklapa sa brovserovim botom, delimična poklapanja su dozvoljena.',
	'BOT_DEACTIVATE'	=> 'Deaktiviraj',
	'BOT_DELETED'		=> 'Bot je uspešno izbrisan.',
	'BOT_EDIT'			=> 'Izmeni boot-ove',
	'BOT_EDIT_EXPLAIN'	=> 'Ovde možete dodati ili izmeniti postojeći bot. Možete definisati string agenta i/ili jednu ili više IP adresa (ili opseg adresa) za poklapanje. Budite pažljivi kada definišete stringove agenata ili adrese. Možete takođe definisati stil i jezik koji će bot videti. Ovo vam može omogućiti da smanjite opterećenost podešavanjem jednostavnog stila za botove. Zapamtite da podesite odgovarajuće dozvole za specijalnu Bot korisničku grupu.',
	'BOT_LANG'			=> 'Bot jezik',
	'BOT_LANG_EXPLAIN'	=> 'Jezik predstavljen bot-u.',
	'BOT_LAST_VISIT'	=> 'Poslednja poseta',
	'BOT_IP'			=> 'Bot IP adresa',
	'BOT_IP_EXPLAIN'	=> 'Delimična poklapanja su dozvoljena, razdvojite adrese sa zarezom.',
	'BOT_NAME'			=> 'Ime bot-a',
	'BOT_NAME_EXPLAIN'	=> 'Koristi se samo za vašu informaciju.',
	'BOT_NAME_TAKEN'	=> 'Ime se već koristi na vašem boardu i ne može se iskoristiti kao Bot.',
	'BOT_NEVER'			=> 'Nikada',
	'BOT_STYLE'			=> 'Bot stil',
	'BOT_STYLE_EXPLAIN'	=> 'Stil koji bot koristi za board.',
	'BOT_UPDATED'		=> 'Postojeći bot je uspešno ažuriran.',
	'BOT_VIS'			=> 'Bot vidljiv',
	'BOT_VIS_EXPLAIN'	=> 'Dozvoli da bot bude viđen od svih korisnika u Ko je OnLine listi.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Agent bota kojeg ste odabrali je sličan onom kojeg trenutno koristite. Molimo vas da podesite agetnta ovog bota.',
	'ERR_BOT_NO_IP'				=> 'IP adresa koju ste izabrali je neispravna ili je nemoguće pronaći host.',
	'ERR_BOT_NO_MATCHES'		=> 'Morate priložiti najmanje jednog agenta ili IP za ovog bota za poklapanje.',

	'NO_BOT'		=> 'Nije pronađen ni jedan bot sa zadatin ID-om.',
	'NO_BOT_GROUP'	=> 'Ne mogu da pronađem spcijalnu bot grupu.',
));

?>