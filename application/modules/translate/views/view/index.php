<?php $this->breadcrumbs = array(TranslateModule::t('Views')); ?>

<h1>
	<?php echo TranslateModule::t('Views'); ?>
</h1>
<div id="single-column">
	<div id="views" class="box-white">
		<?php
		$this->widget(
				'translate.widgets.gridSelectionHandler.GridSelectionHandler',
				array(
					'gridId' => 'view-grid',
					'activeRecordClass' => 'View',
					'url' => Yii::app()->getController()->createUrl('view/delete'),
					'buttonText' => TranslateModule::t('Delete All'),
					'loadingText' => TranslateModule::t('Loading...'),
					'dialogTitle' => TranslateModule::t('Delete View Translations'),
				)
		);
		$this->actionGrid(null, null, 'view-grid'); 
		?>
	</div>
</div>
