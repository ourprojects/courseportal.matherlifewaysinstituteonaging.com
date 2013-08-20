<?php

abstract class AController extends CController
{

	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs = array();

	private $_assetsUrl;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl' => array(
						'application.modules.srbac.components.SrbacAccessControlFilter',
						'rules' => $this->accessRules()
				),
		);
	}

	public function accessRules()
	{
		return array(array('deny'));
	}

	public function getAssetsUrl()
	{
		if($this->_assetsUrl === null) {
			$assetsDir = Yii::getPathOfAlias('admin.assets.' . $this->getId());
			if(is_dir($assetsDir))
				$this->_assetsUrl = Yii::app()->getAssetManager()->publish($assetsDir, false, -1, YII_DEBUG);
			else
				$this->_assetsUrl = Yii::app()->getTheme()->getBaseUrl();
		}
		return $this->_assetsUrl;
	}

	public function getStylesUrl($file = '') {
		return $this->getAssetsUrl() . '/styles/' . $file;
	}

	public function getScriptsUrl($file = '') {
		return $this->getAssetsUrl() . '/scripts/' . $file;
	}

	public function getImagesUrl($file = '') {
		return $this->getAssetsUrl() . '/images/' . $file;
	}

}
