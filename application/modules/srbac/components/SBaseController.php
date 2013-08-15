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
					'expression' => 'SrbacUtilities::isInstalled() && !SrbacUtilities::getSrbacModule()->debug'
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
		if(!SrbacUtilities::isInstalled() && $action->getId() !== 'install')
		{
			$this->redirect(array('install'));
		}
		return parent::beforeAction($action);
	}

}

