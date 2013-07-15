<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'language-missing-grid',
				'filter' => $model,
				'dataProvider' => $model->with('categories')->search(),
				'columns' => array(
						'id',
						array(
								'header' => TranslateModule::t('Categories'),
								'type' => 'html',
								'value' => 'implode("<br />", array_map(create_function(\'&$val\', \'return "<a href=\"".Yii::app()->getController()->createUrl("category/view", array("id" => $val->id))."\" title=\"".$val->category."\">".$val->category;\'), $data->categories))',
								'htmlOptions' => array('width' => '150'),
						),
						array(
								'name' => 'message',
								'htmlOptions' => array('width' => '600'),
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{update}',
								'updateButtonLabel' => TranslateModule::t('Create Translation'),
								'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => $data->id, "languageId" => "'.$languageId.'"))',
						)
				)
		)
);
?>