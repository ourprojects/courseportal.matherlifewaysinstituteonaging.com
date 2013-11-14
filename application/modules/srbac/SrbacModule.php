<?php

class SrbacModule extends CWebModule
{
	//Constants
	const ID = 'LD_RBAC';
	
	const ICON_PACKS = 'noia,tango';

	// Srbac Attributes
	/* @var $debug If srbac is in debug mode */
	private $_debug = false;

	private $_assetsUrl;

	public $flashKey = 'srbac';
	/* @var $userId String The primary column of the users table*/
	public $userId = 'userId';
	/* @var $username String The username column of the users table*/
	public $username = 'username';
	/* @var $userclass String The name of the users Class*/
	public $userclass = 'User';
	/* @var $superUser String The name of the superuser */
	public $superUser = 'Super User';
	/* @var $imagesPack String The images theme to use*/
	public $imagesPack = 'noia';
	/**
	 * @var string the ID of the default controller for this module. Defaults to 'default'.
	 */
	public $defaultController = 'authItem';
	/**
	 * @var mixed the layout that is shared by the controllers inside this module.
	 * If a controller has explicitly declared its own {@link CController::layout layout},
	 * this property will be ignored.
	 * If this is null (default), the application's layout or the parent module's layout (if available)
	 * will be used. If this is false, then no layout will be used.
	 */
	public $layout = 'application.views.layouts.main';

	/**
	 * Translate a message specific to Srbac module.
	 *
	 * @link YiiBase::t
	 */
	public static function t($message, $params = array(), $source = null, $language = null)
	{
		return Yii::t(self::ID, $message, $params, $source, $language);
	}
	
	/**
	 * Log something specific to Srbac module.
	 *
	 * @link YiiBase::log
	 */
	public static function log($message, $level = CLogger::LEVEL_INFO)
	{
		Yii::log($message, $level, self::ID);
	}

	/**
	 * this method is called when the module is being created you may place code
	 * here to customize the module or the application
	 */
	public function init()
	{
		// import the module-level models and components
		$this->setImport(array(
				'srbac.models.*',
				'srbac.components.*',
		));
	}

	public function checkSetting($setting)
	{
		try
		{
			switch($setting)
			{
				case 'debug':
					return !$this->getDebug();
				case 'flashKey':
					return is_string($this->flashKey) && trim($this->flashKey) !== '';
				case 'userclass':
					return @class_exists($this->userclass);
				case 'userId':
					return $this->checkSetting('userclass') &&
						is_string($this->userId) &&
						$this->getStaticUserModel()->hasAttribute($this->userId);
				case 'username':
					return $this->checkSetting('userclass') &&
						is_string($this->username) &&
						$this->getStaticUserModel()->hasAttribute($this->username);
				case 'superUser':
					return is_string($this->superUser) && trim($this->superUser) !== '';
				case 'imagesPack':
					return in_array($this->imagesPack, explode(',', self::ICON_PACKS));
				case 'defaultController':
					return in_array(ucfirst($this->defaultController).'Controller', SrbacUtilities::getApplicationControllers($this));
				case 'layout':
					return $this->layout === false || $this->layout === null || Yii::app()->getController()->getLayoutFile($this->layout) !== false;
				default:
					return false;
			}
		}
		catch(Exception $e)
		{
			return false;
		}
	}

	// SETTERS & GETTERS

	public function setDebug($debug)
	{
		$this->_debug = is_string($debug) ? $debug === 'true' || $debug === '1' : (bool)$debug;
	}

	public function getDebug()
	{
		return $this->_debug;
	}

	public function getStaticUserModel()
	{
		return call_user_func(array($this->userclass, 'model'));
	}

	/**
	 * Instantiate the user's class
	 * @return userclass
	 */
	public function getNewUserModel()
	{
		$args = func_get_args();
		$klass = new ReflectionClass($this->userclass);
		return $klass->newInstanceArgs($args);
	}

	public function getAssetsUrl()
	{
		if($this->_assetsUrl === null)
		{
			$assetsDir = Yii::getPathOfAlias('srbac.assets');
			if(is_dir($assetsDir))
				$this->_assetsUrl = Yii::app()->getAssetManager()->publish($assetsDir, false, -1, YII_DEBUG);
			else
				$this->_assetsUrl = Yii::app()->getTheme()->getBaseUrl();
		}
		return $this->_assetsUrl;
	}

	/**
	 * Gets the path to the icon files
	 * @return String The path to the icons
	 */
	public function getIconsUrl($file = '')
	{
		return $this->getImagesUrl() . $this->imagesPack . '/' .$file;
	}

	public function getStylesUrl($file = '')
	{
		return $this->getAssetsUrl() . '/styles/' . $file;
	}

	public function getScriptsUrl($file = '')
	{
		return $this->getAssetsUrl() . '/scripts/' . $file;
	}

	public function getImagesUrl($file = '')
	{
		return $this->getAssetsUrl() . '/images/' . $file;
	}

	private $_generatedAuthItems;
	private $_generatedMissingAuthItems;

	public function generateAuthItems($missingOnly = true)
	{
		if($missingOnly)
		{
			if(isset($this->_generatedMissingAuthItems))
			{
				return $this->_generatedMissingAuthItems;
			}
		}
		elseif(isset($this->_generatedAuthItems))
		{
			return $this->_generatedAuthItems;
		}

		require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'SrbacUtilities.php');

		$authItems = array();
		$authItemNames = array();
		$authItemCount = 0;
		foreach(SrbacUtilities::getApplicationControllers() as $controller)
		{
			$nameParts = explode('.', $controller);
			$nameParts[] = preg_replace('/^(.+)Controller$/i', '$1', array_pop($nameParts));
			foreach($nameParts as &$part)
			{
				$part = preg_replace('/(?<!^)([A-Z])/', ' \\1', ucfirst($part));
			}

			$controllerName = implode('.', $nameParts);
			if(!isset($authItemNames[$controllerName]))
			{
				$authItemCount++;
				$authItemNames[$controllerName] = $authItemCount;
				$authItems[$authItemCount] = array('id' => null, 'name' => $controllerName, 'type' => EAuthItem::TYPE_TASK, 'generated' => true);

				$actions = SrbacUtilities::getControllerActions($controller);
				if($actions !== false)
				{
					foreach($actions as $action)
					{
						$actionName = $controllerName.'.'.preg_replace('/(?<!^)([A-Z])/', ' \\1', ucfirst($action));
						$authItemCount++;
						$authItemNames[$actionName] = $authItemCount;
						$authItems[$authItemCount] = array('id' => null, 'name' => $actionName, 'type' => EAuthItem::TYPE_OPERATION, 'generated' => true);
					}
				}
			}
		}

		$criteria = new CDbCriteria(array('select' => $missingOnly ? 'name' : '*'));
		$criteria->addColumnCondition(array('generated' => true));
		$criteria->addInCondition('name', array_keys($authItemNames));

		foreach(AuthItem::model()->findAll($criteria) as $authItem)
		{
			$name = $authItem->getattribute('name');
			if(isset($authItemNames[$name]))
			{
				if($missingOnly)
				{
					unset($authItems[$authItemNames[$name]]);
				}
				else
				{
					$authItems[$authItemNames[$name]]['id'] = $authItem->getAttribute('id');
				}
			}
		}

		if($missingOnly)
		{
			return $this->_generatedMissingAuthItems = $authItems;
		}
		return $this->_generatedAuthItems = $authItems;
	}

}