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
		$CourseUserModel->with('courses')->together()->getDbCriteria()->group = $CourseUserModel->getDbConnection()->quoteColumnName($CourseUserModel->getTableAlias().'.id');
		
		switch($ajax)
		{
			case 'course-grid':
				$this->renderPartial('_courseGrid', array('Course' => $CourseModel));
				break;
			case 'user-grid':
				$this->renderPartial('_userGrid', array('CourseUser' => $CourseUserModel));
				break;
			default:
				$this->render('index', array('Course' => $CourseModel, 'CourseUser' => $CourseUserModel));
				break;
		}
	}

	public function actionCourse($id, array $Course = array(), array $CourseObjective = array(), array $CourseUser = array(), $ajax = null)
	{
		$message = false;
		$request = Yii::app()->getRequest();
		if($request->getIsPostRequest() && !$request->getIsPutRequest())
		{
			$CourseModel = new Course();
		}
		else
		{
			$CourseModel = Course::model()->findByPk($id);
			if($CourseModel === null)
			{
				$CourseModel->addError('id', t('Course with ID "{id}" was not found.', array('{id}' => $id)));
			}
		}
		
		if($request->getIsPostRequest() || $request->getIsPutRequest())
		{
			$CourseModel->setAttributes($Course);
			if($CourseModel->validate())
			{
				$transaction = $CourseModel->getDbConnection()->beginTransaction();
				try
				{
					if($CourseModel->save(false))
					{
						$transaction->commit();
					}
					else
					{
						$transaction->rollback();
					}
				}
				catch(Exception $e)
				{
					$transaction->rollback();
					$CourseModel->addError('id', $e->getMessage());
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
				$message = t('No course was deleted. The course may already have been deleted.');
			}
		}
		
		if($request->getIsAjaxRequest())
		{
			$result = array('message' => $message);
			if($CourseModel->hasErrors())
			{
				foreach($CourseModel->getErrors() as $attribute => $errors)
				{
					$result[CHtml::activeId($CourseModel, $attribute)] = $errors;
				}
			}
			else if(isset($ajax))
			{
				switch($ajax)
				{
					case 'objective-grid':
						$CourseObjectiveModel = new CourseObjective('search');
						$CourseObjectiveModel->setAttributes($CourseObjective);
						$CourseObjectiveModel->course_id = $id;
						$this->renderPartial('_objectiveGrid', array('CourseObjective' => $CourseObjectiveModel));
						break;
					case 'user-grid':
						$CourseUserModel = new CourseUser('search');
						$CourseUserModel->setAttributes($CourseUser);
						$CourseUserModel->with(array('courses' => array('condition' => $CourseUserModel->getDbConnection()->quoteColumnName('courses.id').'=:id', 'params' => array(':id' => $id))))->together();
						$CourseUserModel->getDbCriteria()->group = $CourseUserModel->getDbConnection()->quoteColumnName($CourseUserModel->getTableAlias().'.id');
						$this->renderPartial('_userGrid', array('CourseUser' => $CourseUserModel));
						break;
					default:
						break;
				}
			}
			else
			{
				foreach($CourseModel->getAttributes() as $name => $value)
				{
					$result[CHtml::activeId($CourseModel, $name)] = $value;
				}
			}
			echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
		}
		else
		{
			$CourseObjectiveModel = new CourseObjective('search');
			$CourseObjectiveModel->setAttributes($CourseObjective);
			$CourseObjectiveModel->course_id = $id;
			$CourseUserModel = new CourseUser('search');
			$CourseUserModel->setAttributes($CourseUser);
			$CourseUserModel->with(array('courses' => array('condition' => $CourseUserModel->getDbConnection()->quoteColumnName('courses.id').'=:id', 'params' => array(':id' => $id))))->together();
			$CourseUserModel->getDbCriteria()->group = $CourseUserModel->getDbConnection()->quoteColumnName($CourseUserModel->getTableAlias().'.id');
			$this->render('course', array('Course' => $CourseModel, 'CourseObjective' => $CourseObjectiveModel, 'CourseUser' => $CourseUserModel, 'message' => $message));
		}
	}
	
	public function actionCourseObjective($id, array $CourseObjective = array(), $ajax = null)
	{
		$message = false;
		$request = Yii::app()->getRequest();
		if($request->getIsPostRequest() && !$request->getIsPutRequest())
		{
			$courseObjectiveModel = new CourseObjective();
		}
		else
		{
			$courseObjectiveModel = CourseObjective::model()->findByPk($id);
			if($courseObjectiveModel === null)
			{
				$courseObjectiveModel->addError('id', t('Course objective with ID "{id}" was not found.', array('{id}' => $id)));
			}
		}
		
		if($request->getIsPostRequest() || $request->getIsPutRequest())
		{
			$courseObjectiveModel->setAttributes($CourseObjective);
			if($courseObjectiveModel->validate())
			{
				$transaction = $courseObjectiveModel->getDbConnection()->beginTransaction();
				try
				{
					if($courseObjectiveModel->save(false))
					{
						$transaction->commit();
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
		
		$result = array('message' => $message);
		if($courseObjectiveModel->hasErrors())
		{
			foreach($courseObjectiveModel->getErrors() as $attribute => $errors)
			{
				$result[CHtml::activeId($courseObjectiveModel, $attribute)] = $errors;
			}
		}
		else if(!isset($ajax))
		{
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
		
		$CourseModel = new Course('search');
		$CourseModel->setAttributes($Course);
		$CourseModel->with(array('users' => array('condition' => $CourseModel->getDbConnection()->quoteColumnName('users.'.$courseUserModel->getIdColumnName()).'=:user_id', 'params' => array(':user_id' => $courseUserModel->getId()))))->together();
		
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
					$message = t('No user was removed from any course.');
				}
			}
		}
		
		if($request->getIsAjaxRequest())
		{
			$result = array('message' => $message);
			if($courseUserModel->hasErrors())
			{
				foreach($courseUserModel->getErrors() as $attribute => $errors)
				{
					$result[CHtml::activeId($courseUserModel, $attribute)] = $errors;
				}
			}
			else if(isset($ajax) && $ajax === 'course-grid')
			{
				$this->renderPartial('_courseGrid', array('Course' => $Course, 'user_id' => $courseUserModel->getId()));
			}
			else
			{
				foreach($courseUserModel->getAttributes() as $name => $value)
				{
					$result[CHtml::activeId($courseUserModel, $name)] = $value;
				}
			}
			echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
		}
		else
		{
			$this->render('user', array('CourseUser' => $courseUserModel, 'Course' => $CourseModel, 'message' => $message));
		}
	}

}