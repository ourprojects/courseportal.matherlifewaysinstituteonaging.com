<?php $this->breadcrumbs = array(TranslateModule::t('Message Categories') => $this->createUrl('index'), TranslateModule::t('Category Details')); ?>
<h1>
<?php echo TranslateModule::t('Category #')."$category->id - $category->category"; ?>
</h1>
<div id="single-column">
	<div id="messages" class="box-white">
		<h2><?php echo TranslateModule::t('Messages:'); ?></h2>
		<?php
		$model = new MessageSource('search');
		$model->with(array('categories' => array('together' => true, 'condition' => 'categories.id=:id', 'params' => array(':id' => $category->id))));
		$this->renderPartial('../messageSource/_detailed_grid', array('model' => $model)); 
		?>
	</div>
	<div id="translations" class="box-white">
		<h2><?php echo TranslateModule::t('Translations:'); ?></h2>
		<?php
		$model = new Message('search');
		$model->with(array('source.categories' => array('together' => true, 'condition' => 'categories.id=:id', 'params' => array(':id' => $category->id))));
		$this->renderPartial('../message/_detailed_grid', array('model' => $model)); 
		?>
	</div>
	<div id="missingTranslations" class="box-white">
		<h2><?php echo TranslateModule::t('Missing Translations:'); ?></h2>
		<?php // @ TODO ?>
	</div>
</div>