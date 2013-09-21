<div id="user-courses">
	<div class="box-white">
		<?php 
		$this->renderPartial('grids/courseGrid', array('Course' => $Course->hasUser($CourseUser->getId(), true), 'user_id' => $CourseUser->getId(), 'hasUser' => true, 'gridId' => 'course-grid', 'updateGridIds' => 'add-course-grid', 'scenario' => 'user'));
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
	$this->renderPartial('grids/courseGrid', array('Course' => $Course->resetScope()->hasUser($CourseUser->getId(), false), 'user_id' => $CourseUser->getId(), 'hasUser' => false, 'gridId' => 'add-course-grid', 'updateGridIds' => 'course-grid', 'scenario' => 'add'));
	$this->endWidget('courseUser-grid-dialog');
	?>
</div>