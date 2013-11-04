<?php

class CourseController extends CoursePortalController
{

	public function accessRules()
	{
		return array_merge(
				parent::accessRules(),
				array(
					array('allow',
							'actions' => array('index', 'notRegistered', 'survey.submit', 'spencerpowell.dimension', 'spencerpowell.logActivity', 'spencerpowell.logActivityGrid'),
							'users' => array('@'),
					),
					array('deny'),
				)
		);
	}

	public function actions()
	{
		$actions = array(
			'spencerpowell.' => 'course.widgets.SpencerPowell.ActivityLogWidget',
			'survey.' => 'surveyor.widgets.Survey'
		);
		$courses = Yii::app()->getDb()->createCommand()->select('name')->from(Course::model()->tableName())->queryColumn();
		foreach($courses as $course)
		{
			$actions[$course] = array('class' => 'course.components.CourseViewAction', 'defaultView' => $course, 'basePath' => 'courses');
		}
		return array_merge(parent::actions(), $actions);
	}

	public function createCourseUrl($course)
	{
		return $this->createUrl($course->name);
	}

	public function actionNotRegistered($id)
	{
		$course = Course::model()->findByPk($id);
		if($course === null)
			throw new CHttpException(404, t('Course not found'));
		$this->render('notRegistered', array('course' => $course));
	}

	public function actionIndex()
	{
		$this->render('index', array('courses' => Course::model()->with('objectives')->findAll(array('order' => 't.rank'))));
	}

}