<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "{{survey_answer_option}}".
 *
 * The followings are the available columns in table '{{survey_answer_option}}':
 * @property integer $answer_id
 * @property integer $option_id
 * 
 * The followings are the available model relations:
 * @property SurveyAnswer $answer
 * @property SurveyQuestionOption $option
 */
class SurveyAnswerOption extends CActiveRecord
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
        return '{{survey_answer_option}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('option_id, answer_id', 'required'),
        	array('answer_id', 'unsafe'),
        	array('answer_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyAnswer', 'allowEmpty' => false),
        	array('option_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyQuestionOption', 'allowEmpty' => false),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('user_id, answer_id', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'answer' => array(self::BELONGS_TO, 'SurveyAnswer', 'answer_id'),
        		'option' => array(self::HAS_ONE, 'SurveyQuestionOption', 'option_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'answer_id' => t('Answer ID'),
            'option_id' => t('Option ID'),
        	'option' => t('Option'),
        	'option' => t('Answer'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('answer_id',$this->answer_id);
        $criteria->compare('option_id',$this->option_id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}

?>