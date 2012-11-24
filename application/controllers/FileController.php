<?php defined('BASEPATH') or exit('No direct script access allowed');  

class FileController extends OnlineCoursePortalController {

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
	
	public function actionAdd() {
		
	}
	
	public function actionIndex($id) {
		$file = Yii::app()->getUser()->getModel()->uploadedFiles($id);
		if($file !== null) {
			$this->loadExtension('HTTP_Download');
			HTTP_Download::staticSend(array(
					'file'               => $file->getPath(),
					'contenttype'		 => $file->mime_type,
					'contentdisposition' => array(HTTP_DOWNLOAD_ATTACHMENT, $file->name),
			), false);
		} else {
			throw new CHttpException(404, t('The file {name} could not be found.', array('{name}' => $id)));
		}
	}
	
}