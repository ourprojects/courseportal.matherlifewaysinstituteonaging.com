<?php
Yii::app()->getClientScript()->registerCss('view-details-table-width', 'table#view-details{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'route-details',
			'data' => $model,
			'attributes' => array(
				'id',
				array(
					'name' => 'route',
					'template' => "<tr class=\"{class}\"><th>{label}</th><td style=\"word-wrap:break-word;word-break:break-all;\">{value}</td></tr>\n"
				),
			),
		)
);
echo CHtml::button(
	TranslateModule::t('Delete'),
	array('onClick' => 'if(confirm("'.TranslateModule::t('Are you certain that you would like to delete this route as well as all associated source views and view translations?').'")){document.location.href = "'.Yii::app()->getController()->createUrl('route/delete', array('id' => $model->id)).'";}')
);
?>