<?php $this->breadcrumbs = array(TranslateModule::t('Routes')); ?>
<h1><?php echo TranslateModule::t('Routes'); ?></h1>
<div id="single-column">
	<div id="routes" class="box-white">
		<?php
		$model = new Route('search');
		$model->with('viewSourceCount');
		$this->renderPartial('_detailed_grid', array('model' => $model)); 
		?>
	</div>
</div>