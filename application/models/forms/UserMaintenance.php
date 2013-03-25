<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UserMaintenance extends CFormModel {

	public $email;
	private $_user;

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
				array('email', 'required'),
				array('email', 'email'),
				array('email', 'exist', 'allowEmpty' => false, 'className' => 'CPUser', 'except' => 'ajax'),
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
				'email' => t('Email'),
				'user' => t('User')
		);
	}
	
	public function getUser() {
		if(!isset($this->_user) || ($this->_user->email !== $this->email && isset($this->email)))
			$this->_user = CPUser::model()->find('email=:email', array(':email' => $this->email));
		return $this->_user;
	}

}