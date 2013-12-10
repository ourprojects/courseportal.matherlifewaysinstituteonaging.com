<?php
/**
*
* acp_email.php [Basque [eu]]
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
//


$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Hemendik email mezua bidali zenezake erabiltzaile guztiei edo <strong> email masiboak jasotzeko aukera gaituta duen</strong> talde jakin bateko erabiltzaileei. Mezua, administrarien email helbidera bidaliko da beste hartzaile guztiak kopia gordean (CCO) gehituko direlarik. Ezarpen lehenetsiak 50 hartzaile baino ez ditu kontutan hartzen, gehiagorentzako baldin bada, mezu gehiago bidaliko dira. Hartzaileen taldea handia baldin bada, mesedez izan pazientzi apur bat eta ez ezazu orri honetatik irten bidalketa burutu arte. Eragiketa burutzerakoan ohartarazi egingo zaizu.',
	'ALL_USERS'					=> 'Erabiltzaile guztiak',

	'COMPOSE'					=> 'Idatzi',

	'EMAIL_SEND_ERROR'			=> 'Errore bat(zuk) gertatu d(ir)a mezua bidaltzerakoan. Mesedez aztertu ezazu %1$sErrore erregistroa%2$s errore(ar)en mezu osoa(k) ikusteko.',
	'EMAIL_SENT'				=> 'Mezua bidali egin da.',
	'EMAIL_SENT_QUEUE'			=> 'Mezua bidaltze-ilaran jarri da.',

	'LOG_SESSION'				=> 'Email saioa Errore erregistroan errgistratu',

	'SEND_IMMEDIATELY'			=> 'Berehala bidali',
	'SEND_TO_GROUP'				=> 'Taldeari bidali',
	'SEND_TO_USERS'				=> 'Erabiltzaileei bidali',
	'SEND_TO_USERS_EXPLAIN'		=> 'Hemen izenak sartzen baldin badira, goian aukeratutako edozein talde ezgaituko litzateke. Erabiltzaile izen bakoitza lerro berri batean sartu.',
	'MAIL_BANNED'				=> 'Debekatutako erabiltzaileei bidali mezua',
	'MAIL_BANNED_EXPLAIN'		=> 'Talde batera email masiboa bidaltzerakoan, debeketatuko erabiltzaileei ere bidaltzea aukeratu zenezake.',
	'MAIL_HIGH_PRIORITY'		=> 'Altua',
	'MAIL_LOW_PRIORITY'			=> 'Baxua',
	'MAIL_NORMAL_PRIORITY'		=> 'Normala',
	'MAIL_PRIORITY'				=> 'Lehentasuna',
	'MASS_MESSAGE'				=> 'Zure mezua',
	'MASS_MESSAGE_EXPLAIN'		=> 'Mesedez, izan kontuan testu laua baino ezin daitekela idatzi. Edozein kode ezabatu egingo da bidali aurretik.',

	'NO_EMAIL_MESSAGE'			=> 'Mezu bat idatzi behar duzu.',
	'NO_EMAIL_SUBJECT'			=> 'Mezuarentzako izenbururen bat idatzi behar duzu.',
));

?>