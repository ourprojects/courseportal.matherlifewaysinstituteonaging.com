<?php $this->breadcrumbs = array(t('Not Registered')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('header-courses.png'); ?>);">
	<h1 class="bottom">
		<?php echo t('Courses'); ?>
	</h1>
</div>
<div id="single-column">
	<h2 class="flowers">
		<?php echo t($course->title); ?>
	</h2>
	<p>
		<?php echo t('You have not registered for this course yet.'); ?>
	</p>
</div>