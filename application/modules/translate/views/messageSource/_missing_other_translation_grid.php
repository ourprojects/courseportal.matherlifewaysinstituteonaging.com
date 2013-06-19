<?php 
$this->widget('zii.widgets.grid.CGridView', 
		array(
			'id' => 'messageSource-other-translations-grid', 
			'filter' => $model,
			'dataProvider' => $model->search(),
			'columns' => array(
							'language',
							array(
								'class' => 'CButtonColumn',
								'template' => '{update}',
								'updateButtonLabel' => TranslateModule::t('Create Translation'),
								'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => '.$sourceId.', "languageId" => $data->language))',
							)
						),
		)
);
?>