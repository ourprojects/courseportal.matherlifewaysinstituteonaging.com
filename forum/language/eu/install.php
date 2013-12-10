<?php
/**
*
* install.php [Basque [eu]]
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
	'ADMIN_CONFIG'	=> 'Administrazaile Konfigurazioa',
	'ADMIN_PASSWORD'	=> 'Administratzaile pasahitza',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Administratzaile pasa',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Mesedez, 6 eta 30 karaktere bitarteko pasahitza sartu.',
	'ADMIN_TEST'	=> 'Administratzailearen konfigurazioa egiaztatu.',
	'ADMIN_USERNAME'	=> 'Administrazailearen erabiltzaile izena',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Mesedez, 3 eta 20 karaktere bitarteko erabiltzaile izena sartu.',
	'APP_MAGICK'	=> 'Imagemagikc euskarria[ Eranskinak ]',
	'AUTHOR_NOTES'	=> 'Autorearen oharrak<br />» %s',
	'AVAILABLE'	=> 'Erabilgarria',
	'AVAILABLE_CONVERTORS'	=> 'Bihurtzaile erabilgarriak',
	
	'BEGIN_CONVERT'	=> 'Aldaketa hasi',
	'BLANK_PREFIX_FOUND'	=> 'Taulen azterketak tauletan aurrizkirik behar ez duen baliozko instalazioa erakutsi du.',
	'BOARD_NOT_INSTALLED'	=> 'Ez da instalaziorik aurkitu',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBBko Bihurtzaile Bateratuak phpBB3ko instalazioa behar du lehenetsirik martxan jartzeko. Mesedez, <a href="%s">lehenengoz instala ezazu phpBB3</a>.',
	'BACKUP_NOTICE'					=> 'Segurtasun kopia egin foroa eguneratu baino lehen prozesuan gerta daitezken arazoak dirala ta.',

	'CATEGORY'	=> 'kategoria',
	'CACHE_STORE'	=> 'Katxe mota',
	'CACHE_STORE_EXPLAIN'	=> 'Katxea gordetzen den kokapen fisikoa. Fitxategi sistema hobesten da.',
	'CAT_CONVERT'	=> 'Bihurtu',
	'CAT_INSTALL'	=> 'Instalatu',
	'CAT_OVERVIEW'	=> 'Bista orokorra',
	'CAT_UPDATE'	=> 'Eguneratu',
	'CHANGE'	=> 'Aldatu',
	'CHECK_TABLE_PREFIX'	=> 'Mesedez, taulako aurrizkia egiaztatu eta berriro saia zaitez.',
	'CLEAN_VERIFY'	=> 'Behin betiko egitura garbitu eta egiaztatzen',
	'CLEANING_USERNAMES'		=> 'Erabiltzaile izenak ezabatzen',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> izen garbitzat erabiltzaile honentzako:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Izen bereko erabailtzaileak aurkitu dira lehengo foroan. Instalazioa egoki burutu daiten, mesedez ezabatu edo izenez aldatu itzazu erabiltzaile hauek, erabiltzaile bakoitzeko izen bakarra baino ez daiten egon.',
	'COLLIDING_USER'	=> '» erabiltzaile id: <strong>%d</strong> erabiltzaile izena: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'	=> 'Konfigurazioa bihurtzen',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Ezin izan da konfigurazio fitxategia idatzi. Behekaldean erakusten dira fitxategi hau sortu eta aldatzeko hautazko moduak.',
	'CONFIG_FILE_WRITTEN'	=> 'Konfigurazio fitxategia idatzi da. Instalazioaren hurrengo pausura jo zenezake orain.',
	'CONFIG_PHPBB_EMPTY'	=> '"%s" konfigurazio aldaera hutsik dago.',
	'CONFIG_RETRY'	=> 'Berriro saiatu',
	'CONTACT_EMAIL_CONFIRM'	=> 'Harremanetarako Posta elektronikoa baieztatu',
	'CONTINUE_CONVERT'	=> 'Bihurtzea jarraitu',
	'CONTINUE_CONVERT_BODY'	=> 'Lehenagoko bihurtze saiakera bat aurkitu da. Saiakera berria hasi edo lehenagoko hau jarraitzea aukera dezakezu.',
	'CONTINUE_LAST'	=> 'Azkenengo pausutik jarraitu',
	'CONTINUE_OLD_CONVERSION'	=> 'Lehenagoko bihurtzearekin jarraitu',
	'CONTINUE_UPDATE'	=> 'Eguneratzearekin jarraitu',
	'CONVERT'	=> 'Bihurtu',
	'CONVERT_COMPLETE'	=> 'Bihurtze bururatua',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Zuzen bihurtu duzu zure foroa phpBB 3.0ra. Saioa hasi eta <a href="../">forora sartu zaitezke</a>. Gogora ezazu phpBB erabiltzeko laguntza online  duzula <a href="http://www.phpbb.com/support/documentation/3.0/">(Dokumentazioa</a> eta <a href="http://www.phpbb.com/community/viewforum.php?f=46">euskarri foroa)</a> helbideetan(biak ingelesez).',
	'CONVERT_INTRO'	=> 'Ongietorria phpBBren Bihurtzaile Bateratura',
	'CONVERT_INTRO_BODY'	=> 'Instalaturiko beste foro sistemak bihur daitezke hemendik. Behekaldean bihurtze modulu erabilgarrien zerrenda aurkituko duzu. Ez baldin bada agertzn bihurtu nahi duzun bertsioaren modulua, jo ezazu gure webgunera ea han agertzen den.',
	'CONVERT_NEW_CONVERSION'	=> 'Bihurtze berria',
	'CONVERT_NOT_EXIST'	=> 'Ez da adierazitako bihurtzailerik existitzen.',
	'CONVERT_OPTIONS'			=> 'Aukerak',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Sartutako informazioa baieztatu da. Bihurtze prozesua hasteko, mesedez beheko botoia klikatu.',
	'CONV_ERR_FATAL'	=> 'Errore saihestezina bihurtzerakoan',

	'CONV_ERROR_ATTACH_FTP_DIR'	=> 'Fitxategi erantsiak igoteko FTPa, lehengon foroaren helbidearekin darrai. Mesedez, FTP aukera hori ezgaitu eta fitxategiak gehitzeko baliozko karpeta zehaztu. Ostean, fitxategi erantsi guztiak karpeta horretara kopiatu eta has zaitez berriro bihurtzen.',
	'CONV_ERROR_CONFIG_EMPTY'	=> 'Ez dago bihurtzeko erabilgarria liteken konfigurazio informaziorik.',
	'CONV_ERROR_FORUM_ACCESS'	=> 'Ezinezkoa gertatu da forora sartzeko behar den informaziorik lortzea.',
	'CONV_ERROR_GET_CATEGORIES'	=> 'Ezinezkoa izan da kategoriak lortzea.',
	'CONV_ERROR_GET_CONFIG'	=> 'Ezinezkoa izan da zure foroko informaziorik lortzea.',
	'CONV_ERROR_COULD_NOT_READ'	=> 'Ezinezkoa izan da "%s"(ra) sartu/irakurri.',
	'CONV_ERROR_GROUP_ACCESS'	=> 'Ezinezkoa izan da taldeak baieztatzeko baliagarria liteken informaziorik lortu.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Funts eza aurkitu da taldeen taulan add_bots()en - Talde bereziak eskuz sartu beharko dituzu.',
	'CONV_ERROR_INSERT_BOT'	=> 'Ezinezkoa bot sartzerik erabiltzaileen taulan.',
	'CONV_ERROR_INSERT_BOTGROUP'	=> 'Ezinezkoa bot sartzerik boten taulan.',
	'CONV_ERROR_INSERT_USER_GROUP'	=> 'Ezinezkoa erabiltzailea sartzerik taulan.user_group taulan.',
	'CONV_ERROR_MESSAGE_PARSER'	=> 'Azterketa errorea',
	'CONV_ERROR_NO_AVATAR_PATH'	=> 'Sustatzailearentzako oharra: $convertor[\'avatar_path\'] zehaztu behar duzu %s erabiltzeko.',
	'CONV_ERROR_NO_FORUM_PATH'	=> 'Ez da lehenengo foroko bide erlatiboa zehaztu.',
	'CONV_ERROR_NO_GALLERY_PATH'	=> 'Sustatzailearentzako oharra: $convertor[\'avatar_gallery_path\'] zehaztu behar duzu %s erabiltzeko.',
	'CONV_ERROR_NO_GROUP'	=> 'Ezin daiteke "%1$s" taldea %2$s(e)n aurkitu.',
	'CONV_ERROR_NO_RANKS_PATH'	=> 'Sustatzailearentzako oharra:  $convertor[\'ranks_path\'] zehaztu behar duzu  %s erabiltzeko.',
	'CONV_ERROR_NO_SMILIES_PATH'	=> 'Sustatzailearentzako oharra: $convertor[\'smilies_path\'] zehaztu behar duzu %s erabiltzeko.',
	'CONV_ERROR_NO_UPLOAD_DIR'	=> 'Sustatzailearentzako oharra: $convertor[\'upload_path\'] zehaztu behar duzu %s erabiltzeko.',
	'CONV_ERROR_PERM_SETTING'	=> 'Ezin izan da sartu/eguneratu baimenen konfigurazioa.',
	'CONV_ERROR_PM_COUNT'	=> 'Ezin izan da  MP karpeta zenbatzailea aukeratu.',
	'CONV_ERROR_REPLACE_CATEGORY'	=> 'Ezinezkoa izan da foro berria lehengo kategoria baten ordez sartzea.',
	'CONV_ERROR_REPLACE_FORUM'	=> 'Ezinezkoa izan da foro berria lehengo foroaren ordez sartzea.',
	'CONV_ERROR_USER_ACCESS'	=> 'Ezinezkoa izan da erabiltzaileak baieztatzeko baliagarria liteken informaziorik lortu.',
	'CONV_ERROR_WRONG_GROUP'	=> '"%1$s" talde okerra %2$s(a)n zehaztua.',
	'CONV_OPTIONS_BODY'			=> 'Lehengo forora sartzeko behar diren datuak batzen ditu orri honek. Sar itzazu lehengo foroko datubasearen xehetasunak; bihurtzaileak ez du datubase horretan ezer aldatuko. Lehengo foroa ezgaitzea beharrezkoa da egoki bihur daiten.',
	'CONV_SAVED_MESSAGES'	=> 'Gordetako mezuak',

	'COULD_NOT_COPY'	=> 'Ezin daiteke <strong>%1$s</strong> fitxategia <strong>%2$s</strong>(e)ra kopiatuk<br /><br />Mesedez, helmuga karpetarik baden eta webserverrak bertan idatz dezaken egiazta ezazu.',
	'COULD_NOT_FIND_PATH'	=> 'Ezin daiteke zure lehengo fororako bidea aurkitu. Mesedez, konfigurazioa egiazta ezazu eta berriro saiatu zaitez.<br />» Zehaztutako bidea  %s izan da.',

	'DBMS'	=> 'Datubase mota',
	'DB_CONFIG'	=> 'Datubasearen konfigurazioa',
	'DB_CONNECTION'	=> 'Datubasearen konexioa',
	'DB_ERR_INSERT'	=> '<code>INSERT</code> eskaera prozesatzen zen bitartean errorea gertatu da.',
	'DB_ERR_LAST'	=> '<var>query_last</var> prozesatzen zen bitartean errorea gertatu da.',
	'DB_ERR_QUERY_FIRST'	=> '<var>query_first</var> prozesatzen zen bitartean errorea gertatu da.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var> prozesatzen zen bitartean errorea gertatu da, %s ("%s").',
	'DB_ERR_SELECT'	=> 'Error mientras ejecutaba consulta <code>SELECT</code> eskaera gauzatzen zen bitartean errorea gertatu da.',
	'DB_HOST'	=> 'Datubasearen zerbitzariaren izena edo DSNa',
	'DB_HOST_EXPLAIN'	=> 'DSN Data Source Name esan nahi du eta ODBC instalazioetarako baino ez da beharrezkoa. PostgreSQL erabiliz gero, localhost erabil ezazu zerbitzari lokalera UNIX domain socket bidez konektatzaeko eta 127.0.0.1 TCP bidez baldin bada.',
	'DB_NAME'	=> 'Datubasearen izena',
	'DB_PASSWORD'	=> 'Datubasearen pasahitza',
	'DB_PORT'	=> 'Datubasearen zerbitzariaren portua',
	'DB_PORT_EXPLAIN'	=> 'Zerbitzariak estandarra ez den portu bat erabili dezala nahi baduzu baino ez bete.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Sentitzen dugu, baina script honek ezin du eguneratu phpBB “%1$s” bertsiotik atzeragoko foroak. Instalatuta duzun bertsioa “%2$s” duzu. Aurreko bertsioren batera eguneratu beharko duzu script hau martxan jartzeko. Arazorik bazenu jo ezazu phpBB.com-en aurkituko duzun support forum-era.',
	'DB_USERNAME'	=> 'Datubasearen erabiltzailea',
	'DB_TEST'	=> 'Konexioa frogatu',
	'DEFAULT_LANG'	=> 'Foroko hizkuntz lehenetsia',
	'DEFAULT_PREFIX_IS'	=> 'Bihurtzaileak ezin izan ditu zehaztutako aurrizkidun taularik aurkitu. Mesedez, egiazta ezazu datuak zuzen sartu dituzun. %1$s (e)rako lehenetsitako aurrizkia <strong>%2$s</strong> da.',
	'DEV_NO_TEST_FILE'	=> 'Ez da balorerik zehaztu bihurtzaileko test_file aldaerarako. Bihurtzaileko erabiltzaile soila baino ez bazara, ez zenuke mezu hau ikusi behar. Mesedez, eman iezaiozu autoreari mezu honen berri. Autorea zeu baldin bazara, lehengo foroan existitzen den fitxategi baten izena eman behar duzu bertorako bidea egiaztatu daiten.',
	'DIRECTORIES_AND_FILES'	=> 'Karpetak eta fitxategiak',
	'DISABLE_KEYS'	=> 'Teklak ezgaitu',
	'DLL_FIREBIRD'	=> 'Firebird',
	'DLL_FTP'	=> 'FTPrako euskarria [ Instalación ]',
	'DLL_GD'	=> 'GD liburutegirako euskarria [ Ikus-baieztapena ]',
	'DLL_MBSTRING'	=> 'Multi-byte karakteretarako euskarria',
	'DLL_MSSQL'	=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'	=> 'MSSQL Server 2000+  (ODBC)',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Berezkoa ]'
	'DLL_MYSQL'	=> 'MySQL',
	'DLL_MYSQLI'	=> 'MySQL MySQLi luzapenarekin',
	'DLL_ORACLE'	=> 'Oracle',
	'DLL_POSTGRES'	=> 'PostgreSQL',
	'DLL_SQLITE'	=> 'SQLite',
	'DLL_XML'	=> 'XML Euskarria [ Jabber ]',
	'DLL_ZLIB'	=> 'zlib konprimatzerako euskarria [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'	=> 'Deskargen konfigurazioa',
	'DL_CONFIG_EXPLAIN'	=> 'config.php zeure ordenadorera deskarga dezakezu. Ostean fitxategia eskuz gehitu phpBB 3.0ko root karpetan dagoen edozein config.php fitxategi ordezkatuz. Mesedez, fitxategia ASCII formatuan igon behar duzula gogoratu (erabiltzen duzun FTP softwareko argibideetan begiratu, ez baldin bazaude ziur). Behin config.php gehiturik "Egina" loturan klikatu hurrengo pausura joteko.',
	'DL_DOWNLOAD'	=> 'Deskarga',
	'DONE'	=> 'Egina',

	'ENABLE_KEYS'	=> 'Teklak berriro gaitu. Momentutxo bat eroan dezake honek.',

	'FILES_OPTIONAL'	=> 'Hautazko fitxategi eta karpetak',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Hautazkoa</strong> - Fitxategi, karpeta edo baimen hauek ez dira behar-beharezkoak. Instalazio sistemak teknika ezberdinak saiatuko ditu hauek sortzen ez baldin badira existitzen edo ezin badira idatzi. Baina baldin badaude instalazioa azkartu egingo dute.',
	'FILES_REQUIRED'	=> 'Fitxategi eta karpetak',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Beharrezkoa</strong> - phpBB3 ondo ibili daiten beharrezkoa du fitxategi edo karpeta jakin batzuk idaztea. "Ez du aurkitu" ikusten baldin baduzu, fitxategi edo karpeta hori idatzi egin beharko duzu. "Ezin da idatzi" ikusten baldin baduzu, fitxategi edo karpetako baimenak aldatu egin beharko dituzu phpBBk bertan idatz dezan baimentzeko.',
	'FILLING_TABLE'	=> '<strong>%s</strong> taula betetzen',
	'FILLING_TABLES'	=> 'Taulak betetzen',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB-k ez du 2.1eko bertsiotik lehenagoko Firebird/Interbase-rik jasaten. Mesedez, eguneratu ezazu zure Firebird instalazioa (2.1.0ra gutxienez) eguneraketarekin hasi baino lehenago.',	
	
	'FINAL_STEP'	=> 'Azken pausua prozesatu',
	'FORUM_ADDRESS'	=> 'Foroko helbidea',
	'FORUM_ADDRESS_EXPLAIN'	=> 'Lehengo foroko URLa duzu hau, adibidez <samp>http://www.example.com/phpBB2/</samp>. Hau hutsik utzi beharrean helbide batekin betetzen baldin baduzu, helbide honetako instantzi guztiak berriarekin ordezkatuko dira mezuetan, mezu pribatuetan eta sinaduretan.',
	'FORUM_PATH'	=> 'Fororako bidea',
	'FORUM_PATH_EXPLAIN'	=> 'Lehengo forora <strong>phpBB instalazio honetako root karpetan </strong> dagoen diskako bide <strong>erlatiboa</strong> duzu hau.',
	'FOUND'	=> 'Aurkituta',
	'FTP_CONFIG'	=> 'Konfigurazioa FTPtik bidali',
	'FTP_CONFIG_EXPLAIN'	=> 'phpBB3k zerbitzari honetan FTP modulu bat aurkitu du. config.php bide hau erabiliz instala dezakezu hala nahi baduzu. Behekaldean zerrendatutako informazioa eman beharko duzu. Gogora ezazu zure erabiltzaile izena eta pasahitza zerbitzarirako erabiltzen dituzunak direla! (zure hosting hornitzaileari galde iezaizkiozu ez badituzu gogoratzen)',
	'FTP_PATH'	=> 'FTP bidea',
	'FTP_PATH_EXPLAIN'	=> 'Zure root karptetik phpBB3renera doan bidea, adibidez <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'	=> 'Igo',

	'GPL'	=> 'Lizentzi Publiko Orokorra (General Public License)',

	'INITIAL_CONFIG'	=> 'Oinarrizko konfigurazioa',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Instalazioak zure zerbitzarian phpBB3 ibili daitekela baieztatu du. Orain xehetasun zehatz batzuk eman beharko dituzu. Ez baldin badakizu zure datubasera nola konektatu, galde iezaiozu zure hosting hornitzaileari edo phpBB3ko euskarri foroetara jo. Mesedez, datuak sartzerakoan, zuzen sartu dituzula baiezta ezazu.',
	'INSTALL_CONGRATS'	=> 'Zorionak!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '		
		<p>phpBB3 ondo instalau duzu %1$s. Zure phpBB3 instalatu berrian eskua sartzeko aukera bi dituzu orain:</p>
		<h2>Dageneko existitzen den foro bat phpBB3-ra bihurtu</h2>
		<p>phpBBren Bihurtzaile Bateratuak phpBB 2.0.x eta beste sistemetako foroak phpBB3ra bihur ditzazke. Bihurtu nahi duzun fororik baldin baduzu, mesedez <a href="%2$s">jo ezazu bihurtzailera</a>.</p>
		<h2>Foro berria sortu phpBB3n</h2>
		<p>Beheko botoian klikatuz Administrazio Kontrol Panelera (ACP) joango zara non phpBB-ra estatistika informazioa bidaltzeko aukera aurkeztuko dizun formularioa aurkituko duzun. phpBB-tik oso eskertuko genizuke informazio hau (era guztiz anonimoan batzen da). Ostean, eman itzazu minutu batzuk aukerak aztertzen <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentazioa</a> eta <a href="http://www.phpbb.com/community/viewforum.php?f=46">euskarri foroak</a> (biak ingelesez) era badituzula kontutan harturik, <a href="%3$s">IRAKURRI</a> dokumentua irakur ezazu informazio gehiagorako.</p><p><strong>Mesedez, lekua erabili baino lehenago, ezabatu, mugitu edo izenez aldatu install karpeta. Bestela, Administrazio Kontrol Panelean (ACP) baino ezin izango duzu sartu.</strong></p>',
	'INSTALL_INTRO'	=> 'Ongietorri instalaziora',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'	=> '<p>Aukera honekin phpBB3 instala dezakezu zeure zerbitzarian. </p><p>Horretarako, zure datubasearen konfigurazioa ezagutu beharko duzu. Ez baldin badakizu zein den, mesedez jar zaitez zure host hornitzailearekin harremanetan eta galde iezaiezu datu horiekaitik, ezin bait duzu beraiek gabe jarraitu. Hurrengoa beharko duzu:</p>

	<ul>
		<li>Datubase mota - Erabiltzeko asmoa duzun datubasea.</li>
		<li>Zerbitzari izena edo DSNa - datubaseko zerbitzariaren helbidea.</li>
		<li>Zerbitzariaren portua - (gehienetan ez duzu beharko).</li>
		<li>Datubasearen izena - Zerbitzarian egongo den datubasearen izena.</li>
		<li>Erabiltzaile izena eta pasahitza - datubasean saioa hasteko behar den informazioa.</li>
	</ul>

	<p><strong>Oharra:</strong> SQLite erabiliz baldin bazaude instalazioa egiterakoan, datubaseko fitxategira doan bidea osoan idatzi beharko zenuke DSN eremuan eta erabiltzaile izena eta pasahitza eskatzen dizkizuten eremuak hutsik utzi. Segurtasun neurriak direla eta, datubaseko fitxategi hori, amaraunetik irisgarria gerta ez liteken karpetaren batean sartzea komeniko liteke.</p>

	<p>phpBB3k hurrengo datubaseentzako euskarria du:</p>
	<ul>
		<li>MySQL 3.23 edo nagusiagoa(baita MySQLi ere)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 edo nagusiagoa (zuzenean zein ODBC bidetik)</li>
		<li>MS SQL Server 2005 edo nagusiagoa (jatorrizkoa)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Zure zerbitzariak eusten dituen datubaseak baino ez dira erakutsiko.',
	'INSTALL_INTRO_NEXT'	=> 'Instalazioa hasteko, mesedez beheko botoia sakatu.',
	'INSTALL_LOGIN'	=> 'Saioa hasi',
	'INSTALL_NEXT'	=> 'Hurrengo pausua',
	'INSTALL_NEXT_FAIL'	=> 'Froga batzuk huts egin dute. Arazo horiek zuzendu behar zenituzke hurrengo pausura joan baino lehen. Ekiditzeak bukatu gabeko instalazioa ekar lezake ondoriotzat.',
	'INSTALL_NEXT_PASS'	=> 'Oinarrizko froga guztiak gainditu dira. Hurrengo pausura joan zaitezke. Baimenik, modulurik, etab. aldatu bazenu eta frogak errepikatu nahiko bazenitu, orain duzu aukera.',
	'INSTALL_PANEL'	=> 'Instalazio Panela',
	'INSTALL_SEND_CONFIG'	=> 'Zoritxarrez, phpBB3k ezin izan du konfigurazio informazioa  config.php fitxategian zuzenean idatzi. Fitxategia ez delako existitzen edota ezin daitekelako bertan idatzi izan liteke hau. Behekaldean aukera zerrenda erakutsiko zaizu config.phpren instalazioa burutu dezazun.',
	'INSTALL_START'	=> 'Instalazioa hasi',
	'INSTALL_TEST'	=> 'Berriro frogatu',
	'INST_ERR'	=> 'Instalazio errorea',
	'INST_ERR_DB_CONNECT'	=> 'Ezin daiteke datubasearekin konexiorik ezarri. Ikus ezazu behekaldeko errore mezua.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Datubaseko fitxategia zure webguneko direktorioan dago. Amaraunetik irisgarria gerte ez liteken karpetaren batean jartzea komeniko litzateke.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Sartutako aurrizkiak ez du balio. Hizki batekin hasi behar du eta hizkiak, zenbakiak eta gidoi-baxuak baino ezin ditu izan.',
	'INST_ERR_DB_NO_ERROR'	=> 'Ez du errore mezurik eman.',
	'INST_ERR_DB_NO_MYSQLI'	=> 'Ordenadore honetan jarritako MySQL bertsioa, ez da "MySQL MySQULi luzapenarekin" aukerarekin bateragarria. Mesedez, "MySQL" aukerarekin saiatu zaitez.',
	'INST_ERR_DB_NO_SQLITE'	=> 'Ordenadore honetan instalaturik duzun SQLite luzapena zaharregia da, 2.8.2. bertsiora gaurkotu beharko duzu gutxienez.',
	'INST_ERR_DB_NO_ORACLE'	=> 'Ordenadore honetan instalaturiko Oracle bertsioak <var>NLS_CHARACTERSET</var> parametroa <var>UTF8</var> parametrora bihur dezazula eskatzen dizu. Instalazioa 9.2+(e)ra gaurkotu edota parametroa alda ezazu.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Ordenadore honetan instalaturiko Firebird bertsioa 2.1 bertsioa baino zaharragoa da. Mesedez, bertsio berriago batera gaurkotu.',
	'INST_ERR_DB_NO_FIREBIRD_PS'	=> 'Firebirderarko aukeratu duzun datubasea 8192 baino gutxiagoko orri-tamaina du. 8192ekoa izan behar du gutxienez.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Aukeratutako datubasea ez da <var>UNICODE</var>n edo <var>UTF8</var>n sortu.  <var>UNICODE</var> edo <var>UTF8</var>n eginiko datubase batekin saiatu zaitez.',
	'INST_ERR_DB_NO_NAME'	=> 'Ez da datubaseren izenik zehaztu.',
	'INST_ERR_EMAIL_INVALID'	=> 'Sartutako posta elektronikoa ez da zuzena.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Sartutako posta elektronikoek ez dute bat egiten.',
	'INST_ERR_FATAL'	=> 'Errore saihestezina instalatzerakoan',
	'INST_ERR_FATAL_DB'	=> 'Datubase errore saihestezin eta  berreskuraezina gertatu da. Zehaztutako erabiltzaileak <code>CREATE TABLES</code> edo <code>INSERT</code>, eta abarretarako baimenik ez duelako izan leiteke hau. Agian behekaldean informazio gehiago aurkituko duzu. Mesedez, jar zaitez zure hosting hornitzailearekin harremanetan edo jo ezazu phpBB3ko euskarri foroetara laguntza bila.',
	'INST_ERR_FTP_PATH'	=> 'Ezin daiteke zehaztutako karpetara aldatu. Mesedez, egiazta ezazu bidea.',
	'INST_ERR_FTP_LOGIN'	=> 'Ezin daiteke saiorik hasi FTP zerbitzarian. Mesedez, egiazta itzazu erabiltzaile izena eta pasahitza.',
	'INST_ERR_MISSING_DATA'	=> 'Bloke honetako eremu guztiak bete behar dituzu.',
	'INST_ERR_NO_DB'	=> 'Ezin daiteke PHP modulua aukeratutako datubasean egotzi.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Sartutako pasahitzek ez dute bat egiten.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Sartutako pasahitza luzeegia da. Gehienezko luzeera 30 karakteretakoa da.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Sartutako pasahitza laburregia da. Gutxienezko luzeera 6 karakteretakoa da.',
	'INST_ERR_PREFIX'	=> 'Dagoeneko badaude aukeratu duzun aurrizkia erabilten duten taulak. Mesedez, aurrizki ezberdinen bat aukera ezazu.',
	'INST_ERR_PREFIX_INVALID'	=> 'Zehaztutako taula aurrizkiak ez du balio datubaserako. Mesedez, gidoia (-) moduko karaktererik gabeko aurrizki ezberdinen bat aukera ezazu.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Zehaztutako taula aurrizkia luzeegia da. Gehienezko luzeera %d karakteretakoa da.',
	'INST_ERR_USER_TOO_LONG'	=> 'Sartutako erabiltzaile izena luzeegia da. Gehienezko luzeera 20 karakteretakoa da.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Sartutako erabiltzaile izena laburregia da. Gutxienezko luzeera 3 karakteretakoa da.',
	'INVALID_PRIMARY_KEY'	=> 'Baliogabeko giltzarria : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Konturatu zaitez honek denbora apurtxo bat eraman dezakela... Mesedez ez ezazu scripta gelditu.',

// mbstring
	'MBSTRING_CHECK'	=> '<samp>mbstring</samp> luzapena egiaztatu',
	'MBSTRING_CHECK_EXPLAIN'	=> '<strong>Derrigorrezkoa</strong> - <samp>mbstring</samp> PHPren luzapen bat da, multibyte kateen funtzioak lortzen dituena. mbstringeko ezaugarri batzuk ez dira phpBB3rekin bateragarriak, beraz, ezgaitu egin beharko dira.',
	'MBSTRING_FUNC_OVERLOAD'	=> 'Funtzioak gainkargatu',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'	=> '<var>mbstring.func_overload</var> 0 eta 4ren artean jarri behar da.',
	'MBSTRING_ENCODING_TRANSLATION'	=> 'Karaktere kodetze gardena',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> 0an jarri behar da.',
	'MBSTRING_HTTP_INPUT'	=> 'HTTP sarrera-karaktereen bihurtzea',
	'MBSTRING_HTTP_INPUT_EXPLAIN'	=> '<var>mbstring.http_input</var>  <samp>pass</samp>(e)an jarri behar da.',
	'MBSTRING_HTTP_OUTPUT'	=> 'HTTP irteera-karaktereen bihurtzea',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'	=> '<var>mbstring.http_output</var> <samp>pass</samp>(e)an jarri behar da.',

	'MAKE_FOLDER_WRITABLE'	=> 'Mesedez, karpeta hau existitzen dela eta web zerbitzariak bertan idatz dezaken baiezta ezazu eta berriro saiatu zaitez: <br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'	=> 'Mesedez, karpeta hauek existitzen direla eta web zerbitzariak bertan idatz dezaken baiezta ezazu eta berriro saiatu zaitez:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Zure MySQL datubasearen txantilloia zaharkituta gelditu da phpBB-rako. phpBB-k MySQL 3.x/4.x schema antzeman du baina zerbitzariak MySQL %2$s darabil. <br /><strong>Eguneraketari ekin baino lehenago schema eguneratu beharko duzu. </strong><br /><br />MySQL schema eguneratzeari buruz informazioa nahi baldin baduzu, jo ezazu Please refer to the <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">helbide honetara</a>. Arazorik baldin baduzu, mesedez erabil itzazu <a href="http://www.phpbb.com/community/viewforum.php?f=46">gure support forumak</a>.',
	
	'NAMING_CONFLICT'	=> 'Izen gatazka: %s eta %s ezizenak dira<br /><br />%s',
	'NEXT_STEP'	=> 'Hurrengo pausura jo',
	'NOT_FOUND'	=> 'Ezin izan da aurkitu',
	'NOT_UNDERSTAND'	=> 'Ezin daiteke %s #%d ulertu, %s taula ("%s")',
	'NO_CONVERTORS'	=> 'Ez dago bihurtzaile erabilgarririk.',
	'NO_CONVERT_SPECIFIED'	=> 'Ez duzu bihurtzailerik zehaztu.',
	'NO_LOCATION'	=> 'Ezin daiteke kokapena zehaztu. Imagemagick instalaturik dagoena ziur badakizu, Administrazio Kontrol Paneletik (ACP) zehaztu dezakezu kokapena geroago.',
	'NO_TABLES_FOUND'	=> 'Ez da taularik aurkitu.',
// TODO: Write some explanatory introduction text
	'OVERVIEW_BODY'				=> 'Ongietorri phpBB3ra!<br /><br />phpBB™ foroak sortzeko kode irekiko irtenbiderik erabiliena da munduan. 2000. urtetik aurrera plazaratutako paketeen modura, phpBB3k ezaugarri ugariei erabilerreztasuna eta phpBBko Taldean aurki daiteken euskarri osoa gehitzen dizkio. phpBB3k, phpBB2 hain erabilia egiten zuena hobetzen du eta askoz ezaugarri gehiago gehitzen ditu. Zeure itxaropenak gaindi ditzala espero dugu.<br /><br />Instalazio sistema honek bitartez phpBB3 berria instalatzen, phpBB3ko azkengo bertsiora eguneratzen edo beste foro sistema bat (phpBB2 barne) phpBB3ra bihurtzen lagunduko dizu. Informazio gehiagorako, irakur ezazu <a href="../docs/INSTALL.html">instalazio gida</a>.<br /><br />phpBB3ren lizentzia edo euskarria eta hau nola lortu jakiteko, mesedez aukera ezazu alboko menuan dagokion lotura. Aurrera jarraitzeko, goikaldeko aukeren artean hautatu.',

	'PCRE_UTF_SUPPORT'	=> 'PCRE UTF-8 euskarria',
	'PCRE_UTF_SUPPORT_EXPLAIN'	=> 'phpBB <strong>ez</strong> da ibiliko zure PHP instalazioa ez baldin badago PCRE luzapenean UTF-8rako euskarriarekin konpilaturik.',
	'PHP_GETIMAGESIZE_SUPPORT'	=> 'PHP getimagesize funtzioa() erabilgarri dago',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Derrigorrezkoa</strong> - phpBB3 ondo ibil dadin, getimagesize funtzioak erabilgarri egon behar du.',
	'PHP_OPTIONAL_MODULE'	=> 'Hautazko moduluak',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Hautazkoa</strong> - Modulu edo aplikazio hauek hautazkoak dira. Hala ere, erabilgarri baldin badaude aparteko ahalmenak eskeini ditzakete.',
	'PHP_SUPPORTED_DB'	=> 'Eutsitako datubaseak',
	'PHP_SUPPORTED_DB_EXPLAIN'	=> '<strong>Derrigorrezkoa</strong> - PHPrekin bateragarria den gitxienez datubase baterako euskarria beharko duzu. Ez bada datubaseen modulurik erabilgarri moduan ageri, hosting hornitzailearekin jarri beharko zenuke kontaktuan edo dagokion PHPko instalazio dokumentazioa gainbegiratu berriro.',
	'PHP_REGISTER_GLOBALS'	=> '<var>register_globals</var> PHP parametroa desgaituta',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB3 parametro hauek desgaituta baldin badaude ere ibili egingo da. Baina ahal bada, zure PHP instalazioan register_globals desgaituta egon daiten gomendatzen dizugu, segurtasun arrazoiak direla eta.',
	'PHP_SAFE_MODE'	=> 'Modu seguruan',
	'PHP_SETTINGS'	=> 'PHP bertsio eta konfigurazioa',
	'PHP_SETTINGS_EXPLAIN'	=> '<strong>Derrigorrezkoa</strong> - PHPren 4.3.3 bertsioa beharko duzu gutxienez phpBB3 instalatu nahi baduzu. Zure PHP instalazioaren behekaldean <var>safe mode</var> erakusten bada, instalazioa modu horretan ibilten dago. Horrek mugak ezarriko ditu urruneko administrazioan eta antzeko ezaugarrietan.',
	'PHP_URL_FOPEN_SUPPORT'	=> '<var>allow_url_fopen</var> PHP parametroa gaituta dago',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Hautazkoa</strong> - Parametro hau hautazkoa da. Hala ere, phpBBko zeregin batzuk (gunetik kanpoko irudiak, kasu) ez dira ondo ibiliko bera gabe.',
	'PHP_VERSION_REQD'	=> 'PHP bertsioa >= 4.3.3',
	'POST_ID'	=> 'Post ID',
	'PREFIX_FOUND'	=> 'Taulen azterketak <strong>%s</strong> taula arrizki moduan erabilitako instalazio zuzena erakutsi du.',
	'PREPROCESS_STEP'	=> 'Prozesu-aurreko funtzioak/eskaerak burutzen',
	'PRE_CONVERT_COMPLETE'	=> 'Bihurtze-aurreko pauzu guztiak egoki burutu dira. Bihurtze prozesua orain has zenezake. Mesedez, izan kontuan ezkuz egin edo doitu beharko dituzun xehetasunak ager daitezkela prozesuan. Bihurtzearen ostean, egiazta itzazu batez ere emandako baimenak, bihurezina den bilaketa indizea berregin eta fitxategiak (irudiak eta irrifartxoak, adibidez) zuzen kopiatu diren aztertu ezazu.',
	'PROCESS_LAST'	=> 'Azken doiketak burutzen',

	'REFRESH_PAGE'	=> 'Orria berritu (F5) bihurtzearekin jarraitzeko',
	'REFRESH_PAGE_EXPLAIN'	=> 'Bai aukeratzen baduzu, bihurtzaileak orria berrituko du pausu bakoitza burutu ostean. Froga asmoekin eginiko zeure lehen bihurtzea baldin bada, Ez aukera dezazula gomendatzen dizugu.',
	'REQUIREMENTS_TITLE'	=> 'Instalazioaren bateragarritasuna',
	'REQUIREMENTS_EXPLAIN'	=> 'Instalazio osoa burutu baino lehen, phpBB3k frogatu egingo ditu zure zerbitzariko konfigurazioa eta fitxategiak phpBB3 bertan instalatu eta ibili daiteken ziurtatzeko. Mesedez, agertzen zaizkizun emaitza guztiak astiro irakurri eta ez ezazu hurrengo pausura jo eskatutako froga guztiak gainditu arte. Hautazko frogen menpe dauden ahalmenetarikoren bat erabili nahi bazenu, froga horreek ere gainditu direla egiazta beharko zenuke.',
	'RETRY_WRITE'	=> 'Konfigurazioa idazten berriro saitu',
	'RETRY_WRITE_EXPLAIN'	=> 'Nahi baduzu config.php fitxategiko baimenak aldatu daitezke phpBB3k berridatz dezan. Horrela egitea nahi bazenu Retryn (berriro saiatu) klikatu. Instalazioa amaitzerakoan config.phpko baimenak berrezartzeaz gogoratu.',

	'SCRIPT_PATH'	=> 'Scriptaren bidea',
	'SCRIPT_PATH_EXPLAIN'	=> 'Domeinuaren araberan phpBB3 jarrita dagoen bidea, adibidez <samp>/phpBB3</samp>.',
	'SELECT_LANG'	=> 'Hizkuntza aukeratu',
	'SERVER_CONFIG'	=> 'Zerbitzariaren konfigurazioa',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Ez da bilaketa indizea bihurtu',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Lehengo bilaketa indizea ez da aldatu. Bilaketek emaitza hutsa baino ez dute itzuliko. Bilaketa indize berria sortzeko, joan zaitez Administrazio Kontrol Panelera (ACP), Mantentze aukeratu eta bertako azpimenuan Bilaketa indizea aukeratu ezazu.',
	'SOFTWARE'	=> 'Foroko softwarea',
	'SPECIFY_OPTIONS'	=> 'Bihurtze aukerak zehaztu',
	'STAGE_ADMINISTRATOR'	=> 'Administratzailearen xehetasunak',
	'STAGE_ADVANCED'	=> 'Konfigurazio aurreratua',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Berez datozenetatik aparteko parametroren bat behar baduzu baino ez zaitez orri honetan gelditu. Ez baldin bazaude ziur, jo ezazu hurrengora parametro hauek Administrazio Kontrol Paneletik (ACP) aldatu bait daitezke.',
	'STAGE_CONFIG_FILE'	=> 'Konfigurazio fitxategia',
	'STAGE_CREATE_TABLE'	=> 'Datubaseko taulak sortu',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'phpBB 3.0k erabilitako taulak sortu eta datu batzuekin betetu egin dira. Jo ezazu hurrengo pausura phpBB3ren instalazioarekin bukatzeko.',
	'STAGE_DATABASE'	=> 'Datubasearen konfigurazioa',
	'STAGE_FINAL'	=> 'Azken pausua',
	'STAGE_INTRO'	=> 'Sarrera',
	'STAGE_IN_PROGRESS'	=> 'Bihurtzea burutzen',
	'STAGE_REQUIREMENTS'	=> 'Eskaerak',
	'STAGE_SETTINGS'	=> 'Konfigurazioa',
	'STARTING_CONVERT'	=> 'Bihurtze prozesua hasten',
	'STEP_PERCENT_COMPLETED'	=> '<strong>%d</strong>(e)tik <strong>%d</strong>. pausua',
	'SUB_INTRO'	=> 'Sarrera',
	'SUB_LICENSE'	=> 'Lizentzia',
	'SUB_SUPPORT'	=> 'Euskarria',
	'SUCCESSFUL_CONNECT'	=> 'Konexio zuzena',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'	=> 'Bertsio egonkor honen dohako euskarria <a href="http://www.phpbb.com/community/viewforum.php?f=46">phpBB 3.0.xko euskarri foroetan</a> aurkituko duzu. Bertan, konfigurazioari eta eman ditzaken arazoei, <a href="http://www.phpbb.com/community/viewforum.php?f=65">bihurtzeari</a> eta abarreko arazo orokorrei ematen zaie erantzun. <p>phpBB3ko beta bertsioa erabilten dutenei, sistemak azken bertsio egonkorrera eguneratzera animatzen ditugu.</p><h2>Aldaketak eta estiloak</h2><p> Aldaketei buruzko galderak eta zalantzak <a href="http://www.phpbb.com/community/viewforum.php?f=81">Aldaketen Forora</a> bidal itzazue.<br />Estiloek, txantilloiek edo  irudi bildumek sor ditzaketen arazo edo zalantzak<a href="http://www.phpbb.com/community/viewforum.php?f=80">Estiloen Foroan</a> kontsulta itzazue.<br /><br />Arazoa pakete jakin bateri badagokio, auzia pakete horri zuzenduriko gaira zuzenean bidali</p><h2>Euskarria nola lortu</h2><p>Hurrengo helbideetan:<br /><ul><li><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBBko ongietorri paketean</a></li><li><a href="http://www.phpbb.com/support/">Euskarri atalean</a></li><li><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Hasiera azkarreko gidan</a></li><li><a href="http://www.phpbb.com/support/documentation/3.0/">online dokumentazioa</a></li></ul><br /><p>Azken eguneraketa erabiltzen zauden ziurtatzeko <a href="http://www.phpbb.com/support/">harpidetu zaitez korreo zerrendara</a>.',
	'SYNC_FORUMS'	=> 'Foroak sinkronizatzen',
	'SYNC_POST_COUNT'			=> 'post_countak sinkronizatzen',
	'SYNC_POST_COUNT_ID'		=> '<var>entry</var>(e)tik %1$s(e)tik %2$s(e)ra post_countak sinkronizatzen.',
	'SYNC_TOPICS'	=> 'Gaiak sinkronizatzen',
	'SYNC_TOPIC_ID'	=> 'Sincronizando temas de <var>topic_id</var>(e)tik gaiak sinkronizatzen %1$s(e)tik %2$s(e)ra.',

	'TABLES_MISSING'	=> 'Ezin daitezek taula hauek aurkitu <br />» <strong>%s</strong>.',
	'TABLE_PREFIX'	=> 'Datubaseko taulentzako aurrizkia',
	'TABLE_PREFIX_EXPLAIN'		=> 'Aurrizkia hizki batekin hasi behar du eta hizkiak, zenbakiak eta gidoi-baxuak baino ezin ditu izan.',
	'TABLE_PREFIX_SAME'	=> 'Aurrizkia, bihurtzen zauden softwarean erabilitakoa izan behar du. <br />» Zehaztutako aurrizkia %s izan da.',
	'TESTS_PASSED'	=> 'Frogak gainditu egin dira',
	'TESTS_FAILED'	=> 'Frogek huts egin dute',

	'UNABLE_WRITE_LOCK'	=> 'Ezinezkoa fitxategi itxian idaztea.',
	'UNAVAILABLE'	=> 'Ez erabilgarria',
	'UNWRITABLE'	=> 'Ezinezkoa idaztea',
	'UPDATE_TOPICS_POSTED'	=> 'Bidalitako gaien informazioa sortzen',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Errorea gertatu da bidalitako gaien informazioa sortzen zen bitartean. Pausu hau Administrazio Kontrol Paneletik (ACP)  har zenezake berriro bihurtze prozesua burutzerakoan.',
	'VERIFY_OPTIONS'			=> 'Bihurtze aukerak egiaztatzen',
	'VERSION'	=> 'Bertsioa',

	'WELCOME_INSTALL'	=> 'Ongietorria phpBB3ko instalaziora',
	'WRITABLE'	=> 'Idatzi daiteke',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'	=> 'Fitxategi guztiak phpBBren azken bertsiora eguneratu dira. <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">Foroan saioa has zenezake eta estatistikak bidali</a> dena ondo doan ziurtatzeko. Ez ahaztu install karpeta ezabatu, berrizendu edo lekuz aldatzeaz! Zerbitzariari eta foroaren ezarpenei buruzko informazio eguneratua bidaltzea eskertuko genizuke. Jo ezazu <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">Esatistikak bidali</a> aukerara horretarako.',
	'ARCHIVE_FILE'	=> 'Jatorrizko fitxategia',

	'BACK'	=> 'Itzuli',
	'BINARY_FILE'	=> 'Fitxategi binarioa',
	'BOT'				=> 'Armiarma-Bota/Robota',

	'CHANGE_CLEAN_NAMES'   => 'Izen bakoitza erabiltzaile batek baino gehiagok ez dezan erabili ziurtatzen duen sistema aldatu egin da eta orain izen bereko hainbat erabiltzaile agertzen dira. Erabiltzaile hauek ezabatu edo berrizendu beharko dituzu jarraitu baino lehen.',
	'CHECK_FILES'	=> 'Fitxategiak egiaztatu',
	'CHECK_FILES_AGAIN'	=> 'Fitxategiak berriro egiaztatu',
	'CHECK_FILES_EXPLAIN'	=> 'Hurrengo pausuan fitxategi guztiak egiaztatu egingo dira gaurkotuekin erkatuz - Lehenengoz txekeatzen badira, pausu honek bere denboratxoa eraman lezake.',
	'CHECK_FILES_UP_TO_DATE'	=> 'Datubasearen arabera bertsio gaurkotua duzu. Agian, fitxategi guztiak benetan gaurkoturik dauden ziurtatzeko "Fitxategiak egiaztatu" pausura jo nahi zenezake.',
	'CHECK_UPDATE_DATABASE'	=> 'Eguneratze prozesua jarraitu',
	'COLLECTED_INFORMATION'	=> 'Fitxategiei buruzko informazioa',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Behekaldean agertzen den zerrendak gaurkotu behar lirateken fitxategien informazioa erakusten dizu. Mesedez, egoera bloke bakoitzaren aurrean agertzen den informazioa irakur ezazu euren esan nahia eta eguneratze arrakastatsua burutzeko zer egin behar zenukeen jakiteko.',
	'COLLECTING_FILE_DIFFS'			=> 'Fitxategien ezberdintasunak lortzen',
	'COMPLETE_LOGIN_TO_BOARD'	=> '<a href="../ucp.php?mode=login">Foroan saioa has zenezake</a> dena ondo doan ziurtatzeko. Ez ahaztu install karpeta ezabatu, berrizendu edo lekuz aldatzeaz!',
	'CONTINUE_UPDATE_NOW'			=> 'Eguneratze prozesua orain jarraitu',		// Eguneratzaileagatik eskatuta izanez gero, datubaseko eguneratze scriptaren bukaeran erakutsia 
	'CONTINUE_UPDATE'				=> 'Eguneratze prozesuarekin jarraitu',					// Fitxategia gehitu eta gero erakutsia prozesua oraindik ez dela bukatu adierazteko 
	'CURRENT_FILE'	=> 'Arazoaren hasiera - Jatorrizko fitxategiaren kodea eguneraketa baino lehenago',
	'CURRENT_VERSION'	=> 'Oraingo bertsioa',

	'DATABASE_TYPE'	=> 'Datubase mota',
	'DATABASE_UPDATE_INFO_OLD'	=> 'Instalazio karpetan dagoen datubaseko eguneratze fitxategia zaharkituta dago. Fitxategiko bertsio zuzena gehitu duzun ziurtatu.',
	'DELETE_USER_REMOVE'				=> 'Erabiltzailea eta bere mezuak ezabatu',
	'DELETE_USER_RETAIN'				=> 'Erabiltzailea ezabatu baina bere mezuak mantendu',
	'DESTINATION'	=> 'Xedezko fitxategia',
	'DIFF_INLINE'	=> 'Barneko',
	'DIFF_RAW'	=> 'Ezberdintasunak',
	'DIFF_SEP_EXPLAIN'	=> 'Fitxategi berrian erabilitako kode blokea',
	'DIFF_SIDE_BY_SIDE'	=> 'Alboz albo',
	'DIFF_UNIFIED'	=> 'Ezberdintasun bateratua',
	'DO_NOT_UPDATE'	=> 'Fitxategi hau ez gaurkotu',
	'DONE'								=> 'Egina',
	'DOWNLOAD'	=> 'Deskargatu',
	'DOWNLOAD_AS'	=> 'Deskargatu honela',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Aldatutako fitxategien artxiboa deskargatu (gomendaturik)',
	'DOWNLOAD_CONFLICTS'				=> 'Fitxategi honen arazoak jeitsi',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '&lt;&lt;&lt; bilatu arazoak ikusteko',
	'DOWNLOAD_UPDATE_METHOD'	=> 'Aldatutako fitxategiak deskargatu',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Behin deskargaturik, artxiboa zabaldu egin beharko zenuke. Bertan, zure phpBBko root karpetara igon beharko dituzun fitxategiak aurkituko dituzu. Dagokien karpetetan kokatu eta behekaldean agertzen den beste botoiarekin fitxategiak egiazta itzazu berriro.',

	'ERROR'	=> 'Errorea',
	'EDIT_USERNAME'	=> 'Erabiltzaile izena aldatu',

	'FILE_ALREADY_UP_TO_DATE'	=> 'Fitxategi gaurkotua dagoeneko.',
	'FILE_DIFF_NOT_ALLOWED'	=> 'Ezin zaio diffik jarri fitxategi honi.',
	'FILE_USED'	=> 'Informazioa fitxategi honetatik erabilita',
	'FILES_CONFLICT'	=> 'Arazodun fitxategiak',
	'FILES_CONFLICT_EXPLAIN'	=> 'Hurrengo fitxategiak aldatu egin dira eta ez dute lehengo bertsiokoekin bat egiten. phpBBk fitxategi hauek gehitzen saiatu nahi izanez gero,  arazoak sortuko dituztela erabaki du. Mesedez, arazoak ikertu itzazu eta eskuz konpontzen saiatu zaitez edota eguneratzea jarraitu hobetsitako batze sistema erabiliz. Arazoak eskuz konpontzea erabaki baldin baduzu, fitxategiak berriro egiazta itzazu behin aldatu eta gero. Fitxategiak batzeko sistemaren bat jarraitzea erabaki baldin baduzu, aukera bi dituzu: batetik, lehengo fitxategiko gatazka aurkezten duten lerroak ezabatzea eta bestetik, fitxategi berrian eginiko aldaketak ezabatzea.',
	'FILES_MODIFIED'	=> 'Aldatutako fitxategiak',
	'FILES_MODIFIED_EXPLAIN'	=> 'Hurrengo fitxategiak aldatu egin dira eta ez dute lehengo bertsiokoekin bat egiten. Eguneratutako fitxategia, aldaketa hauen eta fitxategi berriaren arteko bateratze bat izango da.',
	'FILES_NEW'	=> 'Fitxategi berriak',
	'FILES_NEW_EXPLAIN'	=> 'Hurrengo fitxategiak ez dira ageri zure instalazioan eta gehitu egingo dira.',
	'FILES_NEW_CONFLICT'	=> 'Arazodun fitxategi berriak',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Hurrengo fitxategiak berriak dira azkenengo bertsioan, baina badaude izen bereko eta leku berean dauden fitxategiak dagoeneko. Fitxategi berriek gainidatzi egingo dituzte.',
	'FILES_NOT_MODIFIED'	=> 'Aldaketarik gabeko fitxategiak',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Hurrengo fitxategiak ez dira aldatu eta gaurkotu nahi duzun bertsioko phpBBko jatorrizko fitxategiekin bat egiten dute.',
	'FILES_UP_TO_DATE'	=> 'Gaurkotutako fitxategiak',
	'FILES_UP_TO_DATE_EXPLAIN'	=> 'Hurrengo fitxategiak gaurkotuak izan dira dagoeneko.',
	'FTP_SETTINGS'	=> 'FTP konfigurazioa',
	'FTP_UPDATE_METHOD'	=> 'FTPtik gehitu',

	'INCOMPATIBLE_UPDATE_FILES'	=> 'Aurkitutako fitxategi gaurkotuak ez dira instalatu duzun bertsioarekin bateragarriak. Instalaturik duzun bertsioa %1$s da eta gaurkotutako fitxategia phpBBko %2$s bertsiotik %3$s.era da.',
	'INCOMPLETE_UPDATE_FILES'	=> 'Gaurkotutako fitxategiak osatu gabe daude. ',
	'INLINE_UPDATE_SUCCESSFUL'	=> 'Datubasearen gaurkotze arrakastatsua. Gaurkotze prozesuarekin jarraitu behar duzu orain.',

	'KEEP_OLD_NAME'		=> 'Erabiltzaile izena mantendu',

	'LATEST_VERSION'	=> 'Azkeneko bertsioa',
	'LINE'	=> 'Lerroa',
	'LINE_ADDED'	=> 'Gehituta',
	'LINE_MODIFIED'	=> 'Aldatuta',
	'LINE_REMOVED'	=> 'Ezabatuta',
	'LINE_UNMODIFIED'	=> 'Aldatu gabea',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Instalazioa gaurkotzeko saioa hasi behar duzu lehenik.',

	'MAPPING_FILE_STRUCTURE'	=> 'Fitxategien gehitzea erraztearren, hemen dituzu zure phpBB instalazioa mapeatzen duten fitxategien kokapenak.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Bateratzearen aldaketak',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Ez bateratu - erabili fitxategi berria',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Ez bateratu - erabili dagoeneko instalaturiko fitxategia',
	'MERGE_MOD_FILE_OPTION'	=> 'Aldaketak bateratu (phpBB kode berria ezabatzen du arazodun blokean)',
	'MERGE_NEW_FILE_OPTION'	=> 'Aldaketak bateratu (aldatutako kodea ezabatzen du arazodun blokean)',
	'MERGE_SELECT_ERROR'	=> 'Arazodun fitxategien bateratze modua ez da egoki hautatu.',
	'MERGING_FILES'				=> 'Ezberdintasunak bateratzen',
	'MERGING_FILES_EXPLAIN'		=> 'Xedezko fitxategian agertuko diren aldaketak egiten.<br /><br />Mesedez, phpBBk aldatutako fitxategi guztietako eragiketak burutu arte itxaron ezazu.',

	'NEW_FILE'	=> 'Arazoaren bukaera',
	'NEW_USERNAME'					=> 'Erabiltzaile izen berria',
	'NO_AUTH_UPDATE'	=> 'Ez duzu gaurkotzeko baimenik',
	'NO_ERRORS'	=> 'Errorerik ez',
	'NO_UPDATE_FILES'	=> 'Hurrengo fitxategiak ez dira gaurkotu',
	'NO_UPDATE_FILES_EXPLAIN'	=> 'Hurrengo fitxategiak berriak dira edo aldatu egin dira baina ez da egon behar luketen karpeta aurkitu zure instalazioan. Zerrenda honetan language/ edo styles/ karpetetatik aparte dauden fitxategiak agertzen baldin badira, agian direktoria aldatu egin duzu eta eguneratzea osatu gabe egon liteke.',
	'NO_UPDATE_FILES_OUTDATED'	=> 'Ez da eguneratze karpeta baliogarririk aurkitu. Mesedez, beharrezko fitxategi guztiak gehitu dituzun ziurtatu.<br /><br />Dirudienez, zure instalazioa<strong>ez</strong> dago gaurkotuta. Zure phpBBko %1$s. bertsiorako eguneraketak badaude. Bisita ezazu<a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> %2$s. bertsiotik %3$s. bertsiora gaurkotzeko behar duzun paketea deskargatzeko.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Bertsio gaurkotua duzu. Ez duzu zertan eguneratze tresnarik erabili behar. Fitxategiak osorik dauden aztertu nahi baduzu, eguneratze fitxategi egokiak gehitu dituzun ziurtatu.',
	'NO_UPDATE_INFO'	=> 'Ezin da fitxategiak gaurkotzeko informaziorik aurkitu.',
	'NO_UPDATES_REQUIRED'	=> 'Ez da gaurkotzerik behar',
	'NO_VISIBLE_CHANGES'	=> 'Ez dago ikus daiteken aldaketarik',
	'NOTICE'	=> 'Oharra',
	'NUM_CONFLICTS'	=> 'Arazo zenbakia',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Fitxategi %1$d %2$d(e)tik dituen ezberdintasunak egiaztatzen.<br />Mesedez, fitxategi guztiak egiaztatu arte itxaron ezazu.',

	'OLD_UPDATE_FILES'	=> 'Eguneratze fitxategiak zaharkituta daude. Aurktitutako eguneratze fitxategiak phpBB %1$s(e)tik phpBB %2$s(e)ra gaurkotzeko balio dute, baina phpBBko azkeneko bertsioa %3$s da.',

	'PACKAGE_UPDATES_TO'				=> 'Pakete honek bertsio honetara eguneratzen du:',
	'PERFORM_DATABASE_UPDATE'	=> 'Datubasearen eguneraketa burutu',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Behekaldean, datubasearen eguneratze scriptari lotura aurkituko duzu. Datubasearen eguneratzeak denboratxo bat eraman dezake, beraz, ez ezazu prozesua gelditu eskegi egin dela badirudi ere. Eguneratzea burutu eta gero, prozesua jarraitzeko ematen zaizkizun pausuak jarraitu.',
	'PREVIOUS_VERSION'	=> 'Aurreko bertsioa',
	'PROGRESS'	=> 'Prozesua',

	'RESULT'	=> 'Emaitza',
	'RUN_DATABASE_SCRIPT'	=> 'Nire datubasea orain gaurkotu',

	'SELECT_DIFF_MODE'	=> 'Diff modoa aukeratu',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Deskarga fitxategiaren formatua aukeratu',
	'SELECT_FTP_SETTINGS'	=> 'FTP konfigurazioa aukeratu',
	'SHOW_DIFF_CONFLICT'	=> 'Ezberdintasunak/Arazoak erakutsi',
	'SHOW_DIFF_FINAL'	=> 'Ateratako fitxategia erakutsi',
	'SHOW_DIFF_MODIFIED'	=> 'Aldatutako ezberdintasunak erakutsi',
	'SHOW_DIFF_NEW'	=> 'Fitxategien edukia erakutsi',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Ezberdintasunak erakutsi',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Aldatu gabeko ezberdintasunak erakutsi',
	'SOME_QUERIES_FAILED'	=> 'Kontsulta batzuk huts egin dute. Erroreak behekaldeko zerrendan agertzen dira.',
	'SQL'	=> 'SQL',
	'SQL_FAILURE_EXPLAIN'	=> 'Ez zenuke honegatik lar kezkatu behar eguneratze prozesuak aurrera egingo bait du. Ez baldin badizu eguneratzea burutzen huzten, jo ezazu  <a href="../docs/README.html">IRAKURRI</a> orrira laguntza nola lortu jakiteko.',
	'STAGE_FILE_CHECK'	=> 'Fitxategiak egiaztatu',
	'STAGE_UPDATE_DB'	=> 'Datubasea eguneratu',
	'STAGE_UPDATE_FILES'	=> 'Fitxategiak eguneratu',
	'STAGE_VERSION_CHECK'	=> 'Bertsioa egiaztatu',
	'STATUS_CONFLICT'	=> 'Arazodun aldatutako fitxategia',
	'STATUS_MODIFIED'	=> 'Aldatutako fitxategia',
	'STATUS_NEW'	=> 'Fitxategi berria',
	'STATUS_NEW_CONFLICT'	=> 'Arazodun fitxategi berria',
	'STATUS_NOT_MODIFIED'	=> 'Aldatu gabeko fitxategia',
	'STATUS_UP_TO_DATE'	=> 'Dagoeneko aldatutako fitxategia',

	'TOGGLE_DISPLAY'			=> 'Erakutsi/Gorde fitxategi zerrenda',
	'TRY_DOWNLOAD_METHOD'		=> 'Agian aldatutako fitxategien deskarga metodoa frogatu nahi zenezake.<br />Metodo hau beti dabil ondo eta gainera eguneratzeak burutzeko gomendaten den bidea da.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Metodo hau orain saiatu',

	'UPDATE_COMPLETED'	=> 'Eguneratzea burutu da',
	'UPDATE_DATABASE'	=> 'Datubasea eguneratu da',
	'UPDATE_DATABASE_EXPLAIN'	=> 'Hurrengo pausuan datubasea eguneratuko da',
	'UPDATE_DATABASE_SCHEMA'	=> 'Datubaseko eskema eguneratzen',
	'UPDATE_FILES'	=> 'Fitxategiak eguneratu dira',
	'UPDATE_FILES_NOTICE'	=> 'Mesedez, foroko fitxategiak ere eguneratu dituzun ziurtatu, fitxategi honek zure datubasea baino ez bait du eguneratzen.',
	'UPDATE_INSTALLATION'	=> 'phpBB instalazioa eguneratu da',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Aukera honekin, zure phpBB instalazioa azkeneko bertsiora eguneratu zenezake.<br /> Prozesuak irauten duen bitartean, fitxategi guztiak egiaztatuko dira osorik dauden ziurtatzeko. Lehenagoko fitxategi guztiak eta egingo zaizkien aldaketak ikusteko ahalmena izango duzu baita.<br /><br /><p>Fitxategien eguneratzea burutzeko aukera bi dituzu:</p><h2>Eskuz eguneratzea</h2> <p>Eguneratze mota honekin zuk zeuk aldatu dituzun fitxategien paketea baino ez duzu deskargatzen. Horrela, lehengo bertsioan egin zenitzaken fitxategien aldaketak (MODak) ez dituzula galduko ziurta zenezake. Behin paketea deskargaturik, fitxategiak eskuz gehitu beharko dituzu bakoitzari dagokion lekura zure phpBBko root karpeta barruan. Pausu hau burutu eta gero fitxategiak kokapen egokira igon dituzula ziurta ezazu.</p><h2>Automatikoki eguneratzea FTP bidez</h2><p>Lehenengo aukeraren antzekoa da baina aldatutako fitxategiak deskargatu eta berriro gehitzea ekiditzen duzu aukera honekin. Eguneratze automatikoa erabiltzeko zure FTP saioaren xehetasunak ezagutu beharko dituzu eskatu egingo zaizkizulako. Behin amaitu eta gero fitxategien kokapena egiaztatu beharko duzu berriro eguneratzea zuzen burutu dela ziurtatzeko.',
	'UPDATE_INSTRUCTIONS'	=> '		

		<h1>Plazaratze iragarkia</h1>

		<p>Mesedez, eguneratze prozesuarekin jarraitu baino lehen, irakur ezazu<a href="%1$s" title="%1$s"><strong> azkeneko bertsioaren plazaratze iragarkia</strong></a>, erabilgarria liteken informazioa eta deskarga osora bideratzen dituen loturak eta aldaketen erregistroa ditu eta.</p>

		<br />

		<h1>Zure instalazioa nola eguneratu Eguneratze Automatiko Paketea erabiliz</h1>

		<p>Instalazioa eguneratzeko pausu hauek baino ez dituzu jarraitu behar: (hemen azaltzen diren pausuak Eguneratze Automatiko Paketea erabiltzen baduzu baino ez dira baliagarriak. INSTALL.html dokumentuan eguneratze prozesua burutzeko erabil zenezaken beste hainbat metodoren zerrenda aurkituko duzu)</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li><a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com webguneko deskarga atalera</a> jo ezazu eta "phpBB Eguneratze Automatiko Paketea" deskargatu.<br /><br /></li>
			<li>Paketea zabaldu.<br /><br /></li>
			<li>Deskonprimatutako instalazio karpeta zure phpBBko root karpetara gehitu (config.php fitxategia dagoen lekura, hain zuzen).<br /><br /></li>
		</ul>

		<p>Behin fitxategia zure forora gehitu eta gero, foroa lineaz kanpo egongo da erabiltzaileentzako instalazio karpeta egotearen erruz.<br /><br />
		<strong><a href="%2$s" title="%2$s">Orain eguneratze prozesua hasi nabigatzailea install karpetan jarriz. </a>.</strong><br />
		<br />
		Eguneratze prozesuan jarritako pausuak jarraitzea baino ez duzu orain. Eguneratzea burutzerakoan ohartu egingo zaizu.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Osatu gabeko eguneratzea aurkitu da </h1>

		<p>phpBBk osatu gabeko eguneratze automatiko bat aurkitu du. Eguneratze automatiko tresnak adierazitako pausu guztiak zuzen jarraitu duzun ziurtatu. Berriro eguneratzeko lotura agertuko zaizu behekaldean edo jo ezazu zuzenean install karpetara.</p>
	',
	'UPDATE_METHOD'	=> 'Eguneratze metodoa',
	'UPDATE_METHOD_EXPLAIN'	=> 'Erabili nahi duzun eguneratze metodoa aukeratu dezakezu orain. Fitxategiak FTP bidez gehitzea aukeratzen baldin baduzu, zure FTP kontuko xehetasunakin bete beharko duzun formulario bat agertuko zaizu. Metodo hau erabiliz fitxategiak automatikoki gehituko dira kokapen berrira eta lehengo fitxategien segurtasun kopia sortuko da beraien izenei .bak gehituz. Aldatutako fitxategiak deskargatzea aukeratzen baldin baduzu, paketeak zabaldu eta foroko karpetetan eskuz kokatu beharko dituzu.',
	'UPDATE_REQUIRES_FILE'			=> 'Eguneratzaileak hurrengo fitxategia behar du agerian: %s',
	'UPDATE_SUCCESS'	=> 'Eguneratze arrakastatsua',
	'UPDATE_SUCCESS_EXPLAIN'	=> 'Fitxategi guztiak zuzen eguneraturik. Hurrengo pausuan fitxategik guztiak egiaztatuko dira eguneratzea zuzen burutu den ziurtatzeko.',
	'UPDATE_VERSION_OPTIMIZE'	=> 'Bertsioa eguneratzen eta taulak hobetzenActualizando versión y optimizando tablas',
	'UPDATING_DATA'	=> 'Datuak eguneratzen',
	'UPDATING_TO_LATEST_STABLE'	=> 'Datubasea azkeneko bertsio egonkorrera eguneratzen',
	'UPDATED_VERSION'	=> 'Bertsio eguneratua',
	'UPGRADE_INSTRUCTIONS'			=> '<strong>%1$s</strong> eguneraketa beria eskuragarri dago. Irakur ezazu, mesedez, <a href="%2$s" title="%2$s"><strong>kaleratzearen berria</strong></a> zer eskaintzen duen eta nola eguneratu jakiteko.',
	'UPLOAD_METHOD'	=> 'Gehitze metodoa',

	'UPDATE_DB_SUCCESS'	=> 'Datubasea zuzen  eguneratu da.',
	'USER_ACTIVE'					=> 'Gaitutako erabiltzailea',
	'USER_INACTIVE'					=> 'Desgaitutako erabiltzailea',

	'VERSION_CHECK'	=> 'Bertsioa egiaztatu',
	'VERSION_CHECK_EXPLAIN'	=> 'Erabiltzen zauden phpBB bertsioa eguneratuta dagoen egiaztatu.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Erabiltzen zauden phpBB bertsioa ez dago eguneratua. Mesedez, eguneratze prozesuarekin jarraitu.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Erabiltzen zauden phpBB bertsioa ez dago eguneratua.<br />Behekaldean, plazaratutako azken bertsioaren iragarkira bidaliko dizun lotura eta eguneratzea burutzera lagunduko dizuten argibideak aurkituko dituzu.',
	'VERSION_UP_TO_DATE'	=> 'Zure instalazioa eguneratuta dago, ez dago eguneraketarik erabiltzen zauden phpBB bertsiorako. Dena dela, fitxategien balioztatze frogaren bat burutu zenezake.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Zure instalazioa eguneratuta dago, ez dago eguneraketarik erabiltzen zauden phpBB bertsiorako. Ez duzu zure instalazioa berritzerik behar.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Zure phpBB instalazioa ez dago eguneratuta.',
	'VIEWING_FILE_CONTENTS'	=> 'Fitxategien edukia erakusten',
	'VIEWING_FILE_DIFF'	=> 'Fitxategien ezberdintasunak erakusten',

	'WRONG_INFO_FILE_FORMAT'	=> 'Fitxategi formatuari buruzko informazio okerra',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'	=> 'Eskerrik asko, Administrazioak',
	'CONFIG_SITE_DESC'	=> 'Zure foroa deskribatuko duen testu laburra',
	'CONFIG_SITENAME'	=> 'zuredomeinua.com',

	'DEFAULT_INSTALL_POST'	=> 'Hau zure phpBB3ko instalazioko adibide mezu bat duzu. Nahi baduzu mezu hau ezabatu eta foroa atontzen jarrai zenezake, dirudienez dena ondo joan bait da instalazioan. Instalazio prozesuan, zure lehenengo kategoria eta foroari baimen sorta jakin bat eman zaizkie administratzaileak, robotak, moderadoreak, gonbidatuak, izen emandako erabiltzaileak eta izen emandako COPPA erabiltzaileak zehazteko. Lehenengo kategori eta foro hauek ezabatzea aukeratzen baldin badituzu, ez ezazu ahaztu baimen sortak mantentzea sortuko dituzun kategoria eta foro berrietarako. Zure lehenengo kategoriko eta foroko baimenak kopiatu eta izenez aldatzea gomendatzen da.<br/>Itzulpen honi buruzko iradokizunik edo hobekuntzarik aditzera emateko, idatzi Librezaleko foroan edo helbide honetara bidali: bixerdo [abildua] gmail [puntu] com. Eskerrik asko!',

	'FORUMS_FIRST_CATEGORY'		=> 'Zure lehen kategoria',
	'FORUMS_TEST_FORUM_DESC'	=> 'Zure lehen foroko deskribapena',
	'FORUMS_TEST_FORUM_TITLE'	=> 'Zure lehen foroa',

	'RANKS_SITE_ADMIN_TITLE'	=> 'Foroko Administratzailea',
	'REPORT_WAREZ'				=> 'Mezu honen berri emana mezuak legez kontrako softwaretara (warez) bideratzen d(it)uen lotura(k) d(it)uelako.',
	'REPORT_SPAM'				=> 'Mezu honen berri emana mezuak webgune edo produktu bati buruz informatzea (spam) baino ez duelako  helburu.',
	'REPORT_OFF_TOPIC'			=> 'Mezu honen berri emana mezua gaitik kanpo (off-topic) dagolako.',
	'REPORT_OTHER'				=> 'Mezu honen berri emana mezua ez delako inolako kategoriara atxikitzen. Mesedez, deskribapen eremua erabili.',

	'SMILIES_ARROW'	=> 'Gezia',
	'SMILIES_CONFUSED'	=> 'Nahastuta',
	'SMILIES_COOL'	=> 'Lasai',
	'SMILIES_CRYING'	=> 'Negarrez edo oso tristerik',
	'SMILIES_EMARRASSED'	=> 'Lotsatuta',
	'SMILIES_EVIL'	=> 'Txarra edo oso eroa',
	'SMILIES_EXCLAMATION'	=> 'Harridura',
	'SMILIES_GEEK'	=> 'Geek',
	'SMILIES_IDEA'	=> 'Idea',
	'SMILIES_LAUGHING'	=> 'Barreka',
	'SMILIES_MAD'	=> 'Ero',
	'SMILIES_MR_GREEN'	=> 'Berde Jauna',
	'SMILIES_NEUTRAL'	=> 'Neutrala',
	'SMILIES_QUESTION'	=> 'Galdera',
	'SMILIES_RAZZ'	=> 'Razz',
	'SMILIES_ROLLING_EYES'	=> 'Gogaituta',
	'SMILIES_SAD'	=> 'Triste',
	'SMILIES_SHOCKED'	=> 'Hunkituta',
	'SMILIES_SMILE'	=> 'Irrifarrea',
	'SMILIES_SURPRISED'	=> 'Harrituta',
	'SMILIES_TWISTED_EVIL'	=> 'Deabru',
	'SMILIES_UBER_GEEK'	=> 'Oso Geek',
	'SMILIES_VERY_HAPPY'	=> 'Oso pozik',
	'SMILIES_WINK'	=> 'Begi-keinu',

	'TOPICS_TOPIC_TITLE'	=> 'Ongietorri phpBB3ra',
));

?>