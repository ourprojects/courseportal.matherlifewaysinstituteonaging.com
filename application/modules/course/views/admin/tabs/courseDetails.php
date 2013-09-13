<div id="course-details">
	<div class="box-white">
		<?php
		$this->widget('zii.widgets.CDetailView', array(
				'data' => $Course,
				'attributes' => array(
						'id',
						'name',
						'rank',
						'title',
						'description',
				),
		));
		echo CHtml::button('{t}Edit{/t}', array('onclick' => 'js:$("div#course-form-dialog").dialog("open")'));
		?>
	</div>
	<?php 
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
			'id' => 'course-form-dialog',
			'options' => array(
					'title' => '{t}Update Course{/t} "'.$Course->title.'"',
					'autoOpen' => false,
					'modal' => true,
					'width' => 700,
			),
	));
	$this->renderPartial('forms/courseForm', array('Course' => $Course, 'gridId' => 'course-grid'));
	$this->endWidget('course-form-dialog'); 
	?>
</div>
