<?php
Yii::app()->getClientScript()->registerCss('category-details-table-width', 'table#category-details{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'category-details',
			'data' => $model,
			'attributes' => array(
				'id',
				array(
					'name' => 'category',
					'template' => "<tr class=\"{class}\"><th>{label}</th><td style=\"word-wrap:break-word;word-break:break-all;\">{value}</td></tr>\n"
				),
			),
		)
);
echo CHtml::button(
	TranslateModule::t('Delete'),
	array('onClick' => 'if(confirm("'.TranslateModule::t('You are about to delete this category and all associated source messages and translations! Are you sure you would like to continue?').'")){document.location.href = "'.Yii::app()->getController()->createUrl('category/delete', array('id' => $model->id)).'";}')
);
?>