<?php defined('BASEPATH') or exit('No direct script access allowed');  

abstract class OnlineCoursePortalController extends CController {

	/**
	 * @var array context menu attributes. This property will be assigned to {@link CMenu} in the main layout.
	 */
	public $menuAttrs = null;
	
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
	
	private $_assetsUrl;
	
	/**
	 * Basic initialiser to the base controller class
	 *
	 * @access public
	 * @param string $id
	 * @param CWebModule $module
	 * @return void
	 */
	public function __construct($id, $module = null) {
		parent::__construct($id, $module);
        Yii::app()->session->init();
	}
	
	public function init() {
		$this->menuAttrs = $this->getMenuAttributes();
		
		CHtml::$afterRequiredLabel = '&nbsp;<span class="required">*</span>';
	}
	
	/**
	 * @return array context menu attributes. This property will be assigned to {@link OnlineCoursePortalController::menuAttrs} when {@link OnlineCoursePortalController::init} is called.
	 */
	public function getMenuAttributes() {
		$user = Yii::app()->getUser();
		return array('items' => array(
							array('label' => '<span id="menu-home" title="'.t('Home').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('home/index')),
							array('label' => '<span id="menu-contact" title="'.t('Contact Us').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('home/contact')),
							array('label' => '<span id="menu-register" title="'.t('Register').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/register'),
									'visible' => $user->getIsGuest()),
							array('label' => '<span id="menu-login" title="'.t('Login').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/login'),
									'visible' => $user->getIsGuest()),
							array('label' => '<span id="menu-profile" title="'.t('Profile / Files').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/profile'),
									'visible' => !$user->getIsGuest()),
							array('label' => '<span id="menu-forum" title="'.t('Forum').'"></span>',
									'url' => Yii::app()->phpBB->getForumUrl(),
									'linkOptions' => array('target' => '_blank'),
									'visible' => !$user->getIsGuest()),
							array('label' => '<span id="menu-courses" title="'.t('Courses').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('course/index'),
									'visible' => !$user->getIsGuest()),
							array('label' => '<span id="menu-admin" title="'.t('Admin').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('admin/index'),
									'visible' => $user->getIsAdmin()),
							array('label' => '<span id="menu-logout" title="'.t('Logout').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/logout'),
									'visible' => !$user->getIsGuest())
					 ),
					 'encodeLabel' => false
		);
	}
	
	public function actions() {
		$actions = array_merge(array(
				'download' => 'ext.HTTP_Download.components.HTTP_DownloadAction',
		));
		if(isset($this->defaultMissingAction))
		{
			$actions = array_merge($actions, array($this->defaultMissingAction => $this->defaultMissingActionConfig));
		}
		return $actions;
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
		if(!isset($this->_assetsUrl) && $this->getModule() === null) {
			$assetsDir = Yii::getPathOfAlias('application.assets.' . $this->getId());
			if(is_dir($assetsDir))
				$this->_assetsUrl = Yii::app()->assetManager->publish($assetsDir, false, -1, YII_DEBUG);
			else
				$this->_assetsUrl = '';
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
    public function loadExtension($extension, $className = '*') {
        Yii::import("ext.$extension.$className", true);
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
    
    /**
     * Helper function for building CDbCriteria
     *
     * @param string $attribute
     * @param array $values
     * @param string $symbol
     * @param string $operator
     * @access protected
     * @return CDbCriteria
     */
    public static function criteriaBuilder($attribute, $values, $symbol = '=', $operator = 'AND') {
    	$criteria = new CDbCriteria;
    	if(is_array($values)) {
    		$condition = array();
    		foreach($values as $value)
    			if(is_array($value))
    				$condition[] = "$attribute $symbol {$value[$attribute]}";
    		else
    			$condition[] = "$attribute $symbol $value";
    		$criteria->addCondition($condition, $operator);
    	} else {
    		$criteria->addCondition("$attribute $symbol $values", $operator);
    	}
    	return $criteria;
    }

}
