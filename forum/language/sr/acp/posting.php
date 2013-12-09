<?php
/** 
*
* posting [Serbian]
*
* @package language
* @version $Id: posting.php,v 1.24 2006/11/19 14:56:06 davidmj Exp $
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBKod je specijalna implementacija HTML-a nudeći veću kontrolu šta se i kako prikazuje. Sa ove stranice možete dodati, ikloniti ili izmeniti BBKodove',
	'ADD_BBCODE'				=> 'Dodaj novi BBKod',

	'BBCODE_ADDED'				=> 'BBKod je uspešno dodat.',
	'BBCODE_EDITED'				=> 'BBKod je uspešno izmenjen.',
	'BBCODE_DANGER'      =>  'BBKod koji pokušavate da dodate koristi {TEXT} unutar HTML atributa. Ovo je moguća sigurnosna XSS ranjivost. Pokušajte da koristite restriktivnije {SIMPLETEXT} ili {INTTEXT} tipove. Nastavite samo ukoliko ste sigurni da ste razumeli rizike i odlučili da i dalje koristite {TEXT} kao apsolutno neizbežno.',
  'BBCODE_DANGER_PROCEED' =>  'Nastavljam',
	'BBCODE_NOT_EXIST'			=> 'BBKod koji ste izabrali ne postoji.',
	'BBCODE_HELPLINE'			=> 'Pomoćna linija',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Ovo polje sadrži mouseover tekst BBKoda',
	'BBCODE_HELPLINE_TEXT'		=> 'Tekst pomoćne linije',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Pomoćna linija koju ste uneli je predugačka.',
	'BBCODE_INVALID_TAG_NAME'	=> 'Naziv BBKod taga koji ste izabrali već postoji.',
	'BBCODE_INVALID'			=> 'Vaš BBKod je konstruisan na nepravilan način.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Vaš proizvoljni BBKod tag mora sadržati i otvarajući i zatvarajući tag.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'Definicija taga kojeg ste uneli je predugačka, molimo vas da skratite definiciju taga.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definicija taga kojeg ste uneli je predugačka, molimo vas da skratite definiciju taga.',
	'BBCODE_USAGE'				=> 'BBKod upotreba',
	'BBCODE_USAGE_EXAMPLE'		=> '[colour={COLOR}]{TEXT}[/colour]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Ovde definišete kako da koristite BBKod. Tamenite sve promenljive unose odgovarajućim (%spogledajte ispod%s)',

	'EXAMPLE'						=> 'Primer:',
	'EXAMPLES'						=> 'Primeri:',

	'HTML_REPLACEMENT'				=> 'HTML zamena',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;font color="{COLOR}"&gt;{TEXT}&lt;/font&gt;<br /><br />&lt;font face="{TEXT1}"&gt;{TEXT2}&lt;/font&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Ovde definišete podrazumevanu HTML zamenu (svaki šablon može iamti svoju sopstvenu HTML zamenu). Ne zaboravite da vratite simbole koje ste koristili iznad!',

	'TOKEN'					=> 'Simbol',
	'TOKENS'				=> 'Simboli',
	'TOKENS_EXPLAIN'		=> 'Simboli su držači za unos korisnika. Unos će biti proveren samo ako se poklapa sa odgovarajućom definicijom. Ako je potrebno, možete ih numerisati tako što ćete dodatibroj kao poslednji karakterizmeđu zagrada, npr. {KORISNICKOIME1}, {KORISNICKOIME2}.<br /><br />Dodatno, možete koristiti bilo koji od jezičkih stringova prisutan u vašem language/ direktorijumu kao npr.: {L_<em>&lt;stringname&gt;</em>} gde je <em>&lt;stringname&gt;</em> nayiv prevedenog stringa koji želite da dodate. Na primer, {L_WROTE} će biti prikazano kao "wrote" ili kao njegov prevod u zavisnosti od korisnikovog lokalnog podešavanja',
	'TOKEN_DEFINITION'		=> 'Šta može da bude?',
	'TOO_MANY_BBCODES'		=> 'Ne možete više kreirati BBKodovoe. Molimo vas da uklonite jedan ili više BBKOdova i pokušate ponovo.',
	'TOO_MANY_SMILIES'    => 'Dostigli ste ograničenje od %d smajlija.',

	'tokens'	=>	array(
		'TEXT'			=> 'Bilo kakav tekst, uključujući i strane karaktere, brojeve itd…',
		'NUMBER'		=> 'Bilo kakva serija brojeva',
		'EMAIL'			=> 'Ispravna email adresa',
		'URL'			=> 'Ispravan URL koristeći bilo koji protokol (http, ftp, itd… ne može se koristiti za javascript). Ako ništa nije dodeljeno, "http://" se podrazumeva',
		'LOCAL_URL'		=> 'Lokalni URL. URL mora biti relativan na stranicu sa temom i ne može sadržati naziv servera ili protokol',
		'COLOR'			=> 'HTML boja, može biti bilo u numeričkom obliku <samp>#FF1234</samp> ili <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS cboja</a> kao <samp>fuchsia</samp> ili <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Sa ove stranice možete dodati, ukloniti i izmeniti ikonice koje korisnici mogu ubacivati u svoje teme ili postove. Ikonice su generelno prikazane pored naziva tema la listi foruma, ili subjekta posta u listi tema. Možete takođe instalirati i kreirati nove pakete ikonica.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smajliji ili emotikoni su obično male, ponekada animirane sličice koje se koriste da opišu emociju ili osećanje. Sa ove stranice možete dodati, ukloniti i izmeniti smajlije koje korisnici mogu da koriste u njihovim postovima i privatnim porukama. Možete takođe instalirati i kreirati nove pakete smajlija.',
	'ADD_SMILIES'			=> 'Dodaj više smajlija',
	'ADD_SMILEY_CODE'		=> 'Unesi dodatni kod smajlija',
	'ADD_ICONS'				=> 'Dodaj više ikonica',
	'AFTER_ICONS'			=> 'Posle %s',
	'AFTER_SMILIES'			=> 'Posle %s',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Trenutne ikonice',
	'CURRENT_ICONS_EXPLAIN'		=> 'Izaberite šta želite da uradite sa trenutno instaliranim ikonicama',
	'CURRENT_SMILIES'			=> 'Postojeći smajliji',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Izaberite šta želite da uradite sa trenutno instaliranim smajlijima',

	'DISPLAY_ON_POSTING'	=> 'Prikaži pri pisanju posta',
	'DISPLAY_POSTING'  	=> 'Na stranisi sa postovima',
	'DISPLAY_POSTING_NO'	=> 'Ne na strani sa postovima',

	'EDIT_ICONS'				=> 'Izmeni ikonice',
	'EDIT_SMILIES'				=> 'Izmeni smajlije',
	'EMOTION'					=> 'Emocija',
	'EXPORT_ICONS'				=> 'Izvezi i preuzmi icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKlikom na ovaj link, konfiguracija za vaše instalirane ikonice će biti spakovana u <samp>icons.pak</samp> koji kada se jednom preuzme može da se koristi za kreiranje <samp>.zip</samp> ili <samp>.tgz</samp> fajla koji sadrži sve vaše ikonice plus ovaj <samp>icons.pak</samp> konfiguracioni fajl%s.',
	'EXPORT_SMILIES'			=> 'Izvezi i preuzmi smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKlikom na ovaj link, konfiguracija za vaše instalirane smajlije će biti spakovana u <samp>smilies.pak</samp> koji kada se jednom preuzme može da se koristi za kreiranje <samp>.zip</samp> ili <samp>.tgz</samp> fajla koji sadrži sve vaše smajlije plus ovaj <samp>smilies.pak</samp> konfiguracioni fajl%s.',

	'FIRST'			=> 'Prvi',

	'ICONS_ADD'				=> 'Dodaj novu ikonicu',
	'ICONS_ADDED'			=> 'Ikonica je uspešno dodata.',
	'ICONS_CONFIG'			=> 'Konfiguracija ikonica',
	'ICONS_DELETED'			=> 'Ikonica je uspešno uklonjena.',
	'ICONS_EDIT'			=> 'Izmeni ikonicu',
	'ICONS_EDITED'			=> 'Ikonica je uspešno izmenjena.',
	'ICONS_HEIGHT'			=> 'Visina ikonice',
	'ICONS_IMAGE'			=> 'Slika ikonice',
	'ICONS_IMPORTED'		=> 'Paket ikonica je uspešno instaliran.',
	'ICONS_IMPORT_SUCCESS'	=> 'Paket ikonica je uspešno uvežen.',
	'ICONS_LOCATION'		=> 'Lokacija ikonica',
	'ICON_NONE_ADDED'		=> 'Nije dodata nijedna ikonica.',
	'ICONS_NONE_ADDED'  	=> 'Nije dodata nijedna ikonica.',
	'ICONS_ONE_ADDED' 	=> 'Ikonica je uspešno dodata.',
	'ICONS_ONE_EDITED' 	=> 'Ikonica je uspešno ažurirana.',
	'ICONS_NONE_EDITED'	=> 'Nijedna ikonica nije izmenjena.',
	'ICON_NONE_EDITED'	=> 'Nijedna ikonica nije ažurirana.',
	'ICONS_NOT_DISPLAYED'	=> 'Sledeće ikonice se ne prikazuju na stranici za pisanje posta',
	'ICONS_ORDER'			=> 'Redosled ikonica',
	'ICONS_URL'				=> 'Fajl ikonice',
	'ICONS_WIDTH'			=> 'Širina ikonice',
	'IMPORT_ICONS'			=> 'Instaliraj paket ikonica',
	'IMPORT_SMILIES'		=> 'Instaliraj paket smajlija',

	'KEEP_ALL'			=> 'Zadrži sve',

	'MASS_ADD_SMILIES'	=> 'Dodaj više smajlija',

	'NO_ICONS_ADD'		=> 'Nema dostupnih ikonica za dodavanje.',
	'NO_ICONS_EDIT'		=> 'Nema dostupnih ikonica za izmenu.',
	'NO_ICONS_EXPORT'	=> 'Nemate ikonice sa kojima bi kreirali paket.',
	'NO_ICONS_PAK'		=> 'Nije pronađen paket sa ikonicama.',
	'NO_SMILIES_ADD'	=> 'Nema dostupnih smajlija za dodavanje.',
	'NO_SMILIES_EDIT'	=> 'Nema dostupnih smajlija za izmenu.',
	'NO_SMILIES_EXPORT'	=> 'Nemate smajlije sa kojima bi kreirali paket.',
	'NO_SMILIES_PAK'	=> 'Nije pronađen paket sa smajlijima.',

	'PAK_FILE_NOT_READABLE'		=> 'Ne mogu da pročitam <samp>.pak</samp> fajl.',

	'REPLACE_MATCHES'	=> 'Zameni poklapanje',

	'SELECT_PACKAGE'			=> 'Izaberite fajl paketa',
	'SMILIES_ADD'				=> 'Dodaj novi smajli',
	'SMILIES_ADDED'				=> 'Smajli je uspešno dodat.',
	'SMILIES_NONE_ADDED'	=> 'Nijedan smajli nije doda.',
	'SMILIES_ONE_ADDED' 	=> 'Smajli je uspešno dodat.',
	'SMILIES_NONE_EDITED'	=> 'Nijedan smajli nije ažuriran.',
	'SMILIES_ONE_EDITED'	=> 'Smajli je uspešno ažuriran.',
	'SMILIES_CODE'				=> 'Kod smajlija',
	'SMILIES_CONFIG'			=> 'Konfiguracija smajlija',
	'SMILIES_DELETED'			=> 'Smajli je uspešno uklonjen.',
	'SMILIES_EDIT'				=> 'Izmeni smajli',
	'SMILIES_EDITED'			=> 'Smajli je uspešno izmenjen.',
	'SMILIES_EMOTION'			=> 'Emocija',
	'SMILIES_HEIGHT'			=> 'Visina smajlija',
	'SMILIES_IMAGE'				=> 'Slika smajlija',
	'SMILIES_IMPORTED'			=> 'Paket smajlija je uspešno instaliran.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Paket smajlija je uspešno uvežen.',
	'SMILIES_LOCATION'			=> 'Lokacija smajlija',
	'SMILIES_NOT_DISPLAYED'		=> 'Sledeći smajliji neće biti prikazani na stranici za pisanje posta',
	'SMILIE_NO_CODE'			=> 'Smajli “%s” je ignorisan, jer nije unet kod.',
	'SMILIE_NO_EMOTION'			=> 'Smajli “%s” je ignorisan, jer nije unea emocija.',
	'SMILIES_ORDER'				=> 'Redosled smajlija',
	'SMILIES_URL'				=> 'Fajl smajlija',
	'SMILIES_WIDTH'				=> 'Širina smajlija',
	'SMILIE_NO_FILE'			=> 'Smajli “%s” se ignoriše jer taj fajl ne postoji.',

	'WRONG_PAK_TYPE'	=> 'Izabrani paket ne sadrži odgovarajuće podatke.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Sa ovog kontrolnog panela možete dodavati, menjati i uklanjati reči koje će biti automatski cenzurisane na forumima. Takođe, korisnici neće moći da se registruju sa korisničkim imenoom koje sadrži te reči. Džokeri (*) se prihvataju u rečima, npr. *test* će prihvatiti atest, test* će prihvatiti testiranje itd.',
	'ADD_WORD'				=> 'Dodaj novu reč',

	'EDIT_WORD'		=> 'Izmeni cenzuru reči',
	'ENTER_WORD'	=> 'Morate uneti reč i njnu zamenu.',

	'NO_WORD'	=> 'Nijedna reč nije izabrana za izmenu.',

	'REPLACEMENT'	=> 'Zamena',

	'UPDATE_WORD'	=> 'Ažutiraj cenzuru reči',

	'WORD'				=> 'Reč',
	'WORD_ADDED'		=> 'Cenzura reči je uspešno dodata.',
	'WORD_REMOVED'		=> 'Izabrana cenzura je uspešno uklonjena.',
	'WORD_UPDATED'		=> 'Izabrana cenzura je uspešno izmenjena.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Koristeći ovu formu možete dodati, izmeniti i brisati činove. Možete takođe kreirati proizvoljne činove koji mogu biti primenjeni na korisnika putem menadžmenta.',
	'ADD_RANK'				=> 'Dodaj novi čin',

	'MUST_SELECT_RANK'		=> 'Morate izabrati čin.',
	
	'NO_ASSIGNED_RANK'		=> 'Nije dodeljen specijalni čin.',
	'NO_RANK_TITLE'			=> 'Niste uneli nayiv čina.',
	'NO_UPDATE_RANKS'		=> 'Čin je uspešno obrisan. U svakom slučaju korisnički nalozi koji imaju ovaj čin nisu ažurirani. Moraćete da ručno resetujete čin za te naloge.',

	'RANK_ADDED'			=> 'Čin je uspešno dodat.',
	'RANK_IMAGE'			=> 'Slika čina',
	'RANK_IMAGE_EXPLAIN'	=> 'Ovo koristite da bi definisali malu sličicu za ovaj čin. Putanja je relativna ka root phpBB direktorijumu.',
	'RANK_IMAGE_IN_USE'  =>  '(U upotrebi)',
	'RANK_MINIMUM'			=> 'Minimum postova',
	'RANK_REMOVED'			=> 'Čin je uspešno obrisan.',
	'RANK_SPECIAL'			=> 'Postavi kao specijalni čin',
	'RANK_TITLE'			=> 'Naziv čina',
	'RANK_UPDATED'			=> 'Čin je uspešno izmenjen.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Ovde možete kontrolisati korisnička imena koja neće biti moguća za korišćenje.  Možete koristiti džoker u zabranjenim korisničkim imenima. Znajte da nećete moći da odredite korisničko ime koje je već registrovano, moraćete prvo da obrišete to korisničko ime a tek onda da ga zabranite',
	'ADD_DISALLOW_EXPLAIN'	=> 'Možete zabraniti korisničko ime koristeći džoker * da zamenite bilo koji karakter',
	'ADD_DISALLOW_TITLE'	=> 'Dodaj zabranjeno korisničko ime',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Možete ukloniti zabranjeno korisničko ime tako što ćete izabrati korisničko ime sa ove liste i onda kliknuti na Submit',
	'DELETE_DISALLOW_TITLE'		=> 'Ukloni zabranjeno korisničko ime',
	'DISALLOWED_ALREADY'		=> 'Ime koje ste uneli ne može biti zabranjeno. Ili već postoji u listi, postoji u listi cenzurisanih reči, ili to ime već postoji.',
	'DISALLOWED_DELETED'		=> 'Zabranjeno korisničko ime je uspešno uklonjeno.',
	'DISALLOW_SUCCESSFUL'		=> 'Zabranjeno korisničko ime je uspešno dodato.',

	'NO_DISALLOWED'				=> 'Nema zabranjenih korisničkih imena',
	'NO_USERNAME_SPECIFIED'		=> 'Niste izabrali ili uneli korisničko ime.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Ovde možete upravljati razlozima koji se koriste u izveštajima i porukama za odbijanje kada se zabranjuju postovi. Postoji podrazumevani razlog (obeležen sa *) koji ne možete da uklonite, ovaj razlog se normalno koristi za proizvoljne poruke ako ne odgovara ni jedan razlog.',
	'ADD_NEW_REASON'		=> 'Dodaj novi razlog',
	'AVAILABLE_TITLES'		=> 'Dostupni nazivi lokalizovanih razloga',
	
	'IS_NOT_TRANSLATED'			=> 'Razlog <strong>nije</strong> lokalizovan.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Razlog <strong>nije</strong> lokalizovan. Ako želite da priložite lokalizovanu formu, unesite određeni ključ iz jezičkih fajlova.',
	'IS_TRANSLATED'				=> 'Razlog je lokalizovan.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Razlog je lokalizovan. Ako je naslov koji ste uneli ovde određen u jezičkom fajlu, koristi će se lokalizovani oblik naslova i opisa.',
	
	'NO_REASON'					=> 'Razlog nije pronađen.',
	'NO_REASON_INFO'			=> 'Morate uneti naslov i opis za ovaj razlog.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Niste u mogućnosti da uklonite podrazumevani razlog "Ostali".',

	'REASON_ADD'				=> 'Dodaj razlog za izveštaj/odbijanje',
	'REASON_ADDED'				=> 'Razlog za izveštaj/odbijanje je uspešno dodat.',
	'REASON_ALREADY_EXIST'		=> 'Razlog sa ovim naslovom već postoji, molimo vas da unesete drugačiji naslov.',
	'REASON_DESCRIPTION'		=> 'Opis razloga',
	'REASON_DESC_TRANSLATED'	=> 'Prikazani opis razloga',
	'REASON_EDIT'				=> 'Izmeni razlog za izveštaj/odbijanje',
	'REASON_EDIT_EXPLAIN'		=> 'Ovde možete da dodate ili izmenie razlog. Ako je razlog preveden onda se koristi lokalizovana forma umesto opisa unetog ovde.',
	'REASON_REMOVED'			=> 'Razlog za izveštaj/odbijanje je uspešno uklonjen.',
	'REASON_TITLE'				=> 'Naslov razloga',
	'REASON_TITLE_TRANSLATED'	=> 'Prikazan naslov razloga',
	'REASON_UPDATED'			=> 'Razlog za izveštaj/odbijanje je uspešno izmenjen.',

	'USED_IN_REPORTS'		=> 'Koristi se u izveštajima',
));

?>