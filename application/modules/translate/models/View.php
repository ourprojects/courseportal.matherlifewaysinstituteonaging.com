<?php

/**
 * This is the model class for table "{{translate_view}}".
 *
 * The followings are the available columns in table '{{translate_view}}':
 * @property integer $id
 * @property string $language
 * @property string $path
 * @property integer $created
 */
class View extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return View the static model class
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
		return TranslateModule::translator()->getViewSource()->viewTable;
	}
	
	public function behaviors()
	{
		return array(
				'ERememberFiltersBehavior' => array(
						'class' => 'translate.behaviors.ERememberFiltersBehavior',
				)
		);
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('id, language, path', 'required', 'except' => 'search'),
			array('created', 'date', 'format' => 'yyyy-M-d H:m:s'),
			array('path', 'length', 'max' => 255),
			array('language', 'length', 'max' => 3),
			array('id', 'numerical', 'integerOnly' => true),
			array('id', 'exist', 'attributeName' => 'id', 'className' => 'ViewSource', 'except' => 'search'),
			array('id',
					'unique',
					'caseSensitive' => false,
					'criteria' => array(
							'condition' => 'language = :language',
							'params' => array(':language' => $this->language),
					),
					'message' => 'Source view {attribute} "{value}" has already been translated to "'.$this->language.'" ("'.TranslateModule::translator()->getLanguageDisplayName($this->language).'").',
					'except' => 'search'
			),

			array('id, language, path, created', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'acceptedLanguage' => array(self::BELONGS_TO, 'AcceptedLanguage', 'language', 'joinType' => 'INNER JOIN'),
			'viewSource' => array(self::BELONGS_TO, 'ViewSource', 'id'),
			// @ TODO
			'translationCount' => array(
					self::STAT,
					'MessageSource',
					ViewMessage::model()->tableName().'(view_id, message_id)',
					'join' =>
					'INNER JOIN '.View::model()->tableName().' v ON (v.id='.ViewMessage::model()->tableName().'.view_id)'.
					'INNER JOIN '.Message::model()->tableName().' m ON ('.$this->getTableAlias(false, false).'.id=m.id AND v.language=m.language)'),
		);
	}
	
	public function getRelativePath()
	{
		if (substr($this->getAttribute('path'), 0, strlen(Yii::app()->getBasePath())) == Yii::app()->getBasePath())
		{
			return substr($this->getAttribute('path'), strlen(Yii::app()->getBasePath()));
		}
		return $this->getAttribute('path');
	}
	
	public function setRelativePath($path)
	{
		return $this->setAttribute('path', Yii::app()->getBasePath().DIRECTORY_SEPARATOR.$path);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => TranslateModule::t('ID'),
			'path' => TranslateModule::t('Path'),
			'relativePath' => TranslateModule::t('Path (relative to app base path)'),
			'language' => TranslateModule::t('Language'),
			'created' => TranslateModule::t('Created'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($dataProviderConfig = array()) 
	{
		if(!isset($dataProviderConfig['criteria']))
		{
			$dataProviderConfig['criteria'] = new CDbCriteria;

			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.id', $this->id);
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.path', $this->path, true);
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.language', $this->language, true);
			$dataProviderConfig['criteria']->compare($this->getTableAlias(false, false).'.created', $this->created, true);
		}

		return new CActiveDataProvider($this, $dataProviderConfig);
	}
	
	public function __toString()
	{
		return strval($this->path);
	}
	
}