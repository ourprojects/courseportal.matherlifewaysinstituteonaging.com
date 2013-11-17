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
	public function getAssetsUrl($location = null)
	{
		if(!isset($location))
		{
			$location = $this->getId();
		}
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
	public function getStylesUrl($file = '', $directory = null)
	{
		return $this->getAssetsUrl($directory).'/styles/'.$file;
	}

	/**
	 * Convenience method for getting the URL to a script asset.
	 *
	 * @param string $file The script asset file name to get a URL for
	 * @param string $location The sub directory in the assets directory to get a URL for
	 * @return string The URL to the script asset
	 */
	public function getScriptsUrl($file = '', $directory = null)
	{
		return $this->getAssetsUrl($directory).'/scripts/'.$file;
	}

	/**
	 * Convenience method for getting the URL to an image asset.
	 *
	 * @param string $file The image asset file name to get a URL for
	 * @param string $location The sub directory in the assets directory to get a URL for
	 * @return string The URL to the image asset
	 */
	public function getImagesUrl($file = '', $directory = null)
	{
		return $this->getAssetsUrl($directory).'/images/'.$file;
	}
	
	/**
	 * Renders a view with a layout.
	 *
	 * This method first calls {@link renderPartial} to render the view (called content view).
	 * It then renders the layout view which may embed the content view at appropriate place.
	 * In the layout view, the content view rendering result can be accessed via variable
	 * <code>$content</code>. At the end, it calls {@link processOutput} to insert scripts
	 * and dynamic contents if they are available.
	 *
	 * By default, the layout view script is "protected/views/layouts/main.php".
	 * This may be customized by changing {@link layout}.
	 *
	 * @param string $view name of the view to be rendered. See {@link getViewFile} for details
	 * about how the view script is resolved.
	 * @param array $data data to be extracted into PHP variables and made available to the view script
	 * @param boolean $return whether the rendering result should be returned instead of being displayed to end users.
	 * @return string the rendering result. Null if the rendering result is not required.
	 * @see renderPartial
	 * @see getLayoutFile
	 */
	public function render($view, $data = null, $return = false)
	{
		return parent::render('../layout', array('content' => $this->renderPartial($view, $data, true)), $return);
	}

}
