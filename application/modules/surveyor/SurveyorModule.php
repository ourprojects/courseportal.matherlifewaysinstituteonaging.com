<?php   

class SurveyorModule extends CWebModule 
{

	public $userClass = 'User';

	public function init()
	{
		$this->defaultController = 'Surveyor';
		return parent::init();
	}

	public static function t($message, $params = array())
	{
		return Yii::t('surveyor', $message, $params);
	}

}