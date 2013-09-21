<?php 
Yii::app()->getClientScript()->registerScriptFile($this->getScriptsUrl('jquery.loadJSON.js'), CClientScript::POS_HEAD);
Yii::app()->getClientScript()->registerScriptFile($this->getScriptsUrl('jquery.yiiactiveformLoadJSON.js'), CClientScript::POS_HEAD); 
?>
<div class="form">
	<?php 
	$form = $this->beginWidget('CActiveForm', array(
			'id' => 'course-objective-form',
			'action' => $this->createUrl('/course/admin/courseObjective'),
			'enableAjaxValidation' => true,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				'afterValidate' => 'js:'.
					'function(form, data, hasError){'.
						'if (!hasError) {'.
							CHtml::ajax(array(
								'type' => 'POST',
								'url' => $this->createUrl('/course/admin/courseObjective'),
								'cache' => false,
								'data' => 'js:$("form#course-objective-form").serialize()',
								'beforeSend' => 'function(){'.
									'$("form#course-objective-form").addClass("loading");'.
								'}',
								'success' => 'function(data){'.
									'data = $.parseJSON(data);'.
									'if(data.success){'.
										'$("div#course-objective-form-dialog").dialog("option", "title", "{t}Update Course Objective{/t}");'.
										(isset($gridId) ? '$("div#'.$gridId.'").yiiGridView("update");' : '').
										(isset($detailsId) ? '$("#'.$detailsId.'").loadJSON(data);' : '').
									'}'.
									'$("form#course-objective-form").yiiactiveformLoadJSON(data);'.
								'}',
								'error' => 'function(data){'.
									'alert("{t}An error occurred sending data to server.{/t}");'.
								'}',
								'complete' => 'function(){'.
									'$("form#course-objective-form").removeClass("loading");'.
								'}',
							)).
							'return false;'.
						'}'.
					'}'
			)
	));
	?>
	<p class="message hide"></p>
	<?php echo $form->errorSummary($CourseObjective); ?>
	<div class="row">
		<?php
		echo $form->labelEx($CourseObjective, 'rank');
		echo $form->numberField($CourseObjective, 'rank');
		echo $form->error($CourseObjective, 'rank');
		?>
	</div>
	<div class="row">
		<?php
		echo $form->labelEx($CourseObjective, 'text');
		echo $form->textField($CourseObjective, 'text');
		echo $form->error($CourseObjective, 'text');
		?>
	</div>
	<div class="row">
		<?php
		echo $form->hiddenField($CourseObjective, 'course_id');
		echo $form->error($CourseObjective, 'course_id');
		?>
	</div>
	<div class="row">
		<?php
		echo $form->hiddenField($CourseObjective, 'id');
		echo $form->error($CourseObjective, 'id');
		?>
	</div>
	<?php echo CHtml::hiddenField('_method', $CourseObjective->getIsNewRecord() ? 'POST' : 'PUT'); ?>
	<div class="row submit">
		<?php echo CHtml::submitButton($CourseObjective->getIsNewRecord() ? '{t}Create{/t}' : '{t}Save{/t}', array('id' => 'course-objective-form-submit')); ?>
	</div>
	<?php $this->endWidget(); ?>
</div>
