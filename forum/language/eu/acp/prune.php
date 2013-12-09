<?php
/**
*
* 
*
* acp_prune.php [Basque [eu]]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Hemendik zure foroko erabiltzaileaak ezabatu (edo ezgaitu) zenitzake. Hainbat eratan egin dezakezu hau: mezu kopuruagatik, azkeneko jardueragatiki, etab. Gainera, irizpide hauek bateratu egin zenitzake, adbez. azkeneko jarduera 2002-01-01 baino lehenagokoa eta 10 mezu baino gutxigo dituzten erabiltzaileak garbitu zenitzake. Aukeran, erabiltzaile zerrenda sartu zenezake testu kutxan eta horrela edozein irizpide baztertuko da. Kontuz ibili prestazio honekin! Erabiltzailea behin ezabatu eta gero ez bait dago atzera pausurik.',

	'DEACTIVATE_DELETE'			=> 'Ezgaitu edo ezabatu',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Erabiltzaileak ezgaitu edo osoan ezabatzeko aukera. Kontuan izan ez dagoela atzera egiterik!',
	'DELETE_USERS'				=> 'Ezabatu',
	'DELETE_USER_POSTS'			=> 'Garbitutako erabiltzaileen mezuak ezabatu',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'Ezabatutako erabiltzaileek eginiko mezuak ezabatzen ditu, ez du eraginik ezgaitutako erabiltzaileen mezuetan.',

	'JOINED_EXPLAIN'			=> 'Sar ezazu data <kbd>uuuu-hh-ee</kbd> formatuan.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Sar ezazu data <kbd>uuuu-hh-ee</kbd> formatuan. Sartu <kbd>0000-00-00</kbd> inoiz konektatu ez diren erabilzaileak garbitzeko <em>Baino lehen</em> eta <em>Baino beranduago</em> baldintzei ez zaie kasurik egingo.',

	'PRUNE_USERS_LIST'				=> 'Garbituko diren erabiltzaileak',
	'PRUNE_USERS_LIST_DELETE'		=> 'Erabiltzaileak garbitzeko aukeratu d(ir)en irizpide(ar)ekin, hurrengo kontuak ezabatuko dira.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Erabiltzaileak garbitzeko aukeratu d(ir)en irizpide(ar)ekin, hurrengo kontuak ezgaituko dira.',

	'SELECT_USERS_EXPLAIN'		=> 'Hemen erabiltzaileen izen jakinak sar itzazu, aurretik ezarritako irizpideen gainetik lehentasuna izango dute. Sortzaileak ezin dira garbitu.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Aukeratutako erabiltzaileak zuzen ezgaitu egin dira.',
	'USER_DELETE_SUCCESS'		=> 'Aukeratutako erabiltzaileak zuzen ezabatu egin dira.',
	'USER_PRUNE_FAILURE'			=> 'Ez da erabiltzailerik zehaztutako irizpideekin bat egiten duenik.',

	'WRONG_ACTIVE_JOINED_DATE'		=> 'Sartutako data oker dago, formatua <kbd>YYYY-MM-DD</kbd> da.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Honek, mezurik ez dituen edo zehaztutako egun kopuruan bisitarik euki ez dituen gaiak ezabatu egingo ditu. Ez baldin baduzu zenbakirik zehazten, gai guztiak ezabatuko dira. Berez, ez ditu ezabatuko inkestarik indarrean duen gairik ezta iragarki edo itsaskorrik.',

	'FORUM_PRUNE'					=> 'Foroa garbitu',

	'NO_PRUNE'						=> 'Ez da fororik garbitu',

	'SELECTED_FORUM'				=> 'Aukeratutako foroa',
	'SELECTED_FORUMS'				=> 'Aukeratutako foroak',

	'POSTS_PRUNED'					=> 'Mezuak garbiturik',
	'PRUNE_ANNOUNCEMENTS'			=> 'Iragarkiak garbitu',
	'PRUNE_FINISHED_POLLS'			=> 'Itxitako inkestak garbitu',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Itxitako inkestak dituzten gaiak ezabatzen ditu.',
	'PRUNE_FORUM_CONFIRM'			=> 'Ziur aukeratutako foroa zehaztutako irizpideekin garbitu nahi duzula? Behin ezabatuta ez dago garbitutako mezuak eta gaiak berreskuratzeko biderik.',
	'PRUNE_NOT_POSTED'				=> 'Azkeneko mezua bialdu zenetik egunen kopurua',
	'PRUNE_NOT_VIEWED'				=> 'Azkenekoz bisitatu zenetik egunen kopurua',
	'PRUNE_OLD_POLLS'				=> 'Inkesta zaharrak garbitu',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Aspalditik bozkatu gabeko inkestak ezabatzen ditu.',
	'PRUNE_STICKY'					=> 'Itsaskorrak garbitu',
	'PRUNE_SUCCESS'					=> 'Foroak zuzen garbitu egin dira.',

	'TOPICS_PRUNED'					=> 'Gaiak garbiturik',
));

?>