<div id="course-details">
	<div class="box-white">
		<?php
		$this->widget('ext.EDetailView.EDetailView', array(
				'id' => 'course-details',
				'data' => $Course,
				'itemTemplate' => "<tr class=\"{class}\"><th>{label}</th><td id=\"Course_{attribute}\">{value}</td></tr>\n",
				'attributes' => array(
						'id',
						'name',
						'rank',
						'title',
						'description',
				),
		));
		echo CHtml::button(
				'{t}Edit{/t}', 
				array(
					'onclick' => 
						'js:'.
						'var $dialog = $("div#course-form-dialog");'.
						'$dialog.dialog("option", "title", "{t}Update Course{/t} \"'.$Course->title.'\"");'.
						'$dialog.dialog("open");'
				)
		);
		echo CHtml::button(
				'{t}Delete{/t}',
				array(
					'onclick' => 
						'js:'.
						'if(confirm("{t}Are you certain that you would like to delete the course{/t} \"'.$Course->title.'\"?")) {'.
							CHtml::ajax(
								array(
									'type' => 'DELETE',
									'url' => $this->createUrl('/course/admin/course', array('id' => $Course->id)),
									'beforeSend' => 'function() {$("div#course-details").addClass("loading");}',
									'success' => 'function(data){window.location.replace("'.$this->createUrl('/course/admin').'");}',
									'error' => 'function(data){alert("{t}An error ocurred while attempting to delete the course.{/t}");}',
									'complete' => 'function(){$("div#course-details").removeClass("loading");}',
								)
							).
						'}'
				)
		);
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
	$this->renderPartial('forms/courseForm', array('Course' => $Course, 'detailsId' => 'course-details'));
	$this->endWidget('course-form-dialog'); 
	?>
</div>
