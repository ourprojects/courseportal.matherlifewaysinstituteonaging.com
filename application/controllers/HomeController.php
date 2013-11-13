<?php

class HomeController extends CoursePortalController
{
	
	public function actions()
	{
		$actions = array(
			'survey.' => 'surveyor.widgets.Survey', 
			'contactUs.' => array(
				'class' => 'ext.LDContactUsWidget.LDContactUsWidget',
				'captcha' => array(
					'class' => 'ext.LDContactUsWidget.components.CUReCaptcha',
					'config' => array('useAjax' => true)
				),
			)
		);
		$actions['contactUs.']['submit'] = array(
			'mailer' => array(
				'class' => 'ext.LDContactUsWidget.components.CUSimpleYiiMail',
				'to' => Yii::app()->params['supportEmail'],
				'yiiMailer' => Yii::app()->mail
			),
			'captcha' => $actions['contactUs.']['captcha']
		);
		return array_merge(parent::actions(), $actions);
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
		$this->render('pages/contact');
	}

}