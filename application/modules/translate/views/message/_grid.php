<?php
$this->widget('zii.widgets.grid.CGridView', 
		array(
			'id' => 'message-grid', 
			'filter' => $filter,
			'dataProvider' => $dataProvider,
			'columns' => array(
							'language',
							array(
									'name' => 'translation',
									'htmlOptions' => array('width' => '700'),
							),
							array(
									'class' => 'CButtonColumn',
									'template' => '{update}{delete}',
									'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/update", array("id" => $data->id, "languageId" => $data->language))',
									'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language))',
							)
						),
		)
);
?>