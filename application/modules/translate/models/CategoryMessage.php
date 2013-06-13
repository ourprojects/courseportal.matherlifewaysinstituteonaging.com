<?php
class CategoryMessage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CategoryMessage the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return Yii::app()->getMessages()->categoryMessageTable;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('message_id, category_id', 'required', 'except' => 'search'),
			array('message_id, category_id', 'numerical', 'integerOnly' => true),
			array('message_id', 'exist', 'attributeName' => 'id', 'className' => 'MessageSource', 'except' => 'search'),
			array('category_id', 'exist', 'attributeName' => 'id', 'className' => 'Category', 'except' => 'search'),
				
			array('message_id, category_id', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'messageSource' => array(self::BELONGS_TO, 'MessageSource', 'message_id'),
				'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'message_id' => TranslateModule::t('Message ID'),
			'category_id' => TranslateModule::t('Category ID'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('message_id', $this->message_id);
		$criteria->compare('category_id', $this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}