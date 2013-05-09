<?php defined('BASEPATH') or exit('No direct script access allowed');  

class WebUser extends CWebUser {

	private $_identity = null;
	private $_userModel = null;
	
	public function getModel($id = null) {
		if(!isset($this->_userModel) && (isset($id) || ($id = $this->getId()) !== null))
		{
			$this->_userModel = CPUser::model()->findByPk($id);
		}
		return $this->_userModel;
	}
	
	public function getIsGuest() {
		return parent::getIsGuest() || ($user = $this->getModel()) !== null && $user->getIsGuest();
	}
	
	public function getIsAdmin() {
		return ($user = $this->getModel()) !== null && $user->getIsAdmin();
	}
	
	public function getIsEmployee() {
		return ($user = $this->getModel()) !== null && $user->getIsEmployee();
	}
	
	public function login($identity, $duration = 0) {
		if(!$identity->getIsAuthenticated() && !$identity->authenticate())
		{
			return false;
		}
		$this->_identity = $identity;
		return parent::login($identity, $duration);
	}

	protected function beforeLogin($id, $states, $fromCookie) {
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
		if(($user = $this->getModel()) !== null)
		{
			$user->last_login = date('Y-m-d H:i:s');
			if(!Yii::app()->phpBB->login() && !Yii::app()->phpBB->getUserIdFromName($user->name))
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
		} else {
			Yii::app()->phpBB->login();
		}
		$this->_identity = null;
		parent::afterLogin($fromCookie);
	}
		
	protected function beforeLogout() {
		if(($user = $this->getModel()) !== null)
		{
			$user->regenerateSessionKey();
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