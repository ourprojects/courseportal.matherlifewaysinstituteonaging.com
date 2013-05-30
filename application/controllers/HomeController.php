<?php   

class HomeController extends OnlineCoursePortalController {
	
	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
				array('filters.HttpsFilter'),
				'accessControl 
				+ 
				userIndex 
				videos.TheSandwichGeneration.poster.jpg
				videos.TheSandwichGeneration.video.m4v
				videos.TheSandwichGeneration.video.ogv
				videos.TheSandwichGeneration.video.webm',
		);
	}
	
	public function accessRules() {
		return array(
				array('allow',
						'users' => array('@'),
				),
				array('deny',
						'users' => array('*'),
				),
		);
	}

	public function actionIndex() {
		if(Yii::app()->getUser()->getIsGuest()) {
			$this->render('pages/guestIndex',
				array(
					'workingCaregiverSurvey' => $this->createWidget(
							'modules.surveyor.widgets.Survey',
							array(
									'id' => 'workingCaregiver',
									'options' => array(
										'autoProcess' => true,
										'htmlOptions' => array('class' => 'box-white'),
										'title' => array('htmlOptions' => array('class' => 'flowers')),
										'form' => array('options' => array(
															'enableAjaxValidation' => true,
															'enableClientValidation' => true
														)),
									)
							)
					),
					'hiddenSurveys' => array(
						$this->createWidget(
								'modules.surveyor.widgets.Survey',
								array(
										'id' => 'hrEmployer',
										'options' => array(
											'autoProcess' => true,
											'htmlOptions' => array('style' => 'display:none;'),
											'title' => array('htmlOptions' => array('class' => 'flowers')),
											'form' => array('options' =>
													array(
															'enableAjaxValidation' => true,
															'enableClientValidation' => true
													)),
										)
								)
						),
						$this->createWidget(
								'modules.surveyor.widgets.Survey',
								array(
										'id' => 'caregiver',
										'options' => array(
											'autoProcess' => true,
											'htmlOptions' => array('style' => 'display:none;'),
											'title' => array('htmlOptions' => array('class' => 'flowers')),
											'form' => array('options' =>
													array(
															'enableAjaxValidation' => true,
															'enableClientValidation' => true
													)),
										)
								)
						)
					)
				)
			);
		} else {
			$this->render('pages/userIndex');
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact() {
		$models = array(
					'ContactUs' => new ContactUs,
					'Captcha' => new Captcha
				);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'contact-form') {
			echo CActiveForm::validate($models);
			Yii::app()->end();
		}
		
		if($models['Captcha']->loadAttributes() && $models['ContactUs']->loadAttributes()
				&& $models['Captcha']->validate() && $models['ContactUs']->validate()) 
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
					'Captcha' => new Captcha
				);
		}
		$this->render('pages/contact', array('models' => $models));
	}

}