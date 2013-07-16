<?php   

class AvatarController extends OnlineCoursePortalController {

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
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
	
	public function actionView($id) {
		$this->loadExtension('HTTP_Download');
		$avatar = Avatar::model()->findByPk($id);
		$sendParams = isset($avatar) && file_exists($avatar->getPath()) 
			? array(
					'file'               => $avatar->getPath(),
					'contenttype'		 => $avatar->mime,
					'contentdisposition' => array(HTTP_Download::ATTACHMENT, $avatar->name),
			) 
			: array(
					'file'               => Avatar::getDefaultPath(),
					'contenttype'		 => Avatar::DEFAULT_MIME,
					'contentdisposition' => array(HTTP_Download::ATTACHMENT, Avatar::DEFAULT_NAME),
			);
		HTTP_Download::staticSend($sendParams, false);
	}
	
}