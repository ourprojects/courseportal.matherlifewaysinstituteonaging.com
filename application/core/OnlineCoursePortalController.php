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
	}
	
	/**
	 * @return array context menu attributes. This property will be assigned to {@link OnlineCoursePortalController::menuAttrs} when {@link OnlineCoursePortalController::init} is called.
	 */
	public function getMenuAttributes() {
		return array('items' => array(
							array('label' => '<span id="menu-home" title="'.t('Home').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('home/index')),
							array('label' => '<span id="menu-contact" title="'.t('Contact Us').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('home/contact')),
							array('label' => '<span id="menu-register" title="'.t('Register').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/register'),
									'visible' => Yii::app()->user->isGuest),
							array('label' => '<span id="menu-login" title="'.t('Login').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/login'),
									'visible' => Yii::app()->user->isGuest),
							array('label' => '<span id="menu-profile" title="'.t('Profile / Files').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/profile'),
									'visible' => !Yii::app()->user->isGuest),
							array('label' => '<span id="menu-forum" title="'.t('Forum').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('forum/index'),
									'visible' => !Yii::app()->user->isGuest),
							array('label' => '<span id="menu-courses" title="'.t('Courses').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('course/index'),
									'visible' => !Yii::app()->user->isGuest),
							array('label' => '<span id="menu-admin" title="'.t('Admin').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('admin/index'),
									'visible' => !Yii::app()->user->isGuest && Yii::app()->user->group->name === 'admin'),
							array('label' => '<span id="menu-logout" title="'.t('Logout').'"></span>',
									'url' => Yii::app()->createAbsoluteUrl('user/logout'),
									'visible' => !Yii::app()->user->isGuest)
					 ),
					 'encodeLabel' => false
		);
	}
	
	public function actions() {
		return array(
				'static' => 'ViewAction',
				'download' => 'ext.HTTP_Download.components.HTTP_DownloadAction',
		);
	}
	
	public function run($actionID) {
		if(($action = $this->createAction($actionID)) !== null) {
			if(($parent = $this->getModule()) === null)
				$parent = Yii::app();
			Yii::app()->getUrlManager()->parsePathInfoSegments();
			if($parent->beforeControllerAction($this, $action)) {
				$this->runActionWithFilters($action, $this->filters());
				$parent->afterControllerAction($this, $action);
			}
		}
		else
			$this->missingAction($actionID);
	}
	
	public function createAction($actionID) {
		if($this->getModule() !== null && $actionID === '') {
			$pathInfoSegs = Yii::app()->getUrlManager()->getPathInfoSegments();
			if(!empty($pathInfoSegs) && ($action = parent::createAction($pathInfoSegs[0])) !== null) {
				unset($pathInfoSegs[0]);
				return $action;
			}
		}
		$action = parent::createAction($actionID);
		if($action === null) {
			$action = parent::createAction('static');
			if($action !== null)
				Yii::app()->getUrlManager()->prependPathInfoSegment($actionID);
		}
		return $action;
	}

	/**
	 * Loads a helper
	 *
	 * @access public
	 * @param string $helper
	 * @return void
	 */
	public function loadHelper($helper) {
		Yii::app()->loadHelper($helper);
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
