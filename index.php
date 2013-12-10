<?php

// Bootstrap configuration. 
// Please see "application/extensions/Bootstrap/defaultConfig.php" for an explanation of all available options.
define('COURSEPORTAL_DEBUG', true);

$config = array(
		'application' => array(
				'path' => 'core',
				'classname' => 'CoursePortalApplication',
		),
		'debug' => array(
				'level' => defined('COURSEPORTAL_DEBUG') && COURSEPORTAL_DEBUG ? E_ALL : 0,
				'yiiTraceLevel' => 3,
				'yiiEnableExceptionHandler' => true,
				'yiiEnableErrorHandler' => true,
		),
);

// Load bootstrap
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR . 'Bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.php');