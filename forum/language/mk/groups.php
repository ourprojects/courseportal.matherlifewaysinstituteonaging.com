<?php
/** 
*
* groups [Macedonian]
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
	'ALREADY_DEFAULT_GROUP'	=> 'Одбраната група е веќе ваша група',
	'ALREADY_IN_GROUP'		=> 'Вие сте веќе член на групата',
	'ALREADY_IN_GROUP_PENDING'	=> 'Вие веќе побаравте да бидете член на оваа група.',
	
    'CANNOT_JOIN_GROUP'			=> 'Вие не можете да се приклучите во оваа група. Може да се приклучите само во отворените групи.',
	'CANNOT_RESIGN_GROUP'		=> 'Не може да го одкажете членството од оваа група. Може да одкажете членство само во отворените групи.',
	'CHANGED_DEFAULT_GROUP'	=> 'Успешно променета главната група',
	
	'GROUP_AVATAR'						=> 'Аватaр на групата', 
	'GROUP_CHANGE_DEFAULT'				=> 'Сигурно сакате да ја промените вашата главна група во оваа група “%s”?',
	'GROUP_CLOSED'						=> 'Затворено',
	'GROUP_DESC'						=> 'Опис на групата',
	'GROUP_HIDDEN'						=> 'Скриен',
	'GROUP_INFORMATION'					=> 'Информации на групата', 
	'GROUP_IS_CLOSED'					=> 'Ова е затворена група, каде нови членови не можат автомацки да се приклучат ,можат само со покана на лидерот на групата да се приклучат.',
	'GROUP_IS_FREE'						=> 'Ова е отворена група и сите членови се добре дојдени.', 
	'GROUP_IS_HIDDEN'					=> 'Ова е скриена група, само членови на оваа група можат да гледааат други членови.',
	'GROUP_IS_OPEN'						=> 'Ова е отворена група, членовите може да се пријават да се приклучат.',
	'GROUP_IS_SPECIAL'					=> 'Ова е специјална група, која е раководена од администраторите.', 
	'GROUP_JOIN'						=> 'Приклучи се на групата',
	'GROUP_JOIN_CONFIRM'				=> 'Сигурно сакате да се приклучите на одбраната група?',
	'GROUP_JOIN_PENDING'				=> 'Приклучисе на групата',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Сигурно сакате да се приклучите на одбраната група?',
	'GROUP_JOINED'						=> 'Оспешно приклучен на одбраната група',
	'GROUP_JOINED_PENDING'				=> 'Успешно барање приклучок на групата. Причекајте да ве одобри лидерот на групата.',
	'GROUP_LIST'						=> 'Промени членови',
	'GROUP_MEMBERS'						=> 'Членови на групата',
	'GROUP_NAME'						=> 'Име на групата',
	'GROUP_OPEN'						=> 'Oтворена',
	'GROUP_RANK'						=> 'Ранк на групата', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Одкажи членство во групата',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Сигурно ли сакате да го одкажете членството во селектираната група?',
	'GROUP_RESIGN_PENDING'				=> 'Одкажи го барањето за членство во групата',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Сигурно ли сакате да го одкажете барањето за членство во селектираната група?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Успешно бевте одстранети од селектираната група',
	'GROUP_RESIGNED_PENDING'			=> 'Вашето барање за членство е успешно одстрането',
	'GROUP_TYPE'						=> 'Тип на групата',
	'GROUP_UNDISCLOSED'					=> 'Скриени групи',
	'FORUM_UNDISCLOSED'					=> 'Mодерирање скриен(и) форум(и)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Треба да сте логирани да ги видите деталите на групата',

	'NO_LEADERS'					=> 'Не сте лиден на ниедна група',
	'NOT_LEADER_OF_GROUP'			=> 'Бараната операција неможе да се спроведе бидејќи не сте лидер на селектираната група.',
	'NOT_MEMBER_OF_GROUP'			=> 'Бараната операција неможе да се спроведе бидејќи не сте член на селектираната група.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Немате дозвола да го одкажете членството од вашата основна група.',
	
	'PRIMARY_GROUP'		=> 'Основна група',

	'REMOVE_SELECTED'		=> 'Отстрани селектирано',

	'USER_GROUP_CHANGE'			=> 'Од “%1$s” група до “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Одстрани Лидерство',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Сигурно ли сакате да го одстраните лидерот од селектираната група?',
	'USER_GROUP_DEMOTED'		=> 'Лидерот на групата е успешно деградиран.',
));

?>