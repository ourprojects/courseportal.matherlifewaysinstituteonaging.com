<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'route-detailed-grid',
				'filter' => $model,
				'dataProvider' => $model->search(),
				'columns' => array(
						'id',
						'route',
						'viewSourceCount',
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