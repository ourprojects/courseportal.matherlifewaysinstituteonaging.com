<?php
$this->widget('zii.widgets.grid.CGridView', array(
		'id' => 'apiKey-grid',
		'dataProvider' => $model->search(),
		'filter' => $model,
		'columns' => array(
				'id',
				array(
						'class' => 'CButtonColumn',
						'template' => '{delete}',
						'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("/admin/apiKey/delete", array("id" => $data->id))',
				)
		),
));
?>