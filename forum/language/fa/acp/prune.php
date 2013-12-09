<?php
/**
*
* acp_prune [Farsi]
*
* @package language
* @version $Id: prune.php,v 1.14 2007/10/04 15:07:24  $
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

// User pruning
$lang = array_merge($lang, array(

	'ACP_PRUNE_USERS_EXPLAIN'	=> 'در این بخش میتوانید کاربران را حذف و یا غیرفعال کنید. کاربران می توانند بر اساس  تعداد پست ، فعالیت و ... دسته بندی شوند. می توانید با تعیین کردن شاخصهایی اقدام به هرس کاربران کنید مثلا می توانید تعیین کنید که کاربران کمتر از 10 عدد پست به طور خودکار هرس شوند و یا کاربرانی که از یک تاریخ مشخص غیرفعال شده اند ، به طور خودکار هرس و از سایت حذف شوند. ضمنامی توانید به صورت دستی لیستی از کاربرانی را که می خواهید هرس شوند تهیه کنید.',



	'DEACTIVATE_DELETE'			=> 'غیرفعال و یا حذف کردن',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'لطفا انتخاب کنید که آیا کاربران حذف و یا غیرفعال شوند ،حذف کاربران ممکن است غیرقابل برگشت باشد',


	'DELETE_USERS'				=> 'حذف',
	'DELETE_USER_POSTS'			=> 'حذف پست های کاربر هر س شده',
	'DELETE_USER_POSTS_EXPLAIN' => 'حذف پست های کاربران هرس شده،اگر غیرفعال شدن کاربران انتخاب شود، تأثیری نخواهد داشت.',

	'JOINED_EXPLAIN'			=> 'تاریخی با فرمت روبه رو <kbd>YYYY-MM-DD</kbd> وارد کنید.',

	'LAST_ACTIVE_EXPLAIN'		=> 'تاریخی با فرمت <kbd>YYYY-MM-DD</kbd> وارد کنید. <kbd>0000-00-00</kbd> را برای هرس کردن کاربرانی که اصلا رد انجمن وارد نشده اند، وارد کنید. در آن صورت <em>قبل</em> و <em>بعد</em> نادیده گرفته میشود.',

	'PRUNE_USERS_LIST'				=> 'کاربران هرس شدند',
	'PRUNE_USERS_LIST_DELETE'		=> 'با تنظیمات انجام شده توسط شما کاربران مقابل با موفقیت حذف شدند.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'با تنظیمات انجام شده توسط شما کاربران مقابل با موفقیت غیرفعال شدند.',

	'SELECT_USERS_EXPLAIN'		=> 'لطفا نام کاربری را وارد کنید.این نام های کاربری بر معیار های هرس اولویت خواهند داشت ،ادمین انجمن نمی تواند هرس شود.',
	'USER_DEACTIVATE_SUCCESS'	=> 'کاربران انتخاب شده با موفقیت غیرفعال شدند.',
	'USER_DELETE_SUCCESS'		=> 'کاربران انتخاب شده با موفقیت حذف شدند.',
	'USER_PRUNE_FAILURE'		=> 'کاربری با این معیارها وجود ندارد.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'تاریخ وارد شده اشتباه است ،فرمت تاریخ باید اینگونه  <kbd>YYYY-MM-DD</kbd> باشد.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'این بخش موضوعاتی را که برای تعداد روز های تعیین بازدیدی نداشته باشند و یا پستی در آنها ارسال نشود، هرس یاحذف خواهند شد. اگر عددی را وارد نکنید همگی موضوعات حذف میشوند. به صورت پیشفرض موضوعات نظرسنجی دار،مهم،اعلامیه دار هرس نمی شوند.',

	'FORUM_PRUNE'		=> 'هرس انجمن',

	'NO_PRUNE'			=> 'هیچ انجمنی هرس نشد.',

	'SELECTED_FORUM'	=> 'انجمن انتخاب شده',
	'SELECTED_FORUMS'	=> 'انجمن های انتخاب شده',

	'POSTS_PRUNED'					=> 'پست ها هرس شدند',
	'PRUNE_ANNOUNCEMENTS'			=> 'هرس اطلاعیه ها',
	'PRUNE_FINISHED_POLLS'			=> 'هرس نظرسنجی های قفل شده',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'هرس موضوعاتی که وقت نظرسنجی های آنها تمام شده',
	'PRUNE_FORUM_CONFIRM'			=> 'آیا از هرس موضوعات موجود در انجمن های انتخاب شده با توجه به تنظیمات مطمئن هستید؟ بعد از هرس کردن امکان بازگشت مطالب و موضوعات هرس شده وجود ندارد.',
	'PRUNE_NOT_POSTED'				=> 'تعداد روز ، آخرین پست',
	'PRUNE_NOT_VIEWED'				=> 'تعداد روز ، آخرین بازدید',
	'PRUNE_OLD_POLLS'				=> 'هرس نظرسنجی های قدیمی',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'حذف موضوعاتی که از آخرین روز ارسال پست در نظرسنجی در آن ها رأی داده نشده .',
	'PRUNE_STICKY'					=> 'هرس موضوعات مهم',
	'PRUNE_SUCCESS'					=> 'هرس انجمن ها موفقیت با موفقیت انجام شد.',

	'TOPICS_PRUNED'		=> 'تمام موضوعات هرس شدند',
		

));

?>