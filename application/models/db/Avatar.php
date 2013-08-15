<?php
/**
 * This is the model class for table "avatar".
 *
 * The followings are the available columns in table 'avatar':
 * @property integer $id
 * @property string $mime
 * @property string $name
 */
class Avatar extends CActiveRecord
{

	const DEFAULT_MIME = 'image/png';
	const DEFAULT_NAME = 'default.png';
	const AVATARS_PATH_ALIAS = 'uploads.avatars';
	const MAX_WIDTH = 100;
	const MAX_HEIGHT = 100;
	const MAX_FILE_SIZE = 16777216; // 16MB
	const ALLOWED_TYPES = 'tiff, jpg, jpeg, gif, png';

	public $image = null;

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return '{{avatar}}';
	}

	public function behaviors()
	{
		return array_merge(parent::behaviors(),
				array(
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors'),
						'EActiveRecordAutoQuoteBehavior' => array(
								'class' => 'ext.EActiveRecordAutoQuoteBehavior.EActiveRecordAutoQuoteBehavior',
						)
					));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
				array('user_id, mime, name', 'unsafe'),
				array('user_id', 'required'),
				array('image', 'required', 'on' => 'new'),
				array('image',
						'file',
						'allowEmpty' => true,
						'maxFiles' => 1,
						'maxSize' => self::MAX_FILE_SIZE,
						'types' => self::ALLOWED_TYPES,
						'tooLarge' => 'The image must be less than 16MB in size.',
						'tooMany' => 'Only 1 image may be uploaded at a time',
						'wrongType' => 'File type is not allowed. tiff, jpg, jpeg, gif, or png type images only.'),
				array('image', 'filter', 'filter' => array($this, 'loadUploadedFile')),
				array('image', 'filter', 'filter' => array($this, 'loadImage')),
				array('user_id', 'numerical', 'integerOnly' => true),
				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'CPUser'),
				array('mime', 'filter', 'filter' => array($this, 'loadMimeType')),
				array('mime', 'length', 'allowEmpty' => false, 'max' => 32),
				array('name', 'filter', 'filter' => array($this, 'generateUniqueName')),
				array('name', 'length', 'is' => 40),
				array('name', 'match', 'pattern' => '/[\da-fA-F]{1,4}/'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
        return array(
            'user' => array(self::BELONGS_TO, 'CPUser', 'user_id'),
        );
	}

	public static function getDefaultPath()
	{
		return Yii::getPathOfAlias(self::AVATARS_PATH_ALIAS) . DIRECTORY_SEPARATOR . self::DEFAULT_NAME;
	}

	public function getPath()
	{
		return Yii::getPathOfAlias(self::AVATARS_PATH_ALIAS) . DIRECTORY_SEPARATOR . $this->name;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return array(
				'user_id' => t('User ID'),
				'mime' => t('MIME'),
				'name' => t('Name'),
				'image' => t('Avatar'),
				'user' => t('User'),
		);
	}

	public function loadUploadedFile($file)
	{
		if(!$this->hasErrors())
			$file = CUploadedFile::getInstance($this, 'image');
		return $file;
	}

	public function loadImage($image)
	{
		if(!$this->hasErrors() && isset($image))
			$image = Yii::app()->getComponent('image')->load($image->getTempName())->resize(self::MAX_WIDTH, self::MAX_HEIGHT);
		return $image;
	}

	public function loadMimeType($mime)
	{
		if(isset($this->image))
			$mime = $this->image->mime;
		return $mime;
	}

	public function generateUniqueName($name)
	{
		if(!isset($name))
		{
			do
			{
				$name = sha1(uniqid('', true));
			}
			while(self::model()->exists('name = :name', array(':name' => $name)));
		}
		return $name;
	}

	protected function afterSave()
	{
		if(isset($this->image))
		{
			$this->image->save($this->getPath());
		}
		parent::afterSave();
	}

	protected function afterDelete()
	{
		if(file_exists($this->getPath()))
			unlink($this->getPath());
		parent::afterDelete();
	}

	public function __toString()
	{
		return $this->name;
	}

}