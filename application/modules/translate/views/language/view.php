<?php $this->breadcrumbs = array(TranslateModule::t('Languages') => $this->createUrl('index'), TranslateModule::t('Language Details')); ?>
<h1>
	<?php echo TranslateModule::t('Language').'&nbsp;-&nbsp;'.$language->getName(); ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $language)); ?>
	</div>
	<div id="missingMessageSources" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Messages Missing a Translation For This Language'); ?>
		</h2>
		<?php $this->actionGrid($language->id, 'missingMessageSource-grid'); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Source Messsage Categories') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'category-grid',
									'activeRecordClass' => 'Category',
									'url' => Yii::app()->getController()->createUrl('category/delete'),
									'scopes' => array('languageMessageSource' => array('id' => $language->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Message Categories'),
								),
								true
						).$this->internalActionGrid($language->id, 'sourceMessageCategory-grid', true),
					TranslateModule::t('Source Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'messageSource-grid',
									'activeRecordClass' => 'MessageSource',
									'url' => Yii::app()->getController()->createUrl('messageSource/delete'),
									'scopes' => array('language' => array('id' => $language->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Messages'),
								),
								true
						).$this->internalActionGrid($language->id, 'messageSource-grid', true),
					TranslateModule::t('Translated Messsage Categories') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'category-grid',
									'activeRecordClass' => 'Category',
									'url' => Yii::app()->getController()->createUrl('category/delete'),
									'scopes' => array('languageMessage' => array('id' => $language->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Translated Message Categories'),
								),
								true
						).$this->internalActionGrid($language->id, 'translatedMessageCategory-grid', true),
					TranslateModule::t('Translated Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'message-grid',
									'activeRecordClass' => 'Message',
									'url' => Yii::app()->getController()->createUrl('message/delete'),
									'keys' => array('id', 'language_id'),
									'scopes' => array('language' => array('id' => $language->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Message Translations'),
								),
								true
						).$this->internalActionGrid($language->id, 'message-grid', true),
					TranslateModule::t('Routes') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'route-grid',
									'activeRecordClass' => 'Route',
									'url' => Yii::app()->getController()->createUrl('route/delete'),
									'scopes' => array('language' => array('id' => $language->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Routes'),
								),
								true
						).$this->internalActionGrid($language->id, 'route-grid', true),
					TranslateModule::t('Source Views') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'viewSource-grid',
									'activeRecordClass' => 'ViewSource',
									'url' => Yii::app()->getController()->createUrl('viewSource/delete'),
									'scopes' => array('language' => array('id' => $language->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Views'),
								),
								true
						).$this->internalActionGrid($language->id, 'viewSource-grid', true),
					TranslateModule::t('Translated Views') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'view-grid',
									'activeRecordClass' => 'View',
									'url' => Yii::app()->getController()->createUrl('view/delete'),
									'keys' => array('id', 'language_id'),
									'scopes' => array('language' => array('id' => $language->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete View Translations'),
								),
								true
						).$this->internalActionGrid($language->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
