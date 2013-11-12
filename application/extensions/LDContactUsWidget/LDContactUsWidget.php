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
	
	public $reCaptchaPrivateKey;

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
				'inputHtmlOptions' => array(),
				'errorHtmlOptions' => array()
			),
			'email' => array(
				'labelHtmlOptions' => array(),
				'inputHtmlOptions' => array(),
				'errorHtmlOptions' => array()
			),
			'subject' => array(
				'labelHtmlOptions' => array(),
				'inputHtmlOptions' => array(),
				'errorHtmlOptions' => array()
			),
			'body' => array(
				'labelHtmlOptions' => array(),
				'inputHtmlOptions' => array(),
				'errorHtmlOptions' => array()
			),
			'reCaptcha' => array(
				'show' => true,
				'options' => array('publicKey' => Yii::app()->params['reCaptcha']['publicKey']),
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
		
		if(!isset($this->reCaptchaPrivateKey))
		{
			$this->reCaptchaPrivateKey = Yii::app()->params['reCaptcha']['privateKey'];
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
		return $this->render(
			'contact',
			array_merge(
				$this->options, 
				array(
					'ContactUs' => $this->model, 
					'EReCaptchaForm' => Yii::createComponent('ext.recaptcha.EReCaptchaForm', $this->reCaptchaPrivateKey, $this->getController())
				)
			)
		);
	}

}