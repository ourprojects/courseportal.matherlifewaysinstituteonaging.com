<?php
if(isset($messageId))
{
	$id = 'missingLanguage-grid';
	$buttonConfig = array(
			'class' => 'CButtonColumn',
			'template' => '{view}{update}{delete}',
			'viewButtonLabel' => TranslateModule::t('View Translations'),
			'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
			'updateButtonLabel' => TranslateModule::t('Create Translation'),
			'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => '.$messageId.', "languageId" => $data->id))',
			'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
	);
}
else
{
	$id = 'language-grid';
	$buttonConfig = array(
			'class' => 'CButtonColumn',
			'template' => '{view}{delete}',
			'viewButtonLabel' => TranslateModule::t('View Translations'),
			'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
			'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
	);
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