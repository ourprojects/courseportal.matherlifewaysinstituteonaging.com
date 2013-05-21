<?php
/**
*
* help_faq.php [Basque [eu]]
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
//

$help = array(
	array(
		0	=> '--',
		1	=> 'Izena ematea eta Saio hasierari buruzko arazoak',
	),
	array(
		0	=> 'Zergatik ezin dut saioa hasi?',
		1	=> 'Hainbat arrazoi direla eta gertatu daiteke hau. Lehenengo eta behin ziurtatu ezazu erabiltzaile izena eta pasahitza ondo dituzula. Ondo idatzita badaude eta oraindik ezin izan baduzu saioa hasi, jar zaitez Foroko Administrariekin kontaktuan fororan sarrera debekatu ez dizutela ziurtatzeko. Baliteke ere foroko ezarpenak gaizki egotea. Azken kasu honetan, Foroko Administrarien eskuetan legoke arazoa konpontzea.',
	),
	array(
		0	=> 'Zergatik eman behar dut izena?',
		1	=> 'Agian ez duzu behar, Foroaren Administrarien esku dago mezuak bidaltzeko izena eman behar duzun erabakitzea. Hala ere izena emateak bisitariek ez dituzten baliabide batzuetara sarbidea erraztuko dizu, besteak beste ikono pertsonalizatuak, mezularitza pribatua, erabiltzaileen arteko eposta, erabiltzaile talde harpidetza, eta abar. Izena emateak unetxo bat besterik ez darama, beraz egitea gomendatuta dago.',
	),
	array(
		0	=> 'Zergaitik iraungiten dit saioa automatikoki??',
		1	=> '<em>Bisita bakoitzean saioa automatikoki hasi</em> laukitxoa ez baldin baduzu markatzen saioa hasterakoan, konektatuta zauden arte baino ez zaizu mantenduko saioa. Beste erabiltzaileren batek zure kontua erabil dezan ekiditeko egiten da horrela. Saioa mantentzeko, markatu ezazu laukitxoa saioa hasterakoan. Dena dela, ez da komenigarria marka dezazula foroan ordenadore partekatu batetik (adibidez liburutegitik, internet kafetegi batetik, kz gunetik edo unibertsitatetik) sartzen baldin bazara. Ez baldin baduzu laukitxorik ikusten Foroko Administratriek aukera hori ezgaitu egin dutelako da.',
	),
	array(
		0	=> '¿Nola ekidin dezaket nire erabiltzaile izena konektaturiko erabiltzaileen zerrendan agertzea?',
		1	=> 'Erabiltzaile Kontrol Panelan, "Foro hopespenak" sailaren barruan <em>Nire konexio-egoera ezkutatu</em> aukera aurkituko duzu. <em>Bai</em> aukeratuz gaitu eta administratzaile eta moderadorearen zerrendetan baino ez zara agertuko. Beste guztientzat erabiltze ezkutu moduan baino ez zara izango.',
	),
	array(
		0	=> 'Pasahitza galdu dut!',
		1	=> 'Lasai! Ezin baduzu pasahitza berreskuratu, erraz desaktibatu edo aldatu dezakezu. Izenpetze orrialdera jo eta <u>Pasahitza ahaztu zait</u>n klikatu, jarraitu bertako oharrak eta laister sartuka zara kontura berriro.',
	),
	array(
		0	=> 'Izena eman nuen baina ezin dut saiorik hasi!',
		1	=> 'Lehenik eta behin, Egiazta itzazu erabiltzaile izen eta pasahitza zuzen sartu dituzula. Egokiak badira, bietako bat gertatu daiteke, COPPA (Haur babes Sistema bat) gaituta badago eta izena ematerakoan <u>13 urte baino gazteagoa naiz</u> loturan klik egin bazenuen, jasotako argibideak jarraitu beharko dituzu. Foro batzuk izen emate berri guztiak aktibatzea eskatu dezakete, agian zuk zeuk edo administratzaileak aktibatu behar du saioa hasteko aukera izateko. Aktibatzea beharrezkoa bada, izena ematerakoan ematen dira nola egiteko azalpenak. Posta elektroniko mezu bat bidali bazaizu, bertan agertzen zaizkizun argibideak jarraitu. Ez baduzu mezurik jaso, agian helbidea oker zegoen edo Spam irazkiren batek harrapatu du. Posta elektroniko helbidea ondo dagoela ziurta bazenezake jar zaitez Foroko Administrariekin kontaktuan. Aktibazioa eskatzearen arrazoi bat erabiltzaile <i>zakarrek</i> foroa anonimoki gehiegikeretarako erabil dezaten ekiditea da.',
	),
	array(
		0	=> 'Orain dela aspaldi eman nuen izena baina ezin dut saioa hasi!',
		1	=> 'Litekena da zure kontua ezgaitua izan dela. Hainbat arrazoi egon litezke kontu bat ezgaitzeko, baina sarriena aspalditik mezurik ez bialtzearena izaten da. Foro batzuk aldiro garbitzen dituzte mezurik aspalditik bidali ez dituzten erabiltzaileak kudeatutako datu baseak ez daitezen lar betetu. Hala gertatu izan bada berriro izena emanda konpon dezakezu arazoa eta... parte hartu ezazu sarriago eztabaidetan!.',
	),
	array(
		0	=> 'Zer da COPPA?',
		1	=> 'COPPA, (Child Online Privacy and Protection Act of 1998) Haur babesari buruzko Amerikar Estatu Batuetako lege bat da. Lege hau dela eta, informazio pertsonala batu dezaketen webgunei (foroak kasu) 13 urte baino edade gitxiagoko umeen izen ematea, guraso edo tutoreen baimen idatziarekin baino ez onartzera derrigortzen zaie. Zeure kasua baliteke, jo ezazu lege aholkulari batengana.',
	),
	array(
		0	=> 'Zergatik ezin dut izenik eman?',
		1	=> 'Baliteke Foroko Administrariek zure IP helbidea debekatu izatea edo erabiltzaile izen zehatz hori ezgaitua izatea. Baliteke ere Foroko administrariek erabiltzaile berrien izen ematea ezgaitu izana. Mesedez, jar zaitez Foroko Administrariekin kontaktuan.',
	),
	array(
		0	=> 'Ze eginkizun du "Foroko cookie guztiak ezabatu" aukerak?',
		1	=> '"Foroko cookie guztiak ezabatu" phpBBk saioa hasita eta erabiltzailea egiaztatuta mantentzeko erabiltzen dituen cookie guztiak garbitzen ditu. Foroko administrariek horretarako gaitu baldin badituzte, beste eginkizun batzuk ere bete ditzazkete (erabiltzaileak ordurarte irakurritakoa jarraitzea, adibidez). Saioa hasi edo bukatzeko arazoak baldin badituzu, foroko cookieak ezabatzea lagungarri gerta liteke.',
	),
	array(
		0	=> '--',
		1	=> 'Erabiltzailearen hobespenak eta konfigurazioa',
	),
	array(
		0	=> 'Nola aldatu dezaket nire konfigurazioa?',
		1	=> 'Izena emandako erabiltzailea baldin bazara, zure datu guztiak foroko datu basean bildurik daude. Aldatu nahi badituzu Erabiltzaile Kontrol Panelera jotzea baino ez duzu. Bertorako lotura foroko goikaldean egoten da normalean. Sistema honek zure konfigurazioa eta hobespenak aldatzea utziko dizu.',
	),
	array(
		0	=> 'Foroetako ordutegia ez da zuzena!',
		1	=> 'Beste esparru bateko ordutegia ikusten egotea izan liteke. Horrela baldin bada Erabiltzaile Kontrol Panelera jo eta zure ordutegi esparrua zehaztu, adibidez London, Paris, New York, Sydney etab. Mesedez, gogoratu ezazu ordutegi esparrua eta beste hobespenik aldatzeko, izena eman behar duzula. Oraindik ez baduzu izenik eman orain duzu aukera ederra.',
	),
	array(
		0	=> 'Profileko ordutegi esparrua aldatu dut baina orduak oraindik txarto darrai!',
		1	=> 'Ziur bazaude ordutegi esparru zuzena zehaztu duzula eta ez dela udako ordutegiari egotzi dakioken arazoa, orduan zerbitzariko ordularia gaizki dagoenaren seinale da. Mesedez, jar zaitez Foroko Administrariekin kontaktuan arazo hau konpontzearren.',
	),
	array(
		0	=> 'Ez dut nire hizkuntza zerrendan aurkitzen!',
		1	=> 'Foroko Administrariek ez dutelako hizkuntza paketea foroan instalatu edo oraindik ez dagoelako itzulpenik eskuragarri gerta liteke hau. Eska iezaiezu Foroko Administrariei zure hizkuntza jar dezatela, eta hizkuntza paketea ez baldin badago ez ezazu itzulpena egiten erreparorik izan, gero jende askok eskertuko bait dizu. Behekaldean dagoen phpBB Group webgunearen lotura jarraituz aurkituko duzu behar duzun informazioa.',
	),
	array(
		0	=> 'Nola jar dezaket irudi bat nire erabiltzaile izenaren azpian?',
		1	=> 'Bi irudi mota jar daitezke zure erabiltzaile izenaren azpian mezuak ikusterakoan. Lehena, erabiltzailearen mailari (rank) dagokio eta foroan zure maila zein den edo zenbat mezu bidali dituzun erakusten du. Erabilitako txantilloiaren arabera, izartxoak, blokeak edo puntuak izan daitezke. Bigarrena, normalean handiagoa izani, irudi grafiko bakar eta pertsonala da. Avatar izena hartzen du eta administratzailearen esku dago bere erabilera eta tamainak baimentzea. Ez baldin baduzu avatarrik erabiltzeko aukerarik, jar zaitez Foro Administrariekin kontaktuan eta galde iezaiezu ezezko horren zergatiaz.',
	),
	array(
		0	=> 'Nola aldatu dezaket nire maila (rank)?',
		1	=> 'Mailak bidali dituzun mezu kopurua edo erabiltzaile jakin batzuk, adibidez  moderadoreak edo administratzaileak, adierazteko erabilten dira. Ezin duzu zure maila (ranka) zuzenean aldatu hau zuzenki erlazionatua bait dago idatzi duzun mezu kopuruarekin, zure moderatzaile edo administratzaile egoerakin, edo RANK bereziekin. Mesedez ez ezazu alperrikako mezurik bidali zure maila igotzeko foro gehienek ez bait dute portaera hau onartzen eta moderadoreak edo administrazaileak mezu kopurua murriztu egingo dizulako.',
	),
	array(
		0	=> 'Erabiltzaileren baten posta elektroniko loturan klikatzerakoan, izena eman dezadala eskatzen dit!',
		1	=> 'Izena emandako erabiltzaileek baino ezin dituzte posta mezuak bidali formulario bidez, eta hori ere Foroko Administrariek aukera hori gaitu izan balute! Erabiltzaile ezezagunek ez dezaten posta elektronikoa gaizkia egiteko erabili(SPAMa edo mezu iraingarriak bidaltzeko, adibidez) egiten da horrela.',
	),
	array(
		0	=> '--',
		1	=> 'Mezuak argitaratu',
	),
	array(
		0	=> 'Nola argitaratu daitezke mezuak foran?',
		1	=> 'Mezuak bidaltzeko izena eman beharko duzu lehenago ziurrenik. Normalean goikaldean agertzen den izena emateko loturan klikatzea baino ez duzu. Foro bakoitzeko behekaldean, aldiz, egitera baimenduta zauden eragiketen zerrenda agertuko zaizu. Adibidez: Gai berriak argitaratu ditzakezu, Inkestetan bozka zenezake, etab. ',
	),
	array(
		0	=> 'Nola egin dezaket mezu bat aldatu edo ezabatzeko?',
		1	=> 'Foroko administratzaile edo moderadore izan ezik, zuk bidalitako mezuak baino ezin ditzazkezu aldatu edo ezabatu. Mezuak aldatzeko <em>aldatu</em> botoian baino ez duzu klikatu behar. Dena dela, batzutan, mezua denbora tarte mugatu batean baino ezin daiteke aldatu. Zure mezua nonoren erantzuna jaso baldin badu, azpian testu txiki bat agertuko da zeurea aldatua izan dela (eta zenbat biderrez eta noiz) adieraziz. Testu txiki hau ez da agertuko aldaketa moderadore batek edo Foroko Administrariek egin baldin badute. Kasu hauetan normalena, beraiek oharren bat uztea izaten da, aldatzearen  arrazoia azalduz. Baimen berezirik ez duten erabiltzaileek ezin dute mezurik ezabatu erantzunik jaso badute.',
	),
	array(
		0	=> 'Nola gehitu diezaioket sinadura mezu bati?',
		1	=> 'Zure mezuan sinadura bat gehitu ahal izateko lehendabizi bat sortu behar duzu. Jo ezazu zure Erabiltzaile Kontrol Panelera horretarako. Behin sinadura sortua, mezua bidaltzen duzunean <em>Sinadura gehitu</em> klikatu behar duzu. Zure Erabiltzaile Kontrol Panelean baduzu ere sinadura mezu guztietara automatikoki gehitzeko aukera. Hori aukeratuta ere, mezu solteak utz ditzakezu sinatu gabe <em>Sinadura gehitu</em> laukitxoan berriro klikatuz.',
	),
	array(
		0	=> 'Nola sortu inkesta bat?',
		1	=> 'Mezu bati inkesta bat gehitzeko, mezuak bidaltzeko formulario nagusiaren azpikaldean agertuko zaizun <i>Inkesta sortu</i> laukitxoan klikatu. Ezin baduzu laukitxo hori ikusi, inkestak egiteko baimenik ez duzunaren seinale da. Inkestaren izenburua eta aukerak (bi gitxienez) sartu aukera bakoitza testu esparruko marra ezberdinetan dagoela ziurtatuz. <i>Aukerak erabiltzaileko</i> erabiliz, inkesta konfigura dezakezu, adibidez inkestari epe muga bat jarriz (0 infiniturako) edota partehartzaileen kopurua eguneko mugatu, edo partehartzaileei euren bozkak aldatzeko aukera eman.',
	),
	array(
		0	=> 'Zergatik ezin diot aukera gehiago gehitu inkestari?',
		1	=> 'Inkesta bati gehitu litzaioken aukeren muga Foroko Administrariek jartzen dute. Baimendutakoak baino aukera gehiago behar dituzula pentsatzen baduzu jar zaitez beraiekin kontaktuan.',
	),
	array(
		0	=> 'Nola egin dezaket inkesta bat aldatu edo ezabatzeko?',
		1	=> 'Mezuekin gertatzen den bezala, inkestak sortu dituenak, moderadore edo administratzaileren batek baino ezin dituzte aldatu. Inkesta aldatzeko, gaia sortu duen mezua aldatu (inkesta beti egongo da gai honi lotua). Inkestak ez baldin badu erantzunik, sortu duen erabiltzaileak berak aldatu edo ezabatu dezake, baina bestela administratzaile edo moderadoreak baino ezin dute inkesta aldatu edo ezabatu. Inkestak erdizka daudenean aldatu daitezen ekiditzeko egiten da horrela.',
	),
	array(
		0	=> 'Zergatik ezin dut fororen batera sartu?',
		1	=> 'Foro batzuk erabiltzaile  edo talde mugatu batzuentzat izan daitezke. Mezuak ikusi, irakurri edo bidaltzeko baimen bereziren bat behar dezakezu, eta foroaren moderadoreak edo Foroko administrariek baino ezin dezakete baimen hori eman. Beraz, jar zaitez beraiekin kontaktuan.',
	),
	array(
		0	=> '<Zergatik ezin dut fitxategi erantsirik gehitu?',
		1	=> 'Fitxategi erantsiak gehitzeko baimenak foroko, taldeko edo erabiltzaile banakakoen arabera ematen dituzte Foroko Administrariek. Agian administratzaileek ez dute foro jakin horretan fitxategi erantsirik gehitzea baimentzen, edo agian talde edo erabiltzaile jakin batzuek baino ezin ditzakete fitxategiok gehitu. Jar zaitez Foroko Administrariekin kontaktuan fitxategi erantsiak gehitu nahi badituzu.',
	),
	array(
		0	=> 'Zergaitik jaso dut ohartarazpen bat?',
		1	=> 'Foro Administariek arau jakin batzuk dituzte foro bakoitzean. Arauren bat hautsi baldin baduzu, ohartarazpen bat bidal zaitzakete. Mesedez, ohar zaitez foro bakoitzeko erabakia dela eta phpBB Groupek ez duela erabaki honekin zerikusirik. Jar zaitez Foroko Administrariekin kontaktuan ohartarazpenaren zergatia argitu nahi baduzu.',
	),
	array(
		0	=> 'Nola eman diezaioket mezu baten berri moderadore bati?',
		1	=> 'Foroko Administrarien arabera. Mezuen berri emoteko aukera baimendurik balego, mezu bakoitzaren ondoan mezu horri buruz berri emoteko botoi bat agertu beharko luke. Botoia klikatu eta eskatzen zaizkizun pausuak bete mezuaren berri emateko.',
	),
	array(
		0	=> 'Zertarako balio du "Gorde" botoiak gaiak bidaltzerakoan?',
		1	=> '"Gorde" botoiak geroago bete eta bidaliko diren zirriborroak gordetzeko balio du. Gordetako zirriborro batera berriro joteko Erabiltzailearen Kontrol Panelera joan.',
	),
	array(
		0	=> 'Nire mezuak, zergaitik izan behar dute onartuak?',
		1	=> 'Baliteke Foroko Administrariek bidalitako mezuek argitaratu baino lehen onarpena beharrezkoa dutela erabaki izana. Beste arrazoiren bat mezuak bidaltzeko onarpena behar duen talde baten jarri zaituztela ere izan daiteke . Mesedez, jar zaitez Foroko Administrariekin kontaktuan xehetasunak argitzearren.',
	),
	array(
		0	=> 'Nola sustatu dezaket nire gaia?',
		1	=> '"Gaia sustatu" botoian klikatuz. Horrela gaia foroko lehen orrira bultza dezakezu. Gaia ikusterakoan ez baldin baduzu botoia ikusten, gaiak sustatzeko aukera ezgaituta egotea edota oraindik ez dela gaia sustatzeko behar den denbora epea bete izan liteke. Erantzun soilarekin ere sustatu daiteke gai bat, dena dela, irakur itzazu lehenago foroko arauak eragiketa hori baimendua dagoen jakiteko.',
	),
	array(
		0	=> '--',
		1	=> 'Mezu formateoa eta gai motak',
	),
	array(
		0	=> 'Zer da BBCode kodea?',
		1	=> 'BBCode kodea HTMLren aplikazio  berezi bat da mezuetan agertzen diren objektuetako formatuen kontrolari bideratua. BBCode erabiltzeko era administratzaileak erabakitzen du, baina mezuak bidaltzeko formulariotik ere ezgaitu dezake norberak. HTML ren oso antzekoa da, markak kortxete artean doaz [ eta ] &lt; eta &gt;ren barruan joan beharrean. Kode honi buruzko informazio gehiago lortzeko BBCode eskuliburua ikus dezakezu, mezua bidaltzerako bakoitzean agertuko zaizun loturan klikatuz.',
	),
	array(
		0	=> 'HTML erabil dezaket?',
		1	=> 'Ez. Ezin dezakezu HTML markarik erabili mezuetan. HTMLk baimentzen dituen formateo aukera gehienak BBCode erabiliz lor zenitzake.',
	),
	array(
		0	=> 'Zer dira irrifartxoak?',
		1	=> 'Irrifartxoak, edo Emotikonoak, kode txiki bat sartuz emozioak islatzeko erabiltzen diren iruditxoak dira, adibidez :) ikurrak poza adierazteko erabiltzen da. eta :( ikurrak tristura islatzen du. Irrifartxoen zerrenda osoa mezuak bidaltzeko formularioan ikus daiteke. Dena dela, ez itzazu irrifartxo lar erabili, euren gehiegizko erabilerak mezuaren ulermena zaildu bait dezake. Foroko Administrariek mezu bakoitzean erabil daitezken irrifartxo kopuru gehienezko bat ere ezarri dezake.',
	),
	array(
		0	=> 'Irudiak bidali ditzazket?',
		1	=> 'Bai, mezuetan irudiak erakutsi ditzakezu. Foroko Administrariek fitxategi erantsiak gehitzeko baimena eman baldin badute, irudia forora zuzenean bidal zenezake. Horrela ez bada, irudia zerbitzari ireki batera gehitu beharko zenuke eta lotura batekin erantsi mezuari. Ezin ditzakezu zure ordenadorean dauden irudiak gehitu, ezta pasahitzen bidez gordeta dauden zerbitzuetakoak (yahoo, hotmail, ...). Irudiak erakusteko BBCodeko [img] marka erabil ezazu.',
	),
	array(
		0	=> 'Zer dira iragarki orokorrak?',
		1	=> 'Iragarki orokorrak informazio garrantzitsua duten mezuak dira eta zilegi den bakoitzean irakurri behar zenitzake. Foro guztien eta Erabiltzaile Kontrol Panelaren goikaldean agertuko dira. Iragarki orokorrark bidalzeko baimenak Foroko Administrariek ematen dituzte.',
	),
	array(
		0	=> 'Zer dira iragarkiak?',
		1	=> 'Iragarkiak, irakurtzen zauden foroari buruzko informazio garrantzitsua duten mezuak dira eta zilegi den bakoitzean irakurri behar zenitzake. Bidali diren foroko goikaldean agertzen dira. Iragarki orokorrekin gertatzen den bezala, iragarkiak bidaltzeko baimenak Foroko Administrariek ematen dituzte.',
	),
	array(
		0	=> 'Zer dira gai itsaskorrak?',
		1	=> 'Gai itsaskorrak (garrantzitsuak) iragarkien azpian agertzen dira eta lehenengo orrialdean soilik. Sarritan nahiko garrantzitsuak dira eta zilegi den bakoitzean irakurri behar zenitzake. Iragarki orokorretan eta iragarkietan gertatzen den bezala, gai itsaskorrak bidaltzeko baimenak Foroko Administrariek ematen dituzte.',
	),
	array(
		0	=> 'Zer dira gai itxiak?',
		1	=> 'Erabiltzaileek dagoeneko erantzun ezin duten gaiak dira gai itxiak. Bertan legoken edozein inkesta ere automatikoki bukatuko litzateke. Arrazoi ezberdinak direla medio itxi daitezke gaiak eta moderadorearen edo foroko administratzaileren baten eskuetan dagoen erabakia da. Baliteke Foroko Administrariek zure gai propioak itxitera baimendutea ere.',
	),
	array(
		0	=> 'Zer dira gai ikonoak?',
		1	=> 'Gaiaren edukia islatzeko balio duten autoreak aukeratutako iruditxoak dira. Mezuetan ikonoak erabiltzeko aukera Foroko Administrariek ematen dute.',
	),
	// Bloke honek FAQ galderak txantilloiaren bigarren zutabera igaroko ditu (antza).
	array(
		0 => '--',
		1 => '--'
	
	array(
		0	=> '--',
		1	=> 'Erabiltzaile mailak eta taldeak',
	),
	array(
		0	=> 'Zer dira administratzaileak?',
		1	=> 'Administratzaileak foro osoaren gain kontrolik handiena duten kideak dira. Baimenak, moderadoreak eta era guztietako konfigurazioak kontrolatu ditzakete: erabiltzaile taldeak sortu, erabiltzaile jakinak debekatu, ... Foroko sortzailearen menpe baino ez daude eta foro guztietan moderatzeko aukera ere euki dezakete sortzaileak horretarako baimena eman baldin badiete.',
	),
	array(
		0	=> 'Zer dira moderadoreak?',
		1	=> 'Moderadoreak foroa bere egunerkotasunean zaintzen duten erabiltzaile edo erabiltzaile taldea da. Mezuak aldatu edo ezabatu, gaiak itxi, zabaldu, mugidu, ezabatu edo zatitzeko ahalmena dute. Orokorrean, erabiltzaileek gaia jarrai dezaten edo spama eta eduki iraingarriak ekiditzeko daude jarrita.',
	),
	array(
		0	=> 'Zer dira erabiltzaile taldeak?',
		1	=> 'Erabiltzaile taldeak, Administratzaileek foroko erabiltzaileak errazago kudea ditzaten egiten den zatitze bat da. Erabiltzaile bakoitza talde ezberdinetan egon daiteke eta talde bakoitzak norbanako baimenak jaso ditzake, adibidez talde oso bat moderatzaile bihurtu. Horrela hainbat erabiltzaileren baimenak alda daitezke behinean.',
	),
	array(
		0	=> 'Non daude eta nola egin naiteke erabiltzaile talde baten kide?',
		1	=> '"Taldeak" loturan klikatuz erabiltzaile talde guztiak ikusi ditzakezu. Talderen bateko kide egin nahi baduzu eta taldea irekia baldin bada, hori adierazten dauen botoian klikatu. Kontutan izan parte hartzea ez dela talde guztietan askea izango. Talde batzuk onarpena eskatuko dizute, beste batzuk itxita egongo dira eta beste batzuk kidetza ezkutudunak izan litezke. Talde batek onarpena eskatuko balu, taldeko moderadoreak talde horretan sartzeko egin duzun eskaeraren arrazoia itaun zaitzake. Bere onarpena beharko duzu taldeko kide izateko eta atzera bota bazaituzte bere arrazoiak eukiko ditu.',
	),
	array(
		0	=> 'Nola bihur naiteke taldeko moderadore?',
		1	=> 'Normalean taldeko moderadoreak Foroko Administrariek erabakitzen dute taldeak sortzerakoan. Erabiltzaile talde bat sortzen interesaturik baldin bazaude jar zaitez Foroko Administrariekin kontaktuan. Saiatu zaitez mezu pribatu batekin.',
	),
	array(
		0	=> 'Zergatik agertzen dira erabiltzaile talde batzuk kolore ezberdinetan?',
		1	=> 'Foroko Administrariek kolore ezberdinak erabil ditzazkete talde ezberdinetako kideen identifikzioa erraztearren.',
	),
	array(
		0	=> 'Zer da "Erabiltzaile talde lehenetsia"?',
		1	=> 'Erabiltzaile talde bat baino gehiagoko kide baldin bazara talde lehenetsiak zeure defektuzko kolore eta maila erakusteko balioko du. Erabiltzaile talde lehenetsiz aldatzeko Foroko Administrarien baimena beharko duzu.',
	),
	array(
		0	=> 'Zer da "Taldea" lotura?',
		1	=> 'Orrialde honetan foroan parte hartzen duen pertsonal osoaren zerrenda aurkituko duzu moderadorea eta administratzaileak barne. Beste xehetasun batzuk ere aurki zenitzake adibidez, moderatzen dituzten foroak etab.',
	),
	array(
		0	=> '--',
		1	=> 'Mezularitza pribatua',
	),
	array(
		0	=> 'Ezin dut mezu pribaturik bidali!',
		1	=> 'Hiru arrazoi posible daude; Ez duzu izenik eman eta/edo ez duzu saiorik hasi, Administratzaileak mezu pribatu sistema ezgaitu du foro osorako edo mezu pribatuak bidaltzea eragotzi dizu. Jar zaitez Foroko Administrariekin kontaktuan, mesedez.',
	),
	array(
		0	=> 'Nahi ez ditudan mezu pribatuak jasotzen darrait!',
		1	=> 'Erabiltzaile Kontrol Panelan baduzu erabiltzaile baten mezu pribatuak blokeatzeko aukera. Dena dela, mezu iraingarriak erabiltzaile jakin batetik baino ez baldin badituzu jasotzen, jar zaitez Foroko Administrariekin kontaktuan beraiek bait dute erabiltzaileei mezu pribatuak bialtzeko aukera kentzeko ahalmena.',
	),
	array(
		0	=> 'Spam edo posta elektroniko iraingarriak jaso dituz foro honetako erabiltzaile batengandik!',
		1	=> 'Sentitzen dugu hori entzutea. Posta elektronikoak bidaltzeko formularioek mezua nork bidali duen jakiteko segurtasun neurriak dituzte. Beraz, bialdu ezazu mezua osoan (bidaltzailearen datuak dituen headerra barne) Foroko Administrariei hauek irtenbideren bat aurki dezaten.',
	),
	array(
		0	=> '--',
		1	=> 'Adiskideak eta baztertutakoak',
	),
	array(
		0	=> 'Zer dira Adiskideak eta Baztertutakoak zerrendak?',
		1	=> 'Foroko beste erabiltzaileak antolatzeko erabiltzen dira zerrenda hauek. Adiskideen zerrendara gehitutakoak zure Erabiltzaile Kontrol Panelan agertuko dira konektatuta dauden jakiteko eta mezu pribatuak era azkarrean bidal diezaiezun. Foroan erabilitako txantilloiaren arabera ere, adiskideek bidalitako mezuak era nabariago batean ager daitezke. Baztertutakoen zerrendara gehitutakoen mezuak ezkutatu egingo zaizkizu berez.',
	),
	array(
		0	=> 'Nola gehitu / ezabatu dezaket erabiltzailerik nire Adiskideak edo Baztertutakoak zerrendetatik?',
		1	=> 'Erabiltzaileak zeure zerrendetara gehitzeko era bi dituzu. Erabiltzaile bakoitzeko profilan Adiskideak edo Baztertutakoak zerrendetara gehitzeko lotura zuzen bat duzu. Bestela, zerrendetara zuzenean gehi zenitzake beraien erabiltzaile izena idatziz zure Erabiltzaile Kontrol Panelan. Orri bera ere erabil zenezake zerrendetatik ezabatzeko.',
	),
	array(
		0	=> '--',
		1	=> 'Foroetan bilatzen',
	),
	array(
		0	=> 'Nola bilatu daiteke foroan/etan?',
		1	=> 'Sar ezazu bilaketa irizpidea aurkibide orrian, foroan edo gaietan aurkituko duzun bilaketa kutxan. Foroko orri guztietan aurkituko duzu baita "Bilaketa aurreratua" egiteko aukera emango dizun orrira eramango zaituen lotura. Dena dela, bilaketetara heltzeko erea, foroan erabilitako txantilloiaren arabera aldatu daiteke.',
	),
	array(
		0	=> 'Zergaitik ez du nire bilaketak emaitzik itzuli?',
		1	=> 'Agian ez duzu bilakate behar bezala zehaztu eta phpBB3k indexatu ez dituen irizpideak eukiko zituen. "Bilaketa Aurreratua"n dauden aukerak erabil itzazu eta zehatzago izaten saiatu zaitez.',
	),
	array(
		0	=> 'Zergaitik nire bilaketak ez du orri zuri bat baino ez itzuli?',
		1	=> 'Bilaketak emaitz gehiegi itzuli ditu eta zerbitzariak ezin izan ditu kudeatu. "Bilaketa Aurreratua"n dauden aukerak erabil itzazu eta zehatzago izaten saiatu zaitez bai irizpideekin bai bilatu behar diren foroekin.',
	),
	array(
		0	=> 'Nola bilatu erabiltzaileak?',
		1	=> '"Erabiltzaileak" orrira joan eta "Erabiltzaile bat bilatu"n egin klik.',
	),
	array(
		0	=> 'Nola aurki ditzaket bidali ditudan mezuak?',
		1	=> 'Erabiltzaile Kontrol Panelan dagoen "Zure mezuak erakutsi" botoian klikatuz edo zure profileko orrian bertan. Bidalitako gaiak aurkitu nahi badituzu, jo ezazu "Bilaketa Aurreratua" orrira eta bete itzazu eremu egokiak.',
	),
	array(
		0	=> '--',
		1	=> 'Gaietara harpidetu eta Gogokoenak gehitu.',
	),
	array(
		0	=> 'Zein da gai batera harpidetu eta gai hori gogokoenetara gehitzearen arteko ezberdintasuna?',
		1	=> 'Gai bat gogokoenetara gehitzen duzunean, nabigatzailetik webgune bat gogokoenetara (laster-marketara, alegia) gehituko bazenun moduan da. Ez zaizu berriei buruz abisurik emango baina gaira nahi duzunean itzultzeko lasterbidea duzu. Harpidetzerakoan, aldiz, gai horri buruz agertzen diren berriei buruz abisatuko zaizu.',
	),
	array(
		0	=> 'Nola harpidetu naiteke foro edo gai jakin batera?',
		1	=> 'Foro batera harpidetzeko "Forora harpidetu" loturan klikatu behar duzu. Gai batera harpidetzeko, gai horri erantzuterakoan agertuko zaizun "Harpidetu" laukitxoa gaitu beharko duzu edo "Gaira harpidetu" loturan klikatu.',
	),
	array(
		0	=> 'Nola ezabatu ditzaket harpidetzak?',
		1	=> 'Harpidetzak ezabatzeko Erabiltzaile Kontrol Panelan agertuko zaizun "Harpidetzak antolatu" botoiak klikatu.',
	),
	array(
		0	=> '--',
		1	=> 'Fitxategi erantsiak',
	),
	array(
		0	=> '¿Zeintzuk dira foro honetan baimendutako fitxategi erantsiak?',
		1	=> 'Baimendutako fitxategi erantsiak foro bakoitzaren arabera izaten da. Foro jakin batean zeintzuk gehitu daitezken baimendutakoak jakin nahi baduzu jar zaitez Foroko Administrariekin kontaktuan.',
	),
	array(
		0	=> 'Nola aurki nitzake nire fitxategi erantsi guztiak?',
		1	=> 'Bidali dituzun fitxategi erantsien zerrenda osoa Erabiltzaile Kontrol Panelan dagoen "Fitxategi erantsiak antolatu" loturan aurkituko duzu. ',
	),
	array(
		0	=> '--',
		1	=> 'phpBB3ri buruz',
	),
	array(
		0	=> 'Nork programatu zuen foro hau?',
		1	=> 'Foro hau jatorrizko formatoan <a href="http://www.phpbb.com/">phpBB Group</a>ek ekoiztu eta plazaratu zuen eta bereak dira ekoizpen eskubideak.  GNU eran egin zen eta distribuzio askekoa da. Bisitatu ezazu lotura xehetasun gehiago ezagutu nahi badituzu.',
	),
	array(
		0	=> 'Zergatik foroak ez du batek-daki-zein ezaugarri?',
		1	=> 'phpBB Groupek idatzi eta lizentziatu du software hau. Ezaugarri edo aukera berriren bat gehitu beharko litzaiokela edo erroreren bat (bug) dagoela uste baduzu jo ezazu phpBBren <a href="http://area51.phpbb.com/">Area51</a> webgunera. Bertan, zure aukerak aurrera eramateko baliabideak aurkituko dituzu.',
	),
	array(
		0	=> 'Norekin jarri behar dut harremanetan foro honetan aurki nezaken praktika iraingarri, legezkanpoko edo gehigikeriei buruz ohartarazteko?',
		1	=> '"Taldea" orrian agertzen den edozein administratzailerekin jar zaiteztke kontaktuan. Hala ere, horrela jokatuta ere ez bazenu erantzunik lortuko, webguneko jabearekin kontaktuan jartzen saiatu beharko zenuke (<a href="http://www.google.com/search?q=whois"Whois bilaketa bat</a> egiten saiatu zaitez jabea nor den ezagutzeko) edo foroa dohako zerbitzu batean antolatuta baldin badago (Yahoo!, gmail.com, hotmail.com, etab.) zerbitzu horretan gehiegikeriak kudeatzen dituen sailera jo. Mesedez, izan ezazu kontutan phpBB Taldeak ez duela <strong>inolako eskumenik</strong> foroak non, nola edo norengatik erabiliak direnei buruz. Beraz, ez du zentzurik beraiekin kontaktuan jartzerik arazo legalak direla ta. Softwarea beste batzuk nola erabiltzen dutenei buruzko kexek ez dute erantzunik jasoko.',
	),
);

?>