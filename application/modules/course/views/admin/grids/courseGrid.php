<?php
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
				'template' => '{view}{delete}',
				'viewButtonLabel' => '{t}View Course Details{/t}',
				'viewButtonUrl' => 'Yii::app()->getController()->createUrl("/course/admin/course", array("id" => $data->id))',
				'buttons' => array(
					'delete' => array(
						'url' => isset($user_id) ? 'Yii::app()->getController()->createUrl("/course/admin/user", array("id" => '.$user_id.', "course_id" => $data->id));' : 'Yii::app()->getController()->createUrl("/course/admin/course", array("id" => $data->id));',
						'label' => isset($user_id) ? '{t}Remove User From Course{/t}' : '{t}Delete Course{/t}',
						'click' => 'function(){'.
						CHtml::ajax(
							array(
								'type' => 'DELETE',
								'url' => 'js:$(this).attr("href")',
								'beforeSend' => 'function(){$("div#course-grid").addClass("loading");}',
								'success' => 'function(data){$.fn.yiiGridView.update("'.$gridId.'");}',
								'error' => 'function(data){alert("{t}An error ocurred while performing action.{/t}");}',
								'complete' => 'function(){$("div#course-grid").removeClass("loading");}',
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