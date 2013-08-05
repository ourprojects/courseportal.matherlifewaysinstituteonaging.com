<?php

/**
 * AuthitemController class file.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * AuthitemController is the main controller for all of the srbac actions
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.controllers
 * @since 1.0.0
 */
class ManageController extends SBaseController
{

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	public function filters()
	{
		return array(
				array(
					'ext.ERequestMethodFilter.ERequestMethodFilter',
					'config' => array(
							'ajax' => 'ajaxIndex, ajaxView, ajaxUpdate',
							'get' => 'index, ajaxIndex, view, ajaxView',
							'put' => 'update, ajaxUpdate'
					)
				),
				array(
						'ext.EForwardActionFilter.EForwardActionFilter + index, view, update, authItem',
						'map' => array(
								'authItem' => array('view + get', 'create + post', 'update + put', 'delete + delete'),
								'index' => 'ajaxIndex + ajax',
								'view' => 'ajaxView + ajax',
								'update' => 'ajaxUpdate + ajax',
								'create' => 'ajaxCreate + ajax',
								'delete' => 'ajaxDelete + ajax'
						)
				)
			);
	}

	public function actionAuthItem()
	{
		// Placeholder action for creating restful like behavior when request are made to this route.
		// See EForwardActionFilter configuration to see where this action will be forwarded based on request method.
	}

	/**
	 * Displays the authitem manage page
	 */
	public function actionIndex()
	{
		$this->render('index', array('gridModel' => new AuthItem('search'), 'formModel' => new AuthItem()));
	}

	public function actionAjaxIndex()
	{
		if(isset($_GET['ajax']) && $_GET['ajax'] === 'authItem-grid')
		{
			$this->renderPartial('partials/_authItemGrid', array('model' => new AuthItem('search')));
		}
	}

	public function actionView($id = null)
	{
		$authItem = isset($id) ? AuthItem::model()->findByPk($id) : new AuthItem();
		if($authItem === null)
		{
			throw new CHttpException(404, Yii::t('srbac', 'The authorization item with ID {id} could not be found.', array('{id}' => $id)));
		}
		$this->render('index', array('gridModel' => new AuthItem('search'), 'formModel' => $authItem));
	}

	public function actionAjaxView($id = null)
	{
		$authItem = isset($id) ? AuthItem::model()->findByPk($id) : new AuthItem();
		if($authItem === null)
		{
			throw new CHttpException(404, Yii::t('srbac', 'The authorization item with ID {id} could not be found.', array('{id}' => $id)));
		}
		$this->renderPartial('partials/_authItemForm', array('model' => $authItem));
	}

	public function actionUpdate()
	{
		$AuthItem = Yii::app()->getRequest()->getRestParams();

		if(!isset($AuthItem['AuthItem']) || !isset($AuthItem['AuthItem']['id']))
		{
			throw new CHttpException(400, Yii::t('srbac', 'The ID of the authorization item being updated must be specified.'));
		}

		$this->render('index', array('gridModel' => new AuthItem('search'), 'formModel' => $this->update($AuthItem['AuthItem'])));
	}

	public function actionAjaxUpdate()
	{
		$AuthItem = Yii::app()->getRequest()->getRestParams();

		if(!isset($AuthItem['AuthItem']) || !isset($AuthItem['AuthItem']['id']))
		{
			throw new CHttpException(400, Yii::t('srbac', 'The ID of the authorization item being updated must be specified.'));
		}

		$this->renderPartial('partials/_authItemForm', array('model' => $this->update($AuthItem['AuthItem'])));
	}

