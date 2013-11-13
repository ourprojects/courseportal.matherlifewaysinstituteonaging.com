<?php   

/**
 * EReCaptcha generates a CAPTCHA using the service provided by reCAPTCHA {@link http://recaptcha.net/}.
 * See LICENCE.txt for the terms of use for this service.
 *
 * @author Louis DaPrato
 */
class LDReCaptchaWidget extends CInputWidget
{

	const DEFAULT_LANGUAGE = 'en';
	
	const DEFAULT_THEME = 'red';
	
	/**
	 * Valid languages
	 *
	 * @var array
	 */
	private static $VALID_LANGUAGES = array('en', 'nl', 'fr', 'de', 'pt', 'ru', 'es', 'tr');
	
	/**
	 * Valid themes
	 *
	 * @var array
	*/
	private static $VALID_THEMES = array('red', 'white', 'blackglass', 'clean', 'custom');
	
	/**
	 * The reCaptcha application component to use for this widget.
	 * If not specified, an attempt to use the component named 'reCaptcha' will be made.
	 * 
	 * @var LDReCaptcha The reCaptcha application component to use for this widget. 
	 */
	protected $_reCaptcha = 'reCaptcha';

	/**
	 * Defines which theme to use for reCAPTCHA. Valid themes are 'red', 'white', 'blackglass', 'clean', 'custom'
	 * Defaults to 'red'.
	 *
	 * @var string the theme name for the widget
	 */
	protected $_theme = self::DEFAULT_THEME;

	/**
	 * Any supported language code. Valid languages are 'en', 'nl', 'fr', 'de', 'pt', 'ru', 'es', 'tr'
	 * Defaults to the application's language if supported, otherwise defaults to 'en'.
	 *
	 * @var string the language code
	 */
	protected $_language;

	/**
	 * Sets a tabindex for the reCAPTCHA text box. If other elements in the form use a tabindex, this should be set so that navigation is easier for the user
	 *
	 * @var string the tab index for the HTML tag
	 */
	public $tabIndex = 0;

	/**
	 * @var string the id for the HTML containing the custom theme
	 */
	public $customThemeWidget = null;

	/**
	 * A dictionary of translations. Use this to specify custom translations of reCAPTCHA strings.
	 *
	 * @var array The translations dictionary
	 */
	public $customTranslations = array();
	
	/**
	 * A JavaScript callback function called when the captcha area is created via AJAX.
	 * 
	 * @var string The callback function
	 */
	public $callback = null;

	/**
	 * @var boolean whether to use SSL for connections. If false, autodetection will be used.
	 */
	public $useSsl = false;

	/**
	 * @var boolean whether to create the captcha area using AJAX. If false, the captcha will be embedded using an iframe.
	 */
	public $useAjax = false;
	/**
	 * The error given by reCAPTCHA (optional, default is null)
	 * 
	 * @var string
	 */
	public $error = null;
	
	/**
	 * Get the valid languages for the reCAPTCHA widget
	 * 
	 * @return array
	 */
	public static function getValidLanguages()
	{
		return self::$VALID_LANGUAGES;
	}
	
	/**
	 * Get the valid themes for the reCAPTCHA widget
	 *
	 * @return array
	 */
	public static function getValidThemes()
	{
		return self::$VALID_THEMES;
	}
	
	/**
	 * Check if the language is valid for the reCaptcha widget
	 * 
	 * @param string $language
	 * @return boolean
	 */
	public static function isValidLanguage($language)
	{
		return in_array($language, self::$VALID_LANGUAGES);
	}
	
	/**
	 * Check if the theme is valid for the reCaptcha widget
	 * 
	 * @param string $theme
	 * @return boolean
	 */
	public static function isValidTheme($theme)
	{
		return in_array($theme, self::$VALID_THEMES);
	}

	/**
	 * Sets the theme
	 *
	 * @param string $value the theme
	*/
	public function setTheme($value)
	{
		if(self::isValidTheme($value))
		{
			$this->_theme = $value;
		}
	}

	/**
	 * Returns the theme
	 *
	 * @return string
	 */
	public function getTheme()
	{
		return $this->_theme;
	}

	/**
	 * Sets the language. If the language is not support, the default language 'en' will be set.
	 *
	 * @param string $value the language
	 */
	public function setLanguage($value)
	{
		if(self::isValidLanguage($value))
		{
			$this->_language = $value;
		}
		$this->_language = self::DEFAULT_LANGUAGE;
	}

	/**
	 * Returns the language value
	 *
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->_language;
	}
	
	/**
	 * Whether to use SSL for connections. True if useSsl is true or {@link CHttpRequest::getIsSecureConnection()} is true.
	 * 
	 * @return boolean
	 */
	public function getUseSecureConnections()
	{
		return $this->useSsl || Yii::app()->getRequest()->getIsSecureConnection();
	}
	
	/**
	 * Sets the reCaptcha component this widget should use.
	 * 
	 * @param LDReCaptcha $reCaptcha
	 * @throws CException If $reCaptcha is not and instance of LDReCaptcha 
	 * or the component with the ID specified by $reCaptcha could not be found
	 * or the component configuration specified by $reCaptcha is incorrect.
	 */
	public function setReCaptcha($reCaptcha)
	{
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
		if(!isset($this->model) && !isset($this->name))
		{
			Yii::import($this->_reCaptcha->basePathAlias.'.LDReCaptchaForm');
			$this->model = new LDReCaptchaForm($this->_reCaptcha);
			$this->attribute = LDReCaptchaForm::CAPTCHA_ATTRIBUTE_NAME;
		}
	}
	
	/**
	 * Gets the current reCaptcha component being used by this widget.
	 * 
	 * @return LDReCaptcha
	 */
	public function getReCaptcha()
	{
		return $this->_reCaptcha;
	}

	public function init()
	{	
		if(is_string($this->_reCaptcha))
		{
			$reCaptcha = Yii::app()->getComponent($this->_reCaptcha);
			if($reCaptcha instanceof LDReCaptcha)
			{
				$this->setReCaptcha($reCaptcha);
			}
		}
		
		if(!isset($this->_language))
		{
			$this->setLanguage(Yii::app()->getLanguage());
		}
	}

	/**
	 * Renders the widget.
	 */
	public function run()
	{
		if($this->_reCaptcha === null)
		{
			throw new CException(LDReCaptcha::t('No reCaptcha application component was set. Check your widget\'s configuration.'));
		}
		$recaptchaOptions = CJavaScript::encode(
			array(
				'theme' => $this->getTheme(),
				'custom_theme_widget' => $this->customThemeWidget,
				'lang' => $this->getLanguage(),
				'tabindex' => $this->tabIndex,
			)
		);
		$this->render(
			'ReCaptcha',
			array(
				'reCaptcha' => $this->getReCaptcha(),
				'error' => $this->error,
				'language' => $this->getLanguage(),
				'useSsl' => $this->getUseSecureConnections(),
				'useAjax' => $this->useAjax,
				'model' => $this->model,
				'attribute' => $this->attribute,
				'recaptchaOptions' => $recaptchaOptions
			)
		);
	}
	
}
