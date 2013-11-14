<?php


class SrbacUtilities
{

	const SRBAC_MODULE_NAME = 'srbac';

	const SUCCESS = 0;
	const OVERWRITE = 1;
	const ERROR = 2;

	private static $_srbacModule;

	private static $_controllerAliases = array();

	private static $_controllers;

	private static $_controllerActions = array();
	
	private static $_providerActions = array();

	public static function getSrbacModule()
	{
		if(self::$_srbacModule === null)
		{
			self::$_srbacModule = self::_findSrbacModule(Yii::app());
			if(self::$_srbacModule === null)
			{
				throw new CException(SrbacModule::t('Unable to locate srbac module. Make sure the module is configured and named {name}.', array('{name}' => self::SRBAC_MODULE_NAME)));
			}
		}
		return self::$_srbacModule;
	}

	private static function _findSrbacModule($parentModule)
	{
		if(($srbacModule = $parentModule->getModule(self::SRBAC_MODULE_NAME)) === null)
		{
			foreach($parentModule->getModules() as $module => $config)
			{
				if(($module = $parentModule->getModule($module)) !== null && ($srbacModule = self::_findSrbacModule($module)) !== null)
				{
					break;
				}
			}
		}
		return $srbacModule;
	}

	/**
	 * Checks if srbac is installed by checking if Auth items table exists.
	 * @return boolean Whether srbac is installed or not
	 */
	public static function isInstalled()
	{
		if(self::getSrbacModule() !== null)
		{
			$authManager = Yii::app()->getAuthManager();
			if($authManager instanceof EDbAuthManager)
			{
				$schema = $authManager->db->getSchema();
				return $schema->getTable($authManager->itemTable) !== null &&
					$schema->getTable($authManager->itemChildTable) !== null &&
					$schema->getTable($authManager->assignmentTable) !== null;
			}
		}
		return false;
	}

	public static function getControllerPathFromAlias($alias)
	{
		if(!isset(self::$_controllerAliases[$alias]))
		{
			$controllerParts = explode('.', $alias);
			$controllerClassName = array_pop($controllerParts);

			$module = Yii::app();
			foreach($controllerParts as $part)
			{
				if(($module = $module->getModule($part)) === null)
				{
					return null;
				}
			}
			$controllerPath = realpath($module->getControllerPath().DIRECTORY_SEPARATOR.$controllerClassName.'.php');
			if($controllerPath === false)
			{
				return null;
			}
			self::$_controllerAliases[$alias] = $controllerPath;
		}

		return self::$_controllerAliases[$alias];
	}

	/**
	 * Gets all the application's controllers and its module's controllers
	 * @return array The controllers
	 */
	public static function getApplicationControllers($application = null)
	{
		if(!isset($application))
		{
			$application = Yii::app();
		}
		if(!isset(self::$_controllers[$application->getId()]))
		{
			self::$_controllers[$application->getId()] = self::_scanModules($application);
		}
		return self::$_controllers[$application->getId()];
	}

	private static function _scanModules($module, &$controllers = array(), $prefix = '')
	{
		if(isset($module))
		{
			if($prefix !== '')
			{
				$prefix .= '.';
			}
			self::_scanControllers($module->getControllerPath(), $controllers, $prefix);
			foreach($module->controllerMap as $controllerId => $config)
			{
				if(is_string($config))
				{
					$controllerPath = Yii::getPathOfAlias($config);
				}
				elseif(isset($config['class']))
				{
					$controllerPath = Yii::getPathOfAlias($config['class']);
				}
				else
				{
					continue;
				}
				if(!in_array(strtolower($prefix.basename($controllerPath)), array_map('strtolower', $controllers)));
				{
					self::_scanControllers($controllerPath.'.php', $controllers, $prefix);
				}
			}
			//Scan modules
			foreach($module->getModules() as $moduleId => $configuration)
			{
				self::_scanModules($module->getModule($moduleId), $controllers, $prefix . $moduleId);
			}
		}
		return $controllers;
	}

