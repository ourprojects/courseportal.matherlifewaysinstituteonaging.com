<?php  

/**
 * This is the model class for table "{{survey_question}}".
 *
 * The followings are the available columns in table '{{survey_question}}':
 * @property integer $id
 * @property integer $type_id
 * @property string $text
 * @property integer $order
 * @property boolean $required
 * 
 * The followings are the available model relations:
 * @property SurveyQuestionType $type
 * @property Survey $survey
 * @property SurveyQuestionAnswer[] $answers
 * @property SurveyQuestionOption[] $options
 * @property User[] $users
 */
class SurveyQuestion extends SActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SurveyQuestion the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{survey_question}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            array('survey_id, type_id, text, order', 'required'),
            array('order', 'numerical', 'integerOnly' => true),
            array('text', 'length', 'max' => 255),
        	array('required', 'boolean'),
        	array('type_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyQuestionType', 'allowEmpty' => false),
        	array('survey_id', 'exist', 'attributeName' => 'id', 'className' => 'Survey', 'allowEmpty' => false),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, type_id, survey_id, text, order', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
        		'type' => array(self::BELONGS_TO, 'SurveyQuestionType', 'type_id'),
        		'survey' => array(self::BELONGS_TO, 'SurveyAR', 'survey_id'),
        		'answers' => array(self::HAS_MANY, 'SurveyAnswer', 'question_id'),
        		'answerCount' => array(self::STAT, 'SurveyAnswer', 'question_id'),
        		'options' => array(self::HAS_MANY, 'SurveyQuestionOption', 'question_id', 'order' => 'options.order ASC'),
        		'optionCount' => array(self::STAT, 'SurveyQuestionOption', 'question_id'),
        		'users' => array(self::HAS_MANY, Yii::app()->params['userModelClassName'], array('user_id' => 'id'),
        				'through' => 'answers'),
        );
    }
    
    public function statistics() {
    	$this->getCDbCriteria()->mergeWith(array('with' => 'options'));
    	return $this;
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
        	// column attributes
            'id' => Surveyor::t('ID'),
            'type_id' => Surveyor::t('Type ID'),
            'text' => Surveyor::t('Text'),
        	'required' => Surveyor::t('Required'),
        		
        	// relational attributes
        	'type' => Surveyor::t('Type'),
        	'survey' => Surveyor::t('Survey'),
        	'answers' => Surveyor::t('Answers'),
        	'options' => Surveyor::t('Options'),
        	'users' => Surveyor::t('Users'),
        	'optionCount' => Surveyor::t('Option Count'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('type_id', $this->type_id);
        $criteria->compare('order', $this->order);
        $criteria->compare('text', $this->text, true);
        $criteria->compare('required', $this->required);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
}

?>