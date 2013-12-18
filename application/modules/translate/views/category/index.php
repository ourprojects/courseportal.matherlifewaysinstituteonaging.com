<?php $this->breadcrumbs = array(TranslateModule::t('Message Categories')); ?>
<h1>
	<?php echo TranslateModule::t('Message Categories'); ?>
</h1>
<div id="single-column">
	<div id="categories" class="box-white">
		<?php
		$this->widget(
				'translate.widgets.gridSelectionHandler.GridSelectionHandler',
				array(
					'gridId' => 'category-grid',
					'activeRecordClass' => 'Category',
					'url' => Yii::app()->getController()->createUrl('category/delete'),
					'buttonText' => TranslateModule::t('Delete All'),
					'loadingText' => TranslateModule::t('Loading...'),
					'dialogTitle' => TranslateModule::t('Delete Categories'),
				)
		);
		$this->actionGrid(null, 'category-grid'); 
		?>
	</div>
</div>
