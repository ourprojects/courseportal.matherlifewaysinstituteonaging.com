<?php   

// This is the main Web application configuration.

return array(
		'basePath' => APP_DIR,
		'name' => 'Online Course Portal',
		'sourceLanguage' => 'en_us',
		'charset' => 'UTF-8',
		'defaultController' => 'home',
		'theme' => 'onlinecourseportal',

		// preloaded components
		'preload' => array(
				'log'
		),
		
		'aliases' => array(
				'modules' => APP_DIR . DIRECTORY_SEPARATOR . 'modules',
				'helpers' => APP_DIR . DIRECTORY_SEPARATOR . 'helpers',
				'filters' => APP_DIR . DIRECTORY_SEPARATOR . 'filters',
				'uploads' => APP_DIR . DIRECTORY_SEPARATOR . 'uploads',
				'behaviors' => APP_DIR . DIRECTORY_SEPARATOR . 'behaviors',
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
			'gii'=>array(
		        'class'=>'system.gii.GiiModule',
		        'password'=>'abcd',
		        'ipFilters'=>array('*'),
		    ),
			'phpbb',
			'translate',
			'surveyor',
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
						'class' => 'modules.translate.components.TMessageSource',
						'forceTranslation' => false,
						'onMissingTranslation' => array('TranslateModule', 'missingTranslation'),
						'acceptedLanguageTable' => '{{translate_accepted_language}}',
						'sourceMessageTable' => '{{translate_message_source}}',
						'translatedMessageTable' => '{{translate_message}}',
						'cachingDuration' => defined('YII_DEBUG') && YII_DEBUG ? 0 : 3600,
						'messageCategory' => 'onlinecourseportal',
				),
				
				'views' => array(
						'class' => 'modules.translate.components.TViewSource',
						'onMissingViewTranslation' => array('TranslateModule', 'missingViewTranslation'),
						'routeTable' => '{{translate_route}}',
						'routeViewTable' => '{{translate_route_view}}',
						'viewSourceTable' => '{{translate_view_source}}',
						'viewTable' => '{{translate_view}}',
						'viewMessageTable' => '{{translate_view_message}}',
						'cachingDuration' => defined('YII_DEBUG') && YII_DEBUG ? 0 : 3600,
				),
				
				'surveyor' => array(
						'class' => 'modules.surveyor.components.Surveyor',		
				),
				
				'translate' => array(
						'class' => 'modules.translate.components.MPTranslate',
						'googleApiKey' => 'AIzaSyD5Xxt_4VKM13pF9uQdcULK4eHuTe7w940',
						'autoTranslate' => true,
				),
				
				'viewRenderer' => array(
					'class' => 'modules.translate.components.TViewRenderer',
					'viewSource' => 'views',
					'compileInBackground' => false
				),
				
				'cache' => array(
					'class' => 'system.caching.CApcCache'
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
						'translateComponentId' => 'translate',
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
								// Translation logging
								array(
										'class' => 'CFileLogRoute',
										'categories' => 'module.translate.*',
										'logFile' => 'translate.log',
										'levels' => defined('YII_DEBUG') && YII_DEBUG ? '' : 'error, warning',
								),
								// Profiler logging
								array(
										'class' => 'CProfileLogRoute',
										'report' => 'summary',
										'enabled' => defined('YII_DEBUG') && YII_DEBUG
								),
						),
				),

		),
		
		'params' => require('params.php'),
);