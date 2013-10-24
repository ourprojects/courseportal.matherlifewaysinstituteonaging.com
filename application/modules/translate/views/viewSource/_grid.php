<?php
$relatedGrids = array('view-grid');
Yii::app()->getClientScript()->registerCss('viewSource-grid-table-width', 'div#viewSource-grid table.items{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => 'viewSource-grid',
			'filter' => $model,
			'dataProvider' => $model->search(),
			'selectableRows' => 0,
			'columns' => array(
				'id',
				array(
					'name' => 'path',
					'htmlOptions' => array('style' => 'word-wrap:break-word;word-break:break-all;'),
				),
				array(
					'class' => 'CButtonColumn',
					'template' => '{view}{delete}',
					'viewButtonLabel' => TranslateModule::t('View Details'),
					'viewButtonUrl' => 'Yii::app()->getController()->createUrl("viewSource/view", array("id" => $data->id))',
					'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("viewSource/delete", array("id" => $data->id))',
					'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this source as well as all translations of this view?'),
					'afterDelete' => 'function(link, success, data){if(success){$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
				)
			),
		)
);
?>