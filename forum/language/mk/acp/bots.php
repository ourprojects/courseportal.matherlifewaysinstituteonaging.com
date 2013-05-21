<?php
/**
*
* acp_bots [Macedonian]
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Менаџирање на ботови',
	'BOTS_EXPLAIN'		=> '“Ботови”, “Пајаци” or “Полтрони” се автоматски агенти општо користени од пребарувачките машини за апдејт на нивните датабази. Со обзир дека они ретко паравилно ги користат сесиите така што можат да донесат пореметување во броењата за посетители, зголемат или понекогаш да ги индексираат веб страните неисправно. Овде може да одредите специјален тип на член за да ги заобиколите овие проблеми.',
	'BOT_ACTIVATE'		=> 'Активирај',
	'BOT_ACTIVE'		=> 'Ботот е активен',
	'BOT_ADD'			=> 'Додај бот',
	'BOT_ADDED'			=> 'Новиот бот е успешно додаден.',
	'BOT_AGENT'			=> 'Совпаѓање на агенти',
	'BOT_AGENT_EXPLAIN'	=> 'Стрингот се поклопува со агент бот кој пребарува, совапаѓањата се дозволени.',
	'BOT_DEACTIVATE'	=> 'Деактивирај',
	'BOT_DELETED'		=> 'Ботот е успешно деактивиран.',
	'BOT_EDIT'			=> 'Измени ботови',
	'BOT_EDIT_EXPLAIN'	=> 'Овде може да додадете или измените постоечките ботови. Може да дефинирате и стринг агент и/или повеќе IP addresses (или досег на адреси) за совпаѓање. Бидете претпазливи кога ги дефинирате адресите за стринг агентите. Исто така може да одередите и јазик и стајл кој ботот ќе може да ги види кога ќе го користи форумот. Ова може да предизвика намалување на веб потрошувачката/bandwidth со користење на опциите за едноставен стајл на ботовите. Запомнете дека треба да ги подесите дозволите за ботовите.',
	'BOT_LANG'			=> 'Јазик за ботовите',
	'BOT_LANG_EXPLAIN'	=> 'Јазик кој ќе биде презентирн на ботовите .',
	'BOT_LAST_VISIT'	=> 'Последна посета',
	'BOT_IP'			=> 'IP адреса на ботот',
	'BOT_IP_EXPLAIN'	=> 'Неколку совпаѓања се дозволени, одвојте ги адресите со запирка.',
	'BOT_NAME'			=> 'Име на ботот',
	'BOT_NAME_EXPLAIN'	=> 'Ае користи само за информација.',
	'BOT_NAME_TAKEN'	=> 'Името веќе се користи и неможе да биде искористено за ботот.',
	'BOT_NEVER'			=> 'Никогаш',
	'BOT_STYLE'			=> 'стајл за ботови',
	'BOT_STYLE_EXPLAIN'	=> 'Стајл користен за боовите.',
	'BOT_UPDATED'		=> 'Успешно е апдејтуван постоечкиот бот.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Бот агентот кој го доставивте е сличен како оној што веќе се користи. Ве молиме подесете го агентот за овој бот.',
	'ERR_BOT_NO_IP'				=> 'IP адресите кои ги доставивте беа невалидни или името на хостот неможе да се пронајде.',
	'ERR_BOT_NO_MATCHES'		=> 'Мора да доставите најмалку еден од агентите или IP адреса за ова совпаѓање.',

	'NO_BOT'		=> 'Не е пронајден бот со одредениот број.',
	'NO_BOT_GROUP'	=> 'Невозможно да се пронајде специјалната бот група.',
));

?>