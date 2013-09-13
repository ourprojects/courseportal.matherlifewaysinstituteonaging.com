<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => $gridId,
	'dataProvider' => $CourseUser->search(),
	'filter' => $CourseUser,
	'columns' => array(
		$CourseUser->getIdColumnName(),
		$CourseUser->getNameColumnName(),
		array(
			'name' => 'courseCount',
			'sortable' => false,
			'filter' => '',
		),
		array(
				'class' => 'CButtonColumn',
				'template' => '{view}{delete}',
				'viewButtonLabel' => '{t}View User Details{/t}',
				'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/course/admin/user", array("id" => $data->id))',
				'buttons' => array(
						'delete' => array(
								'url' => isset($course_id) ? 'Yii::app()->getController()->createUrl("/course/admin/user", array("id" => $data->id, "course_id" => '.$course_id.'));' : '#',
								'label' => '{t}Remove User From Course{/t}',
								'visible' => isset($course_id) ? 'true' : 'false',
								'click' => 'function(){'.
								CHtml::ajax(
										array(
											'type' => 'DELETE',
											'url' => 'js:$(this).attr("href")',
											'beforeSend' => 'function(){$("div#user-grid").addClass("loading");}',
											'success' => 'function(data){$.fn.yiiGridView.update("'.$gridId.'");}',
											'error' => 'function(data){alert("{t}An error ocurred attempting to remove the user from the course.{/t}");}',
											'complete' => 'function(){$("div#user-grid").removeClass("loading");}',
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