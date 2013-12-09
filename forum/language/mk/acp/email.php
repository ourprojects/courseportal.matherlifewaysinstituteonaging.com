<?php
/**
*
* acp_email [Macedonian]
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Овде може да пратите мејл до било кој од вашите членови или сите членови од одредена група <strong>кои ја имаат одобрено опцијата примај групни пораки</strong>. За да го остварите ова мејл ќе биде пратен на административниот мејл кој е доставен, и копија ќе биде пратена до сите приматели. основните опции се  50 примачи, повеќе примачи повеќе мејлови ќе бидат испратени. Ако праќате мејл до голема група бидете трпеливи по кликањето испрати не излегувајте од страната. Нормално е групниот мејл да заземе повеќе време, ќе бидете известени кога скриптата ќе биде комплетирана.',
	'ALL_USERS'						=> 'Сите членови',

	'COMPOSE'				=> 'Композирај',

	'EMAIL_SEND_ERROR'		=> 'Беше пронајдена една или повеќе грешки при праќањето на групниот мејл. ве молиме проверете го %sГрешки при логирање%s за подетални информации.',
	'EMAIL_SENT'			=> 'Оваа порака беше испратена.',
	'EMAIL_SENT_QUEUE'		=> 'Оваа порака беше ставена на чекање за праќање.',

	'LOG_SESSION'			=> 'Запиши го мејлот во критичниот запис',

	'SEND_IMMEDIATELY'		=> 'Прати веднаш',
	'SEND_TO_GROUP'			=> 'Прати до група',
	'SEND_TO_USERS'			=> 'Прати до членови',
	'SEND_TO_USERS_EXPLAIN'	=> 'Внесување на членски имиња овде ќе ја замени групата одбрана горе. Внесето го секое име во посебна линија.',

	'MAIL_BANNED'			=> 'Прати мејл до банирани членови',
	'MAIL_BANNED_EXPLAIN'	=> 'Кога праќате групен мејл до групи може да одберете дали банирате членови исто така ќе добијат мејл.',
	'MAIL_HIGH_PRIORITY'	=> 'Голема',
	'MAIL_LOW_PRIORITY'		=> 'Мала',
	'MAIL_NORMAL_PRIORITY'	=> 'Нормално',
	'MAIL_PRIORITY'			=> 'Приоритет на мејл',
	'MASS_MESSAGE'			=> 'Ваша порака',
	'MASS_MESSAGE_EXPLAIN'	=> 'Запомнете дека треба да внесете целосен текст. Сите обележани ќе бидат одстранети пред да се испратат.',

	'NO_EMAIL_MESSAGE'		=> 'Мора да венесете порака.',
	'NO_EMAIL_SUBJECT'		=> 'Мора да венесете наслов на пораката.',
));

?>