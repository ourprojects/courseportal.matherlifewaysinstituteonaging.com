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
		$request = Yii::app()->getRequest();
		if($request->getIsPutRequest() || $request->getIsDeleteRequest())
		{
			$requestVars = $request->getRestParams();
			if(!isset($userId))
			{
				if(!isset($requestVars['userId']))
				{
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No User specified to '.($request->getIsPutRequest() ? 'assign' : 'revoke').' Role(s).'));
				}
				$userId = $requestVars['userId'];
			}

			if(isset($userId))
			{
				if(!isset($requestVars['roles']))
				{
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No Role(s) were specified to be '.($request->getIsPutRequest() ? 'assigned to' : 'revoked from').' the User.'));
				}
				else
				{
					$auth = Yii::app()->getAuthManager();
					$method = $request->getIsPutRequest() ? 'assign' : 'revoke';
					foreach ($requestVars['roles'] as $role)
					{
						$auth->$method($role, $userId);
					}
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'Role'.(count($requestVars['roles']) > 1 ? 's' : '').' '.($request->getIsPutRequest() ? 'assigned to' : 'revoked from').' User.'));
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
		$request = Yii::app()->getRequest();
		if($request->getIsPutRequest() || $request->getIsDeleteRequest())
		{
			$requestVars = $request->getRestParams();
			if(!isset($requestVars['parent']))
			{
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No '.AuthItem::$TYPES[$parentType].' specified to '.($request->getIsPutRequest() ? 'assign' : 'revoke').' '.AuthItem::$TYPES[$childType].'(s).'));
			}
			else
			{
				$parent = $requestVars['parent'];
				if(!isset($requestVars['children']))
				{
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', 'No '.AuthItem::$TYPES[$childType].'(s) specfied to '.($request->getIsPutRequest() ? 'assign to' : 'revoke from').' '.AuthItem::$TYPES[$parentType].'.'));
				}
				else
				{
					$method = $request->getIsPutRequest() ? 'addItemChild' : 'removeItemChild';
					$auth = Yii::app()->getAuthManager();
					foreach ($requestVars['children'] as $child)
					{
						$auth->$method($parent, $child);
					}
					Yii::app()->getUser()->setFlash($this->getModule()->flashKey, Yii::t('srbac', AuthItem::$TYPES[$childType].(count($requestVars['children']) > 1 ? 's' : '').' '.($request->getIsPutRequest() ? 'assigned to' : 'revoked from').' '.AuthItem::$TYPES[$parentType].'.'));
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

	public function actionSuperUsers()
	{
		$this->render('superUsers', array('superUserModel' => $this->getSuperUsers(true), 'userModel' => $this->getSuperUsers(false)));
	}

	public function getSuperUsers($superUser = true)
	{
		$authManager = Yii::app()->getAuthManager();
		$srbacModule = SrbacUtilities::getSrbacModule();
		$userModel = $srbacModule->getNewUserModel('search');
		$dbSchema = $authManager->db->getSchema();
		$assignmentsTableName = $dbSchema->quoteTableName($dbSchema->getTable($authManager->assignmentTable)->name);
		$itemTableName = $dbSchema->quoteTableName($dbSchema->getTable($authManager->itemTable)->name);

		if($superUser)
		{
			$userModel->getDbCriteria()->mergeWith(
					array(
							'select' => array($dbSchema->quoteColumnName($userModel->getTableAlias().'.'.$srbacModule->userId), $dbSchema->quoteColumnName($userModel->getTableAlias().'.'.$srbacModule->username)),
							'join' => 'INNER JOIN '.
									$assignmentsTableName.' ON ('.$dbSchema->quoteColumnName($userModel->getTableAlias().'.'.$srbacModule->userId).'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('user_id').')'.
									' INNER JOIN '.
									$itemTableName.' ON ('.$itemTableName.'.'.$dbSchema->quoteColumnName('id').'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('item_id').')',
							'condition' => '(('.$itemTableName.'.'.$dbSchema->quoteColumnName('type').'=:type) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').'=:name) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').' NOT REGEXP :nameRegex))',
							'params' => array(':type' => EAuthItem::TYPE_ROLE, ':name' => $srbacModule->superUser, ':nameRegex' => '^'.$srbacModule->getGeneratedAuthItemNamePrefix().'(.+)$')
					)
			);
		}
		else
		{
			$userModel->getDbCriteria()->mergeWith(
					array(
							'select' => array($dbSchema->quoteColumnName($userModel->getTableAlias().'.'.$srbacModule->userId), $dbSchema->quoteColumnName($userModel->getTableAlias().'.'.$srbacModule->username)),
							'join' => 'LEFT JOIN '.
								$assignmentsTableName.' ON ('.$dbSchema->quoteColumnName($userModel->getTableAlias().'.'.$srbacModule->userId).'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('user_id').')'.
								' LEFT JOIN '.
								$itemTableName.' ON (('.$itemTableName.'.'.$dbSchema->quoteColumnName('id').'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('item_id').') AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('type').'=:type) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').'=:name) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').' NOT REGEXP :nameRegex))',
							'group' => $dbSchema->quoteColumnName($userModel->getTableAlias().'.'.$srbacModule->userId),
							'having' => 'MIN('.$itemTableName.'.'.$dbSchema->quoteColumnName('id').') IS NULL',
							'params' => array(':type' => EAuthItem::TYPE_ROLE, ':name' => $srbacModule->superUser, ':nameRegex' => '^'.$srbacModule->getGeneratedAuthItemNamePrefix().'(.+)$')
					)
			);
		}
		return $userModel;
	}

	public function getSuperUserCount($superUser = true)
	{
		$authManager = Yii::app()->getAuthManager();
		$srbacModule = SrbacUtilities::getSrbacModule();
		$dbSchema = $authManager->db->getSchema();
		$assignmentsTableName = $dbSchema->quoteTableName($dbSchema->getTable($authManager->assignmentTable)->name);
		$itemTableName = $dbSchema->quoteTableName($dbSchema->getTable($authManager->itemTable)->name);

		if($superUser)
		{
			$cmd = $authManager->db->createCommand(
					array(
							'select' => 'COUNT(*)',
							'from' => $srbacModule->getStaticUserModel()->tableName().' t',
							'join' => 'INNER JOIN '.
							$assignmentsTableName.' ON ('.$dbSchema->quoteTableName('t').'.'.$dbSchema->quoteColumnName($srbacModule->userId).'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('user_id').')'.
							' INNER JOIN '.
							$itemTableName.' ON ('.$itemTableName.'.'.$dbSchema->quoteColumnName('id').'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('item_id').')',
							'where' => '(('.$itemTableName.'.'.$dbSchema->quoteColumnName('type').'=:type) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').'=:name) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').' NOT REGEXP :nameRegex))',
					)
			);
		}
		else
		{
			$cmd = $authManager->db->createCommand(
					array(
							'select' => 't.id',
							'from' => $srbacModule->getStaticUserModel()->tableName().' t',
							'join' => 'LEFT JOIN '.
							$assignmentsTableName.' ON ('.$dbSchema->quoteTableName('t').'.'.$dbSchema->quoteColumnName($srbacModule->userId).'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('user_id').')'.
							' LEFT JOIN '.
							$itemTableName.' ON (('.$itemTableName.'.'.$dbSchema->quoteColumnName('id').'='.$assignmentsTableName.'.'.$dbSchema->quoteColumnName('item_id').') AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('type').'=:type) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').'=:name) AND ('.$itemTableName.'.'.$dbSchema->quoteColumnName('name').' NOT REGEXP :nameRegex))',
							'group' => 't.'.$srbacModule->userId,
							'having' => 'MIN('.$itemTableName.'.'.$dbSchema->quoteColumnName('id').') IS NULL',
					)
			);
			$cmd = $authManager->db->createCommand(array('select' => 'COUNT(*)', 'from' => '('.$cmd->getText().') sq'));
		}
		return $cmd->queryScalar(array(':type' => EAuthItem::TYPE_ROLE, ':name' => $srbacModule->superUser, ':nameRegex' => '^'.$srbacModule->getGeneratedAuthItemNamePrefix().'(.+)$'));
	}

}