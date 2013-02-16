<?php $this->breadcrumbs = array(t('Admin') => Yii::app()->createUrl('admin'), t('Courses')); ?>
<h1 class="bottom"><?php echo t('Courses'); ?></h1>
<div id="single-column">
	<?php 
	$source = Course::model()->findAll();
	$this->widget('zii.widgets.grid.CGridView', array(
		'id' => 'course-grid',
		'dataProvider' => $searchModel->search(),
		'filter' => $searchModel,
		'columns' => array(
	        array(
	            'name' => 'id',
	            'filter' => CHtml::listData($source, 'id', 'id'),
	        	'htmlOptions' => array('width' => '40'),
	        ),
			array(
				'name' => 'name',
				'filter' => CHtml::listData($source, 'name', 'name'),
				'htmlOptions' => array('width' => '100'),
			),
	        array(
	            'name' => 'title',
	            'filter' => CHtml::listData($source, 'title', 'title'),
	        	'htmlOptions' => array('width' => '100'),
	        ),
			array(
				'name' => 'description',
				'htmlOptions' => array('width' => '400'),
			),
	        array(
	            'class' => 'CButtonColumn',
	            'template' => '{view}{delete}',
	        	'viewButtonLabel' => TranslateModule::t('View Course Details'),
	        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("courseView", array("id" => $data->id))',
	            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("courseDelete", array("id" => $data->id))',
	        )
		),
	)); 
	?>
	<br />
	<?php echo CHtml::link(t('Create New Course'), $this->createUrl('courseView'), array('class' => 'button')); ?>
</div>