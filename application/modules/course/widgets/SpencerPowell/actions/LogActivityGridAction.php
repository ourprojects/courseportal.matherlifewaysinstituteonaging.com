<?php

class LogActivityGridAction extends CAction
{
	
	public $widgetId;
	
	public $actionPrefix;

	public function run(array $Activity = array())
	{
		$model = new Activity('search');
		$model->setAttributes($Activity);
		$this->getController()->renderPartial('course.widgets.SpencerPowell.views.logActivityGrid', array('activitySearchModel' => $model, 'actionPrefix' => $this->actionPrefix, 'id' => $this->widgetId));
	}
	
	public function widget($className, $properties = array(), $captureOutput = false)
	{
		return $this->getController()->widget($className, $properties, $captureOutput);
	}

}

?>
