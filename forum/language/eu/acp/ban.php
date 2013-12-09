<?php
/**
*
* acp_ban.php [Basque [eu]]
*
* @package   language
* @version   $Id$
* @copyright (c) 2005 phpBB Group
* @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License 2.0

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

//Banning


$lang = array_merge($lang, array(
	'1_HOUR'					=> 'Ordu 1',
	'30_MINS'					=> '30 minutu',
	'6_HOURS'					=> '6 ordu',

	'ACP_BAN_EXPLAIN'			=> 'Hemendik erabiltzaileen debekuak kontrola ditzakezu bai izenegaitik, bai IP helbidetik zein posta elektroniko helbidetik. Horrela, erabiltzaile jakinei forora sartzea galeraziko diezu. Nahi izanez gero, debekuaren arrazoi labur bat (gehienez 3000 karakteretakoa) eman liezaieke. Saioa administratzaile moduan hasterakoan agertuko da. Debekuaren denbora tartea ere zehaztu daiteke. Denbora tarte batean izan ezik data jakin baterarte izan daitela nahi izanez, <u>Noiz arte</u> aukeratu debekuaren iraupenan eta data sartu uuuu-hh-ee formatuarekin.',

	'BAN_EXCLUDE'				=> 'Debekua kendu',
	'BAN_LENGTH'				=> 'Debekuaren iraupena',
	'BAN_REASON'				=> 'Debekuaren arrazoia',
	'BAN_GIVE_REASON'			=> 'Debekatuari erakutsiko zaion debekuaren arrazoia.',
	'BAN_UPDATE_SUCCESSFUL'		=> 'Debeku zerrenda zuzen eguneratu da.',
'BANNED_UNTIL_DATE'		=> '%s(r)arte', // Adibidea: "2011(e)ko Martxoak 11, 14:44(r)arte"
	'BANNED_UNTIL_DURATION'	=> '%1$s (%2$s(r)arte)', // Adibidea: "7 egun (Martxoak 11, 14:44(r)arte)
	
	'EMAIL_BAN'					=> 'Posta elektroniko helbide bat debekatu',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Aukera hau gaitu sartutako posta elektroniko helbidea indarrean dauden debeku guztietatik kentzeko.',
	'EMAIL_BAN_EXPLAIN'			=> 'Posta elektroniko helbide bat baino gehiago zehazteko, sar ezazu bakoitza lerro berri batean. Ez badituzu helbideak osoan sartu nahi * zeinua erabil ezazu komodin modura, adbez. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etab.',
	'EMAIL_NO_BANNED'			=> 'Ez da debekaturiko posta elektroniko helbiderik',
	'EMAIL_UNBAN'				=> 'Posta elektronikoen debekua kendu',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Posta elektroniko bati baino gehiago kendu diezaiokezu debekua behinean nabigatzaileko konbinazio egokia erabiliz (adibidez, Ctrl+klik). Debekatutako helbideak letra lodiz agertuko dira.',

	'IP_BAN'					=> 'IP bat(zuk) debekatu',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Aukera hau gaitu sartutako IPa indarrean dauden debeku guztietatik kentzeko.',
	'IP_BAN_EXPLAIN'			=> 'IP bat baino gehiago zehazteko, sar ezazu bakoitza lerro berri batean. IP tarte bat zehazteko banatu itzazu hasiera eta bukaera marratxo batekin (-), * zeinua erabil ezazu komodin modura, adbez. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etab.',
	'IP_HOSTNAME'				=> 'IP helbideak edo hostnameak',
	'IP_NO_BANNED'				=> 'Ez da debekaturiko IP helbiderik',
	'IP_UNBAN'					=> 'IP helbideen debekua kendu',
	'IP_UNBAN_EXPLAIN'			=> 'IP helbide bati baino gehiago kendu diezaiokezu debekua behinean nabigatzaileko konbinazio egokia erabiliz (adibidez, Ctrl+klik). Debekatutako IP helbideak letra lodiz agertuko dira.',

	'LENGTH_BAN_INVALID'		=> 'Datak <kbd>YYYY-MM-DD</kbd> formatua izan behar du.',
	
	'OPTIONS_BANNED'			=> 'Debekatua',
	'OPTIONS_EXCLUDED'			=> 'Baztertua',

	'PERMANENT'					=> 'Iraunkorra',

	'UNTIL'						=> 'Noiz arte',
	'USER_BAN'					=> 'Erabiltzaile izen bat(zuk) debekatu',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Aukera hau gaitu sartutako erabiltzaile izena indarrean dauden debeku guztietatik kentzeko.',
	'USER_BAN_EXPLAIN'			=> 'Erabiltzaile izen bat baino gehiago zehazteko, sar ezazu bakoitza lerro berri batean. <u>Erabiltzailea bilatu</u> lotura erabil ezazu erabiltzaileak aurkitu eta zerrendara autamatikoki gehitzeko.',
	'USER_NO_BANNED'			=> 'Ez da debekaturiko erabiltzaile izenik',
	'USER_UNBAN'				=> 'Erabiltzaile izenen debekua kendu',
	'USER_UNBAN_EXPLAIN'		=> 'Erabiltzaile izen bati baino gehiago kendu diezaiokezu debekua behinean nabigatzaileko konbinazio egokia erabiliz (adibidez, Ctrl+klik). Debekatutako erabiltzaile izenak letra lodiz agertuko dira.',
));

?>