<?php $this->breadcrumbs = array('{t}Admin{/t}' => $this->createUrl('/admin'), '{t}Courses{/t}'); ?>
<h1 class="bottom">{t}Courses{/t}</h1>
<div id="single-column">
	<?php $this->actionGrid(null, 'course-grid'); ?>
	<br />
	<?php echo CHtml::link('{t}Create New Course{/t}', $this->createUrl('/admin/course/view'), array('class' => 'button')); ?>
</div>