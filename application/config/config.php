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
				'application.components.*',
				'ext.yii-mail.*',
				'modules.translate.*',
		),
		
		'modules'=>array(
			/*'gii'=>array(
		        'class'=>'system.gii.GiiModule',
		        'password'=>'abcd',
		        'ipFilters'=>array('*'),
		    ),*/
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
									'user/[create|read|update|delete|addCourse]/*'
								)
				),
				
				'messages' => array(
						'class' => 'DbMessageSource',
						'forceTranslation' => false,
						'onMissingTranslation' => array('MPTranslate', 'missingTranslation'),
						'sourceMessageTable' => '{{source_message}}',
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
																'expression' => '!$user->isGuest && $user->group->name === \'admin\'',
														),
														array('deny',
																'users' => array('*'),
														),
												),
				),
				
				'user' => array(
						'class' => 'WebUser',
						'allowAutoLogin' => true,
						'loginUrl' => array('user/login'),
				),
				
				'mail' => array(
						'class' => 'ext.yii-mail.YiiMail',
						'transportType' => 'php',
						'viewPath' => 'application.views.mail',
						'logging' => false,
						'dryRun' => false,
				),
				
				'db' => require('db.php'),
				
				'urlManager' => array(
						'class'=>'UrlManager',
						'urlFormat' => 'path',
						'showScriptName' => false,
						'rules' => require('routes.php'),
				),
				
				'log' => array(
						'class' => 'CLogRouter',
						'routes' => array(
								array(
										'class' => 'CFileLogRoute',
										'levels' => 'error, warning',
								),
						),
				),

		),
		
		'config' => array(
				'debug' => array(
						'level' => E_ALL,
						'yiiTraceLevel' => 3,
				),
		),
		
		'params' => require('params.php'),
);