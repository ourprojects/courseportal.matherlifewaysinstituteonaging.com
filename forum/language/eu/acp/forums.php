<?php
/** 
*
* acp_forums.php [Basque [eu]]
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Iraupena',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Gaiak mezu berririk gabe iraungo duen egun kopurua automatikoki ezabatua izan baino lehen.',
	'AUTO_PRUNE_FREQ'			=> 'Maiztasuna',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Auto-garbiketa batetik bestera igarotzen den egun kopurua.',
	'AUTO_PRUNE_VIEWED'			=> 'Iraungipen',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Gaiak bisita berririk gabe iraungo duen egun kopurua automatikoki ezabatua izan baino lehen.',

	'CONTINUE'						=> 'Jarraitu',
	'COPY_PERMISSIONS'				=> 'Baimenak nondik kopiatu',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Foro berriaren baimenen hobespenak erraztearren, dagoeneko esistitzen den beste fororen bateko baimenak kopiatu ditzakezu.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Behin foroa sortu eta gero, hemen aukeratutakoaren baimen berdinak izango ditu. Foroa ez da bistaratuko baimenak ezarri arte.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Baimenak kopiatzea aukeratzen baldin baduzu, foroak hemen aukeratutakoaren baimen berdinak izango ditu. Eragiketa honek aurretik ezarritako edozein baimenen gainean berridatziko ditu baimen berriak. Ez baldin baduzu fororik aukeratzen une honetako baimenak mantenduko dira.',
	'COPY_TO_ACL'					=> 'Aukeran, foro honentzako %sbaimen berriak hobestu%s egiteko aukera duzu.',
	'CREATE_FORUM'					=> 'Foro berria sortu',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Edukia ezabatu edota foroa mugitu',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Azpiforoak ezabatu edota forora mugitu',
	'DEFAULT_STYLE'					=> 'Lehenetsitako estiloa',
	'DELETE_ALL_POSTS'				=> 'Mezuak ezabatu',
	'DELETE_SUBFORUMS'				=> 'Azpiforoak eta mezuak ezabatu',
	'DISPLAY_ACTIVE_TOPICS'			=> 'Gai aktiboak erakutsi',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Aukera gaitzen baldin bada, aukeratutako azpiforoetako gai aktiboak erakutsiko ditu.',

	'EDIT_FORUM'					=> 'Foroa aldatu',
	'ENABLE_INDEXING'				=> 'Mezuak indexatu',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Aukera gaitzen baldin bada, foro honetako mezuak bilaketetarako indexatu egingo dira.',
	'ENABLE_POST_REVIEW'			=> 'Mezu berrikusketa gaitu',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Aukera gaitzen baldin bada, erabiltzaileek euren mezuak berrikusteko aukera izango dute idazten zeuden bitartean berririk bidali egin balitz. Txat foroetarako aukera ezgaitzea gomendatzen da.',
	'ENABLE_QUICK_REPLY'			=> 'Erantzun azkarra gaitu',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Erantzun azkarra aukera gaitzen du foro osoan. Hobespen hau ez da kontutan hartzen erantzun azkarra ezgaituta baldin badago foroan. Erantzun azkarra aukera, foro honetara mezuak bidaltzeko baimena duten erabiltzaileei baino ez zaie agertuko.',
	'ENABLE_RECENT'					=> 'Gai aktiboak erakutsi',
	'ENABLE_RECENT_EXPLAIN'			=> 'Aukera hau gaitzen baldin bada, foro honetako gaiak gai aktiboen zerrendan erakutsiko dira.',
	'ENABLE_TOPIC_ICONS'			=> 'Gai ikonoak gaitu',

	'FORUM_ADMIN'					=> 'Foro administrariak',
	'FORUM_ADMIN_EXPLAIN'			=> 'phpBB3n foroetan oinarritzen da dena. Kategoria bat foro berezi bat baino ez da. Foro bakoitzak hainbat azpiforo izan dezake eta hauetatik zeinetan idatzi daiteken aukera zenezake (honek lehengo maila edo kategoria bezala joka dezake). Hemendik norbanako foroak sortu, aldatu, ezabatu, itxi edo zabaldu ditzakezu eta kontrol gehigarriak ezarri. Mezuak edo gaiak zaharkitu egin baldin badira, foroa bersinkronizatu dezakezu.<strong> Sortutako foro berriei baimen egokiak ezarri edo kopiatu egin beharko dizkiezu bistaratu daitezen.</strong>',
	'FORUM_AUTO_PRUNE'				=> 'Auto-garbiketa gaitu',
	'FORUM_AUTO_PRUNE_EXPLAIN'		=> 'Foroaren gaiak garbitzen ditu. Ezarri itzazu behekaldean maiztazuna/iraupena.',
	'FORUM_CREATED'					=> 'Foroa zuzen sortu egin da.',
	'FORUM_DATA_NEGATIVE'			=> 'Garbiketa baloreak ezin daitezke ezezkoak izan.',
	'FORUM_DESC_TOO_LONG'			=> 'Foroko deskribapena luzeegia da. 4000 karaktere baion gitxiagoko luzera izan behar du.',
	'FORUM_DELETE'					=> 'Foroa ezabatu',
	'FORUM_DELETE_EXPLAIN'			=> 'Behekaldeko formularioak foroa ezabatzen uzten dizu. Forora mezuak bidali balitezke, barnean dituen gaiak (edo foroak) non sartu nahi dituzun aukeratu beharko duzu.',
	'FORUM_DELETED'					=> 'Foroa zuzen ezabatu egin da.',
	'FORUM_DESC'					=> 'Deskribapena',
	'FORUM_DESC_EXPLAIN'			=> 'Hemen sartutako edozin kode (HTML) den moduan agertuko da.',
	'FORUM_EDIT_EXPLAIN'			=> 'Behekaldeko formularioak foroa pertsonalizatzen uzten dizu. Mesedez, izan kontuan moderazioa "Foroaren baimenak" ataletik ezartzen direla erabiltzaile edo taldeentzako.',
	'FORUM_IMAGE'					=> 'Foroaren irudia',
	'FORUM_IMAGE_NO_EXIST'				=> 'Ez dago adierazitako foroaren irudirik',
	'FORUM_IMAGE_EXPLAIN'			=> 'Forora lotzen den irudi gehigarriaren root karpetan kokapena.',
	'FORUM_LINK_EXPLAIN'			=> 'Foroan klikatzerakoan erabiltzailea joango den guneko URL osoa (protokoloa barne, adbez. <samp>http://</samp>), adibidez: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'				=> 'Loturen berbideraketak jarraitu',
	'FORUM_LINK_TRACK_EXPLAIN'		=> 'Loturan zenbat biderrez klikatu den zenbatzen du.',
	'FORUM_NAME'					=> 'Foroaren izena',
	'FORUM_NAME_EMPTY'				=> 'Izena sartu behar duzu foro honentzako.',
	'FORUM_PARENT'					=> 'Sustrai foroa',
	'FORUM_PASSWORD'				=> 'Foroaren pasahitza',
	'FORUM_PASSWORD_CONFIRM'		=> 'Pasahitza baieztatu',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'=> 'Pasahitza sartzen baldin bada baino ez da beharrezkoa.',
	'FORUM_PASSWORD_EXPLAIN'		=> 'Fororako pasahitza ezartzen du. Baimen sistema erabiltzea gomendagarriagoa da.',
	'FORUM_PASSWORD_UNSET'				=> 'Foroaren pasahitza ezabatu',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Hemen aukeratu foroaren pasahitza ezabatu nahi baldin baduzu.',
	'FORUM_PASSWORD_OLD'				=> 'Foroaren pasahitzaren hash metodoa zaharkitua geratu da eta aldatzea gomendatzen da.',
	'FORUM_PASSWORD_MISMATCH'		=> 'Sartutako pasahitzek ez dute bat egiten.',
	'FORUM_PRUNE_SETTINGS'			=> 'Foro garbiketarako hobespenak',
	'FORUM_RESYNCED'				=> '"%1$s" foroa zuzen bersinkronizatu egin da.',
	'FORUM_RULES_EXPLAIN'			=> 'Foroaren arauak orri guztietan erakusten dira.',
	'FORUM_RULES_LINK'				=> 'Foroaren arauei lotura',
	'FORUM_RULES_LINK_EXPLAIN'		=> 'Foroaren arauak idatzita dauden orri/mezuko URL helbidea sar zenezake. Ezarpen honek foroaren arauetan idatzitako testuaren gainetik lehentasuna du.',
	'FORUM_RULES_PREVIEW'			=> 'Foroaren arauen aurre bista',
	'FORUM_RULES_TOO_LONG'			=> 'Foroko arauek 4000 karakteretako luzera baino gutxiago izan behar dute.',
	'FORUM_SETTINGS'				=> 'Foroaren konfigurazioa',
	'FORUM_STATUS'					=> 'Foroaren egoera',
	'FORUM_STYLE'					=> 'Foroaren estiloa',
	'FORUM_TOPICS_PAGE'				=> 'Gai orriko',
	'FORUM_TOPICS_PAGE_EXPLAIN'		=> 'Balore hau 0tik ezberdina baldin bada gai orriko lehenetsitako ezapenaren gainetik lehentasuna du.',
	'FORUM_TYPE'					=> 'Foro mota',
	'FORUM_UPDATED'					=> 'Foroaren konfigurazioa zuzen eguneratu egin da.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Mezuak bidali litezken foroa loturara bihurtu nahi duzu. Mesedez, atera itzazu barnean dituen azpiforo guztiak eragiketa burutu baino lehen, behin lotura bihurtuta ezin izango bait dituzu foro honetara lotutako azpiforoak ikusi eta.',

	'GENERAL_FORUM_SETTINGS'		=> 'Konfigurazio orokorra',

	'LINK'					=> 'Lotura',
	'LIST_INDEX'			=> 'Azpiforoen zerrenda',
	'LIST_INDEX_EXPLAIN'	=> 'Aukera hau gaitzen baldin bada, foroaren azpiforoak lotura bezala bistaratuko dira aurkibidean eta foroaren izena agertzen den orri guztietan "Azpiforoen zerrenda izenburuan" aukera ere gaituta baldin badago',
	'LIST_SUBFORUMS'			=> 'Azpiforoen zerrenda izenburuan',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Aukera hau gaitzen baldin bada, foroaren azpiforoak lotura bezala bistaratuko dira aurkibidean eta foroaren izena agertzen den orri guztietan "Azpiforoen zerrenda" aukera ere gaituta baldin badago',
	'LOCKED'				=> 'Itxita',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Aukeratutako forora ezin daiteke mezurik bidali. Mesedez, beste fororen bat aukera ezazu.',	
	'MOVE_POSTS_TO'					=> 'Mezuak hona mugitu',
	'MOVE_SUBFORUMS_TO'				=> 'Azpiforoak hona mugitu',

	'NO_DESTINATION_FORUM'			=> 'Ez duzu eduki mugitu daiteken helburu-fororik aukeratu.',
	'NO_FORUM_ACTION'				=> 'Ez duzu foroaren edukiarekin burutuko den eragiketarik zehaztu.',
	'NO_PARENT'						=> 'Sustrai-fororik gabe',
	'NO_PERMISSIONS'				=> 'Ez kopiatu baimenik',
	'NO_PERMISSION_FORUM_ADD'		=> 'Ez duzu foroak gehitzeko behar den baimena.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Ez duzu foroak ezabatzeko behar den baimena.',

	'PARENT_IS_LINK_FORUM'			=> 'Zehaztutako sustrai-foroa lotura bat da. Lotura foroek ezin dute azpifororik euki, mesedez, maila edo fororen bat aukeratu sustrai-forotzat.',
	'PARENT_NOT_EXIST'				=> 'Ez da existitzen sustrai-fororik.',
	'PRUNE_ANNOUNCEMENTS'			=> 'Iragarkiak garbitu',
	'PRUNE_STICKY'					=> 'Itsaskorrak garbitu',
	'PRUNE_OLD_POLLS'				=> 'Inkesta zaharkituak garbitu',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Aspalditik bozkarik jaso ez dituzten inkestak ezabatzen ditu.',

	'REDIRECT_ACL'					=> 'Une honetan foro honen %$baimenak ezartzeko%$s aukera duzu.',

	'SYNC_IN_PROGRESS'				=> 'Foroa bersinkronizatzen',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Une honetan gaien sorta bersinkronizatzen%1$d/%2$d.',

	'TYPE_CAT'		=> 'Maila',
	'TYPE_FORUM'	=> 'Foroa',
	'TYPE_LINK'		=> 'Lotura',

	'UNLOCKED'		=> 'Zabalik',
));

?>