	private static function _scanControllers($controllerPath, &$controllers, $prefix = '')
	{
		if(is_dir($controllerPath))
		{
			$file = basename($controllerPath);
			if($file !== '.' && $file !== '..')
			{
				if(($handle = @opendir($controllerPath)))
				{
					while(($file = readdir($handle)) !== false)
					{
						self::_scanControllers($controllerPath . DIRECTORY_SEPARATOR . $file, $controllers, $prefix);
					}
					closedir($handle);
				}
			}
		}
		elseif(is_file($controllerPath))
		{
			$file = basename($controllerPath);
			if(preg_match('/^(.+)Controller.php$/i', $file))
			{
				$controllers[] = $prefix.str_replace('.php', '', $file);
			}
		}
	}

	/**
	 * Extracts the actions from a controller. Beware the controller will be loaded and instantiated.
	 * @param $controller string The alias for a controller as returned by getApplicationControllers()
	 * @return array A list of the controller's defined actions.
	 * */
	public static function getControllerActions($controllerPathAlias)
	{
		if(!isset(self::$_controllerActions[$controllerPathAlias]))
		{
			$controllerPath = self::getControllerPathFromAlias($controllerPathAlias);

			if($controllerPath === false)
			{
				SrbacModule::log(
					"Unable to extract controller actions. The controller path alias '$controllerPathAlias' could not be found.",
					CLogger::LEVEL_WARNING
				);
				return null;
			}

			$controllerClassName = str_ireplace('.php', '', basename($controllerPath));

			$controllerFileContents = @file_get_contents($controllerPath);
			if($controllerFileContents === false)
			{
				SrbacModule::log(
					"Unable to extract controller actions. Unable to read controller file '$controllerPath'.",
					CLogger::LEVEL_WARNING
				);
				return null;
			}
			
			$classNameMap = self::ensureUniqueClassNames($controllerFileContents);
			
			if(!isset($classNameMap[$controllerClassName]))
			{
				SrbacModule::log(
					"Unable to extract controller actions. The controller named '$controllerClassName' could not be found in the file '$controllerPath'.",
					CLogger::LEVEL_WARNING
				);
				return null;
			}
			
			set_error_handler(array(__CLASS__, 'handleErrorWithException'));
			try
			{
				if(class_exists($classNameMap[$controllerClassName], false))
				{
					trigger_error('Controller class still exists after an attempt was made to make class name unique.');
				}
				
				$tempFile = Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'srbac';
				if(!file_exists($tempFile))
				{
					mkdir($tempFile, 0755);
				}
				if(!is_dir($tempFile))
				{
					trigger_error('Bad runtime path. Runtime directory is not a directory or could not be created.');
				}
				else
				{
					chmod($tempFile, 0755);
				}
				
				$tempFile = tempnam($tempFile, 'tempController_');
				
				if($tempFile === false)
				{
					trigger_error('Failed to create a controller temporary file in runtime path. Please check that this location is writable by the application.');
				}

				file_put_contents($tempFile, $controllerFileContents);
				chmod($tempFile, 0755);
				
				if((include $tempFile) === false)
				{
					trigger_error('Failed to include generated temporary controller class file.');
				}
				else if(!class_exists($classNameMap[$controllerClassName], false))
				{
					trigger_error('Controller class could not be found after including generated controller class file.');
				}
				
				unlink($tempFile);
				$tempFile = null;
				
				$reflection = new ReflectionClass($classNameMap[$controllerClassName]);
				
				if(!$reflection->isSubclassOf('CController'))
				{
					SrbacModule::log(
						"Unable to extract controller actions because the controller is not a controller... The class named '$controllerClassName', in file '$controllerPath' must be a subclass of type CController.",
						CLogger::LEVEL_ERROR
					);
					restore_error_handler();
					return null;
				}
				self::$_controllerActions[$controllerPathAlias] = self::getControllerActionsFromReflection($reflection);
				
			}
			catch(Exception $e)
			{
				restore_error_handler();
				if(isset($tempFile) && is_file($tempFile))
				{
					unlink($tempFile);
				}
				SrbacModule::log(
					"An exception was thrown while attempting to extract the actions from the instance of the controller class named '{$controllerClassName}'."
					."\nFile: '{$e->getFile()}'"
					."\nLine: '{$e->getLine()}'"
					."\nMessage: '{$e->getMessage()}'"
					."\nTrace: '{$e->getTraceAsString()}'",
					CLogger::LEVEL_ERROR
				);
				self::$_controllerActions[$controllerPathAlias] = self::getControllerActionsFromText($controllerFileContents, $classNameMap[$controllerClassName]);
			}
			restore_error_handler();
		}
		return self::$_controllerActions[$controllerPathAlias];
	}
	
