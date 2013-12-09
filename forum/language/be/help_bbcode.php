<?php
/** 
*
* help_bbcode [Belarusian]
*
* @package language
* @version $Id: help_bbcode.php,v 1.27 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
   exit;
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
		1 => 'Уступ'
	),
	array(
		0 => 'Што такое BBCode?',
		1 => 'BBCode — гэта адмысловы варыянт HTML. Ці зможаце вы выкарыстаць BBCode у вашых паведамленнях або не, вызначаецца адміністратарам форумаў. Акрамя таго, вы зможаце адключыць выкарыстанне BBCode у пэўным паведамленні пры ім размяшчэнні. Сам BBCode па стылю падобны на HTML, тэгі складзеныя ў квадратныя дужкі [ і ], а не ў < і >; ён дае больш магчымасцяў кіравання тым, як выводзяцца дадзеныя. Пры выкарыстанні некаторых шаблонаў вы зможаце дадаваць BBCode у вашы паведамленні, карыстаючыся простым інтэрфейсам, размешчаным над полем для ўводу тэксту. Але нават у гэтым выпадку дадзенае кіраўніцтва можа апынуцца карысным.'
	),
	array(
		0 => '--',
		1 => 'Фарматаванне тэксту'
	),
	array(
		0 => 'Як зрабіць тэкст тоўстым, нахільным або падкрэсленым',
		1 => 'BBCode уключае тэгі для хуткай змены стылю шрыфта, зрабіць гэта можна наступнымі спосабамі: <ul><li>Каб зрабіць тэкст тоўстым, складзеце яго ў <strong>[b][/b]</strong>, напрыклад:<br /><br /><strong>[b]</strong>Прывітанне<strong>[/b]</strong><br /><br />стане <strong>Прывітанне</strong></li><li>Для падкрэслення выкарыстайце <strong>[u][/u]</strong>, напрыклад:<br /><br /><strong>[u]</strong>Добрая раніца<strong>[/u]</strong><br /><br />стане <span style="text-decoration: underline">Добрая раніца</span></li><li>Курсіў робіцца тэгамі <strong>[i][/i]</strong>, напрыклад:<br /><br />Гэта <strong>[i]</strong>выдатна!<strong>[/i]</strong><br /><br />выдасць Гэта <i>выдатна!</i></li></ul>'
	),
	array(
		0 => 'Як змяніць колер або памер тэксту',
		1 => 'Для змены колеру або памеру шрыфта могуць быць скарыстаныя наступныя тэгі (канчатковы выгляд будзе залежаць ад сістэмы і браўзэра карыстальніка): <ul><li>Колер тэксту можна змяніць, атачыўшы яго <strong>[color=][/color]</strong>. Вы можаце паказаць альбо вядомае імя колеру (red, blue, yellow і т.п.), або шаснаццатковае паданне, напрыклад #FFFFFF, #000000. Такім чынам, для стварэння чырвонага тэксту вы можаце выкарыстаць:<br /><br /><strong>[color=red]</strong>Прывітанне!<strong>[/color]</strong><br /><br />або<br /><br /><strong>[color=#FF0000]</strong>Прывітанне!<strong>[/color]</strong><br /><br />абодва спосабу дадуць у выніку <span style="color:red">Прывітанне!</span></li><li>Змена памеру дасягаецца аналагічнай выявай пры выкарыстанні <strong>[size=][/size]</strong>. Гэты тэг залежыць ад выкарыстоўваных шаблонаў, рэкамендуемы фармат — лік, якое паказвае памер тэксту ў адсотках, ад 20% (вельмі маленькі) да 200% (вельмі вялікі) ад памеру па змаўчанні. Напрыклад:<br /><br /><strong>[size=30]</strong>МАЛЕНЬКІ<strong>[/size]</strong><br /><br />хутчэй усяго будзе <span style="font-size:30%;">МАЛЕНЬКІ</span><br /><br />у то час як:<br /><br /><strong>[size=200]</strong>ВЯЛІЗНЫ!<strong>[/size]</strong><br /><br />будзе <span style="font-size:200%;">ВЯЛІЗНЫ!</span></li></ul>'
	),
	array(
		0 => 'Ці магу я камбінаваць тэгі?',
		1 => 'Так, вядома можаце. Напрыклад, для прыцягнення нечага ўвагі вы зможаце напісаць:<br /><br /><strong>[size=200][color=red][b]</strong>ПАГЛЯДЗІЦЕ НА МЯНЕ!<strong>[/b][/color][/size]</strong><br /><br />што выдасць <span style="color:red;font-size:200%;"><strong>ПАГЛЯДЗІЦЕ НА МЯНЕ!</strong></span><br /><br />Мы не рэкамендуемы выводзіць такім чынам доўгія тэксты! Улічыце, што вы, аўтар паведамлення, павінны падбаць аб тым, каб тэгі былі правільна ўкладзеныя. Вось гэты BBCode, напрыклад, няправільны:<br /><br /><strong>[b][u]</strong>Гэта няслушна<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Цытаванне і выснова фарматаваных тэкстаў'
	),
	array(
		0 => 'Цытаванне пры адказах',
		1 => 'Ёсць два спосабу працытаваць тэкст, са спасылкай і без.<ul><li>Калі вы выкарыстаеце кнопку «Цытата» для адказу на паведамленне, то яго тэкст дадаецца ў поле ўводу акружаным блокам <strong>[quote=&quot;&quot;][/quote]</strong>. Гэты метад дазволіць вам цытаваць са спасылкай на аўтара, альбо на нешта яшчэ, што вы туды ўпішаце. Напрыклад, для цытавання ўрыўка тэксту, напісанага Mr. Blobby, вы напішаце:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Тэкст Mr. Blobby будзе тут<strong>[/quote]</strong><br /><br />У выніку перад тэкстам будуць устаўленыя словы &quot;Mr. Blobby пісаў(а):&quot;. Памятайце, вы <strong>павінны</strong> скласці імя ў двукоссі &quot;&quot;, яны не могуць быць апушчаныя.</li><li>Другі метад проста дазваляе вам нешта працытаваць. Для гэтага вам трэба скласці тэкст у тэгі <strong>[quote][/quote]</strong>. Пры праглядзе паведамлення будзе проста паказаны тэкст у блоку цытавання</li></ul>'
	),
	array(
		0 => 'Выснова кода або фарматаванага тэксту',
		1 => 'Калі вам трэба вывесці кавалак праграмы або нешта, што павінна быць выведзена шрыфтам фіксаванай шырыні (Courier), вы павінны скласці тэкст у тэгі <strong>[code][/code]</strong>, напрыклад<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />Усё фарматаванне, выкарыстоўванае ўсярэдзіне тэгаў <strong>[code][/code]</strong> будзе захавана. Падсвятленне сінтаксісу мовы PHP можа быць уключаная з дапамогай <strong>[code=php][/code]</strong> і рэкамендуецца пры адпраўцы паведамленняў з PHP-кодам для паляпшэння яго дабрачытаемасці.'
	),
	array(
		0 => '--',
		1 => 'Стварэнне спісаў'
	),
	array(
		0 => 'Стварэнне маркіраванага спісу',
		1 => 'BBCode падтрымлівае два выгляду спісаў: маркіраваныя і нумараваныя. Яны практычна ідэнтычныя сваім эквівалентам з HTML. У маркіраваным спісе ўсе элементы выводзяцца паслядоўна, кожны адзначаецца знакам-маркерам. Для стварэння маркіраванага спісу выкарыстайце <strong>[list][/list]</strong> і вызначыце кожны элемент пры дапамозе <strong>[*]</strong>. Напрыклад, каб вывесці свае каханыя колеры, вы можаце выкарыстаць:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Чырвоны<br /><strong>[*]</strong>Сіні<br /><strong>[*]</strong>Жоўты<br /><strong>[/list]</strong><br /><br />Гэта выдасць такі спіс:<ul><li>Чырвоны</li><li>Сіні</li><li>Жоўты</li></ul>'
	),
	array(
		0 => 'Стварэнне нумараванага спісу',
		1 => 'Другі тып спісу, нумараваны, дазваляе вылучыць, што менавіта будзе выводзіцца перад кожным элементам. Для стварэння нумараванага спісу выкарыстайце <strong>[list=1][/list]</strong> або <strong>[list=a][/list]</strong> для стварэння алфавітнага спісу. Як і ў выпадку маркіраванага спісу, элементы вызначаюцца з дапамогай <strong>[*]</strong>. Напрыклад:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Пайсці ў краму<br /><strong>[*]</strong>Купіць новы кампутар<br /><strong>[*]</strong>Аблаяць кампутар, калі здарыцца памылка<br /><strong>[/list]</strong><br /><br />выдасць наступнае:<ol style="list-style-type: arabic-numbers"><li>Пайсці ў краму</li><li>Купіць новы кампутар</li><li>Аблаяць кампутар, калі здарыцца памылка</li></ol>Для алфавітнага спісу выкарыстайце:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Першы магчымы адказ<br /><strong>[*]</strong>Другі магчымы адказ<br /><strong>[*]</strong>Трэці магчымы адказ<br /><strong>[/list]</strong><br /><br />што выдасць<ol style="list-style-type: lower-alpha"><li>Першы магчымы адказ</li><li>Другі магчымы адказ</li><li>Трэці магчымы адказ</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Стварэнне спасылак'
	),
	array(
		0 => 'Спасылкі на іншую бачыну',
		1 => 'У BBCode падтрымліваецца некалькі спосабаў стварэння URL\'оў.<ul><li>Першы з іх выкарыстае тэг <strong>[url=][/url]</strong>, пасля знака = павінен ісці патрэбны URL. Напрыклад, для спасылкі на phpBB.com вы маглі бы выкарыстаць:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Наведайце phpBB!<strong>[/url]</strong><br /><br />Гэта створыць наступную спасылку: <a href="http://www.phpbb.com/">Наведайце phpBB!</a> Улічыце, што спасылка будзе адчыняцца ў тым жа або ў новым акне, у залежнасці ад налад браўзэра карыстальніка.</li><li>Калі вы жадаеце, каб у якасці тэксту спасылкі паказваўся сам URL, вы можаце проста зрабіць наступнае:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Гэта выдасць наступную спасылку: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Акрамя таго, phpBB падтрымлівае магчымасць, званую <i>Аўтаматычныя спасылкі</i>, гэта перавядзе любы сінтаксічна правільны URL у спасылку без неабходнасці ўказання тэгаў і нават прэфікса http://. Напрыклад, увод www.phpbb.com у ваша паведамленне прывядзе да аўтаматычнай выдачы <a href="http://www.phpbb.com/">www.phpbb.com</a> пры праглядзе паведамлення.</li><li>Тое ж самае ставіцца і да адрасоў email, вы можаце альбо паказаць адрас у яўным выглядзе:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />што выдасць <a href="emailto:no.one@domain.adr">no.one@domain.adr</a> або проста ўвесці no.one@domain.adr у ваша паведамленне, і ён будзе аўтаматычна ператвораны пры праглядзе.</li></ul>Як і са ўсімі іншымі тэгамі BBCode, вы можаце складаць у URL\'ы любыя іншыя тэгі, напрыклад <strong>[img][/img]</strong> (см. наступны пункт), <strong>[b][/b]</strong> і г.д. Як і з тэгамі фарматавання, правільная ўкладзенасць тэгаў залежыць ад вас, напрыклад:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">няслушна</span>, што можа прывесці да наступнага выдалення вашага паведамлення, так што будзьце акуратней.'
	),
	array(
		0 => '--',
		1 => 'Паказ малюнкаў у паведамленнях'
	),
	array(
		0 => 'Даданне малюнка ў паведамленне',
		1 => 'BBCode уключае тэг для дадання малюначка ў ваша паведамленне. Пры гэтым варта памятаць дзве вельмі важныя рэчы: па-першае, шматлікіх карыстальнікаў раздражняе вялікую колькасць малюнкаў, па-другое, ваш малюнак ужо павінна быць размешчанае ў інтэрнэце (такім чынам яно не можа быць размешчанае толькі на вашым кампутары, калі, вядома, вы не запусцілі на ім вэбсервер!). На дадзены момант няма магчымасці захоўваць малюнкі лакальна на phpBB (чакаецца, што гэтае абмежаванне будзе знята ў наступнай версіі phpBB). Для высновы малюнка вы павінны атачыць яго URL тэгамі <strong>[img][/img]</strong>. Напрыклад:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Як паказана ў папярэднім пункце, вы можаце скласці малюнак у тэгі <strong>[url][/url]</strong>, гэта значыць<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />выдасць:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Даданне ўкладанняў у паведамленне',
		1 => 'Зараз укладанні могуць быць змешчаныя ў любой частцы паведамлення пры дапамозе новага тэга BBCode <strong>[attachment=][/attachment]</strong>, калі ўкладанні дазволеныя адміністратарам канферэнцыі, і калі вы маеце неабходныя правы доступу. На старонцы размяшчэння паведамлення находзіцца выпадальны спіс (адпаведна кнопка) для размяшчэння ўкладанняў у паведамленні.'
	),
	array(
		0 => '--',
		1 => 'Іншае'
	),
	array(
		0 => 'Ці магу я дадаць уласныя тэгі?',
		1 => 'Калі вы з\'яўляецеся адміністратарам гэтага форума і маеце дастатковыя правы, то можаце дадаць новыя тэгі BBCode у адміністратарскім раздзеле.'
	)
);

?>
