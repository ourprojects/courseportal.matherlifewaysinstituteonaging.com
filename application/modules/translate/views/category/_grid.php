<?php
Yii::app()->getClientScript()->registerCss('category-grid-table-width', 'div#category-grid table.items{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => 'category-grid',
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
					'deleteConfirmation' => TranslateModule::t('All messages and their translations will be delete for this category! Are you absolutely sure that you would like to delete this message category, as well as all of the messages and translations in it?')
				)
			),
		)
);
?>