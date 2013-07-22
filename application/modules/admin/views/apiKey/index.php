<?php $this->breadcrumbs = array('{t}Admin{/t}' => Yii::app()->createUrl('admin'), '{t}API Keys{/t}'); ?>
<h1>{t}API Keys{/t}</h1>
<div id="single-column">
	<?php $this->renderPartial('_grid', array('model' => $searchModel)); ?>
	<h2>{t}Create New{/t}</h2>
	<div class="form">
		<?php $form = $this->beginWidget('CActiveForm', array(
				'id' => 'key-create-form',
				'enableAjaxValidation' => true,
	)); 
		
		echo $form->errorSummary($model); ?>
		<div class="row">
			<?php 
			echo $form->labelEx($model, 'key');
			echo $form->textField($model, 'key', array('size' => 80)); 
			
			$jqueryTextFieldSelector = "$('#{$form->id}').find('#".CHtml::activeId($model, 'key')."')";
			echo CHtml::ajaxButton(
						'{t}Generate{/t}', 
						$this->createUrl('keyGenerate'), 
						array(
							'method' => 'GET', 
							'beforeSend' => "function() { $jqueryTextFieldSelector.addClass('loading'); }",
							'complete' => "function() { $jqueryTextFieldSelector.removeClass('loading'); }",
							'success' => "function(data) { $jqueryTextFieldSelector.val(data); }"
						)
				);
			echo $form->error($model, 'key');
			?>
		</div>
	
		<div class="row submit">
			<h3>{t}Be sure to write down your key and ID once created. The values cannot be recovered after they are saved.{/t}</h3>
			<?php echo CHtml::submitButton('{t}Add Key{/t}'); ?>
		</div>
	
		<?php $this->endWidget(); ?>
	</div>
</div>