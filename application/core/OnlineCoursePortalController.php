<?php defined('BASEPATH') or exit('No direct script access allowed');  

abstract class OnlineCoursePortalController extends CController {
	
	public $viewActionClass = 'ViewAction';
	
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu = null;
	
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
		Yii::app()->clientScript->scriptMap = array(
				'jquery.js' => Yii::app()->theme->baseUrl.'/js/jquery.js',
				'jquery-ui.min.js' => Yii::app()->theme->baseUrl.'/js/jquery-ui.min.js',
				'jquery.cycle.js' => Yii::app()->theme->baseUrl.'/js/jquery.cycle.js',
				'jquery.fancybox.js' => Yii::app()->theme->baseUrl.'/js/jquery.fancybox.js',
				'jquery.feed.js' => Yii::app()->theme->baseUrl.'/js/jquery.feed.js',
				'jquery.mousewheel.pack.js' => Yii::app()->theme->baseUrl.'/js/jquery.mousewheel.pack.js',
				'jquery.quote.js' => Yii::app()->theme->baseUrl.'/js/jquery.quote.js',
				'jquery.tweet.js' => Yii::app()->theme->baseUrl.'/js/jquery.tweet.js',
				'jwplayer.js' => Yii::app()->theme->baseUrl.'/js/jwplayer.js',
				'main.js' => Yii::app()->theme->baseUrl.'/js/main.js',
		);
		foreach(Yii::app()->clientScript->scriptMap as $file => $url) {
			Yii::app()->clientScript->registerScriptFile($file, CClientScript::POS_HEAD);
		}
	}
	
	/**
	 * Creates the action instance based on the action map.
	 * This method will check to see if the action ID appears in the given
	 * action map. If so, the corresponding configuration will be used to
	 * create the action instance.
	 * @param array $actionMap the action map
	 * @param string $actionID the action ID that has its prefix stripped off
	 * @param string $requestActionID the originally requested action ID
	 * @param array $config the action configuration that should be applied on top of the configuration specified in the map
	 * @return CAction the action instance, null if the action does not exist.
	 */
	protected function createActionFromMap($actionMap, $actionID, $requestActionID, $config = array()) {
		$action = parent::createActionFromMap($actionMap, $actionID, $requestActionID, $config);
		if($action === null) {
			$action = Yii::createComponent($this->viewActionClass, $this, $actionID);
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
