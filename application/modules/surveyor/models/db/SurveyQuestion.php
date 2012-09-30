<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "{{survey_question}}".
 *
 * The followings are the available columns in table '{{survey_question}}':
 * @property integer $id
 * @property integer $type_id
 * @property string $text
 * @property integer $allow_many_options
 * @property integer $required
 * 
 * The followings are the available model relations:
 * @property SurveyQuestionType $type
 * @property Survey $survey
 * @property SurveyQuestionAnswer[] $answers
 * @property SurveyQuestionOption[] $options
 * @property User[] $users
 */
class SurveyQuestion extends CActiveRecord
{
	
	private $_optionIds;
	
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
        return '{{survey_question}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('survey_id, type_id, text, order', 'required'),
            array('type_id, survey_id, order', 'numerical', 'integerOnly' => true),
            array('text', 'length', 'max' => 255),
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
    public function relations()
    {
        return array(
        		'type' => array(self::BELONGS_TO, 'SurveyQuestionType', 'type_id'),
        		'survey' => array(self::BELONGS_TO, 'SurveyAR', 'survey_id'),
        		'answers' => array(self::HAS_MANY, 'SurveyAnswer', 'question_id'),
        		'options' => array(self::HAS_MANY, 'SurveyQuestionOption', 'question_id',
        						   'order' => 'options.order ASC'),
        		'users' => array(self::HAS_MANY, 'User', array('user_id' => 'id'),
        				'through' => 'answers'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('onlinecourseportal','ID'),
            'type_id' => Yii::t('onlinecourseportal','Type ID'),
            'text' => Yii::t('onlinecourseportal','Text'),
        	'type' => Yii::t('onlinecourseportal','Type'),
        	'survey' => Yii::t('onlinecourseportal','Survey'),
        	'answers' => Yii::t('onlinecourseportal','Answers'),
        	'options' => Yii::t('onlinecourseportal','Options'),
        	'users' => Yii::t('onlinecourseportal','Users'),
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
        $criteria->compare('type_id',$this->type_id);
        $criteria->compare('text',$this->text,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    public function getOptionIds() {
    	if(!isset($this->_optionsIds)) {
    		$this->_optionIds = array();
    		foreach($this->options as $option)
    			$this->_optionIds[] = $option->id;
    	}
    	return $this->_optionIds;
    }
    
    public function __get($name) {
    	if($name === 'text')
    		return Yii::t('onlinecourseportal', parent::__get($name));
    	return parent::__get($name);
    }
    
}

?>