<?php  

Yii::import('surveyor.components.SActiveRecord');

/**
 * This is the model class for table "{{survey_answer}}".
 *
 * The followings are the available columns in table '{{survey_answer}}':
 * @property integer $user_id
 * @property integer $question_id
 *
 * The followings are the available model relations:
 * @property User $user
 * @property SurveyQuestion $question
 * @property SurveyAnswerOption[] $answerOptions
 * @property SurveyQuestionOption[] $options
*/
class SurveyAnswer extends SActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SurveyQuestionAnswer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{survey_answer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('question_id', 'required'),
			array('user_id', 'unsafe'),
			array('user_id', 'exist', 'attributeName' => 'id', 'className' => Yii::app()->getModule('surveyor')->userClass, 'allowEmpty' => true),
			array('question_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyQuestion', 'allowEmpty' => false),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, question_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'user' => array(self::BELONGS_TO, Yii::app()->getModule('surveyor')->userClass, 'user_id'),
			'question' => array(self::BELONGS_TO, 'SurveyQuestion', 'question_id'),
			'answerText' => array(self::HAS_ONE, 'SurveyAnswerText', 'answer_id'),
			'answerOptions' => array(self::HAS_MANY, 'SurveyAnswerOption', 'answer_id'),
			'options' => array(self::MANY_MANY, 'SurveyQuestionOption', SurveyAnswerOption::model()->tableName().'(answer_id, option_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => Yii::app()->getModule('surveyor')->t('User ID'),
			'question_id' => Yii::app()->getModule('surveyor')->t('Survey Question ID'),
			'user' => Yii::app()->getModule('surveyor')->t('User'),
			'question' => Yii::app()->getModule('surveyor')->t('Question'),
			'answerText' => Yii::app()->getModule('surveyor')->t('Answer Text'),
			'answerOptions' => Yii::app()->getModule('surveyor')->t('Answer Options'),
			'options' => Yii::app()->getModule('surveyor')->t('Options'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('question_id',$this->question_id);
		$criteria->compare('option_id',$this->option_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}

?>