<?php
/**
*
* acp_board.php [Basque [eu]]
*
* @package   language
* @version   $Id$
* @copyright (c) 2005 phpBB Group
* @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License 2.0

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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Hemendik zure foroko oinarrizko eragiketak zehaztu ditzakezu, adibidez bere izena eta deskribapena jarri, hizkuntza eta ordu-zona lehenetsi...',
	'CUSTOM_DATEFORMAT'				=> 'Pertsonalizatu…',
	'DEFAULT_DATE_FORMAT'			=> 'Data formatoa',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Data formatua PHPko <code>date</code> funtzioko bera da.',
	'DEFAULT_LANGUAGE'				=> 'Lehenetsitako hizkuntza',
	'DEFAULT_STYLE'					=> 'Lehenetsitako estiloa',
	'DISABLE_BOARD'					=> 'Foroa ezgaitu',
	'DISABLE_BOARD_EXPLAIN'			=> 'Honek erabiltzaileei foroa eskuragaitz egingo die. Nahi izanez gero, erakutsiko zaien testu txiki bat (255 karaktere) ere idatz daiteke.',
	'OVERRIDE_STYLE'				=> 'Erabiltzailearen estiloa ordezkatu',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Erabiltzailearen estiloa lehenetsitakoagaitik ordezkatzen du.',
	'SITE_DESC'						=> 'Webguneko deskribapena',
	'SITE_NAME'						=> 'Webguneko izena',
	'SYSTEM_DST'					=> 'Uda ordutegia gaitu (DST-Daylight Saving Time)',
	'SYSTEM_TIMEZONE'				=> 'Gonbidatu(ar)en ordu-zona',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Konektaturik ez dauden erabiltzaileei (gonbidatuak, robotak) bistaratuko zaien ordu-zona. Konektaturiko erabiltzaileek beraiek ezarriko dute beraien ordu-zona erabiltzaile kontrol panelan izena ematerakoan.',
	'WARNINGS_EXPIRE'				=> 'Ohartarazpenen iraupena',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Ohartarazpenak automatikoki iraungi arte igaroko diren egun kopurua. Ezarri balorea 0n ohartarazpenak iraunkor egiteko.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hemendik foroko hainbat ezaugarri gaitu/ezgaitu zenitzake.',

	'ALLOW_ATTACHMENTS'				=> 'Fitxategi erantsiak baimendu',
	'ALLOW_BIRTHDAYS'				=> 'Urtebetetzeak baimendu',
	'ALLOW_BIRTHDAYS_EXPLAIN'		=> 'Urtebetzeak sartzen utzi eta profiletan adina ikusgarria izan daitela baimendu. Mesedez,izan kontuan foroko aurkibidean aurkitu daiteken urtebetetzeen zerrenda beste konfigurazio parametro batek kontrolatzen duela.',
	'ALLOW_BOOKMARKS'				=> 'Gaiak gogokoetara gehitzea baimendu',
	'ALLOW_BOOKMARKS_EXPLAIN'		=> 'Erabiltzaileak bere Gogokoak gordetzeko aukera izango du.',
	'ALLOW_BBCODE'					=> 'BBCode baimendu',
	'ALLOW_FORUM_NOTIFY'			=> 'Foroetara harpidetza baimendu',
	'ALLOW_NAME_CHANGE'				=> 'Erabiltzaile izenen aldaketak baimendu',
	'ALLOW_NO_CENSORS'				=> 'Debekatutako hitzen zerrenda ezgaitzea baimendu',
	'ALLOW_NO_CENSORS_EXPLAIN'		=> 'Erabiltzaileek debekatutako hitzen zerrenda ezgaitzea aukera lezakete euren mezu eta mezu pribatuetarako.',
	'ALLOW_PM_ATTACHMENTS'			=> 'Mezu pribatuetan fitxategi erantsiak baimendu',
	'ALLOW_PM_REPORT'			=> 'Erabiltzaileak mezu pribatuen berri ematea baimendu',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Ezarpen hau gaituz, erabiltzaileek moderadoreei mezu pribatuen berri emateko aukera izango dute. Berri emandako mezu pribatu hauek ikusgarri bihurtuko dira Moderadorearen Kontrol Panelan.',
	'ALLOW_QUICK_REPLY'			=> 'Erantzun azkarra baimendu',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Etengailu (switch) honek, erantzun azkarra emateko aukera foro osoan ezgaitzea baimentzen du. Gaituta dagoenean foro bakoitzeko ezarpenek baimenduko dute erantzun azkarra emateko aukera.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Bidali eta gaitu erantzun azkarra emateko aukera foro guztietan',
	'ALLOW_SIG'						=> 'Sinadurak baimendu',
	'ALLOW_SIG_BBCODE'				=> 'BBCode markak baimendu erabiltzaileen sinaduretan',
	'ALLOW_SIG_FLASH'				=> 'BBCode <code>[FLASH]</code> markak baimendu erabiltzaileen sinaduretan',
	'ALLOW_SIG_IMG'					=> 'BBCode <code>[IMG]</code> markak baimendu erabiltzaileen sinaduretan',
	'ALLOW_SIG_LINKS'				=> 'Loturen erabilera baimendu erabiltzaileen sinaduretan',
	'ALLOW_SIG_LINKS_EXPLAIN'		=> 'Ezgaiturik balego, BBCode <code>[URL]</code> markak eta las URL magikoak ere ezgaituko lirateke.',
	'ALLOW_SIG_SMILIES'				=> 'Irrifartxoen erabilera baimendu erabiltzaileen sinaduretan',
	'ALLOW_SMILIES'					=> 'Irrifartxoak baimendu',
	'ALLOW_TOPIC_NOTIFY'			=> 'Gaien harpidetza baimendu',
	'BOARD_PM'						=> 'Mezu pribatuak',
	'BOARD_PM_EXPLAIN'				=> 'Mezularitza pribatuaren aukera gaitu erabiltzaile guztientzako.',
));

// Irudien ezarpenak
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Abatarrak (irudiak deituko ditugu hemendik aurrera) erabiltzaile bakoitzak bereizgarri modura erabiltzen dituen irudi txiki eta bakarrak dira. Foroaren estiloaren arabera aurkezten dira, baina orokorrean erabiltzaile izenaren behekaldean agertzen dira. Hemendik, erabiltzaileek beraien irudiak nola zehaztu ditzateken erabaki zenezake. Mesedez, kontuan izan irudiak gehitzeko beharrezkoa izango duzula behekaldean agertzen den karpeta sortzea eta web zerbitzariak bertan idazteko baimena izan dezala zehaztea. Izan kontuan, baita ere, fitxategi tamaina mugatzen dituzten neurriak, gehitutako irudietara baino ez direla ezartzen, ez urruneko lotura duten irudiei.',

	'ALLOW_AVATARS'					=> 'Irudiak gaitu',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Irudien erabilera baimendu orokorki;<br />Irudien erabilpena orokorrean edo bestelako eraren batera ezgaitzen baldin badituzu, ezgaitutako irudiak ez dira gehiagotan foroan erakutsiko, baina erabiltzaileek oraindik euren Erabiltzaile Kontrol Paneletik irudiak jaisteko aukera izango dute.',	
	'ALLOW_LOCAL'					=> 'Irudi galeria gaitu',
	'ALLOW_REMOTE'					=> 'Urruneko irudiak gaitu',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Beste webgune batetik loturiko irudiak',
	'ALLOW_REMOTE_UPLOAD'			=> 'Kanpoko irudiak erakustea gaitu',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Beste webguneetako irudiak erakusteabaimendu.'
	'ALLOW_UPLOAD'					=> 'Irudiak gehitzea gaitu',
	'AVATAR_GALLERY_PATH'			=> 'Irudi galeriaren bidea',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Aurretik gehituriko irudietarako root karpetan duzun bidea, adbez. <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Irudiak gordeko diren bidea',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Root karpetapeko bidea, adbez. <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Irudiaren gehinezko neurriak',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Altuera x Zabalera pixeletan)',
	'MAX_FILESIZE'					=> 'Irudiaren gehienezko fitxategi tamaina',
	'MAX_FILESIZE_EXPLAIN'			=> 'Gehitutako irudi fitxategietarako. Balorea huts baldin bada (0), igon daitekenaren tamaina zure PHP instalazioaren ebazpenek baino ez dute mugatzen.',
	'MIN_AVATAR_SIZE'				=> 'Irudiaren gutxienezko neurriak',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Altuera x zabalera pixeletan)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'Hemendik mezularitza pribatuaren konfigurazio lehenetsia zehaztu zenezake.',

	'ALLOW_BBCODE_PM'			=> 'Mezu pribatuetan BBCode baimendu',
	'ALLOW_FLASH_PM'			=> 'BBCode <code>[FLASH]</code> marken erabilera baimendu',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Kontuan izan flash erabiltzeko gaitasuna, mezu pribatuetan gaitzen bada ere, baimen orokorren baldintzapean badela.',
	'ALLOW_FORWARD_PM'			=> 'Mezu pribatuak berbidaltzea baimendu',
	'ALLOW_IMG_PM'				=> 'BBCode <code>[IMG]</code> marken erabilera baimendu',
	'ALLOW_MASS_PM'				=> 'Mezu pribatuak erabiltzaile bati baino gehiago edo taldeetara bidaltzea baimendu.',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Taldeetara bidaltzea, talde konfigurazio orrian ere zehaztu daiteke taldeka.',
	'ALLOW_PRINT_PM'			=> 'Mezu pribatuetan imprimatze bista baimendu',
	'ALLOW_QUOTE_PM'			=> 'Mezu pribatuetan aipamenak (zitak) baimendu',
	'ALLOW_SIG_PM'				=> 'Mezu pribatuetan sinadurak baimendu',
	'ALLOW_SMILIES_PM'			=> 'Mezu pribatuetan irrifartxoak (emotikonoak) baimendu',
	'BOXES_LIMIT'				=> 'Ontziko gehienezko mezu pribatuak',
	'BOXES_LIMIT_EXPLAIN'		=> 'Erabiltzaileek ezingo dute mezu pribatu kopuru hau baino gehiago jaso beraien mezu pribatuetarako ontzietan. Mezu kopuru mugagabea jaso dezaten, balorea 0an jarri.',
	'BOXES_MAX'					=> 'Gehienezko mezu pribatuetarako ontzi',
	'BOXES_MAX_EXPLAIN'			=> 'Erabiltzaileek lehenetsirik duten sor ditzaketen mezu pribatuetarako karpeten kopurua.',
	'ENABLE_PM_ICONS'			=> 'Mezu pribatuetako izenburuetan irrifartxoen (emotikonoak) erabilera gaitu',
	'FULL_FOLDER_ACTION'		=> 'Karpeta betetzerakoan lehenetsitako eragiketa',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Erabiltzaile baten karpeta betetzerakoan lehenetsitako eragiketa, erabiltzaileak berak aukeratutako eragiketa (baten bat aukeratu baldin badu) ez dela aplikagarria onarturik. Salbuespen bakarra "Bidalitako mezuak" karpetan datza, non lehenetsitako eragiketa beti mezu zaharrak ezabatzea izango den.',
	'HOLD_NEW_MESSAGES'			=> 'Mezu berriak zain utzi',
	'PM_EDIT_TIME'				=> 'Aldatzeko tarte muga',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Bidaligabeko mezu pribatu bat aldatzeko denbora mugatzen du. Balorea 0an jarrita aukera hau ezgaitu egiten da.',
	'PM_MAX_RECIPIENTS'			=> 'Baimendutako gehienezko hartzaile',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Baimendutako gehienezko hartzaile kopurua. 0 jarrita hartzaile kopuru mugagabea baimenduko da. se permitirá un número ilimitado. Aukera hau talde konfigurazio orrian ere zehaztu daiteke taldeka.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Hemendik mezuen lehenetsitako konfigurazioa zehaztu zenezake.',
	'ALLOW_POST_LINKS'					=> 'Mezu/mezu pribatuetan loturak baimendu',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Aukera hau ezgaituta baldin badago, BBCode <code>[URL]</code> eta URL magikoak/automatikoak ezgaituta egongo dira.',
	'ALLOW_POST_FLASH'					=> 'Mezuetan BBCODE <code>[FLASH]</code> marken erabilera baimendu',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Aukera hau ezgaituta baldin badago, BBCode <code>[FLASH]</code> marka ezgaituta egongo dira mezuetan. Bestela, baimen orokorretatik zehaztu daiteke zeintzuk diren BBCODE <code>[FLASH]</code> markak erabili ditzaketen erabiltzaileak.',
	
	'BUMP_INTERVAL'					=> 'Sustapen tartea',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Gai batera bidalitako azkenengo mezua eta gai hori sustatzeko minutu, ordu edo eguneko tartea. Balorea 0an jarri aukera hau ezgaitzeko.',
	'CHAR_LIMIT'					=> 'Gehienezko karakatere kopurua mezuko',
	'CHAR_LIMIT_EXPLAIN'			=> 'Mezu baten baimendutako karaktere kopurua. Balorea 0an jarri karaktere kopuru mugagabea zehazteko.',
	'DELETE_TIME'					=> 'Ezabatzeko tartea mugatu',
	'DELETE_TIME_EXPLAIN'			=> 'Mezu berri bat ezabatzeko denbora-tartea mugatzen du. Balorea 0an jarri aukera hau ezgaitzeko.',
	'DISPLAY_LAST_EDITED'			=> 'Azkenengo aldaketaren ordua erakutsi',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Mezuetan azkenengo aldaketaren ordua erakutsiko den aukeratu.',
	'EDIT_TIME'						=> 'Aldatzeko tarte muga',
	'EDIT_TIME_EXPLAIN'				=> 'Mezu berri bat aldatzeko denbora tartea mugatzen du. Balorea 0an jarri aukera hau ezgaitzeko.',
	'FLOOD_INTERVAL'				=> 'Berria bidaltzeko tartea',
	'FLOOD_INTERVAL_EXPLAIN'		=>'Erabiltzaile batek mezu berria bidaltzeko itxaron behar duen segundu kopurua. Erabiltzaileek tarte hau bazter dezaten gaitzeko, beraien baimenak aldatu.',
	'HOT_THRESHOLD'					=> 'Gai arrakastatsu izateko ataria',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Gai bakoitzeko gutxienezko mezu kopurua arrakastatsutzat hartua izan daiten. Balora 0an jarri aukera hau ezgaitzeko.',
	'MAX_POLL_OPTIONS'				=> 'Gehienezko aukera kopurua inkesteko',
	'MAX_POST_FONT_SIZE'			=> 'Gehienezko letra-tamaina mezuko',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Mezu baten baimendutako gehienezko letra-tamaina. Balorea 0an jarri tamaina mugagabea ezartzeko.',
	'MAX_POST_IMG_HEIGHT'			=> 'Gehienezko irudi-altuera mezuko',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Mezu baten baimendutako gehienezko irudi-altuera. Balorea 0an jarri tamaina mugagabea ezartzeko.',
	'MAX_POST_IMG_WIDTH'			=> 'Gehienezko irudi-zabalera mezuko',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Mezu baten baimendutako gehienezko irudi-zabalera. Balorea 0an jarri tamaina mugagabea ezartzeko.',
	'MAX_POST_URLS'					=> 'Gehienezko lotura kopurua mezuko',
	'MAX_POST_URLS_EXPLAIN'			=> 'Mezu baten baimendutako gehienezko URL helbideak. Balorea 0an jarri lotura kopuru mugagabea ezartzeko.',
	'MIN_CHAR_LIMIT'				=> 'Gutxienezko karaktere kopurua mezuko',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Erabiltzaileak behar duen gutxieneko karaktere kopurua mezu/mezu pribatu berri bakoitzeko. Ezarpen honen gutxieneko balorea 1 da.',
	'POSTING'						=> 'Bidali',
	'POSTS_PER_PAGE'				=> 'Mezu orriko',
	'QUOTE_DEPTH_LIMIT'				=> 'Gehienezko aipamen-sakonera mezuko',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Mezu baten baimendutako gehienezko aipamen-sakonera. Balorea 0an jarri aipamen-sakonera mugagabea ezartzeko.',
	'SMILIES_LIMIT'					=> 'Gehienezko irrifartxo mezuko',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Mezu baten baimendutako gehienezko irrifartxo (emotikono) kopurua. Balorea 0an jarri irrifartxo kopuru mugagabea ezartzeko.',
	'SMILIES_PER_PAGE'				=> 'Irrifartxo orriko',
	'TOPICS_PER_PAGE'				=> 'Gai orriko',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Hemendik sinaduren lehenetsitako konfigurazioa zehaztu zenezake.',

	'MAX_SIG_FONT_SIZE'				=> 'Gehienezko letra-tamaina sinaduretan',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Erabiltzaile sinaduretan baimendutako gehienezko letra-tamaina. Balorea 0an jarri letra-tamaina mugagabea ezartzeko.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Gehienezko irudi-altuera sinaduretan',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Erabiltzaile sinaduretan baimendutako gehienezko irudi-altuera. Balorea 0an jarri irudi-altuera mugagabea ezartzeko.',
	'MAX_SIG_IMG_WIDTH'				=> 'Gehienezko irudi-zabalera sinaduretan',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Erabiltzaile sinaduretan baimendutako gehienezko irudi-zabalera. Balorea 0an jarri irudi-zabalera mugagabea ezartzeko.',
	'MAX_SIG_LENGTH'				=> 'Gehienezko luzeera sinaduretan',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Erabiltzaile sinaduretan baimendutako gehienezko karaktere kopurua.',
	'MAX_SIG_SMILIES'				=> 'Gehienezko irrifartxo sinadurareko',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Erabiltzaile sinaduretan baimendutako gehienezko irrifartxo (emotikono) kopurua. Balorea 0an jarri irrifartxo kopurua mugagabea ezartzeko.',
	'MAX_SIG_URLS'					=> 'Gehienezko lotura sinadurareko',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Erabiltzaile sinaduretan baimendutako gehienezko URL helbideak. Balorea 0an jarri lotura kopuru mugagabea ezartzeko.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'Hemendik izena emateko formularioa eta profilari buruzko konfigurazioa zehaztu zenitzake. ',

	'ACC_ACTIVATION'			=> 'Kontua gaitu',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Honek, erabiltzaileek forora berehala sartzeko aukera edo baieztapena behar duten zehazten du. Izen-emate berriak ere guztiz ezgaitu ditzakezu hemendik. Erabiltzaileak edo administrariak gaitzeko “E-maila foro osorako” gaituta egon behar du.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Erabiltzaile berrien mezu muga',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Erabiltzaile berriak <em>Izena emandako erabiltzaile berriak</em> taldean egongo dira hemen adierazitako mezu kopuru honetara heldu arte. Talde hau MP (Mezu Pribatuak) bidaltzeko aukera ekiditzeko edo beraien mezuak berrikusteko erabil zenezake. <strong>Balorea 0an jarri aukera hau ezgaitzeko.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Izena emandako erabiltzaile berrien taldea lehenetsi',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Baiezkoan ezarrita egonez gero eta erabiltzaile berrien mezu mugaren bat jartzen baldin bada, izena ematen duten erabiltzaile berri guztiak <em>Izena emandako erabiltzaile berriak</em> taldean sartzeaz gain, talde hau izango dute lehenetsita. Aukera erabilgarria izan liteke erabiltzaile bakoitzak oinordetzan hartuko duen taldeko maila/irudiren bat ezarri nahi bazenu.',
	
	'ACC_ADMIN'					=> 'Administratzaileagaitik',
	'ACC_DISABLE'				=> 'Izena-ematea ezgaitu',
	'ACC_NONE'					=> 'Ezinezkoa gaitzea (berehalako sartzea)',
	'ACC_USER'					=> 'Erabiltzaileagaitik (korreotik baieztatuz)',
//	'ACC_USER_ADMIN'			=> 'Erabiltzailea + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Email helbide berdina erabiltzea baimendu',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Erabiltzaile ezberdinek email helbide berarekin eman dezakete izena.',
	'COPPA'						=> 'COPPA (Haur eta gazten datuak babezteko Ipar Ameriketako araudia)',
	'COPPA_FAX'					=> 'COPPA fax zenbakia',
	'COPPA_MAIL'				=> 'COPPA email helbidea',
	'COPPA_MAIL_EXPLAIN'		=> 'Guraso edo tutoreek COPPA izen-emate formularioak bidali behar duten email helbidea.',
	'ENABLE_COPPA'				=> 'COPPA gaitu',
	'ENABLE_COPPA_EXPLAIN'		=> 'Aukera hau gaituz, erabiltzaileek 13 urte baino gehiago dutela ziurtatu beharko dute COPPA araudia dela eta. Aukera ezgaituz, ez dira COPPA talde bereziak bistaratuko.',
	'MAX_CHARS'					=> 'Geh.',
	'MIN_CHARS'					=> 'Gut.',
	'NO_AUTH_PLUGIN'			=> 'Ez da gehigarriaren autoretza egokirik aurkitu.',
	'PASSWORD_LENGTH'			=> 'Pasahitzaren luzera',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Pasahitzetako gehienezko eta gutxienezko karaktere kopurua.',
	'REG_LIMIT'					=> 'Izen-emate saiakera',
	'REG_LIMIT_EXPLAIN'			=> 'Erabiltzaileek anti-spambot baieztatze kodearekin egin dezaketen gehienezko izen-emate kopurua saioa debekatu baino lehen.',
	'USERNAME_ALPHA_ONLY'		=> 'Letrazenbakizkoa baino ez',
	'USERNAME_ALPHA_SPACERS'	=> 'Letrazenbakizkoa eta hutsuneak',
	'USERNAME_ASCII'			=> 'ASCII (international unicoderik gabe)',
	'USERNAME_LETTER_NUM'		=> 'Edozein hitz edo zenbaki',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Edozein hitz edo zenbaki eta hutsuneak',
	'USERNAME_CHARS'			=> 'Erabiltzaile izenaren karaktere motak mugatu',
	'USERNAME_CHARS_ANY'		=> 'Edozein karaktere',
	'USERNAME_CHARS_EXPLAIN'	=> 'Erabiltzaile izen baten erabili daitezken karaktere motak mugatzen ditu. Hutsuneak hutsune batekin, -, +, _, [ eta ] zeinuekin adierazi daitezke.',
	'USERNAME_LENGTH'			=> 'Erabiltzaile izenaren luzera',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Erabiltzaile izenetan erabil daiteken gutxienezko eta gehienezko karakatere kopurua.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Jarioen sindikazio hobespen orokorrak',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Modulu honek ATOM jarioak ahalbidetzen ditu mezuetako BBCodea aztertzen duelarik kanpoko jarioetan irakurgarri gertatu daitezen.',

	'ACP_FEED_GENERAL'					=> 'Jarioen hobespen orokorrak',
	'ACP_FEED_POST_BASED'				=> 'Mezuetan oinarritutako jarioen hobespenak',
	'ACP_FEED_TOPIC_BASED'				=> 'Gaietan oinarritutako jarioen hobespenak',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Bestelako jario eta hobespenak',

	'ACP_FEED_ENABLE'					=> 'Jarioak gaitu',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Foro osorako ATOM jarioak gaitu edo ezgaitu egiten ditu. <br />Aukera hau ezgaitzeak, jario guztiak ezgaitzen ditu, jarioen beste hobespen gutztiak kontutan hartzen ez duelarik.',
	'ACP_FEED_LIMIT'					=> 'Artikulu kopurua',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Jarioan erakutsiko den gehienezko artikulu (item) kopurua.',

	'ACP_FEED_OVERALL'					=> 'Foro osorako jarioa gaitu',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Jario honek foro osoan idatzi diren mezu berriak erakutsiko ditu.',
	'ACP_FEED_FORUM'					=> 'Foro bakoitzeko jarioa gaitu',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Jario honek foro eta subforo bakoitzeko mezu berriak erakutsiko ditu.',
	'ACP_FEED_TOPIC'					=> 'Gai bakoitzeko jarioa gaitu',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Jario honek gai bakoitzeko mezu berriak erakutsiko ditu.',

	'ACP_FEED_TOPICS_NEW'				=> 'Gai berriak jarioa gaitu',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Sortutako gai berriak eta beraien lehenengo mezua erakusten duen "Gai Berriak" jarioa gaitzen du.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Gai aktiboak jarioa gaitu',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Indarrean dauden gaiak eta beraien azkenengo mezua erakusten duen "Gai aktiboak" jarioa gaitzen du.',
	'ACP_FEED_NEWS'						=> 'Berrien jarioa',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Aukeratutako foroen lehenengo mezua erakusten duen jarioa. Fororik aukeratu ezean hobespen hau ezgaitu egiten da.<br />Foro bat baino gehiago aukeratzeko <samp>CTRL</samp> sakatuta mantenduz klikatu.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Foro guztiak jarioa gaitu',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Foroetako zerrenda erakusten duen "Foro guztiak" jarioa gaitzen du.',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP egiaztatzea baimendu',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'HTTP egiaztatzea gaitzen du erabiltzaileek, bisitarientzako ezkutaturik dagoen edukia jaso dezaten jarioaren helbidera (URLa) <samp>auth=http</samp> parametroa jarriz. Kontuan izan PHPko ezarpen batzuk aldaketa gehigarriak eskatzen dituztela .htaccess fitxategian. Azalpenak bertan aurkituko dituzu (ingelesez).',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Artikuluen estatistikak',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Jarioaren artikulu (item) bakoitzeko estatistikak bistaratzen ditu <br />(adbez. nork bidalia, ordua eta data, erantzunak, bistaratzeak)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Foro hauek baztertu',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Foro hauetako edukia <strong>ez da jarioetan sindikatuko</strong>. Fororik aukeratu ezean, foro guztietako edukia sindikatu daiteke.<br /><samp>CTRL</samp> sakatuta mantenduz klikatu foroak aukeratu/desaukeratzeko.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Hemendik spama ekiditzeko pluginak aukeratu eta moldatu ditzakezu. Plugin hauek robotek erantzun ezin duten <em>CAPTCHA</em> frogatan oinarritzen dira orokorrean.',
	'AVAILABLE_CAPTCHAS'					=> 'Plugin erabilgarriak',
	'CAPTCHA_UNAVAILABLE'					=> 'Ezin duzu plugina aukeratu ez bait dira bete behar dituen baldintzak aurkitu.',
	'CAPTCHA_GD'							=> 'GD irudia',
	'CAPTCHA_GD_3D'							=> 'GD 3D irudia',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Aurrekaldeko eragozpena',
	'CAPTCHA_GD_EXPLAIN'					=> 'CAPTCHA aurreratutagoa lortzeko GD liburutegi bisuala erabiltzen du.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'GDn oinarritutako CAPTCHA zailago egiteko aurrekaldeko eragozpenak erabili.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHAko aurrekaldeko eragozpena X ardatzan',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Zailtasuna areagotzeko balore txikiak erabili. Baloera 0an jarrita aurrekaldeko eragozpena ezgaitu egiten da X ardatzan.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHAko aurrekaldeko eragozpena Y ardatzan',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Zailtasuna areagotzeko balore txikiak erabili. Baloera 0an jarrita aurrekaldeko eragozpena ezgaitu egiten da Y ardatzan.',
	'CAPTCHA_GD_WAVE'						=> 'Uhin distortsioa',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Irudiari uhin itxuraldatze bat ezartzen dio honek.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D-eragozpenak gehitu',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Letren aurrean 3D objektuak gehitzen dio honek.',
	'CAPTCHA_GD_FONTS'						=> 'Letra-iturri ezberdinak erabili',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Zenbat letra tipo erabil daitezken kontrolatzen du honek. Lehenetsitako iturriak eraibili ditzakezu edo eraldatutako letrak gehitu. Letra xeheak ere erabili ditzakezu.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Lehenetsia',
	'CAPTCHA_FONT_NEW'						=> 'Letra-iturri berriak',
	'CAPTCHA_FONT_LOWER'					=> 'Letra xeheak ere erabili',
	'CAPTCHA_NO_GD'							=> 'Irudi soila',
	'CAPTCHA_PREVIEW_MSG'					=> 'Ez dira baieztatze kodeko aldaketak gorde. Aurre-bista bat baino ez da.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Plugina horrela bistaratuko da hobespen hauekin. Berritzeko aurrebista botoia erabili. Kontuan izan captchak ausazkoak direnez, bista batetik bestera aldatu egingo direla.',
	
	'CAPTCHA_SELECT'						=> 'Jarritako pluginak',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Menuan foroak antzematen dituen pluginak erakustek dira. Grisez agertzen direnak ez daude eskuragarri momentu hauetan eta agian moldatu egin beharko dituzu erabili aurretik.',
	'CAPTCHA_CONFIGURE'						=> 'Pluginak moldatu',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Aukeratutako pluginaren hobespenak aldatu.',
	'CONFIGURE'								=> 'Moldatu',
	'CAPTCHA_NO_OPTIONS'					=> 'Plugin honek ez du moldatzeko aukerarik.',
	
	'VISUAL_CONFIRM_POST'					=> 'Spamboten aurkako neurriak gaitu gonbidatuen mezuetarako',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Bidaltze masiboak (spama) ekiditzeko, erabiltzaile anonimoek baieztatze kode bat sar dezatela eskatzen du.',
	'VISUAL_CONFIRM_REG'					=> 'Spamboten aurkako neurriak gaitu izen-emate berrietarako',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Izen-emate masiboak ekiditzeko, erabiltzaile berriek baieztatze kode bat sar dezatela eskatzen du.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Anti-spambot froga berriztatzea baimendu erabiltzaileei',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Izena ematerakoan, anti-spambot froga erantzutea ezinezkoa gertatuko balitzaie, erabiltzaileei froga berri bat eskatzeko aukera ematen die. Plugin batzuek ez dute aukera hau ematen.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'Hemendik, zure erabiltzaileen nabigatzaileetara bidaliko diren cookien xehetasunak zehaztu zenitzake. Gehienetan, lehenetsitako cookien konfigurazioa nahikoa izan beharko luke, aukeraren bat aldatu nahiko bazenu, kontu handiz ibili, konfigurazio desegoki batek erabiltzaileek saioa has dezaten ekidi liezaieke eta.',

	'COOKIE_DOMAIN'				=> 'Cookiearen domeinua',
	'COOKIE_NAME'				=> 'Cookiearen izena',
	'COOKIE_PATH'				=> 'Cookiearen bidea',
	'COOKIE_SECURE'				=> 'Cookie segurua',
	'COOKIE_SECURE_EXPLAIN'		=> 'Zure zerbitzariak SSL erabiltzen baldin badu aukera hau gaitu, bestela, ezgaituta utzi zerbitzari erroreak eman bait litzake aukera hau gaituta eukiteak.',
	'ONLINE_LENGTH'				=> 'Konektaturik agertzeko denbora tartea',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Jarduerarik gabeko erabiltzaileek eman behar duten minutu kopurua "Nor dago konektaturik" zerrendan ez daitezen agertu. Gero eta balore altuago jarri, zerrenda sortzeak prozesatse gehiago eskatuko du.',
	'SESSION_LENGTH'			=> 'Saioaren iraupena',
	'SESSION_LENGTH_EXPLAIN'	=> 'Denbora hau igarota, saioak bukatu egingo dira. Segundutan emana.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Hemendik, prozesatze kopurua arintzera lagunduko duten foroko zenbait funtzio gaitu edo ezgaitu zenitzake. Zerbitzari gehienetan ez da funtziorik ezgaitzeko beharrik, halaere, sistema batzuetan edo zerbitzari partekatu batzuetan, benetan beharko ez dituzun funtzioak ezgaitzea onuragarria litzateke. Sistemaren kargan edo saio aktiboetan ere mugak zehaztu ditzakezu.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Pertsonalizatutako profil eremuak',
	'LIMIT_LOAD'					=> 'Sistema kargaren muga',
	'LIMIT_LOAD_EXPLAIN'			=> 'Minutuko sistemaren karga batazbestekoa balore hau baino nagusiagoa baldin bada, foroa automatikoki offline jarriko da. 1.0ko balorea prozesadorearen ~100%ko erabileraren balio berekoa da. Honek UNIXen oinarrituta eta informazio hau eskuragarria duten zerbitzarietarako baino ez du balio. phpBBk ez balu karga muga lortuko, balorea 0an jarriko litzateke berez.',
	'LIMIT_SESSIONS'				=> 'Saio muga',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Minutu batez saio kopurua balore hau baino nagusiago baldin bada, foroa automatikoko offline jarriko da. Balorea 0an jarri saio kopuru mugagabea zehazteko.',
	'LOAD_CPF_MEMBERLIST'			=> 'Estiloak baimendu erabiltzaile zerrendan profil eremu pertsonalizatuak bistaratu daitezen.',
	'LOAD_CPF_VIEWPROFILE'			=> 'Profil eremu pertsonalizatuak bistaratu erabiltzaileen profiletan',
	'LOAD_CPF_VIEWTOPIC'			=> 'Profil eremu pertsonalizatuak erakutsi gaiak ikusterakoan',
	'LOAD_USER_ACTIVITY'			=> 'Erabiltzailearen jarduera erakutsi',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Erabiltzaileak gai/foroetan eginiko jarduera erakusten du profilan eta erabiltzaile kontrol panelean. Milloitik gorako mezudun foroetan aukera hau ezgaitzea gomendatzen da.',
	'RECOMPILE_STYLES'				=> 'Estilo osagai zaharkituak berritu',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Eguneratu diren estilo osagaiak bilatu eta berritu egiten ditu.',
	'YES_ANON_READ_MARKING'			=> 'Gonbidatuei gaiak markatzen utzi',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Irakurria/Ez irakurria informazioa gordetzen du gonbidatuentzako. Aukera ezgaitzerakoan, mezuak beti agertuko dira irakurriak bezala gonbidatuentzako.',
	'YES_BIRTHDAYS'					=> 'Urtebetetze zerrenda gaitu',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Aukera ezgaitzerakoan, ez da urtebetetze zerrendarik bistaratuko. Hobespen honek efekturik izan dezan, urtebetetzeen aukera ere gaituta egon beharko du.',
	'YES_JUMPBOX'					=> '\'Salto hona\ erakustea gaitu',
	'YES_MODERATORS'				=> 'Moderadoreak erakustea gaitu',
	'YES_ONLINE'					=> 'Konektaturiko erabiltzaileen zerrenda gaitu',
	'YES_ONLINE_EXPLAIN'			=> 'Konektaturik dauden izen emandako erabiltzaileen zerrenda bistaratzen du hasieran, foroan eta gaietan.',
	'YES_ONLINE_GUESTS'				=> '"Konektaturikoak ikusi"n gonbidatuen zerrenda gaitu',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Erabiltzaile gonbidatuen zerrenda bistaratzen du Konektaturikoak ikusi atalan.',
	'YES_ONLINE_TRACK'				=> 'Erabiltzailea konektaturik/deskonektaturik informazioa erakustea gaitu',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Erabiltzailearen konexio informazioa erakusten du profil eta gaietan.',
	'YES_POST_MARKING'				=> 'Gaiak markatzea gaitu',
	'YES_POST_MARKING_EXPLAIN'		=> 'Erabiltzaileren batek gairen batera mezurik bidali duen adierazten du.',
	'YES_READ_MARKING'				=> 'Zerbirzarian gaiak markatzea gaitu',
	'YES_READ_MARKING_EXPLAIN'		=> 'Irakurria/Ez irakurria informazioa cookie batean egin beharrean, datubase batean gordetzen du.',
	'YES_UNREAD_SEARCH'				=> 'Irakurri gabeko mezuen bilaketa gaitzen du',	
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBBk egiaztatze pluginak edo moduloak eusten ditu. Horrela, erabiltzaileak forora sartzeko nola egiaztatzen diren zehaztu zenezake. Hiru dira lehenetsirik ematen diren pluginak; DB, LDAP eta Apache. Metodo guztiek ez dute informazio bera eskatzen, beraz, aukeratutako metodoarentzako garrantzitsuak diren eremuak baino ez itzazu bete.',

	'AUTH_METHOD'	=> 'Egiaztatze metodo bat aukeratu',

	'APACHE_SETUP_BEFORE_USE'	=> 'Metodo honetara aldatu baino lehenago Apacheren egiaztatzea ezarri. Izan kontuan Apachen egiaztatzeko erabiltzen duzun erabiltzaile izena phpBBrako erabiltzen duzun bera izan beharko duela. Apache egiaztatzea mod_phprekin (ez CGI bertsioren batekin) eta safe_mode ezgaituta delarik baino ezingo duzu erabili.',

	'LDAP_DN'	=> 'LDAP basea <var>dn</var>',
	'LDAP_DN_EXPLAIN'	=> 'Hau Distinguished Namea da, erabiltzailearen informazioa kokatzeko balio duena, adbez. <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'	=> 'LDAPeko email ezaugarria',
	'LDAP_EMAIL_EXPLAIN'	=> 'Ezarri hau zure erabiltzaileak sartutako email ezaugarriaren (balego) izenera. Ezarpen hau hutsik uzteak saioa lehenengoz hasten duten erabiltzaileei email helbide hutsak ematea lekarke.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Zehaztutako erabiltzaile/pasahitzarekin eginiko konexioak LDAP zerbitzariarekin huts egin du.',
	'LDAP_NO_EMAIL'	=> 'Zehaztutako email ezaugarria ez da existitzen.',
	'LDAP_NO_IDENTITY'	=> 'Ezin daiteke nortasunik aurkitu %s(e)ntzat',
	'LDAP_PASSWORD'	=> 'LDAP pasahitza',
	'LDAP_PASSWORD_EXPLAIN'	=> 'Hutsik utzi konexio anonimorako. Bestela, erabiltzaile pasahitzarekin bete. Karpeta aktibodun zerbitzarietarako beharrezkoa. <strong>OHARRA:</strong> Pasahitz hau testu lauan gordeko da datubasean, bertora edo konfigurazio honen orrira sarrera baimendua duen edonoren bistara.',
	'LDAP_PORT'						=> 'LDAP zerbitzari portua',
	'LDAP_PORT_EXPLAIN'				=> 'LDAP zerbitzarira konektatzeko lehenetsitako portua 389 da, baina hautazko beste porturen bat zehaztu zenezake.',
	'LDAP_SERVER'	=> 'LDAP zerbitzari izena',
	'LDAP_SERVER_EXPLAIN'	=> 'LDAP erabiltzen baduzu, hau duzu LDAP zerbitzariaren izena edo IP helbidea. Aukeran, URL helbidea ere zehaztu zenezake, adbez. ldap://hostname:port/',
	'LDAP_UID'	=> '<var>uid</var> LDAP ',
	'LDAP_UID_EXPLAIN'	=> 'Saio nortasun jakin bat bilatzeko erabiltzen den giltza, adbez. <var>uid</var>, <var>sn</var>, etab.',
	'LDAP_USER'	=> 'LDAP erabiltzailea',
	'LDAP_USER_EXPLAIN'	=> 'Hutsik utzi konexio anonimorako. Betetuz gero, phpBBk sartutako distinguishe namea erabiliko du erabiltzaile zuzena aurkitzeko saioa hasterakoan, adbez. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Karpeta aktibodun zerbitzarietan beharrezkoa.',
	'LDAP_USER_FILTER'				=> 'LDAP erabiltzaile iragazkia',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Bilaketak gehiago zehaztu zenitzake iragazki osagarriekin. Adibidez <samp>objectClass=posixGroup</samp>(e)k <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>(e)ra eramango liguke.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Hemendik, domeinua eta zerbitzariari buruzko jazarpenak zehaztu zenitzake. Mesedez, egiazta itzazu sartutako datuak zuzenak diren, erroreek akasdun informazioa duten posta elektroniko mezuak sortzera eramango bait lukete. Domeinu izena sartzerakoan http:// (edo beste protokolorik, erabiltzekotan) jartzeaz gogoratu. Portu zenbakia, zure zerbitzariak besteren bat erabiltzen duela baldin badakizu baino ez ezazu aldatu. Gehienetan 80 portua ondo dago.',

	'ENABLE_GZIP'	=> 'Gzip konprimitzea gaitu',
	'ENABLE_GZIP_EXPLAIN'	=> 'Sortutako edukia konprimatu egingo da erabiltzaileari bidali aurretik. Aukera honek sare-zirkulazioa arindu egingo du, baina CPU erabilera areagotu egiten du bai zerbitzarian bai hartzailearen aldean. PHPko zlib gehigarria beharrezkoa.',
	'FORCE_SERVER_VARS'	=> 'Zerbitzariko URL ezarpenetara behartu',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Aukera hau  ezartzea aukeratzen baldin baduzu, hemen zehaztutako zerbitzari konfigurazioa automatikoki zehazten diren balioen ordez ezarriko da.',
	'ICONS_PATH'	=> 'Mezu ikonoak gordetzeko bidea',
	'ICONS_PATH_EXPLAIN'	=> 'Zure phpBBko root karpetapeko bidea, adbez. <samp>images/icons</samp>',
	'PATH_SETTINGS'	=> 'Bidearen konfigurazioa',
	'RANKS_PATH'	=> 'Maila irudiak gordetzeko bidea',
	'RANKS_PATH_EXPLAIN'	=> 'Zure phpBBko root karpetapeko bidea, adbez. <samp>images/ranks</samp>',
	'SCRIPT_PATH'	=> 'Script bidea',
	'SCRIPT_PATH_EXPLAIN'	=> 'Domeinu izenaren arabera phpBB kokaturik dagoen bidea, adbez. <samp>/phpBB3</samp>',
	'SERVER_NAME'	=> 'Domeinu izena',
	'SERVER_NAME_EXPLAIN'	=> 'Foroa kokatua dagoen domeinuaren izena (adibidez: <samp>www.example.com</samp>)',
	'SERVER_PORT'	=> 'Zerbitzariaren portua',
	'SERVER_PORT_EXPLAIN'	=> 'Zure zerbitzariak erabiltzen duen portua, normalean  80. Ezberdina bada baino ez ezazu aldatu.',
	'SERVER_PROTOCOL'	=> 'Zerbitzariaren protokoloa',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Zerbitzariaren protokolo bezala erabiltzen da ezarpen hauek erabiltzera behartzen baldin bada. Hutsik edo behartu gabe, protokoloa cookie seguruaren konfigurazioan zehaztutakoa litzateke (<samp>http://</samp> edo <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'	=> 'Zerbitzariko URL ezarpenak',
	'SMILIES_PATH'	=> 'Irrifartxoak gordetzeko bidea',
	'SMILIES_PATH_EXPLAIN'	=> 'Zure phpBBko root karpetapeko bidea, adbez. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'	=> 'Luzapen ikonoak gordetzeko bidea',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Zure phpBBko root karpetapeko bidea, adbez. <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Hemendik, konexio eta saioei buruzko ezarpenak zehaztu zenitzake.',

	'ALL'								=> 'Guztia',
	'ALLOW_AUTOLOGIN'					=> 'Saio iraunkorrak baimendu',
	'ALLOW_AUTOLOGIN_EXPLAIN'			=> 'Erabiltzaileak foroa bisitatzerakoan saioa automatikoki has dezaken zehazten du.',
	'AUTOLOGIN_LENGTH'					=> 'Saio iraunkorraren bukatzea (egunetan emana)',
	'AUTOLOGIN_LENGTH_EXPLAIN'			=> 'Saio automatikoa iraungi arteko egun kopurua. Balorea 0an jarri ezgaitzeko.',
	'BROWSER_VALID'						=> 'Nabigatzailea balioztatu',
	'BROWSER_VALID_EXPLAIN'				=> 'Konexio bakoitzeko nabigatzailea balioztatzen du segurtasuna hobetuz.',
	'CHECK_DNSBL'						=> 'IPa DNSetako zerrenda beltzetan egiaztatu',
	'CHECK_DNSBL_EXPLAIN'				=> 'Gaiturik baleko, erabiltzaileen IP helbidea izen-emate eta mezu bidaltzeetan honako DNSBL zerbitzuetan egiaztatuko lirateke: <a href="http://spamcop.net">spamcop.net</a> eta <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Bilaketa honek denbora tarte bat iraun dezake, zerbitzariaren konfigurazioaren arabera, gehiegi moteltzen bada edo baiezko faltsu gehiegiren berri ematen bada, aukera hau ezgaitzea gomendatzen da.',
	'CLASS_B'							=> 'A.B',
	'CLASS_C'							=> 'A.B.C',
	'EMAIL_CHECK_MX'					=> 'Email domeinuak baliozko MX erregistroa dezan egiaztatu',
	'EMAIL_CHECK_MX_EXPLAIN'			=> 'Gaiturik balego, izena ematerakoan sartutako email domeinuak baliogarria den MX erregistroa duen aztertuko litzateke.',
	'FORCE_PASS_CHANGE'					=> 'Pasahitza aldatzera behartu',
	'FORCE_PASS_CHANGE_EXPLAIN'			=> 'Erabiltzaileak, egun kopuru jakin baten buruan, pasahitza alda dezala eskatzen du. Balorea 0an jarri aukera hau ezgaitzeko.',
	'FORM_TIME_MAX'					=> 'Formularioak bidaltzeko denbora tartea',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Erabiltzaile batek formulario bat bidaltzeko duen denbora tartea. Baloran -1ean jarri aukera hau ezgaitzeko. Kontuan izan, ezarpen hau kontutan izan barik ere, formularioa baliogabea gerta daitekela saioa bukatu egingo balitz.',
	'FORM_SID_GUESTS'				=> 'Formularioak saio anonimoetara lotu',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Gaiturik balego, erabiltzaile anonimoekin erlazionaturiko formularioaren lotura saio bakoitzerako baino ez dira izango. Honek arazoak sor litzeke ISP batzuekin.',
	'FORWARDED_FOR_VALID'				=> '<var>X_FORWARDED_FOR</var> izenburua egiaztatu',
	'FORWARDED_FOR_VALID_EXPLAIN'		=> 'Saioek, berbidalitako mezuen izenburuak <var>X_FORWARDED_FOR</var> aurretik bidalitakoekin bat egiten badute baino ez dute jarraituko. Debekuak ere egiaztatu egingo dira  en <var>X_FORWARDED_FOR</var>(e)n IP helbideetan.',
	'IP_VALID'							=> 'Saioa IPagatik egiaztatu',
	'IP_VALID_EXPLAIN'					=> 'Erabiltzailearen saioa egiaztatzerakoan IP helbideak norainoko eragina duen zehazten du; <samp>Guztia</samp> helbide osoa erkatzen du, <samp>A.B.C</samp> lehenengo x.x.xak, <samp>A.B</samp> lehenengo x.xak, <samp>Bat ere ez</samp>ek egiaztatzea ezgaitzen du.',
		'IP_LOGIN_LIMIT_MAX'			=> 'IP helbide bakoitzeko logeatzeko gehienezko saiakera',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Spambot-en aurkako neurriren bat atera baino lehenago IP helbide jakin batetik egin daitezken gehienezko sartzeko (logeatzeko) aukera. Ez baduzu spambot-en aurkako neurrik salto egin dezan jarri 0.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP helbide bakoitzeko logeatzeko gehienezko denbora',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Sartzeko (logeatzeko) aukerak bukatu egiten dira denbora-tarte hau igaro eta gero.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Logeatzeko aukerak <var>X_FORWARDED_FOR</var>(e)gatik  mugatu',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Sartzeko aukerak IP helbideagatik mugatu beharrean, <var>X_FORWARDED_FOR</var> balioekaitik mugatzen dira. <br /><em><strong>Oharra:</strong> <var>X_FORWARDED_FOR</var> balio benetakoetara ezartzen dituen proxy serverra erabiltzen bazaude baino ez erabili aukera hau.</em>',
	'MAX_LOGIN_ATTEMPTS'				=> 'Saioa hasteko gehienezko saiakera',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'		=> 'Zehaztu erabiltzaileak saioa hasteko duen gehienezko saiakera kopurua. Zenbaki hau gainditu ezkero, erabiltzaileak anti-spam froga erantzun beharko du bere nortasuna egiaztatzeko.',
	'NO_IP_VALIDATION'					=> 'Bat ere ez',
	'NO_REF_VALIDATION'				=> 'Bat ere ez',
	'PASSWORD_TYPE'						=> 'Pasahitzaren zailtasuna',
	'PASSWORD_TYPE_EXPLAIN'				=> 'Pasahitz batek izan behar duen zailtasuna zehazten du. Ondorengo aukerek aurrekoak barneratzen dituzte.',
	'PASS_TYPE_ALPHA'					=> 'Letrak eta zenbakiak euki behar ditu',
	'PASS_TYPE_ANY'						=> 'Eskaerarik gabe',
	'PASS_TYPE_CASE'					=> 'Letra larriak eta txikiak euki behar ditu',
	'PASS_TYPE_SYMBOL'					=> 'Zeinuak euki behar ditu',
	'REF_HOST'						=> 'Hosta baino ez egiaztatu',
	'REF_PATH'						=> 'Bidea (path) ere egiaztatu',
	'REFERER_VALID'					=> 'Bidaltzailea (Referer) egiaztatu',
	'REFERER_VALID_EXPLAIN'			=> 'Gaiturik balego, POST eskaeren bidaltzailea host/script bideko ezarpenekin erkatua izango da. Honek arazoak sor litzake kanpoko egiaztatzeak edo domeinu bat baino gehiago duten foroetan.',
	'TPL_ALLOW_PHP'						=> 'Txantilloietan PHP baimendu',
	'TPL_ALLOW_PHP_EXPLAIN'				=> 'Aukera hau gaitzen baldin bada, <code>PHP</code> eta <code>INCLUDEPHP</code> antzeman egingo dira txantilloi modura.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Informazio hau forotik erabiltzaileei email mezuak bidaltzen zaizkienean erabiltzen da. Mesedez, egiazta ezazu sartu duzun email helbidea zuzena izan daiten, itzulitako edo bidali ezinezko mezuak helbide honetara bideratuko bait dira. Ez baduzu zerbitzaritik PHPn oinarritutako korreo zerbitzurik, mezuak SMTPtik bidali zenitzake. Honek zerbitzari egokiren baten helbidea beharko du (galde iezaiozu hornitzaileari). Erabiltzailea eta pasahitza zerbitzariak egiaztatzea eskatzen balin badu baino ez bete.',

	'ADMIN_EMAIL'					=> 'Itzulpen email helbidea',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Email guztiak itzuliko diren helbidea. Email mezuetan <samp>Return-Path</samp> (itzulpen-bidea) eta <samp>Sender</samp> (bidaltzaile) modura erabiliko da beti.',
	'BOARD_EMAIL_FORM'				=> 'Erabiltzaileek foroaren bitartez bidaltzn dituzte emailak.',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Beraien email helbidea erakutsi beharrean, erabiltzaileek foroaren bitartez bidali ditzakete email mezuak.',
	'BOARD_HIDE_EMAILS'				=> 'Email helbideak ezkutatu',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ezarpen honek email helbideak guztiz ezkutatzen ditu.',
	'CONTACT_EMAIL'					=> 'Kontaktuko email helbidea',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Helbide hau beharrezkoa den kontaktu helbide bat behar den aldi guztietan erabiliko da, adbez. spama, errroreak, etab. Email mezuetan <samp>From</samp> (Nondik) eta <samp>Reply-To</samp> (erantzun honi) moduan erabiliko da beti.',
	'EMAIL_FUNCTION_NAME'			=> 'Email ezarpenaren izena',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'PHPk erabilitako ezarpena email mezuak bidaltzeko.',
	'EMAIL_PACKAGE_SIZE'			=> 'Email paketearen tamaina',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Paketeko bidaltzen diren email mezu kopurua. Ezarpen hau barne mezu-ilarara aplikatzen da. Balorea 0an jarri ohartarazpen mezuekin arazorik nabaritzen baldin badituzu.',
	'EMAIL_SIG'						=> 'Email sinadura',
	'EMAIL_SIG_EXPLAIN'				=> 'Testu hau forotik bidaliko diren mezu guztietara itsatsiko da.',
	'ENABLE_EMAIL'					=> 'Email mezuak bidaltzea gaitu',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ezgaitzan baldin bada, foroak ez du inolako email mezurik bidaliko.<em>Admin eta erabiltzailearen gaitze-parametroek aukera hau gaituta egon daitela eskatzen dute.</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTPrako egiaztatze metodoa',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Erabiltzailea/Pasahitza zehazten bada baino ez da beharrezkoa. Galde iezaiozu zure ISPari metodoaz ez baldin bazaude ziur.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP pasahitza',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Pasahitza, zure SMTP zerbitzariak eskatzen baldin badu baino ez sartu.<em><strong>Kontuz:</strong> Pasahitz hau testu soil moduan gordeko da, zure datubasera edo hobespen orri honetara iristeko aukera duen edonoren ikusgarri.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP zerbitzariaren portua',
	'SMTP_PORT_EXPLAIN'				=> 'Zure SMTP zerbitzaria portu ezberdin batean baldin badago baino ez aldatu.',
	'SMTP_SERVER'					=> 'SMTP zerbitzariaren helbidea',
	'SMTP_SETTINGS'					=> 'SMTP konfigurazioa',
	'SMTP_USERNAME'					=> 'SMTP erabiltzailea',
	'SMTP_USERNAME_EXPLAIN'			=> 'Erabiltzaile izena, zure SMTP zerbitzariak eskatzen baldin badu baino ez sartu.',
	'USE_SMTP'						=> 'SMTP zerbitzaria erabili emailerako',
	'USE_SMTP_EXPLAIN'				=> '"Bai" aukeratu email mezuak foroko ezarpena erabili beharrean zerbitzari jakin batetik bialdu nahi badituzu.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Hemendik, berehalako mezularitzan eta foro ohartarazpenetako Jabber erabilpena gaitu eta konfigura dezakezu. Jabber, edonorok erabil dezaken kode irekiko protokolo bat da. Jabber zerbitzari batzuk, beste sareetako erabiltzaileekin harremanetan jartzea baimentzen dizute. Baina zerbitzarik guztiek ez dituzte garraiobide guztiak eskaintzen eta protokoloetan egin litezken aldaketek, garraio hauek ekidi lituzkete. Izan kontuan Jabber kontua eguneratzeak denbora tarte bat behar lezakela, ez ezazu prozesua bukatu baino lehen ezeztatu!',

	'JAB_ENABLE'				=> 'Jabber gaitu',
	'JAB_ENABLE_EXPLAIN'		=> 'Jabber mezularitza eta ohartarazpenak bidaltzeko gaitzen du.',
	'JAB_GTALK_NOTE'			=> 'Mesedez, izan kontuan GTalk ez dela ibiliko ez bait da <samp>dns_get_record</samp> funtzioa aurkitu. Funtzio hau ez da erabilgarria PHP4n, eta ez da ezarri Windows plataformetan. Une honetan ez dabil BSDn oinarritutako plataformetan (Mac OS barne).',
	'JAB_PACKAGE_SIZE'			=> 'Jabber paketearen tamaina',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Pakete baten bidalitako mezu kopurua. Balorea 0an jarrita mezua berehala bidaltzen da mezu-ilaran jarri beharrean.',
	'JAB_PASSWORD'				=> 'Jabber pasahitza',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Kontuz:</strong> Pasahitz hau testu soil moduan gordeko da, zure datubasera edo hobespen orri honetara iristeko aukera duen edonoren ikusgarri.</em>'
	'JAB_PORT'					=> 'Jabber portua',
	'JAB_PORT_EXPLAIN'			=> 'Hutsik utzi 5222 portua ez dela baino ez badakizu.',
	'JAB_SERVER'				=> 'Jabber zerbitzaria',
	'JAB_SERVER_EXPLAIN'		=> '%sjabber.org%sera jo ezazu zerbitzarien zerrenda ikusteko',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber konfigurazioa zuzen aldatu egin da.',
	'JAB_USE_SSL'				=> 'SSL erabili konexiorako',
	'JAB_USE_SSL_EXPLAIN'		=> 'Konexio segura gaituta baldin badago, konexioa lortzen saiatuko da. Jabber portua 5223era aldatuko da zehaztutakoa 5222 baldin bada.',
	'JAB_USERNAME'				=> 'Jabber erabiltzaile izena edo JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Izena emandako erabiltzaile baten izena edo baliozko JIDa zehaztu. Ez erabiltzailearen izena egiaztatuko. Erabiltzaile izena baino ez baldin baduzu zehazten, zure JIDa erabiltzaile izen hori eta goiak zehaztutako zerbitzaria izango dira. Bestela, baliozko JIDa zehaztu, adibidez user@jabber.org.',
));

?>