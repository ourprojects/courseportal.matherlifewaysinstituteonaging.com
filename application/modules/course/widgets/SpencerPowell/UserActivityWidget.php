<?php
class UserActivityWidget extends CInputWidget 
{
	
	public $admin = false;

	private $_user;
	
	private $_dimensions;
	
	public static function actions()
	{
		return array(
				'dimension' => array(
						'class' => 'course.widgets.SpencerPowell.actions.WidgetInlineAction',
						'widgetClassName' => 'course.widgets.SpencerPowell.UserActivityWidget'
				),
				'logActivity' => array(
						'class' => 'course.widgets.SpencerPowell.actions.WidgetInlineAction',
						'widgetClassName' => 'course.widgets.SpencerPowell.UserActivityWidget'
				),
				'logActivityGrid' => array(
						'class' => 'course.widgets.SpencerPowell.actions.WidgetInlineAction',
						'widgetClassName' => 'course.widgets.SpencerPowell.UserActivityWidget'
				)
		);
	}
	
	public function setDimensions($dimensions = true)
	{
		if($dimensions === true)
		{
			$dimensions = Dimension::model()->findAll();
		}

		$this->_dimensions = array();
		foreach((is_array($dimensions) ? $dimensions : array($dimensions)) as $attribute => $values)
		{
			if(is_string($attribute))
			{
				$dimension = Dimension::model()->findByAttributes(array($attribute => $values));
			}
			elseif(is_int($values))
			{
				$dimension = Dimension::model()->findByPk($values);
			}
			elseif(is_string($values))
			{
				$dimension = Dimension::model()->findByAttributes(array('name' => $values));
			}
			elseif($values instanceof Dimension)
			{
				$dimension = $values;
			}
			
			if($dimension !== null)
			{
				$this->_dimensions[$dimension->id] = $dimension;
			}
		}
	}
	
	public function getDimensions()
	{
		if(!isset($this->_dimensions))
		{
			$this->setDimensions(true);
		}
		return $this->_dimensions;
	}
	
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

	public function init() 
	{
		$this->setId('spencerPowell-userActivityWidget');
		$this->actionPrefix = 'spencerpowell.';
		parent::init();
	}
	
	public function run() 
	{
		$this->render(
				'index', 
				array(
						'dimensions' => $this->getDimensions(), 
						'Activity' => new Activity(), 
						'UserActivity' => new UserActivity(),
						'activitySearchModel' => new Activity('search')
				)
		);
	}
	
	public function actionLogActivityGrid(array $Activity = array())
	{
		$model = new Activity('search');
		$model->setAttributes($Activity);
		$this->render('logActivityGrid', array('activitySearchModel' => $model));
	}
	
	public function actionLogActivity(array $UserActivity = array(), $ajax = null)
	{
		if(Yii::app()->getRequest()->getIsPostRequest() || 
				Yii::app()->getRequest()->getIsPutRequest() || 
				Yii::app()->getRequest()->getIsDeleteRequest())
		{
			if(Yii::app()->getRequest()->getIsPostRequest())
			{
				$UserActivityModel = new UserActivity();
			}
			elseif(!isset($UserActivity['id']))
			{
				$UserActivityModel = new UserActivity();
				$UserActivityModel->addError('id', t('The user activity\'s ID must be specified in order to perform an update.'));
			}
			else
			{
				$UserActivityModel = UserActivity::model()->findByPk($UserActivity['id']);
				if($UserActivityModel === null || $UserActivityModel->user_id !== $this->getUser()->getId())
				{
					$UserActivityModel->addError('user_id',  t('A user activity with ID {id} could not be found for user {user}.', array('{id}' => $UserActivity['id'], '{user}' => $this->getUser()->getName())));
				}
				$activity = Activity::model()->with('recommendedDimensions')->findByPk($UserActivityModel->activity_id);
			}
			if(!$UserActivityModel->hasErrors())
			{
				if(Yii::app()->getRequest()->getIsPostRequest() || Yii::app()->getRequest()->getIsPutRequest())
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
					if((!isset($ajax) || $ajax !== $this->getId().'-userActivityForm') && !$UserActivityModel->hasErrors())
					{
						$transaction = $UserActivityModel->getDbConnection()->beginTransaction();
						try
						{
							if($UserActivityModel->save(false))
							{
								if(Yii::app()->getRequest()->getIsPutRequest())
								{
									foreach($UserActivityModel->getRelated('dimensions', true) as $dimension)
									{
										if (($key = array_search($dimension->id, $UserActivity['dimensions'])) !== false)
										{
											unset($UserActivity['dimensions'][$key]);
										}
										else
										{
											$dimension->delete();
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
										$UserActivityModel->addError('dimensions', implode(' & ',$UserActivityDimension->getErrors()));
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
								$result = array('success' => t('Activity sucessfully '.(Yii::app()->getRequest()->getIsPostRequest() ? 'logged' : 'updated').'.'));
								$transaction->commit();
							}
						}
						catch(Exception $e)
						{
							$transaction->rollback();
							throw $e;
						}
					}
					$activity = $UserActivityModel->getIsNewRecord() ? new Activity() : $UserActivityModel->activity;
				}
				elseif(!isset($ajax) || $ajax !== $this->getId().'-userActivityForm')
				{
					if($UserActivityModel->delete() > 0)
					{
						$result = array('success' => t('Activity sucessfully removed.'));
					}
					else
					{
						$UserActivityModel->addError('id', t('No activity was removed. The activity may have already been removed.'));
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
			elseif(!isset($result))
			{
				$result = array('success' => true);
			}
		}
		else
		{
			$UserActivityModel = new UserActivity();
			if(isset($UserActivity['activity_id']))
			{
				$activity = Activity::model()->with('recommendedDimensions')->findByPk($UserActivity['activity_id']);
				if($activity === null)
				{
					throw new CHttpException(404, t('An activity with ID {id} could not be found.', array('{id}' => $UserActivity['activity_id'])));
				}
				$UserActivityModel->activity_id = $activity->id;
			}
			else
			{
				$activity = new Activity();
			}
			$result = array(
					'name' => $activity->name,
					'description' => $activity->description,
					'dateCompleted' => $UserActivityModel->dateCompleted,
					'comment' => $UserActivityModel->comment,
					'activity_id' => $UserActivityModel->activity_id,
					'id' => $UserActivityModel->id
			);
			foreach($activity->recommendedDimensions as $dimension)
			{
				$result['dimensions'][] = array('val' => $dimension->id, 'text' => $dimension->name);
			}
		}
		echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}
	
	public function actionDimension($id, $date = null, $range = 'day', array $UserActivity = array())
	{
		$this->_actionDimension($id, $date, $range, $UserActivity, false);
	}
	
	protected function _actionDimension($id, $date = null, $range = 'day', array $UserActivity = array(), $return = false)
	{
		$id = intval($id);
		$dimensions = $this->getDimensions();
		if(!isset($dimensions[$id]))
		{
			throw new CHttpException(404, t('Dimension with id {id} could not be found or was not enabled for this request.', array('{id}' => $id)));
		}
		
		$dimension = $dimensions[$id];
		$model = new UserActivity('search');
		$model->setAttributes($UserActivity);
		$model->user_id = $this->getUser()->getId();
		$time = $model->convertDateToDBformat($date);
		$model->dimension($dimension->id);
		$model->completed($time, $range);
		return $this->render('dimension', array('userActivitySearchModel' => $model, 'dimension' => $dimension, 'time' => $time, 'range' => $range), $return);
	}

}
?>
