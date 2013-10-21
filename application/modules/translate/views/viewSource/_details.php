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
			),
		)
);
?>