<?php
/**
*
* acp_common [Macedonian]
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Администратори',
	'ACP_ADMIN_LOGS'			=> 'Логирањена админ',
	'ACP_ADMIN_ROLES'			=> 'Админ дозволи',
	'ACP_ATTACHMENTS'			=> 'Прикачувања',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Опции за прикачувањата',
	'ACP_AUTH_SETTINGS'			=> 'Авторизација',
	'ACP_AUTOMATION'			=> 'Автоматизација',
	'ACP_AVATAR_SETTINGS'		=> 'Опции за аватарите',

	'ACP_BACKUP'				=> 'Бекап',
	'ACP_BAN'					=> 'Банирање',
	'ACP_BAN_EMAILS'			=> 'БАнирај мејлови',
	'ACP_BAN_IPS'				=> 'Банирај IP адреси',
	'ACP_BAN_USERNAMES'			=> 'Банирај членски имиња',
	'ACP_BBCODES'				=> 'ББкодови',
	'ACP_BOARD_CONFIGURATION'	=> 'Конфигурација на форумот',
	'ACP_BOARD_FEATURES'		=> 'Карактеристикина форумот',
	'ACP_BOARD_MANAGEMENT'		=> 'Менаџмент на форумот',
	'ACP_BOARD_SETTINGS'		=> 'Опции на форумот',
	'ACP_BOTS'					=> 'Пајаци/Роботи',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Датабаза',
	'ACP_CAT_DOT_MODS'			=> 'Модови',
	'ACP_CAT_FORUMS'			=> 'Форуми',
	'ACP_CAT_GENERAL'			=> 'Главно',
	'ACP_CAT_MAINTENANCE'		=> 'Одржување',
	'ACP_CAT_PERMISSIONS'		=> 'Дозволи',
	'ACP_CAT_POSTING'			=> 'Постирање',
	'ACP_CAT_STYLES'			=> 'Стајлови',
	'ACP_CAT_SYSTEM'			=> 'Систем',
	'ACP_CAT_USERGROUP'			=> 'Членови и Групи',
	'ACP_CAT_USERS'				=> 'Членови',
	'ACP_CLIENT_COMMUNICATION'	=> 'Комуникација со клиенти',
	'ACP_COOKIE_SETTINGS'		=> 'Опции за колачиња',
	'ACP_CRITICAL_LOGS'			=> 'Грешки при логирање',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Вообичаени полиња на профилот',

	'ACP_DATABASE'				=> 'Менаџмент на датабазата',
	'ACP_DISALLOW'				=> 'Оневозможи',
	'ACP_DISALLOW_USERNAMES'	=> 'Оневозможи членски имиња',

	'ACP_EMAIL_SETTINGS'		=> 'Опции за мејлови',
	'ACP_EXTENSION_GROUPS'		=> 'Менаџирај група на екстензии',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Дозволи базирани на форумот',
	'ACP_FORUM_LOGS'				=> 'Логирања на форумот',
	'ACP_FORUM_MANAGEMENT'			=> 'Менаџмент на форумите',
	'ACP_FORUM_MODERATORS'			=> 'Модератори на форумите',
	'ACP_FORUM_PERMISSIONS'			=> 'Дозволи за форумот',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Копирај ги дозволита за форумите',
	'ACP_FORUM_ROLES'				=> 'Форум дозволи',

	'ACP_GENERAL_CONFIGURATION'		=> 'Главна конфигурација',
	'ACP_GENERAL_TASKS'				=> 'Главни задачи',
	'ACP_GLOBAL_MODERATORS'			=> 'Супер модератори',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Глобални дозволи',
	'ACP_GROUPS'					=> 'Групи',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Групи’ Дозволи за форумите',
	'ACP_GROUPS_MANAGE'				=> 'Менаџирај ги групите',
	'ACP_GROUPS_MANAGEMENT'			=> 'Менаџмент на групи',
	'ACP_GROUPS_PERMISSIONS'		=> 'Групи’ Дозволи',

	'ACP_ICONS'					=> 'Иконки за теми',
	'ACP_ICONS_SMILIES'			=> 'Смајлиња и Иконки за теми',
	'ACP_IMAGESETS'				=> 'Слики ',
	'ACP_INACTIVE_USERS'		=> 'Неактивни членови',
	'ACP_INDEX'					=> 'Админ панел',

	'ACP_JABBER_SETTINGS'		=> 'Jabber опции',

	'ACP_LANGUAGE'				=> 'Менаџмент за јазик',
	'ACP_LANGUAGE_PACKS'		=> 'Јазични пакети',
	'ACP_LOAD_SETTINGS'			=> 'Намести/натовари опции',
	'ACP_LOGGING'				=> 'Логирање',

	'ACP_MAIN'					=> 'Админ панел',
	'ACP_MANAGE_EXTENSIONS'		=> 'Менаџирај екстензии',
	'ACP_MANAGE_FORUMS'			=> 'Менаџирај ги форумите',
	'ACP_MANAGE_RANKS'			=> 'Менаџирај рангови',
	'ACP_MANAGE_REASONS'		=> 'Менаџирај причини за пријавувања',
	'ACP_MANAGE_USERS'			=> 'Менаџирај членови',
	'ACP_MASS_EMAIL'			=> 'Групен мејл',
	'ACP_MESSAGES'				=> 'Пораки',
	'ACP_MESSAGE_SETTINGS'		=> 'Опции за приватни пораки',
	'ACP_MODULE_MANAGEMENT'		=> 'Менаџмент за модули',
	'ACP_MOD_LOGS'				=> 'Логирање од модератор',
	'ACP_MOD_ROLES'				=> 'Дозволи за модератор',

	'ACP_NO_ITEMS'				=> 'Овде сеуште нема предмети.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Одстранети прикачувања',

	'ACP_PERMISSIONS'			=> 'Дозволи',
	'ACP_PERMISSION_MASKS'		=> 'Маска дозволи',
	'ACP_PERMISSION_ROLES'		=> 'Дозволи',
	'ACP_PERMISSION_TRACE'		=> 'Види/барај дозволи',
	'ACP_PHP_INFO'				=> 'PHP Информација',
	'ACP_POST_SETTINGS'			=> 'Опции за постирање',
	'ACP_PRUNE_FORUMS'			=> 'Скрои ги форумите',
	'ACP_PRUNE_USERS'			=> 'Ској ги членовите',
	'ACP_PRUNING'				=> 'Скројување',

	'ACP_QUICK_ACCESS'			=> 'Брз пристап',

	'ACP_RANKS'					=> 'Рангови',
	'ACP_REASONS'				=> 'Причина за пријавување',
	'ACP_REGISTER_SETTINGS'		=> 'Опции за регистрација',

	'ACP_RESTORE'				=> 'Врати',

	'ACP_FEED'					=> 'Feed менаџмент',
	'ACP_FEED_SETTINGS'			=> 'Feed опции',

	'ACP_SEARCH'				=> 'Барај ја конфигурацијата',
	'ACP_SEARCH_INDEX'			=> 'Барај почетна',
	'ACP_SEARCH_SETTINGS'		=> 'Барај опции',

	'ACP_SECURITY_SETTINGS'		=> 'Сигурносни опции',
	'ACP_SEND_STATISTICS'		=> 'Прати статистичка информација',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфигурација на серверот',
	'ACP_SERVER_SETTINGS'		=> 'Опции за серверот',
	'ACP_SIGNATURE_SETTINGS'	=> 'Опции за потпис',
	'ACP_SMILIES'				=> 'Смајлиња',
	'ACP_STYLE_COMPONENTS'		=> 'Компоненти на стајлот',
	'ACP_STYLE_MANAGEMENT'		=> 'Менаџмент на стајлот',
	'ACP_STYLES'				=> 'Стајлови',

	'ACP_SUBMIT_CHANGES'		=> 'Испрати ги промените',

	'ACP_TEMPLATES'				=> 'Темплејти',
	'ACP_THEMES'				=> 'Теми',

	'ACP_UPDATE'					=> 'Апдејтување',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Членови’ Дозволи за форум',
	'ACP_USERS_LOGS'				=> 'Логирање од членови',
	'ACP_USERS_PERMISSIONS'			=> 'Членови’ Дозволи',
	'ACP_USER_ATTACH'				=> 'Прикачувања',
	'ACP_USER_AVATAR'				=> 'Аватар',
	'ACP_USER_FEEDBACK'				=> 'Повратна спрега',
	'ACP_USER_GROUPS'				=> 'Групи',
	'ACP_USER_MANAGEMENT'			=> 'Менаџмент на член',
	'ACP_USER_OVERVIEW'				=> 'Општ преглед',
	'ACP_USER_PERM'					=> 'Дозволи',
	'ACP_USER_PREFS'				=> 'Преференци',
	'ACP_USER_PROFILE'				=> 'Профил',
	'ACP_USER_RANK'					=> 'Ранг',
	'ACP_USER_ROLES'				=> 'Членски дозволи',
	'ACP_USER_SECURITY'				=> 'Сигурност на член',
	'ACP_USER_SIG'					=> 'Потпис',
	'ACP_USER_WARNINGS'				=> 'Предупредувања',

	'ACP_VC_SETTINGS'					=> 'Спам-бот мерки за заштита',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA слика преглед',
	'ACP_VERSION_CHECK'					=> 'Провери за апдејти',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Види ги административните дозволи',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Види ги дозволите за модерирање на форуми',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Види ги форумските дозволи',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Види ги целосните модераторски дозволи',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Види ги дозволите базирани на членовите',

	'ACP_WORDS'					=> 'Цензорирање на зборови',

	'ACTION'				=> 'Акција',
	'ACTIONS'				=> 'Акции',
	'ACTIVATE'				=> 'Активирај',
	'ADD'					=> 'Додај',
	'ADMIN'					=> 'Администрација',
	'ADMIN_INDEX'			=> 'Админ Панел',
	'ADMIN_PANEL'			=> 'Административен контролен панел',

	'ADM_LOGOUT'			=> 'А.К.П&nbsp;ОдЛогирање',
	'ADM_LOGGED_OUT'		=> 'Успешно се ОдЛогиравте од Админ панелот',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Менување на боја',
	'CONFIG_UPDATED'		=> 'Конфихурацијата е успешно апдејтувана.',

	'DEACTIVATE'				=> 'Деактивирај',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Внесената патека “%s” не постои.',
	'DIRECTORY_NOT_DIR'			=> 'Внесената патека “%s” не е директорија.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Внесената патека “%s” не може да се запише.',
	'DISABLE'					=> 'Оневозможи',
	'DOWNLOAD'					=> 'Симни',
	'DOWNLOAD_AS'				=> 'Симни како',
	'DOWNLOAD_STORE'			=> 'Симни како мемориран фајл',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Може директно да го симнете фајлот или да го сочувате во <samp>store/</samp> фолдерот на серверот.',

	'EDIT'					=> 'Измени',
	'ENABLE'				=> 'Овозможи',
	'EXPORT_DOWNLOAD'		=> 'Симни',
	'EXPORT_STORE'			=> 'Меморирај/Store',

	'GENERAL_OPTIONS'		=> 'Галвни опции',
	'GENERAL_SETTINGS'		=> 'Главни подесувања',
	'GLOBAL_MASK'			=> 'Глобални маска дозволи',

	'INSTALL'				=> 'Инсталирај',
	'IP'					=> 'Члсенски IP',
	'IP_HOSTNAME'			=> 'IP адери или име на хост',

	'LOGGED_IN_AS'			=> 'Вие сте логирани како:',
	'LOGIN_ADMIN'			=> 'За да имате пристап до Админ панелот мора да бидете авторизиран член.',
	'LOGIN_ADMIN_CONFIRM'	=> 'За да пристапите кон админ панелот мора повторно да ја внесете вашата лозинка за авторизација.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Успешно се најавивте на Админ панелот, сега ќе бидете пренасочени кон Админ панелот .',
	'LOOK_UP_FORUM'			=> 'Одбери форум',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Може да одберете и повеќе од еден форум.',

	'MANAGE'				=> 'Менаџирај',
	'MENU_TOGGLE'			=> 'Сокриј или пркажи го менито од страна',
	'MORE'					=> 'Повеќе',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Повеќе изнформации »',
	'MOVE_DOWN'				=> 'Надолу',
	'MOVE_UP'				=> 'Нагоре',

	'NOTIFY'				=> 'Известување',
	'NO_ADMIN'				=> 'Немате дозвола за администрација на овој форум.',
	'NO_EMAILS_DEFINED'		=> 'Не се пронајдени валидни мејл адреси.',
	'NO_PASSWORD_SUPPLIED'	=> 'Мора да го внесете вашата лозинка за да пристапите кон Админ панелот.',

	'OFF'					=> 'Исклучен',
	'ON'					=> 'Уклучен',

	'PARSE_BBCODE'						=> 'Парсирај ББкод',
	'PARSE_SMILIES'						=> 'Парсирај Смајлиња',
	'PARSE_URLS'						=> 'Парсирај линкови',
	'PERMISSIONS_TRANSFERRED'			=> 'Дозволите се пренесени',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Моментално вие имате дозволи пренесени од %1$s. Може да го прелистувате форумот со овие дозволи НО немате дозвола за пристап кон Админ панелот, админ дозволите не ви се доделени. Можете <a href="%2$s"><strong>да ги вратите на претходните дозволи овде</strong></a> во било кое време.',
	'PROCEED_TO_ACP'					=> '%sПродолжи кон Админ панел%s',

	'REMIND'							=> 'Потсети',
	'RESYNC'							=> 'Ресихронизирај',
	'RETURN_TO'							=> 'Врати во…',

	'SELECT_ANONYMOUS'		=> 'Одбери анонимен член',
	'SELECT_OPTION'			=> 'Одбери опција',

	'SETTING_TOO_LOW'		=> 'Вредноста за подесувањето “%1$s” е премногу мала. Минимална вредност е %2$d.',
	'SETTING_TOO_BIG'		=> 'Вредноста за подесувањето “%1$s” е премногу голема. Максималната вредност е %2$d.',
	'SETTING_TOO_LONG'		=> 'Вредноста за подесувањето “%1$s” е премногу долга. максимална должина е %2$d.',
	'SETTING_TOO_SHORT'		=> 'Вредноста за подесувањето “%1$s” е промногу кратка. МИнимална должина е is %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Прикажи ги сите операции',

	'UCP'					=> 'Членски контролен панел',
	'USERNAMES_EXPLAIN'		=> 'Внеси го секое членско име во нов ред.',
	'USER_CONTROL_PANEL'	=> 'Членски контролен панел',

	'WARNING'				=> 'Предупредување',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Оваа страна содржи листа за верзијата на PHP инсталиран на вашиот сервер. Вклучува детали од модули, достапни варијабли и основни подесувања. Оваа информација е корисна кога се дијагнозираат проблемите. Бидете свесни дека некои хостинг компании ја лимитираат информацијата прикажана овде порадисигурносни причини. Ве советуваме да не давате никакви информации од овде на други лица, информации може да давате само на доколку го побараат тоа <a href="http://www.phpbb.com/about/team/">Официјални членови на тимот на phpbb</a> во форумите за подршка.',

	'NO_PHPINFO_AVAILABLE'	=> 'Информацијата за вашата PHP конфигурација не е возможно да се прочита. Php() Информацијата е оневозможена од сигурносни причини.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ова е листа на на сите акции преземени од администраторите. Може да ги сортирате по членско име,датум, IP или акција. Ако ги имате потребните дозволи може да ги исчистите/избришете некои од операциите или логирањата.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ова е листа на на сите акции преземени од самиот форум. Оваа информација ви помага да решите одредени проблеми како на пример: недоставени мејлови. YМоже да ги сортирате по членско име,датум, IP или акција. Ако ги имате потребните дозволи може да ги исчистите/избришете некои од операциите или логирањата.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ова е листа на акции направени во форумот, темите или мислењата акции преземени од членови и модератори, вклучувајќи го и банирањето. Може да ги сортирате по членско име,датум, IP или акција. Ако ги имате потребните дозволи може да ги исчистите/избришете некои од операциите или логирањата.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'This lists all actions carried out by users or on users (reports, warnings and user notes).',
	'ALL_ENTRIES'				=> 'Сите внесувања',

	'DISPLAY_LOG'	=> 'Прикажи претходни внесувања',

	'NO_ENTRIES'	=> 'Нема внесени логирања за овој период.',

	'SORT_IP'		=> 'IP адреси',
	'SORT_DATE'		=> 'Датум',
	'SORT_ACTION'	=> 'Акција на логирање',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Ви благодариме што го одбравте phpBB како решение за вашиот форум. Овој прозорец ќеви даде брз поглед на сите статитстики на вашиотфорум. Линковите на левата страна од овој прозорец ви дозволуваат да контролирате вашиот форум од сите апекти. Секоја страна има инструкции како да ги користите алатките.',
	'ADMIN_LOG'					=> 'Акција на логирани администратори',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Ова ви дава поглед на последните 5 акции преземени од администраторите. Целосната копија можеда биде прегледана од соодветното мени или на линкот подолу.',
	'AVATAR_DIR_SIZE'			=> 'Големина на фолдерот за аватари',

	'BOARD_STARTED'		=> 'Старт на форумот',
	'BOARD_VERSION'		=> 'Верзија на форумот',

	'DATABASE_SERVER_INFO'	=> 'Сервер на датабазата',
	'DATABASE_SIZE'			=> 'Големина на датабазата',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Функцијата за преоптоварување е неправилно конфигурирана',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> мора да биде наместено на  0 или 4. Може да ја проверите вистинската вредност во <samp>PHP информации</samp> страната.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Одкодирање на транпарентните карактери е неправилно конфигурирана.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> мора да биде наместено на  0. Може да ја проверите вистинската вредност во <samp>PHP информации</samp> страната.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP дојдовна конверзација од карактери е неправилно конфигурирана',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> мора да биде наместено на <samp>лозинка</samp>. Може да ја проверите вистинската вредност во <samp>PHP информации</samp> страната.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP надворешна конверзација од карактери е неправилно конфигурирана',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> мора да биде наместено на <samp>лозинка</samp>. Може да ја проверите вистинската вредност во <samp>PHP информации</samp> страната.',

	'FILES_PER_DAY'		=> 'Прикачувања во еден ден',
	'FORUM_STATS'		=> 'Статистика на форумот',

	'GZIP_COMPRESSION'	=> 'GZip компресија',

	'NOT_AVAILABLE'		=> 'Не е достапно',
	'NUMBER_FILES'		=> 'Број на прикачувања',
	'NUMBER_POSTS'		=> 'Број на мислења',
	'NUMBER_TOPICS'		=> 'Број на теми',
	'NUMBER_USERS'		=> 'Број на регистрирани членови',
	'NUMBER_ORPHAN'		=> 'Осамени прикачувања',

	'PHP_VERSION_OLD'	=> 'Верзијата PHP нема да биде подржана од верзиите на phpbb во иднина. %sДетали%s',

	'POSTS_PER_DAY'		=> 'Мислења во еден ден',

	'PURGE_CACHE'			=> 'Исчисти го кешот',
	'PURGE_CACHE_CONFIRM'	=> 'Сигурни ли сте дека сакате да го исчистите кешот?',
	'PURGE_CACHE_EXPLAIN'	=> 'Исчисти го целиот кеш на сите поврзани предмети, ова вклучува и кеширани темплејти.',

	'PURGE_SESSIONS'			=> 'Исчисти ги сите сесии',
	'PURGE_SESSIONS_CONFIRM'	=> 'Сигурни ли сте дека сакате да ги исчистите сите сесии? Ова ќе ги одлогира сите логирани членови.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Исчисти ги сите сесии ќе ги одлогира сите логирани членови.',

	'RESET_DATE'					=> 'Ресетирај го стартот на форумот',
	'RESET_DATE_CONFIRM'			=> 'Сигурни ли сте дека сакате да го ресетирате датумот кога е стартуван форумот?',
	'RESET_ONLINE'					=> 'Ресетирај го бројачот највеќе членови онлајн',
	'RESET_ONLINE_CONFIRM'			=> 'Сигурни ли сте дека сакате да го ресетирате бројачот највеќе членови онлајн?',
	'RESYNC_POSTCOUNTS'				=> 'Ресихронизирај го бројот на мислења',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Само постоечките мислења ќе бидат опфатени.Мислењата кои се избришани нема да се вбројат.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Сигурни ли стедека сакате да ги ресихронизирате бројот на мислења?',
	'RESYNC_POST_MARKING'			=> 'Ресихронизирај ги точкестите теми',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'игурни ли сте дека сакате да ги ресихронизирате сите точкести теми?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Првоги одмаркира сите маркирани теми кои биле видени во последните 6 месеци.',
	'RESYNC_STATS'					=> 'Ресихронизирај ја статистиката',
	'RESYNC_STATS_CONFIRM'			=> 'Сигурни ли сте дека сакате да ја ресихронизирате целосната статистика?',
	'RESYNC_STATS_EXPLAIN'			=> 'Врши  повторно броењена вкупните мислења, теми, членови и фајлови.',
	'RUN'							=> 'Освежи / Направи сега',

	'STATISTIC'					=> 'Статистика',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Ресихронизирај или ресетирај ја статистиката',

	'TOPICS_PER_DAY'	=> 'Теми во еден ден',

	'UPLOAD_DIR_SIZE'	=> 'Големина на постираните прикачувања',
	'USERS_PER_DAY'		=> 'Членови во еден ден',

	'VALUE'						=> 'Вредност',
	'VERSIONCHECK_FAIL'			=> 'Невозможно да сепровери информацијата, последна верзија.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Провери ја верзијата повторно',
	'VIEW_ADMIN_LOG'			=> 'Види логирања од администратори',
	'VIEW_INACTIVE_USERS'		=> 'Види неактивни членови',

	'WELCOME_PHPBB'			=> 'Добредојдовте во phpBB',
	'WRITABLE_CONFIG'		=> 'Вашиот конфиг фајл (config.php) е спремен за запишување. Ви препорачуваме да ја промените дозволата на конфиг фајлот во 640 или најмалку во 644 (Пример: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Неактивен датум',
	'INACTIVE_REASON'				=> 'Причина',
	'INACTIVE_REASON_MANUAL'		=> 'Акаунтот е деактивиран од администраторите',
	'INACTIVE_REASON_PROFILE'		=> 'Деталите на профилот се сменети',
	'INACTIVE_REASON_REGISTER'		=> 'Акаунт, Нови Членови',
	'INACTIVE_REASON_REMIND'		=> 'Присилен член на реактивациа на акаунтот',
	'INACTIVE_REASON_UNKNOWN'		=> 'Непознато',
	'INACTIVE_USERS'				=> 'Неактивни членови',
	'INACTIVE_USERS_EXPLAIN'		=> 'Ова е листа на членови кои се регистрирани но нивните акаунти се неактивни. Вие може да ги активирате, избришете или потсетите (со праќање мејл) овие членови ако сакате.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Ова е листа на последните 10 регистрирани членови кои имаат неактивни акаунти. Комплетна листа може да најдете во соодветно мени или на линкот подолу каде што може да ги активирате, избришете или потсетите (со праќањемејл) овие членови ако сакате.',

	'NO_INACTIVE_USERS'	=> 'Нема неактивни членови',

	'SORT_INACTIVE'		=> 'Неактивендатум',
	'SORT_LAST_VISIT'	=> 'Последна посета',
	'SORT_REASON'		=> 'Причина',
	'SORT_REG_DATE'		=> 'Датум на регистрација',
	'SORT_LAST_REMINDER'=> 'Последно потсетување',
	'SORT_REMINDER'		=> 'Потсетувањето е пратено',

	'USER_IS_INACTIVE'		=> 'Членот не е активен',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Ве молиме пратете информација за статистиките и конфигурацијата на форумот на  phpBB за статистички анализи. Целосната информација која што може да ве индетификува вас или вашиот веб сајт е одстранета - податоците се целосно <strong>Анонимни</strong>. Ние базираме одлуки за иднината на phpBB верзиите врз овие информации. Статистиките се направени да бидат видливи јавно. Ние истотака ги споделуваме овие информации со PHP проектот и програмскиот јазик на phpBB кој е направен.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Користејќиго ова копче може да ги видите сите варијабли кои ќе бидат пренесени.',
	'DONT_SEND_STATISTICS'		=> 'Вратете се во Админ панелот ако не сакате да ги пратите статистичките информации до phpBB.',
	'GO_ACP_MAIN'				=> 'Оди до Админ панел почетна страна',
	'HIDE_STATISTICS'			=> 'Сокриј детали',
	'SEND_STATISTICS'			=> 'Прати статистичка информација',
	'SHOW_STATISTICS'			=> 'Прикажи детали',
	'THANKS_SEND_STATISTICS'	=> 'Ви благодариме за испраќањето на оваа информација.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Додадени или изменети членови’ членски дозволи</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Додадена или изменета група’ членски дозволи</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Додадени или изменети членови’ глобални модераторски дозволи</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Додадени или изменети групи’ глобални модераторски дозволи</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Додадени или изменети членови’ административни дозволи</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Додадени или изменети групи’ административни дозволи</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Додадени или изменети администратори</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Додадени или изменети суопер модератори</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Додадени или изменети членови’ форум пристап</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Додадени или изменети членови’ модераторски форум пристап</strong> од %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Додадени или изменети групи’ форум пристап</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Додадени или изменети групи’ модераторски форум приста</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Додадени или изменети модератори</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Додадени или изменети форумски дозволи</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Одстранети администратори</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Одстранети супер модератори</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Одстранети модератори</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Одстранет член/Форумски дозволи на група</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Дозволите се пренесени од</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Своите дозволи се вратени покористењето на дозволи од</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Неуспешно логирање на Админ панелот</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успешно логирањена Админ панелот</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Одстранети членски прикачувања</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Додадени или изменети екстензии на прикачувања</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Одстранети екстензии за прикачување</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Апдејтувана екстензија</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Додадена групна екстензија</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Изменета групна екстензија</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Одстранета групна екстензија</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Осамен фајлуплоадиран во мислење</strong><br />» број %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Избришани осамени фајлови</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Исклучен член од бан</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Исклучена IP од бан</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Исклучен мејл од бан</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Баниран член</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Banned IP</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Банирана мејл адреса</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Одбаниран член</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Одбанирана IP адреса</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Одбанирана мејл адреса</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Додаден нов ББкод</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Изменет ББкод</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Избришан ББкод</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Додаден нов Бот</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Избришан Бот</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Апдејтуван Бот</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Исчистено логирање од Админ</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Исчистени грешкитепри логирање</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Исчистено логирање од Модератор</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Исчистено логирање од Член</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Исчистено логирање од Членови</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Променети опциите за прикачувања</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Променети опциите за авторизација</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Променети опциите за аватарите</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Променети опциите за колачињата</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Променети опциите за мејл адресата</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Променети опциите за форумските карактеристики </strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Променети опциите за вчитување</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Променети опциите за приватните пораки</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Променети опциите за теми/мислења</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Променети опциите за регистрација</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Променети опциите за feeds</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Променети опциите за пребарување</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Променети опциите за сигурност</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Променети опциите за серверот</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Променети опциите за форумот</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Променети опциите за потпис</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Променети опциите за анти спам-ботот</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Одобрена Тема</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Членот потсети за тема</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Избишано мислење “%1$s” испратено од</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Избришана тема во сенка</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Избришана тема “%1$s” испратено од</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>Копирана тема</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Заворена тема</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Затворено мислење</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Споени мислења</strong> во тема<br />» %s',
	'LOG_MOVE'					=> '<strong>Преместени теми</strong><br />» Од %1$s во %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Заворено пријавување на приватна порака</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Избришано пријавување на приватна порака</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Одобрено мислење</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Не одобрено мислење “%1$s” со следната причина</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Изменето мислење “%1$s” испратено од</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Затворено пријавување</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Избришано пријавување</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Преместени разделени мислења</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Разделени мислења</strong><br />» од %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Одобрена тема</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Не одобрена тема “%1$s” со следната причина</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Ресихронизирани броења на теми</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Сменета тема</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Отворена тема</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Отворено мислење</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Додадено недозволено членско име</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Избришано недозволено членско име</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Бекап на датабазата</strong>',
	'LOG_DB_DELETE'			=> '<strong>Избришан бекап од датабазата</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Вратен бекап од датабазата</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Исклучени IP/име на хост од симнување листот</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Додадено IP/име на хост во симнување листот</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Одстрането IP/име на хост од симнување листот</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber грешка</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Мејл грешка</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Креиран е нов форум</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Копирани форумски дозволи</strong> од %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Избришан форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Избришан форум и подфоруми</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Избришан форум и преместени подфоруми</strong> во %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Избришан форум и преместени мислења</strong> во %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Избришан форум и подфоруми, мислењата преместени</strong> во %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Избришан форум, мислењата преместени</strong> во %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Избришан форум заедно со мислењата</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Избришан форум заедно со мислењата и подфорумите</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Избришан форум и мислењата, подфорумите преместени</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Изменети деталите за форумот</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Преместен форум</strong> %1$s <strong>под</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Преместен форум</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Форумоте ресихронизиран</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Се појави главна грешка</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Креирана нова група</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Групата “%1$s” основна за членовите</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Избришана група</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Одстранети лидерите нагрупата</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Членови промовирани како лидер на група</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Одстранети членови од група</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Апдејтувани деталите за групата</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Додадени нови лидери на групата</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Додадени нови членови во група</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Одобрени членови во група</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Члановите побараа да се приклучат во групата “%1$s” и треба да се одбрат или не одобрат</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Грешка прикреирање на слика</strong><br />» Грешка во %1$s во линијата %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Додадени нови слики во датабазата</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Додадени нови слики во фајл системот</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>избришани слики</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Изменети делати за слики</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Изменети слики</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Изнесени слики</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Сликите ја промашиле “%2$s” директоријата</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Освежена “%2$s” директоријата на сликите</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Сликите се освежени</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Активирани неактивни членови</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Избришани неактивни членови</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Пратени потсетувачки мејлови до неактивните членови</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Конвертиран од %1$s во phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB е инсталиран %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Сесијата IP/прелистувач/X_FORWARDED_FOR неисправна проверка</strong><br />»Членски IP  “<em>%1$s</em>” проверен против сесијата IP “<em>%2$s</em>”, членски прелистувач “<em>%3$s</em>” проверен против сесијата прелистувач “<em>%4$s</em>” и членот X_FORWARDED_FOR string “<em>%5$s</em>” проверен против сесијата X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber акаунтот е променет</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber лозинката е променета</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber акаунтот е регистриран</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber опциите се сменети</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Избришани јазици</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Инсталирани јазици</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Апдејтувани деталите за јазикот</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Заменети фајловите на јазикот</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Јазикот е испратен и ставенво store фолдерот</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Прати групен мејл</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Сменет постер во тема “%1$s”</strong><br />» од %2$s во %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Модулот е оневозможен</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Модулот е овозможен</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Модулот е преместен долу</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Модулот е преместен горе</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Модулот е одстранед</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Додаден модул</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Изменет модул</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Додадени дозволи за админ</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Изменети дозволите за админ</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Одстранети дозволите за админ</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Додадени форумски дозволи</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Изменети форумските дозволи</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Одстранети форумските дозволи</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Додадени дозволи за модератор</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Изменети дозволите за модератор</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Одстранети дозволите за модератор</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Додадени дозволи за членовите</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Изменети членските дозволи</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Одстранети членските дозволи</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Полето на профил е активирано</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Полето на профил е додадено</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Полето на профил е деактивирано</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Полето на профил е изменето</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Полето на профил е одстрането</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Скроени форуми</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Автоматски скроени форуми</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Деактивирани членови</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Скроени членови и избришани мислења</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Членовите скроени но мислењата задржани</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Исчистен кеш</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Исчистени сесии</strong>',


	'LOG_RANK_ADDED'		=> '<strong>Додаден нов ранг</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Одстранед ранг</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Апдејтуван ранг</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Додадена причина за пријавување</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Одстранета причина за пријавување</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Апдејтувана причина за пријавување</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Неисправна валидација на реферер</strong><br />»реферер беше “<em>%1$s</em>”. Барањето беше одбиено а сесијата уништена.',
	'LOG_RESET_DATE'			=> '<strong>Ресетирај го стартдатумот на форумот</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Ресетирај ги највеќе онлајн членовите</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>членските броења на мислења се ресихронизирани</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Точкастите теми се ресихронизирани</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Мислењата, темите и членските статистики се ресихронизирани</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Креиран индекс на барање за</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Одстранет индекс на барање за</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Додаден нов стајл</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Избришан стајл</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Изменет стајл</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Изнесен стајл</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Додадени нов сет на темплејти во датабазата</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Додадени нов сет на темплејти во фајл системот</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Избришани кешираните верзии на темплејтите во сетот на темплејти <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Избришани сет на темплејти</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Изменети сет на темплејти <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Изменети деталите за темплејтите</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Изнесени сет на темплејти</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Освежени сет на темплејти</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Додадена нова тема во датабазата</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Додадена нова тема во фајл системот</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Темата е избришана</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Изменети деталите за темата</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Изменета тема <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Изменета тема <em>%1$s</em></strong><br />» Модифициран фајл <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Изнесена тема</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Освежена тема</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Датабазата е апдејтувана од верзија %1$s во верзија %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Апдејтувана phpBB верзијата од %1$s во верзија %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Членот е активиран</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Баниран член од тимот</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Банирана IP од тимот</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Банирана мејл адреса од тимот</strong> причина “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Избришан член</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Одстранти сите прикачувања од членот</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Одстранед аватарот на членот</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Испразнето членското сандаче за појдовни пораки</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Одстранети сите мислења од членот</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Одстранет потис на членот</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Членот е деактивиран</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Преместени членски мислења</strong><br />» мислења од “%1$s” во форум “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Променет членската лозинка</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Присилен член на реактивација</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Одстрането Нови Членови знаме од член</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Членот “%1$s” го сменил мејлот</strong><br />» од “%2$s” во “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Членот го променил членското име</strong><br />» од  “%1$s” во “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Апдејтувани детали на член</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Членскиот акаунт е активиран</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Одстранет аватарот на членот</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Одстранет потписот на членот</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Додаден нов feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Внеси додаден:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Ре активиран членски акаунт</strong>',
	'LOG_USER_LOCK'				=> '<strong>Член заклучи своја тема</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Преместени сите мислења во форум</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Присилен член на реактивација</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Член одклучи тема</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Додадено предупредување на член</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Следното предупредување е доделено на членот</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Членот ја промени основната група</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Член промовиран како лидер на група</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Членот се приклучи на група</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Членот се приклучи на група и треба да биде одобрен или неодобрен</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Членот го одкажа членството во група</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Избришани членски предупредувања</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Избришани %2$s членски предупредувања</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Избришани сите членски предупредувања</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Додаден збор за цензура</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Избришан збор за цензура</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Изменет збор за цензура</strong><br />» %s',
));

?>