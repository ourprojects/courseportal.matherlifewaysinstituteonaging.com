<?php defined('BASEPATH') or exit('No direct script access allowed');  

class UserController extends ApiController {
	
	const REMEMBER_ME_DURATION = 2592000; // 30 days in seconds

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
	public function actionLogin() 
	{	
		$loginModel = new Login;

		if(isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') 
		{	
			echo CActiveForm::validate($loginModel);
			Yii::app()->end();	
		}

		if($loginModel->loadAttributes() && $loginModel->validate()) 
		{
			$webUser = Yii::app()->getUser();
			if($webUser->login(
					new BasicIdentity($loginModel->username_email, $loginModel->password), 
					$loginModel->remember_me ? self::REMEMBER_ME_DURATION : 0)) 
			{		
				$webUser->setFlash('success', t('Welcome {name}!', array('{name}' => $webUser->getModel()->name)));
				$this->redirect($webUser->returnUrl);
			}
			else
			{
				$loginModel->addError('username_email_password', t('Incorrect username or password.'));
			}
		}
		$this->render('pages/login', array('model' => $loginModel));
	}

	public function actionForgotPassword() 
	{	
		$models = array(
				'UserNameEmail' => new UserNameEmail,
				'Captcha' => new Captcha
		);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'user-maintenance-form') 
		{	
			echo CActiveForm::validate($models);
			Yii::app()->end();	
		}
		
		if($models['Captcha']->loadAttributes() && 
				$models['UserNameEmail']->loadAttributes() && 
				$models['Captcha']->validate() && 
				$models['UserNameEmail']->validate()) 
		{
			$user = $models['UserNameEmail']->getUser();
			if($user === null) 
			{
				$models['UserNameEmail']->addError('name_email', t('The username or email address you have entered could not be found.'));
			} 
			else 
			{
				if(!$user->getIsActivated()) 
				{	
					Yii::app()->getUser()->setFlash('error', 
						t('We could not reset your password because your account has not yet been activated. To have an activation email sent to you again please click ').
							CHtml::link(t('here'), $this->createUrl('resendActivation')));
				} 
				else 
				{	
					$this->loadExtension('yii-mail');
					$message = Yii::app()->mail->getNewMessageInstance();
					$message->view = 'passwordReset';
					$message->setSubject(t('MatherLifeways Password Reset Request'));
					$message->setBody(array('url' => $user->encodeUrl('user/changePassword')), 'text/html');
					$message->setTo($user->email);
					$message->setFrom(Yii::app()->params['noReplyEmail']);
					Yii::app()->mail->send($message);
					
					Yii::app()->getUser()->setFlash('success', t('Instructions for resetting your password have been sent to your email.'));
				}
				$this->refresh();
			}
		}
		$this->render('pages/forgotPassword', array('models' => $models));
	}
	
	public function actionChangePassword($id = null, $session_key = null)
	{
		$ChangePassword = new ChangePassword('change');
		$UserIdentity = new SessionIdentity($id, @CBase64::urlDecode($session_key));

		if($UserIdentity->authenticate())
		{
			$ChangePassword->setScenario('reset');
			$ChangePassword->username_email = $UserIdentity->getModel()->name;
		}
		
		if($ChangePassword->loadAttributes()) {
			$ChangePassword->validate();
			// if this is an ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax'] === 'change-password-form')
			{
				echo $ChangePassword->getErrorsAsJSON();
				Yii::app()->end();
			}
			
			if(!$ChangePassword->hasErrors() && $ChangePassword->getScenario() === 'change')
			{
				$UserIdentity = new BasicIdentity($ChangePassword->username_email, $ChangePassword->current_password);
				if(!$UserIdentity->authenticate())
				{
					$ChangePassword->addError('username_email_current_password', t('Incorrect username or password.'));
				}
			}
			
			if(!$ChangePassword->hasErrors())
			{
				$user = $UserIdentity->getModel();
				$user->new_password = $ChangePassword->new_password;
				$user->regenerateSessionKey(false);
				if($user->save(true, array('session_key', 'password')))
				{
					$webUser = Yii::app()->getUser();
					if($webUser->login(new BasicIdentity($user->email, $ChangePassword->new_password)))
					{
						$webUser->setFlash('success', 
								t('Your account password has been reset. Welcome {email}!', array('{email}' => $webUser->name)));
						$this->redirect(Yii::app()->homeUrl);
					}
				}
			}
		}
		return $this->render('pages/changePassword', array('ChangePassword' => $ChangePassword));
	}

