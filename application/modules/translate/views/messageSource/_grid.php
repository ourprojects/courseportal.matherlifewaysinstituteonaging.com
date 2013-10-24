<?php
$relatedGrids = array(isset($languageId) ? 'messageSource-grid' : 'missingMessageSource-grid', 'message-grid');
$buttonConfig = array(
	'class' => 'CButtonColumn',
	'viewButtonLabel' => TranslateModule::t('View Translations'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/delete", array("id" => $data->id))',
	'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this source message as well as all translations of this message?'),
	'afterDelete' => 'function(link, success, data){if(success){$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
);
if(isset($languageId))
{
	$id = 'missingMessageSource-grid';
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['buttons'] = array(
		'update' => array(
			'label' => TranslateModule::t('Create Translation'),
			'url' => '$this->grid->getOwner()->createUrl("message/view", array("id" => $data->id, "languageId" => '.$languageId.'))',
			'click' => 'function(){'.
							'$("div#message-create-form").tMessageForm("open", $(this).attr("href"));'.
							'return false;'.
						'}'
		)
	);
}
else
{
	$id = 'messageSource-grid';
	$buttonConfig['template'] = '{view}{delete}';
}
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->with('categories')->search(),
			'selectableRows' => 0,
			'columns' => array(
				'id',
				array(
					'header' => TranslateModule::t('Categories'),
					'type' => 'html',
					'value' => 'implode("<br />", array_map(create_function(\'&$val\', \'return "<a href=\"".Yii::app()->getController()->createUrl("category/view", array("id" => $val->id))."\" title=\"".$val->category."\">".$val->category;\'), $data->categories))',
				),
				array(
					'name' => 'sourceLanguage',
					'filter' => '',
					'sortable' => false
				),
				'message',
				$buttonConfig
			)
		)
);
if(isset($languageId))
{
	$this->renderPartial(
		'../message/view', 
		array(
			'id' => 'message-create-form', 
			'Message' => new Message, 
			'MessageSource' => new MessageSource,
			'clientOptions' => array(
				'submitSuccess' => 'js:function($dialog, $form, data){$("#'.$id.'").yiiGridView("update");$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");return true;}'
			)
		)
	);
}
?>