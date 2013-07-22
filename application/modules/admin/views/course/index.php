<?php $this->breadcrumbs = array('{t}Admin{/t}' => Yii::app()->createUrl('admin'), '{t}Courses{/t}'); ?>
<h1 class="bottom">{t}Courses{/t}</h1>
<div id="single-column">
	<?php $this->renderPartial('_grid', array('model' => $searchModel)); ?>
	<br />
	<?php echo CHtml::link('{t}Create New Course{/t}', $this->createUrl('view'), array('class' => 'button')); ?>
</div>