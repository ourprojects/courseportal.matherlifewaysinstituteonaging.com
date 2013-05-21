<?php
/**
*
* ucp.php [Sorani Kurdish]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-25 - Chawg.org Group
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
	'TERMS_OF_USE_CONTENT'	=> 'بە خۆتۆمارکردنت لە “%1$s” ڕەزامەندی دەردەبڕیت بەرانبەر ئەم مەرجانەی خوارەوە. گەر ڕەزامەندیت لەسەریان نییە تکایە هەنگاو بنێ دواوە و خۆت تۆمار مەکە. %1$s مافی ئەوەی هەیە لە هەر کاتێکدا بیەوێت مەرجەکانی خۆتۆمارکردن نوێ بکاتەوە و بەکارهێنەرانی خۆ تۆمارکردووش پێویستە هەموو کات ڕەزامەند بن بەرانبەر مەرجەکان.
<br /><br />
<ul>
<li> چاوگ ماڵپەڕێکی تایبەتە بە سەرچاوەی کراوە، هەموو ئەو پەیام و بابەتانەی لە مەکۆ دەنووسرێن پێویستە پەیوەندیدار بن بە سەرچاوە کراوە. چاوگ هیچ کات و بە هیچ شێوەیەک پاڵپشتی لە هیچ پڕۆگرام/ سکریپت/ سیستەمێکی کارگێڕی ناخۆڕا ناکات هەر بۆیە هەر بابەتێک و پرسیارێک بەدەر لە سەرچاوە کراوە لێرە جێی نابێتەوە و ڕاستەوخۆ لادەبرێت.</li>
<br />
<li>مەکۆکان شوێنێکن بۆ گفتوگۆکردن و درێژەدان بە هەموو ئەوانەی لە ژێر مافی سەرچاوەکراوەدان و لە مەکۆکاندا خۆی دەگرێتەوە هەموو ئەو بابەتانەی لە مەکۆ دەنووسرێن دەکرێت لە داهاتوودا سوودیان لێ وەربگیرێت لە پێکهێنانی بابەتێکی بەپێز لە ویکی.</li>
<br />
<li> بابەت نووسین پێویستە بە شێوازێکی ڕێک و پێک بێت و سەردێڕی بابەت بگونجێت لەگەڵ ناوەڕۆکی پەیامەکەت. (بۆ چۆنێتی بەکارهێنانی مەکۆ و نووسینی بابەت <a target="_blank" href="http://chawg.org/meko/viewtopic.php?f=14&t=27">کرتە لێرە بکە</a>)
</li></ul>
خۆشحاڵین بە سەردان و خۆتۆمارکردنت لە %1$s.',
	'PRIVACY_POLICY'	=> 'زانیارییەکانت لە دوو ڕێگەوە کۆ دەکرێنەوە. یەکەم بە کردنەوەی پەڕەکانی “%1$s” وا لە پڕۆگرامی بەکاربراوی مەکۆ دەکات کە ژمارەیەک لە کووکی دروست بکات، ئەمانەش کۆمەڵێک پەڕگەی دەقیی بچوکن کە دادەگیرێن بۆ بوخچەی پەڕگە کاتییەکانی وێبگەڕەکەت. یەکەم دوو کووکی تەنها ناسەرەوەی بەکارهێنەری تیادایە (بە دوایدا “user-id”) و ناسەرەوەی دانیشتنیی نەناسراو (بە دوایدا “session-id”)، خۆکارانە دادەگیرێن لەلایەن نەرمەکاڵای phpBB ـیەوە.کووکی سێیەم دروست دەکرێت هەر کاتێک بابەتێکت کردەوە لە “%1$s” وە بەکاردێت بۆ ئەوەی بزانرێت کە چ بابەتێک خوێندراوەتەوە، بە هۆی ئەوەوە ئەزموونی بەکارهێنەریت پەرەی پێ دەدرێت.
<br /><br />
هەروەها لەوانەیە کووکی دروست بکەین لە دەرەوەی نەرمەکاڵای phpBB لە کاتی گەڕان بە ناو “%1$s”، سەرەڕای ئەوەش ئەمە لە دەرەوەی بینینی ئەم بەڵگەنامەیەیە کە وا چاوەڕوان دەکرا تەنها ئەو پەڕانە دابپۆشێت کە لە لایەن نەرمەكاڵای phpBB ـیەوە دروست کراون.',
	'ACCOUNT_ACTIVE'	=> 'ئێستا هەژمارەکەت چالاککرا. سوپاس بۆ خۆتۆمارکردنت',
	'ACCOUNT_ACTIVE_ADMIN'	=> 'هەژمارەکە چالاککرا.',
	'ACCOUNT_ACTIVE_PROFILE'	=> 'هەژمارەکەت ئێستا بە سەرکەوتوویی چالاککرایەوە.',
	'ACCOUNT_ADDED'	=> 'سوپاس بۆ خۆتۆمارکردنت، هەژمارەکەت دروستکرا. ئێستا ئەتوانی بچیتە ژووەرەوە بە ناوی بەکارهێنەر و تێپەڕەوشەکەت.',
	'ACCOUNT_COPPA'	=> 'هەژمارەکەت دروستکرا بەڵام پەسەند نەکراوە، تکایە ئیمەیلەکەت بپشکنە بۆ وردەکارییەکان.',
	'ACCOUNT_EMAIL_CHANGED'	=> 'هەژمارەکەت نوێکرایەوە. هەر چۆنێک بێت، ئەم مەکۆیە پێویستی بە چالاککردنەوەی هەژمارە بۆ گۆڕینی ئیمەیل. کلیلی چالاککردن نێردرا بۆ ناونیشانی ئیمەیلی نوێ تکایە ئیمەیلەکەت بپشکنە بۆ زانیاری زیاتر.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'هەژمارەکەت نوێکرایەوە. هەر چۆنێک بێت، ئەم مەکۆیە پێویستی بە چالاک کردنەوەی هەژمارە لەلایەن بەڕێوەبەرانەوە لە کاتی گۆڕینی ئیمەیل. ئیمەیلێک نێردرا بۆیان پاشان ئاگادار دەکرێیتەوە کاتێک هەژمارەکەت چالاککرایەوە.',
	'ACCOUNT_INACTIVE'	=> 'هەژمارەکەت دروستکرا. هەر چۆنێک بێت، ئەم مەکۆیە پێویستی بە چالاککردنی هەژمار هەیە، کلیلێکی چالاککردن نێردرا بۆ ناونیشانی ئیمەیلەکەت. تکایە ئیمەیلەکەت بپشکنە بۆ زانیاریی زیاتر.',
	'ACCOUNT_INACTIVE_ADMIN'	=> 'هەژمارەکەت دروستکرا. هەرچۆنێک بێت، ئەم مەکۆیە پێویستی بە چالاککردنی هەژمارە لە لایەن گرووپی بەڕێوەبەرانەوە. ئیمەیلێک نێردرا بۆیان، هەر کاتێک هەژمارەکەت چالاککرا ئاگادار دەکرێیتەوە.',
	'ACTIVATION_EMAIL_SENT'	=> 'ئیمەیلی چالاککردن نێردرا بۆ ناونیشانی ئیمەیلەکەت.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'ئیمەیلی چالاککردن نێردرا بۆ ناونیشانی ئیمەیلی بەڕێوەبەران',
	'ADD'	=> 'زیادکردن',
	'ADD_BCC'	=> 'زیادکردن [BCC]',
	'ADD_FOES'	=> 'Add new foes',
	'ADD_FOES_EXPLAIN'	=> 'ئەتوانیت چەند ناوێکی بەکارهێنەر دابنێیت هەر یەکە و لە هێڵێکی جیادا.',
	'ADD_FOLDER'	=> 'بوخچە زیاد بکە',
	'ADD_FRIENDS'	=> 'هاوڕێی نوێ زیاد بکە',
	'ADD_FRIENDS_EXPLAIN'	=> 'ئەتوانیت چەند ناوێکی بەکارهێنەر دابنێیت هەر یەکە و لە هێڵێکی جیادا.',
	'ADD_NEW_RULE'	=> 'یاسای نوێ زیاد بکە',
	'ADD_RULE'	=> 'یاسا زیاد بکە',
	'ADD_TO'	=> 'زیادی بکە [بۆ]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'لێرە ئەتوانیت بەکارهێنەری نوێ بۆ گرووپەکە زیاد بکەیت. ئەتوانی ئەوە دیاری بکەیت کە ئایا گرووپی نوێ ببێتە گرووپی بنەڕەت بۆ بەکارهێنەر یان نا! تکایە ناوی هەر بەکارهێنەرێک لە هێڵێکی جیا بنووسە.',
	'ADMIN_EMAIL'	=> 'بەڕێوەبەران ئەتوانن زانیارییم بۆ ڕەوانە بکەن بە ئیمەیلدا',
	'AGREE'	=> 'بەم مەرجانە ڕازیم',
	'ALLOW_PM'	=> 'ڕێ بە ئەندامان بدە کە پەیامی تایبەتییم بۆ بنێرن',
	'ALLOW_PM_EXPLAIN'	=> 'سەرنجی ئەوە بدە کە بەڕێوەبەران و چاودێران هەمیشە ئەتوانن پەیامی تایبەتیت بۆ بنێرن.',
	'ALREADY_ACTIVATED'	=> 'پێشتر هەژمارەکەت چالاک کردووە.',
	'ATTACHMENTS_EXPLAIN'	=> 'ئەمە لیستێکە لەو هاوپێچانەی کە لە پەیامەکاندا داتناون لەم مەکۆیە.',
	'ATTACHMENTS_DELETED'	=> 'هاوپێچەکان بە سەرکەوتوویی سڕدرانەوە.',
	'ATTACHMENT_DELETED'	=> 'هاوپێچ بە سەرکەوتوویی سڕدرایەوە.',
	'AVATAR_CATEGORY'	=> 'هاوپۆل',
	'AVATAR_EXPLAIN'	=> 'زۆرترین دوورییەکان؛ پانیی: %1$d خاڵ، بەرزیی %2$d خاڵ، قەبارەی پەڕگە %3$.2f KiB',
	'AVATAR_FEATURES_DISABLED'	=> 'وێنۆچکە هەنووکە فیزیکیانە ناچالاککراوە.',
	'AVATAR_GALLERY'	=> 'گەلەری ناوخۆیی',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'نەتوانرا وێنۆچکە بار بکرێت بۆ %s.',
	'AVATAR_NOT_ALLOWED'		=> 'ناتوانرێت وێنۆچکەکەت پیشان بدرێت لەبەرئەوەی وێنۆچکە ناچالاک کراوە.',
	'AVATAR_PAGE'	=> 'پەڕە',
	'AVATAR_TYPE_NOT_ALLOWED'	=> 'ناتوانرێت وێنۆچکەی هەنووکەیت پیشان بدرێت لەبەرئەوەی جۆرەکەی ڕێگە پێنەدراوە.',
	'BACK_TO_DRAFTS'	=> 'بگەڕێوە بۆ ڕەشنووسە پاشەکەوتکراوەکان',
	'BACK_TO_LOGIN'	=> 'بگەڕێوە بۆ پەڕەی چوونەژوورەوە',
	'BIRTHDAY'	=> 'ڕۆژی لە دایکبوون',
	'BIRTHDAY_EXPLAIN'	=> 'دیاریی کردنی ساڵێک تەمەنت ئەکاتە لیستەکەوە کاتێک ڕۆژی لە دایکبوونت بێت.',
	'BOARD_DATE_FORMAT'	=> 'شێوازی ڕێکەوتەکەم',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'ئەو سینتاکسەی بەکاربراوە هاوشێوەی فرمانی <a href="http://www.php.net/date">date()</a> ـی PHP ـیە.',
	'BOARD_DST'	=> 'کاتی هاوینە/<abbr title="Daylight Saving Time">DST</abbr> کاریگەریی هەیە',
	'BOARD_LANGUAGE'	=> 'زمانەکەم',
	'BOARD_STYLE'	=> 'ڕووخساری مەکۆکەم',
	'BOARD_TIMEZONE'	=> 'ناوچەی کاتەکەم',
	'BOOKMARKS'	=> 'دڵخوازەکان',
	'BOOKMARKS_EXPLAIN'	=> 'ئەتوانی بابەتەکان دڵخواز بکەیت بۆ بە سەرچاوەکردنی داهاتوو. خانەی نیشانەکردنی هەر دڵخوازێک دیاریی بکە کە دەتەوێت بیسڕیتەوەم پاشان کرتە لە دوگمەی <strong>دڵخوازە نیشانەکراوەکان لاببە</strong> بکە.',
	'BOOKMARKS_DISABLED'	=> 'دڵخوازەکان ناچالاککراون لەم مەکۆیە.',
	'BOOKMARKS_REMOVED'	=> 'دڵخوازەکان بە سەرکەوتوویی لابران.',
	'CANNOT_EDIT_MESSAGE_TIME'	=> 'چیتر ناتوانیت ئەو پەیامە دەستکاری بکەیت یان بسڕیتەوە.',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'ناتوانرێت پەیامەکان بگوازرێنەوە بۆ ئەو بوخچەیەی دەتەوێت لای ببەیت.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'ناتوانرێت پەیامەکان لاببرێت لە سندووقی هاتووەوە.',
	'CANNOT_RENAME_FOLDER'	=> 'ناتوانرێت ناوی ئەم بوخچەیە بگۆڕدرێت.',
	'CANNOT_REMOVE_FOLDER'	=> 'ناتوانرێت ئەم بوخچەیە لاببرێت.',
	'CHANGE_DEFAULT_GROUP'	=> 'گرووپی بنەڕەتیی بگۆڕە',
	'CHANGE_PASSWORD'	=> 'تێپەڕەوشە بگۆڕە',
	'CLICK_GOTO_FOLDER'			=> '%1$sبڕۆ بۆ بوخچەی “%3$s” ــەکەت %2$s',
	'CLICK_RETURN_FOLDER'	=> '%1$sبگەڕێوە بۆ بوخچەی “%3$s” ـەکەت%2$s',
	'CONFIRMATION'	=> 'دڵنیابوون لە خۆتۆمارکردن',
	'CONFIRM_CHANGES'	=> 'دڵنیابوون لە گۆڕانکارییەکان',
	'CONFIRM_EMAIL'	=> 'دووبارەکردنەوەی ناونیشانی ئیمەیل',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'تەنها لە کاتێکدا پێویستت بە دیارییکردنی ئەمەیە ئەگەر ناونیشانی ئیمەیلەکەت بگۆڕیت.',
	'CONFIRM_EXPLAIN'	=> 'بۆ نەهێشتنی خۆتۆمارکردنی خۆکار مەکۆ پێویستی بەوەیە کە کۆدێکی دڵنیایی لێبدەیت. کۆدەکە لە نێو وێنەکەدا پیشان دراوە کە ئەتوانیت لە خوارەوە ببیبینیت. گەر لە ڕووی بینینەوە لاوازیت یان ناتوانیت ئەم کۆدە ببینیت تکایە پەیوەندی بە %sبەڕێوەبەری مەکۆ%sوە بکە.',
    'VC_REFRESH'            => 'کۆدی دڵنیایی ببوژێنەوە',
    'VC_REFRESH_EXPLAIN'      => 'گەر ناتوانیت کۆدەکە بخوێنیتەوە ئەتوانیت یەکێکی نوێ داوا بکەیت بە کرتەکردن لە دوگمەکە.',
	'CONFIRM_PASSWORD'	=> 'دووبارەکردنەوەی تێپەڕەوشە',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'تەنها لە کاتێکدا پێویستت بە دڵنیابوونی تێپەڕەوشەیە ئەگەر لە سەرەوە گۆڕیت.',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'دەبێت تێپەڕەوشەی ئێستات بنووسی ئەگەر ئارەزوو دەکەی ناونیشانی ئیمەیڵ یان ناوی بەکارهێنەری بگۆڕی.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'بۆ گۆڕینی تێپەڕەوشەکەت، ناونیشانی ئیمەیڵەکەت، یان ناوی بەکارهێنەرت، دەبێت تێپەڕەوشەی ئێستات بنووسی.',
	'COPPA_BIRTHDAY'	=> 'بۆ بەردەوامبوون لە خۆتۆمارکردن تکایە پێمان بڵێ کەی لەدایکبوویت.',
	'COPPA_COMPLIANCE'	=> 'گونجانی COPPA',
	'COPPA_EXPLAIN'	=> 'تکایە سەرنجی ئەوە بدە بە کرتە کردن لە ناردن هەژمارەکەت دروست دەبێت. هەر چۆنێک بێت ناتوانرێت چالاک بکرێت هەتا باوانێک خۆتۆمارکردنەکەت پەسەند دەکات. ئیمەیلێکت بۆ دەنێردرێت بە ڕوونووسی فۆڕمی پێویستەوە لەگەڵ وردەکارییەکانی چۆنێتی ناردن.',
	'CREATE_FOLDER'	=> 'بوخچە زیاد بکە...',
	'CURRENT_IMAGE'	=> 'وێنەی هەنووکەیی',
	'CURRENT_PASSWORD'	=> 'تێپەڕەوشەی هەنووکە',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'پێویستە دڵنیا بیت لە تێپەڕەوشەی هەنووکەییت ئەگەر ئەتەوێت بیگۆڕیت، ناونیشانی ئیمەیل یان ناوی بەکارهێنەر بگۆڕە.',
	'CUR_PASSWORD_EMPTY'		=> 'تۆ تێپەڕەوشەی ئێستات نەنووسیوە.',
	'CUR_PASSWORD_ERROR'	=> 'تێپەڕەوشەی هەنووکە کە لێتداوە نەگونجاوە.',
	'CUSTOM_DATEFORMAT'	=> 'دەستکرد...',
	'DEFAULT_ACTION'	=> 'چالاکی بنەڕەت',
	'DEFAULT_ACTION_EXPLAIN'	=> 'ئەم چالاکییە چالاک دەبێت گەر هیچ کام لەوانەی سەرەوە جێبەجێ نەکرا.',
	'DEFAULT_ADD_SIG'	=> 'بە شێوەیەکی بنەڕەت واژۆکەم هاوپێچ بکە',
	'DEFAULT_BBCODE'	=> 'بە شێوەیەکی بنەڕەت BBCode چالاک بکە',
	'DEFAULT_NOTIFY'	=> 'بە شێوەیەکی بنەڕەت ئاگادارم بکەوە لە وەڵام',
	'DEFAULT_SMILIES'	=> 'بە شێوەیەکی بنەڕەت خەندەکان چالاک بکە',
	'DEFINED_RULES'	=> 'یاسا پێناسەکراوەکان',
	'DELETED_TOPIC'	=> 'بابەت لابرا.',
	'DELETE_ATTACHMENT'	=> 'هاوپێچ بسڕەوە',
	'DELETE_ATTACHMENTS'	=> 'هاوپێچەکان بسڕەوە',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم هاوپێچە؟',
	'DELETE_ATTACHMENTS_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم هاوپێچانە؟',
	'DELETE_AVATAR'	=> 'وێنە بسڕەوە',
	'DELETE_COOKIES_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی هەموو کووکیە ڕێکخراوەکان لەلایەن مەکۆوە؟',
	'DELETE_MARKED_PM'	=> 'پەیامە نیشانەکراوەکان بسڕەوە',
	'DELETE_MARKED_PM_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی هەموو پەیامە نیشانەکراوەکان؟',
	'DELETE_OLDEST_MESSAGES'	=> 'کۆنترین پەیامەکان بسڕەوە',
	'DELETE_MESSAGE'	=> 'پەیام بسڕەوە',
	'DELETE_MESSAGE_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم پەیامە تایبەتە؟',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'هەموو پەیامەکانی ناو بوخچەی لابراو بسڕەوە',
	'DELETE_RULE'	=> 'یاسا بسڕەوە',
	'DELETE_RULE_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم یاسایە؟',
	'DEMOTE_SELECTED'	=> 'نزمکردنەوەی دیاریکراو',
	'DISABLE_CENSORS'	=> 'سانسۆرکردنی وشە چالاک بکە',
	'DISPLAY_GALLERY'	=> 'گەلەریی پیشان بدە',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'دۆمەینی ئیمەیلی نووسراو هیچ تۆمارێکی گونجاوی MX ـی نییە.',
	'DOWNLOADS'	=> 'داگرتنەکان',
	'DRAFTS_DELETED'	=> 'هەموو ڕەشنووسە دیاریکراوەکان بە سەرکەوتوویی سڕدرانەوە.',
	'DRAFTS_EXPLAIN'	=> 'لێرە ئەتوانیت ڕەشنووسە پاشەکەوتکراوکانت بسڕیتەوە، ببینیت، یان دەستکاری بکەیت.',
	'DRAFT_UPDATED'	=> 'ڕەشنووس بە سەرکەوتوویی نوێکرایەوە.',
	'EDIT_DRAFT_EXPLAIN'	=> 'لێرە ئەتوانیت دەستکاری ڕەشنووسەکانت بکەیت. ڕەشنووسەکان هاوپێچ و زانیاری ڕاپرسییان تیادا نییە.',
	'EMAIL_BANNED_EMAIL'	=> 'ئەو ناونیشانی ئیمەیلەی لێتداوە ناتەواوە ڕێ پێ نەدراوە بەکار ببرێت.',
	'EMAIL_INVALID_EMAIL'	=> 'ئەو ناونیشانی ئیمەیلەی لێتداوە ناتەواوە.',
	'EMAIL_REMIND'	=> 'ئەمە پێویستە ئەو ناونیشانی ئەو ئیمەیلە بێت کە پەیوەستە بە هەژمارەکەتەوە. گەر ئەمەت نەگۆڕیوە لە ڕێی کۆنترۆڵ پانێڵی بەکارهێنەریتەوە ئەوە ناونیشانی ئەو ئیمەیلەیە کە هەژمارەکەت پێ تۆمار کردووە.',
	'EMAIL_TAKEN_EMAIL'	=> 'ئەو ناونیشانی ئیمەیلەی لێتداوە پێشتر بەکار هێنراوە.',
	'EMPTY_DRAFT'	=> 'پێویستە پەیامێک بنووسیت بۆ ناردنی گۆڕانکارییەکان.',
	'EMPTY_DRAFT_TITLE'	=> 'پێویستە سەردێڕی ڕەشنووس بنووسیت',
	'EXPORT_AS_XML'	=> 'هەناردەکردن وەک XML',
	'EXPORT_AS_CSV'	=> 'هەناردەکردن وەک CSV',
	'EXPORT_AS_CSV_EXCEL'	=> 'Export as CSV (Excel)',
	'EXPORT_AS_TXT'	=> 'هەناردەکردن وەک TXT',
	'EXPORT_AS_MSG'	=> 'هەناردەکردن وەک MSG',
	'EXPORT_FOLDER'	=> 'ئەم بینینە هەناردە بکە',
	'FIELD_REQUIRED'	=> 'پێویستە خانەی “%s” تەواو بکرێت.',
	'FIELD_TOO_SHORT'	=> 'خانەی “%1$s” زۆر کورتە، لانی کەم %2$d نووسە پێویستە.',
	'FIELD_TOO_LONG'	=> 'خانەی “%1$s” زۆر درێژە، لانی زۆر %2$d نووسە ڕێ پێدراوە.',
	'FIELD_TOO_SMALL'	=> 'نرخی “%1$s” زۆر بچوکە، لانی کەم نرخی %2$d پێویستە.',
	'FIELD_TOO_LARGE'	=> 'نرخی “%1$s” زۆرگەورەیە، لانی زۆر نرخی %2$d ڕێ پێدراوە.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'خانەی “%s” نووسەی نەگونجاوی تیادایە، تەنها ژمارە ڕێ پێدراوە.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'خانەی “%s” نووسەی نەگونجاوی تیادایە، تەنها پیتی ئەلفا و ژمارە ڕێ پێدراوە.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'خانەی “%s” نووسەی نەگونجاوی تیادایە، تەنها پیتی ئەلفا و ژمارە، بۆشایی یان -+_[] ڕێ پێدراوە.',
	'FIELD_INVALID_DATE'	=> 'خانەی “%s” دراوەی نەگونجاوی تیادایە.',
	'FIELD_INVALID_VALUE'	=> 'ئەو خانەی “%s” نرخێکی ناردووستی هەیە.',
	'FOE_MESSAGE'	=> 'پەیام لە فەرامۆشکراوەوە',
	'FOES_EXPLAIN'	=> 'فەرامۆشکراوان ئەو بەکارهێنەرانەن کە بە شێوەیەکی بنەڕەت فەرامۆش دەکرێن. پەیامەکانی ئەم بەکارهێنەرانە بە تەواوەتی دیار نابن. پەیامە کەسییەکانی فەرامۆشکراوان قەدەغە دەکرێن. تکایە سەرنجی ئەوە بدە کە ناتوانیت چاودێران و بەڕێوەبەران فەرامۆش بکەیت.',
	'FOES_UPDATED'	=> 'لیستی فەرامۆشکراوانت بە سەرکەوتوویی نوێکرانەوە.',
	'FOLDER_ADDED'	=> 'بە سەرکەوتوویی بوخچە زیادکرا',
	'FOLDER_MESSAGE_STATUS'	=> '%1$d لە %2$d پەیام پاشەکەوتکرا',
	'FOLDER_NAME_EMPTY'	=> 'پێویستە ناوێک بۆ ئەم بوخچەیە بنووسیت',
	'FOLDER_NAME_EXIST'	=> 'بوخچەی <strong>%s</strong> پێشتر هەیە',
	'FOLDER_OPTIONS'	=> 'هەڵبژاردنەکانی بوخچە',
	'FOLDER_RENAMED'	=> 'ناوی بوخچە بە سەرکەوتوویی گۆڕدرا.',
	'FOLDER_REMOVED'	=> 'بوخچە بە سەرکەوتوویی لابرا.',
	'FOLDER_STATUS_MSG'	=> 'بوخچە بە ڕێژەی %1$d%% پڕە (%2$d لە %3$d پەیام پاشەکەوتکراوە)',
	'FORWARD_PM'	=> 'پ ت ڕەوانە بکە',
	'FORCE_PASSWORD_EXPLAIN'	=> 'پێش ئەوەی بتوانیت بەردەوام بیت لە گەڕان بە ناو مەکۆدا پێویستت بەوەیە تێپەڕەوشەکەت بگۆڕیت.',
	'FRIEND_MESSAGE'	=> 'پەیام لە هاوڕێوە',
	'FRIENDS'	=> 'هاوڕێیان',
	'FRIENDS_EXPLAIN'	=> 'هاوڕێیان توانای ئەوەت پێ ئەدەن کە بە خێرایی بگەیت بەو ئەندامانەی کە پەیوەندییان زۆر لەگەڵ ئەکەیت. گەر قاڵبەکە پاڵپشتی پەیوەندیداری کرد هەر پەیامێک لەلایەن هاوڕێیەکەوە بنووسرێت ڕەنگ دەکرێت.',
	'FRIENDS_OFFLINE'	=> 'دەرهێڵ',
	'FRIENDS_ONLINE'	=> 'سەرهێڵ',
	'FRIENDS_UPDATED'	=> 'لیستی هاوڕێکانت بە سەرکەوتوویی نوێکرانەوە.',
	'FULL_FOLDER_OPTION_CHANGED'	=> 'چالاکی بۆ ئەوەی بە ئەنجام بگەیەندرێت کاتێک بوخچەیەک پڕە بە سەرکەوتوویی گۆڕدرا.',
	'FWD_ORIGINAL_MESSAGE'	=> '-------- پەیامی ڕەسەن --------',
	'FWD_SUBJECT'	=> 'سەردێڕ: %s',
	'FWD_DATE'	=> 'ڕێکەوت: %s',
	'FWD_FROM'	=> 'لەلایەن: %s',
	'FWD_TO'	=> 'بۆ: %s',
	'GLOBAL_ANNOUNCEMENT'	=> 'ئاگاداری گشتیی',
	'HIDE_ONLINE'	=> 'دۆخی سەرهێڵیم بشارەوە',
	'HIDE_ONLINE_EXPLAIN'	=> 'گۆڕینی ئەم ڕێکخستنە کاریگەری نابێت تا جاری داهاتوو سەردانی مەکۆ دەکەیتەوە.',
	'HOLD_NEW_MESSAGES'	=> 'پەیامی نوێ وەرمەگرە (پەیامی نوێ هەڵدەگیرێت هەتا هەندێک جێگە بەتاڵ دەبێت)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'پەیامە نوێیەکان هەڵدەگیرێن',
	'IF_FOLDER_FULL'	=> 'گەر بوخچە پڕە',
	'IMPORTANT_NEWS'	=> 'ئاگادارییە گشتییەکان',
	'INVALID_USER_BIRTHDAY'	=> 'ڕێکەوتی لە دایکبوونی نووسراو تەواو نییە.',
	'INVALID_CHARS_USERNAME'	=> 'ناوی بەکارهێنەر نووسەی قەدەغەکراوی تیادایە.',
	'INVALID_CHARS_NEW_PASSWORD'	=> 'تێپەڕەوشە نووسە پێویستەکانی تیادا نییە.',
	'ITEMS_REQUIRED'	=> 'ئەو شتانەی بە * نیشانەکراون خانەی پێویستی پرۆفایلن و پێویستە پڕبکرێنەوە.',
	'JOIN_SELECTED'	=> 'بەشداریکردن دیاریکرا',
	'LANGUAGE'	=> 'زمان',
	'LINK_REMOTE_AVATAR'	=> 'بەستەر وێبگە-خستن',
	'LINK_REMOTE_AVATAR_EXPLAIN'	=> 'URL ـی ئەو شوێنە بنووسە کە ئەو وێنۆچکەیەی تیادایە دەتەوێت بەستەری بۆ بکەیت.',
	'LINK_REMOTE_SIZE'	=> 'دوورییەکانی وێنۆچکە',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'پانی و بەرزی وێنۆچکە دیاری بکە، بە بەتاڵی جێی بهێڵە بۆ هەوڵدان بۆ سەلماندنی خۆکارانە.',
	'LOGIN_EXPLAIN_UCP'	=> 'تکایە بچۆ ژوورەوە بۆ بینینی کۆنترۆڵ پانێڵی بەکارهێنەران.',
	'LOGIN_REDIRECT'	=> 'بە سەرکەوتوویی چوویتە ژوورەوە',
	'LOGOUT_FAILED'	=> 'نەچوویتەتە دەرەوە، لەبەر ئەوەی داواکەیت لەگەڵ ئەم دانیشتنەت یەک ناگرنەوە. تکایە پەیوەندی بە بەڕێوەبەری مەکۆ بکە گەر بەردەوام بوویت لە ڕوو بە ڕووبوونەوەی کێشە.',
	'LOGOUT_REDIRECT'	=> 'بەسەرکەوتوویی چوویتە دەرەوە',
	'MARK_IMPORTANT'	=> 'نیشانەکردن/ نیشانە نەکردن بە پێی گرنگی',
	'MARKED_MESSAGE'	=> 'پەیامە دیاریکراوەکان',
	'MAX_FOLDER_REACHED'	=> 'گەیشتیت بە زۆرترین ژمارەی ڕێ پێدراوی بوخچە بۆ بەکارهێنەر.',
	'MESSAGE_BY_AUTHOR'	=> 'لەلایەن',
	'MESSAGE_COLOURS'	=> 'ڕەنگەکانی پەیام',
	'MESSAGE_DELETED'	=> 'پەیام بە سەرکەوتوویی سڕدرایەوە.',
	'MESSAGE_HISTORY'	=> 'مێژووی پەیام',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'ئەم پەیامە لابرا لەلایەن نووسەرەکەیەوە پێش ئەوەی بە دەست بگەیەنرێت.',
	'MESSAGE_SENT_ON'	=> 'کارا',
	'MESSAGE_STORED'	=> 'ئەم پەیامە بە سەرکەوتوویی نێردرا',
	'MESSAGE_TO'	=> 'بۆ',
	'MESSAGES_DELETED'	=> 'پەیامەکان بە سەرکەوتوویی سڕدرایەوە',
	'MOVE_DELETED_MESSAGES_TO'	=> 'پەیامەکان لە بوخچەی لابراوەوە بگوازەوە بۆ',
	'MOVE_DOWN'	=> 'جوڵان بۆ خوارەوە',
	'MOVE_MARKED_TO_FOLDER'	=> 'نیشانەکراوەکان بگوازەوە بۆ %s',
	'MOVE_PM_ERROR'	=> 'هەڵەیەک ڕوویدا لە کاتی گواستنەوەی پەیام بۆ بوخچەی نوێ، تەنها %1d لە %2d پەیام گواسترانەوە.',
	'MOVE_TO_FOLDER'	=> 'گواستنەوە بۆ بوخچە',
	'MOVE_UP'	=> 'جوڵان بۆ سەرەوە',
	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'تۆ دووبارە ئیمەیڵەکەت نەنووسیوەتەوە.',
	'NEW_EMAIL_ERROR'	=> 'ئەو ناونیشانی ئیمەیلانەی نووسیوتن وەک یەک نین.',
	'NEW_FOLDER_NAME'	=> 'ناوی بوخچەی نوێ',
	'NEW_PASSWORD'	=> 'تێپەڕەوشەی نوێ',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'تۆ دووبارە تێپەڕەوشەکەت نەنووسیوەتەوە.',
	'NEW_PASSWORD_ERROR'	=> 'ئەو تێپەڕەوشانەی نووسیوتن وەک یەک نین.',
	'NOTIFY_METHOD'	=> 'ڕێبازی ئاگادارکردنەوە',
	'NOTIFY_METHOD_BOTH'	=> 'هەردوو',
	'NOTIFY_METHOD_EMAIL'	=> 'تەنها ئیمەیل',
	'NOTIFY_METHOD_EXPLAIN'	=> 'ڕێباز بۆ ناردنی پەیام نێردرا لە ڕێگەی ئەم مەکۆیەوە.',
	'NOTIFY_METHOD_IM'	=> 'تەنها جابەر',
	'NOTIFY_ON_PM'	=> 'ئاگادارم بکەوە لە پەیامی تایبەتی نوێ',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'ناتوانیت بەکارهێنەری نەناسراو زیاد بکەیت بۆ لیستی هاوڕێیانت',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'ناتوانی ڕۆبۆتەکان بۆ لیستی هاوڕێیان زیاد بکەیت.',
	'NOT_ADDED_FRIENDS_FOES'	=> 'ناتوانیت بەکارهێنەر زیاد بکەیت بۆ لیستی هاوڕێیانت لە کاتێکدا کە لە لیستی فەرامۆشکراوانتدان.',
	'NOT_ADDED_FRIENDS_SELF'	=> 'ناتوانیت خۆت بۆ لیستی هاوڕێیان زیاد بکەیت.',
	'NOT_ADDED_FOES_MOD_ADMIN'	=> 'ناتوانیت بەڕێوەبەران و چاودێران بۆ لیستی فەرامۆشکراوانت زیاد بکەیت.',
	'NOT_ADDED_FOES_ANONYMOUS'	=> 'ناتوانیت بەکارهێنەری نەناسراو زیاد بکەیت بۆ لیستی فەرامۆشکراوانت.',
	'NOT_ADDED_FOES_BOTS'		=> 'ناتوانیت ڕۆبۆتەکان بۆ لیستی فەرامۆشکراوانت زیاد بکەیت.',
	'NOT_ADDED_FOES_FRIENDS'	=> 'ناتوانیت بەکارهێنەر زیاد بکەیت بۆ لیستی فەرامۆشکراوانت لە کاتێکدا کە لە لیستی هاوڕێیانتدان.',
	'NOT_ADDED_FOES_SELF'	=> 'ناتوانیت خۆت زیاد بکەیت بۆ لیستی فەرامۆشکراوان.',
	'NOT_AGREE'	=> 'ڕازی نیم بەم مەرجانە',
	'NOT_ENOUGH_SPACE_FOLDER'	=> 'وا دەردەکەوێت بوخچەی مەبەست “%s” پڕ بێت. ناتوانرێت چالاکی داواکراو بە ئەنجام بگەیەندرێت.',
	'NOT_MOVED_MESSAGE'	=> 'هەنووکە 1 پەیامی تایبەتیت هەڵگیراوە لەبەر پڕیی بوخچە.',
	'NOT_MOVED_MESSAGES'	=> 'هەنووکە %d پەیامی تایبەتیت هەڵگیراوە لەبەر پڕیی بوخچە.',
	'NO_ACTION_MODE'	=> 'هیچ چالاکییەکی پەیام دیاری نەکراوە.',
	'NO_AUTHOR'	=> 'هیچ نووسەرێک دیاریی نەکراوە بۆ ئەم پەیامە.',
	'NO_AVATAR_CATEGORY'	=> 'هیچ',
	'NO_AUTH_DELETE_MESSAGE'	=> 'ڕێت پێ نەدراوە بە سڕینەوەی پەیامە تایبەتییەکان.',
	'NO_AUTH_EDIT_MESSAGE'	=> 'ڕێت پێ نەدراوە بە دەستکاریکردنی پەیامە تایبەتییەکان.',
	'NO_AUTH_FORWARD_MESSAGE'	=> 'ڕێت پێ نەدراوە بە ڕەوانەکردنی پەیامە تایبەتییەکان.',
	'NO_AUTH_GROUP_MESSAGE'	=> 'ڕێت پێ نەدراوە بە ناردنی پەیامی تایبەت بۆ گرووپەکان.',
	'NO_AUTH_PASSWORD_REMINDER'	=> 'ڕێت پێ نەدراوە بە داواکردنی تێپەڕەوشەی نوێ.',
	'NO_AUTH_READ_HOLD_MESSAGE'	=> 'ڕێت پێ نەکراوە ئەو پەیامە تایبەتییانە بخوێنیتەوە کە هەڵگیراون.',
	'NO_AUTH_READ_MESSAGE'	=> 'ڕێت پێ نەدراوە کە پەیامی تایبەت بخوێنیتەوە.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'ڕێت پێ نەدراوە کە ئەم پەیامە بخوێنیتەوە لەبەر ئەوەی لەلایەن نووسەرەکەیەوە لابراوە.',
	'NO_AUTH_SEND_MESSAGE'	=> 'ڕێت پێ نەدراوە کە پەیامی تایبەت بنێریت.',
	'NO_AUTH_SIGNATURE'	=> 'ڕێت پێ نەدراوە کە واژۆ بنووسیت.',
	'NO_BCC_RECIPIENT'	=> 'هیچ',
	'NO_BOOKMARKS'	=> 'هیچ دڵخوازێکت نییە.',
	'NO_BOOKMARKS_SELECTED'	=> 'هیچ دڵخوازێکت دیاری نەکردووە.',
	'NO_EDIT_READ_MESSAGE'	=> 'ناتوانرێت پەیامی تایبەت دەستکاری بکرێت لەبەرئەوەی پێشتر خوێندراوەتەوە.',
	'NO_EMAIL_USER'	=> 'نەتوانرا ئەو ئیمەیل/ناوی بەکارهێنەرەی نووسیوتە بدۆزرێتەوە.',
	'NO_FOES'	=> 'هیچ فەرامۆشکراوێک زیاد نەکراوە',
	'NO_FRIENDS'	=> 'هەنووکە هیچ هاوڕێیەک پێناسە نەکراوە',
	'NO_FRIENDS_OFFLINE'	=> 'هیچ هاوڕێیەک دەرهێڵ نییە',
	'NO_FRIENDS_ONLINE'	=> 'هیچ هاورێیەک لەسەر هێڵ نییە',
	'NO_GROUP_SELECTED'	=> 'هیچ گرووپێک دیاری نەکراوە',
	'NO_IMPORTANT_NEWS'	=> 'هیچ ئاگادارییەکی گرنگ پیشان نەدراوە.',
	'NO_MESSAGE'	=> 'نەتوانرا پەیامی تایبەت بدۆزرێتەوە.',
	'NO_NEW_FOLDER_NAME'	=> 'پێویستە ناوێکی نوێی بوخچە دیاری بکەیت.',
	'NO_NEWER_PM'	=> 'پەیامی نوێتر نییە.',
	'NO_OLDER_PM'	=> 'پەیامی کۆنتر نییە.',
	'NO_PASSWORD_SUPPLIED'	=> 'ناتوانیت بچیتە ژوورەوە بە بێ تێپەڕەوشە.',
	'NO_RECIPIENT'	=> 'هیچ وەرگرێک دیاری نەکراوە',
	'NO_RULES_DEFINED'	=> 'هیچ یاسایەک پێناسە نەکراوە.',
	'NO_SAVED_DRAFTS'	=> 'هیچ ڕەشنووسێک پاشەکەوت نەکراوە.',
	'NO_TO_RECIPIENT'	=> 'هیچ',
	'NO_WATCHED_FORUMS'	=> 'بەشدار نەبوویت لە هیچ مەکۆیەک.',
	'NO_WATCHED_SELECTED'	=> 'هیچ بابەت یان مەکۆیەکی بەشداربووت دیاری نەکردووە.',
	'NO_WATCHED_TOPICS'	=> 'بەشدار نەبوویت لە هیچ بابەتێک.',
	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'پێویستە تێپەڕەوشە لە نێوان %1$d بۆ %1$d نووسە درێژ بێت، پێویستە پیتی تیادا بێت بە تێکەڵی و پێویستە ژمارەی تیادا بێت.',
	'PASS_TYPE_ANY_EXPLAIN'	=> 'پێویستە لە نێوان %1$d و %2$d نووسە بێت.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'پێویستە تێپەڕەوشە لە نێوان %1$d بۆ %1$d نووسە درێژ بێت، پێویستە پیتی تیادا بێت بە تێکەڵی.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'پێویستە تێپەڕەوشە لە نێوان %1$d بۆ %1$d نووسە درێژ بێت، پێویستە پیتی تیادا بێت بە تێکەڵی، پێویستە ژمارە و هێمای تیادا بێت..',
	'PASSWORD'	=> 'تێپەڕەوشە',
	'PASSWORD_ACTIVATED'	=> 'تێپەڕەوشەی نوێت چالاککرا.',
	'PASSWORD_UPDATED'	=> 'تێپەڕەوشەیەکی نوێ نێردرا بۆ ناونیشانی ئیمەیلە تۆمارکراوەکەت.',
	'PERMISSIONS_RESTORED'	=> 'دەسەڵاتە بنەڕەتییەکان بە سەرکەوتوویی گێڕدرانەوە.',
	'PERMISSIONS_TRANSFERRED'	=> 'بە سەرکەوتوویی دەسەڵاتەکان لە <strong>%s</strong> ـەو گواسترانەوە، ئێستا ئەتوانیت بە ناو مەکۆدا بگەڕێیت بە دەسەڵاتەکانی ئەم بەکارهێنەرەوە.<br />تکایە سەرنجی ئەوە بدە کە دەسەڵاتەکانی بەڕێوەبەر نەگواستراونەتەوە. ئەتوانیت بگەڕێیتەوە بۆ دەسەڵاتەکانی خۆت هەر کاتێک بێت.',
	'PM_DISABLED'	=> 'پەیامی تایبەت ناچالاک کراوە لەم مەکۆیە.',
	'PM_FROM'	=> 'لە لایەن',
	'PM_FROM_REMOVED_AUTHOR'	=> 'ئەم پەیامە لە لایەن بەکارهێنەرێکەوە نێردراوە کە چیتر تۆمار نییە.',
	'PM_ICON'	=> 'ئایکۆنی پ ت',
	'PM_INBOX'	=> 'سندووقی هاتوو',
	'PM_NO_USERS'	=> 'بەکارهێنەرانی داواکراو بۆ زیادکردن بوونیان نییە.',
	'PM_OUTBOX'	=> 'سندووقی ڕۆیشتوو',
	'PM_SENTBOX'	=> 'پەیامە نێردراوەکان',
	'PM_SUBJECT'	=> 'سەردێڕی پەیام',
	'PM_TO'	=> 'بینێرە بۆ',
	'PM_USERS_REMOVED_NO_PM'	=> 'نەتوانرا هەندێ بەکارهێنەر زیاد بکرێت لەبەر ئەوەی وەرگرتنی پەیامی تایبەتیان ناچالاک کردووە.',
	'POPUP_ON_PM'	=> 'پەنجەرەیەک بکەرەوە لە هاتنی پەیامی تایبەتی نوێ',
	'POST_EDIT_PM'	=> 'دەستکاری پەیام بکە',
	'POST_FORWARD_PM'	=> 'پەیام ڕەوانە بکە',
	'POST_NEW_PM'	=> 'پەیام بنێرە',
	'POST_PM_LOCKED'	=> 'پەیامی تایبەت داخراوە.',
	'POST_PM_POST'	=> 'ئاماژە بە پەیام بدە',
	'POST_QUOTE_PM'	=> 'ئاماژە بە پەیام بدە',
	'POST_REPLY_PM'	=> 'وەڵامی پەیام بدەوە',
	'PRINT_PM'	=> 'بینین بە شێوەی چاپ',
	'PREFERENCES_UPDATED'	=> 'ویستراوەکانت نوێکرانەوە',
	'PROFILE_INFO_NOTICE'	=> 'تکایە سەرنجی ئەوە بدە کە دەشێت ئەم زانیارییانە ببینرێن لەلایەن ئەندامانی ترەوە. وریابە لە نووسینی هەر وردەکارییەکی تاکە کەسیی هەر خانەیەکی نیشانەکراو بە * پێویستە پڕ بکرێنەوە.',
	'PROFILE_UPDATED'	=> 'پڕۆفایلەکەت نوێکرایەوە',
	'RECIPIENT'	=> 'وەرگر',
	'RECIPIENTS'	=> 'وەرگرەکان',
	'REGISTRATION'	=> 'خۆتۆمارکردن',
	'RELEASE_MESSAGES'	=> '%sهەموو پەیامە هەگیراوەکان ئازاد بکە%s… ڕیز دەکرێنەوە لە بوخچەی گونجاودا گەر هێندە بۆشایی هەبوو.',
	'REMOVE_ADDRESS'	=> 'ناونیشان لاببە',
	'REMOVE_SELECTED_BOOKMARKS'	=> 'دڵخوازە نیشانەکراوەکان لاببە',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی هەموو دڵخوازە دیاریکراوەکان؟',
	'REMOVE_BOOKMARK_MARKED'	=> 'دڵخوازە نیشانەکراوەکان لاببە',
	'REMOVE_FOLDER'	=> 'بوخچە لاببە',
	'REMOVE_FOLDER_CONFIRM'	=> 'دڵنیایت لە لابردنی ئەم بوخچەیە؟',
	'RENAME'	=> 'ناو گۆڕین',
	'RENAME_FOLDER'	=> 'ناوی بوخچە بگۆڕە',
	'REPLIED_MESSAGE'	=> 'وەڵامدانەوە بۆ پەیام',
	'REPLY_TO_ALL'		=> 'وەڵامی نێرەر و هەموو وەرگرەکان بدەرەوە',
	'REPORT_PM'		=> 'پەیامی تایبەت ڕاپۆرت بکە',
	'RESIGN_SELECTED'	=> 'واز لە دیاریکراو بهێنە',
	'RETURN_FOLDER'	=> '%1$sبگەڕێوە بۆ بوخچەی پێشوو%2$s',
	'RETURN_UCP'	=> '%sبگەڕێوە بۆ کۆنترۆڵ پانێڵی بەکارهێنەر%s',
	'RULE_ADDED'	=> 'یاسا بە سەرکەوتوویی زیاد کرا.',
	'RULE_ALREADY_DEFINED'	=> 'یاساکە پێشتر پێناسە کراوە.',
	'RULE_DELETED'	=> 'یاسا بە سەرکەوتوویی لابرا.',
	'RULE_NOT_DEFINED'	=> 'یاسا بە دروستی پێناسە نەکراوە.',
	'RULE_REMOVED_MESSAGE'	=> 'پەیامێکی تایبەتی لابرا بە هۆی پاڵاوتنەکانی پەیامی تایبەتەوە.',
	'RULE_REMOVED_MESSAGES'	=> '%d پەیامی تایبەتی لابرا بە هۆی پاڵاوتنەکانی پەیامی تایبەتەوە.',
	'RULE_LIMIT_REACHED' => 'گەیشتییە سنوری ڕێگاپێدراو لە نووسینی یاسای پێناسەکراو.'
	'SAME_PASSWORD_ERROR'	=> 'تێپەڕەوشەی نوێ هەمان تێپەڕەوشەی ئێستاییتە.',
	'SEARCH_YOUR_POSTS'	=> 'پەیامەکانت پیشان بدە',
	'SEND_PASSWORD'	=> 'تێپەڕەوشە بنێرە',
	'SENT_AT'	=> 'نێردراوە لە',
	'SHOW_EMAIL'	=> 'بەکارهێنەران ئەتوانن پەیوەندیم پێوە بکەن لە ڕێگەی ئیمەیلەوە',
	'SIGNATURE_EXPLAIN'	=> 'ئەمە دەقێکە کە ئەتوانرێت لە پەیاکانتدا دابنرێت. تا سنووری %d  نووسە ڕێ پێدراوە.',
	'SIGNATURE_PREVIEW'	=> 'واژۆکەت وەک ئەمە دەر ئەکەوێت لە پەیامەکاندا',
	'SIGNATURE_TOO_LONG'	=> 'واژۆکەت زۆر درێژە',
	'SORT'	=> 'ڕیزکردن',
	'SORT_COMMENT'	=> 'سەرنجی پەڕگە',
	'SORT_DOWNLOADS'	=> 'داگرتنەکان',
	'SORT_EXTENSION'	=> 'درێژکراو',
	'SORT_FILENAME'	=> 'ناوی پەڕگە',
	'SORT_POST_TIME'	=> 'کاتی ناردن',
	'SORT_SIZE'	=> 'قەبارەی پەڕگە',
	'TIMEZONE'	=> 'ناوچەکات',
	'TO'	=> 'بۆ',
	'TOO_MANY_RECIPIENTS'	=> 'هاوڵی ناردنی پەیامی تایبەتیت دا بۆ ژمارەیەکی زۆر لە وەرگر.',
	'TOO_MANY_REGISTERS'	=> 'گەیشتیت بە زۆرترین ژمارەی ڕێ پێدراوی هەوڵدان بۆ خۆتۆمارکردن بۆ ئەم دانیشتنە. تکایە دواتر هەوڵ بدەوە.',
	'UCP'	=> 'کۆنترۆڵ پانێڵی بەکارهێنەر',
	'UCP_ACTIVATE'	=> 'هەژمار چالاک بکە',
	'UCP_ADMIN_ACTIVATE'	=> 'تکایە سەرنجی ئەوە بدە کە پێویستە ناونیشانی ئیمەیلێکی دروست بنووسیت پێش ئەوەی هەژمارەکەت چالاک بکرێت. بەڕێوەبەر بە هەژمارەکەتدا دەچێتەوە و ئەگەر پەسەندکرا ئیمەیلێک پێ ئەگات بۆ  ئەو ناونیشانەی نووسیوتە. ',
	'UCP_AIM'	=> 'پەیامبەری خێرای AOL',
	'UCP_ATTACHMENTS'	=> 'هاوپێچەکان',
	'UCP_COPPA_BEFORE'	=> 'پێش %s',
	'UCP_COPPA_ON_AFTER'	=> 'لەسەر یان پاش %s',
	'UCP_EMAIL_ACTIVATE'	=> 'تکایە سەرنجی ئەوە بدە کە پێویستە ناونیشانی ئیمەیلێکی دروست بنووسیت پێش ئەوەی هەژمارەکەت چالاک بکرێت. ئیمەیلێکت پێ ئەگات بۆ ئەو ناونیشانەی نووسیوتە کە بەستەرێکی چالاککردنی هەژماری تیادایە.',
	'UCP_ICQ'	=> 'ژمارەی ICQ',
	'UCP_JABBER'	=> 'ناونیشانی جابەر',
	'UCP_MAIN'	=> 'ڕووکەش',
	'UCP_MAIN_ATTACHMENTS'	=> 'بەڕێوەبردنی هاوپێچەکان',
	'UCP_MAIN_BOOKMARKS'	=> 'بەڕێوەبردنی دڵخوازەکان',
	'UCP_MAIN_DRAFTS'	=> 'بەڕێوەبردنی ڕەشنووسەکان',
	'UCP_MAIN_FRONT'	=> 'پەڕەی سەرەتا',
	'UCP_MAIN_SUBSCRIBED'	=> 'بەڕێوەبردنی بەشداربوونەکان',
	'UCP_MSNM'	=> 'پەیامبەری WL/MSN',
	'UCP_NO_ATTACHMENTS'	=> 'هیچ پەڕگەیەکت بار نەکردووە',
	'UCP_PREFS'	=> 'ویستراوەکانی مەکۆ',
	'UCP_PREFS_PERSONAL'	=> 'دەستکاریکردنی ڕێکخستنە گشتییەکان',
	'UCP_PREFS_POST'	=> 'دەستکاریکردنی بنەڕەتییەکانی ناردن',
	'UCP_PREFS_VIEW'	=> 'دەستکاریکردنی هەڵبژاردنەکانی پیشاندان',
	'UCP_PM'	=> 'پەیامە تایبەتییەکان',
	'UCP_PM_COMPOSE'	=> 'پەیام بنێرە',
	'UCP_PM_DRAFTS'	=> 'بەڕێوەبردنی ڕەشنووسەکانی پ ت',
	'UCP_PM_OPTIONS'	=> 'یاساکان، بوخچەکان &amp; ڕێکخستنەکان',
	'UCP_PM_POPUP'	=> 'پەیامە تایبەتییەکان',
	'UCP_PM_POPUP_TITLE'	=> 'popup ـی پەیامی تایبەت',
	'UCP_PM_UNREAD'	=> 'پەیامە نەخوێندراوەکان',
	'UCP_PM_VIEW'	=> 'پەیامەکان ببینە',
	'UCP_PROFILE'	=> 'پڕۆفایل',
	'UCP_PROFILE_AVATAR'	=> 'دەستکاریکردنی وێنۆچکە',
	'UCP_PROFILE_PROFILE_INFO'	=> 'دەستکاریکردنی پڕۆفایل',
	'UCP_PROFILE_REG_DETAILS'	=> 'دەستکاری ڕێکخستنەکانی هەژمار بکە',
	'UCP_PROFILE_SIGNATURE'	=> 'دەستکاری واژۆ بکە',
	'UCP_USERGROUPS'	=> 'گرووپی بەکارهێنەران',
	'UCP_USERGROUPS_MEMBER'	=> 'دەستکاریکردنی ئەندامەتییەکان',
	'UCP_USERGROUPS_MANAGE'	=> 'بەڕێوەبردنی گرووپەکان',
	'UCP_REGISTER_DISABLE'	=> 'دروستکردنی هەژمارێکی نوێ لەم کاتەدا ناکرێت',
	'UCP_REMIND'	=> 'تێپەڕەووسە بنێرە',
	'UCP_RESEND'	=> 'ئیمەیلی چالاککردن بنێرە',
	'UCP_WELCOME'	=> 'بەخێربێیت بۆ کۆنترۆڵ پانێڵی بەکارهێنەر. لێرەوە ئەتوانیت پڕۆفایلەکەت، ویستراوەکانت،بەشداربوونەکان لە مەکۆ و بابەتەکاندا ببینیت، چاودێریی و نوێی بکەیتەوە. هەروەها ئەتوانیت پەیام بنێریت بۆ بەکارهێنەرانی تر (گەر ڕێگە درا). تکایە دڵنیابە لەوەی کە هەموو ئاگادارییەکت خوێندووەتەوە پێش بەردەوامبوون.',
	'UCP_YIM'	=> 'پەیامبەری یاهوو',
	'UCP_ZEBRA'	=> 'هاوڕێیان و فەرامۆشکراوان',
	'UCP_ZEBRA_FOES'	=> 'بەڕێوەبردنی فەرامۆشکراوان',
	'UCP_ZEBRA_FRIENDS'	=> 'بەڕێوەبردنی هاوڕێیان',
	'UNDISCLOSED_RECIPIENT'			=> 'وەرگری دەرنەخراو',
	'UNKNOWN_FOLDER'	=> 'بوخچەی نەزانراو',
	'UNWATCH_MARKED'	=> 'نیشانەکراوەکان مەبینە',
	'UPLOAD_AVATAR_FILE'	=> 'بارکردن لە کۆمپیوتەرەکەتەوە',
	'UPLOAD_AVATAR_URL'	=> 'بارکردن لە URL ـێکەوە',
	'UPLOAD_AVATAR_URL_EXPLAIN'	=> 'URL ـی ئەو شوێنە بنووسە کە وێنکەی تیادایە. وێنەکە ڕوونووس دەکرێت بۆ ئەوم وێبگەیە.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'پێویستە ناوی بەکارهێنەر لە نێوان %1$d و %2$d نووسە درێژ بێت تەنها پیتەکانی ئەلفا و ژمارەی تیادا بێت.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'	=> 'پێویستە ناوی بەکارهێنەر لە نێوان %1$d و %2$d نووسە درێژ بێت تەنها پیت و ژمارە و بۆشایی یان -+_[] ـی تیادا بێت.',
	'USERNAME_ASCII_EXPLAIN'	=> 'پێویستە ناوی بەکارهێنەر لە نێوان %1$d و %2$d نووسە درێژ بێت تەنها نووسەکانی ASCII ـی تیادا بێت، کەواتە هێمای تایبەتیی نا.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'پێویستە ناوی بەکارهێنەر لە نێوان %1$d و %2$d نووسە درێژ بێت تەنها پیت و ژمارەی تیادا بێت.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'پێویستە ناوی بەکارهێنەر لە نێوان %1$d و %2$d نووسە درێژ بێت و تەنها پیت، ژمارە، بۆشایی یان -+_[] ـی تیادا بێت.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'پێویستە درێژی لە نێوان %1$d و %2$d نووسەدا بێت.',
	'USERNAME_TAKEN_USERNAME'	=> 'ئەو ناوی بەکارهێنەرەی لێتداوە پێشتر بەکارهێنراوە، تکایە یەکێکی تر دیاریی بکە.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'ئەو ناوی بەکارهێنەرەی نووسیوتە ڕێ پێ نەدراوە تۆمار بکرێت یان وشەیەکی ڕێ پێ نەدراوی تیادایە. تکایە ناوێکی تر هەڵبژێرە.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'ئەو ناوی بەکارهێنەرانەی دیارییت کردوون یان نەتوانرا بدۆزرێنەوە یان چالاک نەکراون.',
	'VIEW_AVATARS'	=> 'وێنۆچکەکان پیشان بدە',
	'VIEW_EDIT'	=> 'بینین/دەستکاری',
	'VIEW_FLASH'	=> 'جوڵەی فڵاش پیشان بدە',
	'VIEW_IMAGES'	=> 'وێنەکانی ناو پەیامەکان پیشان بدە',
	'VIEW_NEXT_HISTORY'	=> 'پ ت دواتر لە مێژوو',
	'VIEW_NEXT_PM'	=> 'پ ت دواتر',
	'VIEW_PM'	=> 'پەیام ببینە',
	'VIEW_PM_INFO'	=> 'وردەکارییەکانی پەیام',
	'VIEW_PM_MESSAGE'	=> '1 پەیام',
	'VIEW_PM_MESSAGES'	=> '%d پەیام',
	'VIEW_PREVIOUS_HISTORY'	=> 'پ ت پێشوو لە مێژوو',
	'VIEW_PREVIOUS_PM'	=> 'پ ت پێشوو',
	'VIEW_SIGS'	=> 'واژۆکان پیشان بدە',
	'VIEW_SMILIES'	=> 'خەندەکان وەک وێنە پیشان بدە',
	'VIEW_TOPICS_DAYS'	=> 'بابەتەکان لە ڕۆژانی پێشووەوە پیشان بدە',
	'VIEW_TOPICS_DIR'	=> 'ئاڕاستەی ڕیزکردنی بابەت پیشان بدە',
	'VIEW_TOPICS_KEY'	=> 'ڕیزکردنی بابەتەکان پیشان بدە بە',
	'VIEW_POSTS_DAYS'	=> 'پەیامەکانی ڕۆژانی پێشوو پیشان بدە',
	'VIEW_POSTS_DIR'	=> 'ئاڕاستەی ڕیزکردنی پەیام پیشان بدە',
	'VIEW_POSTS_KEY'	=> 'ڕیزکردنی پەیامەکان پیشان بدە بە',
	'WATCHED_EXPLAIN'	=> 'ئەوانەی خوارەوە لیستێکە لە و مەکۆ و بابەتانەی بەشداربوویت تیایدا. ئاگادار دەکرێیتەوە لە پەیامی نوێ تیایاندا. بۆ بەشدار نەبوون کرتە لە مەکۆ یان بابەت بکە و پاشان کرتە لە دوگمەی <strong>چاو لێ نەکردنی نیشانەکراوەکان</strong> بکە.',
	'WATCHED_FORUMS'	=> 'مەکۆ چاولێکراوەکان',
	'WATCHED_TOPICS'	=> 'بابەتە چاولێکراوەکان',
	'WRONG_ACTIVATION'	=> 'ئەو کلیلی چالاککردنەی دیارییت کردووە لەگەڵ هیچ یەکێک لە بنکەدراوەدا یەک ناگرێتەوە.',
	'YOUR_DETAILS'	=> 'چالاکییەکەت',
	'YOUR_FOES'	=> 'فەرامۆشکراوانت',
	'YOUR_FOES_EXPLAIN'	=> 'بۆ لابردنی ناوی بەکارهێنەران دیارییان بکە و کرتە لە ناردن بکە.',
	'YOUR_FRIENDS'	=> 'هاوڕێکانت',
	'YOUR_FRIENDS_EXPLAIN'	=> 'بۆ لابردنی ناوی بەکارهێنەران دیارییان بکە و کرتە لە ناردن بکە.',
	'YOUR_WARNINGS'	=> 'ئاستی ئاگادارکردنەوەت',

	'PM_ACTION'	=> array(
		'PLACE_INTO_FOLDER'	=> 'شوێن بۆ بۆ بوخچە',
		'MARK_AS_READ'	=> 'نیشانەکردن وەک خوێندراوە',
		'MARK_AS_IMPORTANT'	=> 'پەیام نیشانە بکە',
		'DELETE_MESSAGE'	=> 'پەیام بسڕەوە',
	),


	'PM_CHECK'	=> array(
		'SUBJECT'	=> 'سەردێڕ',
		'SENDER'	=> 'نێرەر',
		'MESSAGE'	=> 'پەیام',
		'STATUS'	=> 'دۆخی پەیام',
		'TO'	=> 'نێردرا بۆ',
	),


	'PM_RULE'	=> array(
		'IS_LIKE'	=> 'وەکو ئەوەیە',
		'IS_NOT_LIKE'	=> 'وەکو ئەوە نییە',
		'IS'	=> 'بریتییە لە',
		'IS_NOT'	=> 'بریتیی نییە لە',
		'BEGINS_WITH'	=> 'دەستپێ بکات بە',
		'ENDS_WITH'	=> 'کۆتایی بێت بە',
		'IS_FRIEND'	=> 'هاوڕێیە',
		'IS_FOE'	=> 'فەرامۆشکراوە',
		'IS_USER'	=> 'بەکارهێنەرە',
		'IS_GROUP'	=> 'لە گرووپی بەکارهێنەراندایە',
		'ANSWERED'	=> 'وەڵامدراوە',
		'FORWARDED'	=> 'ڕەوانەکراوە',
		'TO_GROUP'	=> 'بۆ گرووپی بەکارهێنەری بنەڕەتیی',
		'TO_ME'	=> 'بۆ من',
	),

	'GROUPS_EXPLAIN'	=> 'گرووپەکانی بەکارهێنەر هاوکاری بەڕێوەبەران ئەکەن لە باشتر بەڕێوەبردنی بەکارهێنەران. بە شێوەیەکی بنەڕەتی تۆ لە گرووپێکی دیاریکراودا دادەنرێیت، ئەمە گرووپە بنەڕەتییەکەتە. ئەم گرووپە ئەوە پێناسە ئەکات کە چۆن دەرئەکەویت بۆ بەکارهێنەرانی تر، بۆ نمونە ڕەنگکردنی ناوی بەکارهێنەرییت، وێنۆچکە، پلە، هتد. ئەتوانیت گرووپەکەی خۆت بگۆڕیت ئەگەر بەڕێوەبەر ڕێگە بدات. وە هەروەها پێویستە بکرێیت گرووپێکی ترەوە یان خۆت بەشداری لە گرووپێکدا بکەیت. لەوانەیە هەندێک گرووپ دەسەڵاتی زیادەت بدەنێ بۆ بینینی ناوەڕۆک و زیادکردنی تواناکانت لە ناوچەکانی تردا.',
	'GROUP_LEADER'	=> 'پێشڕەوییەکان',
	'GROUP_MEMBER'	=> 'ئەندامەتییەکان',
	'GROUP_PENDING'	=> 'ئەندامەتیی چاوەڕوانی',
	'GROUP_NONMEMBER'	=> 'نا ئەندامەتیی',
	'GROUP_DETAILS'	=> 'وردەکارییەکانی گرووپ',
	'NO_LEADER'	=> 'پێشڕەوی گرووپ نییە',
	'NO_MEMBER'	=> 'ئەندامەتیی گرووپ نییە',
	'NO_PENDING'	=> 'ئەندامەتیی چاوەڕوانیی نییە',
	'NO_NONMEMBER'	=> 'گرووپی نا ئەندام نییە',
));

?>
