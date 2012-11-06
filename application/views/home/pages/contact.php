<?php $this->breadcrumbs = array(t('Contact Us')); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-contact.png'); ?>);">
	<h1 class="bottom"><?php echo t('Contact Us'); ?></h1>
</div>
<div id="single-column">
<?php echo $this->renderPartial('forms/contact', array('models' => $models)); ?>
</div>