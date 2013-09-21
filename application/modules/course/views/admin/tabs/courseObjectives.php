<div id="course-objectives">
	<div class="box-white">
		<?php
		$this->renderPartial('grids/objectiveGrid', array('CourseObjective' => $CourseObjective, 'gridId' => 'objective-grid'));
		echo CHtml::button(
				'{t}Add{/t}', 
				array(
						'onclick' => 
							'js:'.
							'var $dialog = $("div#course-objective-form-dialog");'.
							'$dialog.find("form#course-objective-form").yiiactiveformLoadJSON($.parseJSON(\''.
								CJSON::encode(
									array(
										'_method' => "POST",
										'course-objective-form-submit' => '{t}Create{/t}',
										'CourseObjective_course_id' => $Course->id,
										'CourseObjective_id' => '',
										'CourseObjective_rank' => '',
										'CourseObjective_text' => '',
										'message' => false,
										'success' => true
									)
								).
							'\'));'.
							'$dialog.dialog("option", "title", "{t}Create Course Objective{/t}");'.
							'$dialog.dialog("open");'
				)
		);
		?>
	</div>
	<?php 
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
			'id' => 'course-objective-form-dialog',
			'options' => array(
					'title' => '{t}Create Course Objective{/t}',
					'autoOpen' => false,
					'modal' => true,
					'width' => 400,
			),
	));
	$this->renderPartial('forms/objectiveForm', array('CourseObjective' => $CourseObjective, 'gridId' => 'objective-grid'));
	$this->endWidget('course-objective-form-dialog'); 
	?>
</div>
