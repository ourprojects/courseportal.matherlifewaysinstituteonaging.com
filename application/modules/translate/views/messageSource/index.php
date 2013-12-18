<?php $this->breadcrumbs = array(TranslateModule::t('Source Messages')); ?>
<h1>
	<?php echo TranslateModule::t('Source Messages'); ?>
</h1>
<div id="single-column">
	<div id="messageSources" class="box-white">
		<?php
		$this->widget(
				'translate.widgets.gridSelectionHandler.GridSelectionHandler',
				array(
					'gridId' => 'messageSource-grid',
					'activeRecordClass' => 'MessageSource',
					'url' => Yii::app()->getController()->createUrl('messageSource/delete'),
					'buttonText' => TranslateModule::t('Delete All'),
					'loadingText' => TranslateModule::t('Loading...'),
					'dialogTitle' => TranslateModule::t('Delete Source Messages'),
				)
		);
		$this->actionGrid(null, 'messageSource-grid'); 
		?>
	</div>
</div>
