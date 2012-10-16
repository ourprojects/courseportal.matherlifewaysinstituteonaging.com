<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "{{survey_question_type}}".
 *
 * The followings are the available columns in table '{{survey_question_type}}':
 * @property integer $id
 * @property string $name
 * 
 * The followings are the available model relations:
 * @property SurveyQuestion[] $questions
 * @property Answer[] $answers
 * @property Survey[] $surveys
 */
class SurveyQuestionType extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SurveyQuestionType the static model class
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
        return '{{survey_question_type}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 64),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'questions' => array(self::HAS_MANY, 'SurveyQuestion', 'type_id',
        						'order' => 'questions.order ASC'),
        		'surveys' => array(self::HAS_MANY, 'SurveyAR', array('survey_id' => 'id'),
        				'through' => 'questions'),
        		'answers' => array(self::HAS_MANY, 'SurveyAnswer', array('id' => 'question_id'),
        				'through' => 'questions'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => SurveyorModule::t('ID'),
            'name' => SurveyorModule::t('Name'),
        	'questions' => SurveyorModule::t('Questions'),
        	'surveys' => SurveyorModule::t('Surveys'),
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
        $criteria->compare('name',$this->name,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}

?>