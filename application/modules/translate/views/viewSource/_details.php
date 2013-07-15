<?php
$this->widget('zii.widgets.CDetailView',
		array(
				'id' => 'viewSource-details',
				'data' => $model,
				'attributes' => array(
						'id',
						'path',
				),
		)
);
?>