<?php defined('BASEPATH') or exit('No direct script access allowed');  

class Captcha extends CFormModel {

	public $captcha;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('captcha', 'ext.recaptcha.EReCaptchaValidator',
					  'message' => 'Incorrect captcha was entered.'),
		);
	}
	
	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'captcha' => t('Captcha'),
		);
	}

}