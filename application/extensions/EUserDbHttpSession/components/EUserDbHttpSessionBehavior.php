<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class EUserDbHttpSessionBehavior extends CActiveRecordBehavior
{
	
	private $_session;
	
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
		require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.'EHttpSession.php');
	}
	
	public function getSession($refresh = true)
	{
		$owner = $this->getOwner();
		if(!$owner->getIsNewRecord())
		{
			if($this->_session === null)
			{
				$this->_session = EHttpSession::model()->findByAttributes(array('user_id' => $owner->{Yii::app()->getSession()->userIdColumnName}));
			}
			else if($refresh && !$this->_session->refresh())
			{
				$this->_session = null;
			}
		}
		return $this->_session;
	}
	
	public function getIsOnline()
	{
		$session = $this->getSession();
		return $session !== null && !$session->getIsExpired();
	}
	
	public function getLastSeen()
	{
		$session = $this->getSession();
		return $session === null || $session->getIsExpired() ? null : $session->getCreated();
	}
	
	public function attributeLabels()
	{
		return array(
				'session' => Yii::t('ext.EUserDbHttpSession', 'Session'),
				'isOnline' => Yii::t('ext.EUserDbHttpSession', 'Online'),
				'lastSeen' => Yii::t('ext.EUserDbHttpSession', 'Last Seen')
		);
	}
	
} 