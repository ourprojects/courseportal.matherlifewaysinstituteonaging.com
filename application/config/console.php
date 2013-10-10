<?php

// This is the main Web application configuration.

return array(
		'basePath' => APP_DIR,
		'name' => 'Online Course Portal',
		'sourceLanguage' => 'en_us',
		'charset' => 'UTF-8',
		'commandPath' => APP_DIR . DIRECTORY_SEPARATOR . 'commands',

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
				'application.modules.translate.*',
		),

		// configured modules
		'modules' => array(
				'translate',
		),

		// application components
		'components' => array(

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

				'translate' => array(
						'class' => 'modules.translate.components.TTranslator',
						'googleApiKey' => 'AIzaSyD5Xxt_4VKM13pF9uQdcULK4eHuTe7w940',
						'autoTranslate' => true,
						'managementActionFilters' => array(
														array('filters.HttpsFilter'),
														'accessControl',
												),
						'managementAccessRules' => array(
														array('allow',
																'roles' => array('Administrator'),
														),
														array('deny',
																'users' => array('*'),
														),
												),
				),

				'viewRenderer' => array(
					'class' => 'modules.translate.components.TViewRenderer',
					'viewSource' => 'views'
				),

				'cache' => array(
					'class' => 'system.caching.CApcCache'
				),

				'db' => require('db.php'),

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
);