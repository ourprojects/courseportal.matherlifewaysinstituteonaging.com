<?php

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'CUCaptcha.php');

class CUReCaptcha extends CUCaptcha
{

	public $reCaptchaWidgetPathAlias = 'ext.LDReCaptcha.LDReCaptchaWidget';
	
	private $_reCaptchaWidget;
	
	public function getReCaptchaWidget()
	{
		if(!isset($this->_reCaptchaWidget))
		{
			$this->_reCaptchaWidget = Yii::app()->getController()->createWidget($this->reCaptchaWidgetPathAlias, $this->config);
			if($this->_reCaptchaWidget === null)
			{
				throw new CException(Yii::t(LDContactUsWidget::ID, 'There is an error in your configuration of the reCaptcha widget for CUReCaptcha.'));
			}
		}
		return $this->_reCaptchaWidget;
	}
	
	public function getModel()
	{
		return $this->getReCaptchaWidget()->model;
	}
	
	public function loadAttributes($actionParams)
	{
		$this->getModel()->loadAttributes($actionParams);
	}

	public function render($activeForm)
	{
		$widget = $this->getReCaptchaWidget();
		echo $activeForm->labelEx($widget->model, $widget->attribute, $this->labelHtmlOptions);
		$widget->run();
		echo $activeForm->error($widget->model, $widget->attribute, $this->errorHtmlOptions);
	}

}