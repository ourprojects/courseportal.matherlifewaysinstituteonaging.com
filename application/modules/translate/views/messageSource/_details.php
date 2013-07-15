<?php
$this->widget('zii.widgets.CDetailView',
		array(
				'id' => 'messageSource-details',
				'data' => $model,
				'attributes' => array(
						'id',
						'message',
						array(
								'name' => 'isMissingTranslations',
								'type' => 'boolean'
						)
				),
		)
);
?>