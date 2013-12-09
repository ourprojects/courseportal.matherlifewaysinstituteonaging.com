<?php
/** 
*
* common [正體中文]
*
* @package language
* @version $Id$
* @copyright (c) 2001 - 2007 phpBB TW Group (yoshika, 心靈捕手, 動機不明)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> '正體中文語系由 <a href="http://phpbb-tw.net/" onclick="window.open(this.href);return false;"><span style="color:#ff6633"><strong>竹貓星球</strong></span></a> 維護製作',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'	=> '|Y-m-d|',// 2007-01-01
	'USER_LANG'	=> 'zh-cmn-hant',

	'1_DAY'	=> '1天',
	'1_MONTH'	=> '1個月',
	'1_YEAR'	=> '1年',
	'2_WEEKS'	=> '2週',
	'3_MONTHS'	=> '3個月',
	'6_MONTHS'	=> '6個月',
	'7_DAYS'	=> '7天',

	'ACCOUNT_ALREADY_ACTIVATED'	=> '您的帳號已經被啟用。',
	'ACCOUNT_DEACTIVATED'	=> '您的帳號已經被停用，並且只有管理員才能重新啟用。',
	'ACCOUNT_NOT_ACTIVATED'	=> '您的帳號尚未被啟用',
	'ACP'	=> '管理員控制台 (ACP)',
	'ACTIVE'	=> '啟用',
	'ACTIVE_ERROR'	=> '您指定了一個未被啟用的會員名稱。如果您有啟用帳號的問題，那麼請聯絡管理員。',
	'ADMINISTRATOR'	=> '管理員',
	'ADMINISTRATORS'	=> '管理員',
	'AGE'	=> '年齡',
	'AIM'							=> 'AIM',
	'ALLOWED'	=> '允許',
	'ALL_FILES'	=> '所有檔案',
	'ALL_FORUMS'	=> '所有版面',
	'ALL_MESSAGES'	=> '所有訊息',
	'ALL_POSTS'	=> '所有文章',
	'ALL_TIMES'	=> '所有顯示的時間為 %1$s %2$s',
	'ALL_TOPICS'	=> '所有主題',
	'AND'	=> '和',
	'ARE_WATCHING_FORUM'	=> '您訂閱了這個版面，版面更新時會發送通知給您。',
	'ARE_WATCHING_TOPIC'	=> '您訂閱了這個主題，主題更新時會發送通知給您。',
	'ASCENDING'	=> '依序遞增',
	'ATTACHMENTS'	=> '附加檔案',
	'ATTACHED_IMAGE_NOT_IMAGE'	=> '您所附加的圖檔是無效的。',
	'AUTHOR'	=> '發表人',
	'AUTH_NO_PROFILE_CREATED'	=> '建立會員資料失敗。',
	'AVATAR_DISALLOWED_CONTENT'		=> '上傳被拒絕，因為上傳的檔案被認定具有可能的攻擊成分。',
	'AVATAR_DISALLOWED_EXTENSION'	=> '副檔名 %s 已經被停用。',
	'AVATAR_EMPTY_REMOTE_DATA'	=> '頭像無法上傳，遠端伺服器的資料無效或損壞。',
	'AVATAR_EMPTY_FILEUPLOAD'	=> '上傳的頭像檔案是空的。',
	'AVATAR_INVALID_FILENAME'	=> '%s 是無效的檔案名稱。',
	'AVATAR_NOT_UPLOADED'	=> '無法上傳頭像。',
	'AVATAR_NO_SIZE'	=> '無法自動取得頭像的尺寸，請手動輸入合適的數值。',
	'AVATAR_PARTIAL_UPLOAD'	=> '上傳的檔案只上傳了一部分。',
	'AVATAR_PHP_SIZE_NA'	=> '頭像檔案太大。<br />無法判斷伺服器 PHP 允許的最大檔案大小限制。',
	'AVATAR_PHP_SIZE_OVERRUN'	=> '頭像檔案太大，伺服器允許的最大檔案大小是 %1$d %2$s。<br />請注意這個限制是根據伺服器上 php.ini 的設定，所以無法變更。',
	'AVATAR_URL_INVALID'	=> '指定的連結無效。',
	'AVATAR_URL_NOT_FOUND'	=> '無法找到指定的檔案。',
	'AVATAR_WRONG_FILESIZE'	=> '頭像檔案大小必須介於 0 和 %1d %2s 之間。',
	'AVATAR_WRONG_SIZE'	=> '頭像的寬度必須大於 %1$d 像素，高度必須大於 %2$d 像素，並且寬度不得超過 %3$d 像素，高度不得超過 %4$d 像素。您送出的頭像寬為 %5$d 像素，高為 %6$d 像素。',

	'BACK_TO_TOP'	=> '回頂端',
	'BACK_TO_PREV'	=> '回到前一頁',
	'BAN_TRIGGERED_BY_EMAIL'	=> '您的 e-mail 位址已經被封鎖。',
	'BAN_TRIGGERED_BY_IP'	=> '您的 IP 位址已經被封鎖。',
	'BAN_TRIGGERED_BY_USER'	=> '您的會員名稱已經被封鎖。',
	'BBCODE_GUIDE'	=> 'BBCode 使用手冊',
	'BCC'	=> '密件副本',
	'BIRTHDAYS'	=> '生日',
	'BOARD_BAN_PERM'	=> '您被這個討論區<strong>永久地</strong>封鎖。<br /><br />請與 %2$s討論區管理員%3$s 聯絡，以獲得更多的資訊。',
	'BOARD_BAN_REASON'	=> '被封鎖的理由是：<strong>%s</strong>',
	'BOARD_BAN_TIME'	=> '您被這個討論區封鎖，直到 <strong>%1$s</strong> 為止。<br /><br />請與 %2$s討論區管理員%3$s 聯絡，以獲得更多的資訊。',
	'BOARD_DISABLE'	=> '很抱歉！ 目前討論區暫時關閉中。',
	'BOARD_DISABLED'	=> '討論區目前關閉中。',
	'BOARD_UNAVAILABLE'	=> '很抱歉！ 目前討論區暫時無法使用，請稍後再登入。',
	'BROWSING_FORUM'		=> '正在瀏覽這個版面的使用者：%1$s',
	'BROWSING_FORUM_GUEST'	=> '正在瀏覽這個版面的使用者：%1$s 和 %2$d 位訪客',
	'BROWSING_FORUM_GUESTS'	=> '正在瀏覽這個版面的使用者：%1$s 和 %2$d 位訪客',
	'BYTES'					=> 'Bytes',

	'CANCEL'	=> '取消',
	'CHANGE'	=> '變更',
	'CHANGE_FONT_SIZE'	=> '變更字體大小',
	'CHANGING_PREFERENCES'	=> '變更版面引用',
	'CHANGING_PROFILE'	=> '變更版面資料設定',
	'CLICK_VIEW_PRIVMSG'	=> '%s 前往您的收件夾 %s',
	'COLLAPSE_VIEW'	=> '收縮瀏覽',
	'CLOSE_WINDOW'	=> '關閉視窗',
	'COLOUR_SWATCH'	=> '顏色取樣',
	'COMMA_SEPARATOR'	=> '，',
	'CONFIRM'	=> '確認',
	'CONFIRM_CODE'	=> '確認代碼',
	'CONFIRM_CODE_EXPLAIN'   => '請正確輸入它所顯示的代碼，不必區分大小寫。',
	'CONFIRM_CODE_WRONG'	=> '您輸入的確認代碼有誤。',
	'CONFIRM_OPERATION'	=> '您確認要執行這個操作嗎？',
	'CONGRATULATIONS'	=> '恭喜您',
	'CONNECTION_FAILED'	=> '連線失敗。',
	'CONNECTION_SUCCESS'	=> '連線成功！',
	'COOKIES_DELETED'	=> '所有的 Cookies 都已經被清除。',
	'CURRENT_TIME'	=> '現在的時間是 %s',

	'DAY'	=> '日',
	'DAYS'	=> '天',
	'DELETE'	=> '刪除',
	'DELETE_ALL'	=> '刪除全部',
	'DELETE_COOKIES'	=> '刪除所有討論區 Cookies',
	'DELETE_MARKED'	=> '刪除選取',
	'DELETE_POST'	=> '刪除文章',
	'DELIMITER'	=> '分隔符號',
	'DESCENDING'	=> '依序遞減',
	'DISABLED'	=> '停用',
	'DISPLAY'	=> '顯示',
	'DISPLAY_GUESTS'	=> '顯示訪客 ',
	'DISPLAY_MESSAGES'	=> '顯示訊息 ',
	'DISPLAY_POSTS'	=> '顯示文章 ',
	'DISPLAY_TOPICS'	=> '顯示主題 ',
	'DOWNLOADED'	=> '已下載',
	'DOWNLOADING_FILE'	=> '正在下載檔案中',
	'DOWNLOAD_COUNT'	=> '被下載 %d 次',
	'DOWNLOAD_COUNTS'	=> '被下載 %d 次',
	'DOWNLOAD_COUNT_NONE'	=> '尚未被下載',
	'VIEWED_COUNT'	=> '被瀏覽 %d 次',
	'VIEWED_COUNTS'	=> '被瀏覽 %d 次',
	'VIEWED_COUNT_NONE'	=> '尚未被瀏覽',

	'EDIT_POST'	=> '編輯文章',
	'EMAIL'	=> 'E-mail',// EMAIL_ADDRESS 的簡寫
	'EMAIL_ADDRESS'	=> 'E-mail 位址',
	'EMAIL_SMTP_ERROR_RESPONSE'	=> '發送 e-mail 在 <strong>第 %1$s 行</strong> 遇到問題。回應訊息：%2$s。',
	'EMPTY_SUBJECT'	=> '您必須為新主題指定一個標題。',
	'EMPTY_MESSAGE_SUBJECT'	=> '您沒有輸入標題。',
	'ENABLED'	=> '啟用',
	'ENCLOSURE'	=> '包圍',
	'ENTER_USERNAME'					=> '輸入會員名稱',
	'ERR_CHANGING_DIRECTORY'	=> '無法變更資料夾。',
	'ERR_CONNECTING_SERVER'	=> '連接伺服器錯誤。',
	'ERR_JAB_AUTH'	=> '無法取得 Jabber 伺服器授權。',
	'ERR_JAB_CONNECT'		=> '無法連線到 Jabber 伺服器。',
	'ERR_UNABLE_TO_LOGIN'	=> '您提供的會員名稱或密碼錯誤。',
	'ERR_UNWATCHING'					=> '當試著取消訂閱時發生一個錯誤。',
	'ERR_WATCHING'						=> '當試著訂閱時發生一個錯誤。',
	'ERR_WRONG_PATH_TO_PHPBB'	=> '輸入的 phpBB 路徑無效。',
	'EXPAND_VIEW'	=> '展開瀏覽',
	'EXTENSION'	=> '副檔名',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> '副檔名 <strong>%s</strong> 已經被停用且不再顯示。',

	'FAQ'	=> '問答集',
	'FAQ_EXPLAIN'	=> '問答集',
	'FILENAME'	=> '檔案名稱',
	'FILESIZE'	=> '檔案大小',
	'FILEDATE'	=> '檔案日期',
	'FILE_COMMENT'	=> '檔案註釋',
	'FILE_NOT_FOUND'	=> '找不到必須的檔案。',
	'FIND_USERNAME'	=> '搜尋會員',
	'FOLDER'	=> '資料夾',
	'FORGOT_PASS'	=> '我忘記了自己的密碼',
	'FORM_INVALID'	=> '表單送出無效。請再執行一次。',
	'FORUM'	=> '版面',
	'FORUMS'	=> '版面',
	'FORUMS_MARKED'			=> '版面已經被標示為已閱讀。',
	'FORUM_CAT'	=> '版面類別',
	'FORUM_INDEX'	=> '討論區首頁',
	'FORUM_LINK'	=> '版面連結',
	'FORUM_LOCATION'	=> '版面位置',
	'FORUM_LOCKED'	=> '版面鎖定',
	'FORUM_RULES'	=> '版面規則',
	'FORUM_RULES_LINK'	=> '請點選這裡檢視版面規則',
	'FROM'	=> '從',
	'FSOCK_DISABLED'	=> '操作無法完成，因為 <var>fsockopen</var> 函數被停用或是伺服器沒有回應。',
	'FSOCK_TIMEOUT'			=> '當從網路串流讀取時，發生逾時。',

	'FTP_FSOCK_HOST'	=> 'FTP 主機',
	'FTP_FSOCK_HOST_EXPLAIN'	=> '您的 FTP 伺服器連結位址。',
	'FTP_FSOCK_PASSWORD'	=> 'FTP 密碼',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> '登入您 FTP 伺服器的使用者密碼。',
	'FTP_FSOCK_PORT'	=> 'FTP 連接埠',
	'FTP_FSOCK_PORT_EXPLAIN'	=> '連接到您 FTP 伺服器的埠號，預設為 21。',
	'FTP_FSOCK_ROOT_PATH'	=> 'phpBB 資料夾路徑。',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> '連接到您 phpBB 討論區程式的資料夾路徑。',
	'FTP_FSOCK_TIMEOUT'	=> 'FTP 連線逾時。',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'	=> '您的伺服器連線回應逾時時間 (秒)。',
	'FTP_FSOCK_USERNAME'	=> 'FTP 帳號',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> '登入您 FTP 伺服器的使用者帳號。',

	'FTP_HOST'	=> 'FTP 主機',
	'FTP_HOST_EXPLAIN'	=> '您的 FTP 伺服器連結位址。',
	'FTP_PASSWORD'	=> 'FTP 密碼',
	'FTP_PASSWORD_EXPLAIN'	=> '登入您 FTP 伺服器的使用者密碼。',
	'FTP_PORT'	=> 'FTP 連接埠',
	'FTP_PORT_EXPLAIN'	=> '連接到您 FTP 伺服器的埠號，預設為 21。',
	'FTP_ROOT_PATH'	=> 'phpBB 資料夾路徑',
	'FTP_ROOT_PATH_EXPLAIN'	=> '連接到您 phpBB 討論區程式的資料夾路徑。',
	'FTP_TIMEOUT'	=> 'FTP 連線逾時',
	'FTP_TIMEOUT_EXPLAIN'	=> '您的伺服器連線回應逾時時間 (秒)。',
	'FTP_USERNAME'	=> 'FTP 帳號',
	'FTP_USERNAME_EXPLAIN'	=> '登入您 FTP 伺服器的使用者帳號。',

	'GENERAL_ERROR'	=> '一般性錯誤',
	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	'GO'						=> 'Go',
	'GOTO_PAGE'	=> '前往頁數',
	'GROUP'	=> '群組',
	'GROUPS'	=> '群組',
	'GROUP_ERR_TYPE'	=> '不適當的群組屬性。',
	'GROUP_ERR_USERNAME'	=> '沒有指定群組名稱。',
	'GROUP_ERR_USER_LONG'	=> '群組名稱不能超過 60 個字元。指定的群組名稱太長了。',
	'GUEST'	=> '訪客',
	'GUEST_USERS_ONLINE'	=> '共有 %d 位訪客上線',
	'GUEST_USERS_TOTAL'	=> '%d 位訪客',
	'GUEST_USERS_ZERO_ONLINE'	=> '共有 0 位訪客上線',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 位訪客',
	'GUEST_USER_ONLINE'	=> '共有 %d 位訪客上線',
	'GUEST_USER_TOTAL'	=> '%d 位訪客',
	'G_ADMINISTRATORS'	=> '管理員',
	'G_BOTS'	=> '機器人',
	'G_GUESTS'	=> '訪客',
	'G_REGISTERED'	=> '註冊會員',
	'G_REGISTERED_COPPA'	=> '註冊 COPPA 會員',
	'G_GLOBAL_MODERATORS'	=> '全域版主',
	'G_NEWLY_REGISTERED'		=> '新註冊會員',

	'HIDDEN_USERS_ONLINE'			=> '%d 位隱形會員上線',
	'HIDDEN_USERS_TOTAL'			=> '%d 位隱形會員',
	'HIDDEN_USERS_TOTAL_AND'		=> '%d 位隱形會員和 ',
	'HIDDEN_USERS_ZERO_ONLINE'		=> '0 位隱形會員上線',
	'HIDDEN_USERS_ZERO_TOTAL'		=> '0 位隱形會員',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 位隱形會員和 ',
	'HIDDEN_USER_ONLINE'			=> '%d 位隱形會員上線',
	'HIDDEN_USER_TOTAL'				=> '%d 位隱形會員',
	'HIDDEN_USER_TOTAL_AND'			=> '%d 位隱形會員和 ',
	'HIDE_GUESTS'	=> '隱藏訪客',
	'HIDE_ME'	=> '此次登入請隱藏我的上線狀態',
	'HOURS'	=> '小時',
	'HOME'	=> '首頁',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'	=> 'ICQ 狀態',
	'IF'	=> '如果',
	'IMAGE'	=> '圖檔',
	'IMAGE_FILETYPE_INVALID'	=> '不支援的圖檔類型：%d mimetype %s 。',
	'IMAGE_FILETYPE_MISMATCH'	=> '圖檔類型不符：預期的副檔名是 %1$s ，但您提供的是 %2$s。',
	'IN'	=> '位於',
	'INDEX'	=> '首頁',
	'INFORMATION'	=> '系統訊息',
	'INTERESTS'	=> '興趣',
	'INVALID_DIGEST_CHALLENGE'	=> '無效的摘要需求。',
	'INVALID_EMAIL_LOG'	=> '<strong>%s</strong> 可能是無效的 e-mail 位址？',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'	=> '您的 IP %1$s 已經被封鎖，因為它在封鎖列表中。細節請參考 <a href="%2$s">%2$s</a>。',

	'JABBER'				=> 'Jabber',
	'JOINED'	=> '註冊時間',
	'JUMP_PAGE'				=> '輸入您想要前往的頁數',
	'JUMP_TO'	=> '前往 ',
	'JUMP_TO_PAGE'	=> '點選要前往的頁面...',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'	=> '最後發表',
	'LAST_UPDATED'	=> '最後更新',
	'LAST_VISIT'	=> '最後訪問',
	'LDAP_NO_LDAP_EXTENSION'	=> 'LDAP 模組無法使用。',
	'LDAP_NO_SERVER_CONNECTION'	=> '無法連線到 LDAP 伺服器。',
	'LDAP_SEARCH_FAILED'            => '當搜尋 LDAP 目錄時發生錯誤。',
	'LEGEND'	=> '顏色說明',
	'LOCATION'	=> '來自',
	'LOCK_POST'	=> '鎖定文章',
	'LOCK_POST_EXPLAIN'	=> '防止文章被編輯',
	'LOCK_TOPIC'	=> '鎖定主題',
	'LOGIN'	=> '登入',
	'LOGIN_CHECK_PM'	=> '登入檢查您的私人訊息。',
	'LOGIN_CONFIRMATION'	=> '登入確認',
	'LOGIN_CONFIRM_EXPLAIN'            => '為了防止暴力破解會員帳號，論壇將會要求您在超過最大嘗試登入次數後輸入一組確認代碼，確認代碼顯示在如下所示的圖檔中。如果您有視覺相關問題因而無法瀏覽判斷時，請聯絡 %s論壇管理員%s。', // 不使用的
	'LOGIN_ERROR_ATTEMPTS'            => '您的登入錯誤，超過了討論區設定的嘗試次數上限。現在除了輸入您的會員名稱和密碼外，還需要解決底下的 CAPTCHA。',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> '您的瀏覽未獲 Apache 伺服器授權。',
	'LOGIN_ERROR_PASSWORD'	=> '您輸入了一個無效的密碼。請確認後重新嘗試登入。如果問題依舊存在請聯絡 %s管理員%s。',
	'LOGIN_ERROR_PASSWORD_CONVERT'	=> '在討論區升級中無法轉換您的密碼。請 %s申請一個新密碼%s。如果您還遇到其他的問題，請聯絡 %s管理員%s。',
	'LOGIN_ERROR_USERNAME'	=> '您輸入了一個無效的會員名稱。請檢查後重新輸入。如果問題依舊存在請聯絡 %s管理員%s。',
	'LOGIN_FORUM'	=> '您需要輸入符合的密碼才能瀏覽這個版面。',
	'LOGIN_INFO'	=> '您必須註冊後才能登入。註冊僅需要很短的時間，但是會給您更多的權限。在註冊前請確認您已經明白我們的使用條款和隱私政策。當瀏覽討論區時請確認您已經閱讀過版面規則。',
	'LOGIN_VIEWFORUM'	=> '您必須註冊並且登入後才能瀏覽這個版面。',
	'LOGIN_EXPLAIN_EDIT'	=> '您必須註冊並且登入後才能編輯版面文章。',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> '您必須註冊並且登入後才能檢視誰在線上。',
	'LOGOUT'	=> '登出',
	'LOGOUT_USER'	=> '登出 [ %s ]',
	'LOG_ME_IN'	=> '每次瀏覽時自動登入',

	'MARK'	=> '標示',
	'MARK_ALL'	=> '選擇全部',
	'MARK_FORUMS_READ'	=> '將版面標示為已閱讀',
	'MARK_SUBFORUMS_READ'	=> '將子版面標示為已閱讀',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'	=> '版主控制台 (MCP)',
	'MEMBERLIST'	=> '會員列表',
	'MEMBERLIST_EXPLAIN'	=> '檢視完整的會員列表',
	'MERGE'	=> '合併',
	'MERGE_POSTS'			=> '移動文章',
	'MERGE_TOPIC'	=> '合併主題',
	'MESSAGE'	=> '內容',
	'MESSAGES'	=> '內容',
	'MESSAGE_BODY'	=> '文章內容',
	'MINUTES'	=> '分鐘',
	'MODERATE'	=> '管理',
	'MODERATOR'	=> '版主',
	'MODERATORS'	=> '版主',
	'MONTH'	=> '月',
	'MOVE'	=> '移動',
	'MSNM'					=> 'MSNM/WLM',

	'NA'						=> 'N/A',
	'NEWEST_USER'	=> '最新註冊的會員：<strong>%s</strong>',
	'NEW_MESSAGE'	=> '新訊息',
	'NEW_MESSAGES'	=> '新訊息',
	'NEW_PM'	=> '<strong>%d</strong> 個新訊息',
	'NEW_PMS'	=> '<strong>%d</strong> 個新訊息',
	'NEW_POST'               => '有新文章',   // 不再使用
	'NEW_POSTS'               => '有新文章',   // 不再使用
	'NEXT'	=> '下一頁',
	'NEXT_STEP'	=> '下一步',
	'NEVER'	=> '從未',
	'NO'	=> '否',
	'NOT_ALLOWED_MANAGE_GROUP'	=> '您不能從管理員控制台管理這個會員群組。',
	'NOT_AUTHORISED'	=> '您沒有權限瀏覽這塊區域。',
	'NOT_WATCHING_FORUM'	=> '您已經取消這個版面的訂閱，版面更新訊息停止發送。',
	'NOT_WATCHING_TOPIC'	=> '您已經取消這個主題的訂閱。',
	'NOTIFY_ADMIN'	=> '請通知管理員或網站管理者。',
	'NOTIFY_ADMIN_EMAIL'	=> '請通知管理員或網站管理者：<a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'	=> '您不被允許使用這個檔案。',
	'NO_ACTION'	=> '沒有指定的動作。',
	'NO_ADMINISTRATORS'			=> '沒有管理員。',
	'NO_AUTH_ADMIN'	=> '您沒有管理權限，因此不能使用管理員控制台。',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> '您不能被重新授權為另一個會員。',
	'NO_AUTH_OPERATION'	=> '您沒有完成這個操作所需要的權限。',
	'NO_CONNECT_TO_SMTP_HOST'	=> '無法連接 SMTP 伺服器 ：%s ：%s',
	'NO_BIRTHDAYS'	=> '今天沒有人生日',
	'NO_EMAIL_MESSAGE'	=> '沒有 e-mail 內容。',
	'NO_EMAIL_RESPONSE_CODE'	=> '無法得到郵件伺服器回應碼。',
	'NO_EMAIL_SUBJECT'	=> '沒有 e-mail 主題。',
	'NO_FORUM'	=> '您選擇的版面不存在。',
	'NO_FORUMS'	=> '這個討論區還沒有版面。',
	'NO_GROUP'	=> '請求的會員群組不存在。',
	'NO_GROUP_MEMBERS'	=> '這個會員群組還沒有成員。',
	'NO_IPS_DEFINED'	=> '沒有設定 IP 位址或主機名稱',
	'NO_MEMBERS'	=> '這個搜尋規則下沒有找到符合的會員。',
	'NO_MESSAGES'	=> '沒有訊息',
	'NO_MODE'	=> '沒有指定模式。',
	'NO_MODERATORS'	=> '沒有版主。',
	'NO_NEW_MESSAGES'	=> '沒有新的訊息',
	'NO_NEW_PM'	=> '<strong>0</strong> 個新訊息',
	'NO_NEW_POSTS'            => '無新文章',   // 不再使用
	'NO_ONLINE_USERS'	=> '沒有註冊會員',
	'NO_POSTS'	=> '沒有文章',
	'NO_POSTS_TIME_FRAME'	=> '在選定的時段中這個主題沒有文章存在。',
	'NO_FEED_ENABLED'			=> '在這個論壇的消息來源是不可用的。',
	'NO_FEED'					=> '所需求的消息來源是不可用的。',
	'NO_SUBJECT'	=> '沒有輸入標題',
	'NO_SUCH_SEARCH_MODULE'	=> '指定的搜尋模組不存在。',
	'NO_SUPPORTED_AUTH_METHODS'	=> '沒有可支援的認證方式。',
	'NO_TOPIC'	=> '請求的主題不存在。',
	'NO_TOPIC_FORUM'			=> '主題或版面不再存在。',
	'NO_TOPICS'	=> '這個版面還沒有主題或文章。',
	'NO_TOPICS_TIME_FRAME'	=> '在選定的時段中這個版面沒有主題存在。',
	'NO_UNREAD_PM'	=> '<strong>0</strong> 個未讀訊息',
       'NO_UNREAD_POSTS'         => '沒有未閱讀文章',
	'NO_UPLOAD_FORM_FOUND'	=> '上傳已經開始，但是沒有有效的上傳檔案表單。',
	'NO_USER'	=> '該會員不存在。',
	'NO_USERS'	=> '該會員不存在。',
	'NO_USER_SPECIFIED'	=> '沒有指定會員名稱。',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> '沒有文章待審',		// 0
		1			=> '1 篇文章待審',		// 1
		2			=> '%d 篇文章待審',		// 2+
	),

	'OCCUPATION'	=> '職業',
	'OFFLINE'	=> '離線',
	'ONLINE'	=> '線上',
	'ONLINE_BUDDIES'	=> '線上好友',
	'ONLINE_USERS_TOTAL'	=> '線上共有 <strong>%d</strong> 位使用者：',
	'ONLINE_USERS_ZERO_TOTAL'	=> '線上共有 <strong>0</strong> 位使用者：',
	'ONLINE_USER_TOTAL'	=> '線上共有 <strong>%d</strong> 位使用者：',
	'OPTIONS'	=> '選項',

	'PAGE_OF'	=> '第 <strong>%1$d</strong> 頁 (共 <strong>%2$d</strong> 頁)',
	'PASSWORD'	=> '密碼',
	'PIXEL'					=> '像素',
	'PLAY_QUICKTIME_FILE'	=> '播放 Quicktime 檔案',
	'PM'					=> 'PM',
	'PM_REPORTED'         => '點選以查看檢舉',
	'POSTING_MESSAGE'	=> '發表訊息於 %s',
	'POSTING_PRIVATE_MESSAGE'	=> '編寫私人訊息',
	'POST'	=> '文章',
	'POST_ANNOUNCEMENT'	=> '公告',
	'POST_STICKY'	=> '置頂',
	'POSTED'	=> '發表於 ',
	'POSTED_IN_FORUM'	=> '發表於',
	'POSTED_ON_DATE'	=> '發表於',
	'POSTS'	=> '文章',
	'POSTS_UNAPPROVED'	=> '這個主題裡至少有一篇文章未被核准。',
	'POST_BY_AUTHOR'	=> '由',
	'POST_BY_FOE'	=> '這篇文章由 <strong>%1$s</strong> 發表，此人目前在您的黑名單中。%2$s顯示這篇文章%3$s。',
	'POST_DAY'	=> '平均每天 %.2f 篇文章',
	'POST_DETAILS'	=> '文章細節',
	'POST_NEW_TOPIC'	=> '發表新文章',
	'POST_PCT'	=> '所有文章的 %.2f%%',
	'POST_PCT_ACTIVE'	=> '會員文章的 %.2f%%',
	'POST_PCT_ACTIVE_OWN'	=> '您的文章的 %.2f%%',
	'POST_REPLY'	=> '發表回覆',
	'POST_REPORTED'	=> '點選檢視檢舉內容',
	'POST_SUBJECT'	=> '文章主題 ',
	'POST_TIME'	=> '發表時間 ',
	'POST_TOPIC'	=> '發表新主題',
	'POST_UNAPPROVED'	=> '這篇文章正在等待審核',
	'POWERED_BY'			=> 'Powered by %s',
	'PREVIEW'	=> '預覽',
	'PREVIOUS'	=> '上一頁',
	'PREVIOUS_STEP'	=> '上一步',
	'PRIVACY'	=> '隱私政策',
	'PRIVATE_MESSAGE'	=> '私人訊息',
	'PRIVATE_MESSAGES'	=> '私人訊息',
	'PRIVATE_MESSAGING'	=> '私人訊息',
	'PROFILE'	=> '會員控制台 (UCP)',

	'RANK'						=> '等級',
	'READING_FORUM'	=> '正在檢視 %s 版面的主題',
	'READING_GLOBAL_ANNOUNCE'	=> '檢視全域公告',
	'READING_LINK'	=> '下面的版面連結 %s',
	'READING_TOPIC'	=> '正在閱讀 %s 版面的主題',
	'READ_PROFILE'	=> '個人資料',
	'REASON'	=> '理由',
	'RECORD_ONLINE_USERS'	=> '最高線上人數記錄為 <span style="color:#ff6633"><strong>%1$s</strong></span> 人 [ 記錄時間：<span style="color:#ff6633"><strong>%2$s</strong></span> ]',
	'REDIRECT'	=> '重新導向',
	'REDIRECTS'	=> '轉向總數',
	'REGISTER'	=> '註冊',
	'REGISTERED_USERS'	=> '註冊會員：',
	'REG_USERS_ONLINE'			=> '共有 %d 位註冊會員和 ',
	'REG_USERS_TOTAL'			=> '%d 位註冊會員、',
	'REG_USERS_TOTAL_AND'		=> '%d 位註冊會員和 ',
	'REG_USERS_ZERO_ONLINE'		=> '共有 0 位註冊會員和 ',
	'REG_USERS_ZERO_TOTAL'		=> '0 位註冊會員、',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 位註冊會員和 ',
	'REG_USER_ONLINE'			=> '共有 %d 位註冊會員和 ',
	'REG_USER_TOTAL'			=> '%d 位註冊會員、',
	'REG_USER_TOTAL_AND'		=> '%d 位註冊會員和 ',
	'REMOVE'	=> '刪除',
	'REMOVE_INSTALL'	=> '在開始使用討論區前請刪除，移除或重新命名 install 檔案夾。如果這個資料夾依然存在，那麼您只能使用管理員控制台 (ACP)。',
	'REPLIES'	=> '回覆',
	'REPLY_WITH_QUOTE'	=> '引用回覆',
	'REPLYING_GLOBAL_ANNOUNCE'	=> '回覆全域公告',
	'REPLYING_MESSAGE'	=> '回覆文章於 %s',
	'REPORT_BY'	=> '檢舉人',
	'REPORT_POST'	=> '檢舉此文章',
	'REPORTING_POST'	=> '檢舉文章',
	'RESEND_ACTIVATION'	=> '重寄啟用 e-mail',
	'RESET'	=> '重新設定',
	'RESTORE_PERMISSIONS'	=> '恢復權限',
	'RETURN_INDEX'	=> '%s回到首頁%s',
	'RETURN_FORUM'	=> '%s回到最近瀏覽的版面%s',
	'RETURN_PAGE'	=> '%s回到先前的頁面%s',
	'RETURN_TOPIC'	=> '%s回到最近瀏覽的主題%s',
	'RETURN_TO'	=> '回到',
	'FEED'						=> '消息來源',
	'FEED_NEWS'					=> '新聞',
	'FEED_TOPICS_ACTIVE'		=> '最近討論的主題',
	'FEED_TOPICS_NEW'			=> '新的主題',
	'RULES_ATTACH_CAN'	=> '您 <strong>可以</strong> 在這個版面上傳附加檔案',
	'RULES_ATTACH_CANNOT'	=> '您 <strong>不能</strong> 在這個版面上傳附加檔案',
	'RULES_DELETE_CAN'	=> '您 <strong>可以</strong> 在這個版面刪除您的文章',
	'RULES_DELETE_CANNOT'	=> '您 <strong>不能</strong> 在這個版面刪除您的文章',
	'RULES_DOWNLOAD_CAN'	=> '您 <strong>可以</strong> 在這個版面下載附加檔案',
	'RULES_DOWNLOAD_CANNOT'	=> '您 <strong>不能</strong> 在這個版面下載附加檔案',
	'RULES_EDIT_CAN'	=> '您 <strong>可以</strong> 在這個版面編輯您的文章',
	'RULES_EDIT_CANNOT'	=> '您 <strong>不能</strong> 在這個版面編輯您的文章',
	'RULES_LOCK_CAN'	=> '您 <strong>可以</strong> 在這個版面鎖定您的文章',
	'RULES_LOCK_CANNOT'	=> '您 <strong>不能</strong> 在這個版面鎖定您的文章',
	'RULES_POST_CAN'	=> '您 <strong>可以</strong> 在這個版面發表主題',
	'RULES_POST_CANNOT'	=> '您 <strong>不能</strong> 在這個版面發表主題',
	'RULES_REPLY_CAN'	=> '您 <strong>可以</strong> 在這個版面回覆主題',
	'RULES_REPLY_CANNOT'	=> '您 <strong>不能</strong> 在這個版面回覆主題',
	'RULES_VOTE_CAN'	=> '您 <strong>可以</strong> 在這個版面建立投票',
	'RULES_VOTE_CANNOT'	=> '您 <strong>不能</strong> 在這個版面建立投票',

	'SEARCH'	=> '搜尋',
	'SEARCH_MINI'	=> '搜尋...',
	'SEARCH_ADV'	=> '進階搜尋',
	'SEARCH_ADV_EXPLAIN'	=> '檢視進階搜尋選項',
	'SEARCH_KEYWORDS'	=> '搜尋關鍵字',
	'SEARCHING_FORUMS'	=> '搜尋版面',
	'SEARCH_ACTIVE_TOPICS'	=> '檢視最近討論的主題',
	'SEARCH_FOR'	=> '搜尋',
	'SEARCH_FORUM'	=> '搜尋這個版面...',
	'SEARCH_NEW'	=> '檢視新的文章',
	'SEARCH_POSTS_BY'	=> '搜尋文章，依照',
	'SEARCH_SELF'	=> '檢視您的文章',
	'SEARCH_TOPIC'	=> '搜尋這個主題...',
	'SEARCH_UNANSWERED'	=> '檢視沒有回覆的主題',
	'SEARCH_UNREAD'				=> '檢視沒有閱讀的文章',
	'SEARCH_USER_POSTS'			=> '搜尋會員的文章',
	'SECONDS'	=> '秒',
	'SELECT'	=> '選擇',
	'SELECT_ALL_CODE'	=> '選擇全部',
	'SELECT_DESTINATION_FORUM'	=> '請選擇一個目的版面',
	'SELECT_FORUM'	=> '選擇一個版面',
	'SEND_EMAIL'				=> 'E-mail',				// 作為送出按鈕
	'SEND_EMAIL_USER'			=> 'E-mail',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'	=> '發送私人訊息',
	'SETTINGS'	=> '設定',
	'SIGNATURE'	=> '簽名',
	'SKIP'	=> '跳到內容',
	'SMTP_NO_AUTH_SUPPORT'	=> 'SMTP 伺服器不支援驗證',
	'SORRY_AUTH_READ'	=> '您沒有閱讀這個版面的權限。',
	'SORRY_AUTH_VIEW_ATTACH'	=> '您沒有下載這個附加檔案的權限。',
	'SORT_BY'	=> '排序',
	'SORT_JOINED'	=> '註冊時間',
	'SORT_LOCATION'	=> '來自',
	'SORT_RANK'	=> '等級',
	'SORT_POSTS'				=> '文章',
	'SORT_TOPIC_TITLE'	=> '主題',
	'SORT_USERNAME'	=> '會員名稱',
	'SPLIT_TOPIC'	=> '分割主題',
	'SQL_ERROR_OCCURRED'	=> '當讀出此頁的時候發生一個 SQL 錯誤。如果問題一直存在，那麼請連絡 %s管理員%s。',
	'STATISTICS'	=> '統計資料',
	'START_WATCHING_FORUM'	=> '訂閱版面',
	'START_WATCHING_TOPIC'	=> '訂閱主題',
	'STOP_WATCHING_FORUM'	=> '退訂版面',
	'STOP_WATCHING_TOPIC'	=> '退訂主題',
	'SUBFORUM'	=> '子版面',
	'SUBFORUMS'	=> '子版面',
	'SUBJECT'	=> '主題',
	'SUBMIT'	=> '送出',

	'TERMS_USE'	=> '使用條款',
	'TEST_CONNECTION'	=> '連結測試',
	'THE_TEAM'	=> '管理團隊',
	'TIME'	=> '時間',
	
	'TOO_LARGE'                  => '您輸入的值太大。',
	'TOO_LARGE_MAX_RECIPIENTS'      => '這個 <strong>每個私人訊息所允許的最大收件人數</strong> 設定，您輸入的值太大。',

	'TOO_LONG'						=> '您輸入的數值太長。',

	'TOO_LONG_AIM'	=> '您輸入的 AIM 帳號太長了。',
	'TOO_LONG_CONFIRM_CODE'	=> '您輸入的確認代碼太長了。',
	'TOO_LONG_DATEFORMAT'			=> '您輸入的時間格式太長了。',
	'TOO_LONG_ICQ'	=> '您輸入的 ICQ 號碼太長了。',
	'TOO_LONG_INTERESTS'	=> '您輸入的興趣太長了。',
	'TOO_LONG_JABBER'	=> '您輸入的 Jabber 帳號名稱太長了。',
	'TOO_LONG_LOCATION'	=> '您輸入的來自太長了。',
	'TOO_LONG_MSN'	=> '您輸入的 MSNM/WLM 名稱太長了。',
	'TOO_LONG_NEW_PASSWORD'	=> '您輸入的密碼太長了。',
	'TOO_LONG_OCCUPATION'	=> '您輸入的職業太長了。',
	'TOO_LONG_PASSWORD_CONFIRM'	=> '您輸入的確認密碼太長了。',
	'TOO_LONG_USER_PASSWORD'	=> '您輸入的密碼太長了。',
	'TOO_LONG_USERNAME'	=> '您輸入的會員名稱太長了。',
	'TOO_LONG_EMAIL'	=> '您輸入的 e-mail 位址太長了。',
	'TOO_LONG_EMAIL_CONFIRM'	=> '您輸入的 e-mail 確認位址太長了。',
	'TOO_LONG_WEBSITE'	=> '您輸入的網站位址太長了。',
	'TOO_LONG_YIM'	=> '您輸入的 Yahoo！ Messenger 會員名稱太長了。',

	'TOO_MANY_VOTE_OPTIONS'	=> '您在投票中選擇了過多的選項。',

	'TOO_SHORT'						=> '您輸入的數值太短。',

	'TOO_SHORT_AIM'	=> '您輸入的 AIM 帳號太短了。',
	'TOO_SHORT_CONFIRM_CODE'	=> '您輸入的確認代碼太短了。',
	'TOO_SHORT_DATEFORMAT'			=> '您輸入的時間格式太短了。',
	'TOO_SHORT_ICQ'	=> '您輸入的 ICQ 號碼太短了。',
	'TOO_SHORT_INTERESTS'	=> '您輸入的興趣太短了。',
	'TOO_SHORT_JABBER'	=> '您輸入的 Jabber 帳號名稱太短了。',
	'TOO_SHORT_LOCATION'	=> '您輸入的來自太短了。',
	'TOO_SHORT_MSN'	=> '您輸入的 MSNM/WLM 名稱太短了。',
	'TOO_SHORT_NEW_PASSWORD'	=> '您輸入的密碼太短了。',
	'TOO_SHORT_OCCUPATION'	=> '您輸入的職業太短了。',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> '您輸入的確認密碼太短了。',
	'TOO_SHORT_USER_PASSWORD'	=> '您輸入的密碼太短了。',
	'TOO_SHORT_USERNAME'	=> '您輸入的會員名稱太短了。',
	'TOO_SHORT_EMAIL'	=> '您輸入的 e-mail 位址太短了。',
	'TOO_SHORT_EMAIL_CONFIRM'	=> '您輸入的確認 e-mail 位址太短了。',
	'TOO_SHORT_WEBSITE'	=> '您輸入的網站位址太短了。',
	'TOO_SHORT_YIM'	=> '您輸入的 Yahoo！ Messenger 會員名稱太短了。',
	
	'TOO_SMALL'                  => '您輸入的值太小。',
	'TOO_SMALL_MAX_RECIPIENTS'      => '這個 <strong>每個私人訊息所允許的最大收件人數</strong> 設定，您輸入的值太小。',

	'TOPIC'	=> '主題',
	'TOPICS'	=> '主題',
	'TOPICS_UNAPPROVED'	=> '在這論壇至少有一個主題沒有被核准。',
	'TOPIC_ICON'	=> '主題圖示',
	'TOPIC_LOCKED'	=> '這個主題已被鎖定，您不能編輯或回覆這個主題。',
	'TOPIC_LOCKED_SHORT'=> '主題已鎖定',
	'TOPIC_MOVED'	=> '移動主題',
	'TOPIC_REVIEW'	=> '主題瀏覽',
	'TOPIC_TITLE'	=> '標題',
	'TOPIC_UNAPPROVED'	=> '這個主題尚未被核准',
	'TOTAL_ATTACHMENTS'	=> '附加檔案',
	'TOTAL_LOG'	=> '1 個記錄',
	'TOTAL_LOGS'	=> '%d 個記錄',
	'TOTAL_NO_PM'	=> '總計 0 個私人訊息',
	'TOTAL_PM'	=> '總計 1 個私人訊息',
	'TOTAL_PMS'	=> '總計 %d 個私人訊息',
	'TOTAL_POSTS'	=> '文章總數',
	'TOTAL_POSTS_OTHER'	=> '文章總數：<strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> '文章總數：<strong>0</strong>',
	'TOPIC_REPORTED'	=> '這個主題已被檢舉',
	'TOTAL_TOPICS_OTHER'	=> '主題總數：<strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> '主題總數：<strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> '會員總數：<strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> '會員總數：<strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> '已追蹤 PHP 錯誤：%s',

	'UNABLE_GET_IMAGE_SIZE'	=> '無法瀏覽圖檔，或者此檔案不是一個有效的圖檔。',
	'UNABLE_TO_DELIVER_FILE'	=> '無法傳送檔案。',
	'UNKNOWN_BROWSER'	=> '無法瀏覽',
	'UNMARK_ALL'	=> '取消全選',
	'UNREAD_MESSAGES'	=> '未讀訊息',
	'UNREAD_PM'	=> '<strong>%d</strong> 個未讀訊息',
	'UNREAD_PMS'	=> '<strong>%d</strong> 個未讀訊息',
	'UNREAD_POST'         => '未閱讀文章',
	'UNREAD_POSTS'         => '未閱讀文章',
	'UNWATCH_FORUM_CONFIRM'		=> '您確定要取消訂閱這個版面嗎？',
	'UNWATCH_FORUM_DETAILED'	=> '您確定要取消訂閱「%s」版面嗎？',
	'UNWATCH_TOPIC_CONFIRM'		=> '您確定要取消訂閱這個主題嗎？',
	'UNWATCH_TOPIC_DETAILED'	=> '您確定要取消訂閱「%s」主題嗎？',
	'UNWATCHED_FORUMS'	=> '您將不再訂閱這些選取的版面。',
	'UNWATCHED_TOPICS'	=> '您將不再訂閱這些選取的主題。',
	'UNWATCHED_FORUMS_TOPICS'	=> '您將不再訂閱這些選取的文章。',
	'UPDATE'	=> '更新',
	'UPLOAD_IN_PROGRESS'	=> '正在上傳。',
	'URL_REDIRECT'	=> '如果您的瀏覽器不支援 meta 重新導向，那麼請點選 %s這裡%s 連結。',
	'USERGROUPS'	=> '會員群組',
	'USERNAME'	=> '會員名稱',
	'USERNAMES'	=> '會員名稱',
	'USER_AVATAR'	=> '頭像',
	'USER_CANNOT_READ'	=> '您不能閱讀這個版面的文章。',
	'USER_POST'	=> '%d 篇文章',
	'USER_POSTS'	=> '%d 篇文章',
	'USERS'	=> '會員',
	'USE_PERMISSIONS'	=> '切換成此會員的權限 (測試用)',

	'USER_NEW_PERMISSION_DISALLOWED'	=> '很抱歉！您沒有權限使用這個功能。您只是剛在這裡註冊，您需要有更多的參與，才可使用這個功能。',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',
	'VIEWED'	=> '已觀看',
	'VIEWING_FAQ'	=> '檢視問答集',
	'VIEWING_MEMBERS'	=> '檢視會員細節',
	'VIEWING_ONLINE'	=> '檢視誰在線上',
	'VIEWING_MCP'	=> '檢視版主控制台 (MCP)',
	'VIEWING_MEMBER_PROFILE'	=> '檢視會員個人資料',
	'VIEWING_PRIVATE_MESSAGES'	=> '檢視私人訊息',
	'VIEWING_REGISTER'	=> '正在註冊帳號',
	'VIEWING_UCP'	=> '檢視會員控制台 (UCP)',
	'VIEWS'	=> '觀看',
	'VIEW_BOOKMARKS'	=> '檢視我的最愛',
	'VIEW_FORUM_LOGS'	=> '檢視記錄',
	'VIEW_LATEST_POST'	=> '檢視最後發表',
	'VIEW_NEWEST_POST'	=> '檢視第一篇未讀文章',
	'VIEW_NOTES'	=> '檢視會員記錄',
	'VIEW_ONLINE_TIME'	=> '這些資料是根據過去 %d 分鐘內使用者的活動記錄',
	'VIEW_ONLINE_TIMES'	=> '這些資料是根據過去 %d 分鐘內使用者的活動記錄',
	'VIEW_TOPIC'	=> '檢視主題',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> '公告：',
	'VIEW_TOPIC_GLOBAL'	=> '全域公告：',
	'VIEW_TOPIC_LOCKED'	=> '已鎖定：',
	'VIEW_TOPIC_LOGS'	=> '檢視記錄',
	'VIEW_TOPIC_MOVED'	=> '已移動：',
	'VIEW_TOPIC_POLL'	=> '投票：',
	'VIEW_TOPIC_STICKY'	=> '置頂：',
	'VISIT_WEBSITE'	=> '參觀網站',

	'WARNINGS'	=> '警告',
	'WARN_USER'	=> '警告會員',
	'WATCH_FORUM_CONFIRM'	=> '您確定要訂閱這個版面嗎？',
	'WATCH_FORUM_DETAILED'	=> '您確定要訂閱「%s」版面嗎？',
	'WATCH_TOPIC_CONFIRM'	=> '您確定要訂閱這個主題嗎？',
	'WATCH_TOPIC_DETAILED'	=> '您確定要訂閱「%s」主題嗎？',
	'WELCOME_SUBJECT'	=> '歡迎來到 %s 討論區',
	'WEBSITE'	=> '網站',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'	=> '誰在線上',
	'WRONG_PASSWORD'	=> '您輸入了錯誤的密碼。',

	'WRONG_DATA_ICQ'	=> '您輸入的數字不是一個有效的 ICQ 號碼。',
	'WRONG_DATA_JABBER'	=> '您輸入的名字不是一個有效的 Jabber 帳號。',
	'WRONG_DATA_LANG'	=> '您指定了一個無效的語言。',
	'WRONG_DATA_WEBSITE'	=> '網站的位址是無效的 URL，請包含通信協議。例如 http://www.bamboocat.com/。',
	'WROTE'	=> '寫',

	'YEAR'	=> '年',
	'YEAR_MONTH_DAY'	=> '(YYYY-MM-DD)',
	'YES'	=> '是',
	'YIM'				=> 'YIM',
	'YOU_LAST_VISIT'	=> '最後訪問是 %s',
	'YOU_NEW_PM'	=> '您的收件夾中有一個新訊息。',
	'YOU_NEW_PMS'	=> '您的收件夾中有多個新訊息。',
	'YOU_NO_NEW_PM'	=> '您的收件夾中沒有新的訊息。',

	'datetime'			=> array(
		'TODAY'	=> '今天',
		'TOMORROW'	=> '明天',
		'YESTERDAY'	=> '昨天',
		'AGO'		=> array(
			0		=> '少於 1 分鐘以前',
			1		=> '%d 分鐘以前',
			2		=> '%d 分鐘以前',
			60		=> '1 個小時以前',
		),

		'Sunday'	=> '星期天',
		'Monday'	=> '星期一',
		'Tuesday'	=> '星期二',
		'Wednesday'	=> '星期三',
		'Thursday'	=> '星期四',
		'Friday'	=> '星期五',
		'Saturday'	=> '星期六',

		'Sun'	=> '週日',
		'Mon'	=> '週一',
		'Tue'	=> '週二',
		'Wed'	=> '週三',
		'Thu'	=> '週四',
		'Fri'	=> '週五',
		'Sat'	=> '週六',

		'January'	=> '一月',
		'February'	=> '二月',
		'March'	=> '三月',
		'April'	=> '四月',
		'May'	=> '五月',
		'June'	=> '六月',
		'July'	=> '七月',
		'August'	=> '八月',
		'September'	=> '九月',
		'October'	=> '十月',
		'November'	=> '十一月',
		'December'	=> '十二月',

		'Jan'	=> '1月',
		'Feb'	=> '2月',
		'Mar'	=> '3月',
		'Apr'	=> '4月',
		'May_short'	=> '5月',
		'Jun'	=> '6月',
		'Jul'	=> '7月',
		'Aug'	=> '8月',
		'Sep'	=> '9月',
		'Oct'	=> '10月',
		'Nov'	=> '11月',
		'Dec'	=> '12月',
	),

	'tz'				=> array(
		'-12'	=> 'UTC - 12 小時',
		'-11'	=> 'UTC - 11 小時',
		'-10'	=> 'UTC - 10 小時',
		'-9.5'	=> 'UTC - 9:30 小時',
		'-9'	=> 'UTC - 9 小時',
		'-8'	=> 'UTC - 8 小時',
		'-7'	=> 'UTC - 7 小時',
		'-6'	=> 'UTC - 6 小時',
		'-5'	=> 'UTC - 5 小時',
		'-4.5'	=> 'UTC - 4:30 小時',
		'-4'	=> 'UTC - 4 小時',
		'-3.5'	=> 'UTC - 3:30 小時',
		'-3'	=> 'UTC - 3 小時',
		'-2'	=> 'UTC - 2 小時',
		'-1'	=> 'UTC - 1 小時',
		'0'		=> 'UTC',
		'1'	=> 'UTC + 1 小時',
		'2'	=> 'UTC + 2 小時',
		'3'	=> 'UTC + 3 小時',
		'3.5'	=> 'UTC + 3:30 小時',
		'4'	=> 'UTC + 4 小時',
		'4.5'	=> 'UTC + 4:30 小時',
		'5'	=> 'UTC + 5 小時',
		'5.5'	=> 'UTC + 5:30 小時',
		'5.75'	=> 'UTC + 5:45 小時',
		'6'	=> 'UTC + 6 小時',
		'6.5'	=> 'UTC + 6:30 小時',
		'7'	=> 'UTC + 7 小時',
		'8'	=> 'UTC + 8 小時',
		'8.75'	=> 'UTC + 8:45 小時',
		'9'	=> 'UTC + 9 小時',
		'9.5'	=> 'UTC + 9:30 小時',
		'10'	=> 'UTC + 10 小時',
		'10.5'	=> 'UTC + 10:30 小時',
		'11'	=> 'UTC + 11 小時',
		'11.5'	=> 'UTC + 11:30 小時',
		'12'	=> 'UTC + 12 小時',
		'12.75'	=> 'UTC + 12:45 小時',
		'13'	=> 'UTC + 13 小時',
		'14'	=> 'UTC + 14 小時',
		'dst'	=> '[ <abbr title="日光節約時間">DST</abbr> ]',
	),

	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] 貝克島時間',
		'-11'	=> '[UTC - 11] 紐埃島、薩摩亞群島標準時間',
		'-10'	=> '[UTC - 10] 夏威夷-阿留申、庫克島的時間',
		'-9.5'	=> '[UTC - 9:30] 馬克薩斯群島時間',
		'-9'	=> '[UTC - 9] 阿拉斯加、甘島時間',
		'-8'	=> '[UTC - 8] 太平洋標準時間',
		'-7'	=> '[UTC - 7] 山區標準時間',
		'-6'	=> '[UTC - 6] 美國中部標準時間',
		'-5'	=> '[UTC - 5] 美國東部標準時間',
		'-4.5'	=> '[UTC - 4:30] 委內瑞拉標準時間',
		'-4'	=> '[UTC - 4] 大西洋標準時間',
		'-3.5'	=> '[UTC - 3:30] 紐芬蘭標準時間',
		'-3'	=> '[UTC - 3] 亞馬遜、中部格陵蘭時間',
		'-2'	=> '[UTC - 2] 費爾南多、南喬治亞島和南桑威奇島的時間',
		'-1'	=> '[UTC - 1] 亞述爾群島、維德角、格陵蘭東部時間',
		'0'	=> '[UTC] 歐洲西部、格林威治標準時間',
		'1'	=> '[UTC + 1] 歐洲中部、非洲西部時間',
		'2'	=> '[UTC + 2] 歐洲東部、非洲中部時間',
		'3'	=> '[UTC + 3] 莫斯科、非洲東部時間',
		'3.5'	=> '[UTC + 3:30] 伊朗標準時間',
		'4'	=> '[UTC + 4] 海灣、波斯灣、薩馬拉標準時間',
		'4.5'	=> '[UTC + 4:30] 阿富汗時間',
		'5'	=> '[UTC + 5] 巴基斯坦、葉卡捷琳堡標準時間',
		'5.5'	=> '[UTC + 5:30] 印度、斯里蘭卡時間',
		'5.75'	=> '[UTC + 5:45] 尼泊爾時間',
		'6'	=> '[UTC + 6] 孟加拉、不丹、新西伯利亞標準時間',
		'6.5'	=> '[UTC + 6:30] 可可斯群島、緬甸時間',
		'7'	=> '[UTC + 7] 印度支那、克拉斯諾亞爾斯克標準時間',
		'8'	=> '[UTC + 8] 台灣、中國、澳洲西部、伊爾庫次克標準時間',
		'8.75'	=> '[UTC + 8:45] 澳洲西部東南標準時間',
		'9'	=> '[UTC + 9] 日本、南韓、赤塔標準時間',
		'9.5'	=> '[UTC + 9:30] 澳洲中部標準時間',
		'10'	=> '[UTC + 10] 澳洲東部、海參崴標準時間',
		'10.5'	=> '[UTC + 10:30] 賀維標準時間',
		'11'	=> '[UTC + 11] 索羅門群島、馬加丹標準時間',
		'11.5'	=> '[UTC + 11:30] 諾福克群島時間',
		'12'	=> '[UTC + 12] 紐西蘭、斐濟、堪察加半島標準時間',
		'12.75'	=> '[UTC + 12:45] 查塔姆群島時間',
		'13'	=> '[UTC + 13] 湯加、菲尼克斯群島時間',
		'14'	=> '[UTC + 14] 路線島時間',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'j日 M Y年, H:i'			=> '1日 1月 2007年, 13:37',
		'Y-m-d, H:i'				=> '2007-01-01, 13:37',
		'M 第j天, \'y年, H:i'		=> '1月 第1天, \'07年, 13:37',
		'D M j日, Y年 g:i a'		=> '週一 1月 1日, 2007年 1:37 pm',
		'F 第j天, Y年, g:i a'		=> '一月 第j天, 2007年, 1:37 pm',
		'|j日 M Y年|, H:i'			=> '今天, 13:37 / 1日 1月 2007年, 13:37',
		'|F 第j天, Y年|, g:i a'		=> '今天, 1:37 pm / 一月 第j天, 2007年, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'Y年 M j日, H:i', // 2007年 1月 1日, 13:37

));

?>