<?php

class LDReCaptchaValidator extends CValidator
{

	public $enableClientValidation = false;

	public $reCaptcha;

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
		$resp = $this->reCaptcha->check_answer($_SERVER['REMOTE_ADDR'], $this->recaptcha_challenge_field, $this->recaptcha_response_field);
		if(!$resp->is_valid)
		{
			$this->addError($object, $attribute, isset($this->message) ? $this->message : LDReCaptcha::t('Your captcha response could not be validated.'));
		}
	}

}