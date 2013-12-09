<?php
/** 
*
* posting [Belarusian]
*
* @package language
* @version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
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
	'ADD_ATTACHMENT'			=> 'Дадаць укладанні',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Калі вы не жадаеце дадаваць укладанні, пакіньце палі пустымі.',
	'ADD_FILE'					=> 'Дадаць файл',
	'ADD_POLL'					=> 'Дадаць апытанне',
	'ADD_POLL_EXPLAIN'			=> 'Калі вы не жадаеце дадаваць апытанне да вашага паведамлення, пакіньце палі пустымі.',
	'ALREADY_DELETED'			=> 'Гэтае паведамленне ўжо выдаленае.',
	'ATTACH_DISK_FULL'			=> 'Недастаткова вольнага месца на дыску для загрузкі дадзенага ўкладання.',
	'ATTACH_QUOTA_REACHED'		=> 'Дасягнуты максімальны агульны памер вашых укладанняў.',
	'ATTACH_SIG'				=> 'Далучыць подпіс (подпіс можна змяняць у асабістым раздзеле)',

	'BBCODE_A_HELP'				=> 'Уставіць укладанне ў тэкст паведамлення: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Тоўсты тэкст: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Код: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'Флэш: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Памер шрыфта: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>ВЫКЛЮЧАНЫ</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>УКЛЮЧАНЫ</em>',
	'BBCODE_I_HELP'				=> 'Нахільны тэкст: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Спіс: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Элемент спісу: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Нумараваны спіс: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Уставіць малюнак: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Цытата: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Колер шрыфта: [color=red]text[/color] Парада: Вы можаце выкарыстаць таксама канструкцыю color=#FF0000',
	'BBCODE_U_HELP'				=> 'Падкрэслены тэкст: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Уставіць спасылку: [url]http://url[/url] або [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> 'Спіс: дадаць элемент спісу',
	'BUMP_ERROR'				=> 'Вы не можаце паднімаць тэму адразу пасля апошняга паведамлення. Паспрабуйце ледзь пазней.',

	'CANNOT_DELETE_REPLIED'		=> 'Выбачайце, але вы можаце выдаляць толькі паведамленні, не якія маюць адказаў.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Гэтае паведамленне было заблакавана, вы не можаце яго рэдагаваць.',
	'CANNOT_EDIT_TIME'			=> 'Вы больш не можаце рэдагаваць або выдаляць гэтае паведамленне.',
	'CANNOT_POST_ANNOUNCE'		=> 'Вы не можаце ствараць аб\'явы.',
	'CANNOT_POST_STICKY'		=> 'Вы не можаце ствараць прылепленыя тэмы.',
	'CHANGE_TOPIC_TO'			=> 'Змяніць тэму на',
	'CLOSE_TAGS'				=> 'Зачыніць тэгі',
	'CURRENT_TOPIC'				=> 'Дзеючая тэма',

	'DELETE_FILE'				=> 'Выдаліць файл',
	'DELETE_MESSAGE'			=> 'Выдаліць паведамленне',
	'DELETE_MESSAGE_CONFIRM'	=> 'Вы ўпэўненыя, што жадаеце выдаліць гэтае паведамленне?',
	'DELETE_OWN_POSTS'			=> 'Выбачайце, але вы можаце выдаляць толькі вашы ўласныя паведамленні.',
	'DELETE_POST_CONFIRM'		=> 'Вы ўпэўненыя, што жадаеце выдаліць гэтае паведамленне?',
	'DELETE_POST_WARN'			=> 'Выдаленае паведамленне аднавіць немагчыма',
	'DISABLE_BBCODE'			=> 'Адключыць у гэтым паведамленні BBCode',
	'DISABLE_MAGIC_URL'			=> 'Не ператвараць адрасы URL у спасылкі',
	'DISABLE_SMILIES'			=> 'Адключыць у гэтым паведамленні смайлікі',
	'DISALLOWED_CONTENT'		=> 'Запампоўка забаронена, бо файл падобны да віруса.',
	'DISALLOWED_EXTENSION'		=> 'Пашырэнне %s забароненае адміністратарам.',
	'DRAFT_LOADED'				=> 'Чарнавік загружаны, вы можаце скончыць рэдагаванне паведамлення зараз.<br />Пасля адпраўкі гэтага паведамлення чарнавік будзе выдалены.',
	'DRAFT_LOADED_PM'			=> 'Чарнавік загружаны, вы можаце скончыць рэдагаванне асабістага паведамлення зараз.<br />Пасля адпраўкі гэтага асабістага паведамлення чарнавік будзе выдалены.',
	'DRAFT_SAVED'				=> 'Чарнавік паспяхова захаваны.',
	'DRAFT_TITLE'				=> 'Назоў чарнавіка',

	'EDIT_REASON'				=> 'Чыннік рэдагавання паведамлення',
	'EMPTY_FILEUPLOAD'			=> 'Загружаны файл пустой.',
	'EMPTY_MESSAGE'				=> 'Вы павінны ўвесці тэкст паведамлення',
	'EMPTY_REMOTE_DATA'			=> 'Не атрымалася запампаваць файл, калі ласка, паспрабуйце запампаваць яго ўручную.',

	'FLASH_IS_OFF'				=> '[flash] <em>ВЫКЛЮЧАНЫ</em>',
	'FLASH_IS_ON'				=> '[flash] <em>УКЛЮЧАНЫ</em>',
	'FLOOD_ERROR'				=> 'Вы не можаце адправіць наступнае паведамленне адразу пасля папярэдняга. Калі ласка, паспрабуйце ледзь пазней.',
	'FONT_COLOR'				=> 'Колер шрыфта',
	'FONT_COLOR_HIDE'			=> 'Схаваць панэль колераў',
	'FONT_HUGE'					=> 'Вялізны',
	'FONT_LARGE'				=> 'Вялікі',
	'FONT_NORMAL'				=> 'Нармалёвы',
	'FONT_SIZE'					=> 'Памер шрыфта',
	'FONT_SMALL'				=> 'Маленькі',
	'FONT_TINY'					=> 'Вельмі маленькі',

	'GENERAL_UPLOAD_ERROR'		=> 'Не атрымалася запампаваць укладанне %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>ВЫКЛЮЧАНЫ</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>УКЛЮЧАНЫ</em>',
	'INVALID_FILENAME'			=> '%s з\'яўляецца недапушчальным імем файла.',

	'LOAD'						=> 'Загрузіць',
	'LOAD_DRAFT'				=> 'Загрузіць чарнавік',
	'LOAD_DRAFT_EXPLAIN'		=> 'Вы можаце вылучыць чарнавік для працягу рэдагавання паведамлення. Ваша дзеючае паведамленне будзе выдаленае, змест паведамлення будзе згублена. <br />Праглядаць, рэдагаваць і выдаляць чарнавікі вы можаце ў асабістым раздзеле.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Вам неабходна аўтарызавацца для ўзняцця тэмы ў гэтым форуме.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Вам неабходна аўтарызавацца для выдалення паведамленняў у гэтым форуме.',
	'LOGIN_EXPLAIN_POST'		=> 'Вам неабходна аўтарызавацца для стварэння паведамленняў у гэтым форуме.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Вам неабходна аўтарызавацца для цытавання паведамленняў у гэтым форуме.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Вам неабходна аўтарызавацца, каб адказваць у тэмах у гэтым форуме.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Вы можаце выкарыстаць шрыфты памерам не больш %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Вашы флэш-файлы павінны быць не больш %1$d пікс. у вышыню.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Вашы флэш-файлы павінны быць не больш %1$d пікс. у шырыню.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Вашы малюнкі павінны быць не больш %1$d пікс. у вышыню.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Вашы малюнкі павінны быць не больш %1$d пікс. у шырыню.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Увядзіце тэкст вашага паведамлення. Даўжыня паведамлення ў знаках не больш: <strong>%d</strong>.',
	'MESSAGE_DELETED'			=> 'Паведамленне было паспяхова выдаленае.',
	'MORE_SMILIES'				=> 'Яшчэ смайлікі…',

	'NOTIFY_REPLY'				=> 'Паведамляць мне аб атрыманні адказу',
	'NOT_UPLOADED'				=> 'Не атрымалася загрузіць файл.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Вы не можаце выдаляць наяўныя варыянты адказаў.',
	'NO_PM_ICON'				=> 'Няма значка АП',
	'NO_POLL_TITLE'				=> 'Вы павінны ўвесці назоў апытання.',
	'NO_POST'					=> 'Паведамленне не існуе.',
	'NO_POST_MODE'				=> 'Не паказаны рэжым паведамлення.',

	'PARTIAL_UPLOAD'			=> 'Файл загружаны толькі часткова.',
	'PHP_SIZE_NA'				=> 'Занадта вялікі памер укладання.<br />Немагчыма вызначыць максімальны памер запампаваных файлаў, зададзены ў php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Занадта вялікі памер укладання.<br />Максімальны памер запампаванага файла: %d Мб.<br />Майце ў выгляду, што гэтая велічыня вызначаная ў php.ini і сродкамі форума немагчыма змяніць гэтае значэнне ў вялікі бок.',
	'PLACE_INLINE'				=> 'Уставіць у тэкст паведамлення',
	'POLL_DELETE'				=> 'Выдаліць апытанне',
	'POLL_FOR'					=> 'Апытанне павінен ісці',
	'POLL_FOR_EXPLAIN'			=> 'Увядзіце 0 або пакіньце поле пустым, каб апытанне не сканчаўся.',
	'POLL_MAX_OPTIONS'			=> 'Варыянтаў адказу',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Колькасць варыянтаў адказу, дазволеных пры галасаванні.',
	'POLL_OPTIONS'				=> 'Варыянты адказу',
	'POLL_OPTIONS_EXPLAIN'		=> 'Размесціце кожны варыянт адказу ў новым радку. Максімальная колькасць варыянтаў: <strong>%d</strong>.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Размесціце кожны варыянт адказу ў новым радку. Максімальная колькасць варыянтаў: <strong>%d</strong>. Калі вы выдаліце або дадасце новы варыянт адказу вынікі галасавання абнуляцца.',
	'POLL_QUESTION'				=> 'Пытанне',
	'POLL_TITLE_TOO_LONG'		=> 'Назоў апытання павінна ўтрымоўваць менш 100 знакаў.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Назоў апытання занадта доўгае, паспрабуйце паменшыць колькасць BBCode або смайлікаў.',
	'POLL_VOTE_CHANGE'			=> 'Дазволіць змяняць адказ',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Калі дазволена, карыстальнікі могуць мяняць свае адказы ў апытанні.',
	'POSTED_ATTACHMENTS'		=> 'Апублікаваныя ўкладанні',
	'POST_APPROVAL_NOTIFY'		=> 'Вы будзеце апавешчаныя аб ухвале вашага паведамлення.',
	'POST_CONFIRMATION'			=> 'Пацверджанне адпраўкі',
	'POST_CONFIRM_EXPLAIN'		=> 'Для прадухілення аўтаматычнага размяшчэння паведамленняў, на гэтай канферэнцыі неабходна ўвесці код пацверджання. Код адлюстраваны на малюначку ніжэй. Калі з-за дрэннага зроку або па іншых чынніках вы не можаце прачытаць код на малюначку, звяжыцеся з %sадміністратарам%s',
	'POST_DELETED'				=> 'Паведамленне было паспяхова выдаленае.',
	'POST_EDITED'				=> 'Паведамленне было паспяхова адрэдагавана.',
	'POST_EDITED_MOD'			=> 'Паведамленне было паспяхова адрэдагавана, але павінна быць ухвалена мадэратарам да таго, як будзе адлюстравана на канферэнцыі.',
	'POST_GLOBAL'				=> 'Важная',
	'POST_ICON'					=> 'Значок',
	'POST_NORMAL'				=> 'Звычайная',
	'POST_REVIEW'				=> 'Папярэдні прагляд',
	'POST_REVIEW_EDIT'			=> 'Папярэдні прагляд',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Гэта паведамленне было зменена іншым карыстальнікам у той час, калі вы пачалі рэдагаваць яго. Вы можаце праглядзець актуальную версію паведамлення і ўнесці жаданыя змены.',
	'POST_REVIEW_EXPLAIN'		=> 'Было дададзена прынамсі адно паведамленне ў гэтай тэме. Магчыма, вы зажадаеце змяніць змест свайго паведамлення.',
	'POST_STORED'				=> 'Паведамленне было паспяхова адпраўленае.',
	'POST_STORED_MOD'			=> 'Паведамленне было паспяхова адпраўленае, але павінна быць ухвалена мадэратарам да таго, як будзе адлюстравана на канферэнцыі.',
	'POST_TOPIC_AS'				=> 'Статут ствараемай тэмы',
	'PROGRESS_BAR'				=> 'Індыкатар загрузкі',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Максімальна дапушчальная колькасць укладзеных адно ў другое цытат у паведамленні: %1$d.',

	'SAVE'						=> 'Захаваць',
	'SAVE_DATE'					=> 'Апошняя змена',
	'SAVE_DRAFT'				=> 'Захаваць чарнавік',
	'SAVE_DRAFT_CONFIRM'		=> 'Калі ласка, звернеце ўвагу, што захоўваюцца толькі загаловак і тэкст паведамлення, любыя іншыя элементы будуць выдаленыя.<br />Вы жадаеце захаваць чарнавік зараз?',
	'SMILIES'					=> 'Смайлікі',
	'SMILIES_ARE_OFF'			=> 'Смайлікі <em>ВЫКЛЮЧАНЫЯ</em>',
	'SMILIES_ARE_ON'			=> 'Смайлікі <em>УКЛЮЧАНЫЯ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Тэрмін для аб\'явы/прылепленай тэмы',
	'STICK_TOPIC_FOR'			=> 'Тэма будзе прылепленая',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Увядзіце 0 або пакіньце поле пустым, каб тэма заўсёды была аб\'явай або прымацаванай. Звярніце ўвагу на тое, што гэты лік з\'яўляецца адносным да даты публікацыі паведамлення.',
	'STYLES_TIP'				=> 'Парада: можна хутка ўжыць стылі да вылучанага тэксту.',

	'TOO_FEW_CHARS'				=> 'Ваша паведамленне занадта кароткае.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Ваша паведамленне змяшчае %1$d сімвалаў. Мінімальнае колькасць сімвалаў, неабходная для публікацыі паведамлення - %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Неабходна ўвесці, прынамсі, два варыянту адказу ў апытанні.',
	'TOO_MANY_ATTACHMENTS'		=> 'Укладанне немагчыма, бо ў паведамленні дасягнута іх максімальная колькасць: <b>%d</b>.',
	'TOO_MANY_CHARS'			=> 'Ваша паведамленне занадта доўгае.',
	'TOO_MANY_CHARS_POST'		=> 'Ваша паведамленне ўтрымоўвае занадта шмат сімвалаў: %1$d. Максімальная дазволеная колькасць: %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Ваш подпіс утрымоўвае занадта шмат сімвалаў: %1$d. Максімальная дазволеная колькасць: %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Вы вылучылі занадта шмат варыянтаў адказу ў апытанні.',
	'TOO_MANY_SMILIES'			=> 'Ваша паведамленне ўтрымоўвае занадта шмат смайлікаў. Максімальная дазволеная колькасць: %d.',
	'TOO_MANY_URLS'				=> 'Ваша паведамленне ўтрымоўвае занадта шмат спасылак URL. Максімальная дазволеная колькасць: %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Занадта шмат варыянтаў адказу.',
	'TOPIC_BUMPED'				=> 'Тэма паспяхова паднятая.',

	'UNAUTHORISED_BBCODE'		=> 'Вы не можаце выкарыстаць некаторыя BBCode: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Для таго, каб змяніць статут тэмы з важнай на звычайную, вы павінны вылучыць форум, у якім яна будзе апублікаваная.',
	'UPDATE_COMMENT'			=> 'Абнавіць каментар',
	'URL_INVALID'				=> 'Паказаны вамі адрас файла недапушчальны.',
	'URL_NOT_FOUND'				=> 'Паказаны файл не знойдзены.',
	'URL_IS_OFF'				=> '[url] <em>ВЫКЛЮЧАНЫ</em>',
	'URL_IS_ON'					=> '[url] <em>УКЛЮЧАНЫ</em>',
	'USER_CANNOT_BUMP'			=> 'Вы не можаце паднімаць тэмы ў гэтым форуме.',
	'USER_CANNOT_DELETE'		=> 'Вы не можаце выдаляць паведамленні ў гэтым форуме.',
	'USER_CANNOT_EDIT'			=> 'Вы не можаце рэдагаваць паведамленні ў гэтым форуме.',
	'USER_CANNOT_REPLY'			=> 'Вы не можаце адказваць на паведамленні ў гэтым форуме.',
	'USER_CANNOT_FORUM_POST'	=> 'Вы не можаце размяшчаць паведамленні ў гэтым форуме. Тып форума не падтрымлівае гэтага.',

	'VIEW_MESSAGE'				=> '%sПраглядзець ваша паведамленне%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sПраглядзець адпраўленыя вамі асабістыя паведамленні%s',

	'WRONG_FILESIZE'			=> 'Занадта вялікі памер укладання. <br/>Максімальны дазволены памер: %1d %2s.',
	'WRONG_SIZE'				=> 'Памеры малюнка павінны быць не меней %1$d?%2$d і не больш %3$d?%4$d. Памер адпраўленага малюнка - %5$d?%6$d. Усе памеры паказаныя ў піксэлах.',
));

?>
