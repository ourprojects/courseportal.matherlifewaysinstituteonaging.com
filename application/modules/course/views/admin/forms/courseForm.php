<div id="course-form" class="form">
	<?php
	$form = $this->beginWidget('CActiveForm',
			array(
				'id' => 'course-form',
				'enableAjaxValidation' => true,
				'enableClientValidation' => true,
			)
	);
	?>
	<table>
		<tr>
			<td colspan="4" class="note">
				<?php echo t('Fields with {required} are required.', array('{required}' => '<span class="required">*</span>')); ?>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<?php echo $form->errorSummary($Course); ?>
			</td>
		</tr>
		<tr class="row">
			<th>
				<?php echo $form->labelEx($Course, 'title'); ?>
			</th>
			<td colspan="3">
				<?php 
				echo $form->textField($Course, 'title', array('style' => 'width:95%;'));
				echo $form->error($Course,'title'); 
				?>
			</td>
		</tr>
		<tr class="row">
			<th>
				<?php echo $form->labelEx($Course, 'rank'); ?>
			</th>
			<td>
				<?php 
				echo $form->numberField($Course, 'rank', array('style' => 'width:85%;'));
				echo $form->error($Course,'rank'); 
				?>
			</td>
			<th>
				<?php echo $form->labelEx($Course, 'name'); ?>
			</th>
			<td>
				<?php 
				echo $form->textField($Course, 'name', array('style' => 'width:85%;'));
				echo $form->error($Course,'name'); 
				?>
			</td>
		</tr>
		<tr class="row">
			<th>
				<?php echo $form->labelEx($Course, 'description'); ?>
			</th>
			<td colspan="3">
				<?php 
				echo $form->textArea($Course, 'description', array('style' => 'width:95%;'));
				echo $form->error($Course,'description'); 
				?>
			</td>
		</tr>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($Course->getIsNewRecord() ? '{t}Create{/t}' : '{t}Update{/t}'); ?>
	</div>
	<?php $this->endWidget(); ?>
</div>
