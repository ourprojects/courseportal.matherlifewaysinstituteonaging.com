<?php
/**
*
* acp_database.php [Basque [eu]]
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Hemendik phpBBri dagozkion datu guztien segurtasun kopia (backupa) egin zenezake. Sortutako fitxategia <samp>store/</samp> karpetan edo zure ordenagailuan gorde zenezake. Zerbitzariaren konfigurazioaren arabera fitxategia hainbat formatutan konprimitu daiteke.',
	'ACP_RESTORE_EXPLAIN'	=> 'Honek fitxategian gordetako phpBB taula guztiak berrezarriko ditu. Zerbitzariaren arabera gzip edo bzip2 bitartez konprimaturiko fitxategia ere erabil zenezake automatikoki deskonprimatuko bait da. <strong>OHARTARAZPENA</strong> Eragiketa honek unean dagoen edozein daturen gainean idatziko da. Berrezarketak denboratxo bat eraman lezake, mesedez ez ezazu orri honetatik irten osorik burutu arte. Segurtasun kopiak phpBBren backup ezarpenak burutzen ditu eta <samp>store/</samp> karpetan gordetzen dira. Gerta liteke eskuz eginiko segurtasun kopiak ez daitezela ibili.',

	'BACKUP_DELETE'		=> 'Backup fitxategia zuzen ezabatu egin da.',
	'BACKUP_INVALID'	=> 'Backupa egiteko aukeratutako fitxategia ez da baliagarria.',
	'BACKUP_OPTIONS'	=> 'Backup aukerak',
	'BACKUP_SUCCESS'	=> 'Backup fitxategia zuzen sortu egin da.',
	'BACKUP_TYPE'		=> 'Backup mota',

	'DATABASE'					=> 'Datubasearen erabilgarritasunak',
	'DATA_ONLY'					=> 'Datuak baino ez',
	'DELETE_BACKUP'				=> 'Backupa ezabatu',
	'DELETE_SELECTED_BACKUP'	=> 'Ziur aukeratutako backup fitxategia ezabatu nahi duzula?',
	'DESELECT_ALL'				=> 'Aukeratutako guztia desegin',
	'DOWNLOAD_BACKUP'			=> 'Backupa deskargatu',

	'FILE_TYPE'					=> 'Fitxategi mota',
	'FILE_WRITE_FAIL'	=> 'Ezin izan da fitxategia karpetan idatzi.',
	'FULL_BACKUP'				=> 'Osoan',

	'RESTORE_FAILURE'			=> 'Backup fitxategia kalteturik egon daiteke.',
	'RESTORE_OPTIONS'			=> 'Aukerak berrezarri',
	'RESTORE_SELECTED_BACKUP'	=> 'Ziur aukeratutako backup fitxategia berrezarri nahi duzula?',
	'RESTORE_SUCCESS'			=> 'Datubasea zuzen berrezarri egin da.<br /><br />Foroak segurtasun kopia egin zen uneko egoerara itzuli beharko luke.',

	'SELECT_ALL'				=> 'Guztia aukeratu',
	'SELECT_FILE'				=> 'Fitxategia aukeratu',
	'START_BACKUP'				=> 'Backupa hasi',
	'START_RESTORE'				=> 'Berrezartzea hasi',
	'STORE_AND_DOWNLOAD'		=> 'Gorde eta deskargatu',
	'STORE_LOCAL'				=> 'Fitxategia ordenagailuan gorde',
	'STRUCTURE_ONLY'			=> 'Egitura baino ez',

	'TABLE_SELECT'			=> 'Taula/k aukeratu',
	'TABLE_SELECT_ERROR'	=> 'Gutxienez taula bat aukeratu behar duzu.',
));

?>