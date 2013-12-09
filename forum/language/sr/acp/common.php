<?php
/** 
*
* acp common [Serbian]
*
* @package language
* @version $Id: common.php,v 1.70 2006/11/27 11:37:42 dhn2 Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
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
	'ACP_ADMINISTRATORS'		=> 'Administratori',
	'ACP_ADMIN_LOGS'			=> 'Admin log',
	'ACP_ADMIN_ROLES'			=> 'Admin pravila',
	'ACP_ATTACHMENTS'			=> 'Prikačeni fajlovi',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Podešavanja prikačenih fajlova',
	'ACP_AUTH_SETTINGS'			=> 'Autorizacija',
	'ACP_AUTOMATION'			=> 'Automatizacija',
	'ACP_AVATAR_SETTINGS'		=> 'Podešavanja avatara',

	'ACP_BACKUP'				=> 'Bekap',
	'ACP_BAN'					=> 'Ban',
	'ACP_BAN_EMAILS'			=> 'Ban emailova',
	'ACP_BAN_IPS'				=> 'Ban IP adresa',
	'ACP_BAN_USERNAMES'			=> 'Ban korisnika',
	'ACP_BASIC_PERMISSIONS'		=> 'Osnovne dozvole',
	'ACP_BBCODES'				=> 'BBKod',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfiguracija boarda',
	'ACP_BOARD_DEFAULTS'		=> 'Podrazumevane vrednosti boarda',
	'ACP_BOARD_FEATURES'		=> 'Opcije boarda',
	'ACP_BOARD_MANAGEMENT'		=> 'Menadžment boarda',
	'ACP_BOARD_SETTINGS'		=> 'Podešavanja boarda',
	'ACP_BOTS'					=> 'Spajderi/Roboti',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Baza podataka',
	'ACP_CAT_DOT_MODS'			=> 'Modovi',
	'ACP_CAT_FORUMS'			=> 'Forumi',
	'ACP_CAT_GENERAL'			=> 'Generalno',
	'ACP_CAT_MAINTENANCE'		=> 'Održavanje',
	'ACP_CAT_PERMISSIONS'		=> 'Dozvole',
	'ACP_CAT_POSTING'			=> 'Postovi',
	'ACP_CAT_STYLES'			=> 'Stilovi',
	'ACP_CAT_SYSTEM'			=> 'Sistem',
	'ACP_CAT_USERGROUP'			=> 'Korisnici i grupe',
	'ACP_CAT_USERS'				=> 'Korisnici',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komulikacija sa klijentima',
	'ACP_COOKIE_SETTINGS'		=> 'Podešavanja kolačića',
	'ACP_CRITICAL_LOGS'			=> 'Log grešaka',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Proizvoljna polja profila',
	
	'ACP_DATABASE'				=> 'Menadžment baze',
	'ACP_DISALLOW'				=> 'Zabrane',
	'ACP_DISALLOW_USERNAMES'	=> 'Zabranjeni korisnici',
	
	'ACP_EMAIL_SETTINGS'		=> 'Email podešavanja',
	'ACP_EXTENSION_GROUPS'		=> 'Rad sa proširenim grupama',
	
	'ACP_FEED'             =>  'Feed opcije',
  'ACP_FEED_SETTINGS'   =>  'Feed podešavanja',
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Dozvole foruma',
	'ACP_FORUM_LOGS'				=> 'Logovi foruma',
	'ACP_FORUM_MANAGEMENT'			=> 'Menadžment foruma',
	'ACP_FORUM_MODERATORS'			=> 'Moderatori foruma',
	'ACP_FORUM_PERMISSIONS'			=> 'Dozvole foruma',
	'ACP_FORUM_PERMISSIONS_COPY' =>  'Kopiraj dozvole foruma',
	'ACP_FORUM_ROLES'				=> 'Pravila foruma',

	'ACP_GENERAL_CONFIGURATION'		=> 'Generalna konfiguracija',
	'ACP_GENERAL_TASKS'				=> 'Generalni poslovi',
	'ACP_GLOBAL_MODERATORS'			=> 'Globalni moderatori',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globalne dozvole',
	'ACP_GROUPS'					=> 'Grupe',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Dozvole foruma za grupe',
	'ACP_GROUPS_MANAGE'				=> 'Rad sa grupama',
	'ACP_GROUPS_MANAGEMENT'			=> 'Menadžment grupa',
	'ACP_GROUPS_PERMISSIONS'		=> 'Grupne dozvole',
	
	'ACP_ICONS'					=> 'Ikonice tema',
	'ACP_ICONS_SMILIES'			=> 'Ikonice/smajliji tema',
	'ACP_IMAGESETS'				=> 'Setovi slika',
	'ACP_INACTIVE_USERS'		=> 'Neaktivni korisnici',
	'ACP_INDEX'					=> 'Admin index',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber podešavanja',
	
	'ACP_LANGUAGE'				=> 'Menadžment jezika',
	'ACP_LANGUAGE_PACKS'		=> 'Jezički paketi',
	'ACP_LOAD_SETTINGS'			=> 'Učitaj podešavanja',
	'ACP_LOGGING'				=> 'Logovanja',
	
	'ACP_MAIN'					=> 'Admin index',
	'ACP_MANAGE_EXTENSIONS'		=> 'Rad sa ekstenzijama',
	'ACP_MANAGE_FORUMS'			=> 'Rad sa forumima',
	'ACP_MANAGE_RANKS'			=> 'Činovi',
	'ACP_MANAGE_REASONS'		=> 'Rad sa prijavljenim/odbijenim razlozima',
	'ACP_MANAGE_USERS'			=> 'Rad sa korisnicima',
	'ACP_MASS_EMAIL'			=> 'Masovni email',
	'ACP_MESSAGES'				=> 'Poruke',
	'ACP_MESSAGE_SETTINGS'		=> 'Podešavanja pirvatnih poruka',
	'ACP_MODULE_MANAGEMENT'		=> 'Rad sa modulima',
	'ACP_MOD_LOGS'				=> 'Moderator log',
	'ACP_MOD_ROLES'				=> 'Moderator pravila',
	
	'ACP_NO_ITEMS'				=> 'Još uvek nema stavki.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Zaostali prikačeni fajlovi',
	
	'ACP_PERMISSIONS'			=> 'Dozvole',
	'ACP_PERMISSION_MASKS'		=> 'Maske dozvola',
	'ACP_PERMISSION_ROLES'		=> 'Pravila dozvola',
	'ACP_PERMISSION_SETTINGS'	=> 'Podešavanja dozvola',
	'ACP_PERMISSION_TRACE'		=> 'Praćenje dozvola',
	'ACP_PHP_INFO'				=> 'PHP informacija',
	'ACP_POST_SETTINGS'			=> 'Podešavanja postova',
	'ACP_PRUNE_FORUMS'			=> 'Brisanje foruma',
	'ACP_PRUNE_USERS'			=> 'Brisanje korisnika',
	'ACP_PRUNING'				=> 'Brisanje',
	
	'ACP_QUICK_ACCESS'			=> 'Brz pristup',
	
	'ACP_RANKS'					=> 'Činovi',
	'ACP_REASONS'				=> 'Razlozi prijavljeni/odbijeni',
	'ACP_REGISTER_SETTINGS'		=> 'Podešavanja registracije korisnika',

	'ACP_RESTORE'				=> 'Povratak',

	'ACP_SEARCH'				=> 'Rad sa pretraživanjem',
	'ACP_SEARCH_INDEX'			=> 'Indeksiranje pretrage',
	'ACP_SEARCH_SETTINGS'		=> 'Podešavanje pretrage',
	'ACP_SEND_STATISTICS'   => 'Pošalji statističke informacije',

	'ACP_SECURITY_SETTINGS'		=> 'Podešavanja bezbednosti',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfiguracija servera',
	'ACP_SERVER_SETTINGS'		=> 'Podešavanja servera',
	'ACP_SIGNATURE_SETTINGS'	=> 'Podešavanja potpisa',
	'ACP_SMILIES'				=> 'Smajliji',
	'ACP_SPECIAL_PERMISSIONS'	=> 'Specijalne dozvole',
	'ACP_STYLE_COMPONENTS'		=> 'Komponente stilova',
	'ACP_STYLE_MANAGEMENT'		=> 'Rad sa stilovima',
	'ACP_STYLES'				=> 'Stilovi',
	'ACP_SUBMIT_CHANGES' =>  'Potvrdi izmene',
	
	'ACP_TEMPLATES'				=> 'Šabloni',
	'ACP_THEMES'				=> 'Teme',
	
	'ACP_UPDATE'					=> 'Ažuriranje',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Users forum permissions',
	'ACP_USERS_LOGS'				=> 'Logovi korisnika',
	'ACP_USERS_PERMISSIONS'			=> 'Dozvole korisnika',
	'ACP_USER_ATTACH'				=> 'Prikačeni fajlovi',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Podrška',
	'ACP_USER_GROUPS'				=> 'Grupe',
	'ACP_USER_MANAGEMENT'			=> 'Rad sa korisnicima',
	'ACP_USER_OVERVIEW'				=> 'Pregled',
	'ACP_USER_PERM'					=> 'Dozvole',
	'ACP_USER_PREFS'				=> 'Podešavanja',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Čin',
	'ACP_USER_ROLES'				=> 'Pravila korisnika',
	'ACP_USER_SECURITY'				=> 'Bezbednost korisnika',
	'ACP_USER_SIG'					=> 'Potpis',
	'ACP_USER_WARNINGS'    =>  'Upozorenja',

	'ACP_VC_SETTINGS'					=> 'Podešavanja vizuelnih potvrda',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA pregled slike',
	'ACP_VERSION_CHECK'					=> 'Proveri da li ima nadogradnje',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Pregled administrativnih dozvola',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Pregled dozvola za uređivanje foruma',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Pregled forum baziranih dozvola',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Pregled globalnih dozvola za uređivanje',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Pregled korisnik baziranih foruma',
	
	'ACP_WORDS'					=> 'Cenzurisanje reči',

	'ACTION'				=> 'Akcija',
	'ACTIONS'				=> 'Akcije',
	'ACTIVATE'				=> 'Aktiviraj',
	'ADD'					=> 'Dodaj',
	'ADMIN'					=> 'Administracija',
	'ADMIN_INDEX'			=> 'Admin index',
	'ADMIN_PANEL'			=> 'Administracioni Kontrolni Panel',
	
	'ADM_LOGOUT'			=> 'AKP odjava',
	'ADM_LOGGED_OUT'		=> 'Uspešno ste se odjavili sa Administracionog Kontrolnog Panela',

	'BACK'					=> 'Nazad',

	'COLOUR_SWATCH'			=> 'Web-bezbedna paleta boja',
	'CONFIG_UPDATED'		=> 'Konfiguracija je uspešno ažurirana.',
	'CONFIRM_OPERATION'		=> 'Da li ste sigurni da želite da nastavite sa operacijom?',

	'DEACTIVATE'				=> 'Deaktiviraj',
	'DIMENSIONS'				=> 'Dimenzije',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Putanja "%s" ne postoji.',
	'DIRECTORY_NOT_DIR'			=> 'Putanja "%s" nije direktorijum.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Putanja "%s" nema dozvolu za upisivanje.',
	'DISABLE'					=> 'Onemogući',
	'DONT_SEND_STATISTICS' =>  'Povratak na AKP ukoliko ne želite da pošaljete statističke informacije phpBB-u.',
	'DOWNLOAD'					=> 'Preuzmi',
	'DOWNLOAD_AS'				=> 'Preuzmi kao',
	'DOWNLOAD_STORE'			=> 'Preuzmi ili sačuvaj fajl',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Možete direktno preuzeti fajl ili ga sačuvati u vašem <samp>store/</samp> folderu.',

	'EDIT'					=> 'Izmeni',
	'ENABLE'				=> 'Omogući',
	'ERROR_MBSTRING_FUNC_OVERLOAD'			=> 'Funkcija overloading je neispravno podešeno',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'	=> '<var>mbstring.func_overload</var> mora biti ili 0 ili 4. Trenutnu vrednost možete proveriti na <samp>PHP informacije</samp> stranici.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'	=> 'Transparent character encoding je neispravno podešeno',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> mora biti podešeno na 0. Trenutnu vrednost možete proveriti na <samp>PHP informacije</samp> stranici.',
	'ERROR_MBSTRING_HTTP_INPUT'	=> 'HTTP input character conversion je neispravno podešeno',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'	=> '<var>mbstring.http_input</var> mora biti podešeno na <samp>pass</samp>. Trenutnu vrednost možete proveriti na <samp>PHP informacije</samp> stranici.',
	'ERROR_MBSTRING_HTTP_OUTPUT'	=> 'output character conversion je neispravno podešeno',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'	=> '<var>mbstring.http_output</var> mora biti podešeno na <samp>pass</samp>. Trenutnu vrednost možete proveriti na <samp>PHP informacije</samp> stranici.',
	'EXPORT_DOWNLOAD'		=> 'Preuzmi',
	'EXPORT_STORE'			=> 'Sačuvaj',
	'EXPLAIN_SEND_STATISTICS'  	=>  'Molimo Vas da pošaljete informacije o serveru i konfiguraciji boarda phpBB-u za statističku analizu. Sve informacije koje mogu da otkriju Vaš board ili Vas su uklonjene - podaci su potpuno <strong>anonimni</strong>. Donosimo odluke o budućim verzijama phpBB-a na osnovu ovih informacija. Statistika je javno dostupna. Takođe ove podatke delimo sa PHP projektom, jezikom u kome je phpBB napisan.',
	'EXPLAIN_SHOW_STATISTICS'   =>  'Koristeći dugme ispod možete pogledati sve podatke koji će biti poslati.',

	'FORUM_INDEX'			=> 'Forum index',

	'GENERAL_OPTIONS'		=> 'Generalne opcije',
	'GENERAL_SETTINGS'		=> 'Generalna podešavanja',
	'GLOBAL_MASK'			=> 'Globalna maska za dozvole',
	'GO_ACP_MAIN'    =>  'Idi na AKP početnu stranicu',
	
	'HIDE_STATISTICS'  =>  'Sakrij detalje',

	'INSTALL'				=> 'Instaliraj',
	'IP'					=> 'Korisnička IP adresa',
	'IP_HOSTNAME'			=> 'IP adrese ili hostovi',

	'LOGGED_IN_AS'			=> 'Prijavljeni ste kao:',
	'LOGIN_ADMIN'			=> 'Da bi mogli da administrirate board morate biti authorizovani korisnik.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Da bi mogli da administrirate board morate se ponovo autorizovati.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Uspešno ste se autorizovali i bićete preusmereni na Administracioni Kontrolni Panel',
	'LOOK_UP_FORUM'			=> 'Izaberite forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Možete izabrati više od jednog foruma.',

	'MANAGE'				=> 'Uredi',
	'MENU_TOGGLE'			=> 'Sakrij ili prikaži bočni meni',
	'MOVE_DOWN'				=> 'Pomeri dole',
	'MOVE_UP'				=> 'Pomeri gore',
	'MORE'         =>  'Još',
  'MORE_INFORMATION'  =>  'Još informacija »',

	'NOTIFY'				=> 'Obaveštenje',
	'NO_ADMIN'				=> 'Niste autorizovani da administrirate ovaj board.',
	'NO_EMAILS_DEFINED'		=> 'Nije pronađena ispravna email adresa',
	'NO_PASSWORD_SUPPLIED'	=> 'Morate uneti vašu šifru da bi mogli da pristupite Administrativnom Kontrolnom Panelu.',	

	'OFF'					=> 'Isključeno',
	'ON'					=> 'Uključeno',

	'PARSE_BBCODE'						=> 'Prosledi BBKod',
	'PARSE_SMILIES'						=> 'Prosledi smajlije',
	'PARSE_URLS'						=> 'Prosledi linkove',
	'PERMISSIONS_TRANSFERRED'			=> 'Dozvole prebačene',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Trenutno imate dozvolu od %1$s. Možete da pregledate forum sa korisničkim dozvolama ali ne možete pristupiti administrativnom kontrolnom panelu jer dozvole admina nisu prebačene. Možete <a href="%2$s"><strong>se vratiti na vaš set dozvola</strong></a> bilo kada.',
	'PHP_VERSION_OLD'    =>  'Verzija PHP-a na ovom serveru neće biti podržana u budućim verzijama phpBB-a. %sDetails%s',
	'PIXEL'							=> 'px',	
	'PROCEED_TO_ACP'					=> '%sProduži na AKP%s',

	'REMIND'							=> 'Podseti',
	'REORDER'							=> 'Preuredi',
	'RESYNC'							=> 'Ponovo sinhronizuj',
	'RETURN_TO'							=> 'Povratak na…',

	'SELECT_ANONYMOUS'		=> 'Izaberi Anonimnog Korisnika',
	'SELECT_OPTION'			=> 'Izaberi opciju',
	'SEND_STATISTICS'  =>  'Pošali statističke informacije',
	'SETTING_TOO_LOW'		=> 'Uneta vrednost za “%1$s” je premala. Minimalna vrednost je %2$d.',
	'SETTING_TOO_BIG'		=> 'Uneta vrednost za “%1$s” je prevelika. Maksimalna vrednost je %2$d.',
	'SETTING_TOO_LONG'		=> 'Uneta vrednost za “%1$s” je predugačka. Maksimalna dužina je %2$d.',
	'SETTING_TOO_SHORT'		=> 'Uneta vrednost za “%1$s” je prekratka. Minimalna dužina je %2$d.',
	'SHOW_ALL_OPERATIONS'  =>  'Prikaži sve operacije',
	'SHOW_STATISTICS'    =>  'Prikaži detalje',
	
	'THANKS_SEND_STATISTICS'   =>  'Hvala Vam za poslate informacije.',

	'UCP'					=> 'Korisnički Kontrolni Panel',
	'USERNAMES_EXPLAIN'		=> 'Unesite svako korisničko ime u novu liniju',
	'USER_CONTROL_PANEL'	=> 'Korisnički Kontrolni Panel',

	'WARNING'				=> 'Upozorenje',
	'WRITABLE_CONFIG'		=> 'Vaš konfiguracioni fajl (config.php) je trenutno dozvoljen za upisivanje. Strogo Vam preporučujemo da promenite dozvolu fajla na 640 ili na bar 644 (na primer: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ova stranica prikazuje informaciju o verziji PHP-a instaliranu na serveru. Uključuje detalje o učitanim modulima, dostupnim promenljivama i podrazumevanim podešavanjima. Ova informacija može biti korisna pri dijagnostici problema. Znajte da že neke hosting kompanije ograničiti količinu informacija koje će biti prikazane zbog sigurnosnih razloga. Preporučujeo vam da ne dajete nikakve detaljne informacije sa ove stranice osim kada su zatražene od članova podrške ili drugih članova tima podrške a forumima.',
	
	'NO_PHPINFO_AVAILABLE'	=> 'Ne mogu da utvrdim PHP informacije. Phpinfo() je isključen iz sigurnosnih rzloga.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ovo je lista svih akcija administratora boarda. Možete je sortirati po korisničkom imenu, datumu, IP adresi ili akciji. Ako imate odgovarajuće dozvole možete takođe obrisati individualne operacije ili log u celini.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ovo je lista akcija samog boarda. Ovo logovi prikazuju informacije koje možete koristiti za rešavanje specifičnih problema, na primer ukoliko email nije prosleđen. Možete sortirati po korisničkom imenu, datumu IP adresi ili akciji. Ako imate odgovarajuće dozvole možete takođe obrisati individualne operacije ili log u celini.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ovo je lista akcija moderatora boardat, izaberite forum iz padajuće liste. Možete sortirati po korisničkom imenu, datumu IP adresi ili akciji. Ako imate odgovarajuće dozvole možete takođe obrisati individualne operacije ili log u celini.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ovo je lista svih akcija korisnika ili nad korisnicima.',
	'ALL_ENTRIES'				=> 'Svi zapisi',

	'DISPLAY_LOG'	=> 'Prikaži zapise od prethodnih',

	'NO_ENTRIES'	=> 'Nema zapisa za ovaj period',

	'SORT_IP'		=> 'IP adresa',
	'SORT_DATE'		=> 'Datum',
	'SORT_ACTION'	=> 'Log akcija',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Hvala što ste izabrali phpBB. Ovde imate brz pregled raznih statistika vašeg boarda. Linkovi sa leve strane vam ovogućuju da kontrolišete svaki aspekt foruma. Na svakoj stranici nalaze se uputstva kako da korisite te opcije.',
	'ADMIN_LOG'					=> 'Logovane administratorove akcije',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Ovde imate pregled poslednjih pet akcija administratora boarda. Potpunu kopiji loga možete pogledati putem odgovarajućeg menija ili klikom na link ispod.',
	'AVATAR_DIR_SIZE'			=> 'Veličina direktorijuma avatara',

	'BOARD_STARTED'		=> 'Board počeo sa radom',
	'BOARD_VERSION'		=> 'Verzija boarda',

	'DATABASE_SERVER_INFO'	=> 'Server baze',
	'DATABASE_SIZE'			=> 'Veličina baze',

	'FILES_PER_DAY'		=> 'Prikačenih fajlova dnevno',
	'FORUM_STATS'		=> 'Statistika foruma',

	'GZIP_COMPRESSION'	=> 'GZip kompresija',

	'NOT_AVAILABLE'		=> 'Nije dostupna',
	'NUMBER_FILES'		=> 'Broj prikačenih fajlova',
	'NUMBER_POSTS'		=> 'Broj postova',
	'NUMBER_TOPICS'		=> 'Broj tema',
	'NUMBER_USERS'		=> 'Broj korisnika',
	'NUMBER_ORPHAN'		=> 'Zaostali prikačeni fajlovi',

	'POSTS_PER_DAY'		=> 'Postova dnevno',

	'PURGE_CACHE'			=> 'Obriši keš',
	'PURGE_CACHE_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete keš?',
	'PURGE_CACHE_EXPLAIN'	=> 'Brisanje svih keširanih stavki, uključujući i sve keširane fajlove šablona ili upite.',
	'PURGE_SESSIONS'     =>  'Obriši sve sesije',
  'PURGE_SESSIONS_CONFIRM'  =>  'Da li ste sigurni da želite sve sesije? Ovim ćete odjaviti sve korisnike.',
  'PURGE_SESSIONS_EXPLAIN'  =>  'Briše sve sesije. Ovim ćete odjaviti sve korisnike brisanjem session tabele.',
	
	'RESET_DATE'			=> 'Resetuj datum',
	'RESET_DATE_CONFIRM'			=> 'Da li ste sigurni da želite da resetujete datum početka boarda?',
	'RESET_ONLINE'			=> 'Resetuj online',
	'RESET_ONLINE_CONFIRM'			=> 'Da li ste sigurni da želite da resetujete brojač kada je bilo najviše korisnika OnLine?',
	'RESYNC_POSTCOUNTS'		=> 'Resihronizuj brojače postova',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Samo će postojeći postovi biti uzeti u obzir. Sažeti postovi se neće brojati.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Da li ste sigurni da želite da resinhronizujete brojaće postova?',
	'RESYNC_POST_MARKING'	=> 'Resihronizuj tačkaste teme',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Da li ste sigurni da želite da resinhronizujete tačkaste teme?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Prvo uklonite obeleživač sa svih tema i onda tačno obeležite teme koje imaju bilo kakvu aktivnost u poslednjih šest meseci.',
	'RESYNC_STATS'			=> 'Resihronizuj statistiku',
	'RESYNC_STATS_CONFIRM'			=> 'Da li ste sigurni da želite da resinhronizujete statistiku?',
	'RESYNC_STATS_EXPLAIN'			=> 'Preračunava ukupan broj postova, tema, korisnika i fajlova.',
	'RUN'							=> 'Pokreni sada',

	'STATISTIC'			=> 'Statistika',
	'STATISTIC_RESYNC_OPTIONS'	  => 'Opcije resinhronizovanja statistike',

	'TOPICS_PER_DAY'	=> 'Tema dnevno',

	'UPLOAD_DIR_SIZE'	=> 'Veličina postovanih prikačenih fajlova',
	'USERS_PER_DAY'		=> 'Korisnika dnevno',

	'VALUE'					=> 'Vrednost',
	'VERSIONCHECK_FAIL'      =>  'Ne mogu da proverim informaciju o poslednjoj verziji.',
  'VERSIONCHECK_FORCE_UPDATE' =>  'Proveri ponovo',
	'VIEW_ADMIN_LOG'		=> 'Pogledaj log administratora',
	'VIEW_INACTIVE_USERS'	=> 'Pogledaj neaktivne korisnike',

	'WELCOME_PHPBB'			=> 'Dobrodošli na phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Datum neaktivnosti',
	'INACTIVE_REASON'				=> 'Razlog',
	'INACTIVE_REASON_MANUAL'		=> 'Nalog je deaktivirao administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Detalji o profilu su izmenjeni',
	'INACTIVE_REASON_REGISTER'		=> 'Novi registrovani nalog',
	'INACTIVE_REASON_REMIND'		=> 'Forsirana reaktivacija korisnika',
	'INACTIVE_REASON_UNKNOWN'		=> 'Nepoznat',
	'INACTIVE_USERS'				=> 'Neaktivni korisnici',
	'INACTIVE_USERS_EXPLAIN'		=> 'Ovo je lista korisnika koji su se registrovali ali čiji su nalozi neaktivni. Možete aktivirati, brisati ili podsetiti (slanjem email-a) ove korisnike ukoliko želite.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Ovo je lista poslednjih 10 registrovanih korisnika koji imaju neaktivne naloge. Kompletnoj listi možete pristupiti putem odgovarajućeg menija ili klikom na link ispod odakle možete da aktivirate, brišete ili podsetite (slanjem email-a) ove korisnike ukoliko želite.',

	'NO_INACTIVE_USERS'	=> 'Nema neaktivnih korisnika',

	'SORT_INACTIVE'		=> 'Datum neaktinosti',
	'SORT_LAST_VISIT'	=> 'Poslednjoj poseti',
	'SORT_LAST_REMINDER' =>  'Poslednji put opomenut',
	'SORT_REASON'		=> 'Razlogu',
	'SORT_REG_DATE'		=> 'Datumu registracije',
	'SORT_REMINDER'  =>  'Poslatoj opomeni',

	'USER_IS_INACTIVE'		=> 'Korisnik je neaktivan',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Dodate ili izmenjene korisničke dozvole korisnika</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Dodate ili izmenjene grupe korisničkih dozvola</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Dodate ili izmenjene korisničke globalne dozvole moderatora</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Dodate ili izmenjene grupe globalnih dozvola moderatora</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Dodate ili izmenjene korisničke admin dozvole</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Dodate ili izmenjene grupe admin dozvola</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Dodati ili izmenjeni Administratori</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Dodati ili izmenjeni globalni moderatori</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Dodate ili izmenjene dozvole foruma korisnicima</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Dodat ili izmenjen pristup moderatoru forumu korisnika</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Dodat ili izmenjen pristup grupi foruma</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Dodat ili izmenjen pristup moderatoru grupi foruma</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Dodati ili izmenjeni moderatori</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Dodate ili izmenjene dozvole foruma</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Uklonjeni Administratori</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Uklonjeni globalni moderatori</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Uklonjeni moderatori</strong> iz %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Uklonjene dozvole korisnika/grupe</strong> iz %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Dozvole prebačene iz</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Sopstvene dozvole povraćene posle upotrebe dozvola iz</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Neuspešan pokušaj prijave administratora</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Uspešna prijava administratora</strong>',
	
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Uklonjeni prikačeni fajlovi korisnika</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Dodata ili izmenjena ekstenzija prikačenog fajla</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Uklonjena ekstenzija prikačenog fajla</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Ažurirana ekstenzija prikačenog fajla</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Dodata grupa ekstenzija</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Izmenjena grupa ekstenzija</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Uklonjena grupa ekstenzija</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Zaostali fajl poslat u post</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Zaostali fajlovi obrisani</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Izostavljen korisnik iz zabrane</strong> - razlog "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Izostavljena IP adresa iz zabrane</strong> -razlog "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Izostavljen email iz zabrane</strong> -razlog "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Banovan korisnik</strong> -razlog "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Banovan IP</strong> -razlog "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Banovan email</strong> -razlog "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Uklonjena zabrana za korisnika</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Uklonjena zabrana za IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Uklonjena zabrana za email</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Dodat nov BBKod</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Izmenjen BBKod</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Obrisan BBKod</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Dodat novi bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Obrisan bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Postojeći bot izmenjen</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Obrisan admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Obrisan log grešaka</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Obrisan log moderatora</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Obrisan log korisnika</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Obrisani logovi korisnika</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Izmenjena podešavanja prikačenih fajlova</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Izmenjena podešavanja autorizacije</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Izmenjena podešavanja avatara</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Izmenjena podešavanja kolačića</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Izmenjena podešavanja email-a</strong>',
	'LOG_CONFIG_FEED'      =>  '<strong>Izmenjena podešavanja feed-ova</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Izmenjene opcije boarda</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Učitana podešavanja</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Izmenjena podešavanja privatnih poruka</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Izmenjena podešavanja postova</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Izmenjena podešavanja registracije korisnika</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Izmenjena podešavanja pretrage</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Izmenjena podešavanja sigurnosti</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Izmenjena podešavanja servera</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Izmenjena podešavanja boarda</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Izmenjena podešavanja potpisa</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Izmenjena podešavanja vizuelne potvrde</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Odobrena tema</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Korisnik izbisao temu</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Obrisan post</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Obrisana tema</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Kopirana tema</strong><br />» iz %s',
	'LOG_FORUM_COPIED_PERMISSIONS' =>  '<strong>Kopirane dozvole foruma</strong> od %1$s<br />» %2$s',
	'LOG_GENERAL_ERROR' => '<strong>Došlo je do generalne greške</strong>: %1$s <br />» %2$s',
	'LOG_LOCK'					=> '<strong>Zaključana tema</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Zaključan post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Spojen post</strong> u temu<br />» %s',
	'LOG_MOVE'					=> '<strong>Pomerena tema</strong><br />» iz %s',
	'LOG_PM_REPORT_CLOSED' =>  '<strong>Zatvoren PP izveštaj</strong><br />» %s',
  'LOG_PM_REPORT_DELETED' =>  '<strong>Obrisan PP izveštaj</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Odobren post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Neodobren post "%1$s" sa sledećim razlogom</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Izmenjen post "%1$s" od</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Zatvorena prijava</strong><br />» %s',
	'LOG_REPORT_DELETED'			=> '<strong>Obrisana prijava</strong><br />» %s',
	'LOG_TOPIC_DELETED'			=> '<strong>Obrisana tema</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Pomereni podeljeni postovi</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Podeli postove</strong><br />» od %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Obrisana tema</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Odobrena tema</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Neodobrena tema "1$s" sa sledećim razlogom</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resinhronizovani brojači tema</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Izmenjen tip teme</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Otključana tema</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Otključan post</strong><br />» %s',
	'LOG_USERS_PENDING'  =>  '<strong>Korisnici zahtevali da se priključe grupi “%1$s” i potrebno je odobrenje</strong><br />» %2$s',

	'LOG_DISALLOW_ADD'			=> '<strong>Dodato zabranjeno korisničko ime</strong><br />» %s',
	'LOG_DISALLOW_DELETE'		=> '<strong>Obrisano zabranjeno korisničko ime</strong>',

	'LOG_DB_BACKUP'				=> '<strong>Bekap baze</strong>',
	'LOG_DB_DELETE'				=> '<strong>Obrisan bekap baze</strong>',
	'LOG_DB_RESTORE'			=> '<strong>Oporavak baze</strong>',
	
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Obrisana označena tema</strong><br />» %s',
	'LOG_REFERER_INVALID'		=> '<strong>Provera pošaljioca neuspešna</strong><br />»Pošaljioc je “<em>%1$s</em>”. Zahtev je odbijen i sesija je uništena.',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Izostavljen IP/host iz download liste</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Dodat IP/host u download listu</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Uklonjen IP/host iz download liste</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber greška</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email greška</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Napravljen nov forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Obrisan forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Obrisan forum i njegovi podforumi</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Obrisan forum i pomereni podforumi</strong> u %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Obrisan forum i pomereni postovi </strong> u %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Obrisan forum i njegovi podforumi, pomerene poruke</strong> u %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Obrisan forum, pomereni postovi</strong> u %1$s <strong>i podforumi</strong> u %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Obrisan forum i njegove poruke</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Obrisan forum, njegove poruke i podforumi</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Obrisan forum i njegove poruke, pomereni podforumi</strong> u %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Izmenjeni detalji foruma</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Pomeren forum</strong> %1$s <strong>ispod</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Pomeren forum</strong> %1$s <strong>iznad</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resinhronizovan forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Kreirana nova korisnička grupa</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupa je postavljena kao podrazumevana za članove</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Obrisana korisnička grupa</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Lideri ukinuti u grupi korisnika</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Članovi unapređeni u lidere u grupi korisnika</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Članovi uklonjeni iz korisničke grupe</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Izmenjeni detalji korisničke grupe</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Dodati novi lideri u korisničku grupu</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Odobreni korisnici u korisničkoj grupi</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Dodati novi članovi u korisničku grupu</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Dodat novi set slika u bazu</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Dodat novi set slika na fajl sistem</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Obrisan set slika</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Izmenjeni detalji seta slika</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Izmenjen set slika</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Izvežen set slika</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Promašeni setovi slika "%2$s" lokalizacije</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Osvežena "%2$s" lokalizacija seta slika</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Osvežen set slika</strong><br />» %s',
	'LOG_IMAGE_GENERATION_ERROR' =>  '<strong>Greška pri kreiranju slike</strong><br />» Greška u %1$s u liniji %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivirani neaktivni korisnici</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Obrisani neaktivni korisnici</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Poslat email podsetnik neaktivnim korisnicima</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konvertovano iz %1$s u phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instaliran phpBB %s</strong>',

	'LOG_IP_BROWSER_CHECK'	=> '<strong>Provera sesije IP/browser-a neuspešna</strong><br />»Korisnička IP "<em>%1$s</em>" upoređena sa sesijom IP "<em>%2$s</em>" i korisnički browser "<em>%3$s</em>" upoređen sa sesijom browsera "<em>%4$s</em>".',
	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sesija IP/browser-a/X_FORWARDED_FOR neuspešna</strong><br />»Korisnička IP “<em>%1$s</em>” upoređena sa sesijom IP “<em>%2$s</em>”, korisnički browser “<em>%3$s</em>” upoređen sa sesijom browsera “<em>%4$s</em>” i korinikov X_FORWARDED_FOR string “<em>%5$s</em>” upoređen sa X_FORWARDED_FOR stringom sesije “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber nalog izmenjen</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber šifra izmenjena</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber nalog registrovan</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber podešavanja izmenjena</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Obrisan jezički paket</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Instaliran jezički paket</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Ažurirani detalji jezičkog paketa</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Zamenjen jezički fajl</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Poslat jezički fajl i smešten u store direktorijum</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Poslat masovni email</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Izmenjen autor posta u temi "%1$s"</strong><br />» iz %2$s u %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul isključen</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul uključen</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul pomeren dole</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul pomeren gore</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul uklonjen</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modul dodat</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul izmenjen</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Pravilo administratora dodato</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Pravilo administratora izmenjeno</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Pravilo administratora uklonjeno</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Pravilo foruma dodato</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Pravilo foruma izmenjeno</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Pravilo foruma uklonjeno</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Pravilo moderatora dodato</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Pravilo moderatora izmenjeno</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Pravilo moderatora uklonjeno</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Pravilo korisnika dodato</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Pravilo korisnika izmenjeno</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Pravilo korisnika uklonjeno</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Polje profila aktivirano</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Polje profila dodato</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Polje profila deaktivirano</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Polje profila izmenjeno</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Polje profila uklonjeno</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Uprošćeni forumi</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatski uprošćeni forumi</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Deaktivirani korisnici</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Uprošćeni korisnici i obrisani postovi</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Uprošćeni korisnici i sačuvani postovi</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Obrisan keš</strong>',
	'LOG_PURGE_SESSIONS'   =>  '<strong>Obrisane sesije</strong>',
	
	'LOG_RANK_ADDED'		=> '<strong>Dodat novi čin</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Uklonjen čin</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Ažuriran čin</strong><br />» %s',
	
	'LOG_REASON_ADDED'		=> '<strong>Dodat razlog odricanja</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Uklonjen razlog odricanja</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Izmenjen razlog odricanja</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Resetovan datum početka rada boarda</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Reset najviše korisnika online</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Resinhronizovan brojač korisničkih postova</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Tačkaste teme resihronizovane</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, tema i statistika korisnika resihronizovana</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Kreiran indeks pretrage za</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Uklonjen indeks pretrage za</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Dodat novi stil</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Obrisan stil</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Izmenjen stil</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Izvežen stil</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Dodat novi set tema u bazu</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Dodat nov set tema u fajlsistem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Obrisane keširane verzije fajlova seta tema u temi <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Obrisan set tema</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Izmenjen set tema <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Izmenjeni detalji seta teme</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Izvežen set tema</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Osvežen set tema</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Dodata nova tema u bazu</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Dodata nova tema u fajlsistem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Obrisana tema</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Izmenjeni detalji teme</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Izmenjena tema <em>%1$s</em></strong><br />» Izmenjena klasa <em>%2$s</em>',
	'LOG_THEME_EDIT_ADD'		=> '<strong>Izmenjena tema <em>%1$s</em></strong><br />» Dodata klasa <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Izmenjena tema <em>%1$s</em></strong><br />» Izmenjen fajl <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Izvežena tema</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Osvežena tema</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Ažurirana baza sa verzije %1$s na verziju %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Ažuriran phpBB sa verzije %1$s na verziju %2$s</strong>',
	
	'LOG_USER_ACTIVE'		=> '<strong>Korisnik aktiviran</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Zabranjen korisnik putem menadžmenta korisnika</strong> - razlog "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Zabranjen IP putem menadžmenta korisnika</strong> - razlog "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Zabranjen email putem menadžmenta korisnika</strong> - razlog "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Obrisan korisnik</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Uklonjeni svi prikačeni fajlovi od korisnika</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Uklonjen avatar korisnika</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Uklonjeni svi postovi korisnika</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'  =>  '<strong>Ispražnjen korisnički outbox</strong><br />» %s',
  'LOG_USER_REMOVED_NR' =>  '<strong>Uklonjen status novog registrovanog člana korisnika</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Uklonjen potpis korisnika</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Deaktiviran korisnik</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Pomereni postovi korisnika</strong><br />» postovi od "%1$s" u forumu "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Promenjena šifra korisnika</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forsirana reaktivacija korisnika</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Korisnik "%1$s" promenio je email</strong><br />» iz "%2$s" u "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Promenjeno korisničko ime</strong><br />» iz "%1$s" u "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Ažurirani detalji korisnika</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Korisnički nalog aktiviran</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Avatar korisnika uklonjen</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Uklonjen potpis korisnika</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Dodato ponovno uključenje korisnika</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Korisnički nalog deaktiviran</strong>',
	'LOG_USER_LOCK'				=> '<strong>Korisnik zaključao sopstvenu temu</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Pomereni svi postovi u forum "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forsirana reaktivacija korisnika</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Korisnik je sam otključao sopstvenu temu</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Dodato upozorenje korisniku</strong><br />»%s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Sledeće upozorenje je dato ovom korisniku</strong><br />»%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Korisnik je promenio podrazumevanu grupu</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Korisnik je uklonjen kao lider iz korisničke grupe</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Korisnik se priključio grupi</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Korisnik se priključio grupi i treba da bude odobren</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Korisnik raskinuo članstvo iz grupe</strong><br />» %s',

  'LOG_WARNING_DELETED' =>  '<strong>Obrisano upozorenje korisnika</strong><br />» %s',
  'LOG_WARNINGS_DELETED'  =>  '<strong>Obrisano %2$s upoyorenja korisnika</strong><br />» %1$s',
  'LOG_WARNINGS_DELETED_ALL'  =>  '<strong>Obrisana sva upozorenja korisnika</strong><br />» %s',
	'LOG_WORD_ADD'			=> '<strong>Dodata cenzura reči</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Obrisana cenzura reči</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Izmenjena cenzura reči</strong><br />» %s',
));

?>