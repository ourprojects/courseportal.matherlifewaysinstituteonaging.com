<?php
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'messageSource-details',
			'data' => $model,
			'attributes' => array(
				'id',
				'message',
				array(
					'name' => 'isMissingTranslations',
					'type' => 'boolean'
				)
			),
		)
);
echo CHtml::button(
	TranslateModule::t('Delete'),
	array('onClick' => 'if(confirm("'.TranslateModule::t('Are you certain that you would like to delete this source message as well as all associated translations?').'")){document.location.href = "'.Yii::app()->getController()->createUrl('messageSource/delete', array('id' => $model->id)).'";}')
);
?>