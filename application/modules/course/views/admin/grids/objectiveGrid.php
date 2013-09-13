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
					'url' => 'Yii::app()->getController()->createUrl("/course/admin/objective", array("id" => $data->id));',
					'click' => 'function(){'.
						CHtml::ajax(
							array(
								'type' => 'GET',
								'url' => 'js:$(this).attr("href")',
								'beforeSend' => 'function(){$("div#course-objective-grid").addClass("loading");}',
								'success' => 'function(data){$.fn.yiiGridView.update("'.$gridId.'");}',
								'error' => 'function(data){alert("{t}An error ocurred retrieving course objective data.{/t}");}',
								'complete' => 'function(){$("div#course-objective-grid").removeClass("loading");}',
							)
						).
						'return false;'.
					'}',
				),
				'delete' => array(
					'url' => 'Yii::app()->getController()->createUrl("/course/admin/objective", array("id" => $data->id));',
					'click' => 'function(){'.
						CHtml::ajax(
							array(
								'type' => 'DELETE',
								'url' => 'js:$(this).attr("href")',
								'beforeSend' => 'function(){$("div#course-objective-grid").addClass("loading");}',
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
		