<?php

class SubmitAction extends CAction
{
	
	public $reCaptchaPrivateKey;
	
	public $contactUsEmail = 'support@courseportal.matherlifewaysinstituteonaging.com';
	
	public $mailComponent = 'mail';
	
	private $_mail;

	public function run(array $ContactUs = array(), array $EReCaptchaForm = array(), $ajax = null)
	{
		if(!isset($this->reCaptchaPrivateKey))
		{
			$this->reCaptchaPrivateKey = Yii::app()->params['reCaptcha']['privateKey'];
		}
		$contactFormModel = new ContactUs();
		$contactFormModel->setAttributes($ContactUs);
		$reCaptchaFormModel = Yii::createComponent('ext.recaptcha.EReCaptchaForm', $this->reCaptchaPrivateKey, $this->getController());
		$reCaptchaFormModel->setAttributes($EReCaptchaForm);
		
		if($contactFormModel->validate() && !isset($ajax) && $reCaptchaFormModel->validate() && Yii::app()->getRequest()->getIsPostRequest())
		{
			$mail = $this->getMail();
			$message = $mail->getNewMessageInstance();
			$message->setBody($contactFormModel->body, 'text/plain');
			$message->setSubject($contactFormModel->subject);
			$message->setTo($this->contactUsEmail);
			$message->setFrom($contactFormModel->email);
			$mail->send($message);
		}

		$result = array();
		foreach($contactFormModel->getErrors() as $attribute => $errors)
		{
			$result[CHtml::activeId($contactFormModel, $attribute)] = $errors;
		}
		foreach($reCaptchaFormModel->getErrors() as $attribute => $errors)
		{
			$result[CHtml::activeId($reCaptchaFormModel, $attribute)] = $errors;
		}

		if(empty($result))
		{
			foreach($contactFormModel->getAttributes($contactFormModel->getSafeAttributeNames()) as $attribute => $value)
			{
				$result[CHtml::activeId($contactFormModel, $attribute)] = $value;
			}
			$result = array(
				'success' => $result,
				'message' => Yii::t(LDContactUsWidget::ID, 'Thank you for contacting us. We will respond to your inquiry as soon as possible.')
			);
		}
		echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}
	
	public function getMail()
	{
		if(!isset($this->_mail))
		{
			$this->_mail = Yii::app()->getComponent($this->mailComponent);
			if($this->_mail === null)
			{
				throw new CException(Yii::t(LDContactUsWidget::ID, 'Invalid mail component specified for LDContactUsWidget\'s SubmitAction. The application component named "{name}" could not be found.', array('{name}' => $this->mailComponent)));
			}
		}
		return $this->_mail;
	}

}

?>
