<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'view-detailed-grid',
				'filter' => $model,
				'dataProvider' => $model->with('routeCount', 'messageCount', 'viewCount', 'translationCount')->search(),
				'columns' => array(
						'id',
						'relativePath',
						'routeCount',
						'messageCount',
						'translationCount',
						array(
								'header' => TranslateModule::t('Compiled Count'),
								'name' => 'viewCount',
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{view}{delete}',
								'viewButtonLabel' => TranslateModule::t('View Details'),
								'viewButtonUrl' => 'Yii::app()->getController()->createUrl("view/view", array("id" => $data->id))',
								'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("view/delete", array("id" => $data->id))',
						)
				),
		)
);
?>