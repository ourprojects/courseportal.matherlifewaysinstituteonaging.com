<?php
/**
 * A Contact Us widget for Yii
 *
 * @author Louis DaPrato
 */
class LDContactUsWidget extends CInputWidget
{

	const ID = 'LDContactUsWidget';

	public $options = array();
	
	public $captcha;

	public static function actions()
	{
		return array(
			'submit' => array(
				'class' => 'ext.LDContactUsWidget.actions.SubmitAction',
			),
		);
	}
	
	public function getDefaultOptions()
	{
		$id = $this->getId();
		return array(
			'htmlOptions' => array('id' => 'contact_'.$id),
			'form' => array(
				'options' => array()
			),
			'submitButtonLabel' => Yii::t(self::ID, 'Submit'),
			'submitButtonHtmlOptions' => array('id' => 'contact_submit_'.$id),
			'messageHtmlOptions' => array('class' => 'message hide'),
			'message' => '',
			'name' => array(
				'labelHtmlOptions' => array(),
				'inputHtmlOptions' => array('size' =>45),
				'errorHtmlOptions' => array()
			),
			'email' => array(
				'labelHtmlOptions' => array(),
				'inputHtmlOptions' => array('size' =>45),
				'errorHtmlOptions' => array()
			),
			'subject' => array(
				'labelHtmlOptions' => array(),
				'inputHtmlOptions' => array('size' =>45),
				'errorHtmlOptions' => array()
			),
			'body' => array(
				'labelHtmlOptions' => array(),
				'inputHtmlOptions' => array(),
				'errorHtmlOptions' => array()
			),
		);
	}
	
	public function init()
	{
		if(!isset($this->actionPrefix))
		{
			$this->actionPrefix = 'contactUs.';
		}
		
		if(!isset($this->model))
		{
			$this->model = new ContactUs();
		}
		
		if(is_string($this->captcha) || is_array($this->captcha))
		{
			$this->captcha = Yii::createComponent($this->captcha);
		}
		
		$this->options = array_merge_recursive($this->getDefaultOptions(), $this->options);
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir))
		{
			$assetsUrl = Yii::app()->getAssetManager()->publish($assetsDir);
			$cs = Yii::app()->getClientScript();
			$cs->registerScriptFile("$assetsUrl/scripts/jquery.loadJSON.js");
			$cs->registerScriptFile("$assetsUrl/scripts/jquery.contactus.js");
		}
	}

	// function to run the widget
	public function run()
	{
		if(!$this->captcha instanceof CUCaptcha)
		{
			throw new CException(Yii::t(self::ID, 'LDContactUsWidget.captcha must be an instance of CUCaptcha. Please check your configuration.'));
		}
		return $this->render(
			'contact',
			array_merge(
				$this->options, 
				array(
					'ContactUs' => $this->model, 
					'Captcha' => $this->captcha
				)
			)
		);
	}

}