<?php

/**
 * This is the model class for table "{{question_answer}}".
 *
 * The followings are the available columns in table '{{question_answer}}':
 * @property integer $user_id
 * @property integer $question_id
 * @property integer $option_id
 * 
 * The followings are the available model relations:
 * @property UserProfile $userProfile
 * @property Question $question
 * @property QuestionOption $option
 */
class QuestionAnswer extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return QuestionAnswer the static model class
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
        return '{{question_answer}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('user_id, question_id, option_id', 'required'),
        	array('user_id', 'unsafe'),
        	array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'User', 'allowEmpty' => false),
        	array('question_id', 'exist', 'attributeName' => 'id', 'className' => 'Question', 'allowEmpty' => false),
        	array('option_id', 'exist', 'attributeName' => 'id', 'className' => 'QuestionOption', 'allowEmpty' => false),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('user_id, question_id, option_id', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'userProfile' => array(self::BELONGS_TO, 'UserProfile', 'user_id'),
        		'question' => array(self::BELONGS_TO, 'Question', 'question_id'),
        		'option' => array(self::BELONGS_TO, 'QuestionOption', 'option_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'user_id' => Yii::t('onlinecourseportal','User'),
            'question_id' => Yii::t('onlinecourseportal','Question'),
            'option_id' => Yii::t('onlinecourseportal','Option'),
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