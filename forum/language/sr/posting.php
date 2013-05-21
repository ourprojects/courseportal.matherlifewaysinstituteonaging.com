<?php
/** 
*
* posting [Serbian]
*
* @package language
* @version $Id: posting.php,v 1.45 2006/11/24 14:45:13 dhn2 Exp $
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
	'ADD_ATTACHMENT'			=> 'Posalji prikačeni fajl',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ako želite da prikačite jedan ili više fajlova unesite detalje ispod',
	'ADD_FILE'					=> 'Dodaj fajl',
	'ADD_POLL'					=> 'Pravljenje glasanja',
	'ADD_POLL_EXPLAIN'			=> 'Ako ne želite da dodate glasanje u vašu temu, ostavite polja prazna',
	'ALREADY_DELETED'			=> 'Žao nam je ali ova poruka je već obrisana.',
	'ATTACH_DISK_FULL'			=> 'Nema dovoljno slobodnog mesta na disku da sačuvate fajl.',
	'ATTACH_QUOTA_REACHED'		=> 'Žao nam je, ali dostignuto je ograničenje boarda za prikačene fajlove.',
	'ATTACH_SIG'				=> 'Prikači potpis (potpisi se mogu menjati u KKP-u)',

	'BBCODE_A_HELP'				=> 'U nivou poslat prikačeni fajl: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Podebljan tekst: [b]tekst[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Prikaz koda: [code]kod[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> 'Lista: Dodaj element liste',
	'BBCODE_F_HELP'				=> 'Veličina fonta: [size=x-small]sićušna slova[/size]',
	'BBCODE_IS_OFF'				=> '%sBBKod%s je <em>Isključen</em>',
	'BBCODE_IS_ON'				=> '%sBBKod%s je <em>Uključen</em>',
	'BBCODE_I_HELP'				=> 'Kosi tekst: [i]tekst[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Lista: [list]tekst[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'		=> 'Lista stavki: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Uređena lista: [list=]tekst[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Ubaci sliku: [img]http://url_slike[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Citiraj tekst: [quote]tekst[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Boja fonta: [color=red]tekst[/color]  Trik: možete takođe koristiti color=#FF0000',
	'BBCODE_U_HELP'				=> 'Podvučeni tekst: [u]tekst[/u]  (alt+u)',
	'BBCODE_Y_HELP'				=> 'Lista: Dodaj element u listu',
	'BBCODE_W_HELP'				=> 'Ubaci link: [url]http://url[/url] ili [url=http://url]URL tekst[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> 'Ne možete tako brzo maknuti ovu temu posle zadnjeg posta.',

	'CANNOT_DELETE_REPLIED'		=> 'Žao nam je ali možete brisati samo poostove na koje nije odgovoreno.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ovaj post je zaključan. Ne možete više menjati ovaj post.',
	'CANNOT_EDIT_TIME'			=> 'Ne možete više menjati ili brisati ovaj post',
	'CANNOT_POST_ANNOUNCE'		=> 'Žao nam je ali ne možete slati prikačene fajlove.',
	'CANNOT_POST_STICKY'		=> 'Žao nam je ali ne možete pisati lepljive teme.',
	'CHANGE_TOPIC_TO'			=> 'Promeni tip teme u',
	'CLOSE_TAGS'				=> 'Zatvori tagove',
	'CURRENT_TOPIC'				=> 'Trenutna tema',

	'DELETE_FILE'				=> 'Obriši fajl',
	'DELETE_MESSAGE'			=> 'Obriši poruku',
	'DELETE_MESSAGE_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete ovu poruku?',
	'DELETE_OWN_POSTS'			=> 'Žao nam je ali možete brisati samo sopstvene postove.',
	'DELETE_POST_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ovu poruku?',
	'DELETE_POST_WARN'			=> 'Jednom obrisan, post ne može biti vraćen',
	'DISABLE_BBCODE'			=> 'Onemogući BBKod',
	'DISABLE_MAGIC_URL'			=> 'Nemoj automatski prosleđivati linkove',
	'DISABLE_SMILIES'			=> 'Onemogući smajlije',
	'DISALLOWED_EXTENSION'		=> 'Ekstenzija %s nije dozvoljena',
	'DISALLOWED_CONTENT'		=> 'Slanje je odbijeno jer je poslati fajl prepoznat kao mogući oblik napada.',
	'DRAFT_LOADED'				=> 'Nacrt je učitan, sada ga možetete završiti.<br />Vaš nacrt će biti obrisan posle slanja ovog posta.',
	'DRAFT_LOADED_PM'			=> 'Nacrt učitan u oblast za poruku, možda biste želeli da sada završite privatnu poruku.<br />Your draft will be deleted after submitting this private message.',
	'DRAFT_SAVED'				=> 'Nacrt je uspešno sačuvan.',
	'DRAFT_TITLE'				=> 'Naslov nacrta',

	'EDIT_REASON'				=> 'Razlog za izmenu ovog posta',
	'EMPTY_FILEUPLOAD'			=> 'Poslati fajl je prazan',
	'EMPTY_MESSAGE'				=> 'Morate upisati poruku kada je šaljete.',
	'EMPTY_REMOTE_DATA'			=> 'Fajl ne može biti poslat, molimo vas da pokušate da pošaljete fajl ručno.',

	'FLASH_IS_OFF'				=> '[flash] je <em>Isključen</em>',
	'FLASH_IS_ON'				=> '[flash] je <em>Uključen</em>',
	'FLOOD_ERROR'				=> 'Ne možete poslati novi posta tako brzo od vašeg poslednjeg posta.',
	'FONT_COLOR'				=> 'Boja fonta',
	'FONT_COLOR_HIDE'			=> 'Sakrij boju fonta',
	'FONT_HUGE'					=> 'Ogromna',
	'FONT_LARGE'				=> 'Velika',
	'FONT_NORMAL'				=> 'Normalna',
	'FONT_SIZE'					=> 'Veličina fonta',
	'FONT_SMALL'				=> 'Mala',
	'FONT_TINY'					=> 'Sićušna',

	'GENERAL_UPLOAD_ERROR'		=> 'Ne mogu da pošaljem prikačeni fajl u %s',

	'IMAGES_ARE_OFF'			=> '[img] je <em>Isključen</em>',
	'IMAGES_ARE_ON'				=> '[img] je <em>Uključen</em>',
	'INVALID_FILENAME'			=> '%s je neispravno ime fajla',

	'LOAD'						=> 'Učitaj',
	'LOAD_DRAFT'				=> 'Učitaj nacrt',
	'LOAD_DRAFT_EXPLAIN'		=> 'Ovde možete izabrati nacrt koji želite da dovršite. Vaš trenutni post će biti poništen, i sav njegov sadržaj će biti obrisan. Pregledajte, menjajte i brišite nacrte iz vašeg Korisničkog Kontrolnog Panela.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Morate se prijaviti da bi izbacili teme u ovom forumu.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Morate se prijaviti da bi brisali postove u ovom forumu.',
	'LOGIN_EXPLAIN_POST'		=> 'Morate se prijaviti da bi pisali u ovom forumu.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Morate se prijaviti da bi citirali postove u ovom forumu.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Morate se prijaviti da bi odgovarali na teme u ovom forumu.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Možete foristit fontove sve do veličine %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Vaši Flash fajlovi mogu biti najviše do %1$d piksela visoki.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Vaši Flash fajlovi mogu biti najviše do %1$d piksela široki.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Vaše slike moraju biti najviše do %1$d piksela visoke.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Vaše slike moraju biti najviše do %1$d piksela široke.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Unesite vašu poruku ovde, poruka može sadržati ne više od <strong>%d</strong> karaktera.',
	'MESSAGE_DELETED'			=> 'Vaša poruka je uspešno obrisana',
	'MORE_SMILIES'				=> 'Pogledajte još smajlija',

	'NOTIFY_REPLY'				=> 'Pošaljite mi email kada neko odgovori',
	'NOT_UPLOADED'				=> 'Fajl se ne može poslati.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Ne možete obrisati postojeće opcije glasanja',
	'NO_PM_ICON'				=> 'Bez PM ikonice',
	'NO_POLL_TITLE'				=> 'Morate uneti naslov glasanja',
	'NO_POST'					=> 'Traženi post ne postoji.',
	'NO_POST_MODE'				=> 'Niste izabrali mod slanja',
	'NO_TOPIC_ICON'				=> 'Nema',

	'PARTIAL_UPLOAD'			=> 'Poslati fajl je samo delimično poslat',
	'PHP_SIZE_NA'				=> 'Veličina prikačenog fajla je prevelika.<br />Ne mogu da utvrdim maksimalnu veličinu definisanu u PHP-u u php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Veličina prikačenog fajla je prevelika, maksimana veličina ufajla za slanje je %d MB.<br />Znajte da je ovo podešeno u php.ini fajlu i ne može se zaobiči.',
	'PLACE_INLINE'				=> 'Postavi u red',
	'POLL_DELETE'				=> 'Obriši glasanje',
	'POLL_FOR'					=> 'Pokreni glasanje za',
	'POLL_FOR_EXPLAIN'			=> 'Unesite 0 ili ostavite prazno da se glasanje nikada ne završi',
	'POLL_MAX_OPTIONS'			=> 'Opcija po korisniku',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Ovo je broj opcija koje svaki korisnik može da izabere u toku glasanja.',
	'POLL_OPTIONS'				=> 'Opcije glasanja',
	'POLL_OPTIONS_EXPLAIN'		=> 'Upišite svaku opciju u novu liniju. Možete uneti do <strong>%d</strong> opcija',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Upišite svaku opciju u novu liniju. Možete uneti do <strong>%d</strong> opcija. Ako uklanjate ili dodajete opcije svi prethodni glasovi će biti resetovani.',
	'POLL_QUESTION'				=> 'Pitanje',
	'POLL_TITLE_TOO_LONG'		=> 'Naslov glasanja mora sadržati manje od 100 karaktera.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Prosleđena veličina naslova glasanja je prevelika, razmislite o uklanjanju BBKodova ili smajlova.',
	'POLL_VOTE_CHANGE'			=> 'Dozvoli ponovno glasanje',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ako je omogućeno, korisnici su u mogućnosti da promene svoje glasanje.',
	'POSTED_ATTACHMENTS'		=> 'Poslati prikačeni fajlovi',
	'POST_APPROVAL_NOTIFY'		=> 'Bićete obavešteni kada vaš post bude odobren.',
	'POST_CONFIRMATION'			=> 'Potvrda slanja',
	'POST_CONFIRM_EXPLAIN'		=> 'Da bi sprečili automatske postove, administrator boarda zahteva da unesete kod za potvrdu. Ovaj kod je prikazan u slici koju bi trebalo da vidite ispod. Ako ne možete da pročitate kod ili ste na bilo koji drugi način nemoćni da razaznate tekst molimo vas da kontaktirate %sAdministratora%s.',
	'POST_DELETED'				=> 'Vaša poruka je uspešno obrisana',
	'POST_EDITED'				=> 'Vaša poruka je uspešno izmenjena',
	'POST_EDITED_MOD'			=> 'Vaša poruka je izmenjena ali je potrebno odobrenje',
	'POST_GLOBAL'				=> 'Globalno',
	'POST_ICON'					=> 'Ikonica posta',
	'POST_NORMAL'				=> 'Normalno',
	'POST_REPLY'				=> 'Pošalji odgovor',
	'POST_REVIEW'				=> 'Pošalji kritiku',
	'POST_REVIEW_EXPLAIN'		=> 'Najmanje jedan novi post je poslat u ovoj temi. Možda biste voleli da uporedite vaš post sa ostalima.',
	'POST_REVIEW_EDIT'   => 'Uređivanje posta',
  'POST_REVIEW_EDIT_EXPLAIN'  =>  'Ovaj post je menjao drugi korisnik dok ste radili izmenu. Možda želite da pogledate trenutnu verziju posta i izmenite po potrebi.',
	'POST_STORED'				=> 'Vaša poruka je uspešno poslata',
	'POST_STORED_MOD'			=> 'Vaša poruka je sačuvana ali zahteva odobrenje',
	'POST_TOPIC'				=> 'Postavite novu temu',
	'POST_TOPIC_AS'				=> 'Postavite temu kao',
	'PROGRESS_BAR'				=> 'Pokazivač napretka',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Možete uvrstiti samo %1$d citata.',

	'SAVE'						=> 'Sačuvaj',
	'SAVE_DATE'					=> 'Sačuvano u',
	'SAVE_DRAFT'				=> 'Sačuvaj nacrt',
	'SAVE_DRAFT_CONFIRM'		=> 'Znajte da sačuvani nacrti sadrže samo naslov i tekst poruke, svi ostali elementi biće uklonjeni. Da li želite da sačuvate vaš nacrt sada?',
	'SMILIES'					=> 'Smajliji',
	'SMILIES_ARE_OFF'			=> 'Smajliji su <em>Isključeni</em>',
	'SMILIES_ARE_ON'			=> 'Smajliji su <em>Uključeni</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Lepljiva/Obaveštenje vremensko ograničenje',
	'STICK_TOPIC_FOR'			=> 'Ljepljiva tema za',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Unesite 0 ili ostavite prazno za večnu Lepljivu/Obaveštenje',
	'STYLES_TIP'				=> 'Trik: Stilovi mogu brzo da se primene na izabrani tekst',

	'TOO_FEW_CHARS'				=> 'Vaša poruka sadrži premalo karaktera.',
	'TOO_FEW_CHARS_LIMIT'  =>  'Vaša poruka sadrži %1$d karaktera. Minimalni broj karaktera koji morate uneti je %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Morate uneti najmanje dve opcije glasanja',
	'TOO_MANY_ATTACHMENTS'		=> 'Ne mogu da dodam više prikačenih fajlova, %d je maksimalno.',
	'TOO_MANY_CHARS'			=> 'Vaša poruka sadrži previše karaktera.',
	'TOO_MANY_CHARS_POST'		=> 'Vaša poruk sadrži %1$d karaktera. Maksimalni broj dozvoljenih karaktera je %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Vaš potpis sadrži %1$d karaktera. Maksimalni broj dozvoljenih karaktera je %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Pokušali ste da unesete previše opcija za glasanje',
	'TOO_MANY_SMILIES'			=> 'Vaša poruka sadrži previše smajlija. Maksimajno %d smajlija je dozvoljeno.',
	'TOO_MANY_URLS'				=> 'Vaša poruka sadrži previše linkova. Maksimalno %d linkova je dozvoljeno.',
	'TOO_MANY_USER_OPTIONS'		=> 'Ne možete odrediti više Opcija po korisniku od već postojećih opcija glasanja',
	'TOPIC_BUMPED'				=> 'Tema je uspešno izbačena',

	'UNAUTHORISED_BBCODE'		=> 'Ne možete koristiti određene BBKodove: ',
	'UNGLOBALISE_EXPLAIN'		=> 'Da bi promenili ovu temu iz globalne u normalnu, morate izabrati forum u kojem želite da se prikaže ova tema.',
	'UPDATE_COMMENT'			=> 'Ažuriraj komentar',
	'URL_INVALID'				=> 'Link koji ste uneli je neispravan.',
	'URL_NOT_FOUND'				=> 'Izabrani fajl ne može biti pronađen.',
	'URL_IS_OFF'				=> '[url] je <em>Isključen</em>',
	'URL_IS_ON'					=> '[url] je <em>Uključen</em>',
	'USER_CANNOT_BUMP'			=> 'Ne možete izbacivati teme u ovom forumu',
	'USER_CANNOT_DELETE'		=> 'Ne možete brisati postove u ovom forumu',
	'USER_CANNOT_EDIT'			=> 'Ne možete menjati postove u ovom forumu',
	'USER_CANNOT_REPLY'			=> 'Ne možete odgovarati u ovom forumu',
	'USER_CANNOT_FORUM_POST'	=> 'Ne možete izvšavati operacije slanja u ovom forumu jer ovaj tip foruma to ne podržava.',

	'VIEW_MESSAGE'				=> '%sPogledajte vašu poruku%s',
	'VIEW_PRIVATE_MESSAGE'			=> '%sPogledajte Vašu privatnu poruku%s',

	'WRONG_FILESIZE'			=> 'Fajl je prevelik, maksimalna dozvoljena veličina je %1d %2s',
	'WRONG_SIZE'				=> 'Slika mora biti najmanje %1$d piksela široka, %2$d piksela visoka i najvišet %3$d piksela široka i %4$d piksela visoka. Poslata slika je %5$d piksela široka i%6$d piksela visoka.',
));

?>