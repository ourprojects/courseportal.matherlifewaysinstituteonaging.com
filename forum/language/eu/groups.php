<?php
/**
*
* 
*
* groups.php [Basque [eu]]
*
* @package   language
* @author    bixerdo for http://librezale.org 
* @copyright (c) 2005 phpBB Group
* @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
* @version   $Id$
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
//

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'Aukeratutakoa zeure lehenetsitako taldea duzu dagoeneko.',
	'ALREADY_IN_GROUP'			=> 'Aukeratutako taldeko kide bazara dagoeneko.',
	'ALREADY_IN_GROUP_PENDING'		=> 'Talde honetara harpidetza eskatu duzu dagoeneko.',

	'CANNOT_JOIN_GROUP'         => 'Ezin duzu talde honetara harpidetu. Talde irekietan eta talde libreetan baino ezin duzu harpidetu.',
	'CANNOT_RESIGN_GROUP'      => 'Ezin duzu talde hau bertan behera utzi. Talde irekiak eta talde libreak baino ezin dituzu bertan behera utzi.',
	'CHANGED_DEFAULT_GROUP'		=> 'Lehenetsitako taldea era zuzenean aldatuta.',

	'GROUP_AVATAR'				=> 'Taldeko irudia',
	'GROUP_CHANGE_DEFAULT'		=> 'Ziur al zaude "%s" taldea zure lehenetsitako taldea bihurtu nahi duzula?',
	'GROUP_CLOSED'				=> 'Itxita',
	'GROUP_DESC'				=> 'Taldeko deskribapena',
	'GROUP_HIDDEN'				=> 'Izkututa',
	'GROUP_INFORMATION'			=> 'Taldeko informazioa',
	'GROUP_IS_CLOSED'			=> 'Talde itxia duzu hau. Taldeko moderadorearen gonbidapena behar duzu bertan parte hartzeko. ',
	'GROUP_IS_FREE'				=> 'Talde ireki eta librea duzu hau. Ongietorri erabiltze berri guztioi!.',
	'GROUP_IS_HIDDEN'			=> 'Izkutatutako taldea duzu hau. Taldean harpidetuta daudenak baino ezin dute bere partaidetza ikusi.',
	'GROUP_IS_OPEN'				=> 'Talde irekia duzu hau. Erabiltzaile modura harpidetu zaitezke eskari baten bitartez.',
	'GROUP_IS_SPECIAL'			=> 'Talde berezia duzu hau. Talde bereziak Foroko Administrariek kudeatzen dituzte.',
	'GROUP_JOIN'				=> 'Taldera harpidetu',
	'GROUP_JOIN_CONFIRM'		=> 'Ziur al zaude aukeratutako taldera nahi duzula harpidetu?',
	'GROUP_JOIN_PENDING'		=> 'Taldera harpidetzeko eskaria',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Ziur al zaude eskaria egin nahi duzula aukeratutako taldera harpidetzeko?',
	'GROUP_JOINED'				=> 'Era zuzenean harpidetu zara aukeratutako taldean',
	'GROUP_JOINED_PENDING'		=> 'Harpidetza eskaria era zuzenean eginda. Mesedez itxaron ezazu taldeko moderadorearen baietza.',
	'GROUP_LIST'				=> 'Erabiltzaileak kudeatu',
	'GROUP_MEMBERS'				=> 'Taldeko kideak',
	'GROUP_NAME'				=> 'Taldeko izena',
	'GROUP_OPEN'				=> 'Irekia',
	'GROUP_RANK'				=> 'Taldeko maila',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Taldea bertan behera utzi',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ziur al zaude aukeratutako taldea bertan behera utzi nahi duzula?',
	'GROUP_RESIGN_PENDING'			=> 'Harpidetza eskaria bertan behera utzi',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Ziur al zaude aukeratutako taldera harpidetza eskaria bertan behera utzi nahi duzula?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> 'Aukeratutako taldetik era zuzenean izan zara ezabatuta.',
	'GROUP_RESIGNED_PENDING'		=> 'Aukeratutako taldeko harpidetza eskaria era zuzenean izan da ezabatuta.',
	'GROUP_TYPE'					=> 'Talde mota',
	'GROUP_UNDISCLOSED'				=> 'Talde izkutua',
	'FORUM_UNDISCLOSED'				=> 'Foro(eta)ko moderazioa izkutua',

	'LOGIN_EXPLAIN_GROUP'			=> 'Izena eman behar duzu taldeko xehetasunak ikusteko.',

	'NO_LEADERS'					=> 'Ez zara inongo taldeko erantzule',
	'NOT_LEADER_OF_GROUP'			=> 'Ezin duzu eragiketa burutu ez bait zara aukeratutako taldeko erantzulea.',
	'NOT_MEMBER_OF_GROUP'			=> 'Ezin duzu eragiketa burutu ez bait zara aukeratutako taldeko kide.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Ezin duzu lehenetsitako taldea bertan behera utzi.',

	'PRIMARY_GROUP'					=> 'Lehen mailako taldea',

	'REMOVE_SELECTED'				=> 'Aukeratuak ezabatu',

	'USER_GROUP_CHANGE'				=> '"%1$s" taldetik "%2$s"(e)raino',
	'USER_GROUP_DEMOTE'				=> 'Moderazioa utzi',
	'USER_GROUP_DEMOTE_CONFIRM'		=> 'Ziur al zaude aukeratutako taldeko moderazioa utzi nahi duzula?',
	'USER_GROUP_DEMOTED'			=> 'Moderazia era zuzenean utzita.',
));

?>