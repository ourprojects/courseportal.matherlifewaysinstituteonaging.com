<?php $this->breadcrumbs = array($survey->model->title); ?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-register.png'); ?>);">
	<h1 class="bottom"><?php echo $survey->model->title; ?></h1>
</div>
<div id="single-column">
<?php $survey->run(); ?>
</div>