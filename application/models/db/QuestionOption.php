<?php

/**
 * This is the model class for table "{{question_option}}".
 *
 * The followings are the available columns in table '{{question_option}}':
 * @property integer $id
 * @property integer $question_id
 * @property string $text
 * 
 * The followings are the available model relations:
 * @property Question $question
 */
class QuestionOption extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return QuestionOption the static model class
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
        return '{{question_option}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('question_id, text', 'required'),
            array('question_id', 'numerical', 'integerOnly'=>true),
            array('text', 'length', 'max'=>255),
        	array('question_id', 'exist', 'attributeName' => 'id', 'className' => 'Question', 'allowEmpty' => false),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, question_id, text', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'question' => array(self::BELONGS_TO, 'Question', 'question_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('onlinecourseportal','ID'),
            'question_id' => Yii::t('onlinecourseportal','Question'),
            'text' => Yii::t('onlinecourseportal','Text'),
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