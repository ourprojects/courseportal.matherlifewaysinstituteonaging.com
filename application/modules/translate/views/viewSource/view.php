<?php $this->breadcrumbs = array(TranslateModule::t('Source Views') => $this->createUrl('index'), TranslateModule::t('Source View Details')); ?>
<h1>
	<?php echo TranslateModule::t('Source View').'&nbsp;'.$viewSource->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $viewSource)); ?>
	</div>
	<div id="missingLanguages" class="box-white">
		<h2>
			<?php echo TranslateModule::t('Missing Translations'); ?>
		</h2>
		<?php
		$this->widget(
				'translate.widgets.gridSelectionHandler.GridSelectionHandler',
				array(
					'gridId' => 'missingLanguage-grid',
					'activeRecordClass' => 'Language',
					'url' => Yii::app()->getController()->createUrl('viewSource/translate', array('ViewSource' => array('id' => $viewSource->id))),
					'buttonText' => TranslateModule::t('Translate All'),
					'loadingText' => TranslateModule::t('Translating...'),
					'dialogTitle' => TranslateModule::t('Translate Source Views'),
				)
		);
		$this->actionGrid($viewSource->id, 'missingLanguage-grid'); 
		?>
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
									'url' => Yii::app()->getController()->createUrl('category/delete', array('scopes' => array('viewSource' => array('id' => $viewSource->id)))),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Categories'),
								),
								true
						).$this->internalActionGrid($viewSource->id, 'category-grid', true),
					TranslateModule::t('Source Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'messageSource-grid',
									'activeRecordClass' => 'MessageSource',
									'url' => Yii::app()->getController()->createUrl('messageSource/delete', array('scopes' => array('viewSource' => array('id' => $viewSource->id)))),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Messsages'),
								),
								true
						).$this->internalActionGrid($viewSource->id, 'messageSource-grid', true),
					TranslateModule::t('Translated Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'message-grid',
									'activeRecordClass' => 'Message',
									'url' => Yii::app()->getController()->createUrl('message/delete', array('scopes' => array('viewSource' => array('id' => $viewSource->id)))),
									'keys' => array('id', 'language_id'),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Message Translations'),
								),
								true
						).$this->internalActionGrid($viewSource->id, 'message-grid', true),
					TranslateModule::t('Languages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'language-grid',
									'activeRecordClass' => 'Language',
									'url' => Yii::app()->getController()->createUrl('language/delete', array('scopes' => array('viewSource' => array('id' => $viewSource->id)))),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Languages'),
								),
								true
						).$this->internalActionGrid($viewSource->id, 'language-grid', true),
					TranslateModule::t('Routes') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'route-grid',
									'activeRecordClass' => 'Route',
									'url' => Yii::app()->getController()->createUrl('route/delete', array('scopes' => array('viewSource' => array('id' => $viewSource->id)),)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Routes'),
								),
								true
						).$this->internalActionGrid($viewSource->id, 'route-grid', true),
					TranslateModule::t('Translated Views') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'view-grid',
									'activeRecordClass' => 'View',
									'url' => Yii::app()->getController()->createUrl('view/delete', array('scopes' => array('viewSource' => array('id' => $viewSource->id)))),
									'keys' => array('id', 'language_id'),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete View Translations'),
								),
								true
						).$this->internalActionGrid($viewSource->id, 'view-grid', true)
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
