<?php
/**
*
* 
*
* acp_search.php [Basque [eu]]
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

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'		=> 'Hemendik bilaketa indizeak eta motoreak kudeatu zenitzake. Orokorrean indize bakarra baino ez denez erabiltzen, gainerakoak ezabatu egin beharko zenituzke. Bilaketaren ezarpenak itxuraldatu eta gero (adbez. gehienezko/gutxienezko karaktere kopurua) indizea ere alda dezazun komeniko litzake, aldaketa horiek islada ditzan.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Hemendik, mezuak indexatzeko eta bilaketak egiteko erabiliko den bilaketa motorea zehaztu zenezake. Eragiketok beharko duten prozesatze maila erabakiko duten ezarpenak zehaztu zenitzake. Ezarpen hauetariko batzuk berdinak izaten dira bilaketa motore guztientzako.',
	
	'COMMON_WORD_THRESHOLD'				=> 'Hitz arrunt ataria',
	'COMMON_WORD_THRESHOLD_EXPLAIN'		=> 'Mezu guztietan portzentairik altuenetan agertzen diren hitzak, hitz arruntzat joko dira. Hitz arruntak baztertu egingo dira bilaketetan. Aukera hau ezgaitzeko, jar ezazu balioa 0an. 100 mezutik gora behar ditu martxan jartzeko. Unean arruntzat hartzen diren hitzak bilaketetan kontutan har daitezan nahi baduzu, indizea berriro eraberritu beharko duzu.',
	'CONFIRM_SEARCH_BACKEND'			=> 'Ziur beste bilaketa motore batera aldatu nahi duzula? Behin aldatu eta gero indize berria sortu beharko duzu. Ez baduzu aurrekora itzultzeko asmorik, lehengo indizea ere ezabatu zenezake sistemaren baliabideak arintzeko.',
	'CONTINUE_DELETING_INDEX'			=> 'Aurreko indizeen ezabapenarekin jarraitu',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Indizea ezabatzeko prozesua hasi da. Bilaketa indizearen orrira sartzeko prozesu hau burutu behar duzu lehenik.',
	'CONTINUE_INDEXING'					=> 'Indexatzearekin jarraitu',
	'CONTINUE_INDEXING_EXPLAIN'			=> 'Indexatze prozesua hasi da. Bilaketa indizearen orrira sartzeko prozesu hau burutu behar duzu lehenik.',
	'CREATE_INDEX'						=> 'Indizea sortu',
	
	'DELETE_INDEX'							=> 'Indizea ezabatu',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Indizea ezabatzen ari da',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Bilaketa motorea indizea ezabatzen ari da. Eragiketa honek minutu batzuk iraun dezake.',
	
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL testu osoko motorea MySQL4 edota gainerako bertsiokin baino ezin da erabili.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL testu osoko indizeak MyISAM taulekin baino ezin da erabili.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Guztira indexaturiko mezu kopurua',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'UTF-8 karaktere ez-latindarrentzako euskarria mbstring erabiliz:',
	'FULLTEXT_MYSQL_PCRE'					=> 'UTF-8 karaktere ez-latindarrentzako euskarria PCRE erabiliz:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'PCREk ez baldin badu unicode karaktererik eusten, bilaketa motorea mbstringen ohizko esamoldeen motorea erabiltzen saiatuko da.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Bilaketa motore honek PCREk unicode karaktereak eutsi dezala behar du. Ez-latindar karaktereak bilatu nahi badituzu, aukera hau PHP 4.4, 5.1 eta gainerako bertsioetan baino ez dago erabilgarri.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Zehaztutako gutxienezko karakteredun hitzak baino ez dira indizatuko bilaketetarako. Ezarpen hau mysql-ren hobespenak aldatuz baino ezin daiteke aldatu.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Zehaztutako gehienezko karakteredun hitzak baino ez dira indizatuko bilaketetarako, Ezarpen hau mysql-ren hobespenak aldatuz baino ezin daiteke aldatu.',
	
	'GENERAL_SEARCH_SETTINGS'	=> 'Bilaketa orokorren ezarpenak',
	'GO_TO_SEARCH_INDEX'	=> 'Bilaketa indizera jo',
	
	'INDEX_STATS'					=> 'Indize estatistikak',
	'INDEXING_IN_PROGRESS'			=> 'Indexatzen ari da',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'Bilaketa motorea foroko mezu guztiak indexatzen ari da. Eragiketa honek minutu batzuetatik ordu batzuetara iraun dezake foroaren tamainaren arabera.',
	
	'LIMIT_SEARCH_LOAD'					=> 'Sistemaren karga muga bilaketa orriarentzako',
	'LIMIT_SEARCH_LOAD_EXPLAIN'			=> 'Sistemaren minutuko karga balorea hemen ezarritakoa baino handiagoa baldin bada, bilaketa orria offline jarriko da. 1.0 prozesadore baten ~%100aren baliokide litzateke. UNIX zerbitzarietarako baino ez.',
	
	'MAX_SEARCH_CHARS'					=> 'Indexatuko diren gehienezko karaktere kopurua bilaketa bakoitzeko',
	'MAX_SEARCH_CHARS_EXPLAIN'			=> 'Karaktere kopuru hau gehienez jota duten hitzak indizatuko dira bilaketetarako.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Gehienez baimendutako hitz-gakoak',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Erabiltzaileak bilaketetan erabil ditzaken gehinezko hitzen kopurua. 0n ezarritako baloreak hitz kopuru mugagabea baimentzen du.',
	'MIN_SEARCH_CHARS'					=> 'Indexatuko diren gutxienezko karaktere kopurua bilaketa bakoitzeko',
	'MIN_SEARCH_CHARS_EXPLAIN'			=> 'Karaktere kopuru hau gutxienez duten hitzak indizatuko dira bilaketetarako.',
	'MIN_SEARCH_AUTHOR_CHARS'			=> 'Egile izenaren gutxienezko karaktere kopurua',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Autorearen bilaketa egiterakoan, erabiltzaileek karaktere kopuru hau sartu behar dute gutxienez komodinak erabiltzen badituzte. Egilearen erabiltzaile izena balore hau baino laburragoa baldin bada, erabiltzaile izena osoan jarrita egin zenezake bilaketa.',
	
	'PROGRESS_BAR'					=> 'Aurrera doa',
	
	'SEARCH_GUEST_INTERVAL'			=> 'Bilaketen arteko denbora tartea gonbidatuentzako',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Bilaketen artean gonbidatuek itxaron beharko duten segundu kopurua. Gonbidaturen batek bilaketaren bat egin badu, beste guztiek denbora tarte hori iraungi arte itxaron egin beharko dute.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'id %1$d(e)rainoko mezu guztiak indizatu egin dira, zeintzuetatik %2$d mezu pausu honetan egin dira. <br />Indarrean dagoen indizazio batezbestekoa %3$.1f mezu segundukoa da gutxigorabehera. <br />Indizatzen…',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'id %1$d (e)rainoko mezu guztiak ezabatu egin dira bilaketa indizetik.<br />Ezabatzen…',
	'SEARCH_INDEX_CREATED'			=> 'Foroaren datubaseko mezu guztiak zuzen indizatu egin dira.',
	'SEARCH_INDEX_REMOVED'			=> 'Motore honen bilaketa indizeak zuzen ezabatu egin dira.',
	'SEARCH_INTERVAL'				=> 'Bilaketen arteko denbora tartea erabiltzaileentzako',
	'SEARCH_INTERVAL_EXPLAIN'		=> 'Bilaketen artean erabiltzaileek itxaron beharko duten segundu kopurua. Denbora tarte hau apartekoa da erabilzaile bakoitzarentzako.',
	'SEARCH_STORE_RESULTS'			=> 'Bilaketen emaitzen katxearen iraupena',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Katxeatutako bilaketen emaitzek iraungi egiten dute segundutan emandako denbora tarte honen ostean. Balorea 0an jarriz bilaketen katxea ezgaitu egiten da.',
	'SEARCH_TYPE'					=> 'Motorea bilatu',
	'SEARCH_TYPE_EXPLAIN'			=> 'phpBB3k mezuetako testua bilatzeko erabili dezakezun motorea aukeratzen huzten dizu. Lehenetsitako motorea phpBBren testu osoko bilaketa motore propioa da.',
	'SWITCHED_SEARCH_BACKEND'		=> 'Bilaketa motorea aldatu duzu. Motore berria erabiltzeko, ziurta ezazu motore horrentzako baliogarria litzateken indizerik badagoela.',
	
	'TOTAL_WORDS'				=> 'Indizaturiko guztizko hitz kopurua',
	'TOTAL_MATCHES'				=> 'Mezuak erlazionatzeko indizaturiko guztizko hitz kopurua',
	
	'YES_SEARCH'				=> 'Bilaketa zerbitzuak gaitu',
	'YES_SEARCH_EXPLAIN'		=> 'Erabiltzaileak bilaketak egin ditzan (erabiltzaileen bilaketak barne) zerbitzua gaitzen du.',
	'YES_SEARCH_UPDATE'			=> 'Testu osoko eguneratzeak gaitu',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Testu osoko indizeen eguneratzeak gaitzen ditu. Bilaketa ezgaituta baldin badago baztertu egiten da.',
));

?>