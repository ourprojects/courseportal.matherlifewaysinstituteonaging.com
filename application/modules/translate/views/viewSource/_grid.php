<?php
Yii::app()->getClientScript()->registerCss($id.'-table-width', 'div#'.$id.' table.items{min-width:100%;width:100%;max-width:100%;}');

$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->search(),
			'selectableRows' => 10,
			'columns' => array(
				array(
					'name' => 'id',
					'header' => $model->getAttributeLabel('id')
				),
				array(
					'name' => 'path',
					'htmlOptions' => array('style' => 'word-wrap:break-word;word-break:break-all;'),
					'header' => $model->getAttributeLabel('path')
				),
				array(
					'name' => 'isReadable',
					'type' => 'boolean',
					'filter' => array(false => TranslateModule::t('No'), true => TranslateModule::t('Yes')),
					'header' => $model->getAttributeLabel('isReadable')
				),
				array(
					'class' => 'CButtonColumn',
					'template' => '{view}{delete}',
					'viewButtonLabel' => TranslateModule::t('View Details'),
					'viewButtonUrl' => 'Yii::app()->getController()->createUrl("viewSource/view", array("id" => $data["id"]))',
					'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("viewSource/delete", array("ViewSource" => array("id" => $data["id"])))',
					'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this source view as well as all associated view translations?'),
					'afterDelete' => 'function(link, success, data){if(success){alert(data);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
				)
			),
		)
);
?>