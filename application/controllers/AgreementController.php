<?php defined('BASEPATH') or exit('No direct script access allowed');  

class AgreementController extends OnlineCoursePortalController {

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array_merge(parent::filters(), array('accessControl + agree'));
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
	 * Displays the confidentiality agreement with specified id
	 */
	public function actionView($id) 
	{	
		if($agreement = Agreement::model()->findByPk($id))
		{
			$webUser = Yii::app()->getUser();
			$userAgreement = $webUser->getIsGuest() ? null : UserAgreement::model()->findByPk(array('user_id' => $webUser->getId(), 'agreement_id' => $agreement->id));
			if($userAgreement != null)
			{
				$webUser->setFlash('success', t('You agreed to the terms of this document on {date}.', array('{date}' => $userAgreement->getFormattedAgreedOn())));
			}
			else
			{
				$webUser->setFlash('error', t('You have not yet agreed to the terms of this document.'));
			}
			return $this->render('agreement', array('agreement' => $agreement, 'user' => $webUser->getModel(), 'userAgreement' => $userAgreement));
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
							'contentType' => 'text/html',
							'fileName' => $agreement->name . '.html'
						),
					$this,
					$this->getAction()->getId())->run();
		}
		throw new CHttpException(404, t('An agreement with id {id} could not be located.', array('{id}' => $id)));
	}
	
	public function actionAgree($id)
	{
		if($agreement = Agreement::model()->findByPk($id))
		{
			$webUser = Yii::app()->getUser();
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