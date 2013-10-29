<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class GoogleTranslateAjaxButton extends CWidget
{
	
	public $label = 'Google Translate';

	public $message;
	
	public $messageInputSelector;

	public $targetLanguage;
	
	public $targetLanguageInputSelector;

	public $sourceLanguage;
	
	public $sourceLanguageInputSelector;

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
			throw new CException(TranslateModule::t(
					'{class_name} - Error: Couldn\'t find assets to publish. Please make sure the directory "{dir_name}" exists and is readable.',
					array('{class_name}' => get_class($this), '{dir_name}' => $assetsDir))
			);
		}

		if(!isset($this->sourceLanguageInputSelector) && !isset($this->sourceLanguage))
		{
			$this->sourceLanguage = Yii::app()->sourceLanguage;
		}

		if(!isset($this->targetLanguageInputSelector) && !isset($this->targetLanguage))
		{
			$this->targetLanguage = Yii::app()->getLanguage();
		}
		
		if(!isset($this->messageInputSelector) && !isset($this->message))
		{
			throw new CException(TranslateModule::t('A message must be specified.'));
		}

		if(!isset($this->target))
		{
			$this->target = $this->getId();
		}

		// Set required ajax options unless already specified
		$this->ajaxOptions = CMap::mergeArray(
			array(
				'data' => 'js:(function($){return "message="+'.(isset($this->messageInputSelector) ? '$("'.$this->messageInputSelector.'").val()' : '"'.$this->message.'"')
						.'+"&targetLanguage="+'.(isset($this->targetLanguageInputSelector) ? '$("'.$this->targetLanguageInputSelector.'").val()' : '"'.$this->targetLanguage.'"')
						.'+"&sourceLanguage="+'.(isset($this->sourceLanguageInputSelector) ? '$("'.$this->sourceLanguageInputSelector.'").val()' : '"'.$this->sourceLanguage.'"').';}(jQuery))',
				'beforeSend' => 'js:function(jqXHR, settings){$("'.$this->target.'").addClass("googleTranslating");}',
				'complete' => 'js:function(jqXHR, textStatus){$("'.$this->target.'").removeClass("googleTranslating");}',
				'success' => 'js:function(data){$("'.$this->target.'").val(data);}',
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