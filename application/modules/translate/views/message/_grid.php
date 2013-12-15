<?php
Yii::app()->getClientScript()->registerCss($id.'-table-width', 'div#'.$id.' table.items{min-width:100%;width:100%;max-width:100%;}');

$columns = array(
			array(
				'name' => 'language',
				'filter' => '',
				'sortable' => false
			),
			'translation',
			array(
				'name' => 'lastModifiedDate',
				'filter' => '',
				'sortable' => false
			),
			array(
				'class' => 'CButtonColumn',
				'template' => '{update}{delete}',
				'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("message/delete", array("id" => $data->id, "languageId" => $data->language_id))',
				'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this message?'),
				'afterDelete' => 'function(link, success, data){if(success){alert(data);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}',
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
		);

if(!isset($messageId))
{
	array_unshift($columns, 'id');
}

$this->widget('zii.widgets.grid.CGridView',
	array(
		'id' => $id,
		'filter' => $model,
		'dataProvider' => $model->with(array('source', 'language'))->search(),
		'selectableRows' => 0,
		'columns' => $columns,
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