<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route = array();

//Pushed user registration route
$route[] = array('user/create', 'pattern' => 'user/create/<key_id:\d+>/<key:[0-9a-zA-Z\-_=]+>/', 'verb' => 'POST');
//User activation route
$route['user/activate/<id:\d+>/<session_key:[0-9a-zA-Z\-_=]+>/'] = 'user/activate';
//Standard Yii routes with language
$route['<language:\w+>'] = '';
$route['<language:\w+>/<controller:\w+>/<id:\d+>'] = '<controller>/view';
$route['<language:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>'] = '<controller>/<action>';
$route['<language:\w+>/<controller:\w+>/<action:\w+>/*'] = '<controller>/<action>';
$route['<language:\w+>/<controller:\w+>'] = '<controller>';

return $route;

?>