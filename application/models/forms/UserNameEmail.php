<?php

class UserNameEmail extends CFormModel {

	public $name_email;
	private $_user;

	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors')
				));
	}

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
				array('name_email', 'required'),
				array('name_email', 'length', 'max' => 127)
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
				'name_email' => t('Username or Email'),
				'user' => t('User')
		);
	}

	public function getUser() {
		if(isset($this->name_email) &&
				(!isset($this->_user) ||
						(strcasecmp($this->_user->email, $this->name_email) && strcasecmp($this->_user->name, $this->name_email))))
			$this->_user = CPUser::model()->find('email = :name_email OR name = :name_email', array(':name_email' => $this->name_email));
		return $this->_user;
	}

}