<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Macedonian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Акции',
		'content'		=> 'Содржина',
		'forums'		=> 'Форуми',
		'misc'			=> 'Подметнувања',
		'permissions'	=> 'Дозволи',
		'pm'			=> 'Приватни пораки',
		'polls'			=> 'Анкети',
		'post'			=> 'Мислења',
		'post_actions'	=> 'Акции за постирање',
		'posting'		=> 'Постирање',
		'profile'		=> 'Профил',
		'settings'		=> 'Опции',
		'topic_actions'	=> 'Акција за теми',
		'user_group'	=> 'Членови &amp; Групи',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Членски дозволи',
		'a_'			=> 'Админ дозволи',
		'm_'			=> 'Модераторски дозволи',
		'f_'			=> 'Форум дозволи',
		'global'		=> array(
			'm_'			=> 'Глобални модераторски дозволи',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Може да ги види профилите, членската листа и онлајн листата', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Може да го промени членското име', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Може да ја промени лозинката', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Може да ја промени мејл адресата', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Може да го промени аватарот', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Може да ја промени основната група', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Може да прикачува фајлови', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Може да симнува фајлови', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Може да сочувува недовршени работи/нацрти', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Може да го оневозможи цензурирањето на зборови', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Може да користи потпис', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Може да праќа приватни пораки', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Може да праќа приватни пораки на неколку членови одеднаш', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Може да праќа приватни пораки на групи', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Може да ги чита приваните пораки', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Може да ги измени своите приватни пораки', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Може да ги одстрани своите приватни пораки од фолдерот', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Може да препраќа приватни пораки', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Може да ги праќа приватните пораки на мејл', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Може да ги принта приватните пораки', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Може да прикачува фајлови во приватните пораки', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Може да ги симнува фајловите во приватните пораки', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Може да користи ББкод во приватни пораки', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Може да косристи смајлиња во приватните пораки', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Може да го користи [img] ББкод во приватните пораки', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Може да го користи [flash] ББкод во приватните пораки', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Може да праќа мејлови', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Може да праќа инстант пораки', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Може да го игнорира чекањето', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Може да го крие онлајн статусот', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Може да ги види членовите кои го сокриле онлајн статусот', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Може да го пребарува форумот', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Може да го види форумот', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Може да го чита форумот', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Може да отвара нови теми', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Може да остава мислење во веќе постоечките теми', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Може да ги користи иконките за тема/мислење', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'може да постира известувања', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Може да постира важни теми', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Може да креира анкети', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Може да гласа во анкетите', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Може да го смени гласот во анкетите', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Може да прикачува фајлови', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Може да симнува фајлови', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Може да користи потпис', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Може да користи ББкод', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Може да користи смајлиња', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Можe да го користи [img] ББкодот', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Можe да го користи [flash] ББкодот', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Можe да ги изменува своите мислења', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Можe да ги брише своите мислења', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Можe да ги затвора своите теми', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Можe да потсети на теми', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Можe да ги пријавува мислењата', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Можe да ги претплати на форум', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Можe да ги принта темите', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Можe да ги прати на мејл темите', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Може да го пребарува форумот', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Може да го игнорира времето на чекање', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Бројач за зголемување на мислења<br /><em>Запамтете дека ова подесување има ефект само на новите теми/мислења.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Може да постира без одобрување', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Може да ги изменува мислењата', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Може да ги брише мислењата', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Може да одобрува мислења', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Може да ги затвора и брише пријавувањата', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Може да го промени авторот на тема/мислење', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Може да премести теми', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Може да затвори теми', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Може да ги подели темите', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Може да спојува теми/мислења', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Може да ги види деталите за мислењето', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Може да дава предупредувања<br /><em>Ова подесување е базирано глобално. Не е базирано на форумот.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Може да ги менаџира банирањата<br /><em>ва подесување е базирано глобално. Не е базирано на форумот.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Може да ги менува опциите на форумот да проверува надоградба', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Може да менува опции за комуникација', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Моќе да ги менува Jabber опциите', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Може да ги види ПХП опциите', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Може да ги менаџира форумите', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Може да додава нови форуми', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Може да ги брише форумите', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Може да ги скројува форумите', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Може да ги менува иконките и смајлињата', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Моќе да ги менува цензурирањата на зборови', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Може да одредува ББкодови', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Може да ги менува опциите за прикачување', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Може да ги менаџира членовите<br /><em>Ова исто го вклучува и гледање на прелистувачот кој го користат членовите во Кој е онлајн.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Може да скројува/брише членови', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Мое да менаџира групи', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Може да додава групи', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Може да брише групи', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Може да ги менаџира ранговите', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Може да ги менаџира вообичаените профил полиња', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Може да ги менаџира недозволените членски имиња', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Може да ги менаџира банирањата', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Може да ги види маските на дозволи', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Може да ги менува дозволите за поедини групи', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Моќе да ги менува дозволите за поедини членови', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Може да ги менува дозволите за форумот', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Може да ги менува дозволите за модератор', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Може да ги менува дозволите за администратор', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Може да ги менува дозволите за членови', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Може да ги менаџира дозволите', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Може да користи дозволи од другите', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Може да ги менаџира стајловите', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Може да види логирања', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Може да ги исчисти логирањата', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Може да ги менаџира модулите', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Може да ги менаџира јазичните пакети', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Може да праќа групни мејлови', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Може да ги менаџира ботовите', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Може да ги менаџира причините за пријавување', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Може да прави бекап и враќање на датабазата', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Може да ги менаџира позадинските пребарувања и опции', 'cat' => 'misc'),
));

?>