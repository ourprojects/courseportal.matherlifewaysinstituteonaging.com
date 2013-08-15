<?php

class CourseController extends OnlineCoursePortalController {

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
				'verifyUserCourse'

		);
	}

	public function accessRules() {
		return array(
				array('allow',
						'users' => array('@'),
				),
				array('deny',
						'users' => array('*'),
				),
		);
	}

	public function filterVerifyUserCourse($filterChain) {
		if($filterChain->action->getId() === $this->defaultMissingAction)
		{
			$course = Course::model()->with('objectives')->autoQuoteFind(array('and', 't.name' => $filterChain->action->getRequestedView()));
			if(Yii::app()->getUser()->getIsEmployee() ||
					Yii::app()->getUser()->getIsAdmin() ||
					UserCourse::model()->exists(array('and', 'course_id' => $course->id, 'user_id' => Yii::app()->getUser()->id))) {
				$filterChain->action->renderData['course'] = $course;
				return $filterChain->run();
			}
			$this->redirect(array('notRegistered', 'id' => $course->id));
		}
		return $filterChain->run();
	}

	public function createCourseUrl($course) {
		return $this->createUrl($course->name);
	}

	public function actionNotRegistered($id) {
		$course = Course::model()->findByPk($id);
		if($course === null)
			throw new CHttpException(404, t('Course not found'));
		$this->render('pages/notRegistered', array('course' => $course));
	}

	public function actionIndex() {
		$this->render('pages/index', array('courses' => Course::model()->with('objectives')->findAll(array('order' => 'rank'))));
	}

}