<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
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
	 * (non-PHPdoc)
	 * @see CController::filters()
	 */
	public function filters()
	{
		return array(
				array('application.filters.HttpsFilter'),
				'accessControl' => array(
						'srbac.components.SrbacAccessControlFilter',
						'rules' => $this->accessRules()
				),
		);
	}

	/**
	 * (non-PHPdoc)
	 * @see CController::accessRules()
	 */
	public function accessRules()
	{
		return array(array('deny'));
	}
	
	/**
	 * (non-PHPdoc)
	 * @see CController::getActionParams()
	 */
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

	/**
	 * Given a sub directory within the assets directory this function returns the URL to that asset directory.
	 * 
	 * @param string $location The sub directory in the assets directory to get a URL for.
	 * @return string The URL to the asset directory
	 */
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

	/**
	 * Convenience method for getting the URL to a stylesheet asset.
	 * 
	 * @param string $file The stylesheet asset file name to get a URL for
	 * @param string $location The sub directory in the assets directory to get a URL for
	 * @return string The URL to the stylesheet asset
	 */
	public function getStylesUrl($file = '', $location = '_shared')
	{
		return $this->getAssetsUrl($location).'/styles/'.$file;
	}

	/**
	 * Convenience method for getting the URL to a script asset.
	 *
	 * @param string $file The script asset file name to get a URL for
	 * @param string $location The sub directory in the assets directory to get a URL for
	 * @return string The URL to the script asset
	 */
	public function getScriptsUrl($file = '', $location = '_shared')
	{
		return $this->getAssetsUrl($location).'/scripts/'.$file;
	}

	/**
	 * Convenience method for getting the URL to an image asset.
	 *
	 * @param string $file The image asset file name to get a URL for
	 * @param string $location The sub directory in the assets directory to get a URL for
	 * @return string The URL to the image asset
	 */
	public function getImagesUrl($file = '', $location = '_shared')
	{
		return $this->getAssetsUrl($location).'/images/'.$file;
	}

}
