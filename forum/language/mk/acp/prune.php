<?php
/**
*
* acp_prune [Macedonian]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Оваа секција ви овозможува да избришете или деактивирате членови на вашиот форум. Акаунтите можат да бидат филтрирани на различни начини; со броење на мислења, активност идр. Областа може да биде ограничена врз кои акаунти ќе има ефект. Како пример: може да скроите членови со помалку од 10 мислења, кои биле неактивни пример од 2002-01-01 па навака. Алтернативно,може да ја прескокнете областа за селектирање со внесување на листа на членови  (секој во нова линија) во текст полето. Внимавајте со оваа опција! Одкако еден член ќе биде избришан нема начин да се поврати повторно, акцијата е крајна.',

	'DEACTIVATE_DELETE'			=> 'Деактивирај или Избриши',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Одберете дали сакате да го деактивирате или избришете членот. Ве молиме запамтете дека избришаните членови неможе да бидат повратени!',
	'DELETE_USERS'				=> 'Избриши',
	'DELETE_USER_POSTS'			=> 'Избриши ги скроените мислења на членовите',
	'DELETE_USER_POSTS_EXPLAIN' => 'Ги одстранува мислењата од избришаните членови, нема ефект ако членовите се деактивирани.',

	'JOINED_EXPLAIN'			=> 'Внеси датум во <kbd>YYYY-MM-DD</kbd> формат.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Внеси датум во <kbd>YYYY-MM-DD</kbd> формат. внеси <kbd>0000-00-00</kbd> за да скроите членови кои никогаш не се логирале, <em>ПРЕД</em> и <em>ПО</em> околностите ќе бидат игнорирани.',

	'PRUNE_USERS_LIST'				=> 'Членови кои треба да се скројат',
	'PRUNE_USERS_LIST_DELETE'		=> 'Со селектирана област за скројување членови и акаунтите ќе бидат одстранети од истите.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Со селектирана област за скројување членови, акаунтите ќе бидат деактивирани.',

	'SELECT_USERS_EXPLAIN'		=> 'Внесете одредени членски имиња овде, тие ќе бидат користени во преференцата за областа погоре. Основачите немоќат да бидат скроени.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Селектираните членови беа успешно деактивирани.',
	'USER_DELETE_SUCCESS'		=> 'Селектираните членови беа успешно избришани.',
	'USER_PRUNE_FAILURE'		=> 'Нема членови во селектираната област.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Внесениот датум е погрешен,треба да биде во <kbd>YYYY-MM-DD</kbd> формат.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ова ќе избрише било која тема во која нема постирано или никој не ја прегледал со бројот на денови кои го избравте. Ако не внесете бројкаа тогаш сите теми ќе бидат избришани. По основно , темите во кои анкетите се сеуште активни нема да бидат одстранети но ќе ги одстрани важните теми и известувањата.',

	'FORUM_PRUNE'		=> 'Скројување на форум',

	'NO_PRUNE'			=> 'Нема скроени форуми.',

	'SELECTED_FORUM'	=> 'Селектиран форум',
	'SELECTED_FORUMS'	=> 'Селектирани форуми',

	'POSTS_PRUNED'					=> 'Скроени постови',
	'PRUNE_ANNOUNCEMENTS'			=> 'Скрој известувања',
	'PRUNE_FINISHED_POLLS'			=> 'Скрој затворени анкети',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Ги одстранува темите и анкетите кои завршиле.',
	'PRUNE_FORUM_CONFIRM'			=> 'Сигурни ли сте дека сакате да ги скропите селектираните форуми со опциите кои ги одредивте? Штом еднаш ќе бидат одстранети не можат да бидат повторно повратени.',
	'PRUNE_NOT_POSTED'				=> 'Денови од последното постирање',
	'PRUNE_NOT_VIEWED'				=> 'Денови од последен преглед',
	'PRUNE_OLD_POLLS'				=> 'Скрој стари постови',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Ги одстранува темите и анкетите во кои нема постирано или гласано во одредените денови за старост.',
	'PRUNE_STICKY'					=> 'Скрој важни теми',
	'PRUNE_SUCCESS'					=> 'Скројувањето на форумите беше успешно.',

	'TOPICS_PRUNED'		=> 'Скроени теми',
));

?>