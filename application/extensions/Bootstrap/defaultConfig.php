<?php

return array(
		'root' => dirname(__FILE__).'/../../../',
		'phpExtension' => '.php',
		'system' => array(
				// path to base system directory.
				'basepath' => '/framework', 
				// path to the directory containing your Yii bootstrap file. Set this if it is not located at the system basepath. This path is relative to the system basepath.
				'path' => '',
				// Name of the Yii bootstrap file. Defaults to "yii.php" set this if you use something else.
				'filename' => 'yii.php' 
		),
		'application' => array(
				// path to your base application directory (relative to directory above system basepath).
				'basepath' => '/application', 
				// path to the directory containing your custom application file(s) (relative to application basepath). 
				// Set this if you use a custom application file that is kept in a directory other than the application's base path.
				'path' => '',
				// Name of application class. 
				// Defaults to "CWebApplication" or "CConsoleApplication" depending if $_SERVER['argv'] is set or not. 
				// Set this if you use something else, be sure to also set the appliction's path attribute if this class is not located in the application's basepath.
				// Also if this class is custom it must be defined in a file with the same name followed by the extension defined in this config.
				'classname' => isset($_SERVER['argv']) ? 'CWebApplication' : 'CConsoleApplication',
				'config' => array(
						// path to your application's configuration directory (relative to application path).
						'basepath' => 'config',
						// Name of your application's configuration file. Defaults to "config.php". Set this if you use something else.
						'filename' => 'config.php'
				),
		),
		'debug' => array(
				// Error reporting level for php. 
				// If greater than zero the YII_DEBUG constant will be set true and all php errors will be displayed on screen.
				// Otherwise YII_DEBUG constant will be set false and php errors will not be display on screen.
				'level' => E_ALL, 
				// yii trace level.
				'yiiTraceLevel' => 3,
				// turn on or off yii's exception handler
				'yiiEnableExceptionHandler' => true,
				// turn on or off yii's error handler
				'yiiEnableErrorHandler' => true,
		),
);