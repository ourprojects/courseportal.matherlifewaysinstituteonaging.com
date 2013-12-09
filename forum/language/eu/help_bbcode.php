<?php
/**
*
* 
*
* help_bbcode.php [Basque [eu]]
*
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

$help = array(
	array(
		0 => '--',
		1 => 'Sarrera'
	),
	array(
		0 => '¿Zer da BBCode?',
		1 => 'BBCode HTML-aren inplementazio berezi bat da. Foroan BBCodea erabili dezakezun ala ez administratzaileak erabakitzen du. Hortaz gain BBCode-a desgaitu dezakezu mezuak bidaltzeko formularioan. BBCode-a bera estiloz HTML-aren antzekoa da, Markak parentesi karratuetan sartzen dira, [ eta ] ez &lt; eta &gt; Eta zer eta nola ikusten den gaineko kontrol handiagoa eskeintzen du. Erabiltzen duzun txantiloiaren arabera BBCode-a era errazean gehitzeko aukera izan dezakezu mezuaren gorputzaren gaineko botoi batzuen bitartez bidalketa formularioan. Honekin ere hurrengo gida erabilgarria izan daiteke zuretzat.'
	),
	array(
		0 => '--',
		1 => 'Testu formatua'
	),
	array(
		0 => 'Nola sortu testu lodia, italikoa eta azpimarratua',
		1 => 'BBCode-ak oinarrizko estiloa azkar aldatzeko markak ditu. Hurrengo moduan lortzen da hau: <ul><li>Testu bat lodi bihurtzeko hurrengo marken artean sar ezazu <b>[b][/b]</b> (bold), adibidez: <br /><br /><b>[b]</b>Kaixo<b>[/b]</b><br /><br />honela ikusten da <b>Kaixo</b></li><li>Azpimarratzeko hau erabili: <b>[u][/u]</b> (underline), adibidez:<br /><br /><b>[u]</b>Egunon<b>[/u]</b><br /><br />hau sortzen du: <u>Egunon</u></li><li>Testua italikan jartzeko: <b>[i][/i]</b> (italic), adibidez.<br /><br />hau da <b>[i]</b>Zoragarri!<b>[/i]</b><br /><br />hondokoan bihurtzen da <i>Zoragarri!</i></li></ul>'
	),
	array(
		0 => 'Nola aldatu testuaren kolorea edo tamaina',
		1 => 'Zure testuaren kolorea edo tamaina aldatzeko hurrengo markak erabili ditzakezu. Kontutan hartu emaitzaren itxura ikusteko erabiltzen den nabigatzailearen eta sistemaren arabera aldatu daitekela: <ul><li>Testuaren kolorearen aldaketa honekin bilduz lortzen da: <b>[color=][/color]</b>. Sistemak ezagutzen duen kolore izen bat jarri dezakezu (adibidez. red, blue, yellow, eta abar.) edo hirukote hexadezimala zuzenean, adibidez. #FFFFFF, #000000. Beraz, testu gorria sortzeko hau erabili zenezake:<br /><br /><b>[color=red]</b>Kaixo!<b>[/color]</b><br /><br />edo<br /><br /><b>[color=#FF0000]</b>Kaixo!<b>[/color]</b><br /><br />biek emaitza bera emango dute <span style=\"color:red\">Kaixo!</span></li><li>Testuaren tamaina aldatzea antzeko modu batean lortzen da, <b>[size=][/size]</b> erabiliz alegia. Marka hau erabilitako txantiloiaren araberakoa da, baina aholkatutako formatua testuaren tamaina portzentaian adierazten duen zenbakizko balio bat da, 20-tik hasita (oso txikia) 200-era (oso handia). Adibidez:<br /><br /><b>[size=30]</b>TXIKIA<b>[/size]</b><br /><br />normalean hau ematen du <span style=\"font-size:30%;">TXIKIA</span><br /><br />eta:<br /><br /><b>[size=200]</b>ITZELA!<b>[/size]</b><br /><br />honela ikusten da <span style=\"font-size:200%;">ITZELA!</span></li></ul>'
	),
	array(
		0 => 'Formatu markak konbinatu ditzazket?',
		1 => 'Bai noski, adibidez atenzioa deitzeko hau idatzi zenezake:<br /><br /><b>[size=200][color=red][b]</b>BEGIRA NAZAZUE!<b>[/b][/color][/size]</b><br /><br />hau lortuko zenuen <span style=\"color:red;font-size:200%;"><b>BEGIRA NAZAZUE!</b></span><br /><br />Dena dela ez dizugu gomendatzen itxura hau duen testua erabiltzea normalean! Gogoratu ere zure esku dagoela, bidaltzailearen esku, markak behar bezala itxitea. Adibidez, hurrengo hau gaizki dago:<br /><br /><b>[b][u]</b>Hau gaizki dago<b>[/b][/u]</b>'
	),
	array(
		0 => '--',
		1 => 'Zitak eta zabalera finkodun testuak'
	),
	array(
		0 => 'Erantzunetan testua zitatzea',
		1 => 'Bi eratan zitatu dezakezu testua, erreferentziarekin edo erreferentziarik gabe .<ul><li>Zita funtzioa erabiltzen baduzu foroko mezu bati erantzuteko, ikusiko duzunez testua zure mezuari eranzten zaio marka hauen artean: <b>[quote=&quot;&quot;][/quote]</b>. Metodo honek zitak pertsona bati (edo nahi duzunari) erreferentzia eginez sortzea baimentzen dizu. Adibidez Fernando Amezketarrak idatzitako testu bat zitatzeko hau jarriko zenuke:<br /><br /><b>[quote=&quot;Fernando Amezketarra&quot;]</b>Berak esandakoa<b>[/quote]</b><br /><br />Emaitzean testuaren aurretik &quot;Fernando Amezketarra(e)k esan du:&quot; agertuko zen testuaren aurretik. Gogoratu <b>beharrezkoa</b> dela izena kakotxen artean &quot;&quot; jartzea. Derrigorrezkoak dira, ez dira aukerazkoak.</li><li>Bigarren metodoak zerbait itsuki zitatzea baimentzen dizu. Hau erabiltzeko testua <b>[quote][/quote]</b> marken artean sartu. Mezua ikusterakoan,testuaren aurretik besterik gabe Zita jarriko du.</li></ul>'
	),
	array(
		0 => 'Kodea edo zabalera finkoko testua',
		1 => 'Kode zati bat idatzi nahi baduzu, edo zabalera finkoko edozein testu, adibidez Courier letra tipoa erabiliz, zure testua <b>[code][/code]</b> marken artean sartu behar duzu, adibidez .<br /><br /><b>[code]</b>echo &quot;Hau kodea da&quot;<b>[/code]</b><br /><br /> <b>[code][/code]</b> marken artean erabilitako formatua gordetzen da gero bistaratzeko. PHP sintaxia nabarmentzeko <strong>[code=php][/code]</strong> marken erabilera gomendatzen da irakur erreztasuna hobetzearren PHP kodeen adidideak ematen direnean.'
	),
	array(
		0 => '--',
		1 => 'Zerrendak sortu'
	),
	array(
		0 => 'Ordenik gabeko zerrenda bat sortu',
		1 => 'BBCode-ak bi zerrenda mota onartzen ditu, ordenatua eta ordenik gabekoa. Funtsean HTML zerrenden modukoak dira. Ordenatu gabeko zerrendak elementuak bata bestearen ostean bistaratzen ditu bakoitzari bolatxo bat jarriz. Ordenatu gabeko zerrenda bat sortzeko <b>[list][/list]</b> erabili ezazu, eta zerrendako elementu bakoitza <b>[*]</b> erabiliz markatu ezazu. Adibidez zure gogoko koloreak zerrendatzeko hau erabili zenezake:<br /><br /><b>[list]</b><br /><b>[*]</b>Gorria<br /><b>[*]</b>Urdina<br /><b>[*]</b>Horia<br /><b>[/list]</b><br /><br />Honek hurrengo zerrenda sortuko luke:<ul><li>Gorria</li><li>Urdina</li><li>Horia</li></ul>'
	),
	array(
		0 => 'Ordenatutako zerrenda bat sortu',
		1 => 'Beste zerrenda mota, ordenatutako zerrenda alegia, elementu bakoitzaren aurrean agertuko denaren gaineko kontrola ematen dizu. Ordenatutako zerrenda bat sortzeko <b>[list=1][/list]</b> erabili zenbakidun zerrenda sortzeko edo bestela <b>[list=a][/list]</b> zerrenda alfabetikoa sortzeko. orden gabeko zerrenda bezala elementuak <b>[*]</b> erabiliz markatu. Adibidez:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Dendara joan<br /><b>[*]</b>Ordenagailu berria erosi<br /><b>[*]</b>Ordenagailua izorratzen denean biraoak bota<br /><b>[/list]</b><br /><br />Hurrengo zerrenda sortuko du:<ol style="list-style-type: arabic-numbers"><li>Dendara joan</li><li>Ordenagailu berria erosi</li><li>Ordenagailua izorratzen denean biraoak bota</li></ol>Zerrenda alfabetikoa lortzeko hau erabili beharko zenuke:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Lehen erantzun posiblea<br /><b>[*]</b>Bigarren erantzun posiblea<br /><b>[*]</b>Hirugarren erantzun posiblea<br /><b>[/list]</b><br /><br />hau lortuz:<ol style="list-style-type: lower-alpha"><li>Lehen erantzun posiblea</li><li>Bigarren erantzun posiblea</li><li>Hirugarren erantzun posiblea</li></ol>'
	),
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Loturak sortu'
	),
	array(
		0 => 'Beste gune batetara lotu',
		1 => 'phpBB-ren BBCode-ak loturak edo URL-ak sortzeko aukera ezberdinak ditu.<ul><li>Lehena <b>[url=][/url]</b> marka da, = sinboloaren ostean idazten duzun edozer URL gisa arituko da. Adibidez phpBB.com helbidera lotzeko:<br /><br /><b>[url=http://www.phpbb.com/]</b>phpBB Bisitatu!<b>[/url]</b><br /><br />Honek hurrengo esteka sortzen du, <a href="http://www.phpbb.com/">phpBB Bisitatu!</a> esteka leiho berri batean edo leiho berean zabal daiteke, erabiltzaileak erabiltzen duen nabigatzailearen hobespenen arabera.</li><li>URL helbidea bera lotura gisa agertzea nahi baduzu, honela egin dezakezu:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Honek hurrengo esteka sortzen du, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Gainera phpBB-k <i>Lotura Magikoak</i> izeneko funtzioa du, honi esker sintaktikoki zuzena den edozein URL helbide esteka bihurtuko du marka berezirik erabili gabe, ez da ezta hasierako http:// behar ere. Adibidez www.phpbb.com mezu batetan idatzita, <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> bihurtuko da mezua bistaratzerakoan.</li><li>Gauza bera posta elektroniko helbideekin, adibidez:<br /><br /><b>[email]</b>inor.ez@non.bait<b>[/email]</b><br /><br />hau lortzeko: <a href="mailto:inor.ez@non.bait">inor.ez@non.bait</a> edo besterik gabe inor.ez@non.bait idatzi zure mezuan eta automatikoki bihurtuko da posta elektroniko helbidea bistaratzerakoan. </li></ul>BBCode marka guztiekin bezala URL helbideak beste edozein marka artean jarri ditzakezu, adibidez <b>[img][/img]</b> (ikusi hurrengo sarrera), <b>[b][/b]</b>, eta abar. Formatu markekin bezala zure esku dago markak orden egokian ireki eta iztea, Adibidez:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <span style="text-decoration: underline">ez</span> da zuzena eta zure mezua ezabatua izan daiteke, beraz argi ibili.'
	),
	array(
		0 => '--',
		1 => 'Mezuetan irudiak bistaratu'
	),
	array(
		0 => 'Mezuei irudiak gehitu',
		1 => 'phpBB BBCode-ak badu marka bat mezuetan irudiak bistaratzeko. Bi puntu garratzitsu gogoratu behar dituzu marka hau erabiltzerakoan; erabiltzaile askok ez dute gustoko mezuetan irudi mordoa agertzea eta beste alde batetik bistaratzen duzun irudia dagoeneko interneten eskuragarri egon behar du (ezin da zure soilik ordenagailuko irudi bat izan, zure ordenagailuan web zerbitzari bat ez baduzu behintzat!). Irudi bat bistaratzeko irudira apuntatzen duen URL-a <b>[img][/img]</b> markekin inguratu behar duzu. Adibidez:<br /><br /><b>[img]</b>http://www.google.com/intl/en_ALL/images/logo.gif<b>[/img]</b><br /><br />Goiko URL atalean azaldu bezala irudi bat <b>[url][/url]</b> marken barruan sartu dezakezu nahi baduzu, adibidez <br /><br /><b>[url=http://www.google.com/][img]</b>http://www.google.com/intl/en_ALL/images/logo.gif<b>[/img][/url]</b><br /><br />hau sortuko luke:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Mezuei fitxategiak erantsi',
		1 => 'Foroko Administrariek fitxategiak eransteko funtzioa gaitu baldin badute eta hori egiteko baimenik baldin baduzu, mezu bateko edozein lekutan erantsi dezakezu fitxategi bat <strong>[attachment=][/attachment]</strong> BBCode marka berria erabiliz. Mezuak idazteko pantailan fitxategiak eransteko botoia aurkituko duzu.'
	),
	array(
		0 => '--',
		1 => 'Bestelakoak'
	),
	array(
		0 => 'Nire marka propiak gehitu ditzazket?',
		1 => 'Bai, baina Foroko administraria izan behar duzu eta baimen egokiak euki. Horrela bada BBCode marka barriak gehitu ditzazkezu Administrazio Paneleko BBCodeak egokitu ataletik.'
	)
);

?>