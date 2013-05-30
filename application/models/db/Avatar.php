<?php   
/**
 * This is the model class for table "avatar".
 *
 * The followings are the available columns in table 'avatar':
 * @property integer $id
 * @property string $mime
 * @property string $name
 */
class Avatar extends CActiveRecord {

	const DEFAULT_MIME = 'image/png';
	const DEFAULT_NAME = 'default.png';
	const AVATARS_PATH_ALIAS = 'uploads.avatars';
	const MAX_WIDTH = 100;
	const MAX_HEIGHT = 100;
	const MAX_FILE_SIZE = 1048576;
	const ALLOWED_TYPES = 'tiff, jpg, gif, png';

	public $image = null;

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return '{{avatar}}';
	}
	
	public function behaviors() {
		return array_merge(parent::behaviors(), 
				array(
						'toArray' => array('class' => 'behaviors.EArrayBehavior'),
						'extendedFeatures' => array('class' => 'behaviors.EModelBehaviors')
					));
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		return array(
				array('user_id, mime, name', 'unsafe'),
				array('user_id, mime', 'required'),
				array('image', 'required', 'on' => 'new'),
				array('user_id', 'numerical', 'integerOnly' => true),
				array('user_id', 'exist', 'attributeName' => 'id', 'className' => 'CPUser'),
				array('mime', 'length', 'max' => 10),
				array('name', 'filter', 'filter' => array($this, 'generateUniqueName')),
				array('name', 'length', 'is' => 40),
				array('name', 'match', 'pattern' => '/[\da-fA-F]{1,4}/'),
		);
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations() {
        return array(
            'user' => array(self::BELONGS_TO, 'CPUser', 'user_id'),
        );
	}
	
	public static function getDefaultPath() {
		return Yii::getPathOfAlias(self::AVATARS_PATH_ALIAS) . DIRECTORY_SEPARATOR . self::DEFAULT_NAME;
	}
	
	public function getPath() {
		return Yii::getPathOfAlias(self::AVATARS_PATH_ALIAS) . DIRECTORY_SEPARATOR . $this->name;
	}

	/**
	 * @return array customized attribute labels (name => label)
	 */
	public function attributeLabels() {
		return array(
				'user_id' => t('User ID'),
				'mime' => t('MIME'),
				'name' => t('Name'),
				'image' => t('Avatar'),
				'user' => t('User'),
		);
	}
	
	public function loadUploadedImage($inputName = null, $validator = null) {
		if(empty($inputName))
			$inputName = get_class($this);
		if(isset($_POST[$inputName]['image'])) {
			$this->image = $_POST[$inputName]['image'];
			if(!isset($validator))
				$validator = CValidator::createValidator(
						'file',
						$this,
						'image',
						array('allowEmpty' => true,
								'maxFiles' => 1,
								'maxSize' => self::MAX_FILE_SIZE,
								'types' => self::ALLOWED_TYPES,
								'tooLarge' => 'The image must be less than 1MB in size.',
								'tooMany' => 'Only 1 image may be uploaded at a time',
								'wrongType' => 'File type is not allowed. tiff, jpg, gif, or png type images only.'));
			$validator->validate($this);
			if(!$this->hasErrors())
			{
				$this->image = CUploadedFile::getInstance($this, 'image');
				if(isset($this->image))
				{
					$this->image = Yii::app()->getComponent('image')->load($this->image->getTempName())->resize(self::MAX_WIDTH, self::MAX_HEIGHT);
					$this->mime = $this->image->mime;
					return true;
				}
			}
		}

		return false;
	}
	
	public function generateUniqueName($name) {
		if(!isset($name)) {
			do {
				$name = sha1(uniqid('', true));
			} while(self::model()->exists('name = :name', array(':name' => $name)));
		}
		return $name;
	}

	protected function afterSave() {
		if(isset($this->image)) {
			$this->image->save($this->getPath());
		}
		parent::afterSave();
	}

	protected function afterDelete() {
		if(file_exists($this->getPath()))
			unlink($this->getPath());
		parent::afterDelete();
	}
	
	public function __toString() {
		return $this->name;
	}

}