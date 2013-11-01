<?php
/**
 * EUserDbHttpSessionBehavior class file
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 */

/**
 * EUserDbHttpSessionBehavior gives full access to the application's users session data and function via the application's user ActiveRecords.
 * 
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class EUserDbHttpSessionBehavior extends CActiveRecordBehavior
{
	
	const DEFAULT_RELATION_NAME_SESSIONS = 'sessions';
	const DEFAULT_RELATION_NAME_LAST_SEEN = 'lastSeen';
	
	/**
	 * @var string The name to assign to relations of type {@link EUserDbHttpSession}
	 */
	public $relationNameSessions = self::DEFAULT_RELATION_NAME_SESSIONS;
	
	/**
	 * @var string The name to assign to the statistical relation 'Last Seen'
	 */
	public $relationNameLastSeen = self::DEFAULT_RELATION_NAME_LAST_SEEN;

	public function __construct()
	{
		if(!class_exists('EUserDbHttpSession', false) || !Yii::app()->getSession() instanceof EUserDbHttpSession)
		{
			throw new CException(
					Yii::t(
						'ext.EUserDbHttpSession', 
						'"{thisClass}" is not compatible with a session manager of type "{sessionClass}". Please check your application\'s session manager configuration.', 
						array('{thisClass}' => getClass($this), '{sessionClass}' => getClass(Yii::app()->getClass()))));
		}
	}
	
	/**
	 * (non-PHPdoc)
	 * @see CModelBehavior::afterConstruct()
	 */
	protected function afterConstruct($event)
	{
		$relations = $this->getOwner()->relations();
		if(!isset($relations[$this->relationNameSessions]) || !isset($relations[$this->relationNameLastSeen]))
		{
			throw new CException(Yii::t('ext.EUserDbHttpSession', 'Required relations have not been configured for "{className}".', array('{className}' => getClass($this))));
		}
		parent::afterConstruct($event);
	}
	
	/**
	 * Gets the DB connection for user sessions.
	 * 
	 * @return CDbConnection The DB connection object
	 */
	public function getDbConnection()
	{
		return EUserHttpSession::model()->getDbConnection();
	}
	
	/**
	 * @return mixed The user's ID
	 */
	public function getUserId()
	{
		return $this->getOwner()->{Yii::app()->getSession()->userIdColumnName};
	}
	
	/**
	 * Returns True if the user is online now. False otherwise.
	 * @param string $refresh Whether to refresh the last seen relation that is used by this method.
	 * @return boolean True if the user is online now. False otherwise.
	 */
	public function getIsOnline($refresh = false)
	{
		return $this->getOwner()->getRelated($this->relationNameLastSeen, $refresh) > time();
	}
	
	/**
	 * Garbage collects this user's sessions.
	 * 
	 * @param string $maxLifetime All sessions prior to this time will be GCed. Defaults to false meaning GC all sessions.
	 * @return integer The number of sessions GCed
	 */
	public function gcSession($maxLifetime = null)
	{
		$db = $this->getDbConnection();
		return EUserHttpSession::model()->deleteAll($db->quoteColumnName('user_id').'=:user_id AND '.$db->quoteColumnName('expire').'<:expire', array(':user_id' => $this->getUserId(), ':expire' => (isset($maxLifetime) ? $maxLifetime : time())));
	}
	
	/**
	 * Destroys all sessions for this user
	 * 
	 * @return integer The number of sessions removed
	 */
	public function destroySession()
	{
		return EUserHttpSession::model()->deleteAll($this->getDbConnection()->quoteColumnName('user_id').'=:user_id', array(':user_id' => $this->getUserId()));
	}
	
	/**
	 * A scope that selects only users who are online now. 
	 * 
	 * @param boolean $online Inverts the match. True means online, false means offline. Defaults to true.
	 * @return CActiveRecord the owner of this behavior.
	 */
	public function online($online = true)
	{
		$db = $this->getDbConnection();
		if($online)
		{
			return $this->getOwner()->with(array($this->relationNameSessions => array('joinType' => 'INNER JOIN', 'condition' => $db->quoteColumnName($this->relationNameSessions.'.expire').'>:expire', 'params' => array(':expire' => time()))))->together();
		}
		return $this->getOwner()->with(array($this->relationNameSessions => array('condition' => $db->quoteColumnName($this->relationNameSessions.'.expire').'<:expire OR '.$db->quoteColumnName($this->relationNameSessions.'.expire').' IS NULL', 'params' => array(':expire' => time()))))->together();
	}
	
	/**
	 * @see CActiveRecord::attributeLabels()
	 */
	public function attributeLabels()
	{
		return array(
				$this->relationNameSessions => Yii::t('ext.EUserDbHttpSession', 'Sessions'),
				$this->relationNameLastSeen => Yii::t('ext.EUserDbHttpSession', 'Last Seen'),
				'isOnline' => Yii::t('ext.EUserDbHttpSession', 'Is Online')
		);
	}
	
	/**
	 * The relations that need to be added to the owner of this behavior.
	 * 
	 * @param string $relationNameSessions {@see EUserDbHttpSessionBehavior::$relationNameSessions}
	 * @param string $relationNameLastSeen {@see EUserDbHttpSessionBehavior::$relationNameLastSeen}
	 * @return array the relations
	 */
	public static function relations(
			$relationNameSessions = self::DEFAULT_RELATION_NAME_SESSIONS, 
			$relationNameLastSeen = self::DEFAULT_RELATION_NAME_LAST_SEEN)
	{
		return array(
				$relationNameSessions => array(CActiveRecord::HAS_MANY, 'EUserHttpSession', array('user_id' => Yii::app()->getSession()->userIdColumnName)),
				$relationNameLastSeen => array(CActiveRecord::STAT, 'EUserHttpSession', array('user_id' => Yii::app()->getSession()->userIdColumnName), 'select' => 'MAX('.EUserHttpSession::model()->getDbConnection()->quoteColumnName('expire').')'),
		);
	}
	
} 