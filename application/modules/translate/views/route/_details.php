<?php
$this->widget('zii.widgets.CDetailView',
		array(
				'id' => 'route-details',
				'data' => $model,
				'attributes' => array(
						'id',
						'route',
				),
		)
);
?>