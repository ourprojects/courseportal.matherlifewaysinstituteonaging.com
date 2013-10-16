<?php
/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property integer $id
 * @property integer $course_id
 * @property integer $rank
 * @property string $text
 *
 * The followings are the available model relations:
 * @property Course $course
 */
class CourseObjective extends CActiveRecord 
{

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return '{{course_objective}}';
	}

	public function behaviors()
	{
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'application.behaviors.EModelBehaviors'),
						'ERememberFiltersBehavior' => array(
								'class' => 'ext.ERememberFiltersBehavior.ERememberFiltersBehavior',
						),
						'EActiveRecordAutoQuoteBehavior' => array(
								'class' => 'ext.EActiveRecordAutoQuoteBehavior.EActiveRecordAutoQuoteBehavior',
						)
				));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
				array('id', 'unsafe', 'except' => 'search'),
				array('course_id, rank, text', 'required'),
				array('id, course_id, rank', 'numerical', 'integerOnly' => true),
				array('text', 'length', 'max' => 65535),
				array('course_id', 'exist', 'attributeName' => 'id', 'className' => 'Course'),
				array('+rank+course_id',
						'ext.LDCompositeUniqueValidator.LDCompositeUniqueValidator',
						'message' => t('An objective with {attribute} "{value}" already exists for this course.'),
				),
				array('id, course_id, rank, text', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return array(
				'id' => t('ID'),
				'course_id' => t('Course ID'),
				'rank' => t('Rank'),
				'text' => t('Text'),
				'course' => t('Course'),
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
		$criteria->order = $db->quoteColumnName($tableAlias.'.rank');
		$criteria->compare($db->quoteColumnName($tableAlias.'.id'), $this->id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.course_id'), $this->course_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.rank'), $this->rank);
		$criteria->compare($db->quoteColumnName($tableAlias.'.text'), $this->text, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
		));
	}

}
