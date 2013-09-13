<div id="course-users">
	<div class="box-white">
		<?php 
		$this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUser, 'course_id' => $Course->id, 'gridId' => 'user-grid'));
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
	$this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUser->resetScope(), 'gridId' => 'add-user-grid'));
	$this->endWidget('courseUser-grid-dialog');
	?>
</div>
