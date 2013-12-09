<?php
/** 
*
* help_bbcode [Serbian]
*
* @package language
* @version $Id: help_bbcode.php,v 1.8 2006/09/24 00:28:32 shs Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

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

$help = array(
	array(
		0 => '--',
		1 => 'Uvod'
	),
	array(
		0 => 'Šta je BBKod?',
		1 => 'BBKod je specijalna implementacija HTML-a. Da li možete koristiti BBKod u vašim porukama na forumu određuje administrator. Možete onemogućiti BBKod na formi za slanje poruka. BBKod sam po sebi je sličan stilu u HTML, tagovi su umetnuti u vitičastim zagradama [ i ] radije nego &lt; i &gt; i nudi veću kontrolu kako je nešto prikazano. U zavisnosti od podloge koju koristite videćete da je dodavanje BBKoda vašim porukama mnogo lakške kliktanjem miša na polja iznad poruke na formi za unos poruka. Čak i sa tim možda će vam ovaj vodič biti od koristi.'
	),
	array(
		0 => '--',
		1 => 'Formatiranje teksta'
	),
	array(
		0 => 'Kako napisati podebljan, kosi i podvučeni tekst',
		1 => 'BBKod sadrži tagove  koji vam omogućuju da brzo promenite osnovni stil vašeg teksta. Ovo se postiže na više načina: <ul><li>Da bi ste napisali tekst podebljano umetnite ga u <b>[b][/b]</b>, npr. <br /><br /><b>[b]</b>Zdravo<b>[/b]</b><br /><br />će postati <b>Zdravo</b></li><li>Za podvlačenje koristite <b>[u][/u]</b>, na primer:<br /><br /><b>[u]</b>Dobro jutro<b>[/u]</b><br /><br />postaje <u>Dobro jutro</u></li><li>Da iskosite tekst koristite <b>[i][/i]</b>, npr.<br /><br />Ovo je <b>[i]</b>sjajno!<b>[/i]</b><br /><br />æe dati Ovo je <i>sjajno!</i></li></ul>'
	),
	array(
		0 => 'Kako da promenim boju teksta ili veličinu',
		1 => 'Da bi ste izmenili boju ili veličinu teksta možete koristiti sledeće tagove. Zapamtite da će krajnji rezujtat zavisiti od browsera čitača i sistema: <ul><li>Menjanje boje teksta moguće je tako što ćete ga umetnuti u <b>[color=][/color]</b>. Možete odrediti prepoznatljiv naziv boje (npr. crvena, plava, žuta, itd.) ili u heksadecimalnom obliku, npr. #FFFFFF, #000000. Na primer, za crveni tekst koristite:<br /><br /><b>[color=red]</b>Zdravo!<b>[/color]</b><br /><br />ili<br /><br /><b>[color=#FF0000]</b>Zdravo!<b>[/color]</b><br /><br />će u oba slučaja dati <span style=\"color:red\">Zdravo!</span></li><li>Menjanje veličine teksta je slično koristeći <b>[size=][/size]</b>. Ovaj tag zavisi od podloge koju koristite ali preporučeni format je numerička vrednost koja predstavlja veličinu teksta u pikselima, počevši od 1 (toliko malo da ga nećete ni videti) pa sve do 29 (veoma veliko). Na primer:<br /><br /><b>[size=9]</b>MALO<b>[/size]</b><br /><br />će generalno biti <span style=\"font-size:9px\">MALO</span><br /><br />dok će:<br /><br /><b>[size=24]</b>OGROMNO!<b>[/size]</b><br /><br />biti <span style=\"font-size:24px\">OGROMNO!</span></li></ul>'
	),
	array(
		0 => 'Da li mogu da kombinujem tagove za formatiranje',
		1 => 'Da, naravno da možete, na primer da biste privukli pažnju možete pisati:<br /><br /><b>[size=18][color=red][b]</b>POGLEDAJ ME!<b>[/b][/color][/size]</b><br /><br />ovo će dati <span style=\"color:red;font-size:18px\"><b>POGLEDAJ ME!</b></span><br /><br />Ne preporučujemo da pišete puno teksta koji izgleda ovako! Zapamtite da je na vama, tj, piscu da se pobrine da su tagovi pravilno zatvoreni. Na primer ovo je netačno:<br /><br /><b>[b][u]</b>Ovo je netačno<b>[/b][/u]</b>'
	),
	array(
		0 => '--',
		1 => 'Citiranje i dobijanje teksta fiksne širine'
	),
	array(
		0 => 'Citiranje teksta u odgovorima',
		1 => 'Postoje dva načina kojima možete citirati tekst, sa ili bez reference.<ul><li>Kada koristite Quote funkciju za odgovor na poruku primetićete da je tekst poruke dodat u prozoru poruke umetnut u <b>[quote=\"\"][/quote]</b> bloku. Ovaj metod vam omogućava da citirate sa referencom na osobu ili bilo šta drugo što želite da stavite! Na primer da biste citirali deo teksta Mr. Bloby upišite:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Tekst Mr. Blobby koji ste napisali će otići ovde<b>[/quote]</b><br /><br />Rezultujuća poruka će automatski dodati, Mr. Blobby wrote: pre samog teksta. Zapamtite da <b>morate</b> ubaciti zagrade \"\" oko imena koga citirate, jer nisu opcione.</li><li>Drugi metod vam omogućava da slepo citirate nešto. Da biste ovo iskoristili umetnite tekst u <b>[quote][/quote]</b> tagove. Kada pogledate poruku jednostavno će se prikazati, Quote: pre samog teksta.</li></ul>'
	),
	array(
		0 => 'Dobijanje koda ili podatke fiksne širine',
		1 => 'Ako želite da prikažete deo koda ili u stvari bilo šta što zahteva fiksnu širinu, npr. Courier font - treba umetnuti tekst u <b>[code][/code]</b> tagove, npr.<br /><br /><b>[code]</b>echo \"Ovo je neki kod\";<b>[/code]</b><br /><br />Sva formatiranja korišæena između <b>[code][/code]</b> tagova su zapamćena kada ih kasnije pogledate.'
	),
	array(
		0 => '--',
		1 => 'Generisanje lista'
	),
	array(
		0 => 'Pravljenje nesređene liste',
		1 => 'BBKod podržava dva tipa lista, nesređene i sređene. One su bitne isto koliko i njihova HTML zamena. Nesređena lista daje svaku stavku dosledno jednu za drugom drugom uvlačeći svaku stavku. Da biste napravili nesređenu lisu koristite <b>[list][/list]</b> i definišite svaku stavku liste koristeći <b>[*]</b>. Na primer da biste izlistali vaše omiljene boje koristite:<br /><br /><b>[list]</b><br /><b>[*]</b>Crvena<br /><b>[*]</b>Plava<br /><b>[*]</b>Žuta<br /><b>[/list]</b><br /><br />Ovim se dobija sledeća lista:<ul><li>Crvena</li><li>Plava</li><li>Žuta</li></ul>");'
	),
	array(
		0 => 'Pravljenje sređene liste',
		1 => 'Drugi tip liste, sređena lista daje vam kontrolu kakav će biti rezultat pre svake stavke. Da biste napravili sređenu listu koristite <b>[list=1][/list]</b> da napravite listu brojeva ili alternativno <b>[list=a][/list]</b> za abecednu listu. Kao i kod nesreðene liste stavke se označavaju sa <b>[*]</b>. Na primer:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Idite u prodavnicu<br /><b>[*]</b>Kupite nov kompjuter<br /><b>[*]</b>Zakunite se pred kompjuterom da kada se razbije<br /><b>[/list]</b><br /><br />će dati sledeće:<ol type=\"1\"><li>Idite u prodavnicu</li><li>Kupite nov kompjuter</li><li>Zakunite se pred kompjuterom da kada se razbije</li></ol>Dok za abecednu listukoristite:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Prvi mogući odgovor<br /><b>[*]</b>Drugi mogući odgovor<br /><b>[*]</b>Treći mogući odgovor<br /><b>[/list]</b><br /><br />daje<ol type=\"a\"><li>Prvi mogući odgovor</li><li>Drugi mogući odgovor</li><li>Treći mogući odgovor</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Pravljenje linkova'
	),
	array(
		0 => 'Link na drugi sajt',
		1 => 'phpBB BBKod ima više načina da napravite URI-e, Uniform Resource Indicators poznatije kao URLs.<ul><li>Prvi od njih koristi <b>[url=][/url]</b> tag, šta god ukucali posle = znaka će prouzrokovati da se sadržaj taga ponaša kao URL. Na primer da bi ste linkovali na phpBB.com koristite:<br /><br /><b>[url=http://www.phpbb.com/]</b>Posetite phpBB!<b>[/url]</b><br /><br />Ovo će generisati sledeći link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Posetite phpBB!</a> Primetićete da se link otvara u novom prozoru pa korisnik može nastaviti rad na forumu ako želi.</li><li>Ako želite da se URL prikaže kao link možete to jednostavno izvesti koristeći:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Ovo će generisati sledeći link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Dodatne phpBB mogućnosti zvane <i>Magični linkovi</i>, će pretvoriti svaki sintaksno tačan URL u link bez potrebe da definišete bilo kakav tag ili čak i prefiks http://. Na primer kucanjem www.phpbb.com u vašoj poruci automatski dobijate <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> kada pogledate poruku.</li><li>Isto se dešava i sa email adresama, možete ili naznačiti adresu na primer:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />što će rezultovati <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> ili možete jednostavno uneti no.one@domain.adr u vašoj poruci i biće automatski konvertovano kada pogledate poruku.</li></ul>Kao što sa svim BBKod tagovima možete umotati URLs oko bilo kojeg taga kao što je <b>[img][/img]</b> (Vidi sledeći pasus), <b>[b][/b]</b>, itd. tako i sa tagovima za formatiranje morate paziti da se pravilno zatvore, na primer:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>nije</u> tačno što može dovesti da se vaša poruka izbriše pa zato pazite.'
	),
	array(
		0 => '--',
		1 => 'Prikazivanje slika u porukama'
	),
	array(
		0 => 'Dodavanje slike u poruku',
		1 => 'phpBB BBKod sadrži tag za ubacivanje slika u vaše poruke. Dve vrlo važne stvari koje trebate da upamtite prilikom korišćenja ovog taga su; mnogi korisnici ne cene puno slika u porukama i drugo slika koju prikazujete mora već biti dostupna na internetu (ne može postojati na vašem kompjuteru na primer, osim ako nemate web server!). Da biste prikazali sliku morate okružiti URL koji vodi do slike sa <b>[img][/img]</b> tagovima. Na primer:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kao što ste primetili u URL delu iznad možete okružiti sliku u <b>[url][/url]</b> tag ako želite , npr.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />će dati:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />'
	),
	array(
		0 => '--',
		1 => 'Ostalo'
	),
	array(
		0 => 'Mogu li da dodam sopstvene tagove?',
		1 => 'Ne, bar ne direktno u verziji phpBB 2.0. Gledaćemo da ponudimo proizvoljne tagove u sledećoj verziji'
	)
);

?>