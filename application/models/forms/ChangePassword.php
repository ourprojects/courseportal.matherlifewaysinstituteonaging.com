<?php defined('BASEPATH') or exit('No direct script access allowed');  

class ChangePassword extends CFormModel {

	public $username_email;
	public $current_password;
	public $new_password;
	public $new_password_repeat;
	
	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors')
				));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('username_email, new_password, new_password_repeat', 'required'),
				array('current_password', 'required', 'except' => 'reset'),
				array('username_email', 'length', 'max' => 127),
				array('new_password_repeat',
						'compare',
						'compareAttribute' => 'new_password',
						'strict' => true,
						'message' => t('Passwords do not match')),
		);
	}
	
	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'username_email' => t('Username or Email'),
				'current_password' => t('Current Password'),
				'new_password' => t('New Password'),
				'new_password_repeat' => t('Repeat New Password'),
		);
	}

}