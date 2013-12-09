<?php
/**
*
* acp_common.php [Basque [eu]]
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrariak',
	'ACP_ADMIN_LOGS'			=> 'Administrarien saioa',
	'ACP_ADMIN_ROLES'			=> 'Administrarien eginkizunak',
	'ACP_ATTACHMENTS'			=> 'Fitxategi erantsiak',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Fitxategi erantsien hobespenak',
	'ACP_AUTH_SETTINGS'			=> 'Egiaztatze',
	'ACP_AUTOMATION'			=> 'Automatizazioa',
	'ACP_AVATAR_SETTINGS'		=> 'Irudien hobespenak',

	'ACP_BACKUP'				=> 'Backupa',
	'ACP_BAN'					=> 'Debekuak',
	'ACP_BAN_EMAILS'			=> 'Emailak debekatu',
	'ACP_BAN_IPS'				=> 'IPak debekatu',
	'ACP_BAN_USERNAMES'			=> 'Erabiltzaileak debekatu',
	'ACP_BBCODES'				=> 'BBCodeak',
	'ACP_BOARD_CONFIGURATION'	=> 'Foroaren konfigurazioa',
	'ACP_BOARD_FEATURES'		=> 'Foroaren ezaugarriak',
	'ACP_BOARD_MANAGEMENT'		=> 'Foroaren kudeaketa',
	'ACP_BOARD_SETTINGS'		=> 'Foroaren hobespenak',
	'ACP_BOTS'					=> 'Spiderrrak/Errobotak',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Datubasea',
	'ACP_CAT_DOT_MODS'			=> '.MODak',
	'ACP_CAT_FORUMS'			=> 'Foroak',
	'ACP_CAT_GENERAL'			=> 'Orokorra',
	'ACP_CAT_MAINTENANCE'		=> 'Mantenimendua',
	'ACP_CAT_PERMISSIONS'		=> 'Baimenak',
	'ACP_CAT_POSTING'			=> 'Mezuak',
	'ACP_CAT_STYLES'			=> 'Estiloak',
	'ACP_CAT_SYSTEM'			=> 'Sistema',
	'ACP_CAT_USERGROUP'			=> 'Erabiltzaileak eta taldeak',
	'ACP_CAT_USERS'				=> 'Erabiltzaileak',
	'ACP_CLIENT_COMMUNICATION'	=> 'Bezero komunikazioa',
	'ACP_COOKIE_SETTINGS'		=> 'Cookien hobespenak',
	'ACP_CRITICAL_LOGS'			=> 'Erroreen erregistroa',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Eremu pertsonalizatuak',

	'ACP_DATABASE'				=> 'Datubasearen kudeaketa',
	'ACP_DISALLOW'				=> 'Ezgaitu',
	'ACP_DISALLOW_USERNAMES'	=> 'Erabiltzaile izenak ezgaitu',

	'ACP_EMAIL_SETTINGS'		=> 'Email hobespenak',
	'ACP_EXTENSION_GROUPS'		=> 'Luzapen taldeak',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Foroetan oinarritutako baimenak',
	'ACP_FORUM_LOGS'				=> 'Foroen erregistroa',
	'ACP_FORUM_MANAGEMENT'			=> 'Foroen kudeaketa',
	'ACP_FORUM_MODERATORS'			=> 'Foroen moderadoreak',
	'ACP_FORUM_PERMISSIONS'			=> 'Foroen baimenak',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Foroen baimenak kopiatu',
	'ACP_FORUM_ROLES'				=> 'Foroen eginkizunak',

	'ACP_GENERAL_CONFIGURATION'		=> 'Konfigurazio orokorra',
	'ACP_GENERAL_TASKS'				=> 'Ataza orokorrak',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadore orokorrak',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Baimen orokorrak',
	'ACP_GROUPS'					=> 'Taldeak',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Taldeen foro baimenak',
	'ACP_GROUPS_MANAGE'				=> 'Taldeak administratu',
	'ACP_GROUPS_MANAGEMENT'			=> 'Taldeen administrazioa',
	'ACP_GROUPS_PERMISSIONS'		=> 'Taldeen baimenak',

	'ACP_ICONS'						=> 'Gai ikonoak',
	'ACP_ICONS_SMILIES'				=> 'Gai ikono/irrifartxoak',
	'ACP_IMAGESETS'					=> 'Irudi galeria',
	'ACP_INACTIVE_USERS'			=> 'Jarduerarik gabeko erabiltzaileak',
	'ACP_INDEX'						=> 'Administrazio Kontrol Panelaren (ACP) Hasiera',

	'ACP_JABBER_SETTINGS'			=> 'Jabber hobespenak',

	'ACP_LANGUAGE'					=> 'Hizkuntzen kudeaketa',
	'ACP_LANGUAGE_PACKS'			=> 'Hizkuntz paekteak',
	'ACP_LOAD_SETTINGS'				=> 'Karga hobespenak',
	'ACP_LOGGING'					=> 'Saioa hasi',

	'ACP_MAIN'						=> 'Administrazio Kontrol Panelaren (ACP) Hasiera',
	'ACP_MANAGE_EXTENSIONS'			=> 'Luzapenak kudeatu',
	'ACP_MANAGE_FORUMS'				=> 'Foroak kudeatu',
	'ACP_MANAGE_RANKS'				=> 'Mailak kudeatu',
	'ACP_MANAGE_REASONS'			=> 'Berri-emateak/arrazoiak kudeatu',
	'ACP_MANAGE_USERS'				=> 'Erabiltzaileak kudeatu',
	'ACP_MASS_EMAIL'				=> 'Email masiboa',
	'ACP_MESSAGES'					=> 'Mezuak',
	'ACP_MESSAGE_SETTINGS'			=> 'Mezu pribatuen hobespenak',
	'ACP_MODULE_MANAGEMENT'			=> 'Moduluen kudeaketa',
	'ACP_MOD_LOGS'					=> 'Moderadoreen erregistroa',
	'ACP_MOD_ROLES'					=> 'Moderadoreen eginkizunak',
	'ACP_NO_ITEMS'					=> 'Oraindik ez da osagairik.',

	'ACP_ORPHAN_ATTACHMENTS'		=> 'Fitxategi erantsi umezurtzak',

	'ACP_PERMISSIONS'				=> 'Baimenak',
	'ACP_PERMISSION_MASKS'			=> 'Baimen maskarak',
	'ACP_PERMISSION_ROLES'			=> 'Eginkizunen baimenak',
	'ACP_PERMISSION_TRACE'			=> 'Baimenak jarraitu',
	'ACP_PHP_INFO'					=> 'PHP informazioa',
	'ACP_POST_SETTINGS'				=> 'Mezuen hobespenak',
	'ACP_PRUNE_FORUMS'				=> 'Foroak garbitu',
	'ACP_PRUNE_USERS'				=> 'Erabiltzaileak garbitu',
	'ACP_PRUNING'					=> 'Garbiketa',

	'ACP_QUICK_ACCESS'				=> 'Sarrera azkarra',

	'ACP_RANKS'						=> 'Mailak',
	'ACP_REASONS'					=> 'Arrazoiak',
	'ACP_REGISTER_SETTINGS'			=> 'Erabiltzaileen izen-ematearen hobespenak',

	'ACP_RESTORE'					=> 'Berrezarri',
	
	'ACP_FEED'					=> 'Jarioen kudeaketa',
	'ACP_FEED_SETTINGS'			=> 'Jarioen hobespenak',
	
	'ACP_SEARCH'					=> 'Bilatzailearen konfigurazioa',
	'ACP_SEARCH_INDEX'				=> 'Bilaketa aurkibidea',
	'ACP_SEARCH_SETTINGS'			=> 'Bilaketaren hobespenak',

	'ACP_SECURITY_SETTINGS'			=> 'Segurtasunaren hobespenak',
	'ACP_SEND_STATISTICS'		=> 'Estatistikak bidali',
	'ACP_SERVER_CONFIGURATION'		=> 'Zerbitzariaren konfigurazioa',
	'ACP_SERVER_SETTINGS'			=> 'Zerbitzariaren hobespenak',
	'ACP_SIGNATURE_SETTINGS'		=> 'Sinaduraren hobespenak',
	'ACP_SMILIES'					=> 'Irrifartxoak',
	'ACP_STYLE_COMPONENTS'			=> 'Estiloen osagaiak',
	'ACP_STYLE_MANAGEMENT'			=> 'Estiloen kudeaketa',
	'ACP_STYLES'					=> 'Estiloak',

		'ACP_SUBMIT_CHANGES'		=> 'Aldaketak ezarri',
		
	'ACP_TEMPLATES'					=> 'Txantilloiak',
	'ACP_THEMES'					=> 'Themeak',

	'ACP_UPDATE'					=> 'Eguneratzea',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Erabiltzailearen foro baimenak',
	'ACP_USERS_LOGS'				=> 'Erabiltzailearen izen-emateak',
	'ACP_USERS_PERMISSIONS'			=> 'Erabiltzaile baimenak',
	'ACP_USER_ATTACH'				=> 'Fitxategi erantsiak',
	'ACP_USER_AVATAR'				=> 'Irudia',
	'ACP_USER_FEEDBACK'				=> 'Feedbacka',
	'ACP_USER_GROUPS'				=> 'Taldeak',
	'ACP_USER_MANAGEMENT'			=> 'Erabiltzaileen kudeaketa',
	'ACP_USER_OVERVIEW'				=> 'Bista orokorra',
	'ACP_USER_PERM'					=> 'Baimenak',
	'ACP_USER_PREFS'				=> 'Hobespenak',
	'ACP_USER_PROFILE'				=> 'Profila',
	'ACP_USER_RANK'					=> 'Maila',
	'ACP_USER_ROLES'				=> 'Erabiltzaile eginkizunak',
	'ACP_USER_SECURITY'				=> 'Erabiltzaile segurtasuna',
	'ACP_USER_SIG'					=> 'Sinadura',
	'ACP_USER_WARNINGS'				=> 'Abisuak',
	
	'ACP_VC_SETTINGS'					=> 'Spamboten aurkako neurriak',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA irudiaren aurrebista',
	'ACP_VERSION_CHECK'					=> 'Eguneratzeen bila aztertu',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Administrarien baimenak ikusi',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Moderadoreen baimenak ikusi',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Foroen baimenak ikusi',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Moderadore orokorren baimenak ikusi',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Erabiltzaileen baimenak ikusi',

	'ACP_WORDS'		=> 'Gaitzetsitako hitzak',

	'ACTION'		=> 'Eragiketa',
	'ACTIONS'		=> 'Eragiketak',
	'ACTIVATE'		=> 'Gaitu',
	'ADD'			=> 'Gehitu',
	'ADMIN'			=> 'Administrazioa',
	'ADMIN_INDEX'	=> 'Admin aurkibidea',
	'ADMIN_PANEL'	=> 'Administrazio Kontrol Panela (ACP)',

	'ADM_LOGOUT'			=> 'ACP saioa bukatu',
	'ADM_LOGGED_OUT'		=> 'Administrazio Kontrol Paneleko (ACP) saioa zuzen bukatu egin duzu.',

	'BACK'			=> 'Itzuli',

	'COLOUR_SWATCH'		=> 'Web kolore paleta',
	'CONFIG_UPDATED'	=> 'Konfigurazioa zuzen eguneratu egin da.',

	'DEACTIVATE'				=> 'Ezgaitu',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Zehaztutako "%s" bidea ez da existitzen.',
	'DIRECTORY_NOT_DIR'			=> 'Zehaztutako "%s" bidea ez da karpeta bat.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Zehaztutako "%s" bidean ezin daiteke idatzi. ',
	'DISABLE'					=> 'Ezgaitu',
	'DOWNLOAD'					=> 'Deskargatu',
	'DOWNLOAD_AS'				=> 'Honela deskargatu',
	'DOWNLOAD_STORE'			=> 'Fitxategia deskargatu edo gorde',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Fitxategia zuzenean deskarga zenezake edo zure <samp>store/</samp> karpetan gorde.',

	'EDIT'						=> 'Aldatu',
	'ENABLE'					=> 'Gaitu',
	'EXPORT_DOWNLOAD'			=> 'Deskargatu',
	'EXPORT_STORE'				=> 'Gorde',

	'GENERAL_OPTIONS'			=> 'Aukera orokorrak',
	'GENERAL_SETTINGS'			=> 'Konfigurazio orokorra',
	'GLOBAL_MASK'				=> 'Baimen orokorren maskara',

	'INSTALL'					=> 'Instalatu',
	'IP'						=> 'Erabiltzailearen IPa',
	'IP_HOSTNAME'				=> 'IP helbideak edo hostnameak',

	'LOGGED_IN_AS'				=> 'Saioa honela hasi duzu:',
	'LOGIN_ADMIN'				=> 'Foroa kudeatzeko egiaztatutako erabiltzailea izan behar duzu.',
	'LOGIN_ADMIN_CONFIRM'		=> 'Foroa kudeatzeko pasahitza sartu behar duzu berriro.',
	'LOGIN_ADMIN_SUCCESS'		=> 'Zuzen egiaztatu egin zara eta Administrazio Kontrol Panelera (ACP) bidaliko zaizu.',
	'LOOK_UP_FORUM'				=> 'Foroa aukeratu',
	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Foro bat baino gehiago aukeratu zenezake.',

	'MANAGE'					=> 'Kudeatu',
	'MENU_TOGGLE'				=> 'Alboko menua gorde/erakutsi',
	'MORE'					=> 'Gehiago',			// Oraindik ez da erabiltzen
	'MORE_INFORMATION'		=> 'Informazio gehiago »',
	'MOVE_DOWN'					=> 'Jeitsi',
	'MOVE_UP'					=> 'Igon',

	'NOTIFY'					=> 'Ohartarazpena',
	'NO_ADMIN'					=> 'Ez duzu foro hau kudeatzeko baimenik.',
	'NO_EMAILS_DEFINED'			=> 'Ez da baliozko email helbiderik aurkitu.',
	'NO_PASSWORD_SUPPLIED'		=> 'Pasahitza sartu behar duzu Administrazio Kontrol Panelera (ACP) joateko.',	

	'OFF'	=> 'Off',
	'ON'	=> 'On',

	'PARSE_BBCODE'				=> 'BBCode onartu',
	'PARSE_SMILIES'				=> 'Irrifartxoak (emotikonoak) onartu',
	'PARSE_URLS'				=> 'Loturak onartu',
	'PERMISSIONS_TRANSFERRED'	=> 'Baimen transferituak',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Orain %1$s(e)ren baimenak dituzu. Forotik baimen hauekin nabiga zenezake baina ezin duzu Administrazio Kontrol Panelera sartu ez bait zaizkizu kudeatze baimenik transferitu eta. Zure <a href="%2$s"><strong>lehengo baimen ezarpenetara itzuli</strong></a> zintezke nahi duzunean.',
	'PROCEED_TO_ACP'	=> '%sAdministrazio Kontrol Panelera(ACP) joan%s',

	'REMIND'	=> 'Gogoratu',
	'RESYNC'	=> 'Bersinkronizatu',
	'RETURN_TO'	=> 'Hona itzuli',

	'SELECT_ANONYMOUS'	=> 'Erabiltzaile anonimoa aukeratu',
	'SELECT_OPTION'		=> 'Aukera aukeratu',
	'SETTING_TOO_LOW'      => '“%1$s” ezarpenerako sartutako balorea txikiegia da. Baimendutako gutxienezko balorea %2$d(e)koa da.',
   'SETTING_TOO_BIG'      => '“%1$s” ezarpenerako sartutako balorea handiegia da. Baimendutako gehienezko balorea %2$d(e)koa da',
   'SETTING_TOO_LONG'      => '“%1$s” ezarpenerako sartutako balorea luzeegia da. Baimendutako gehienezko luzera %2$d(e)koa da',
   'SETTING_TOO_SHORT'      => '“%1$s” ezarpenerako sartutako balorea laburregia da. Baimendutako gutxienezko luzera %2$d(e)koa da',

	'SHOW_ALL_OPERATIONS'	=> 'Eragiketa guztiak erakutsi',
	
	'UCP'				=> 'Erabiltzaile Kontrol Panela',
	'USERNAMES_EXPLAIN'		=> 'Erabiltzaile izen bakoitza lerro ezberdin batean jarri.',
	'USER_CONTROL_PANEL'	=> 'Erabiltzaile Kontrol Panela',

	'WARNING'	=> 'Ohartarazpena',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Zerbitzariko PHP bertsioari buruzko informazioa ematen du orri honek. Kargaturiko moduluen, aldagai erabilgarrien eta lehenetsitako ezarpenen xehetasunak aurkituko dituzu hemen. Informazio hau baliagarria izan liteke arazoen konponbideak ondorioztatzeko. Mesedez, izan kontuan hostalaritza enpresa batzuek erakusten den informazio hau mugatu egin dezaketela segurtasun arrazoiak direla eta. Ez zenuke orri honetako xehetasunik eman behar Euskarri Foroko <a href="http://www.phpbb.com/about/">talde ofizialeko erabiltzaileek</a> eskatzen dizutenean salbu.',

	'NO_PHPINFO_AVAILABLE'	=> 'Ezin daiteke zure PHP konfigurazioa zehaztu. Phpinfo () ezgaitu egin da segurtasun arrazoiekaitik.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Zerrenda honek foroko administrariek buruturiko eragiketa guztiak aurkezten dizkizu. Erabiltzaile izenagaitik, datagaitik, IPagaitik edo eragiketa motagaitik antolatu zenezake. Baimen egokiak izanez, eragiketa jakinak edota zerrenda osoa ere ezabatu zenezake.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Zerrenda honek foroak berak buruturiko eragiketak aurkezten dizkizu. Informazio hau erabilgarria gerta liteke arazo espezifikoak konpontzeko, adibidez, zuzen bialdu ez diren emailak. Erabiltzaile izenagaitik, datagaitik, IPagaitik edo eragiketa motagaitik antolatu zenezake. Baimen egokiak izanez, eragiketa jakinak edota zerrenda osoa ere ezabatu zenezake.',
	'ACP_MOD_LOGS_EXPLAIN'	=> 'Zerrenda honek foroko moderadoreek buruturiko eragiketa guztiak aurkezten dizkizu. Foroetan, gaietan eta mezuetan zein erabiltzaileengan eginiko eragiketak (debekuak barne). Erabiltzaile izenagaitik, datagaitik, IPagaitik edo eragiketa motagaitik antolatu zenezake. Baimen egokiak izanez, eragiketa jakinak edota zerrenda osoa ere ezabatu zenezake.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Erabiltzaileekaitik/-engan buruturiko eragiketen zerrenda (berri-emateak, ohartarazpenak eta oharrak).',
	'ALL_ENTRIES'	=> 'Sarrera guztiak',

	'DISPLAY_LOG'	=> 'Aurreko sarrerak erakutsi',

	'NO_ENTRIES'	=> 'Ez da sarrerarik denbora tarte honetan',

	'SORT_IP'		=> 'IP helbideagaitik',
	'SORT_DATE'		=> 'Datagaitik',
	'SORT_ACTION'	=> 'Eragiketagaitik',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Eskerrik asko phpBB aukeratzeagatik. Orri honetan zure foroko bista orokorra emango dizuten hainbat estatistika aurkituko dituzu. Ezkerraldeko loturek foroa kontrolatzen lagunduko dizute. Orri bakoitzan lanabesak nola erabili behar diren argituko dizuten jarraibideak aurkituko dituzu.',
	'ADMIN_LOG'					=> 'Administrarien mugimenduak',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Foroko administrariek eginiko azken bost mugimenduen bista orokorra. Mugimenduen erregistro osoa menuan dagokion aukeran edo behekaldean agertzen den loturan ikus zenezake.',
	'AVATAR_DIR_SIZE'			=> 'Irudi karpetaren tamaina',

	'BOARD_STARTED'		=> 'Foroa zabalik',
	'BOARD_VERSION'		=> 'Foro bertsioa',

	'DATABASE_SERVER_INFO'	=> 'Datubasearen zerbitzaria',
	'DATABASE_SIZE'			=> 'Datubasearen tamaina',
	
	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Funtzioen gainkarga ez dago behar bezala taxututa',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> 0ra edo 4ra ezarri behar duzu. Orain ezarrita dagoen balorea <samp>PHP informazioa</samp> orrian egiaztatu.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Karaktere gardenen (Transparent) kodetzea ez dago behar bezala taxututa',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> 0n ezarri behar duzu. Orain ezarrita dagoen balorea <samp>PHP informazioa</samp> orrian egiaztatu.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP karaktere sarreraren bihurtzea ez dago behar bezela taxututa',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> <samp>pass</samp>ean ezarri behar duzu. Orain ezarrita dagoen balorea <samp>PHP informazioa</samp> orrian egiaztatu.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP karaktere irteeraren bihurtzea ez dago behar bezala taxututa',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> <samp>pass</samp>ean ezarri behar duzu. Orain ezarrita dagoen balorea <samp>PHP informazioa</samp> orrian egiaztatu.',
	'FILES_PER_DAY'	=> 'Fitxategi erantsiak eguneko',
	'FORUM_STATS'	=> 'Foro estatistikak',

	'GZIP_COMPRESSION'	=> 'GZip konprimatzea',

	'NOT_AVAILABLE'	=> 'Ez erabilgarria',
	'NUMBER_FILES'	=> 'Fitxategi erantsi kopurua',
	'NUMBER_POSTS'	=> 'Mezu kopurua',
	'NUMBER_TOPICS'	=> 'Gai kopurua',
	'NUMBER_USERS'	=> 'Erabiltzaile kopurua',
	'NUMBER_ORPHAN'	=> 'Fitxategi erantsi umezurtz',

		'PHP_VERSION_OLD'	=> 'Zerbitzari honetan erabiltzen den PHP bertsioa ez da phpBBko hurrengo bertsiotan eutsiko. %sXehetasunak%s',
		
	'POSTS_PER_DAY'	=> 'Mezu eguneko',

	'PURGE_CACHE'			=> 'Katxea garbitu',
	'PURGE_CACHE_CONFIRM'	=> 'Ziur katxea garbitu nahi duzula?',
	'PURGE_CACHE_EXPLAIN'	=> 'Katxarekin erlazionaturiko osagai guztiak garbitu, katxean egon liteken edozein galdeketa txantilloi barne.',

	'PURGE_SESSIONS'			=> 'Sesio guztiak garbitu',
	'PURGE_SESSIONS_CONFIRM'	=> 'Ziur sesio guztiak garbitu nahi dituzula? Erabiltzaile guztien sesioak etengo dituzu honekin.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Sesioen taula moztu eta erabiltzaile guztien konexioak etengo ditu.',
	
	'RESET_DATE'					=> 'Foro zabaltze data berrabiarazi',
	'RESET_DATE_CONFIRM'			=> 'Ziur foroaren zabaltze data berrabiarazi nahi duzula?',
	'RESET_ONLINE'					=> 'Konektaturiko erabiltzaile gehienen zenbakia berrabiarazi',
	'RESET_ONLINE_CONFIRM'			=> 'Ziur konektaturiko erabiltzaile gehienen zenbakia berrabiarazi nahi duzula?',
	'RESYNC_POSTCOUNTS'				=> 'Mezuen zenbaketak bersinkronizatu',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Existitzen diren mezuan baino ez dira zenbatuko, ez da kontutan hartuko garbitutako mezurik.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Ziur mezu zenbaketa bersinkronizatu nahi duzula?',
	'RESYNC_POST_MARKING'			=> 'Markatutako gaiak bersinkronizatu',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Ziur markatutako gai guztiak bersinkronizatu nahi dituzula?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Lehengo gai guztiei kentzen die marka eta gero, azken sei hilabeteotan jarduerarik euki duten gaiak baino ez ditu markatzen.',
	'RESYNC_STATS'					=> 'Estatistikak bersinkronizatu',
	'RESYNC_STATS_CONFIRM'			=> 'Ziur estatistikak bersinkronizatu nahi dituzula?',
	'RESYNC_STATS_EXPLAIN'			=> 'Mezu, gai, erabiltzaile eta fitxategien kontuak ateratzen ditu berriro.',
	'RUN'							=> 'Orain egin',

	'STATISTIC'					=> 'Estatistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Estatistikak bersinkronizatu edo berrabiarazi',

	'TOPICS_PER_DAY'			=> 'Gai eguneko',

	'UPLOAD_DIR_SIZE'			=> 'Fitxategi erantsien karpetaren tamaina',
	'USERS_PER_DAY'				=> 'Erabiltzaile eguneko',

	'VALUE'					=> 'Balorea',
	'VERSIONCHECK_FAIL'			=> 'Azkenengo bertsioaren informazioa lortzerakoan huts egin du.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Bertsioa berriro egiaztatu',
	'VIEW_ADMIN_LOG'		=> 'Administrarien saioa ikusi',
	'VIEW_INACTIVE_USERS'	=> 'Jarduerarik gabeko erabiltzaileak ikusi',

	'WELCOME_PHPBB'			=> 'Ongietorria phpBBra',
	'WRITABLE_CONFIG'		=> 'Une honetan edonork idatz lezake zure konfigurazio fitxategiak (config.php). Biziki gomendatzen dizugu baimenak 640ra edo, gutxienez, 644ra alda ditzazula (Adibidez: <a href="http://es.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Jarduerarik gabe noiztik',
	'INACTIVE_REASON'				=> 'Arrazoia',
	'INACTIVE_REASON_MANUAL'		=> 'Administrariek ezgaitutako kontua',
	'INACTIVE_REASON_PROFILE'		=> 'Aldatutako profil datuak',
	'INACTIVE_REASON_REGISTER'		=> 'Oraintsu izen emandako kontua',
	'INACTIVE_REASON_REMIND'		=> 'Kontua gaitzea gogorarazi',
	'INACTIVE_REASON_UNKNOWN'		=> 'Ezezaguna',
	'INACTIVE_USERS'				=> 'Jarduerarik gabeko erabiltzaileak',
	'INACTIVE_USERS_EXPLAIN'		=> 'Izena emandako baina jarduerarik gabeko erabiltzaile kontuen zerrenda duzu hau. Kontuak gaitu, ezabatu edo gogorarazi (email baten bidez) egin zenitzake.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Izena eman duten baina jarduerarik erakutsi ez duten azken 10 erabiltzaileen zerrenda duzu hau. Erabiltzaileen kontu hauek jarduerarik gabe agertu daitezke bai kontua gaitzea eskatzen delako izena ematerakoan eta erabiltzaileok ez dutelako gaitu, bai kontuak ezgaitu egin direlako. Zerrenda osoa ikusteko, dagokion menu aukeran edo behekaldean agertzen den loturan klikatu. Bertotik kontuak gaitu, ezabatu edo (email baten bidez) gogorarazi egin zenitzake.',

	'NO_INACTIVE_USERS'	=> 'Ez da jarduerarik gabeko erabiltzailerik',

	'SORT_INACTIVE'		=> 'Jarduerarik gabe',
	'SORT_LAST_VISIT'	=> 'Azken bisita',
	'SORT_REASON'		=> 'Arrazoia',
	'SORT_REG_DATE'		=> 'Izen-emate data',
	'SORT_LAST_REMINDER'=> 'Azkenengoz gogorazita',
	'SORT_REMINDER'		=> 'Gogorazpena bidalita',

	'USER_IS_INACTIVE'	=> 'Jarduerarik gabeko erabiltzailea',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Zure zerbitzaria eta foroari buruzko informazio bidali estatistika kontuetarako, mesedez. Zu edo zeure gunea identifikatu dezaken edozein informazio kendu egin da eta datuak era guztiz <strong>anonimoan</strong> jasotzen dira. Informazio honek phpBBren hurrengo bertsioetarako erabakiak hartzeko balio digu. Estatistikak edonorentzat eskuragarri daude. Datu hauek PHP proiektuarekin (phpBB ahalbidetzen duen programazio lengoaia) partekatzen ditugu.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Beheko botoia erabiliz, bidaliko diren aldagai guztien aurrebista izango duzu.',
	'DONT_SEND_STATISTICS'		=> 'ACPra (Administrazio Kontrol Panelera) itzuli ez baldin baduzu phpBBra informazio estatistikoak bidali nahi.',
	'GO_ACP_MAIN'				=> 'ACPko hasiera orrira joan',
	'HIDE_STATISTICS'			=> 'Xehetasunak ezkutatu',
	'SEND_STATISTICS'			=> 'Informazio estatistikoa bidali',
	'SHOW_STATISTICS'			=> 'Xehetasunak erakutsi',
	'THANKS_SEND_STATISTICS'	=> 'Eskerrik asko informazioa bidaltzeagatik.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'	=> '<strong>Erabiltzailearen baimenak aldatu edo gehitu egin dira</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'	=> '<strong>Erabiltzaile taldearen baimenak aldatu edo gehitu egin dira</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'	=> '<strong>Moderadore orokorraren baimenak aldatu edo gehitu egin dira</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'	=> '<strong>Moderadore orokorren taldearen baimenak aldatu edo gehitu egin dira</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'	=> '<strong>Administrariaren baimenak aldatu edo gehitu egin dira</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'	=> '<strong>Administrari taldearen baimenak aldatu edo gehitu egin dira</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'	=> '<strong>Administrariak aldatu edo gehitu egin dira</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'		=> '<strong>Moderadore orokorrak aldatu edo gehitu egin dira</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'		=> '<strong>Erabiltzaileen forora sarrera aldatu edo gehitu egin da</strong> %1$s(e)tik<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'		=> '<strong>Moderadoreen forora sarrera aldatu edo gehitu egin da</strong> %1$s(e)tik<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'	=> '<strong>Erabiltzaile taldeen forora sarrera aldatu edo gehitu egin da</strong> %1$s(e)tik<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'	=> '<strong>Moderadore taldeen forora sarrera aldatu edo gehitu egin da</strong> %1$s(e)tik<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'		=> '<strong>Moderadoreak aldatu edo gehitu egin dira</strong> %1$s(e)tik<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'	=> '<strong>Foro baimenak aldatu edo gehitu egin dira</strong> %1$s(e)tik<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'	=> '<strong>Ezabatua Administrariak</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'		=> '<strong>Ezabatua Moderadore Orokorrak</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'		=> '<strong>Ezabatua Moderadoreak</strong> %1$s(e)tik<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'	=> '<strong>Ezabatua Erabiltzaile/Talde foro baimenak</strong> %1$s(e)tik<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'	=> '<strong>Baimenak honegandik transferita</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'	=> '<strong>Baimenak berezarri egin dira beste honenak erabili eta gero</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Administraria egiaztatzerakoan errorea</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Administraria zuzen egiaztatu da</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Erabiltzailearen fitxategi erantsi ezabatuak</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Fitxategi erantsien luzapenak aldatu edo gehitu egin dira</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Ezabatua Fitxategi erantsien luzapena</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Eguneratua Fitxategi erantsien luzapena</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Gehitua Luzapen taldea</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Aldatua Luzapen taldea</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Ezabatua Luzapen taldea</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Fitxategi umezurtza mezu honetara gehitua</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Ezabatuak Fitxategi umezurtzak</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Debekua jaso zaion erabiltzailea</strong> arrazoi honegatik "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Debekua jaso zaion IPa</strong> arrazoi honegatik "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>Debekua jaso zaion email helbidea</strong> arrazoi honegatik "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Debekatua erabiltzailea</strong> arrazoi honegatik "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Debekatua IPa</strong> arrazoi honegatik "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Debekatua email helbidea</strong> arrazoi honegatik "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Debekua jasotako erabiltzailea</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Debekua jasotako IPa</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Debekua jasotako email helbidea</strong><br />» %s',

	'LOG_BBCODE_ADD'	=> '<strong>Gehituta BBCode berria</strong><br />» %s',
	'LOG_BBCODE_EDIT'	=> '<strong>Aldatuta BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'	=> '<strong>Ezabatuta BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Gehituta bot berria</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Ezabatutako bota</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Eguneratuta dagoen bota</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Garbituta Admin erregistroa</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Garbituta errore erregistroa</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Garbituta moderadore erregistroa</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Garbituta erabiltzaile erregistroa</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Garbituta erabiltzaileen erregistroa</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Aldatuta fitxategi erantsien konfigurazioa</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Aldatua egiaztatze konfigurazioa</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Aldatuta irudien konfigurazioa</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Aldatuta cookie konfigurazioa</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Aldatuta email konfigurazioa</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Aldatuta foro ezaugarriak</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Aldatuta karga konfigurazioa</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Aldatuta mezu pribatuen konfigurazioa</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Aldatuta mezuen konfigurazioa</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Aldatuta erabiltzaileen izen-emate konfigurazioa</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Sindikazio jarioen hobespenak aldatuta</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Aldatuta bilaketen konfigurazioa</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Aldatuta segurtasun konfigurazia</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Aldatuta zerbitzariaren konfigurazioa</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Aldatuta foro konfigurazioa</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Aldatuta sinadura konfigurazioa</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Anti-spambot hobespenak aldatuta </strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Onartutako gaia</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Gaia sustatu duen erabiltzaileak</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>“%1$s” mezua ezabatua</strong><br />» %2$s(e)k idatzia',

	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Ezabatua gai ilundua</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>“%1$s” gaia ezabatua</strong><br />» %2$s(e)k idatzia',
	'LOG_FORK'					=> '<strong>Kopiatua gaia</strong><br />» %s(e)tik',
	'LOG_LOCK'					=> '<strong>Itxita gaia</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Itxita mezua</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Bateratuak mezuak</strong> gai honetara<br />» %s',
	'LOG_MOVE'					=> '<strong>Mugituta gaia</strong><br />» %1$s(e)tik %2$s(e)ra',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Itxita MP honi buruzko txostena</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Ezabatuta MP honi buruzko txostena</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Onartuta gaiak</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Onartu gabe "%1$s" mezua arrazoi honegatik</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Aldatutako mezua "%1$s" honek idatzia</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Itxita berri-ematea</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Ezabatuta berri-ematea</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Mugituta banandutako mezuak</strong><br />» $s(e)ra',
	'LOG_SPLIT_SOURCE'			=> '<strong>Bananduta mezuak</strong><br />» $s(e)tik',

	'LOG_TOPIC_APPROVED'		=> '<strong>Onartu gabeko gaia</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Onartu gabe “%1$s” gaia arrazoi honegatik</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Bersinkronizatuak gai zenbatzaileak</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Aldatuta gai mota</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Zabalduta gaia</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Zabalduta mezua</strong><br />» %s',

	'LOG_DISALLOW_ADD'			=> '<strong>Gehituta baimenik gabeko erabiltzaile izena</strong><br />» %s',
	'LOG_DISALLOW_DELETE'		=> '<strong>Ezabatua baimenik gabeko erabiltzaile izena</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Datubasearen backupa (segurtasun kopia)</strong>',
	'LOG_DB_DELETE'			=> '<strong>Ezabatua datubasearen backupa (segurtasun kopia)</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Berrezarrita datubasearen backupa (segurtasun kopia)</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Baztertutako IPa/hostnamea deskarga zerrendatik</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Gehitutako IPa/hostnamea deskarga zerrendatik</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Ezabatutako IPa/hostnamea deskarga zerrendatik</strong><br />» %s',

	'LOG_ERROR_JABBER'			=> '<strong> Jabber errorea</strong><br />» %s',
	'LOG_ERROR_EMAIL'			=> '<strong>Email errorea</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Sortutako foro berria</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Kopiatutako foro baimenak </strong> %1$s(e)tik<br />» %2$s(e)ra',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Ezabatutako foroa</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Ezabatutako foro eta azpiforoak</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Ezabatutako foroa eta mugituta azpiforoak</strong> %1$s(e)tik<br />» %2$s(e)ra',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Ezabatuta foroa eta mugituta mezuak </strong> %1$s(e)ra<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Ezabatutako foroa eta azpiforoak, mugituta mezuak</strong> %1$s(e)ra<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Ezabatutako foroa, mugituta mezuak </strong> %1$s(e)tik <strong>eta azpiforoak</strong> %2$s(e)ra<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Ezabatutako foroa eta mezuak</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Ezabatutako foroa, azpiforoak eta mezuak</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Ezabatutako foroa eta mezuak, mugituta azpiforoak</strong> %1$s(e)tik<br />» %2$s(e)ra',
	'LOG_FORUM_EDIT'						=> '<strong>Aldatutako foro xehetasunak</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Mugituta foroa</strong> %1$s(e)tik <strong>behera</strong> %2$s(e)ra',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Mugituta foroa</strong> %1$s(e)tik <strong>gora</strong> %2$s(e)ra',
	'LOG_FORUM_SYNC'						=> '<strong>Bersinkronizatutako foroa</strong><br />» %$s',

		'LOG_GENERAL_ERROR'	=> '<strong>Arazi orokor bat gartatu da</strong>: %1$s <br />» %2$s',
	
	'LOG_GROUP_CREATED'		=> '<strong>Sortua erabiltzaile talde berria</strong><br />» %$s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>“%1$s” taldeak lehenetsitako taldea</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Ezabatuta erabiltzaile taldea</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Apaldutako talde eranzuleak</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Goratutako erabiltzaileak talde erantzule izateko</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Taldetik ezabatutako erabiltzaileak</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Eguneratuta erabiltzaile taldeko xehetasunak</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Gehituta erabiltzaile taldeko erantzulea</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Gehitutako erabiltzaile berriak taldera</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Taldean onartutako erabiltzaileak</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>“%1$s” taldera sartzeko eta baieztapena behar duten erabiltzaileak</strong><br />» %2$s'

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Irudia sortzerakoan errorea</strong><br />» %1$s(e)an errorea, %2$s. linean: %3$s',
	
	'LOG_IMAGESET_ADD_DB'			=> '<strong>Gehituta irudi galeri berria datu basera</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Gehituta irudi galeri berria fitxategi sistemara</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Ezabatuta irudi galeria</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Aldatuta irudi galerio xehetasunak</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Aldatuta irudi galeria</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Esportatuta irudi galeria</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Galduta irudi bildumaren “%2$s” kokapena</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Eguneratua irudi bildumaren “%2$s” kokapena</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Eguneratua irudi galeria</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'			=> '<strong>Gaituta jarduerarik gabeko erabiltzaileak</strong><br />» %s',
	'LOG_INACTIVE_DELETE'			=> '<strong>Ezabatuta jarduerarik gabeko erabiltzaileak</strong><br />» %s',
	'LOG_INACTIVE_REMIND'			=> '<strong>Bialduta jarduerarik gabeko erabiltzaileei kontua gaitzeko email gogorarazlea</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'			=> '<strong>Bihurtuta %1$s(e)tik phpBB %2$s(e)ra</strong>',
	'LOG_INSTALL_INSTALLED'			=> '<strong>phpBB %s jarrita</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Saioko IP/browser/X_FORWARDED_FOR azterketak huts egin du</strong><br />» Erabiltzailearen "<em>%1$s</em>" IPa "<em>%2$s</em>" saioaren aurka aztertuta, erabiltzailearen "<em>%3$s</em>" nabigatzailea "<em>%4$s</em>" saioaren aurka aztertuta,  erabiltzailearen  "<em>%5$s</em>" X_FORWARDED_FORa "<em>%6$s</em>" saioaren aurka aztertua.',

	'LOG_JAB_CHANGED'					=> '<strong>Jabber kontua aldatu egin da</strong>',
	'LOG_JAB_PASSCHG'					=> '<strong>Jabber pasahitza aldatu egin da</strong>',
	'LOG_JAB_REGISTER'					=> '<strong>Jabber kontua erregistratu egin da</strong>',
	'LOG_JAB_SETTINGS_CHANGED'			=> '<strong>Jabber hobespenak aldatu egin da</strong>',

	'LOG_LANGUAGE_PACK_DELETED'			=> '<strong>Ezabatutako hizkuntz paketea</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'		=> '<strong>Jarritako hizkuntz paketea</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'			=> '<strong>Eguneratuak hizkuntz paketeko xehetasunak</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'		=> '<strong>Ordezkatuta hizkuntz fitxategia</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'		=> '<strong>Bidalita hizkuntz fitxategia eta store karpetan jarrita</strong><br />» %s',
	
	'LOG_MASS_EMAIL'					=> '<strong>Bidalita email masiboa</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'				=> '<strong>Aldatuta bidaltzailea "%s" gaian</strong><br />» %2$s(en)gandik %3$s(e)ra',

	'LOG_MODULE_DISABLE'				=> '<strong>Ezgaitutako modulua</strong><br />» %s',
	'LOG_MODULE_ENABLE'					=> '<strong>Gaitutako modulua</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'				=> '<strong>Behera mugituta modulua</strong><br />» %1$s %2$s(r)en azpira',
	'LOG_MODULE_MOVE_UP'				=> '<strong>Gora mugituta modulua</strong><br />» %1$s %2$s(r)en gainera',
	'LOG_MODULE_REMOVED'				=> '<strong>Ezabatutako modulua</strong><br />» %s',
	'LOG_MODULE_ADD'					=> '<strong>Gehitutako modulua</strong><br />» %s',
	'LOG_MODULE_EDIT'					=> '<strong>Aldatutako modulua</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Gehitutako administratzaileran eginkizuna</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Aldatuta administratzailearen eginkizuna</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Ezabatuta administratzailearen eginkizuna</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Gehituta foro eginkizuna</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Aldatuta foro eginkizuna</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Ezabatuta foro eginkizuna</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Gehituta moderadore eginkizuna</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Aldatuta moderadore eginkizuna</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Ezabatuta moderadore eginkizuna</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Gehituta erabiltzaile eginkizuna</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Aldatuta erabiltzaile eginkizuna</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Ezabatuta erabiltzaile eginkizuna</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Gaituta profil eremua</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Gehituta profil eremua</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Ezgaituta profil eremua</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Aldatuta profil eremua</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Ezabatuta profil eremua</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Garbituta foroak</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-garbituta foroak</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Erabiltzaileak ezgaituta erabiltzaileak</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Erabiltzaileak garbituta eta mezuak ezabatuta</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Erabiltzaileak garbituta eta mezuak Usuarios purgados y mensajes zain</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Katxea garbituta</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Sesioak garbituta</strong>',
	
	'LOG_RANK_ADDED'	=> '<strong>Gehituta maila berria</strong><br />» %s',
	'LOG_RANK_REMOVED'	=> '<strong>Ezabatuta maila</strong><br />» %s',
	'LOG_RANK_UPDATED'	=> '<strong>Eguneratua maila</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Gehituta berri-emate/ezetzaren arrazoia</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Ezabatuta berri-emate/ezetzaren arrazoia</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Eguneratuta berri-emate/ezetzaren arrazoia</strong><br />» %s',
	
	'LOG_REFERER_INVALID'		=> '<strong>Bidaltzailearen (referer) egiaztatzeak huts egin du.</strong><br />»Bidaltzailea “<em>%1$s</em>” zen. Eskaera atzera bota eta saioa bukatu egin da.',

	'LOG_RESET_DATE'			=> '<strong>Foroaren zabaltze data berrabiarazi</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Konektaturiko erabiltzaile gehienen zenbakia berrabiarazi</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Erabitzaileen mezu zenbaketa bersinkronizatu</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Bersinkronizatuta markatutako gaiak</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Bersinkronizatuta mezuak, gaiak eta erabiltzaileen estatistikak</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Sortuta bilaketa aurkibidea </strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Ezabatuta bilaketa aurkibidea</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Gehituta estiloa</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Ezabatuta estiloa</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Aldatuta estiloa</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Esportatua estiloa</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Gehituta txantilloi berria datu basera</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Gehituta txantilloi berria fitxategi sistemara</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Ezabatuta katxean gorderiko txantilloi fitxategien bertsioak <em>%1$s</em> txantiloi bilduman</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Ezabatuta txantilloi bilduma</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Aldatuta txantilloi bilduma <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Aldatuta txantilloien xehetasunak</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Esportatuta txantilloi bilduma</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Eguneratua txantilloi bilduma</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Gehituta theme barria datubasera</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Gehituta theme barria fitxategi sistemara</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Ezabatuta themea</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Aldatuta themearen xehetasunak</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Aldatuta <em>%1$s</em> themea</strong><br />» Aldatuta <em>%2$s</em> fitxategia',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Aldatuta <em>%1$s</em> themea</strong><br />» Gehituta <em>%2$s</em> fitxategia',
	'LOG_THEME_EXPORT'			=> '<strong>Esportatuta themea</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Eguneratua themea</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Eguneratua datu basea %1$s. bertsiotik %2$s. bertsiora</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Eguneratua phpBB %1$s. bertsiotik %2$s. bertsiora</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Gaitutako erabiltzailea</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Erabiltzaile kudeaketa ataletik debekatutako erabiltzailea</strong> "<em>%1$s</em>" arrazoiagaitik<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Erabiltzaile kudeaketa ataletik debekatutako IPa</strong> "<em>%1$s</em>" arrazoiagaitik<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Erabiltzaile kudeaketa ataletik debekatutako email helbidea</strong> "<em>%1$s</em>" arrazoiagaitik<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Ezabatutako erabiltzailea</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Ezabatuta erabiltzaileak erantsitako fitxategi guztiak</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Ezabatuta erabiltzaile irudia</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Hutsita erabiltzailearen irteera-ontzia</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Ezabatuta erabiltzaileak bidalitako mezu guztiak</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Ezabatuta erabiltzaile sinadura</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Ezgaitutako erabiltzailea</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Mugituta erabiltzaile mezuak </strong><br />» "%1$s"(e)k bidalitako mezuak "%2$s" forora',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Aldatuta erabiltzaile pasahitza</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Behartuta erabiltzaile kontu gaitzea</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Kenduta izena emandako erabiltzaile berriaren ikurra</strong><br />» %s',
	
	'LOG_USER_UPDATE_EMAIL'	=> '<strong> "%1$s" erabiltzaileak email helbidea aldatu du</strong><br />» "%2$s"(e)tik "%3$s"(e)ra',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Aldatuta erabiltzaile izena </strong><br />» "%1$s"(e)tik "%2$s"(e)ra',
	'LOG_USER_USER_UPDATE'	=> '<strong>Eguneratuak erabiltzailearen xehetasunak</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Erabiltzaile kontua gaitu egin da</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Erabiltzaile irudia ezabatu egin da</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Erabiltzaile sinadura ezabatu egin da</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Gehituta erabiltzailearen feedbacka</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Gehituta saioa</strong><br />%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Erabiltzaile kontua ezgaitu egin da</strong>',
	'LOG_USER_LOCK'				=> '<strong>Erabiltzaileak bere gaia itxi egin du</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Mezu guztiak foro honetara mugitu dira "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Erabiltzaile kontu gaitze behartua</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Erabiltzaileak bere gaia zabaldu du</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Gehituta erabiltzaileari ohartarazpena</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Hurrengo ohartarazpena erabiltzaile honi jakinarazi zitzaion</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Lehenetsitako taldea aldatu duen erabiltzailea</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Taldetik apaldutako erabiltzailea</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Taldean sartutako erabiltzailea</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Taldean sartutako eta onespenaren zain dagoen erabiltzailea</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Taldeari uko egin dion erabiltzailea</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Ezabatua erabiltzailearen abisua</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>%2$s erabiltzaile abisu ezabatuta </strong><br />» %1$s', // Adibidea: '<strong>2 erabiltzaile abisu ezabatuta</strong><br />» erabiltzaile izena'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Erabiltzaile abisu guztiak ezabatuta</strong><br />» %s',
	
	'LOG_WORD_ADD'		=> '<strong>Gehituta erdietsitako hitza</strong><br />» %s',
	'LOG_WORD_DELETE'	=> '<strong>Ezabatuta erdietsitako hitza</strong><br />» %s',
	'LOG_WORD_EDIT'		=> '<strong>Aldatuta erdietsitako hitza</strong><br />» %s',
));

?>