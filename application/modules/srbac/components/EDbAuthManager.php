<?php

require_once('SrbacUtilities.php');
require_once('EAuthItem.php');
require_once('EAuthAssignment.php');

class EDbAuthManager extends CDbAuthManager
{

	/**
	 * Performs access check for the specified user.
	 * @param mixed $item this can be an instance of an EAuthItem, a string (the name of the operation that needs to be checked), or an integer (the unique identifier of the operation that needs to be checked).
	 * @param mixed $userId the user ID. This should can be either an integer and a string representing
	 * the unique identifier of a user. See {@link IWebUser::getId}.
	 * @param array $params name-value pairs that would be passed to biz rules associated
	 * with the tasks and roles assigned to the user.
	 * Since version 1.1.11 a param with name 'userId' is added to this array, which holds the value of <code>$userId</code>.
	 * @return boolean whether the operations can be performed by the user.
	 */
	public function checkAccess($item, $userId, $params = array())
	{
		if(!isset($params['userId']))
		{
			$params['userId'] = $userId;
		}

		$query = $this->db->createCommand()
					->select('pit.id')
					->from($this->itemTable.' pit')
					->join($this->itemChildTable.' ict', array('and', $this->db->quoteColumnName('pit.id').'='.$this->db->quoteColumnName('ict.parent_id'), $this->db->quoteColumnName('ict.child_id').'=:child_id'));
		$authItems = array($item);
		do
		{
			$authItem = $this->getAuthItem(array_pop($authItems));
			if($authItem !== null && $this->executeBizRule($authItem->getBizRule(), $params, $authItem->getData()))
			{
				$itemName = $authItem->getName();
				if(in_array($itemName, $this->defaultRoles))
				{
					return true;
				}
				$assignments = $this->getAuthAssignments($userId);
				if(isset($assignments[$itemName]) && $this->executeBizRule($assignments[$itemName]->getBizRule(), $params, $assignments[$itemName]->getData()))
				{
					return true;
				}
				$authItems += $query->bindValue(':child_id', $authItem->getId())->queryColumn();
			}
		} while(!empty($authItems));

		return false;
	}

	public function getItemIdentity($item)
	{
		if($item instanceof CAuthItem)
		{
			if($item instanceof EAuthItem)
			{
				return array('id', intval($item->getId()));
			}
			else
			{
				return array('name', strval($item->getName()));
			}
		}
		else if(preg_match('/^([0-9])+$/i', $item))
		{
			return array('id', intval($item));
		}
		else
		{
			return array('name', strval($item));
		}
		throw new CException(SrbacModule::t('Invalid authorization item type.'));
	}

	/**
	 * Adds an item as a child of another item.
	 * @param mixed $parentItem the parent item
	 * @param mixed $childItem the child item
	 * @return boolean whether the item is added successfully
	 * @throws CException if either parent or child doesn't exist or if a loop has been detected.
	 */
	public function addItemChild($parentItem, $childItem)
	{
		$cmd = $this->db->createCommand()->select(array('id', 'name', 'type'))->from($this->itemTable);

		$id = $this->getItemIdentity($childItem);
		$cmd->orWhere($this->db->quoteColumnName($id[0]).'=:child', array(':child' => $id[1]));
		$id = $this->getItemIdentity($parentItem);
		$cmd->orWhere($this->db->quoteColumnName($id[0]).'=:parent', array(':parent' => $id[1]));

		$rows = $cmd->queryAll();

		if(count($rows) == 2)
		{
			if($id[1] == $rows[0][$id[0]])
			{
				$parentType = $rows[0]['type'];
				$childType = $rows[1]['type'];
				$parentId = $rows[0]['id'];
				$childId = $rows[1]['id'];
				$parentName = $rows[0]['name'];
				$childName = $rows[1]['name'];
			}
			else
			{
				$childType = $rows[0]['type'];
				$parentType = $rows[1]['type'];
				$childId = $rows[0]['id'];
				$parentId = $rows[1]['id'];
				$childName = $rows[0]['name'];
				$parentName = $rows[1]['name'];
			}
			$this->checkItemChildType($parentType, $childType);
			if($this->detectLoop($parentName, $childName))
				throw new CException(SrbacModule::t('Cannot add "{child}" as a child of "{name}". A loop has been detected.',
					array('{child}' => $childName, '{name}' => $parentName)));

			$this->db->createCommand()
				->insert($this->itemChildTable, array(
					'parent_id' => $parentId,
					'child_id' => $childId,
				));

			return true;
		}
		else
			throw new CException(SrbacModule::t('Either, "{parent}" or "{child}" does not exist, or "{parent}" and "{child}" are the same.', array('{child}' => $childItem, '{parent}' => $parentItem)));
	}

