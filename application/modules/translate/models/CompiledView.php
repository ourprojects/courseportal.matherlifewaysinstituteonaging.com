<?php

/**
 * This is the model class for table "{{translate_compiled_view}}".
 *
 * The followings are the available columns in table '{{translate_compiled_view}}':
 * @property integer $id
 * @property string $source_path
 * @property string $compiled_path
 * @property string $language
 * @property integer $created
 *
 * The followings are the available model relations:
 * @property MessageSource[] $courseportalTranslateMessageSources
 */
class CompiledView extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CompiledView the static model class
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
		return '{{translate_compiled_view}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('source_path, compiled_path, language', 'required'),
			array('created', 'date', 'format' => 'yyyy-M-d H:m:s'),
			array('id', 'numerical', 'integerOnly' => true),
			array('source_path, compiled_path', 'length', 'max' => 255),
			array('language', 'length', 'max' => 3),

			array('id, source_path, compiled_path, language, created', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'compiledViewMessageSources' => array(self::HAS_MANY, 'CompiledViewMessage', 'compiled_view_id'),
			'messageSources' => array(self::MANY_MANY, 'MessageSource', '{{translate_compiled_view_message}}(compiled_view_id, message_source_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => TranslateModule::t('ID'),
			'source_path' => TranslateModule::t('Source Path'),
			'compiled_path' => TranslateModule::t('Compiled Path'),
			'language' => TranslateModule::t('Language'),
			'created' => TranslateModule::t('Created'),
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
		$criteria->compare('source_path', $this->source_path, true);
		$criteria->compare('compiled_path', $this->compiled_path, true);
		$criteria->compare('language', $this->language, true);
		$criteria->compare('created', $this->created);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}