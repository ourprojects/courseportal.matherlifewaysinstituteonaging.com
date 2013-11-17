<?php
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'language-details',
			'data' => $model,
			'attributes' => array(
				'id',
				'code',
				'name',
				array(
					'name' => 'isAccepted',
					'type' => 'boolean'
				),
				array(
					'name' => 'isMissingTranslations',
					'type' => 'boolean'
				)
			),
		)
);
echo CHtml::button(
	TranslateModule::t('Delete'),
	array('onClick' =>  'if(confirm("'.TranslateModule::t('Are you certain that you would like to delete this language as well as all associated messages, translations, and views?').'")){document.location.href = "'.Yii::app()->getController()->createUrl('language/delete', array('id' => $model->id)).'";}')
);
?>