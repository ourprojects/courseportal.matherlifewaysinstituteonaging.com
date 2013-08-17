<?php

class InstallController extends SBaseController
{

	public function actionIndex()
	{
		$this->render(
				'index',
				array(
					'installed' => SrbacUtilities::isInstalled(),
					'authManager' => Yii::app()->getAuthManager(),
					'srbacModule' => SrbacUtilities::getSrbacModule(),
				)
		);
	}

	public function actionExecute()
	{
		$request = Yii::app()->getRequest();
		if($request->getIsAjaxRequest() && $request->getIsPostRequest())
		{
			echo SrbacUtilities::install(true);
		}
	}

}
