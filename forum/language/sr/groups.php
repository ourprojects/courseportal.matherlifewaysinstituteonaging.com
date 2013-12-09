<?php
/** 
*
* groups [Serbian]
*
* @package language
* @version $Id: groups.php,v 1.15 2006/10/30 16:19:32 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'	=> 'Izabrana grupa je već vaša podrazumevana grupa',
	'ALREADY_IN_GROUP'		=> 'Već ste član izabrane grupe',
	'ALREADY_IN_GROUP_PENDING'	=> 'Već ste zatražili da se pridružite izabranoj grupi.',

	'CHANGED_DEFAULT_GROUP'	=> 'Uspešno ste promenili podrazumevanu grupu',
	'CANNOT_JOIN_GROUP'		=> 'Ne možete se pridružiti ovoj grupi. Možete se pridružiti samo otvorenim i slobodnim grupama.',
	'CANNOT_RESIGN_GROUP'	=> 'Ne možete se povući iz ove grupe. Možete otkazati članstvo samo u slobodnim grupama.',
	
	'GROUP_AVATAR'						=> 'Avatar grupe', 
	'GROUP_CHANGE_DEFAULT'				=> 'Da li ste sigurni da želite da promenite vaše podrazumevanj članstvo u grupi “%s”?',
	'GROUP_CLOSED'						=> 'Zatvorena',
	'GROUP_DESC'						=> 'Opis grupe',
	'GROUP_HIDDEN'						=> 'Skrivena',
	'GROUP_INFORMATION'					=> 'Informacije o korisničkoj grupi', 
	'GROUP_IS_CLOSED'					=> 'Ovo je zatvorena grupa, novi članovi se ne mogu automatski pridružiti.',
	'GROUP_IS_FREE'						=> 'Ovo je potpuno otvorena grupa, svi novi članovi su dobrodošli.', 
	'GROUP_IS_HIDDEN'					=> 'Ovo je skrivena grupa, samo članovi ove grupe mogu pogledati njene članove.',
	'GROUP_IS_OPEN'						=> 'Ovo je otvorena grupa, članovi se mogu prijaviti za pristup.',
	'GROUP_IS_SPECIAL'					=> 'Ovo je specijalna grupa, specijalnim grupama upravljaju administratori.', 
	'GROUP_JOIN'						=> 'Pridruži se',
	'GROUP_JOIN_CONFIRM'				=> 'Da li ste sigurni da želite da se pridružite ovoj grupi?',
	'GROUP_JOIN_PENDING'				=> 'Zahtev za pristup grupi',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Da li ste sigurni da želite da pošaljete zahtev za pristup?',
	'GROUP_JOINED'						=> 'Uspešno ste se pridružili izabranoj grupi',
	'GROUP_JOINED_PENDING'				=> 'Uspešno ste poslali zahtev za članstvo. Molimo vas da sačekate vođu grup da odobri vaše članstvo.',
	'GROUP_LIST'						=> 'Rad sa članovima',
	'GROUP_MEMBERS'						=> 'Članovi grupe',
	'GROUP_NAME'						=> 'Naziv grupe',
	'GROUP_OPEN'						=> 'Otvorena',
	'GROUP_RANK'						=> 'Čin grupe', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Ukunu članstvo u grupi',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Da li ste sigurni da želite da ukinete članstvo iz izabrane grupe?',
	'GROUP_RESIGN_PENDING'				=> 'Ukini čekanje na odobrenje za članstvo',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Da li ste sigurni da želite za prekinete čekanje na članstvo iz izabrane grupe?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Uspešno ste uklonjeni iz izabrane grupe',
	'GROUP_RESIGNED_PENDING'			=> 'Vaš zahtev za članstvom je uspešno uklonjen iz izabrane grupe',
	'GROUP_TYPE'						=> 'Tip grupe',
	'GROUP_UNDISCLOSED'					=> 'Skrivena grupa',
	'FORUM_UNDISCLOSED'					=> 'Uređivanje skrivenog(ih) foruma',

	'LOGIN_EXPLAIN_GROUP'	=> 'Morate se prijaviti da bi videli detalje o grupi',

	'NO_LEADERS'					=> 'Niste vođa ni jedne grupe',
	'NOT_LEADER_OF_GROUP'			=> 'Zahtevana operacija se ne može izvršiti jer niste vođa izabrane grupe.',
	'NOT_MEMBER_OF_GROUP'			=> 'Zahtevana operacija se ne može izvršiti jer niste član izabrane grupe.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Ne možete prekinuti članstvo u podrazumevanoj grupi.',
	
	'PRIMARY_GROUP'		=> 'Primarna grupa',

	'REMOVE_SELECTED'		=> 'Ukloni izabrano',

	'USER_GROUP_CHANGE'			=> 'Iz “%1$s” grupe u “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Otkaži vođstvo',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Da li ste sigurni da želite da otkažete vođstvo iz izabrane grupe?',
	'USER_GROUP_DEMOTED'		=> 'Uspešno ste otkazali vođstvo.',
));

?>