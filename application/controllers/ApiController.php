<?php defined('BASEPATH') or exit('No direct script access allowed');  

class ApiController extends OnlineCoursePortalController {

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
				array('filters.HttpsFilter'),
				'verifyKey',
		);
	}
	
	public function filterVerifyKey($filterChain) {
		if(isset($_GET['key_id']) && isset($_GET['key'])) {
			$_GET['key'] = str_replace(array('-','_'), array('+','/'), $_GET['key']);
			$key = Key::model()->findByPk($_GET['key_id']);
			if($key !== null) {
				$this->loadExtension('pbkdf2');
				$hasher = new PBKDF2($_GET['key'], $key->salt);
				if($hasher->hashed === $key->value) {
					$filterChain->run();	
					return;
				}
			}
		}
		throw new CHttpException(401, t('Not authorized.'));
	}
	
	public function actionCreateUser() {
		$models = array(
					'user' => new User('pushedRegister'),
					'user_profile' => new UserProfile,
				);
		$models['user']->attributes = $_REQUEST;
		$models['user_profile']->attributes = $_REQUEST;

		if($models['user']->validate()) {
			$transaction = Yii::app()->db->beginTransaction();
			try {
				if($models['user']->save(false)) {
					$models['user_profile']->user_id = $models['user']->id;
					if($models['user_profile']->save())
						$transaction->commit();
					else
						$transaction->rollback();
				}
			} catch(Exception $e) {
				$transaction->rollback();
				throw $e;
			}
		}

		$errors = array();
		foreach($models as $model)
			$errors = array_merge($errors, $model->getErrors());
		
		if(empty($errors))
			$this->renderTemplate('json', 200, array('confirmationUrl' => $models['user']->getActivationUrl()));
		else
			$this->renderTemplate('json', 400, $errors);
	}
	
	public function actionAddCourse() {
		$errors = array();
		if(!isset($_REQUEST['email']))
			$errors['email'] = 'An email must be specified. Who are you adding this course to?';
		if(!isset($_REQUEST['course_id'])) 
			$errors['course_id'] = 'An course_id must be specified. What course are you adding?';
		
		if(empty($errors)) {
			if(($user = User::model()->find('email=:email', array(':email' => $_REQUEST['email']))) !== null) {
				$userCourse = new UserCourse;
				$userCourse->user_id = $user->id;
				$userCourse->course_id = $_REQUEST['course_id'];
				if(!$userCourse->save())
					$errors = array_merge($errors, $userCourse->getErrors());
			} else {
				$errors['email'] = "A user with email {$_REQUEST['email']} could not be found.";
			}
		}
	
		if(empty($errors))
			$this->renderTemplate('json');
		else
			$this->renderTemplate('json', 400, $errors);
	}
	
	protected function renderTemplate($template, $statusCode = 200, $data = array(), $additionalHeaders = null) {
		$this->renderPartial("templates/$template", array('statusCode' => $statusCode, 'data' => $data, 'additionalHeaders' => $additionalHeaders));
	}

}