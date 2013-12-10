<?php
/**
*
* 
*
* recaptcha.php [Basque [eu]]
*
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License 2.0
*
*/

/**
* DO NOT CHANGE
*/if (!defined('IN_PHPBB'))
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
	'RECAPTCHA_LANG'				=> 'eu',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha erabiltzeko, kontua sortu behar duzu <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>-n.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Bidalitako baieztatze kodea ez da zuzena izan',

	'RECAPTCHA_PUBLIC'				=> 'reCaptcha giltz publikoa',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Zure reCaptcha giltz publikoa. Giltzak <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>-n lortu.',
	'RECAPTCHA_PRIVATE'				=> 'reCaptcha giltz pribatua',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Zure reCaptcha giltz pribatua. Giltzak <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>-n lortu.',

	'RECAPTCHA_EXPLAIN'				=> 'Sarrera automatikoak ekiditzearren, behekaldeko testu-eremuan agertzen diren hitz biak idatz itzazula eskatzen dizugu.',
));

?>