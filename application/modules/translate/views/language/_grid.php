<?php
$buttonConfig = array(
	'class' => 'CButtonColumn',
	'viewButtonLabel' => TranslateModule::t('View Translations'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("Language" => array("id" => $data->id), "dryRun" => 0))',
	'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this language as well as all associated messages, translations, and views?'),
	'afterDelete' => 'function(link, success, data){if(success){alert($.parseJSON(data).message);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
);

if(isset($messageId) || isset($viewId) || isset($categoryId) || isset($routeId))
{
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['buttons'] = array(
		'update' => array(
			'label' => TranslateModule::t('Create Translation'),
		)
	);
	if(isset($messageId))
	{
		$buttonConfig['buttons']['update']['url'] = '$this->grid->getOwner()->createUrl("message/view", array("id" => '.$messageId.', "languageId" => $data->id))';
		$buttonConfig['buttons']['update']['click'] = 'function(){'.
				'$("div#message-create-form").tMessageForm("open", $(this).attr("href"));'.
				'return false;'.
			'}';
	}
	else if(isset($viewId))
	{
		$buttonConfig['buttons']['update']['url'] = '$this->grid->getOwner()->createUrl("viewSource/translate", array("ViewSource" => array("id" => '.$viewId.'), "Language" => array("id" => $data->id), "dryRun" => 0))';
	}
	else if(isset($categoryId))
	{
		$buttonConfig['buttons']['update']['url'] = '$this->grid->getOwner()->createUrl("messageSource/translate", array("scopes" => array("category" => array("id" => '.$categoryId.')), "Language" => array("id" => $data->id), "dryRun" => 0))';
	}
	else if(isset($routeId))
	{
		$buttonConfig['buttons']['update']['url'] = '$this->grid->getOwner()->createUrl("viewSource/translate", array("scopes" => array("route" => array("id" => '.$routeId.')), "Language" => array("id" => $data->id), "dryRun" => 0))';
	}
}
else
{
	$buttonConfig['template'] = '{view}{delete}';
}
Yii::app()->getClientScript()->registerCss($id.'-table-width', 'div#'.$id.' table.items{min-width:100%;width:100%;max-width:100%;}');
$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->with('acceptedLanguage')->search(),
			'selectableRows' => 10,
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