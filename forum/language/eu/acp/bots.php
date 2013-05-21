<?php
/**
*
* acp_bots.php [Basque [eu]]
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Robotak kudeatu',
	'BOTS_EXPLAIN'		=> '“Bots” (botak), “spiders” edo “crawlers” bilatzaileak euren datubaseak eguneratzeko erabiltzen dituzten eragile automatizatuak dira. Ez dutenez saioen erabilera egokia egiten, bisita kontadoreak desitxuratu, sistemaren karga gehitu edo orrien indexazioa desegokitu egin ditzakete. Beraz, arazo guzti hauek gaindi ditzan erabiltzaile mota berezi bat sor dezazun gomendatzen da.',
	'BOT_ACTIVATE'		=> 'Gaitu',
	'BOT_ACTIVE'		=> 'Gaitutako bota',
	'BOT_ADD'			=> 'Bota gehitu',
	'BOT_ADDED'			=> 'Bot berria zuzen gehitu egin da.',
	'BOT_AGENT'			=> 'Botarekin bat-etortzea',
	'BOT_AGENT_EXPLAIN'	=> 'Botaren izenarekin bat datorren hitza. Bat-etortze partzialak baimentzen dira.',
	'BOT_DEACTIVATE'	=> 'Ezgaitu',
	'BOT_DELETED'		=> 'Bota zuzen ezabatu egin da.',
	'BOT_EDIT'			=> 'Botak aldatu',
	'BOT_EDIT_EXPLAIN'	=> 'Hemendik botak gehitu edota aldatu egin zenitzake. Izenak (eragile kateak) eta/edo IP helbideak (helbide mailak) zehaztu zenitzake. Kontu handiz zehaztu agente eragile kateen bat-etortzeak edo helbideak. Sare-zirkulazioa era arindu dezakezu boten saioentzako estilo soil bat zehaztuz. Bot erabiltzaile talde berezi honentzako baimen egokiak zehazteaz gogoratu.',
	'BOT_LANG'			=> 'Botaren hizkuntza',
	'BOT_LANG_EXPLAIN'	=> 'Foroa nabigatzerakoan botari erakutsiko zaion hizkuntza.',
	'BOT_LAST_VISIT'	=> 'Azkeneko bisita',
	'BOT_IP'			=> 'Botaren IP helbidea',
	'BOT_IP_EXPLAIN'	=> 'Bat-etortze partzialak baimentzen dira. Helbideak koma batekin banatu.',
	'BOT_NAME'			=> 'Botaren izena',
	'BOT_NAME_EXPLAIN'	=> 'Barne informaziorako soilik.',
	'BOT_NAME_TAKEN'	=> 'Izena dagoeneko foroan erabiltzen da eta ezin daiteke bota izentzeko erabili.',
	'BOT_NEVER'			=> 'Inoiz ez',
	'BOT_STYLE'			=> 'Botarentzako estiloa',
	'BOT_STYLE_EXPLAIN'	=> 'Foroa nabigatzerakoan botari erakutsiko zaion estiloa.',
	'BOT_UPDATED'		=> 'Bota zuzen eguneratu egin da.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Emandako bot eragilea, unean erabiltzen zaudenaren antzekoa da. Mesedez eragilea aldatu bot honentzako.',
	'ERR_BOT_NO_IP'				=> 'Emandako IP helbidea ez da baliozkoa edo ezin daiteke hostnamea ebatzi.',
	'ERR_BOT_NO_MATCHES'		=> 'Bot honekin bat etorriko litzateken eragile edo IP helbideren bat eman behar duzu gutxienez.',

	'NO_BOT'				=> 'Ez da botik zehaztutako IDarekin aurkitu.',
	'NO_BOT_GROUP'			=> 'Ezin daiteke bot erabiltzaile talde berezirik aurkitu.',
));

?>