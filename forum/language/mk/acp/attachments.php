<?php
/**
*
* acp_attachments [Macedonian]
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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Овде може да ги кофигурирате главните опции за прикачувањата и додадете посебни категории.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Овде може да додадете, избришете, модифицирате или оневозможите вашите екстензии групи. Понатака опциите вклучуват назначување на посебна категорија за нив, сменувајќи го механизмот за симнување и дефинирање на иконка која ќе биде прикажана од страна на прикачениот фајл зависно во која група припаѓа.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Овде може даги менаџирате дозволените екстензии. Да активирате екстензија, ве молиме опишете ја во панелот за менаџирањето со екстензиони групи. Ви препорачуваме да не дозволувате скриптирани екстензии (како <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, и така натаму…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Овде може да ги видите осамените фајлови. Ова се случува кога повеќето членови ги прикачуваат фајловите но не ги испраќаат во мислењето. Вие можете да ги избришете овие фајлови или да ги прикачите до постоечкото мислење. Прикачување на мислење бара валиден број на мислење, мора да го пронаједете бројот сами. Ова ќе го стави прикачениот фајл во бројот на мислењето.',
	'ADD_EXTENSION'						=> 'Додај екстензија',
	'ADD_EXTENSION_GROUP'				=> 'Додај група на екстензии',
	'ADMIN_UPLOAD_ERROR'				=> 'Грешка при прикачувањето на фајлот: “%s”.',
	'ALLOWED_FORUMS'					=> 'Дозволени форуми',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Моќе да се постираат назначените екстензии во селектираните (или сите) форуми.',
	'ALLOWED_IN_PM_POST'				=> 'Дозволено',
	'ALLOW_ATTACHMENTS'					=> 'Дозволи прикачувања',
	'ALLOW_ALL_FORUMS'					=> 'Дозволи во сите форуми',
	'ALLOW_IN_PM'						=> 'Дозволено во приватни пораки',
	'ALLOW_PM_ATTACHMENTS'				=> 'Дозволи прикачувања во приватни пораки',
	'ALLOW_SELECTED_FORUMS'				=> 'Само форумите селектирани подолу',
	'ASSIGNED_EXTENSIONS'				=> 'Назначени екстензии',
	'ASSIGNED_GROUP'					=> 'Назначена група на екстензии',
	'ATTACH_EXTENSIONS_URL'				=> 'Екстензии',
	'ATTACH_EXT_GROUPS_URL'				=> 'Група на екстензии',
	'ATTACH_ID'							=> 'Број',
	'ATTACH_MAX_FILESIZE'				=> 'Максимална големина на фајлот',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Максимална големина на секој фајл поединечно, со 0 е нелимитирано.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Максимална големина на фајл во порака',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Максимална големина на секој фајл поединечно прикачен во приватни пораки, со 0 е нелимитирано.',
	'ATTACH_ORPHAN_URL'					=> 'Осамени прикачувања',
	'ATTACH_POST_ID'					=> 'Број на мислење',
	'ATTACH_QUOTA'						=> 'Вкупна квота на прикачувања ',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Максимално место на хард дискот на серверот за прикачувања во целиот форум, со 0 е нелимитирано.',
	'ATTACH_TO_POST'					=> 'Прикачи фајл во мислењето',

	'CAT_FLASH_FILES'			=> 'Флеш фајлови',
	'CAT_IMAGES'				=> 'Слики',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media фајлови',
	'CAT_RM_FILES'				=> 'RealMedia media фајлови',
	'CAT_WM_FILES'				=> 'Windows Media media фајлови',
	'CHECK_CONTENT'				=> 'Провери ги прикачените фајлови',
	'CHECK_CONTENT_EXPLAIN'		=> 'Некои пребарувачи можат да бидат измамени да претпостават неправилни фајлови. Оваа опција осигурува дека такви фајлови се одбиени.',
	'CREATE_GROUP'				=> 'Креирај нова група',
	'CREATE_THUMBNAIL'			=> 'Креирај слика/thumbnail',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Креира слика/thumbnail за сите можни ситуации.',

	'DEFINE_ALLOWED_IPS'			=> 'Дефинирај дозволени IPs/hostnames',
	'DEFINE_DISALLOWED_IPS'			=> 'Дефинирај недозволени IPs/hostnames',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'За да одредите неколку различни IPs или hostnames внесете го секој посебно во нова линија. За да одредите синџир на IP адреси одделете го стартот и завршете со тире (-), да одредите листа на IPкористете  “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Може да осдстраните (или исклучите) неколку IP адреси одеднаш користејќи адредена комбинација на глувчето,тастатурата вашиот комјутер и прелистувачот. Исклучените IPs се со плава позадина.',
	'DISPLAY_INLINED'				=> 'Прикажи ги сликите во линија',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ако е одбрано НЕ прикачувањата ќе се прикажат како линкови.',
	'DISPLAY_ORDER'					=> 'Задача за прикажување на прикачувањето',
	'DISPLAY_ORDER_EXPLAIN'			=> 'прикажу прикачувања наместени на време.',

	'EDIT_EXTENSION_GROUP'			=> 'Измени екстензија група',
	'EXCLUDE_ENTERED_IP'			=> 'Дозволете го ова за да ги исклучите IP/hostname.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Исклучи IP од дозволени IPs/hostnames',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Исклучи IP од недозволени IPs/hostnames',
	'EXTENSIONS_UPDATED'			=> 'Екстензиите се успешно апдејтувани.',
	'EXTENSION_EXIST'				=> 'Екстензијата %s веќе постои.',
	'EXTENSION_GROUP'				=> 'Екстензија група',
	'EXTENSION_GROUPS'				=> 'Екстензиони групи',
	'EXTENSION_GROUP_DELETED'		=> 'Групната екстензија е успешно избришана.',
	'EXTENSION_GROUP_EXIST'			=> 'Групната ексетнзија %s веќе постои.',

	'EXT_GROUP_ARCHIVES'			=> 'Архиви',
	'EXT_GROUP_DOCUMENTS'			=> 'Документи',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Фајлови достапни за симнување',
	'EXT_GROUP_FLASH_FILES'			=> 'Флеш фајлови',
	'EXT_GROUP_IMAGES'				=> 'Слики',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Целосен текст',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'GO_TO_EXTENSIONS'		=> 'Оди до прозорецот менаџер за екстензии ',
	'GROUP_NAME'			=> 'Име на групата',

	'IMAGE_LINK_SIZE'			=> 'Димензии на линк слика',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Прикажува слика прикачување како текст во линија ако сликата е поголема од ова. За да го оневозможите ова , наместете ја оваа вредност на 0px by 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick патека',
	'IMAGICK_PATH_EXPLAIN'		=> 'Целоста патека до imagemagick апликацијата за конвертирање, пример: <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Максимален број на прикачувања во едно мислење',
	'MAX_ATTACHMENTS_PM'			=> 'Максимален број на прикачувања за една приватна порака',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максимална големина на фајлот',
	'MAX_IMAGE_SIZE'				=> 'Макимални димензии на сликата',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Максимална големина на прикачени слики. Наместете ги двете вреднсоти на 0px by 0px за да ја оневозможите проверката на димензии.',
	'MAX_THUMB_WIDTH'				=> 'Максимум ширина на слика/thumbnail во пиксели',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Генерираниот thumbnail нема да ја надмине оваа ширина наместена овде.',
	'MIN_THUMB_FILESIZE'			=> 'Минимум големина на слика/thumbnail',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Не креирајте слика/thumbnail за слики помали од ова.',
	'MODE_INLINE'					=> 'Во линија',
	'MODE_PHYSICAL'					=> 'Физички',

	'NOT_ALLOWED_IN_PM'			=> 'Дозволено само во постови/мислења',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Не е дозволено',
	'NOT_ASSIGNED'				=> 'Не е назначено',
	'NO_EXT_GROUP'				=> 'Ништо',
	'NO_EXT_GROUP_NAME'			=> 'Не е внесено име на група',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Нема одредено групна екстензија.',
	'NO_FILE_CAT'				=> 'Ништо',
	'NO_IMAGE'					=> 'Нема слика',
	'NO_THUMBNAIL_SUPPORT'		=> 'Thumbnail подршката беше оневозможена. За правилна функционалност GD треба да биде достапна или imagemagick да е инсталиран. Двете не се пронајдени.',
	'NO_UPLOAD_DIR'				=> 'Уплоад директоријата не постои.',
	'NO_WRITE_UPLOAD'			=> 'Уплоад директоријата која ја одредивте неможе да биде запишана. Ве молиме наместете ги дозволите на директоријата за серверот да може да ги внесува/запишува уплоадираните фајлови.',

	'ONLY_ALLOWED_IN_PM'	=> 'Дозволено само во приватни пораки',
	'ORDER_ALLOW_DENY'		=> 'Дозволи ',
	'ORDER_DENY_ALLOW'		=> 'Не дозволувај',

	'REMOVE_ALLOWED_IPS'		=> 'Одстрани или исклучи <em>Дозволени</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'		=> 'Одстрани или исклучи <em>Не Дозволени</em> IPs/hostnames',

	'SEARCH_IMAGICK'				=> 'Барање за Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Дозволи/Не Дозволувај листа',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Промени го основното однесување кога сигурносните симнувања се овозможени Дозволи/Не Дозволувај листа на <strong>Бела Листа</strong> (Дозволи) или на <strong>Црна Листа</strong> (Одбиј).',
	'SECURE_DOWNLOADS'				=> 'Овозможи сигурносни симнувања',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Со оваа опција овозможена, симнувањата се лимитирани на  IP’s/hostnames.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Сигурносното симнување не е овозможено. Опциите подолу ќе бидат нанесени кога ќе го овозможите сигурносното симнување.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP беше успешно апдејтувана.',
	'SECURE_EMPTY_REFERRER'			=> 'Дозволи празни упати',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Сигурносните симнувања се базирани на упатите. Дали сакате да ги дозволите симнувањата наоние кои ги заобиколуваат упатите?',
	'SETTINGS_CAT_IMAGES'			=> 'Категорија слики опции',
	'SPECIAL_CATEGORY'				=> 'Специјална категорија',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Специјалните категории се разликуваат во прикажувањето во мислењата.',
	'SUCCESSFULLY_UPLOADED'			=> 'Успешно е уплоадирано.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Групната екстензија е успешно додадена',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Групната екстензија е успешно апдејтувана.',

	'UPLOADING_FILES'				=> 'Уплоадирање фајлови',
	'UPLOADING_FILE_TO'				=> 'Уплоадирај фајл “%1$s” во мислење број %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Немате дозволи да уплоадирате фајлови во форумот “%s”.',
	'UPLOAD_DIR'					=> 'Директорија на уплоади',
	'UPLOAD_DIR_EXPLAIN'			=> 'Патека за меморирање на прикачувања. Ве молиме забележете дека ако ја промените директоријата а веќе имате уплоадирани прикачувања ќе треба тие фајлови рачно да ги префрлите во нивната нова локација.',
	'UPLOAD_ICON'					=> 'Иконка за уплоад',
	'UPLOAD_NOT_DIR'				=> 'Локацијата за уплоади која ја одредивте не е директорија/фолдер.',
));

?>