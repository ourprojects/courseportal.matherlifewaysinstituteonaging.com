<?php
/**
*
* 
* acp_profile.php [Basque [eu]]
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Profil eremu pertsonalizatua zuzen gehitu egin da.',
	'ALPHA_ONLY'			=> 'Letra-zenbakiak baino ez',
	'ALPHA_SPACERS'			=> 'Letra-zenbakiak eta espazioak',
	'ALWAYS_TODAY'			=> 'Beti egungo data',

	'BOOL_ENTRIES_EXPLAIN'			=> 'Sar itzazu zure aukerak orain',
	'BOOL_TYPE_EXPLAIN'				=> 'Mota aukeratu, laukitxoa edo irrati botoia Laukitxoa erabiltzaile jakinentzako aukeratu baldin bada baino ez da agertuko. Kasu horretan, <strong>bigarren</strong> hizkuntza aukera erabili egingo da. Irrati botoiak edozein kasutan agertuko dira.',

	'CHANGED_PROFILE_FIELD'			=> 'Profil eremun pertsonalizatua zuzen aldatu egin da.',
	'CHARS_ANY'						=> 'Edozein karaktere',
	'CHECKBOX'						=> 'Laukitxoa (Checkbox)',
	'COLUMNS'						=> 'Zutabeak',
	'CP_LANG_DEFAULT_VALUE'			=> 'Lehenetsitako balioa',
	'CP_LANG_EXPLAIN'				=> 'Eremuaren deskribapena',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'Erabiltzaileari erakutsiko zaion eremu honen azalpena.',
	'CP_LANG_NAME'					=> 'Erabiltzaileari erakutsiko zaion eremun honen izena/izenburua.',
	'CP_LANG_OPTIONS'				=> 'Aukerak',
	'CREATE_NEW_FIELD'				=> 'Eremu berria sortu',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Gutxienez profil eremu pertsonalizatuetariko bat ez da itzulia izan. Mesedez, sar ezazu eskatutako informazioa &quot;Itzuli&quot;n klik eginez.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Lehenetsitako hizkuntza [%$s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Lehenetsitako hizkuntzaren definizoak ez daude osorik profil eremu honentzako.',
	'DEFAULT_VALUE'					=> 'Lehenetsitako balioa',
	'DELETE_PROFILE_FIELD'			=> 'Profil eremua ezabatu',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Ziur eremu profil hau ezabatu nahi duzula?',
	'DISPLAY_AT_PROFILE'			=> 'Erabiltzaile kontrol panelan erakutsi',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Erabiltzailea gai da profil eremu hau bere Erabiltzaile Kontrol Paneletik aldatzeko.',
	'DISPLAY_AT_REGISTER'			=> 'Izen-emate orrian erakutsi',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Aukera hau gaituta baldin badago, eremua izen-emate formularioan bistaratuko da.',
	'DISPLAY_ON_VT'					=> 'Gaiaren orrian erakutsi',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Aukera hau gaituta baldin badago, eremua gaiaren orrian dagoen mini-profilan erakutsiko da.',
	'DISPLAY_PROFILE_FIELD'			=> 'Profil eremua erakutsi',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Profil eremua konfigurazio/ezarpenak sartzeko orri guztietan bistaratuko da. Aukera honen balorea “ez” bezala jarriko balitz, eremua gai orrietan, profiletan eta kide zerrendan ezkutatu egingo litzateke.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Sar itzazu zure aukerak orain, aukera bakoitza lerro aparte baten.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Mesedez, izan kontuan aukeren testuak aldatu zenitzakela eta aukera berriak ere gehitu zenitzakela bukaeran. Ez da gomendatzen aukera berriak daudenen artean tartekatzerik oker esleitu bait litzatekez aukerok zure erabiltzaileei eta. Tarteko aukerak ezabatzen baldin badituzu, akats hau ere gerta daiteke. Aukerak azkenengotik hasita ezabatuz gero, erabiltzaileak lehenetsita zituzten aukeretara itzuliko dira.',
	'EMPTY_FIELD_IDENT'				=> 'Eremu hutsa izendatu',
	'EMPTY_USER_FIELD_NAME'			=> 'Mesedez, sar ezazu eremuaren izena/izenburua',
	'ENTRIES'						=> 'Sarrerak',
	'EVERYTHING_OK'				=> 'Dena ondo (OK)',

	'FIELD_BOOL'				=> 'Booleanoa (Bai/Ez)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Eremuaren deskribapena',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Erabiltzaileari erakutsiko zaion eremuaren deskribapena.',
	'FIELD_DROPDOWN'			=> 'Menu hedagarria (dropdown box)',
	'FIELD_IDENT'				=> 'Eremu identifikazioa',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Eremurako aukeratu duzun identifikazioa bada dagoeneko. Mesedez, aukera ezazu beste izenen bat.',
	'FIELD_IDENT_EXPLAIN'		=> 'Profil eremua datubasean eta txantilloietan zein den jakiteko balio duen izena da Eremu identifikazioa.',
	'FIELD_INT'					=> 'Zenbakiak',
	'FIELD_LENGTH'				=> 'Eremuaren luzera',
	'FIELD_NOT_FOUND'			=> 'Ez da profil eremua aurkitu.',
	'FIELD_STRING'				=> 'Testu hutseko eremua',
	'FIELD_TEXT'				=> 'Testuarea',
	'FIELD_TYPE'				=> 'Eremu mota',
	'FIELD_TYPE_EXPLAIN'		=> 'Ostean ezin izango duzu eremu mota aldatu.',
	'FIELD_VALIDATION'			=> 'Eremu baieztapena',
	'FIRST_OPTION'				=> 'Lehen aukera',

	'HIDE_PROFILE_FIELD'			=> 'Profil eremua ezkutatu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Eremua erabiltzaileak berak, administariek eta moderadoreek baino ezingo dute ikusi. Erabiltzaile Kontrol Panelan Erakutsi aukera ezgaituta baldin badago, erabiltzaileak ezingo du ezta ikusi edo aldatu eremu hau, administrariek baino ezingo dute aldatu.',

	'INVALID_CHARS_FIELD_IDENT'		=> 'Eremu identifikazioak a-tik z-ra doazen letra minuskulak eta marra baxua (_) baino ezin ditu eduki.',
	'INVALID_FIELD_IDENT_LEN'		=> 'Eremu identifikazioak hamazazpi (17) karakteretako luzera baino ezi du eduki.',
	'ISO_LANGUAGE'					=> 'Hizkuntza [%s]',

	'LANG_SPECIFIC_OPTIONS'	=> 'Hizkuntza aukera espezifikoak [<strong>%$s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Gehienezko karaktere zenbakia',
	'MAX_FIELD_NUMBER'		=> 'Baimendutako zenbakirik altuena',
	'MIN_FIELD_CHARS'		=> 'Gutxienezko karaktere zenbakia',
	'MIN_FIELD_NUMBER'		=> 'Baimendutako zenbakirik baxuena',

	'NO_FIELD_ENTRIES'			=> 'Ez da sarrerarik zehaztu.',
	'NO_FIELD_ID'				=> 'Ez da eremu identifikaziorik zehaztu.',
	'NO_FIELD_TYPE'				=> 'Ez da eremu motarik zehaztu.',
	'NO_VALUE_OPTION'			=> 'Sartu gabeko balorearen aukera.',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Sartu gabeko (non-entry) balioa. Eremua beharrezkoa baldin bada, erabiltzaileak errorea jasotzen du hemen zehaztutako aukera hautatuz gero.',
	'NUMBERS_ONLY'				=> 'Zenbakiak baino ez (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Funtsezko aukerak',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profil eremua zuzen gaitu egin da.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profil eremua zuzen ezgaitu egin da.',
	'PROFILE_LANG_OPTIONS'		=> 'Hizkuntza aukera espezifikoak',
	'PROFILE_TYPE_OPTIONS'		=> 'Profil motako aukera espezifikoak',

	'RADIO_BUTTONS'				=> 'Irrati botoiak',
	'REMOVED_PROFILE_FIELD'		=> 'Profil eremua zuzen ezabatu egin da.',
	'REQUIRED_FIELD'			=> 'Beharrezko eremua',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Profil eremua erabiltzaileak edo administrariek bete dezaten derrigortzen du. Izen-emate Orrian Erakutsi aukera gaituta baldin badago,  eremua profila aldatzerakoan baino ez zaio eskatuko erabiltzaileari.',
	'ROWS'						=> 'Lerroak',

	'SAVE'					=> 'Gorde',
	'SECOND_OPTION'			=> 'Bigarren aukera',
	'SHOW_NOVALUE_FIELD'			=> 'Eremua erakutsi ez baldin bada balorerik aukeratu',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Profilaren eremu hori, balorerik aukeratu ez bazaio ere, erakutsi beharko litzateken zehazten du.',
	'STEP_1_EXPLAIN_CREATE'	=> 'Hemen zure profil eremu berriko lehen oinarrizko ezarpenak sar zenitzake. Informazio hau falta zaizkizun aukerak edota eremuko aurrebista egiteko aukera izango duzun bigarren pausurako beharrezkoa da.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Hemen zure profil eremuaren funtsezko ezarpenak aldatu zenitzake. Aukeren baloreak bigarren pausuan kalkulatzen dira. Bigarren pausu horretan, gainera, aldatutako ezarpenak egiaztatzeko balioko dizun aurrebista egiteko aukera izango duzu.',
	'STEP_1_TITLE_CREATE'	=> 'Profil eremua gehitu',
	'STEP_1_TITLE_EDIT'		=> 'Profil eremua aldatu',
	'STEP_2_EXPLAIN_CREATE'	=> 'Hemen, aukera arrunt batzuk doitu zenezake. Erabiltzaileei agertuko zaien moduan ikusteko aukera ere baduzu aurrebista batekin.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Hemen, aukera arrunt batzuk aldatu zenezake. Erabiltzaileei agertuko zaien moduan ikusteko aukera ere baduzu aurrebista batekin. <br /><strong>Izan kontuan profil eremuetan eginiko aldaketek ez dutela eraginik izango dagoeneko zeuden eta erabiltzaileek datuak sartu dituzten eremuetan. </strong>',
	'STEP_2_TITLE_CREATE'	=> 'Profil motako aukera espezifikoak',
	'STEP_2_TITLE_EDIT'		=> 'Profil motako aukera espezifikoak',
	'STEP_3_EXPLAIN_CREATE'	=> 'Foroan hizkuntza bat baino gehiago duzunez, artikuluak beste hizkuntz(et)an ere bete beharko dituzu. Profil eremua lehenetsitako hizkuntzarekin ibiliko da (itzulpenak gerorako utzi zenitzake).',
	'STEP_3_EXPLAIN_EDIT'	=> 'Foroan hizkuntza bat baino gehiago duzunez, artikuluak beste hizkuntz(et)an ere bete beharko dituzu. Profil eremua lehenetsitako hizkuntzarekin ibiliko da.',
	'STEP_3_TITLE_CREATE'	=> 'Geratzen diren hizkuntzen definizioak',
	'STEP_3_TITLE_EDIT'		=> 'Hizkuntza definizioak',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Lehenetsitako hitzen bat sar ezazu lehenetsitako baloreren bat bistaratu daiten nahi baduzu. Hutsik agertzea nahi baduzu utz ezazu hutsik.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Lehenetsitako testuren bat sar ezazu lehenetsitako baloreren bat bistaratu daiten nahi baduzu. Hutsik agertzea nahi baduzu utz ezazu hutsik.',
	'TRANSLATE'						=> 'Itzuli',

	'USER_FIELD_NAME'	=> 'Erabiltzaileari erakutsiko zaion eremuare izena/izenburua',

	'VISIBILITY_OPTION'				=> 'Ikuspen aukerak',
));

?>