	public static function getProviderActions($providerPathAlias)
	{
		if(!isset(self::$_providerActions[$providerPathAlias]))
		{
			$providerPath = Yii::getPathOfAlias($providerPathAlias);
		
			if($providerPath === false)
			{
				SrbacModule::log(
					"Unable to extract provider actions. The provider path alias '$providerPathAlias' was invalid.",
					CLogger::LEVEL_WARNING
				);
				return null;
			}
		
			$providerClassName = basename($providerPath);
		
			$providerFileContents = @file_get_contents($providerPath.'.php');
			if($providerFileContents === false)
			{
				SrbacModule::log(
					"Unable to extract provider actions. Unable to read provider file '$providerPath'.",
					CLogger::LEVEL_WARNING
				);
				return null;
			}
				
			$classNameMap = self::ensureUniqueClassNames($providerFileContents);
				
			if(!isset($classNameMap[$providerClassName]))
			{
				SrbacModule::log(
					"Unable to extract provider actions. The provider named '$providerClassName' could not be found in the file '$providerPath'.",
					CLogger::LEVEL_WARNING
				);
				return null;
			}
				
			set_error_handler(array(__CLASS__, 'handleErrorWithException'));
			try
			{
				if(class_exists($classNameMap[$providerClassName], false))
				{
					trigger_error('Provider class still exists after an attempt was made to make the class name unique.');
				}
		
				$tempFile = Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'srbac';
				if(!file_exists($tempFile))
				{
					mkdir($tempFile, 0755);
				}
				if(!is_dir($tempFile))
				{
					trigger_error('Bad runtime path. Runtime directory is not a directory or could not be created.');
				}
				else
				{
					chmod($tempFile, 0755);
				}
		
				$tempFile = tempnam($tempFile, 'tempProvider_');
		
				if($tempFile === false)
				{
					trigger_error('Failed to create a provider temporary file in runtime path. Please check that this location is writable by the application.');
				}
		
				file_put_contents($tempFile, $providerFileContents);
				chmod($tempFile, 0755);
		
				if((include $tempFile) === false)
				{
					trigger_error('Failed to include generated temporary provider class file.');
				}
				else if(!class_exists($classNameMap[$providerClassName], false))
				{
					trigger_error('Provider class could not be found after including generated provider class file.');
				}
		
				unlink($tempFile);
				$tempFile = null;
		
				$reflection = new ReflectionClass($classNameMap[$providerClassName]);
		
				$actionsMethodReflection = $reflection->getMethod('actions');
				if(!$actionsMethodReflection->isStatic())
				{
					trigger_error("Unable to extract provider '$providerClassName' actions because the provider's actions method is not static.");
				}
				else if(!$actionsMethodReflection->isPublic())
				{
					trigger_error("Unable to extract provider '$providerClassName' actions because the provider's actions method is not public.");
				}
				self::$_providerActions[$providerPathAlias] = self::_processActions($actionsMethodReflection->invoke(null));
			}
			catch(Exception $e)
			{
				restore_error_handler();
				if(isset($tempFile) && is_file($tempFile))
				{
					unlink($tempFile);
				}
				SrbacModule::log(
					"An exception was thrown while attempting to extract the actions from the provider named '{$providerClassName}'."
					."\nFile: '{$e->getFile()}'"
					."\nLine: '{$e->getLine()}'"
					."\nMessage: '{$e->getMessage()}'"
					."\nTrace: '{$e->getTraceAsString()}'",
					CLogger::LEVEL_ERROR
				);
				return null;
			}
			restore_error_handler();
		}
		return self::$_providerActions[$providerPathAlias];
	}
	
