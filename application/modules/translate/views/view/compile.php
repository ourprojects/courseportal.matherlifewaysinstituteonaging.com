<?php $this->breadcrumbs = array(TranslateModule::t('Views') => $this->createUrl('index'), TranslateModule::t('View Details')); ?>
<h1>
	<?php echo TranslateModule::t('View').'&nbsp;'.$view->id; ?>
</h1>
<div id="single-column">
	<div id="details" class="box-white">
		<?php $this->renderPartial('_details', array('model' => $view)); ?>
	</div>
	<?php 
// @ TODO
	?>
</div>
