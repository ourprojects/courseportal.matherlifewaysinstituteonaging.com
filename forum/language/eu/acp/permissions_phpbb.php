<?php
/**
*
* 
*
* acp_permissions_phpbb.php [Basque [eu]]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License 2.0
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
		'actions'		=> 'Eragiketak',
		'content'		=> 'Edukia',
		'forums'		=> 'Foroak',
		'misc'			=> 'Zenbait',
		'permissions'	=> 'Baimenak',
		'pm'			=> 'Mezu pribatuak',
		'polls'			=> 'Inkestak',
		'post'			=> 'Mezua',
		'post_actions'	=> 'Mezu eragiketak',
		'posting'		=> 'Bidali',
		'profile'		=> 'Profila',
		'settings'		=> 'Ezarpenak',
		'topic_actions'	=> 'Gai eragiketak',
		'user_group'	=> 'Erabiltzaileak eta Taldeak',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Erabiltzaile baimenak',
		'a_'			=> 'Admin baimenak',
		'm_'			=> 'Moderadore baimenak',
		'f_'			=> 'Foro baimenak',
		'global'		=> array(
			'm_'		=> 'Moderadore orokorraren baimenak',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang'	=> 'Profilak, kide zerrenda eta konektaturik daudenen zerrenda ikus ditzake','cat'	=> 'profile'),
	'acl_u_chgname'		=> array('lang'	=> 'Erabiltzaile izena alda dezake','cat'	=> 'profile'),
	'acl_u_chgpasswd'	=> array('lang'	=> 'Pasahitza alda dezake','cat'	=> 'profile'),
	'acl_u_chgemail'	=> array('lang'	=> 'Email helbidea alda dezake','cat'	=> 'profile'),
	'acl_u_chgavatar'	=> array('lang'	=> 'Irudia alda dezake','cat'	=> 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Lehenetsitako erabiltzaile taldez alda dezake', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang'	=> 'Fitxategi erantsiak bidali ditzake','cat'	=> 'post'),
	'acl_u_download'	=> array('lang'	=> 'Fitxategiak deskarga ditzake','cat'	=> 'post'),
	'acl_u_savedrafts'	=> array('lang'	=> 'Zirriborroak gorde ditzake','cat'	=> 'post'),
	'acl_u_chgcensors'	=> array('lang'	=> 'Hitz-zentsura ezgaitu dezake','cat'	=> 'post'),
	'acl_u_sig'			=> array('lang'	=> 'Sinadura erabili dezake','cat'	=> 'post'),

	'acl_u_sendpm'		=> array('lang'	=> 'Mezu pribatuak bidali ditzake','cat'	=> 'pm'),
	'acl_u_masspm'		=> array('lang'	=> 'Hainbat erabiltzaileri bidali diezazkioke mezu pribatuak.','cat'	=> 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Taldeei bidali diezaizkieke mezu pribatuak', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang'	=> 'Mezu pribatuak irakurri ditzake','cat'	=> 'pm'),
	'acl_u_pm_edit'		=> array('lang'	=> 'Bere mezu pribatuak aldatu ditzake','cat'	=> 'pm'),
	'acl_u_pm_delete'	=> array('lang'	=> 'Mezu pribatuak ezabatu ditzake bere karpetan','cat'	=> 'pm'),
	'acl_u_pm_forward'	=> array('lang'	=> 'Mezu pribatuak berbidali ditzake','cat'	=> 'pm'),
	'acl_u_pm_emailpm'	=> array('lang'	=> 'Mezu pribatuak bidali ditzake korreo elektronikotik','cat'	=> 'pm'),
	'acl_u_pm_printpm'	=> array('lang'	=> 'Mezu pribatuak inprimatu ditzake','cat'	=> 'pm'),
	'acl_u_pm_attach'	=> array('lang'	=> 'Fitxategi erantsiak bidali ditzake mezu pribatuetan','cat'	=> 'pm'),
	'acl_u_pm_download'	=> array('lang'	=> 'Mezu pribatuetako fitxategiak deskargatu ditzake','cat'	=> 'pm'),
	'acl_u_pm_bbcode'	=> array('lang'	=> 'BBCode erabili dezake mezu pribatuetan','cat'	=> 'pm'),
	'acl_u_pm_smilies'	=> array('lang'	=> 'Irrifartxoak (emotikonoak) erabili ditzake mezu pribatuetan','cat'	=> 'pm'),
	'acl_u_pm_img'		=> array('lang'	=> 'Irudiak txertatu ditzake mezu pribatuetan','cat'	=> 'pm'),
	'acl_u_pm_flash'	=> array('lang'	=> 'Flash erabili dezake mezu pribatuetan','cat'	=> 'pm'),

	'acl_u_sendemail'	=> array('lang'	=> 'E-mailak bidali ditzake','cat'	=> 'misc'),
	'acl_u_sendim'		=> array('lang'	=> 'Berehalako mezuak bidali ditzake','cat'	=> 'misc'),
	'acl_u_ignoreflood'	=> array('lang'	=> 'Gehienezko mezu muga baztertu dezake','cat'	=> 'misc'),
	'acl_u_hideonline'	=> array('lang'	=> 'Konexio-egoera ezkutatu dezake','cat'	=> 'misc'),
	'acl_u_viewonline'	=> array('lang'	=> 'Konektaturik daudenak ikus dezake','cat'	=> 'misc'),
	'acl_u_search'		=> array('lang'	=> 'Bilaketak egin ditzake','cat'	=> 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'	=> array('lang'	=> 'Foroak ikusi ditzake','cat'	=> 'post'),
	'acl_f_read'	=> array('lang'	=> 'Foroak irakurri ditzake','cat'	=> 'post'),
	'acl_f_post'	=> array('lang'	=> 'Gai berriak hasi ditzake','cat'	=> 'post'),
	'acl_f_reply'	=> array('lang'	=> 'Gaiak erantzun ditzake','cat'	=> 'post'),
	'acl_f_icons'	=> array('lang'	=> 'Irrifartxoak txertatu ditzake mezuetan','cat'	=> 'post'),
	'acl_f_announce'	=> array('lang'	=> 'Iragarkiak bidali ditzake','cat'	=> 'post'),
	'acl_f_sticky'	=> array('lang'	=> 'Itsaskorrak bidali ditzake','cat'	=> 'post'),

	'acl_f_poll'	=> array('lang'	=> 'Inkestak egin ditzake','cat'	=> 'polls'),
	'acl_f_vote'	=> array('lang'	=> 'Inkestetan bozkatu dezake','cat'	=> 'polls'),
	'acl_f_votechg'	=> array('lang'	=> 'Emandako bozka aldatu dezake','cat'	=> 'polls'),

	'acl_f_attach'	=> array('lang'	=> 'Fitxategi erantsiak bidali ditzake','cat'	=> 'content'),
	'acl_f_download'	=> array('lang'	=> 'Fitxategiak deskargatu ditzake','cat'	=> 'content'),
	'acl_f_sigs'	=> array('lang'	=> 'Sinadurak erabili ditzake','cat'	=> 'content'),
	'acl_f_bbcode'	=> array('lang'	=> 'BBCode erabili dezake','cat'	=> 'content'),
	'acl_f_smilies'	=> array('lang'	=> 'Irrifartxoak (emotikonoak) erabili ditzake','cat'	=> 'content'),
	'acl_f_img'	=> array('lang'	=> 'Irudiak bidali ditzake','cat'	=> 'content'),
	'acl_f_flash'	=> array('lang'	=> 'Flash erabili dezake','cat'	=> 'content'),

	'acl_f_edit'	=> array('lang'	=> 'Bere mezuak aldatu ditzake','cat'	=> 'actions'),
	'acl_f_delete'	=> array('lang'	=> 'Bere mezuak ezabatu ditzake','cat'	=> 'actions'),
	'acl_f_user_lock'	=> array('lang'	=> 'Bere mezuak itxi ditzake','cat'	=> 'actions'),
	'acl_f_bump'	=> array('lang'	=> 'Gaiak sustatu ditzake','cat'	=> 'actions'),
	'acl_f_report'	=> array('lang'	=> 'Mezuen berri eman dezake','cat'	=> 'actions'),
	'acl_f_subscribe'	=> array('lang'	=> 'Foroetara harpidetu daiteke','cat'	=> 'actions'),
	'acl_f_print'	=> array('lang'	=> 'Gaiak inprima ditzake','cat'	=> 'actions'),
	'acl_f_email'	=> array('lang'	=> 'Gaiak e-mail bitartez bidali ditzake','cat'	=> 'actions'),

	'acl_f_search'	=> array('lang'	=> 'Foroan bilatu dezake','cat'	=> 'misc'),
	'acl_f_ignoreflood'	=> array('lang'	=> 'Gehienezko mezu muga baztertu dezake','cat'	=> 'misc'),
	'acl_f_postcount'	=> array('lang'	=> 'Mezu kontua handitu<br /><em>Mesedez, kontuan izan ezarpen honek mezu berrietan baino ez duela eraginik.</em>','cat'	=> 'misc'),
	'acl_f_noapprove'	=> array('lang'	=> 'Ez du onarpenik behar mezuak bidaltzeko','cat'	=> 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'	=> array('lang'	=> 'Mezuak aldatu ditzake','cat'	=> 'post_actions'),
	'acl_m_delete'	=> array('lang'	=> 'Mezuak ezabatu ditzake','cat'	=> 'post_actions'),
	'acl_m_approve'	=> array('lang'	=> 'Mezuak onartu ditzake','cat'	=> 'post_actions'),
	'acl_m_report'	=> array('lang'	=> 'Berri-emateak itxi eta ezabatu ditzake','cat'	=> 'post_actions'),
	'acl_m_chgposter'	=> array('lang'	=> 'Mezuetako egilea aldatu dezake','cat'	=> 'post_actions'),

	'acl_m_move'	=> array('lang'	=> 'Gaiak mugitu ditzake','cat'	=> 'topic_actions'),
	'acl_m_lock'	=> array('lang'	=> 'Gaiak itxi ditzake','cat'	=> 'topic_actions'),
	'acl_m_split'	=> array('lang'	=> 'Gaiak zatitu ditzake','cat'	=> 'topic_actions'),
	'acl_m_merge'	=> array('lang'	=> 'Gaiak banatu ditzake','cat'	=> 'topic_actions'),

	'acl_m_info'	=> array('lang'	=> 'Mezu xehetasunak ikusi ditzake','cat'	=> 'misc'),
	'acl_m_warn'	=> array('lang'	=> 'Ohartarazpenak egin ditzake','cat'	=> 'misc'),// This moderator setting is only global (and not local)
	'acl_m_ban'	=> array('lang'	=> 'Debekuak kudeatu ditzake','cat'	=> 'misc'),// This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'	=> array('lang'	=> 'Foroaren ezarpenak aldatu ditzake/eguneraketak bilatu','cat'	=> 'settings'),
	'acl_a_server'	=> array('lang'	=> 'Zerbitzariaren/komunikazioaren ezarpenak aldatu ditzake','cat'	=> 'settings'),
	'acl_a_jabber'	=> array('lang'	=> 'Jabber ezarpenak aldatu ditzake','cat'	=> 'settings'),
	'acl_a_phpinfo'	=> array('lang'	=> 'PHP konfigurazioa ikusi dezake','cat'	=> 'settings'),

	'acl_a_forum'	=> array('lang'	=> 'Foroak kudeatu ditzake','cat'	=> 'forums'),
	'acl_a_forumadd'	=> array('lang'	=> 'Foro berriak gehitu ditzake','cat'	=> 'forums'),
	'acl_a_forumdel'	=> array('lang'	=> 'Foroak ezabatu ditzake','cat'	=> 'forums'),
	'acl_a_prune'	=> array('lang'	=> 'Foroak garbitu ditzake','cat'	=> 'forums'),

	'acl_a_icons'	=> array('lang'	=> 'Gai ikonoak eta irrifartxoak (emotikonoak) aldatu ditzake','cat'	=> 'posting'),
	'acl_a_words'	=> array('lang'	=> 'Zentsuratutako hitzak aldatu ditzake','cat'	=> 'posting'),
	'acl_a_bbcode'	=> array('lang'	=> 'BBCode markak zehaztu ditzake','cat'	=> 'posting'),
	'acl_a_attach'	=> array('lang'	=> 'Fitxategi erantsiei dagozkien parametroak aldatu ditzake','cat'	=> 'posting'),

	'acl_a_user'	=> array('lang'	=> 'Erabiltzaileak kudeatu ditzake','cat'	=> 'user_group'),
	'acl_a_userdel'	=> array('lang'	=> 'Erabiltzaileak ezabatu/garbitu ditzake','cat'	=> 'user_group'),
	'acl_a_group'	=> array('lang'	=> 'Taldeak kudeatu ditzake','cat'	=> 'user_group'),
	'acl_a_groupadd'	=> array('lang'	=> 'Talde berriak gehitu ditzake','cat'	=> 'user_group'),
	'acl_a_groupdel'	=> array('lang'	=> 'Taldeak ezabatu ditzake','cat'	=> 'user_group'),
	'acl_a_ranks'	=> array('lang'	=> 'Mailak kudeatu ditzake','cat'	=> 'user_group'),
	'acl_a_profile'	=> array('lang'	=> 'Pertsonalizatutako profil eremuak kudeatu ditzake','cat'	=> 'user_group'),
	'acl_a_names'	=> array('lang'	=> 'Onartu gabeko izenak kudeatu ditzake','cat'	=> 'user_group'),
	'acl_a_ban'	=> array('lang'	=> 'Debekuak kudeatu ditzake','cat'	=> 'user_group'),

	'acl_a_viewauth'	=> array('lang'	=> 'Baimen maskarak ikusi ditzake','cat'	=> 'permissions'),
	'acl_a_authgroups'	=> array('lang'	=> 'Banakako taldeen baimenak aldatu ditzake','cat'	=> 'permissions'),
	'acl_a_authusers'	=> array('lang'	=> 'Erabiltzaile baimenak aldatu ditzake','cat'	=> 'permissions'),
	'acl_a_fauth'	=> array('lang'	=> 'Foro baimen motak aldatu ditzake','cat'	=> 'permissions'),
	'acl_a_mauth'	=> array('lang'	=> 'Moderadore baimen motak aldatu ditzake','cat'	=> 'permissions'),
	'acl_a_aauth'	=> array('lang'	=> 'Admin baimen motak aldatu ditzake','cat'	=> 'permissions'),
	'acl_a_uauth'	=> array('lang'	=> 'Erabiltzaile baimen motak aldatu ditzake','cat'	=> 'permissions'),
	'acl_a_roles'	=> array('lang'	=> 'Eginkizunak (rolak) kudeatu ditzake','cat'	=> 'permissions'),
	'acl_a_switchperm'	=> array('lang'	=> 'Beste baimen batzuk erabili ditzake','cat'	=> 'permissions'),
	
	'acl_a_styles'	=> array('lang'	=> 'Estiloak kudeatu ditzake','cat'	=> 'misc'),
	'acl_a_viewlogs'	=> array('lang'	=> 'Izen-emateak ikusi ditzake','cat'	=> 'misc'),
	'acl_a_clearlogs'	=> array('lang'	=> 'Izen-emateak garbitu ditzake','cat'	=> 'misc'),'acl_a_modules'	=> array('lang'	=> '','cat'	=> 'misc'),
	'acl_a_modules'		=> array('lang' => 'Moduluak kudeatu ditzake', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang'	=> 'Hizkuntza paketeak kudeatu ditzake','cat'	=> 'misc'),
	'acl_a_email'	=> array('lang'	=> 'E-mail masiboak bialdu ditzake','cat'	=> 'misc'),
	'acl_a_bots'	=> array('lang'	=> 'Botak (errobotak) kudeatu ditzake','cat'	=> 'misc'),
	'acl_a_reasons'	=> array('lang'	=> 'Berri-emateen/Ezetzen arrazoiak kudeatu ditzake','cat'	=> 'misc'),
	'acl_a_backup'	=> array('lang'	=> 'Datubasea backup/berrezarri dezake','cat'	=> 'misc'),
	'acl_a_search'	=> array('lang'	=> 'Bilaketa motoreak eta ezarpenak kudeatu ditzake','cat'	=> 'misc'),
));

?>