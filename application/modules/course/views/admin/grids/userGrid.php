<?php
if(!isset($updateGridIds))
{
	$updateGridIds = array();
}
else if(!is_array($updateGridIds))
{
	$updateGridIds = array($updateGridIds);
}
$updateGridIds[] = $gridId;
$updateGridIds = implode('', array_map(create_function('$id', 'return \'$.fn.yiiGridView.update("\'.$id.\'");\';'), $updateGridIds));
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
			'template' => '{view}{add}{delete}',
			'viewButtonLabel' => '{t}View User Details{/t}',
			'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/course/admin/user", array("id" => $data->id))',
			'buttons' => array(
				'add' => array(
					'url' => isset($course_id) ? 'Yii::app()->getController()->createUrl("/course/admin/user", array("id" => $data->id, "course_id" => '.$course_id.'));' : '"#"',
					'label' => '{t}Add User to Course{/t}',
					'imageUrl' => $this->getImagesUrl('create.png'),
					'visible' => isset($scenario) && $scenario === 'add' ? 'true' : 'false',
					'click' => 'function(){'.
						CHtml::ajax(
							array(
								'type' => 'POST',
								'url' => 'js:$(this).attr("href")',
								'beforeSend' => 'function() {$("div#'.$gridId.'").addClass("loading");}',
								'success' => 'function(data){'.$updateGridIds.'}',
								'error' => 'function(data){alert("{t}An error ocurred attempting to add the user to the course.{/t}");}',
								'complete' => 'function(){$("div#'.$gridId.'").removeClass("loading");}',
							)
						).
						'return false;'.
					'}',
				),
				'delete' => array(
					'url' => isset($course_id) ? 'Yii::app()->getController()->createUrl("/course/admin/user", array("id" => $data->id, "course_id" => '.$course_id.'));' : '"#"',
					'label' => '{t}Remove User From Course{/t}',
					'visible' => isset($scenario) && $scenario === 'course' ? 'true' : 'false',
					'click' => 'function(){'.
						'if(confirm("{t}Are you sure you would like to remove this user from the course?{/t}")) {'.
							CHtml::ajax(
								array(
									'type' => 'DELETE',
									'url' => 'js:$(this).attr("href")',
									'beforeSend' => 'function() {$("div#user-grid").addClass("loading");}',
									'success' => 'function(data){'.$updateGridIds.'}',
									'error' => 'function(data){alert("{t}An error ocurred attempting to remove the user from the course.{/t}");}',
									'complete' => 'function(){$("div#user-grid").removeClass("loading");}',
								)
							).
						'}'.
						'return false;'.
					'}',
				),
			)
		)
	),
));
?>