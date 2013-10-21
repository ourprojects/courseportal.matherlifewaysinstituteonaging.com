<?php
Yii::app()->getClientScript()->registerCss('view-details-table-width', 'table#view-details{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.CDetailView',
		array(
			'id' => 'view-details',
			'data' => $model,
			'attributes' => array(
				'id',
				'language',
				'created',
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
?>