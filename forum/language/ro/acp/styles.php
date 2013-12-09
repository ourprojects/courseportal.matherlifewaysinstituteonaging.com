<?php
/**
*
* acp_styles [Română]
*
* @package language
* @version $Id: styles.php,v 1.40 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: styles.php,v 1.40 2008/01/30 17:05:00 www.phpbb.ro (shara21jonny) Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Seturile de imagini cuprind toate butoanele, forumul, dosarul, etc. şi alte imagini în afara stilului, specifice forumului. Aici puteţi modifica, exporta sau şterge seturile de imagini existente şi importa sau activa seturi noi.',
	'ACP_STYLES_EXPLAIN'	=> 'Aici puteţi administra stilurile disponibile în forumul propriu. Un stil constă dintr-un şablon, o temă şi setul de imagini. Puteţi modifica stilurile existente, şterge, dezactiva, reactiva, crea sau importa unele noi. De asemenea, puteţi vedea cum va arăta un stil folosind funcţia de previzualizare. Stilul curent iniţial este notat prin prezenţa unui asterix (*). De asemenea, este afişat totalul numărului de utilizatori pentru fiecare stil, cu menţiunea ca stilurile suprascrise utilizatorilor nu vor fi reflectate aici.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Un set de şabloane cuprinde toate punctele de marcaj folosite pentru a genera formatul forumului. Aici puteţi modifica setul de şabloane existente, şterge, exporta, importa şi previzualiza seturile. De asemenea, puteţi modifica codul şablonului folosit pentru a genera codul BB.',
	'ACP_THEMES_EXPLAIN'	=> 'De aici puteţi crea, instala, modifica, şterge şi exporta temele. O temă este combinaţia de culori şi imagini ce sunt aplicate şabloanelor proprii pentru a defini înfăţişarea de bază a forumului propriu. Raza opţiunilor deschise pentru dumneavoastră depinde de configuraţia serverului propriu şi de instalarea phpBB, consultaţi manualul pentru mai multe detalii. Reţineţi când creaţi noi teme că este opţională folosirea unei teme existente ca bază.',
	'ADD_IMAGESET'			=> 'Crează setul de imagini',
	'ADD_IMAGESET_EXPLAIN'	=> 'Aici puteţi crea un set nou de imagini. În funcţie de configuraţia serverului propriu şi de permisiunea fişierelor, aici puteţi avea opţiuni suplimentare. De exemplu puteţi să vă bazaţi acest set de imagini pe un altul deja existent. De asemenea, puteţi încărca sau importa (din directorul de stocare) arhiva unui set de imagini. Dacă încărcaţi sau importaţi o arhiva, numele setului de imagini poate fi preluat opţional de la numele arhivei (pentru a obţine acest lucru lăsaţi liber numele setului de imagini).',
	'ADD_STYLE'				=> 'Crează stil',
	'ADD_STYLE_EXPLAIN'		=> 'Aici puteţi crea un stil nou. În funcţie de configuraţia serverului propriu şi de permisiunea fişierelor, aici puteţi avea opţiuni suplimentare. De exemplu puteţi să vă bazaţi acest stil pe un altul deja existent. De asemenea, puteţi încărca sau importa (din directorul de stocare) arhiva unui stil. Dacă încărcaţi sau importaţi o arhiva, numele stilului va fi determinat automat.',
	'ADD_TEMPLATE'			=> 'Crează şablon',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Aici puteţi adăuga un şablon nou. În funcţie de configuraţia serverului propriu şi de permisiunea fişierelor, aici puteţi avea opţiuni suplimentare. De exemplu puteţi să vă bazaţi acest şablon pe un altul deja existent. De asemenea, puteţi încărca sau importa (din directorul de stocare) arhiva unui şablon. Dacă încărcaţi sau importaţi o arhiva, numele şablonului poate fi luat opţional de la numele poate fi preluat opţional de la numele arhivei (pentru a obţine acest lucru lăsaţi liber numele şablonului).',
	'ADD_THEME'				=> 'Crează temă',
	'ADD_THEME_EXPLAIN'		=> 'Aici puteţi adăuga o temă nouă. Depinzând de configuraţia serverului propriu şi de permisiunea fişierelor, aici puteţi avea opţiuni adiţionale. De exemplu puteţi să vă bazaţi această temă pe o alta deja existentă. De asemenea, puteţi încărca sau importa (din directorul de stocare) arhiva unei teme. Dacă încărcaţi sau importaţi o arhiva, numele temei poate fi luat opţional de la numele poate fi preluat opţional de la numele arhivei (pentru a obţine acest lucru lăsaţi liber numele temei).',
	'ARCHIVE_FORMAT'		=> 'Tipul fişierului arhivă',
	'AUTOMATIC_EXPLAIN'		=> 'Lăsaţi necompletat pentru a încerca detectarea automată.',
	
	'BACKGROUND'			=> 'Fundal',
	'BACKGROUND_COLOUR'		=> 'Culoare fundal',
	'BACKGROUND_IMAGE'		=> 'Imagine fundal',
	'BACKGROUND_REPEAT'		=> 'Repetare fundal',
	'BOLD'					=> 'Îngroşat',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Cached',
	'CACHE_FILENAME'				=> 'Fişier şablon',
	'CACHE_FILESIZE'				=> 'Dimensiune fişier',
	'CACHE_MODIFIED'				=> 'Modificat',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Sunteţi sigur că vreţi să actualizaţi toate datele din setul de imagine? Setările de la configuraţia setului de imagini vor suprascrie toate modificările care au fost făcute cu editorul setului de imagini când acest set a fost creat.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Sunteţi sigur că vreţi să curăţaţi toate versiunile din cache ale fişierelor şablonului?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Sunteţi sigur că vreţi să actualizaţi toate datele şablonului în baza de date cu conţinutul fişierelor şablonului din sistemul de fişiere? Această operaţie va suprascrie toate modificările care au fost făcute cu editorul de şabloane când şablonul a fost adăugat în baza de date.',
	'CONFIRM_THEME_REFRESH'			=> 'Sunteţi sigur că vreţi să actualizaţi toate datele temei în baza de date cu conţinutul fişierelor temei din sistemul de fişiere? Aceasta va suprascrie toate modificările care au fost făcute cu editorul temei când tema a fost adăugată in baza de date.',
	'COPYRIGHT'						=> 'Drepturi de autor',
	'CREATE_IMAGESET'				=> 'Crează un nou set de imagini',
	'CREATE_STYLE'					=> 'Crează un stil nou',
	'CREATE_TEMPLATE'				=> 'Crează un nou set şablon',
	'CREATE_THEME'					=> 'Crează o temă nouă',
	'CURRENT_IMAGE'					=> 'Imagine curentă',

	'DEACTIVATE_DEFAULT'		=> 'Nu puteţi dezactiva stilul iniţial.',
	'DELETE_FROM_FS'			=> 'Şterge din sistemul de fişiere',
	'DELETE_IMAGESET'			=> 'Şterge set de imagini',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Aici puteţi să eliminaţi setul de imagini din baza de date. Reţineţi că nu există cale de întoarcere pentru aceste acţiuni. Este recomandat ca mai întâi să exportaţi setul pentru posibile folosiri ulterioare.',
	'DELETE_STYLE'				=> 'Şterge stil',
	'DELETE_STYLE_EXPLAIN'		=> 'Aici puteţi să eliminaţi stilul din baza de date. Aveți grijă la ștergerea stilurilor, nu există cale de întoarcere pentru acestă procedură.',
	'DELETE_TEMPLATE'			=> 'Şterge şablon',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Aici puteţi să eliminaţi şablonul din baza de date. Reţineţi că nu există cale de întoarcere pentru aceste acţiuni. Este recomandat ca mai întâi să exportaţi şablonul pentru posibile folosiri ulterioare.',
	'DELETE_THEME'				=> 'Şterge temă',
	'DELETE_THEME_EXPLAIN'		=> 'Aici puteţi să eliminaţi tema din baza de date. Reţineţi că nu există cale de întoarcere pentru aceste acţiuni. Este recomandat ca mai întâi să exportaţi tema pentru posibile folosiri ulterioare.',
	'DETAILS'					=> 'Detalii',
	'DIMENSIONS_EXPLAIN'		=> 'Specificând Da aici veţi include parametrii de lăţime/înălţime.',

	'EDIT_DETAILS_IMAGESET'				=> 'Modifică detalii set de imagini',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Aici puteţi modifica anumite detalii ale setului de imagini cum ar fi numele acestuia.',
	'EDIT_DETAILS_STYLE'				=> 'Modifică stil',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Folosind formularul de mai jos puteţi modifica stilul existent. Puteţi schimba combinaţiile şablonului, temei şi setului de imagini care definesc stilul în sine. De asemenea, puteţi seta stilul ca fiind cel iniţial.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Modifică detalii şablon',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Aici puteţi modifica anumite detalii ale şablonului cum ar fi numele acestuia. De asemenea, puteţi avea opţiunea să schimbaţi metoda de stocare a şablonului din varianta cu sistemul de fişiere în cea cu baza de date şi viceversa. Această opţiune depinde de configuraţia PHP şi de modul în care şablonul poate fi scris pe serverul web.',
	'EDIT_DETAILS_THEME'				=> 'Modifică detalii temă',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Aici puteţi modifica anumite detalii ale temei cum ar fi numele acesteia. De asemenea, puteţi avea opţiunea să schimbaţi metoda de stocare a temei din varianta cu sistemul de fişiere în cea cu baza de date şi viceversa. Această opţiune depinde de configuraţia PHP şi de modul în care tema poate fi scrisă pe serverul web.',
	'EDIT_IMAGESET'						=> 'Modifică set de imagini',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Aici puteţi modifica imaginile individuale care definesc setul de imagini. De asemenea, puteţi specifica dimesiunea imaginii. Dimensiunile sunt opţionale, specificându-le puteţi evita probleme de încărcare pe anumite browsere. Nespecificându-le reduceţi puţin dimensiunea bazei de date.',
	'EDIT_TEMPLATE'						=> 'Modifică şablon',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Aici puteţi modifica direct setul şablon. Reţineţi că aceste modificări sunt permanente şi nu mai pot fi refăcute odată ce au fost efectuate. Dacă PHP poate scrie fişierele şablonului în directorul de stiluri, orice schimbări efectuate aici vor fi scrise direct în acele fişiere. Dacă PHP nu poate scrie în acele fişiere, atunci vor fi copiate în baza de date şi toate schimbările vor fi reflectate doar acolo. Aveţi grijă când modificaţi setul şablonului, reţineţi că trebuie să închideţi toţi termenii variabili înlocuiţi {XXXX} şi declaraţiile condiţionale.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Fişierele şablonului nu au putut fi salvate aşa că setul şablonului conţinând fişierele modificate sunt acum păstrate în baza de date.',
	'EDIT_THEME'						=> 'Modifică temă',
	'EDIT_THEME_EXPLAIN'				=> 'Aici puteţi modifica tema selectată, schimbând culorile, imaginile, etc.',
	'EDIT_THEME_STORED_DB'				=> 'Fişierul stilului nu a putut fi salvat aşa că acesta este acum păstrat în baza de date conţinând modificările proprii.',
	'EDIT_THEME_STORE_PARSED'			=> 'Tema necesită ca elementele css să fie analizate. Aceasta operaţie este posibilă dacă este păstrată în baza de date.',
	'EDITOR_DISABLED'               => 'Editorul de şabloane este dezactivat.',
	'EXPORT'							=> 'Exportă',

	'FOREGROUND'			=> 'Prim plan',
	'FONT_COLOUR'			=> 'Culoare font',
	'FONT_FACE'				=> 'Faţă font',
	'FONT_FACE_EXPLAIN'		=> 'Puteţi specifica mai multe fonturi separându-le prin virgulă. Dacă un utilizator nu are primul font instalat, va fi ales celălalt font care funcţionează.',
	'FONT_SIZE'				=> 'Dimensiune font',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Ascunde CSS neprelucrat',

	'IMAGE_WIDTH'				=> 'Lăţime imagine',
	'IMAGE_HEIGHT'				=> 'Înălţime imagine',
	'IMAGE'						=> 'Imagine',
	'IMAGE_NAME'				=> 'Nume imagine',
	'IMAGE_PARAMETER'			=> 'Parametru',
	'IMAGE_VALUE'				=> 'Valoare',
	'IMAGESET_ADDED'			=> 'Noul set de imagini a fost adăugat în sistemul de fişiere.',
	'IMAGESET_ADDED_DB'			=> 'Noul set de imagini a fost adăugat în baza de date.',
	'IMAGESET_DELETED'			=> 'Setul de imagini a fost şters.',
	'IMAGESET_DELETED_FS'		=> 'Setul de imagini a fost scos din baza de date dar unele fişiere s-ar putea să rămână în sistemul de fişiere.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Detaliile setului de imagini au fost actualizate cu succes.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Selectaţi o metodă de arhivare.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Câmpul Drepturi de autor nu poate fi mai lung de 60 caractere.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Numele setului de imagini poate conţine doar caractere alfanumerice, -, +, _ şi spaţiu.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Un set de imagini cu acest nume există deja.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Numele setului de imagini nu poate fi mai lung de 30 caractere.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Arhiva specificată nu conţine un set de imagini valid.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Trebuie să specificaţi un nume pentru acest set de imagini.',
	'IMAGESET_EXPORT'			=> 'Exportă setul de imagini',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Aici puteţi exporta un set de imagini sub forma unei arhive. Această arhivă va conţine datele necesare pentru a putea instala setul de imagini pe alt forum. Puteţi opta fie să descărcaţi fişierul direct sau să-l puneţi în directorul de stocare pentru a-l descărca mai târziu prin FTP.',
	'IMAGESET_EXPORTED'			=> 'Setul de iamgini a fost exportat cu succes şi adăugat în %s.',
	'IMAGESET_NAME'				=> 'Nume set de imagini',
	'IMAGESET_REFRESHED'		=> 'Setul de imagini a fost reimprospătat cu succes.',
	'IMAGESET_UPDATED'			=> 'Setul de imagini a fost actualizat cu succes.',
	'ITALIC'					=> 'Italic',

	'IMG_CAT_BUTTONS'		=> 'Butoane localizate',
	'IMG_CAT_CUSTOM'		=> 'Imagini particularizate',
	'IMG_CAT_FOLDERS'		=> 'Iconiţe subiect',
	'IMG_CAT_FORUMS'		=> 'Iconiţe forum',
	'IMG_CAT_ICONS'			=> 'Iconiţe generale',
	'IMG_CAT_LOGOS'			=> 'Logo-uri',
	'IMG_CAT_POLLS'			=> 'Imagini chestionare',
	'IMG_CAT_UI'			=> 'Elemente de interfaţă ale utilizatorului generale',
	'IMG_CAT_USER'			=> 'Imagini suplimentare',

	'IMG_SITE_LOGO'			=> 'Logo principal',
	'IMG_UPLOAD_BAR'		=> 'Bară de progres pentru încărcări',
	'IMG_POLL_LEFT'			=> 'Partea stângă a chestionarului',
	'IMG_POLL_CENTER'		=> 'Centrul chestionarului',
	'IMG_POLL_RIGHT'		=> 'Partea dreaptă a chestionarului',
	'IMG_ICON_FRIEND'		=> 'Adăugat ca prieten',
	'IMG_ICON_FOE'			=> 'Adăugat ca persoană neagreată',

	'IMG_FORUM_LINK'			=> 'Legătură forum',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum închis',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforum',
	'IMG_FORUM_UNREAD'			=> 'Mesaje pe forum necitite',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Mesaje pe forum necitite închise',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Mesaje necitite în subforum',
	'IMG_SUBFORUM_READ'			=> 'Legendă subforum',
	'IMG_SUBFORUM_UNREAD'		=> 'Legendă mesaje necitite în subforum',

	'IMG_TOPIC_MOVED'			=> 'Subiect mutat',

	'IMG_TOPIC_READ'				=> 'Subiect',
	'IMG_TOPIC_READ_MINE'			=> 'Subiect publicat în',
	'IMG_TOPIC_READ_HOT'			=> 'Subiect popular',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Subiect popular publicat în',
	'IMG_TOPIC_READ_LOCKED'			=> 'Subiect închis',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Subiect închis publicat în',

	'IMG_TOPIC_UNREAD'				=> 'Mesaje necitite în subiect',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Subiect publicat necitit',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Mesaje populare necitite în subiect',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Subiect populare necitit',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Subiect necitit închis',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Subiect închis publicat ca şi necitit',

	'IMG_STICKY_READ'				=> 'Subiect lipicios',
	'IMG_STICKY_READ_MINE'			=> 'Subiect lipicios publicat în',
	'IMG_STICKY_READ_LOCKED'		=> 'Subiect lipicios închis',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Subiect lipicios închis publicat în',
	'IMG_STICKY_UNREAD'				=> 'Subiect lipicios cu mesaje necitite',
	'IMG_STICKY_UNREAD_MINE'		=> 'Subiect lipicios publicat ca şi necitit',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Subiect lipicios închis cu mesaje necitite',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Subiect lipicios închis publicat ca şi necitit',

	'IMG_ANNOUNCE_READ'					=> 'Anunţ',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Anunţ publicat în',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Anunţ închis',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Anunţ închis publicat în',
	'IMG_ANNOUNCE_UNREAD'				=> 'Anunţ cu mesaje necitite',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Anunţ publicat ca şi necitit',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Anunţ închis cu mesaje necitite',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Anunţ închis publicat ca şi necitit',

	'IMG_GLOBAL_READ'					=> 'Global',
	'IMG_GLOBAL_READ_MINE'				=> 'Global publicat în',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Global închis',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Global închis publicat în',
	'IMG_GLOBAL_UNREAD'					=> 'Global cu mesaje necitite',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Global publicat ca şi necitit',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Global închis cu mesaje necitite',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Global închis publicat ca şi necitit',

	'IMG_PM_READ'		=> 'Mesaj privat citit',
	'IMG_PM_UNREAD'		=> 'Mesaj privat necitit',

	'IMG_ICON_BACK_TOP'		=> 'Sus',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Trimite email',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Trimite mesaj',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Site web',

	'IMG_ICON_POST_DELETE'			=> 'Şterge mesaj',
	'IMG_ICON_POST_EDIT'			=> 'Modifică mesaj',
	'IMG_ICON_POST_INFO'			=> 'Arată detalii mesaj',
	'IMG_ICON_POST_QUOTE'			=> 'Citează mesaj',
	'IMG_ICON_POST_REPORT'			=> 'Raportează mesaj',
	'IMG_ICON_POST_TARGET'			=> 'Minimesaj',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Minimesaj nou',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Fişier ataşat',
	'IMG_ICON_TOPIC_LATEST'			=> 'Ultimul mesaj',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Ultimul mesaj necitit',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Mesaj raporat',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Mesaj neaprobat',

	'IMG_ICON_USER_ONLINE'		=> 'Utilizator conectat',
	'IMG_ICON_USER_OFFLINE'		=> 'Uutilizator neconectat',
	'IMG_ICON_USER_PROFILE'		=> 'Arată profil',
	'IMG_ICON_USER_SEARCH'		=> 'Caută mesaje',
	'IMG_ICON_USER_WARN'		=> 'Avertizează utilizator',

	'IMG_BUTTON_PM_FORWARD'		=> 'Trimite mai departe mesajul privat',
	'IMG_BUTTON_PM_NEW'			=> 'Mesaj privat nou',
	'IMG_BUTTON_PM_REPLY'		=> 'Răspunde la mesajul privat',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Subiect închis',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Subiect nou',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Răspunde subiect',

	'IMG_USER_ICON1'		=> 'Imaginea 1 definită de utilizator',
	'IMG_USER_ICON2'		=> 'Imaginea 2 definită de utilizator',
	'IMG_USER_ICON3'		=> 'Imaginea 3 definită de utilizator',
	'IMG_USER_ICON4'		=> 'Imaginea 4 definită de utilizator',
	'IMG_USER_ICON5'		=> 'Imaginea 5 definită de utilizator',
	'IMG_USER_ICON6'		=> 'Imaginea 6 definită de utilizator',
	'IMG_USER_ICON7'		=> 'Imaginea 7 definită de utilizator',
	'IMG_USER_ICON8'		=> 'Imaginea 8 definită de utilizator',
	'IMG_USER_ICON9'		=> 'Imaginea 9 definită de utilizator',
	'IMG_USER_ICON10'		=> 'Imaginea 10 definită de utilizator',
	'INACTIVE_STYLES'			=> 'Stiluri inactive',

	'INCLUDE_DIMENSIONS'		=> 'Include dimensiuni',
	'INCLUDE_IMAGESET'			=> 'Include set imagini',
	'INCLUDE_TEMPLATE'			=> 'Include şablon',
	'INCLUDE_THEME'				=> 'Include temă',
	'INHERITING_FROM'         => 'Moşteneşte de la',
	'INSTALL_IMAGESET'			=> 'Instalează set imagini',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Aici puteţi instala setul de imagini selectat. Puteţi modifica anumite detalii dacă preferaţi sau puteţi folosi setările standard de instalare.',
	'INSTALL_STYLE'				=> 'Instalează stil',
	'INSTALL_STYLE_EXPLAIN'		=> 'Aici puteţi instala un stil nou dacă elementele corespund stilului. Dacă aveţi deja elementele relevante ale stilului instalate acestea nu vor fi suprascrise. Anumite stiluri necesită ca elementele ale stilului să fie deja instalate. Dacă încercaţi instalarea unui astfel de stil şi nu aveţi elementele necesare atunci vei fi informat de acest lucru.',
	'INSTALL_TEMPLATE'			=> 'Instalează şablon',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Aici puteţi instala un set şablon nou. În funcţie de configuraţia serverului puteţi să aveţi aici un număr de opţiuni.',
	'INSTALL_THEME'				=> 'Instalează temă',
	'INSTALL_THEME_EXPLAIN'		=> 'Aici puteţi instala tema selectată. Poţi puteţi anumite detalii dacă preferaţi sau puteţi folosi setările standard de instalare.',
	'INSTALLED_IMAGESET'		=> 'Seturi de imagini instalate',
	'INSTALLED_STYLE'			=> 'Stiluri instalate',
	'INSTALLED_TEMPLATE'		=> 'Şabloane instalate',
	'INSTALLED_THEME'			=> 'Teme instalate',
	'KEEP_IMAGESET'				=> 'Păstrare set imagini “%s”',
	'KEEP_TEMPLATE'				=> 'Păstrare șablon “%s”',
	'KEEP_THEME'				=> 'Păstrare temă “%s”',

	'LINE_SPACING'				=> 'Spaţiu între linii',
	'LOCALISED_IMAGES'			=> 'Localizat',
	'LOCATION_DISABLED_EXPLAIN'   => 'Această setare este moştenită şi nu poate fi modificată.',
	'NO_CLASS'					=> 'Nu poate fi găsită clasa în stil.',
	'NO_IMAGESET'				=> 'Nu poate fi găsit setul de imagini în sistemul de fişiere.',
	'NO_IMAGE'					=> 'Nicio imagine',
	'NO_IMAGE_ERROR'			=> 'Nu poate găsi imaginea în sistemul de fişiere.',
	'NO_STYLE'					=> 'Nu poate fi găsit stilul în sistemul de fişiere.',
	'NO_TEMPLATE'				=> 'Nu poate fi găsit şablonul în sistemul de fişiere.',
	'NO_THEME'					=> 'Nu poate fi găsită tema în sistemul de fişiere.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Niciun set de imagini dezinstalat nu a fost detectat',
	'NO_UNINSTALLED_STYLE'		=> 'Niciun stil dezinstalat nu a fost detectat',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Niciun şablon dezinstalat nu a fost detectat',
	'NO_UNINSTALLED_THEME'		=> 'Nicio temă dezinstalată nu a fost detectată',
	'NO_UNIT'					=> 'Niciunul',

	'ONLY_IMAGESET'			=> 'Acesta este singurul set de imagini rămas, nu îl puteţi şterge.',
	'ONLY_STYLE'			=> 'Acesta este singurul stil rămas, nu îl puteţi şterge.',
	'ONLY_TEMPLATE'			=> 'Acesta este singurul şablon rămas, nu îl puteţi şterge.',
	'ONLY_THEME'			=> 'Acesta este singura temă rămasă, nu o puteţi şterge.',
	'OPTIONAL_BASIS'		=> 'Baze opţionale',

	'REFRESH'					=> 'Reimprospătează',
	'REPEAT_NO'					=> 'Niciunul',
	'REPEAT_X'					=> 'Doar orizontal',
	'REPEAT_Y'					=> 'Doar vertical',
	'REPEAT_ALL'				=> 'Ambele direcţii',
	'REPLACE_IMAGESET'			=> 'Înlocuieşte setul de imagini cu',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Acest set de imagini îl va înlocui pe cel îl ştergeţi în orice stiluri care îl folosesc.',
	'REPLACE_STYLE'				=> 'Înlocuieşte stilul cu',
	'REPLACE_STYLE_EXPLAIN'		=> 'Acest stil îl va înlocui pe cel îl ştergeţi pentru membrii care îl folosesc.',
	'REPLACE_TEMPLATE'			=> 'Înlocuieşte şablon cu',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Acest set şablon îl va înlocui pe cel îl ştergeţi în orice stil care îl foloseşte.',
	'REPLACE_THEME'				=> 'Înlocuieşte tema cu',
	'REPLACE_THEME_EXPLAIN'		=> 'Această temă o va înlocui pe cea care o ştergeţi în orice stil care o foloseşte.',
	'REPLACE_WITH_OPTION'		=> 'Înlocuieşte cu “%s”',
	'REQUIRES_IMAGESET'			=> 'Acest stil necesită ca setul de imagini %s să fie instalat.',
	'REQUIRES_TEMPLATE'			=> 'Acest stil necesită ca şablonul %s să fie instalat.',
	'REQUIRES_THEME'			=> 'Acest stil necesită ca tema %s să fie instalată.',

	'SELECT_IMAGE'				=> 'Selectează imagine',
	'SELECT_TEMPLATE'			=> 'Selectează fişier şablon',
	'SELECT_THEME'				=> 'Selectează fişier temă',
	'SELECTED_IMAGE'			=> 'Imagine selectată',
	'SELECTED_IMAGESET'			=> 'Set imagini selectat',
	'SELECTED_TEMPLATE'			=> 'Şablon selectat',
	'SELECTED_TEMPLATE_FILE'	=> 'Fişier şablon selectat',
	'SELECTED_THEME'			=> 'Temă selectată',
	'SELECTED_THEME_FILE'		=> 'Fişier temă selectată',
	'STORE_DATABASE'			=> 'Baza de date',
	'STORE_FILESYSTEM'			=> 'Sistem de fişiere',
	'STYLE_ACTIVATE'			=> 'Activează',
	'STYLE_ACTIVE'				=> 'Activ',
	'STYLE_ADDED'				=> 'Stil adăugat cu succes.',
	'STYLE_DEACTIVATE'			=> 'Dezactivează',
	'STYLE_DEFAULT'				=> 'Setează stilul standard',
	'STYLE_DELETED'				=> 'Stil şters cu succes.',
	'STYLE_DETAILS_UPDATED'		=> 'Stil modificat cu succes.',
	'STYLE_ERR_ARCHIVE'			=> 'Vă rugăm să alegeţi o metodă de arhivare.',
	'STYLE_ERR_COPY_LONG'		=> 'Câmpul Drepturi de autor nu poate fi mai lung de 60 caractere.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Trebuie să selectaţi cel puţin un element de stil.',
	'STYLE_ERR_NAME_CHARS'		=> 'Numele stilului poate conţine doar caractere alfanumerice, -, +, _ şi spaţiu.',
	'STYLE_ERR_NAME_EXIST'		=> 'Un stil cu acest nume există deja.',
	'STYLE_ERR_NAME_LONG'		=> 'Numele stilului nu poate fi mai lung de 30 caractere.',
	'STYLE_ERR_NO_IDS'			=> 'Trebuie să selectaţi un şablon, tema şi setul de imagini pentru acest stil.',
	'STYLE_ERR_NOT_STYLE'		=> 'Fişierul importat sau încărcat nu conţine o arhivă validă a stilului.',
	'STYLE_ERR_STYLE_NAME'		=> 'Trebuie să specificaţi un nume pentru acest stil.',
	'STYLE_EXPORT'				=> 'Exportă stil',
	'STYLE_EXPORT_EXPLAIN'		=> 'Aici puteţi exporta un stil sub forma unei arhive. Un stil nu trebuie să conţină toate elementele dar trebuie să aibă cel puţin unul. De exemplu dacă aţi creat o temă nouă şi un set de imagini pentru un şablon folosit în general, aţi putea să doar să exportaţi tema şi setul de imagini omiţând şablonul.  Puteţi opta fie să descărcaţi fişierul direct sau să-l puneţi în directorul de stocare pentru a-l descărca mai târziu prin FTP.',
	'STYLE_EXPORTED'			=> 'Stil exportat cu succes şi stocat în %s.',
	'STYLE_IMAGESET'			=> 'Set de imagini',
	'STYLE_NAME'				=> 'Nume stil',
	'STYLE_TEMPLATE'			=> 'Şablon',
	'STYLE_THEME'				=> 'Temă',
	'STYLE_USED_BY'				=> 'Folosit de (incluzând roboţii)',

	'TEMPLATE_ADDED'			=> 'Set şablon adăugat şi stocat în sistemul de fişiere.',
	'TEMPLATE_ADDED_DB'			=> 'Set şablon adăugat şi stocat în baza de date.',
	'TEMPLATE_CACHE'			=> 'Şablon în cache',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'În mod standard, phpBB păstrează în cache versiunea compilată a şabloanelor sale. Această acţiune reduce încărcarea serverului de fiecare dată când o pagină este vizualizată şi astfel poate reduce timpul de generare a acesteia. Aici puteţi vedea starea cache pentru fiecare fişier şi şterge fişiere individuale sau întregul cache.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Cache-ul curăţat cu succes de şabloane.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Nu sunt şabloane păstrate în cache.',
	'TEMPLATE_DELETED'			=> 'Set şablon şters cu succes.',
	'TEMPLATE_DELETE_DEPENDENT'   => 'Setul şablon nu poate fi şters pentru că există unul sau mai multe seturi de şabloane ce-l moştenesc:',
	'TEMPLATE_DELETED_FS'		=> 'Set şablon eliminat din baza de date dar unele fişiere s-ar putea să rămână în sistemul de fişiere.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Detalii şablon actualizate cu succes.',
	'TEMPLATE_EDITOR'			=> 'Editor şablon HTML neprelucrat',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Înălţime editor şablon',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Selectaţi o metodă de arhivare.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Directorul cache folosit pentru a pastra versiunile cache ale fişierelor şablonului nu poate fi deschis.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Câmpul Drepturi de autor nu poate fi mai lung de 60 caractere.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Numele şablonului poate conţine doar caractere alfanumerice, -, +, _ şi spaţiu.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Un set şablon cu acest nume există deja.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Numele şablonului nu poate fi mai lung de 30 caractere.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Arhiva pe care aţi specificat-o nu conţine un set şablon valid.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Setul nou de şablon necesită ca şablonul %s să fie instalat şi nu moştenit insuşi. ',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Trebuie să specificaţi un nume pentru acest şablon.',
	'TEMPLATE_EXPORT'			=> 'Exportă şabloane',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Aici puteţi exporta un set şablon sub forma unei arhive. Această arhivă va conţine datele necesare pentru a putea instala şabloanele pe alt forum. Puteţi opta fie să descărcaţi fişierul direct sau să-l puneţi în directorul de stocare pentru a-l descărca mai târziu prin FTP.',
	'TEMPLATE_EXPORTED'			=> 'Şabloane exportate cu succes şi stocate în %s.',
	'TEMPLATE_FILE'				=> 'Fişier şablon',
	'TEMPLATE_FILE_UPDATED'		=> 'Fişier şablon actualizat cu succes.',
	'TEMPLATE_INHERITS'         => 'Aceste seturi de şablon moştenesc de la %s şi astfel nu pot avea o locaţie diferită de stocare faţă de şablonul lor părinte.',
	'TEMPLATE_LOCATION'			=> 'Păstrează şabloane în',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Imaginile sunt întotdeauna stocate în sistemul de fişiere.',
	'TEMPLATE_NAME'				=> 'Nume şablon',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Fişierul şablonului %s nu a putut fi scris. Verificaţi permisiunile de pe director şi fişier.',
	'TEMPLATE_REFRESHED'		=> 'Şablon reîmprospătat cu succes.',

	'THEME_ADDED'				=> 'Temă nouă adăugată în sistemul de fişiere.',
	'THEME_ADDED_DB'			=> 'Temă nouă adăugată în baza de date.',
	'THEME_CLASS_ADDED'			=> 'Clasă particularizată adăugată cu succes.',
	'THEME_DELETED'				=> 'Tema a fost ştearsă cu succes.',
	'THEME_DELETED_FS'			=> 'Tema a fost eliminată din baza de date dar fişierele au rămas în sistemul de fişiere.',
	'THEME_DETAILS_UPDATED'		=> 'Detalii temă actualizate cu succes.',
	'THEME_EDITOR'				=> 'Editor temă',
	'THEME_EDITOR_HEIGHT'		=> 'Înălţime editor temă',
	'THEME_ERR_ARCHIVE'			=> 'Specificaţi o metodă de arhivare.',
	'THEME_ERR_CLASS_CHARS'		=> 'Numai caractere alfanumerice plus ., :, -, _ şi # sunt valide în numele clasei.',
	'THEME_ERR_COPY_LONG'		=> 'Câmpul Drepturi de autor nu poate fi mai lung de 60 de caractere.',
	'THEME_ERR_NAME_CHARS'		=> 'Numele temei poate conţine doar caractere alfanumerice, -, +, _ şi spaţiu.',
	'THEME_ERR_NAME_EXIST'		=> 'O temă cu acest nume există deja.',
	'THEME_ERR_NAME_LONG'		=> 'Numele temei nu poate fi mai lung de 30 caractere.',
	'THEME_ERR_NOT_THEME'		=> 'Arhiva specificată nu conţine o temă validă.',
	'THEME_ERR_REFRESH_FS'		=> 'Această temă este stocată în sistemul de fişiere aşa că nu este nevoie să o reîmprospătaţi.',
	'THEME_ERR_STYLE_NAME'		=> 'Trebuie să precizaţi un nume pentru această temă.',
	'THEME_FILE'				=> 'Fişier temă',
	'THEME_EXPORT'				=> 'Exportă temă',
	'THEME_EXPORT_EXPLAIN'		=> 'Aici puteţi exporta o temă sub forma unei arhive. Această arhivă va conţine datele necesare pentru a putea instala tema pe alt forum. Puteţi opta fie să descărcaţi fişierul direct sau să-l puneţi în directorul de stocare pentru a-l descărca mai târziu prin FTP.',
	'THEME_EXPORTED'			=> 'Temă exportată cu succes şi înregistrată în %s.',
	'THEME_LOCATION'			=> 'Stochează stil în',
	'THEME_LOCATION_EXPLAIN'	=> 'Imaginile sunt întotdeauna stocate în sistemul de fişiere.',
	'THEME_NAME'				=> 'Nume temă',
	'THEME_REFRESHED'			=> 'Temă reîmprospătată cu succes.',
	'THEME_UPDATED'				=> 'Temă actualizată cu succes.',

	'UNDERLINE'				=> 'Subliniat',
	'UNINSTALLED_IMAGESET'	=> 'Seturi imagine dezinstalate',
	'UNINSTALLED_STYLE'		=> 'Stiluri dezinstalate',
	'UNINSTALLED_TEMPLATE'	=> 'Şabloane dezinstalate',
	'UNINSTALLED_THEME'		=> 'Teme dezinstalate',
	'UNSET'					=> 'Nedefinit',

));

?>