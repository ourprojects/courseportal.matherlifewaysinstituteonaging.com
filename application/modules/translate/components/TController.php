<?php
class TController extends CController
{

	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs = array();

	private $_assetsUrls = array();

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
	
	public function getActionParams()
	{
		$actionParams = parent::getActionParams();
		$request = Yii::app()->getRequest();
		if($request->getIsPostRequest())
		{
			$actionParams += $_POST;
		}
		elseif(strcasecmp($request->getRequestType(), 'GET'))
		{
			$actionParams += $request->getRestParams();
		}
		return $actionParams;
	}

	public function getAssetsUrl($location = '_shared')
	{
		if(!isset($this->_assetsUrls[$location])) 
		{
			$assetsDir = Yii::getPathOfAlias('translate.assets.'.$location);
			
			if(is_dir($assetsDir))
			{
				$this->_assetsUrls[$location] = Yii::app()->getAssetManager()->publish($assetsDir, false, -1, YII_DEBUG);
			}
			else
			{
				$this->_assetsUrls[$location] = Yii::app()->getTheme()->getBaseUrl();
			}
		}
		return $this->_assetsUrls[$location];
	}

	public function getStylesUrl($file = '', $location = '_shared')
	{
		return $this->getAssetsUrl($location).'/styles/'.$file;
	}

	public function getScriptsUrl($file = '', $location = '_shared')
	{
		return $this->getAssetsUrl($location).'/scripts/'.$file;
	}

	public function getImagesUrl($file = '', $location = '_shared')
	{
		return $this->getAssetsUrl($location).'/images/'.$file;
	}

}
