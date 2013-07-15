<?php
$this->widget('zii.widgets.CDetailView',
		array(
				'id' => 'language-details',
				'data' => $model,
				'attributes' => array(
						'id',
						'code',
						'name'
				),
		)
);
?>