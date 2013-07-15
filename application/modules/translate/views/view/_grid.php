<p class="word-wrap-break">
	<?php echo TranslateModule::t("When possible the paths listed below will be shortened to show only the portion relative to the current application's base path - '{path}'.", array('{path}' => Yii::app()->getBasePath())); ?>
</p>
<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'view-grid',
				'filter' => $model,
				'dataProvider' => $model->with('language')->search(),
				'columns' => array(
						'id',
						array(
								'name' => 'relativePath',
								'filter' => '',
								'sortable' => false
						),
						array(
								'name' => 'language',
								'filter' => '',
								'sortable' => false
						),
						'created',
						array(
								'class' => 'CButtonColumn',
								'template' => '{view}{delete}',
								'viewButtonLabel' => TranslateModule::t('View Details'),
								'viewButtonUrl' => 'Yii::app()->getController()->createUrl("view/view", array("id" => $data->id, "languageId" => $data->language_id))',
								'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("view/delete", array("id" => $data->id, "languageId" => $data->language_id))',
						)
				),
		)
);
?>