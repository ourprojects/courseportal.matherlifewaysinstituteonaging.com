<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route = array();

//API routes
$route[] = array('<controller>/create', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\/\-,]+>', 'verb' => 'POST');
$route[] = array('<controller>/read', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\/\-,]+>', 'verb' => 'GET');
$route[] = array('<controller>/update', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\/\-,]+>', 'verb' => 'PUT');
$route[] = array('<controller>/delete', 'pattern' => '<controller:\w+>/<key_id:\d+>/<key:[\w\/\-,]+>', 'verb' => 'DELETE');

//User activation route
$route['<language:\w+>/user/activate/<id:\d+>/<sessionKey:[\w\/\-,]+>'] = 'user/activate';

//User add course route
$route[] = array('user/addCourse', 'pattern' => 'user/addCourse/<key_id:\d+>/<key:[\w\/\-,]+>', 'verb' => 'POST');

//Standard Yii routes with language
$route['<language:\w+>'] = '';
$route['<language:\w+>/<controller:\w+>/<id:\d+>'] = '<controller>/view';
$route['<language:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>'] = '<controller>/<action>';
$route['<language:\w+>/<controller:\w+>/<action:\w+>/*'] = '<controller>/<action>';
$route['<language:\w+>/<controller:\w+>'] = '<controller>';

return $route;

?>