	/**
	 * Displays the register page
	 */
	public function actionRegister() 
	{	
		$models = array(
					'Register' => new Register,
					'Captcha' => new Captcha,
				);
		$models['Register']->agreement_id = 1;
		
		// collect user input data
		if($models['Captcha']->loadAttributes() && $models['Register']->loadAttributes()) 
		{
			if(isset($_POST['ajax']) && $_POST['ajax'] === 'register-form')
			{
				echo CActiveForm::validateTabular($models);
				Yii::app()->end();
			}
			
			if($models['Captcha']->validate() && $models['Register']->validate())
			{
				$userAgreement = new UserAgreement();
				$userAgreement->agreement_id = $models['Register']->agreement_id;
				$user = new CPUser();
				$user->setAttributes($models['Register']->getAttributes());
				
				$transaction = Yii::app()->db->beginTransaction();
				try 
				{
					if($user->save()) 
					{	
						$userAgreement->user_id = $user->id;
						$userAgreement->save();
					}
				} 
				catch(Exception $e) 
				{
					$transaction->rollback();
					throw $e;
				}
				if(!($user->hasErrors() || $userAgreement->hasErrors()))
				{
					$transaction->commit();
					$this->sendAccountActivationEmail($user);
					return $this->render('pages/registerConfSent');
				}
				$transaction->rollback();
				$models['Register']->addErrors($user->getErrors());
			}
		}
		// display the register form
		$this->render('pages/register', array('models' => $models));
	}

	public function actionActivate($id, $session_key) 
	{
		$userIdentity = new SessionIdentity($id, CBase64::urlDecode($session_key), false);

		if($userIdentity->authenticate()) 
		{
			$user = $userIdentity->getModel();
			$user->userActivated = new UserActivated;
			$user->userActivated->user_id = $id;
		
			if($user->userActivated->save()) 
			{
				Yii::app()->getUser()->login($userIdentity, 0);
				$user->regenerateSessionKey();
				Yii::app()->getUser()->setFlash('success', 
					t('Your account has been activated. Welcome {email}!', 
						array('{email}' => Yii::app()->getUser()->name)));
				$this->redirect(Yii::app()->homeUrl);
			}
		}
		$this->render('pages/activationFailure');
	}
	
	public function actionResendActivation() {
		$models = array(
				'UserNameEmail' => new UserNameEmail,
				'Captcha' => new Captcha
		);
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'user-maintenance-form') {
			$models['UserNameEmail']->setScenario('ajax');
			echo CActiveForm::validate($models);
			Yii::app()->end();
		}
	
