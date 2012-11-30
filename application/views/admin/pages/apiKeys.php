<?php $this->breadcrumbs = array(t('Admin') => Yii::app()->createUrl('admin'), t('API Keys')); ?>
<h1><?php echo t('API Keys'); ?></h1>
<div id="single-column">
<?php 
$source = Key::model()->findAll();
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'key-grid',
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
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("keyDelete", array("id" => $data->id))',
        )
	),
)); ?>
<h2><?php echo t('Create New'); ?></h2>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'key-create-form',
			'enableAjaxValidation' => true,
)); ?>
	
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model, 'key'); ?>
		<?php echo $form->textField($model, 'key', array('size' => 80)); ?>
		<?php 
		$jqueryTextFieldSelector = "$('#{$form->id}').find('#".CHtml::activeId($model, 'key')."')";
		echo CHtml::ajaxButton(
					t('Generate'), 
					$this->createUrl('keyGenerate'), 
					array(
						'method' => 'GET', 
						'beforeSend' => "function() { $jqueryTextFieldSelector.addClass('loading'); }",
						'complete' => "function() { $jqueryTextFieldSelector.removeClass('loading'); }",
						'success' => "function(data) { $jqueryTextFieldSelector.val(data); }"
					)
			); 
		?>
		<?php echo $form->error($model, 'key'); ?>
	</div>

	<div class="row submit">
		<h3><?php echo t('Be sure to write down your key and ID once created. It cannot be recovered.'); ?></h3>
		<?php echo CHtml::submitButton(t('Add Key')); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>