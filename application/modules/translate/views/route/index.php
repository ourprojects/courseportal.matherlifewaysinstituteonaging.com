<?php $this->breadcrumbs = array(TranslateModule::t('Routes')); ?>
<h1>
	<?php echo TranslateModule::t('Routes'); ?>
</h1>
<div id="single-column">
	<div id="routes" class="box-white">
		<?php
		$this->widget(
				'translate.widgets.gridSelectionHandler.GridSelectionHandler',
				array(
					'gridId' => 'route-grid',
					'activeRecordClass' => 'Route',
					'url' => Yii::app()->getController()->createUrl('route/delete'),
					'buttonText' => TranslateModule::t('Delete All'),
					'loadingText' => TranslateModule::t('Loading...'),
					'dialogTitle' => TranslateModule::t('Delete Routes'),
				)
		);
		$this->actionGrid(null, 'route-grid'); 
		?>
	</div>
</div>
