<?php

abstract class ApiController extends CoursePortalController 
{

	/**
	 * @return array action filters
	 */
	public function filters() 
	{
		return array_merge(
				parent::filters(),
				array(
					'verifyKey + create, read, update, delete, options',
				)
		);
	}

	public function filterVerifyKey($filterChain) 
	{
		if(isset($_GET['key_id']) && isset($_GET['key'])) 
		{
			$key = Key::model()->findByPk($_GET['key_id']);
			if($key !== null) 
			{
				if(Yii::createComponent('ext.pbkdf2.PBKDF2')->hash($_GET['key'], $key->salt) === $key->value) 
				{
					$filterChain->run();
					return;
				}
			}
		}
		throw new CHttpException(401, t('Not authorized.'));
	}

	/*public function actionCreate() 
	{
		$this->renderApiResponse(501);
	}

	public function actionRead() 
	{
		$this->renderApiResponse(501);
	}

	public function actionUpdate() 
	{
		$this->renderApiResponse(501);
	}

	public function actionDelete() 
	{
		$this->renderApiResponse(501);
	}

	public function actionOptions() 
	{
		$this->renderApiResponse(501);
	}*/

	protected function renderApiResponse($statusCode = 200, $data = array(), $additionalHeaders = null) 
	{
		Yii::import('application.helpers.CHttpStatusCodes');
		header("HTTP/1.1 $statusCode " . CHttpStatusCodes::getHttpMessage($statusCode));

		if(is_array($additionalHeaders))
			foreach($additionalHeaders as $header)
				header($header);

		header('Content-Type: application/json');
		$data = CJSON::encode(array('success' => CHttpStatusCodes::isHttpNormal($statusCode), 'data' => $data));

		header('Content-MD5: ' . md5($data));
		header('Content-Length: ' . strlen($data));

		if(strcasecmp(Yii::app()->getRequest()->getRequestType(), 'HEAD') === 0)
			Yii::app()->end();

		echo $data;
	}

}