<?php
/**
*
* memberlist [Macedonian]
*
* @package language
* @version $Id$
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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Нај-активен форум',
	'ACTIVE_IN_TOPIC'		=> 'Нај-активна тема',
	'ADD_FOE'				=> 'Додај игнориран',
	'ADD_FRIEND'			=> 'Додај пријател',
	'AFTER'					=> 'После',	

	'ALL'					=> 'Сите',

	'BEFORE'				=> 'Пред',

	'CC_EMAIL'				=> 'Испрати ми Копија од мојот емаил',
	'CONTACT_USER'			=> 'Контактирај',

	'DEST_LANG'				=> 'Јазик',
	'DEST_LANG_EXPLAIN'		=> 'Избери јазик (ако има повеќе) за примачот на оваа порака.',

	'EMAIL_BODY_EXPLAIN'	=> 'Не уклучувај HTML или BBCode.Повратната Адреса ќе биде испратена ',
	'EMAIL_DISABLED'		=> 'Сите функции кои се сврзани со мејлот се исклучени',
	'EMAIL_SENT'			=> 'Мејлот беше испратен.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Оваа порака ќе биде испратена не уклучувај HTML или BBCode.Информациијата за темата е веќе вклучена во пораката. Повратната Адреса ќе биде испратена.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Адресата треба да биде валидна.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Мора да напишете порака да биде испратена.',
	'EMPTY_MESSAGE_IM'		=> 'Мора да внесете порака која ќе биде испратена.',
	'EMPTY_NAME_EMAIL'		=> 'Мора да внесите име на примачот.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Треба да напишете наслов на мејлот.',
	'EQUAL_TO'				=> 'Еднакво на',

	'FIND_USERNAME_EXPLAIN'	=> 'Користете ја формата за одредени членови.Не задолжително да ги пополните сите полиња. Можете да ставите * мамо маска. Кога внесувате дата ставете  <kbd>Година-Месец-Ден</kbd>, на пример <samp>2004-02-29</samp>. Користете го копчето за чекирање на една или повеќе членски линии и кликнете на селектирај маркирано да се вратите  на предходната форма.',
	'FLOOD_EMAIL_LIMIT'		=> 'Не може да испратите уште еден мејл во овој момент. Обидете се покасно.',

	'GROUP_LEADER'			=> 'Лидер на групата',

	'HIDE_MEMBER_SEARCH'	=> 'Сокри барање на членови',

	'IM_ADD_CONTACT'		=> 'Додај контакт',
	'IM_AIM'				=> 'Треба да имате инсталирано AOL Instant Messenger да ја користите оваа опција.',
	'IM_AIM_EXPRESS'		=> 'AIM експрес',
	'IM_DOWNLOAD_APP'		=> 'Симни Апликација',
	'IM_ICQ'				=> 'Членот е можно да забранил испраќање на вакви пораки.',
	'IM_JABBER'				=> 'Членот е можно да забранил испраќање на вакви пораки.',
	'IM_JABBER_SUBJECT'		=> 'Ова е автомацка порака ве молиме не одговарајте на пораката. Порака од членот %1$s на %2$s',
	'IM_MESSAGE'			=> 'Ваша порака',
	'IM_MSNM'				=> 'Треба да имате инсталирано Windows Messenger да ја користите оваа опција.',
	'IM_MSNM_BROWSER'		=> 'Вашиот прелистувач не го подржува ова.',
	'IM_MSNM_CONNECT'		=> 'Windows live месенџерот не е поврзан.\Мора да се поврзите со MSNM за да продолжите.',		
	'IM_NAME'				=> 'Вашето име',
	'IM_NO_DATA'			=> 'Не се пронајдени погодни информации за овој член.',
	'IM_NO_JABBER'			=> 'Не е дозволено дирекно испраќање пораки до Jabber на овој сервер. Потребно е да се инсталира Jabber клиент на овој сервер',
	'IM_RECIPIENT'			=> 'Примач',
	'IM_SEND'				=> 'Испрати',
	'IM_SEND_MESSAGE'		=> 'Испрати',
	'IM_SENT_JABBER'		=> 'Пораката до %1$s беше испратена успешно.',
	'IM_USER'				=> 'Испрати брза порака',

	'LAST_ACTIVE'				=> 'Последно активен',
	'LESS_THAN'					=> 'Помалку од',
	'LIST_USER'					=> '1 член',
	'LIST_USERS'				=> '%d членови',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Администраторите бараат да сте регистрирани и логирани за да го видите тимот.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Администраторите бараат да сте регистрирани и логирани да ја видите листата на членови.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Администраторите бараат да сте регистрирани и логирани да барате членови.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Администраторите бараат да сте регистрирани и логирани да видите профил.',

	'MORE_THAN'				=> 'Повеќе од',

	'NO_EMAIL'				=> 'Вие немате право да испраќате мејл до овој член.',
	'NO_VIEW_USERS'			=> 'Вие немате право да ја видите листата на членови или профил.',

	'ORDER'					=> 'Ред',
	'OTHER'					=> 'Друг',

	'POST_IP'				=> 'IP/домеин',

	'RANK'					=> 'Ранг',
	'REAL_NAME'				=> 'Име на примачот',
	'RECIPIENT'				=> 'Примач',
	'REMOVE_FOE'			=> 'Отстрани игнориран',
	'REMOVE_FRIEND'			=> 'Отстрани пријател',

	'SELECT_MARKED'			=> 'Избери ги маркираните',
	'SELECT_SORT_METHOD'	=> 'Избери метод на сортирање',
	'SEND_AIM_MESSAGE'		=> 'Испрати AIM порака',
	'SEND_ICQ_MESSAGE'		=> 'Испрати ICQ порака',
	'SEND_IM'				=> 'Испрати IM порака',
	'SEND_JABBER_MESSAGE'	=> 'Изпрати Jabber порака',
	'SEND_MESSAGE'			=> 'Испрати порака',
	'SEND_MSNM_MESSAGE'		=> 'Испрати MSNM/WLM порака',
	'SEND_YIM_MESSAGE'		=> 'Испрати YIM порака',
	'SORT_EMAIL'			=> 'Мејл пошта',
	'SORT_LAST_ACTIVE'		=> 'Последно активен',
	'SORT_POST_COUNT'		=> 'Број на мислења',

	'USERNAME_BEGINS_WITH'	=> 'Името започнува со',
	'USER_ADMIN'			=> 'Администратор',
	'USER_BAN'				=> 'Банирање',
	'USER_FORUM'			=> 'Статистика',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Моментално нема пратени потсетувања',
		1		=> '%1$d потсетување пратено<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Присутен',
	'USER_PRESENCE'			=> 'Присуство',

	'VIEWING_PROFILE'		=> 'Преглед  на профил - %s',
	'VISITED'				=> 'Последно видено',

	'WWW'					=> 'Веб Страна WWW',
));

?>