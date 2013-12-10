<?php
/** 
*
* acp_permissions [Serbian]
*
* @package language
* @version $Id: permissions.php,v 1.18 2006/10/08 11:25:20 acydburn Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Dozvole su široko razgranate i grupisane u četiri glavne sekcije, i to:</p>

		<h2>Globalne dozvole</h2>
		<p>Koriste se za kontrolu pristupa n globalnom nivou i primenjuju se na ceo board. Dalje se dele na Dozvole korisnika, Dozvole grupa, Administratore i Globalne moderatore.</p>

		<h2>Dozvole bazirane na forumima</h2>
		<p>Koriste se za kontrolu pristupa These are used to control access on a per forum basis. They are further divided into Forum Permissions, Forum Moderators, Users Forum Permissions and Groups Forum Permissions.</p>

		<h2>Predefinisane dozvole</h2>
		<p>Koriste se za kreiranje različitih setova dozvola za različite tipove dozvola tako da ih kasnije možete dodeliti po principu setova. Podrazumevana pravila bi trebalo da pokrivaju administraciju boarda, kroz svaku od četiri ogranka, tako da možete dodavati i brisati pravila po potrebi.</p>

		<h2>Maske dozvola</h2>
		<p>Koriste se za pregled efektivnih dozvola dodeljenjih korisnicima, moderatorima (lokalnim i globalnim), administratorima ili forumima.</p>
	
		<br />

		<p>Za dalje informacije o podešavanju i upravljanu dozvolama na vašem phpBB3 forumu, pogledajte <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">odeljak 1.5 našeg uputstva za brz početak</a>.</p>
	',

	'ACL_NEVER'				=> 'Nikada',
	'ACL_SET'				=> 'Podešavanje dozvola',
	'ACL_SET_EXPLAIN'		=> 'Dozvole su bazirane na prostom <samp>DA</samp>/<samp>NE</samp> sistemu. Podešavanjem opcije na <samp>NIKADA</samp> za korisnika ili korisničku grupu nadjačaće bilo koju prethodno dodeljenu vrednost. Ako ne želite da dodelite vrednost za opciju za korisnika ili korisničku grupu izaberite <samp>NE</samp>. Ako su vrednosti za ovu opciju već negde dodeljene te vrednosti će biti korišćene, u protivnom se podrayumeva <samp>NIKADA</samp>. Svi objekti obeleženi (sa kvačicom ispred) će iskopirati set dozvola koje ste definisali.',
	'ACL_SETTING'			=> 'Vrednost',

	'ACL_TYPE_A_'			=> 'Dozvole administratora',
	'ACL_TYPE_F_'			=> 'Dozvole foruma',
	'ACL_TYPE_M_'			=> 'Dozvole moderatora',
	'ACL_TYPE_U_'			=> 'Dozvole korisnika',

	'ACL_TYPE_GLOBAL_A_'	=> 'Dozvole administratora',
	'ACL_TYPE_GLOBAL_U_'	=> 'Dozvole korisnika',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globalne dozvole moderatora',
	'ACL_TYPE_LOCAL_M_'		=> 'Dozvole moderatora foruma',
	'ACL_TYPE_LOCAL_F_'		=> 'Dozvole foruma',
	
	'ACL_NO'				=> 'Ne',
	'ACL_VIEW'				=> 'Pregled dozvola',
	'ACL_VIEW_EXPLAIN'		=> 'Ovde možete pogledati dozvole koje ima krisnik/grupa. Crveni kvadrat označava da korisnik/grupa nema dozvolu, dok zeleni kvadrat označava da korisnik/grupa ima dozvolu.',
	'ACL_YES'				=> 'Da',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Ovde možete dodeliti prava administratora korisnicima ili grupama. Svi korisnici sa admin dozvolama mogu videti administracioni panel.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Ovde možete dodeliti korisnike i grupe kao moderatore foruma. Da bi korisnicima dodelili pristup forumima, globalna prava moderatora ili administratora molimo vas da koristite određenu stranicu predviđenu za to.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Ovde možete izmeniti koji korisnici i grupe mogu pristupiti kojim forumima. Da dodelite moderatore ili definišete administratore molimo vas da koristite određenu stranicu predviđenu za to.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN' =>  'Ovde možete kopirati dozvole foruma sa jednog na drugi ili više drugih foruma.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Ovde možete dodeliti globalna prava moderatora korisnicima ili grupama. Ovi moderatori su kao i obični moderatori osim što imaju pristum svim forumima na vašem boardu.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ovde možete dodeliti grupama dozvole foruma.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Ovde možete dodeliti globalne dozvole grupama - dozvole korisnika, globalne dozvole moderatora a dozvole administratora. Dozvole korisnika uključuju mogućnosti kao što su korišćenje avatara, slanje privatnih poruka itd. Globalne dozvole moderatora su blabla, administrativne dozvole su blabla. Individualne dozvole korisnika bi trebalo menjati samo u izuzetnim slučajevima, a poželjno je stavljane korisnika u grupe i dodeljivanje grupnih dozvola.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Ovde možete upravljati pravila za dozvole administratora. Pravila su efektivne dozvole, ako izmenite pravilo na stavke koje imaju ovo pravilo, na njih će se takođe primeniti ove dozvole.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Ovde možete upravljati pravilima za dozvole foruma. Pravila su efektivne dozvole, ako izmenite pravilo na stavke koje imaju ovo pravilo, na njih će se takođe primeniti ove dozvole.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Ovde možete upravljati pravilima za dozvole moderatora. Pravila su efektivne dozvole, ako izmenite pravilo na stavke koje imaju ovo pravilo, na njih će se takođe primeniti ove dozvole.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Ovde možete upravljati pravilima za dozvole korisnika. Pravila su efektivne dozvole, ako izmenite pravilo na stavke koje imaju ovo pravilo, na njih će se takođe primeniti ove dozvole.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ovde možete dodeliti pravila foruma korisnicima.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Ovde možete dodeliti globalne dozvole korisnicima - dozvole korisnika, globalne dozvole moderatora i dozvole administratora. Dozole korisnika uključuju mogućnosti kao korišćenje avatara, slanje privatnih poruka itd. Globalne dozvole moderatora su blabla, dozvole administratora su blabla. Da izmenite ova podešavanja za veliki broj korisnika, sistem grupnih dozvola je poželjan metod. Dozvole korisnika bi trebalo menjati samo u određenim retkim slučajevima, a poželjno je korisnike stavljati u grupe i dodeliti dozvole grupi.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Ovde možete pogledati efektivne dozvole administratora dodeljene izabranim korisnicima/grupama',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Ovde možete pogledati globalne dozvole moderatora dodeljene izabranim korisnicima/grupama',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ovde možete pogledati dozvole foruma dodeljene izabranim korisnicima/grupama i forumima',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Ovde mođete pogledati dozvole moderatora foruma dodeljene izabranim korisnicima/grupama i forumima',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Ovde možete pogledati efektivne dozvole korisnika dodeljene izabranim korisnicima/grupama',

	'ADD_GROUPS'				=> 'Dodaj grupe',
	'ADD_PERMISSIONS'			=> 'Dodaj dozvole',
	'ADD_USERS'					=> 'Dodaj korisnike',
	'ADVANCED_PERMISSIONS'		=> 'Napredne dozvole',
	'ALL_GROUPS'				=> 'Izaberi sve grupe',
	'ALL_NEVER'					=> 'Sve <samp>NIKADA</samp>',
	'ALL_NO'					=> 'Sve <samp>NE</samp>',
	'ALL_USERS'					=> 'Izaberi sve korisnike',
	'ALL_YES'					=> 'Sve <samp>DA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Primeni sve dozvole',
	'APPLY_PERMISSIONS'			=> 'Primeni dozvole',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Dozvole i pravilo definisano za ovu stavkut će biti primenjeno samo na nju i sve obeležene stavke.',
	'AUTH_UPDATED'				=> 'Dozvole su ažurirane.',

	'COPY_PERMISSIONS_CONFIRM'   =>  'Da li ste sigurni da želite da izvršite ovu operaciju? Znajte da ćete ovim obrisati sve postojeće dozvole za izabrane stavke.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'  =>  'Izvorni forum sa koga želite da iskopirate dozvole.',
  'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'   =>  'Odredišni forumi na koje želite da primenite dozvole.',
  'COPY_PERMISSIONS_FROM'   =>  'Kopiraj dozvole od',
  'COPY_PERMISSIONS_TO'   =>  'Primeni dozvole na',
  'CREATE_ROLE'				=> 'Napravi pravilo',
	'CREATE_ROLE_FROM'			=> 'Iskoristi podešavanja od…',
	'CUSTOM'					=> 'Proizvoljno…',

	'DEFAULT'					=> 'Podrazumevano',
	'DELETE_ROLE'				=> 'Obriši pravilo',
	'DELETE_ROLE_CONFIRM'		=> 'Da li ste sigurni da želite da uklonite ovo pravilo? Stavke koje imaju dodeljeno ovo pravilo <strong>neće</strong> izgubiti njihova podešavanja.',
	'DISPLAY_ROLE_ITEMS'		=> 'Pogledaj stavke koje koriste ovo pravilo',

	'EDIT_PERMISSIONS'			=> 'Izmena dozvola',
	'EDIT_ROLE'					=> 'Izmena pravila',

	'GROUPS_NOT_ASSIGNED'		=> 'Nema grupa kojima je dodeljeno ovo pravilo',

	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Mođete izabrati više od jednog foruma',
	'LOOK_UP_GROUP'				=> 'Potraži korisničku grupu',
	'LOOK_UP_USER'				=> 'Potraži korisnika',

	'MANAGE_GROUPS'		=> 'Rad sa grupama',
	'MANAGE_USERS'		=> 'Rad sa korisnicima',

	'NO_AUTH_SETTING_FOUND'		=> 'Dozvole nisu definisane.',
	'NO_ROLE_ASSIGNED'			=> 'Nema dodeljenog pravila…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Podešavanje ovog pravila ne menja dozvole na desnoj strani. Ako želite da uklonite sve dozvole, koristite “Sve <samp>NE</samp>” link.',
	'NO_ROLE_AVAILABLE'			=> 'Nema pravila',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Molimo vas da unesete naziv pravila.',
	'NO_ROLE_SELECTED'			=> 'Pravilo nije pronađeno.',
	'NO_USER_GROUP_SELECTED'	=> 'Niste izabrali nijednog korisnika ili grupu.',

	'ONLY_FORUM_DEFINED'	=> 'Definisali ste samo furume u vašem izboru. Molimo vas da takože izaberete najmanje jednog korisnika ili grupu.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Dozvole i pravila će takođe biti primenjena na obeležene objekte',
	'PLUS_SUBFORUMS'				=> '+Podforumi',

	'REMOVE_PERMISSIONS'			=> 'Ukloni dozvole',
	'REMOVE_ROLE'					=> 'Ukloni pravilo',
	'RESULTING_PERMISSION'			=> 'Rezultujuća dozvola',
	'ROLE'							=> 'Pravilo',
	'ROLE_ADD_SUCCESS'				=> 'Pravilo je uspešno dodato.',
	'ROLE_ASSIGNED_TO'				=> 'Korisnici/Grupe dodeljene u %s',
	'ROLE_DELETED'					=> 'Pravilo je uspešno uklonjeno.',
	'ROLE_DESCRIPTION'				=> 'Opis pravila',

	'ROLE_ADMIN_FORUM'			=> 'Forum Admin',
	'ROLE_ADMIN_FULL'			=> 'Potpuni Admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standardni Admin',
	'ROLE_ADMIN_USERGROUP'		=> 'Anmin korisnika i grupa',
	'ROLE_FORUM_BOT'			=> 'Bot pristup',
	'ROLE_FORUM_FULL'			=> 'Potpuni pristup',
	'ROLE_FORUM_LIMITED'		=> 'Ograničen pristup',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ograničen pristup + glasanja',
	'ROLE_FORUM_NEW_MEMBER'  =>  'Novo registrovani korisnik',
	'ROLE_FORUM_NOACCESS'		=> 'Nema pristup',
	'ROLE_FORUM_ONQUEUE'		=> 'Na čekanju moderatora',
	'ROLE_FORUM_POLLS'			=> 'Standardni pristup + glasanja',
	'ROLE_FORUM_READONLY'		=> 'Pristup samo za čitanje',
	'ROLE_FORUM_STANDARD'		=> 'Standardni pristup',
	'ROLE_MOD_FULL'				=> 'Potpuni moderator',
	'ROLE_MOD_QUEUE'			=> 'Čekanje moderatora',
	'ROLE_MOD_SIMPLE'			=> 'Jednostavan moderator',
	'ROLE_MOD_STANDARD'			=> 'Standardan moderator',
	'ROLE_USER_FULL'			=> 'Sve mogućnosti',
	'ROLE_USER_LIMITED'			=> 'Ograničene mogućnosti',
	'ROLE_USER_NEW_MEMBER' =>  'Novo registrovani korisnik',
	'ROLE_USER_NOAVATAR'		=> 'Bez avatara',
	'ROLE_USER_NOPM'			=> 'Bez privatnih poruka',
	'ROLE_USER_STANDARD'		=> 'Standardne mogućnosti',
	
	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Može pristupiti menadžmentu foruma i podešavanju dozvola foruma.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Ima pristup svim funkcijama administratora na ovom forumu. <br />Nije preporučljivo.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Ima pristup većini funkcija administratora ali nije u mogućnosti da koristi server ili alate vezane za sistem.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Može upravljati grupama i korisnicima: U mogućnosti da menja dozvole, podešavanja, određuje zabrane i činove.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ovo pavilo se preporučuje za botove i pretraživače.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Može koristiti sve mogućnosti foruma, uključujući pisanje obaveštenja i lepljivih postova. Može takođe ignorisati ograničenje flodovanja.<br />Nije preporučljivo za obične korisnike.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Može koristiti neke opcije foruma, ali ne može prikačiti fajlove ili da koristi ikonice za postove.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Kao i za Ograničen pristup ali može da kreira glasanja.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'  =>  'Pravilo za članove specijalne grupe novi registrovani korisnici; sadrži <samp>NIKADA</samp> dozvole da bi zaključali opcije novim korisnicima.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Ne može čak ni da pregleda niti da pristupi forumu.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Može koristiti većinu mogućnosti foruma uključujući prikačene fajlove, ali postovi i teme mora da odobri moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Kao Standardni pristup ali takođe mož da kreira glasanja.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Može da čita forum, ali ne može da kreira nove teme ili da odgovara na postove.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Može da koristi većinu opcija foruma uključujući prikačene fajlove, ali ne može da zakluča ili brišr sopstvene teme, i ne može da pravi glasanja.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Može da koristi sve opcije moderatora, uključujući i zabrane.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Može koristiti mogućnosti moderatora da ispravlja i menja postove, ali ništa više.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Može da koristi samo osnovne akcije sa temom. Ne može da šalje upozorenja ili da koristi opcije moderatora.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Može da koristi opcije moderatora, ali ne može da zabrani korisnike ili da menja autora poruke.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Mođe da koristi sve dostupne opcije korisnika foruma, iključujući i promenu korisničkog imena ili ignorisanje ograničenja flodovanja. <br />Nije preporučljivo.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Može pristupiti nekim od opcija korisnika. Prikačeni fajlovi, e-majlovi, ili instant poruke nisu dozvoljeni.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'  =>  'Pravilo za članove specijalne grupe novi registrovani korisnici; sadrži <samp>NIKADA</samp> dozvole da bi zaključali opcije novim korisnicima.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ima ograničen set opcija i nije u mogućnosti da koristi opciju avatara.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ima ograničen set opcija i nema opciju korišćenja privatnih poruka.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Može pristupiti većini, ali ne i svim opcijama korisnika. Ne može menjati korisničko ime ili ignorisati interval flodovanja na primer.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Možete uneti kratak opis šta radi pravilo ili čemu je namenjeno. Tekst koji ovde unesete bićeć takođe prikazan na ekranu sa dozvolama.',
	'ROLE_DESCRIPTION_LONG'			=> 'Opis pravila je predugačak, molimo vas da se ograničite na 4000 karaktera.',
	'ROLE_DETAILS'					=> 'Detalji pravila',
	'ROLE_EDIT_SUCCESS'				=> 'Pravilo je uspešno izmenjeno.',
	'ROLE_NAME'						=> 'Naziv pravila',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Pravilo zvano <strong>%s</strong> već postoji za izabrani tip dozvole.',
	'ROLE_NOT_ASSIGNED'				=> 'Pravilo još uvek nije dodeljeneo.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Izabrani forum(i) ne postoji.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Izabrana grupa(e) ne postoji.',
	'SELECTED_USER_NOT_EXIST'		=> 'Izabrani korisnik(ci) ne postoji.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forum koji ovde izaberete će sadržati sve podvorume u selekciji',
	'SELECT_ROLE'					=> 'Izaberite pravilo…',
	'SELECT_TYPE'					=> 'Izaberite tip',
	'SET_PERMISSIONS'				=> 'Postavi dozvole',
	'SET_ROLE_PERMISSIONS'			=> 'Postavite dozvole pravila',
	'SET_USERS_PERMISSIONS'			=> 'Postavite dozvole korisnika',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Postavite dozvole korisničkih foruma',

	'TRACE_DEFAULT'					=> 'Standardno, svaka dozvola je postavljena na <samp>NE</samp> (nepodešena). Znači, dozvola može miti prepisana drugačijim podešavanjem.',
	'TRACE_FOR'						=> 'Praćenje za',
	'TRACE_GLOBAL_SETTING'			=> '%s (globalno)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Dozvola ove grupe je postavljena na <samp>NIKADA</samp> kao ukupan rezultat tako da je stari rezultat zadržan.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Dozvola ove grupe za ovaj forum je podešena na <samp>NIKADA</samp> kao ukupan rezultat tako da je stari rezultat sačuvan.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Dozvola ove grupe za ovaj forum je postavljena na <samp>NIKADA</samp> što postaje nova ukupna vrednost jer još uvek nije podešena (podešena je na <samp>NE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Dozvola ove grupe za ovaj forum je postavljena na <samp>NIKADA</samp> što postaje nova ukupna vrednost jer još uvek nije podešeno (podesite na <samp>Ne</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Dozvola ove grupe je postavljena na <samp>NIKADA</samp> što prepisuje ukupno <samp>DA</samp> u <samp>NIKADA</samp> za ovog korisnika.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Dozvola ove grupe je postavljena na <samp>NIKADA</samp> što prepisuje ukupno <samp>DA</samp> na <samp>NIKADA</samp> za ovog korisnika.',
	'TRACE_GROUP_NO'				=> 'Ova dozvola je <samp>NE</samp> za ovu grupu tako da je stara ukupna vrednost zadržana.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Dozvola je <samp>NE</samp> za ovu grupu u ovom forumu tako da je stara ukupna vrednost zadržana.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Dozvola ove grupe je postavljena na <samp>DA</samp> ali ukupno <samp>NIKADA</samp> se ne može prepisati.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Dozvola ove grupe za ovaj forum je podešena na <samp>DA</samp> ali ukupno <samp>NIKADA</samp> se ne može prepisati.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Dozvola ove grupe je postavljena na <samp>DA</samp> što postaje nova ukupna vrednost jer još uvek nije podešena (podešena je na <samp>NE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Dozvola ove grupe za ovaj forum je postavljena na <samp>DA</samp> što postaje nova ukupna vrednost jer nije bila podešena (postavite na <samp>Ne</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Dozvola ove grupe je postavljena na <samp>DA</samp> i ukupna dozvoja je već podešena na <samp>DA</samp>, tako da je ukupni rezultat zadržan.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Dozvola ove grupe za ovaj forum je postavljena na <samp>DA</samp> i ukupna dozvola je već postavljena na <samp>DA</samp>, tako je je ukupni rezultat sačuvan.',
	'TRACE_PERMISSION'				=> 'Praćenje dozvole - %s',
	'TRACE_RESULT'					=> 'Prati rezultat',
	'TRACE_SETTING'					=> 'Praćenje podešavaja',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Dozvola korisnika nezavisno od foruma smatra se <samp>DA</samp> ali ukupna dozvola je već podešena na <samp>DA</samp>, tako da je ukupan rezultat sačuvan. %sPraćenje globalne dozvole%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Dozvola korisnika nezavisno od foruma smatra se <samp>DA</samp> što prepisuje trenutni lokalni rezultat <samp>NIKADA</samp>. %sPraćenje globalne dozvole%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Dozvola korisnika nezavisno od foruma smatra se <samp>NIKADA</samp> što ne utiče na lokalnu dozvolu. %sPraćenje globalne dozvole%s',
	
	'TRACE_USER_FOUNDER'					=> 'Korisnik ima podešen osnivački set, tako da su administratorske dozvole podešene na <samp>DA</samp> kao podrazumevane.',
	'TRACE_USER_KEPT'						=> 'Dozvola korisnika je <samp>NE</samp> tako da je stara ukupna vrednost sačuvana.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Dozvole korisnika za ovaj forum su postavljene na <samp>NE</samp> tako da je stara ukupna vrednost zadržana.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Dozvole korisnika je podešena na <samp>NIKADA</samp> i ukupna vrednost je podešena na <samp>NIKADA</samp>, tako da ništa nije promenjeno.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Dozvole korisnika za ovaj forum su postavljene na <samp>NIKADA</samp> i ukupna vrednost je postavljena na <samp>NIKADA</samp>, tako da ništa nije promenjeno.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Dozvola korisnika je podešena na <samp>NIKADA</samp> što postaje ukupna vrednost zato što je bila podešena na NE.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Dozvole korisnika za ovaj forum su postavljene na <samp>NIKADA</samp> što postaje ukupna vrednost jer je bila podešena na NE.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Dozvola korisnika je podešena na <samp>NIKADA</samp> i prepisuje prethodno <samp>DA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Dozvole korisnika za ovaj forum su podešene na <samp>NIKADA</samp> i prepisuje prethodno <samp>DA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Dozvola korisnika je <samp>NE</samp> i ukupna vrednost je bila podešena na NE tako da je podrazumevano <samp>NIKADA</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Dozvole korisnika za ovaj forum su podešene na <samp>NE</samp> i ukupna vrednost je podešena na NE tako da je podrazumevano <samp>NIKADA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Dozvola korisnika je podešena na <samp>DA</samp> ali ukupno <samp>NIKADA</samp> ne može biti prepisano.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Dozvole korisnika za ovaj forum su podešene na <samp>DA</samp> ali ukupno <samp>NIKADA</samp> ne može biti prepisano.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Dozvola korisnika je podešena na <samp>DA</samp> što postaje ukupna vrednost jer je bila podešena na <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Dozvole korisnika za ovaj forum su podešene na <samp>DA</samp> što postaje ukupna vrednost jer su bile podešene na <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Dozvola korisnika je podešena na <samp>DA</samp> i ukupna vrednost je podešena na <samp>DA</samp>, tako da ništa nije promenjeno.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Dozvole korisnika za ovaj forum su podešene na <samp>DA</samp> i ukupna vrednost je podešena na <samp>DA</samp>, tako da se ništa ne menja.',
	'TRACE_WHO'								=> 'Ko',
	'TRACE_TOTAL'							=> 'Ukupno',

	'USERS_NOT_ASSIGNED'			=> 'Nijedom korisniku nije dodeljeno ovo pravilo',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'je član sledećih podrazumevanih grupa',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'je član sledećih proizvoljnih grupa',

	'VIEW_ASSIGNED_ITEMS'	=> 'Pregled dodeljenih stavki',
	'VIEW_LOCAL_PERMS'		=> 'Lokalne dozvole',
	'VIEW_GLOBAL_PERMS'		=> 'Globalne dozvole',
	'VIEW_PERMISSIONS'		=> 'Pregled dozvola',

	'WRONG_PERMISSION_TYPE'	=> 'Izabran pogrešan tip dozvole.',
	'WRONG_PERMISSION_SETTING_FORMAT'  	=> 'Podešavanja dezvola su u pogrešnom formatu, phpBB ne može da ih ispravno protumači.',
));

?>