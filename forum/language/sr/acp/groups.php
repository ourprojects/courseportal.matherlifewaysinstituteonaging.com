<?php
/** 
*
* acp_groups [Serbian]
*
* @package language
* @version $Id: groups.php,v 1.13 2006/11/24 14:59:13 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Sa ovog panela možete administrirati sve vaše korisničke grupe, možete brisati, kreirati i menjati postojeće grupe. Možete izabrati moderatore, menjati status otvorene/zatvorene i podešavati ime grupe i opis.',
	'ADD_USERS'						=> 'Dodaj korisnike',
	'ADD_USERS_EXPLAIN'				=> 'Ovde dodajete nove korisnike u grupu. Možete izabrati da li će ova grupa postati nova podrazumevana grupa za izabrane korisnike. Takođe ih možete definisati i kao vođe grupe. Molimo vas da svako pojedinačno korisničko ime unesete u nov red.',

	'CHANGED_DEFAULT_GROUP'	=> 'Uspešno ste promenili podrazumevanu grupu.',
	
	'COPY_PERMISSIONS'				=> 'Kopiraj dozvole iz',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Jednom kreirana, grupa će imati iste dozvole kao i ona koju ste izabrali.',
	'CREATE_GROUP'					=> 'Napravi novu grupu',

	'GROUPS_NO_MEMBERS'				=> 'Ova grupa nema članove',
	'GROUPS_NO_MODS'				=> 'Nema definisanih vođa grupa',
	'GROUP_APPROVE'					=> 'Odobri',
	'GROUP_APPROVED'				=> 'Odobreni članovi',
	'GROUP_AVATAR'					=> 'Avatar grupe',
	'GROUP_CHANGE_DEFAULT'				=> 'Da li ste sigurni da želite da promenite vaše podrazumevano članstvo u grupu “%s”?',
	'GROUP_AVATAR_EXPLAIN'			=> 'Ova sličica će biti prikazana u kontrolnom panelu grupe.',
	'GROUP_CLOSED'					=> 'Zatvorena',
	'GROUP_COLOR'					=> 'Boja grupe',
	'GROUP_COLOR_EXPLAIN'			=> 'Definiše boju kojom će biti prikazana korisnička imena članova grupe, ostavite prazno za podrazumevanu vrednost.',
	'GROUP_CONFIRM_ADD_USER'	=> 'Da li ste sigurni da želite da dodate korisnika %1$s u grupu?',
	'GROUP_CONFIRM_ADD_USERS' =>	'Da li ste sigurni da želite da dodate korisnike %1$s u grupu?',
	'GROUP_CREATED'					=> 'Grupa je uspešno napravljena.',
	'GROUP_DEFAULT'					=> 'Podrazumevana',
	'GROUP_DEFS_UPDATED'			=> 'Podrazumevana grupa za sve izabrane članove.',
	'GROUP_DELETE'					=> 'Obriši',
	'GROUP_DELETED'					=> 'Grupa je obrisana i podrazumevane grupe korisnika su uspešno podešene.',
	'GROUP_DEMOTE'					=> 'Degradiraj',
	'GROUP_DESC'					=> 'Opis grupe',
	'GROUP_DETAILS'					=> 'Detalji grupe',
	'GROUP_DST'						=> 'Group daylight savings',
	'GROUP_EDIT_EXPLAIN'			=> 'Ovde mođete izmeniti postojeću grupu. Možete joj promeniti ime, opis i tip (otvorena, zatvorena itd...). Možete takođe podesiti određene opcije kao što su boje, rang itd. Izmene koje napravite ovde će poništiti trenutno podešavanje korisnika. Znajte da članovi grupe mogu izmeniti svoj avatar ukoliko ne podesite odgovarajuće dozovle korisnika.',
	'GROUP_ERR_USERS_EXIST'			=> 'Izabrani korisnici su već članovi ove grupe',
	'GROUP_IS_FREE'						=> 'Ovo je potpuno otvorena grupa, svi novi članovi su dobrodošli.', 
	'GROUP_FOUNDER_MANAGE'			=> 'Samo izmene osnivača',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Restrikcija podešavanja grupe samo samo za osnivače za administracioni kontrolni panel.',
	'GROUP_HIDDEN'					=> 'Skrivena',
	'GROUP_INFORMATION'					=> 'Informacije o korisničkoj grupi', 
	'GROUP_JOIN'						=> 'Pridruži se grupi',
	'GROUP_JOIN_CONFIRM'				=> 'Da li ste sigurni da želite da se pridružite izabranoj grupi?',
	'GROUP_JOIN_PENDING'				=> 'Zahtev za pristup grupi',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Da li ste sigurni da želite da pošaljete zahtev za pridruživanje izabranoj grupi?',
	'GROUP_JOINED'						=> 'Uspešno ste se pridružili izabranoj grupi.',
	'GROUP_JOINED_PENDING'				=> 'Uspešno ste poslali zahtev za pristup grupi. Molimo vas da sačekate da vođa grupe odobri vaše članstvo.',
	'GROUP_LANG'					=> 'Jezik grupe',
	'GROUP_LEAD'					=> 'Vođe grupe',
	'GROUP_LEADERS_ADDED'			=> 'Nove vođe su uspešno dodate u grupu.',
	'GROUP_LEGEND'					=> 'Prikaži grupu u legendi',
	'GROUP_LIST'					=> 'Trenutni članovi',
	'GROUP_LIST_EXPLAIN'			=> 'Ovo je kompletna lista svih trenutnih korisnika sa članstvom u ovoj grupi. Možete brisati članove (osim u određenim specijalnim grupama) ili dodati nove.',
	'GROUP_MAX_RECIPIENTS'			=> 'Maksimalni broj dozvoljenih primaoca po privatnoj poruci',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Maksimalni broj dozvoljenih primaoca u privatnoj poruci. Ako je uneta 0, koristi se podešavanje boarda.',
	'GROUP_MEMBERS'					=> 'Članovi grupe',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Ovo je kompletna lista svih članova ove korisničke grupe. Sadrži izdvojene sekcije za vođe, buduće i postojeće članove. Odavde možete podešavati ko sve ima članstvo u ovoj grupi i koja je njihova uloga. Da uklonite vođu ali i da ga zadržite u grupi koristite opciju Degradiraj umesto obriši. Slično tako, koristite Unapredi da bi postojećeg člana unapredili u vođu.',
	'GROUP_MESSAGE_LIMIT'			=> 'Ograničenje grupnih poruka po folderu',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ova opcija će poništiti ograničenje poruka po korisniku. Vrednost 0 znači da će biti korišćeno podrazumevano ograničenje.',
	'GROUP_MODS_ADDED'				=> 'Novi moderatori grupe su uspešno dodati.',
	'GROUP_MODS_DEMOTED'			=> 'Vođe grupe su uspešno degradirane.',
	'GROUP_MODS_PROMOTED'			=> 'Članovi grupe su uspešno unapređeni.',
	'GROUP_NAME'					=> 'Ime grupe',
	'GROUP_NAME_TAKEN'		=> 'Ime grupe koje ste uneli je već zauzeto, molimo Vas da izaberete drugo.',
	'GROUP_OPEN'					=> 'Otvorena',
	'GROUP_OPTIONS_SAVE' =>  'Opcije za sve grupe',
	'GROUP_PENDING'					=> 'Budući članovi',
	'GROUP_PROMOTE'					=> 'Unapredi',
	'GROUP_RANK'					=> 'Čin grupe',
	'GROUP_RECEIVE_PM'				=> 'Grupa je u mogućnosti da prima privatne poruke',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Znajte da u skrivene grupe ne možete slati poruke, u zavisnosti od ovog podešavanja.',
	'GROUP_REQUEST'					=> 'Zahtev',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Prekinite članstvo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Da li ste sigurni da želite da prekinete vaše članstvo iz izabrane grupe?',
	'GROUP_RESIGN_PENDING'				=> 'Povuci zahtev za članstvo u grupi',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Da li ste sigurni da želite da povučete zahtev za članstvo iz izabrane grupe?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Uspešno ste odjavljeni iz izabrane grupe.',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group.',
	'GROUP_SETTINGS'				=> 'Podesi podešavanja korisnika',
	'GROUP_SETTINGS_EXPLAIN'		=> 'Ovde možete forsirati izmene u podešavanjima korisnika. Znjte da ova podešavanja nisu sačuvana za samu grupu. Njihova namena je kao brz metod za izmenu podešavanja svih korisnika u grupi.',
	'GROUP_SETTINGS_SAVE'			=> 'Podešavanja grupa',
	'GROUP_SKIP_AUTH'    =>  'Izuzmi vođu gupe od dozvola',
  'GROUP_SKIP_AUTH_EXPLAIN'   =>  'Ukoliko je uključeno, vođa grupe više ne nasleđuje dozvole od grupe.',
	'GROUP_IS_SPECIAL'					=> 'Ovo je specijalna grupa, specijalne grupe uređuju administratori boarda.', 
	'GROUP_TIMEZONE'				=> 'Vremensta zona grupe',
	'GROUP_TYPE'					=> 'Tip grupe',
	'GROUP_TYPE_EXPLAIN'			=> 'Ovo određuje koji korisnici se mogu pridružiti ili videti ovu grupu.',
	'GROUP_UNDISCLOSED'					=> 'Skrivena grupa',
	'FORUM_UNDISCLOSED'					=> 'Uređivanje skrivenog(ih) foruma',
	'GROUP_UPDATED'					=> 'Podešavanja grupe su uspešno ažurirana.',
	'GROUP_USERS_ADDED'				=> 'Novi korisnici su uspešno dodati u grupu.',
	'GROUP_USERS_EXIST'				=> 'Izabrani korisnici su već članovi.',
	'GROUP_USERS_REMOVE'			=> 'Korisnici su uklonjeni iz grupe i novi podrazumevani su uspešno podešeni.',

	'LOGIN_EXPLAIN_GROUP'	=> 'Morate se prijaviti da bi pogledali detalje o grupi.',
	
	'MAKE_DEFAULT_FOR_ALL'	=> 'Postavi kao podrazumevanu grupu za svakog člana',
	'MEMBERS'				=> 'Članovi',

	'NO_LEADERS'					=> 'Niste vođa nijedne grupe.',
	'NO_USERS_ADDED'				=> 'Nijedan korisnik nije dodat u grupu.',
	'NOT_LEADER_OF_GROUP'			=> 'Zahtevana operacija ne može biti izvedena jer niste vođa izabrane grupe.',
	'NOT_MEMBER_OF_GROUP'			=> 'Zahtevana operacija ne može biti izvedena jer niste član izabrane grupe ili vaše članstvo još uvek nije odobreno.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Niste u mogućnosti da se odjvite iz vaše podrazumevane grupe.',
	
	'PRIMARY_GROUP'		=> 'Primarna grupa',

	'REMOVE_SELECTED'		=> 'Ukloni izabranu',
	
	'NO_GROUP'					=> 'Nije izabrana grupa.',
	'NO_GROUPS_CREATED'			=> 'Još uvek nema napravljenih grupa.',
	'NO_PERMISSIONS'			=> 'Ne kopiraj dozvole',
	'NO_USERS'					=> 'Niste uneli nijednog korisnika.',
	'NO_VALID_USERS'			=> 'Niste uneli ni jednog korisnika prikladnog za ovu akciju.',

	'SPECIAL_GROUPS'			=> 'Predefinisane grupe',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Predefinisane grupe su specijalne grupe, i ne mogu biti obrisane ili direktno izmenjene. Ipak, još uvek mođete dodavati korisnike i izmeniti osnovna podešavanja. Klikom na “Podrazumevana” možete podesiti relevantnu grupu kao podrazumevanu za sve njene članove.',

	'TOTAL_MEMBERS'				=> 'Članova',

	'USERS_APPROVED'				=> 'Korisnici su uspešno odobreni.',
	'USER_DEFAULT'					=> 'Podrazumevana grupa korisnika',
	'USER_DEF_GROUPS'				=> 'Korisnički definisane grupe',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Grupe koje ste vi kreirali ili neko od administratora na ovom boardu. Možete podešavati članstvo kao i da menjate svojstva grupe ili da čak obrišete grupu. Klikom na “Podrazumevana” možete podesiti relevantnu grupu kao podrazumevanu za sve njene članove.',
	'USER_GROUP_DEFAULT'			=> 'Postavi kao podrazumevanu grupu',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Postavljanjem na Da ovde će podesiti ovu grupu kao podrazumevanu grupu za dodate korisnike',
	'USER_GROUP_LEADER'				=> 'Postavi kao vođu grupe',
	
	'USER_GROUP_CHANGE'			=> 'Iz “%1$s” grupe u “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Otkaži vođstvo',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Da li ste sigurni da želite da otkažete vođstvo iz izabrane grupe?',
	'USER_GROUP_DEMOTED'		=> 'Uspešno ste otkazali vaše vođstvo.',
));

?>