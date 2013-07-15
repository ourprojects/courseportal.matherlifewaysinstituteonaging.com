<?php
if(isset($languageId))
{
	$id = 'missingMessageSource-grid';
	$buttonConfig = array(
			'class' => 'CButtonColumn',
			'template' => '{view}{update}{delete}',
			'viewButtonLabel' => TranslateModule::t('View Translations'),
			'viewButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/view", array("id" => $data->id))',
			'updateButtonLabel' => TranslateModule::t('Create Translation'),
			'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => $data->id, "languageId" => '.$languageId.'))',
			'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/delete", array("id" => $data->id))',
	);
}
else
{
	$id = 'messageSource-grid';
	$buttonConfig = array(
			'class' => 'CButtonColumn',
			'template' => '{view}{delete}',
			'viewButtonLabel' => TranslateModule::t('View Translations'),
			'viewButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/view", array("id" => $data->id))',
			'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("messageSource/delete", array("id" => $data->id))',
	);
}
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => $id,
				'filter' => $model,
				'dataProvider' => $model->with('categories')->search(),
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
						$buttonConfig
				)
		)
);
?>