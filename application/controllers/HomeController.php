<?php defined('BASEPATH') or exit('No direct script access allowed');  

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
			$models = array(
						'workingCaregiver_survey' => Yii::app()->surveyor->workingCaregiver->form,
						'hrEmployer_survey' => Yii::app()->surveyor->hrEmployer->form,
						'caregiver_survey' => Yii::app()->surveyor->caregiver->form,
					);
			
			$models['workingCaregiver_survey']->translateAttributes = true;
			$models['hrEmployer_survey']->translateAttributes = true;
			$models['caregiver_survey']->translateAttributes = true;

			if(isset($_POST['ajax']) && isset($models["{$_POST['ajax']}_survey"])) {
				echo CActiveForm::validate($models["{$_POST['ajax']}_survey"]);
				Yii::app()->end();
			}
			
			if(Yii::app()->request->isPostRequest) {
				foreach($models as $model) {
					if(isset($_POST["{$model->name}Survey"])) {
						$model->attributes = $_POST["{$model->name}Survey"];
						$model->save();
					}
				}
			}
			$this->render('pages/guestIndex', array('models' => $models));
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
		
		if(isset($_POST['Captcha']) && isset($_POST['ContactUs'])) {
			$models['ContactUs']->attributes = $_POST['ContactUs'];
			if($models['Captcha']->validate() && $models['ContactUs']->validate()) {
				$this->loadExtension('yii-mail');
				$message = new YiiMailMessage;
				$message->setBody($models['ContactUs']->body, 'text/html');
				$message->subject = $models['ContactUs']->subject;
				$message->addTo(Yii::app()->params['adminEmail']);
				$message->from = $models['ContactUs']->email;
				Yii::app()->mail->send($message);
				Yii::app()->getUser()->setFlash('success', t('Thank you for contacting us. We will respond to you as soon as possible.'));
				$this->refresh();
			}
		}
		$this->render('pages/contact', array('models' => $models));
	}

}