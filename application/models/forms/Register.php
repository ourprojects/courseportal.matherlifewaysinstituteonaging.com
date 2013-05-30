<?php   

class Register extends CFormModel {

	public $agreement_id = null;
	public $agree;
	public $name;
	public $email;
	public $new_password;
	public $new_password_repeat;
	public $firstname;
	public $lastname;
	public $location;
	public $country_iso;
	
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
				array('name, email, new_password, firstname, lastname', 'required'),
				array('new_password_repeat', 'required', 'except' => 'pushed'),
				array('agree', 'boolean'),
				array('agree', 'agreementRequired'),
				array('name, email', 'length', 'max' => 127),
				array('firstname, lastname, location', 'length', 'max' => 255),
				array('country_iso', 'length', 'max' => 3),
				array('new_password_repeat',
						'compare',
						'compareAttribute' => 'new_password',
						'strict' => true,
						'message' => t('Passwords do not match'),
						'except' => 'pushed'),
		);
	}
	
	public function agreementRequired($attribute, $params) {
		if(isset($this->agreement_id) && $this->$attribute != true)
			$this->addError($attribute, t('You must agree to the terms.'));
	}
	
	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'name' => t('Username'),
				'email' => t('Email'),
				'new_password' => t('Password'),
				'new_password_repeat' => t('Repeat Password'),
				'firstname' => t('First Name'),
				'lastname' => t('Last Name'),
				'agree' => t('Agree to terms')
		);
	}

}