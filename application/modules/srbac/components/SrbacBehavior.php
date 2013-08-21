<?php

class SrbacBehavior extends CActiveRecordBehavior
{

	public function checkAccess($item, $params = array())
	{
		return Yii::app()->getAuthManager()->checkAccess($item, $this->getOwner()->{SrbacUtilities::getSrbacModule()->userId}, $params);
	}

	public function assign($item, $bizRule = null, $data = null)
	{
		return Yii::app()->getAuthManager()->assign($item, $this->getOwner()->{SrbacUtilities::getSrbacModule()->userId}, $bizRule, $data);
	}

	public function revoke($item)
	{
		return Yii::app()->getAuthManager()->revoke($item, $this->getOwner()->{SrbacUtilities::getSrbacModule()->userId});
	}

	public function isSuperUser()
	{
		return Yii::app()->getAuthManager()->isSuperUser($this->getOwner()->{SrbacUtilities::getSrbacModule()->userId});
	}

	public function isAssigned($item)
	{
		return Yii::app()->getAuthManager()->isAssigned($item, $this->getOwner()->{SrbacUtilities::getSrbacModule()->userId});
	}

	public function getAuthAssignment($item)
	{
		return Yii::app()->getAuthManager()->getAuthAssignment($item, $this->getOwner()->{SrbacUtilities::getSrbacModule()->userId});
	}

	public function getAuthAssignments()
	{
		return Yii::app()->getAuthManager()->getAuthAssignments($this->getOwner()->{SrbacUtilities::getSrbacModule()->userId});
	}

	public function getAuthItems($type = null)
	{
		return Yii::app()->getAuthManager()->getAuthItems($type, $this->getOwner()->{SrbacUtilities::getSrbacModule()->userId});
	}

}
