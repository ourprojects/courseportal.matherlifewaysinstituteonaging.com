<?php   
/**
 * EReCaptcha class file.
 *
 * @author Rodolfo González <metayii.framework@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Rodolfo González
 * @license
 *
 * Copyright © 2008-2011 by Rodolfo González
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * - Redistributions of source code must retain the above copyright notice,
 *   this list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 * - Neither the name of MetaYii nor the names of its contributors may
 *   be used to endorse or promote products derived from this software without
 *   specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 * GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
 * EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 */

/**
 * Include the reCAPTCHA PHP wrapper.
 */
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'reCAPTCHA'.DIRECTORY_SEPARATOR.'recaptchalib.php');

/**
 * EReCaptcha generates a CAPTCHA using the service provided by reCAPTCHA {@link http://recaptcha.net/}.
 * See LICENCE.txt for the terms of use for this service.
 *
 * EReCaptcha should be used together with {@link EReCaptchaValidator}.
 *
 * @author MetaYii
 * @package application.extensions.recaptcha
 * @since 1.3
 */
class EReCaptcha extends CInputWidget
{
	//***************************************************************************
	// Configuration.
	//***************************************************************************
	
	const ID = 'LDReCaptcha';

	/**
	 * The theme name for the widget. Valid themes are 'red', 'white', 'blackglass', 'clean', 'custom'
	 *
	 * @var string the theme name for the widget
	 */
	protected $theme = 'red';

	/**
	 * The language for the widget.
	 *
	 * @var string the language suffix
	 */
	public $language;

	/**
	 * @var string the tab index for the HTML tag
	 */
	public $tabIndex = 0;

	/**
	 * @var string the id for the HTML containing the custom theme
	 */
	public $customThemeWidget = '';

	/**
	 * @var boolean whether to use SSL for connections. If false, autodetection will be used.
	 */
	public $useSsl = false;
	
	public $error;
	
	public $publicKey;
	
	public $privateKey;
	
	public $useAjax = false;

	//***************************************************************************
	// Internal properties.
	//***************************************************************************

	/**
	 * Valid themes
	 *
	 * @var array
	 */
	protected $validThemes = array('red','white','blackglass','clean','custom');

	//***************************************************************************
	// Setters and getters.
	//***************************************************************************

	/**
	 * Sets the theme
	 *
	 * @param string $value the theme
	 */
	public function setTheme($value)
	{
		if(in_array($value, $this->validThemes))
		{
			$this->theme = $value;
		}
	}

	/**
	 * Returns the theme
	 *
	 * @return string
	 */
	public function getTheme()
	{
		return $this->theme;
	}
	
	public function getUseSecureConnections()
	{
		return $this->useSsl || Yii::app()->getRequest()->getIsSecureConnection();
	}

	//***************************************************************************
	// Run Lola Run
	//***************************************************************************

	public function init()
	{	
		if(!is_string($this->publicKey) || $this->publicKey === '')
		{
			throw new CException(Yii::t(self::ID, 'EReCaptcha.publicKey requires your public key to be specified in your config file.'));
		}
		
		if(!is_string($this->privateKey) || $this->privateKey === '')
		{
			throw new CException(Yii::t(self::ID, 'EReCaptcha.privateKey requires your private key to be specified in your config file.'));
		}
		
		if(!isset($this->language))
		{
			$this->language = Yii::app()->getLanguage();
		}
		
		if(!isset($this->model) && !isset($this->name))
		{
			$this->model = new EReCaptchaForm($this->privateKey, $this->getController());
			$this->attribute = 'captcha';
		}

		$recaptchaOptions = CJavaScript::encode(
			array(
				'theme' => $this->theme,
				'custom_theme_widget' => ($this->customThemeWidget !== '' ? $this->customThemeWidget : null),
				'lang' => $this->language,
				'tabindex' => $this->tabIndex,
			)
		);

		if($this->useAjax) 
		{
			Yii::app()->getClientScript()->registerScriptFile(($this->getUseSecureConnections() ? 'https://' : 'http://') . 'www.google.com/recaptcha/api/js/recaptcha_ajax.js');
			Yii::app()->getClientScript()->registerScript(
				get_class($this).'_ajaxCreate',
				'function showRecaptcha(element){'.
					'Recaptcha.create("'.$this->publicKey.'",element,'.$recaptchaOptions.');'.
				'}',
				CClientScript::POS_HEAD
			);
		}
		else
		{
			Yii::app()->getClientScript()->registerScript(
				get_class($this).'_options',
				'var RecaptchaOptions = '.$recaptchaOptions,
				CClientScript::POS_HEAD
			);
		}
	}

	/**
	 * Renders the widget.
	 */
	public function run()
	{
		$this->render(
			'ReCaptcha',
			array(
				'publicKey' => $this->publicKey,
				'error' => $this->error,
				'language' => $this->language,
				'useSsl' => $this->getUseSecureConnections(),
				'useAjax' => $this->useAjax,
				'model' => $this->model,
				'attribute' => $this->attribute
			)
		);
	}
	
}

class EReCaptchaValidator extends CValidator
{
	
	public $enableClientValidation = false;
	
	public $privateKey;
	
	public $recaptcha_challenge_field;
	
	public $recaptcha_response_field;
	
	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel $object the object being validated
	 * @param string $attribute the attribute being validated
	 */
	protected function validateAttribute($object, $attribute)
	{
		$resp = recaptcha_check_answer(
			$this->privateKey,
			$_SERVER['REMOTE_ADDR'],
			$this->recaptcha_challenge_field,
			$this->recaptcha_response_field
		);
		if(!$resp->is_valid)
		{
			$this->addError($object, $attribute, isset($this->message) ? $this->message : Yii::t(EReCaptcha::ID, 'Your captcha response could not be validated.'));
		}
	}
	
}

class EReCaptchaForm extends CFormModel
{

	public $loadInputsOnValidate = true;
	
	public $captcha;

	public $recaptcha_challenge_field;

	public $recaptcha_response_field;

	private $_privateKey;
	
	private $_controller;
	
	public function __construct($privateKey, $controller, $scenario = '')
	{
		parent::__construct($scenario);
		if(!is_string($privateKey) || $privateKey === '')
		{
			throw new CException(Yii::t(EReCaptcha::ID, 'EReCaptchaForm.privateKey requires your private key to be specified in your config file.'));
		}
		$this->_privateKey = $privateKey;
		$this->_controller = $controller;
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
			array('recaptcha_challenge_field, recaptcha_response_field, loadInputsOnValidate', 'unsafe'),
			array('captcha', 'safe'),
			array('recaptcha_challenge_field, recaptcha_response_field', 'required'),
			array('captcha', 
				'EReCaptchaValidator', 
				'privateKey' => $this->_privateKey,
				'recaptcha_challenge_field' => $this->recaptcha_challenge_field,
				'recaptcha_response_field' => $this->recaptcha_response_field,
			),
		);
	}
	
	protected function beforeValidate()
	{
		if($this->loadInputsOnValidate)
		{
			$this->loadInputs();
		}
		return parent::beforeValidate();
	}
	
	public function loadInputs()
	{
		$actionParams = $this->_controller->getActionParams();
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
			'captcha' => Yii::t(EReCaptcha::ID, 'Captcha'),
		);
	}

}
