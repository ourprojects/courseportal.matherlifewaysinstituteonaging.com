<?php defined('BASEPATH') or exit('No direct script access allowed');  

class HomeController extends OnlineCoursePortalController {
	
	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
				array('filters.HttpsFilter'),
				'accessControl + userIndex',
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
		if(Yii::app()->user->isGuest) {
			$models = array(
						'workingCaregiver_survey' => Yii::app()->surveyor->workingCaregiver->form,
						'hrEmployer_survey' => Yii::app()->surveyor->hrEmployer->form,
						'caregiver_survey' => Yii::app()->surveyor->caregiver->form,
					);

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
					'contactUs' => new ContactUs,
					'captcha' => new Captcha
				);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'contact-form') {
			echo CActiveForm::validate($models);
			Yii::app()->end();
		}
		
		if(isset($_POST['Captcha']) && isset($_POST['ContactUs'])) {
			$contact->attributes = $_POST['ContactUs'];
			if($models['captcha']->validate() && $models['contactUs']->validate()) {
				$this->loadExtension('yii-mail');
				$message = new YiiMailMessage;
				$message->setBody($contact->body, 'text/html');
				$message->subject = $contact->subject;
				$message->addTo(Yii::app()->params['adminEmail']);
				$message->from = $contact->email;
				Yii::app()->mail->send($message);
				Yii::app()->user->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('pages/contact', array('models' => $models));
	}

}