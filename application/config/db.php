<?php defined('BASEPATH') or exit('No direct script access allowed');

if(defined('YII_DEBUG'))
{
	return array(
			'connectionString' => 'mysql:host=localhost;dbname=courseportal_development',
			'emulatePrepare' => true,
			'username' => 'c145190-h2227182',
			'password' => 'Mj93f6d42b!',
			'charset' => 'utf8',
			'tablePrefix' => 'courseportal_',
			'enableProfiling' => true,
			'enableParamLogging' => true);
}
else 
{
	return array(
			'connectionString' => 'mysql:host=localhost;dbname=courseportal',
			'emulatePrepare' => true,
			'username' => 'c145190-h222718',
			'password' => 'Mj93f6d42b!',
			'charset' => 'utf8',
			'tablePrefix' => 'courseportal_',
			'enableProfiling' => false,
			'enableParamLogging' => false);
}

?>