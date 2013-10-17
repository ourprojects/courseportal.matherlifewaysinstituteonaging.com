<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => 'message-grid',
			'filter' => $model,
			'dataProvider' => $model->with(array('source', 'language'))->search(),
			'selectableRows' => 0,
			'columns' => array(
				'id',
				array(
					'name' => 'language',
					'filter' => '',
					'sortable' => false
				),
				'translation',
				array(
					'class' => 'CButtonColumn',
					'template' => '{update}{delete}',
					'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/update", array("id" => $data->id, "languageId" => $data->language_id))',
					'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language_id))',
					'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this message?')
				)
			),
		)
);
?>