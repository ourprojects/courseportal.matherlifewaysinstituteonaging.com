<?php $this->breadcrumbs = array(TranslateModule::t('Routes') => $this->createUrl('index'), TranslateModule::t('Route Details')); ?>
<h1>
<?php echo TranslateModule::t('Route ID').'&nbsp;'.$route->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<h2><?php echo TranslateModule::t('Route Details:'); ?></h2>
		<div id="id">
			<h2><?php echo $route->getAttributeLabel('id'); ?></h2>
			<p>
				<?php echo $route->id; ?>
			</p>
		</div>
		<div id="route">
			<h2><?php echo $route->getAttributeLabel('route'); ?></h2>
			<p>
				<?php echo $route->route; ?>
			</p>
		</div>
	</div>
	<div id="routes" class="box-white">
		<h2><?php echo TranslateModule::t('Views:'); ?></h2>
		<?php
		$model = new ViewSource('search');
		$model->with(array('routes' => array('together' => true, 'condition' => 'routes.id=:id', 'params' => array(':id' => $route->id))));
		$this->renderPartial('../view/_detailed_grid', array('model' => $model)); 
		?>
	</div>
</div>