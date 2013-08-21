<?php

class CourseController extends CoursePortalController
{

	public function accessRules()
	{
		return array_merge(
				parent::accessRules(),
				array(
					array('allow',
							'actions' => array('index, notRegistered'),
							'users' => array('@'),
					),
					array('deny'),
				)
		);
	}

	public function actions()
	{
		$courses = Yii::app()->getDb()->createCommand()->select('name')->from(Course::model()->tableName())->queryColumn();
		$courseActions = array();
		foreach($courses as $course)
		{
			$courseActions[$course] = array('class' => 'application.components.CourseViewAction', 'defaultView' => $course);
		}
		return array_merge(parent::actions(), $courseActions);
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
		$this->render('pages/notRegistered', array('course' => $course));
	}

	public function actionIndex()
	{
		$this->render('pages/index', array('courses' => Course::model()->with('objectives')->findAll(array('order' => 't.rank'))));
	}

}