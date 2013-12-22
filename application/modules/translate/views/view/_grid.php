<?php
Yii::app()->getClientScript()->registerCss($id.'-table-width', 'div#'.$id.' table.items{min-width:100%;width:100%;max-width:100%;}');

$this->widget('zii.widgets.grid.CGridView',
		array(
			'id' => $id,
			'filter' => $model,
			'dataProvider' => $model->with('language')->search(),
			'selectableRows' => 10,
			'columns' => array(
				array(
					'name' => 'id',
					'header' => $model->getAttributeLabel('id'),
					'headerHtmlOptions' => isset($viewId) ? array('style' => 'display:none;') : array(),
					'filterHtmlOptions' => isset($viewId) ? array('style' => 'display:none;') : array(),
					'htmlOptions' => isset($viewId) ? array('style' => 'display:none;') : array(),
					'footerHtmlOptions' => isset($viewId) ? array('style' => 'display:none;') : array(),
				),
				array(
					'name' => 'path',
					'htmlOptions' => array('style' => 'word-wrap:break-word;word-break:break-all;'),
					'header' => $model->getAttributeLabel('path')
				),
				array(
					'name' => 'language',
					'filter' => '',
					'header' => $model->getAttributeLabel('language')
				),
				array(
					'name' => 'createdDate',
					'header' => $model->getAttributeLabel('createdDate')
				),
				array(
					'name' => 'isReadable',
					'type' => 'boolean',
					'filter' => array(false => TranslateModule::t('No'), true => TranslateModule::t('Yes')),
					'header' => $model->getAttributeLabel('isReadable')
				),
				array(
					'class' => 'CButtonColumn',
					'template' => '{view}{delete}',
					'viewButtonLabel' => TranslateModule::t('View Details'),
					'viewButtonUrl' => 'Yii::app()->getController()->createUrl("view/view", array("id" => $data["id"], "languageId" => $data["language_id"]))',
					'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("view/delete", array("View" => array("id" => $data["id"], "language_id" => $data["language_id"]), "dryRun" => 0))',
					'deleteConfirmation' => TranslateModule::t('Are you certain that you would like to delete this view?'),
					'afterDelete' => 'function(link, success, data){if(success){alert($.parseJSON(data).message);$("#'.implode('").yiiGridView("update");$("#', $relatedGrids).'").yiiGridView("update");}}'
				)
			),
		)
);
?>