<?php

/**
 * This is the model class for table "{{spencer_powell_user_activity}}".
 *
 * The followings are the available columns in table '{{spencer_powell_user_activity}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $activity_id
 * @property integer $completed
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Activity $activity
 * @property CourseUser $user
 * @property UserActivityDimension[] $userActivityDimensions User Activity Dimensions
 * @property Dimension[] $dimensions Activity Dimensions
 */
class UserActivity extends CActiveRecord
{
	
	public $dateFormat = 'm/d/Y';
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserActivity the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{spencer_powell_user_activity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('user_id, activity_id, comment', 'required'),
			array('completed', 'default', 'setOnEmpty' => true, 'value' => time(), 'except' => 'search'),
			array('user_id, activity_id, completed', 'numerical', 'integerOnly' => true),
			array('user_id', 'exist', 'attributeName' => Yii::app()->getModule(CourseUser::COURSE_MODULE_NAME)->userId, 'className' => 'CourseUser', 'except' => 'search'),
			array('activity_id', 'exist', 'attributeName' => 'id', 'className' => 'Activity', 'except' => 'search'),
			array('comment', 'length', 'max' => 65535),
			array('dateCompleted', 'safe'),
			array('id, user_id, activity_id, completed, comment', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'activity' => array(self::BELONGS_TO, 'Activity', 'activity_id'),
			'user' => array(self::BELONGS_TO, 'CourseUser', 'user_id'),
			'userActivityDimensions' => array(self::HAS_MANY, 'UserActivityDimension', 'user_activity_id'),
			'dimensions' => array(self::MANY_MANY, 'Dimension', UserActivityDimension::model()->tableName().'(user_activity_id, dimension_id)'),
				
			'crTotal' => array(self::STAT, 'Activity', 'id', 'select' => 'SUM('.Activity::model()->getDbConnection()->quoteColumnName(Activity::model()->getTableAlias().'.cr').')')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// column attributes
			'id' => t('ID'),
			'user_id' => t('User ID'),
			'activity_id' => t('Activity ID'),
			'completed' => t('Completed On'),
			'comment' => t('Comment'),
				
			// Virtual attributes
			'dateCompleted' => t('Completed On'),
				
			// relation attributes 
			'activity' => t('Activity'),
			'user' => t('User'),
			'userActivityDimensions' => t('User Activity Dimensions'),
			'dimensions' => t('Dimensions'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$tableAlias = $this->getTableAlias();
		$db = $this->getDbConnection();
		$criteria->compare($db->quoteColumnName($tableAlias.'.id'), $this->id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.user_id'), $this->user_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.activity_id'), $this->activity_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.completed'), $this->completed);
		$criteria->compare($db->quoteColumnName($tableAlias.'.comment'), $this->comment, true);
		
		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
	
	public function dimension($dimensionId)
	{
		$this->getDbCriteria()->mergeWith(array('with' => array('userActivityDimensions' => array('condition' => $this->getDbConnection()->quoteColumnName('userActivityDimensions.dimension_id').'=:dimension_id', 'params' => array(':dimension_id' => $dimensionId)))));
		return $this;
	}
	
	public function completed($date = null, $range = null)
	{
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
		
		$criteria = array('condition' => '('.$this->getDbConnection()->quoteColumnName($this->getTableAlias().'.completed').' BETWEEN :start AND :end)');
		switch($range)
		{
			case 'day':
				$criteria['params'] = array(':start' => mktime(0, 0, 0, date('n', $time), date('j', $time), date('Y', $time)), ':end' => mktime(0, 0, 0, date('n', $time), date('j', $time) + 1, date('Y', $time)));
				break;
			case 'week':
				$criteria['params'] = array(':start' => mktime(0, 0, 0, date('n', $time), date('j', $time) - (6 - (date('w', $time) % 6)), date('Y', $time)), ':end' => mktime(0, 0, 0, date('n', $time) + 1, date('j', $time) + (date('w', $time) % 6), date('Y', $time)));
				break;
			case 'month':
				$criteria['params'] = array(':start' => mktime(0, 0, 0, date('n', $time), 0, date('Y', $time)), ':end' => mktime(0, 0, 0, date('n', $time) + 1, 0, date('Y', $time)));
				break;
			case 'year':
				$criteria['params'] = array(':start' => mktime(0, 0, 0, 0, 0, date('Y', $time)), ':end' => mktime(0, 0, 0, 0, 0, date('Y', $time) + 1));
				break;
			default:
				$criteria['params'] = array(':start' => $time, ':end' => $time);
				break;
		}
		$this->getDbCriteria()->mergeWith($criteria);
		return $this;
	}
	
	public function getDateCompleted()
	{
		return isset($this->completed) ? date($this->dateFormat, $this->completed) : null;
	}
	
	public function setDateCompleted($date)
	{
		if(is_int($date))
		{
			$this->completed = $date;
		}
		elseif(is_string($date))
		{
			$this->completed = strtotime($date);
		}
	}
	
}
