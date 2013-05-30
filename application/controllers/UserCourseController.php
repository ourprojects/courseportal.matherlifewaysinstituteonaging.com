<?php   

class UserCourseController extends ApiController {
	
	public function actionCreate() {
		$errors = array();
		if(!isset($_POST['user_id'])) 
			$errors['user_id'] = t('An user_id must be specified. Who are you adding this course to?');
		if(!isset($_POST['course_id']))
			$errors['course_id'] = t('A course_id must be specified. What course are you adding?');
	
		if(empty($errors)) {
			$userCourse = new UserCourse;
			$userCourse->user_id = $_POST['user_id'];
			$userCourse->course_id = $_POST['course_id'];
			if(!$userCourse->save())
				$errors = $userCourse->getErrors();
		}
	
		if(empty($errors))
			$this->renderApiResponse();
		else
			$this->renderApiResponse(400, $errors);
	}
	
	public function actionRead() {
		$model = new UserCourse('search');
		$model->attributes = $_GET;

		$data = array();
		foreach($model->findAll($model->with('user', 'course')->getSearchCriteria()) as $userCourse) {
			$data[] = $userCourse->toArray($userCourse->getSafeAttributeNames(), array('user' => 'email', 'course' => 'title'));
		}

		if(empty($data)) {
			$this->renderApiResponse(404);
		} else {
			$this->renderApiResponse(200, $data);
		}
	}
	
	public function actionDelete() {
		$requestVars = Yii::app()->getRequest()->getRestParams();
		if(!isset($requestVars['user_id'])) {
			$this->renderApiResponse(400, array('user_id' => t('The id of the user whose course is to be deleted must be specified.')));
		} else if(!isset($requestVars['course_id'])) {
			$this->renderApiResponse(400, array('course_id' => t('The id of the course to be deleted must be specified.')));
		} else {
			$result = array('UserCourse' => array('rows_deleted' => UserCourse::model()->deleteByPk(array('user_id' => $requestVars['user_id'], 'course_id' => $requestVars['course_id']))));
			$this->renderApiResponse(200, $result);
		}
	}
	
	public function actionOptions() {
		$this->renderApiResponse(200, 
				array('GET' => 
							array(
								'returns' => t('List of course, user associations.'),
								'optional' => array(
										'user_id' => t('search for courses associated with this user id.'), 
										'course_id' => t('search for users associated with this course id.')
										),
								'required' => array()
								),
					  'POST' =>
							array(
								'returns' => false,
								'optional' => false,
								'required' => array(
										'user_id' => t('The id of the user to associate a course with.'),
										'course_id' => t('The id of the course to associate with a user.')
										)
								),
					  'PUT' => false,
					  'DELETE' => array(
					  			'returns' => t('Number of rows effected'),								
								'optional' => false,
								'required' => array(
										'user_id' => t('The id of the user to associate a course with.'),
										'course_id' => t('The id of the course to associate with a user.')
										)
								)		
					)
				);
	}
	
}