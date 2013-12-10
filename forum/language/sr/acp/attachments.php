<?php
/** 
*
* acp_attachments [Serbian]
*
* @package language
* @version $Id: attachments.php,v 1.15 2006/10/29 09:08:36 dhn2 Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Ovde možete podešavati glavne opcije prikačenih fajlova i dodatne specijalne kategorije.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Ovde možete dodavati, brisati, menjati i onemogućiti proširene grupe. Dalje opcije uključuju dodeljivanje specijalnih kategorija grupama, menjanje moda za download i definisanje ikonica za upload koja će biti prikazana ispred prikačenog fajla koji pripada toj grupi.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Ovde možete menjati vaše dozvoljene ekstenzije. Da bi aktivirali svoju ekstenziju, molimo vas da idete na panel Menadžment grupa ekstenzija. Strogo preporučujemo da ne dozvolite ekstenzije sa skriptama (kao što su <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, i tako dalje)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Ovde možete videti fajlove u direktorijumu za upload prikačenih fajlova ali ne i fajlove prikačene za postove. Ovo se uglavnom dešava ako korisnik prikači fajl ali ne pošalje post. U mogućnosti ste da brišete fajlove ili ih prikačite na postojeće postove. Da bi prikačili fajl na post, morate imati validan ID posta, koji morate sami da utvrdite, mada je ova opcija uglavnom za one ljude koji žele da pošalju fajlove nekim drugim programom i da dodele (uglavnom velike) fajlove na postojeći post.',
	'ADD_EXTENSION'						=> 'Dodaj ekstenziju',
	'ADD_EXTENSION_GROUP'				=> 'Dodaj grupu ekstenzija',
	'ADMIN_UPLOAD_ERROR'				=> 'Greške u toku pokušaja da se prikači fajl: %s',
	'ALLOWED_FORUMS'					=> 'Dozvoljeni forumi',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Omogućuje da postavite dodeljene ekstenzije na izabran (ili na sve ako su izabrani) forume',
	'ALLOWED_IN_PM_POST'				=> 'Dozvoljeno',
	'ALLOW_ATTACHMENTS'					=> 'Dozvoli prikačene fajlove',
	'ALLOW_ALL_FORUMS'					=> 'Dozvoli sve forume',
	'ALLOW_IN_PM'						=> 'Dozvoli u privatnim porukama',
	'ALLOW_PM_ATTACHMENTS'				=> 'Dozvoli prikačene fajlove u privatnim porukama',
	'ALLOW_SELECTED_FORUMS'				=> 'Samo izabrani forumi',
	'ASSIGNED_EXTENSIONS'				=> 'Dodeljene ekstenzije',
	'ASSIGNED_GROUP'					=> 'Dodeljene grupe ekstenzija',
	'ATTACH_EXTENSIONS_URL'				=> 'Ekstenzije',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupe ekstenzija',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksimalna veličina fajla',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maksimalna veličina pojedinačnog fajla, 0 je neograničeno.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksimalna veličina fajla u privatnim porukama',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksimano prostora na hard disku za prikačene fajlove u privatnim porukama, 0 je neograničeno.',
	'ATTACH_ORPHAN_URL'					=> 'Nepovezani fajlovi',
	'ATTACH_POST_ID'					=> 'ID posta',
	'ATTACH_QUOTA'						=> 'Ukupna kvota za prikačene fajlove',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksimano prostora na hard disku za sve prikačene fajlove, 0 je neograničeno.',
	'ATTACH_TO_POST'					=> 'Prikači fajl za post',

	'CAT_FLASH_FILES'			=> 'Flash fajlovi',
	'CAT_IMAGES'				=> 'Slike',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime fajlovi',
	'CAT_RM_FILES'				=> 'Real Media strimovi',
	'CAT_WM_FILES'				=> 'Windows Media strimovi',
	'CHECK_CONTENT'				=> 'Provera prikačenih fajlova',
	'CHECK_CONTENT_EXPLAIN'		=> 'Neki bowseri mmogu biti prevareni i da pretpostave pogrešan tip fajla koji je poslat. Ovom opcijom osiguravate da takvi fajlovi budu odbijeni.',
	'CREATE_GROUP'				=> 'Napravi novu grupu',
	'CREATE_THUMBNAIL'			=> 'Napravi umanjenu sličicu',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Napravi umanjenu sličicu u svim mogućim situacijama.',

	'DEFINE_ALLOWED_IPS'			=> 'Definiši dozvoljene IP adrese/hostove',
	'DEFINE_DISALLOWED_IPS'			=> 'Definiši zabranjene IP adrese/hostove',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Da definišete nekoliko različitih IP adresa ili hostova unesite svaki od njih u novi red. Za definisanje opsega IP adresa razdvojite početne i krajnje adrese sa crticom (-), za džokere koristite zvezdicu (*)',
	'DOWNLOAD_MODE'					=> 'Tip download-a',
	'DOWNLOAD_MODE_EXPLAIN'			=> 'Ako imate problema dok download-ujete fajlove, postavite vrednost na Fizički, i korisnik će biti upućen na fajl. Nemojte postavljati vrednost na Fizički ako vam stvarno nije potrebno, jer otkriva ime fajla.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Možete isključiti (ili ponovo uključiti) više IP adresa odjednom koristeći odgovarajuću kombinaciju miša i tastature. Isključene IP adrese imaju plavu pozadinu.',
	'DISPLAY_INLINED'				=> 'Prikaži slike direktno',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ako je podešeno na Ne, prikačene slike će biti prikazane kao link.',
	'DISPLAY_ORDER'					=> 'Redosled prikazivanja prikačenih fajlova',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Prikazuje prikačene fajlove sortirane po vremenu.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Izmeni grupu ekstenziji',
	'EXCLUDE_ENTERED_IP'			=> 'Uključite ovu opciju da izostavite unesenu IP adresu ili host.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Izostavi IP iz dozvoljenih IP adresa/hostova',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Izostavi IP iz zabranjenih IP adresa/hostova',
	'EXTENSIONS_UPDATED'			=> 'Ekstenzije su uspešno ažurirane',
	'EXTENSION_EXIST'				=> 'Ekstenzija %s već postoji',
	'EXTENSION_GROUP'				=> 'Ekstenziona grupa',
	'EXTENSION_GROUPS'				=> 'Ekstenzione grupe',
	'EXTENSION_GROUP_DELETED'		=> 'Ekstenziona grupa je uspešno obrisana.',
	'EXTENSION_GROUP_EXIST'			=> 'Ekstenziona grupa %s već postoji',
	
	'EXT_GROUP_ARCHIVES'			=> 'Arhive',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenti',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Fajlovi za download',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash fajlovi',
	'EXT_GROUP_IMAGES'				=> 'Slike',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Običan tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Medij',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Medij',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Medij',

	'GO_TO_EXTENSIONS'		=> 'Idi na panel za menadžment ekstenzija',
	'GROUP_NAME'			=> 'Ime grupe',

	'IMAGE_LINK_SIZE'			=> 'Dimenzije linka slike',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Prikazuje prikačeni fajl slike kao link ako je slika veća od ove vrednosti, postavite na 0px puta 0px da isključite ovu opciju.',
	'IMAGICK_PATH'				=> 'Imagemagick putanja',
	'IMAGICK_PATH_EXPLAIN'		=> 'Puna putanja do imagemagick aplikacije za konvertovanje, na primer <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'Maksimalno prikačenih fajlova po postu',
	'MAX_ATTACHMENTS_PM'			=> 'Maksimalno prikačenih fajlova po privatnoj poruci',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksimalna veličina fajla',
	'MAX_IMAGE_SIZE'				=> 'Maksimalne dimenzije slike',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maksimalna dimenzija prikačenih slika, 0px puta 0px isključuje prikačene slike.',
	'MAX_THUMB_WIDTH'				=> 'Maksimalna širina generisane sličice u pikselima',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Generisana sličica neće premašiti širinu koju postavite ovde.',
	'MIN_THUMB_FILESIZE'			=> 'Maksimalna veličina fajla generisane sličice',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ne pravi automatski generisanu sličicu za slike manje od ovde definisane vrednosti.',
	'MODE_INLINE'					=> 'Neposredno',
	'MODE_PHYSICAL'					=> 'Fizički',

	'NOT_ALLOWED_IN_PM'			=> 'Nije dozvoljeno u privatnim porukama',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nije dozvoljeno',
	'NOT_ASSIGNED'				=> 'Nije dodeljeno',
	'NO_EXT_GROUP'				=> 'Nijedna',
	'NO_EXT_GROUP_NAME'			=> 'Nije uneto ime grupe',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nije izabrana ekstenziona grupa.',
	'NO_FILE_CAT'				=> 'Nijedna',
	'NO_IMAGE'					=> 'Bez slike',
	'NO_THUMBNAIL_SUPPORT'		=> 'Podrška za generisane sličice je isključena jer nema podržane GD biblioteke i izvršni fajl imagemagick-a ne može biti pronađen.',
	'NO_UPLOAD_DIR'				=> 'Upload direktorijum koji ste odredili ne postoji.',
	'NO_WRITE_UPLOAD'			=> 'Upisivanje u upload direktorijum koji ste odredili nije moguć. Izmenite dozvole da bi dopustili serveru da upisuje.',

	'ONLY_ALLOWED_IN_PM'	=> 'Dozvoljeno samo u privatnim porukama',
	'ORDER_ALLOW_DENY'		=> 'Dozvoli',
	'ORDER_DENY_ALLOW'		=> 'Zabrani',

	'REMOVE_ALLOWED_IPS'		=> 'Ukloni ili ponovo uključi dozvoljene IP adese/hostove',
	'REMOVE_DISALLOWED_IPS'		=> 'Ukloni ili ponovo uključi zabranjene IP adese/hostove',

	'SEARCH_IMAGICK'				=> 'Potraži Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Lista Dozvola/Zabrana',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Dozvoli ili zabrani listu adresa, ovo podešavanje se odnosi samo na fajlove za download',
	'SECURE_DOWNLOADS'				=> 'Omogući bezbedne download-e',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Kada je ova opcija uključena, download je ograničen na IP adrese/hostove koje ste odredili.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Bezbedni download nije uključen. Podešavanja ispod će biti primenjena posle uključivanja bezbednog download-a.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Lista IP adresa je uspešno ažurirana.',
	'SECURE_EMPTY_REFERRER'			=> 'Dozvoli praznog prosleđivača',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Bezbedni download-i su bazirani na prosleđivačima. Da li želite da dozvolite download za one kod kojih izostaje prosleđivač?',
	'SETTINGS_CAT_IMAGES'			=> 'Podešavanja kategorija slika',
	'SPECIAL_CATEGORY'				=> 'Specijalna kategorija',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Specijalne kategorije se razlikuju u načinima prikazivanja u postovima.',
	'SUCCESSFULLY_UPLOADED'			=> 'Uspešno upload-ovana',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grupa ekstenzija je uspešno dodata',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grupa ekstenzija je uspešno ažurirana',

	'UPLOADING_FILES'				=> 'Upload fajlova',
	'UPLOADING_FILE_TO'				=> 'Upload fajla %1$s na post broj %2$d',
	'UPLOAD_DENIED_FORUM'			=> 'Nemate dozvolu da upload-ujete fajlove na forum %s',
	'UPLOAD_DIR'					=> 'Upload direktorijum',
	'UPLOAD_DIR_EXPLAIN'			=> 'Putanja za smeštanje prikačenih fajlova.',
	'UPLOAD_ICON'					=> 'Upload ikonica',
	'UPLOAD_NOT_DIR'				=> 'Lokacija za upload koju ste odredili nije direktorijum.',
));

?>