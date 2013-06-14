<?php
$this->widget('zii.widgets.grid.CGridView', 
		array(
			'id' => 'language-accepted-grid', 
			'dataProvider' => new CActiveDataProvider($acceptedLanguages, array('criteria' => $acceptedLanguages->search()->getDbCriteria())),
			'filter' => $acceptedLanguages,
			'columns' => array(
	        	'id',
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