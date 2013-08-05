<?php

class AssignController extends SBaseController
{

	/**
	 * The assignment action
	 * First checks if the user is authorized to perform this action
	 * Then initializes the needed variables for the assign view.
	 * If there's a post back it performs the assign action
	 */
	public function actionIndex($AuthItem = array())
	{
		$this->render('index', array(
				'model' => AuthItem::model(),
				'assignedRoles' => array(),
				'notAssignedRoles' => array(),
				'assignedTasks' => array(),
				'notAssignedTasks' => array(),
				'assignedOperations' => array(),
				'notAssignedOperations' => array(),
		));
	}

	public function actionRoles($userId = null)
	{
		if(Yii::app()->getRequest()->getIsPutRequest() || Yii::app()->getRequest()->getIsDeleteRequest())
		{
			$requestVars = Yii::app()->getRequest()->getRestParams();
			if(!isset($requestVars['userId']))
			{
				$message = Yii::t('srbac', 'No User specified to '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assign' : 'revoke').' Role(s).');
			}
			else
			{
				$userId = $requestVars['userId'];
				if(!isset($requestVars['roles']))
				{
					$message = Yii::t('srbac', 'No Role(s) were specified to be '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assigned to' : 'revoked from').' the User.');
				}
				else
				{
					$auth = Yii::app()->getAuthManager();
					$method = Yii::app()->getRequest()->getIsPutRequest() ? 'assign' : 'revoke';
					foreach ($requestVars['roles'] as $role)
					{
						$auth->$method($role, $userId);
					}
					$message = Yii::t('srbac', 'Role'.(count($requestVars['roles']) > 1 ? 's' : '').' '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assigned to' : 'revoked from').' User.');
				}
			}
		}
		else
		{
			$message = '';
		}

		$this->renderPartial(
				'partials/userAjax',
				array(
						'model' => new AuthItem(),
						'message' => $message,
						'userId' => $userId,
						'assignedRoles' => self::getUserAssignedRoles($userId),
						'notAssignedRoles' => self::getUserNotAssignedRoles($userId)
				)
		);
	}

	public function actionChildren($parentType, $childType, $parent = null)
	{
		if($parentType == $childType)
		{
			throw new CHttpException(400, Yii::t('srbac', 'The parent type and child type cannot be the same.'));
		}

		if(Yii::app()->getRequest()->getIsPutRequest() || Yii::app()->getRequest()->getIsDeleteRequest())
		{
			$requestVars = Yii::app()->getRequest()->getRestParams();
			if(!isset($requestVars['parent']))
			{
				$message = Yii::t('srbac', 'No '.AuthItem::$TYPES[$parentType].' specified to '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assign' : 'revoke').' '.AuthItem::$TYPES[$childType].'(s).');
			}
			else
			{
				$parent = $requestVars['parent'];
				if(!isset($requestVars['children']))
				{
					$message = Yii::t('srbac', 'No '.AuthItem::$TYPES[$childType].'(s) specfied to '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assign to' : 'revoke from').' '.AuthItem::$TYPES[$parentType].'.');
				}
				else
				{
					$method = Yii::app()->getRequest()->getIsPutRequest() ? 'addItemChild' : 'removeItemChild';
					$auth = Yii::app()->getAuthManager();
					foreach ($requestVars['children'] as $child)
					{
						$auth->$method($parent, $child);
					}
					$message = Yii::t('srbac', AuthItem::$TYPES[$childType].(count($requestVars['children']) > 1 ? 's' : '').' '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assigned to' : 'revoked from').' '.AuthItem::$TYPES[$parentType].'.');
				}
			}
		}
		else
		{
			$message = '';
		}

		if(isset($parent))
		{
			$authItem =  AuthItem::model()->findByPk($parent);
			if($authItem === null)
			{
				throw new CHttpException(404, Yii::t('srbac', 'The authorization item with id {id} could not be found.', array('{id}' => $id)));
			}
			else if($authItem->type != $parentType)
			{
				throw new CHttpException(400, Yii::t('srbac', 'The authorization item with id {id} does not match the specified parent type.', array('{id}' => $parent)));
			}
			$children = self::getChildren($parent, $childType);
			$notChildren = self::getNotChildren($parent, $childType);
		}
		else
		{
			$children = array();
			$notChildren = array();
		}

		$this->renderPartial(
				'partials/childrenAjax',
				array(
						'model' => new AuthItem(),
						'id' => $parent,
						'message' => $message,
						'parentType' => $parentType,
						'childType' => $childType,
						'children' => $children,
						'notChildren' => $notChildren
				)
		);
	}

	/**
	 * Return the roles assigned to a user or all the roles if no userid is provided
	 * @param integer $userid The id of the user
	 * @return array An array of roles(AuthItems) assigned to the user
	 */
	public static function getUserAssignedRoles($userid)
	{
		$criteria = new CDbCriteria(array('scopes' => array('type' => CAuthItem::TYPE_ROLE), 'with' => 'assignments', 'order' => 't.name ASC'));
		if($userid)
		{
			$criteria->addColumnCondition(array('assignments.user_id' => $userid));
		}
		return AuthItem::model()->findAll($criteria);
	}

	/**
	 * Gets the roles that are not assigned to the user by getting all the roles and
	 * removes those assigned to the user, or all the roles if no user id is provided
	 * @param integer $userid The user's id
	 * @return array An array of roles(AuthItems) not assigned to the user
	 */
	public static function getUserNotAssignedRoles($userid)
	{
		$criteria = new CDbCriteria(array('scopes' => array('type' => CAuthItem::TYPE_ROLE), 'order' => 't.name ASC', 'group' => 't.id', 'having' => 'MIN(assignments.user_id) IS NULL'));
		if($userid)
		{
			$criteria->with = array('assignments' => array('on' => 'assignments.user_id=:user_id', 'params' => array(':user_id' => $userid)));
		}
		else
		{
			$criteria->with = 'assignments';
		}
		return AuthItem::model()->findAll($criteria);
	}

	/**
	 * Return the operations assigned to a task or all the operations if no task
	 * is provided
	 * @param mixed $item Identifier of the task
	 * @return array An array of operations(AuthItems) assigned to the task
	 */
	public static function getChildren($item, $type)
	{
		$criteria = new CDbCriteria(array('scopes' => array('type' => $type), 'order' => 't.name ASC'));
		if($item)
		{
			$itemId = Yii::app()->getAuthManager()->getItemIdentity($item);
			$criteria->with = 'parents';
			$criteria->addColumnCondition(array('parents.'.$itemId[0] => $itemId[1]));
		}
		return AuthItem::model()->findAll($criteria);
	}

	/**
	 * Return the operations not assigned to a task by getting all the operations
	 * and removing those assigned to the task, or all the operations if no task
	 * is provided
	 * @param mixed $item Identifier of the task
	 * @return array An array of operations(AuthItems) not assigned to the task
	 */
	public static function getNotChildren($item, $type) {
		$criteria = new CDbCriteria(array('scopes' => array('type' => $type), 'order' => 't.name ASC', 'group' => 't.id', 'having' => 'MIN(parents.id) IS NULL'));
		if($item)
		{
			$itemId = Yii::app()->getAuthManager()->getItemIdentity($item);
			$criteria->with = array('parents' => array('on' => 'parents.'.$itemId[0].'=:id', 'params' => array(':id' => $itemId[1])));
		}
		return AuthItem::model()->findAll($criteria);
	}

}