	/**
	 * Removes a child from its parent.
	 * Note, the child item is not deleted. Only the parent-child relationship is removed.
	 * @param mixed $parentItem the parent item
	 * @param mixed $childItem the child item
	 * @return boolean whether the removal is successful
	 */
	public function removeItemChild($parentItem, $childItem)
	{
		$sql = 'DELETE '.$this->db->getSchema()->quoteSimpleTableName('ict').
			' FROM '.$this->db->quoteTableName($this->itemChildTable).' '.$this->db->getSchema()->quoteSimpleTableName('ict').
			' INNER JOIN '.$this->db->quoteTableName($this->itemTable).' '.$this->db->getSchema()->quoteSimpleTableName('pit').' ON '.$this->db->quoteColumnName('ict.parent_id').'='.$this->db->quoteColumnName('pit.id').
			' INNER JOIN '.$this->db->quoteTableName($this->itemTable).' '.$this->db->getSchema()->quoteSimpleTableName('cit').' ON '.$this->db->quoteColumnName('ict.child_id').'='.$this->db->quoteColumnName('cit.id');

		$params = array();

		$id = $this->getItemIdentity($childItem);
		$sql .= ' WHERE '.$this->db->quoteColumnName('cit.'.$id[0]).'=:child';
		$params[':child'] = $id[1];

		$id = $this->getItemIdentity($parentItem);
		$sql .= ' AND '.$this->db->quoteColumnName('pit.'.$id[0]).'=:parent';
		$params[':parent'] = $id[1];

		return $this->db->getCommandBuilder()->createSqlCommand($sql, $params)->execute() > 0;
	}

	/**
	 * Returns a value indicating whether a child exists within a parent.
	 * @param mixed $parentItem the parent item
	 * @param mixed $childItem the child item
	 * @return boolean whether the child exists
	 */
	public function hasItemChild($parentItem, $childItem)
	{
		$cmd = $this->db->createCommand()
			->select('pit.id')
			->from($this->itemTable.' pit')
			->join($this->itemChildTable.' ict', $this->db->quoteColumnName('pit.id').'='.$this->db->quoteColumnName('ict.parent_id'))
			->join($this->itemTable.' cit', $this->db->quoteColumnName('ict.child_id').'='.$this->db->quoteColumnName('cit.id'));

		$id = $this->getItemIdentity($childItem);
		$cmd->andWhere($this->db->quoteColumnName('cit.'.$id[0]).'=:child', array(':child' => $id[1]));
		$id = $this->getItemIdentity($parentItem);
		$cmd->andWhere($this->db->quoteColumnName('pit.'.$id[0]).'=:parent', array(':parent' => $id[1]));

		return $cmd->queryScalar() !== false;
	}

