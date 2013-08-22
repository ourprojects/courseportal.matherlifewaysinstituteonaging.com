<?php

class WebUser extends CWebUser
{

	private $_identity = null;

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
		$this->_identity = $identity;
		return parent::login($identity, $duration);
	}

	protected function beforeLogin($id, $states, $fromCookie)
	{
		if(parent::beforeLogin($id, $states, $fromCookie))
		{
			if(isset($this->_identity))
			{
				$identity = $this->_identity;
			}
			else
			{
				if(!$fromCookie)
				{
					return false;
				}
				$identity = new SessionIdentity($id);
				$identity->setPersistentStates($states);
			}
			$this->_identity = null;
			if($identity->getIsAuthenticated() || $identity->authenticate())
			{
				$this->_userModel = $identity->getModel();
				$phpBB = Yii::app()->getComponent('phpBB');
				if($phpBB->login($identity, '', $this->allowAutoLogin))
				{
					return true;
				}
				elseif(!$phpBB->getUserIdFromName($identity->getName()) &&
							$identity->canGetProperty('password') &&
							$identity->getModel() !== null)
				{
					$identity->getModel()->phpBBAddUser($identity->password);
					return $phpBB->login($identity, '', $this->allowAutoLogin);
				}
				return false;
			}
		}
		return false;
	}

	protected function beforeLogout()
	{
		if(parent::beforeLogout())
		{
			Yii::app()->phpBB->logout();
			if(isset($this->_userModel))
			{
				$this->_userModel->regenerateSessionKey();
				$this->_userModel = null;
			}
			return true;
		}
		return false;
	}

}
?>