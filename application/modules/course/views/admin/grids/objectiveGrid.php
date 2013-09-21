<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => $gridId,
	'dataProvider' => $CourseObjective->search(),
	'filter' => $CourseObjective,
	'columns' => array(
		'rank',
		'text',
		array(
			'class' => 'CButtonColumn',
			'template' => '{update}{delete}',
			'buttons' => array(
				'update' => array(
					'url' => 'Yii::app()->getController()->createUrl("/course/admin/courseObjective", array("id" => $data->id));',
					'click' => 'function(){'.
						CHtml::ajax(
							array(
								'type' => 'GET',
								'url' => 'js:$(this).attr("href")',
								'beforeSend' => 'function(){'.
									'var $dialog = $("div#course-objective-form-dialog");'.
									'$dialog.find("form#course-objective-form").addClass("loading");'.
									'$dialog.dialog("option", "title", "{t}Update Course Objective{/t}");'.
									'$dialog.dialog("open");'.
								'}',
								'success' => 'function(data){'.
									'$("form#course-objective-form").yiiactiveformLoadJSON($.parseJSON(data));'.
								'}',
								'error' => 'function(data){'.
									'$("div#course-objective-form-dialog").dialog("close");'.
									'alert("{t}An error ocurred retrieving course objective data from server.{/t}");'.
								'}',
								'complete' => 'function(){'.
									'$("form#course-objective-form").removeClass("loading");'.
								'}',
							)
						).
						'return false;'.
					'}',
				),
				'delete' => array(
					'url' => 'Yii::app()->getController()->createUrl("/course/admin/courseObjective", array("id" => $data->id));',
					'click' => 'function(){'.
						CHtml::ajax(
							array(
								'type' => 'DELETE',
								'url' => 'js:$(this).attr("href")',
								'beforeSend' => 'function() {'.
									'if(confirm("{t}Are you sure you would like to delete this objective?{/t}")) {'.
										'$("div#course-objective-grid").addClass("loading");'.
										'return true;'.
									'}'.
									'return false;'.
								'}',
								'success' => 'function(data){$.fn.yiiGridView.update("'.$gridId.'");}',
								'error' => 'function(data){alert("{t}An error ocurred attempting to delete the course objective.{/t}");}',
								'complete' => 'function(){$("div#course-objective-grid").removeClass("loading");}',
							)
						).
						'return false;'.
					'}',
				),
			)
		)
	),
));
?>
		