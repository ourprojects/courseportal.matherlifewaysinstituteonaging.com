<?php  

Yii::import('surveyor.components.SActiveRecord');

/**
 * This is the model class for table "{{survey_question_option}}".
 *
 * The followings are the available columns in table '{{survey_question_option}}':
 * @property integer $id
 * @property integer $question_id
 * @property string $text
 * @property integer $order
 *
 * The followings are the available model relations:
 * @property SurveyQuestion $question
 * @property SurveyAnswerOption[] $answerOptions
 * @property SurveyAnswers[] $answers
*/
class SurveyQuestionOption extends SActiveRecord {

	private $_percentAnswered;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SurveySurveQuestionOption the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return '{{survey_question_option}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
			array('question_id, text, order', 'required'),
			array('question_id, order', 'numerical', 'integerOnly' => true),
			array('text', 'length', 'max' => 255),
			array('question_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyQuestion', 'allowEmpty' => false),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, question_id, text, order', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		return array(
			'question' => array(self::BELONGS_TO, 'SurveyQuestion', 'question_id'),
			'answerOptions' => array(self::HAS_MANY, 'SurveyAnswerOption', 'option_id'),
			'answerCount' => array(self::STAT, 'SurveyAnswerOption', 'option_id'),
			'answers' => array(self::MANY_MANY, 'SurveyAnswer', SurveyAnswerOption::model()->tableName().'(option_id, answer_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'id' => Yii::app()->getModule('surveyor')->t('ID'),
			'question_id' => Yii::app()->getModule('surveyor')->t('Question ID'),
			'text' => Yii::app()->getModule('surveyor')->t('Text'),
			'question' => Yii::app()->getModule('surveyor')->t('Question'),
			'answerOptions' => Yii::app()->getModule('surveyor')->t('Answer Options'),
			'answers' => Yii::app()->getModule('surveyor')->t('Answers'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('question_id', $this->question_id);
		$criteria->compare('text', $this->text, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	public function getPercentAnswered($refresh = false) {
		if($refresh || !isset($this->_percentAnswered))
			$this->_percentAnswered = $this->getRelated('question')->answerCount <= 0 ? 0 : $this->answerCount / $this->getRelated('question')->answerCount;
		return $this->_percentAnswered;
	}

}

?>