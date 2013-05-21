<?php
/**
*
* posting [Croatian]
*
* @package language
* @version $Id: $
* @copyright (c) 2011 phpBB Group
* @author 2011-11-18 - phpbb.com.hr
* @author 2003-2008 - Ančica Sečan
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
'ADD_ATTACHMENT'=> 'Dodavanje privit(a)ka',
'ADD_ATTACHMENT_EXPLAIN'=> 'Ukoliko želiš dodati jednu ili više datoteka, unesi ispod detalje.',
'ADD_FILE'=> 'Dodaj datoteku',
'ADD_POLL'=> 'Kreiranje ankete',
'ADD_POLL_EXPLAIN'=> 'Ukoliko ne želiš dodati anketu, ostavi polja praznima.',
'ALREADY_DELETED'=> 'Post/poruka je već izbrisan/a.',
'ATTACH_DISK_FULL'=> 'Nema dovoljno slobodnog prostora na serveru kako bi mogli dodati ovaj prilog.',
'ATTACH_QUOTA_REACHED'=> 'Forumska kvota za privitke je dosegnuta.',
'ATTACH_SIG'=> 'Dodaj potpis',

'BBCODE_A_HELP'=> 'Umetanje datoteke: [attachment=]naziv_datoteke.ext[/attachment]',
'BBCODE_B_HELP'=> 'Podebljanje teksta: [b]tekst[/b]',
'BBCODE_C_HELP'=> 'Prikaz koda: [code]kod[/code]',
'BBCODE_D_HELP'=> 'Flash: [flash=width,height]http://url[/flash]',
'BBCODE_E_HELP'=> 'Lista: dodavanje stavki liste',
'BBCODE_F_HELP'=> 'Veličina fonta: [size=85]small text[/size]',
'BBCODE_IS_OFF'=> '%sBBKod%s je <em>isključen</em>',
'BBCODE_IS_ON'=> '%sBBKod%s je <em>uključen</em>',
'BBCODE_I_HELP'=> 'Nakošenje teksta: [i]tekst[/i]',
'BBCODE_L_HELP'=> 'Lista: [list]tekst[/list]',
'BBCODE_LISTITEM_HELP'=> 'Stavka liste: [*]tekst[/*]',
'BBCODE_O_HELP'=> 'Pobrojana list: [list=]tekst[/list]',
'BBCODE_P_HELP'=> 'Ubacivanje slike: [img]http://url_slike[/img]',
'BBCODE_Q_HELP'=> 'Citiranje teksta: [quote]tekst[/quote]',
'BBCODE_S_HELP'=> 'Boja fonta: [color=red]tekst[/color] [možeš koristiti i: color=#FF0000]',
'BBCODE_U_HELP'=> 'Podcrtanje teksta: [u]tekst[/u]',
'BBCODE_W_HELP'=> 'Ubacivanje URL-a: [url]http://url[/url] ili [url=http://url]URL tekst[/url]',
'BBCODE_Y_HELP'	=> 'Popis: Dodaj popis elementa',
'BUMP_ERROR'=> 'Ne možeš bumpirati temu tako brzo iza zadnjeg posta.',

'CANNOT_DELETE_REPLIED'=> 'Oprosti ali ne možeš izbrisati postove na koje je već odgovoreno.',
'CANNOT_EDIT_POST_LOCKED'=> 'Post je zaključan.<br />Ne možeš ga više urediti/uređivati.',
'CANNOT_EDIT_TIME'=> 'Post više ne možeš urediti/uređivati odnosno izbrisati.',
'CANNOT_POST_ANNOUNCE'=> 'Ne možeš postati Obavijesti.',
'CANNOT_POST_STICKY'=> 'Ne možeš započinjati “Važne” teme.',
'CHANGE_TOPIC_TO'=> 'Promijeni tip teme u',
'CLOSE_TAGS'=> 'Zatvori tagove',
'CURRENT_TOPIC'=> 'Trenutna tema',

'DELETE_FILE'=> 'Izbriši datoteku',
'DELETE_MESSAGE'=> 'Izbriši poruku',
'DELETE_MESSAGE_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati poruku?',
'DELETE_OWN_POSTS'=> 'Možeš izbrisati samo svoje postove.',
'DELETE_POST_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati post?',
'DELETE_POST_WARN'=> 'Izbrisan post ne može biti povraćen.',
'DISABLE_BBCODE'=> 'Onemogući BBKod',
'DISABLE_MAGIC_URL'=> 'Ne prikazuj automatski URL-ove kao linkove',
'DISABLE_SMILIES'=> 'Onemogući smajliće',
'DISALLOWED_CONTENT'=> 'Uploadiranje je odbijeno jer je uploadana datoteka identificirana kao potencijalan izvršitelj napada.',
'DISALLOWED_EXTENSION'=> '%s ekstenzija nije dopuštena.',
'DRAFT_LOADED'=> 'Skica je učitana.<br />Ukoliko post završiš i postaš ga, skica će nakon postanja biti izbrisana.',
'DRAFT_LOADED_PM'=> 'Skica je učitana.<br />Ukoliko poruku završiš i pošalješ ju, skica će nakon slanja poruke biti izbrisana.',
'DRAFT_SAVED'=> 'Skica pohranjena.',
'DRAFT_TITLE'=> 'Naziv skice',

'EDIT_REASON'=> 'Razlog izmijene posta',
'EMPTY_FILEUPLOAD'=> 'Poslana datoteka je prazna.',
'EMPTY_MESSAGE'=> 'Moraš unijeti tekst [sadržaj] poruke.',
'EMPTY_REMOTE_DATA'=> 'Slanje datoteke nije uspjelo.<br />Pošalji ju “ručno”.',

'FLASH_IS_OFF'=> '[flash] je <em>isključen</em>',
'FLASH_IS_ON'=> '[flash] je <em>uključen</em>',
'FLOOD_ERROR'=> 'Ne možeš postati tako brzo iza zadnjeg posta kojeg si postao/la.',
'FONT_COLOR'=> 'Boja fonta',
'FONT_COLOR_HIDE' => 'Sakrij boju fonta',
'FONT_HUGE'=> 'ogromna',
'FONT_LARGE'=> 'velika',
'FONT_NORMAL'=> 'normalna',
'FONT_SIZE'=> 'Veličina fonta',
'FONT_SMALL'=> 'malena',
'FONT_TINY'=> 'sićušna',

'GENERAL_UPLOAD_ERROR'=> 'Nije moguće poslati privitak u %s.',

'IMAGES_ARE_OFF'=> '[img] je <em>isključen</em>',
'IMAGES_ARE_ON'=> '[img] je <em>uključen</em>',
'INVALID_FILENAME'=> '%s je neispravno ime datoteke.',

'LOAD'=> 'Učitaj',
'LOAD_DRAFT'=> 'Učitaj skicu',
'LOAD_DRAFT_EXPLAIN'=> 'Ovdje se nalaze pohranjene sve tvoje skice.',
'LOGIN_EXPLAIN_BUMP'=> 'Za bumpiranje tema na ovom forumu, moraš se prijaviti.',
'LOGIN_EXPLAIN_DELETE'=> 'Za izbrisivanje postova na ovom forumu, moraš se prijaviti.',
'LOGIN_EXPLAIN_POST'=> 'Za postanje na ovom forumu, moraš se prijaviti.',
'LOGIN_EXPLAIN_QUOTE'=> 'Za citiranje na ovom forumu, moraš se prijaviti.',
'LOGIN_EXPLAIN_REPLY'=> 'Za postanje/odgovaranje na teme na ovom forumu, moraš se prijaviti.',

'MAX_FONT_SIZE_EXCEEDED'=> 'Najveća dopuštena veličina fontova je %1$d.',
'MAX_FLASH_HEIGHT_EXCEEDED'=> 'Maksimalna dopuštena visina flash datoteka je %1$d piksela..',
'MAX_FLASH_WIDTH_EXCEEDED'=> 'Maksimalna dopuštena širina flash datoteka je %1$d piksela.',
'MAX_IMG_HEIGHT_EXCEEDED'=> 'Maksimalna dopuštena visina slika je %1$d piksela.',
'MAX_IMG_WIDTH_EXCEEDED'=> 'Maksimalna dopuštena širina slika je %1$d piksela.',

'MESSAGE_BODY_EXPLAIN'=> 'Upiši poruku ovdje.<br />Može sadržavati maksimalno <strong>%d</strong> znakova.',
'MESSAGE_DELETED'=> 'Poruka je izbrisana.',
'MORE_SMILIES'=> 'Ostali smajlići',

'NOTIFY_REPLY'=> 'Obavijesti me kad odgovor bude postan',
'NOT_UPLOADED'=> 'Datoteka nije poslana.',
'NO_DELETE_POLL_OPTIONS'=> 'Ne možeš izbrisati opcije ankete.',
'NO_PM_ICON'=> '/',
'NO_POLL_TITLE'=> 'Unesi naslov ankete.',
'NO_POST'=> 'Post ne postoji.',
'NO_POST_MODE'=> 'Nije određen način postanja.',

'PARTIAL_UPLOAD'=> 'Poslan je samo dio datoteke, nije poslana cijela datoteka.',
'PHP_SIZE_NA'=> 'Privitak je prevelik.<br />Ustanovljavanje maksimalne dopuštene veličine definirane PHP-om u php.ini nije uspjelo.',
'PHP_SIZE_OVERRUN'=> 'Privitak je prevelik.<br />Maksimalna dopuštena veličina je %1$d %2$s.<br />Maksimalna dopuštena veličina definirana je u php.ini.',
'PLACE_INLINE'=> 'Umetni',
'POLL_DELETE'=> 'Izbriši anketu',
'POLL_FOR'=> 'Anketa će biti aktivna:',
'POLL_FOR_EXPLAIN'=> 'Upiši 0 ili ostavi prazno za anketu koja će trajati stalno.',
'POLL_MAX_OPTIONS'=> 'Opcija po korisniku/ci',
'POLL_MAX_OPTIONS_EXPLAIN'=> '[Broj] Koliko opcija korisnik/ca može odabrati prilikom glasovanja.',
'POLL_OPTIONS'=> 'Opcije',
'POLL_OPTIONS_EXPLAIN'=> 'Svaku opciju unesi u novi redak.<br />Možeš unijeti maksimalno <strong>%d</strong> opcija.',
'POLL_OPTIONS_EDIT_EXPLAIN' => 'Svaku opciju unesi u novi redak.<br />Možeš unijeti maksimalno <strong>%d</strong> opcija.<br />Ukoliko izbrišeš/dodaš opciju/e, svi prethodni glasovi bit će resetirani.',
'POLL_QUESTION'=> 'Pitanje',
'POLL_TITLE_TOO_LONG'=> 'Naslov ankete ne smije sadržavati više od 100 znakova.',
'POLL_TITLE_COMP_TOO_LONG'=> 'Naslov ankete je predugačak, probaj izbrisati BBKodove  ili smajliće.',
'POLL_VOTE_CHANGE'=> 'Predomišljanje',
'POLL_VOTE_CHANGE_EXPLAIN'=> 'Ukoliko omogućiš “predomišljanje”, korisnici/e će moći mijenjati glasovanje [poništiti dani(e) glas(ove) i glasovati za drugu(e) opciju(e)].',
'POSTED_ATTACHMENTS'=> 'Postani privitci',
'POST_APPROVAL_NOTIFY'=> 'Bit ćeš obaviješten/a kada ti post bude odobren.',
'POST_CONFIRMATION'=> 'Potvrda posta',
'POST_CONFIRM_EXPLAIN'=> 'Zbog sprječavanja “automatskog postanja”, administrator/ica je uveo/la pravilo zahtijevanja unosa potvrdnog koda.<br />Potvrdni kod bi trebao biti prikazan na slici ispod.<br />Ukoliko ne možeš pročitati kod - kontaktiraj %sadministratora/icu%s.',
'POST_DELETED'=> 'Post je izbrisan.',
'POST_EDITED'=> 'Post je uređen.',
'POST_EDITED_MOD'=> 'Post je uređen i pohranjen; (no), potrebno je odobrenje za njegovu objavu.',
'POST_GLOBAL'=> 'Globalno',
'POST_ICON'=> 'Ikona',
'POST_NORMAL'=> 'Normalo',
'POST_REVIEW'=> 'Pregled posta',
'POST_REVIEW_EDIT'=> 'Pregled posta',
'POST_REVIEW_EDIT_EXPLAIN'=> 'Post je promijenjen od strane drugog korisnika u trenutku dok si ga uređivao/la. Moguće je da želiš pregledati trenutnu verziju posta kako bi uredio/la vlastite promjene.',
'POST_REVIEW_EXPLAIN'=> 'U međuvremenu kada ste pisali najmanje je jedan post postan u temi. Dakle netko je u međuvremenu već stavio odgovor. Pruža ti se mogućnost da prije slanja izmijeniš/dodaš/izbrišeš odnosno odustaneš od posta ako on više nije potreban .',
'POST_STORED'=> 'Poruka je uspješno objavljena.',
'POST_STORED_MOD'=> 'Poruka je uspješno objavljena, međutim potrebno je odobrenje za javnu objavu.',
'POST_TOPIC_AS'=> 'Temu započni kao',
'PROGRESS_BAR'=> 'Prikaz napretka',

'QUOTE_DEPTH_EXCEEDED'=> 'Možeš spojiti najviše %1$d citata.',

'SAVE'=> 'Pohrani',
'SAVE_DATE'=> 'Pohranjeno',
'SAVE_DRAFT'=> 'Pohrani skicu',
'SAVE_DRAFT_CONFIRM'=> 'Pohranjene skice sadrže samo naslov i sadržaj posta, eventualni ostali elementi bit će uklonjeni prilikom pohranjivanja.<br />Jesi li siguran/na da želiš pohraniti skicu?',
'SMILIES'=> 'Smajlići',
'SMILIES_ARE_OFF'=> 'Smajlići su <em>isključeni</em>',
'SMILIES_ARE_ON'=> 'Smajlići su <em>uključeni</em>',
'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Vremensko ograničenje...',
'STICK_TOPIC_FOR'=> 'Istakni',
'STICK_TOPIC_FOR_EXPLAIN'=> 'Upiši 0 ili ostavi prazno za trajnu temu unutar kategorije “Važno”/Obavijest. Ovaj broj je relativan u odnosu na datum posta.',
'STYLES_TIP'=> 'Stilove je lako, brzo i jednostavno primijeniti na tekst...',

'TOO_FEW_CHARS'=> 'Post sadrži premalo znakova.',
'TOO_FEW_CHARS_LIMIT'=> 'Poruka sadrži %1$d znakova. Minimalan broj znakova koje treba upisati je %2$d.',
'TOO_FEW_POLL_OPTIONS'=> 'Moraš unijeti barem dvije opcije za glasovanje.',
'TOO_MANY_ATTACHMENTS'=> 'Ne možeš više dodavati privitke, dopušteno je maksimalno %d.',
'TOO_MANY_CHARS'=> 'Post sadrži previše znakova.',
'TOO_MANY_CHARS_POST' => 'Poruka sadrži %1$d znakova.<br />Dopušteno je maksimalno %2$d znakova.',
'TOO_MANY_CHARS_SIG' => 'Potpis sadrži %1$d znakova.<br />Dopušteno je maksimalno %2$d znakova.',
'TOO_MANY_POLL_OPTIONS'=> 'Unio/la si previše opcija za glasovanje.',
'TOO_MANY_SMILIES'=> 'Post sadrži previše smajlića, dopušteno je maksimalno %d smajlića.',
'TOO_MANY_URLS'=> 'Post sadrži previše URL-ova, dopušteno je maksimalno %d URL-ova.',
'TOO_MANY_USER_OPTIONS'=> 'Opcija po korisniku/ci ne može biti više od opcija ankete.',
'TOPIC_BUMPED'=> 'Tema je bumpirana.',

'UNAUTHORISED_BBCODE'=> 'Određene kodove ne možeš koristiti: ',
'UNGLOBALISE_EXPLAIN'=> 'Da bi prebacio/la temu iz Globalne u Normalnu, moraš izabrati odredišni forum.',
'UPDATE_COMMENT'=> 'Ažuriraj komentar',
'URL_INVALID'=> 'Url koji si unio/la je neispravan.',
'URL_NOT_FOUND'=> 'Url/datoteka nije pronađena.',
'URL_IS_OFF'=> '[url] je <em>isključen</em>',
'URL_IS_ON'=> '[url] je <em>uključen</em>',
'USER_CANNOT_BUMP'=> 'Ne možeš bumpirati teme.',
'USER_CANNOT_DELETE'=> 'Ne možeš izbrisati postove.',
'USER_CANNOT_EDIT'=> 'Ne možeš uređivati postove.',
'USER_CANNOT_REPLY'=> 'Ne možeš odgovarati na postove.',
'USER_CANNOT_FORUM_POST'=> 'Ne možeš postati.',

'VIEW_MESSAGE'=> 'Klikni %sovdje%s kako bi pogledao/la post/poruku.',
'VIEW_PRIVATE_MESSAGE'=> 'Klikni %sovdje%s kako bi pogledao/la privatnu poruku.',

'WRONG_FILESIZE'=> 'Datoteka je prevelika.<br />Maksimalna dopuštena veličina je %1d %2s.',
'WRONG_SIZE'=> 'Slika najmanje smije biti širine %1$d piksel(a) i visine %2$d piksel(a) odnosno najviše smije biti širine %3$d piksel(a) i visine %4$d piksel(a). Tvoja slika je širine %5$d piksel(a) i visine %6$d piksel(a).',
));

?>