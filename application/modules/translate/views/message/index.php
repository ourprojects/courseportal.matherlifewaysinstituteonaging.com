<?php $this->breadcrumbs = array(TranslateModule::t('Translations')); ?>
<h1>
	<?php echo TranslateModule::t('Translations'); ?>
</h1>
<div id="single-column">
	<div id="messages" class="box-white">
		<?php
		$this->widget(
				'translate.widgets.gridSelectionHandler.GridSelectionHandler',
				array(
					'gridId' => 'message-grid',
					'activeRecordClass' => 'Message',
					'url' => Yii::app()->getController()->createUrl('message/delete'),
					'buttonText' => TranslateModule::t('Delete All'),
					'loadingText' => TranslateModule::t('Loading...'),
					'dialogTitle' => TranslateModule::t('Delete Message Translations'),
				)
		);
		$this->actionGrid(null, null, 'message-grid'); 
		?>
	</div>
</div>
