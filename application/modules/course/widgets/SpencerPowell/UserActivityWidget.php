<?php
class UserActivityWidget extends CInputWidget 
{
	
	public $user;
	
	public $admin = false;
	
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

	public function init() 
	{
		$this->setId('spencerPowell-userActivityWidget');
		$this->actionPrefix = 'spencerpowell.';
		parent::init();
	}
	
	public function run() 
	{
		$this->actionDimension();
	}
	
	public function actionLogActivity(array $UserActivity = array(), $ajax = null)
	{
		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$UserActivityModel = new UserActivity();
		}
		elseif(Yii::app()->getRequest()->getIsPutRequest() || Yii::app()->getRequest()->getIsDeleteRequest())
		{
			if(!isset($UserActivity['id']))
			{
				throw new CHttpException(400, t('A user activity ID must be specified.'));
			}
			else
			{
				$UserActivityModel = UserActivity::model()->findByPk($UserActivity['id']);
				if($UserActivityModel === null || $UserActivityModel->user_id !== Yii::app()->getUser()->getId())
				{
					throw new CHttpException(404, t('A user activity with ID {id} could not be found for user {user}.', array('{id}' => $UserActivity['id'], '{user}' => Yii::app()->getUser()->getName())));
				}
				$activity = Activity::model()->with('recommendedDimensions')->findByPk($UserActivityModel->activity_id);
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
		}
		
		if(Yii::app()->getRequest()->getIsPostRequest() || Yii::app()->getRequest()->getIsPutRequest())
		{
			$UserActivityModel->setAttributes($UserActivity);
			$UserActivityModel->user_id = Yii::app()->getUser()->getId();
			$UserActivityModel->validate();
			if(empty($UserActivity['dimensions']))
			{
				$UserActivityModel->addError('dimensions', t('The activity must be logged for at least one dimension.'));
			}
			
			if(isset($ajax) && $ajax === $this->getId().'-logActivityForm')
			{
				$result = array();
				foreach($UserActivityModel->getErrors() as $attribute => $errors)
				{
					$result[CHtml::activeId($model, $attribute)] = $errors;
				}
				echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
			}
			elseif(!$UserActivityModel->hasErrors())
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
							$UserActivityDimension->dimension_id = $UserActivityModel->dimensionId;
							if(!$UserActivityDimension->save())
							{
								$UserActivityModel->addError('dimensions', implode(' & ',$UserActivityDimension->getErrors()));
								break;
							}
						}
						Yii::app()->getUser()->setFlash($this->getId().'-success', t('Activity '.(Yii::app()->getRequest()->getIsPostRequest() ? 'created' : 'updated').' sucessfully.'));
					}
					if($UserActivityModel->hasErrors())
					{
						$transaction->rollback();
					}
					else
					{
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
		elseif(Yii::app()->getRequest()->getIsDeleteRequest())
		{
			if($UserActivityModel->delete() > 0)
			{
				Yii::app()->getUser()->setFlash($this->getId().'-success', t('Activity deleted sucessfully.'));
			}
		}
		
		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			$data = array(
					'name' => $activity->name,
					'description' => $activity->description,
					'dateCompleted' => $UserActivityModel->dateCompleted,
					'comment' => $UserActivityModel->comment,
					'activity_id' => $UserActivityModel->activity_id,
					'id' => $UserActivityModel->id
			);
			foreach($activity->recommendedDimensions as $dimension)
			{
				$data['dimensions'][] = array('val' => $dimension->id, 'text' => $dimension->name);
			}
			echo CJSON::encode($data);
		}
		else
		{
			$this->render('activityList', array('activity' => $activity, 'UserActivity' => $UserActivityModel));
		}
	}
	
	public function actionDimension($id = null, $date = null, $range = 'day')
	{
		$this->_actionDimension($id, $date, $range, false);
	}
	
	protected function _actionDimension($id = null, $date = null, $range = 'day', $return = false)
	{
		if(isset($id))
		{
			$userActivityModel = new UserActivity('search');
			if(is_int($date))
			{
				$time = $date;
			}
			elseif(is_string($date))
			{
				$time = strtotime($date);
			}
			else
			{
				$time = time();
			}
			
			$dimensions = $this->getDimensions();
			if(!isset($dimensions[$id]))
			{
				throw new CHttpException(404, t('Dimension with id {id} could not be found or was not enabled for this request.', array('{id}' => $id)));
			}
			
			$userActivityModel->dimension($id);
			$userActivityModel->completed($time, $range);
			return $this->render('dimension', array('userActivityModel' => $userActivityModel, 'dimension' => $dimensions[$id], 'time' => $time, 'range' => $range), $return);
		}
		return $this->render('dimensionTabs', array('dimensions' => $this->getDimensions()), $return);
	}

}
?>