	public function update($AuthItem)
	{
		$model = AuthItem::model()->findByPk($AuthItem['id']);
		if($model === null)
		{
			throw new CHttpException(404, Yii::t('srbac', 'The authorization item requested to update could not be found.'));
		}
		$model->setAttributes($AuthItem);

		if ($model->save())
		{
			Yii::app()->getUser()->setFlash('updateSuccess', '"'.$model->name.'" '.Yii::t('srbac', 'updated successfully'));
		}

		return $model;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'show' page.
	 */
	public function actionCreate()
	{
		$model = new AuthItem;
		if (isset($_POST['AuthItem']))
		{
			$this->create($_POST['AuthItem'], $model);
		}
		$this->renderPartial('index', array('gridModel' => new AuthItem('search'), 'formModel' => $model));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'show' page.
	 */
	public function actionAjaxCreate()
	{
		$model = new AuthItem;
		if (isset($_POST['AuthItem']))
		{
			$this->create($_POST['AuthItem'], $model);
		}
		$this->renderPartial('partials/_authItemForm', array('model' => $model));
	}

	public function create($AuthItem, $model)
	{
		$model->setAttributes($AuthItem);
		try
		{
			if ($model->save())
			{
				Yii::app()->getUser()->setFlash('updateSuccess', '"'.$model->name.'" ' .Yii::t('srbac', 'created successfully'));
				$model->data = unserialize($model->data);
			}
		}
		catch (CDbException $exc)
		{
			Yii::app()->getUser()->setFlash('updateError', Yii::t('srbac', 'Error while creating the authorization item.') . '<br />');
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'list' page.
	 */
	public function actionDelete()
	{
		$params = Yii::app()->getRequest()->getRestParams();

		if(!isset($params['id']))
		{
			throw new CHttpException(400, Yii::t('srbac', 'The ID of the authorization item to be deleted must be specified.'));
		}
		AuthItem::model()->deleteByPk($params['id']);
		$this->render('index', array('gridModel' => new AuthItem('search'), 'formModel' => new AuthItem()));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'list' page.
	 */
	public function actionAjaxDelete($id = null)
	{
		$params = Yii::app()->getRequest()->getRestParams();

		if(!isset($params['id']))
		{
			throw new CHttpException(400, Yii::t('srbac', 'The ID of the authorization item to be deleted must be specified.'));
		}

		AuthItem::model()->deleteByPk($params['id']);
		$this->render('partials/_authItemForm', array('model' => new AuthItem()));
	}

	/**
	 * Assigns child items to a parent item
	 * @param String $parent The parent item
	 * @param String $children The child items
	 */
	private function _assignChild($parent, $children)
	{
		if ($parent)
		{
			$auth = Yii::app()->getAuthManager();
			/* @var $auth CDbAuthManager */
			foreach ($children as $child)
			{
				$auth->addItemChild($parent, $child);
			}
		}
	}

	/**
	 * Shows a particular model.
	 */
	public function actionShow($id = null, $deleted = false, $delete = false) {
		$model = $this->loadAuthItem($id);
		$this->renderPartial('show',
				array(
					'model' => $model,
					'deleted' => $deleted,
					'updateList' => false,
					'delete' => $delete
				)
		);
	}

	/**
	 * Show the confirmation view for deleting auth items
	 */
	public function actionConfirm($id = null)
	{
		$this->renderPartial('show',
				array('model' => $this->loadAuthItem($id), 'updateList' => false, 'delete' => true),
				false, true);
	}

	/**
	 * Lists all models.
	 */
	public function actionList()
	{
		// Get selected type
		$selectedType = Yii::app()->getRequest()->getParam('selectedType', Yii::app()->getUser()->getState('selectedType'));
		Yii::app()->getUser()->setState('selectedType', $selectedType);

		//Get selected name
		$selectedName = Yii::app()->getRequest()->getParam('name', Yii::app()->getUser()->getState('selectedName'));
		Yii::app()->getUser()->setState('selectedName', $selectedName);

		if (!Yii::app()->getRequest()->getIsAjaxRequest())
		{
			Yii::app()->getUser()->setState('currentPage', Yii::app()->getRequest()->getParam('page', 0) - 1);
		}

		$criteria = new CDbCriteria;

		if ($selectedName !== '')
		{
			$criteria->addSearchCondition('name', $selectedName);
		}

		if ($selectedType !== '')
		{
			$criteria->addCondition(array('type' => $selectedType));
		}

		$pages = new CPagination(AuthItem::model()->count($criteria));
		$pages->pageSize = $this->getModule()->pageSize;
		$pages->applyLimit($criteria);
		$pages->route = 'manage';
		$pages->setCurrentPage(Yii::app()->getUser()->getState('currentPage'));
		$models = AuthItem::model()->findAll($criteria);
		$this->renderPartial('list', array(
				'models' => $models,
				'pages' => $pages,
		), false, true);
	}

	/**
	 * Gets the authitems for the CAutocomplete textbox
	 */
	public function actionAutocomplete($q = null)
	{
		$criteria = new CDbCriteria();
		$criteria->addSearchCondition('name', $q);
		$valuesArray = array();
		foreach (AuthItem::model()->findAll($criteria) as $item)
		{
			$valuesArray[] = $item->name;
		}
		echo implode('\n', $valuesArray);
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
	 */
	public function loadAuthItem($id)
	{
		if ($this->_model === null)
		{
			$this->_model = AuthItem::model()->findByPk($id);

			if ($this->_model === null)
			{
				throw new CHttpException(404, Yii::t('srbac', 'The requested page does not exist.'));
			}
		}
		return $this->_model;
	}

	/**
	 * Scans applications controllers and find the actions for autocreating of
	 * authItems
	 */
	public function actionScan() {
		if (Yii::app()->getRequest()->getParam('module') != '')
		{
			$controller = Yii::app()->getRequest()->getParam('module') .
			Helper::findModule('srbac')->delimeter
			. Yii::app()->getRequest()->getParam('controller');
		}
		else
		{
			$controller = Yii::app()->getRequest()->getParam('controller');
		}
		$controllerInfo = $this->_getControllerInfo($controller);
		$this->renderPartial('createItems',
				array('actions' => $controllerInfo[0],
						'controller' => $controller,
						'delete' => $controllerInfo[2],
						'task' => $controllerInfo[3],
						'taskViewingExists' => $controllerInfo[4],
						'taskAdministratingExists' => $controllerInfo[5],
						'allowed' => $controllerInfo[1]),
				false, true);
	}

	/**
	 * Getting a controllers actions and also th actions that are always allowed
	 * return array
	 * */
	private function _getControllerInfo($controller, $getAll = false)
	{
		$del = Helper::findModule('srbac')->delimeter;
		$actions = array();
		$allowed = array();
		$auth = Yii::app()->getAuthManager();

		//Check if it's a module controller
		if (substr_count($controller,$del ))
		{
			$c = explode($del, $controller);
			$controller = $c[1];
			$module = $c[0] .$del;
			$contPath = Yii::app()->getModule($c[0])->getControllerPath();
			$control = $contPath . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $controller) . '.php';
		}
		else
		{
			$module = '';
			$contPath = Yii::app()->getControllerPath();
			$control = $contPath . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $controller) . '.php';
		}

		$task = $module . str_replace('Controller', '', $controller);

		$taskViewingExists = $auth->getAuthItem($task . 'Viewing') !== null ? true : false;
		$taskAdministratingExists = $auth->getAuthItem($task . 'Administrating') !== null ? true : false;
		$delete = Yii::app()->getRequest()->getParam('delete');

		$h = file($control);
		for ($i = 0; $i < count($h); $i++)
		{
			$line = trim($h[$i]);
			if (preg_match('/^(.+)function( +)action*/', $line)) {
				$posAct = strpos(trim($line), 'action');
				$posPar = strpos(trim($line), '(');
				$action = trim(substr(trim($line),$posAct, $posPar-$posAct));
				$patterns[0] = '/\s*/m';
				$patterns[1] = '#\((.*)\)#';
				$patterns[2] = '/\{/m';
				$replacements[2] = '';
				$replacements[1] = '';
				$replacements[0] = '';
				$action = preg_replace($patterns, $replacements, trim($action));
				$itemId = $module . str_replace('Controller', '', $controller) .
				preg_replace('/action/', '', $action,1);
				if ($action != 'actions')
				{
					if ($getAll)
					{
						$actions[$module . $action] = $itemId;
						if (in_array($itemId, $this->allowedAccess()))
						{
							$allowed[] = $itemId;
						}
					}
					else
					{
						if (in_array($itemId, $this->allowedAccess()))
						{
							$allowed[] = $itemId;
						}
						else
						{
							if ($auth->getAuthItem($itemId) === null && !$delete)
							{
								if (!in_array($itemId, $this->allowedAccess()))
								{
									$actions[$module . $action] = $itemId;
								}
							}
							else if ($auth->getAuthItem($itemId) !== null && $delete)
							{
								if (!in_array($itemId, $this->allowedAccess()))
								{
									$actions[$module . $action] = $itemId;
								}
							}
						}
					}
				}
				else
				{
					//load controller
					if (!class_exists($controller, false))
					{
						require($control);
					}
					$tmp = array();
					$controller_obj = new $controller($controller, $module);
					//Get actions
					$controller_actions = $controller_obj->actions();
					foreach ($controller_actions as $cAction => $value)
					{
						$itemId = $module . str_replace('Controller', '', $controller) . ucfirst($cAction);
						if ($getAll) {
							$actions[$cAction] = $itemId;
							if (in_array($itemId, $this->allowedAccess()))
							{

								$allowed[] = $itemId;
							}
						}
						else
						{
							if (in_array($itemId, $this->allowedAccess()))
							{
								$allowed[] = $itemId;
							}
							else
							{
								if ($auth->getAuthItem($itemId) === null && !$delete)
								{
									if (!in_array($itemId, $this->allowedAccess()))
									{
										$actions[$cAction] = $itemId;
									}
								}
								else if ($auth->getAuthItem($itemId) !== null && $delete)
								{
									if (!in_array($itemId, $this->allowedAccess()))
									{
										$actions[$cAction] = $itemId;
									}
								}
							}
						}
					}
				}
			}
		}
		return array($actions, $allowed, $delete, $task, $taskViewingExists, $taskAdministratingExists);
	}

	/**
	 * Deletes autocreated authItems
	 */
	public function actionAutoDeleteItems()
	{
		$del = Helper::findModule('srbac')->delimeter;
		$cont = str_replace('Controller', '', $_POST['controller']);

		//Check for module controller
		$controllerArr = explode($del, $cont);
		$controller = $controllerArr[sizeof($controllerArr) - 1];


		$actions = isset($_POST['actions']) ? $_POST['actions'] : array();
		$deleteTasks = isset($_POST['createTasks']) ? $_POST['createTasks'] : 0;
		$tasks = isset($_POST['tasks']) ? $_POST['tasks'] : array();
			$message = "<div style='font-weight:bold'>" . Yii::t('srbac', 'Delete operations') . "</div>";
		foreach ($actions as $key => $action)
		{
			if (substr_count($action, "action") > 0)
			{
				//controller action
				$action = trim(preg_replace("/action/", $controller, $action,1));
			}
			else
			{
				// actions actionstr_replace
				$action = $controller . ucfirst($action);
			}
			$auth = AuthItem::model()->findByPk($action);
			if ($auth !== null)
			{
				$auth->delete();
				$message .= "<div>" . $action . " " . Yii::t('srbac', 'deleted') . "</div>";
			}
			else
			{
				$message .= "<div style='color:red;font-weight:bold'>" . Yii::t('srbac',
						'Error while deleting')
						. ' ' . $action . "</div>";
			}
		}

		if ($deleteTasks)
		{
			$message .= "<div style='font-weight:bold'>" . Yii::t('srbac', 'Delete tasks') . "</div>";
			foreach ($tasks as $key => $taskname)
			{
				$auth = AuthItem::model()->findByPk($taskname);
				if ($auth !== null)
				{
					$auth->delete();
					$message .= "<div>" . $taskname . " " . Yii::t('srbac', 'deleted') . "</div>";
				}
				else
				{
					$message .= "<div style='color:red;font-weight:bold'>" . Yii::t('srbac',
							'Error while deleting')
							. ' ' . $taskname . "</div>";
				}
			}
		}
		echo $message;
	}

	/**
	 * Autocreating of authItems
	 */
	public function actionAutoCreateItems()
	{
		$controller = str_replace('Controller', '', $_POST['controller']);
		$actions = isset($_POST['actions']) ? $_POST['actions'] : array();
		$message = '';
		$createTasks = isset($_POST['createTasks']) ? $_POST['createTasks'] : 0;
		$tasks = isset($_POST['tasks']) ? $_POST['tasks'] : array('');

		if ($createTasks == '1')
		{
			$message = "<div style='font-weight:bold'>" . Yii::t('srbac', 'Creating tasks') . "</div>";
			foreach ($tasks as $key => $taskname)
			{
				$auth = new AuthItem();
				$auth->name = $taskname;
				$auth->type = 1;
				try
				{
					if ($auth->save())
					{
						$message .= "'" . $auth->name . "' " .
								Yii::t('srbac', 'created successfully') . "<br />";
					}
					else
					{
						$message .= "<div style='color:red;font-weight:bold'>" . Yii::t('srbac',
								'Error while creating')
								. ' ' . $auth->name . '<br />' .
								Yii::t('srbac', 'Possible there\'s already an item with the same name') . "</div><br />";
					}
				}
				catch (Exception $e)
				{
					$message .= "<div style='color:red;font-weight:bold'>" . Yii::t('srbac',
							'Error while creating')
							. ' ' . $auth->name . '<br />' .
							Yii::t('srbac', 'Possible there\'s already an item with the same name') . "</div><br />";
				}
			}
		}
		$message .= "<div style='font-weight:bold'>" . Yii::t('srbac', 'Creating operations') . "</div>";
		foreach ($actions as $action)
		{
			$act = explode("action", $action,2);
			$a = trim($controller . (count($act) > 1 ? $act[1] : ucfirst($act[0])));
			$auth = new AuthItem();
			$auth->name = $a;
			$auth->type = 0;
			try
			{
				if ($auth->save())
				{
					$message .= "'" . $auth->name . "' " .
							Yii::t('srbac', 'created successfully') . "<br />";
					if ($createTasks == "1")
					{
						if ($this->_isUserOperation($auth->name))
						{
							$this->_assignChild($tasks["user"], array($auth->name));
						}
						$this->_assignChild($tasks["admin"], array($auth->name));
					}
				}
				else
				{
					$message .= "<div style='color:red;font-weight:bold'>" . Yii::t('srbac',
							'Error while creating')
							. ' ' . $auth->name . '<br />' .
							Yii::t('srbac', 'Possible there\'s already an item with the same name') . "</div><br />";
				}
			}
			catch (Exception $e)
			{
				$message .= "<div style='color:red;font-weight:bold'>" . Yii::t('srbac',
						'Error while creating')
						. ' ' . $auth->name . '<br />' .
						Yii::t('srbac', 'Possible there\'s already an item with the same name') . "</div><br />";
			}
		}
		echo $message;
	}

	/**
	 * Gets the controllers and the modules' controllers for the autocreating of
	 * authItems
	 */
	public function actionAuto()
	{
		$controllers = $this->_getControllers();
		$this->renderPartial('wizard', array('controllers' => $controllers), false, true);
	}

	/**
	 * Geting all the application's and  modules controllers
	 * @return array The application's and modules controllers
	 */
	private function _getControllers()
	{
		$contPath = Yii::app()->getControllerPath();

		$controllers = $this->_scanDir($contPath);

		//Scan modules
		$modules = Yii::app()->getModules();
		$modControllers = array();
		foreach ($modules as $mod_id => $mod)
		{
			$moduleControllersPath = Yii::app()->getModule($mod_id)->controllerPath;
			if(is_dir($moduleControllersPath))
			{
				$modControllers = $this->_scanDir($moduleControllersPath, $mod_id, '', $modControllers);
			}
		}
		return array_merge($controllers, $modControllers);
	}

	private function _scanDir($contPath, $module='', $subdir='', $controllers = array())
	{
		$handle = opendir($contPath);
		$del = Helper::findModule('srbac')->delimeter;
		while (($file = readdir($handle)) !== false)
		{
			$filePath = $contPath . DIRECTORY_SEPARATOR . $file;
			if (is_file($filePath))
			{
				if (preg_match('/^(.+)Controller.php$/', basename($file)))
				{
					if ($this->_extendsSBaseController($filePath))
					{
						$controllers[] = (($module) ? $module . $del : '') .
						(($subdir) ? $subdir . '.' : '') .
						str_replace('.php', '', $file);
					}
				}
			}
			else if (is_dir($filePath) && $file != '.' && $file != '..')
			{
				$controllers = $this->_scanDir($filePath, $module, $file, $controllers);
			}
		}
		return $controllers;
	}

	private function _extendsSBaseController($controller)
	{
		$c = basename(str_replace('.php', '', $controller));
		if (!class_exists($c, false))
		{
			include_once $controller;
		}
		else
		{

		}
		$cont = new $c($c);

		if ($cont instanceof SBaseController)
		{
			return true;
		}
		return false;
	}

	/**
	 *
	 * @param <type> $operation
	 * @return <type> Checks if an operations should be assigned to using task or not
	 */
	function _isUserOperation($operation)
	{
		foreach ($this->getModule()->userActions as $oper)
		{
			if (strpos(strtolower($operation), strtolower($oper)) > -1)
			{
				return true;
			}
		}
		return false;
	}

	/**
	 * Displays the editor for the alwaysAllowed items
	 */
	public function actionEditAllowed()
	{
		if (!Helper::isAlwaysAllowedFileWritable())
		{
			echo Yii::t('srbac', 'The always allowed file is not writeable by the server') . '<br />';
			echo 'File : ' . $this->getModule()->getAlwaysAllowedFile();
			return;
		}
		$controllers = $this->_getControllers();
		foreach ($controllers as $n => $controller)
		{
			$info = $this->_getControllerInfo($controller, true);
			$c[$n]['title'] = $controller;
			$c[$n]['actions'] = $info[0];
			$c[$n]['allowed'] = $info[1];
		}
		$this->renderPartial('allowed', array('controllers' => $c), false, true);
	}

	public function actionSaveAllowed()
	{
		if (!Helper::isAlwaysAllowedFileWritable())
		{
			echo Yii::t('srbac', 'The always allowed file is not writable by the server') . '<br />';
			echo 'File : ' . $this->getModule()->getAlwaysAllowedFile();
			return;
		}
		$allowed = array();
		foreach ($_POST as $controller)
		{
			foreach ($controller as $action)
			{
				//Delete items
				$auth = AuthItem::model()->findByPk($action);
				if ($auth !== null)
				{
					$auth->delete();
				}
				$allowed[] = $action;
			}
		}

		$handle = fopen($this->getModule()->getAlwaysAllowedFile(), 'wb');
		fwrite($handle, "<?php \n return array(\n\t'" . implode("',\n\t'", $allowed) . "'\n);\n?>");
		fclose($handle);
		$this->renderPartial('saveAllowed', array('allowed' => $allowed));
	}

	public function actionClearObsolete()
	{
		$obsolete = array();
		$controllers = $this->_getControllers();
		$controllers = array_map(array($this, 'replace'), $controllers);
		/* @var $auth CDbAuthManager */
		$auth = Yii::app()->getAuthManager();
		$items = array_merge($auth->tasks, $auth->operations);
		foreach ($controllers as $contId => $cont)
		{
			foreach ($items as $item => $val)
			{
				$length = strlen($cont);
				$contItem = substr($item, 0, $length);
				if ($cont == $contItem)
				{
					unset($items[$item]);
				}
			}
		}
		foreach ($items as $key => $value)
		{
			$obsolete[$key] = $key;
		}
		$this->renderPartial('clearObsolete', array('items' => $obsolete), false, true);
	}

	private function replace($value)
	{
		return str_replace('Controller', '', $value);
	}

	public function actionDeleteObsolete()
	{
		$removed = array();
		$notRemoved = array();
		if (isset($_POST['items']))
		{
			$auth = Yii::app()->getAuthManager();
			foreach ($_POST['items'] as $item)
			{
				if ($auth->removeAuthItem($item))
				{
					$removed[] = $item;
				}
				else
				{
					$notRemoved[] = $item;
				}
			}
		}
		$this->renderPartial('obsoleteRemoved', array('removed' => $removed, 'notRemoved' => $notRemoved));
	}

}

