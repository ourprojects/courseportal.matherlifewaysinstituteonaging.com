<?php   

class Login extends CFormModel {

	public $username_email;
	public $password;
	public $remember_me;
	
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
				array('username_email, password', 'required'),
				array('username_email', 'length', 'max' => 127),
				array('remember_me', 'boolean')
		);
	}
	
	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'username_email' => t('Username or Email'),
				'password' => t('Password'),
				'remember_me' => t('Remember me next time')
		);
	}

}