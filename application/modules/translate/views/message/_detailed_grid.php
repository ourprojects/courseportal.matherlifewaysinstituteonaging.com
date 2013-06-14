<?php
$this->widget('zii.widgets.grid.CGridView', 
		array(
			'id' => 'message-detailed-grid', 
			'filter' => $filter,
			'dataProvider' => $dataProvider,
			'columns' => array(
							array(
					            'name' => 'id',
								'htmlOptions' => array('width' => '50'),
					        ),
							'source.category',
							array(
								'name' => 'language',
								'htmlOptions' => array('width' => '50'),
							),
					        array(
					            'name' => 'source.message',
					        	'htmlOptions' => array('width' => '300'),
					        ),
							array(
								'name' => 'translation',
								'htmlOptions' => array('width' => '300'),
							),
					        array(
					            'class' => 'CButtonColumn',
					            'template' => '{view}{delete}',
					        	'viewButtonLabel' => TranslateModule::t('View Translations'),
					        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("message/view", array("id" => $data->id, "languageId" => $data->language))',
					            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language))',
					        )
					),
		)
);
?>