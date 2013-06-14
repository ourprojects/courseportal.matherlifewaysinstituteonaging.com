<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => 'language-missing-grid',
			'filter' => $filter,
			'dataProvider' => $dataProvider,
			'columns' => array(
				'id',
				'category',
				array(
						'name' => 'message',
						'htmlOptions' => array('width' => '600'),
				),
				array(
						'class' => 'CButtonColumn',
						'template' => '{update}',
						'updateButtonLabel' => TranslateModule::t('Create Translation'),
						'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => $data->id, "languageId" => "'.$source->id.'"))',
				)
			)
		)
);
?>