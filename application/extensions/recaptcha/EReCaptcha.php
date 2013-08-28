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
	public $language = null;

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
	
	public $error = null;
	
	public $publicKey = null;

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
		if (in_array($value, $this->validThemes)) $this->theme = $value;
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

	//***************************************************************************
	// Run Lola Run
	//***************************************************************************

	public function init()
	{	
		if(empty($this->publicKey) || !is_string($this->publicKey))
		{
			throw new CException(Yii::t('ReCaptcha', 'EReCaptcha.publicKey requires your public key to be specified in your config file.'));
		}
		
		if(!isset($this->language))
		{
			$this->language = Yii::app()->getLanguage();
		}

		if (!Yii::app()->getClientScript()->isScriptRegistered(get_class($this).'_options', CClientScript::POS_HEAD)) 
		{
			Yii::app()->getClientScript()->registerScript(
				get_class($this).'_options',
				'var RecaptchaOptions = {'.
					'theme:"'.$this->theme.'",'.
					'custom_theme_widget:"'.(($this->customThemeWidget != '') ? '"'.$this->customThemeWidget.'"' : 'null').'",'.
					'lang:"'.$this->language.'",'.
					'tabindex:"'.$this->tabIndex.'"'.
				'};', 
				CClientScript::POS_HEAD);
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
						'useSsl' => $this->useSsl || Yii::app()->getRequest()->getIsSecureConnection(),
						'model' => $this->model,
						'attribute' => $this->attribute)
		);
	}
}