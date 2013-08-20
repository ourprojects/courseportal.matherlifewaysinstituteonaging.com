<?php

class AvatarController extends CoursePortalController
{

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

	public function actionIndex()
	{
		$this->loadExtension('HTTP_Download');
		HTTP_Download::staticSend(array(
				'file'               => Avatar::getDefaultPath(),
				'contenttype'		 => Avatar::DEFAULT_MIME,
				'contentdisposition' => array(HTTP_Download::ATTACHMENT, Avatar::DEFAULT_NAME),
		), false);
	}

	public function actionView($id) {
		$this->loadExtension('HTTP_Download');
		$avatar = Avatar::model()->findByPk($id);
		if(isset($avatar) && file_exists($avatar->getPath()))
		{
			HTTP_Download::staticSend(array(
					'file'               => $avatar->getPath(),
					'contenttype'		 => $avatar->mime,
					'contentdisposition' => array(HTTP_Download::ATTACHMENT, $avatar->name),
			), false);
		}
		else
		{
			$this->actionIndex();
		}
	}

}