<?php
/**
*
* acp_users [Serbian]
*
* @package language
* @version $Id: users.php,v 1.29 2007/06/18 15:12:14 kellanved Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Pregled potpisa',
	'AT_LEAST_ONE_FOUNDER'	=> 'Niste u mogućnosti da promenite ovog osnivača u normalnog korisnika. Mora da postoji bar jedan omogućen osnivač za ovaj board. Ako želite da promenite osnivački status za ovog korisnika, prvo proglasite nekog drugog korisnika kao osnivača.',

	'BAN_ALREADY_ENTERED'	=> 'Zabrana je već prethodno uspešno uneta. Lista zabrana nije ažurirana.',
	'BAN_SUCCESSFUL'		=> 'Uspešno uneta zabrana.',

	'CANNOT_BAN_FOUNDER'			=> 'Ne možete da zabranite osnivačke naloge.',
	'CANNOT_BAN_YOURSELF'			=> 'Ne možete da zabranite sami sebe.',
	'CANNOT_BAN_ANONYMOUS'			=> 'Ne možete da zabranite anonimne korisnike. Dozvole za anonimne korisnike možete podesiti u delu Dozvole.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Ne možete da deaktivirate bot naloge. Molimo vas da deaktivirate bot-a.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Ne možete da deaktivirate osnivačke naloge.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Ne možete da deaktivirate vaš nalog.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Ne možete da forsirate reaktivaciju bot naloga. Molimo vas da deaktivirate boa-a.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Ne možete da forsirate reaktivaciju asnivačkih naloga.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Ne možete da forsirate reaktivaciju vašeg naloga.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Ne možete da uklonite korisnički nalog gosta.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Ne možete da uklonite vaš nalog.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ne možete da proglasite ignorisane korisnike da budu osnivači.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Morate da aktivirate korisnike pre nego što ih proglasite za osnivače, samo aktivni korisnici mogu biti promovisani.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Ovo samo odrešujete ukoliko menjate korisničku email adresu.',

	'DELETE_POSTS'			=> 'Obriši postove',
	'DELETE_USER'			=> 'Obriši korisnika',
	'DELETE_USER_EXPLAIN'	=> 'Znajte da kada obrišete korisnika, više ih ne možete povratiti.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Uspešno forsirana reaktivacija.',
	'FOUNDER'						=> 'Osnivač',
	'FOUNDER_EXPLAIN'				=> 'Osnivači imaju sve administratorske dozvole i nikada ne mogu da budu zabranjeni, obrisani ili izmenjeno od neosnivačkih korisnika.',

	'GROUP_APPROVE'					=> 'Odobri člana',
	'GROUP_DEFAULT'					=> 'Postavi podrzumevanu grupu za člana',
	'GROUP_DELETE'					=> 'Ukloni člana iz grupe',
	'GROUP_DEMOTE'					=> 'Prekini članstvo vođi grupe',
	'GROUP_PROMOTE'					=> 'Proglasi za vođu grupe',

	'IP_WHOIS_FOR'			=> 'IP adrese za %s',

	'LAST_ACTIVE'			=> 'Zadnji put aktivan',

	'MOVE_POSTS_EXPLAIN'	=> 'Molimo vas da izaberete forum u koji želite da pomerite sve postove ovog korisnika.',

	'NO_SPECIAL_RANK'		=> 'Nije dodeljen specijalan čin',
	'NOT_MANAGE_FOUNDER'	=> 'Pokušali ste da izmenite korisnika sa osnivačkim statusom. Samo osnivači mogu da menjaju druge osnivače.',
	'NO_WARNINGS'      =>  'Nema upozorenja.',

	'QUICK_TOOLS'			=> 'Brze alatke',

	'REGISTERED'			=> 'Registrovan',
	'REGISTERED_IP'			=> 'Registrovan sa IP adrese',
	'RETAIN_POSTS'			=> 'Sačuvani postovi',

	'SELECT_FORM'			=> 'Izaberite formu',
	'SELECT_USER'			=> 'Izaberite korisnika',

	'USER_ADMIN'					=> 'Administracija korisnika',
	'USER_ADMIN_ACTIVATE'			=> 'Aktiviranje naloga',
	'USER_ADMIN_ACTIVATED'			=> 'Korisnik je uspešno aktiviran.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Uspešno uklonjen avatar iz korisničkog naloga.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Zabrana po email-u',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mail adresa je zabranjena putem menadžmenta korisnika',
	'USER_ADMIN_BAN_IP'				=> 'Zabrana po IP adresi',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP adresa je zabranjena putem menadžmenta korisnika',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Korisničko ime je zabranjeno putem menadžmenta korisnika',
	'USER_ADMIN_BAN_USER'			=> 'Zabrana po korisničkom imenu',
	'USER_ADMIN_DEACTIVATE'			=> 'Deaktiviraj nalog',
	'USER_ADMIN_DEACTIVED'			=> 'Korisnik uspešno deaktiviran.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Obriši sve prikačene fajlove',
	'USER_ADMIN_DEL_AVATAR'			=> 'Obriši avatar',
	'USER_ADMIN_DEL_OUTBOX'    		=>  'Isprazni PP outbox',
  'USER_ADMIN_LEAVE_NR'     		=>  'Ukloni iz novo registvrovani',
	'USER_ADMIN_DEL_POSTS'			=> 'Obriši sve postove',
	'USER_ADMIN_DEL_SIG'			=> 'Obriši potpis',
	'USER_ADMIN_EXPLAIN'			=> 'Ovde možete promeniti informacije o vašim korisnicima i određene specifične opcije. Da bi izmenili dozvole korisnika molimo vas da koristite sistem da dozvole korisnika i grupa.',
	'USER_ADMIN_FORCE'				=> 'Forsiraj reaktivaciju',
	'USER_ADMIN_MOVE_POSTS'			=> 'Pomeri sve postove',
	'USER_ADMIN_SIG_REMOVED'		=> 'Uspešno uklonjen potpis iz korisničkog naloga.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Uspešno uklonjeni svi prikačeni fajlovi ovog korisnika.',
	'USER_AVATAR_UPDATED'			=> 'Uspešno ažurirani detalji korisničkog avatara.',
	'USER_AVATAR_NOT_ALLOWED'  		=>  'Avatar ne može biti prikazan jer su avatari zabranjeni.',
  'USER_AVATAR_TYPE_NOT_ALLOWED'  	=>  'Trenutni avatar ne može biti prikazan jer je avatar tog tipa zabranjen.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Proizvoljna polja profila',
	'USER_DELETED'					=> 'Korisnik uspešno obrisan.',
	'USER_GROUP_ADD'				=> 'Dodaj korisnika u grupu',
	'USER_GROUP_NORMAL'				=> 'Normalne grupe korisnika su članovi',
	'USER_GROUP_PENDING'			=> 'Grupe korisnika u statusu zahteva',
	'USER_GROUP_SPECIAL'			=> 'Specijalne grupe korisnika su članovi',
	'USER_LIFTED_NR'         		=>  'Uspešno ste uklonili članov status novo registrovanog.',
	'USER_NO_ATTACHMENTS'			=> 'Nema prikačenih fajlova za prikaz.',
	'USER_NO_POSTS_TO_DELETE'		=> 'Korisnik nema postove za čuvanje ili brisanje.',
	'USER_OUTBOX_EMPTIED'    		=> 'Uspešno ste ispraznil korisnikov outbox za privatne poruke.',
  'USER_OUTBOX_EMPTY'     			=>  'Korisnikov outbox za privatne poruke je već bio prazan.',
	'USER_OVERVIEW_UPDATED'			=> 'Detalji korisnika su ažurirani.',
	'USER_POSTS_DELETED'			=> 'Uspešno uklonjeni svi postovi ovog korisnika.',
	'USER_POSTS_MOVED'				=> 'Uspešno pomereni postovi korisnika u željeni forum.',
	'USER_PREFS_UPDATED'			=> 'Ažurirana podešavanja korisnika.',
	'USER_PROFILE'					=> 'Korisnički profil',
	'USER_PROFILE_UPDATED'			=> 'Profil korisnika je ažuriran.',
	'USER_RANK'						=> 'Čin korisnika',
	'USER_RANK_UPDATED'				=> 'Ažuriran čin korisnika.',
	'USER_SIG_UPDATED'				=> 'Potpis korisnika je uspešno ažuriran.',
	'USER_TOOLS'					=> 'Osnovni alati',
	'USER_WARNING_LOG_DELETED' =>  'Nema dostupnih informacija. Moguće je da je zapis u logu izbrisan.',
));

?>