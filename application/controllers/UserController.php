<?php

class UserController extends ApiController 
{

	const REMEMBER_ME_DURATION = 2592000; // 30 days in seconds

	public function accessRules() {
		return array_merge(
				parent::accessRules(),
				array(
					array('allow',
							'actions' => array('profile', 'profileSurvey'),
							'users' => array('@'),
					),
					array('deny',
							'actions' => array('profile', 'profileSurvey'),
							'users' => array('*'),
					),
				)
		);
	}
	
	public function actions()
	{
		return array_merge(parent::actions(), array('survey.' => 'surveyor.widgets.Survey'));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin(array $Login = array(), $ajax = null)
	{
		$loginModel = new Login;
		$loginModel->setAttributes($Login);
		
		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			if(isset($ajax) && $ajax === 'login-form')
			{
				echo CActiveForm::validate($loginModel, null, false);
				return;
			}
			elseif($loginModel->validate())
			{
				$webUser = Yii::app()->getUser();
				$identity = new BasicIdentity($loginModel->username_email, $loginModel->password);
				if($webUser->login($identity, $loginModel->remember_me ? self::REMEMBER_ME_DURATION : 0))
				{
					$webUser->setFlash('success', t('Welcome {name}!', array('{name}' => $webUser->getName())));
					$this->redirect($webUser->getReturnUrl());
				}
				else
				{
					$loginModel->addError(
							'username_email_password', 
							$identity->errorCode === CoursePortalUserIdentity::ERROR_NOT_ACTIVATED ? 
							t('Your account has not yet been activated. To have an activation email sent to you again please click {here}.', array('{here}' => CHtml::link(t('here'), $this->createUrl('resendActivation')))) : 
							t('Incorrect username or password.'));
				}
			}
		}
		$this->render('pages/login', array('model' => $loginModel));
	}

