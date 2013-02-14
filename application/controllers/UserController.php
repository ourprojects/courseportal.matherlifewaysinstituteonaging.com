<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UserController extends ApiController {

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array_merge(parent::filters(), array('accessControl + profile, profileSurvey'));
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
				Yii::app()->getUser()->setFlash('success', t('Welcome {email}!', array('{email}' => Yii::app()->getUser()->name)));
				$this->redirect(Yii::app()->getUser()->returnUrl);
			}
		}
		// display the login form
		$this->render('pages/login', array('model' => $user));
	}

	public function actionForgotPassword() {
		$models = array(
				'UserMaintenance' => new UserMaintenance,
				'Captcha' => new Captcha
		);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'user-maintenance-form') {
			$models['UserMaintenance']->setScenario('ajax');
			if(isset($_POST['UserMaintenance']))
				$models['UserMaintenance']->setAttributes($_POST['UserMaintenance']);
			if(isset($_POST['Captcha']))
				$models['Captcha']->setAttributes($_POST['Captcha']);
			echo CActiveForm::validate($models);
			Yii::app()->end();
		}
		
		if(isset($_POST['Captcha']) && isset($_POST['UserMaintenance'])) {
			$models['UserMaintenance']->setAttributes($_POST['UserMaintenance']);
			$models['Captcha']->setAttributes($_POST['Captcha']);
			if($models['Captcha']->validate() && $models['UserMaintenance']->validate()) {
				$user = $models['UserMaintenance']->getUser();
				if(!$user->isActivated()) {
					Yii::app()->getUser()->setFlash('error', t('We could not reset your password because your account has not yet been activated. To have an activation email sent to you again please click ').
																CHtml::link(t('here'), $this->createUrl('resendActivation')));
				} else {
					$this->sendPasswordResetEmail($user);
					Yii::app()->getUser()->setFlash('success', t('Instructions for resetting your password have been sent to your email.'));
				}
				$this->refresh();
			}
		}
		$this->render('pages/forgotPassword', array('models' => $models));
	}
	
	public function sendPasswordResetEmail($user) {
		$this->loadExtension('yii-mail');
		$message = new YiiMailMessage;
		$message->view = 'passwordReset';
		$message->setSubject(t('MatherLifeways Password Reset Request'));
		$message->setBody(array('url' => $this->getPasswordResetUrl($user)), 'text/html');
		$message->setTo($user->email);
		$message->setFrom(Yii::app()->params['noReplyEmail']);
		Yii::app()->mail->send($message);
	}

	/**
	 * Displays the register page
	 */
	public function actionRegister() {
		$models = array(
					'user' => new User('register'),
					'user_profile' => new UserProfile,
					'captcha' => new Captcha,
				);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'register-form') {
			if(isset($_POST['User']))
				$models['user']->setAttributes($_POST['User']);
			if(isset($_POST['UserProfile']))
				$models['user_profile']->setAttributes($_POST['UserProfile']);
			if(isset($_POST['Captcha']))
				$models['captcha']->setAttributes($_POST['Captcha']);
			echo CActiveForm::validateTabular($models, null, false);
			Yii::app()->end();
		}
		
		// collect user input data
		if(isset($_POST['User']) && 
				isset($_POST['UserProfile']) && 
				isset($_POST['Captcha'])) {
			$models['user']->setAttributes($_POST['User']);
			$models['user_profile']->setAttributes($_POST['UserProfile']);
			$models['captcha']->setAttributes($_POST['Captcha']);
			if($models['captcha']->validate() && $models['user']->validate()) {
				$transaction = Yii::app()->db->beginTransaction();
				try {
					if($models['user']->save(false)) {
						$models['user_profile']->user_id = $models['user']->id;
						if($models['user_profile']->save()) {
							$transaction->commit();
							$this->sendConfirmationEmail($models['user']);
							$this->render('pages/registerConfSent');
							return;
						}
					}
				} catch(Exception $e) {
					$transaction->rollback();
					throw $e;
				}
				$transaction->rollback();
			}
		}
		// display the register form
		$this->render('pages/register', array('models' => $models));
	}
	
	public function getActivationUrl($user) {
		Yii::app()->loadHelper('Utilities');
		return Yii::app()->createAbsoluteUrl('user/activate/' . urlencode($user->id) . '/' . base64_url_encode($user->session_key));
	}
	
	public function getPasswordResetUrl($user) {
		Yii::app()->loadHelper('Utilities');
		return Yii::app()->createAbsoluteUrl('user/passwordReset/' . urlencode($user->id) . '/' . base64_url_encode($user->session_key));
	}
	
	public function sendConfirmationEmail($userModel) {
		$this->loadExtension('yii-mail');
		$message = new YiiMailMessage;
		$message->view = 'registrationConfirmation';
		$message->setSubject(t('MatherLifeways Registration Confirmation'));
		$message->setBody(array('url' => $this->getActivationUrl($userModel)), 'text/html');
		$message->setTo($userModel->email);
		$message->setFrom(Yii::app()->params['noReplyEmail']);
		Yii::app()->mail->send($message);
	}

	public function actionActivate($id, $sessionKey) {
		$user = User::model()->findByPk($id);
		if($user !== null) {
			Yii::app()->loadHelper('Utilities');
			$sessionKey = base64_url_decode($sessionKey);
			if($user->session_key === $sessionKey) {
				$user->userActivated = new UserActivated;
				$user->userActivated->user_id = $user->id;
				if($user->userActivated->save() && $user->login(false, false)) {
					$user->regenerateSessionKey();
					Yii::app()->getUser()->setFlash('success', t('Your account has been activated. Welcome {email}!', array('{email}' => Yii::app()->getUser()->name)));
					$this->redirect(Yii::app()->homeUrl);
				}
			}
		}
		$this->render('pages/activationFailure');
	}
	
	public function actionPasswordReset($id, $sessionKey) {
		$user = User::model()->findByPk($id);
		if($user !== null) {
			Yii::app()->loadHelper('Utilities');
			$sessionKey = base64_url_decode($sessionKey);
			if($user->session_key === $sessionKey) {
				$user->setScenario('passwordReset');
				
				// if it is ajax validation request
				if(isset($_POST['ajax']) && $_POST['ajax'] === 'password-reset-form') {
					if(isset($_POST['User']))
						$user->setAttributes($_POST['User']);
					echo CActiveForm::validate($user);
					Yii::app()->end();
				}
				
				// collect user input data
				if(isset($_POST['User'])) {
					$user->setAttributes($_POST['User']);
					if($user->save() && $user->login(false, false)) {
						$user->regenerateSessionKey();
						Yii::app()->getUser()->setFlash('success', t('Your account password has been reset. Welcome {email}!', array('{email}' => Yii::app()->getUser()->name)));
						$this->redirect(Yii::app()->homeUrl);
					}
				}
				return $this->render('pages/passwordReset', array('user' => $user));
			}
		}
		throw new CHttpException(401, t('We were not able to authenticate you to perform a password reset.'));
	}
	
	public function actionResendActivation() {
		$models = array(
				'UserMaintenance' => new UserMaintenance,
				'Captcha' => new Captcha
		);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'user-maintenance-form') {
			$models['UserMaintenance']->setScenario('ajax');
			if(isset($_POST['UserMaintenance']))
				$models['UserMaintenance']->setAttributes($_POST['UserMaintenance']);
			if(isset($_POST['Captcha']))
				$models['Captcha']->setAttributes($_POST['Captcha']);
			echo CActiveForm::validate($models);
			Yii::app()->end();
		}
	
		if(isset($_POST['Captcha']) && isset($_POST['UserMaintenance'])) {
			$models['UserMaintenance']->setAttributes($_POST['UserMaintenance']);
			$models['Captcha']->setAttributes($_POST['Captcha']);
			if($models['Captcha']->validate() && $models['UserMaintenance']->validate()) {
				$user = $models['UserMaintenance']->getUser();
				if($user->isActivated()) {
					Yii::app()->getUser()->setFlash('error', t('Your account has already been activated. If you need have forgotten your password you can reset it by clicking ') . 
																CHtml::link(t('here'), $this->createUrl('forgotPassword')));
				} else {
					$this->sendConfirmationEmail($user);
					Yii::app()->getUser()->setFlash('success', t('We have sent you an activation email. Please check your email for ') . $user->email);
				}
				$this->refresh();
			}
		}
		$this->render('pages/resendActivation', array('models' => $models));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		Yii::app()->getUser()->logout();
		Yii::app()->getUser()->setFlash('success', t('You have been successfully logged out.'));
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionProfile() {
		$models = array(
				'user' => Yii::app()->getUser()->getModel(),
				'user_profile' => Yii::app()->getUser()->getModel()->userProfile === null ? 
										new UserProfile : Yii::app()->getUser()->getModel()->userProfile,
				'avatar' => Yii::app()->getUser()->getModel()->avatar === null ? 
								new Avatar : Yii::app()->getUser()->getModel()->avatar,
			);
		$models['user_profile']->user_id = $models['user']->id;
		$models['avatar']->user_id = $models['user']->id;

		$surveys = array();
		foreach(array(
				'profile', 
				'precourse', 
				'postcourse', 
				'spencerpowell') as $surveyName) {
			$surveys[] = $this->createWidget(
					'modules.surveyor.widgets.Survey',
					array(
							'id' => $surveyName, 
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
			);
			end($surveys)->model->user_id = $models['user']->id;
		}

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'profile-form') {
			if(isset($_POST['User']))
				$models['user']->setAttributes($_POST['User']);
			if(isset($_POST['UserProfile']))
				$models['user_profile']->setAttributes($_POST['UserProfile']);
			if(isset($_POST['Avatar']))
				$models['avatar']->setAttributes($_POST['Avatar']);
			echo CActiveForm::validateTabular($models, null, false);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['User']) && 
				isset($_POST['UserProfile']) && 
				isset($_POST['Avatar'])) {

			$models['user']->setAttributes($_POST['User']);
			$models['user_profile']->setAttributes($_POST['UserProfile']);
			$models['avatar']->setAttributes($_POST['Avatar']);
			
			$transaction = Yii::app()->db->beginTransaction();
			try {
				if($models['user']->save() && 
						$models['user_profile']->save() &&
						$models['avatar']->validate(array('image')) && 
						($models['avatar']->image === null || $models['avatar']->save())) {
					
					$transaction->commit();
					
				}
			} catch(Exception $e) {
				// Potential problem here.
				if(!$models['avatar']->getIsNewRecord())
					$models['avatar']->delete();
				$transaction->rollback();
				throw $e;
			}
		}
		$this->render('pages/profile', array('models' => $models, 'surveys' => $surveys));
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
	
		if(empty($errors)) {
			$this->renderApiResponse(200, $models['User']->toArray(array('id', 'email')));
		} else {
			$this->renderApiResponse(400, $errors);
		}
	}
	
	public function actionRead() {
		$models = array(
				'User' => new User('search'),
				'UserProfile' => new UserProfile('search'),
		);
		foreach($models as $name => $model) {
			if(isset($_GET[$name]))
				$model->attributes = $_GET[$name];
		}
		$criteria = $models['User']->getSearchCriteria();
		$criteria->mergeWith($models['UserProfile']->getSearchCriteria());
		$users = $models['User']->with(array('group', 'userProfile'))->findAll($criteria);
		$data = array();
		foreach($users as $user) {
			$data[] = $user->toArray($user->getSafeAttributeNames(), array('group' => 'name', 'userProfile' => $models['UserProfile']->getSafeAttributeNames())); 
		}
	
		if(empty($data))
			$this->renderApiResponse(404, $data);
		else
			$this->renderApiResponse(200, $data);
	}
	
	public function actionUpdate() {
		$requestVars = Yii::app()->getRequest()->getRestParams();
		if(!isset($requestVars['id'])) {
			$this->renderApiResponse(400, array('id' => t('The id of the user to be updated must be specified.')));
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
			$this->renderApiResponse();
		else
			$this->renderApiResponse(400, $errors);
	}
	
	public function actionDelete() {
		$requestVars = Yii::app()->getRequest()->getRestParams();
		if(!isset($requestVars['id'])) {
			$this->renderApiResponse(400, array('id' => t('The id of the user to be deleted must be specified.')));
			return;
		}

		$result = array(
			'User' => array('rows_deleted' => User::model()->deleteByPk($requestVars['id'])),
			'UserProfile' => array('rows_deleted' => UserProfile::model()->deleteByPk($requestVars['id'])),
		);

		$this->renderApiResponse(200, $result);
	}
	
	public function actionOptions() {
		$models['User'] = new User('search');
		$models['UserProfile'] = new UserProfile('search');
		foreach($models as $name => $model) {
			$attributes[$name] = $model->getOptionalAttributes();
			$attributesRequired[$name] = $model->getRequiredAttributes();
		}
		$response['GET'] =
						array(
							'returns' => t('List of users.'),
							'optional' => $attributes,
							'required' => $attributesRequired
						);
		foreach($models as $name => $model) {
			$model->setScenario('pushedRegister');
			$attributes[$name] = $model->getOptionalAttributes();
			$attributesRequired[$name] = $model->getRequiredAttributes();
		}
		$response['POST'] =
						array(
							'returns' => array('User' => array('id', 'email')),
							'optional' => $attributes,
							'required' => $attributesRequired,
						);
		foreach($models as $name => $model) {
			$model->setScenario('update');
			$attributes[$name] = $model->getOptionalAttributes();
			$attributesRequired[$name] = $model->getRequiredAttributes();
		}
		$response['PUT'] = array(
							'returns' => t('Number of rows effected'),
							'optional' => $attributes,
							'required' => $attributesRequired,
						);
		$response['DELETE'] = array(
							'returns' => t('Number of rows effected'),
							'optional' => array(),
							'required' => array('User' => array('id'), 'UserProfile' => array('id')),
						);
		$this->renderApiResponse(200, $response);
	}
	
}