	public static function handleErrorWithException($errno, $errstr, $errfile, $errline, array $errcontext)
	{
		throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
	}
	
	public static function ensureUniqueClassNames(&$classContentString)
	{
		$tokens = token_get_all($classContentString);

		$tokenCount = count($tokens);
		$textIndex = 0;
		$classNameReplacements = array();
		for($index = 0; $index < $tokenCount; $index++)
		{
			if(is_array($tokens[$index]))
			{
				$textIndex += strlen($tokens[$index][1]);
				if($tokens[$index][0] === T_CLASS)
				{
					$index++;
					if($index < $tokenCount && $tokens[$index][0] === T_WHITESPACE)
					{
						$textIndex += strlen($tokens[$index][1]);
						$index++;
						if($index < $tokenCount && $tokens[$index][0] === T_STRING)
						{
							if(class_exists($tokens[$index][1], false))
							{
								$uniqueClassName = $tokens[$index][1];
								do
								{
									$uniqueClassName = str_shuffle($uniqueClassName.'abcdefghijklmnopqrstuvwxyz');
								} while(class_exists($uniqueClassName, false));
								$classNameReplacements[$tokens[$index][1]] = $uniqueClassName;
								$classContentString = substr_replace($classContentString, $uniqueClassName, $textIndex, strlen($tokens[$index][1]));
							}
							else
							{
								$classNameReplacements[$tokens[$index][1]] = $tokens[$index][1];
							}
							$textIndex += strlen($classNameReplacements[$tokens[$index][1]]);
						}
					}
				}
			}
			else
			{
				$textIndex += strlen($tokens[$index]);
			}
		}

		return $classNameReplacements;
	}

	public static function getControllerActionsFromReflection($reflection)
	{
		$actions = array();
		foreach($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method)
		{
			if(preg_match('/^action(\w+)$/i', $method->getName(), $match) && strcasecmp($match[1], 's'))
			{
				$actions[strtolower($match[1])] = $match[1];
			}
		}

		if($reflection->isInstantiable())
		{
			$controllerObject = $reflection->newInstance($reflection->getName());
			$actions = self::_processActions($controllerObject->actions(), $actions);
		}

		return array_values($actions);
	}
	
	protected static function _processActions($newActions, $actions = array())
	{
		foreach($newActions as $action => $config)
		{
			if(substr($action, -1) === '.') // Check if we're dealing with an action provider.
			{
				if(is_array($config))
				{
					if(!isset($config['class']))
					{
						SrbacModule::log(
							"Invalid action provider configuration found, no class defined. Skipping action provider.",
							CLogger::LEVEL_WARNING
						);
						continue;
					}
					$providerActions = self::getProviderActions($config['class']);
				}
				else
				{
					$providerActions = self::getProviderActions($config);
				}
				if($providerActions !== null)
				{
					foreach($providerActions as $pAction)
					{
						$pAction = substr($action, 0, strlen($action) - 1).'-'.$pAction;
						$actions[strtolower($pAction)] = $pAction;
					}
				}
			}
			else // Just add the action if it isn't a provider
			{
				$actions[strtolower($action)] = $action;
			}
		}
		return $actions;
	}
	
