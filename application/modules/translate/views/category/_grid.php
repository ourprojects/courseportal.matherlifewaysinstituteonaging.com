<?php
Yii::app()->getClientScript()->registerCss($id.'-table-width', 'div#'.$id.' table.items{min-width:100%;width:100%;max-width:100%;}');

$buttonConfig = array(
	'class' => 'CButtonColumn',
	'viewButtonLabel' => TranslateModule::t('View Details'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("category/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("category/delete", array("Category" => array("id" => $data->id), "dryRun" => 0))',
	'deleteConfirmation' => TranslateModule::t('You are about to delete this category and all associated source messages and translations! Are you sure you would like to continue?'),
	'afterDelete' => 'function(link, success, data){if(success){alert($.parseJSON(data).message);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
);

if(isset($languageId))
{
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['buttons'] = array(
		'update' => array(
			'label' => TranslateModule::t('Create Translation'),
			'url' => '$this->grid->getOwner()->createUrl("messageSource/translate", array("scopes" => array("category" => array("id" => $data->id)), "Language" => array("id" => '.$languageId.'), "dryRun" => 0))',
		)
	);
}
else
{
	$buttonConfig['template'] = '{view}{delete}';
}

$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->search(),
			'selectableRows' => 10,
			'columns' => array(
				'id',
				array(
					'name' => 'category',
					'htmlOptions' => array('style' => 'word-wrap:break-word;word-break:break-all;'),
				),
				$buttonConfig
			),
		)
);
?>