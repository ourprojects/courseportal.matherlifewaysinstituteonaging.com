<?php
class TForwardActionFilter extends CFilter
{
	
	public $actionMap = array();
	
	protected function preFilter($filterChain)
	{
		if(is_string($this->actionMap))
		{
			$filterChain->controller->run($this->actionMap);
			return false;
		}
		else if(is_array($this->actionMap))
		{
			$actionId = $filterChain->action->getId();
			if(isset($this->actionMap[$actionId]))
			{
				if(is_string($this->actionMap[$actionId]))
				{
					$filterChain->controller->run($this->actionMap[$actionId]);
					return false;
				}
				else if(is_array($this->actionMap[$actionId]))
				{
					if((empty($this->actionMap[$actionId]['ajaxOnly']) || Yii::app()->getRequest()->getIsAjaxRequest()) &&
							(empty($this->actionMap[$actionId]['postOnly']) || Yii::app()->getRequest()->getIsPostRequest()))
					{
						$filterChain->controller->run($this->actionMap[$actionId]['action']);
						return false;
					}
				}
			}
		}
		$filterChain->run();
		return true;
	}

}