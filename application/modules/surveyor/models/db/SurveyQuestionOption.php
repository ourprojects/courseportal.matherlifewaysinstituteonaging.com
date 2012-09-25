<?php defined('BASEPATH') or exit('No direct script access allowed');  

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
class SurveyQuestionOption extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SurveySurveQuestionOption the static model class
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
        return '{{survey_question_option}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('question_id, text, order', 'required'),
            array('question_id, order', 'numerical', 'integerOnly' => true),
            array('text', 'length', 'max' => 255),
        	array('question_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyQuestion', 'allowEmpty' => false),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, question_id, text, order', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'question' => array(self::BELONGS_TO, 'SurveyQuestion', 'question_id'),
        		'answerOptions' => array(self::HAS_MANY, 'SurveyAnswerOption', 'option_id'),
        		'answers' => array(self::HAS_MANY, 'SurveyAnswer', array('answer_id' => 'id'),
        				'through' => 'answerOptions'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('onlinecourseportal','ID'),
            'question_id' => Yii::t('onlinecourseportal','Question ID'),
            'text' => Yii::t('onlinecourseportal','Text'),
        	'question' => Yii::t('onlinecourseportal','Question'),
        	'answerOptions' => Yii::t('onlinecourseportal','Answer Options'),
        	'answers' => Yii::t('onlinecourseportal','Answers'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('question_id',$this->question_id);
        $criteria->compare('text',$this->text,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
	public function __toString() {
        return $this->text;
    }
    
}

?>