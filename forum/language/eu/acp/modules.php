<?php
/**
*
*
* acp_modules.php [Basque [eu]]
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'		=> 'Hemendik era guztietako moduluak kudeatu zenitzake. Mesedez, kontuan izan Administrazio Kontrol Panelak (ACP) hiru mailetako menu-egitura duela (Kategoria -> Azpi-kategoria -> Modulua) eta besteek, mantendu egin behar den bi mailetako menu-egitura dutela (Kategoria -> Modulua) Kontuan izan, baita ere, norbera blokeatu egin daitekela moduluak kudeatzen dituen modulua ezgaitu edo ezabatuz gero.',
	'ADD_MODULE'						=> 'Modulua gehitu',
	'ADD_MODULE_CONFIRM'				=> 'Ziur aukeratutako modulua gehitu nahi duzula?',
	'ADD_MODULE_TITLE'					=> 'Modulu izenburua gehitu',

	'CANNOT_REMOVE_MODULE'				=> 'Ezin daiteke modulua ezabatu esleitutako kumeak bait ditu. Mesedez, kume guztiak ezaba edo mugi itzazu eragiketa hau burutu aurretik.',
	'CATEGORY'							=> 'Kategoria',
	'CHOOSE_MODE'						=> 'Modulu era aukeratu',
	'CHOOSE_MODE_EXPLAIN'				=> 'Erabiliko den modulu era aukeratu.',
	'CHOOSE_MODULE'						=> 'Modulua aukeratu',
	'CHOOSE_MODULE_EXPLAIN'				=> 'Modulu honek deituko duen fitxategi mota aukeratu.',
	'CREATE_MODULE'						=> 'Modulu berria sortu',

	'DEACTIVATED_MODULE'				=> 'Modulua ezgaituta',
	'DELETE_MODULE'						=> 'Modulua ezabatu',
	'DELETE_MODULE_CONFIRM'				=> 'Ziur modulu hau ezabatu egin nahi duzula?',

	'EDIT_MODULE'						=> 'Modulua aldatu',
	'EDIT_MODULE_EXPLAIN'				=> 'Hemen moduluaren ezarpen zehatzak sartu zenitzake.',

	'HIDDEN_MODULE'					   	=> 'Modulu ezkutua',

	'MODULE'							=> 'Modulua',
	'MODULE_ADDED'						=> 'Modulua zuzen gehitu egin da.',
	'MODULE_DELETED'					=> 'Modulua zuzen ezabatu egin da.',
	'MODULE_DISPLAYED'					=> 'Erakutsitako modulua',
	'MODULE_DISPLAYED_EXPLAIN'			=> 'Modulu hau erabili nahi baldin baduzu, baina ez baduzu erakutsi nahi, EZ aukera ezazu.',
	'MODULE_EDITED'						=> 'Modulua zuzen aldatu egin da.',
	'MODULE_ENABLED'					=> 'Modulua gaituta',
	'MODULE_LANGNAME'					=> 'Moduluaren hizkuntza',
	'MODULE_LANGNAME_EXPLAIN'			=> 'Moduluaren izena sar ezazuIntroduzca el nombre del módulo. Hizkuntza iraunkorra aukeratu izena hizkuntza fitxategiren batetik emana baldin badator.',
	'MODULE_TYPE'						=> 'Modulu mota',

	'NO_CATEGORY_TO_MODULE'				=> 'Ezinezkoa izan da kateogora modulu bihurtzea. Mesedez, kume guztiak ezaba edo mugi itzazu eragiketa hau burutu aurretik.',
	'NO_MODULE'							=> 'Ez da modulurik aurkitu.',
	'NO_MODULE_ID'						=> 'Ez da modulu IDrik zehaztu.',
	'NO_MODULE_LANGNAME'				=> 'Ez da modulu hizkuntzarik zehaztu.',
	'NO_PARENT'							=> 'Guraso gabe',

	'PARENT'							=> 'Guraso',
	'PARENT_NO_EXIST'					=> 'Gurasoa ez da existitzen.',

	'SELECT_MODULE'						=> 'Moduluren bat aukera ezazu',
));

?>