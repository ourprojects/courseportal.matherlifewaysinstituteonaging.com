<?php
/**
 * @author ElisDN <mail@elisdn.ru>
 * @link http://www.elisdn.ru
 * @version 1.0
 */

/**
 * This is the model class for table "phpbb_users".
 *
 * The followings are the available columns in table 'phpbb_users':
 * @property integer $group_id
 * @property integer $group_type
 * @property integer $group_founder_manage
 * @property integer $group_skip_auth
 * @property string  $group_name
 * @property string  $group_desc
 * @property string  $group_desc_bitfield
 * @property integer $group_desc_options
 * @property string  $group_desc_uid
 * @property integer $group_display
 * @property string  $group_avatar
 * @property integer $group_avatar_type
 * @property integer $group_avatar_width
 * @property integer $group_avatar_height
 * @property integer $group_rank
 * @property string  $group_colour
 * @property integer $group_sig_chars
 * @property integer $group_receive_pm
 * @property integer $group_message_limit
 * @property integer $group_max_recipients
 * @property integer $group_legend
 *
 * @property PhpBBGroup[] $users
 */
class PhpBBGroup extends CActiveRecord {
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhpBBGroup the static model class
	 */
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

    public function getDbConnection() {
        return Yii::app()->forumDb;
    }

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return '{{groups}}';
	}

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
            'users'=>array(self::HAS_MANY, Yii::app()->params['userModelClassName'], 'group_id'),
        );
    }

    /**
     * @param string $name
     * @return PhpBBGroup the static model class
     */
    public function findByName($name) {
         return $this->findByAttributes(array('group_name' => $name));
    }

}