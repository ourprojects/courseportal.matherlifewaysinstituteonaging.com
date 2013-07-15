<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'language-grid',
				'filter' => $model,
				'dataProvider' => $model->with('acceptedLanguage')->search(),
				'columns' => array(
						'id',
						'code',
						array(
								'name' => 'name',
								'filter' => '',
								'sortable' => false
						),
						array(
								'name' => 'isAccepted',
								'type' => 'boolean',
								'filter' => '',
								'sortable' => false
						),
						array(
								'header' => TranslateModule::t('Missing Translations?'),
								'type' => 'boolean',
								'value' => '$data->isMissingTranslations()',
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{view}{delete}',
								'viewButtonLabel' => TranslateModule::t('View Translations'),
								'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
								'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
						)
				)
		)
);
?>