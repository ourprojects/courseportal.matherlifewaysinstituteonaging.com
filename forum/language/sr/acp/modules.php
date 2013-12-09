<?php
/** 
*
* acp_modules [Serbian]
*
* @package language
* @version $Id: modules.php,v 1.9 2006/11/10 13:49:52 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Ovde možete upravljati svim vrstama modula. Znajte da AKP ima troslojnu strukturu menija (Kategorija -> Kategorija -> Modul) dok ostali imaju dvoslojnu strukturu (Kategorija -> Modul) koja mora biti sačuvana. Znajte i da možete zaključati sami sebe ako onemogućite ili izbrišete module odgovorne za rad sa samim modulima.',
	'ADD_MODULE'					=> 'Dodaj modul',
	'ADD_MODULE_CONFIRM'			=> 'Da li ste sigurni da želite da dodate izabrani modul sa izabranim modom?',
	'ADD_MODULE_TITLE'				=> 'Dodaj modul',

	'CANNOT_REMOVE_MODULE'	=> 'Modul ne može da se ukloni jer ima dodeljene podmodule. Molimo vas da uklonite ili pomerite sve podmodule pre izvršenja operacije',
	'CATEGORY'				=> 'Kategorija',
	'CHOOSE_MODE'			=> 'Itaberite mod modula',
	'CHOOSE_MODE_EXPLAIN'	=> 'Izbor moda modula koji se koristi.',
	'CHOOSE_MODULE'			=> 'Izaberi modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Izaberite fajl koji poziva ovaj modul.',
	'CREATE_MODULE'			=> 'Napravi nov modul',

	'DEACTIVATED_MODULE'	=> 'Deaktiviran modul',
	'DELETE_MODULE'			=> 'Obriši modul',
	'DELETE_MODULE_CONFIRM'	=> 'Da li ste sigurni da obrišete ovaj modul?',

	'EDIT_MODULE'			=> 'Izmeni modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Ovde možete uneti specifična podešavanja modula',

	'HIDDEN_MODULE'			=> 'Sakriven modul',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Modul je uspešno dodat.',
	'MODULE_DELETED'			=> 'Modul je uspešno obrisan.',
	'MODULE_DISPLAYED'			=> 'Prikaži modul',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ako ne želite da prikažete ovaj modul, ali želite da ga koristite, postavite na Ne.',
	'MODULE_EDITED'				=> 'Modul je uspešno izmenjen.',
	'MODULE_ENABLED'			=> 'Modul uključen',
	'MODULE_LANGNAME'			=> 'Jezičko ime modula',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Unesite naziv modula koji će biti prikazan. Koristite jezičku konstantu ako se ime prosleđuje iz jezičkog fajla.',
	'MODULE_TYPE'				=> 'Tip modula',

	'NO_CATEGORY_TO_MODULE'	=> 'Ne mogu da promenim cakegoriju u modul. Molimo vas da uklonite/pomerite sve podređene pre ove operacije.',
	'NO_MODULE'				=> 'Nema pronađenih modula.',
	'NO_MODULE_ID'			=> 'Nema izabranog modula.',
	'NO_MODULE_LANGNAME'	=> 'Nema izabranog jezičkog imena modula.',
	'NO_PARENT'				=> 'Bez roditelja',

	'PARENT'				=> 'Roditeljski',
	'PARENT_NO_EXIST'		=> 'Roditelj ne postoji.',

	'SELECT_MODULE'			=> 'Izaberite modul',
));

?>