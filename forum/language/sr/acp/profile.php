<?php
/** 
*
* acp_profile [Serbian]
*
* @package language
* @version $Id: profile.php,v 1.12 2006/11/23 20:56:02 shs Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
  'DISPLAY_ON_VT'   =>  'Prikaži na ekranu sa temama',
  'DISPLAY_ON_VT_EXPLAIN' =>  'Ukoliko je uključeno, ovo polje će biti prikazano u mini profilu na ekranu sa temama.',
	'ADDED_PROFILE_FIELD'	=> 'Uspešno ste dodali proizvoljno polje profila.',
	'ALPHA_ONLY'			=> 'Samo alfanumerički',
	'ALPHA_SPACERS'			=> 'Alfanumerički i razmaci',
	'ALWAYS_TODAY'			=> 'Uvek trenutni datum',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Unesite vaše opcije',
	'BOOL_TYPE_EXPLAIN'		=> 'Definišite tip, bilo checkbox ili radio dugme',

	'CHANGED_PROFILE_FIELD'		=> 'Uspešno ste izmenili polje profila.',
	'CHARS_ANY'					=> 'Svi karakteri',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Kolone',
	'CP_LANG_DEFAULT_VALUE'		=> 'Podrazumevana vrednost',
	'CP_LANG_EXPLAIN'			=> 'Opis polja',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Objašnjenje za ovo polje koje se prikazuje korisniku',
	'CP_LANG_NAME'				=> 'Naziv polja koje se prikazuje korisniku',
	'CP_LANG_OPTIONS'			=> 'Opcije',
	'CREATE_NEW_FIELD'			=> 'Kreiraj novo polje',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Najmanje jedno proizvoljno polje nije prevedeno. Molimo vas da unesete obavezne informacije tako što ćete kliknuti na &quot;Prevedi&quot; link.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Podrazumevani jezik [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Jezički unosi za podrazumevani jezik nisu popunjeni za ovo polje profila.',
	'DEFAULT_VALUE'					=> 'Podrazumevana vrednost',
	'DELETE_PROFILE_FIELD'			=> 'Ukloni polje profila',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Da li ste sigurni da želite da izbrišete ovo polje profila?',
	'DISPLAY_AT_PROFILE'			=> 'Prikaži u korisničkom kontrolnom panelu',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Korisnik može da promeni ovo polje profila van korisničkog kontrolnog panela.',
	'DISPLAY_AT_REGISTER'			=> 'Prikaži na ekranu za registraciju',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Ako je ova opcija uključena, polje će biti prikazano pri registraciji i moguće ga je menjati van korisničkog kontrolnog panela.',
	'DISPLAY_PROFILE_FIELD'			=> 'Prikaži polje profila',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Polje profila će biti prikazano u pregledu teme/pregledu profila/listi članova/itd.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Unesite vaše opcije, svaka opcija u novoj liniji',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Znajte da ste u mogućnosti da promenite tekst vaših opcija kao i da dodajete nove opcije. Nije preporučljivo da dodajete nove opcije između postojećih - ovo može dovesti do pogrešnih opcija dodeljenih korisnicima. Ovo se takođe može desiti ukoliko uklonite opcije u sredini. Uklanjanjem opcija na kraju rezultuje da korisnici imaju dodeljene ove opcije sada gube ove a imaju podrazumevane.',
	'EMPTY_FIELD_IDENT'				=> 'Identifikacija praznog polja',
	'EMPTY_USER_FIELD_NAME'			=> 'Unesite nayiv polja',
	'ENTRIES'						=> 'Unosi',
	'EVERYTHING_OK'					=> 'Sve OK',

	'FIELD_BOOL'				=> 'Promenljiva (Da/Ne)',
	'FIELD_DATE'				=> 'Datum',
	'FIELD_DESCRIPTION'			=> 'Opis polja',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Objašnjenje polja koje se prikazuje korisniku',
	'FIELD_DROPDOWN'			=> 'Padajuća lista',
	'FIELD_IDENT'				=> 'Identifikacija polja',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Izabrana identifikacija polja već postoji. Izaberite drugo ime.',
	'FIELD_IDENT_EXPLAIN'		=> 'Identifikacija polja je naziv koji služi za identifikaciju polja van baze i šablona.',
	'FIELD_INT'					=> 'Brojevi',
	'FIELD_LENGTH'				=> 'Dužina polja za unos',
	'FIELD_NOT_FOUND'			=> 'Polje profila nije pronađeno.',
	'FIELD_STRING'				=> 'Tekstualno polje',
	'FIELD_TEXT'				=> 'Tekstualna kutija',
	'FIELD_TYPE'				=> 'Ti polja',
	'FIELD_TYPE_EXPLAIN'		=> 'Niste u mogućnosti da kasnije menjate tip polja.',
	'FIELD_VALIDATION'			=> 'Validacija polja',
	'FIRST_OPTION'				=> 'Prva opcija',

	'HIDE_PROFILE_FIELD'			=> 'Sakrij polje profila',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Samo administratori i moderatori imaju mogućnost da vide/popune ovo polje profila. Ako je ova opcija uključena, polje profila će biti samo prikazano u u korisničkim profilima.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Identifikacija polja može da sadrži samo mala slova od a-z i _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Identifikacija polja može biti dugačka 17 kataktera',
	'ISO_LANGUAGE'				=> 'Jezik [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Specifične opcije jezika [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maksimalni broj karaktera',
	'MAX_FIELD_NUMBER'		=> 'Najviši dozvoljeni broj',
	'MIN_FIELD_CHARS'		=> 'Minimalni broj karaktera',
	'MIN_FIELD_NUMBER'		=> 'Najniži dozvoljeni broj',

	'NO_FIELD_ENTRIES'			=> 'Nema definisanih unosa',
	'NO_FIELD_ID'				=> 'Nema definisanog id polja.',
	'NO_FIELD_TYPE'				=> 'Nije izabran tip polja.',
	'NO_VALUE_OPTION'			=> 'Opcija jednaka neunetoj vrednosti',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Vrednost za neuneti unos. Ako je polje obavezno, korisnik dobija grešku ako izabere opciju izabranu ovde',
	'NUMBERS_ONLY'				=> 'Samo brojevi (0-9)',

	'PREVIEW_PROFILE_FIELD'		=> 'Pregled polja profila',
	'PROFILE_BASIC_OPTIONS'		=> 'Osnovne opcije',
	'PROFILE_FIELD_ACTIVATED'	=> 'Polje profila je uspešno aktivirano.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Polje profila je uspešno deaktivirano.',
	'PROFILE_LANG_OPTIONS'		=> 'Specifične opcije jezika',
	'PROFILE_TYPE_OPTIONS'		=> 'Specifične opcije tipa profila',

	'RADIO_BUTTONS'				=> 'Radio dugmad',
	'REMOVED_PROFILE_FIELD'		=> 'Uspešno uklonjeno polje profila.',
	'REQUIRED_FIELD'			=> 'Obavezno polje',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Forsiranje polja profila da bude popunjeno od strane korisnika. Ovo će prikazati polje profila pri registraciji i van korisničkog kontrolnog panela.',
	'ROWS'						=> 'Redovi',

	'SAVE'							=> 'Sačuvaj',
	'SECOND_OPTION'					=> 'Druga opcija',
	'SHOW_NOVALUE_FIELD'			=> 'Prikaži polje ako nema izabrane vrednosti',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Određuje da li će polje profila biti prikazano ako nije selektovana ni jedna opcija za opciona polja ili ako nije izabrana ni jedna vrednost za obavezna polja.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Ovde možete uneti prve osnovne parametre vašeg oplja profila. Ove informacije su potrebne za drugi korak gde možete podesiti preostale opcije i gde možete pogledati i doterati vaše polje profila.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Ovde možete promeniti osnovne parametre vašeg polja profila. Relevantne opcije su preračunate u drugom koraku, gde ste u mogućnosti da pogledate i testirate izmenjena podešavanja.',
	'STEP_1_TITLE_CREATE'			=> 'Dodaj polje profila',
	'STEP_1_TITLE_EDIT'				=> 'Izmeni polje profila',
	'STEP_2_EXPLAIN_CREATE'			=> 'Ovde možete definisati neke česte opcije. Dalje, možete pogledati polje koje ste generisali, kao što će ga i korisnik videti. Menjajte opcije dok ne budete zadovoljni kako se polje ponaša.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Ovde možete promeniti neke česte opcije. Dalje, u mogućnosti ste da pogledate izmenjeno polje, kao što će ga korisnik i videti. Menjajte opcije dok ne budete zadovoljni kako se polje ponaša.<br /><strong>Znajte da promene u poljima profila neće uticati na postojeća polj profila uneta od vaših korisnika.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Specifične opcije tipa profila',
	'STEP_2_TITLE_EDIT'				=> 'Specifične opcije tipa profila',
	'STEP_3_EXPLAIN_CREATE'			=> 'Obzirom da imate više od jednog jezika za board instalirane, moraćete takođe da popunite preostale stavke jezika. Polje profila će raditi sa izabranim podrazumevanim jezikom, i u mogućnosti ste da popunite preostala jezička polja kasnije.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Obzirom da imate više od jednog jezika za board instalirane, sada možete menjati ili dodati preostale stavke jezika takođe. Polje profila će raditi sa izabranim podrazumevanim jezikom.',
	'STEP_3_TITLE_CREATE'			=> 'Preostale jezičke definicije',
	'STEP_3_TITLE_EDIT'				=> 'Jezičke definicije',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Unesite podrazumevanu fazu koja će biti prikazana, podrazumevanu vrednost. Ostavite prazno ako želite da ga prikažete kao prazno.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Unesite podrazumevani tekst koji će biti prikazan, podrazumevanu vrednost. Ostavite prazno ako želite da ga prikažete kao prazno.',
	'TRANSLATE'						=> 'Prevedi',

	'UPDATE_PREVIEW'	=> 'Osveži pregled',
	'USER_FIELD_NAME'	=> 'Ime polja prezentovano korisniku',

	'VISIBILITY_OPTION'				=> 'Opcija vidljivosti',
));

?>