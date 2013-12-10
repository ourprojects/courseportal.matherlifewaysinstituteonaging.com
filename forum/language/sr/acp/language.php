<?php
/** 
*
* acp_language [Serbian]
*
* @package language
* @version $Id: language.php,v 1.8 2006/10/08 11:25:20 acydburn Exp $
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
	'ACP_FILES'						=> 'Admin jezički fajlovi',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Ovde možete da instalirate/uklonite jezičke pakete',

	'EMAIL_FILES'			=> 'Email šabloni',

	'FILE_CONTENTS'				=> 'Sadržaji fajla',
	'FILE_FROM_STORAGE'			=> 'Fajl iz direktorijuma',

	'HELP_FILES'				=> 'Pomoćni fajlovi',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Instalirani jezički paketi',
	'INVALID_LANGUAGE_PACK'		=> 'Izabran jezički paket nije ispravan. Molimo vas da proverite jezički paket i ponovo ga postavite na server ako je potrebno.',
	'INVALID_UPLOAD_METHOD'		=> 'Izabrani metod za upload nije validan, molimo vas da izaberete drugačiji metod.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Detlji jezika su uspešno ažurirani.',
	'LANGUAGE_ENTRIES'					=> 'Jezički unosi',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Ovde mođete izmeniti postojeći jezički paket ili onaj koji još uvek nije preveden.<br /><strong>Obaveštenje:</strong> Kada jednom izmenite jezički paket, izmene će biti sačuvane u posebnom direktorijumu koji možete download-ovati. Vaši korisnici neće videti izmene sve dok ne zamenite originalni jezički fajl (tako što ćete ih upload-ovati).',
	'LANGUAGE_FILES'					=> 'Jezički fajlovi',
	'LANGUAGE_KEY'						=> 'Jezički ključ',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ovaj jezički paket je već instaliran.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Proizvoljna polja za profil su kopirana iz podrazmevanog jezika. Molimo vas da ih promenite ukoliko je potrebno.',
	'LANGUAGE_PACK_DELETED'				=> '<strong>%s</strong> jezički paket je uspešno uklonjen. Svi korisnici koji su koristilo ovaj jezik su resetovani i postavljen im je podrazumevani jezik board-a.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detalji jezičkog paketa',
	'LANGUAGE_PACK_INSTALLED'			=> '<strong>%s</strong> jezički paket je uspešno instaliran.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalni naziv',
	'LANGUAGE_PACK_NAME'				=> 'Naziv',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Izabrani jezički paket ne postoji.',
	'LANGUAGE_PACK_USED_BY'				=> 'Korišćen',
	'LANGUAGE_VARIABLE'					=> 'Jezička promenljiva',
	'LANG_AUTHOR'						=> 'Autor jezičkog paketa',
	'LANG_ENGLISH_NAME'					=> 'Engleski naziv',
	'LANG_ISO_CODE'						=> 'ISO Kod',
	'LANG_LOCAL_NAME'					=> 'Lokalni naziv',

	'MISSING_LANGUAGE_FILE'		=> 'Nedostaje jezički fajl: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Nedostaju jezičke promenljive',
	'MODS_FILES'				=> 'MODovi jezičkih fajlova',

	'NO_FILE_SELECTED'				=> 'Niste izabrali jezički fajl.',
	'NO_LANG_ID'					=> 'Niste izabrali jezički paket.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ne možete ukloniti podrazumevani jezički paket.<br />Ako želite da uklonite ovaj jezički paket, prvo promenite podrazumevani jezik board-a.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nema uklonjenih jezičkih paketa',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Ukloni iz direktorijuma za smeštanje',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Izaberite format za download',
	'SUBMIT_AND_DOWNLOAD'		=> 'Potvrdi i preuzmi fajl',
	'SUBMIT_AND_UPLOAD'			=> 'Potvrdi i pošalji fajl',

	'THOSE_MISSING_LANG_FILES'			=> 'Sledeći jezički fajlovi nedostaju u %s jezičkom direktorijumu',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Sledeće promenljive jezičkih fajlova nedostaju u <strong>%s</strong> jezičkom paketom',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'uklonjeni jezički fajlovi',

	'UNABLE_TO_WRITE_FILE'		=> 'Fajl ne može da se upiše u %s.',
	'UPLOAD_COMPLETED'			=> 'Slanje je uspešno izvršrno.',
	'UPLOAD_FAILED'				=> 'Slanje fajla nije uspelo iz nepoznatih razloga. Možda ćete morati da zamenite ekvivalentne fajlove ručno.',
	'UPLOAD_METHOD'				=> 'Metod slanja',
	'UPLOAD_SETTINGS'			=> 'Podešavanje slanja',

	'WRONG_LANGUAGE_FILE'		=> 'Izabrani jezički fajl je neispravan.',
));

?>