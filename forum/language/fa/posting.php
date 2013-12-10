<?php
/**
*
* posting [Farsi]
*
* @package language
* @version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
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
	'ADD_ATTACHMENT'			=> 'اضافه كردن فايل پيوست',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'در صورتي که تمايل داريد بخش اطلاعات فايل را تکميل کنيد.',
	'ADD_FILE'					=> 'افزودن فايل',
	'ADD_POLL'					=> 'ايجاد نظرسنجي',
	'ADD_POLL_EXPLAIN'			=> 'در صورتي که مي خواهيد در مبحث خود يک نظرسنجي داشته باشيد فيلدها را تکميل کنيد.در صورتي که نمي خواهيد نظر سنجي داشته باشيد فيلدها را رها کنيد.',
	'ALREADY_DELETED'			=> 'متاسفانه این پیام را پاک کرده اید',
	 'ATTACH_DISK_FULL'         => 'برای ارسال این فایل پیوست به اندازه کافی فضای خالی در دیسک وجود ندارد.',
	'ATTACH_QUOTA_REACHED'		=> 'سهمیه پیوست های شما تمام شده',
	'ATTACH_SIG'				=> 'نمايش امضا',

	'BBCODE_A_HELP'				=> 'آپلود: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'ضخيم كردن متن : [b]متن[/b]',
	'BBCODE_C_HELP'				=> 'نمايش کد : [code]كد[/code]',
	'BBCODE_D_HELP'				=> 'فلش: [flash=پهنا,درازا]http://url[/flash]',

	
	'BBCODE_F_HELP'				=> 'اندازه فونت : [size=x-small]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>غيرفعال است</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>فعال است</em>',
	'BBCODE_I_HELP'				=> 'نوشته کج : [i]متن[/i]',
	'BBCODE_L_HELP'				=> 'ليست : [list]متن[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'بخش ليست : [*]متن[/*]',
	'BBCODE_O_HELP'				=> 'ليست سفارشي : [list=]متن[/list]',
	'BBCODE_P_HELP'				=> 'درج تصوير : [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'نوشته نقل قول : [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'رنگ فونت : [color=red]text[/color]  Tip: you can also use color=#FF0000',
	'BBCODE_U_HELP'				=> 'نوشته زيرخط دار : [u]text[/u]',
	'BBCODE_W_HELP'				=> 'ايجاد URL : [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> 'لیست: اضافه کردن نقطه کنار جملات',
	'BUMP_ERROR'				=> 'شما نمی توانید پس از آخرین پست به این سرعت اغدام کنید',

	'CANNOT_DELETE_REPLIED'		=> 'شما ممکن است پست هایی را که به آنها پاسخ نداده اید را حذف کنید',
	'CANNOT_EDIT_POST_LOCKED'	=> 'اين پست بسته شده است.شما نمي توانيد آنرا ويرايش کنيد.',
	'CANNOT_EDIT_TIME'			=> 'شما نمی توانید در این پست تغییری ایجاد کنید',
	'CANNOT_POST_ANNOUNCE'		=> 'شما نمی توانید در اعلانات پست ایجاد کنید',
	'CANNOT_POST_STICKY'		=> 'شما نمی توانید ',
	'CHANGE_TOPIC_TO'			=> 'تغییر نوع تاپیک به',
	'CLOSE_TAGS'				=> 'بستن تگ ها',
	'CURRENT_TOPIC'				=> 'مبحث فعلی',

	'DELETE_FILE'				=> 'حذف فايل',
	'DELETE_MESSAGE'			=> 'حذف پيغام',
	'DELETE_MESSAGE_CONFIRM'	=> 'آبا مطمئنيد که پيغام را حذف کنيد ؟',
	'DELETE_OWN_POSTS'			=> 'متاسفيم ، شما فقط اجازه حدف پست هاي خود را داريد.',
	'DELETE_POST_CONFIRM'		=> 'آبا مطمئنيد که پيغام را حذف کنيد ؟',
	'DELETE_POST_WARN'			=> 'توجه : پست حذف شده به هیچ وجه قابل بازگردانی نخواهد بود.',
	'DISABLE_BBCODE'			=> 'غيرفعال کردن BBCode',
	'DISABLE_MAGIC_URL'			=> 'آدرس هاي وب را اتوماتيک تجزيه نکن.',
	'DISABLE_SMILIES'			=> 'غيرفعال کردن شکلک ها',
	'DISALLOWED_CONTENT'		=> 'ارسال فايل ميسر نيست چرا که فايل برداري (تصوير وکتور) شما مشکوک به خطر است.',
	'DISALLOWED_EXTENSION'		=> 'شما اجازه توسعه ندارید',
	'DRAFT_LOADED'				=> 'پیش نویس در ادیتور ارسال پست بارگذاری شد، ممکن است شما بخواهید همین الان پستهای خود را به پایان برسانید.<br />پیش نویس شما بعد از ثبت شدن این پست، حذف خواهد شد.',
	'DRAFT_LOADED_PM'			=> 'draft در پوشه پیام ها بارگذاری شد در صورت تمایل می توانید پیام های خود را تکمیل کنید<br />پیش نویس شما پس از ارسال پیام حذف می شود',
	'DRAFT_SAVED'				=> 'پيش نويس با موفقيت ذخيره شد.',
	'DRAFT_TITLE'				=> 'عنوان پيش نويس',

	'EDIT_REASON'				=> 'دلیل ویرایش پست',
	'EMPTY_FILEUPLOAD'			=> 'فایل آپلود شده خالی است.',
	'EMPTY_MESSAGE'				=> 'شما باید در هنگام ارسال پیام خود را وارد کنید.',
	'EMPTY_REMOTE_DATA'			=> 'فايل آپلود نمي شود . لطفا فايل را بصورت دستي آپلود کنيد.',

	'FLASH_IS_OFF'				=> '[flash] <em>غيرفعال است</em>',
	'FLASH_IS_ON'				=> '[flash] <em>فعال است</em>',
	'FLOOD_ERROR'				=> 'لطفا برای ارسال پست جدید کمی صبر کنید..',
	'FONT_COLOR'				=> 'رنگ فونت',
	'FONT_COLOR_HIDE'			=> 'مخفي کردن رنگ فونت',
	'FONT_HUGE'					=> 'خيلي بزرگ',
	'FONT_LARGE'				=> 'بزرگ',
	'FONT_NORMAL'				=> 'عادي',
	'FONT_SIZE'					=> 'اندازه فونت',
	'FONT_SMALL'				=> 'کوچک',
	'FONT_TINY'					=> 'ريز',

	'GENERAL_UPLOAD_ERROR'		=> 'نمي توانيد پيوستي در %s آپلود کنيد.',

	'IMAGES_ARE_OFF'			=> '[img] <em>غيرفعال است</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>فعال است</em>',
	'INVALID_FILENAME'			=> '%s نام صحيحي نمي باشد.',

	'LOAD'						=> 'بارگذاري',
	'LOAD_DRAFT'				=> 'بارگذاري پيش نويس',
	'LOAD_DRAFT_EXPLAIN'		=> 'در این قسمت شما می توانید پیش نویس های خود را انتخاب،ویرایش،ارسال یا ذخیره کنید.',
	'LOGIN_EXPLAIN_BUMP'		=> 'برای bump کردن باید وارد انجمن شوید.',
	'LOGIN_EXPLAIN_DELETE'		=> 'برای حذف پست ها باید ابتدا وارد شوید.',
	'LOGIN_EXPLAIN_POST'		=> 'براي ارسال پست در اين انجمن بايد وارد شويد.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'برای نقل قول کردن باید اول وارد شوید.',
	'LOGIN_EXPLAIN_REPLY'		=> 'برای پاسخ دادن باید ابتدا وارد شوید.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'فونت شما سایز مخصوص خود را دارد %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'فایل فلش شما حداکثر می تواند %1$d طول داشته باشد',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'فایل فلش شما حداکثر می تواند %1$d عرض داشته باشد',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'عکس مورد نظر شما حداکثر می تواند %1$d طول  داشته باشد',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'عکس مورد نظر شما حداکثر می تواند %1$d عرض  داشته باشد',

	'MESSAGE_BODY_EXPLAIN'		=> 'پيغام خود را اينجا وارد کنيد.توجه داشته باشيد پيغام شما نبايد بيش از<strong>%d</strong> کاراکتر باشد.',
	'MESSAGE_DELETED'			=> 'اين پيغام با موفقيت حذف گرديد..',
	'MORE_SMILIES'				=> 'مشاهده شکلک هاي بيشتر',

	'NOTIFY_REPLY'				=> 'درصورتي که به مبحث پاسخ داده شد مرا باخبر کن !',
	'NOT_UPLOADED'				=> 'فايل آپلود نشد.',
	'NO_DELETE_POLL_OPTIONS'	=> 'شما تمی توانید تنضیمات فعلی را حذف کنید',
	'NO_PM_ICON'				=> 'بدون آيكن پيغام',
	'NO_POLL_TITLE'				=> 'شما باید یک عنوان برای نظر سنجی انتخاب کنید.',
	'NO_POST'					=> 'پست درخواستی موجود نیست',
	'NO_POST_MODE'				=> 'هیج پستی مشخص نگشت',

	'PARTIAL_UPLOAD'			=> 'فایل های آپلود شده به صورت قسمت شده آپلود شده است',
	'PHP_SIZE_NA'				=> 'فایل پیوست بسیار حجیم است.<br />نمی توان مشخص کرد بیشترین حجم فایل پیوست را در php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'فایل پیوست بسیار حجیم است و بیشترین مقدار فایل پیوست %1$d %2$s.<br />طبق php.ini.',
	'PLACE_INLINE'				=> 'در جایگاه مناسبش قرار دهید',
	'POLL_DELETE'				=> 'حذف نظرسنجي',
	'POLL_FOR'					=> 'دوام يافتن نظرسنجي براي',
	'POLL_FOR_EXPLAIN'			=> 'در صورت انتخاب 0 نظر سنجي هيچ گاه پايان نمي يابد.',
	'POLL_MAX_OPTIONS'			=> 'انتخاب گزينه براي هر کاربر',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'اين تعداد گزينه هايي است که هر کاربر مي تواند براي شرکت در نظر سنجي انتخاب کند.',
	'POLL_OPTIONS'				=> 'تنظيمات نظرسنجي',
	'POLL_OPTIONS_EXPLAIN'		=> 'مکان هر گزينه نظر سنجي در يک خط و بصورت جاگانه است(براي رفتن به خطبعدي از کليد Enter استفاده کنيد). شما براي نظر سنجي خود مي توانيد <strong>%d</strong> گزينه در نظر بگيريد.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'لطفا هر تنظیم در جایگاه جدید قرار گیرد <strong>%d</strong> اگر تنظیمات را تغییر دهید تمامی رای های پیشین پاک سازی می شود',
	'POLL_QUESTION'				=> 'سوال نظر سنجي',
	'POLL_TITLE_TOO_LONG'		=> 'این قسمت توانایی نگهداری کمتر از 100 واژه را دارد',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'عنوان شما بسیار طولانی است',
	'POLL_VOTE_CHANGE'			=> 'فعال بودن راي دادن دوباره',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'در صورت انتخاب اين گزينه کاربران مي تواند راي خود را تغيير دهند.',
	'POSTED_ATTACHMENTS'		=> 'پيوست هاي ارسال شده',
	'POST_APPROVAL_NOTIFY'		=> 'شما از نمایان شدن پست خود با خبر خواهید شد',
	'POST_CONFIRMATION'			=> 'تاييديه پست',
	'POST_CONFIRM_EXPLAIN'		=> 'برای جلوگیری از پست اتوماتیک کد نمایان شده را وارد کنید در صورت عدم خوانا بودن با مدیر تماس بگیرید %sBoard Administrator%s.',
	'POST_DELETED'				=> 'اين پيغام با موفقيت حذف شد.',
	'POST_EDITED'				=> 'اين پيغام با موفقيت ويرايش شد.',
	'POST_EDITED_MOD'			=> 'تغیرات شما انجام شد و پس از تایید مدیر قابل مشاهده است',
	'POST_GLOBAL'				=> 'اطلاعيه کلي (درهمه انجمنها)',
	'POST_ICON'					=> 'آيكن پست ',
	'POST_NORMAL'				=> 'عادي',
	'POST_REVIEW'				=> 'بازبيني پست',
	'POST_REVIEW_EXPLAIN'		=> 'زماني كه شما در حال نوشتن اين متن بوديد، پاسخ جديدي به آن داده شده است. ممكن است شما مايل باشيد قبل از ارسال، در پاسختان تجديد نظر كنيد.',
	'POST_STORED'				=> 'اين پيغام با موفقيت ارسال شد.',
	'POST_STORED_MOD'			=> 'این پست با موفقیت ثبت شد، اما قبل از انتشار عمومی نیاز به تایید مدیر دارد. زمانی که پست شما تایید شود، مطلع خواهید شد.',
	'POST_TOPIC_AS'				=> 'نوع موضوع',
	'PROGRESS_BAR'				=> 'روند پيشرفت',

	'QUOTE_DEPTH_EXCEEDED'		=> 'شما می توانید حداکثر %1$d نقل قول تو در تو استفاده کنید.',

	'SAVE'						=> 'ذخيره',
	'SAVE_DATE'					=> 'ذخيره شده در',
	'SAVE_DRAFT'				=> 'ذخيره بعنوان پيش نويس',
	'SAVE_DRAFT_CONFIRM'		=> 'در صورت ذخيره بعنوان پيش نويس فقط عنوان و متن مطلب ذخيره خواهند شد ، آيا مايليد اين مطلب را بعنوان پيش نويس ذخيره کنيد ؟',
	'SMILIES'					=> 'شکلکها',
	'SMILIES_ARE_OFF'			=> 'شکلک ها <em>غير فعال هستند</em>',
	'SMILIES_ARE_ON'			=> 'شکلک ها <em>فعال هستند</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'زمان به پايان رسيدن مبحث هاي مهم/اطلاعيه',
	'STICK_TOPIC_FOR'			=> 'مهم کردن مبحث براي',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'در صورتي که عدد 0 را برگزينيد مبحث براي هميشه بصورت مهم يا اطلاعیه باقي خواهد ماند.',
	'STYLES_TIP'				=> 'هشدار: استایل ها سریعتر از متن قابل نمایش هستند',

	'TOO_FEW_CHARS'				=> 'تعداد کاراکتر هاي مبحث شما کم است.',
	'TOO_FEW_POLL_OPTIONS'		=> 'شما بايد حداقل دو گزينه براي نظر سنجي خود وارد کنيد.',
	'TOO_MANY_ATTACHMENTS'		=> 'نمی توانید ضمیمه جدید اضافه کنید %d حداکثر حجم ضمایم است',
	'TOO_MANY_CHARS'			=> 'پیام شما از حد مجاز طولانی تر است',
	'TOO_MANY_CHARS_POST'		=> 'پیام شما %1$d واژه دارد و حداکثر میزان آن %2$d است',
	'TOO_MANY_CHARS_SIG'		=> 'امضا شما %1$d واژه دارد و حداکثر میزان آن %2$d است',
	'TOO_MANY_POLL_OPTIONS'		=> 'شما تعداد زیادی تنضمات را در اینجا قرار دهید',
	'TOO_MANY_SMILIES'			=> 'پیام شما فقط می تواند %d تعداد شکلک داشته باشد',
	'TOO_MANY_URLS'				=> 'پیام شما حاوی url بیش از خد است و خداکثر میزان آن %d است',
	'TOO_MANY_USER_OPTIONS'		=> 'شما نمی توانید بیش از این تنظیمات را در این بخش مشخص کنید',
	'TOPIC_BUMPED'				=> 'پست با موفقیت جا به جا شد',

	'UNAUTHORISED_BBCODE'		=> 'شما نمی توانید از BBCodes: %s استفاده کنید',
	'UNGLOBALISE_EXPLAIN'		=> 'برای تغییر این موضوع از اطلاعیه کلی به موضوع عادی، شما نیازمند انتخاب انجمنی هستید که میخواهید این موضوع در آن به نمایش در آید.',
	'UPDATE_COMMENT'			=> 'به روز رساني نظر',
	'URL_INVALID'				=> 'URL تعيين شده صحيح نمي باشد.',
	'URL_NOT_FOUND'				=> 'فايل تعيين شده پيدا نمي شود.',
	'URL_IS_OFF'				=> '[url] <em>غيرفعال است</em>',
	'URL_IS_ON'					=> '[url] <em>فعال است</em>',
	'USER_CANNOT_BUMP'			=> 'You cannot bump topics in this forum.',
	'USER_CANNOT_DELETE'		=> 'شما نمي توانيد پست ها را در اين انجمن حذف کنيد.',
	'USER_CANNOT_EDIT'			=> 'شما نمي توانيد در اين انجمن پست خود را ويرايش کنيد.',
	'USER_CANNOT_REPLY'			=> 'شما اجازه پاسخ دادن در اين انجمن را نداريد.',
	'USER_CANNOT_FORUM_POST'	=> 'شما نمی توانید این پست را در این رسته ایجاد کنید',

	'VIEW_MESSAGE'				=> '%sنمايش پيغام ثبت شده شما%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sنمايش پيغام هاي خصوصي ثبت شده شما%s',

	'WRONG_FILESIZE'			=> 'این فایل بسیار حجیم است و بیشترین مقدار %1d %2s است',
	'WRONG_SIZE'				=> 'عکس باید حداقل >%1$d pixel عرض داشته باشد و %2$d pixel طول داشته باشد و حداکثر %3$d pixel عرض و %4$d pixel طول داشته باشد , عکس شما %5$d pixel عرض و %6$d pixel طول دارد',
		
		
		// 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com
		
		
			'POST_REVIEW_EDIT'			=> 'پیش نمایش پست',
         	'POST_REVIEW_EDIT_EXPLAIN'	=> 'این پست توسط کاربر دیگری ایجاد شده , اگر مایل هستید پست خود را در ادامه پست عضو مذکور قرار دهید  و آن را تکمیل کنید',
				
		//////////////////////////
		
          	'TOO_FEW_CHARS_LIMIT'		=> 'پیام شما %1$d واژه دارد و شما می توانید از %2$d واژه استفاده کنید',
				
				
		
		
		//END 3.0.5 to 3.0.6 changes - www.phpBB.Maghsad.com		
		
		
));

?>