	/**
	 * Returns the children of the specified item.
	 * @param mixed $items the parent item name. This can be either a string, an integer, or an instance of a CAuthItem, or an array of any of those things.
	 * The latter represents a list of item names.
	 * @return array all child items of the parent
	 */
	public function getItemChildren($items)
	{
		$cmd = $this->db->createCommand()
			->select(array('cit.id', 'cit.name', 'cit.type', 'cit.description', 'cit.bizrule', 'cit.data'))
			->from($this->itemTable.' cit')
			->join($this->itemChildTable.' ict', $this->db->quoteColumnName('cit.id').'='.$this->db->quoteColumnName('ict.child_id'))
			->join($this->itemTable.' pit', $this->db->quoteColumnName('ict.parent_id').'='.$this->db->quoteColumnName('pit.id'));

		if(is_array($items))
		{
			$categorizedItems = array();
			foreach($items as &$item)
			{
				$itemId = $this->getItemIdentity($item);
				$categorizedItems[$itemId[0]][] = $itemId[1];
			}
			foreach($categorizedItems as $type => &$ids)
			{
				if(!empty($ids))
				{
					if(count($ids) > 1)
					{
						$cmd->orWhere($this->db->quoteColumnName('pit.'.$type).' IN ('.implode(', ', $ids).')');
					}
					else
					{
						$cmd->orWhere($this->db->quoteColumnName('pit.'.$type).'=:id', array(':id' => $ids[0]));
					}
				}
			}
		}
		else
		{
			$itemId = $this->getItemIdentity($items);
			$cmd->orWhere($this->db->quoteColumnName('pit.'.$itemId[0]).'=:id', array(':id' => $itemId[1]));
		}

		$children = array();
		foreach($cmd->queryAll() as $row)
		{
			if(($data = @unserialize($row['data'])) === false)
				$data = null;
			$children[$row['name']] = new EAuthItem($this, $row['name'], $row['type'], $row['description'], $row['bizrule'], $data, $row['id']);
		}
		return $children;
	}

	/**
	 * Assigns an authorization item to a user.
	 * @param mixed $item instance of the EAuthItem, string of the item name, integer of the item identifier
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @param string $bizRule the business rule to be executed when {@link checkAccess} is called
	 * for this particular authorization item.
	 * @param mixed $data additional data associated with this assignment
	 * @return EAuthAssignment the authorization assignment information.
	 * @throws CException if the item does not exist or if the item has already been assigned to the user
	 */
	public function assign($item, $userId, $bizRule = null, $data = null)
	{
		if($item instanceof CAuthItem)
		{
			if($item instanceof EAuthItem)
			{
				$itemId = $item->getId();
				$itemName = $item->getName();
			}
			else
			{
				$itemId = $this->getAuthItemId($item);
				$itemName = $item->getName();
			}
		}
		else if(is_integer($item))
		{
			$itemId = $item;
			$itemName = $this->getAuthItemName($item);
		}
		else if(is_string($item))
		{
			$itemId = $this->getAuthItemId($item);
			$itemName = $item;
		}
		if($itemId === false || $itemName === false)
			throw new CException(SrbacModule::t('The item "{name}" does not exist.',array('{name}' => $item)));

		$this->db->createCommand()
			->insert($this->assignmentTable, array(
				'item_id' => $itemId,
				'user_id' => $userId,
				'bizrule' => $bizRule,
				'data' => serialize($data)
			));
		return new EAuthAssignment($this, $itemName, $userId, $bizRule, $data, $itemId);
	}

	/**
	 * Revokes an authorization assignment from a user.
	 * @param mixed $item the authroization item
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @return boolean whether removal is successful
	 */
	public function revoke($item, $userId)
	{
		$itemId = $this->getItemIdentity($item);
		switch($itemId[0])
		{
			case 'id':
				return $this->db->createCommand()->delete(
							$this->assignmentTable,
							array('and', $this->db->quoteColumnName('item_id').'=:item_id', $this->db->quoteColumnName('user_id').'=:user_id'),
							array(':item_id' => $itemId[1], ':user_id' => $userId)) > 0;
			case 'name':
				return $this->db->getCommandBuilder()->createSqlCommand(
						'DELETE '.$this->db->getSchema()->quoteSimpleTableName('at').
						' FROM '.$this->db->quoteTableName($this->assignmentTable).' '.$this->db->getSchema()->quoteSimpleTableName('at').
						' INNER JOIN '.$this->db->quoteTableName($this->itemTable).' '.$this->db->getSchema()->quoteSimpleTableName('it').' ON '.$this->db->quoteColumnName('at.item_id').'='.$this->db->quoteColumnName('it.id').
						' WHERE '.$this->db->quoteColumnName('it.name').'=:name AND '.$this->db->quoteColumnName('at.user_id').'=:user_id',
						array(':name' => $itemId[1], ':user_id' => $userId))
				->execute() > 0;
			default:
				return false;
		}
	}

	public function isSuperUser($userId)
	{
		return $this->isAssigned(SrbacUtilities::getSrbacModule()->superUser, $userId);
	}

