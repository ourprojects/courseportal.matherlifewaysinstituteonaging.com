<?php

/**
 * Include the reCAPTCHA PHP wrapper.
 */
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'reCAPTCHA'.DIRECTORY_SEPARATOR.'recaptchalib.php');

class EReCaptchaForm extends CFormModel 
{

	public $captcha;
	
	public $recaptcha_challenge_field;
	
	public $recaptcha_response_field;
	
	private $_privateKey;
	
	public function __construct($privateKey, $scenario = '')
	{
		parent::__construct($scenario);
		if(!isset($privateKey))
		{
			throw new CException(Yii::t('recaptcha', 'Invalid reCaptcha private key.'));
		}
		$this->_privateKey = $privateKey;
	}
	
	public function getPrivateKey()
	{
		return $this->_privateKey;
	}
	
	public function loadAttributes($safeOnly = true)
	{
		$inputName = get_class($this);
		if(isset($_POST['recaptcha_challenge_field']))
		{
			$_POST[$inputName]['recaptcha_challenge_field'] = $_POST['recaptcha_challenge_field'];
		}
		if(isset($_POST['recaptcha_response_field']))
		{
			$_POST[$inputName]['recaptcha_response_field'] = $_POST['recaptcha_response_field'];
		}
		if(isset($_POST[$inputName])) 
		{
			$this->setAttributes($_POST[$inputName], $safeOnly);
			return true;
		}
		return false;
	}
	
	public function getRequiredAttributes($safeOnly = true) 
	{
		return array_values(array_filter($safeOnly ? $this->getSafeAttributeNames() : $this->attributeNames(), array($this, 'isAttributeRequired')));
	}
	
	public function isAttributeOptional($attrName) 
	{
		return !$this->isAttributeRequired($attrName);
	}
	
	public function getOptionalAttributes($safeOnly = true) 
	{
		return array_values(array_filter($safeOnly ? $this->getSafeAttributeNames() : $this->attributeNames(), array($this, 'isAttributeOptional')));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() 
	{
		return array(
				array('captcha, recaptcha_challenge_field, recaptcha_response_field', 'safe'),
				array('recaptcha_challenge_field, recaptcha_response_field', 'required'),
				array('captcha', 'validateCaptcha'),
		);
	}
	
	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() 
	{
		return array(
				'captcha' => Yii::t('recaptcha', 'Captcha'),
		);
	}
	
	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel the object being validated
	 * @param string the attribute being validated
	 */
	public function validateCaptcha($attribute, $params)
	{
		$resp = recaptcha_check_answer($this->getPrivateKey(), $_SERVER['REMOTE_ADDR'], $this->recaptcha_challenge_field, $this->recaptcha_response_field);
		if (!$resp->is_valid)
		{
			$message = isset($params['message']) ? $params['message'] : Yii::t('recaptcha', 'Your captcha response could not be validated.');
			$this->addError($attribute, $message);
		}
	}

}
