<?php
/**
*
* acp_posting [Farsi]
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode یک یک اجراگر بر پایه HTML است که که کنترل های بیشتری را برای چیزهای که قرار است مشاهده شوند ارائه می دهد.از این صفحه شما می توانید آنها را اضافه ،حذف، یا آنها را بصورت سفارشی ویرایش کنید.',
	'ADD_BBCODE'				=> 'اضافه کردن بی بی کد جدید',

	'BBCODE_DANGER'				=> 'بی بی کدی که قصد اضافه کردن دارید دارای اشکال است زیرا، {TEXT} مورد نامطابقی از HTML هست. ممکن است مسائل امنیتی XSS باشد. سعی کنید که از انواع {SIMPLETEXT} یا {INTTEXT} استفاده کنید. فقط هنگامی این مرحله را ادامه دهید که از پیامدهای اخطار ها و مسائل امنیتی آگاه باشید و فقط هنگامی از {TEXT} استفاده کنید که عدم استفاده از آن ممکن نباشد.',
	'BBCODE_DANGER_PROCEED'		=> 'ادامه', //'I understand the risk',


	'BBCODE_ADDED'				=> 'BBCode با موفيت اضافه شد.',
	'BBCODE_EDITED'				=> 'BBCode با موافقت ويرايش شد.',
	'BBCODE_NOT_EXIST'			=> 'BBCode انتخاب شده توسط شما موجود نيست.',
	'BBCODE_HELPLINE'			=> 'راهنما',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'مطالب موجود در اين قسمت،در هنگام قرار گيري موس روي دكمه BBCode شما نمايش داده خواهند شد.',
	'BBCODE_HELPLINE_TEXT'		=> 'متن راهنما',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'متن راهنمای شما خیلی طولانی است',
	'BBCODE_INVALID_TAG_NAME'	=> 'تگ BBCode تعريف شده توسط شما قبلا ثبت شده است.',
	'BBCODE_INVALID'			=> 'BBCode شما در يک فرم بي اعبار ساخته شده است.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'BBCode سفارشی شما باید دارای دو تگ باز و بسته باشد.',
	'BBCODE_TAG'				=> 'تگ',
	'BBCODE_TAG_TOO_LONG'		=> 'تگ تعريف شده طولاني است.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'تعریف تگ وارد شده بسیار طولانی است.',
	'BBCODE_USAGE'				=> 'BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'BBCode جديد در اين قسمت تعريف مي شود. براي ديدن دستور هاي قابل استفاده ، قسمت %sپايين صفحه را مطالعه نماييد %s',

	'EXAMPLE'						=> 'مثال:',
	'EXAMPLES'						=> 'مثال ها:',

	'HTML_REPLACEMENT'				=> 'جايگزين HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'در اين قسمت جايگزين HTML براي BBCode خود را وارد كنيد.',

	'TOKEN'					=> 'مشخصه',
	'TOKENS'				=> 'مشصخه ها',
	'TOKENS_EXPLAIN'		=> 'علامت ها حفره هایی برای ورودی کاربران می باشند. داده های ورودی فقط هنگامی تأیید می شوند که قابل تعریف باشند. اگر نیاز باشد،می توانید اعدادی را به انتهای متن در پارانتز اضافه کنید. مانند {TEXT1}, {TEXT2}.<br /><br />در جایگزینی HTML می توانید از حلقه های زبانی ای استفاده کنید که در که در دایرکتوری language/ قرار دارند،مانند : {L_<em>&lt;STRINGNAME&gt;</em>} که <em>&lt;STRINGNAME&gt;</em> نام حلقه ترجمه شده توسط شما است و می خواهید آن را اضافه کنید برای مثال، {L_WROTE} به صورت “wrote” و یا ترجمه متناظر با آن(با توجه به زبان محلی) نمایش داده خواهد شد.<br /><br /><strong>لطفا توجه داشته باشید که فقط از علامت هایی می توانید در BBCode استفاده کنید که در لیست زیر موجود می باشند.</strong>',
	'TOKEN_DEFINITION'		=> 'چه مي شود ؟',
	'TOO_MANY_BBCODES'		=> 'نمی توانید بیشتر از این BBCode جدیدی اضافه کنید،یک یا چند مورد را حذف کنید.',

	'tokens'	=>	array(
		'TEXT'			=> 'هر متن حاوي کاراکتر هاي خارجي, اعداد, وغيره... نبايد در تگ هاي HTML قرار گيرد.با مشخص شده ها و متون کوچک سعي کنيد.',
		'SIMPLETEXT'	=> 'کاراکتر های زبان لاتین، اعداد, خط فاصله, کاما, نقطه, منها, به علاوه, خط و خط زیرین.',
		'INTTEXT'		=> ' یونی کد ها شامل، اعداد, خط فاصله, کاما, نقطه, متها, به علاوه, خط ربط, خط زیرین و فضای خالی.',

		'IDENTIFIER'	=> 'کاراکتر های زبان لاتین (A-Z) اعداد, خط ربط و خط زیرین.',
		'NUMBER'		=> 'هر سری از ارقام',
		'EMAIL'			=> 'یک ادرس ایمیل معتبر',
		'URL'			=> 'URL معتبر با هر نوع پروتکل (http, ftp, غیره… سوء استفاده در جاوا اسکریپت ممکن نیست). اگر هیچکدام تعریف نشود “http://” پیشوند حلقه خواهد بود.',
		'LOCAL_URL'		=> 'URL محلی که در صفحات داخلی سایت استفاده میشود و حاوی هیچگونه پروتکل و پیشوند نیست.',
		'COLOR'			=> 'رنگ HTML که میتواند به صورت عددی نوشته شود <samp>#FF1234</samp> و یا <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">کلمات کلیدی رنگ های CSS</a> مانند <samp>سرخ ابی</samp> یا <samp>مرزغیرفعال</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'از اينجا شما مي توانيد نماد هايي را که کاربران مي توانند در مباحث يا پست هايشان بکار گيرند را اضافه ، حذف، يا ويرايش کنيد. اين نماد ها معمولا در فهرست انجمن ها و يا در ليست مباحث در مجاورت عنوان مباحث قابل رويت مي باشند. شما نيز مي توانيد بسته هاي نماد را نصب و يا بسته هاي جديدي را ايجاد کنيد.',
	'ACP_SMILIES_EXPLAIN'	=> 'شکلک ها و احساسات براي ايجاد نوعي جو هستند, بعضي از اوقات تصاوير انيميشني براي نقل کردن برخي هيجانات و احساسات گنجانده مي شوند. از اينجا شما مي توانيد شکلک هايي را که کاربران مي توانند در پست ها و پیام هاي خصوصي خود از آنها استفاده کنند ، اضافه ، حذف  و يا ويرايش کنيد . شما نيز مي توانيد بسته هاي شکلک را نصب و يا بسته هاي جديدي را ايجاد کنيد.',
	'ADD_SMILIES'			=> 'افزودن شکلک هاي متعدد',
	'ADD_SMILEY_CODE'		=> 'اضافه کردن کد شکلک های اضافی',
	'ADD_ICONS'				=> 'افزودن نماد هاي متعدد',
	'AFTER_ICONS'			=> 'بعد از %s',
	'AFTER_SMILIES'			=> 'بعد از %s',

	'CODE'						=> 'کد',
	'CURRENT_ICONS'				=> 'نماد هاي کنوني',
	'CURRENT_ICONS_EXPLAIN'		=> 'انتخاب کنید چه عملیاتی صورت بگیرید',
	'CURRENT_SMILIES'			=> 'شکلک هاي کنوني',
	'CURRENT_SMILIES_EXPLAIN'	=> 'انتخاب کنید چه عملیاتی رو شکلک ها انجام بگیرد',

	'DISPLAY_ON_POSTING'		=> 'نمايش در صفحه ارسال پست',
	'DISPLAY_POSTING'			=> 'در صفحه ارسال پست',
	'DISPLAY_POSTING_NO'		=> 'در صفحه ارسال پست نيست',



	'EDIT_ICONS'				=> 'ويرايش نماد ها',
	'EDIT_SMILIES'				=> 'ويرايش شکلک ها',
	'EMOTION'					=> 'احساس',
	'EXPORT_ICONS'				=> 'خارج سازي و دريافت icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sاگر بر روی این لینک کلیک کنید پیکربندی بسته آیکون ها در <samp>icons.pak</samp> ذخیره خواهد شد و بعد از بارگیری می توانید آن را در آرشیو <samp>.zip</samp> یا <samp>.tgz</samp> قرار دهید که هم حاوی فایل پیکربندی <samp>icons.pak</samp> و هم خود آیکون ها می باشد.%s.',
	'EXPORT_SMILIES'			=> 'خارج سازي و دريافت smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sبا کليک بر روي اين لينک, پيکربندي هاي انجام شده بر روي شکلک هاي نصب شده شما در قالب فايل <samp>smilies.pak</samp> قابل دريافت خواهد بود. شما مي توانيد فايل بسته را در قالب آرشيو <samp>.zip</samp> يا <samp>.tgz</samp> بهمراه شکلک ها و پيکربندي هاي صورت گرفته در قالب <samp>smilies.pak</samp> دريافت نماييد%s.',

	'FIRST'			=> 'نخست',

	'ICONS_ADD'				=> 'افزودن يک نماد جديد',
	'ICONS_NONE_ADDED'		=> 'هیچ نمادی اضافه ندشه است',
	'ICONS_ONE_ADDED'		=> 'نماد با موفقيت اضافه شد.',
	'ICONS_ADDED'			=> 'نماد ها با موفقيت اضافه شدند.',
	'ICONS_CONFIG'			=> 'پيکربندي نماد ها',
	'ICONS_DELETED'			=> 'نماد با موفقيت حذف شد.',
	'ICONS_EDIT'			=> 'ويرايش نماد',
	'ICONS_ONE_EDITED'		=> 'نماد با موفقيت بروز شد.',
	'ICONS_NONE_EDITED'		=> 'هیچ نمادی اضافه نشد',
	'ICONS_EDITED'			=> 'نماد ها با موفقيت بروز شدند.',
	'ICONS_HEIGHT'			=> 'ارتفاع نماد',
	'ICONS_IMAGE'			=> 'تصوير نماد',
	'ICONS_IMPORTED'		=> 'بسته نماد با موفقيت نصب شد.',
	'ICONS_IMPORT_SUCCESS'	=> 'بسته نماد با موفقيت وارد شد.',
	'ICONS_LOCATION'		=> 'موقعيت نماد',
	'ICONS_NOT_DISPLAYED'	=> 'نماد هاي ذيل در صفحه ارسال پست قابل رويت نيستند',
	'ICONS_ORDER'			=> 'ترتيب نماد',
	'ICONS_URL'				=> 'فايل تصوير نماد',
	'ICONS_WIDTH'			=> 'عرض نماد',
	'IMPORT_ICONS'			=> 'نصب بسته نماد',
	'IMPORT_SMILIES'		=> 'نصب بسته شکلک',

	'KEEP_ALL'			=> 'نگهداري همه',

	'MASS_ADD_SMILIES'	=> 'افزودن شکلک هاي متعدد',

	'NO_ICONS_ADD'		=> 'هيچ نمادي براي اضافه شدن در دسترس نيست.',
	'NO_ICONS_EDIT'		=> 'هيچ نمادي براي ويرايش در دسترس نيست.',
	'NO_ICONS_EXPORT'	=> 'نمادی برای ایجاد پکیج وجود ندارد',
	'NO_ICONS_PAK'		=> 'هيچ بسته نمادي يافت نشد.',
	'NO_SMILIES_ADD'	=> 'شکلک هايي براي اضافه شدن در دسترس نيستند.',
	'NO_SMILIES_EDIT'	=> 'هيچ شکلکي براي ويرايش وجود ندارد.',
	'NO_SMILIES_EXPORT'	=> 'هیچ شکلکی برای ایجاد پکیج وجود ندارد',
	'NO_SMILIES_PAK'	=> 'هيچ بسته شکلکي يافت تنشد.',

	'PAK_FILE_NOT_READABLE'		=> 'نتوانست فايل <samp>.pak</samp> را بخواند.',

	'REPLACE_MATCHES'	=> 'جايگزين کردن هماهنگ ها',

	'SELECT_PACKAGE'			=> 'انتخاب يک بسته فايل',
	'SMILIES_ADD'				=> 'افزودن يک شکلک جديد',
	'SMILIES_NONE_ADDED'		=> 'هیچ شکلکی اضافه نشد',
	'SMILIES_ONE_ADDED'			=> 'شکلک با موفقيت اضافه شد.',
	'SMILIES_ADDED'				=> 'شکلک ها با موفقيت اضافه شدند.',
	'SMILIES_CODE'				=> 'کد شکلک',
	'SMILIES_CONFIG'			=> 'پيکربندي شکلک',
	'SMILIES_DELETED'			=> 'شکلک با موفقيت حذف شد.',
	'SMILIES_EDIT'				=> 'ويرايش شکلک',
	'SMILIE_NO_CODE'			=> 'شکلک “%s”  پذيرش نشد, کد ثبت نشده است.',
	'SMILIE_NO_EMOTION'			=> 'شکلک “%s” پذيرش نشد, احساس ثبت نشده است.',
		'SMILIE_NO_FILE'			=> ' شکلک “%s” ثبت نشد زیرا فایل مربوطه یافت نشد.',
	'SMILIES_NONE_EDITED'		=> 'هيچ شکلکي آپديت نشده.',
	'SMILIES_ONE_EDITED'		=> 'شکلک با موفقيت بروز شد.',
	'SMILIES_EDITED'			=> 'شکلک ها با موفقيت بروز شدند.',
	'SMILIES_EMOTION'			=> 'احساس',
	'SMILIES_HEIGHT'			=> 'ارتفاع شکلک',
	'SMILIES_IMAGE'				=> 'تصوير شکلک',
	'SMILIES_IMPORTED'			=> 'بسته شکلک ها با موفقيت نصب شد.',
	'SMILIES_IMPORT_SUCCESS'	=> 'بسته شکلک ها با موفقيت وارد شد.',
	'SMILIES_LOCATION'			=> 'استقرار شکلک',
	'SMILIES_NOT_DISPLAYED'		=> 'شکلک هاي ذيل در صفحه ارسال پست قابل رويت نمي باشند',
	'SMILIES_ORDER'				=> 'موقعيت شکلک',
	'SMILIES_URL'				=> 'فايل تصوير شکلک',
	'SMILIES_WIDTH'				=> 'عرض شکلک',

	'WRONG_PAK_TYPE'	=> 'بسته تعيين شده شامل داده هاي مناسب نمي باشد.',
));

// Word censors
$lang = array_merge($lang, array(
	
	
//phpBB 3.0.5 by www.Maghsad.com
	'ACP_WORDS_EXPLAIN'		=> 'در این بخش می توانید سانسور کلمات را مدیریت کنید.کلمات سانسور شده در نام کاربری کاربران غیر فعال است.می توانید با استفاده از ستاره (*) می توانید پیشوند و پسوند کلمات را مشخص کنید به طور مثال اگر *test را وارد کنید،کلمه detest سانسور خواهد شد و اگر test* را وارد کنید، testing هم سانسور خواهد شد. ',
// END phpBB 3.0.5 by www.Maghsad.com


	'ADD_WORD'				=> 'افزودن يک واژه جديد',

	'EDIT_WORD'		=> 'ويرايش سانسور واژه',
	'ENTER_WORD'	=> 'شما مي بايست يک واژه و جايگزين آن را وارد کنيد.',

	'NO_WORD'	=> 'هيچ سانسور واژه اي براي ويرايش انتخاب نشده است.',

	'REPLACEMENT'	=> 'جايگزين',

	'UPDATE_WORD'	=> 'ويرايش سانسور واژه',

	'WORD'				=> 'واژه',
	'WORD_ADDED'		=> 'سانسور واژه با موفقيت اضافه شد.',
	'WORD_REMOVED'		=> 'سانسور واژه با موفقيت حذف شد.',
	'WORD_UPDATED'		=> 'سانسور واژه با موفقيت بروز شد.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'براي ويرايش رتبه هاي كنوني روي علامت چرخ دنده (سبز رنگ) و براي حذف آن ها روي علامت ضربدر (قرمز رنگ) كليك كنيد.
براي ايجاد يك رتبه جديد روي دكمه افزودن رتبه جديد كليك كنيد.
',
	'ADD_RANK'				=> 'افزودن رتبه جديد',

	'MUST_SELECT_RANK'		=> 'شما بايد يک رتبه انتخاب کنيد.',

	'NO_ASSIGNED_RANK'		=> 'هيچ رتبه اختصاصي تعريف نشده است.',
	'NO_RANK_TITLE'			=> 'شما عنواني براي اين رتبه تعيين ننموده ايد.',
	'NO_UPDATE_RANKS'		=> 'رتبه با موفقيت حذف شد. اگرچه حساب هاي کاربري با اين رتبه بروز نشدند. شما مي بايست بصورت دستي رتبه حساب هاي کاربري آنها را بازنشاني کنيد.',

	'RANK_ADDED'			=> 'رتبه با موفقيت اضافه شد.',
	'RANK_IMAGE'			=> 'تصوير رتبه',
	'RANK_IMAGE_EXPLAIN'	=> 'از این گزینه برای تصاویر کوچک استفاده کنید،این تصویر باید در روت انجمن قرار گرفته باشد.',
	'RANK_MINIMUM'			=> 'حد اقل پست ها',
	'RANK_REMOVED'			=> 'رتبه با موفقيت حذف شد.',
	'RANK_SPECIAL'			=> 'تعيين بعنوان رتبه اختصاصي',
	'RANK_TITLE'			=> 'عنوان رتبه',
	'RANK_UPDATED'			=> 'رتبه با موفقيت بروز شد.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'در اینجا می توانید اسامی غیرمجاز برای ثبت را تعیین کنید.
	<br />
	برای جلوگیری از ثبت نام اسامی که کلمه خاصی را در خود دارند، در جلو یا پشت کلمه از علامت * استفاده کنید.',
	'ADD_DISALLOW_EXPLAIN'	=> 'به عنوان مثال برای جلوگیری از ثبت نام کلمه سکسی و مشتقات آن، وارد کنید سکس*',
	'ADD_DISALLOW_TITLE'	=> 'اضافه کردن یک نام کاربری غیرمجاز',

	'DELETE_DISALLOW_EXPLAIN'	=> 'برای حذف نام کاربری از لیست کاربران غیر مجاز،ابتدا بر روی ان علامت بگذارید و سپس ارسال کنید.',
	'DELETE_DISALLOW_TITLE'		=> 'حذف نام کاربری غیر مجاز',
	'DISALLOWED_ALREADY'		=> 'نام وارد شده غیر مجاز است',
	'DISALLOWED_DELETED'		=> 'نام کاربری با موفقیت حذف شد',
	'DISALLOW_SUCCESSFUL'		=> 'نام کاربري با موفقيت براي باطل شدن اضافه شد.',

	'NO_DISALLOWED'				=> 'بدون نام هاي کاربري باطل شده',
	'NO_USERNAME_SPECIFIED'		=> 'نامی را انتخاب و یا وارد نکرده اید.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'در این بخش می توانید دلایل ثبت شده در گزارش ها را ویرایش ، حذف و یا اضافه کنید. توجه داشته باشید که حذف یکی از دلایل ( که با ستاره مشخص شده) مقدور نیست',
	'ADD_NEW_REASON'		=> 'افزودن دليل جديد',
	'AVAILABLE_TITLES'		=> 'عناوين محلي فعال براي گزارش ها',

	'IS_NOT_TRANSLATED'			=> 'دليل مستقر<strong>نشده</strong> است.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'دلیل <strong>محلی نیست</strong> . برای ایجاد دلایل محلی،کلید مناسب را در فایل زبانی (قسمت دلایل) وارد کنید.',
	'IS_TRANSLATED'				=> 'دليل مستقر شده است.',
	'IS_TRANSLATED_EXPLAIN'		=> 'دلیل محلی می باشد،اگر عنوان وارد شده در این بخش در فایل زبانی نیز وجود داشته باشد،از عنوان و توضیحات موجود در فایل زبانی استفاده خواهد شد.',

	'NO_REASON'					=> 'دليل قادر به پيدا شدن نيست.',
	'NO_REASON_INFO'			=> 'باید عنوان و توضیحاتی را برای دلیل وارد کنید.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'نمی توانید دلیل پیشفرض "دیگر" را حذف کنید.',

	'REASON_ADD'				=> 'افزودن دليل گزارش / عدم پذيرش جديد',
	'REASON_ADDED'				=> 'دليل گزارش / عدم پذيرش با موفقيت اضافه شد.',
	'REASON_ALREADY_EXIST'		=> 'دلیلی با عنوان وارد شده وجود دارد،لطفا عنوان دیگری را وارد کنید.',
	'REASON_DESCRIPTION'		=> 'شرح دليل',
	'REASON_DESC_TRANSLATED'	=> 'توضيحات نمايشي دليل',
	'REASON_EDIT'				=> 'ويرايش دليل گزارش/عدم پذيرش',
	'REASON_EDIT_EXPLAIN'		=> 'در اينجا شما مي توانيد يک دليل را اضافه و يا ويرايش کنيد. چنانچه دليل ترجمه شده باشد ، اصطلاح محلي براي توضيحات نمايش داده مي شود.',
	'REASON_REMOVED'			=> 'دليل گزارش / عدم پذيرش با موفقيت حذف شد.',
	'REASON_TITLE'				=> 'عنوان دليل',
	'REASON_TITLE_TRANSLATED'	=> 'عنوان نمايشي دليل',
	'REASON_UPDATED'			=> 'دليل گزارش / عدم پذيرش با موفقيت حذف شد.',

	'USED_IN_REPORTS'		=> 'دفعات بکار رفته براي گزارش ها',
		
		
	   // 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
	   
	'TOO_MANY_SMILIES'			=> 'محدودیت %d شکلک پر شده است.',
	    ////////////////////
    	'RANK_IMAGE_IN_USE'		=> '(در حال استفاده)',
    	///////////////////
    	
	   
	   
	   //END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
		
));

?>