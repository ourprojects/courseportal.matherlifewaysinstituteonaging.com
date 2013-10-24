<?php
$relatedGrids = array('missingMessageSource-grid', 'missingLanguage-grid', 'language-grid');
$this->widget('zii.widgets.grid.CGridView',
	array(
		'id' => 'message-grid',
		'filter' => $model,
		'dataProvider' => $model->with(array('source', 'language'))->search(),
		'selectableRows' => 0,
		'columns' => array(
			'id',
			array(
				'name' => 'language',
				'filter' => '',
				'sortable' => false
			),
			'translation',
			array(
				'class' => 'CButtonColumn',
				'template' => '{update}{delete}',
				'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language_id))',
				'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this message?'),
				'afterDelete' => 'function(link, success, data){if(success){$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}',
				'buttons' => array(
					'update' => array(
						'label' => TranslateModule::t('Update'),
						'url' => '$this->grid->getOwner()->createUrl("message/view", array("id" => $data->id, "languageId" => $data->language_id));',
						'click' => 'function(){'.
							'$("div#message-update-form").tMessageForm("open", $(this).attr("href"));'.
							'return false;'.
						'}',
					),
				)
			)
		),
	)
);

$this->renderPartial(
	'../message/view', 
	array(
		'Message' => new Message, 
		'MessageSource' => new MessageSource, 
		'id' => 'message-update-form', 
		'clientOptions' => array(
			'submitSuccess' => 'js:function($dialog, $form, data){$("#message-grid").yiiGridView("update");$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");return true;}'
		)
	)
);
?>