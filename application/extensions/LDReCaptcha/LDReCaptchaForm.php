<?php

class LDReCaptchaForm extends CFormModel
{
	/**
	 * @var string the name of the dummy attribute used by this form
	 */
	const CAPTCHA_ATTRIBUTE_NAME = 'captcha';

	public $captcha;

	public $recaptcha_challenge_field;

	public $recaptcha_response_field;

	private $_reCaptcha;

	public function __construct($reCaptcha, $scenario = '')
	{
		parent::__construct($scenario);
		if(is_string($reCaptcha))
		{
			$this->_reCaptcha = Yii::app()->getComponent($reCaptcha);
		}
		else if(is_array($reCaptcha))
		{
			$this->_reCaptcha = Yii::createComponent($reCaptcha);
			$this->_reCaptcha->init();
		}
		else
		{
			$this->_reCaptcha = $reCaptcha;
		}
		if(!$this->_reCaptcha instanceof LDReCaptcha)
		{
			throw new CException(LDReCaptcha::t('Invalid reCaptcha component specified.'));
		}
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('recaptcha_challenge_field, recaptcha_response_field', 'unsafe'),
			array('captcha', 'safe'),
			array('recaptcha_challenge_field, recaptcha_response_field', 'required'),
			array('captcha',
				$this->_reCaptcha->basePathAlias.'.LDReCaptchaValidator',
				'reCaptcha' => $this->_reCaptcha,
				'recaptcha_challenge_field' => $this->recaptcha_challenge_field,
				'recaptcha_response_field' => $this->recaptcha_response_field,
			),
		);
	}

	public function loadAttributes($actionParams)
	{
		if(isset($actionParams['recaptcha_challenge_field']))
		{
			$this->recaptcha_challenge_field = $actionParams['recaptcha_challenge_field'];
		}
		if(isset($actionParams['recaptcha_response_field']))
		{
			$this->recaptcha_response_field = $actionParams['recaptcha_response_field'];
		}
		if(isset($actionParams[get_class($this)]['captcha']))
		{
			$this->captcha = $actionParams[get_class($this)]['captcha'];
		}
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return array(
			'captcha' => LDReCaptcha::t('Captcha'),
		);
	}

}