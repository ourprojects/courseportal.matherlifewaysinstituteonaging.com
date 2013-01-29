<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route = array();

//API routes
$route[] = array('<controller>/create', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'POST');
$route[] = array('<controller>/read', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'GET');
$route[] = array('<controller>/update', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'PUT');
$route[] = array('<controller>/delete', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'DELETE');
$route[] = array('<controller>/options', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\-,_]+>', 'verb' => 'OPTIONS');

//User activation and password reset routes
$route['<language:\w+>/user/<action:(activate|passwordReset)>/<id:\d+>/<sessionKey:[\w\-,_]+>'] = 'user/<action>';

//Standard Yii routes with language
$route['<language:\w+>'] = '';
$route['<language:\w+>/<controller:\w+>/<id:\d+>'] = '<controller>/view';
$route['<language:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>'] = '<controller>/<action>';
$route['<language:\w+>/<controller:\w+>/<action:\w+>/*'] = '<controller>/<action>';
$route['<language:\w+>/<controller:\w+>'] = '<controller>';

return $route;

?>