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
?>