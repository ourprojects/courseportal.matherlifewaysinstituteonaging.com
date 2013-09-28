<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class EUserDbHttpSessionBehavior extends CActiveRecordBehavior
{
	
	const DEFAULT_RELATION_NAME_SESSIONS = 'sessions';
	const DEFAULT_RELATION_NAME_LAST_SEEN = 'lastSeen';
	
	public $relationNameSessions = self::DEFAULT_RELATION_NAME_SESSIONS;
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
		require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.'EUserHttpSession.php');
	}
	
	protected function afterConstruct($event)
	{
		$relations = $this->getOwner()->relations();
		if(!isset($relations[$this->relationNameSessions]) || !isset($relations[$this->relationNameLastSeen]))
		{
			throw new CException(Yii::t('ext.EUserDbHttpSession', 'Required relations have not been configured for "{className}".', array('{className}' => getClass($this))));
		}
		parent::afterConstruct($event);
	}
	
	public function getUserId()
	{
		return $this->getOwner()->{Yii::app()->getSession()->userIdColumnName};
	}
	
	public function getIsOnline($refresh = false)
	{
		return $this->getOwner()->getRelated($this->relationNameLastSeen, $refresh) > time();
	}
	
	public function gcSession($maxLifetime = null)
	{
		return EUserHttpSession::model()->deleteAll('user_id=:user_id AND expire<:expire', array(':user_id' => $this->getUserId(), ':expire' => (isset($maxLifetime) ? $maxLifetime : time())));
	}
	
	public function destroySession()
	{
		return EUserHttpSession::model()->deleteAll('user_id=:user_id', array(':user_id' => $this->getUserId()));
	}
	
	public function online($online = true)
	{
		if($online)
		{
			return $this->getOwner()->with(array($this->relationNameSessions => array('joinType' => 'INNER JOIN', 'condition' => $this->relationNameSessions.'.expire>:expire', 'params' => array(':expire' => time()))))->together();
		}
		return $this->getOwner()->with(array($this->relationNameSessions => array('condition' => $this->relationNameSessions.'.expire<:expire OR '.$this->relationNameSessions.'.expire IS NULL', 'params' => array(':expire' => time()))))->together();
	}
	
	public function attributeLabels()
	{
		return array(
				$this->relationNameSessions => Yii::t('ext.EUserDbHttpSession', 'Sessions'),
				$this->relationNameLastSeen => Yii::t('ext.EUserDbHttpSession', 'Last Seen'),
				'isOnline' => Yii::t('ext.EUserDbHttpSession', 'Is Online')
		);
	}
	
	public static function relations(
			$relationNameSessions = self::DEFAULT_RELATION_NAME_SESSIONS, 
			$relationNameLastSeen = self::DEFAULT_RELATION_NAME_LAST_SEEN)
	{
		return array(
				$relationNameSessions => array(CActiveRecord::HAS_MANY, 'EUserHttpSession', array('user_id' => Yii::app()->getSession()->userIdColumnName)),
				$relationNameLastSeen => array(CActiveRecord::STAT, 'EUserHttpSession', array('user_id' => Yii::app()->getSession()->userIdColumnName), 'select' => 'MAX(expire)'),
		);
	}
	
} 