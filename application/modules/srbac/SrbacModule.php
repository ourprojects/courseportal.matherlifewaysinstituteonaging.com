<?php
/**
 * SrbacModule class file.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * SrbacModule is the module that loads the srbac module in the application
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac
 * @since 1.0.0
 */

class SrbacModule extends CWebModule
{
	//Constants
	const ICON_PACKS = "noia,tango";
	const PRIVATE_ATTRIBUTES = "_icons,_cssPublished,_imagesPublished,defaultController,controllerMap,preload,behaviors";
	const TABLE_NAMES_ERROR = "Srbac is installed but the CDBAuthManger table names in the database are different from those
			in the CDBAuthManager configuration.<br />A common mistake is that names in database are in lowercase.<br />Srbac may not work correctly!!!";

	//Private attributes
	/* @var $_yiiSupportedVersion String The yii version tha srbac supports */
	private $_yiiSupportedVersion = "1.1.0";
	/* @var $_version Srbac version */
	private $_version = "1.3beta";

	// Srbac Attributes
	/* @var $debug If srbac is in debug mode */
	private $_debug = false;
	/* @var $userActions mixed Operations assigned to users by default*/
	private $_userActions = array();
	/* @var $listBoxNumberOfLines integer The number of lines in the assign tabview listboxes  */
	private $_listBoxNumberOfLines = 10;
	/* @var $iconText boolean Display text next to the icons */
	private $_iconText = false;
	/* @deprecated $useAlwaysAllowedGui boolean */
	public $useAlwaysAllowedGui;

	private $_assetsUrl;

	private $_generatedAuthItemNamePrefix = 'srbacgenerated_';

	public $flashKey = 'srbac';
	/* @var $userId String The primary column of the users table*/
	public $userId = 'userId';
	/* @var $username String The username column of the users table*/
	public $username = 'username';
	/* @var $userclass String The name of the users Class*/
	public $userclass = 'User';
	/* @var $superUser String The name of the superuser */
	public $superUser = 'Authorizer';
	/* @var $notAuthorizedView String The view to render when unathorized access*/
	public $notAuthorizedView = 'srbac.views.authitem.unauthorized';
	/* @var $imagesPack String The images theme to use*/
	public $imagesPack = 'noia';
	/**
	 * @var string the ID of the default controller for this module. Defaults to 'default'.
	 */
	public $defaultController = 'authitem';
	/**
	 * @var mixed the layout that is shared by the controllers inside this module.
	 * If a controller has explicitly declared its own {@link CController::layout layout},
	 * this property will be ignored.
	 * If this is null (default), the application's layout or the parent module's layout (if available)
	 * will be used. If this is false, then no layout will be used.
	 */
	public $layout = 'application.views.layouts.main';


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

