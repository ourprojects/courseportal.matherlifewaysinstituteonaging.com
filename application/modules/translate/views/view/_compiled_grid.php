<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'compiled-grid',
				'filter' => $model,
				'dataProvider' => $model->search(),
				'columns' => array(
						'id',
						'relativePath',
						'language',
						'created',
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