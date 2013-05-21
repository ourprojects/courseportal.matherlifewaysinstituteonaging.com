<?php
/**
*
* posting.php [Basque [eu]]
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
	'ADD_ATTACHMENT'			=> 'Fitxategi erantsia gehitu',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Fitxategi bat(zuk) erantsi nahi bad(it)uzu sartu itzazu xehetasunak behekaldean.',
	'ADD_FILE'					=> 'Fitxategia gehitu',
	'ADD_POLL'					=> 'Inkesta gehitu',
	'ADD_POLL_EXPLAIN'			=> 'Ez badiozu gaiari inkestarik gehitu nahi, huts itzazu eremuak bete gabe.',
	'ALREADY_DELETED'			=> 'Barkatu, baina mezu hau dagoeneko ezabatua izan da.',
	'ATTACH_DISK_FULL'			=> 'Ez dago leku nahikorik diskoan eranskin hau bidaltzeko.',
	'ATTACH_QUOTA_REACHED'		=> 'Barkatu, baina foroa erantsien kopuruaren topera heldu da.',
	'ATTACH_SIG'				=> 'Sinadura erantsi (Sinadurak Erabiltzailearen Kontrol Paneletik aldatu daitezke)',

	'BBCODE_A_HELP'				=> 'Fitxategi erantsia txertatu: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Letra lodia: [b]testua[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Kodea erakutsi: [code]kodea[/code]  (alt+c)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Letra tamaina: [size=x-small]testu txikia[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>desgaituta</em>dago',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>gaituta</em>dago',
	'BBCODE_I_HELP'				=> 'Letra etzana: [i]testua[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Zerrenda: [list]testua[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'		=> 'Gaia zerrendatu: [*]testua[/*]',
	'BBCODE_O_HELP'				=> 'Zerrenda ordenatua: [list=]testua[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Irudia txertatu: [img]http://irudia_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Testua aipatu: [quote]testua[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Letra kolorea: [color=red]testua[/color]  Tip: kolore kodeak ere erabili daitezke=#FF0000',
	'BBCODE_U_HELP'				=> 'Testua azpimarratu: [u]testua[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'URLa txertatu: [url]http://url[/url] edo [url=http://url]URL testua[/url]  (alt+w)',
	'BBCODE_Y_HELP'				=> 'Zerrenda: Zerrendagaia gehitu',
	'BUMP_ERROR'				=> 'Oraindik ez da zure azken mezutik hona denbora tarte nahikorik igaro gai hau sustatzeko.',

	'CANNOT_DELETE_REPLIED'		=> 'Barkatu baina erantzun gabeko mezuak baino ezin dituzu ezabatu.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Mezu hau itxi egin da. Ezin dezakezu aldatu.',
	'CANNOT_EDIT_TIME'			=> 'Dagoenekeo ezin duzu mezu hau aldatu edota ezabatu.',
	'CANNOT_POST_ANNOUNCE'		=> 'Barkatu, baina ezin duzu iragarkirik bidali.',
	'CANNOT_POST_STICKY'		=> 'Barkatu, baina ezini duzu gai itsaskorrik bidali.',
	'CHANGE_TOPIC_TO'			=> 'Gai mota honako honetara aldatu:',
	'CLOSE_TAGS'				=> 'Markak (etiketak) itxi',
	'CURRENT_TOPIC'				=> 'Oraingo gaia',

	'DELETE_FILE'				=> 'Fitxategia ezabatu',
	'DELETE_MESSAGE'			=> 'Mezua ezabatu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ziur mezu hau ezabatu nahi duzula?',
	'DELETE_OWN_POSTS'			=> 'Barkatu, baina zuk bidalitako mezuak baino ezin ditzakezu ezabatu.',
	'DELETE_POST_CONFIRM'		=> 'Ziur mezu hari hau ezabatu nahi duzula?',
	'DELETE_POST_WARN'			=> 'Behin ezabatu eta gero mezuen haria ezin daiteke berreskuratu.',
	'DISABLE_BBCODE'			=> 'BBCode desgaitu',
	'DISABLE_MAGIC_URL'			=> 'URLak automatikoki bihurtzea desgaitu',
	'DISABLE_SMILIES'			=> 'Irrifartxoak (emotikonoak) desgaitu',
	'DISALLOWED_CONTENT'		=> 'Fitxategiaren gehiketa atzera bota da fitxategia eraso bektoretzat identifikatua izan delako.',
	'DISALLOWED_EXTENSION'		=> '%s luzapena ez da baimentzen.',
	'DRAFT_LOADED'				=> 'Zirriborroa mezuak bidaltzeko eremura gehitu da. Mezua orain amaitu?<br />Zirriborroa, mezua bidali eta gero ezabatu egingo da.',
	'DRAFT_LOADED_PM'			=> 'Zirriborroa mezuak bidaltzeko eremura gehitu da. Mezu pribatua orain amaitu?<br />Zirriborroa, mezu pribatua bidali eta gero ezabatu egingo da.',
	'DRAFT_SAVED'				=> 'Zirriborroa zuzen gorde da.',
	'DRAFT_TITLE'				=> 'Zirriborroaren izenburua',

	'EDIT_REASON'				=> 'Mezua aldatzeko arrazoia',
	'EMPTY_FILEUPLOAD'			=> 'Gehitutako fitxategia hutsik dago',
	'EMPTY_MESSAGE'				=> 'Mezua idatzi behar duzu bidaltzeko.',
	'EMPTY_REMOTE_DATA'			=> 'Ezinezkoa fitxategia gehitzea. Mesedez, saiatu zaitez fitxategia eskuz gehitzen.',

	'FLASH_IS_OFF'				=> '[flash] <em>desgaituta</em> dago',
	'FLASH_IS_ON'				=> '[flash] <em>gaituta</em>dago',
	'FLOOD_ERROR'				=> 'Oraindik ez da zure azken mezutik hona denbora tarte nahikorik igaro beste bat bidali dezazun.',
	'FONT_COLOR'				=> 'Letra kolorea',
	'FONT_COLOR_HIDE'			=> 'Letra kolorea ezkutatu',
	'FONT_HUGE'					=> 'Erraldoia',
	'FONT_LARGE'				=> 'Handia',
	'FONT_NORMAL'				=> 'Normala',
	'FONT_SIZE'					=> 'Letra tamaina',
	'FONT_SMALL'				=> 'Txikia',
	'FONT_TINY'					=> 'Ñimiñoa',

	'GENERAL_UPLOAD_ERROR'		=> 'Ezinezkoa erantsia %s(e)ra gehitzea',

	'IMAGES_ARE_OFF'			=> '[img] <em>desgaituta</em> dago',
	'IMAGES_ARE_ON'				=> '[img] <em>gaituta</em> dago',
	'INVALID_FILENAME'			=> '%s ez da baliogarria den fitxategi izena.',

	'LOAD'						=> 'Kargatu',
	'LOAD_DRAFT'				=> 'Zirriborroa kargatu',
	'LOAD_DRAFT_EXPLAIN'		=> 'Hemen, idazten jarraitu nahi duzun zirriborroa aukeratu zenezake. Mezua baliogabetu eta edukia ezabatu egingo da. Zirriborroak Erabiltzaile Kontrol Paneletik ikusi, ezabatu edo aldatu zenitzake.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Saioa hasi behar duzu foro honetan gaiak sustatzeko.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Saioa hasi behar duzu foro honetan mezuak ezabatzeko.',
	'LOGIN_EXPLAIN_POST'		=> 'Saioa hasi behar duzu foro honetara mezuak bidaltzeko.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Saioa hasi behar duzu foro honetan mezuak aipatzeko (zitatzeko).',
	'LOGIN_EXPLAIN_REPLY'		=> 'Saioa hasi behar duzu foro honetako mezuak erantzuteko.',

	'MAX_FONT_SIZE_EXCEEDED'	=> '%1$d da letren gehienezko tamaina.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Zure flash fitxategiek ezin dute %1$d pixeleko baino altuera gehiago izan.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Zure flash fitxategiek ezin dute %1$d pixeleko baino zabalera gehiago izan.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Zure irudiek ezin dute %1$d pixeleko baino altuera gehiago izan.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Zure irudiek ezin dute %1$d pixeleko baino zabalera gehiago izan.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Sartu hemen zure mezua, ezin du <strong>%d</strong> karaktere baino gehiago izan.',
	'MESSAGE_DELETED'			=> 'Mezua zuzen ezabatu da',
	'MORE_SMILIES'				=> 'Irrifartxo (emotikono) gehiago ikusi',

	'NOTIFY_REPLY'				=> 'Erantzunen bat bidaltzerakoan jakinarazi',
	'NOT_UPLOADED'				=> 'Ezin izan da fitxategia gehitu.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Ezin dituzu inkestako aukerak ezabatu.',
	'NO_PM_ICON'				=> 'MPko irudirik gabe',
	'NO_POLL_TITLE'				=> 'Inkestari izenburua jarri behar diozu',
	'NO_POST'					=> 'Ez da eskatutako mezurik existitzen.',
	'NO_POST_MODE'				=> 'Ez da mezu motarik zehaztu.',

	'PARTIAL_UPLOAD'			=> 'Fitxategiko zati bat baino ez da gehitu',
	'PHP_SIZE_NA'				=> 'Erantsitako fitxategiaren tamaina handiegia da.<br />Ezin izan da zehaztu PHPk php.inin finkatutako gehienezko tamaina.',
	'PHP_SIZE_OVERRUN'			=> 'Erantsitako fitxategiaren tamaina handiegia da, gehienezko tamaina %d MBtakoa da.<br />Mesedez, kontuan izan tamaina hau php.inin finkatuta dagoela eta ezin daitekela baliogabetu.',
	'PLACE_INLINE'				=> 'Testuan txertatu',
	'POLL_DELETE'				=> 'Inkesta ezabatu',
	'POLL_FOR'					=> 'Inkesta sortu honetarako:',
	'POLL_FOR_EXPLAIN'			=> '0 edo hutsik utzi eremua inkesta denboran amaigabea egin nahi baduzu.',
	'POLL_MAX_OPTIONS'			=> 'Aukerak erabiltzailekiko',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Erabiltzaile bakoitzak hautatu ditzaken gehienezko aukerak bozkatzerakoan.',
	'POLL_OPTIONS'				=> 'Inkestako aukerak',
	'POLL_OPTIONS_EXPLAIN'		=> 'Aukera bakoitza lerro berrian jar ezazu. <strong>%d</strong> da sar zenezaken gehienezko aukera kopurua.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Aukera bakoitza lerro berrian jar ezazu. <strong>%d</strong> da sar zenezaken gehienezko aukera kopurua. Aukerak gehitu edo aldatu egiten badituzu, aurreko bozka guztiak garbitu egingo dira.',
	'POLL_QUESTION'				=> 'Inkestako galdera',
	'POLL_TITLE_TOO_LONG'		=> '100 karaktere baino gutxiago izan behar ditu inkestako izenburuak.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Inkestako izenburua luzeegia da. BBCode edo irrifartxoak kendu zenitzake.',
	'POLL_VOTE_CHANGE'			=> 'Bozka aldatzea baimendu',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Aukera hau gaituta baldin badago, erabiltzaileek beraien bozka aldatu dezakete.',
	'POSTED_ATTACHMENTS'		=> 'Bidalitako fitxategi erantsiak',
	'POST_APPROVAL_NOTIFY'		=> 'Zure mezua onartzen denean jakinarazi egingo zaizu.',
	'POST_CONFIRMATION'			=> 'Mezua bidaltzeko baieztatzea',
	'POST_CONFIRM_EXPLAIN'		=> 'Mezu-bidaltze automatikoak ekiditzeko asmoz, behekaldeko irudian agertzen den kodea sar dezazula eskatzen dizugu. Kodea ikusteko arazorik baldin bazenu, jar zaitez %sForoko Administrariekin%s kontaktuan, mesedez.',
	'POST_DELETED'				=> 'Mezu hau zuzen ezabatu da.',
	'POST_EDITED'				=> 'Mezu hau zuzen aldatu da.',
	'POST_EDITED_MOD'			=> 'Mezu hau zuzen aldatu da, baina moderadorearen onarpena behar du jendaurrean ikusgarri izateko.',
	'POST_GLOBAL'				=> 'Orokorra',
	'POST_ICON'					=> 'Mezuaren ikonoa',
	'POST_NORMAL'				=> 'Normala',
	'POST_REVIEW'				=> 'Mezua berrikusi',
	'POST_REVIEW_EDIT'			=> 'Mezua berrikusi',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Beste erabiltzaile batek aldatu du mezua zu aldatzen  zenbiltzan unean. Agian indarrean dagoen mezuaren bertsioa gainbegiratu nahiko zenuke aldaketak doitzearren.',
	'POST_REVIEW_EXPLAIN'		=> 'Gai honi mezu berri bat bidali zaio gutxienez. Agian zure mezua berrikusi nahi zenezake.',
	'POST_STORED'				=> 'Mezua zuzen bidali da.',
	'POST_STORED_MOD'			=> 'Mezu hau zuzen bidali da, baina moderadorearen onarpena behar du jendaurrean ikusgarri izateko.',
	'POST_TOPIC_AS'				=> 'Gaia honela bidali',
	'PROGRESS_BAR'				=> 'Aurrerapen barra',

	'QUOTE_DEPTH_EXCEEDED'		=> '%1$d aipamen (zita) baino ezin duzu bata bestearen barruan sartu',

	'SAVE'						=> 'Gorde',
	'SAVE_DATE'					=> 'Noiz gordeta',
	'SAVE_DRAFT'				=> 'Zirriborroa gorde',
	'SAVE_DRAFT_CONFIRM'		=> 'Mesedez, kontuan izan gordetako zirriborroek izenburua eta mezua baino ez dutela mantentzen, beste elementu guztiak ezabatu egingo direla. Hala ere, zirriborroa gorde nahi duzu orain?',
	'SMILIES'					=> 'Irrifartxoak',
	'SMILIES_ARE_OFF'			=> 'Irrifartxoak <em>desgaituta</em> daude',
	'SMILIES_ARE_ON'			=> 'Irrifartxoak <em>gaituta</em> daude',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Itsaskor/Iragarkiaren azken data',
	'STICK_TOPIC_FOR'			=> 'Gaia itsaskorra bihurtu',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '0 edo hutsik utzi eremua azken datarik gabeko Itsaskor/Iragarkia lortzeko. Kontuan izan zenbaki honek mezuaren argitaratze-datarekin erlazionaturik dagoela.',
	'STYLES_TIP'				=> 'Aholkua: Estiloak azkar jarri diezaizkioke aukeratutako testuari.',

	'TOO_FEW_CHARS'				=> 'Zure mezuak karaktere gutxiegi ditu.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Zure mezuak %1$d karaktere ditu. Gutxienez %2$d karaktere sartu behar dituzu.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Gutxienez aukera bi jarri behar dituzu inkestan.',
	'TOO_MANY_ATTACHMENTS'		=> 'Ezin duzu fitxategi erantsi gehiagorik gehitu, %d da baimendutako gehienezkoa.',
	'TOO_MANY_CHARS'			=> 'Zure mezuak karaktere gehiegi ditu.',
	'TOO_MANY_CHARS_POST'		=> 'Zure mezuak %1$d karaktere ditu. Baimendutako gehienezkoa %2$d(e)koa da.',
	'TOO_MANY_CHARS_SIG'		=> 'Zure sinadurak %1$d karaktere ditu. Baimendutako gehienezkoa %2$d(e)koa da.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Inkestarako aukera gehiegi sartu dituzu.',
	'TOO_MANY_SMILIES'			=> 'Zure mezuak irrifartxo gehiegi ditu. Baimendutako gehienezkoa %d(e)koa da.',
	'TOO_MANY_URLS'				=> 'Zure mezuak URL gehiegi ditu. Baimendutako gehienezkoa %d(e)koa da.',
	'TOO_MANY_USER_OPTIONS'		=> 'Ezin duzu inkestako aukera baino erabiltzaileko aukera gehiago zehaztu.',
	'TOPIC_BUMPED'				=> 'Gaia zuzen sustatu da.',

	'UNAUTHORISED_BBCODE'		=> 'Ezin duzu BBCode zehatz batzuk erabili: %s',
	'UNGLOBALISE_EXPLAIN'		=> 'Gai hau orokor izatetik normalera bihurtzeko, erakutsiko den foroa aukeratu behar duzu.',
	'UPDATE_COMMENT'			=> 'Iruzkina eguneratu',
	'URL_INVALID'				=> 'Adierazitako URLa ez da baliozkoa.',
	'URL_NOT_FOUND'				=> 'Ezin daiteke zehaztutako fitxategia aurkitu.',
	'URL_IS_OFF'				=> '[url] <em>desgaituta</em> dago',
	'URL_IS_ON'					=> '[url] <em>gaituta</em> dago',
	'USER_CANNOT_BUMP'			=> 'Ezin duzu gairik sustatu foro honetan.',
	'USER_CANNOT_DELETE'		=> 'Ezin duzu mezurik ezabatu foro honetan.',
	'USER_CANNOT_EDIT'			=> 'Ezin duzu mezurik aldatu foro honetan.',
	'USER_CANNOT_REPLY'			=> 'Ezin duzu mezurik erantzun foro honetan.',
	'USER_CANNOT_FORUM_POST'	=> 'Ezin duzu bidaltze eragiketarik egin foro honetan foro mota honek ez bait du holangorik eusten.',

	'VIEW_MESSAGE'				=> '%1$sBidalitako mezua ikusi%2$s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sBidalitako mezu pribatua ikusi%s',

	'WRONG_FILESIZE'			=> 'Fitxategia handiegia da. Baimentdutako gehienezkoa %1d %2s(e)koa da.',
	'WRONG_SIZE'				=> 'Irudiak zabaleran %1$d pixel, altueran %2$d pixel izan behar ditu gitxienez eta zabaleran %3$d pixel, altueran %4$d pixel gehienez. Bidali duzun irudak zabaleran %5$d pixel eta altueran %6$d pixel ditu.',
));

?>