<?php
$relatedGrids = array();
Yii::app()->getClientScript()->registerCss($id.'-table-width', 'div#'.$id.' table.items{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->with('language')->search(),
			'selectableRows' => 0,
			'columns' => array(
				'id',
				array(
					'name' => 'path',
					'htmlOptions' => array('style' => 'word-wrap:break-word;word-break:break-all;'),
				),
				array(
					'name' => 'language',
					'filter' => '',
					'sortable' => false
				),
				'created',
				array(
					'class' => 'CButtonColumn',
					'template' => '{view}{delete}',
					'viewButtonLabel' => TranslateModule::t('View Details'),
					'viewButtonUrl' => 'Yii::app()->getController()->createUrl("view/view", array("id" => $data->id, "languageId" => $data->language_id))',
					'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("view/delete", array("id" => $data->id, "languageId" => $data->language_id))',
					'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this view?'),
					'afterDelete' => 'function(link, success, data){if(success){alert(data);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
				)
			),
		)
);
?>