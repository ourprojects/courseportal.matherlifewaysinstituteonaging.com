<?php
/**
*
* acp_ban [Macedonian]
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 саат ',
	'30_MINS'		=> '30 минути',
	'6_HOURS'		=> '6 саати',

	'ACP_BAN_EXPLAIN'	=> 'овде може да го контролирате банирањето на членовите по корисничко име, IP или мејл адреса. Овие методи се да го спречат кориникот да дојде во контакт со било кј дел од форумот. Може да дадете и кратко објаснување поради што е банот. Ова ќе се прикаже во админ панелот. Исто така банот може да биде и временски ограничен. Ако сакате да дадете ограничен бан со времетраење одберете почеток <span style="text-decoration: underline;">Until -&gt;</span> и крај на банот  <kbd>YYYY-MM-DD</kbd> format.',

	'BAN_EXCLUDE'			=> 'Исклучи од банирање',
	'BAN_LENGTH'			=> 'Времетраење на бан',
	'BAN_REASON'			=> 'Причина за банирање',
	'BAN_GIVE_REASON'		=> 'Причина која ќе биде прикаќана на членот',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Бан листата е успешно апдејтувана.',
	'BANNED_UNTIL_DATE'		=> 'Баниран до %s', // Пример: "Баниран до Пон 13.Jули.2012, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (Баниран до %2$s)', // Пример: "7 денови (до Вто 14.Jули.2012, 14:44)"

	'EMAIL_BAN'					=> 'Банирај една или повеќе мејл адреси',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Дозволи го ова за да ги исклучиш сите внесени мејлови од банирањето.',
	'EMAIL_BAN_EXPLAIN'			=> 'За да банирате повеќе мејл адреси, внесете ја секоја мејл адреса посебно во нова линија. За да забраните регистрирањеод одреден мејл хост сајт, впишете го домејнот на сајтот вака <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Нема банирани мејл адреси',
	'EMAIL_UNBAN'				=> 'Одбанирај или исклучи мејл од бан листата',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Може да одбанирате (или исклучите) може да одбанирате неколку мејлови одеднаш користејќиго соодветно вашето глувче, тастатура, вашиот компјутер и вашиот прелистувач. Мејловите кои се исклучени од бан листата се нагласени.',

	'IP_BAN'					=> 'Банирај една или повеќе IP адреси',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Дозволи го ова ја да ја исклучиш внесената IP адреса од сите досегашни банирања.',
	'IP_BAN_EXPLAIN'			=> 'За да одберете неклку различни IP адреси или мејл хост имиња, внесете ги сите посебно во нова линија. За да одберете синџир на IP адреси, почнете со и завршете со цртичка (-), за да одберете динамични адреси внесете “*”.',
	'IP_HOSTNAME'				=> 'IP адреси или хост имиња',
	'IP_NO_BANNED'				=> 'Нема банирани IP адреси',
	'IP_UNBAN'					=> 'Одбанирај или исклучи IP адреси',
	'IP_UNBAN_EXPLAIN'			=> 'Може да одбанирате (или исклучите) може да одбанирате неколку IP адреси одеднаш користејќиго соодветно вашето глувче, тастатура, вашиот компјутер и вашиот прелистувач. IP кои се адресите исклучени од бан листата се нагласени.',

	'LENGTH_BAN_INVALID'		=> 'Датата мора да биде во формат <kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Баниран',
	'OPTIONS_EXCLUDED'			=> 'Исклучен',

	'PERMANENT'		=> 'Траен',

	'UNTIL'						=> 'До',
	'USER_BAN'					=> 'Банирај едно или повеќе кориснички имиња',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Дозволи го ова за да ги исклучиш сите кориснички имиња внесени во моменталните банови.',
	'USER_BAN_EXPLAIN'			=> 'Може да банирате повеќе кориснички имиња внесувајќи го секое во посебна линија. Користете го вака<span style="text-decoration: underline;">Најди член</span> одредиште за гледање или додавањана еден или повеќе членови одеднаш.',
	'USER_NO_BANNED'			=> 'Нема банирани членови',
	'USER_UNBAN'				=> 'Одбанирај или исклучи кориснички имиња',
	'USER_UNBAN_EXPLAIN'		=> 'Може да одбанирате (или исклучите) неколку членови одеднаш користејќи го соодветно вашето глувче, тастатура, вашиот компјутер и вашиот прелистувач. Членовите кои се исклучени од бан листата се нагласени.',
));

?>