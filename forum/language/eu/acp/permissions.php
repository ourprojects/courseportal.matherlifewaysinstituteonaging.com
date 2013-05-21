<?php
/**
*
* acp_permissions.php [Basque [eu]]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Baimenak oso granular dira eta lau atal nagusitan banatzen dira:</p>

		<h2>Baimen orokorrak</h2>
		<p>Sarrerak orokorrean kontrolatzeko erabiltzen dira baimen hauek eta foro osora egokitzen dira. Atal honetan Erabiltzaileen baimenak, Taldeen baimenak eta Administratzaile eta Moderadore Orokorren baimenak aurkituko ditugu.</p>

		<h2>Foroan oinarritutako baimenak</h2>
		<p>Foro bakoitzeko sarrerak kontrolatzeko erabiltzen dira baimen hauek. Atal honetan Foro baimenak, Foro Moderadoreak, Erabiltzaileen foro baimenak eta Taldeen foro baimenak aurkituko ditugu.</p>

		<h2>Eginkizunen baimenak</h2>
		<p>Baimen hauek, eginkizun (rol) ezberdinetara esleituko diren baimen paketeak sortzeko erabiltzen dira. Lehenetsitako eginkizunek foroaren administrazioa ziurtatu beharko lukete bere lau ataletan. Egoki deritxozun moduan gehitu/aldatu/ezabatu zenitzake eginkizunak (rolak).</p>

		<h2>Baimen maskarak</h2>
		<p>Maskara hauek Erabiltzaile, Moderadore (Tokiko eta Orokorrak), Administrari edota Foroetara esleitutako baimen eraginkorrak ikusteko erabiltzen dira.</p>
	
		<br />

		<p>Baimenen ezarpen eta kudeatzeari buruz gehiago jakiteko, mesedez bisita ezazu <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Hasiera azkarreko gidaren 1.5 atala</a> (ingelesez).</p>
	',

	'ACL_NEVER'			=> 'Inoiz ez',
	'ACL_SET'			=> 'Baimenak ezarri',
	'ACL_SET_EXPLAIN'	=> 'Baimenek <samp>BAI</samp>/<samp>EZ</samp> aukera soilean oinarritzen den sistema darraite. Erabiltzaile edo talde bati aukeraren bat <samp>INOIZ EZ</samp> bezala ezarriz gero, lehenago esleitako edozein aukera ezabatuko litzateke. Ez badiozu erabiltzaile edo talde jakinen bati balioren bat esleitu nahi <samp>EZ</samp> aukera ezazu. Beste edozein lekutan balorerik aukeratu baldin bada, balorea lehenetsi egingo da. Bestela, <samp>INOIZ EZ</samp> balorea onartuko da. Markaturiko objektu guztiek (hau da, aurrean duten laukitxoa markaturik dutenak) zuk zehaztutako baimen paketea kopiatuko dute.',
	'ACL_SETTING'		=> 'Konfigurazioa',

	'ACL_TYPE_A_'		=> 'Administratzaile baimenak',
	'ACL_TYPE_F_'		=> 'Foro baimenak',
	'ACL_TYPE_M_'		=> 'Moderatze baimenak',
	'ACL_TYPE_U_'		=> 'Erabiltzaile baimenak',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administratzaile orokorren baimenak',
	'ACL_TYPE_GLOBAL_U_'	=> 'Erabiltzaile orokorren baimenak',
	'ACL_TYPE_GLOBAL_M_'	=> 'Moderadore orokorren baimenak',
	'ACL_TYPE_LOCAL_M_'		=> 'Foro moderadorearen baimenak',
	'ACL_TYPE_LOCAL_F_'		=> 'Foro baimenak',

	'ACL_NO'			=> 'Ez',
	'ACL_VIEW'			=> 'Baimenak ikusi',
	'ACL_VIEW_EXPLAIN'	=> 'Hemen erabiltaileak/taldeak d(it)uen baimen eraginkorrak ikus zen(e|it)zake. Lauki gorriak erabiltzaileak/taldeak ez duela baimen hori adierazten du eta lauki berdeak baduela adierazten du.',
	'ACL_YES'	=> 'Bai',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Hemendik administratzaile baimenak esleitu zenizkieke erabiltzaileei/taldeei. Administratzaile baimena duten erabiltzaile guztiek ikusi dezakete Administrazio Kontrol Panela (ACP).',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Hemendik foro moderadore baimenak esleitu zenizkieke erabiltzaileei/taldeei. Erabiltzaile soilei sarrera baimenak esleitzeko, mesedez, erabil ezazu dagokion orria.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Hemendik erabiltzaileek eta taldeek dituzten foroetarako sartzeko baimenak esleitu zenitzake. Moderadoreak esleitzeko edo administratzaileak zehazteko, mesedez, erabil ezazu dagokion orria.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Hemendik foro baimenak kopiatu ditzakezu foro batetik bestera edo hainbatetara.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Hemendik moderadore orokorren baimenak esleitu zenizkieke erabiltzaileei/taldeei. Moderadore hauek moderadore arrunten modukoak dira foro guztietara sartzeko aukera dutelaren salbuespenarekin.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hemendik foro baimenak esleitu zenizkieke taldeei.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Hemendik baimen orokorrak esleitu zenizkieke taldeei: erabiltzaile baimenak, moderadore orokorren baimenak eta administrari baimenak. Erabiltzaile baimenen gaitasunen artean irudien erabilpena, mezu pribatuak bidaltzeko aukera, etab. legozke. Moderadore orokorrenen artean mezuak onartzea, gaiak kudeatzea, debekuak kudeatzea, etab. legozke. Eta administrari baimenen artean baimenak aldatzea, BBCode pertsonalizatuak zehaztea, foroak kudeatzea, etab. Erabiltzaile banakoen baimenak oso urritan aldatu beharko lirateke, hobe da erabiltzaileak taldeka banatu eta baimenak talde horiei esleitzea.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Hemendik administrari baimenei dagozkien eginkizunak (rolak) kudeatu zenitzake. Eginkizunak baimen eranginkorrak dira, beraz eginkizunen bat aldatzen baldin baduzu, rol hori duten elementu guztiei dagozkien baimenak ere aldatu egingo dizkieu aldi berean.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Hemendik foro baimenei dagozkien eginkizunak (rolak) kudeatu zenitzake. Eginkizunak baimen eranginkorrak dira, beraz eginkizunen bat aldatzen baldin baduzu, rol hori duten elementu guztiei dagozkien baimenak ere aldatu egingo dizkiezu aldi berean.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Hemendik moderadore baimenei dagozkien eginkizunak (rolak) kudeatu zenitzake. Eginkizunak baimen eranginkorrak dira, beraz eginkizunen bat aldatzen baldin baduzu, rol hori duten elementu guztiei dagozkien baimenak ere aldatu egingo dizkiezu aldi berean.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Hemendik erabiltzaile baimenei dagozkien eginkizunak (rolak) kudeatu zenitzake. Eginkizunak baimen eranginkorrak dira, beraz eginkizunen bat aldatzen baldin baduzu, rol hori duten elementu guztiei dagozkien baimenak ere aldatu egingo dizkiezu aldi berean.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hemendik foro baimenak esleitu zenizkieke erabiltzaileei.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Hemendik baimen orokorrak esleitu zenizkieke erabiltzaileei: erabiltzaile baimenak, moderadore orokorren baimenak eta administrari baimenak. Erabiltzaile baimenen gaitasunen artean irudien erabilpena, mezu pribatuak bidaltzeko aukera, etab. legozke. Moderadore orokorrenen artean mezuak onartzea, gaiak kudeatzea, debekuak kudeatzea, etab. Eta administrari baimenen artean baimenak aldatzea, BBCode pertsonalizatuak zehaztea, foroak kudeatzea, etab. Ezarpen hauek erabiltzaile kopuru handiei ezartzeko, nahiago baimenak taldeka ezartzea. Hobe da erabiltzaileak taldeka banatu eta baimenak talde horiei esleitzea.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Hemen aukeratutako erabiltzailei/taldei esleitutako administrari baimen eraginkorrak ikus zen(e|it)zake.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Hemen aukeratutako erabiltzailei/taldei esleitutako moderazio orokorreko baimen eraginkorrak ikus zen(e|it)zake.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hemen aukeratutako erabiltzailei/taldei esleitutako foro baimen eraginkorrak ikus zen(e|it)zake.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Hemen aukeratutako erabiltailei/taldei esleituako foro moderazio baimen eraginkorrak ikus zen(e|it)zake.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Hemen aukeratutako erabiltaileei/taldeei esleitutako erabiltzaile baimen eraginkorrak ikus zen(e|it)zake.',

	'ADD_GROUPS'				=> 'Taldeak gehitu',
	'ADD_PERMISSIONS'			=> 'Baimenak gehitu',
	'ADD_USERS'					=> 'Erabiltzaileak gehitu',
	'ADVANCED_PERMISSIONS'		=> 'Baimen aurreratuak',
	'ALL_GROUPS'				=> 'Talde guztiak aukeratu',
	'ALL_NEVER'					=> 'Guztiak <samp>INOIZ EZ</samp>',
	'ALL_NO'					=> 'Guztiak <samp>EZ</samp>',
	'ALL_USERS'					=> 'Erabiltzaile guztiak aukeratu',
	'ALL_YES'					=> 'Guztiak <samp>BAI</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Baimen guztiak ezarri',
	'APPLY_PERMISSIONS'			=> 'Baimenak ezarri',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Zehaztutako baimenak eta eginkizunak honi eta markatutako elementu guztiei ezarriko zaizkie.',
	'AUTH_UPDATED'				=> 'Baimenak eguneratu egin dira.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Ziur al zaude eragiketa honekin jarraitu nahi duzula? Kontuan hartu honekin jarraitzeak aukeratutakoen baimenen gainean berridaztea suposatzen duela.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Baimenak kopiatu nahi dituzun foro iturria.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Baimenak kopiatu nahi dituzun foro helmuga.',
	'COPY_PERMISSIONS_FROM'					=> 'Honetatik kopiatu baimenak',
	'COPY_PERMISSIONS_TO'					=> 'Honi kopiatu baimenak',
	
	'CREATE_ROLE'				=> 'Rola (eginkizunak) sortu',
	'CREATE_ROLE_FROM'			=> 'Honen ezarpenak erabili…',
	'CUSTOM'					=> 'Pertsonalizatu…',

	'DEFAULT'					=> 'Lehenetsia',
	'DELETE_ROLE'				=> 'Rola (eginkizunak) ezabatu',
	'DELETE_ROLE_CONFIRM'		=> 'Ziur eginkizun hauek ezabatu egin nahi dituzula? Rol hau esleiturik duten elementuek <strong>ez</strong> dute euren baimenik galduko.',
	'DISPLAY_ROLE_ITEMS'		=> 'Eginkizun hauek erabiltzen duten elementuak ikusi',

	'EDIT_PERMISSIONS'	=> 'Baimenak aldatu',
	'EDIT_ROLE'			=> 'Rola (eginkizunak) aldatu',

	'GROUPS_NOT_ASSIGNED'	=> 'Ez da talderik esleitu eginkizun hauetara',

	'LOOK_UP_GROUP'	=> 'Erabiltzaile taldea bilatu',
	'LOOK_UP_USER'	=> 'Erabiltzailea bilatu',

	'MANAGE_GROUPS'	=> 'Taldeak kudeatu',
	'MANAGE_USERS'	=> 'Erabiltzaileak kudeatu',

	'NO_AUTH_SETTING_FOUND'		=> 'Ez da baimenen konfigurazioa zehaztu.',
	'NO_ROLE_ASSIGNED'			=> 'Ez da eginkizunik esleitu…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Eginkizun hauek (rola) ez du eskumaldean agertzen den baimenik aldatzen. Baimen guztiak garbitu/ezabatu nahi bazenitu "Guztiak <samp>EZ</samp>" lotura erabili beharko zenuke.',
	'NO_ROLE_AVAILABLE'			=> 'Ez dago eginkizun erabilgarririk',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Mesedez emaiozu izenen bat eginkizunei.',
	'NO_ROLE_SELECTED'			=> 'Ezin daitezke eginkizunak aurkitu.',
	'NO_USER_GROUP_SELECTED'	=> 'Ez da erabiltzaile edo talderik aukeratu.',

	'ONLY_FORUM_DEFINED'		=> 'Foroak baino ez dituzu zehaztu zure aukeraketan. Mesedez, aukera ezazu baita erabiltzaile edo talderen bat.',

	'PERMISSION_APPLIED_TO_ALL'	=> 'Baimen eta eginkizunak markatutako objektuei ere ezarriko zaizkie.',
	'PLUS_SUBFORUMS'			=> 'Azpiforoak',

	'REMOVE_PERMISSIONS'	=> 'Baimenak kendu',
	'REMOVE_ROLE'			=> 'Eginkizunak (rola) kendu',
	'RESULTING_PERMISSION'	=> 'Eragindako baimena',
	'ROLE'					=> 'Eginkizunak',
	'ROLE_ADD_SUCCESS'		=> 'Eginkizunak (rola) zuzen gehitu egin dira.',
	'ROLE_ASSIGNED_TO'		=> '%s(e)ra esleitutako erabiltzaileak/Taldeak',
	'ROLE_DELETED'			=> 'Eginkizunak (rola) zuzen ezabatu egin dira.',
	'ROLE_DESCRIPTION'		=> 'Eginkizunen deskribapena',

	'ROLE_ADMIN_FORUM'			=> 'Foroko administraria',
	'ROLE_ADMIN_FULL'			=> 'Administrari orokorra',
	'ROLE_ADMIN_STANDARD'		=> 'Administrari arrunta',
	'ROLE_ADMIN_USERGROUP'		=> 'Talde eta erabiltzaileen administratzailea',
	'ROLE_FORUM_BOT'			=> 'Erroboten sarrera',
	'ROLE_FORUM_FULL'			=> 'Erabateko sarrera',
	'ROLE_FORUM_LIMITED'		=> 'Sarrera mugatua',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Sarrera mugatua + inkestak',
	'ROLE_FORUM_NOACCESS'		=> 'Sarrerarik gabe',
	'ROLE_FORUM_ONQUEUE'		=> 'Moderazio hilaran',
	'ROLE_FORUM_POLLS'			=> 'Sarrera arrunta + inkestak',
	'ROLE_FORUM_READONLY'		=> 'Soilik irakurtzeko sarrera',
	'ROLE_FORUM_STANDARD'		=> 'Sarrera arrunta',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Berriki izena emandako erabiltzaileari sarrera',
	'ROLE_MOD_FULL'				=> 'Erabateko Moderadore',
	'ROLE_MOD_QUEUE'			=> 'Moderazio hilararen moderadore',
	'ROLE_MOD_SIMPLE'			=> 'Moderadore soila',
	'ROLE_MOD_STANDARD'			=> 'Moderadore arrunta',
	'ROLE_USER_FULL'			=> 'Ezaugarri guztiak',
	'ROLE_USER_LIMITED'			=> 'Ezaugarri mugatuak',
	'ROLE_USER_NOAVATAR'		=> 'Irudirik gabe',
	'ROLE_USER_NOPM'			=> 'Mezu pribaturik gabe',
	'ROLE_USER_STANDARD'		=> 'Ezaugarri arruntak',
	'ROLE_USER_NEW_MEMBER'		=> 'Berriki izena emandako erabiltzailearen ezaugarriak',
	
	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Foroa kudeatzeko eta foro baimenetara sarrera.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Foroaren administrazio zeregin guztietara sarrera. <br />Ez da gomendatzen.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Foroaren administrazio zeregin gehienetara sarrera baina ezin ditu zerbitzariari edo sistemari dagozkien lanabesik heldu.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Taldeak eta erabiltzaileaik kudea ditzake. Baimenak, ezarpenak eta debekuak eta mailak kudeatzeko gai da.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Eginkizun hauek errobot eta bilatzaileentzako erabil daitezela gomendatzen da.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Foroko eginkizun guztiak erabil ditzake, oharrak eta itsaskorrak bidaltzea barne. Gehienezko mezu bidalketa ere baztertu dezake. <br />Ez da gomendatzen erabiltzaile arruntentzat.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Foroaren eginkizunen batzuk erabili ditzake, baina ezin ditzake fitxategirik erantsi edo irrifartxorik (emotikonorik) erabili bidalitako mezuetan.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Sarrera Mugatuan bezala baina inkestak sor ditzake.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Ezin ditzake foroak ikusi ezta beraietara sartu ere.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Foroaren eginkizunen batzuk erabili ditzake, fitxategiak erantsitearena barne, baina mezuek eta gaiek moderadoreren baten onarpena beharko dute.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Sarrera Arruntan bezala baina inkestak sor ditzake.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Foroa irakurri dezake baina ezingo du gairik sortu ezta mezurik bidali.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Foroaren eginkizunen batzuk erabaili ditzake, fitxategiak erantsitearena barne, baina ezingo ditu bere gaiak itxi edo ezabatu ezta inkestarik sortu ere.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Berriki izena emandako erabiltzaileen talde bereziko kidea. <samp>INOIZ EZ</samp> baimenak ditu erabiltzaile berriei aukerak eragozteko. permissions to lock features for new users.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Moderazio eginkizun guztiak erabili ditzake, debekatzea barne.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Moderazio hilara erabili dezake mezuak baieztatu edo aldatzeko, baina ezer gehiagorik ez.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Mezuen oinarrizko jarduerak baino ezin ditzake burutu. Ezin ditu ohartarazpenik bidali ezta moderazio hilara erabili.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Moderazio lanabes gehienak erabili ditzake, baina ezin ditu erabiltzailerik debekatu ezta mezuen autorea aldatu.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Erabilgarri dauden foroaren eginkizun guztiak erabili ditzake, erabiltzaile izena aldatu edo bidaltzeko gehienezko mezu muga baztertzea barne.<br />Ez da gomendatzen.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Erabiltzailearen eginkizun batzuk erabili ditzake. Fitxategi erantsiak, e-mailak edota mezu pribatuak ez daude baimendurik.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Eginkizun pakete mugatua du eta ezin du irudirik erabili.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Eginkizun pakete mugatua du eta ezin du mezu pribaturik bidali.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Erabiltzailearen eginkizun gehienak erabili ditzake baina ez guztiak. Adibidez, ezin du erabiltzaile izenik aldatu ezta gehienezko mezu muga baztertu.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Berriki izena emandako erabiltzaileen talde bereziko kidea. <samp>INOIZ EZ</samp> baimenak ditu erabiltzaile berriei aukerak eragozteko.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Rolak zer suposatzen duen eta zergatik sortu duzun azaldu zenezake era laburrean. Testu hau baimenen orrian ere agertuko da.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rolaren deskribapena luzeegia da, mesedez 4000 karaktere baino gutxiago erabili.',
	'ROLE_DETAILS'					=> 'Rol xehetasunak',
	'ROLE_EDIT_SUCCESS'				=> 'Rola zuzen aldatu egin da.',
	'ROLE_NAME'						=> 'Rol izena',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Dagoeneko badago <strong>%s</strong> izeneko rola zehaztutako baimen berdinak dituena.',
	'ROLE_NOT_ASSIGNED'				=> 'Rola oraindik ez da esleitua izan.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Aukeratutako foroa(k) ez d(ir)a existitzen.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Aukeratutako taldea(k) ez d(ir)a existitzen.',
	'SELECTED_USER_NOT_EXIST'		=> 'Aukeratutako erabiltzailea(k) ez d(ir)a existitzen.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Hemen aukeratzen duzun foroak, bere azpiforo guztiak sartzen ditu aukeraketan.',
	'SELECT_ROLE'					=> 'Aukeratu rola…',
	'SELECT_TYPE'					=> 'Mota aukeratu',
	'SET_PERMISSIONS'				=> 'Baimenak ezarri',
	'SET_ROLE_PERMISSIONS'			=> 'Rol baimenak ezarri',
	'SET_USERS_PERMISSIONS'			=> 'Erabilzaile baimenak ezarri',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Erabiltzaile foro baimenak ezarri',

	'TRACE_DEFAULT'					=> 'Baimen guztiek Por defecto cada permiso es <samp>EZ</samp> (ezarri gabea) dute aukera lehenetsitzat. Beraz, baimenak beste ezarpenekaitik gainidatzia izan daiteke.',
	'TRACE_FOR'						=> 'Jatorria bilatu',
	'TRACE_GLOBAL_SETTING'			=> '%s (orokorra)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Talde honen baimenak <samp>INOIZ EZ</samp> balorean ezarrita daude, beraz lehengo balioa mantentzen da.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Talde honen baimenak <samp>INOIZ EZ</samp> balorean ezarrita daude foro honetarako, beraz lehengo balioa mantentzen da.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Talde honen baimenak <samp>INOIZ EZ</samp> balorean daude ezarrita, beraz, hau izango da guztizko balioa ez bait da lehenagokorik ezarri (<samp>EZ</samp> ezar ezazu).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Talde honen baimenak <samp>INOIZ EZ</samp> balorean daude ezarrita foro honetarako, beraz, hau izango da guztizko balioa ez bait da lehenagokorik ezarri (<samp>EZ</samp> ezar ezazu).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Talde honetako baimenak <samp>INOIZ EZ</samp> balorean daude ezarrita. Horrek guztizko balioa <samp>BAI</samp> balorea <samp>INOIZ EZ</samp> balorean bihurtzen du erabiltzaile honentzako.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Talde honetako baimenak <samp>INOIZ EZ</samp> balorean daude ezarrita. Horrek guztizko balioa <samp>BAI</samp> balorea <samp>INOIZ EZ</samp> balorean bihurtzen du erabiltzaile honentzako.',
	'TRACE_GROUP_NO'				=> 'Talde honetako baimenak <samp>EZ</samp> balorean daude ezarrita, beraz lehengo guztizko balioa mantentzen da.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Talde honetako baimenak <samp>EZ</samp> balorean daude ezarrita foro honetarako, beraz lehengo guztizko balioa mantentzen da.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Talde honetako baimenak <samp>BAI</samp> balorean daude ezarrita, baina lehengo <samp>INOIZ EZ</samp> balorea ezin daiteke aldatu.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Talde honetako baimenak <samp>BAI</samp> balorean daude ezarrita foro honetarako, baina lehengo <samp>INOIZ EZ</samp> balorea ezin daiteke aldatu.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Talde honetako baimenak <samp>BAI</samp> balorean daude ezarrita, eta hau izango da guztizko balioa ez bait da lehenagokorik ezarri(<samp>EZ</samp> ezar ezazu).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Talde honetako baimenak <samp>BAI</samp> balorean daude ezarrita foro honetarako, eta hau izango da guztizko balioa ez bait da lehenagokorik ezarri(<samp>EZ</samp> ezar ezazu).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Talde honetako baimenak <samp>BAI</samp> balorean daude ezarrita, eta lehengo guztizkoa ere <samp>BAI</samp> balorean zegoen ezarrita, beraz, lehengo guztizko balioa mantentzen da.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Talde honetako baimenak <samp>BAI</samp> balorean daude ezarrita foro honetarako, eta lehengo guztizkoa ere <samp>BAI</samp> balorean zegoen ezarrita, beraz, lehengo guztizko balioa mantentzen da.',
	'TRACE_PERMISSION'				=> '%s - baimenak arakatu',
	'TRACE_RESULT'					=> 'Araketaren emaitza',
	'TRACE_SETTING'					=> 'Ezarpenak arakatu',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Foro honetako erabiltzaile baimen bereiztuak <samp>BAI</samp> balorean ezarrita daude eta lehengo guztizkoa ere <samp>SÍ</samp> balorean zegon ezarrita, beraz, lehengo guztizko balioa mantentzen da. %sBaimen orokorrak arakatu%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Foro honetako erabiltzaile baimen bereiztuak <samp>BAI</samp> balorean ezarrita daude. Horrek oraingo <samp>INOIZ EZ</samp> balorea bihurtzen du. %sBaimen orokorrak arakatu%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Foro honetako erabiltzaile baimen bereiztuak <samp>INOIZ EZ</samp> balorean ezarrita daude. Ez du tokiko baimenetan inongo eraginik. %sBaimen orokorrak arakatu%s',

	'TRACE_USER_FOUNDER'					=> 'Erabiltzaile hau sortzailea da. Admin baimenak beti lehenetsirik.',
	'TRACE_USER_KEPT'						=> 'Erabiltzaile honen baimena <samp>EZ</samp> balorean dago ezarrita, beraz lehengo guztizko balioa mantentzen da.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Erabiltzaile honen baimena <samp>EZ</samp> balorean dago ezarrita foro honetarako, beraz lehengo guztizko balioa mantentzen da.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Erabiltzaile honen baimena <samp>INOIZ EZ</samp> balorean dago ezarrita eta lehengo guztizkoa ere <samp>INOIZ EZ</samp> balorean ezarrita dago. Beraz, ez da ezer aldatzen.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Erabiltzaile honen baimena <samp>INOIZ EZ</samp> balorean dago ezarrita foro honetarako eta lehengo guztizkoa ere <samp>INOIZ EZ</samp> balorean ezarrita dago. Beraz, ez da ezer aldatzen.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Erabiltzaile honen baimena <samp>INOIZ EZ</samp> balorean dago ezarrita. Lehengo guztizkoa <samp>EZ</samp> balorean ezarrita zegoenez, hau izango da guztizko balio berria.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Erabiltzaile honen baimena <samp>INOIZ EZ</samp> balorean dago ezarrita foro honetarako. Lehengo guztizkoa <samp>EZ</samp> balorean ezarrita zegoenez, hau izango da guztizko balio berria.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Erabiltzaile honen baimena <samp>INOIZ EZ</samp> balorean dago ezarrita eta honek lehengo <samp>BAI</samp> balorea aldatzen du.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Erabiltzaile honen baimena <samp>INOIZ EZ</samp> balorean dago ezarrita foro honetarako eta honek lehengo <samp>BAI</samp> balorea aldatzen du.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Erabiltzaile honen baimena <samp>EZ</samp> balorean dago ezarrita eta lehengo guztizkoa <samp>BAI</samp> balorean ezarrita zegoenez, <samp>INOIZ EZ</samp> izango da.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Erabiltzaile honen baimena <samp>EZ</samp> balorean dago ezarrita foro honetarako eta lehengo guztizkoa <samp>BAI</samp> balorean ezarrita zegoenez, <samp>INOIZ EZ</samp> izango da.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Erabiltzaile honen baimena <samp>BAI</samp> balorean ezarrita dago baina guztizko <samp>INOIZ EZ</samp> balorea ezin daiteke aldatu.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Erabiltzaile honen baimena <samp>BAI</samp> balorean ezarrita dago foro honetarako baina guztizko <samp>INOIZ EZ</samp> balorea ezin daiteke aldatu.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Erabiltzaile honen baimena <samp>BAI</samp> balorean ezarrita dago eta guztizko balore bihurtzen da, lehengo guztizkoa <samp>EZ</samp> balorean ezarrita zegoelako.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Erabiltzaile honen baimena <samp>BAI</samp> balorean ezarrita dago foro honetarako eta guztizko balore bihurtzen da, lehengo guztizkoa <samp>EZ</samp> balorean ezarrita zegoelako.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Erabiltzaile honen baimena <samp>BAI</samp> balorean ezarrita dago eta guztizko balorea ere <samp>BAI</samp> balorean ezarrita zegoen. Beraz, ez da ezer aldatzen.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Erabiltzaile honen baimena <samp>BAI</samp> balorean ezarrita dago foro honetarako eta guztizko balorea ere <samp>BAI</samp> balorean ezarrita zegoen. Beraz, ez da ezer aldatzen.',
	'TRACE_WHO'	=> 'Nor',
	'TRACE_TOTAL'	=> 'Guztizkoa',

	'USERS_NOT_ASSIGNED'		=> 'Ez da erabiltzailerik esleitu rol honetara',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'lehenetsitako hurrengo taldeen kide da',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'pertsonalizatutako hurrengo taldeen kide da',

	'VIEW_ASSIGNED_ITEMS'		=> 'Esleitutako elementuak ikusi',
	'VIEW_LOCAL_PERMS'			=> 'Tokiko baimenak',
	'VIEW_GLOBAL_PERMS'			=> 'Baimen orokorrak',
	'VIEW_PERMISSIONS'			=> 'Baimenak ikusi',

	'WRONG_PERMISSION_TYPE'				=> 'Baimen mota okerra.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Baimenen ezarpenak formatu okerrean daude, phpBB ez baimenak zuzen ulertzeko gai.',
));

?>