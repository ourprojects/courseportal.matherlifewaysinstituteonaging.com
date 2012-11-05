<?php defined('BASEPATH') or exit('No direct script access allowed');  

abstract class ApiController extends OnlineCoursePortalController {

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
				array('filters.HttpsFilter'),
				'verifyKey + create, read, update, delete',
		);
	}
	
	public function filterVerifyKey($filterChain) {
		if(isset($_GET['key_id']) && isset($_GET['key'])) {
			$_GET['key'] = str_replace(array('-','_'), array('+','/'), $_GET['key']);
			$key = Key::model()->findByPk($_GET['key_id']);
			if($key !== null) {
				if(Yii::createComponent(array('class' => 'ext.pbkdf2.PBKDF2', 'string' => $_GET['key'], 'IV' => $key->salt))->verifyHash($key->value)) {
					$filterChain->run();
					return;
				}
			}
		}
		throw new CHttpException(401, t('Not authorized.'));
	}
	
	public function actionCreate() {
		$this->renderApiResponse(501);
	}
	
	public function actionRead() {
		$this->renderApiResponse(501);
	}
	
	public function actionUpdate() {
		$this->renderApiResponse(501);
	}
	
	public function actionDelete() {
		$this->renderApiResponse(501);
	}
	
	public function actionOptions() {
		$this->renderApiResponse(501);
	}
	
	protected function renderApiResponse($statusCode = 200, $data = array(), $additionalHeaders = null) {
		Yii::app()->loadHelper('HttpStatusCodes');
		header("HTTP/1.1 $statusCode " . getHttpMessage($statusCode));
		
		if(is_array($additionalHeaders))
			foreach($additionalHeaders as $header)
				header($header);
		
		header('Content-Type: application/json');
		$data = CJSON::encode(array('success' => isHttpNormal($statusCode), 'data' => $data));
		
		header('Content-MD5: ' . md5($data));
		header('Content-Length: ' . strlen($data));
		
		if(strcasecmp(Yii::app()->getRequest()->getRequestType(), 'HEAD') === 0)
			exit;
		
		echo $data;
	}

}