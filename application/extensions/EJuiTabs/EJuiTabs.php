<?php

Yii::import('zii.widgets.jui.CJuiTabs');

class EJuiTabs extends CJuiTabs
{
	
	public $vertical = false;
	
	public function run()
	{
		parent::run();
		if($this->vertical)
		{
			$id = $this->getId();
			if(isset($this->htmlOptions['id']))
			{
				$id = $this->htmlOptions['id'];
			}
			else
			{
				$this->htmlOptions['id'] = $id;
			}
			$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
			if(is_dir($assetsDir)) 
			{
				$assetsUrl = Yii::app()->getAssetManager()->publish($assetsDir, false, 1, YII_DEBUG);
			}
			$clientScript = Yii::app()->getClientScript();
			$clientScript->registerCssFile($assetsUrl.'/jquery.ui.tabs.vertical.css');
			$clientScript->registerScript(
					__CLASS__.'#'.$id.'-vertical', 
					'jQuery("#'.$id.'").addClass("ui-tabs-vertical ui-helper-clearfix");'.
					'jQuery("#'.$id.' li").removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );'
			);
		}
	}
	
}