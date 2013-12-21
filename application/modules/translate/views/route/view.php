<?php $this->breadcrumbs = array(TranslateModule::t('Routes') => $this->createUrl('index'), TranslateModule::t('Route Details')); ?>
<h1>
	<?php echo TranslateModule::t('Route').'&nbsp;'.$route->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $route)); ?>
	</div>
	<div id="missingTranslationsLanguages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Languages Missing A Translation For This Route'); ?>
		</h2>
		<?php $this->actionGrid($route->id, 'missingTranslationsLanguage-grid'); ?>
	</div>
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
				'tabs' => array(
					TranslateModule::t('Categories') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'category-grid',
									'activeRecordClass' => 'Category',
									'url' => Yii::app()->getController()->createUrl('category/delete'),
									'scopes' => array('route' => array('id' => $route->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Categories'),
								),
								true
						).$this->internalActionGrid($route->id, 'category-grid', true),
					TranslateModule::t('Source Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'messageSource-grid',
									'activeRecordClass' => 'MessageSource',
									'url' => Yii::app()->getController()->createUrl('messageSource/delete'),
									'scopes' => array('route' => array('id' => $route->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Messages'),
								),
								true
						).$this->internalActionGrid($route->id, 'messageSource-grid', true),
					TranslateModule::t('Translated Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'message-grid',
									'activeRecordClass' => 'Message',
									'url' => Yii::app()->getController()->createUrl('message/delete'),
									'keys' => array('id', 'language_id'),
									'scopes' => array('route' => array('id' => $route->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Message Translations'),
								),
								true
						).$this->internalActionGrid($route->id, 'message-grid', true),
					TranslateModule::t('Languages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'language-grid',
									'activeRecordClass' => 'Language',
									'url' => Yii::app()->getController()->createUrl('language/delete'),
									'scopes' => array('route' => array('id' => $route->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Languages'),
								),
								true
						).$this->internalActionGrid($route->id, 'language-grid', true),
					TranslateModule::t('Source Views') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'viewSource-grid',
									'activeRecordClass' => 'ViewSource',
									'url' => Yii::app()->getController()->createUrl('viewSource/delete'),
									'scopes' => array('route' => array('id' => $route->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Views'),
								),
								true
						).$this->internalActionGrid($route->id, 'viewSource-grid', true),
					TranslateModule::t('Translated Views') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'view-grid',
									'activeRecordClass' => 'View',
									'url' => Yii::app()->getController()->createUrl('view/delete'),
									'keys' => array('id', 'language_id'),
									'scopes' => array('route' => array('id' => $route->id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Translated Views'),
								),
								true
						).$this->internalActionGrid($route->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
