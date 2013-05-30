<?php

// Bootstrap configuration. 
// Please see "application/extensions/Bootstrap/defaultConfig.php" for an explanation of all available options.
$config = array(
		'application' => array(
				'path' => 'core',
				'classname' => 'CoursePortalApplication',
		),
		'debug' => array(
				'level' => E_ALL,
				'yiiTraceLevel' => 3,
				'yiiEnableExceptionHandler' => true,
				'yiiEnableErrorHandler' => true,
		),
);

// Load bootstrap
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR . 'Bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.php');