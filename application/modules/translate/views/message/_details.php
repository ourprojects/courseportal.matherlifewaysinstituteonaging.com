<?php
$this->widget('zii.widgets.CDetailView',
		array(
				'id' => 'message-details',
				'data' => $model,
				'attributes' => array(
						'id',
						'source.message',
						'language',
						'translation',
				),
		)
);
?>