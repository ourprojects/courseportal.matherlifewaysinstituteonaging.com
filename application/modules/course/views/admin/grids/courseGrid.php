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
		'dataProvider' => $Course->search(),
		'filter' => $Course,
		'columns' => array(
			'id',
			'rank',
			'name',
			'title',
			'description',
			array(
				'name' => 'userCount',
				'sortable' => false,
				'filter' => '',
			),
			array(
				'class' => 'CButtonColumn',
				'template' => '{view}{add}{delete}',
				'viewButtonLabel' => '{t}View Course Details{/t}',
				'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/course/admin/course", array("id" => $data->id))',
				'buttons' => array(
						'add' => array(
							'url' => isset($user_id) ? 'Yii::app()->getController()->createUrl("/course/admin/user", array("course_id" => $data->id, "id" => '.$user_id.'))' : '"#"',
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
							'url' => isset($user_id) ? 'Yii::app()->getController()->createUrl("/course/admin/user", array("id" => '.$user_id.', "course_id" => $data->id))' : 'Yii::app()->getController()->createUrl("/course/admin/course", array("id" => $data->id))',
							'label' => isset($scenario) ? ($scenario === 'user' ? '{t}Remove User From Course{/t}' : '') : '{t}Delete Course{/t}',
							'visible' => !isset($scenario) || $scenario === 'user' ? 'true' : 'false',
							'click' => 'function(){'.
								'if(confirm("{t}Are you sure you would like to '.(isset($user_id) ? 'remove this user from the' : 'delete this').' course?{/t}")) {'.
									CHtml::ajax(
										array(
											'type' => 'DELETE',
											'url' => 'js:$(this).attr("href")',
											'beforeSend' => 'function(){$("div#course-grid").addClass("loading");}',
											'success' => 'function(data){'.$updateGridIds.'}',
											'error' => 'function(data){alert("{t}An error ocurred while performing action.{/t}");}',
											'complete' => 'function(){$("div#course-grid").removeClass("loading");}',
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