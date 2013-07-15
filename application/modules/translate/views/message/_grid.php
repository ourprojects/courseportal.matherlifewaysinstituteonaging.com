<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'message-grid',
				'filter' => $model,
				'dataProvider' => $model->with(array('source', 'language'))->search(),
				'columns' => array(
						array(
								'name' => 'source',
								'filter' => '',
								'sortable' => false
						),
						array(
								'name' => 'language',
								'filter' => '',
								'sortable' => false
						),
						'translation',
						array(
								'class' => 'CButtonColumn',
								'template' => '{update}{delete}',
								'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/update", array("id" => $data->id, "languageId" => $data->language_id))',
								'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language_id))',
						)
				),
		)
);
?>