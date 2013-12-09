<?php
/**
*
* captcha_qa [Macedonian]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Ова прашање се користи за заштита од автоматски регистрации/испраќања од спам ботовите.',
	'CONFIRM_QUESTION_WRONG'	=> 'Вие внесовте невалиден одговор на прашањето .',

	'QUESTION_ANSWERS'			=> 'Одговори',
	'ANSWERS_EXPLAIN'			=> 'Ве молиме внесете валиден одговор за прашањето, еден за линија.',
	'CONFIRM_QUESTION'			=> 'Прашање',

	'ANSWER'					=> 'Одговор',
	'EDIT_QUESTION'				=> 'Измени прашање',
	'QUESTIONS'					=> 'Прашања',
	'QUESTIONS_EXPLAIN'			=> 'За секоја испратена форма вие го имате овозможено Q&amp;A плугинот, членовите ќе бидат прашани едно од прашањата наведени овде. За да го користите овој плугин мора да внесете најмалку едно прашање на основниот јазик, во овој случај македонски. Овие прашања треба да бидат лесни за решавање од страна на членовите но тешки за решавање од ботовите. Користејќи многу и повремено изменувани прашања дава најдобри резултати. Овозможете го овој комплет на опции ако вашите прашања се зависни од микс/бројки и букви, интерпункција или празно место.',
	'QUESTION_DELETED'			=> 'Прашањето е избришано',
	'QUESTION_LANG'				=> 'Јазик',
	'QUESTION_LANG_EXPLAIN'		=> 'Јазик на ова прашање и негови одговори на кој се напишани.',
	'QUESTION_STRICT'			=> 'Проверка на комплетот',
	'QUESTION_STRICT_EXPLAIN'	=> 'Овозможете за да го присилите миксот/ројки и букви, интерпункцијата или празното место.',

	'QUESTION_TEXT'				=> 'Прашање',
	'QUESTION_TEXT_EXPLAIN'		=> 'Прашање кое ќе биде презентирано на членовите.',

	'QA_ERROR_MSG'				=> 'Ве молиме пополнете ги сите полиња и внесете барем еден одговор.',
	'QA_LAST_QUESTION'			=> 'Вие не можете да ги избришете сите прашања додека плугинот е активен.',

));

?>