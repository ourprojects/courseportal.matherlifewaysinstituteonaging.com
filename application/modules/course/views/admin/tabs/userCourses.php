<div id="user-courses">
	<div class="box-white">
		<?php 
		$this->renderPartial('grids/courseGrid', array('Course' => $Course, 'user_id' => $CourseUser->getId(), 'gridId' => 'course-grid'));
		echo CHtml::button('{t}Add{/t}', array('onclick' => 'js:$("div#course-grid-dialog").dialog("open")'));
		?>
	</div>
	<?php 
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
			'id' => 'course-grid-dialog',
			'options' => array(
					'title' => '{t}Add a Course to User{/t} "'.$CourseUser->getName().'"',
					'autoOpen' => false,
					'modal' => true,
					'width' => 950,
			),
	));
	$this->renderPartial('grids/courseGrid', array('Course' => $Course->resetScope(), 'gridId' => 'add-course-grid'));
	$this->endWidget('courseUser-grid-dialog');
	?>
</div>