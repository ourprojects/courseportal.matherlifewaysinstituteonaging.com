<?php defined('BASEPATH') or exit('No direct script access allowed');  

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
		$course = Course::model()->with('objectives')->find(array(
				'condition' => 'name=:name', 
				'params' => array(':name' => $filterChain->action->getId()))
		);
		if($course === null)
			return $filterChain->run();
		if(Yii::app()->getUser()->getIsAdmin() ||
				UserCourse::model()->exists('course_id=:course_id AND user_id=:user_id', 
						array(':course_id' => $course->id, ':user_id' => Yii::app()->getUser()->id))) {
			$filterChain->action->renderData['course'] = $course;
			return $filterChain->run();
		}
		$this->redirect(array('notRegistered', 'id' => $course->id));
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
		$this->render('pages/index', array('courses' => Course::model()->with('objectives')->findAll(array('order' => '`t`.`rank`'))));
	}
	
}