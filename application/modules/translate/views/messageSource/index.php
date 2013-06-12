<?php $this->breadcrumbs = array(TranslateModule::t('Messages')); ?>
<?php
$widget = $this->widget('translate.widgets.PersistentGridView', 
		array(
				'id' => 'messageSource-index-message-grid', 
				'filter' => $sources,
				'dataProvider' => new CActiveDataProvider($sources, array('criteria' => $sources->search()->getDbCriteria())),
				'columns' => array(
								array(
						            'name' => 'id',
									'htmlOptions' => array('width' => '30'),
						        ),
								array(
									'header' => TranslateModule::t('Categories'),
									'type' => 'html',
									'value' => 'implode("<br />", array_map(create_function(\'&$val\', \'return "<a href=\"".Yii::app()->getController()->createUrl("category/view", array("id" => $val->id))."\" title=\"".$val->category."\">".$val->category;\'), $data->categories))',
									'htmlOptions' => array('width' => '150'),
								),
						        array(
						            'name' => 'message',
						        	'htmlOptions' => array('width' => '400'),
						        ),
								array(
									'header' => TranslateModule::t('Missing Translation'),
									'type' => 'boolean',
									'value' => '$data->isMissingTranslations()',
									'htmlOptions' => array('width' => '25'),
								),
						        array(
						            'class' => 'CButtonColumn',
						            'template' => '{view}{delete}',
						        	'viewButtonLabel' => TranslateModule::t('View Translations'),
						        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/view", array("id" => $data->id))',
						            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/delete", array("id" => $data->id))',
						        )
							)
	)
); 

if(TranslateModule::translator()->canUseGoogleTranslate()) {
	foreach($widget->dataProvider->getData() as $item)
	{
		if($item->isMissingTranslations())
		{
			echo CHtml::ajaxButton(
					TranslateModule::t('Google Translate Missing'),
					$this->createUrl('messageSource/translateMissing'),
					array(
							'beforeSend' => 'js:function(jqXHR, settings){$("#missingTranslations").addClass("loading");}',
							'complete' => 'js:function(jqXHR, textStatus){$("#missingTranslations").removeClass("loading");}',
							'success' => 'js:function(data){alert(data);$.fn.yiiGridView.update("source-grid");}',
							'error' => 'js:function(xhr){alert(xhr.responseText);}'
					),
					array('id' => 'missingTranslations')
			);
			break;
		}
	}
}
?>