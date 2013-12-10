<?php
/**
*
* 
*
* acp_posting.php [Basque [eu]]
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'	=> 'BBCode, HTML aldaera berezi bat da mezuetan zer eta nola erakusten den kontrol handiagoarekin baimentzen duenak. Orri honetatik BBCode pertsonalizatuak gehitu, ezabatu edota aldatu ditzakezu.',
	'ADD_BBCODE'			=> 'BBCode berri bat gehitu',

		'BBCODE_DANGER'				=> 'Gehitu nahi duzun BBCodea HTML atributu baten barruan {TEXT} seinaleren bat erabiltzen duela dirudi. XSS segurtasun arazoak ekar litzake honek. Murriztaileagoak diren {SIMPLETEXT} edo {INTTEXT} tipoak erabil ditzazun gomendatzen dizugu. {TEXT} erabiltzea sahieztezina eta behar-beharrezkoa baino ez baduzu erabili zure erantzunkizunpean.',
	'BBCODE_DANGER_PROCEED'		=> 'Jarraitu', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCodea zuzen gehitu egin da.',
	'BBCODE_EDITED'				=> 'BBCodea zuzen aldatu egin da.',
	'BBCODE_NOT_EXIST'			=> 'Aukeratutako BBCodea ez da existitzen.',
	'BBCODE_HELPLINE'			=> 'Laguntza',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Eremu honetan BBCodearen gainean sagua jartzerakoan agertzen den laguntza testua jartzen da.',
	'BBCODE_HELPLINE_TEXT'		=> 'Laguntza testua',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Laguntza testua luzeegia da.',
	
	'BBCODE_INVALID_TAG_NAME'	=> 'Dagoeneko badago BBCode honetarako aukeratutako marka-izena.',
	'BBCODE_INVALID'			=> 'Baliogarria ez den formulario batean eraiki duzu BBCodea.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Pertsonalizatutako BBCodeak irekiera zein itxiera markak eduki behar ditu.',
	'BBCODE_TAG'				=> 'Marka',
	'BBCODE_TAG_TOO_LONG'		=> 'Aukeratu duzun marka-izena luzeegia da.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Sartu duzun marka definizioa luzeegia da. Mesedez, labur ezazu definizioa.',
	'BBCODE_USAGE'				=> 'BBCode erabilera',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Hemen BBCodea nola erabili azaltzen duzu. Ordezka itzazu sarrera-aldaerak dagozkien zeinuekaitik (%sbehekaldean ikusi%s)',

	'EXAMPLE'					=> 'Adibidea:',
	'EXAMPLES'					=> 'Adibideak:',

	'HTML_REPLACEMENT'			=> 'HTML ordezkapena',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Hemen lehenetsitako HTML ordezkapena azaltzen duzu. Ez ezazu ahaztu goikaldean jarritako zeinuak jartzeaz!',

	'TOKEN'				=> 'Zeinua',
	'TOKENS'			=> 'Zeinuak',
	'TOKENS_EXPLAIN'	=> 'Zeinuak erabiltzaileak sartutako informazioaren placeholders dira. Sartutako informazioa baieztatu daiten, dagokion definizioarekin bat egin beharko du. Behar baduzu, zenbatu egin ditzakezu gakoen arteko azkenengo karaktereari zenbakiren bat gehituz, adbez. {TEXT1}, {TEXT2}<br /><br />HTML ordezkapenarekin language/ karpetan duzun edozein hizkuntza kate (string) erabili zenezake honela: {L_<em>&lt;stringname&gt;</em>} non <em>&lt;stringname&gt;</em> gehitu nahi duzun itzulitako hita den. Adibidez, {L_WROTE} &quot;idatzita&quot; bezala (edo erabiltzaileak lehenetsirik duen hizkuntzan dagokion bezala) agertuko da.<br /><br /><strong>Mesedez, izan kontuan behekaldean zerrendatutako zeinuak baino ezin direla erabili BBCode pertsonalizatuetan.</strong>',
	'TOKEN_DEFINITION'	=> 'Zer izan liteke?',
	'TOO_MANY_BBCODES'	=> 'Ezin duzu BBCode gehiagorik sortu. Mesedez, BBCoderen bat edo gehiago ezaba ezazu berriro saiatu baino lehen.',

	'tokens'	=> array(
		'TEXT'		=> 'Edozein testu, atzerriko karaktereak, zenbakiak… barne. Ez zenuke zeinu hau HTML marketan erabili behar. Horretarako saiatu zaitez IDENTIFIER, INTTEXT edo SIMPLETEXT erabiltzen.',
		'SIMPLETEXT'	=> 'Alfabeto latindarraren karaktereak (A-Z), zenbakiak, espazioak, komak, puntuak, ken eta gehi zeinuak, marra eta marra baxua.',
		'INTTEXT'		=> 'Unicode letra-karakterrak, zenbakiak, espazioak, komak, puntuak, minus, gehi, gidoia, gidoi-baxua eta hutsuneak.',
		'IDENTIFIER'	=> 'Alfabeto latindarraren karaktereak (A-Z), zenbakiak, marra eta marra baxua.',
		'NUMBER'	=> 'Edozein digitu segida',
		'EMAIL'		=> 'E-mail helbide baliagarria',
		'URL'		=> 'Edozein protokolo (http, ftp, etab… ezin daitezke javascripteko exploitentzako erabili) erabiliko luken URLa. Ez baldin bada ezer sartzen “http://” aurrizkia jartzen da.',
		'LOCAL_URL'	=> 'Bertoko URLa. URLa gaiaren orriarekiko erlatibo beharko du izan eta ezingo du zerbitzari izenik edo protokolorik eduki.',
		'COLOR'		=> 'HTML koloreren bat, bai zenbakitan adierazita <samp>#FF1234</samp> bai <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS kolore gakotan</a>  <samp>fuchsia</samp> edo <samp>InactiveBorder</samp> bezala.',
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Hemendik, erabiltzaileek euren gai edo mezuetan erabili ditzateken ikonoak gehitu, ezabatu edo aldatu zenitzake. Orokorrean, irudi hauek foroko zerrendetako gaien izenburuen ondoan edo gaien zerrendetako mezuen izenburuen ondoan agertzen dira. Ikono pakete osoak sortu edo gehitu zenitzake baita ere.',
	'ACP_SMILIES_EXPLAIN'	=> 'Irrifartxoak (emotikonoak) zirrara edo sentimenduren bat irudikatzeko erabiltzen dire irudi txikiak (batzutan animatuak) dira. Hemendik, erabiltzaileek euren mezu edo mezu pribatuetan erabili ditzaketen irrifartxoak gehitu, ezabatu edo aldatu zenitzake. Ikono pakete osoak sortu edo gehitu zenitzake baita ere.',
	'ADD_SMILIES'			=> 'Irrifartxo bat baino gehiago gehitu',
	'ADD_SMILEY_CODE'		=> 'Irrifartxo kode gehigarria gehitu',
	'ADD_ICONS'				=> 'Ikono bat baino gehiago gehitu',
	'AFTER_ICONS'			=> '%s(r)en ostean',
	'AFTER_SMILIES'			=> '%s(r)en ostean',

	'CODE'						=> 'Kodea',
	'CURRENT_ICONS'				=> 'Oraingo ikonoak',
	'CURRENT_ICONS_EXPLAIN'		=> 'Indarrean dauden ikonoekin zer egin aukera ezazu.',
	'CURRENT_SMILIES'			=> 'Oraingo irrifartxoak',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Indarrean dauden irrifartxoekin zer egin aukera ezazu.',

	'DISPLAY_ON_POSTING'		=> 'Mezuak bidaltzeko orrian erakutsi',
	'DISPLAY_POSTING'			=> 'Mezuetan',
	'DISPLAY_POSTING_NO'		=> 'Mezuetan ez',	
	
	
	
	'EDIT_ICONS'				=> 'Ikonoak aldatu',
	'EDIT_SMILIES'				=> 'Irrifartxoak aldatu',
	'EMOTION'					=> 'Emozioa',
	'EXPORT_ICONS'				=> 'icons.pak esportatu eta deskargatu',
	'EXPORT_ICONS_EXPLAIN'		=> '%sLotura honi jarraituz, instalaturiko zure ikonoen ezarpenak <samp>icons.pak</samp>en paketatuko dira. Horrela, behin deskargatu eta gero, <samp>.zip</samp> edo <samp>.tgz</samp> motatako fitxategia sor daiteke non zure ikono guztiak gehi <samp>icons.pak</samp> konfigurazio fitxategia egongo lirateken%s.',
	'EXPORT_SMILIES'			=> 'smilies.pak esportatu eta deskargatu',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sLotura honi jarraituz, instalaturiko zure irrifartxoen (emotikonoen) ezarpenak <samp>smilies.pak</samp>en paketatuko dira. Horrela, behin deskargatu eta gero, <samp>.zip</samp> edo <samp>.tgz</samp> motatako fitxategia sor daiteke non zure emotikono guztiak gehi <samp>smilies.pak</samp> konfigurazio fitxategia egongo lirateken%s.',

	'FIRST'						=> 'Lehenengoa',

	'ICONS_ADD'					=> 'Ikono berria gehitu',
	'ICONS_NONE_ADDED'			=> 'Ez da ikonorik gehitu.',
	'ICONS_ONE_ADDED'			=> 'Ikonoa zuzen gehitu egin da.',
	'ICONS_ADDED'				=> 'Ikonoak zuzen gehitu egin dira.',
	'ICONS_CONFIG'				=> 'Ikonoen konfigurazioa',
	'ICONS_DELETED'				=> 'Ikonoa zuzen ezabatu egin da.',
	'ICONS_EDIT'				=> 'Ikonoa aldatu',
	'ICONS_ONE_EDITED'			=> 'Ikonoa zuzen eguneratu egin da.',
	'ICONS_NONE_EDITED'			=> 'Ez da ikonorik eguneratu.',
	'ICONS_EDITED'				=> 'Ikonoak zuzen eguneratu egin dira.',
	'ICONS_HEIGHT'				=> 'Ikonoaren altuera',
	'ICONS_IMAGE'				=> 'Ikonoaren irudia',
	'ICONS_IMPORTED'			=> 'Ikono paketa zuzen jarri egin da.',
	'ICONS_IMPORT_SUCCESS'		=> 'Ikono paketea zuzen inportatu egin da.',
	'ICONS_LOCATION'			=> 'Ikonoaren kokapena',
	'ICONS_NOT_DISPLAYED'		=> 'Hurrengo ikonoak ez dira erakutsiko mezuen orrian.',
	'ICONS_ORDER'				=> 'Ikonoen ordena',
	'ICONS_URL'					=> 'Ikono fitxategia',
	'ICONS_WIDTH'				=> 'Ikonoaren zabalera',
	'IMPORT_ICONS'				=> 'Ikono paketea jarri',
	'IMPORT_SMILIES'			=> 'Irrifartxo paketea jarri',

	'KEEP_ALL'					=> 'Dena mantendu',

	'MASS_ADD_SMILIES'			=> 'Irrifartxo bat baino gehiago gehitu',
	
	'NO_ICONS_ADD'				=> 'Ez dago gehitu daiteken ikono erabilgarririk.',
	'NO_ICONS_EDIT'				=> 'Ez dago aldatu daiteken ikono erabilgarririk.',
	'NO_ICONS_EXPORT'			=> 'Ez duzu ikonorik pakete bat sortzeko.',
	'NO_ICONS_PAK'				=> 'Ez da ikono paketerik aurkitu.',
	'NO_SMILIES_ADD'			=> 'Ez dago gehitu daiteken irrifartxo erabilgarririk.',
	'NO_SMILIES_EDIT'			=> 'Ez dago aldatu daiteken irrifartxo erabilgarririk.',
	'NO_SMILIES_EXPORT'			=> 'Ez duzu irrifartxorik pakete bat sortzeko.',
	'NO_SMILIES_PAK'			=> 'Ez da irrifartxo paketerik aurkitu.',

	'PAK_FILE_NOT_READABLE'		=> 'Ezin daiteke <samp>.pak</samp> fitxategia irakurri.',

	'REPLACE_MATCHES'			=> 'Bat-etortzeak ordezkatu',

	'SELECT_PACKAGE'			=> 'Paketeren bat aukeratu',
	'SMILIES_ADD'				=> 'Irrifartxo berria gehitu',
	'SMILIES_NONE_ADDED'		=> 'Ez da irrifartxorik gehitu.',
	'SMILIES_ONE_ADDED'			=> 'Irrifartxoa zuzen gehitu egin da.',
	'SMILIES_ADDED'				=> 'Irrifartxoak zuzen gehitu egin dira.',
	'SMILIES_CODE'				=> 'Irrifartxo kodea',
	'SMILIES_CONFIG'			=> 'Irrifartxoen konfigurazioa',
	'SMILIES_DELETED'			=> 'Irrifartxoa zuzen ezabatu egin da.',
	'SMILIES_EDIT'				=> 'Irrifartxoa aldatu',
	'SMILIE_NO_CODE'			=> '“%s” irrifartxoa baztertu egin da ez bait da koderik zehaztu.',
	'SMILIE_NO_EMOTION'			=> '“%s” irrifartxoa baztertu egin da ez bait da emoziorik zehaztu.',
	'SMILIE_NO_FILE'			=> '“%s” irrifartxoa baztertu egin da ez bait da fitxategirik aurkitu.',
	'SMILIES_NONE_EDITED'		=> 'Ez da irrifarxorik eguneratu.',
	'SMILIES_ONE_EDITED'		=> 'Irrifartxo zuzen eguneratu egin da.',
	'SMILIES_EDITED'			=> 'Irrifartxoak zuzen eguneratu egin dira.',
	'SMILIES_EMOTION'			=> 'Emozioa',
	'SMILIES_HEIGHT'			=> 'Irrifartxoaren altuera',
	'SMILIES_IMAGE'				=> 'Irrifartxoaren irudia',
	'SMILIES_IMPORTED'			=> 'Irrifartxo paketea zuzen jarri egin da.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Irrifartxo paketea zuzen inportatu egin da.',
	'SMILIES_LOCATION'			=> 'Irrifartxoaren kokapena',
	'SMILIES_NOT_DISPLAYED'		=> 'Hurrengo irrifartxoak ez dira erakutsiko mezu orrian.',
	'SMILIES_ORDER'				=> 'Irrifartxoen ordena',
	'SMILIES_URL'				=> 'Irrifartxo fitxategia',
	'SMILIES_WIDTH'				=> 'Irrifartxoaren zabalera',

		'TOO_MANY_SMILIES'			=> '%d irrfartxo kopurua gaindituta.',
		
	'WRONG_PAK_TYPE'			=> 'Zehaztutako paketeak ez du behar den informazioa.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'	=> 'Hemendik, foroetan automatikoki zentsuratuak izango diren hitzak gehitu, aldatu edo ezabatu zenitzake. Gainera, erabiltzaileek ezingo dituzte hitz hauek dituzten izenik erabili. Komodinak (*) onartzen dira, adbez. *nezi* jasanezinarekin bat etorriko da, jasan* jasangaitzarekin eta *ezina ikusiezinarekin.',
	'ADD_WORD'			=> 'Hitz berria gehitu',

	'EDIT_WORD'			=> 'Zentsuratu beharreko hitza aldatu',
	'ENTER_WORD'		=> 'Hitza eta bere ordezkapena sartu behar dituzu.',

	'NO_WORD'			=> 'Ez da aldatzeko hitzik aukeratu.',

	'REPLACEMENT'		=> 'Ordezkapena',

	'UPDATE_WORD'		=> 'Zentsuratu beharreko hitza eguneratu',

	'WORD'				=> 'Hitza',
	'WORD_ADDED'		=> 'Zentsuratu beharreko hitza zuzen gehitu egin da.',
	'WORD_REMOVED'		=> 'Zentsuratu beharreko hitza zuzen ezabatu egin da.',
	'WORD_UPDATED'		=> 'Zentsuratu beharreko hitza zuzen eguneratu egin da.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'	=> 'Formulario honekin mailak gehitu, aldatu edo ezabatu zenitzake. Maila bereziak ere sortu zenitzake eta erabiltzaileei ezarri erabiltzaileen kudeaketa orritik.',
	'ADD_RANK'			=> 'Maila berria gehitu',

	'MUST_SELECT_RANK'	=> 'Mailaren bat aukeratu behar duzu.',

	'NO_ASSIGNED_RANK'	=> 'Ez da maila berezirik esleitu.',
	'NO_RANK_TITLE'		=> 'Ez duzu izenbururik zehaztu maila honetarako.',
	'NO_UPDATE_RANKS'	=> 'Maila zuzen ezabatu egin da. Hala ere, maila honetan zeuden erabiltzaileen kontuak ez dira eguneratu. Kontu horien maila eskuz berrezarri beharko duzu.',

	'RANK_ADDED'			=> 'Maila zuzen gehitu egin da.',
	'RANK_IMAGE'			=> 'Maila irudia',
	'RANK_IMAGE_EXPLAIN'	=> 'Mailarekin erlazionatuko den irudia definitzeko erabili. Bidea phpBBren root karpetatik erlatiboa izango da.',
	'RANK_IMAGE_IN_USE'		=> '(Erabiltzen)',
	'RANK_MINIMUM'			=> 'Gutxienezko mezuak',
	'RANK_REMOVED'			=> 'Maila zuzen ezabatu egin da.',
	'RANK_SPECIAL'			=> 'Maila berezi moduan ezarri',
	'RANK_TITLE'			=> 'Mailaren izenburua',
	'RANK_UPDATED'			=> 'Maila zuzen eguneratu egin da.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Hemendik, onartuko ez diren erabiltzaile izenak kontrolatu zenitzake. Komodina (*) erabili daiteke izenak ez onartzeko. Mesedez, kontuan izan ezingo duzula izena dagoeneko emanda duen erabiltzaileen izenik ez-onartu. Izen hori ezabatu arte ezingo diozu onarpena ukatu.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Erabiltzaile izenen bati uka zenioke onarpena komodinen bat (*) jarriz edozein karaktererekin bat etor daiten.',
	'ADD_DISALLOW_TITLE'	=> 'Onartu gabeko izena gehitu',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Onartu gabeko izenak ezabatu zenitzake zerrenda honetatik izena aukeratuz eta Bidalin klikatuz.',
	'DELETE_DISALLOW_TITLE'		=> 'Onartu gabeko izena ezabatu',
	'DISALLOWED_ALREADY'		=> 'Sartu duzun izena ez dago onartuta.',
	'DISALLOWED_DELETED'		=> 'Onartu gabeko izena zuzen ezabatu egin da.',
	'DISALLOW_SUCCESSFUL'		=> 'Onartu gabeko izena zuzen gehitu egin da.',

	'NO_DISALLOWED'				=> 'Ez da onartu gabeko izenik',
	'NO_USERNAME_SPECIFIED'		=> 'Ez duzu izenik aukeratu edo sartu.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Hemendik, berri-emateetan eta mezu-ukatzeetan erabilitako arrazoiak kudeatu zenitzake. Ezabatu ezin den lehenetsitako arrazoia dago (* batekin markatutakoa) beste arrazoirik ezean mezu pertsonalizatuak bidaltzeko balio duena.',
	'ADD_NEW_REASON'		=> 'Arrazoi berria gehitu',
	'AVAILABLE_TITLES'		=> 'Itzulitako arrazoien izenburu erabilgarriak',

	'IS_NOT_TRANSLATED'			=> '<strong>Ez</strong> da arrazoia itzuli.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Arrazoia <strong>ez</strong> da itzulia izan. Itzuli nahi baldin baduzu, hizkuntza kodea zehaztu arrazoien atalean.',
	'IS_TRANSLATED'				=> 'Arrazoia itzulia izan da.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Arrazoia itzulia izan da. Hemen sartzen duzun izenburua hizkuntza fitxategietako arrazoien atalean zehazturik baldin badago itzulpena erabiliko da.',

	'NO_REASON'					=> 'Ezin izan da arrazoia aurkitu.',
	'NO_REASON_INFO'			=> 'Izenburua eta deskribapena zehaztu behar dituzu arrazoi honetarako.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Ezin duzu “Besterik” lehenetsitako arrazoia ezabatu.',

	'REASON_ADD'				=> 'Arrazoia gehitu',
	'REASON_ADDED'				=> 'Arrazoia zuzen gehitu egin da.',
	'REASON_ALREADY_EXIST'		=> 'Dagoeneko bada arrazoirik izenburu berarekin. Mesedez, sar ezazu beste izenbururen bat arrazoi honetarako.',
	'REASON_DESCRIPTION'		=> 'Arrazoiaren deskribapena',
	'REASON_DESC_TRANSLATED'	=> 'Erakutsiko den arrazoiaren deskribapena',
	'REASON_EDIT'				=> 'Arrazoia aldatu',
	'REASON_EDIT_EXPLAIN'		=> 'Hemen arrazoiak gehitu edo aldatu zenitzake. Arrazoia itzulia izan bada, itzulpena erabiliko da hemen agertzen den deskribapenaren ordez.',
	'REASON_REMOVED'			=> 'Arrazoia zuzen ezabatu egin da.',
	'REASON_TITLE'				=> 'Arrazoiaren izenburua',
	'REASON_TITLE_TRANSLATED'	=> 'Erakutsitako izenburua',
	'REASON_UPDATED'			=> 'Arrazoia zuzen eguneratu egin da.',

	'USED_IN_REPORTS'			=> 'Berri-emateetan erabilia',
));

?>