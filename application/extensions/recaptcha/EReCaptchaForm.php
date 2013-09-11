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
	
	private $_controller;
	
	public function __construct($privateKey, $controller, $scenario = '')
	{
		parent::__construct($scenario);
		if(!isset($privateKey))
		{
			throw new CException(Yii::t('recaptcha', 'Invalid reCaptcha private key.'));
		}
		$this->_privateKey = $privateKey;
		$this->_controller = $controller;
	}
	
	public function getPrivateKey()
	{
		return $this->_privateKey;
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
				array('recaptcha_challenge_field', 'filter', 'filter' => array($this, 'loadChallenge')),
				array('recaptcha_response_field', 'filter', 'filter' => array($this, 'loadResponse')),
				array('recaptcha_challenge_field, recaptcha_response_field', 'unsafe'),
				array('captcha', 'safe'),
				array('recaptcha_challenge_field, recaptcha_response_field', 'required'),
				array('captcha', 'validateCaptcha'),
		);
	}
	
	public function loadChallenge($challenge)
	{
		$actionParams = $this->_controller->getActionParams();
		if(isset($actionParams['recaptcha_challenge_field']))
		{
			$challenge = $actionParams['recaptcha_challenge_field'];
		}
		return $challenge;
	}
	
	public function loadResponse($response)
	{
		$actionParams = $this->_controller->getActionParams();
		if(isset($actionParams['recaptcha_response_field']))
		{
			$response = $actionParams['recaptcha_response_field'];
		}
		return $response;
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
			$this->addError($attribute, isset($params['message']) ? $params['message'] : Yii::t('recaptcha', 'Your captcha response could not be validated.'));
		}
	}

}