	/**
	 * Returns a value indicating whether the item has been assigned to the user.
	 * @param mixed $item the authorization item
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @return boolean whether the item has been assigned to the user.
	 */
	public function isAssigned($item, $userId)
	{
		$itemId = $this->getItemIdentity($item);
		switch($itemId[0])
		{
			case 'id':
				return $this->db->createCommand()
					->select('item_id')
					->from($this->assignmentTable)
					->where(array('and', $this->db->quoteColumnName('item_id').'=:itemId' , $this->db->quoteColumnName('user_id').'=:userId'), array(':itemId' => $itemId[1],':userId' => $userId))
				->queryScalar() !== false;
			case 'name':
				return $this->db->createCommand()
					->select('at.item_id')
					->from($this->assignmentTable.' at')
					->join($this->itemTable.' it', $this->db->quoteColumnName('at.item_id').'=it.id')
					->where(array('and', $this->db->quoteColumnName('it.name').'=:name', $this->db->quoteColumnName('at.user_id').'=:user_id'), array(':name' => $itemId[1],':user_id' => $userId))
				->queryScalar() !== false;
			default:
				return false;
		}
	}

	/**
	 * Returns the item assignment information.
	 * @param mixed $item the authorization item
	 * @return integer the number of user's that this authorization item is currently assigned to.
	 */
	public function getAuthAssignmentCount($item)
	{
		$itemId = $this->getItemIdentity($item);
		return $this->db->createCommand()
			->select('COUNT(*)')
			->from($this->assignmentTable.' at')
			->join($this->itemTable.' it', $this->db->quoteColumnName('at.item_id').'='.$this->db->quoteColumnName('it.id'))
			->where($this->db->quoteColumnName('it.'.$itemId[0]).'=:id', array(':id' => $itemId[1]))
		->queryScalar();
	}

	/**
	 * Returns the item assignment information.
	 * @param mixed $item the authorization item
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @return EAuthAssignment the item assignment information. Null is returned if
	 * the item is not assigned to the user.
	 */
	public function getAuthAssignment($item, $userId)
	{
		$itemId = $this->getItemIdentity($item);

		$row = $this->db->createCommand()
			->select(array('at.user_id', 'at.bizrule', 'at.data', 'it.id', 'it.name'))
			->from($this->assignmentTable.' at')
			->join($this->itemTable.' it', $this->db->quoteColumnName('at.item_id').'='.$this->db->quoteColumnName('it.id'))
			->where(array('and', $this->db->quoteColumnName('it.'.$itemId[0]).'=:id', $this->db->quoteColumnName('at.user_id').'=:userId'), array(':id' => $itemId[1], ':userId' => $userId))
		->queryRow();

		if($row !== false)
		{
			if(($data = @unserialize($row['data'])) === false)
				$data = null;
			return new EAuthAssignment($this, $row['name'], $row['user_id'], $row['bizrule'], $data, $row['id']);
		}
		else
			return null;
	}

	/**
	 * Returns the item assignments for the specified user.
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @return array the item assignment information for the user. An empty array will be
	 * returned if there is no item assigned to the user.
	 */
	public function getAuthAssignments($userId)
	{
		$rows = $this->db->createCommand()
			->select(array('at.user_id', 'at.bizrule', 'at.data', 'it.name', 'it.id'))
			->from($this->assignmentTable.' at')
			->join($this->itemTable.' it', $this->db->quoteColumnName('at.item_id').'='.$this->db->quoteColumnName('it.id'))
			->where($this->db->quoteColumnName('at.user_id').'=:user_id', array(':user_id' => $userId))
		->queryAll();
		$assignments = array();
		foreach($rows as $row)
		{
			if(($data = @unserialize($row['data'])) === false)
				$data = null;
			$assignments[$row['name']] = new EAuthAssignment($this, $row['name'], $row['user_id'], $row['bizrule'], $data, $row['id']);
		}
		return $assignments;
	}

