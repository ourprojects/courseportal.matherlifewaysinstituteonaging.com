<?php

class SystemController extends SBaseController
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

	public function actionInstall($overwrite = false)
	{
		if(is_numeric($overwrite))
		{
			$overwrite = intval($overwrite) > 0;
		}
		elseif(is_string($overwrite))
		{
			$overwrite = strcasecmp('true', $overwrite) === 0;
		}
		elseif(!is_bool($overwrite))
		{
			$overwrite = false;
		}
		switch(SrbacUtilities::install($overwrite))
		{
			case SrbacUtilities::ERROR:
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('An error ocurred while attempting to install the necessary RBAC system.'));
				break;
			case SrbacUtilities::SUCCESS:
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('The RBAC system has been succesfully installed.'));
				break;
			case SrbacUtilities::OVERWRITE:
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('Unable to install RBAC system, a previous installation already exists. If you would like to re-install the system anyways please confirm and try again.'));
				break;
			default:
				Yii::app()->getUser()->setFlash($this->getModule()->flashKey, SrbacModule::t('Received an unknown result from attempting to install the RBAC system.'));
				break;
		}
	}

}
