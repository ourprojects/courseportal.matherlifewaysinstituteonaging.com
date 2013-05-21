<?php
/** 
*
* install [Serbian]
*
* @package language
* @version $Id: install.php,v 1.63 2006/11/27 21:24:15 davidmj Exp $
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
	'ADMIN_CONFIG'				=> 'Admin Konfiguracija',
	'ADMIN_PASSWORD'			=> 'Šifra administratora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potvrdi šifu administratora',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Molimo vas da unesete šifru dužine između 6 i 30 karaktera)',
	'ADMIN_TEST'				=> 'Proveri podešavanja administratora',
	'ADMIN_USERNAME'			=> 'Korisničko ime administratora',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Molimo vas da unesete korisničko ime dužine između 3 i 20 karaktera)',
	'APP_MAGICK'				=> 'Imagemagick podrška [ Prikačeni fajlovi ]',
	'AUTHOR_NOTES'				=> 'Beleške autora<br />» %s',
	'AVAILABLE'					=> 'Dostupno',
	'AVAILABLE_CONVERTORS'		=> 'Dostupni konverteri',

	'BACKUP_NOTICE'				=> 'Napravite bekap vašeg boarda pre nadogradnje u slučaju da se pojave problemi tokom procesa nadogradnje.',
	'BEGIN_CONVERT'				=> 'Započni konverziju',
	'BLANK_PREFIX_FOUND'		=> 'Skeniranje vaših tabela je pokazalo ispravnu instalaciju bez prefiksa tabela.',
	'BOARD_NOT_INSTALLED'			=> 'Nije pronađena instalacija',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB-ov konverter zahteva podrazumevanu instalaciju phpBB3 da bi radio, molimo vas <a href="%s">nastavite sa instalacijom phpBB3</a>.',
	
	'CATEGORY'					=> 'Kategorija',
	'CACHE_STORE'				=> 'Tip keša',
	'CACHE_STORE_EXPLAIN'		=> 'Fizička lokacija gde se podaci keširaju, preporučujemo fajl sisetm.',
	'CAT_CONVERT'				=> 'Konvertuj',
	'CAT_INSTALL'				=> 'Instaliraj',
	'CAT_OVERVIEW'				=> 'Pregled',
	'CAT_UPDATE'				=> 'Nadogradi',
	'CHANGE'					=> 'Promeni',
	'CHECK_TABLE_PREFIX'		=> 'Proverite prefiks tabele i pokušajte ponovo.',
	'CLEAN_VERIFY'				=> 'Čišćenje i proveravanje finalne strukture',
	'CLEANING_USERNAMES'		=> 'Čišćenje korisničkih imena',
	'COLLECTING_FILE_DIFFS'		=> 'Sakupljam razlike u fajlovima',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> je očišćeno korisničko ime za:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Duplirana korisnička imena su pronađena na vašem starom boardu. Da bi kompletirali konverziju molimo vas da obrišete ili preimenujete ove korisniketako da bude samo jedan korisnik na vašem boardu za svako korisničko ime.',
	'COLLIDING_USER'			=> '» korisnički id: <strong>%d</strong> korisničko ime: <strong>%s</strong> (%d postova)',
	'CONFIG_CONVERT'			=> 'Konvertovanje konfiguracije',
	'CONFIG_CONVERT'			=> 'Konvertovanje konfiguracije',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Nije moguće upisivanje konfiguracionog fajla. Alternativne metode kako da napravite ovaj fajl su prikazane ispod',
	'CONFIG_FILE_WRITTEN'		=> 'Konfiguracioni fajl je upisan, sada možete nastaviti sa sledećim korakom instalacije',
	'CONFIG_RETRY'				=> 'Pokušaj ponovo',
	'CONFIG_PHPBB_EMPTY'  		=> 'phpBB3 konfiguracija za "%s" je prazna.',
	'CONTACT_EMAIL_CONFIRM'		=> 'Potvrda kontakt email-a',
	'CONTINUE_CONVERT'			=> 'Nastavi konverziju',
	'CONTINUE_CONVERT_BODY'		=> 'Detektovan je prethodni pokušaj konvertovanja. Možete izabrati da nastavite konverziju ili pokrenete novu.',
	'CONTINUE_LAST'				=> 'Nastavi poslednje izjave',
	'CONTINUE_OLD_CONVERSION'	=> 'Nastavi prethodno startovanu konverziju',
	'CONTINUE_UPDATE'			=> 'Nastavi nadogradnju',
	'CONVERT'					=> 'Konvertuj',
	'CONVERT_OPTIONS'				=> 'Opcije',
	'CONVERT_COMPLETE'			=> 'Konvertovanje završeno',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Uspešno ste konvertovali vaš board u phpBB 3.0. Sada se možete prijaviti i <a href="../">pristupiti vašem forumu</a>. Znajde da je pomoć za korišćenje phpBB-a dostupna OnLine na <a href="http://www.phpbb.com/support/documentation/3.0/">Userguide</a> i <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Beta support forum</a>',
	'CONVERT_INTRO'				=> 'Dobrodošli na phpBB Univerzalni Konvertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Odavde možete uvesti podatke sa ostalih (instaliranih) foruma. Lista ispod prikazuje sve trenutno dostupne mofule za konverziju. Ako ne postoji modul u listi koji vama odgovara, molimo vas da posetite naš sajt gde će budući moduli za konverziju biti dostupni za peuzimanje.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova konverzija',
	'CONVERT_NOT_EXIST'			=> 'Izabrani konvertor ne postoji',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informacija koju ste uneli je proverena. Da bi počeli sa konverzijom, pritisnite dugme ispod',
	'CONV_ERR_FATAL'					=> 'Fatalna greška konverzije',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP slanje prikačenih fajlova je uključeno na starom boardu. Molimo vas da prekopirate sve prikačene fajlove u određeni direktorijum, isključite ftp slanje i proverite da je izabran ispravan direktorijum za slanje. Ako ste ovo uradili, restartujte konvertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nema konfiguracione informacije za konverziju.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Ne mogu da dobijem informaciju o pristupu forumu.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Ne mogu da dobijem kategorije.',
	'CONV_ERROR_GET_CONFIG'				=> 'Ne mogu da dobijem configuraciju vašeg foruma.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Ne mogu da pristupim/pročitam "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Ne mogu da dobijem informacije o autorizaciji grupe.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Nekonsistencija u tabeli sa grupama detektovana u add_bots() - moraćete da dodate sve specijalne grupeo ako to uradite manuelno.',
	'CONV_ERROR_INSERT_BOT'				=> 'Ne mogu da dodam bot-a u tabelu korisnika.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Ne mogu da dodam bota u bots tabelu.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Ne mogu da ubacim korisnika u user_group tabelu.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Greška u prosleđivaču poruka',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Za developere: morate odrediti $convertor[\'avatar_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Relativna putanja do foruma nie određena.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Za developere: morate odrediti $convertor[\'avatar_gallery_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupa "%1$s" ne može biti pronađena u %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Za developere: morate odrediti $convertor[\'ranks_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Za developere: morate odrediti $convertor[\'smilies_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Za developere: morate odrediti $convertor[\'upload_dir\'] da bi koristili %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Ne mogu da ubacim/ažuriram podešavanja dozvola.',
	'CONV_ERROR_PM_COUNT'				=> 'Ne mogu da izaberem folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ne mogu da ubacim nov forum menjajući staru kategoriju.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Ne mogu da ubacim nov forum menjajući stari forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Ne mogu da dobijem informaciju o autorijaciji korisnika.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Pogrešna grupa "%1$s" definisana u %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Ova stranica sakuplja podatke neophodne za pristup izvoru boarda. Unesite detalje o bazi vašeg bivšeg boarda; konverter neće izmeniti ništa u bazi. Izvorni board bi trebalo onemogućiti da bi se omogućila nesmetana konverzija.',
	'CONV_SAVED_MESSAGES'				=> 'Sačuvane poruke',
	
	'COULD_NOT_COPY'			=> 'Ne mogu da kopiram fajl <strong>%1$s</strong> u <strong>%2$s</strong><br /><br />Proverite da odredišni direktorijum postoji i da se u njega može upisivati',
	'COULD_NOT_FIND_PATH'		=> 'Ne mogu da pronađem putanju do vašeg starog foruma. Molimo vas da je unesete i pokušate ponovo.<br />» Putanja je bila %s',

	'DBMS'						=> 'Tip baze',
	'DB_CONFIG'					=> 'Konfiguracija baze',
	'DB_CONNECTION'				=> 'Konekcija sa bazom',
	'DB_ERR_INSERT'				=> 'Greška pri procesiranju <code>INSERT</code> query-ja',
	'DB_ERR_LAST'				=> 'Greška pri procesiranju <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Greška prilikom izvršavanja <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Greška prilikom izvršavanja <var>query_first</var>, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Greška prilikom pokretanja <code>SELECT</code> query-ja',
	'DB_HOST'					=> 'Database server hostname ili DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN je skraćenica od Naziv Izvora Podataka i važi samo za ODBC instalacije.',
	'DB_NAME'					=> 'Ime baze',
	'DB_PASSWORD'				=> 'Šifra baze',
	'DB_PORT'					=> 'Port baze',
	'DB_PORT_EXPLAIN'			=> 'Ostavite prazno osim ako znate da server radi na nestandardnom portu.',
	'DB_UPDATE_NOT_SUPPORTED'  => 'Žao nam je ali ova skripta ne podržava nadoradnju phpBB za verzije od “%1$s”. Vaša trenutno instalirana verzija je “%2$s”. Molimo vas da nadogradite na prethodnu verziju pre nego što pokrenete ovu skriptu. Pomoć oko ovoga možete pronaći na Support Forum-u na phpBB.com.',
	'DB_USERNAME'				=> 'Korisničko ime baze',
	'DB_TEST'					=> 'Testiraj konekciju',
	'DEFAULT_LANG'				=> 'Podrazumevani jezik boarda',
	'DEFAULT_PREFIX_IS'			=> 'Podrazumevani prekiks za %1$s je <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Nije uneta vrednost za test_file promenljivu u konverteru. Ako ste korisnik ovog konvertora, ne bi trebalo da vidite ovu grešku, molimo vas da prijavite ovu poruku autoru konvertora. Ako ste autor konvertera, morate odrediti nazib fajla koji postoji u izvornom forumu i dozvolite da putanja bude proverena.',
	'DIRECTORIES_AND_FILES'		=> 'Podešavanje direktorijuma i fajlova',
	'DISABLE_KEYS'				=> 'Onemogućavanje tastature',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Udaljena FTP podrška [ Instalacija ]',
	'DLL_GD'					=> 'GD graphics podrška [ Vizuelne potvrde ]',
	'DLL_MBSTRING'				=> 'Multi-byte karakterna podrška',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ preko ODBC-a',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL sa MySQLi Ekstenzijom',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML podrška [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib kompresija [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Konfiguracija Preuzimanja',
	'DL_CONFIG_EXPLAIN'			=> 'Možete preuzeti kompletan config.php na vaš PC. Onda ćete morati da ga pošaljete manuelno, zamenjujući postojeći config.php u vašem phpBB 3.0 root directorijumuy. Zapamtite da fajl pošaljete u ASCII formatu (pogledajte dokumentaciju vaše FTP aplikacije ako niste sigurni kako da ovo uradite). Kada ste poslali config.php kliknite na “Završeno” da bi vas odveli na sledeću stranicu.',
	'DL_DOWNLOAD'				=> 'Preuzimanje',
	'DONE'						=> 'Završeno',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'	=>  'Preuzimanje arhive sa izmenjenim fajlovima (preporučujemo)',
	'DOWNLOAD_CONFLICTS'   =>  'Download konflikt ya ovaj fajl',
  'DOWNLOAD_CONFLICTS_EXPLAIN'  =>  'Potražite &lt;&lt;&lt; da bi uočili konflikte',

	'ENABLE_KEYS'				=> 'Ponovno omogućavanje tastature. Ovo može da malo potraje',

	'FILES_OPTIONAL'			=> 'Opcioni fajlovi i direktorijumi',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opciono</strong> - Ovi fajlovi, direktorijumi ili dozvole nisu obavezni. Instalacione rutine će po pokušati da ih korišćenjem raznih tehika kompletiraju ako ne postoje ili u njih ne može biti upisivano. U svakom slučaju, prisustvo ovih fajlova, direktorijuma ili dozvola će ubrzati instalaciju.',
	'FILES_REQUIRED'			=> 'Fajlovi i direktorijumi',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obavezno</strong> - Da bi pravilno funkcionisao phpBB treba da ima mogućnost da pristupi ili upisuje u određene fajlove ili direktorijume. Ako vidite “Nije pronađeno” moraćete da napravite relevantan fajl ili direktorijum. Ako vidite “Neupisivo” moraćete da promenite dozvolefajla ili direktorijuma da bi omogućili phpBB-u da upisuje u njih.',
	'FILLING_TABLE'				=> 'Popunjavam tabelu <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Popunjavam tabele',
	'FINAL_STEP'				=> 'Tavršni korak',
	'FIREBIRD_DBMS_UPDATE_REQUIRED'  =>  'phpBB više ne podržava Firebird/Interbase od verzije 2.1. Molimo Vas da nadogradite vašu Firebird instalaciju bar na verziju 2.1.0 pre nego nastavite sa nadogradnjom.',
	'FORUM_ADDRESS'				=> 'Adresa foruma',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Ovo je http adresa vašeg bivšeg foruma',
	'FORUM_PATH'				=> 'Putanja foruma',
	'FORUM_PATH_EXPLAIN'		=> 'Ovo je <strong>relativna</strong> putanja na disku do vašeg bivšeg foruma od <strong>root-a vaše phpBB instalacije</strong>',
	'FOUND'						=> 'Nađeno',
	'FTP_CONFIG'				=> 'Prebaci konfiguraciju putem FTP-a',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB je pronašao postojanje FTP modula na ovom serveru. Možete pokušati da instalirate vaš config.php putem njega ako želite. Moraćete da priložite informacije prikazane ispod. Zapamtite da su vaše korisničko ime i šifra obe sa vašeg servera! (pitajte vašeg provajdera za detalje ako niste sigurni)',
	'FTP_PATH'					=> 'FTP Putanja',
	'FTP_PATH_EXPLAIN'			=> 'Ovo je putanja od vašeg root directorijuma do phpBB-a, npr. htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Slanje',

	'GPL'						=> 'Generalna Javna Licenca',
	
	'INITIAL_CONFIG'			=> 'Osnovna konfiguracija',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Sada kada je instalacija utvrdila da vaš server može pokrenuti phpBB moraćete da dostavite i neke informacije. Ako neznate kako da se konektujete na vašu bazu molimo vas da kontaktirate vašeg provajdera ili pogledajte phpBB forum za podršku. Kada unosite podatke molimo vas da ih pažljivo pregledate pre nego što nastavite dalje.',
	'INSTALL_CONGRATS'			=> 'Čestitamo',
	'INSTALL_CONGRATS_EXPLAIN'	=> 'Uspešno ste instalirali phpBB 3.0. Klikom na dugme ispod odvešćemo vas na Administracioni Kontrolni Panel (AKP). Odvojite malo vremena da proučite opcije koje su vam dostupne. Znajte da je pomoć dostupna OnLine na <a href="http://www.phpbb.com/support/documentation/3.0/">Userguide</a> i <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Beta support forum</a>, pogledajte %sREADME%s za dodatne informacije.<br /><br /><strong>Molimo vas da sada obrišete, pomerite ili preimenujete install direktorijum pre nego što počnete da koristite forum. Ako je ovaj direktorijum još uvek prisutant, samo će Administracioni Kontrolni Panel (AKP) biti dostupan.</strong>',
	'INSTALL_INTRO'				=> 'Dobrodošli na instalaciju',
	'INSTALL_INTRO_BODY'		=> 'Sa ovom opcijom, moguće je instalirati phpBB na vš server.</p><p>Da bi nastavili, moraćete da imate sledeće informacije:</p>
	<ul>
	<li>Ime servera baze</li>
	<li>Ime baze</li>
	<li>Korisničko ime i šifra baze</li>
	</ul>
	<p>Još neki uvdni tekst može ići ovde…',
	'INSTALL_INTRO_NEXT'		=> 'Za započnete instalaciju, kliknite na dugme ispod.',
	'INSTALL_LOGIN'				=> 'Prijava',
	'INSTALL_NEXT'				=> 'Sledeći korak',
	'INSTALL_NEXT_FAIL'			=> 'Neki testovi nisu prošli i trebalo bi da ispravite te probleme pre nego što nastavite sa sledećim korakom. Ako to ne uradite, to može rezultovati nekompletnom instalacijom.',
	'INSTALL_NEXT_PASS'			=> 'Svi osnovni testovi su prošli i možete nastaviti sa sledećim korakom instalacije. Ako ste menjali dozvole, module, itd. i želite da ponovo testirate možete i to uraditi.',
	'INSTALL_PANEL'				=> 'Instalacioni panel',
	'INSTALL_SEND_CONFIG'		=> 'Na žaost phpBB ne može da upiše konfiguracionu informaciju direktno u vaš config.php. Ovo je verovatno zato što fajl ili ne postoji ili se u njega ne može upisivati. Neke opcije će biti prikazane ispod omogućivši vam da završite instalaciju config.php.',
	'INSTALL_START'				=> 'Počni instalaciju',
	'INSTALL_TEST'				=> 'Testiraj ponovo',
	'INST_ERR'					=> 'Greška pri instalaciji',
	'INST_ERR_DB_CONNECT'		=> 'Ne mogu da se povežem na bazu, pogledajte poruku o grešci ispod',
	'INST_ERR_DB_FORUM_PATH'	=> 'Fajl baze podataka se nalazi u direktorijumu vašeg foruma. Ovaj fajl bi trebalo da cuvate na lokaciji koja nije web dostupna',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Prefiks koji ste uneli je neispravan. Mora da počinje sa slovom i mora da sadrži samo slova, brojeve i donju crtu.',
	'INST_ERR_DB_NO_ERROR'		=> 'Nije data poruka o grešci',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Verzija MySQL-a instalirana na ovoj mašini je nekompatibilna sa “MySQL sa MySQLi Ekstenzijom” opcijom koju ste izabrali. Molimo vas da pokušate sa “MySQL” opcijom.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Verzija SQLite ekstenzije koju imate instaliranu je prestara, i mora biti nadograđena na najmanje verziju 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Verzija Oracle-a instalirana na ovoj mašini zahteva od vas da podesite <var>NLS_CHARACTERSET</var> parametar u <var>UTF8</var>. Ili nadogradite vašu instalaciju na 9.2+ ili promenite parametar.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Verzija Firebird-a instalirana na ovoj mašini je starija od verzije 2.0, molimo vas da se nadogradite na noviju verziju.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Baza koju ste izabrali za Firebird ima veličinu strane manju od 8192, a mora biti najmanje 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Baza koju ste izabrali nije kreirana u <var>UNICODE</var> ili <var>UTF8</var> enkoding. Pokušajte instalaciju sa bazom u <var>UNICODE</var> ili <var>UTF8</var> enkodingu',
	'INST_ERR_DB_NO_NAME'		=> 'Niste odredili ime baze',
	'INST_ERR_EMAIL_INVALID'	=> 'Email adresa koju ste uneli je neispravna',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Email adrese koje ste uneli se ne poklapaju.',
	'INST_ERR_FATAL'			=> 'Fatalna instalaciona greška',
	'INST_ERR_FATAL_DB'			=> 'Došlo je do fatalne i nepopravljive greške u bazi. Ovo se može desiti zato što izabrani korisnik nema odgovarajuća prava za <code>CREATE TABLES</code> ili <code>INSERT</code> data, itd. Bliže informacije mogu biti date ispod. Molimo vas da kontktirate vašeg hosting provajdera ili forume podrške phpBB-a.',
	'INST_ERR_FTP_PATH'			=> 'Ne mogu da se prebacim u zadati direktorijum, molimo vas da proverite putanju.',
	'INST_ERR_FTP_LOGIN'		=> 'Ne mogu da se prijavim na FTP server, proverite korisničko ime i šifru',
	'INST_ERR_MISSING_DATA'		=> 'Morate popuniti sva polja u bloku',
	'INST_ERR_NO_DB'			=> 'Ne mogu da učitam PHP modul za izabrani tip baze',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Šifre koje ste uneli se ne poklapaju.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Šifra koju ste uneli je predugačka. Maksimalna dužina je 30 karaktera.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Šifra koju ste uneli je prekratka. Minimalna dužina je 6 karaktera.',
	'INST_ERR_PREFIX'			=> 'Tabele sa izabranim prefiksom već postoje, molimo vas da izaberete alternativni.',
	'INST_ERR_PREFIX_INVALID'	=> 'Prefiks tabela koji ste izabrali je nepravilan za vašu bazu. Molimo vas da pokušate sa nekim drugim, uklanjajući nedozvoljene karaktere',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Prefiks tabele koji ste izabrali je predugačak. Maksimalna dužina je %d karaktera.',
	'INST_ERR_USER_TOO_LONG'	=> 'Korisničko ime koje ste uneli je predugačko. Maksimalna dužina je 20 karaktera.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Korisničko ime koje ste uneli je prekratko. Minimalna dužina je 3 karaktera.',
	'INVALID_PRIMARY_KEY'		=> 'Neispravan primarni ključ : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Znajte da ovo može da potraje... Molimo vas da ne stopirate skriptu.',
	
		// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> provera ekstenzije',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Obavezno</strong> - <samp>mbstring</samp> je PHP ekstenzija koja omogućuje višebajtne string funkcije. Neke mogućnosti mbstring-a nisu kompatibilne sa phpBB-om i moraju biti isključene.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funkcija overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> mora biti postavljena ili na 0 ili na 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparentni enkoding karaktera',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> mora biti postavljen na 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP ulazna konverzija karaktera',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> mora biti postavljeno na <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP izlazna konverzija karaktera',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> mora biti postavljena na <samp>pass</samp>.',
	
	'MAKE_FOLDER_WRITABLE'		=> 'Proverite da li ovaj folder postoji i da li je moguće upisivanje u njega a onda pokušajte ponovo:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Proverite da li ovai folderi postoje i da li je moguće upisivanje u njih a onda pokušajte ponovo:<br />»<strong>%s</strong>',
	'MERGING_FILES'			=> 'Sastavljam razlike',
	'MERGING_FILES_EXPLAIN'		=> 'Trenutno sakupljam konačne izmene fajlova.<br /><br />Molimo Vas da sačekate dok phpBB ne završi sve operacije na izmenjenim fajlovima.',
	'MYSQL_SCHEMA_UPDATE_REQUIRED' =>  'Vaša MySQL đema baze za phpbb je zastarela. phpBB je prepoznao šemu za MySQL 3.x/4.x, ali server radi pod verzijom MySQL %2$s.<br /><strong>Pre nego krenete sa nadogradnjom, morate da nadogradite šemu.</strong><br /><br />Pogledajte na <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base članku o nadogradnji MySQL šema</a>. Ako imate problema, koristite <a href="http://www.phpbb.com/community/viewforum.php?f=46">naš forum za podršku</a>.',

	'NAMING_CONFLICT'			=> 'Konflikt imena: %s i %s su aliasi<br /><br />%s',
	'NEXT_STEP'					=> 'Idi na sledeći korak',
	'NEW_USERNAME'				=> 'Novo korisničko ime',
	'NOT_FOUND'					=> 'Ne mogu da pronađem',
	'NOT_UNDERSTAND'			=> 'Ne mogu da razumem %s #%d, tabela %s ("%s")',
	'NO_CONVERTORS'				=> 'Nema konvertora dostupnih za upotrebu',
	'NO_CONVERT_SPECIFIED'		=> 'Nije izabran konvertor',
	'NO_LOCATION'				=> 'Ne mogu da odredim lokaciju. Ako znate da je Imagemagick instaliran, možete odrediti njegovu lokaciju kasnije u vašem Administracionom Panelu',
	'NO_TABLES_FOUND'			=> 'Nije pronađena ni jedna tabela.',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Trenutno postoji oko %1$d od %2$d razlika u prikupljenim fajlovima.<br />Molimo Vas da sačekate dok se prikupljanje fajlova ne završi.',
// TODO: Write some explanatory introduction text
	
	'OVERVIEW_BODY'					=> 'Dobrodošli na sledeću generaciju phpBB-a posle 2.0.x, phpBB 3.0! Ovo beta izdanje namenjeno je naprednim korisnicima da je testiraju i pomognu nam da završimo pravljenje najboljeg Opensource Bulten Board-a.</p><p><strong style="text-transform: uppercase;">Znajte:</strong> Ovo izdanje <strong style="text-transform: uppercase;">nije konačno</strong> i koristi se za <strong style="text-transform: uppercase;">testiranje</strong>.</p><p>Ovaj instalacioni sistem će vas provesti kroz proces instalacije phpBB-a, konvertovanja iz drugog foruma ili nadogradnje na poslednju verziju phpBB-a. Za više informacija o svakoj opciji, izaberite je iz menija iznad.',
	
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 Podrška',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>neće</strong> raditi ako vaša PHP instalacija nije kompajlirana sa UTF-8 podrškom u PCRE ekstenziji',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP funkcija getimagesize() je dostupna',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obavezno</strong> - Da bi phpBB ispravno funkcionisao, getimagesize funkcija mora biti dostupna.',
	'PHP_OPTIONAL_MODULE'			=> 'Opcioni Moduli',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcioni</strong> - Ovi moduli ili aplikacije su opcioni, ne trebaju vam da bi koristili phpBB 3.0. Međutim, ako ih imate oni će vam omogućiti veću funkcionalnost.',
	'PHP_SUPPORTED_DB'				=> 'Podržane Baze',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obavezni</strong> - Morate imati podršku za najmanje jednu bazu kompatibilnu sa PHP-om. Ako nema modula baza prikazanih kao dostupni trebalo bi da kontaktirate vašeg hosting provajdera.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP opcija <var>register_globals</var> je isključena',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB će i dalje raditi ako je ova opcija omogućena ali ako je moguće, preporučujemo da opcija register_globals bude onemogućena u vašoj PHP instalaciji iz bezbedonosnih razloga.',
	'PHP_SAFE_MODE'					=> 'Safe Mod',
	'PHP_SETTINGS'					=> 'PHP Verzija i Podešavanja',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Obavezno</strong> - Morate imati najmanje verziju 4.3.3 PHP-a da bi instalirali phpBB. Ako je <var>safe mod</var> prikazan ispod, vaša PHP instalacija radi u tom modu. Ovo će prouzrokovati ograničenja pri udaljenoj administraciji i sličnim mogućnostima.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP podešavanje <var>allow_url_fopen</var> je omogućeno',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opciono</strong> - Ovo podešavanje je opciono, mada neke phpBB funkcije kao avatari van sajta - neće raditi ispravno bez ove opcije. ',
	'PHP_VERSION_REQD'				=> 'PHP verzija >= 4.3.3',
	'POST_ID'						=> 'Id posta',
	'PREFIX_FOUND'					=> 'Skeniranje vaših tabela pokazalo je ispravnu instalaciju koristeći <strong>%s</strong> kao prefiks tabele.',
	'PREPROCESS_STEP'				=> 'Izvršavanje pre-procesnih funkcija/upita',
	'PRE_CONVERT_COMPLETE'			=> 'Svi pre-konverzioni koraci su uspešno izvršeni. Sada možete početi proces konverzije.',
	'PROCESS_LAST'					=> 'Izvršavam poslednje operacije',

 	'REFRESH_PAGE'				=> 'Osveži stranicu da bi nastavio konverziju',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ako je podešeno na Da, konverter će osvežiti stranicu da bi nastavio konverziju po završetku koraka. Ako je ovo vaša prva konverzija u svrhu testiranja i utvrđivanja bilo kakvih grešaka, predlažemo da izaberete Ne.',
 	'REQUIRED'					=> 'Obavezno',
	'REQUIREMENTS_TITLE'		=> 'Kompatibilnost Instalacije',
	'REQUIREMENTS_EXPLAIN'		=> 'Pre početka pune instalacije phpBB će izvršiti neke testove u vezi konfiguracije vašeg servera da bi osigurao da možete da instalirate i pokrenete phpBB. Pažljivo pogledajte rezultate i nemojte nastavljati dalje dok svi obavezni testovi ne prođu. Ako želite da omogućite neke od funkcija izlistanih kao opcioni testovi, trebalo bi da proverite da su i ti testovi prošli.',
	'RETRY_WRITE'				=> 'Pokušaj ponovo upisivanje konfiguracije',
	'RETRY_WRITE_EXPLAIN'		=> 'Ako želite možete promeniti dozvole na config.php da bi omogućili phpBB-u da upisuje u taj fajl. Ako želite to da uradite možete kliknuti na Pokušaj ponovo ispod da pokušate ponovo. Zapamtite da vratite dozvole za config.php posle phpBB instalacije.',

	'SCRIPT_PATH'				=> 'Putanja skripti',
	'SCRIPT_PATH_EXPLAIN'		=> 'Putanj gde je phpBB lociran relativno id naziva domena',
	'SELECT_LANG'				=> 'Izaberite jezik',
	'SERVER_CONFIG'				=> 'Konfiguracija Servera',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Indeks pretrage nije konvertovan',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Vaš stari indeks pretrage nije konvertovan. Preraga će uvek dati prazan rezultat. Da bi kreirali novi indeks pretrage idite na Administracioni Kontrolni Panel, izaberite Održavanje i onda izaberite Indeks pretrage iz podmenija.',
	'SOFTWARE'					=> 'Forum Softver',
	'SPECIFY_OPTIONS'			=> 'Izbor Opcija Konvertovanja',
	'STAGE_ADMINISTRATOR'		=> 'Detalji Administratora',
	'STAGE_ADVANCED'			=> 'Napredna Podešavanja',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Podešavanja na ovoj stranici su potrebna samo ako znate da vam treba nešto različito od podrazumevanih podešavanja. Ako niste sigurni, jednostavno produžite na sledeću stranicu, a ove opcije možete kasnije menjati iz Administracionog Kontrolnog Panela.',
	'STAGE_CONFIG_FILE'			=> 'Konfiguracioni Fajl',
	'STAGE_CREATE_TABLE'		=> 'Kreiranje Tabela Baze',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Tabele koje koristi phpBB 3.0 su kreirane i popunjene sa nekim inicijalnim podacima. Nastavite sa sledećim korakom da bi završili instalaciju phpBB-a.',
	'STAGE_DATABASE'			=> 'Podešavanje Baze',
	'STAGE_FINAL'				=> 'Finalni Korak',
	'STAGE_INTRO'				=> 'Uvod',
	'STAGE_IN_PROGRESS'			=> 'Konverzija u toku',
	'STAGE_REQUIREMENTS'		=> 'Zahtevi',
	'STAGE_SETTINGS'			=> 'Podešavanja',
	'STARTING_CONVERT'			=> 'Počinjem Proces Konverzacije',
	'STEP_PERCENT_COMPLETED'	=> 'Korak <strong>%d</strong> od <strong>%d</strong>: %d%% završen',
	'SUB_INTRO'					=> 'Uvod',
	'SUB_LICENSE'				=> 'Licenca',
	'SUB_SUPPORT'				=> 'Podrška',
	'SUCCESSFUL_CONNECT'		=> 'Uspešna Konekcija',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'U toku beta faze minimalni nivo podrške možete naći na <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">the phpBB 3.0 Beta support forum</a>. Daćemo odgovoree na generalna pitanja o instalaciji, konfiguracionim problemima i podršku za utvrđivanje čestih problema koji se najčešće odnose na bagove. Nećemo dati podršku modifikacija, dodatnih proizvoljnih stilova/koda, dodataka ili dati podršku korisnicima koji koriste ovu beta verziju na javnim sajtovima.</p><p>Za dodatnu asistenciju, pogledajte naš <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Vodič za brzi Start</a>.</p><p>Da bi osigurali da uvek imate poslednja obaveštenja i nadogradnje, <a href="http://www.phpbb.com/support/">prijavite se na našu mailing listu</a>',
	'SYNC_FORUMS'				=> 'Startujem sinhronizaciju foruma',
	'SYNC_POST_COUNT'			=> 'Sinhronizovanje brojača postova',
	'SYNC_POST_COUNT_ID'		=> 'Sinhronizovanje brojača postova od <var>unosa</var> %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Startujem sinhronizaciju tema',
	'SYNC_TOPIC_ID'				=> 'Sinhronizacija tema od topic_id $1%s do $2%s',

	'TABLES_MISSING'			=> 'Ne mogu da pronašem ove tabele<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefixks za tabele u bazi',
	'TABLE_PREFIX_SAME'			=> 'Prefiks tabele treba da bude onaj koji se koristi u softveru koji želite da konvertujete.<br />» Priloženi prefiks tabele je bio %s',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefiks more počinjati sa slovom i može da sadrži samo slova, brojeve i donju crticu.',
	'TESTS_PASSED'				=> 'Testovi uspešni',
	'TESTS_FAILED'				=> 'Testovi neuspešni',
	'TOGGLE_DISPLAY'			=> 'Prikaži/Sakrij listu fajlova',
	
	'TRY_DOWNLOAD_METHOD'		=> 'Možda želite da pokušate sa metodom preuyimanja izmenjenih fajlova.<br />Ovaj metod uvek radi i ujedno je preporučljiv metod za nadogradnju.',
	'TRY_DOWNLOAD_METHOD_BUTTON'	=> 'Pokušajte sa ovom metodom',

	'UNABLE_WRITE_LOCK'			=> 'Ne mogu da pišem u zaključani fajl',
	'UNAVAILABLE'				=> 'Nedostupno',
	'UNWRITABLE'				=> 'Neupisivo',
	'UPDATE_TOPICS_POSTED'		=> 'Generisanje informacije o poslatim temama',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Došlo je do greške prilikom generisanja informacije o poslatim temama. Možete ponovo pokušati ovaj korak u AKP posle završetka procesa konverzije.',
	'VERSION'					=> 'Verzija',
	'VERSION_NOT_UP_TO_DATE_TITLE'  =>	'Vaša phpBB instalacija je stara.',
	'VERIFY_OPTIONS'				=> 'Proveravam opcije za konverziju',

	'WELCOME_INSTALL'			=> 'Dobrodošli na phpBB 3 Instalaciju',
	'WRITABLE'					=> 'Moguće upisivanje',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Svi fajlovi su ažurni sa najnovijom verzijom phpBB-a. Možda sada želite da pokrenete alat za ažuriranje baze.',
	'ARCHIVE_FILE'				=> 'Izvorni fajl u arhivi',

	'BACK'		=> 'Nazad',
	'BINARY_FILE'		=> 'Binarni fajl',
	'BOT'				=> 'Spajder/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Metod koji se koristi da bi se utvrdilo da korisničko ime ne koristi više korisnika. Ima korisnika koji imaju isto ime kada se uporede sa novom metodom. Moraćete da obrišete ili preimenujete te korisnike da bi osigurali da se svako pojedinačno ime koristi za samo jednog korisnika pre nego što nastavite.',
	'CHECK_FILES'					=> 'Proveri fajlove',
	'CHECK_FILES_AGAIN'				=> 'Ponovo proveri fajlove',
	'CHECK_FILES_EXPLAIN'			=> 'U sledećem koraku svi fajlovi će biti provereni u odnosu na ažurne fajlove - ovo može malo potrajati ako se ova provera radi prvi put.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Po vašoj bazi, vaša verzija je ažurna. Možda ćete želeti da nastavite sa proverom fajlova da bi bili sigurni da su svi fajlovi stvarno ažurni sa poslednjom verzijom phpBB-a.',
	'CHECK_UPDATE_DATABASE'			=> 'Nastavi proces nadogradnje',
	'COLLECTED_INFORMATION'			=> 'Informacija o sakupljenim fajlovima',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Lista ispod pokazuje informacije o fajlovima koji trebaju da se ažuriraju. Molimo vas da pročitate informaciju ispred svakog bloka statusa da bi videli šta znače i šta bi trebalo da uradite da bi izvršili uspešno ažuriranje.',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Sada bi trebalo <a href="../ucp.php?mode=login">da se prijavite na vaš board</a> i proverite da li sve radi kako treba. Ne zaboravite da obrišete, preimenujete ili pomerite install direktorijum!',
	'CONTINUE_UPDATE_NOW'			=> 'Nastavite proces nadogradnje sada',
	'CURRENT_FILE'					=> 'Trenutni originalni fajl',
	'CURRENT_VERSION'				=> 'Trenutna verzija',

	'DATABASE_TYPE'						=> 'Tip baze',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Fajl za ažuriranje baze u instalacionom direktorijumu je zastareo. Molimo vas da se nadogradite na korektnu verziju fajla.',
	'DELETE_USER_REMOVE'				=> 'Obriši korisnika i ukloni postove',
	'DELETE_USER_RETAIN'				=> 'Obriši korisnika ali zadrži postove',
	'DESTINATION'						=> 'Odredišni fajl',
	'DIFF_INLINE'						=> 'U jednom redu',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kraj trenutnog fajla / Početak novog ažuriranog fajla',
	'DIFF_SIDE_BY_SIDE'					=> 'Jedan pored Drugog',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Nemoj da ažuriraš ovaj fajl',
	'DONE'								=> 'Završeno',
	'DOWNLOAD'							=> 'Preuzmi',
	'DOWNLOAD_AS'						=> 'Preuzmi kao',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Preuzmi arhivu izmenjenih fajlova',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Jednom preuzetu, trebalo bi da da raspakujete arhivu. Pronaći ćete izmenjene fajlove koje trebate da pošaljete u vaš phpBB root direktorijum. Molimo vas da pošaljete fajlove na njihove odgovarajuće lokacije. Kada ste poslali sve fajlove, molimo vas da ponovo proverite fajlove klikom na dugme ispod.',

	'ERROR'		=> 'Greška',
	'EDIT_USERNAME'	=> 'Izmeni korisničko ime',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fajl je ažuran',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Fajl nije moguće menjati',
	'FILE_USED'						=> 'Informacija preuzeta iz',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktni fajlovi',
	'FILES_CONFLICT_EXPLAIN'		=> 'Sledeći fajlovi su izmenjeni i ne predstavljaju originalne fajlove iz originalne verzije. phpBB je utvrdio da ti fajlovi prave konflikt ako se pokuša njihovo spajanje. Molimo vas da istražujete konflikte i pokušate da ih ručno rešite ili nastavite da ažuriranje izborom preferiranog metoda za spajanje. Ako manuelno rešavate konflikte proverite fajlove ponovo nakon što ih izmenite. Takođe ste u mogućnosti da birate između željenog metoda spajanja za svaki fajl. Prvi će rezultovati fajlom gde će konfliktne linije sa vašeg starog fajla biti izgubljenet, dok će drugi rezultovati gubljenjem konflikta u novijem fajlu.',
	'FILES_MODIFIED'				=> 'Izmenjeni fajlovi',
	'FILES_MODIFIED_EXPLAIN'		=> 'Sledeći fajlovi su izmenjeni i ne predstavljaju originalne fajlove iz originalne verzije. Ažurirani fajl će biti spojen između vaših modifikacija i novog fajla.',
	'FILES_NEW'						=> 'Novi fajlovi',
	'FILES_NEW_EXPLAIN'				=> 'Sledeći fajlovi trenutno ne postoje u vašoj instalaciji.',
	'FILES_NEW_CONFLICT'			=> 'Novi konfliktni fajlovi',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Sledeći fajlovi su novi sa poslednjom verzijom ali je utvrđrno da već postoji fajl sa istim imenom i istom pozicijom. Ovaj fajl će biti prepisan novim fajlom.',
	'FILES_NOT_MODIFIED'			=> 'Neizmenjeni fajlovi',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Sledeći fajlovi nisu izmenjeni i predstavljaju originalne phpBB fajlove verzije sa koje želite da se nadogradite.',
	'FILES_UP_TO_DATE'				=> 'Već nadograđeni fajlovi',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Sledeći fajlovi su ažurni i nema potrebe da se ažuriraju.',
	'FTP_SETTINGS'					=> 'FTP Podešavanja',
	'FTP_UPDATE_METHOD'				=> 'FTP Slanje',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Fajlovi za nadogradnju nisu kompatibilni sa vašom instaliranom verzijom. Vaša instalirana verzija je  %1$s a fajl zje a nadogradnju phpBB-a %2$s na %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Fajlovi za nadogradnju su nekompletni',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Nadogradnja baze je uspešna. Sada treba da nastavite proces nadogradnje.',

	'KEEP_OLD_NAME'		=> 'Keep username',
	
	'LATEST_VERSION'		=> 'Poslednja verzija',
	'LINE'					=> 'Linija',
	'LINE_ADDED'			=> 'Dodato',
	'LINE_MODIFIED'			=> 'Izmenjeno',
	'LINE_REMOVED'			=> 'Uklonjeno',
	'LINE_UNMODIFIED'		=> 'Nepromenjeno',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Da bi nadogradili vašu instalaciju morate se prvo prijaviti.',

	'MAPPING_FILE_STRUCTURE'	=> 'Da bi olakšali ovde se nalaze lokacije fajlova koji predstavljaju mapu vaše phpBB instalacije.',
	
	'MERGE_MODIFICATIONS_OPTION'	=> 'Sastavi izmene',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Ne sastavljaj - koristi novi fajl',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Ne sastavljaj - koristi trenutno instaliran fajl',
	'MERGE_MOD_FILE_OPTION'		=> 'Koristi kod izmenjenog fajla pri konačnom spajanju',
	'MERGE_NEW_FILE_OPTION'		=> 'Koristi kod novog fajla pri konačnom spajanju',
	'MERGE_SELECT_ERROR'		=> 'Modovi za spajanje konfliktnih fajlova nisu izabrani.',

	'NEW_FILE'						=> 'Novi ažurirani fajl',
	'NO_AUTH_UPDATE'				=> 'Niste autorizovani za nadogradnju',
	'NO_DATABASE_UPDATE_NEEDED'		=> 'Svi vaši fajlovi su ažurni. Obzirom da već imate poslednju verziju, nema potrebe da ažurirate vašu bazu.',
	'NO_ERRORS'						=> 'Nema grešaka',
	'NO_UPDATE_FILES'				=> 'Ne ažuriram sledeće fajlove',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Sledeći fajlovi su novi ili izmenjeni ali direktorijum u kome oni normalno treba da postoje ne nalaze se u vašoj instalaciji. Ako ova lista sadrži fajlove do drugih irektorijuma osim language/ ili styles/ onda možda imate izmenjenu strukturu direktorijuma i nadogradnja može biti nekompletna.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nije pronađen ispravan update direktorijum, proverite da li ste posleli relevantne fajlove.<br /><br />Vaša instalacija <strong>nije</strong> ažurna. Nadogradnja je dostupna za vašu verziju phpBB-a %1$s, posetite <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> da bi pribavili paket za nadogradnju sa verzije %2$s na verziju %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Vaša verzija je ažurna. Nema potrebe da pokrećete alat za nadogradnju. Ako želite da proverite integritet vaših fajlova pobrinite se da prvo pošaljete ispravne fajlove za nadogradnju.',
	'NO_UPDATE_INFO'				=> 'Informacija o nadograđenom fajlu nije nađena.',
	'NO_UPDATES_REQUIRED'			=> 'Nema obavezne nadogradnje',
	'NO_VISIBLE_CHANGES'			=> 'Nema vidljivih promena',
	'NOTICE'						=> 'Obaveštenje',
	'NUM_CONFLICTS'					=> 'Broj konflikta',

	'OLD_UPDATE_FILES'		=> 'Fajlovi za nadogradnju su zastareli. Nađeni fajlovi su za nadogradnju sa phpBB-a %1$s na phpBB %2$s ali je poslednja verzija phpBB-a %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Trenutni paket se nadograđuje na verziju',
	'PERFORM_DATABASE_UPDATE'			=> 'Izvrši nadogradnju baze',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Ispod ćete nanaći link za nadogradnju baze. Ovaj skript se mora posebno pokrenuti jer nadogradnja baze može dovesti do neočekivanog ponašanja ako ste prijavljeni. Nadogradnja baue može da potraje, zato vas molimo da ne zaustavljate izvršenje skripta iako naizgled deluje da se proces blokirao. Nakon što kliknete na link i nadogradnja se završi možete zatvoriti prozor.',
	'PREVIOUS_VERSION'					=> 'Prethodna verzija',
	'PROGRESS'							=> 'Progres',

	'RESULT'					=> 'Rezultat',
	'RUN_DATABASE_SCRIPT'		=> 'Nadogradi moju bazu',

	'SELECT_DIFF_MODE'			=> 'Izaberi mod različe',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Izaberite format preuzimanja arhive',
	'SELECT_FTP_SETTINGS'		=> 'Izaberite podešavanja FTP-a',
	'SHOW_DIFF_CONFLICT'		=> 'Prikaži razlike/konflikte',
	'SHOW_DIFF_FINAL'			=> 'Pokazi rezultujući fajl',
	'SHOW_DIFF_MODIFIED'		=> 'Prikaži spojene razlike',
	'SHOW_DIFF_NEW'				=> 'Prikaži sadržaj fajla',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Prikaži razliku',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Prikaži razlike',
	'SOME_QUERIES_FAILED'		=> 'Neki upiti su neuspešni, status i greške su prikazane ispod',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Zbog ovog verovatno ne treba da brinetet, nadogradnja će se nastaviti. Ako se ovaj proces ne izvrši trebalo bi da pogledate u help-u na našem forumu podrške. Pogledajte <a href="../docs/README.html">README</a> za detalje kako da potražite savet.',
	'STAGE_FILE_CHECK'			=> 'Proveri fajlove',
	'STAGE_UPDATE_DB'			=> 'Nadogradi bazu',
	'STAGE_UPDATE_FILES'		=> 'Nadogradi fajlove',
	'STAGE_VERSION_CHECK'		=> 'Provera verzije',
	'STATUS_CONFLICT'			=> 'Izmenjeni fajl proizvodi konflikte',
	'STATUS_MODIFIED'			=> 'Izmenjeni fajl',
	'STATUS_NEW'				=> 'Novi fajl',
	'STATUS_NEW_CONFLICT'		=> 'Konflikt novog fajla',
	'STATUS_NOT_MODIFIED'		=> 'Neizmenjen fajl',
	'STATUS_UP_TO_DATE'			=> 'Već ažuriran fajl',

	'UPDATE_COMPLETED'				=> 'Nadogradnja zavrešena',
	'UPDATE_DATABASE'				=> 'Nadogradi bazu',
	'UPDATE_DATABASE_EXPLAIN'		=> 'U sledećem koraku baza će biti nadograđena.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Nadograđujem šemu baze',
	'UPDATE_FILES'					=> 'Nadogradi fajlove',
	'UPDATE_FILES_NOTICE'			=> 'Proverite da li ste nadogradili i fajlove vašeg boarda, ovaj fajl samo nadograđuje vašu bazu.',
	'UPDATE_INSTALLATION'			=> 'Nadogradi phpBB Instalaciju',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Sa ovom opcijom, moguće je da nadogradite vašu phpBB instalaciju na poslednju verziju.<br />Tokom procesa svi vaši fajlovi će biti provereni za njihov integritet. U mogućnosti ste da pregledate sve razlike i fajlove pre nadogradnje.<br /><br />Nadogradnja samog fajla može se izvršiti na dva različita načina.</p><h2>Minimalna Nadogradnja</h2><p>Sa ovom nadogradnjom možete samo preuzeti vaš lični set izmenjenih fajlova da bi bili sigurni da ne izgubite modifikacije koje ste mođda uradili. Nakon preuzimanja ovog paketa potrebno je da ručno pošaljete fajlove na njihovu ispravnu poziciju u phpBB root direktorijumu. Kada to uradite, možete ponovo proveriti status fajla da bi provereili da li ste pomerili fajlove u njihove tačne lokacije. Ako je sve ispravno ažurirano bićete prosleđeni na ažuriranje baze.</p><h2>Automatska nadogradnja sa FTP-om</h2><p>Ovaj metod je sličan prvom ali bez potrebe da preuzimate promenjene fajlove i šaljete ih na vaš server. Ovo će biti urađeno umesto vas. Da bi koristili ovaj metod potrebno je da znate detalje o vašem FTP nalogu jer će vam oni biti zatraženi. Kada završite proceduru bićete redirektovani na ažuriranje fajlova gde možete proveriti da li je sve ažurirano korektno. Ako jeste, bićete prosleđeni na ažuriranje baze.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Obaveštenje o izdanju</h1>

		<p>Molimo vas da pričitate <a href="%1$s" title="%1$s">obaveštenje o izdanju za poslednju verziju</a> pre nego što krenete na proces nadogradnje, jer sadrži korisne informacije. Takođe sadrži i potpune linkove za preuzimanje kao i log sa izmenama.</p>

		<br />

		<h1>Kako da nadogradite vašu instalaciju</h1>

		<p>Preporučeni način nadogradnje zahteva samo sledeće korake:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Idite na <a href="http://www.phpbb.com/downloads.php" title="http://www.phpbb.com/downloads.php">phpBB.com starnicu za preuzimanje</a> ai preuzmite ispravnu arhivu. Ako niste sigurni mođete <a href="%2$s" title="%2$s">preuzeti ispravnu arhivu direktno</a> kao zip fajl.<br /><br /></li>
			<li>Raspaktujete arhivu<br /><br /></li>
			<li>Pošaljete kompletan nekompresovani install folder u vaš phpBB root direktorijum (gde je i vaš config.php fajl).<br /><br /></li>
		</ul>

		<p>Kada to uradite, vaš board će biti nedostupan za obične korisnike.<br /><br />
		<strong><a href="%2$s" title="%2$s">Sada započnite proces nadogradnje tako što ćete usmeriti vaš browser na instalacioni direktorijum</a>.</strong><br />
		<br />
		Tada ćemo vas provesti kroz proces nadogradnje. Nadogradnja je kompletna kada je skripta za nadogradnju baze uspešno izvršena - to je poslednji korakt u procesu nadogradnje.
		</p>

	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Detektovana nekompletna nadogradnja</h1>

		<p>phpBB je detektovao nekompletnu automatsku nadogradnju. Proverite da li pratili svaki korak. Ispod ćete naći link ponovo, ili idite direktno u vaš istall direktorijum.</p>
	',
	'UPDATE_METHOD'					=> 'Metod nadogradnje',
	'UPDATE_METHOD_EXPLAIN'			=> 'Sada možete izabrati želljeni metod nadogradnje. Korišćenjem FTP Uploa-a dobićete formu gde trebate da unesete detalje vašeg FTP naloga. Sa ovim metodom fajlovi će biti automatski pomereni na nove lokacije i bekapi starih fajlova će biti kreirani tako što će im se dodati nastavak .bak na kraju naziva fajla. Ako izaberete da preuzmete izmenjene fajlove možete ih raspakovati i poslati na njihovo mesto kasnije.',
	'UPDATE_REQUIRES_FILE'			=> 'Proces nadogradnje zahteva da sledeći fajl bude prisutan: %s',
	'UPDATE_SUCCESS'				=> 'Nadogradnja je uspešna',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Uspešno su nadograđeni svi fajlovi. Sledeći korak proverava sve fajlove ponovo da bi bili sigurni da su fajlovi ispravno nadogradjeni.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Nadograšujem verziju i optimizujem tabele',
	'UPDATING_DATA'					=> 'Ažuriram podatke',
	'UPDATING_TO_LATEST_STABLE'		=> 'Nadograđujem bazu na poslednju stabilnu verziju',
	'UPDATED_VERSION'				=> 'Nadograđena verzija',
	'UPLOAD_METHOD'					=> 'Metod nadogradnje',

	'UPDATE_DB_SUCCESS'				=> 'Nadogradnja baze je uspešna.',
	'UPGRADE_INSTRUCTIONS'			=> 'Nova opcija <strong>%1$s</strong> je dostupna. Molimo Vas da pročitate <a href="%2$s" title="%2$s"><strong>objavu</strong></a> da bi saznali [ta ima da ponudi, i kako da se nadogradite.',
	'USER_ACTIVE'					=> 'Activan korisnik',
	'USER_INACTIVE'					=> 'Neaktivan korisnik',
	
	'VERSION_CHECK'				=> 'Provera verzije',
	'VERSION_CHECK_EXPLAIN'		=> 'Proverava da li je trenutna verzija phpBB-a ažurna.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Vaša verzija phpBB-a nije ažurna. Molimo vas da nastavite sa procesom nadogradnje.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Vaša verzija phpBB-a nije ažurna.<br />Ispod ćete naći link ka obaveštenju o izdanju za poslednju verziju kao i instrukcije kako da izvršite ovu nadogradnju.',
	'VERSION_UP_TO_DATE'		=> 'Vaša instalacija je ažurna, nema dostupnih nadogradnji za vašu verziju phpBB-a. Možda svakako želite da izvršite proveru fajlova.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Vaša instalacija je ažurna, nema dostupnih nadogradnji za vašu verziju phpBB-a. Nema potrebe da nadogradite vašu instalaciju.',
	'VIEWING_FILE_CONTENTS'		=> 'Pregled sadržaja fajla',
	'VIEWING_FILE_DIFF'			=> 'Pregled razlika u fajlovima',

	'WRONG_INFO_FILE_FORMAT'	=> 'Pogrešan format informacionog fajla',
));
	
	// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Hvala, Uprava',
	'CONFIG_SITE_DESC'				=> 'Kratak tekst za opis vašeg foruma',
	'CONFIG_SITENAME'				=> 'vašdomen.com',

	'DEFAULT_INSTALL_POST'			=> 'Ovo je primer posta u vašoj phpBB3 instalaciji. Možete obrisati ovaj post, ovu temu ili čak ceo forum ako želite jer izgleda da sve radi!',

	'EXT_GROUP_ARCHIVES'			=> 'Arhive',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenti',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Fajlovi za preuzimanje',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash fajlovi',
	'EXT_GROUP_IMAGES'				=> 'Slike',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime fajl',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real fajl',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Moja prva kategorija',
	'FORUMS_TEST_FORUM_DESC'		=> 'Ovo je samo test forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Test Forum 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Admin sajta',
	'REPORT_WAREZ'					=> 'Post sadrži linkove ka ilegalnom ili piratskom softveru.',
	'REPORT_SPAM'					=> 'Prijavljen post ima jedinu svrhu da reklamira neki sajt ili neki proizvod.',
	'REPORT_OFF_TOPIC'				=> 'Prijavljeni post je promašena tema.',
	'REPORT_OTHER'					=> 'Prijavljen post se ne uklapa ni u jednu drugu kategoriju, molimo vas da koristite polje da dalje informacije.',

	'SMILIES_ARROW'					=> 'Strelica',
	'SMILIES_CONFUSED'				=> 'Zbunjen',
	'SMILIES_COOL'					=> 'Kul',
	'SMILIES_CRYING'				=> 'Plače ili je veoma tužan',
	'SMILIES_EMARRASSED'			=> 'Posramljen',
	'SMILIES_EVIL'					=> 'Zao ili jako besan',
	'SMILIES_EXCLAMATION'			=> 'Uzvik',
	'SMILIES_GEEK'					=> 'Štreber',
	'SMILIES_IDEA'					=> 'Ideja',
	'SMILIES_LAUGHING'				=> 'Smeh',
	'SMILIES_MAD'					=> 'Zao',
	'SMILIES_MR_GREEN'				=> 'Gospodin Zeleni',
	'SMILIES_NEUTRAL'				=> 'Neutralan',
	'SMILIES_QUESTION'				=> 'Čuđenje',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Kolutanje očima',
	'SMILIES_SAD'					=> 'Tužan',
	'SMILIES_SHOCKED'				=> 'Šokiran',
	'SMILIES_SMILE'					=> 'Smeh',
	'SMILIES_SURPRISED'				=> 'Izneneđen',
	'SMILIES_TWISTED_EVIL'			=> 'Skriveno zlo',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Veoma srećan',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'Dobrodošli na phpBB3',
));

?>