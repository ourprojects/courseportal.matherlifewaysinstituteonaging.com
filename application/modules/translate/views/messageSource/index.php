<?php $this->breadcrumbs = array(TranslateModule::t('Messages')); ?>
<?php
$dataProvider = new CActiveDataProvider($sources, array('criteria' => $sources->search()->getDbCriteria()));
$this->renderPartial('_detailed_grid', array('filter' => $sources, 'dataProvider' => $dataProvider));

if(TranslateModule::translator()->canUseGoogleTranslate()) {
	foreach($dataProvider->getData() as $item)
	{
		if($item->isMissingTranslations())
		{
			echo CHtml::ajaxButton(
					TranslateModule::t('Google Translate Missing'),
					$this->createUrl('messageSource/translateMissing'),
					array(
							'beforeSend' => 'js:function(jqXHR, settings){$("#missingTranslations").addClass("loading");}',
							'complete' => 'js:function(jqXHR, textStatus){$("#missingTranslations").removeClass("loading");}',
							'success' => 'js:function(data){alert(data);$.fn.yiiGridView.update("messageSource-detailed-grid");}',
							'error' => 'js:function(xhr){alert(xhr.responseText);}'
					),
					array('id' => 'missingTranslations')
			);
			break;
		}
	}
}
?>