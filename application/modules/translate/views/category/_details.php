<?php
$this->widget('zii.widgets.CDetailView',
		array(
				'id' => 'category-details',
				'data' => $model,
				'attributes' => array(
						'id',
						'category',
				),
		)
);
?>