<?php

class UserCourseController extends ApiController
{

	public function actionCreate(array $UserCourse = array())
	{
		$userCourseModel = new UserCourse;
		$userCourseModel->setAttributes($UserCourse);
		$userCourseModel->save();

		if($userCourseModel->hasErrors())
		{
			$this->renderApiResponse(400, $errors);
		}
		else 
		{
			$this->renderApiResponse($userCourseModel);
		}
	}

	public function actionRead(array $UserCourse = array())
	{
		$model = new UserCourse('search');
		$model->setAttributes($UserCourse);

		$data = array();
		foreach($model->findAll($model->with('user', 'course')->getSearchCriteria()) as $userCourse) 
		{
			$userCourse->attachBehavior('toArray', array('class' => 'behaviors.EArrayBehavior'));
			$data[] = $userCourse->toArray(array_merge($userCourse->getSafeAttributeNames(), array('user' => 'email', 'course' => 'title')), true);
		}

		if(empty($data)) 
		{
			$this->renderApiResponse(404);
		} 
		else 
		{
			$this->renderApiResponse(200, $data);
		}
	}

	public function actionDelete($user_id, $course_id)
	{
		$result = array('UserCourse' => array('rows_deleted' => UserCourse::model()->deleteByPk(array('user_id' => $user_id, 'course_id' => $course_id))));
		$this->renderApiResponse(200, $result);
	}

	public function actionOptions()
	{
		$this->renderApiResponse(200,
				array('GET' =>
							array(
								'returns' => t('List of course, user associations.'),
								'optional' => array(
										'UserCourse[user_id]' => t('search for courses associated with this user id.'),
										'UserCourse[course_id]' => t('search for users associated with this course id.')
										),
								'required' => array()
								),
					  'POST' =>
							array(
								'returns' => false,
								'optional' => false,
								'required' => array(
										'UserCourse[user_id]' => t('The id of the user to associate a course with.'),
										'UserCourse[course_id]' => t('The id of the course to associate with a user.')
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