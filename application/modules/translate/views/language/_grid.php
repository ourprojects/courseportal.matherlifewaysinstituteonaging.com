<?php
$buttonConfig = array(
	'class' => 'CButtonColumn',
	'viewButtonLabel' => TranslateModule::t('View Translations'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
	'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this language as well as all messages and views that have been translated to this language?')
);
if(isset($messageId))
{
	$id = 'missingLanguage-grid';
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['updateButtonLabel'] = TranslateModule::t('Create Translation');
	$buttonConfig['updateButtonUrl'] = 'Yii::app()->getController()->createUrl("message/create", array("id" => '.$messageId.', "languageId" => $data->id))';
}
else
{
	$id = 'language-grid';
	$buttonConfig['template'] = '{view}{delete}';
}
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->with('acceptedLanguage')->search(),
			'selectableRows' => 0,
			'columns' => array(
				'id',
				'code',
				array(
					'name' => 'name',
					'filter' => '',
					'sortable' => false
				),
				$buttonConfig
			)
		)
);
?>