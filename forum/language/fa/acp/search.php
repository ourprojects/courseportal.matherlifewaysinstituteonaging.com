<?php
/**
*
* acp_search [English]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24  $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'در این بخش می توانید تنظیمات مربوط به جستجو را مدیریت کنید',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'در این بخش می توانید انتخاب کنید که از چه شاخصی برای نحوه جستجو استفاده شود.',

	'COMMON_WORD_THRESHOLD'					=> 'کلمات عام',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'کلماتی که در درصد بیشتری از پست ها حضور داشته باشند جزو کلمات عام نامیده میشوند ،این کلمات در نتایج جستجو نمایش داده نمیشوند،اگر کلمه ای در بیش از 100 پست یا مطلب باشد این تنظیم برای آن کلمه فعال میشود.برای وارد کردن کلمات به طور دستی باید شاخص جستجو را دوباره ایجاد کنید.',
	'CONFIRM_SEARCH_BACKEND'				=> 'آیا از تغییر دادن شاخص جستجو مطمئن هستید ؟ بعد از تغییر دادن ، شاخص جدیدی برای آن ایجاد کنید ،ضمنا می توانید شاخص های قدیمی را نیز حذف کنید.',
	'CONTINUE_DELETING_INDEX'				=> 'ادامه تراکنش حذف شاخص قبلی',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'تراکنش شروع برای دسترسی به صفحه تنظیمات جستجو باید این عملیات تکمیل یا کنسل شود',
	'CONTINUE_INDEXING'						=> 'ادامه دادن فرآيند شاخص سازي پيشين',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'تراکنش  شاخص بندی آغاز شده است،برای دسترسی به صفحه تنظیمات جستجو باید این فرآیند تکمیل و یا لغو شود.',
	'CREATE_INDEX'							=> 'ايجاد شاخص',

	'DELETE_INDEX'							=> 'حذف شاخص',
	'DELETING_INDEX_IN_PROGRESS'			=> 'حذف شاخص در حال پيشرفت',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'در حال پاکسازی مرجع شاخص می کند،این فرآیند ممکن است چند دقیقه ای ظول بکشد.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL fulltext فقط قابل بکارگيري بر روي MySQL4 يا بالاتر است.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'شاخص های متنی MYSQL فقط در جداول MYISAM قابل اجرا است.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'تعداد کل پست هاي شاخص شده',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'پشتیبانی از کاراکتر های غیر لاتین و UTF-8 با استفاده از mbstring :',
	'FULLTEXT_MYSQL_PCRE'					=> 'پشتیبانی از کاراکتر های غیر لاتین و UTF-8 با استفاده از PCRE :',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'اگر PCRE از عبارات کاراکتر پشتیبانی نکند،به طور خودکار mbstring جایگزین میشود.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'این شاخص جستجو نیازمند یونی کد PCRE می باشد،این ویژگی فقط در PHP 4.4، PHP 5.1 و بالاتر موجود می باشد.این گزینه جستجوی کاراکتر های غیر لاتین را راحت تر می کند.',
		
		// 3.0.8 www.phpBB.Maghsad.com Changes START
 	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'حدااقل کلمات با این تعداد کاراکتر در جستجو ها استفاده میشوند،این تعداد کاراکتر از تنظیمات پیکربندی MYSQL استفاده میکند.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'کلماتی که بیشتر از این تعداد کاراکتر باشند در جستجو ها استفاده میشوند،این تعداد از تنظیمات پیکربندی MYSQL استفاده میکند.',
       // 3.0.8 www.phpBB.Maghsad.com Changes END

	'GENERAL_SEARCH_SETTINGS'				=> 'تنظيمات جامع جستجو',
	'GO_TO_SEARCH_INDEX'					=> 'برو به صفحه شاخص جستجو',

	'INDEX_STATS'							=> 'آمار شاخص',
	'INDEXING_IN_PROGRESS'					=> 'شاخص سازي در حال پيشرفت',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'شاخص سازي در حال پيشرفت،این فرآیند ممکن است بسته به حجم دیتا بیس انجمن بین چند دقیقه تا چند ساعت طولبکشد.',

	'LIMIT_SEARCH_LOAD'						=> 'محدودیت بارگذاری صفحه جستجو',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'اگر بارگذاری صفحه جستجو بیش از 1 دقیقه طول بکشد،صفحه غیر فعال خواهد شد. 1.0 معادل 100% مصرف یک پردازنده است. این عملکرد فقط در سرور های UNIX فعال میباشد.',

	'MAX_SEARCH_CHARS'						=> 'حد اکثر کاراکتر هاي فهرست شده توسط جستجو',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'كلمات با تعداد كمتر از اين كاراكتر ها براي جستجو نشانه گذاري خواهند شد.',
	'MIN_SEARCH_CHARS'						=> 'حداقل کاراکتر هاي فهرست شده توسط جستجو',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'كلمات با تعداد بيشتر از اين كاراكتر ها براي جستجو نشانه گذاري خواهند شد',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'حداقل تعداد کاراکتر ها براي نويسنده',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '',

	'PROGRESS_BAR'							=> 'روند پيشرفت',

	'SEARCH_GUEST_INTERVAL'					=> 'فاصله بين جستجوي مهمان',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'تعداد ثانیه هایی که مهمانان باید بین دو فرایند جستجو صبر کنند، اگر مهمانی در حال جستجو باشد سایر مهمان ها نیز باید تا این ثانیه صبر کنند و دوباره ادامه به جستجو دهند',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'همه پست ها تا id %1$d از بین %2$d پست در این مرحله شاخص بندی شدند.<br /رتبه شاخص بندی کنونی تقریبا %3$در ثانیه می باشد.<br />شاخص بندی در حال انجام است',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'همه پست ها تا id %1$d از شاخص جستجو حذف شدند.<br />فرا آیند حذف پست ها از شاخص در حال انجام است.',
	'SEARCH_INDEX_CREATED'					=> 'همه پست هاي موجود در پايگاه داده ها با موفقيت شاخص سازي شدند.',
	'SEARCH_INDEX_REMOVED'					=> 'شاخص براي اين حامي جستجو با موفقيت حذف شد.',
	'SEARCH_INTERVAL'						=> 'فاصله زماني بين جستجوي کاربر',
	'SEARCH_INTERVAL_EXPLAIN'				=> '',
	'SEARCH_STORE_RESULTS'					=> 'مدت نگهداري حافظه موقت جستجو',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'اگر اين مقدار را برابر عدد 0 قرار دهيد، حافظه موقت جستجو غير فعال مي شود.',
	'SEARCH_TYPE'							=> 'حامي جستجو',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB به شما این اجازه را می دهد تا شاخص جستجویی انتخاب کنید،به طور پیشفرض از مرجع جستجوی متنی phpBB استفاده می شود.',
	'SWITCHED_SEARCH_BACKEND'				=> 'حالت جستجو را تغییر داده شد ،برای استفاده از حالت جستجو باید مطمئن شوید که شاخصی برای این مرجع در دسترس باشد.',

	'TOTAL_WORDS'							=> 'تعداد کل واژه هاي شاخص شده',
	'TOTAL_MATCHES'							=> 'تعداد کل واژه هاي شاخص شده',

	'YES_SEARCH'							=> 'فعال بودن امکانات جستجو',
	'YES_SEARCH_EXPLAIN'					=> '',
	'YES_SEARCH_UPDATE'						=> 'فعال بودن به روز رساني fulltext',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '',

//BEGIN phpBB 3.0.5 Additionals by www.Maghsad.com


	'MAX_NUM_SEARCH_KEYWORDS'				=> 'حداکثر تعداد کلمات کلیدی برای جستجو',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'حداکثر تعداد کلماتی که کاربران می توانند جستجو کنند ،برای جستجو کردن نامحدود عدد 0 را وارد نمایید.',
		
		
//END phpBB 3.0.5 Additionals by www.Maghsad.com
));

?>