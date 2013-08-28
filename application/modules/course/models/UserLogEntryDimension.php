<?php

/**
 * This is the model class for table "{{spencer_powell_user_log_entry_dimension}}".
 *
 * The followings are the available columns in table '{{spencer_powell_user_log_entry_dimension}}':
 * @property integer $user_log_entry_id
 * @property integer $dimension_id
 * @property integer $primary
 */
class UserLogEntryDimension extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserLogEntryDimension the static model class
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
		return '{{spencer_powell_user_log_entry_dimension}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('user_log_entry_id, dimension_id, primary', 'required'),
			array('user_log_entry_id, dimension_id', 'numerical', 'integerOnly' => true),
			array('primary', 'boolean'),
			array('user_log_entry_id', 'exist', 'attributeName' => 'id', 'className' => 'UserLogEntry', 'except' => 'search'),
			array('dimension_id', 'exist', 'attributeName' => 'id', 'className' => 'Dimension', 'except' => 'search'),

			array('user_log_entry_id, dimension_id, primary', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
				'userLogEntry' => array(self::BELONGS_TO, 'UserLogEntry', 'user_log_entry_id'),
				'dimension' => array(self::BELONGS_TO, 'Dimension', 'dimension_id'),
		);
	}

	public function scopes()
	{
		return array(
					'isPrimary' => array('condition' => 'primary != 0')
				);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_log_entry_id' => t('User Log Entry ID'),
			'dimension_id' => t('Dimension ID'),
			'primary' => t('Primary'),
			'userLogEntry' => t('User Log Entry'),
			'dimension' => t('Dimension'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$tableAlias = $this->getTableAlias();
		$db = $this->getDbConnection();
		$criteria->compare($db->quoteColumnName($tableAlias.'.user_log_entry_id'), $this->user_log_entry_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.dimension_id'), $this->dimension_id);
		$criteria->compare($db->quoteColumnName($tableAlias.'.primary'), $this->primary);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}