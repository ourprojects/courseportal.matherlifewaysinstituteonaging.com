<?php

class AssignController extends SBaseController
{

	public function actionIndex()
	{
		$this->render('index', array(
				'model' => AuthItem::model(),
				'users' => $this->getModule()->getStaticUserModel()->findAll(new CDbCriteria(array('order' => 't.'.$this->getModule()->username))),
				'assignedRoles' => array(),
				'notAssignedRoles' => array(),
				'assignedTasks' => array(),
				'notAssignedTasks' => array(),
				'assignedOperations' => array(),
				'notAssignedOperations' => array(),
		));
	}

	public function actionRoles($userId = null, array $roles = null)
	{
		$request = Yii::app()->getRequest();
		if($request->getIsPutRequest() || $request->getIsDeleteRequest())
		{
			if(!isset($userId))
			{
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('No User specified to '.($request->getIsPutRequest() ? 'assign' : 'revoke').' Role(s).'));
			}
			elseif(!isset($roles))
			{
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('No Role(s) were specified to be '.($request->getIsPutRequest() ? 'assigned to' : 'revoked from').' the User.'));
			}
			else
			{
				$auth = Yii::app()->getAuthManager();
				$method = $request->getIsPutRequest() ? 'assign' : 'revoke';
				foreach ($roles as $role)
				{
					$auth->$method($role, $userId);
				}
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('Role'.(count($roles) > 1 ? 's' : '').' '.($request->getIsPutRequest() ? 'assigned to' : 'revoked from').' User.'));
			}
		}

		$this->renderPartial(
				'partials/userAjax',
				array(
						'model' => new AuthItem(),
						'userId' => $userId,
						'assignedRoles' => AuthItem::model()->userAssigned($userId)->type(EAuthItem::TYPE_ROLE)->findAll(),
						'notAssignedRoles' => AuthItem::model()->userNotAssigned($userId)->type(EAuthItem::TYPE_ROLE)->findAll()
				)
		);
	}

	public function actionChildren($parentType, $childType, $parent = null, array $children = null)
	{
		if($parentType == $childType)
		{
			throw new CHttpException(400, SrbacModule::t('The parent type and child type cannot be the same.'));
		}
		$request = Yii::app()->getRequest();
		if($request->getIsPutRequest() || $request->getIsDeleteRequest())
		{
			if(!isset($parent))
			{
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('No '.AuthItem::$TYPES[$parentType].' specified to '.($request->getIsPutRequest() ? 'assign' : 'revoke').' '.AuthItem::$TYPES[$childType].'(s).'));
			}
			elseif(!isset($children))
			{
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('No '.AuthItem::$TYPES[$childType].'(s) specfied to '.($request->getIsPutRequest() ? 'assign to' : 'revoke from').' '.AuthItem::$TYPES[$parentType].'.'));
			}
			else
			{
				$method = $request->getIsPutRequest() ? 'addItemChild' : 'removeItemChild';
				$auth = Yii::app()->getAuthManager();
				foreach ($children as $child)
				{
					$auth->$method($parent, $child);
				}
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t(AuthItem::$TYPES[$childType].(count($children) > 1 ? 's' : '').' '.($request->getIsPutRequest() ? 'assigned to' : 'revoked from').' '.AuthItem::$TYPES[$parentType].'.'));
			}
		}

		if(isset($parent))
		{
			$authItem =  AuthItem::model()->findByPk($parent);
			if($authItem === null)
			{
				throw new CHttpException(404, SrbacModule::t('The authorization item with id {id} could not be found.', array('{id}' => $id)));
			}
			else if($authItem->type != $parentType)
			{
				throw new CHttpException(400, SrbacModule::t('The authorization item with id {id} does not match the specified parent type.', array('{id}' => $parent)));
			}
			$children = $authItem->children()->type($childType)->findAll();
			$notChildren = $authItem->notChildren()->type($childType)->findAll();
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
						'parentType' => $parentType,
						'childType' => $childType,
						'children' => $children,
						'notChildren' => $notChildren
				)
		);
	}

	public function actionAuto()
	{
		$tasks = AuthItem::model()->type(EAuthItem::TYPE_TASK)->generated()->findAll();
		$auth = Yii::app()->getAuthManager();
		foreach($tasks as $task)
		{
			$operations = $task->notChildren()->type(EAuthItem::TYPE_OPERATION)->generated()->findAll(array('condition' => AuthItem::model()->getTableAlias().'.name REGEXP "^'.$task->getAttribute('name').'[.]{1}[^.]+$"'));
			foreach($operations as $op)
			{
				$auth->addItemChild($task->getAttribute('id'), $op->getAttribute('id'));
			}
		}
	}

	public function actionSuperUsers()
	{
		$superUserModel = new SrbacUser('search');
		$superUserModel->superUser();
		$normalUserModel = new SrbacUser('search');
		$normalUserModel->normalUser();
		$this->render('superUsers', array('superUserModel' => $superUserModel, 'userModel' => $normalUserModel));
	}

}