	public function actionForgotPassword(array $UserNameEmail = array(), $ajax = null)
	{
		$models = array(
			'UserNameEmail' => new UserNameEmail,
			'reCaptchaWidget' => Yii::app()->getComponent('reCaptcha')->createWidget($this)
		);
		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$models['reCaptchaWidget']->model->loadAttributes($this->getActionParams());
			$models['UserNameEmail']->setAttributes($UserNameEmail);
			// if it is ajax validation request
			if(isset($ajax) && $ajax === 'user-maintenance-form')
			{
				echo CActiveForm::validate($models, null, false);
				return;
			}
			elseif($models['reCaptchaWidget']->model->validate() && $models['UserNameEmail']->validate())
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
						$this->sendPasswordResetEmail($user);
						Yii::app()->getUser()->setFlash('success', t('Instructions for resetting your password have been sent to your email.'));
					}
					$this->refresh();
				}
			}
		}
		$this->render('pages/forgotPassword', array('models' => $models));
	}

	public function actionChangePassword($id = null, $session_key = null, array $ChangePassword = array(), $ajax = null)
	{
		$ChangePasswordModel = new ChangePassword('change');
		$UserIdentity = new SessionIdentity($id, @CBase64::urlDecode($session_key));

		if($UserIdentity->authenticate())
		{
			$ChangePasswordModel->setScenario('reset');
			$ChangePasswordModel->username_email = $UserIdentity->getModel()->name;
		}
		
		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$ChangePasswordModel->setAttributes($ChangePassword);
			// if this is an ajax validation request
			if(isset($ajax) && $ajax === 'change-password-form')
			{
				echo CActiveForm::validate($ChangePasswordModel, null, false);
				return;
			}
			else
			{
				if($ChangePasswordModel->validate() && $ChangePasswordModel->getScenario() === 'change')
				{
					$UserIdentity = new BasicIdentity($ChangePasswordModel->username_email, $ChangePasswordModel->current_password);
					if(!$UserIdentity->authenticate())
					{
						$ChangePasswordModel->addError('username_email_current_password', t('Incorrect username or password.'));
					}
				}
		
				if(!$ChangePasswordModel->hasErrors())
				{
					$user = $UserIdentity->getModel();
					$user->new_password = $ChangePasswordModel->new_password;
					$user->regenerateSessionKey(false);
					if($user->save(true, array('session_key', 'password')))
					{
						$webUser = Yii::app()->getUser();
						if($webUser->login(new BasicIdentity($user->email, $ChangePasswordModel->new_password)))
						{
							$webUser->setFlash('success',
									t('Your account password has been reset. Welcome {email}!', array('{email}' => $webUser->name)));
							$this->redirect(Yii::app()->homeUrl);
						}
					}
				}
			}
		}
		return $this->render('pages/changePassword', array('ChangePassword' => $ChangePasswordModel));
	}

	/**
	 * Displays the register page
	 */
	public function actionRegister(array $CPUser = array(), array $UserAgreement = array(), $ajax = null)
	{
		$models = array(
					'CPUser' => new CPUser(),
					'UserAgreement' => new UserAgreement(),
					'reCaptchaWidget' => Yii::app()->getComponent('reCaptcha')->createWidget($this)
				);
		
		$models['UserAgreement']->agreement_id = 1;

		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$models['reCaptchaWidget']->model->loadAttributes($this->getActionParams());
			$models['CPUser']->setAttributes($CPUser);
			$models['UserAgreement']->setAttributes($UserAgreement);
			
			if(isset($ajax) && $ajax === 'register-form')
			{
				echo CActiveForm::validateTabular($models, null, false);
				return;
			}
			elseif($models['reCaptchaWidget']->model->validate() && $models['CPUser']->validate())
			{
				$transaction = Yii::app()->db->beginTransaction();
				try
				{
					if($models['CPUser']->save(false))
					{
						$models['UserAgreement']->user_id = $models['CPUser']->id;
					}
					if($models['UserAgreement']->save())
					{
						$transaction->commit();
						$this->sendAccountActivationEmail($models['CPUser']);
						return $this->render('pages/registerConfSent');
					}
					else
					{
						$models['CPUser']->delete(); // needed for phpBB
						$transaction->rollback();
					}
				}
				catch(Exception $e)
				{
					$models['CPUser']->delete(); // needed for phpBB
					$transaction->rollback();
					throw $e;
				}
			}
		}
		$this->render('pages/register', array('models' => $models));
	}

	public function actionActivate($id, $session_key)
	{
		$userIdentity = new SessionIdentity($id, CBase64::urlDecode($session_key), false);

		if($userIdentity->authenticate())
		{
			$user = $userIdentity->getModel();
			if($user->setIsActivated(true) && Yii::app()->getUser()->login($userIdentity, 0))
			{
				$user->regenerateSessionKey();
				Yii::app()->getUser()->setFlash('success', t('Your account has been activated. Welcome {email}!', array('{email}' => Yii::app()->getUser()->getName())));
				$this->redirect(Yii::app()->homeUrl);
			}
		}
		$this->render('pages/activationFailure');
	}

	public function actionResendActivation(array $UserNameEmail = array(), $ajax = null) {
		$models = array(
			'UserNameEmail' => new UserNameEmail,
			'reCaptchaWidget' => Yii::app()->getComponent('reCaptcha')->createWidget($this)
		);
		
		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$models['reCaptchaWidget']->model->loadAttributes($this->getActionParams());
			$models['UserNameEmail']->setAttributes($UserNameEmail);
			// if it is ajax validation request
			if(isset($ajax) && $ajax === 'user-maintenance-form') 
			{
				$models['UserNameEmail']->setScenario('ajax');
				echo CActiveForm::validate($models, null, false);
				Yii::app()->end();
			}
			elseif($models['reCaptchaWidget']->model->validate() && $models['UserNameEmail']->validate())
			{
				$user = $models['UserNameEmail']->getUser();
				if($user->getIsActivated())
				{
					Yii::app()->getUser()->setFlash('error', t('Your account has already been activated. If you have forgotten your password you can recover it by clicking') .
																'&nbsp;' . CHtml::link(t('here'), $this->createUrl('forgotPassword')));
				}
				else
				{
					$this->sendAccountActivationEmail($user);
					Yii::app()->getUser()->setFlash('success', t('We have resent an activation email to') . '&nbsp;' . $user->email);
				}
				$this->refresh();
			}
		}
		$this->render('pages/resendActivation', array('models' => $models));
	}

	public function sendPasswordResetEmail($userModel)
	{
		$message = Yii::app()->mail->getNewMessageInstance();
		$message->layout = 'mail';
		$message->view = 'passwordReset';
		$message->setSubject(t('MatherLifeways Password Reset Request'));
		$message->setBody(array('url' => $userModel->encodeUrl('user/changePassword')), 'text/html');
		$message->setTo($userModel->email);
		$message->setFrom(Yii::app()->params['noReplyEmail']);
		Yii::app()->mail->send($message);
	}

	public function sendAccountActivationEmail($userModel) 
	{
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
	public function actionLogout() 
	{
		Yii::app()->getUser()->logout();
		Yii::app()->getUser()->setFlash('success', t('You have been successfully logged out.'));
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionProfile(array $CPUser = array(), $ajax = null) 
	{
		$CPUserModel = Yii::app()->getUser()->getModel();
		$AvatarModel = isset($CPUserModel->avatar) ? $CPUserModel->avatar : new Avatar();

		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$AvatarModel->user_id = $CPUserModel->id;
			$CPUserModel->setAttributes($CPUser);
			if(isset($ajax) && $ajax === 'profile-form') 
			{
				echo CActiveForm::validateTabular(array($CPUserModel, $AvatarModel), null, false);
				return;
			}
			elseif($CPUserModel->validate() && $AvatarModel->validate())
			{
				$transaction = Yii::app()->db->beginTransaction();
				try 
				{
					if($CPUserModel->save(false) && (!isset($AvatarModel->image) || $AvatarModel->save(false)))
					{
						$transaction->commit();
					}
					else 
					{
						$transaction->rollback();
					}
				}
				catch(Exception $e) 
				{
					$transaction->rollback();
					throw $e;
				}
			}
		}
		$this->render('pages/profile', array('CPUser' => $CPUserModel, 'Avatar' => $AvatarModel));
	}

	/****** START API ACTIONS ******/

	public function actionCreate(array $Register = array())
	{
		$model = new Register('pushed');
		$model->setAttributes($Register);
		if($model->validate())
		{
			$user = new CPUser();
			$user->setAttributes($model->getAttributes());

			if($user->save())
			{
				$this->sendAccountActivationEmail($user);
				$user->attachBehavior('toArray', array('class' => 'application.behaviors.EArrayBehavior'));
				return $this->renderApiResponse(200, $user->toArray(array('id', 'email'), true));
			}
			$model->addErrors($user->getErrors());
		}

		$this->renderApiResponse(400, $model->getErrorsAsJSON());
	}

	public function actionRead(array $CPUser = array()) 
	{
		$model = new CPUser('search');

		$model->setAttributes($CPUser);

		$users = $model->with('group')->findAll($model->getSearchCriteria());
		$data = array();
		foreach($users as $user) {
			$user->attachBehavior('toArray', array('class' => 'application.behaviors.EArrayBehavior'));
			$data[] = $user->toArray(array_merge($user->getSafeAttributeNames(), array('group' => 'name')), true);
		}

		if(empty($data))
			$this->renderApiResponse(404, $data);
		else
			$this->renderApiResponse(200, $data);
	}

	public function actionUpdate(array $CPUser) 
	{
		if(!isset($CPUser['id']))
		{
			return $this->renderApiResponse(400, array('CPUser[id]' => t('The id of the user to be updated must be specified.')));
		}
		$model = CPUser::model()->findByPk($CPUser['id']);

		$model->setAttributes($requestVars);

		if($model->save()) {
			$this->renderApiResponse();
		}

		$this->renderApiResponse(400, $model->getErrorsAsJSON());
	}

	public function actionDelete(array $CPUser) 
	{
		if(!isset($CPUser['id']))
		{
			return $this->renderApiResponse(400, array('CPUser[id]' => t('The id of the user to be deleted must be specified.')));
		}

		$this->renderApiResponse(200, array('rows_deleted' => CPUser::model()->deleteByPk($CPUser['id'])));
	}

	public function actionOptions() 
	{
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