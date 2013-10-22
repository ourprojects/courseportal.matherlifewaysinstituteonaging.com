<?php
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
				'buttons' => array(
					'update' => array(
						'label' => TranslateModule::t('Update'),
						'url' => '$this->grid->getOwner()->createUrl("message/update", array("id" => $data->id, "languageId" => $data->language_id));',
						'click' => 'function(){'.
							'$("div#messageForm").tMessageForm("load", $(this).attr("href"));'.
							'$("div#message-form-dialog").dialog("open");'.
							'return false;'.
						'}',
					),
				)
			)
		),
	)
);

$this->renderPartial('../message/view', array('Message' => new Message, 'MessageSource' => new MessageSource));
?>