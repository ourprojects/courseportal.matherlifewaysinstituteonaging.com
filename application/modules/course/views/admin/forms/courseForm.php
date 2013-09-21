<?php 
Yii::app()->getClientScript()->registerScriptFile($this->getScriptsUrl('jquery.loadJSON.js'), CClientScript::POS_HEAD);
Yii::app()->getClientScript()->registerScriptFile($this->getScriptsUrl('jquery.yiiactiveformLoadJSON.js'), CClientScript::POS_HEAD); 
?>
<div class="form">
	<?php
	$form = $this->beginWidget('CActiveForm',
			array(
				'id' => 'course-form',
				'action' => $this->createUrl('/course/admin/course'),
				'enableAjaxValidation' => true,
				'enableClientValidation' => true,
				'clientOptions' => array(
					'validateOnSubmit' => true,
					'afterValidate' => 'js:'.
					'function(form, data, hasError){'.
						'if (!hasError) {'.
							CHtml::ajax(array(
								'type' => 'POST',
								'url' => $this->createUrl('/course/admin/course'),
								'cache' => false,
								'data' => 'js:$("form#course-form").serialize()',
								'beforeSend' => 'function(){'.
									'$("form#course-form").addClass("loading");'.
								'}',
								'success' => 'function(data){'.
									'data = $.parseJSON(data);'.
									'if(data.success){'.
										'$("div#course-form-dialog").dialog("option", "title", "{t}Update Course{/t}");'.
										(isset($gridId) ? '$("div#'.$gridId.'").yiiGridView("update");' : '').
										(isset($detailsId) ? '$("#'.$detailsId.'").loadJSON(data);' : '').
									'}'.
									'$("form#course-form").yiiactiveformLoadJSON(data);'.
								'}',
								'error' => 'function(data){'.
									'alert("{t}An error occurred attempting to contact the server.{/t}");'.
								'}',
								'complete' => 'function(){'.
									'$("form#course-form").removeClass("loading");'.
								'}',
							)).
							'return false;'.
						'}'.
					'}'
				)
			)
	);
	?>
	<p class="message hide"></p>
	<div class="note">
		<?php echo t('Fields with {required} are required.', array('{required}' => '<span class="required">*</span>')); ?>
	</div>
	<div>
		<?php echo $form->errorSummary($Course); ?>
	</div>
	<table>
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
		<tr class="row">
			<td>
				<?php
				echo $form->hiddenField($Course, 'id');
				echo $form->error($Course, 'id');
				?>
			</td>
		</tr>
	</table>
	<?php echo CHtml::hiddenField('_method', $Course->getIsNewRecord() ? 'POST' : 'PUT'); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($Course->getIsNewRecord() ? '{t}Create{/t}' : '{t}Save{/t}'); ?>
	</div>
	<?php $this->endWidget(); ?>
</div>
