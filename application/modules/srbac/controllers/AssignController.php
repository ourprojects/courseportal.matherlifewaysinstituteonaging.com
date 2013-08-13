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
				'users' => $this->getModule()->getStaticUserModel()->findAll(new CDbCriteria(array('order' => 't.'.$this->getModule()->username))),
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
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No User specified to '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assign' : 'revoke').' Role(s).'));
			}
			else
			{
				$userId = $requestVars['userId'];
				if(!isset($requestVars['roles']))
				{
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No Role(s) were specified to be '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assigned to' : 'revoked from').' the User.'));
				}
				else
				{
					$auth = Yii::app()->getAuthManager();
					$method = Yii::app()->getRequest()->getIsPutRequest() ? 'assign' : 'revoke';
					foreach ($requestVars['roles'] as $role)
					{
						$auth->$method($role, $userId);
					}
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'Role'.(count($requestVars['roles']) > 1 ? 's' : '').' '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assigned to' : 'revoked from').' User.'));
				}
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
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No '.AuthItem::$TYPES[$parentType].' specified to '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assign' : 'revoke').' '.AuthItem::$TYPES[$childType].'(s).'));
			}
			else
			{
				$parent = $requestVars['parent'];
				if(!isset($requestVars['children']))
				{
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No '.AuthItem::$TYPES[$childType].'(s) specfied to '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assign to' : 'revoke from').' '.AuthItem::$TYPES[$parentType].'.'));
				}
				else
				{
					$method = Yii::app()->getRequest()->getIsPutRequest() ? 'addItemChild' : 'removeItemChild';
					$auth = Yii::app()->getAuthManager();
					foreach ($requestVars['children'] as $child)
					{
						$auth->$method($parent, $child);
					}
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', AuthItem::$TYPES[$childType].(count($requestVars['children']) > 1 ? 's' : '').' '.(Yii::app()->getRequest()->getIsPutRequest() ? 'assigned to' : 'revoked from').' '.AuthItem::$TYPES[$parentType].'.'));
				}
			}
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

}