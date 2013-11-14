<?php

class LogActivityAction extends CAction
{
	
	public $widgetId;
	
	private $_user;
	
	public function setUser($user)
	{
		$this->_user = $user;
	}
	
	public function getUser()
	{
		if(!$this->_user instanceof CourseUser)
		{
			$this->_user = $this->user = CourseUser::model()->findByAttributes(array(CourseUser::model()->getIdColumnName() => Yii::app()->getUser()->getId(), CourseUser::model()->getNameColumnName() => Yii::app()->getUser()->getName()));
			if($this->_user === null)
			{
				throw new CHttpException(500, t('The current user is not defined and could not be determined automatically.'));
			}
		}
		return $this->_user;
	}

	public function run(array $UserActivity = array(), $ajax = null)
	{
		$request = Yii::app()->getRequest();
		$result = array();
		if(!empty($UserActivity['id']))
		{
			$UserActivityModel = UserActivity::model()->with(array('userActivityDimensions', 'activity' => array('with' => 'recommendedDimensions')))->findByAttributes(array('id' => $UserActivity['id']));
			if($UserActivityModel === null || $UserActivityModel->user_id !== $this->getUser()->getId())
			{
				$UserActivityModel = new UserActivity();
				$UserActivityModel->addError('id',  t('A logged activity with ID "{id}" could not be found for user "{user}".', array('{id}' => $UserActivity['id'], '{user}' => $this->getUser()->getName())));
			}
			elseif($request->getIsPostRequest() && !$request->getIsPutRequest())
			{
				$UserActivityModel->addError('id',  t('The logged activity with ID "{id}" already exists for user "{user}".', array('{id}' => $UserActivity['id'], '{user}' => $this->getUser()->getName())));
			}
			else
			{
				$activity = $UserActivityModel->activity;
			}
		}
		else
		{
			$UserActivityModel = new UserActivity();
		}

		if(!isset($activity))
		{
			if(!empty($UserActivity['activity_id']))
			{
				$activity = Activity::model()->with('recommendedDimensions')->findByPk($UserActivity['activity_id']);
				if($activity === null)
				{
					$activity = new Activity();
					$UserActivityModel->addError('activity_id', t('An activity with ID "{id}" could not be found.', array('{id}' => $UserActivity['activity_id'])));
				}
			}
			else
			{
				$activity = new Activity();
			}
			$UserActivityModel->activity_id = $activity->id;
		}

		if($request->getIsPostRequest() || 
				$request->getIsPutRequest() || 
				$request->getIsDeleteRequest())
		{
			if(!$UserActivityModel->hasErrors())
			{
				if($request->getIsPostRequest() || $request->getIsPutRequest())
				{
					$UserActivityModel->setAttributes($UserActivity);
					$UserActivityModel->user_id = $this->getUser()->getId();
					$UserActivityModel->validate();
					if(empty($UserActivity['dimensions']))
					{
						$UserActivityModel->addError('dimensions', t('The activity must be logged in at least one dimension.'));
					}
					elseif(!$UserActivityModel->hasErrors('activity_id'))
					{
						$activity = Activity::model()->with('recommendedDimensions')->findByPk($UserActivityModel->activity_id);
						$recommendedDims = CHtml::listData($activity->recommendedDimensions, 'id', 'id');
						foreach($UserActivity['dimensions'] as $dimId)
						{
							if(!isset($recommendedDims[$dimId]))
							{
								$UserActivityModel->addError('dimensions', t('Invalid dimension for this activity.'));
								break;
							}
						}
					}
					if((!isset($ajax) || $ajax !== $this->widgetId.'-userActivityForm') && !$UserActivityModel->hasErrors())
					{
						$transaction = $UserActivityModel->getDbConnection()->beginTransaction();
						try
						{
							if($UserActivityModel->save(false))
							{
								if($request->getIsPutRequest())
								{
									foreach($UserActivityModel->userActivityDimensions as $actDim)
									{
										if (($key = array_search($actDim->dimension_id, $UserActivity['dimensions'])) !== false)
										{
											unset($UserActivity['dimensions'][$key]);
										}
										else
										{
											$actDim->delete();
										}
									}
								}
				
								foreach($UserActivity['dimensions'] as $dimensionId)
								{
									$UserActivityDimension = new UserActivityDimension();
									$UserActivityDimension->user_activity_id = $UserActivityModel->id;
									$UserActivityDimension->dimension_id = $dimensionId;
									if(!$UserActivityDimension->save())
									{
										$UserActivityModel->addError('dimensions', $UserActivityDimension->getErrors());
										break;
									}
								}
							}
							if($UserActivityModel->hasErrors())
							{
								$transaction->rollback();
							}
							else
							{
								$result = array('message' => t('Activity sucessfully '.($request->getIsPutRequest() ? 'updated' : 'logged').'.'));
								$transaction->commit();
							}
						}
						catch(Exception $e)
						{
							$UserActivityModel->addError('id', $e->getMessage());
							$transaction->rollback();
							throw $e;
						}
					}
					$activity = $UserActivityModel->getIsNewRecord() ? new Activity() : $UserActivityModel->activity;
				}
				elseif(!isset($ajax) || $ajax !== $this->widgetId.'-userActivityForm')
				{
					if(isset($UserActivity['dimensions']))
					{
						$removed = UserActivityDimension::model()->deleteAllByAttributes(array('user_activity_id' => $UserActivityModel->id, 'dimension_id' => $UserActivity['dimensions']));
						if($removed !== count($UserActivity['dimensions']))
						{
							$result = array('message' => t('Not all dimensions could be removed from the activity. Some may have already been removed.'));
						}
						else
						{
							$result = array('message' => t('Activity dimension'.($removed > 1 ? 's' : '').' removed.'));
						}
					}
					if(!isset($UserActivity['dimensions']) || $UserActivityModel->getRelated('userActivityDimensions', true) === array())
					{
						if($UserActivityModel->delete() > 0)
						{
							$result = array('message' => t('Activity removed.'));
						}
						else
						{
							$result = array('message' => t('No activity was removed. It may have already been removed.'));
						}
					}
				}
			}
		}
			
		if($UserActivityModel->hasErrors())
		{
			foreach($UserActivityModel->getErrors() as $attribute => $errors)
			{
				$result[CHtml::activeId($UserActivityModel, $attribute)] = $errors;
			}
		}
		else
		{
			$result = array_merge(array(
					'name' => $activity->name,
					'description' => $activity->description,
					'dateCompleted' => $UserActivityModel->dateCompleted,
					'comment' => $UserActivityModel->comment,
					'activity_id' => $UserActivityModel->activity_id,
					'id' => $UserActivityModel->id,
					'message' => false,
					'scenario' => $UserActivityModel->getScenario()
			), $result);
			foreach($activity->recommendedDimensions as $dimension)
			{
				$result['dimensions'][$dimension->id] = array('text' => $dimension->name, 'selected' => false);
			}
			foreach($UserActivityModel->getRelated('dimensions', true) as $dimension)
			{
				$result['dimensions'][$dimension->id]['selected'] = true;
			}
		}
		echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}

}

?>
