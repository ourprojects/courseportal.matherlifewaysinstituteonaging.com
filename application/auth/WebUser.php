<?php

class WebUser extends CWebUser
{

	private $_userModel = null;

	public function getModel()
	{
		if(!isset($this->_userModel))
		{
			$attributes = array();
			if($this->getId() !== null)
			{
				$attributes['id'] = $this->getId();
			}
			if($this->getName() !== null)
			{
				$attributes['name'] = $this->getName();
			}
			if(!empty($attributes))
			{
				$this->_userModel = CPUser::model()->findByAttributes($attributes);
			}
		}
		return $this->_userModel;
	}

	public function setId($value)
	{
		if($value !== $this->getId())
		{
			$this->_userModel = null;
		}
		parent::setId($value);
	}

	public function setName($value)
	{
		if($value !== $this->getName())
		{
			$this->_userModel = null;
		}
		parent::setName($value);
	}

	public function login($identity, $duration = 0)
	{
		if(parent::login($identity, $duration) && ($identity->getIsAuthenticated() || $identity->authenticate()))
		{
			$this->_userModel = $identity->getModel();
			$phpBB = Yii::app()->getComponent('phpBB');
			if(!$phpBB->getUserIdFromName($identity->getName()) && $identity->canGetProperty('password') && $this->_userModel !== null)
			{
				$identity->getModel()->phpBBAddUser($identity->password);
			}
			return $phpBB->login($identity, '', $this->allowAutoLogin);
		}
		return false;
	}

	protected function beforeLogin($id, $states, $fromCookie)
	{
		if(parent::beforeLogin($id, $states, $fromCookie))
		{
			if($fromCookie)
			{
				$identity = new SessionIdentity($id);
				$identity->setPersistentStates($states);
				return ($identity->getIsAuthenticated() || $identity->authenticate()) && Yii::app()->getComponent('phpBB')->login($identity, '', $this->allowAutoLogin);
			}
			return true;
		}
		return false;
	}

	protected function beforeLogout()
	{
		if(parent::beforeLogout())
		{
			if(isset($this->_userModel))
			{
				$this->_userModel->regenerateSessionKey();
				$this->_userModel = null;
			}
			return true;
		}
		return false;
	}

	protected function afterLogout()
	{
		parent::afterLogout();
		Yii::app()->getComponent('phpBB')->logout();
	}

}
?>
