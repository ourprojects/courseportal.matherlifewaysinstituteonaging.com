<?php
Yii::app()->getClientScript()->registerCss('view-details-table-width', 'table#view-details{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'view-details',
			'data' => $model,
			'attributes' => array(
				'id',
				'language',
				'createdDate',
				array(
					'name' => 'path',
					'template' => "<tr class=\"{class}\"><th>{label}</th><td style=\"word-wrap:break-word;word-break:break-all;\">{value}</td></tr>\n"
				),
				array(
					'name' => 'sourceView.path',
					'template' => "<tr class=\"{class}\"><th>{label}</th><td style=\"word-wrap:break-word;word-break:break-all;\">{value}</td></tr>\n"
				),
			),
		)
);
echo CHtml::button(
	TranslateModule::t('Delete'),
	array('onClick' => 'if(confirm("'.TranslateModule::t('Are you certain that you would like to delete this view?').'")){document.location.href = "'.Yii::app()->getController()->createUrl('view/delete', array('id' => $model->id, 'languageId' => $model->language_id)).'";}')
);
?>