	/**
	 * Saves the changes to an authorization assignment.
	 * @param EAuthAssignment $assignment the assignment that has been changed.
	 */
	public function saveAuthAssignment($assignment)
	{
		$this->db->createCommand()
			->update(
			$this->assignmentTable,
			array(
				'bizrule' => $assignment->getBizRule(),
				'data' => serialize($assignment->getData()),
			),
			$this->db->quoteColumnName('item_id').'=:item_id AND '.$this->db->quoteColumnName('user_id').'=:user_id',
			array(
				':item_id' => $assignment->getItemId(),
				':user_id' => $assignment->getUserId()
			)
		);
	}

	/**
	 * Returns the authorization items of the specific type and user.
	 * @param integer $type the item type (0: operation, 1: task, 2: role). Defaults to null,
	 * meaning returning all items regardless of their type.
	 * @param mixed $userId the user ID. Defaults to null, meaning returning all items even if
	 * they are not assigned to a user.
	 * @return array the authorization items of the specific type.
	 */
	public function getAuthItems($type = null, $userId = null)
	{
		if($type === null && $userId === null)
		{
			$command = $this->db->createCommand()
				->select()
				->from($this->itemTable);
		}
		elseif($userId === null)
		{
			$command = $this->db->createCommand()
				->select()
				->from($this->itemTable)
				->where($this->db->quoteColumnName('type').'=:type', array(':type' => $type));
		}
		elseif($type === null)
		{
			$command = $this->db->createCommand()
				->select('id,name,type,description,t1.bizrule,t1.data')
				->from(array(
					$this->itemTable.' t1',
					$this->assignmentTable.' t2'
				))
				->where(array('and', $this->db->quoteColumnName('id').'=item_id', $this->db->quoteColumnName('user_id').'=:user_id'), array(':user_id' => $userId));
		}
		else
		{
			$command = $this->db->createCommand()
				->select('id,name,type,description,t1.bizrule,t1.data')
				->from(array(
					$this->itemTable.' t1',
					$this->assignmentTable.' t2'
				))
				->where(
						array('and', $this->db->quoteColumnName('id').'=item_id', $this->db->quoteColumnName('type').'=:type', $this->db->quoteColumnName('user_id').'=:user_id'),
						array(':type' => $type, ':user_id' => $userId)
				);
		}
		$items = array();
		foreach($command->queryAll() as $row)
		{
			if(($data = @unserialize($row['data'])) === false)
				$data = null;
			$items[$row['name']] = new EAuthItem($this, $row['name'], $row['type'], $row['description'], $row['bizrule'], $data, $row['id']);
		}
		return $items;
	}

	/**
	 * Creates an authorization item.
	 * An authorization item represents an action permission (e.g. creating a post).
	 * It has three types: operation, task and role.
	 * Authorization items form a hierarchy. Higher level items inheirt permissions representing
	 * by lower level items.
	 * @param string $name the item name. This must be a unique identifier.
	 * @param integer $type the item type (0: operation, 1: task, 2: role).
	 * @param string $description description of the item
	 * @param string $bizRule business rule associated with the item. This is a piece of
	 * PHP code that will be executed when {@link checkAccess} is called for the item.
	 * @param mixed $data additional data associated with the item.
	 * @return EAuthItem the authorization item
	 * @throws CException if an item with the same name already exists
	 */
	public function createAuthItem($name, $type, $description = '', $bizRule = null, $data = null)
	{
		$this->db->createCommand()
			->insert($this->itemTable, array(
				'name' => $name,
				'type' => $type,
				'description' => $description,
				'bizrule' => $bizRule,
				'data' => serialize($data)
			));
		return new EAuthItem($this, $name, $type, $description, $bizRule, $data);
	}

	/**
	 * Removes the specified authorization item.
	 * @param string $name the name of the item to be removed
	 * @return boolean whether the item exists in the storage and has been removed
	 */
	public function removeAuthItem($item)
	{
		$itemId = $this->getItemIdentity($item);
		if($this->usingSqlite())
		{
			if($itemId[0] === 'name')
			{
				$itemId[1] = $this->getAuthItemId($name);
				if($itemId === false)
					return false;
				$itemId[0] = 'id';
			}
			$this->db->createCommand()
				->delete($this->itemChildTable, array('or', $this->db->quoteColumnName('parent_id').'=:id1', $this->db->quoteColumnName('child_id').'=:id2'), array(
					':id1' => $itemId[1],
					':id2' => $itemId[1]
			));
			$this->db->createCommand()
				->delete($this->assignmentTable, $this->db->quoteColumnName('item_id').'=:id', array(
					':id' => $itemId[1],
			));
		}
		$this->db->createCommand()->delete($this->itemTable, $this->db->quoteColumnName($itemId[0]).'=:id', array(':id' => $itemId[1])) > 0;
	}

