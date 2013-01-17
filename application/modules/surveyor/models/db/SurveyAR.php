<?php defined('BASEPATH') or exit('No direct script access allowed');  

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
        		'questions' => array(self::HAS_MANY, 'SurveyQuestion', 'survey_id', 
        				'order' => 'questions.order ASC'),
        		'questionCount' => array(self::STAT, 'SurveyQuestion', 'survey_id'), 
        		'options' => array(self::HAS_MANY, 'SurveyQuestionOption', array('id' => 'question_id'), 
        				'through' => 'questions',
        				'order' => 'questions.order, options.order ASC'),
        		'types' => array(self::HAS_MANY, 'SurveyQuestionType', array('type_id' => 'id'),
        				'through' => 'questions'),
        		'answers' => array(self::HAS_MANY, 'SurveyAnswer', array('id' => 'question_id'), 'through' => 'questions'),
        );
    }
    
	public function statistics() {
		$this->getCDbCriteria()->mergeWith(array('with' => array('questions' => array('with' => 'options'))));
		return $this;
	}
	
	public function form() {
		$this->getCDbCriteria()->mergeWith(array('with' => array('questions' => array('with' => array('options', 'type')))));
		return $this;
	}

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Surveyor::t('ID'),
            'name' => Surveyor::t('Name'),
        	'title' => Surveyor::t('Title'),
        	'description' => Surveyor::t('Description'),
        	'questions' => Surveyor::t('Questions'),
        	'options' => Surveyor::t('Options'),
        	'types' => Surveyor::t('Question Types'),
        	'answers' => Surveyor::t('Answers'),
        	'anonymous' => Surveyor::t('Anonymous'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title);
        $criteria->compare('description', $this->description);
        $criteria->compare('name', $this->name);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    public function getForm() {
    	return new SurveyForm($this);
    }
    
}

?>