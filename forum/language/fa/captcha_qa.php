<?php
/**
*
* captcha_qa [English]
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
	'CONFIRM_QUESTION_EXPLAIN'	=> 'این سوال یک وسیله برای جلوگیری از حالت اتوماتیک فرمان برداری توسط اسپم بات است',
	'CONFIRM_QUESTION_WRONG'	=> 'پاسخ شما اشتباه است.',

	'QUESTION_ANSWERS'			=> 'پاسخ',
	'ANSWERS_EXPLAIN'			=> 'لطفا پاسخ مناسب را در کادر مریوط به خود بنویسید.',
	'CONFIRM_QUESTION'			=> 'پرسش',

	'ANSWER'					=> 'پاسخ',
	'EDIT_QUESTION'				=> 'ویرایش پرسش',
	'QUESTIONS'					=> 'پرسش',
	'QUESTIONS_EXPLAIN'			=> 'For every form submission where you have enabled the Q&amp;A plugin, users will be asked one of the questions specified here. To use this plugin at least one question must be set in the default language. These questions should be easy for your target audience to answer but beyond the ability of a bot capable of running a Google™ search. Using a large and regularly changed set of questions will yield the best results. Enable the strict setting if your question relies on mixed case, punctuation or whitespace.',
	'QUESTION_DELETED'			=> 'پرسش حذف شده',
	'QUESTION_LANG'				=> 'زبان',
	'QUESTION_LANG_EXPLAIN'		=> 'پرسش و پاسخ مربوط به این گزینه ثبت شده است',
	'QUESTION_STRICT'			=> 'بررسی عمیق',
	'QUESTION_STRICT_EXPLAIN'	=> 'برای اجرای موارد پیچیده  از قبیل نشانه گر و فضای خالی',

	'QUESTION_TEXT'				=> 'پرسش',
	'QUESTION_TEXT_EXPLAIN'		=> 'پرسشی که برای کاربر نمایان می شود',

	'QA_ERROR_MSG'				=> 'لطفا تمامی کادر ها را پر کنید و حداقل به یک مورد پاسخ دهید',
		
			'QA_LAST_QUESTION'			=> 'شما نمی توانید در حالتی که پلاگین فعال است تمامی پرسش ها را حذف کنید',

		
		
));

?>