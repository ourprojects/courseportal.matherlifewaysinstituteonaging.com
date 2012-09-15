<?php defined('BASEPATH') or exit('No direct script access allowed');  

/**
 * This is the model class for table "{{question}}".
 *
 * The followings are the available columns in table '{{question}}':
 * @property integer $id
 * @property integer $type_id
 * @property string $text
 * 
 * The followings are the available model relations:
 * @property QuestionType $type
 * @property QuestionAnswer[] $answers
 * @property QuestionOption[] $options
 */
class Question extends CActiveRecord
{
	public $multipleAnswersAllowed = false;
	
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Question the static model class
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
        return '{{question}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('type_id, text', 'required'),
            array('type_id', 'numerical', 'integerOnly' => true),
            array('text', 'length', 'max' => 255),
        	array('type_id', 'exist', 'attributeName' => 'id', 'className' => 'QuestionType', 'allowEmpty' => false),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, type_id, text', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        		'type' => array(self::BELONGS_TO, 'QuestionType', 'type_id'),
        		'answers' => array(self::HAS_MANY, 'QuestionAnswer', 'question_id'),
        		'options' => array(self::HAS_MANY, 'QuestionOption', 'question_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('onlinecourseportal','ID'),
            'type_id' => Yii::t('onlinecourseportal','Type'),
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
        $criteria->compare('type_id',$this->type_id);
        $criteria->compare('text',$this->text,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    public function getOptionsData() {
    	$data = array();
    	foreach($this->options as $option) {
    		$data[$option->id] = $option->text;
    	}
    	return $data;
    }
    
    public function isMultipleAnswersAllowed() {
    	return $this->type->name == 'checkbox' || $this->multipleAnswersAllowed;
    }
    
}

?>