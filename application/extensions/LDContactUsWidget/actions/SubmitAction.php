<?php

class SubmitAction extends CAction
{
	
	public $mailer;
	
	public $captcha;

	public function run(array $ContactUs = array(), $ajax = null)
	{
		if(is_string($this->captcha) || is_array($this->captcha))
		{
			$this->captcha = Yii::createComponent($this->captcha);
		}
		if(is_string($this->mailer) || is_array($this->mailer))
		{
			$this->mailer = Yii::createComponent($this->mailer);
		}
		if(!$this->captcha instanceof CUCaptcha)
		{
			throw new CException(Yii::t(LDContactUsWidget::ID, 'SubmitAction.captcha must be an instance of CUCaptcha. Please check your configuration.'));
		}
		if(!$this->mailer instanceof CUMail)
		{
			throw new CException(Yii::t(LDContactUsWidget::ID, 'SubmitAction.mailerer must be an instance of CUMail. Please check your configuration.'));
		}

		$contactFormModel = new ContactUs();
		$contactFormModel->setAttributes($ContactUs);
		$this->captcha->loadAttributes($this->getController()->getActionParams());
		$captchaModel = $this->captcha->getModel();
		
		if($contactFormModel->validate() && !isset($ajax) && $captchaModel->validate() && Yii::app()->getRequest()->getIsPostRequest())
		{
			$this->mailer->setBody($contactFormModel->body, 'text/plain');
			$this->mailer->setSubject($contactFormModel->subject);
			$this->mailer->setFrom($contactFormModel->email);
			$this->mailer->send();
		}

		$result = array();
		foreach($contactFormModel->getErrors() as $attribute => $errors)
		{
			$result[CHtml::activeId($contactFormModel, $attribute)] = $errors;
		}
		
		foreach($captchaModel->getErrors() as $attribute => $errors)
		{
			$result[CHtml::activeId($captchaModel, $attribute)] = $errors;
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

}

?>
