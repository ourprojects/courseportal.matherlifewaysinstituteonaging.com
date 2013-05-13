<?php defined('BASEPATH') or exit('No direct script access allowed');  

// This is the main Web application configuration.

return array(
		'basePath' => APPPATH,
		'name' => 'Online Course Portal',
		'sourceLanguage' => 'en_us',
		'charset' => 'UTF-8',
		'defaultController' => 'home',
		'theme' => 'onlinecourseportal',

		// preloaded components
		'preload' => array(
				'log'
		),

		// autoloaded files
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
		
		// configured modules
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
		
		'config' => array(
				'debug' => array(
						'level' => 0,
						'yiiTraceLevel' => 3,
				),
		),

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
				
				'viewRenderer' => array(
					'class' => 'modules.translate.components.TViewRenderer'
				),
				
				'user' => array(
						'class' => 'application.auth.WebUser',
						'allowAutoLogin' => true,
						'loginUrl' => array('user/login')
				),
				
				'session' => array(
						'class' => 'DbHttpSession',
						'connectionID' => 'db',
						'autoCreateSessionTable' => defined('YII_DEBUG') && YII_DEBUG,
						'sessionTableName' => '{{yii_session}}'
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
						'logging' => defined('YII_DEBUG') && YII_DEBUG,
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
										'except' => 'system.db.*',
										'logFile' => 'application.log',
										'levels' => defined('YII_DEBUG') && YII_DEBUG ? '' : 'error, warning',
								),
								// DB logging
								array(
										'class' => 'CFileLogRoute',
										'categories' => 'system.db.*',
										'logFile' => 'db.log',
										'levels' => defined('YII_DEBUG') && YII_DEBUG ? '' : 'error, warning',
								),
						),
				),

		),
		
		'params' => require('params.php'),
);