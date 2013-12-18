<?php
Yii::app()->getClientScript()->registerCss('viewSource-details-table-width', 'table#viewSource-details{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'viewSource-details',
			'data' => $model,
			'attributes' => array(
				'id',
				array(
					'name' => 'path',
					'template' => "<tr class=\"{class}\"><th>{label}</th><td style=\"word-wrap:break-word;word-break:break-all;\">{value}</td></tr>\n"
				),
				'isReadable:boolean'
			),
		)
);
echo CHtml::button(
	TranslateModule::t('Delete'),
	array('onClick' => 'if(confirm("'.TranslateModule::t('Are you certain that you would like to delete this source view as well as all associated view translations?').'")){document.location.href = "'.Yii::app()->getController()->createUrl('viewSource/delete', array('id' => $model->id)).'";}')
);
?>