	public static function getControllerActionsFromText($controllerText, $className)
	{
		if(!is_string($controllerText))
		{
			return null;
		}
	
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
						if($index + 2 < $tokenCount && 
							$tokens[$index + 1][0] === T_WHITESPACE && 
							$tokens[$index + 2][0] === T_STRING && 
							$tokens[$index + 2][1] === $className)
						{
							$braceDepth = -1;
						}
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
							preg_match('/^action(\w+)$/i', $tokens[$index + 2][1], $matches) && strcasecmp($matches[1], 's'))
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

	/**
	 * Performs the installation and returns the status
	 * @param int reinstall If true and the tables are already installed they will be dropped and recreated.
	 * @return int status (0:Success, 1:Ovewrite, 2: Error)
	 */
	public static function install($reinstall = false)
	{
		if(!$reinstall && self::isInstalled())
		{
			return self::OVERWRITE; // Already installed
		}

		$auth = Yii::app()->getAuthManager();
		$db = $auth->db;
		$transaction = $db->beginTransaction();
		$schema = $db->getSchema();
		try
		{
			$schema->checkIntegrity(false);
			$sql = '';
			// Drop the tables if they exist
			foreach(array($auth->itemTable, $auth->assignmentTable, $auth->itemChildTable) as $table)
			{
				if(($table = $schema->getTable($table)) !== null)
				{
					$sql .= $schema->dropTable($table->name).';';
				}
			}

			// Create tables
			$sql .= $schema->createTable(
					$auth->itemTable,
					array(
							'id' => 'pk',
							'generated' => 'boolean',
							'name' => 'varchar(64) NOT NULL',
							'type' => 'integer NOT NULL',
							'description' => 'text',
							'bizrule' => 'text',
							'data' => 'text',
							'UNIQUE KEY '.$schema->quoteColumnName('name').' ('.$schema->quoteColumnName('name').')'
					)
			).';';

			$sql .= $schema->createTable(
					$auth->assignmentTable,
					array(
							'item_id' => 'integer NOT NULL',
							'user_id' => 'integer NOT NULL',
							'bizrule' => 'text',
							'data' => 'text',
							'PRIMARY KEY ('.$schema->quoteColumnName('item_id').','.$schema->quoteColumnName('user_id').')'
					)
			).';';

			$sql .= $schema->createTable(
					$auth->itemChildTable,
					array(
							'parent_id' => 'integer NOT NULL',
							'child_id' => 'integer NOT NULL',
							'PRIMARY KEY ('.$schema->quoteColumnName('parent_id').','.$schema->quoteColumnName('child_id').')'
					)
			).';';

			// Add foreign key constraints
			$sql .= $schema->addForeignKey(
					'courseportal_auth_assignment_fk_1',
					$auth->assignmentTable,
					'item_id',
					$auth->itemTable,
					'id',
					'CASCADE',
					'CASCADE').';';
			$sql .= $schema->addForeignKey(
					'courseportal_auth_assignment_fk_2',
					$auth->assignmentTable,
					'user_id',
					self::getSrbacModule()->getStaticUserModel()->tableName(),
					self::getSrbacModule()->userId,
					'CASCADE',
					'CASCADE').';';

			$sql .= $schema->addForeignKey(
					'courseportal_auth_item_child_fk_1',
					$auth->itemChildTable,
					'parent_id',
					$auth->itemTable,
					'id',
					'CASCADE',
					'CASCADE').';';
			$sql .= $schema->addForeignKey(
					'courseportal_auth_item_child_fk_2',
					$auth->itemChildTable,
					'child_id',
					$auth->itemTable,
					'id',
					'CASCADE',
					'CASCADE').';';

			$db->createCommand($sql)->execute();

			$schema->checkIntegrity(true);

			$db->createCommand()->insert($auth->itemTable, array('name' => self::getSrbacModule()->superUser, 'type' => EAuthItem::TYPE_ROLE));

			$transaction->commit();
		}
		catch(Exception $ex)
		{
			$transaction->rollback();
			return self::ERROR;
		}

		return self::SUCCESS; //Success
	}

}
