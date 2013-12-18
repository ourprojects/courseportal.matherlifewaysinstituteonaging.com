<?php $this->breadcrumbs = array(TranslateModule::t('Languages')); ?>
<h1>
	<?php echo TranslateModule::t('Languages'); ?>
</h1>
<div id="single-column">
	<div id="languages" class="box-white">
		<?php
		$this->widget(
				'translate.widgets.gridSelectionHandler.GridSelectionHandler',
				array(
					'gridId' => 'language-grid',
					'activeRecordClass' => 'Language',
					'url' => Yii::app()->getController()->createUrl('language/delete'),
					'buttonText' => TranslateModule::t('Delete All'),
					'loadingText' => TranslateModule::t('Loading...'),
					'dialogTitle' => TranslateModule::t('Delete Languages'),
				)
		);
		$this->actionGrid(null, 'language-grid'); 
		?>
	</div>
</div>