		if($models['Captcha']->loadAttributes() && 
				$models['UserNameEmail']->loadAttributes() && 
				$models['Captcha']->validate() && 
				$models['UserNameEmail']->validate()) 
		{
			$user = $models['UserNameEmail']->getUser();
			if($user->getIsActivated()) 
			{
				Yii::app()->getUser()->setFlash('error', t('Your account has already been activated. If you have forgotten your password you can recover it by clicking ') . 
															CHtml::link(t('here'), $this->createUrl('forgotPassword')));
			} 
			else 
			{
				$this->sendAccountActivationEmail($user);
				Yii::app()->getUser()->setFlash('success', t('We have resent an activation email to ') . $user->email);
			}
			$this->refresh();
		}
		$this->render('pages/resendActivation', array('models' => $models));
	}
	
	public function sendAccountActivationEmail($userModel) {
		$message = Yii::app()->mail->getNewMessageInstance();
		$message->layout = 'mail';
		$message->view = 'registrationConfirmation';
		$message->setSubject(t('MatherLifeways Registration Confirmation'));
		$message->setBody(array('user' => $userModel), 'text/html');
		$message->setTo($userModel->email);
		$message->setBcc('amcivor@MatherLifeways.com');
		$message->setFrom(Yii::app()->params['noReplyEmail']);
		Yii::app()->mail->send($message);
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
		$user = Yii::app()->getUser()->getModel();
		$models = array(
				'Profile' => new UserProfile,
				'avatar' => new Avatar);
		
		$models['Profile']->setAttributes($user->getAttributes());
		$models['avatar']->user_id = $user->id;
		
		$surveys = array();
		foreach(array(
				'profile', 
				'precourse', 
				'postcourse', 
				'spencerpowell') as $surveyName) {
			$survey = $this->createWidget(
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
			$survey->model->user_id = $user->id;
			$surveys[] = $survey;
		}

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'profile-form') {
			echo CActiveForm::validateTabular($models);
			Yii::app()->end();
		}

		// collect user input data
		if($models['Profile']->loadAttributes() && $models['Profile']->validate()) 
		{
			$user->setAttributes($models['Profile']->getAttributes());
			
			if($user->validate() && (!$models['avatar']->loadUploadedImage() || $models['avatar']->validate(null, false)))
			{
				$transaction = Yii::app()->db->beginTransaction();
				$exception = null;
				try {
					if((!isset($models['avatar']->image) || (($user->avatar === null || $user->avatar->delete()) && $models['avatar']->save())) && $user->save())
					{
						$transaction->commit();
					}
					$models['Profile']->addErrors($user->getErrors());
				} catch(Exception $e) {
					$exception = $e;
				}
				if($models['Profile']->hasErrors() || $models['avatar']->hasErrors() || isset($exception))
				{
					if(!$models['avatar']->getIsNewRecord())
						$models['avatar']->delete();
					$transaction->rollback();
					if(isset($exception))
						throw $exception;
				}
			}
		}
		$this->render('pages/profile', array('models' => $models, 'surveys' => $surveys));
	}
	
	/****** START API ACTIONS ******/
	
	public function actionCreate() 
	{
		$model = new Register('pushed');
	
		if($model->loadAttributes() && $model->validate()) 
		{
			$user = new CPUser();
			$user->setAttributes($model->getAttributes());
			
			if($user->save()) 
			{	
				$this->sendAccountActivationEmail($user);
				return $this->renderApiResponse(200, $user->toArray(array('id', 'email')));
			}
			$model->addErrors($user->getErrors());
		}
		
		$this->renderApiResponse(400, $model->getErrorsAsJSON());
	}
	
	public function actionRead() {
		$model = new CPUser('search');
		
		if(isset($_GET['CPUser']))
			$model->setAttributes($_GET['CPUser']);
		
		$criteria = $model->getSearchCriteria();
		$criteria->mergeWith($model->getSearchCriteria());
		$users = $model->with('group')->findAll($criteria);
		$data = array();
		foreach($users as $user) {
			$data[] = $user->toArray($user->getSafeAttributeNames(), array('group' => 'name')); 
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

		$model = CPUser::model()->findByPk($requestVars['id']);
		
		$model->setAttributes($requestVars);
		
		if($model->save()) {
			$this->renderApiResponse();
		}

		$this->renderApiResponse(400, $model->getErrorsAsJSON());
	}
	
	public function actionDelete() {
		$requestVars = Yii::app()->getRequest()->getRestParams();
		if(!isset($requestVars['id'])) 
		{
			return $this->renderApiResponse(400, array('id' => t('The id of the user to be deleted must be specified.')));
		}

		$this->renderApiResponse(200, array('rows_deleted' => CPUser::model()->deleteByPk($requestVars['id'])));
	}
	
	public function actionOptions() {
		$model = new CPUser('search');
		$response['GET'] =
						array(
							'returns' => t('List of users.'),
							'optional' => $model->getOptionalAttributes(),
							'required' => $model->getRequiredAttributes()
						);
		$model->setScenario('update');
		$response['PUT'] = array(
							'returns' => t('Number of rows effected'),
							'optional' => $model->getOptionalAttributes(),
							'required' => $model->getRequiredAttributes(),
						);
		$response['DELETE'] = array(
							'returns' => t('Number of rows effected'),
							'optional' => array(),
							'required' => array('CPUser' => array('id')),
						);
		$model = new Register('pushed');
		$response['POST'] = array(
							'returns' => array('CPUser' => array('id', 'email')),
							'optional' => $model->getOptionalAttributes(),
							'required' => $model->getRequiredAttributes(),
					);
		$this->renderApiResponse(200, $response);
	}
	
}