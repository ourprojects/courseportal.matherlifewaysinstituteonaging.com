<div class="small-masthead">
	<h1 class="bottom"><?php echo t('Courses'); ?></h1>
</div>
<div id="single-column">
<?php
$this->pageTitle = Yii::app()->name . ' - ' . t('Admin') . ' - ' . t('Courses');
$this->breadcrumbs = array(
		t('Admin'),
		t('Courses'),
);
?>
<h2><?php echo t('Current Courses'); ?></h2>
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
        ),
        array(
            'name'=>'title',
            'filter' => CHtml::listData($source, 'title', 'title'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("courseDelete", array("id" => $data->id))',
        )
	),
)); ?>
<h2><?php echo t('Create New'); ?></h2>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'course-create-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model, 'title'); ?>
		<?php echo $form->textField($model, 'title'); ?>
		<?php echo $form->error($model, 'title'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Add Course')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>