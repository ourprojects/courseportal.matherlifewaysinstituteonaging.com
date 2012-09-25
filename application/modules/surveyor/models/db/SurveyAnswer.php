<?php defined('BASEPATH') or exit('No direct script access allowed');  

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
class SurveyAnswer extends CActiveRecord
{
	
	private $_newOptions = array();
	
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
            array('user_id, question_id', 'required'),
        	array('user_id', 'unsafe'),
        	array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'User', 'allowEmpty' => false),
        	array('question_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyQuestion', 'allowEmpty' => false),
        	array('_newOptions', 'validateNewOptions'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('user_id, question_id', 'safe', 'on'=>'search'),
        );
    }
    
    public function getOptionIds() {
    	$ids = array();
    	foreach($this->_newOptions as $option)
    		$ids[$option->option_id] = $option->option_id;
    	foreach($this->answerOptions as $option)
    		if(!isset($ids[$option->option_id]))
    			$ids[$option->option_id] = $option->option_id;
    	return $ids;
    }
    
    public function addOptionIds($optionIds) {
    	if(is_array($optionIds)) {
    		foreach($optionIds as $optionId) {
    			$option = new SurveyAnswerOption;
    			$option->option_id = $optionId;
    			$this->_newOptions[$optionId] = $option;
    		}
    	} else {
    		$option = new SurveyAnswerOption;
    		$option->option_id = $optionIds;
    		$this->_newOptions[$optionIds] = $option;
    	}
    }
    
    public function validateNewOptions($attribute, $params) {
    	if(empty($this->$attribute) && empty($this->answerOptions))
    		$this->addError($this->question_id, 'Please answer this question.');
    	if(count($this->$attribute) > 1 && !$this->question->allow_many_options) {
    		$this->addError($this->question_id, 'Only one option is allowed for this question.');
    		return;
    	}
    	$validOptionIds = array();
    	foreach($this->question->options as $option)
    		$validOptionIds[] = $option['id'];
    	foreach($this->$attribute as $newOption) {
    		if(!in_array($newOption->option_id, $validOptionIds)) {
    			$this->addError($this->question_id, 'Invalid option.');
    			return;
    		}
    	}
    }
    
    public function save($validate = true) {
    	if(!$validate || $this->validate()) {
    		if($this->getScenario() === 'insert') {
    			if(!parent::save(false))
    				return false;
	    		foreach($this->_newOptions as $option) {
	    			$option->answer_id = $this->id;
	    			if(!$option->save($validate)) {
	    				$this->addErrors($option->getErrors());
	    				return false;
	    			}
	    		}
	    		return true;
    		} else {
    			foreach($this->answerOptions as $key => $option) {
    				if(!isset($this->_newOptions[$option->option_id])) {
    					if(!$option->delete())
    						return false;
    				} else {
    					unset($this->_newOptions[$option->option_id]);
    				}
    			}
    			foreach($this->_newOptions as $option) {
    				$option->answer_id = $this->id;
    				if(!$option->save($validate)) {
	    				$this->addErrors($option->getErrors());
	    				return false;
	    			}
    			}
    		}
    		return parent::save(false);
    	}
    	return false;
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        		'question' => array(self::BELONGS_TO, 'SurveyQuestion', 'question_id'),
        		'answerOptions' => array(self::HAS_MANY, 'SurveyAnswerOption', 'answer_id'),
        		'options' => array(self::HAS_MANY, 'SurveyQuestionOption', array('option_id' => 'id'),
        				'through' => 'answerOptions'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'user_id' => Yii::t('onlinecourseportal', 'User ID'),
            'question_id' => Yii::t('onlinecourseportal', 'Survey Question ID'),
        	'user' => Yii::t('onlinecourseportal', 'User'),
        	'question' => Yii::t('onlinecourseportal', 'Question'),
        	'answerOptions' => Yii::t('onlinecourseportal', 'Answer Options'),
        	'options' => Yii::t('onlinecourseportal', 'Options'),
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