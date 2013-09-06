<?php

$this->widget(
		'course.widgets.SpencerPowell.UserActivityWidget', 
			array(
				'user' => CourseUser::model()->findByPk(Yii::app()->getUser()->getId())
			)
		);

?>
