<?php

class EAuthAssignment extends CAuthAssigment
{

	private $_itemId;

	/**
	 * Constructor.
	 * @param EAuthManager $auth the authorization manager
	 * @param string $itemName authorization item name
	 * @param mixed $userId user ID (see {@link IWebUser::getId})
	 * @param string $bizRule the business rule associated with this assignment
	 * @param mixed $data additional data for this assignment
	 * @param integer $id the unique identifier of the authorization item. If null then the item id will be determined automatically using the item name.
	 */
	public function __construct($auth, $itemName, $userId, $bizRule = null, $data = null, $itemId = null)
	{
		$this->_itemId = $itemId === null ? $auth->getAuthItemId($itemName) : $itemId;
		if($this->_itemId === false)
			throw new CException(Yii::t('yii', 'The item "{name}" does not exist.', array('{name}' => $itemName)));
		parent::__construct($auth, $itemName, $userId, $bizRule, $data);
	}
	
	public function getItemId()
	{
		return $this->_itemId;
	}

}