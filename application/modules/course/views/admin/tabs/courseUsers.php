<div id="course-users">
	<div class="box-white">
		<?php 
		$this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUser->hasCourse($Course->id, true), 'course_id' => $Course->id, 'hasCourse' => true, 'gridId' => 'user-grid', 'updateGridIds' => array('add-user-grid'), 'scenario' => 'course'));
		echo CHtml::button('{t}Add{/t}', array('onclick' => 'js:$("div#courseUser-grid-dialog").dialog("open")'));
		?>
	</div>
	<?php 
	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
			'id' => 'courseUser-grid-dialog',
			'options' => array(
					'title' => '{t}Add a User to Course{/t} "'.$Course->title.'"',
					'autoOpen' => false,
					'modal' => true,
					'width' => 700,
			),
	));
	$this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUser->resetScope()->hasCourse($Course->id, false), 'course_id' => $Course->id, 'hasCourse' => false, 'gridId' => 'add-user-grid', 'updateGridIds' => array('user-grid'), 'scenario' => 'add'));
	$this->endWidget('courseUser-grid-dialog');
	?>
</div>
