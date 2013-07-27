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
class AuthitemController extends SBaseController
{

	/**
	 * @var string specifies the default action to be 'list'.
	 */
	public $defaultAction = 'frontpage';
	/**
	 *  @var $breadcrumbs
	 */
	public $breadcrumbs;
	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	public function init()
	{
		parent::init();
	}

	/**
	 * Checks if the user has the authority role
	 * @param String $action The current action
	 * @return Boolean true if user has the authority role
	 */
	protected function beforeAction($action)
	{
		if (!$this->getModule()->isInstalled() && $action->id != 'install')
		{
			$this->redirect(array('install'));
			return false;
		}

		if ($this->getModule()->debug)
		{
			return true;
		}

		if (Yii::app()->getUser()->checkAccess(Helper::findModule('srbac')->superUser) )
		{
			return true;
		}
		else
		{
			parent::beforeAction($action);
		}
	}

	public function actionGetUsers($term)
	{
		$list = Helper::getAllusers($term);
		echo CJSON::encode($list);
	}

	/**
	 * Assigns roles to a user
	 *
	 * @param int $userid The user's id
	 * @param String $roles The roles to assign
	 * @param String $bizRules Not used yet
	 * @param String $data Not used yet
	 */
	private function _assignUser($userid, $roles, $bizRules, $data)
	{
		if ($userid)
		{
			$auth = Yii::app()->getAuthManager();
			/* @var $auth CDbAuthManager */
			foreach ($roles as $role)
			{
				$auth->assign($role, $userid, $bizRules, $data);
			}
		}
	}

