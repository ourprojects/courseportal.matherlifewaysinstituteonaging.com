<?php 
$this->widget('zii.widgets.grid.CGridView', 
		array(
			'id' => 'messageSource-accepted-translations-grid', 
			'filter' => $model,
			'dataProvider' => $model->search(),
			'columns' => array(
							array(
								'name' => 'id',
								'header' => TranslateModule::t('Language')
							),
							array(
								'class' => 'CButtonColumn',
								'template' => '{update}',
								'updateButtonLabel' => TranslateModule::t('Create Translation'),
								'updateButtonUrl' => 'Yii::app()->getController()->createUrl("message/create", array("id" => '.$sourceId.', "languageId" => $data->id))',
							)
						)
		)
);
?>