<h1><?php echo t('Manage Accepted Languages'); ?></h1>
<?php 
$source = Course::model()->findAll();
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'accepted-grid',
	'dataProvider' => $searchModel->search(),
	'filter' => $searchModel,
	'columns' => array(
        array(
            'name' => 'id',
            'filter' => CHtml::listData($source, 'id', 'id'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("accepteddelete", array("id" => $data->id))',
        )
	),
)); ?>
<h2><?php echo t('Create New'); ?></h2>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'accepted-create-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
		<?php echo $form->error($model, 'id'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Add Language')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>