	/**
	 * Revokes roles from a user
	 * @param int $userid The user's id
	 * @param String $roles The roles to revoke
	 * @return boolean whether revocation is successful
	 */
	private function _revokeUser($userid, $roles)
	{
		if ($userid)
		{
			/* @var $auth CDbAuthManager */
			$auth = Yii::app()->getAuthManager();

			$rls = array_unique($roles);
			if(in_array($this->getModule()->superUser, $rls) &&
					Yii::app()->getAuthManager()->getAuthAssignmentCount($this->getModule()->superUser) == 1 &&
					Yii::app()->getAuthManager()->isAssigned($this->getModule()->superUser, $userid))
			{
				return false;
			}

			foreach ($rls as $role)
			{
				$auth->revoke($role, $userid);
			}
			return true;
		}
		return false;
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
	 * Revokes child items from a parent item
	 * @param String $parent The parent item
	 * @param String $children The child items
	 */
	private function _revokeChild($parent, $children) {
		if ($parent)
		{
			$auth = Yii::app()->getAuthManager();
			/* @var $auth CDbAuthManager */
			foreach ($children as $child)
			{
				$auth->removeItemChild($parent, $child);
			}
		}
	}

	/**
	 * The assignment action
	 * First checks if the user is authorized to perform this action
	 * Then initializes the needed variables for the assign view.
	 * If there's a post back it performs the assign action
	 */
	public function actionAssign($assignRoles = 0, $revokeRoles = 0, $assignTasks = 0, $revokeTasks = 0, $assignOpers = 0, $revokeOpers = 0)
	{
		//CVarDumper::dump($_POST, 5, true);
		$userid = isset($_POST[$this->getModule()->userclass][$this->getModule()->userid]) ?
		$_POST[$this->getModule()->userclass][$this->getModule()->userid] :
		'';

		//Init values
		$model = AuthItem::model();
		$this->_setMessage('');

		$auth = Yii::app()->getAuthManager();
		/* @var $auth CDbAuthManager */
		$authItemAssignName = isset($_POST['AuthItem']['name']['assign']) ? $_POST['AuthItem']['name']['assign'] : '';

		$assBizRule = isset($_POST['Assignments']['bizrule']) ? $_POST['Assignments']['bizrule'] : '';
		$assData = isset($_POST['Assignments']['data']) ? $_POST['Assignments']['data'] : '';

		$authItemRevokeName = isset($_POST['AuthItem']['name']['revoke']) ? $_POST['AuthItem']['name']['revoke'] : '';

		if (isset($_POST['AuthItem']['name']))
		{
			if (isset($_POST['AuthItem']['name'][0]))
			{
				$authItemName = $_POST['AuthItem']['name'][0];
			}
			else
			{
				$authItemName = $_POST['AuthItem']['name'];
			}
		}

		$assItemName = isset($_POST['Assignments']['item_id']) ? intval($_POST['Assignments']['item_id']) : '';

		if ($assignRoles && is_array($authItemAssignName))
		{
			$this->_assignUser($userid, $authItemAssignName, $assBizRule, $assData);
			$this->_setMessage(Yii::t('srbac', 'Role(s) Assigned'));
		}
		else if ($revokeRoles && is_array($authItemRevokeName))
		{
			if ($this->_revokeUser($userid, $authItemRevokeName))
			{
				$this->_setMessage(Yii::t('srbac', 'Role(s) Revoked'));
			}
			else
			{
				$this->_setMessage(Yii::t('srbac', 'Can\'t revoke this role'));
			}
		}
		else if ($assignTasks && is_array($authItemAssignName))
		{
			$this->_assignChild($authItemName, $authItemAssignName);
			$this->_setMessage(Yii::t('srbac', 'Task(s) Assigned'));
		}
		else if ($revokeTasks && is_array($authItemRevokeName))
		{
			$this->_revokeChild($authItemName, $authItemRevokeName);
			$this->_setMessage(Yii::t('srbac', 'Task(s) Revoked'));
		}
		else if ($assignOpers && is_array($authItemAssignName))
		{
			$this->_assignChild($assItemName, $authItemAssignName);
			$this->_setMessage(Yii::t('srbac', 'Operation(s) Assigned'));
		}
		else if ($revokeOpers && is_array($authItemRevokeName))
		{
			$this->_revokeChild($assItemName, $authItemRevokeName);
			$this->_setMessage(Yii::t('srbac', 'Operation(s) Revoked'));
		}
		//If not ajax show the assign page
		if (!Yii::app()->getRequest()->getIsAjaxRequest())
		{
			$this->render('assign', array(
					'model' => $model,
					'message' => $this->_getMessage(),
					'userid' => $userid,
			));
		}
		else
		{
			// assign to user show the user tab
			if ($userid != '')
			{
				$this->_getTheRoles();
			}
			else if ($assignTasks || $revokeTasks)
			{
				$this->_getTheTasks();
			}
			else if ($assignOpers || $revokeOpers)
			{
				$this->_getTheOpers();
			}
		}
	}

	/**
	 * Used by Ajax to get the roles of a user when he is selected in the Assign
	 * roles to user tab
	 */
	public function actionGetRoles()
	{
		$this->_setMessage('');
		$this->_getTheRoles();
	}

	/**
	 * Gets the assigned and not assigned roles of the selected user
	 */
	private function _getTheRoles()
	{
		$model = new AuthItem();
		$userid = $_POST[Helper::findModule('srbac')->userclass][$this->getModule()->userid];
		$data['userAssignedRoles'] = Helper::getUserAssignedRoles($userid);
		$data['userNotAssignedRoles'] = Helper::getUserNotAssignedRoles($userid);
		if ($data['userAssignedRoles'] == array())
		{
			$data['revoke'] = array('name' => 'revokeUser', 'disabled' => true);
		}
		else
		{
			$data['revoke'] = array('name' => 'revokeUser');
		}
		if ($data['userNotAssignedRoles'] == array())
		{
			$data['assign'] = array('name' => 'assignUser', 'disabled' => true);
		}
		else
		{
			$data['assign'] = array('name' => 'assignUser');
		}
		$this->renderPartial('tabViews/userAjax',
				array('model' => $model, 'userid' => $userid, 'data' => $data, 'message' => $this->_getMessage()),
				false, true);
	}

	/**
	 * Used by Ajax to get the tasks of a role when it is selected in the Assign
	 * tasks to roles tab
	 */
	public function actionGetTasks()
	{
		$this->_setMessage('');
		$this->_getTheTasks();
	}

	/**
	 * Gets the assigned and not assigned tasks of the selected user
	 */
	private function _getTheTasks()
	{
		$model = new AuthItem();
		$name = isset($_POST['AuthItem']['name'][0]) ? $_POST['AuthItem']['name'][0] : '';

		$data['roleAssignedTasks'] = Helper::getRoleAssignedTasks($name);
		$data['roleNotAssignedTasks'] = Helper::getRoleNotAssignedTasks($name);

		if ($data['roleAssignedTasks'] == array())
		{
			$data['revoke'] = array('name' => 'revokeTask', 'disabled' => true);
		}
		else
		{
			$data['revoke'] = array('name' => 'revokeTask');
		}
		if ($data['roleNotAssignedTasks'] == array())
		{
			$data['assign'] = array('name' => 'assignTasks', 'disabled' => true);
		}
		else
		{
			$data['assign'] = array('name' => 'assignTasks');
		}
		$this->renderPartial('tabViews/roleAjax',
				array('model' => $model, 'name' => $name, 'data' => $data, 'message' => $this->_getMessage()), false, true);
	}

	/**
	 * Used by Ajax to get the operations of a task when he is selected in the Assign
	 * operations to tasks tab
	 */
	public function actionGetOpers()
	{
		$this->_setMessage('');
		$this->_getTheOpers();
	}

	/**
	 * Gets the assigned and not assigned operations of the selected user
	 */
	private function _getTheOpers()
	{
		$model = new AuthItem();

		$itemId = isset($_POST['Assignments']['item_id']) ? intval($_POST['Assignments']['item_id']) : null;

		$data['taskAssignedOpers'] = Helper::getTaskAssignedOpers($itemId);
		$data['taskNotAssignedOpers'] = Helper::getTaskNotAssignedOpers($itemId);
		$data['revoke'] = array('name' => 'revokeOpers', 'disabled' => empty($data['taskAssignedOpers']));
		$data['assign'] = array('name' => 'assignOpers', 'disabled' => empty($data['taskNotAssignedOpers']));

		$this->renderPartial('tabViews/taskAjax',
				array('model' => $model, 'itemId' => $itemId, 'data' => $data, 'message' => $this->_getMessage()), false, true);
	}

	/**
	 * Shows a particular model.
	 */
	public function actionShow($id = null, $deleted = false, $delete = false) {
		$model = $this->loadAuthItem($id);
		$this->renderPartial('manage/show',
				array(
					'model' => $model,
					'deleted' => $deleted,
					'updateList' => false,
					'delete' => $delete
				)
		);
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
			$model->attributes = $_POST['AuthItem'];
			try
			{
				if ($model->save())
				{

					Yii::app()->getUser()->setFlash('updateSuccess', '"'.$model->name.'" ' .Yii::t('srbac', 'created successfully'));
					$model->data = unserialize($model->data);
					$this->renderPartial('manage/update', array('model' => $model));
				}
				else
				{
					$this->renderPartial('manage/create', array('model' => $model));
				}
			}
			catch (CDbException $exc)
			{
				Yii::app()->getUser()->setFlash('updateError',
				Yii::t('srbac', 'Error while creating')
				. ' ' . $model->name . '<br />' .
				Yii::t('srbac', 'Possible there\'s already an item with the same name'));
				$this->renderPartial('manage/create', array('model' => $model));
			}
		}
		else
		{
			$this->renderPartial('manage/create', array('model' => $model));
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'show' page.
	 */
	public function actionUpdate($id = null)
	{
		$model = $this->loadAuthItem($id);
		$message = '';
		if (isset($_POST['AuthItem']))
		{
			//$model->oldName = isset($_POST['oldName']) ? $_POST['oldName'] : $_POST['name'];
			$model->attributes = $_POST['AuthItem'];

			if ($model->save())
			{
				Yii::app()->getUser()->setFlash('updateSuccess', '"'.$model->name.'" '.Yii::t('srbac', 'updated successfully'));
			}
			else
			{

			}
		}
		$this->renderPartial('manage/update', array('model' => $model));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'list' page.
	 */
	public function actionDelete($id = null)
	{
		if (Yii::app()->getRequest()->getIsAjaxRequest())
		{

			$this->loadAuthItem($id)->delete();
			//$this->processAdminCommand();
			//$criteria = new CDbCriteria;
			//$pages = new CPagination(AuthItem::model()->count($criteria));
			//$pages->pageSize = $this->getModule()->pageSize;
			//$pages->applyLimit($criteria);
			//$sort = new CSort('AuthItem');
			//$sort->applyOrder($criteria);
			//$models = AuthItem::model()->findAll($criteria);

			Yii::app()->getUser()->setFlash('updateName',
			Yii::t('srbac', 'Updating list'));
			$this->renderPartial('manage/show', array(
					//'models' => $models,
					//'pages' => $pages,
					//'sort' => $sort,
					'updateList' => true,
			), false, false);
		}
		else
		{
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Show the confirmation view for deleting auth items
	 */
	public function actionConfirm($id = null)
	{
		$this->renderPartial('manage/show',
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
		$this->renderPartial('manage/list', array(
				'models' => $models,
				'pages' => $pages,
		), false, true);
	}

	/**
	 * Installs srbac (only in debug mode)
	 */
	public function actionInstall()
	{
		if ($this->getModule()->debug)
		{
			$action = Yii::app()->getRequest()->getParam('action', '');
			$demo = Yii::app()->getRequest()->getParam('demo', 0);
			if ($action)
			{
				$error = Helper::install($action, $demo);
				if ($error == 1)
				{
					$this->render('install/overwrite', array('demo' => $demo));
				}
				else if ($error == 0)
				{
					$this->render('install/success', array('demo' => $demo));
				}
				else if ($error == 2)
				{
					$error = Yii::t('srbac', 'Error while installing srbac.<br />Please check your database and try again');
					$this->render('install/error', array('demo' => $demo, 'error' => $error));
				}
			}
			else
			{
				$this->render('install/install');
			}
		}
		else
		{
			$error = Yii::t('srbac', 'srbac must be in debug mode');
			$this->render('install/error', array('error' => $error));
		}
	}

	/**
	 * Displayes the authitem manage page
	 */
	public function actionManage($page = 0, $selectedType = '', $full = false)
	{
		$this->processAdminCommand();
		if ($selectedType === '' && Yii::app()->getUser()->hasState('selectedType'))
		{
			$selectedType = Yii::app()->getUser()->getState('selectedType');
		}

		Yii::app()->getUser()->setState('selectedType', $selectedType);

		if (!Yii::app()->getRequest()->getIsAjaxRequest())
		{
			Yii::app()->getUser()->setState('currentPage', $page - 1);
		}

		$criteria = new CDbCriteria;
		if ($selectedType !== '')
		{
			$criteria->addColumnCondition(array('type' => $selectedType));
		}

		$pages = new CPagination(AuthItem::model()->count($criteria));
		$pages->route = 'manage';
		$pages->pageSize = $this->getModule()->pageSize;
		$pages->applyLimit($criteria);
		$pages->setCurrentPage(Yii::app()->getUser()->getState('currentPage'));

		$sort = new CSort('AuthItem');
		$sort->applyOrder($criteria);

		$models = AuthItem::model()->findAll($criteria);
		if (Yii::app()->getRequest()->getIsAjaxRequest())
		{
			if($full)
			{
				$this->renderPartial('manage/manage', array(
						'models' => $models,
						'pages' => $pages,
						'sort' => $sort,
						'full' => $full
				), null, true);
			}
			else
			{
				$this->renderPartial('manage/list', array(
						'models' => $models,
						'pages' => $pages,
						'sort' => $sort,
						'full' => $full,
				), null, true);
			}
		}
		else
		{
			$this->render('manage/manage', array(
					'models' => $models,
					'pages' => $pages,
					'sort' => $sort,
					'full' => $full,
			));
		}
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

	// TODO What is this piece of code used for?
	/**
	 * Executes any command triggered on the admin page.
	 */
	protected function processAdminCommand()
	{
		/*if (isset($_POST['command'], $_POST['id']) && $_POST['command'] === 'delete')
		{
			// $this->loadAuthItem($_POST['id'])->delete();
			// reload the current page to avoid duplicated delete actions
			//$this->refresh();
		}*/
	}

	//TODO These messages should be replaced by flash messages

	/**
	 * Sets the message that is displayed to the user
	 * @param String $mess  The message to show
	 */
	private function _setMessage($mess)
	{
		Yii::app()->getUser()->setState('message', $mess);
	}

	/**
	 *
	 * @return String Gets the message that will be displayed to the user
	 */
	private function _getMessage()
	{
		return Yii::app()->getUser()->getState('message');
	}

	/**
	 * Displayes the assignments page with no user selected
	 */
	public function actionAssignments()
	{
		$this->render('assignments', array('id' => 0));
	}

	/**
	 * Show a user's assignments.The user is passed by $_GET
	 */
	public function actionShowAssignments()
	{
		$userid = isset($_GET['id']) ? $_GET['id'] : $_POST[Helper::findModule('srbac')->userclass][$this->getModule()->userid];
		$user = $this->getModule()->getUserModel()->findByPk($userid);
		$username = $user->{$this->getModule()->username};

		if ($userid > 0)
		{
			$auth = Yii::app()->getAuthManager();
			/* @var $auth CDbAuthManager */
			$ass = $auth->getAuthItems(2, $userid);
			$r = array();
			foreach ($ass as $i => $role)
			{
				$curRole = $role->name;
				$r[$i] = $curRole;
				$children = $auth->getItemChildren($curRole);
				$r[$i] = array();
				foreach ($children as $j => $task)
				{
					$curTask = $task->name;
					$r[$i][$j] = $curTask;
					$grandchildren = $auth->getItemChildren($curTask);
					$r[$i][$j] = array();
					foreach ($grandchildren as $k => $oper)
					{
						$curOper = $oper->name;
						$r[$i][$j][$k] = $curOper;
					}
				}
			}
			// Add always allowed opers
			$r['AlwaysAllowed'][''] = $this->getModule()->getAlwaysAllowed();
			$this->renderPartial('userAssignments', array('data' => $r, 'username' => $username));
		}
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
		$this->renderPartial('manage/createItems',
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
		$this->renderPartial('manage/wizard', array(
				'controllers' => $controllers), false, true);
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
			$modControllers = $this->_scanDir($moduleControllersPath, $mod_id, '', $modControllers);
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
	 * Displays srbac frontpage
	 */
	public function actionFrontPage()
	{
		$this->render('frontpage');
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
		$this->renderPartial('manage/clearObsolete', array('items' => $obsolete), false, true);
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
		$this->renderPartial('manage/obsoleteRemoved', array('removed' => $removed, 'notRemoved' => $notRemoved));
	}

}