	/**
	 * Returns the authorization item with the specified name.
	 * @param mixed $name string, the name of the item. Or an integer, the unique identifier of the item.
	 * @return EAuthItem the authorization item. Null if the item cannot be found.
	 */
	public function getAuthItem($item)
	{
		$cmd = $this->db->createCommand()
			->select()
			->from($this->itemTable);

		$itemId = $this->getItemIdentity($item);
		$cmd->where($this->db->quoteColumnName($itemId[0]).'=:id', array(':id' => $itemId[1]));

		$row = $cmd->queryRow();

		if($row !== false)
		{
			if(($data = @unserialize($row['data'])) === false)
				$data = null;
			return new EAuthItem($this, $row['name'], $row['type'], $row['description'], $row['bizrule'], $data, $row['id']);
		}
		else
			return null;
	}

	/**
	 * Returns the unique idetifier for an authorization item given its name
	 * @param mixed $item
	 * @return mixed The unique idetifying integer of the authorization item with the specified name if it is found, false otherwise.
	 */
	public function getAuthItemId($item)
	{
		$itemId = $this->getItemIdentity($item);
		switch($itemId[0])
		{
			case 'id':
				return $itemId[1];
			case 'name':
				return $this->db->createCommand()
					->select('id')
					->from($this->itemTable)
					->where($this->db->quoteColumnName('name').'=:name', array(':name' => $itemId[1]))
				->queryScalar();
			default:
				return false;
		}
	}

	/**
	 * Returns the name of the authorization item with the given unique idetifier
	 * @param mixed $item
	 * @return mixed The name of the authorization item with the specified id if it is found, false otherwise.
	 */
	public function getAuthItemName($id)
	{
		$itemId = $this->getItemIdentity($item);
		switch($itemId[0])
		{
			case 'id':
				return $this->db->createCommand()
					->select('name')
					->from($this->itemTable)
					->where($this->db->quoteColumnName('id').'=:id', array(':id' => $itemId[1]))
				->queryScalar();
			case 'name':
				return $itemId[1];
			default:
				return false;
		}
	}

	/**
	 * Saves an authorization item to persistent storage.
	 * @param EAuthItem $item the item to be saved.
	 * @param string $oldName the old item name. If null, it means the item name is not changed.
	 */
	public function saveAuthItem($item, $oldName = null)
	{
		$this->db->createCommand()
			->update(
					$this->itemTable,
					array(
						'name' => $item->getName(),
						'type' => $item->getType(),
						'description' => $item->getDescription(),
						'bizrule' => $item->getBizRule(),
						'data' => serialize($item->getData()),
					),
					$this->db->quoteColumnName('id').'=:id',
					array(':id' => $item->getId())
		);
	}

	/**
	 * Saves the authorization data to persistent storage.
	 */
	public function save()
	{
	}

	/**
	 * Removes all authorization data.
	 */
	public function clearAll()
	{
		$this->clearAuthAssignments();
		$this->db->createCommand()->delete($this->itemChildTable);
		$this->db->createCommand()->delete($this->itemTable);
	}

	/**
	 * Removes all authorization assignments.
	 */
	public function clearAuthAssignments()
	{
		$this->db->createCommand()->delete($this->assignmentTable);
	}

	/**
	 * Checks whether there is a loop in the authorization item hierarchy.
	 * @param string $itemName parent item name
	 * @param string $childName the name of the child item that is to be added to the hierarchy
	 * @return boolean whether a loop exists
	 */
	protected function detectLoop($itemName,$childName)
	{
		if($childName === $itemName)
			return true;
		foreach($this->getItemChildren($childName) as $child)
		{
			if($this->detectLoop($itemName, $child->getName()))
				return true;
		}
		return false;
	}

}