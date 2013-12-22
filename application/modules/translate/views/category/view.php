<?php $this->breadcrumbs = array(TranslateModule::t('Categories') => $this->createUrl('index'), TranslateModule::t('Category Details')); ?>
<h1>
	<?php echo TranslateModule::t('Category').'&nbsp;-&nbsp;'.$category->category; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $category)); ?>
	</div>
	<div id="missingTranslationsLanguages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Missing Translations'); ?>
		</h2>
		<?php $this->actionGrid($category->id, 'missingTranslationsLanguage-grid'); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Source Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'messageSource-grid',
									'activeRecordClass' => 'MessageSource',
									'url' => Yii::app()->getController()->createUrl('messageSource/delete'),
									'scopes' => array('category' => array('id' => $category->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Messages'),
								),
								true
						).$this->internalActionGrid($category->id, 'messageSource-grid', true),
					TranslateModule::t('Source Message Languages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'sourceMessageLanguage-grid',
									'activeRecordClass' => 'Language',
									'url' => Yii::app()->getController()->createUrl('language/delete'),
									'scopes' => array('categoryMessageSource' => array('id' => $category->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Message Languages'),
								),
								true
						).$this->internalActionGrid($category->id, 'sourceMessageLanguage-grid', true),
					TranslateModule::t('Translated Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'message-grid',
									'activeRecordClass' => 'Message',
									'url' => Yii::app()->getController()->createUrl('message/delete'),
									'keys' => array('id', 'language_id'),
									'scopes' => array('category' => array('id' => $category->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Message Translations'),
								),
								true
						).$this->internalActionGrid($category->id, 'message-grid', true),
					TranslateModule::t('Translated Message Languages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'translatedMessageLanguage-grid',
									'activeRecordClass' => 'Language',
									'url' => Yii::app()->getController()->createUrl('language/delete'),
									'scopes' => array('categoryMessage' => array('id' => $category->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Message Translation Languages'),
								),
								true
						).$this->internalActionGrid($category->id, 'translatedMessageLanguage-grid', true),
					TranslateModule::t('Routes') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'route-grid',
									'activeRecordClass' => 'Route',
									'url' => Yii::app()->getController()->createUrl('route/delete'),
									'scopes' => array('category' => array('id' => $category->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Routes'),
								),
								true
						).$this->internalActionGrid($category->id, 'route-grid', true),
					TranslateModule::t('Source Views') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'viewSource-grid',
									'activeRecordClass' => 'ViewSource',
									'url' => Yii::app()->getController()->createUrl('viewSource/delete'),
									'scopes' => array('category' => array('id' => $category->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Views'),
								),
								true
						).$this->internalActionGrid($category->id, 'viewSource-grid', true),
					TranslateModule::t('Translated Views') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'view-grid',
									'activeRecordClass' => 'View',
									'url' => Yii::app()->getController()->createUrl('view/delete'),
									'keys' => array('id', 'language_id'),
									'scopes' => array('category' => array('id' => $category->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete View Translations'),
								),
								true
						).$this->internalActionGrid($category->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
