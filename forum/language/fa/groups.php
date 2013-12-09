<?php
/**
*
* groups [Farsi]
*
* @package language
* @version $Id: groups.php,v 1.22 2007/10/04 15:07:24 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'		=> 'گروه منتخب شما در از پیش در حالت انتخاب شده بوده است',
	'ALREADY_IN_GROUP'			=> 'شما قبلا کاربر اين گروه بوده ايد !',
	'ALREADY_IN_GROUP_PENDING'	=> 'شما قبلا درخواست خود را براي عضويت در اين گروه ارائه كرده ايد.',
	
	'CANNOT_JOIN_GROUP'			=> 'شما فقط مي توانيد در گروه هاي باز يا رايگان عضو شويد.',
	'CANNOT_RESIGN_GROUP'		=> 'شما نمي توانيد از اين گروه کناره گيري کنيد.شما فقط مي توانيد در گروه هاي باز يا آزاد عضويت خخود را لغو کنيد',

	'CHANGED_DEFAULT_GROUP'	=> 'تغییر گروه با موفقیت انجام شد',
	
	'GROUP_AVATAR'						=> 'نماد گروه', 
	'GROUP_CHANGE_DEFAULT'				=> 'آیا به قطع درخواست تغییر پایه عضویت در گروه را دارید؟',
	'GROUP_CLOSED'						=> 'بسته شده',
	'GROUP_DESC'						=> 'توضيحات گروه',
	'GROUP_HIDDEN'						=> 'مخفي',
	'GROUP_INFORMATION'					=> 'اطلاعات گروه کاربري', 
	'GROUP_IS_CLOSED'					=> 'این گروه فقط با دعوت نامه از طرف مدیر قابل دسترسی است',
	'GROUP_IS_FREE'						=> 'این گروه برای تمام اعضا قابل دسترسی است', 
	'GROUP_IS_HIDDEN'					=> 'این گروه,گروه پنهانی است که فقط اعضای آن به آن دسترسی دارند',
	'GROUP_IS_OPEN'						=> 'اين يك گروه باز است، اعضا ميتوانند درخواست عضويت دهند.',
	'GROUP_IS_SPECIAL'					=> 'اين يك گروه ويژه است، گروههاي ويژه توسط ادمين، مديريت ميشوند.', 
	'GROUP_JOIN'						=> 'عضويت در گروه',
	'GROUP_JOIN_CONFIRM'				=> 'آيا از عضويت در گروه انتخاب شده اطمينان داريد ؟',
	'GROUP_JOIN_PENDING'				=> 'درخواست براي عضويت',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'آيا مطمئنيد كه ميخواهيد عضو اين گروه شويد؟',
	'GROUP_JOINED'						=> 'با موفقيت در گروه انتخاب شده عضو شديد.',
	'GROUP_JOINED_PENDING'				=> 'درخواست عضویت شما با موفقیت ثبت شد و به مدیر گروه ارسال شد',
	'GROUP_LIST'						=> 'مديريت کاربران',
	'GROUP_MEMBERS'						=> 'کاربران گروه',
	'GROUP_NAME'						=> 'نام گروه',
	'GROUP_OPEN'						=> 'باز',
	'GROUP_RANK'						=> 'امتياز گروه', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'استعفا از گروه کاربري',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'آیا از استعفا دادن از گروه مربوطه مطمئن هستید؟',
	'GROUP_RESIGN_PENDING'				=> 'استعفا از عضویت گروه',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'آیا از استعفا دادن از گروه مربوط در طی فرآیند ثبت مطمئن هستید؟',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'درخواست خروج شما از گروه با موفقیت انجام شد',
	'GROUP_RESIGNED_PENDING'			=> 'درخواست خروج شما از گروه در طی فرآیند ثبت با موفقیت انجام شد',
	'GROUP_TYPE'						=> 'نوع گروه',
	'GROUP_UNDISCLOSED'					=> 'گروه مخفي',
	'FORUM_UNDISCLOSED'					=> 'گروه مخفی مدیریتی',

	'LOGIN_EXPLAIN_GROUP'	=> 'براي مشاهده مشخصات گروه بايد با نام کاربري خود وارد شويد',

	'NO_LEADERS'					=> 'شما رهبر هيچ گروهي نيستيد.',
	'NOT_LEADER_OF_GROUP'			=> 'درخواست شما انجام نمی شود زیرا شما از مدیران گروه نیستید',
	'NOT_MEMBER_OF_GROUP'			=> 'درخواست شما انجام نمی شود زیرا شما از اعضای گروه نیستید یا هنوز درخواست عضویتتان در دست بررسی است',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'شما اجازه استعفا دادن از این گروه را ندارید',
	
	'PRIMARY_GROUP'		=> 'گروه اصلي',

	'REMOVE_SELECTED'		=> 'حذف انتخاب شده ها',

	'USER_GROUP_CHANGE'			=> 'از “%1$s” به گروه “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'هقام رهبر گروه',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'آیا از تنزل مقام در گروه مطمئن هستید؟',
	'USER_GROUP_DEMOTED'		=> 'شما با موفقیت از رهبری گروه برکنار شدید.',
));

?>