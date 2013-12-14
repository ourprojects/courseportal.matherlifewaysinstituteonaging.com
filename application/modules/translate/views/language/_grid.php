<?php
$buttonConfig = array(
	'class' => 'CButtonColumn',
	'viewButtonLabel' => TranslateModule::t('View Translations'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("language/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("language/delete", array("id" => $data->id))',
	'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this language as well as all associated messages, translations, and views?'),
	'afterDelete' => 'function(link, success, data){if(success){alert(data);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
);

if(isset($messageId) || isset($viewId))
{
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['buttons'] = array(
		'update' => array(
			'label' => TranslateModule::t('Create Translation'),
			'url' => isset($messageId) ? '$this->grid->getOwner()->createUrl("message/view", array("id" => '.$messageId.', "languageId" => $data->id))' : '$this->grid->getOwner()->createUrl("view/view", array("id" => '.$viewId.', "languageId" => $data->id))',
			'click' => 'function(){'.
							'$("div#message-create-form").tMessageForm("open", $(this).attr("href"));'.
							'return false;'.
						'}'
		)
	);
	if(isset($messageId))
	{
		$buttonConfig['buttons']['url'] = '$this->grid->getOwner()->createUrl("message/view", array("id" => '.$messageId.', "languageId" => $data->id))';
		$buttonConfig['buttons']['click'] = 'function(){'.
				'$("div#message-create-form").tMessageForm("open", $(this).attr("href"));'.
				'return false;'.
			'}';
	}
	else
	{
		$buttonConfig['buttons']['url'] = '$this->grid->getOwner()->createUrl("view/compile", array("id" => '.$viewId.', "languageId" => $data->id))';
		$buttonConfig['buttons']['click'] = 'function(){'.
				'$("div#view-compile-form").tViewCompileForm("open", $(this).attr("href"));'.
				'return false;'.
			'}';
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
else if(isset($viewId))
{
	/*
	 @ TODO 
	 $this->renderPartial(
		'../view/compile', 
		array(
			'id' => 'view-compile-form', 
			'Message' => new Message, 
			'MessageSource' => new MessageSource,
			'clientOptions' => array(
				'submitSuccess' => 'js:function($dialog, $form, data){$("#'.$id.'").yiiGridView("update");$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");return true;}'
			)
		)
	);
	*/
}
?>