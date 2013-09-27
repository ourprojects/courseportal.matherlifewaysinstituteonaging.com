<?php $this->breadcrumbs = array(TranslateModule::t('Categories') => $this->createUrl('index'), TranslateModule::t('Category Details')); ?>
<h1>
	<?php echo TranslateModule::t('Category').'&nbsp;-&nbsp;'.$category->category; ?>
</h1>
<div id="single-column">
	<?php 
	$this->widget(
			'ext.EJuiTabs.EJuiTabs',
			array(
				'vertical' => true,
				'tabs' => array(
						TranslateModule::t('Details') => $this->renderPartial('_details', array('model' => $category), true),
						TranslateModule::t('Source Messages') => $this->_internalActionGrid($category->id, 'messageSource-grid', true),
						TranslateModule::t('Translated Messages') => $this->_internalActionGrid($category->id, 'message-grid', true),
						TranslateModule::t('Languages') => $this->_internalActionGrid($category->id, 'language-grid', true),
						TranslateModule::t('Routes') => $this->_internalActionGrid($category->id, 'route-grid', true),
						TranslateModule::t('Source Views') => $this->_internalActionGrid($category->id, 'viewSource-grid', true),
						TranslateModule::t('Translated Views') => $this->_internalActionGrid($category->id, 'view-grid', true)
						
				),
				'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'
			)
	);
	?>
</div>
