<?php

class HomeController extends CoursePortalController
{
	
	public function actions()
	{
		return array_merge(parent::actions(), array('survey.' => 'surveyor.widgets.Survey'));
	}

	public function accessRules()
	{
		return array_merge(
				parent::accessRules(),
				array(
					array('allow',
							'actions' => array(
									'userIndex',
									'download',
							),
							'users' => array('@'),
					),
					array('deny',
							'actions' => array(
									'userIndex',
							),
							'users' => array('*'),
					),
				)
		);
	}

	public function actionIndex() 
	{
		if(Yii::app()->getUser()->getIsGuest()) 
		{
			$this->render('pages/guestIndex');
		} 
		else 
		{
			$this->render('pages/userIndex');
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact(array $EReCaptchaForm = array(), array $ContactUs = array(), $ajax = null) 
	{
		$models = array(
					'ContactUs' => new ContactUs,
					'EReCaptchaForm' => Yii::createComponent('ext.recaptcha.EReCaptchaForm', Yii::app()->params['reCaptcha']['privateKey'], $this)
				);
		
		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$models['EReCaptchaForm']->setAttributes($EReCaptchaForm);
			$models['ContactUs']->setAttributes($ContactUs);
			// if it is ajax validation request
			if(isset($ajax) && $ajax === 'contact-form') 
			{
				echo CActiveForm::validate($models, null, false);
				return;
			}
			elseif($models['EReCaptchaForm']->validate() && $models['ContactUs']->validate())
			{
				$message = Yii::app()->mail->getNewMessageInstance();
				$message->setBody($models['ContactUs']->body, 'text/plain');
				$message->setSubject($models['ContactUs']->subject);
				$message->setTo(Yii::app()->params['supportEmail']);
				$message->setFrom($models['ContactUs']->email);
				Yii::app()->mail->send($message);
	
				Yii::app()->getUser()->setFlash('success', t('Thank you for contacting us. We will respond to your inquiry as soon as possible.'));
	
				$models = array(
						'ContactUs' => new ContactUs,
						'EReCaptchaForm' => Yii::createComponent('ext.recaptcha.EReCaptchaForm', Yii::app()->params['reCaptcha']['privateKey'], $this)
					);
			}
		}
		$this->render('pages/contact', array('models' => $models));
	}

}