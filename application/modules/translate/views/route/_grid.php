<?php
Yii::app()->getClientScript()->registerCss($id.'-table-width', 'div#'.$id.' table.items{min-width:100%;width:100%;max-width:100%;}');

$buttonConfig = array(
	'class' => 'CButtonColumn',
	'template' => '{view}{delete}',
	'viewButtonLabel' => TranslateModule::t('View Details'),
	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("route/view", array("id" => $data->id))',
	'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("route/delete", array("Route" => array("id" => $data->id), "dryRun" => 0))',
	'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this route as well as all associated source views and view translations?'),
	'afterDelete' => 'function(link, success, data){if(success){alert($.parseJSON(data).message);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
);

if(isset($languageId))
{
	$buttonConfig['template'] = '{view}{update}{delete}';
	$buttonConfig['buttons'] = array(
		'update' => array(
			'label' => TranslateModule::t('Create Translation'),
			'url' => '$this->grid->getOwner()->createUrl("route/translate", array("id" => $data->id, "Language" => array("language_id" => '.$languageId.'), "dryRun" => 0))',
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
					'name' => 'route',
					'htmlOptions' => array('style' => 'word-wrap:break-word;word-break:break-all;'),
				),
				$buttonConfig
			),
		)
);
?>