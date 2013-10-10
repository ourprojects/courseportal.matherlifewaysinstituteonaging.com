<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class GoogleTranslateAjaxButton extends CWidget
{

	const ID = 'GoogleTranslateAjaxButton';

	public $label = 'Google Translate';

	public $message;

	public $targetLanguage;

	public $sourceLanguage;

	public $target;

	public $ajaxOptions = array();

	public $htmlOptions = array();

	public function init()
	{
		// publish assets
		$assetsDir = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		if(is_dir($assetsDir))
		{
			$assetsUrl = Yii::app()->assetManager->publish($assetsDir);
			Yii::app()->getClientScript()->registerCssFile("$assetsUrl/googleTranslate.css");
		}
		else
		{
			throw new CException(Yii::t(
					self::ID,
					self::ID.' - Error: Couldn\'t find assets to publish. Please make sure the directory exists and is readable {dir_name}',
					array('{dir_name}' => $assetsDir))
			);
		}

		if(!isset($this->sourceLanguage))
			$this->sourceLanguage = Yii::app()->sourceLanguage;

		if(!isset($this->targetLanguage))
			$this->targetLanguage = Yii::app()->getLanguage();

		if(!isset($this->target))
			$this->target = $this->getId();

		// Set required ajax options unless already specified
		$this->ajaxOptions = CMap::mergeArray(
				array(
					'data' => array(
						'message' => $this->message,
						'targetLanguage' => $this->targetLanguage,
						'sourceLanguage' => $this->sourceLanguage,
					),
					'beforeSend' => 'js:function(jqXHR, settings){$("'.$this->target.'").addClass("googleTranslating");}',
					'complete' => 'js:function(jqXHR, textStatus){$("'.$this->target.'").removeClass("googleTranslating");}',
					'success' => 'js:function(data){alert(data);}',
					'error' => 'js:function(xhr){alert(xhr.responseText);}'
				),
				$this->ajaxOptions
		);
	}

	public function run()
	{
		if(TranslateModule::translator()->canUseGoogleTranslate())
		{
			echo CHtml::ajaxButton(
					TranslateModule::t($this->label),
					$this->getController()->createUrl('/translate/translate/googleTranslate'),
					$this->ajaxOptions,
					$this->htmlOptions
			);
		}
	}

}
?>