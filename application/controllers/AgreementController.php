<?php

class AgreementController extends CoursePortalController
{

	public function accessRules()
	{
		return array_merge(
				parent::accessRules(),
				array(
					array('allow',
							'actions' => array('agree'),
							'users' => array('@'),
					),
					array('deny',
							'actions' => array('agree'),
							'users' => array('*'),
					),
				)
		);
	}

	/**
	 * Displays the confidentiality agreement with specified id
	 */
	public function actionView($id, $userId = null)
	{
		if($agreement = Agreement::model()->findByPk($id))
		{
			$webUser = Yii::app()->getUser();
			if($userId === null)
			{
				$userId = $webUser->getId();
			}

			$userAgreement = $userId === null ? null : UserAgreement::model()->findByPk(array('user_id' => $userId, 'agreement_id' => $agreement->id));
			if($userAgreement !== null)
			{
				$webUser->setFlash('success', t('You agreed to the terms of this document on {date}.', array('{date}' => $userAgreement->getFormattedAgreedOn())));
			}
			else
			{
				$webUser->setFlash('error', t('You have not yet agreed to the terms of this document.'));
			}
			return $this->render('agreement', array('agreement' => $agreement, 'user' => CPUser::model()->findByPk($userId), 'userAgreement' => $userAgreement));
		}
		throw new CHttpException(404, t('An agreement with id {id} could not be located.', array('{id}' => $id)));
	}

	public function actionDownload($id)
	{
		if($agreement = Agreement::model()->findByPk($id))
		{
			Yii::app()->layout = 'nostyle';
			$webUser = Yii::app()->getUser();
			$userAgreement = $webUser->getIsGuest() ? null : UserAgreement::model()->findByPk(array('user_id' => $webUser->getId(), 'agreement_id' => $agreement->id));
			return Yii::createComponent(
					array(
							'class' => 'ext.HTTP_Download.components.HTTP_DownloadAction',
							'data' => $this->render('agreementPartial', array('agreement' => $agreement, 'user' => $webUser->getModel(), 'userAgreement' => $userAgreement), true),
							'mime' => 'text/html',
							'filename' => $agreement->name . '.html'
						),
					$this,
					$this->getAction()->getId())->run();
		}
		throw new CHttpException(404, t('An agreement with id {id} could not be located.', array('{id}' => $id)));
	}

	public function actionAgree($id)
	{
		$webUser = Yii::app()->getUser();
		if($webUser->getIsGuest())
		{
			$webUser->loginRequired();
		}
		if($agreement = Agreement::model()->findByPk($id))
		{
			$userAgreement = new UserAgreement();
			$userAgreement->user_id = $webUser->getId();
			$userAgreement->agreement_id = $agreement->id;
			if($userAgreement->save())
			{
				$this->redirect('/agreement/'.$agreement->id);
			}
			return $this->render('agreement', array('agreement' => $agreement, 'user' => $webUser->getModel(), 'userAgreement' => $userAgreement));
		}
		throw new CHttpException(404, t('An agreement with id {id} could not be located.', array('{id}' => $id)));
	}

}