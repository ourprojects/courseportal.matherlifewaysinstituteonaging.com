<?php
/** 
*
* acp_database [Serbian]
*
* @package language
* @version $Id: database.php,v 1.12 2006/10/02 15:10:29 acydburn Exp $
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Ovde možete bekapovati sve podatke vezane za phpBB. Možete sačuvati arhivu u vašem <samp>store/</samp> direktrijumu ili preuzeti direktno. U zavisnosti od konfiguracije vašeg servera bićete u mogućnosti da kompresujete fajl u nekoliko formata.',
	'ACP_RESTORE_EXPLAIN'	=> 'Ova opcija povratiti sve phpBB tabele iz sačuvanog fajla. Ako vaš server ima podršku možete koristiti gzip ili bzip2 kompresovan tekstualni fajl i biće automatski raspakovan. <strong>UPOZORENJE</strong> Ovo će obrisati sve postojeće podatke. Proces vraćanja podataka može dugo da potraje. Molimo vas da ne otvarate druge stranice dok se proces ne završi.',
	'RESTORE_SELECTED_BACKUP'	=> 'Da li ste sigurni da želite da povratite izabrani bekap?',

	'BACKUP_DELETE'		=> 'Bekap fajl je uspešno obrisan.',
	'BACKUP_INVALID'	=> 'Izabran fajl za bekap je neispravan.',
	'BACKUP_OPTIONS'	=> 'Bekap opcije',
	'BACKUP_SUCCESS'	=> 'Bekap fajl je uspešno napravljen.',
	'BACKUP_TYPE'		=> 'Tip bekapa',

	'DATABASE'			=> 'Alati za bazu',
	'DATA_ONLY'			=> 'Samo podaci',
	'DELETE_BACKUP'		=> 'Obriši bekap',
	'DELETE_SELECTED_BACKUP'	=> 'Da li ste sigurni da želite da obrišete izabrani bekap?',
	'DESELECT_ALL'		=> 'Odselektuj sve',
	'DOWNLOAD_BACKUP'	=> 'Preuzmi bekap',

	'FILE_TYPE'			=> 'Tip fajla',
	'FILE_WRITE_FAIL'  =>  'Ne mogu da upišem fajl u predviđeni folder.',
	'FULL_BACKUP'		=> 'Kompletan',

	'RESTORE_FAILURE'		=> 'Bekap fajl je možda neispravan.',
	'RESTORE_OPTIONS'		=> 'Opcije za povratak',
	'RESTORE_SUCCESS'		=> 'Baza je uspešno povraćena.<br /><br />Vaš board bi trebalo da se vrati u stanje kada je bekap napravljen.',

	'SELECT_ALL'			=> 'Izaberi sve',
	'SELECT_FILE'			=> 'Izaberi fajl',
	'START_BACKUP'			=> 'Počni bekap',
	'START_RESTORE'			=> 'Počni povraćaj',
	'STORE_AND_DOWNLOAD'	=> 'Snimi i preuzmi',
	'STORE_LOCAL'			=> 'Snimi fajl lokalno',
	'STRUCTURE_ONLY'		=> 'Samo struktura',

	'TABLE_SELECT'		=> 'Izbor tabela',
	'TABLE_SELECT_ERROR'=> 'Morate itabrati najmanje jednu tabelu.',
));

?>