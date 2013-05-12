<?php $this->breadcrumbs = array(t('Contact Us')); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-contact.png'); ?>);">
	<h1 class="bottom">{t}Contact Us{/t}</h1>
</div>
<div id="single-column">
<?php echo $this->renderPartial('forms/contact', $models); ?>
</div>