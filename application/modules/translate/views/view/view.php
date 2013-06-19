<?php $this->breadcrumbs = array(TranslateModule::t('Views') => $this->createUrl('index'), TranslateModule::t('View Details')); ?>
<h1>
<?php echo TranslateModule::t('View ID').'&nbsp;'.$view->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<h2><?php echo TranslateModule::t('View Source Details:'); ?></h2>
		<div id="id">
			<h2><?php echo $view->getAttributeLabel('id'); ?></h2>
			<p>
				<?php echo $view->id; ?>
			</p>
		</div>
		<div id="path">
			<h2><?php echo $view->getAttributeLabel('path'); ?></h2>
			<p>
				<?php echo $view->path; ?>
			</p>
		</div>
	</div>
	<div id="routes" class="box-white">
		<h2><?php echo TranslateModule::t('Routes:'); ?></h2>
		<?php 
		$model = new Route('search');
		$model->with(array('viewSources' => array('together' => true, 'condition' => 'viewSources.id=:id', 'params' => array(':id' => $view->id))));
		$this->renderPartial('../route/_detailed_grid', array('model' => $model));
		?>
	</div>
	<div id="compiledViews" class="box-white">
		<h2><?php echo TranslateModule::t('Compiled Views:'); ?></h2>
		<?php 
		$model = new View('search');
		$model->setAttribute('id', $view->id);
		$this->renderPartial('_compiled_grid', array('model' => $model));
		?>
	</div>
	<div id="messageSources" class="box-white">
		<h2><?php echo TranslateModule::t('Source Messages:'); ?></h2>
		<?php
		$model = new MessageSource('search');
		$model->with(array('viewSources' => array('together' => true, 'condition' => 'viewSources.id=:id', 'params' => array(':id' => $view->id))));
		$this->renderPartial('../messageSource/_detailed_grid', array('model' => $model)); 
		?>
	</div>
	<div id="messages" class="box-white">
		<h2><?php echo TranslateModule::t('Translations:'); ?></h2>
		<?php
		$model = new Message('search');
		$model->with(array('source.viewSources' => array('together' => true, 'condition' => 'viewSources.id=:id', 'params' => array(':id' => $view->id))));
		$this->renderPartial('../message/_detailed_grid', array('model' => $model)); 
		?>
	</div>
</div>