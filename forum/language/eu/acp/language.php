<?php
/**
*
* acp_language [American English]
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
	'ACP_FILES'							=> 'Admin hizkuntza fitxategiak',
	'ACP_LANGUAGE_PACKS_EXPLAIN'		=> 'Hemendik hizkuntza paketeak jarri/kendu zenitzake. Lehenetsitako hizkuntza paketea izartxo batekin (*) markaturik dago.',

	'EMAIL_FILES'						=> 'E-mail txantilloiak',

	'FILE_CONTENTS'						=> 'Fitxategien edukiak',
	'FILE_FROM_STORAGE'					=> 'Storage karpetako fitxategia',

	'HELP_FILES'						=> 'Laguntza fitxategiak',

	'INSTALLED_LANGUAGE_PACKS'			=> 'Hizkuntza paketeak instalaturik',
	'INVALID_LANGUAGE_PACK'				=> 'Aukeratutako hizkuntza paketea ez dirudi baliogarria denik. Mesedez, egiazta ezazu hizkuntza paketea eta berriro gehitu ezazu beharrezkoa izanez gero.',
	'INVALID_UPLOAD_METHOD'				=> 'Gehitzeko aukeratutako metodoa ez da baliogarria. Mesedez, beste metodoren bat aukera ezazu.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Hizkuntza xehetasunak zuzen eguneratu egin dira.',
	'LANGUAGE_ENTRIES'					=> 'Hizkuntza sarrerak',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Hemendik hizkuntza paketeko sarrerak edo oraindik itzuli gabe dauden sarrerak alda zenitzake.<br /><strong>Oharra:</strong> Hizkuntza fitxategietan eginiko aldaketak, bereiziriko karpeta batean gordeko dira karpeta hori deskarga zenezan. Erabiltzaileek ez dituzte eginiko aldaketak ikusiko jatorrizko fitxategiak karpeta horiekin ordezkatu arte (zerbitzarira gehituz).',
	'LANGUAGE_FILES'					=> 'Hizkuntza fitxategiak',
	'LANGUAGE_KEY'						=> 'Hizkuntza kodea',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Hizkuntza pakete hau dagoeneko instalaturik dago.',
	'LANGUAGE_PACK_DELETED'				=> '<strong>%1$s</strong> hizkuntza paketea zuzen ezabatu egin da. Hizkuntza honetako erabiltzaile guztiak, foroko lehenetsitako hizkuntzara esleitu egin dira.',
	'LANGUAGE_PACK_DETAILS'				=> 'Hizkuntza paketeko xehetasunak',
	'LANGUAGE_PACK_INSTALLED'			=> '<strong>%1$s</strong> hizkuntza paketea zuzen instalatu egin da.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Profileko eremu pertsonalizatuen hizkuntza-kateak lehenetsitako hizkuntzatik kopiaturik daude. Alda itzazu behar izan ezkero, mesedez.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Bertoko izena',
	'LANGUAGE_PACK_NAME'				=> 'Izena',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Aukeratutako hizkuntza paketea ez da existitzen.',
	'LANGUAGE_PACK_USED_BY'				=> 'Honegatik erabilia (errobotak barne)',
	'LANGUAGE_VARIABLE'					=> 'Hizkuntza aldagaia',
	'LANG_AUTHOR'						=> 'Autorea',
	'LANG_ENGLISH_NAME'					=> 'Izena ingelesez',
	'LANG_ISO_CODE'						=> 'ISO kodea',
	'LANG_LOCAL_NAME'					=> 'Bertoko izena',

	'MISSING_LANGUAGE_FILE'				=> 'Galdutako hizkuntza fitxategia: <strong style="color:red">%1$s</strong>',
	'MISSING_LANG_VARIABLES'			=> 'Hizkuntza aldagaiak galdurik',
	'MODS_FILES'						=> 'MODen hizkuntza fitxategiak',

	'NO_FILE_SELECTED'					=> 'Ez duzu hizkuntza fitxategirik zehaztu.',
	'NO_LANG_ID'						=> 'Ez duzu hizkuntza paketerik zehaztu.',
	'NO_REMOVE_DEFAULT_LANG'			=> 'Ezin duzu lehenetsitako hizkuntza paketea ezabatu.<br />Hizkuntza pakete hau ezabatu nahi baldin baduzu, foroko lehenetsitako hizkuntza aldatu beharko duzu.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'		=> 'Ez dago ezabatutako hizkuntza paketerik',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Storage karpetatik ezabatu',

	'SELECT_DOWNLOAD_FORMAT'			=> 'Deskarga formatua aukeratu',
	'SUBMIT_AND_DOWNLOAD'				=> 'Fitxategia bidali eta deskargatu',
	'SUBMIT_AND_UPLOAD'					=> 'Fitxategia bidali eta gehitu',

	'THOSE_MISSING_LANG_FILES'			=> 'Hurrengo hizkuntza fitxategiak ezin izan dira %1$s hizkuntza karpetan aurkitu.',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Hurrengo hizkuntza aldagaiak ezin izan dira <strong>%1$s</strong> hizkuntza paketean aurkitu.',

	'UNINSTALLED_LANGUAGE_PACKS'		=> 'Ezabatutako hizkuntza paketeak',

	'UNABLE_TO_WRITE_FILE'				=> 'Ezin izan da fitxategia %1$s(e)n idatzi.',
	'UPLOAD_COMPLETED'					=> 'Gehitzea zuzen burutu egin da.',
	'UPLOAD_FAILED'						=> 'Gehiketak arrazoi ezezagunengatik huts egin du. Fitxategia eskuz ordezkatu beharko duzu.',
	'UPLOAD_METHOD'						=> 'Gehitze metodoa',
	'UPLOAD_SETTINGS'					=> 'Gehitze ezarpenak',

	'WRONG_LANGUAGE_FILE'				=> 'Aukeratutako hizkuntza fitxategia ez da baliagarria.',
));

?>