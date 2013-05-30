<?php

/*
 * --------------------------------------------------------------------
 * LOAD CONFIGURATION
 * --------------------------------------------------------------------
 *
 * Load the default configuration and merge it with the predefined configuration if it exists.
 * Predefined configuration options will override default configuration options.
 *
 */

if(!isset($config))
	$config = array();

$config = array_replace_recursive(require('defaultConfig.php'), $config);

/*
 * ---------------------------------------------------------------
 *  EXTRACT CONFIGURATION OPTIONS AND RESOLVE PATHS
 * ---------------------------------------------------------------
 *
 * Extract configuration options and resolve paths for increased reliability
 *
 */

// Resolve root path
if(($config['root'] = realpath($config['root'])) === false || !is_dir($config['root']))
{
	exit('Your root directory path does not appear to be set correctly.');
}

// Resolve system base directory path
if(($config['system']['basepath'] = realpath($config['root'] . DIRECTORY_SEPARATOR . $config['system']['basepath'])) === false || 
		!is_dir($config['system']['basepath']))
{
	exit('Your system directory path does not appear to be set correctly.');
}

// Resolve system bootstrap file path
if(($config['system']['filename'] = realpath($config['system']['basepath'] . DIRECTORY_SEPARATOR . $config['system']['path'] . DIRECTORY_SEPARATOR . $config['system']['filename'])) === false || 
		!is_file($config['system']['filename']))
{
	exit('Your system bootstrap file name does not appear to be set correctly.');
}

// Resolve application base directory path
if(($config['application']['basepath'] = realpath($config['root'] . DIRECTORY_SEPARATOR . $config['application']['basepath'])) === false || 
		!is_dir($config['application']['basepath']))
{
	exit('Your application directory path does not appear to be set correctly.');
}

// Resolve configuration base directory path
if(($config['application']['config']['basepath'] = realpath($config['application']['basepath'] . DIRECTORY_SEPARATOR . $config['application']['config']['basepath'])) === false || 
		!is_dir($config['application']['config']['basepath']))
{
	exit('Your configuration directory path does not appear to be set correctly.');
}

// Resolve configuration file path
if(($config['application']['config']['filename'] = realpath($config['application']['config']['basepath'] . DIRECTORY_SEPARATOR . $config['application']['config']['filename'])) === false ||
		!is_file($config['application']['config']['filename']))
{
	exit('Your configuration filename does not appear to be set correctly.');
}

/*
 * --------------------------------------------------------------------
 * DEFINE PATH CONSTANTS
 * --------------------------------------------------------------------
 *
 * Now that all paths have been fully resolved set the path constants.
 *
 */

// Extension of the php files used by this application
defined('EXT') or define('EXT', $config['phpExtension']);

// Path to the system bootstrap file
defined('YII_BOOTSTRAP') or define('YII_BOOTSTRAP', $config['system']['filename']);

// Path to the application base directory
defined('APP_DIR') or define('APP_DIR', $config['application']['basepath']);

// Name of the application class
defined('APP_CLASS_NAME') or define('APP_CLASS_NAME', $config['application']['classname']);

// Path to application configuration base directory
defined('APP_CONFIG_DIR') or define('APP_CONFIG_DIR', $config['application']['config']['basepath']);

// Path to application configuration file
defined('APP_CONFIG_FILE_PATH') or define('APP_CONFIG_FILE_PATH', $config['application']['config']['filename']);

/*
 * --------------------------------------------------------------------
 * CONFIGURE DEBUGGING & ERROR REPORTING
 * --------------------------------------------------------------------
 */

if(($config['debug']['level'] = intval($config['debug']['level'])) > 0)
{
	defined('YII_DEBUG') or define('YII_DEBUG', $config['debug']['level']);
	error_reporting($config['debug']['level']);
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
}
else
{
	defined('YII_DEBUG') or define('YII_DEBUG', false);
	error_reporting(0);
	ini_set('display_errors', '0');
	ini_set('display_startup_errors', '0');
}

defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', intval($config['debug']['yiiTraceLevel']));

defined('YII_ENABLE_EXCEPTION_HANDLER') or define('YII_ENABLE_EXCEPTION_HANDLER', $config['debug']['yiiEnableExceptionHandler'] == true);

defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER', $config['debug']['yiiEnableExceptionHandler'] == true);

/*
 * --------------------------------------------------------------------
 * LAUNCH APPLICATION
 * --------------------------------------------------------------------
 *
 * Load the Yii bootstrap file.
 * Resolve our application's class path and load it if necessary.
 *
 * And away we go...
 *
 */

require_once(YII_BOOTSTRAP);

// Resolve application class if it doesn't exist
if(!class_exists($config['application']['classname'], false))
{
	// Resolve application's class path
	$classpath = realpath(APP_DIR . DIRECTORY_SEPARATOR . $config['application']['path'] . DIRECTORY_SEPARATOR . $config['application']['classname'] . EXT);
	if($classpath === false || !is_file($classpath))
	{
		exit('Your application path or filename does not appear to be set correctly.');
	}
	require_once($classpath);
	unset($classpath);
}

unset($config);

Yii::createApplication(APP_CLASS_NAME, APP_CONFIG_FILE_PATH)->run();
