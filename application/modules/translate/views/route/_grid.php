<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'route-grid',
				'filter' => $model,
				'dataProvider' => $model->search(),
				'columns' => array(
						'id',
						'route',
						array(
								'class' => 'CButtonColumn',
								'template' => '{view}{delete}',
								'viewButtonLabel' => TranslateModule::t('View Details'),
								'viewButtonUrl' => 'Yii::app()->getController()->createUrl("route/view", array("id" => $data->id))',
								'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("route/delete", array("id" => $data->id))',
						)
				),
		)
);
?>