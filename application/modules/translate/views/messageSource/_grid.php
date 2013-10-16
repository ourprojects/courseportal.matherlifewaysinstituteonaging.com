<?php
$buttonConfig = array(
	'class' => 'CButtonColumn',
	'viewButtonLabel' => TranslateModule::t('View Translations'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/delete", array("id" => $data->id))',
	'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this source message as well as all translations of this message?')
);
if(isset($languageId))
{
	$id = 'missingMessageSource-grid';
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['updateButtonLabel'] = TranslateModule::t('Create Translation');
	$buttonConfig['updateButtonUrl'] = 'Yii::app()->getController()->createUrl("message/create", array("id" => $data->id, "languageId" => '.$languageId.'))';
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
				array(
					'name' => 'id',
				),
				array(
					'header' => TranslateModule::t('Categories'),
					'type' => 'html',
					'value' => 'implode("<br />", array_map(create_function(\'&$val\', \'return "<a href=\"".Yii::app()->getController()->createUrl("category/view", array("id" => $val->id))."\" title=\"".$val->category."\">".$val->category;\'), $data->categories))',
				),
				array(
					'name' => 'message',
				),
				$buttonConfig
			)
		)
);
?>