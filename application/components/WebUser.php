<?php defined('BASEPATH') or exit('No direct script access allowed');  

class WebUser extends CWebUser {

	private $_model;
	
	public function getIsAdmin() {
		return ($model = $this->getModel()) !== null && $model->isAdmin();
	}
	
	public function getIsEmployee() {
		return ($model = $this->getModel()) !== null && $model->isEmployee();
	}
	
	public function getModel($id = null) {
		if($this->_model === null) {
			if($id === null)
				$id = $this->getId();
			$this->_model = CPUser::model()->findByPk($id);
		}
		return $this->_model;
	}
	
	public function __get($name) {
		if(($model = $this->getModel()) !== null && ($model->hasAttribute($name) || array_key_exists($name, $model->relations())))
			return $model->$name;
		return parent::__get($name);
	}

	protected function beforeLogin($id, $states, $fromCookie) {
		$user = $this->getModel($id);
		if($user !== null) {
			if($fromCookie) {
				if(isset($states['sk']) && $user->session_key === $states['sk'])
					return parent::beforeLogin($id, $states, $fromCookie);
			} else {
				return parent::beforeLogin($id, $states, $fromCookie);
			}
		}
		return false;
	}
	
	protected function afterLogin($fromCookie) {
		$user = $this->getModel();
		if($user !== null) {
			if(!Yii::app()->phpBB->login($user->name, $user->password)) {
				Yii::app()->phpBB->userAdd($user->name, $user->password, $user->email);
				Yii::app()->phpBB->login($user->name, $user->password);
			}
		}
		parent::afterLogin($fromCookie);
	}

	protected function beforeLogout() {
		$user = $this->getModel();
		if($user !== null)
			$user->regenerateSessionKey();
		return parent::beforeLogout();
	}
	
	protected function afterLogout() {
		Yii::app()->phpBB->logout();
		parent::afterLogout();
	}

}
?>