<?php

class AvatarController extends CoursePortalController
{
	
	public $defaultAction = 'view';
	
	public function init()
	{
		parent::init();
		$this->loadExtension('HTTP_Download');
	}

	public function accessRules()
	{
		return array_merge(
				parent::accessRules(),
				array(
					array('allow',
							'users' => array('@'),
					),
					array('deny',
							'users' => array('*'),
					),
				)
		);
	}

	public function actionView($id = null) 
	{
		if(!isset($id) || ($avatar = Avatar::model()->findByPk($id)) === null)
		{
			$avatar = Avatar::getDefaultAvatar();
		}
		
		if(file_exists($avatar->getPath()))
		{
			HTTP_Download::staticSend(array(
					'file'				 => $avatar->getPath(),
					'contenttype'		 => $avatar->getMime(),
					'contentdisposition' => array(HTTP_Download::ATTACHMENT, $avatar->name),
			), false);
		}
	}
	
	public function actionDelete()
	{
		$avatar = Avatar::model()->findByPk(Yii::app()->getUser()->getId());
		if($avatar === null)
		{
			throw new CHttpException(404, t('Avatar with ID {id} could not be found.', array('{id}' => Yii::app()->getUser()->getId())));
		}
		$avatar->delete();
		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

}
