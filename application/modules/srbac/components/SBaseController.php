<?php

require_once('SrbacUtilities.php');

class SBaseController extends CController
{

	public $breadcrumbs = array();

	public function filters()
	{
		return array(
				'accessControl' => array(
						'SrbacAccessControlFilter',
						'rules' => $this->accessRules()
				),
		);
	}

	public function accessRules()
	{
		return array(
				array(
					'deny',
					'expression' => 'SrbacUtilities::isInstalled() && !SrbacUtilities::getSrbacModule()->debug && AuthItem::model()->superUser()->exists()'
				)
		);
	}

	/**
	 * Checks if srbac access is need because debug mode is on or installation is incomplete
	 * @param String $action . The current action
	 * @return boolean true if access is granted else false
	 */
	protected function beforeAction($action)
	{
		if(!SrbacUtilities::isInstalled() && $this->getId() !== 'system')
		{
			$this->redirect('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/system');
		}
		return parent::beforeAction($action);
	}

}

