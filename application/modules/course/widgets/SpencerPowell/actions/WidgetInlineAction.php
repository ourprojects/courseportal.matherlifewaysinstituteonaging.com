<?php

class WidgetInlineAction extends CInlineAction
{
	
	public $widgetClassName;
	
	public $widgetProperties = array();
	
	private $_widget;
	
	public function getWidget()
	{
		if(!isset($this->_widget))
		{
			$this->_widget = $this->getController()->createWidget($this->widgetClassName, $this->widgetProperties);
		}
		return $this->_widget;
	}
	
	public function getActionMethodName()
	{
		$methodName = $this->getId();
		$prefix = $this->getWidget()->actionPrefix;
		if(substr_count($methodName, $prefix, 0, strlen($prefix)))
		{
			$action = substr_replace($methodName, '', 0, strlen($prefix));
		}
		return 'action'.$action;
	}
	
	/**
	 * Runs the action.
	 * The action method defined in the controller is invoked.
	 * This method is required by {@link CAction}.
	 */
	public function run()
	{
		$method = $this->getActionMethodName();
		ob_start();
		ob_implicit_flush(false);
		$this->getWidget()->$method();
		$output = ob_get_clean();
		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo $output;
		}
		else
		{
			$this->getController()->renderText($output);
		}
	}
	
	/**
	 * Runs the action with the supplied request parameters.
	 * This method is internally called by {@link CController::runAction()}.
	 * @param array $params the request parameters (name=>value)
	 * @return boolean whether the request parameters are valid
	 * @since 1.1.7
	 */
	public function runWithParams($params)
	{
		$methodName = $this->getActionMethodName();
		$method = new ReflectionMethod($this->getWidget(), $methodName);
		ob_start();
		ob_implicit_flush(false);
		if($method->getNumberOfParameters() > 0)
		{
			$result = $this->runWithParamsInternal($this->getWidget(), $method, $params);
		}
		else 
		{
			$this->getWidget()->$methodName();
			$result = true;
		}
		$output = ob_get_clean();
		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo $output;
		}
		else
		{
			$this->getController()->renderText($output);
		}
		return $result;
	}

}

?>
