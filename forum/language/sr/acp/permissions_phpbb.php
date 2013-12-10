<?php
/** 
* acp_permissions (phpBB Permission Set) [Serbian]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.17 2006/10/30 19:51:56 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*/

/**
* DO NOT CHANGE
*/
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
*	You are able to put your permission sets into a seperate file too by
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
		'actions'		=> 'Akcije',
		'content'		=> 'Sadržaj',
		'forums'		=> 'Forumi',
		'misc'			=> 'Razno',
		'permissions'	=> 'Dozvole',
		'pm'			=> 'Privatne poruke',
		'polls'			=> 'Glasanja',
		'post'			=> 'Post',
		'post_actions'	=> 'Akcije postova',
		'posting'		=> 'Postovanje',
		'profile'		=> 'Profil',
		'settings'		=> 'Podešavanja',
		'topic_actions'	=> 'Akcije tema',
		'user_group'	=> 'Korisnici &amp; Grupe',
	),

// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Dozvole korisnika',
		'a_'			=> 'Dozvole administratora',
		'm_'			=> 'Dozvole moderatora',
		'f_'			=> 'Dozvole foruma',
		'global'		=> array(
			'm_'			=> 'Global moderator permissions',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Može gledati profile', 'cat' => 'profili'),
	'acl_u_chgname'		=> array('lang' => 'Može promeniti korisničko ime', 'cat' => 'profili'),
	'acl_u_chgpasswd'	=> array('lang' => 'Pože promeniti šifru', 'cat' => 'profili'),
	'acl_u_chgemail'	=> array('lang' => 'Može promeniti email adresu', 'cat' => 'profili'),
	'acl_u_chgavatar'	=> array('lang' => 'Može promeniti avatar', 'cat' => 'profili'),
	'acl_u_chggrp'		=> array('lang' => 'Može promeniti podrazumevanu korisničku grupu', 'cat' => 'profili'),

	'acl_u_attach'		=> array('lang' => 'Može prikačiti fajlove', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Može preuzimati fajlove', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Može snimiti beleške', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Može isključiti cenzurisane reči', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Može koristiti potpise', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Može slati privatne poruke', 'cat' => 'pp'),
	'acl_u_masspm'		=> array('lang' => 'Može slati privatne poruke za više korisnika ili grupa', 'cat' => 'pp'),
	'acl_u_masspm_group'=> array('lang' => 'Može slati poruke grupama', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Može da čita privatne poruke', 'cat' => 'pp'),
	'acl_u_pm_edit'		=> array('lang' => 'Može da izmeni sopstvene privatne poruke', 'cat' => 'pp'),
	'acl_u_pm_delete'	=> array('lang' => 'Može ukloniti privatne poruke iz sopstvenog foldera', 'cat' => 'pp'),
	'acl_u_pm_forward'	=> array('lang' => 'Može da prosleđuje privatne poruke', 'cat' => 'pp'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Može da šalje privatne poruke emailom', 'cat' => 'pp'),
	'acl_u_pm_printpm'	=> array('lang' => 'Može da štampa privatne poruke', 'cat' => 'pp'),
	'acl_u_pm_attach'	=> array('lang' => 'Može da prikači fajlove u privatnim porukama', 'cat' => 'pp'),
	'acl_u_pm_download'	=> array('lang' => 'Može da preuzima fajlove u privatnim porukama', 'cat' => 'pp'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Može da upotrebi BBKod u privatnim porukama', 'cat' => 'pp'),
	'acl_u_pm_smilies'	=> array('lang' => 'Može da koristi smajlije u privatnim porukama', 'cat' => 'pp'),
	'acl_u_pm_img'		=> array('lang' => 'Može da ubacuje slike u privatne poruke', 'cat' => 'pp'),
	'acl_u_pm_flash'	=> array('lang' => 'Može da ubacuje Flash fajlove u privatnim porukama', 'cat' => 'pp'),

	'acl_u_sendemail'	=> array('lang' => 'Može da šalje email', 'cat' => 'razno'),
	'acl_u_sendim'		=> array('lang' => 'Može da šalje isntant poruke', 'cat' => 'razno'),
	'acl_u_ignoreflood'	=> array('lang' => 'Može da ignoriše limit flodovanja', 'cat' => 'razno'),
	'acl_u_hideonline'	=> array('lang' => 'Može da sakrije OnLine status', 'cat' => 'razno'),
	'acl_u_viewonline'	=> array('lang' => 'Može da vidi sve koji su OnLine', 'cat' => 'razno'),
	'acl_u_search'		=> array('lang' => 'Može da pretražuje board', 'cat' => 'razno'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Može da vidi forum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Može da čita forum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Može da šalje postove u forum', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Može da šalje obaveštenja', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Može da šalje lepljive poruke', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Može da odgovara na postove', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Može da koristi konice za postove', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Može da pravi glasanja', 'cat' => 'glasanja'),
	'acl_f_vote'		=> array('lang' => 'Može da glasa', 'cat' => 'glasanja'),
	'acl_f_votechg'		=> array('lang' => 'Može da izmeni postojeće glasanje', 'cat' => 'glasanja'),

	'acl_f_attach'		=> array('lang' => 'Može da prikači fajlove', 'cat' => 'sadržaj'),
	'acl_f_download'	=> array('lang' => 'Može da preuzima fajlove', 'cat' => 'sadržaj'),
	'acl_f_sigs'		=> array('lang' => 'Može da koristi potpise', 'cat' => 'sadržaj'),
	'acl_f_bbcode'		=> array('lang' => 'Može da šalje BBKOd', 'cat' => 'sadržaj'),
	'acl_f_smilies'		=> array('lang' => 'Može da koristi smajlije', 'cat' => 'sadržaj'),
	'acl_f_img'			=> array('lang' => 'Može da šalje slike', 'cat' => 'sadržaj'),
	'acl_f_flash'		=> array('lang' => 'Može da šalje Flash fajlove', 'cat' => 'sadržaj'),

	'acl_f_edit'		=> array('lang' => 'Može da menja sopstvene postove', 'cat' => 'akcije'),
	'acl_f_delete'		=> array('lang' => 'Može da briše sopstvene postove', 'cat' => 'akcije'),
	'acl_f_user_lock'	=> array('lang' => 'Može da zaključa sopstvene teme', 'cat' => 'akcije'),
	'acl_f_bump'		=> array('lang' => 'Može da sklanja teme', 'cat' => 'akcije'),
	'acl_f_report'		=> array('lang' => 'Može da prijavi postove', 'cat' => 'akcije'),
	'acl_f_subscribe'	=> array('lang' => 'Može da prati forum', 'cat' => 'akcije'),
	'acl_f_print'		=> array('lang' => 'Može da štampa teme', 'cat' => 'akcije'),
	'acl_f_email'		=> array('lang' => 'Može da šalje teme na email', 'cat' => 'akcije'),

	'acl_f_search'		=> array('lang' => 'Može da pretražuje forum', 'cat' => 'razno'),
	'acl_f_ignoreflood' => array('lang' => 'Može da ignoriše ograničenje flodovanja', 'cat' => 'razno'),
	'acl_f_postcount'	=> array('lang' => 'Poveća brojač posta', 'cat' => 'razno'),
	'acl_f_noapprove'	=> array('lang' => 'Može da postuje bez dozvole', 'cat' => 'razno'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Može da menja postove', 'cat' => 'akcije posta'),
	'acl_m_delete'		=> array('lang' => 'Može da briše postove', 'cat' => 'akcije posta'),
	'acl_m_approve'		=> array('lang' => 'Može da odobrava postove', 'cat' => 'akcije posta'),
	'acl_m_report'		=> array('lang' => 'Može da zatvori i briše izveštaje', 'cat' => 'akcije posta'),
	'acl_m_chgposter'	=> array('lang' => 'Može da promeni autora posta', 'cat' => 'akcije posta'),

	'acl_m_move'	=> array('lang' => 'Može da pomeri teme', 'cat' => 'akcije tema'),
	'acl_m_lock'	=> array('lang' => 'Može da zaključa teme', 'cat' => 'akcije tema'),
	'acl_m_split'	=> array('lang' => 'Može da podeli teme', 'cat' => 'akcije tema'),
	'acl_m_merge'	=> array('lang' => 'Može da spoji teme', 'cat' => 'akcije tema'),

	'acl_m_info'	=> array('lang' => 'Može videti detalje posta', 'cat' => 'razno'),
	'acl_m_warn'	=> array('lang' => 'Može davati upozorenja', 'cat' => 'razno'),
	'acl_m_ban'		=> array('lang' => 'Može da upravlja zabranama', 'cat' => 'razno'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Može da menja podešavanja boarda', 'cat' => 'podešavanja'),
	'acl_a_server'		=> array('lang' => 'Može da menja podešavanja servera/komunikacije', 'cat' => 'podešavanja'),
	'acl_a_jabber'		=> array('lang' => 'Može da menja podešavanja Jabber-a', 'cat' => 'podešavanja'),
	'acl_a_phpinfo'		=> array('lang' => 'Može da pogleda podešavanja php-a', 'cat' => 'podešavanja'),

	'acl_a_forum'		=> array('lang' => 'Može da podešava forume', 'cat' => 'forumi'),
	'acl_a_forumadd'	=> array('lang' => 'Može da doda nove forume', 'cat' => 'forumi'),
	'acl_a_forumdel'	=> array('lang' => 'Može da briše forume', 'cat' => 'forumi'),
	'acl_a_prune'		=> array('lang' => 'Može da sažima forume', 'cat' => 'forumi'),

	'acl_a_icons'		=> array('lang' => 'Može da promeni ikonice i smajlije tema', 'cat' => 'postovi'),
	'acl_a_words'		=> array('lang' => 'Može da izmeni cenzurisane reči', 'cat' => 'postovi'),
	'acl_a_bbcode'		=> array('lang' => 'Može da definiše BBKod tagove', 'cat' => 'postovi'),
	'acl_a_attach'		=> array('lang' => 'Može da izmeni podešavanja vezana za prikačene fajlove', 'cat' => 'postovi'),

	'acl_a_user'		=> array('lang' => 'Može da upravlja korisnicima', 'cat' => 'korisnici/grupe'),
	'acl_a_userdel'		=> array('lang' => 'Može da briše/sažima korisnike', 'cat' => 'korisnici/grupe'),
	'acl_a_group'		=> array('lang' => 'Može da upravlja grupama', 'cat' => 'korisnici/grupe'),
	'acl_a_groupadd'	=> array('lang' => 'Može da dodaje nove grupe', 'cat' => 'korisnici/grupe'),
	'acl_a_groupdel'	=> array('lang' => 'Može da briše grupe', 'cat' => 'korisnici/grupe'),
	'acl_a_ranks'		=> array('lang' => 'Može da upravlja činovima', 'cat' => 'korisnici/grupe'),
	'acl_a_profile'		=> array('lang' => 'Može da upravlja proizvoljnim poljima profila', 'cat' => 'korisnici/grupe'),
	'acl_a_names'		=> array('lang' => 'Može da upravlja zabranjenim imenima', 'cat' => 'korisnici/grupe'),
	'acl_a_ban'			=> array('lang' => 'Može da upravlja zabranama', 'cat' => 'korisnici/grupe'),

	'acl_a_viewauth'	=> array('lang' => 'Može da vidi maske dozvola', 'cat' => 'dozvole'),
	'acl_a_fauth'		=> array('lang' => 'Može da izmeni dozvole foruma', 'cat' => 'dozvole'),
	'acl_a_mauth'		=> array('lang' => 'Može da izmeni dozvole moderatora', 'cat' => 'dozvole'),
	'acl_a_aauth'		=> array('lang' => 'Može da izmeni dozvole administratora', 'cat' => 'dozvole'),
	'acl_a_uauth'		=> array('lang' => 'Može da izmeni dozvole korisnika', 'cat' => 'dozvole'),
	'acl_a_authgroups'	=> array('lang' => 'Može da izmeni dozvole za grupe', 'cat' => 'dozvole'),
	'acl_a_authusers'	=> array('lang' => 'Može da izmeni dozvole za korisnike', 'cat' => 'dozvole'),
	'acl_a_roles'		=> array('lang' => 'Može da upravlja pravilima', 'cat' => 'dozvole'),
	'acl_a_switchperm'	=> array('lang' => 'Može da koristi druge dozvole', 'cat' => 'dozvole'),

	'acl_a_styles'		=> array('lang' => 'Može da upravlja stilovima', 'cat' => 'razno'),
	'acl_a_viewlogs'	=> array('lang' => 'Može da vidi logove', 'cat' => 'razno'),
	'acl_a_clearlogs'	=> array('lang' => 'Može da briše logove', 'cat' => 'razno'),
	'acl_a_modules'		=> array('lang' => 'Može da upravlja modulima', 'cat' => 'razno'),
	'acl_a_language'	=> array('lang' => 'Može da upravlja jezičkim paketima', 'cat' => 'razno'),
	'acl_a_email'		=> array('lang' => 'Može da šalje masovni email', 'cat' => 'razno'),
	'acl_a_bots'		=> array('lang' => 'Može da upravlja botovima', 'cat' => 'razno'),
	'acl_a_reasons'		=> array('lang' => 'Može da upravlja razlozima izveštaja/odbijanja', 'cat' => 'razno'),
	'acl_a_backup'		=> array('lang' => 'Može da sačuva/povrati bazu', 'cat' => 'razno'),
	'acl_a_search'		=> array('lang' => 'Može da upravlja pozadinskom pretragom i podešavanjima', 'cat' => 'razno'),
));

?>