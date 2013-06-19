<?php
$this->widget('zii.widgets.grid.CGridView', 
		array(
				'id' => 'messageSource-detailed-grid', 
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
?>