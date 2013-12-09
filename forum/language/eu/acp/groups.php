<?php
/**
*
* acp_groups.php [Basque [eu]]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'Hemendik erabiltzaile taldeak kudeatu zenitzake. Dauden taldeak ezabatu, aldatu, berriak sortu, talde-erantzuleak (moderadoreak) aukeratu, taldeen egoera (irekia, itxita, ezkutua) zehaztu edo taldearen izena eta deskribapena ezarri zenezake.',
	'ADD_USERS'					=> 'Erabiltzaileak gehitu',
	'ADD_USERS_EXPLAIN'			=> 'Hemendik, taldeari erabiltzaile berriak gehi zeniezaioke. Aukeratutako erabiltzaileen talde lehenetsia izango den ere zehaztu zenezake. Gainera taldeko erantzuletzat ere aukeratu zenitzake. Mesedez, sar ezazu erabiltzaile bakoitza lerro berri batean.',
	
	'COPY_PERMISSIONS'			=> 'Honen baimenak kopiatu',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Behin sortu eta gero, talde berriak hemen aukeratutakoaren baimen berak izango ditu.',
	'CREATE_GROUP'				=> 'Talde berria sortu',
	
	'GROUPS_NO_MEMBERS'			=> 'Talde honek ez du kiderik',
	'GROUPS_NO_MODS'			=> 'Ez da talde erantzulerik zehaztu',
	
	'GROUP_APPROVE'				=> 'Kide bezala onartu',
	'GROUP_APPROVED'			=> 'Onartutako kideak',
	'GROUP_AVATAR'				=> 'Taldeko irudia',
	'GROUP_AVATAR_EXPLAIN'		=> 'Iudi hau Talde Kontrol Panelan erakutsiko da.',
	'GROUP_CLOSED'				=> 'Itxita ',
	'GROUP_COLOR'				=> 'Talde kolorea',
	'GROUP_COLOR_EXPLAIN'		=> 'Talde horren kideen izenak erakutsiko diren kolorea zehazten du. Hutsik utzi erabiltzaileen ezarpen lehenetsiak erabili ditzatela nahi balidn baduzu.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Ziur %1$s erabiltzailea taldera gehitu nahi duzula?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Ziur %1$s erabiltzaileak talder gehitu nahi dituzula?',
	'GROUP_CREATED'				=> 'Taldea zuzen sortu egin da.',
	'GROUP_DEFAULT'				=> 'Lehenetsitako taldea',
	'GROUP_DEFS_UPDATED'		=> 'Aukeratatuko erabiltzaileentzako ezarri den talde lehenetsia.',
	'GROUP_DELETE'				=> 'Taldeko kide bezala ezabatu',
	'GROUP_DELETED'				=> 'Taldea zuzen ezabatu egin da eta erabiltzaileen talde lehenetsiak zuzen ezarri egin dira.',
	'GROUP_DEMOTE'				=> 'Talde erantzulea apaldu',
	'GROUP_DESC'				=> 'Taldearen deskribapena',
	'GROUP_DETAILS'				=> 'Talde xehetasunak',
	'GROUP_EDIT_EXPLAIN'		=> 'Hemendik, dagoeneko baden taldea aldatu zenezake. Bere izena, deskribapena edo egoera (irekia, itxita, ezkutua) aldatu zenezake. Taldeari egokitutako aukera zabalagoak ere ezarri zenitzake: talde koloreak, maila, etb. Hemen egindako aldaketak erabiltzailearen baimenen gainetik jartzen dira. Mesedez, izan kontuan taldeko kideek ezingo dutela talde irudia aldatu eragiketa hori burutzeko dagozkien baimenak ezarri artean.',
	'GROUP_ERR_USERS_EXIST'		=> 'Zehaztutako erabiltzaileak badira dagoeneko talde honen kide.',
	'GROUP_FOUNDER_MANAGE'		=> 'Sortzaileak baino ez du kudeatzen',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Taldearen kudeaketa sortzaileetara mugatzen du. Talde-baimenak dituzeten edota taldeko kideak diren erabiltzaileek baino ezingo dute taldea ikusi.',
	'GROUP_HIDDEN'				=> 'Ezkutua',
	'GROUP_LANG'				=> 'Taldearen hizkuntza',
	'GROUP_LEAD'				=> 'Talde erantzulea',
	'GROUP_LEADERS_ADDED'		=> 'Talde erantzule berriak zuzen gehitu egin dira.',
	'GROUP_LEGEND'				=> 'Taldea izenburuan erakutsi',
	'GROUP_LIST'				=> 'Une honetako kideak',
	'GROUP_LIST_EXPLAIN'		=> 'Une honetan taldeko kide diren erabiltzaileen zerrenda osoa. Kideak ezabatu (talde berezi batzuetan izan ezik) edo berriak gehitu zenitzake.',
	'GROUP_MEMBERS'				=> 'Taldekideak',
	'GROUP_MEMBERS_EXPLAIN'		=> 'Erabiltzaile talde honen taldekide guztien zerrenda. Atal ezberdinak ditu erantzuleak, onarpenaren zain dauden kideak edo dagoeneko badirenak erakusteko. Hemendik, kidetza nor duen eta zeintzuk diren bere eginkizunak kudeatzeko aukera duzu. Taldeko erantzuleren bat kendu baina taldean mantentzeko, Talde erantzulea apaldu aukera (ezabatu baino) erabil dezazula gomendatzen dizugu. Alderantziz, kideren bat erantzule bihurtu nahi baldin baduzu Igo aukera erabil ezazu.',
	'GROUP_MESSAGE_LIMIT'		=> 'Gehienezko talde mezu pribatu karpetako',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ezarpen hau erabiltzailearen kapetako mezu mugaren gainetik jartzen da. Balorea 0an jartzen baldin bada lehenetsitako muga ezarriko da.',
	'GROUP_MODS_ADDED'		=> 'Talde erantzule berriak zuzen gehitu egin dira.',
	'GROUP_MODS_DEMOTED'	=> 'Talde erantzuleak zuzen apaldu egin dira.',
	'GROUP_MODS_PROMOTED'	=> 'Erabiltzaileak zuzen igon egin dira.',
	'GROUP_NAME'			=> 'Talde izena',
	'GROUP_NAME_TAKEN'				=> 'Badago sartutako izena erabiltzen dagoen talderik, mesedez besteren bat aukeratu.',
	'GROUP_OPEN'			=> 'Irekia',
	'GROUP_PENDING'			=> 'Erabiltzaileak onarpenaren zain',
	'GROUP_MAX_RECIPIENTS'			=> 'Gehienezko hartzaile kopurua mezu pribatuko.',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Mezu pribatu batean baimentzen den gehienezko hartzaile kopurua. Balorea 0an jartzen baldin bada foroak baimentzen duen gehienezkoa erabiliko da.',
	'GROUP_OPTIONS_SAVE'			=> 'Taldeen aukera orokorrak',
	'GROUP_PROMOTE'			=> 'Talde erantzulera igo',
	'GROUP_RANK'			=> 'Maila',
	'GROUP_RECEIVE_PM'		=> 'Taldeak mezu pribatuak jaso ditzake',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Mesedez, izan kontuan ezarpen hau gaituta izan arren talde ezkutuak ezin dutela mezu pribaturik jaso.',
	'GROUP_REQUEST'			=> 'Eskaera',
	'GROUP_SETTINGS_SAVE'	=> 'Taldearen konfigurazio orokorra',
	'GROUP_SKIP_AUTH'				=> 'Taldeko erantzulea baimenetatik baztertu',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Aukera hau gaituta baldin badago, erantzuleak ezin izango ditu taldearen baimenak gehiagotan oinordetzan hartu.',
	'GROUP_TYPE'			=> 'Talde mota',
	'GROUP_TYPE_EXPLAIN'	=> 'Honek taldea ikus dezaketen edo bertora kidetu daitezken erabiltzaileak zehazten ditu.',
	'GROUP_UPDATED'			=> 'Talde hobespenak zuzen eguneratu egin dira.',
	
	'GROUP_USERS_ADDED'		=> 'Kide berriak zuzen gehitu dira taldera.',
	'GROUP_USERS_EXIST'		=> 'Aukeratutako erabiltzaileak taldeko kideak dira dagoeneko.',
	'GROUP_USERS_REMOVE'	=> 'Erabiltzaileak zuzen ezabatu dira taldetik eta aukera lehenetsi berriak zuzen ezarri egin dira.',
	
	'MAKE_DEFAULT_FOR_ALL'	=> 'Lehenetsitako taldea bihurtu erabiltzaile guztientzako.',
	'MEMBERS'				=> 'Kideak',
	
	'NO_GROUP'				=> 'Ez da talderik zehaztu.',
	'NO_GROUPS_CREATED'		=> 'Oraindik ez da talderik sortu.',
	'NO_PERMISSIONS'		=> 'Ez kopiatu baimenik',
	'NO_USERS'				=> 'Ez duzu erabiltzailerik sartu.',
	'NO_USERS_ADDED'		=> 'Ez da erabiltzailerik gehitu taldera.',
	'NO_VALID_USERS'			=> 'Ez duzu eragiketa horretarako aukeragarria liteken erabiltzailerik sartu.',
	
	'SPECIAL_GROUPS'			=> 'Aurretik zehaztutako taldeak',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Aurretik zehaztutako taldeak talde bereziak dira. Ezin daitezke zuzenean aldatu edo ezabatu. Hala ere, erabiltzaileak gehitu zenizkieke edota oinarrizko ezarpenen batzuk aldatu. "Talde lehenetsia" botoian sakatuz, erabiltzaile guztien talde lehenetsitzat jarri zenezake.',
	
	'TOTAL_MEMBERS'				=> 'Taldekideak',
	
	'USERS_APPROVED'			=> 'Zuzen onarturiko erabiltzaileak.',
	'USER_DEFAULT'				=> 'Lehenetsia',
	'USER_DEF_GROUPS'			=> 'Erabiltzaileak zehaztutako taldeak',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'Zuk edo foroko beste administrariren batek sortutako taldeak dituzu hauek. Bertoko kidetzak zein ezarpenak kudeatu ditzakezu. "Talde lehenetsia" botoian sakatuz, erabiltzaile guztien talde lehenetsitzat jarri zenezake.',
	'USER_GROUP_DEFAULT'		=> 'Talde lehenetsia bezala ezarri',
	'USER_GROUP_DEFAULT_EXPLAIN'=> 'Honek talde lehenetsia bezala zehaztuko du erabiltzaile guztientzako.',
	'USER_GROUP_LEADER'			=> 'Talde erantzule bezala ezarri',
));

?>