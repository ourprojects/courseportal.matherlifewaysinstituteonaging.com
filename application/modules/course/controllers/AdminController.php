<?php

class AdminController extends CoursePortalController
{
	
	public function accessRules()
	{
		return array(array('deny'));
	}
	
	public function actionIndex(array $Course = array(), array $CourseUser = array(), $ajax = null)
	{
		$CourseModel = new Course('search');
		$CourseModel->setAttributes($Course);
		$CourseUserModel = new CourseUser('search');
		$CourseUserModel->setAttributes($CourseUser);
		$CourseUserModel->with('courses')->together();
		
		switch($ajax)
		{
			case 'course-grid':
				$this->renderPartial('grids/courseGrid', array('Course' => $CourseModel, 'gridId' => 'course-grid'));
				break;
			case 'user-grid':
				$this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUserModel, 'gridId' => 'user-grid'));
				break;
			default:
				$this->render('index', array('Course' => $CourseModel, 'CourseUser' => $CourseUserModel));
				break;
		}
	}

	public function actionCourse($id = null, array $Course = array(), array $CourseObjective = array(), array $CourseUser = array(), $ajax = null)
	{
		$message = false;
		$request = Yii::app()->getRequest();
		if($request->getIsPostRequest() && !$request->getIsPutRequest())
		{
			$CourseModel = new Course();
		}
		
		if(isset($id))
		{
			if(!isset($Course['id']))
			{
				$Course['id'] = $id;
			}
		}
		else if(isset($Course['id']))
		{
			$id = $Course['id'];
		}
		
		if(isset($id))
		{
			$CourseModel = Course::model()->findByPk($id);
		}
		
		if(!isset($CourseModel))
		{
			$CourseModel = new Course();
			$CourseModel->addError('id', t('Course with ID "{id}" was not found.', array('{id}' => $id)));
		}
		else if($request->getIsPostRequest() || $request->getIsPutRequest())
		{
			$CourseModel->setAttributes($Course);
			if($CourseModel->validate() && (!isset($ajax) || strcasecmp($ajax, 'course-form')))
			{
				$transaction = $CourseModel->getDbConnection()->beginTransaction();
				try
				{
					if($CourseModel->save(false))
					{
						$transaction->commit();
						$message = t('Course successfully '.($request->getIsPutRequest() ? 'updated' : 'created').'.');
					}
					else
					{
						throw new CHttpException(500, t('Failed to save course data.'));
					}
				}
				catch(Exception $e)
				{
					$transaction->rollback();
					if($CourseModel->hasErrors())
					{
						$message = $e->getMessage();
					}
					else
					{
						$CourseModel->addError('id', $e->getMessage());
					}
				}
			}
		}
		else if($request->getIsDeleteRequest())
		{
			if($CourseModel->delete() > 0)
			{
				$message = t('Course successfully deleted.');
			}
			else
			{
				$message = t('No course was deleted. The course may have already been deleted.');
			}
		}
		
		if($request->getIsAjaxRequest())
		{
			if(isset($ajax))
			{
				switch($ajax)
				{
					case 'objective-grid':
						$CourseObjectiveModel = new CourseObjective('search');
						$CourseObjectiveModel->setAttributes($CourseObjective);
						$CourseObjectiveModel->course_id = $id;
						$this->renderPartial('grids/objectiveGrid', array('CourseObjective' => $CourseObjectiveModel, 'gridId' => 'objective-grid'));
						break;
					case 'user-grid':
						$CourseUserModel = new CourseUser('search');
						$CourseUserModel->setAttributes($CourseUser);
						$CourseUserModel->hasCourse($id, true);
						$this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUserModel, 'course_id' => $id, 'hasCourse' => true, 'gridId' => 'user-grid', 'scenario' => 'course'));
					case 'add-user-grid':
						$CourseUserModel = new CourseUser('search');
						$CourseUserModel->setAttributes($CourseUser);
						$CourseUserModel->hasCourse($id, false);
						$this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUserModel, 'course_id' => $id, 'hasCourse' => false, 'gridId' => 'add-user-grid', 'scenario' => 'add'));
						break;
					default:
						break;
				}
			}
			else
			{
				if($CourseModel->getIsNewRecord())
				{
					$result = array('course-form-submit' => t('Create'), '_method' => 'POST');
				}
				else
				{
					$result = array('course-form-submit' => t('Save'), '_method' => 'PUT');
				}
				$result['message'] = $message;
				if($CourseModel->hasErrors())
				{
					$result['success'] = false;
					foreach($CourseModel->getErrors() as $attribute => $errors)
					{
						$result[CHtml::activeId($CourseModel, $attribute)] = $errors;
					}
				}
				else
				{
					$result['success'] = true;
					foreach($CourseModel->getAttributes() as $name => $value)
					{
						$result[CHtml::activeId($CourseModel, $name)] = $value;
					}
				}
				echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
			}
		}
		else
		{
			$CourseObjectiveModel = new CourseObjective('search');
			$CourseObjectiveModel->setAttributes($CourseObjective);
			$CourseObjectiveModel->course_id = $id;
			$CourseUserModel = new CourseUser('search');
			$CourseUserModel->setAttributes($CourseUser);
			$this->render(
					'course', 
					array(
							'Course' => $CourseModel, 
							'CourseObjective' => $CourseObjectiveModel, 
							'CourseUser' => $CourseUserModel,
							'message' => $message
					)
			);
		}
	}
	
	public function actionCourseObjective($id = null, array $CourseObjective = array(), $ajax = null)
	{
		$message = false;
		$request = Yii::app()->getRequest();
		if($request->getIsPostRequest() && !$request->getIsPutRequest())
		{
			$courseObjectiveModel = new CourseObjective();
		}
		else if(isset($id))
		{
			$courseObjectiveModel = CourseObjective::model()->findByPk($id);

		}
		else if(isset($CourseObjective['id']))
		{
			$courseObjectiveModel = CourseObjective::model()->findByPk($CourseObjective['id']);
		}
		
		if(!isset($courseObjectiveModel))
		{
			$courseObjectiveModel = new CourseObjective();
			$courseObjectiveModel->addError('id', t('Course objective with ID "{id}" was not found.', array('{id}' => $id)));
		}
		else if($request->getIsPostRequest() || $request->getIsPutRequest())
		{
			$courseObjectiveModel->setAttributes($CourseObjective);
			if($courseObjectiveModel->validate() && (!isset($ajax) || strcasecmp($ajax, 'course-objective-form')))
			{
				$transaction = $courseObjectiveModel->getDbConnection()->beginTransaction();
				try
				{
					if($courseObjectiveModel->save(false))
					{
						$transaction->commit();
						$message = t('Course objective successfully '.($request->getIsPutRequest() ? 'updated' : 'created').'.');
					}
					else
					{
						$transaction->rollback();
					}
				}
				catch(Exception $e)
				{
					$transaction->rollback();
					$courseObjectiveModel->addError('id', $e->getMessage());
				}
			}
		}
		else if($request->getIsDeleteRequest())
		{
			if($courseObjectiveModel->delete() > 0)
			{
				$message = t('Course objective successfully deleted.');
			}
			else
			{
				$message = t('No course objective was deleted. The course objective may already have been deleted.');
			}
		}

		if($courseObjectiveModel->getIsNewRecord())
		{
			$result = array('course-objective-form-submit' => t('Create'), '_method' => 'POST');
		}
		else
		{
			$result = array('course-objective-form-submit' => t('Save'), '_method' => 'PUT');
		}
		$result['message'] = $message;
		if($courseObjectiveModel->hasErrors())
		{
			$result['success'] = false;
			foreach($courseObjectiveModel->getErrors() as $attribute => $errors)
			{
				$result[CHtml::activeId($courseObjectiveModel, $attribute)] = $errors;
			}
		}
		else
		{
			$result['success'] = true;
			foreach($courseObjectiveModel->getAttributes() as $name => $value)
			{
				$result[CHtml::activeId($courseObjectiveModel, $name)] = $value;
			}
		}
		echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}

	public function actionUser($id, $course_id = null, array $Course = array(), $ajax = null)
	{
		$message = false;
		$courseUserModel = CourseUser::model()->findByPk($id);
		if($courseUserModel === null)
		{
			throw new CHttpException(404, t('The user with ID "{id}" could not be found.', array('{id}' => $id)));
		}
		
		if(isset($course_id))
		{
			if(!isset($Course['id']))
			{
				$Course['id'] = $course_id;
			}
		}
		else if(isset($Course['id']))
		{
			$course_id = $Course['id'];
		}
		
		$CourseModel = new Course('search');
		$CourseModel->setAttributes($Course);
		
		$request = Yii::app()->getRequest();
		if(isset($course_id))
		{
			if($request->getIsPostRequest())
			{
				$UserCourse = new UserCourse();
				$UserCourse->user_id = $courseUserModel->getId();
				$UserCourse->course_id = $course_id;
				if($UserCourse->validate())
				{
					$transaction = $UserCourse->getDbConnection()->beginTransaction();
					try
					{
						if($UserCourse->save(false))
						{
							$transaction->commit();
							$message = t('User successfully added to course.');
						}
						else
						{
							$transaction->rollback();
						}
					}
					catch(Exception $e)
					{
						$transaction->rollback();
						$UserCourse->addError('user_id', $e->getMessage());
					}
				}
			}
			else if($request->getIsDeleteRequest())
			{
				if(UserCourse::model()->deleteByPk(array('user_id' => $courseUserModel->getId(), 'course_id' => $course_id)) > 0)
				{
					$message = t('User successfully removed from course.');
				}
				else
				{
					$message = t('No users were removed from any courses. Perhaps the user has already been removed from the course.');
				}
			}
		}
		
		if(isset($ajax))
		{
			switch($ajax)
			{
				case 'course-grid':
					$CourseModel->hasUser($courseUserModel->getId(), true);
					$this->renderPartial('grids/courseGrid', array('Course' => $CourseModel, 'user_id' => $courseUserModel->getId(), 'hasUser' => true, 'gridId' => 'course-grid', 'scenario' => 'user'));
					break;
				case 'add-course-grid':
					$CourseModel->hasUser($courseUserModel->getId(), false);
					$this->renderPartial('grids/courseGrid', array('Course' => $CourseModel, 'user_id' => $courseUserModel->getId(), 'hasUser' => false, 'gridId' => 'add-course-grid', 'scenario' => 'add'));
					break;
				default:
					break;
			}
		}
		else
		{
			$this->render('user', array('CourseUser' => $courseUserModel, 'Course' => $CourseModel, 'message' => $message));
		}
	}

}