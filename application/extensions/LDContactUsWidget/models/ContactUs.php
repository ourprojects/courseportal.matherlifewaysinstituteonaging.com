<?php   

/**
 * ContactUs class.
 * ContactUs is the data structure for keeping contact form data.
 */
class ContactUs extends CFormModel {

	public $name;
	public $email;
	public $subject;
	public $body;
	
	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'application.behaviors.EModelBehaviors')
				));
	}

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
				array('name, email, subject, body', 'required'),
				array('name', 'length', 'max' => 256),
				array('email', 'email'),
				array('subject', 'length', 'max' => 256),
				array('body', 'length', 'max' => 4096),
		);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
				'name' => t('Name'),
				'email' => t('Email'),
				'subject' => t('Subject'),
				'body' => t('Body'),
		);
	}

}