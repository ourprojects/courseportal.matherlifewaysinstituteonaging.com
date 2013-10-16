<?php

abstract class CoursePortalController extends CController
{

	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs = array();

	public $defaultMissingAction = 'static';

	public $defaultMissingActionConfig = array(
			'class' => 'application.components.ViewAction',
			'viewParam' => 'view'
	);
	
	public $assetsDirectoryName = 'assets';

	private $_assetsUrl;

	public function init()
	{
		parent::init();
		CHtml::$afterRequiredLabel = '&nbsp;<span class="required">*</span>';
	}

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

	public function actions()
	{
		$actions = array_merge(array(
				'download' => 'ext.HTTP_Download.components.HTTP_DownloadAction',
		));
		if(isset($this->defaultMissingAction))
		{
			$actions = array_merge($actions, array($this->defaultMissingAction => $this->defaultMissingActionConfig));
		}
		return $actions;
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

	public function missingAction($actionID)
	{
		if(!isset($this->defaultMissingAction) || $actionID === $this->defaultMissingAction)
		{
			parent::missingAction($actionID);
		}
		else
		{
			if(isset($this->defaultMissingActionConfig['viewParam']))
			{
				$_GET[$this->defaultMissingActionConfig['viewParam']] = CArray::array_flatten($_GET);
				array_unshift($_GET[$this->defaultMissingActionConfig['viewParam']], $actionID);
			}
			$this->run($this->defaultMissingAction);
		}
	}

	public function getAssetsUrl()
	{
		if($this->_assetsUrl === null) 
		{
			$app = $this->getModule() === null ? Yii::app() : $this->getModule();
			$assetsDir = $app->getBasePath().DIRECTORY_SEPARATOR.$this->assetsDirectoryName.DIRECTORY_SEPARATOR.$this->getId();
			if(is_dir($assetsDir))
				$this->_assetsUrl = Yii::app()->getAssetManager()->publish($assetsDir, false, -1, YII_DEBUG);
			else
				$this->_assetsUrl = Yii::app()->getTheme()->getBaseUrl();
		}
		return $this->_assetsUrl;
	}

	/**
	 * Loads an extension
	 *
	 * @access public
	 * @param string $extension
	 * @param string $className
	 * @return void
	 */
	public function loadExtension($extension, $className = '*')
	{
		Yii::import("ext.$extension.$className", true);
	}

	public function getStylesUrl($file = '')
	{
		return $this->getAssetsUrl() . '/styles/' . $file;
	}

	public function getScriptsUrl($file = '')
	{
		return $this->getAssetsUrl() . '/scripts/' . $file;
	}

	public function getImagesUrl($file = '')
	{
		return $this->getAssetsUrl() . '/images/' . $file;
	}
	
	public function createDownloadUrl($filePath = '', $controller = null)
	{
		if($controller === null)
		{
			$controller = $this->getId();
			for($module = $this->getModule(); $module !== null; $module = $module->getParentModule())
			{
				$controller = $module->getId().'/'.$controller;
			}
		}
		return $this->createUrl('/'.trim($controller, '/').'/download/'.ltrim($filePath, '/'));
	}

}
