<?php
$relatedGrids = array(isset($messageId) ? 'language-grid' : 'missingLanguage-grid', 'missingMessageSource-grid', 'message-grid');
$buttonConfig = array(
	'class' => 'CButtonColumn',
	'viewButtonLabel' => TranslateModule::t('View Translations'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
	'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this language as well as all messages and views associated with this language?'),
	'afterDelete' => 'function(link, success, data){if(success){$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
);

if(isset($messageId))
{
	$id = 'missingLanguage-grid';
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['buttons'] = array(
		'update' => array(
			'label' => TranslateModule::t('Create Translation'),
			'url' => '$this->grid->getOwner()->createUrl("message/view", array("id" => '.$messageId.', "languageId" => $data->id))',
			'click' => 'function(){'.
							'$("div#message-create-form").tMessageForm("open", $(this).attr("href"));'.
							'return false;'.
						'}'
		)
	);
}
else
{
	$id = isset($id) ? $id : 'language-grid';
	$buttonConfig['template'] = '{view}{delete}';
}
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->with('acceptedLanguage')->search(),
			'selectableRows' => 0,
			'columns' => array(
				'id',
				'code',
				array(
					'name' => 'name',
					'filter' => '',
					'sortable' => false
				),
				$buttonConfig
			)
		)
);
if(isset($messageId))
{
	$this->renderPartial(
		'../message/view', 
		array(
			'id' => 'message-create-form', 
			'Message' => new Message, 
			'MessageSource' => new MessageSource,
			'clientOptions' => array(
				'submitSuccess' => 'js:function($dialog, $form, data){$("#'.$id.'").yiiGridView("update");$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");return true;}'
			)
		)
	);
}
?>