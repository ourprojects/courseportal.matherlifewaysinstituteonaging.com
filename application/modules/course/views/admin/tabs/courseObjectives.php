<div id="course-objectives">
	<div class="box-white">
		<?php
		$this->renderPartial('grids/objectiveGrid', array('CourseObjective' => $CourseObjective, 'gridId' => 'objective-grid'));
		echo CHtml::button('{t}Add{/t}', array('onclick' => 'js:$("div#courseObjective-form-dialog").dialog("open")'));
		?>
	</div>
	<?php 
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
			'id' => 'courseObjective-form-dialog',
			'options' => array(
					'title' => '{t}Create Course Objective for{/t} "'.$Course->title.'"',
					'autoOpen' => false,
					'modal' => true,
					'width' => 400,
			),
	));
	$this->renderPartial('forms/objectiveForm', array('CourseObjective' => $CourseObjective));
	$this->endWidget('courseObjective-form-dialog'); 
	?>
</div>
