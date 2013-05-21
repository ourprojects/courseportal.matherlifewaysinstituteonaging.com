<?php
/**
*
* 
*
* acp_users.php [Basque [eu]]
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

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'				=> 'Sinaduraren aurre bista',
	'AT_LEAST_ONE_FOUNDER'			=> 'Ezin duzu sortzaile hau erabiltzaile soil bihurtu. Foroak gutxienez sortzaile bat behar du. Erabiltzaile honi sortzaile maila aldatu nahi baldin badiozu, beste erabiltzaileren bat sortzaile izatera igo behar duzu.',

	'BAN_ALREADY_ENTERED'			=> 'Debeku hau lehenagotik dago ezarrita. Ez da debeku zerrenda eguneratu.',
	'BAN_SUCCESSFUL'				=> 'Debekua zuzen ezarri egin da.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Ez duzu kontu anonimoak debekatzeko baimenik. Kontu anonimoen baimenak Baimenak erlantzatik ezarri daitezke.'
	'CANNOT_BAN_FOUNDER'			=> 'Ez duzu sortzaileen kontuak debekatzeko baimenik.',
	'CANNOT_BAN_YOURSELF'			=> 'Ezin duzu zeure burua debekatu.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Ez duzu erroboten kontuak ezgaitzeko baimenik. Mesedez, ezgaitu ezazu errobota boten orrian.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Ez duzu sortzaileen kontuak ezgaitzeko baimenik.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Ezin duzu zeure burua ezgaitu.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Ez duzu erroboten kontuak berriro gaitzeko baimenik. Mesedez bergaitu ezazu errobota boten orrian.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Ez duzu sortzaileen kontuak berriro gaitzeko baimenik.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Ezin duzu zeure burua berriro gaitu.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Ez duzu gonbidatu kontua ezabatzeko ahalmenik.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Ez duzu zure kontua ezabatzeko baimenik.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ez duzu baztertutako erabiltzaileak sortzaile kontuetara igotzeko ahalmenik.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Erabiltzailea sortzailera igoteko kontua gaitu egin behar duzu. Aktibatutako erabiltzaileak baino ezin dute sortzaile izatera igo.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Parametro hau baino ez duzu bete behar erabiltzailearen e-mail helbida aldatu nahi baduzu.',

	'DELETE_POSTS'					=> 'Mezuak ezabatu',
	'DELETE_USER'					=> 'Erabiltzailea ezabatu',
	'DELETE_USER_EXPLAIN'			=> 'Behin erabiltzailea ezabatu eta gero ez dago atzera pausurik, betirako da. Erabiltzaile honek bidalitako mezu pribatuak ere ezabatu egingo dira mezu hauen hartzaileek ez baldin badituzte irakurri.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Behartutako bergaitzea zuzen burutu egin da.',
	'FOUNDER'						=> 'Sortzaile',
	'FOUNDER_EXPLAIN'				=> 'Sortzaileek administrazio baimen guztiak dituzte eta ezin dira inoiz debekatuak, aldatuak edo ezabatuak izan sortzaile ez diren beste erabiltzaileengatik.',

	'GROUP_APPROVE'					=> 'Kidea onartu',
	'GROUP_DEFAULT'					=> 'Lehenetsitako taldea zehaztu kidearentzako',
	'GROUP_DELETE'					=> 'Kidea taldetik kendu',
	'GROUP_DEMOTE'					=> 'Taldeko erantzulea apaldu',
	'GROUP_PROMOTE'					=> 'Taldeko erantzulera igo',

	'IP_WHOIS_FOR'					=> 'IP whois %1$s(r)entzako',

	'LAST_ACTIVE'					=> 'Azkenekoz aktibo',

	'MOVE_POSTS_EXPLAIN'			=> 'Mesedez, zehaztu ezazu erabiltzaile honek bidali dituen mezu guztiak zein forora mugitu nahi dituzun.',

	'NO_SPECIAL_RANK'				=> 'Ez da maila berezirik zehaztu',
	'NO_WARNINGS'			=> 'Ez dago ohartarazpenik.',
	'NOT_MANAGE_FOUNDER'			=> 'Sortzaile kontua duen erabiltzaile bat kudeatzen saiatu izan zara. Sortzaile kontua duten erabiltzaileek baino ezin dituzte beste sortzaileak kudeatu.',

	'QUICK_TOOLS'					=> 'Tresna azkarrak',

	'REGISTERED'					=> 'Izena emanda',
	'REGISTERED_IP'					=> 'IPtik izena emanda',
	'RETAIN_POSTS'					=> 'Mezuak atxiki',

	'SELECT_FORM'					=> 'Formularioa aukeratu',
	'SELECT_USER'					=> 'Erabitzailea aukeratu',

	'USER_ADMIN'					=> 'Erabiltzaile kudeaketa',
	'USER_ADMIN_ACTIVATE'			=> 'Kontua gaitu',
	'USER_ADMIN_ACTIVATED'			=> 'Erabiltzailea zuzen gaitu egin da.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Erabiltzaile irudia (abatarra) zuzen ezabatu egin da.',
	'USER_ADMIN_BAN_EMAIL'			=> 'E-mail helbidea debekatu',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Administrariek e-mail helbide hau debekatu egin dute.',
	'USER_ADMIN_BAN_IP'				=> 'IPa debekatu',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Administrariek IP hau debekatu egin dute.',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Administrariek erabiltzaile izen hau debekatu egin dute.',
	'USER_ADMIN_BAN_USER'			=> 'Erabiltzaile izena debekatu',
	'USER_ADMIN_DEACTIVATE'			=> 'Kontua ezgaitu',
	'USER_ADMIN_DEACTIVED'			=> 'Erabiltzailea zuzen ezgaitu egin da.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Fitxategi erantsi guztiak ezabatu',
	'USER_ADMIN_DEL_AVATAR'			=> 'Irudia ezabatu',
	'USER_ADMIN_DEL_OUTBOX'			=> 'MPen irteera ontzia hustu',
	'USER_ADMIN_DEL_POSTS'			=> 'Mezu guztiak ezabatu',
	'USER_ADMIN_DEL_SIG'			=> 'Sinadura ezabatu',
	'USER_ADMIN_EXPLAIN'			=> 'Hemendik, erabiltzailei buruzko informazioa eta aukera jakin batzuk aldatu zenitzake. Erabiltzaileen baimenak aldatzeko, jo ezazu erabiltzaile eta taldeen baimen orrira.',
	'USER_ADMIN_FORCE'				=> 'Bergaitzea behartu',
	'USER_ADMIN_LEAVE_NR'			=> 'Berrik Izen Emandakoengandik kendu',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mezu guztiak mugitu',
	'USER_ADMIN_SIG_REMOVED'		=> 'Sinadura zuzen ezabatu egin da.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Erabiltzailearen fitxategi erantsi guztiak zuzen ezabatu egin dira.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Ezin daiteke irudia erakutsi ez direlako irudiak baimendu.',
	'USER_AVATAR_UPDATED'			=> 'Erabiltzailearen irudia zuzen eguneratu egin da.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Ezin daiteke irudia erakutsi ez direlako mota honetako irudiak baimendu.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Profil eremu pertsonalizatuak',
	'USER_DELETED'					=> 'Erabiltzailea zuzen ezabatu egin da.',
	'USER_GROUP_ADD'				=> 'Erabiltzailea taldera gehitu.',
	'USER_GROUP_NORMAL'				=> 'Erabiltzailea kide den talde soilak',
	'USER_GROUP_PENDING'			=> 'Erabiltzailea onarpenaren zain den taldeak',
	'USER_GROUP_SPECIAL'			=> 'Erabiltzailea kide den talde bereziak',
	'USER_LIFTED_NR'				=> 'Berriki izena emandako egoera zuzen kendu zaio erabiltzaileari.',
	'USER_NO_ATTACHMENTS'			=> 'Ez dago bistaratu daiteken fitxategi erantsirik.',
	'USER_NO_POSTS_TO_DELETE'		=> 'Erabiltzaileak ez du mezurik gorde edo ezabatzeko.',
	'USER_OUTBOX_EMPTIED'			=> 'Erabiltzailearen mezu pribatuen irteera ontzia zuzen garbitu da.',
	'USER_OUTBOX_EMPTY'				=> 'Erabiltzailearen mezu pribatuen irteera ontzia hutsik zegoen jada.',
	'USER_OVERVIEW_UPDATED'			=> 'Erabiltzailearen xehetasunak eguneratu egin dira.',
	'USER_POSTS_DELETED'			=> 'Erabiltzailearen mezu guztiak zuzen ezabatu egin dira.',
	'USER_POSTS_MOVED'				=> 'Mezuak zuzen mugitu dira zehaztutako forora.',
	'USER_PREFS_UPDATED'			=> 'Erabiltzailearen hobespenak eguneratu egin dira.',
	'USER_PROFILE'					=> 'Erabiltzailearen profila',
	'USER_PROFILE_UPDATED'			=> 'Erabiltzailearen profila eguneratu egin da.',
	'USER_RANK'						=> 'Erabiltzailearen maila',
	'USER_RANK_UPDATED'				=> 'Erabiltzailearen maila eguneratu egin da.',
	'USER_SIG_UPDATED'				=> 'Erabiltzailearen sinadura zuzen eguneratu egin da.',
	'USER_WARNING_LOG_DELETED'		=> 'Ez dago informaziorik. Baliteke erregistro sarrera ezabatu izana.',
	'USER_TOOLS'					=> 'Oinarrizko tresnak',
));

?>