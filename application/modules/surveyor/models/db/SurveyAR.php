<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "{{survey}}".
 *
 * The followings are the available columns in table '{{survey}}':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $anonymous
 * 
 * The followings are the available model relations:
 * @property SurveyQuestion[] $questions
 * @property SurveyQuestionOption[] $options
 * @property SurveyQuestionType[] $types
 * @property SurveyAnswer[] $answers
 */
class SurveyAR extends CActiveRecord
{
	
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SurveyQuestion the static model class
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
        return '{{survey}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('id, name, anonymous', 'required'),
            array('id', 'numerical', 'integerOnly' => true),
        	array('anonymous', 'boolean'),
            array('name', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, text', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'questions' => array(self::HAS_MANY, 'SurveyQuestion', 'survey_id', 
        				'order' => 'questions.order ASC'),
        		'options' => array(self::HAS_MANY, 'SurveyQuestionOption', array('id' => 'question_id'), 
        				'through' => 'questions',
        				'order' => 'questions.order, options.order ASC'),
        		'types' => array(self::HAS_MANY, 'SurveyQuestionType', array('type_id' => 'id'),
        				'through' => 'questions'),
        		'answers' => array(self::HAS_MANY, 'SurveyAnswer',  array('id' => 'question_id'),
        				'through' => 'questions')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('onlinecourseportal', 'ID'),
            'name' => Yii::t('onlinecourseportal', 'Name'),
        	'description' => Yii::t('onlinecourseportal', 'Description'),
        	'questions' => Yii::t('onlinecourseportal', 'Questions'),
        	'options' => Yii::t('onlinecourseportal', 'Options'),
        	'types' => Yii::t('onlinecourseportal', 'Question Types'),
        	'answers' => Yii::t('onlinecourseportal', 'Answers'),
        	'anonymous' => Yii::t('onlinecourseportal', 'Anonymous'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    public function __get($name) {
    	if($name === 'name' || $name === 'description')
    		return Yii::t('onlinecourseportal', parent::__get($name));
    	return parent::__get($name);
    }
    
    public function getForm() {
    	return new SurveyForm($this);
    }
    
}

?>