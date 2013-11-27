<?php  

Yii::import('surveyor.components.SActiveRecord');

/**
 * This is the model class for table "{{survey}}".
 *
 * The followings are the available columns in table '{{survey}}':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property integer $anonymous
 *
 * The followings are the available model relations:
 * @property SurveyQuestion[] $questions
 * @property SurveyQuestionOption[] $options
 * @property SurveyQuestionType[] $types
 * @property SurveyAnswer[] $answers
*/
class SurveyAR extends SActiveRecord {

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SurveyQuestion the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return '{{survey}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
			array('id, name, anonymous', 'required'),
			array('id', 'numerical', 'integerOnly' => true),
			array('anonymous', 'boolean'),
			array('name', 'length', 'max' => 255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, title, description, anonymous', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
			'questions' => array(self::HAS_MANY, 'SurveyQuestion', 'survey_id', 'order' => 'questions.order ASC'),
			'questionCount' => array(self::STAT, 'SurveyQuestion', 'survey_id'),
			'options' => array(self::HAS_MANY, 'SurveyQuestionOption', array('id' => 'question_id'), 'through' => 'questions', 'order' => 'questions.order, options.order ASC'),
			'types' => array(self::MANY_MANY, 'SurveyQuestionType', SurveyQuestion::model()->tableName().'(survey_id, type_id)'),
			'answers' => array(self::HAS_MANY, 'SurveyAnswer', array('id' => 'question_id'), 'through' => 'questions'),
		);
	}

	public function statistics() {
		$this->getDbCriteria()->mergeWith(array('with' => array('questions' => array('with' => 'options', 'type'))));
		return $this;
	}

	public function form() {
		$this->getDbCriteria()->mergeWith(array('with' => array('questions' => array('with' => array('options', 'type')))));
		return $this;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			// column attributes
			'id' => SurveyorModule::t('ID'),
			'name' => SurveyorModule::t('Name'),
			'title' => SurveyorModule::t('Title'),
			'description' => SurveyorModule::t('Description'),
			'anonymous' => SurveyorModule::t('Anonymous'),
			'after_submit_message' => SurveyorModule::t('After Submit Message'),
				
			// relational attributes
			'questions' => SurveyorModule::t('Questions'),
			'questionsCount' => SurveyorModule::t('Question Count'),
			'options' => SurveyorModule::t('Options'),
			'types' => SurveyorModule::t('Question Types'),
			'answers' => SurveyorModule::t('Answers'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('after_submit_message', $this->after_submit_message, true);
		$criteria->compare('anonymous', $this->anonymous);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	public function getForm() {
		return new SurveyForm($this);
	}

}

?>