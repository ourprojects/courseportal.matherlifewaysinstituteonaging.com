<?php $this->breadcrumbs = array(TranslateModule::t('Source Views')); ?>
<h1>
	<?php echo TranslateModule::t('Source Views'); ?>
</h1>
<div id="single-column">
	<div id="viewSources" class="box-white">
		<?php
		$this->widget(
			'translate.widgets.gridSelectionHandler.GridSelectionHandler',
			array(
				'gridId' => 'viewSource-grid',
				'activeRecordClass' => 'ViewSource',
				'url' => Yii::app()->getController()->createUrl('viewSource/delete'),
				'buttonText' => TranslateModule::t('Delete All'),
				'loadingText' => TranslateModule::t('Loading...'),
				'dialogTitle' => TranslateModule::t('Delete View Sources'),
			)
		);
		$this->actionGrid(null, 'viewSource-grid'); 
		?>
	</div>
</div>
