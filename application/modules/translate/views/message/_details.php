<?php
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'message-details',
			'data' => $model,
			'attributes' => array(
				'id',
				'source.message',
				'language',
				'translation',
				'lastModifiedDate'
			),
		)
);
echo CHtml::button(
	TranslateModule::t('Delete'),
	array('onClick' => 'if(confirm("'.TranslateModule::t('Are you certain that you would like to delete this message?').'")){document.location.href = "'.Yii::app()->getController()->createUrl('message/delete', array('id' => $model->id, 'languageId' => $model->language_id)).'";}')
);
?>