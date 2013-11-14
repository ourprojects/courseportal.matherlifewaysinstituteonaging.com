<?php

class DimensionAction extends CAction
{
	
	public $widgetId;
	
	public $actionPrefix;
	
	private $_user;
	
	private $_dimensions;
	
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

	public function run($id, $date = null, $range = 'week', array $UserActivity = array())
	{
		$this->actionDimension($id, $date, $range, $UserActivity, false);
	}
	
	public function actionDimension($id, $date = null, $range = 'week', array $UserActivity = array(), $return = false)
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
		return $this->getController()->renderPartial('course.widgets.SpencerPowell.views.dimension', array('userActivitySearchModel' => $model, 'dimension' => $dimension, 'time' => $time, 'range' => $range, 'actionPrefix' => $this->actionPrefix, 'id' => $this->widgetId), $return);
	}
	
	public function widget($className, $properties = array(), $captureOutput = false)
	{
		return $this->getController()->widget($className, $properties, $captureOutput);
	}

}

?>
