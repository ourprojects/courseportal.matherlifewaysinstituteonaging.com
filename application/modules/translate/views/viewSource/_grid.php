<p class="word-wrap-break">
	<?php echo TranslateModule::t("When possible the paths listed below will be shortened to show only the portion relative to the current application's base path - '{path}'.", array('{path}' => Yii::app()->getBasePath())); ?>
</p>
<?php
$this->widget('zii.widgets.grid.CGridView',
		array(
				'id' => 'viewSource-grid',
				'filter' => $model,
				'dataProvider' => $model->search(),
				'columns' => array(
						'id',
						array(
								'name' => 'relativePath',
								'filter' => '',
								'sortable' => false
						),
						array(
								'class' => 'CButtonColumn',
								'template' => '{view}{delete}',
								'viewButtonLabel' => TranslateModule::t('View Details'),
								'viewButtonUrl' => 'Yii::app()->getController()->createUrl("viewSource/view", array("id" => $data->id))',
								'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("viewSource/delete", array("id" => $data->id))',
						)
				),
		)
);
?>