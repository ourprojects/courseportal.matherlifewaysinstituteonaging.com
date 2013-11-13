<?php

/**
 * EReCaptcha generates a CAPTCHA using the service provided by reCAPTCHA {@link http://recaptcha.net/}.
 * See LICENCE.txt for the terms of use for this service.
 *
 * @author Louis DaPrato
 */
class LDReCaptcha extends CApplicationComponent
{

	/**
	 * An identifier used through out the LDReCaptcha extension to uniquely identify itself.
	 * 
	 * @var string An identifier for this extension.
	 */
	const ID = 'LDReCaptcha';
	
	/**
	 * Sets the alias of the base path where all related reCaptcha files can be found.
	 * Defaults to 'ext.LDReCaptcha'
	 * 
	 * @var string path alias
	 */
	public $basePathAlias = 'ext.LDReCaptcha';

	/**
	 * reCAPTCHA public key
	 *
	 * @var string
	 */
	private $publicKey;

	/**
	 * reCAPTCHA private key
	 *
	 * @var string
	 */
	private $privateKey;
	
	/**
	 * Translate a message specific for LDReCaptcha extension.
	 *
	 * @link YiiBase::t
	 */
	public static function t($message, $params = array(), $source = null, $language = null)
	{
		return Yii::t(self::ID, $message, $params, $source, $language);
	}

	/***********************
	 * Getters and Setters *
	 ***********************/
	
	/**
	 * Sets the public key.
	 *
	 * @param string $value
	 * @throws CException if $value is not valid.
	 */
	public function setPublicKey($value)
	{
		if(empty($value) || !is_string($value))
		{
			throw new CException(Yii::t(self::ID, 'The reCaptcha public key "{key}" is invalid.', array('{key}' => $value)));
		}
		$this->publicKey = $value;
	}

	/**
	 * Returns the reCAPTCHA protected key
	 *
	 * @return string
	 */
	public function getPublicKey()
	{
		return $this->publicKey;
	}

	/**
	 * Sets the private key.
	 *
	 * @param string $value
	 * @throws CException if $value is not valid.
	 */
	public function setPrivateKey($value)
	{
		if(empty($value) || !is_string($value))
		{
			throw new CException(Yii::t(self::ID, 'The reCaptcha private key "{key}" is invalid.', array('{key}' => $value)));
		}
		$this->privateKey = $value;
	}

	/**
	 * Returns the reCAPTCHA private key
	 *
	 * @return string
	 */
	public function getPrivateKey()
	{
		return $this->privateKey;
	}
	
	/****************************
	 * Component initialization *
	 ****************************/

	public function init()
	{
		// Include the reCAPTCHA PHP wrapper.
		require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'reCAPTCHA'.DIRECTORY_SEPARATOR.'recaptchalib.php');
	}
	
	/********************************
	 * Widget Convenience functions *
	 ********************************/
	
	public function beginWidget($owner, $properties = array())
	{
		$properties['reCaptcha'] = $this;
		return $owner->beginWidget($this->basePathAlias.'.LDReCaptchaWidget', $properties);
	}
	
	public function createWidget($owner, $properties = array())
	{
		$properties['reCaptcha'] = $this;
		return $owner->createWidget($this->basePathAlias.'.LDReCaptchaWidget', $properties);
	}
	
	public function widget($owner, $properties = array(), $captureOutput = false)
	{
		$properties['reCaptcha'] = $this;
		return $owner->widget($this->basePathAlias.'.LDReCaptchaWidget', $properties, $captureOutput);
	}

	/**********************************
	 * recaptchalib function wrappers *
	 **********************************/

	/**
	 * Encodes the given data into a query string format
	 * 
	 * @param $data - array of string elements to be encoded
	 * @return string - encoded request
	 */
	public function _qsencode($data)
	{
		return _recaptcha_qsencode($data);
	}

	/**
	 * Submits an HTTP POST to a reCAPTCHA server
	 * 
	 * @param string $host
	 * @param string $path
	 * @param array $data
	 * @param int port
	 * @return array response
	 */
	public function _http_post($host, $path, $data, $port = 80)
	{
		return _recaptcha_http_post($host, $path, $data, $port);
	}

	/**
	 * Gets the challenge HTML (javascript and non-javascript version).
	 * This is called from the browser, and the resulting reCAPTCHA HTML widget
	 * is embedded within the HTML form it was called from.
	 * 
	 * @param string $error The error given by reCAPTCHA (optional, default is null)
	 * @param boolean $use_ssl Should the request be made over ssl? (optional, default is false)
	 * @return string - The HTML to be embedded in the user's form.
	 */
	public function get_html($error = null, $use_ssl = false, $language_override = '')
	{
		return recaptcha_get_html($this->publicKey, $error, $use_ssl, $language_override);
	}

	/**
	 * Calls an HTTP POST function to verify if the user's guess was correct
	 * 
	 * @param string $remoteip
	 * @param string $challenge
	 * @param string $response
	 * @param array $extra_params an array of extra variables to post to the server
	 * @return ReCaptchaResponse
	 */
	public function check_answer($remoteip, $challenge, $response, $extra_params = array())
	{
		return recaptcha_check_answer($this->privateKey, $remoteip, $challenge, $response, $extra_params);
	}

	/**
	 * gets a URL where the user can sign up for reCAPTCHA. If your application
	 * has a configuration page where you enter a key, you should provide a link
	 * using this function.
	 * 
	 * @param string $domain The domain where the page is hosted
	 * @param string $appname The name of your application
	 */
	public function get_signup_url($domain = null, $appname = null)
	{
		return recaptcha_get_signup_url($domain, $appname);
	}

	public function _aes_pad($val)
	{
		return _recaptcha_aes_pad($val);
	}

	/* Mailhide related code */

	public function _aes_encrypt($val, $ky)
	{
		return _recaptcha_aes_encrypt($val, $ky);
	}

	public function _mailhide_urlbase64($x)
	{
		return _recaptcha_mailhide_urlbase64($x);
	}

	/**
	 *  gets the reCAPTCHA Mailhide url for a given email
	 */
	public function mailhide_url($email)
	{
		return recaptcha_mailhide_url($this->publicKey, $this->privateKey, $email);
	}

	/**
	 * gets the parts of the email to expose to the user.
	 * eg, given johndoe@example,com return ["john", "example.com"].
	 * the email is then displayed as john...@example.com
	 */
	public function _mailhide_email_parts($email)
	{
		return _recaptcha_mailhide_email_parts($email);
	}

	/**
	 * Gets html to display an email address.
	 * to get a key, go to:
	 *
	 * http://www.google.com/recaptcha/mailhide/apikey
	 */
	public function mailhide_html($email)
	{
		return recaptcha_mailhide_html($this->publicKey, $this->privateKey, $email);
	}

}
