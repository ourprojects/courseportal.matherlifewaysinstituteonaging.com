<?php $this->breadcrumbs = array(TranslateModule::t('Views') => $this->createUrl('index'), TranslateModule::t('View Details')); ?>
<h1>
	<?php echo TranslateModule::t('View').'&nbsp;'.$view->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $view)); ?>
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
									'scopes' => array('view' => array('id' => $view->id, 'language_id' => $view->language_id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Categories'),
								),
								true
						).$this->internalActionGrid($view->id, $view->language_id, 'category-grid', true),
					TranslateModule::t('Source Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'messageSource-grid',
									'activeRecordClass' => 'MessageSource',
									'url' => Yii::app()->getController()->createUrl('messageSource/delete'),
									'scopes' => array('view' => array('id' => $view->id, 'language_id' => $view->language_id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Source Messages'),
								),
								true
						).$this->internalActionGrid($view->id, $view->language_id, 'messageSource-grid', true),
					TranslateModule::t('Translated Messages') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'message-grid',
									'activeRecordClass' => 'Message',
									'url' => Yii::app()->getController()->createUrl('message/delete'),
									'keys' => array('id', 'language_id'),
									'scopes' => array('view' => array('id' => $view->id, 'language_id' => $view->language_id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Message Translations'),
								),
								true
						).$this->internalActionGrid($view->id, $view->language_id, 'message-grid', true),
					TranslateModule::t('Routes') => 
						$this->widget(
								'translate.widgets.gridSelectionHandler.GridSelectionHandler',
								array(
									'gridId' => 'route-grid',
									'activeRecordClass' => 'Route',
									'url' => Yii::app()->getController()->createUrl('route/delete'),
									'scopes' => array('view' => array('id' => $view->id, 'language_id' => $view->language_id)),
									'buttonText' => TranslateModule::t('Delete All'),
									'loadingText' => TranslateModule::t('Loading...'),
									'dialogTitle' => TranslateModule::t('Delete Routes'),
								),
								true
						).$this->internalActionGrid($view->id, $view->language_id, 'route-grid', true),
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>',
				'id' => 'relatedDetails'
			)
	);
	?>
</div>
