<?php  

Yii::import('surveyor.components.SActiveRecord');

/**
 * This is the model class for table "{{survey_answer_text}}".
 *
 * The followings are the available columns in table '{{survey_answer_text}}':
 * @property integer $answer_id
 * @property string $text
 *
 * The followings are the available model relations:
 * @property SurveyAnswer $answer
*/
class SurveyAnswerText extends SActiveRecord
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
		return '{{survey_answer_text}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('text, answer_id', 'required'),
			array('answer_id', 'unsafe'),
			array('answer_id', 'exist', 'attributeName' => 'id', 'className' => 'SurveyAnswer', 'allowEmpty' => false),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('text, answer_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'answer' => array(self::BELONGS_TO, 'SurveyAnswer', 'answer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'answer_id' => Yii::app()->getModule('surveyor')->t('Answer ID'),
			'answer' => Yii::app()->getModule('surveyor')->t('Answer'),
			'text' => Yii::app()->getModule('surveyor')->t('Text'),
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
		$criteria->compare('text',$this->text);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}

?>