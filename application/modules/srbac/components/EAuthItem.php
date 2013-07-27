<?php

class EAuthItem extends CAuthItem
{

	private $_id;

	/**
	 * Constructor.
	 * @param IAuthManager $auth authorization manager
	 * @param string $name authorization item name
	 * @param integer $type authorization item type. This can be 0 (operation), 1 (task) or 2 (role).
	 * @param string $description the description
	 * @param string $bizRule the business rule associated with this item
	 * @param mixed $data additional data for this item
	 * @param integer a unique identifier for this item. If null the item is assumed to already exist and its id will be determined using the item's name.
	 */
	public function __construct($auth, $name, $type, $description = '', $bizRule = null, $data = null, $id = null)
	{
		$this->_id = $id === null ? $auth->getAuthItemId($name) : $id;
		if($this->_id === false)
			throw new CException(Yii::t('yii', 'The item "{name}" does not exist.', array('{name}' => $name)));
		parent::__construct($auth, $name, $type, $description, $bizRule, $data);
	}

	/**
	 * @return integer the unique identifier of this authorization item
	 */
	public function getId()
	{
		return $this->_id;
	}
	
	/**
	 * Adds a child item.
	 * @param mixed $item string the name of the child item, integer unique identifier of the child item, EAuthItem the item to add as a child
	 * @return boolean whether the item is added successfully
	 * @throws CException if either parent or child doesn't exist or if a loop has been detected.
	 * @see IAuthManager::addItemChild
	 */
	public function addChild($item)
	{
		return $this->_auth->addItemChild($this, $item);
	}
	
	/**
	 * Removes a child item.
	 * Note, the child item is not deleted. Only the parent-child relationship is removed.
	 * @param mixed $item string the name of the child item, integer unique identifier of the child item, EAuthItem the item to add as a child
	 * @return boolean whether the removal is successful
	 * @see IAuthManager::removeItemChild
	 */
	public function removeChild($item)
	{
		return $this->_auth->removeItemChild($this, $item);
	}
	
	/**
	 * Returns a value indicating whether a child exists
	 * @param mixed $item string the name of the child item, integer unique identifier of the child item, EAuthItem the item to add as a child
	 * @return boolean whether the child exists
	 * @see IAuthManager::hasItemChild
	 */
	public function hasChild($item)
	{
		return $this->_auth->hasItemChild($this, $item);
	}
	
	/**
	 * Assigns this item to a user.
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @param string $bizRule the business rule to be executed when {@link checkAccess} is called
	 * for this particular authorization item.
	 * @param mixed $data additional data associated with this assignment
	 * @return CAuthAssignment the authorization assignment information.
	 * @throws CException if the item has already been assigned to the user
	 * @see IAuthManager::assign
	 */
	public function assign($userId, $bizRule = null, $data = null)
	{
		return $this->_auth->assign($this, $userId, $bizRule, $data);
	}
	
	/**
	 * Revokes an authorization assignment from a user.
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @return boolean whether removal is successful
	 * @see IAuthManager::revoke
	 */
	public function revoke($userId)
	{
		return $this->_auth->revoke($this, $userId);
	}
	
	/**
	 * Returns a value indicating whether this item has been assigned to the user.
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @return boolean whether the item has been assigned to the user.
	 * @see IAuthManager::isAssigned
	 */
	public function isAssigned($userId)
	{
		return $this->_auth->isAssigned($this, $userId);
	}
	
	/**
	 * Returns the item assignment information.
	 * @param mixed $userId the user ID (see {@link IWebUser::getId})
	 * @return CAuthAssignment the item assignment information. Null is returned if
	 * this item is not assigned to the user.
	 * @see IAuthManager::getAuthAssignment
	 */
	public function getAssignment($userId)
	{
		return $this->_auth->getAuthAssignment($this, $userId);
	}
	
}
