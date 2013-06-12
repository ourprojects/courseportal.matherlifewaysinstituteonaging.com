<?php

/**
 * This is the model class for table "{{translate_view_source}}".
 *
 * The followings are the available columns in table '{{translate_view_source}}':
 * @property integer $id
 * @property string $path
 * 
 */
class ViewSource extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewSource the static model class
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
		return TranslateModule::translator()->getViewSource()->viewSourceTable;
	}
	
	public function behaviors() {
		return array_merge(parent::behaviors(),
				array(
						'toArray' => array('class' => 'application.behaviors.EArrayBehavior'),
				));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('path', 'required', 'except' => 'search'),
			array('id', 'numerical', 'integerOnly' => true),
			array('path', 'length', 'max' => 255),
			array('id, path', 'unique', 'except' => 'search'),

			array('id, path', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'viewMessageSources' => array(self::HAS_MANY, 'ViewMessage', 'view_id'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', ViewMessage::model()->tableName().'(view_id, message_id)'),
			'views' => array(self::HAS_MANY, 'View', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => TranslateModule::t('ID'),
			'path' => TranslateModule::t('Path'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('path', $this->path, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}