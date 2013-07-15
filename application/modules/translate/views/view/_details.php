<?php
$this->widget('zii.widgets.CDetailView',
		array(
				'id' => 'view-details',
				'data' => $model,
				'attributes' => array(
						'id',
						'language',
						'created',
						'path',
						'sourceView.path',
				),
		)
);
?>