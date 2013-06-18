<?php
$this->widget('zii.widgets.grid.CGridView', 
		array(
			'id' => 'category-detailed-grid', 
			'filter' => $filter,
			'dataProvider' => $dataProvider,
			'columns' => array(
							'id',
							'category',
					        'messageCount',
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