<?php
/**
*
* acp_profile [Farsi]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
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
	'ADDED_PROFILE_FIELD'	=> 'فیلد سفارشی مشخصات با موفقیت ایجاد شد.',
	'ALPHA_ONLY'	=> 'فقط اعداد و حروف',
	'ALPHA_SPACERS'	 => 'فقط اعداد و حروف و خط فاصله',
	'ALWAYS_TODAY'	=> 'همیشه تاریخ کنونی',
	'BOOL_ENTRIES_EXPLAIN'	=> 'تنظیمات خود را وارد کنید',
	'BOOL_TYPE_EXPLAIN'	=> 'تعیین کردن نوع, دو حالت چک باکس و تکمه های رادیو دارد. یک چک باکس فقط برای بررسی به کاربران مختلف نشان داده می شود..دکمه های رادیو با صرف نظر از مقادیرشان قابل نمایش خواهند بود.',
	'CHANGED_PROFILE_FIELD'	=> 'فیلد مشخصات با موفقیت ویرایش شد.',
	'CHARS_ANY'	=> 'هر کاراکتر',
	'CHECKBOX'	=> 'چک باکس',
	'COLUMNS'	=> 'ستون ها',
	'CP_LANG_DEFAULT_VALUE'	=> 'مقدار پیش فرض',
	'CP_LANG_EXPLAIN'	=> 'توضیحات فیلد',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'این توضیحات به کاربران نمایش داده خواهد شد.',
	'CP_LANG_NAME'		=> 'نام/عنوان فیلد به کاربران نمایش داده خواهد شد',
	'CP_LANG_OPTIONS'	=> 'تنظیمات',
	'CREATE_NEW_FIELD'	=> 'ایجاد فیلد جدید',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'حداقل یکی از فیلد های سفارشی ترجمه نشده ،لطفا برای این کار بر روی لینک "ترجمه" کلیک کنید.',
	'DEFAULT_ISO_LANGUAGE'	=> 'زبان پیشفرض [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'ورودی های زبان پیشفرض برای این فیلد صدق نمی کنند.',
	'DEFAULT_VALUE'	=> 'مقدار پیشفرض',
	'DELETE_PROFILE_FIELD'	=> 'حذف فیلد مشخصات',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'آیا از حذف نمودن این فیلد مشخصات اطمینان دارید ؟',
	'DISPLAY_AT_PROFILE'	=> 'نمایش در کنترل پنل کاربر',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'کاربر توانایی ویرایش این فیلد مشخصات در کنترل پنل کاربری را داراست.',
	'DISPLAY_AT_REGISTER'	=> 'نمایش در صحنه عضویت',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'اگر این گزینه فعال شود فیلد ساخته شده در صفحه عضویت به نمایش در خواهد آمد و کاربران نیز میتوانند در کنترل پنل کاربری آن را تغییر دهند.',
	'DISPLAY_PROFILE_FIELD'	=> 'نمایش فیلد مشخصات بصورت عمومی',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'فیلد پروفایل در تمامی صفحاتی که در تنظیمات بارگزاری معین شده است نمایش داده خواهد شد،اگر این گزینه در حالت "خیر" قرار بگیرد،فیلد در صفحات موضوعات،پروفایل و در لیست اعضا نمایش داده نمیشود.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'گزینه های خود را وارد کنید ، هرگزینه در یک خط.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'لطفا توجه کنید که می توانید متن داخل این گزینه ها را تغییر و یا گزینه ای را تغییر دهید. اضافه کردن یک گزینه بین دو گزینه توصیه نمی شود و ممکن است موجب انتخاب اشتباه گزینه ها در بین کاربران شود،همین موضوع برای حذف کردن گزینه ای از بین دو گزینه هم صادق است.',
	'EMPTY_FIELD_IDENT'	=> 'فیلد بدون هویت',
	'EMPTY_USER_FIELD_NAME'	=> 'لطفا نام/عنوان فیلد را وارد کنید',
	'ENTRIES'	=> 'ثبت شده ها',
	'EVERYTHING_OK'	=> 'همه چیز تصویت',
	'FIELD_BOOL'	=> 'Boolean (بلی/خیر)',
	'FIELD_DATE'	=> 'تاریخ',
	'FIELD_DESCRIPTION'	=> 'توضیحات فیلد',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'شرح این فیلد برای کاربر.',
	'FIELD_DROPDOWN'	=> 'جعبه کشويي',
	'FIELD_IDENT'	=> 'هویت فیلد',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'این هویت پیش از این بکارگرفته شده است. لطفا نام دیگری انتخاب نمایید.',
	'FIELD_IDENT_EXPLAIN'	=> 'هویت فیلد نامی است که آنرا در پایگاه داده ها و قالب ها تمیز می دهد.',
	'FIELD_INT'	=> 'اعداد',
	'FIELD_LENGTH'	=> 'امتداد برای باکس input',
	'FIELD_NOT_FOUND'	=> 'فیلد مشخصات پیدا نشد.',
	'FIELD_STRING'	=> 'فيلد متني',
	'FIELD_TEXT'	=> 'ناحيهمتني ( Textarea )',
	'FIELD_TYPE'	=> 'حالت فیلد',
	'FIELD_TYPE_EXPLAIN'	=> 'شما نمی توانید حالت فیلد را بعدا تغییر دهید.',
	'FIELD_VALIDATION'	=> 'تایید اعتبار فیلد',
	'FIRST_OPTION'	=> 'نخستین گزینه',
	'HIDE_PROFILE_FIELD'	=> 'فیلد پنهان مشخصات',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'این گزینه فیلد را از همه به جز کسانی که الان می توانند این فیلد را ببینند ،مخفی می کند.اگر نمایش فیلد در کنترل پنل کاربر غیرفعال باشد،هیچ کاربری نمی تواند این فیلد را ببیند و یا تغییراتی در آن اعمال کند که در این صورت فیلد توسط مدیران قابل مشاهده و ویرایش خواهد بود.',

	'INVALID_CHARS_FIELD_IDENT'	=> ' فیلد فقط می تواند حاوی حروف کوچک انگلیسی یا لاتین و _ باشد',
	'INVALID_FIELD_IDENT_LEN'	=> 'هویت فیلد تنها می تواند 17 کاراکتر امتداد یابد',
	'ISO_LANGUAGE'	=> 'زبان [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'متعلقات تعيين زبان [<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'حداکثر تعداد کاراکتر ها',
	'MAX_FIELD_NUMBER'	=> 'بيشترين تعداد مجاز',
	'MIN_FIELD_CHARS'	=> 'حد اکثر تعداد کاراکتر ها',
	'MIN_FIELD_NUMBER'	=> 'کمترين تعداد مجاز',
	'NO_FIELD_ENTRIES'	=> 'هیچ ثبت شده ای تعیین نشده است',
	'NO_FIELD_ID'	=> 'ID فیلد تعیین نشده است.',
	'NO_FIELD_TYPE'	=> 'حالت فیلد تعیین نشده است.',
	'NO_VALUE_OPTION'		=> 'مقداری در گزینه ها مشخص نشده است.',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'مقدار برای فیلد در آن وارد نشود.اگر پر کردن فیلد ضروری باشد و کاربر آن فیلد را پر نکرده باشند ،خطایی برای وی نمایش داده میشود.',
	'NUMBERS_ONLY'	=> 'فقط اعداد (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'گزینه های اساسی',
	'PROFILE_FIELD_ACTIVATED'	=> 'فیلد مشخصات با موفقیت فعال شد.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'فیلد مشخصات با موفقیت غیرفعال شد.',
	'PROFILE_LANG_OPTIONS'	=> 'گزینه های ویژه زبان',
	'PROFILE_TYPE_OPTIONS'	=> 'گزینه های ویژه حالت مشخصات',
	'RADIO_BUTTONS'	=> 'تکمه های زادیو',
	'REMOVED_PROFILE_FIELD'	=> 'فیلد مشخصات با موفقیت حذف شد.',
	'REQUIRED_FIELD'	=> 'فیلد الزامی',
	'REQUIRED_FIELD_EXPLAIN'	=> 'اگر فیلد الزامی باشد،باید کاربران و مدیران آن را تکمیل نمایند،اگر نمایش فیلد در حین ثبت نام غیرفعال باشد،پر کردن فیلد فقط هنگامی ضروری می شود که کاربر پروفایل خود را ویرایش کند.',
	'ROWS'	=> 'سطرها',
	'SAVE'	=> 'ذخیره',
	'SHOW_NOVALUE_FIELD'			=> 'نمایش فیلد اگر هیچ مقداری انتخاب نشده باشد',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'تعیین کنید اگر برای فیلد مقداری انتخاب نشده باشد نمایش داده شود یا خیر',
	'SECOND_OPTION'	=> 'گزینه های ثانوی',
	'STEP_1_EXPLAIN_CREATE'			=> 'در این بخش می توانید اولین ایتم فیلد پروفایل را وارد کنید. این اطلاعات در مرحله دوم مورد نیاز خواهد بود.',
	'STEP_1_EXPLAIN_EDIT'			=> 'در این بخش می توانید ایتم های فیلد پروفایل را تغییر دهید. این اطلاعات برای مرحله دوم محاسبه میشوند.',
	'STEP_1_TITLE_CREATE'	=> 'افزودن فیلد مشخصات',
	'STEP_1_TITLE_EDIT'	=> 'ویرایش فیلد مشخصات',
	'STEP_2_EXPLAIN_CREATE'	=> 'در این قسمت میتوانید تنظیمات عمومی و رایج را انجام دهید.',
	'STEP_2_EXPLAIN_EDIT'	=> 'در این بخش می توانید گزینه های عمومی و رایج را تنظیم کنید.<br /><strong>توجه داشته باشید که این تغییرات در فیلد های پروفایلی که توسط کاربران ایجاد شده اند اعمال نخواهد شد.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'گزینه های اختصاصی نوع پروفایل',
	'STEP_2_TITLE_EDIT'	=> 'گزینه های اختصاصی نوع پروفایل',
	'STEP_3_EXPLAIN_CREATE'	=> 'اگر بیش از یک زیان در تالارتان نصب کرده باشید. باید سایر موارد زبان را نیز تکمیل کنید. فیلد پروفایل با زبان پیشفرض هماهنگ است، می توانید سایر زبان ها را هم تکمیل کنید',
	'STEP_3_EXPLAIN_EDIT'	=> 'اگر بیش از یک زبان در تالارتان نصب کرده باشید،می توانید تغییرات را در سایر زبان ها هم اعمال کنید. فیلد های پروفایل با زبان پیشفرض هماهنگ هستند.',
	'STEP_3_TITLE_CREATE'	=> 'تعریف زبان های باقی مانده',
	'STEP_3_TITLE_EDIT'	=> 'تعیرف زبان',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'عبارت پیشفرضی را وارد کنید .برای نمایش خالی ، در اولین مکان چیزی نویسید.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'عبارت پیشفرضی را وارد کنید .برای نمایش خالی ، در اولین مکان چیزی نویسید.',
	'TRANSLATE'	=> 'ترجمه',
	'USER_FIELD_NAME'	=> 'نام فیلد/عنوان که برای کاربران نمایش داده می شود',
	'VISIBILITY_OPTION'	=> 'گزينه هاي بصري',
	
	
	   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	   
	   	'DISPLAY_ON_VT'					=> 'نمایش در تاپیک ها',
	    'DISPLAY_ON_VT_EXPLAIN'			=> 'اگر این گزینه فعال باشد فیلد شما در پروفایل کوچک واقع در تاپیک ها نمایش داده خواهد شد',


	   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com	
	
));

?>