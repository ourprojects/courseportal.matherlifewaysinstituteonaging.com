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
		),

		'defaultController' => 'home',
		'theme' => 'onlinecourseportal',

		// application components
		'components' => array(
				
				'request' => array(
						'enableCookieValidation' => true,
						'enableCsrfValidation' => true,
				),
				
				'messages' => array(
						'class' => 'CDbMessageSource',
						'forceTranslation' => false,
						'onMissingTranslation' => array('MPTranslate', 'missingTranslation'),
						'sourceMessageTable' => '{{source_message}}',
						'translatedMessageTable' => '{{message}}',
				),
				
				'localeManager' => array(
						'class' => 'LocaleManager',			
				),
				
				'translate' => array(
						'class' => 'modules.translate.components.MPTranslate',
						'googleApiKey' => 'AIzaSyD5Xxt_4VKM13pF9uQdcULK4eHuTe7w940',
						'autoTranslate' => true,
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
						'class'=>'application.components.UrlManager',
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