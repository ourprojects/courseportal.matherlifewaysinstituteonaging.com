<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UserController extends ApiController {

	/**
	 * @return array action filters
	 */
	public function filters() {
		$filters = parent::filters();
		$filters[] = 'verifyKey + addCourse'; 
		return array_merge($filters, array('accessControl + profile'));
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

	/**
	 * Displays the login page
	 */
	public function actionLogin() {
		$user = new User('login');

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
			echo CActiveForm::validate($user);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['User'])) {
			$user->attributes = $_POST['User'];
			// validate user input and redirect to the previous page if valid
			if($user->login(isset($_POST['remember_me']))) {
				Yii::app()->user->setFlash('success', t('Welcome {email}!', array('{email}' => Yii::app()->user->name)));
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		// display the login form
		$this->render('pages/login', array('model' => $user));
	}

	/**
	 * Displays the register page
	 */
	public function actionRegister() {
		$models = array(
					'user' => new User('register'),
					'user_profile' => new UserProfile,
					'avatar' => new Avatar,
					'captcha' => new Captcha,
					'profile_questions' => Yii::app()->surveyor->profile->form,
				);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'register-form') {
			if(isset($_POST['User']))
				$models['user']->attributes = $_POST['User'];
			if(isset($_POST['UserProfile']))
				$models['user_profile']->attributes = $_POST['UserProfile'];
			if(isset($_POST['Avatar']))
				$models['avatar']->attributes = $_POST['Avatar'];
			if(isset($_POST['Survey']['profile']))
				$models['profile_questions']->attributes = $_POST['Survey']['profile'];
			if(isset($_POST['Captcha']))
				$models['captcha']->attributes = $_POST['Captcha'];
			echo CActiveForm::validateTabular($models, null, false);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['User']) && 
				isset($_POST['UserProfile']) && 
				isset($_POST['Avatar']) && 
				isset($_POST['Captcha']) &&
				isset($_POST['Survey']['profile'])) {
			$models['user']->attributes = $_POST['User'];
			$models['user_profile']->attributes = $_POST['UserProfile'];
			$models['avatar']->attributes = $_POST['Avatar'];
			$models['captcha']->attributes = $_POST['Captcha'];
			if($models['captcha']->validate() && $models['user']->validate()) {
				$transaction = Yii::app()->db->beginTransaction();
				try {
					if($models['user']->save(false)) {
						$models['user_profile']->user_id = $models['user']->id;
						$models['avatar']->user_id = $models['user']->id;
						$models['profile_questions']->user_id = $models['user']->id;
						$models['profile_questions']->attributes = $_POST['Survey']['profile'];
						if($models['user_profile']->save() &&
								$models['profile_questions']->save(true, false) &&
								$models['avatar']->validate(array('image')) && 
								($models['avatar']->image === null || $models['avatar']->save())) {
							$transaction->commit();
							$this->sendConfirmationEmail($models['user']);
							$this->render('pages/registerConfSent');
							Yii::app()->end();
						}
					}
				} catch(Exception $e) {
					if(!$models['avatar']->getIsNewRecord())
						$models['avatar']->delete();
					try {
						$transaction->rollback();
					} catch(Exception $e2) { }
					throw $e;
				}
				if(!$models['avatar']->getIsNewRecord())
					$models['avatar']->delete();
				$transaction->rollback();
			}
		}
		// display the register form
		$this->render('pages/register', array('models' => $models));
	}
	
	public function sendConfirmationEmail($userModel) {
		$message = new YiiMailMessage;
		$message->view = 'registrationConfirmation';
		$message->setSubject(t('MatherLifeways Registration Confirmation'));
		$message->setBody(array('user' => $userModel), 'text/html');
		$message->setTo($userModel->email);
		$message->setFrom(Yii::app()->params['noReplyEmail']);
		Yii::app()->mail->send($message);
	}

	public function actionActivate($id, $sessionKey) {
		$user = User::model()->findByPk($id);
		Yii::app()->loadHelper('Utilities');
		$sessionKey = base64_url_decode($sessionKey);
		if($user->session_key === $sessionKey) {
			$user->userActivated = new UserActivated;
			$user->userActivated->user_id = $user->id;
			if($user->userActivated->save() && $user->login(false, false)) {
				$user->regenerateSessionKey();
				Yii::app()->user->setFlash('success', t('Your account has been activated. Welcome {email}!', array('{email}' => Yii::app()->user->name)));
				$this->redirect(Yii::app()->homeUrl);
			}
		}
		$this->render('pages/activationFailure');
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		Yii::app()->user->logout();
		Yii::app()->user->setFlash('success', t('You have been successfully logged out.'));
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionProfile() {
		$models = array(
				'user' => Yii::app()->user->model,
				'user_profile' => Yii::app()->user->model->userProfile === null ? 
										new UserProfile : Yii::app()->user->model->userProfile,
				'avatar' => Yii::app()->user->model->avatar === null ? 
								new Avatar : Yii::app()->user->model->avatar,
				'profile_questions' => Yii::app()->surveyor->profile->form,
			);
		$models['user_profile']->user_id = $models['user']->id;
		$models['avatar']->user_id = $models['user']->id;
		$models['profile_questions']->user_id = $models['user']->id;
		
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'profile-form') {
			if(isset($_POST['User']))
				$models['user']->attributes = $_POST['User'];
			if(isset($_POST['UserProfile']))
				$models['user_profile']->attributes = $_POST['UserProfile'];
			if(isset($_POST['Avatar']))
				$models['avatar']->attributes = $_POST['Avatar'];
			if(isset($_POST['Survey']['profile']))
				$models['profile_questions']->attributes = $_POST['Survey']['profile'];
			echo CActiveForm::validateTabular($models, null, false);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['User']) && 
				isset($_POST['UserProfile']) && 
				isset($_POST['Avatar']) &&
				isset($_POST['Survey']['profile'])) {

			$models['user']->attributes = $_POST['User'];
			$models['user_profile']->attributes = $_POST['UserProfile'];
			$models['avatar']->attributes = $_POST['Avatar'];
			$models['profile_questions']->attributes = $_POST['Survey']['profile'];
			$transaction = Yii::app()->db->beginTransaction();
			try {
				if($models['user']->save() && 
						$models['user_profile']->save() &&
						$models['profile_questions']->save(true, false) &&
						$models['avatar']->validate(array('image')) && 
						($models['avatar']->image === null || $models['avatar']->save())) {
					$transaction->commit();
				}
			} catch(Exception $e) {
				if(!$models['avatar']->getIsNewRecord())
					$models['avatar']->delete();
				$transaction->rollback();
				throw $e;
			}
		}
		$this->render('pages/profile', array('models' => $models));
	}
	
	/****** START API ACTIONS ******/
	
	public function actionCreate() {
		$models = array(
				'User' => new User('pushedRegister'),
				'UserProfile' => new UserProfile,
		);
		$models['User']->attributes = $_POST;
		$models['UserProfile']->attributes = $_POST;
	
		if($models['User']->validate()) {
			$transaction = Yii::app()->db->beginTransaction();
			try {
				if($models['User']->save(false)) {
					$models['UserProfile']->user_id = $models['User']->id;
					if($models['UserProfile']->save()) {
						$transaction->commit();
						$this->sendConfirmationEmail($models['User']);
					} else {
						$transaction->rollback();
					}
				}
			} catch(Exception $e) {
				$transaction->rollback();
				throw $e;
			}
		}
	
		$errors = array();
		foreach($models as $name => $model) {
			if($model->hasErrors())
				$errors[$name] = $model->getErrors();
		}
	
		if(empty($errors))
			$this->renderApiResponse(200, array('confirmationUrl' => $models['User']->getActivationUrl()));
		else
			$this->renderApiResponse(400, $errors);
	}
	
	public function actionRead() {
		$models = array(
				'User' => new User('search'),
				'UserProfile' => new UserProfile('search'),
		);

		$criteria = new CDbCriteria();
		foreach($models as $model) {
			foreach($model->getSafeAttributeNames() as $attr) {
				if(isset($_GET[$attr]))
					$criteria->compare($attr, $_GET[$attr], true);
			}
		}
		
		$criteria->with = array('userProfile');
		$users = $models['User']->findAll($criteria);
		$data = array();
		foreach($users as $user) {
			$data[] = array_merge(
							$user->getAttributes(array('email', 'created')), 
							$user->userProfile->getAttributes(), 
							array('group_name' => $user->group->name)
						); 
		}
	
		if(empty($data))
			$this->renderApiResponse(404, $data);
		else
			$this->renderApiResponse(200, $data);
	}
	
	public function actionUpdate() {
		$requestVars = Yii::app()->getRequest()->getRestParams();
		if(!isset($requestVars['id'])) {
			$this->renderApiResponse(400, array(array('User' => array('id' => 'The id of the user to be updated must be specified.'))));
			return;
		}

		$models = array(
			'User' => User::model()->findByPk($requestVars['id']),
			'UserProfile' => UserProfile::model()->findByPk($requestVars['id']),
		);
		
		$models['User']->attributes = $requestVars;
		$models['UserProfile']->attributes = $requestVars;
	
		if($models['User']->validate()) {
			$transaction = Yii::app()->db->beginTransaction();
			try {
				if($models['User']->save(false)) {
					if($models['UserProfile']->save())
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
		foreach($models as $name => $model) {
			if($model->hasErrors())
				$errors[$name] = $model->getErrors();
		}
	
		if(empty($errors))
			$this->renderApiResponse(200);
		else
			$this->renderApiResponse(400, $errors);
	}
	
	public function actionDelete() {
		$requestVars = Yii::app()->getRequest()->getRestParams();
		if(!isset($requestVars['id'])) {
			$this->renderApiResponse(400, array(array('User' => array('id' => 'The id of the user to be deleted must be specified.'))));
			return;
		}

		$result = array(
			'User' => array('rows_deleted' => User::model()->deleteByPk($requestVars['id'])),
			'UserProfile' => array('rows_deleted' => UserProfile::model()->deleteByPk($requestVars['id'])),
		);
		if($result['User']['rows_deleted'] === 0 && $result['UserProfile']['rows_deleted'] === 0)
			$this->renderApiResponse(404, $result);
		else
			$this->renderApiResponse(200, $result);
	}
	
	public function actionAddCourse() {
		$errors = array();
		if(!isset($_POST['email']) && !isset($_POST['id'])) {
			$errors['User']['id'] = 'An email or an id must be specified. Who are you adding this course to?';
			$errors['User']['email'] = 'An email or an id must be specified. Who are you adding this course to?';
		}
		if(!isset($_POST['course_id']))
			$errors['UserCourse']['course_id'] = 'A course_id must be specified. What course are you adding?';
	
		if(empty($errors)) {
			$user = new User('search');
			$user->attributes = $_POST;
			if(($user = User::model()->find($user->getSearchCriteria())) !== null) {
				$userCourse = new UserCourse;
				$userCourse->user_id = $user->id;
				$userCourse->course_id = $_POST['course_id'];
				if(!$userCourse->save())
					$errors['UserCourse'] = $userCourse->getErrors();
			} else {
				$this->renderApiResponse(404, array('User' => array('The user requested to add a course to could not be found.')));
				Yii::app()->end();
			}
		}
	
		if(empty($errors))
			$this->renderApiResponse();
		else
			$this->renderApiResponse(400, $errors);
	}
	
}