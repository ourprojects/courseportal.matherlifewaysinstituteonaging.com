<?php

Yii::import('zii.widgets.grid.CGridView');

class PersistentGridView extends CGridView 
{
	
	public function init() 
	{
		if(isset($this->filter))
		{
			$modelName = get_class($this->filter);
			$userStateAttr = "{$this->getId()}-$modelName-";
			
			if(isset($_GET["{$modelName}_page"])) 
			{
				Yii::app()->getUser()->setState("$userStateAttr-page", $_GET["{$modelName}_page"]);
			} 
			else if(Yii::app()->getUser()->hasState("$userStateAttr-page")) 
			{
				$_GET["{$modelName}_page"] = Yii::app()->getUser()->getState("$userStateAttr-page");
			}
	
			foreach($this->filter->getSafeAttributeNames() as $safeAttr) 
			{
				if(isset($_GET[$modelName][$safeAttr])) 
				{
					Yii::app()->getUser()->setState("$userStateAttr-$safeAttr", $_GET[$modelName][$safeAttr]);
				} 
				else if(Yii::app()->getUser()->hasState("$userStateAttr-$safeAttr")) 
				{
					$this->filter->$safeAttr = Yii::app()->getUser()->getState("$userStateAttr-$safeAttr");
				}
			}
		}
		parent::init();
	}

}