<?php
Yii::app()->getClientScript()->registerCss('category-grid-table-width', 'div#category-grid table.items{min-width:100%;width:100%;max-width:100%;}');
$relatedGrids = array('messageSource-grid', 'message-grid', 'missingLanguage-grid', 'missingMessageSource-grid');
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->search(),
			'selectableRows' => 0,
			'columns' => array(
				'id',
				array(
					'name' => 'category',
					'htmlOptions' => array('style' => 'word-wrap:break-word;word-break:break-all;'),
				),
				array(
					'class' => 'CButtonColumn',
					'template' => '{view}{delete}',
					'viewButtonLabel' => TranslateModule::t('View Details'),
					'viewButtonUrl' => 'Yii::app()->getController()->createUrl("category/view", array("id" => $data->id))',
					'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("category/delete", array("id" => $data->id))',
					'deleteConfirmation' => TranslateModule::t('You are about to delete this category and all associated source messages and translations! Are you sure you would like to continue?'),
					'afterDelete' => 'function(link, success, data){if(success){alert(data);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
				)
			),
		)
);
?>