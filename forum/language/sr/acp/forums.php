<?php
/** 
*
* acp_forums [Serbian]
*
* @package language
* @version $Id: forums.php,v 1.20 2006/11/23 20:56:02 shs Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Automatski sažimanje zastarelih',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Broj dana od poslednjeg posta posle koga će tema biti uklonjena.',
	'AUTO_PRUNE_FREQ'			=> 'Učestalost automatskog sažimanja',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Vreme u danima između sažimanja.',
	'AUTO_PRUNE_VIEWED'			=> 'Trajanje zastarelih postova',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Broj dana od pregleda poslednje teme posle kojeg će tema biti uklonjena.',

  'CONTINUE'            =>  'Nastavi',
	'COPY_PERMISSIONS'				=> 'Kopiraj dozvole iz',
	'COPY_PERMISSIONS_EXPLAIN' =>  'Da bi olakšali postavljanje dozvola za Vaš novi forum, možete kopirati dozvole sa postojećeg foruma.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Jednom kreiran, forum će imati iste dozvole kao i jedan koji izaberete ovde. Ako nije izabran nijedan forum novi forum neće biti vidljiv dok ne postavite dozvole.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Ako izaberete da kopirate dozvole, forum će imati iste dozvole kao i onaj kojeg ste izabrali. Ovo će prebrisati bilo kakve prethodno postavljene dozvole za ovaj forum sa dozvolama foruma koji ste izabrali. Ako ne izaberete nijedan forum vaše trenutne dozvole će biti zadržane.',
	'COPY_TO_ACL'          =>  'Ukoliko želite, možete %spodesiti nove dozvole%s za ovaj forum.',
  'CREATE_FORUM'					=> 'Kreiraj novi forum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Obriši sadržaj ili pomeri u forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Obriši podforume ili pomeri u forum',
	'DEFAULT_STYLE'						=> 'Podrazumevani stil',
	'DELETE_ALL_POSTS'					=> 'Obriši postove',
	'DELETE_SUBFORUMS'					=> 'Obriši podforume i postove',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Omogući aktivne teme',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Ako omogućite ovu opciju aktivne teme u izabranim podforumima će biti prikazane ispod ove kategorije.',

	'EDIT_FORUM'					=> 'Izmena foruma',
	'ENABLE_INDEXING'				=> 'Omogući indeksiranje pretrage',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Ako omogućite ovu opciju, postovi napravljeni u ovom forumu će biti indeksirani za pretragu.',
	'ENABLE_POST_REVIEW'			=> 'Omogući reviziju postova',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Ako omogućite ovu opciju, korisnici su u mogućnosti da izvrše reviziju svojih postova ako su napisani novi postovi u temi dok su korisnici pisali njihove. Ovu opciju bi trebalo isključiti u chat forumima.',
	'ENABLE_QUICK_REPLY'     =>  'Omogući brz odgovor',
  'ENABLE_QUICK_REPLY_EXPLAIN'  =>  'Ako je uključeno, korisnici imaju deo za brzi odgovor za ovaj forum. Ako je globalna opcija za brzi odgovor isključena ili u forumu nije moguće pisanje okvir za brzi odgovor neće biti prikazan čak i ako uključite ovu opciju ovde.',
	'ENABLE_RECENT'					=> 'Prikaži aktivne teme',
	'ENABLE_RECENT_EXPLAIN'			=> 'Ako omogućite ovu opciju, teme napisane u ovom forumu će biti prikazane u listi aktivnih tema.',
	'ENABLE_TOPIC_ICONS'			=> 'Omogući ikonice tema',

	'FORUM_ADMIN'						=> 'Administracija foruma',
	'FORUM_ADMIN_EXPLAIN'				=> 'U phpBB3 ne postoje kategorije, se je bazirano na forimima. Svaki forum može imati neograničen broj podforuma i možete odrediti da li će u svakom forumu biti moguće slanje postova ili ne (na primer - da li će se forum ponašati kao stara kategorija). Ovde mođete dodati, izmeniti, brisati, zaključati pojedinačne forume kao i da podesite određene kontrole. Ako se vaši postovi i teme sihronizuju, možete takođe resihronizovati forum.',
	'FORUM_AUTO_PRUNE'					=> 'Omogući automatsko sažimanje',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Sažima forum ili teme, podesite parametre učestalosti/perioda ispod.',
	'FORUM_CREATED'						=> 'Forum uspešno kreiran.',
	'FORUM_DATA_NEGATIVE'				=> 'Parametri sažimanja ne mogu biti negativni.',
	'FORUM_DESC_TOO_LONG'				=> 'Opis foruma je predugačak, mora biti manji od 4000 karaktera.',
	'FORUM_DELETE'						=> 'Obriši forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Forma ispod vam omogućuje da izbrišete forum. Ako je u forumu omogućeno slanje postova u mogućnosti ste da odredite gde želite da stavite sve teme (ili forume) koje sadrži.',
	'FORUM_DELETED'						=> 'Forum je uspešno obrisan.',
	'FORUM_DESC'						=> 'Opis',
	'FORUM_DESC_EXPLAIN'				=> 'Svako ukrašavanje uneto ovde će biti prikazano kao što izgleda.',
	'FORUM_EDIT_EXPLAIN'				=> 'Forma ispod vam omogućava da izmenite ovaj forum. Znjte da se kontrole za uređivanje i brojanje postova podešavaju putem dozvola foruma za svakog korisnika ili korisničku grupu.',
	'FORUM_IMAGE'						=> 'Slika foruma',
	'FORUM_IMAGE_EXPLAIN'				=> 'Lokacija, relativna u odnosu na phpBB root direktorijum, slike koja je dodeljena ovom forumu.',
	'FORUM_IMAGE_NO_EXIST'     =>  'Izabrana slika foruma ne postoji',
	'FORUM_LINK_EXPLAIN'				=> 'Kompletan URL (uključujući protokol, na primer <samp>http://</samp>) do lokacije na koju će korisnik biti preusmeren kada klikne na vaj forum.',
	'FORUM_LINK_TRACK'					=> 'Prati redirektovanje linkova',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Beleži broj koliko je puta kliknuto na link foruma.',
	'FORUM_NAME'						=> 'Naziv foruma',
	'FORUM_NAME_EMPTY'					=> 'Morat uneti naziv za ovaj forum.',
	'FORUM_PARENT'						=> 'Roditeljski forum',
	'FORUM_PASSWORD'					=> 'Šifra foruma',
	'FORUM_PASSWORD_CONFIRM'			=> 'Potvrdite šifru foruma',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Samo u slučaju ako je uneta šifra foruma.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definiše šifru za ovaj forum, koristite sistem dozvola u podešavanjima.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Šifre koje ste uneli se ne poklapaju.',
	'FORUM_PASSWORD_UNSET'				=> 'Ukloni šifru foruma',
	'FORUM_PASSWORD_UNSET_EXPLAIN' 	=> 'Označite ovde ukoliko želite da uklonite šifru foruma.',
	'FORUM_PASSWORD_OLD' 						=> 'Šifra za forum koristi stari načine enkripcije i trebalo bi da se promeni.',
	'FORUM_PRUNE_SETTINGS'				=> 'Podešavanje sažimanja foruma',
	'FORUM_RESYNCED'					=> 'Forum "%s" je uspešno resihronizovan',
	'FORUM_RULES_EXPLAIN'				=> 'Pravila foruma su prikazana na svim stranicama u zadatom forumu.',
	'FORUM_RULES_LINK'					=> 'Link do pravila foruma',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'U mogućnosti ste da unesete URL stranice/posta koji sadrži pravila vašeg foruma. Ovo podešavanje će ignorisati tekst pravila foruma koji ste odredili.',
	'FORUM_RULES_PREVIEW'				=> 'Pregled pravila foruma',
	'FORUM_RULES_TOO_LONG'				=> 'Tekst pravila foruma mora biti manji od 4000 karaktera.',
	'FORUM_SETTINGS'					=> 'Podešavanja foruma',
	'FORUM_STATUS'						=> 'Status foruma',
	'FORUM_STYLE'						=> 'Stil foruma',
	'FORUM_TOPICS_PAGE'					=> 'Tema po stranici',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Ako nije nula, ova vrednost će zameniti podrazumevano podešavanje tema po stranici.',
	'FORUM_TYPE'						=> 'Tip foruma',
	'FORUM_UPDATED'						=> 'Informacija o forumu je uspešno ažurirana.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Pokušali ste da promenite forum u kome se postuje i ima podforume u link. Molimo vas da pomerite sve podforume van ovog foruma pre nego što nastavite, jer posle promene u link više nećete moći da pogledate podforume koji su trenutno povezani na ovaj forum.',
	
	'GENERAL_FORUM_SETTINGS'	=> 'Generalna podešavanja foruma',

	'LINK'					=> 'Link',
	'LIST_INDEX'			=> 'Prikaži forum u listama podforuma',
	'LIST_INDEX_EXPLAIN'	=> 'Prikazuje link na ovaj forum ispod roditeljskih foruma u listi podforuma ako postoji.',
	'LIST_SUBFORUMS'		=> 'Lista podforuma u legendi',
	'LIST_SUBFORUMS_EXPLAIN'=> 'Prikazuje podforume ovog foruma na index-u i ostalim mestima kao link u legendi ako je njihova opcija “Prikaži podforume u legendi roditeljskog foruma” omogućena.',
	'LOCKED'				=> 'Zaključan',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'U forum koji ste izabrali za premeštanje postova nije moguće postovanje. Molimo vas da izaberete forum u kojem se može postovati.',
	'MOVE_POSTS_TO'		=> 'Pomeri postove u',
	'MOVE_SUBFORUMS_TO'	=> 'Pomeri podforume u',

	'NO_DESTINATION_FORUM'			=> 'Niste odredili forum u koji bi pomerili sadržaj',
	'NO_FORUM_ACTION'				=> 'Niste definisali šta se dešava sa sadržajem foruma',
	'NO_PARENT'						=> 'Bez roditelja',
	'NO_PERMISSIONS'				=> 'Ne kopiraj dozvole',
	'NO_PERMISSION_FORUM_ADD'		=> 'Nemate potrebne dozvole za kreiranje foruma.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Nemate potrebne dozvole za brisanje foruma.',

	'PARENT_IS_LINK_FORUM'		=> 'Roditelj koga ste izabrali je link foruma. Ovakvi forumi ne mogu da sadrže druge forume, molimo vas da izaberete kategoriju ili forum kao roditeljski forum.',
	'PARENT_NOT_EXIST'			=> 'Roditelj ne postoji.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Sažimanje obaveštenja',
	'PRUNE_STICKY'				=> 'Sažimanje lepljivih',
	'PRUNE_OLD_POLLS'			=> 'Sažimanje starih glasanja',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Uklanja teme sa glasanjem u kojima nije glasano za podešen broj dana.',
	
	'REDIRECT_ACL'	=> 'Sada možete da %spodesite dozvole%s za ovaj forum.',

	'SYNC_IN_PROGRESS'			=> 'Sihronizacija foruma u toku',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Trenutno resihronizovanje opsega tema %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategorija',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Otključan',
));

?>