<?php
/**
*
* memberlist.php [Basque [eu]]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License 2.0
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

$lang = array_merge($lang, array(
	'ABOUT_USER'		=> 'Profila',
	'ACTIVE_IN_FORUM'	=> 'Fororik aktiboena',
	'ACTIVE_IN_TOPIC'	=> 'Gairik aktiboena',
	'ADD_FOE'			=> 'Baztertuetara gehitu',
	'ADD_FRIEND'		=> 'Lagunetara gehitu',
	'AFTER'				=> 'Ostean',
	
	'ALL'				=> 'Guztiak',	
	
	'BEFORE'			=> 'Lehenagokoa',
	
	'CC_EMAIL'		=> 'Posta elektroniko honen kopia norberari bialdu',
	'CONTACT_USER'	=> 'Kontaktua',
	
	'DEST_LANG'			=> 'Hizkuntza',
	'DEST_LANG_EXPLAIN'	=> 'Mezu honen hartzaileari dagokion hizkuntza (balego) aukeratu.',
	
	'EMAIL_BODY_EXPLAIN'	=> 'Mezu hau testu lau modura bidaliko da, ez ezazu HTMLrik edo BBCoderik erabili. Bidaltzailearen helbidea zure posta elektronikoaren helbidea izango da.',
	'EMAIL_DISABLED'		=> 'Barkatu, baina posta elektronikoari dagozkion eragiketa guztiak ezgaitu egin dira.',
	'EMAIL_SENT'			=> 'Posta elektronikoa bidali da.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Mezu hau testu lau modura bidaliko da, ez ezazu HTMLrik edo BBCoderik erabili. Mesedez, kontutan izan gaiari buruzko informazioa mezuaren barnean gehitu dela. Bidaltzailearen helbidea zure posta elektronikoaren helbidea izango da.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Hartzailearen posta elektroniko helbide baliogarri bat gehitu behar duzu.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Testua gehitu behar diozu mezuari.',
	'EMPTY_MESSAGE_IM'		=> 'Testua gehitu behar diozu mezuari.',
	'EMPTY_NAME_EMAIL'		=> 'Hartzailearen benetako izena gehitu behar duzu.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Mezuaren izenburua zehaztu behar duzu.',
	'EQUAL_TO'				=> '(r)en beridina',
	
	'FIND_USERNAME_EXPLAIN'	=> 'Erabiltzaile jakinak bilatzeko, erabil ezazu formulario hau. Ez duzu zertan eremu guztiak betetu behar. Ez badituzu datuak osoan ezagutzen * zeinua erabil zenezake komodin gisa. Datak sartzerakoan <kbd>YYYY-MM-DD</kbd> formatua erabili, adibidez <samp>2004-02-29</samp>. Baieztatze laukitxoak (checkboxes) erabil itzazu erabiltzaile bat(zuk) aukeratzeko (formulariaren arabera erabiltzaile bat baino gehiago onartu daitezke) eta klikatu "Markatutakoak aukeratu" botoian lehengo formuariora itzultzeko.',
	'FLOOD_EMAIL_LIMIT'		=> 'Mezu elektroniko kopurua gainditu egin da. Mesedez, saia zaitez beranduago.',
	
	'GROUP_LEADER'			=> 'Taldeko moderadorea',
	
	'HIDE_MEMBER_SEARCH'	=> 'Erabiltzaile ezkutuak bilatu',
	
	'IM_ADD_CONTACT'	=> 'Kontaktua gehitu',
	'IM_AIM'			=> 'Mesedez, kontuan izan AOL Instant Messenger instalaturik izan behar duzula aukera hori erabiltzeko.',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'Aplikazioa deskargatu',
	'IM_ICQ'			=> 'Mesedez, kontuan izan erabiltzaileek eskatu gabeko berehalako mezurik ez jasotzea aukeratu izan dezaketela.',
	'IM_JABBER'			=> 'Mesedez, kontuan izan erabiltzaileek eskatu gabeko berehalako mezurik ez jasotzea aukeratu izan dezaketela.',
	'IM_JABBER_SUBJECT'	=> 'Automatikoki bidalitako mezua duzu hau. Ez ezazu erantzun! %1$s erabiltzailearen mezuan %2$s(a)n',
	'IM_MESSAGE'		=> 'Zure mezua',
	'IM_MSNM'			=> 'Mesedez, kontuan izan Windows Messenger instalaturik izan behar duzula aukera hori erabiltzeko.',
	'IM_MSNM_BROWSER'	=> 'Zure nabigatzaileak ez du aukera hori eusten.',
	'IM_MSNM_CONNECT'	=> 'MSNM konektatu gabe.\\nMSNMra konektatu behar duzu jarraitzeko.',
	'IM_NAME'			=> 'Zure izena',
	'IM_NO_DATA'		=> 'Ez da baliogarria liteken kontaktu informaziorik erabiltzaile honentzako.',
	'IM_NO_JABBER'		=> 'Barkatu, baina foro honetan ezin daiteke Jabber erabiltzaileen mezu zuzenik bidali. Jabber bezeroren bat izan behar duzu sisteman instalaturik hartzailearekin kontaktuan jartzeko.',
	'IM_RECIPIENT'		=> 'Hartzailea',
	'IM_SEND'			=> 'Bidali',
	'IM_SEND_MESSAGE'	=> 'Mezua bidai',
	'IM_SENT_JABBER'	=> 'Mezua zuzen bidali zaio %1$s(r)i.',
	'IM_USER'			=> 'Berehalako mezua bidali',
	
	'LAST_ACTIVE'				=> 'Aktibo egondako azkeneko aldia',
	'LESS_THAN'					=> 'Hurrengoa baino gutxiago',
	'LIST_USER'					=> 'Erabiltzaile 1',
	'LIST_USERS'				=> '%d erabiltzaile',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Foroko taldearen zerrenda ikusteko izena eman eta saioa hasi behar duzu.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Foroko erabiltzaileen zerrenda ikusteko izena eman eta saioa hasi behar duzu.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Foroko erabiltzaileak bilatzeko izena eman eta saioa hasi behar duzu.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Foroko erabiltzaileen profilak ikusteko izena eman eta saioa hasi behar duzu.',
	
	'MORE_THAN'	=> 'Hurrengoa baino gehiago',
	
	'NO_EMAIL'		=> 'Ez duzu erabiltzaile honi mezu elektronikoak bidaltzeko baimenik.',
	'NO_VIEW_USERS'	=> 'Ez duz erabiltzaileen zerrenda edo profilako ikusteko baimenik.',
	
	'ORDER'	=> 'Ordena',
	'OTHER'	=> 'Beste bat',
	
	'POST_IP'	=> 'Bidalitakoaren IP/domeinua',
	
	'REAL_NAME'		=> 'Hartzailearen izena',
	'RECIPIENT'		=> 'Hartzailea',
	'REMOVE_FOE'	=> 'Baztertutakoa ezabatu',
	'REMOVE_FRIEND'	=> 'Laguna ezabatu',
	
	'SELECT_MARKED'			=> 'Markatutakoak aukeratu',
	'SELECT_SORT_METHOD'	=> 'Orden metodoa aukeratu',
	'SEND_AIM_MESSAGE'		=> 'AIM mezua bidali',
	'SEND_ICQ_MESSAGE'		=> 'ICQ mezua bidali',
	'SEND_IM'				=> 'Berehalako mezua bidali',
	'SEND_JABBER_MESSAGE'	=> 'Jabber mezua bidali',
	'SEND_MESSAGE'			=> 'Mezua bidali',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM mezua bidali',
	'SEND_YIM_MESSAGE'		=> 'YIM mezua bidali',
	'SORT_EMAIL'			=> 'Posta elektronikoa',
	'SORT_LAST_ACTIVE'		=> 'Azkeneko eragiketa',
	'SORT_POST_COUNT'		=> 'Mezuak zenbatu',
	
	'USERNAME_BEGINS_WITH'	=> 'Honekin hasten diren erabiltzaile izenak',
	'USER_ADMIN'			=> 'Erabiltzailea kudeatu',
	'USER_BAN'				=> 'Debekatu',
	'USER_FORUM'			=> 'Erabiltzailearen estatistikak',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Ez zaio gogorarazlerik bidali oraindik',
		1		=> '%1$d gororazle bidalita<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Konektatuta',
	'USER_PRESENCE'			=> 'Foroan une honetan ',
	
	'VIEWING_PROFILE'	=> '%s (r)en profila ikusten',
	'VISITED'			=> 'Azkeneko bisita',
	
	'WWW'				=> 'Webgunea',
));

?>