		//Create the translation component
		$this->setComponents(
				array(
						'tr' => array(
								'class' => 'CPhpMessageSource',
								'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'messages',
								'onMissingTranslation' => "Helper::markWords"
						),
				)
		);
	}

	// SETTERS & GETTERS

	public function getGeneratedAuthItemNamePrefix()
	{
		return $this->_generatedAuthItemNamePrefix;
	}

	public function setGeneratedAuthItemNamePrefix($prefix)
	{
		if(substr($prefix, -1) !== '_')
		{
			$prefix .= '_';
		}
		$this->_generatedAuthItemNamePrefix = preg_quote($prefix);
	}

	public function setDebug($debug)
	{
		if(is_bool($debug))
		{
			$this->_debug = $debug;
		}
		else
		{
			throw new CException("Wrong value for srbac attribute debug in srbac configuration.'".$debug."' is not a boolean.");
		}
	}

	public function getDebug()
	{
		return $this->_debug;
	}

	public function setUserActions($userActions)
	{
		if(is_array($userActions))
		{
			$this->_userActions = $userActions;
		}
		else
		{
			$this->_userActions = explode(",",$userActions);
		}
	}

	public function getUserActions()
	{
		return $this->_userActions;
	}

	public function setIconText($iconText)
	{
		if(is_bool($iconText))
		{
			$this->_iconText = $iconText;
		}
		else
		{
			throw new CException("Wrong value for srbac attribute iconText in srbac configuration.'".$iconText."' is not a boolean.");
		}
	}

	public function getIconText()
	{
		return $this->_iconText;
	}

	/**
	 * Checks if srbac is installed by checking if Auth items table exists.
	 * @return boolean Whether srbac is installed or not
	 */
	public function isInstalled()
	{
		try
		{
			$tables = Yii::app()->getAuthManager()->db->schema->tableNames;
			$itemTableName = Yii::app()->getAuthManager()->itemTable;
			$itemChildTableName = Yii::app()->getAuthManager()->itemChildTable ;
			$assignmentTableName  = Yii::app()->getAuthManager()->assignmentTable ;
			$tablePrefix = AuthItem::model()->getDbConnection()->tablePrefix;

			if(!is_null($tablePrefix))
			{
				$itemTableName = preg_replace('/{{(.*?)}}/',$tablePrefix.'\1',$itemTableName);
				$itemChildTableName = preg_replace('/{{(.*?)}}/',$tablePrefix.'\1',$itemChildTableName);
				$assignmentTableName = preg_replace('/{{(.*?)}}/',$tablePrefix.'\1',$assignmentTableName);
			}

			if(in_array($itemTableName, $tables) &&
					in_array($itemChildTableName, $tables) &&
					in_array($assignmentTableName, $tables)) {
				return true;
			}
			else
			{
				$tables = array_map('strtolower', $tables);
				if(in_array(strtolower($itemTableName), $tables) &&
						in_array(strtolower($itemChildTableName), $tables) &&
						in_array(strtolower($assignmentTableName), $tables))
				{
					$this->_message = self::TABLE_NAMES_ERROR;
					return true;
				}
			}
			return false;
		}
		catch (CDbException  $ex )
		{
			return false;
		}
	}

	/**
	 * Gets the user's class
	 * @return userclass
	 */
	public function getUserModel()
	{
		return new $this->userclass;
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

	/**
	 * Geting all the application's controllers and its module's controllers
	 * @return array The controllers
	 */
	public function getControllers($module = null, $controllers = array())
	{
		if(!isset($module))
		{
			$module = Yii::app();
		}
		$this->_scanModules($module, $controllers);
		return $controllers;
	}

	private function _scanModules($module, &$controllers, $prefix = '')
	{
		if(isset($module))
		{
			$this->_scanControllers($module->getControllerPath(), $controllers, $prefix . ($prefix === '' ? '' : '.'));
			//Scan modules
			foreach(array_keys($module->getModules()) as $moduleId)
			{
				$this->_scanModules($module->getModule($moduleId), $controllers, $prefix . $moduleId);
			}
		}
	}

	private function _scanControllers($controllerPath, &$controllers, $prefix = '')
	{
		if(($handle = @opendir($controllerPath)))
		{
			while(($file = readdir($handle)) !== false)
			{
				$filePath = $controllerPath . DIRECTORY_SEPARATOR . $file;
				if(is_file($filePath))
				{
					if(preg_match('/^(.+)Controller.php$/i', basename($file)))
					{
						$controllers[] = $prefix.str_replace('.php', '', $file);
					}
				}
				elseif(is_dir($filePath) && $file != '.' && $file != '..')
				{
					$this->_scanControllers($filePath, $controllers, $prefix);
				}
			}
			closedir($handle);
		}
	}

	/**
	 * Extracts the actions from a controller. Beware the controller will be loaded and instantiated.
	 * @param $controller string The alias for a controller as returned by getControllers()
	 * @return array A list of the controller's defined actions.
	 * */
	public function extractControllerActions($controller)
	{
		$controllerParts = explode('.', $controller);
		$controllerClassName = array_pop($controllerParts);

		// @ TODO Won't handle disabled modules properly

		$module = Yii::app();
		foreach($controllerParts as $part)
		{
			$module = $module->getModule($part);
		}

		$controllerPath = realpath($module->getControllerPath().DIRECTORY_SEPARATOR.$controllerClassName.'.php');

		if($controllerPath === false)
		{
			return false;
		}

		if(!class_exists($controllerClassName, false))
		{
			include_once($controllerPath);
			if(!class_exists($controllerClassName, false))
			{
				return false;
			}
		}

		$controllerObj = new $controllerClassName($controller);
		$actions = $controllerObj->actions();
		foreach(get_class_methods($controllerObj) as $method)
		{
			if(preg_match('/^action(\w+)$/i', $method, $match) && strcasecmp($match[1], 's'))
			{
				$actions[$match[1]] = true;
			}
		}

		unset($controllerObj);
		return array_keys($actions);
	}

	public function extractControllerActionsFromText($controllerText)
	{
		$tokens = token_get_all($controllerText);

		$braceDepth = 0;
		$ignoredFunctionTypes = array(T_STATIC, T_ABSTRACT, T_PRIVATE, T_PROTECTED);
		$actions = array();
		$tokenCount = count($tokens);
		foreach($tokens as $index => $token)
		{
			if(is_array($token))
			{
				switch($token[0])
				{
					case T_CLASS:
						$braceDepth = -1;
						break;
					case T_FUNCTION:
						if($braceDepth === 1 &&
						$index > 3 &&
						$tokenCount - $index > 2 &&
						(!is_array($tokens[$index - 2]) || !in_array($tokens[$index - 2][0], $ignoredFunctionTypes)) &&
						(!is_array($tokens[$index - 4]) || !in_array($tokens[$index - 4][0], $ignoredFunctionTypes)) &&
						is_array($tokens[$index + 2]) &&
						$tokens[$index + 2][0] === T_STRING &&
						$tokens[$index + 3] === '(' &&
						preg_match('/^action(\w+)$/i', $tokens[$index + 2][1], $matches))
						{
							$actions[] = $matches[1];
						}
						break;
				}
			}
			elseif(is_string($token))
			{
				if($token === '{')
				{
					if($braceDepth < 0)
					{
						$braceDepth = 1;
					}
					elseif($braceDepth > 0)
					{
						$braceDepth++;
					}
				}
				elseif($token === '}' && $braceDepth > 0)
				{
					$braceDepth--;
				}
			}
		}
		return $actions;
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

		$authItems = array();
		$authItemNames = array();
		$controllers = $this->getControllers();
		$authItemCount = 0;
		foreach($controllers as $controller)
		{
			$nameParts = explode('.', $controller);
			$nameParts[] = preg_replace('/^(.+)Controller$/i', '$1', array_pop($nameParts));
			foreach($nameParts as &$part)
			{
				$part = preg_replace('/(?<!^)([A-Z])/', ' \\1', ucfirst($part));
			}

			$controllerName = implode('.', $nameParts);
			$fullName = $this->_generatedAuthItemNamePrefix.$controllerName;
			if(!isset($authItemNames[$fullName]))
			{
				$authItemCount++;
				$authItemNames[$fullName] = $authItemCount;
				$authItems[$authItemCount] = array('id' => null, 'name' => $controllerName, 'type' => EAuthItem::TYPE_TASK, 'generated' => true);

				if(($actions = $this->extractControllerActions($controller)) !== false)
				{
					foreach($actions as $action)
					{
						$actionName = $controllerName.'.'.preg_replace('/(?<!^)([A-Z])/', ' \\1', ucfirst($action));
						$fullName = $this->_generatedAuthItemNamePrefix.$actionName;
						if(!isset($authItemNames[$fullName]))
						{
							$authItemCount++;
							$authItemNames[$fullName] = $authItemCount;
							$authItems[$authItemCount] = array('id' => null, 'name' => $actionName, 'type' => EAuthItem::TYPE_OPERATION, 'generated' => true);
						}
					}
				}
			}
		}

		$criteria = new CDbCriteria(
				array(
						'select' => $missingOnly ? 'name' : '*',
						'condition' => 'name REGEXP :nameRegex',
						'params' => array(':nameRegex' => '^'.$this->_generatedAuthItemNamePrefix.'(.+)$')
				)
		);
		$criteria->addInCondition('name', array_keys($authItemNames));

		foreach(AuthItem::model()->findAll($criteria) as $authItem)
		{
			$fullName = $authItem->getFullName();
			if(isset($authItemNames[$fullName]))
			{
				if($missingOnly)
				{
					unset($authItems[$authItemNames[$fullName]]);
				}
				else
				{
					$authItems[$authItemNames[$fullName]]['id'] = $authItem->getAttribute('id');
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