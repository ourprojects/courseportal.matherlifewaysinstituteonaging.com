<?php
class ActivityLogWidget extends CInputWidget 
{
	
	/**
	 * @var string the base script URL for all grid view resources (eg javascript, CSS file, images).
	 * Defaults to null, meaning using the integrated grid view resources (which are published as assets).
	 */
	public $baseScriptUrl;
	
	public static function actions()
	{
		return array(
			'dimension' => 'course.widgets.SpencerPowell.actions.DimensionAction',
			'logActivity' => 'course.widgets.SpencerPowell.actions.LogActivityAction',
			'logActivityGrid' => 'course.widgets.SpencerPowell.actions.LogActivityGridAction'
		);
	}
	
	public function init()
	{
		if(!isset($this->actionPrefix))
		{
			$this->actionPrefix = 'spencerpowell.';
		}
		if(!isset($this->baseScriptUrl))
		{
			$this->baseScriptUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('course.widgets.SpencerPowell.assets'), -1, true);
		}
		$cs = Yii::app()->getClientScript();
		$cs->registerCoreScript('jquery');
		$cs->registerScriptFile($this->baseScriptUrl.'/jquery.activitylog.js', CClientScript::POS_END);
		parent::init();
	}
	
	public function run() 
	{
		$this->render(
			'index', 
			array(
				'dimensions' => Dimension::model()->findAll(), 
				'Activity' => new Activity(), 
				'UserActivity' => new UserActivity(),
				'activitySearchModel' => new Activity('search'),
				'id' => $this->getId(),
				'actionPrefix' => $this->actionPrefix
			)
		);
	}
	
	public function createUrl($route, $params = array(), $ampersand = '&')
	{
		return $this->getController()->createUrl($route, $params, $ampersand);
	}

}
?>
