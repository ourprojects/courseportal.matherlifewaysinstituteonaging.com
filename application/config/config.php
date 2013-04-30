<?php defined('BASEPATH') or exit('No direct script access allowed');  

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(
		'basePath' => APPPATH,
		'name' => 'Online Course Portal',
		'sourceLanguage' => 'en_us',
		'charset' => 'UTF-8',

		// preloading 'log' component
		'preload' => array('log'),

		// autoloading model, component and form classes
		'import' => array(
				'application.core.*',
				'application.models.db.*',
				'application.models.forms.*',
				'application.auth.*',
				'application.components.*',
				'application.helpers.*',
				'ext.yii-mail.*',
				'modules.translate.*',
		),
		
		'modules' => array(
			/*'gii'=>array(
		        'class'=>'system.gii.GiiModule',
		        'password'=>'abcd',
		        'ipFilters'=>array('*'),
		    ),*/
			'phpbb',
			'translate',
			'surveyor',
		),

		'defaultController' => 'home',
		'theme' => 'onlinecourseportal',

		// application components
		'components' => array(
				
				'themeManager' => array(
						'themeClass' => 'Theme'
				),
				
				'request' => array(
						'class' => 'HttpRequest',
						'enableCookieValidation' => true,
						'enableCsrfValidation' => true,
						'noCsrfValidationRoutes' => array(
									'[user|usercourse]/[create|read|update|delete|options]/*'
								)
				),
				
				'messages' => array(
						'class' => 'DbMessageSource',
						'forceTranslation' => false,
						'onMissingTranslation' => array('MPTranslate', 'missingTranslation'),
						'acceptedLanguageTable' => '{{accepted_language}}',
						'sourceMessageTable' => '{{message_source}}',
						'translatedMessageTable' => '{{message}}',
				),
				
				'surveyor' => array(
						'class' => 'modules.surveyor.components.Surveyor',		
				),
				
				'translate' => array(
						'class' => 'modules.translate.components.MPTranslate',
						'googleApiKey' => 'AIzaSyD5Xxt_4VKM13pF9uQdcULK4eHuTe7w940',
						'autoTranslate' => true,
						'messageCategory' => 'onlinecourseportal',
						'managementActionFilters' => array(
														array('filters.HttpsFilter'),
														'accessControl',
												),
						'managementAccessRules' => array(
														array('allow',
																'expression' => '$user->getIsAdmin()',
														),
														array('deny',
																'users' => array('*'),
														),
												),
				),
				
				'user' => array(
						'class' => 'application.auth.WebUser',
						'allowAutoLogin' => true,
						'loginUrl' => array('user/login')
				),
				
				'phpBB' => array(
						'class' => 'phpbb.extensions.phpBB.phpBB',
						'path' => 'webroot.forum',
						'webPath' => 'forum'
				),
				
				'mail' => array(
						'class' => 'ext.yii-mail.YiiMail',
						'transportType' => 'php',
						'viewPath' => 'application.views.mail',
						'logging' => false,
						'dryRun' => false,
				),
				
				'image' => array(
						'class' => 'ext.image.CImageComponent',
						// GD or ImageMagick
						'driver' => 'GD',
						// ImageMagick setup path
						//'params' => array('directory' => '/opt/local/bin'),
				),
				
				'file' => array(
						'class' => 'ext.file.CFile',
				),
				
				'db' => require('db.php'),
				'forumDb' => require('dbPhpBB.php'),
				
				'urlManager' => array(
						'class'=>'UrlManager',
						'urlFormat' => 'path',
						'showScriptName' => false,
						'rules' => require('routes.php'),
				),
				
				'log' => array(
						'class' => 'CLogRouter',
						'routes' => array(
								// System Logging
								array(
										'class' => 'CFileLogRoute',
										'levels' => 'error, warning',
										'logFile' => 'application.log'
								),
						),
				),

		),
		
		'config' => array(
				'debug' => array(
						'level' => 0,
						'yiiTraceLevel' => 3,
				),
		),
		
		'params' => require('params.php'),
);