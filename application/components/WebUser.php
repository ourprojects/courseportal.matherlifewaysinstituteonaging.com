<?php defined('BASEPATH') or exit('No direct script access allowed');  

class WebUser extends CWebUser {

	private $_model;
	
	public function getModel() {
		if($this->_model === null && ($id = $this->getId()) !== null)
			$this->_model = CPUser::model()->findByPk($id);
		return $this->_model;
	}
	
	public function getIsGuest() {
		return parent::getIsGuest() || $this->getModel()->getIsGuest();
	}
	
	public function getIsAdmin() {
		return $this->getModel() !== null && $this->getModel()->getIsAdmin();
	}
	
	public function getIsEmployee() {
		return $this->getModel() !== null && $this->getModel()->getIsEmployee();
	}
	
	public function login($model, $duration = 0) {
		$this->_model = $model;
		return parent::login($model, $duration);
	}

	protected function beforeLogin($id, $states, $fromCookie) {
		if($this->getModel() !== null) {
			if($fromCookie) {
				if(isset($states['sk']) && $this->getModel()->session_key === $states['sk'])
					return parent::beforeLogin($id, $states, $fromCookie);
			} else {
				return parent::beforeLogin($id, $states, $fromCookie);
			}
		}
		return false;
	}

	protected function beforeLogout() {
		if($this->getModel() !== null)
			$this->getModel()->regenerateSessionKey();
		return parent::beforeLogout();
	}

}
?>