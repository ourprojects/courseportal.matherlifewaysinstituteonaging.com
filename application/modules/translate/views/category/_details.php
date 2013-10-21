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
?>