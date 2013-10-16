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

	const DEFAULT_NAME = 'default.png';
	const AVATARS_PATH_ALIAS = 'application.uploads.avatars';
	const MAX_WIDTH = 100;
	const MAX_HEIGHT = 100;
	const MAX_FILE_SIZE = 16777216; // 16MB
	const ALLOWED_TYPES = 'tiff, jpg, jpeg, gif, png';
	
	private static $_defaultAvatar;

	public $image;

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
	
	public static function getDefaultAvatar()
	{
		if(!isset(self::$_defaultAvatar))
		{
			self::$_defaultAvatar = new Avatar();
			self::$_defaultAvatar->name = self::DEFAULT_NAME;
			self::$_defaultAvatar->image = Yii::app()->getComponent('image')->load(Yii::getPathOfAlias(self::AVATARS_PATH_ALIAS).DIRECTORY_SEPARATOR.self::DEFAULT_NAME);
		}
		return self::$_defaultAvatar;
	}
	
	public static function generateUniqueName()
	{
		for($name = uniqid('', true); self::model()->autoQuoteExists(self::model()->getTableAlias().'.name=:name', array(':name' => $name)); $name = uniqid('', true)){}
		return $name;
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
						'extendedFeatures' => array('class' => 'application.behaviors.EModelBehaviors'),
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
				array('user_id, name', 'unsafe'),
				array('user_id', 'required'),
				array('image', 'filter', 'filter' => array($this, 'loadImage')),
				array('image',
						'file',
						'allowEmpty' => true, 
						'maxFiles' => 1,
						'maxSize' => self::MAX_FILE_SIZE,
						'types' => self::ALLOWED_TYPES,
						'tooLarge' => t('The image must be less than 16MB in size.'),
						'tooMany' => t('Only 1 image may be uploaded at a time.'),
						'wrongType' => t('File type is not allowed. tiff, jpg, jpeg, gif, or png type images only.')),
				array('image', 'filter', 'filter' => array($this, 'filterImage')),
				array('user_id', 'numerical', 'integerOnly' => true),
				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'CPUser'),
				array('name', 'filter', 'filter' => array($this, 'filterName')),
				array('name', 'length', 'is' => 23),
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

	public function getPath()
	{
		return Yii::getPathOfAlias(self::AVATARS_PATH_ALIAS) . DIRECTORY_SEPARATOR . $this->name;
	}
	
	public function getMime()
	{
		return $this->image instanceof Image ? $this->image->mime : null;
	}
	
	public function getWidth()
	{
		return $this->image instanceof Image ? $this->image->width : null;
	}
	
	public function getHeight()
	{
		return $this->image instanceof Image ? $this->image->height : null;
	}
	
	public function getType()
	{
		return $this->image instanceof Image ? $this->image->type : null;
	}
	
	public function getExt()
	{
		return $this->image instanceof Image ? $this->image->ext : null;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels()
	{
		return array(
				// column attributes
				'user_id' => t('User ID'),
				'name' => t('Name'),
				'image' => t('Avatar'),
				
				// virtual attributes
				'mime' => t('MIME'),
				'width' => t('Width'),
				'height' => t('Height'),
				'type' => t('Type'),
				'ext' => t('Ext'),
		);
	}

	public function loadImage($image)
	{
		if(($img = CUploadedFile::getInstance($this, 'image')) !== null)
		{
			$image = $img;
		}
		return $image;
	}
	
	public function filterImage($image)
	{
		if($image instanceof CUploadedFile)
		{
			$image = Yii::app()->getComponent('image')->load($image->getTempName())->resize(self::MAX_WIDTH, self::MAX_HEIGHT);
		}
		return $image;
	}
	
	public function filterName($name)
	{
		if(!isset($name))
		{
			$name = self::generateUniqueName();
		}
		return $name;
	}
	
	protected function afterFind()
	{
		parent::afterFind();
		if(!file_exists($this->getPath()))
		{
			$this->delete();
			$this->setScenario('insert');
			$this->image = Yii::app()->getComponent('image')->load(self::getDefaultAvatar()->getPath());
		}
		else
		{
			$this->image = Yii::app()->getComponent('image')->load($this->getPath());
		}
	}

	protected function afterSave()
	{
		$this->image->save($this->getPath());
		parent::afterSave();
	}

	protected function afterDelete()
	{
		if(file_exists($this->getPath()))
		{
			unlink($this->getPath());
		}
		parent::afterDelete();
	}

	public function __toString()
	{
		return $this->name;
	}

}
