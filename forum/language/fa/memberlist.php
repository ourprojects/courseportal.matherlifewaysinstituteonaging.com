<?php
/**
*
* memberlist [Farsi]
*
* @package language
* @version $Id: memberlist.php,v 1.35 2007/10/04 15:07:24 acydburn Exp $
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
	'ABOUT_USER'			=> 'مشخصات',
	'ACTIVE_IN_FORUM'		=> 'بيشترين انجمن کاري',
	'ACTIVE_IN_TOPIC'		=> 'بيشترين تاپيک کاري',
	'ADD_FOE'				=> 'افزودن دشمن',
	'ADD_FRIEND'			=> 'افزودن دوست',
	'AFTER'					=> 'بعد',

	'ALL'					=> 'همه',

	'BEFORE'				=> 'پيش',

	'CC_EMAIL'				=> 'يک کپي از اين ايميل براي من بفرست.',
	'CONTACT_USER'			=> 'ارتباط با',

	'DEST_LANG'				=> 'زبان',
	'DEST_LANG_EXPLAIN'		=> 'انتخاب زبان دیگر (در صورت امکان) برای این قسمت',

	'EMAIL_BODY_EXPLAIN'	=> 'این پیام به صورت ساده و بدونHTML یا BBCode باید ارسال شود. در صورت پاسخ طرف مقابل به ایمیل شما می رسد',
	'EMAIL_DISABLED'		=> 'با عرض پوزش بخش مربوط به کارکرد ایمیل شما غیر فعال است',
	'EMAIL_SENT'			=> 'ايميل ارسال شد..',
	'EMAIL_TOPIC_EXPLAIN'	=> 'این پیام به صورت ساده و بدونHTML یا BBCode باید ارسال شود. در صورت پاسخ طرف مقابل به ایمیل شما می رسد',
	'EMPTY_ADDRESS_EMAIL'	=> 'شما بايد آدرس ايميل صحيحي براي گيرنده وارد کنيد.',
	'EMPTY_MESSAGE_EMAIL'	=> 'براي ارسال ايميل لطفا بدنه پيغام را وارد کنيد.',
	'EMPTY_MESSAGE_IM'		=> 'براي ارسال بايد يک پيغام وارد کنيد.',
	'EMPTY_NAME_EMAIL'		=> 'شما بايد يک نام واقعي براي گيرنده وارد کنيد.',
	'EMPTY_SUBJECT_EMAIL'	=> 'شما براي ايميل بايد يک عنوان تعيين کنيد.',
	'EQUAL_TO'				=> 'مساوي با',

	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'		=> 'شما نمی توانید ایمیل دیگری در همین لحظه ارسال کنید لطفا بعدا مجددا تلاش کنید',

	'GROUP_LEADER'			=> 'رهبر گروه',

	'HIDE_MEMBER_SEARCH'	=> 'جستجوي کاربر مخفي',

	'IM_ADD_CONTACT'		=> 'افزودن تماس',
	'IM_AIM'				=> 'برای استفاده از این شما نیاز به AOL Instant Messenger دارید.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'دانلود برنامه',
	'IM_ICQ'				=> 'لطفا به یاد داشته باشید که کاربر درخواست کرده تا پیام خصوصی ناخواسته برای او ارسال نشود.',
	'IM_JABBER'				=> 'لطفا به یاد داشته باشید که کاربر درخواست کرده تا پیام خصوصی ناخواسته برای او ارسال نشود',
	'IM_JABBER_SUBJECT'		=> 'این پیام به صورت اتوماتیک ارسال شده لطفا پاسخ ندهید %1$s at %2$s.',
	'IM_MESSAGE'			=> 'پيغام شما',
	'IM_MSNM'				=> 'برای استفاده از این قسمت شما باید Windows Messenger را نصب کنید',
	'IM_MSNM_BROWSER'		=> 'مرورگر شما اين را پشتيباني نمي کند.',
	'IM_MSNM_CONNECT'		=> 'MSNM متصل نشده.\nبرای ادامه باید MSNM متصل شود.',		
	'IM_NAME'				=> 'نام شما',
	'IM_NO_DATA'			=> 'برای این کاربر هیچ توضیحات درستی یافت نشد',
	'IM_NO_JABBER'			=> 'با عرض پوزش پیام مستق با Jabber برای کاربران در این سرور پشتیبانی نمیگردد .شما باید Jabber client را بر روی سیستم خود نصب کنید.',
	'IM_RECIPIENT'			=> 'گيرنده',
	'IM_SEND'				=> 'ارسال پيغام',
	'IM_SEND_MESSAGE'		=> 'ارسال پيغام',
	'IM_SENT_JABBER'		=> 'پيغام شما به %1$s با موفقيت ارسال شد.',
	'IM_USER'				=> 'ارسال يک پيغام فوري',
	
	'LAST_ACTIVE'				=> 'آخرين فعاليت',
	'LESS_THAN'					=> 'کمتر از',
	'LIST_USER'					=> '1 کاربر',
	'LIST_USERS'				=> '%d کاربر',
	'LOGIN_EXPLAIN_LEADERS'		=> 'براي مشاهده تيم انجمن شما ابتدا در انجمن ثبت نام کرده و سپس با نام کاربري خود وارد شويد.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'براي دستيابي به اجازه مشاهده ليست کاربران ابتدا بايد درسايت ثبت نام کنيد سپس با نام کاربري خود وارد شويد.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'براي جستجوي کاربران لطفا در انجمن عضو شده و سپس وارد شويد.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'براي مشاهده مشخصات کاربران ابتدا بايد در سايت ثبت نام کرده و سپس با نام کاربري خود وارد شويد.',

	'MORE_THAN'				=> 'بيشتر از اين',

	'NO_EMAIL'				=> 'شما اجازه ارسال ايميل به اين کاربر را نداريد.',
	'NO_VIEW_USERS'			=> 'شما اجازه ديدن ليست کاربران و مشخصات آنان را نداريد.',

	'ORDER'					=> 'سفارش',
	'OTHER'					=> 'دیگران',

	'POST_IP'				=> 'ارسال شده از IP/نشانی',

	'REAL_NAME'				=> 'نام گيرنده',
	'RECIPIENT'				=> 'گيرنده',
	'REMOVE_FOE'			=> 'حذف دشمن',
	'REMOVE_FRIEND'			=> 'حذف دوست',


	'SELECT_MARKED'			=> 'انتخاب علامت دار',
	'SELECT_SORT_METHOD'	=> 'مرتب سازي بر اساس',
	'SEND_AIM_MESSAGE'		=> 'ارسال پيغام AIM',
	'SEND_ICQ_MESSAGE'		=> 'ارسال پيغام ICQ',
	'SEND_IM'				=> 'پیام فوری',
	'SEND_JABBER_MESSAGE'	=> 'ارسال پيغام Jabber',
	'SEND_MESSAGE'			=> 'پيغام',
	'SEND_MSNM_MESSAGE'		=> 'ارسال پيغام MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'ارسال پيغام ياهو',
	'SORT_EMAIL'			=> 'ايميل',
	'SORT_LAST_ACTIVE'		=> 'Last active',
	'SORT_POST_COUNT'		=> 'مشاهده پست',

	'USERNAME_BEGINS_WITH'	=> 'نام کاربري شروع شود با',
	'USER_ADMIN'			=> 'مدیریت کاربر',
	'USER_BAN'				=> 'در حال اخراج',
	'USER_FORUM'			=> 'اطلاعات کاربر',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'هیچ یادآوری برای حال حاضر قرار داده نشده است',
		1		=> '%1$d ارسال یادآور<br />» %2$s',
	),

	'USER_ONLINE'			=> 'آنلاين',
	'USER_PRESENCE'			=> 'اطلاعات حضور',

	'VIEWING_PROFILE'		=> 'درحال مشاهده مشخصات  %s',
	'VISITED'				=> 'آخرين بازديد',

	'WWW'					=> 'وب سايت',
		

));

?>