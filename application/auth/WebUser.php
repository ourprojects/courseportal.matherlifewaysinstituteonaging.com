<?php

class WebUser extends CWebUser
{

	public $userClassName = 'User';

	public $userId = null;

	public $userName = null;

	private $_identity = null;

	private $_userModel = null;

	public function getModel()
	{
		if(!isset($this->_userModel))
		{
			$attributes = array();
			if(isset($this->userId) && $this->getId() !== null)
			{
				$attributes[$this->userId] = $this->getId();
			}
			if(isset($this->userName) && $this->getName() !== null)
			{
				$attributes[$this->userName] = $this->getName();
			}
			if(!empty($aattributes))
			{
				$this->_userModel = call_user_func(array($this->userClassName, 'model'))->findByAttributes($attributes);
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
		if(!$identity->getIsAuthenticated() && !$identity->authenticate())
		{
			return false;
		}
		$this->_identity = $identity;
		return parent::login($identity, $duration);
	}

	protected function beforeLogin($id, $states, $fromCookie)
	{
		if(!isset($this->_identity))
		{
			$identity = new SessionIdentity($id);
			$identity->setPersistentStates($states);
			$this->login($identity);
			return false;
		}

		return parent::beforeLogin($id, $states, $fromCookie);
	}

	protected function afterLogin($fromCookie)
	{
		/*if(isset($this->_userModel))
		{
			//$user->last_login = date('Y-m-d H:i:s');
			//$user->save();// @ TODO
			if(!Yii::app()->phpBB->login() && !Yii::app()->phpBB->getUserIdFromName($this->getName()))
			{
				if($this->_identity->canGetProperty('password'))
				{
					$user->phpBBAddUser($this->_identity->password);
					Yii::app()->phpBB->login();
				}
				else
				{
					$this->logout();
					Yii::app()->end();
				}
			}
		}
		else
		{
			Yii::app()->phpBB->login();
		}*/
		if(!Yii::app()->phpBB->login() && !Yii::app()->phpBB->getUserIdFromName($this->getName()))
		{
			if($this->_identity->canGetProperty('password'))
			{
				$user->phpBBAddUser($this->_identity->password);
				Yii::app()->phpBB->login();
			}
			else
			{
				$this->logout();
				Yii::app()->end();
			}
		}
		$this->_identity = null;
		parent::afterLogin($fromCookie);
	}

	protected function beforeLogout()
	{
		if(isset($this->_userModel))
		{
			$this->_userModel->regenerateSessionKey();
			$this->_userModel = null;
		}
		return parent::beforeLogout();
	}

	protected function afterLogout()
	{
		Yii::app()->phpBB->logout();
		parent::afterLogout();
	}

}
?>