<?php
/**
*
* search [Macedonian]
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
	'ALL_AVAILABLE'            => 'Сите дстапни',
	'ALL_RESULTS'            => 'Сите резултати',

	'DISPLAY_RESULTS'        => 'Покажи ги резултатите како',

	'FOUND_SEARCH_MATCH'        => 'Барањето даде %d резултат',
	'FOUND_SEARCH_MATCHES'        => 'Барањето даде %d резултати',
	'FOUND_MORE_SEARCH_MATCHES'    => 'Барањето даде повеќе од %d резултати',

	'GLOBAL'                => 'Глобално соопштеие',

	'IGNORED_TERMS'            => 'Игнориран',
	'IGNORED_TERMS_EXPLAIN'    => 'Следните зборови во твоето пребарување беја игнорирани: <strong>%s</strong>',

	'JUMP_TO_POST'            => 'Оди до тема',
	
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Форумот бара да бидете регистрирани и логирани за да ги прегледате вашите теми и мислења.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Форумот бара да бидете регистрирани и логирани за да ги прегледате вашите непрочитани теми и мислења.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Форумот бара да бидете регистрирани и логирани за да ги прегледате новите теми и мислења од вашата последна посета.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Вие одбравте премногу зборови за пребарување. Ве молиме не внесувајте повеќе од %1$d зборови.',

	'NO_KEYWORDS'            => 'Мора да ставите барем еден збор за пребарувањее. Секој збор мора да содржи барем %d букви и не треба да биде подолг од %d букви.',
	'NO_RECENT_SEARCHES'    => 'Нема пребарување во последно време',
	'NO_SEARCH'                => 'Се извинувама но вие не може да да го користите системот на пребарување на овој форум.',
	'NO_SEARCH_RESULTS'        => 'Не се пронајдени записи.',
	'NO_SEARCH_TIME'        => 'Се извинуваме не може да се користи пребарување во овој момент.Пробај малку покасно.',
	'NO_SEARCH_UNREADS'		=> 'Извинете но пребарувањето за непрочитани мислења е оневозможено на форумот.',
	'WORD_IN_NO_POST'        => 'Не се пронајдени записи зошто зборот <strong>%s</strong> не се содржи во никое мислење.',
	'WORDS_IN_NO_POST'        => 'Не се пронајдени записи зошто зборовите <strong>%s</strong> не се содржат во никое мислење.',

	'POST_CHARACTERS'        => 'знак  на мислењето',

	'RECENT_SEARCHES'        => 'Рестартирај Барање',
	'RESULT_DAYS'            => 'Ограничи ги резултатите',
	'RESULT_SORT'            => 'Сортирај резултати по',
	'RETURN_FIRST'            => 'Врати ги првите',
	'RETURN_TO_SEARCH_ADV'	=> 'Врати се во напредо барање',

	'SEARCHED_FOR'                => 'Барај термин',
	'SEARCHED_TOPIC'            => 'Барај во тема',
	'SEARCH_ALL_TERMS'            => 'Барај за сите букви кои се киристат',
	'SEARCH_ANY_TERMS'            => 'Барај за сите букви',
	'SEARCH_AUTHOR'                => 'Барај по автор',
	'SEARCH_AUTHOR_EXPLAIN'        => 'Можете да користите * како буква или замена за буква.',
	'SEARCH_FIRST_POST'            => 'Првите мислења од темите',
	'SEARCH_FORUMS'                => 'Барај по форуми',
	'SEARCH_FORUMS_EXPLAIN'        => 'Избери форум или форуми во кои сакаш да бараш. За да батаре во под-форуми треба да маркирате "барај во под-форум".',
	'SEARCH_IN_RESULTS'            => 'Барај во овие резултати',
	'SEARCH_KEYWORDS_EXPLAIN'    => 'Стави <strong>+</strong> пред зборот кој сакаш да биде пронајден, и <strong>-</strong> пред зборот кој не сакаш да биде пронајден. Оддели ги зборовите со <strong>|</strong> ако еден од зборивите мора да биде пронајден.Користете * како замена за буква за одредени резултати',
	'SEARCH_MSG_ONLY'            => 'Пораки',
	'SEARCH_OPTIONS'            => 'Опции',
	'SEARCH_QUERY'                => 'Пребарување',
	'SEARCH_SUBFORUMS'            => 'Барај во под-форуми',
	'SEARCH_TITLE_MSG'            => 'Наслови и текст пораки',
	'SEARCH_TITLE_ONLY'            => 'Барај по наслови на теми',
	'SEARCH_WITHIN'                => 'Барај во',
	'SORT_ASCENDING'            => 'Нагоре',
	'SORT_AUTHOR'                => 'Автор',
	'SORT_DESCENDING'            => 'Надолу',
	'SORT_FORUM'                => 'Форум',
	'SORT_POST_SUBJECT'            => 'Наслов',
	'SORT_TIME'                    => 'Време',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Мора да ставите барем  %d букви од авторот.',
));

?>