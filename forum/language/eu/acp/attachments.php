<?php
/**
*
* acp_attachments.php [Basque [eu]]
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
//


$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Hemen fitxategi erantsiei dagozkien parametroak eta kategori bereziak prestatu ditzakezu.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Hemen zure luzapen taldeak gehitu, ezabatu, aldatu edo ezgaitu ditzakezu. Badaude aparteko aukerak ere, zeinekin luzapen taldeak kategori berezietara esleitu zenitzake, deskargatzeko modua aldatu edo talde horretako luzapedun fitxategiek erakutsiko duten ikono bat gehitu.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Hemen zure baimenak uzten dizkizun luzapenak kudeatu zenitzake. Luzapenak gaitzeko jo ezazu luzapen taldeko administrazio panelera, mesedez. Benetan gomendatzen dizugula script luzapenak (<code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, eta antzekoak) ez baimentzea.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Hemen fitxategi umezurtzak ikus ditzakezu. Hau da, erabiltzaileek bidaligabeko mezuei erantsitako fitxategiak. Fitxategi hauek ezabatu edo existitzen baden mezuren batera erantsi zenitzake. Azken aukera honek, zuk zeuk zehaztu beharko duzun mezu ID baliogarri bat eskatzen du.',
	'ADD_EXTENSION'						=> 'Luzapena gehitu',
	'ADD_EXTENSION_GROUP'				=> 'Luzapen taldea gehitu',
	'ADMIN_UPLOAD_ERROR'				=> 'Errorea gertatu da "%s" fitxategia eransterakoan. ',
	'ALLOWED_FORUMS'					=> 'Baimendutako foroak',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Aukeratutako foro(eta)ra luzapen esleituak bidaltzeko baimena.',
	'ALLOWED_IN_PM_POST'				=> 'Baimenduta',
	'ALLOW_ATTACHMENTS'					=> 'Fitxategi erantsiak baimendu',
	'ALLOW_ALL_FORUMS'					=> 'Foro guztietan baimendu',
	'ALLOW_IN_PM'						=> 'Mezu pribatuetan baimendu',
	'ALLOW_PM_ATTACHMENTS'				=> 'Mezu pribatuetan fitxategi erantsiak baimendu',
	'ALLOW_SELECTED_FORUMS'				=> 'Behekaldean aukeratutako foroetan baino ez',
	'ASSIGNED_EXTENSIONS'				=> 'Esleitutako luzapenak',
	'ASSIGNED_GROUP'					=> 'Esleitutako luzapen taldea',
	'ATTACH_EXTENSIONS_URL'				=> 'Luzapenak',
	'ATTACH_EXT_GROUPS_URL'				=> 'Luzapen taldeak',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Gehienezko tamaina',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Fitxategi bakoitzeko gehienezko tamaina. Balorea huts baldin bada (0), igon daitekenaren tamaina zure PHP instalazioaren ebazpenek baino ez dute mugatzen.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Gehienezko erabiltzaileko',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Mezu pribatu bati erantsitako fitxategi bakoitzeko gehienezko tamaina, 0k mugagabea dela adierazten duelarik',
	'ATTACH_ORPHAN_URL'					=> 'Fitxategi erantsi umezurtzak',
	'ATTACH_POST_ID'					=> 'Mezu IDa',
	'ATTACH_QUOTA'						=> 'Fitxategi erantsietarako gehienezko orokorra',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Foro osoko fitxategi erantsietarako dagoen lekua diskoan, 0k mugagabea dela adierazten duelarik.',
	'ATTACH_TO_POST'					=> 'Mezuari fitxategia erantsi',

	'CAT_FLASH_FILES'					=> 'Flash fitxategiak',
	'CAT_IMAGES'						=> 'Irudiak',
	'CAT_QUICKTIME_FILES'				=> 'Quicktime fitxategiak',
	'CAT_RM_FILES'						=> 'RealMedia fitxategiak',
	'CAT_WM_FILES'						=> 'Windows Media fitxategiak',
	'CHECK_CONTENT'				=> 'Fitxategi erantsiak egiaztatu',
'CHECK_CONTENT_EXPLAIN'		=> 'Nabigatzaile batzuei iruzur egin liezaieke zuzena ez den mimetype bat egotzi diezaieten gehitutako fitxategiei. Aukera honekin fitxategi mota hau atzera botako dela ziurtatzen da.',
	'CREATE_GROUP'						=> 'Talde berria sortu',
	'CREATE_THUMBNAIL'					=> 'Bista miniaturan sortu',
	'CREATE_THUMBNAIL_EXPLAIN'			=> 'Miniatura sortu zilegia den une guztietan.',

	'DEFINE_ALLOWED_IPS'				=> 'Baimendutako IP/hostnameak zehaztu',
	'DEFINE_DISALLOWED_IPS'				=> 'Baimenik gabeko IP/hostnameak zehaztu',
	'DOWNLOAD_ADD_IPS_EXPLAIN'			=> 'IP edo hostname bat baino gehiago zehazteko, sar ezazu bakoitza lerro berri baten. IP helbide-maila zehazteko hasiera eta bukaera marratxo batekin (-) bana itzazu, komodina lortzeko "*" zeinua erabili.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'		=> 'IP helbide bat baino gehiago ukatu (edo berriro gaitu) zenezake behinean nabigatzaileko konbinazio egokia erabiliz (adibidez, Ctrl+klik). Baimenik gabeko IPak atzealde ilunaz margoturik daude.',
	'DISPLAY_INLINED'					=> 'Irudiak erakutsi',
	'DISPLAY_INLINED_EXPLAIN'			=> '"Irudirik gabe" aukeratzen baldin baduzu fitxategi erantsiak lotura bezala baino ez dira erakutsiko.',
	'DISPLAY_ORDER'						=> 'Fitxategi erantsiak erakusteko ordena',
	'DISPLAY_ORDER_EXPLAIN'				=> 'Fitxategi erantsiak datagatik ordenaturik erakutsi.',

	'EDIT_EXTENSION_GROUP'				=> 'Luzapen taldea aldatu',
	'EXCLUDE_ENTERED_IP'				=> 'Sartutako IPa/hostnamea ukatzeko gaitu.',
	'EXCLUDE_FROM_ALLOWED_IP'			=> 'Baimendutako IP/hostnametatik IPa kendu.',
	'EXCLUDE_FROM_DISALLOWED_IP'		=> 'Baimenik gabeko IP/hostnametatik IPa kendu.',
	'EXTENSIONS_UPDATED'				=> 'Luzapenak zuzen eguneratu egin dira.',
	'EXTENSION_EXIST'					=> '%s luzapena badago dagoeneko',
	'EXTENSION_GROUP'					=> 'Luzapen taldea',
	'EXTENSION_GROUPS'					=> 'Luzapen taldeak',
	'EXTENSION_GROUP_DELETED'			=> 'Luzapen taldea zuzen ezabatu egin da.',
	'EXTENSION_GROUP_EXIST'				=> '%s luzapen taldea badago dagoeneko.',

		'EXT_GROUP_ARCHIVES'  => 'Fitxategiak',
	'EXT_GROUP_DOCUMENTS'  => 'Dokumentuak',
	'EXT_GROUP_DOWNLOADABLE_FILES'   => 'Jaisteko fitxategiak',
	'EXT_GROUP_FLASH_FILES'	  => 'Flash fitxategiak',
	'EXT_GROUP_IMAGES'	  => 'Irudiak',
	'EXT_GROUP_PLAIN_TEXT'	  => 'Testu planoa',
	'EXT_GROUP_QUICKTIME_MEDIA'   => 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'	  => 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'      => 'Windows Media',
	
	'GO_TO_EXTENSIONS'					=> 'Luzapen administrazio atalera joan',
	'GROUP_NAME'						=> 'Taldeko izena',

	'IMAGE_LINK_SIZE'					=> 'Lotutako irudiaren tamaina',
	'IMAGE_LINK_SIZE_EXPLAIN'			=> 'Erantsitako irudia lotura baten modura baino ez da irudiaren tamaina hau baino handiagoa baldin bada. Portaera hau ezgaitzeko, 0px x 0px balioekin konfiguratu.',
	'IMAGICK_PATH'						=> 'Imagemagickera bidea',
	'IMAGICK_PATH_EXPLAIN'				=> 'Imagemagick bihurtze aplikaziorako bide osoa, adibidez <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'					=> 'Gehienezko fitxategi erantsi mezuko',
	'MAX_ATTACHMENTS_PM'				=> 'Gehienezko fitxategi erantsi mezu pribatuko'
	'MAX_EXTGROUP_FILESIZE'				=> 'Gehienezko fitxategi tamaina',
	'MAX_IMAGE_SIZE'					=> 'Gehienezko irudi tamaina',
	'MAX_IMAGE_SIZE_EXPLAIN'			=> 'Erantsitako irudiaren gehienezko tamaina. 0px x 0px konfigura itzazu balioak irudi-egiaztatzea ezgaitzeko.',
	'MAX_THUMB_WIDTH'					=> 'Miniaturaren gehienezko zabalera pixeletan',
	'MAX_THUMB_WIDTH_EXPLAIN'			=> 'Sortutako miniaturak ez du zabalera hau gaindituko.',
	'MIN_THUMB_FILESIZE'				=> 'Miniaturaren gutxienezko tamaina',
	'MIN_THUMB_FILESIZE_EXPLAIN'		=> 'Ez sortu miniaturarik tamaina hau baino gutxiagoko irudientzat.',
	'MODE_INLINE'						=> 'Inline',
	'MODE_PHYSICAL'						=> 'Fisikoan',

	'NOT_ALLOWED_IN_PM'					=> 'Ez da mezu pribatuetan baimentzen',
	'NOT_ALLOWED_IN_PM_POST'			=> 'Ez dago baimenduta',
	'NOT_ASSIGNED'						=> 'Ez dago esleituta',
	'NO_EXT_GROUP'						=> 'Bat ere ez',
	'NO_EXT_GROUP_NAME'					=> 'Ez duzu talde izenik sartu',
	'NO_EXT_GROUP_SPECIFIED'			=> 'Ez duzu luzapen talderik zehaztu.',
	'NO_FILE_CAT'						=> 'Bat ere ez',
	'NO_IMAGE'							=> 'Irudirik gabe',
	'NO_THUMBNAIL_SUPPORT'				=> 'Miniaturak ikusteko euskarria ezgaitu egin da ez bait da beharrezkoak diren GD luzapena edo Imagemick aplikazioa aurkitu.',
	'NO_UPLOAD_DIR'						=> 'Zehaztu duzun gehitzeko karpeta ez da existitzen.',
	'NO_WRITE_UPLOAD'					=> 'Zehaztu duzun gehitzeko karpeta ezin da idatzi. Mesedez, alda itzazu baimenak web zerbitzariak bertan idatz dezan.',

	'ONLY_ALLOWED_IN_PM'				=> 'Mezu pribatuetan baino ez baimendua',
	'ORDER_ALLOW_DENY'					=> 'Baimendu',
	'ORDER_DENY_ALLOW'					=> 'Ezeztatu',

	'REMOVE_ALLOWED_IPS'				=> '<em>Baimendutako</em> IP/hostnameak kendu',
	'REMOVE_DISALLOWED_IPS'				=> '<em>Baimenik gabeko</em> IP/hostnameak kendu',

	'SEARCH_IMAGICK'					=> 'Imagemagick bilatu',
	'SECURE_ALLOW_DENY'					=> 'Baimendutako/Baimenik gabeko zerrenda',
	'SECURE_ALLOW_DENY_EXPLAIN'			=> 'Baimendutako/Baimenik gabeko zerrendaren portaera lehenetsia aldatzen du deskarga seguruak gaituta dagoenean. <strong>zerrenda zuritik</strong> (Baimendua) <strong>zerrenda beltzara</strong> (Baimenik gabekoa) igarotzen da.',
	'SECURE_DOWNLOADS'					=> 'Deskarga seguruak gaitu',
	'SECURE_DOWNLOADS_EXPLAIN'			=> 'Aukera hau gaituz, deskargak zehaztutako IP/hostnameetara baino ez dira mugatuko.',
	'SECURE_DOWNLOAD_NOTICE'			=> 'Deskarga segurua ez dago gaituta. Behekaldeko konfigurazioak deskarga seguruak gaitzerakoan baino ez dira aplikatuko.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'IP zerrenda zuzen eguneratu egin da.',
	'SECURE_EMPTY_REFERRER'				=> 'Bidaltzaile hutsa baimendu',
	'SECURE_EMPTY_REFERRER_EXPLAIN'		=> 'Deskarga segurua bidaltzaileetan (referrer) oinarritzen da. Ziur bidaltzaile hutsa duten baimendu nahi dituzula?',
	'SETTINGS_CAT_IMAGES'				=> 'Irudi kategoria konfiguratu',
	'SPECIAL_CATEGORY'					=> 'Kategori berezia',
	'SPECIAL_CATEGORY_EXPLAIN'			=> 'Mezuetan modu ezberdinean aurkezten dira kategori bereziak.',
	'SUCCESSFULLY_UPLOADED'				=> 'Zuzen gehitu egin da.',
	'SUCCESS_EXTENSION_GROUP_ADD'		=> 'Luzapen taldea zuzen gehitu egin da.',
	'SUCCESS_EXTENSION_GROUP_EDIT'		=> 'Luzapen taldea zuzen eguneratu egin da.',

	'UPLOADING_FILES'					=> 'Fitxategiak gehitzen',
	'UPLOADING_FILE_TO'					=> '"%1$s"fitxategia %2$d… mezura gehitzen',
	'UPLOAD_DENIED_FORUM'				=> 'Ez duzu "%s" forora fitxategiak gehitzeko baimenik.',
	'UPLOAD_DIR'						=> 'Gehitze karpeta',
	'UPLOAD_DIR_EXPLAIN'				=> 'Fitxategi erantsiak gordetzen diren bidea. Mesedez, kontuan izan fitxategiak dituela karpeta honen izena aldatzen baldin baduzu, fitxategi guztiak eskuz kopiatu beharko dituzula karpeta berrira.',
	'UPLOAD_ICON'						=> 'Gehitze ikonoa',
	'UPLOAD_NOT_DIR'					=> 'Zehaztu duzun gehitze kokapena ez dirudi karpeta bat denik.',
));

?>