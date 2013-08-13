<?php

/**
 * SBaseController class file.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */
/**
 * SBaseController must be extended by all of the applications controllers
 * if the auto srbac should be used.
 * You can import it in your main config file as<br />
 * 'import'=>array(<br />
 * 'application.modules.srbac.controllers.SBaseController',<br />
 * ),
 *
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.controllers
 * @since 1.0.2
 */
Yii::import("srbac.components.Helper");

class SBaseController extends CController
{

	public $breadcrumbs = array();

	/**
	 * Checks if srbac access is granted for the current user
	 * @param String $action . The current action
	 * @return boolean true if access is granted else false
	 */
	protected function beforeAction($action)
	{
		if (!$this->getModule()->isInstalled() && $action->id !== 'install')
		{
			$this->redirect(array('install'));
		}
		else if ($this->getModule()->debug || Yii::app()->getUser()->checkAccess(Helper::findModule('srbac')->superUser))
		{
			$access = preg_replace('/^(.+)Controller$/i', '$1', get_class($this)) . '.' . $this->getAction()->id;
			$module = $this->getModule();
			while($module !== null && $module !== Yii::app())
			{
				$access = $module->getId() . '.' . $access;
				$module = $module->getParentModule();
			}

			$access = explode('.', $access);
			foreach($access as &$a)
			{
				$a = preg_replace('/(?<!^)([A-Z])/', ' \\1', ucfirst($a));
			}

			$access = implode('.', $access);

			//Allow access if srbac is not installed yet
			if (!Yii::app()->getModule('srbac')->isInstalled())
			{
				return true;
			}

			//Allow access when srbac is in debug mode
			if (Yii::app()->getModule('srbac')->debug)
			{
				return true;
			}

			// Check for srbac access
			if (!Yii::app()->getUser()->checkAccess($access) || Yii::app()->getUser()->getIsGuest())
			{
				$this->onUnauthorizedAccess();
			}
			else
			{
				return true;
			}
		}
		return false;
	}

	protected function onUnauthorizedAccess()
	{
		/**
		 *  Check if the unautorizedacces is a result of the user no longer being logged in.
		 *  If so, redirect the user to the login page and after login return the user to the page they tried to open.
		 *  If not, show the unautorizedacces message.
		 */
		if (Yii::app()->getUser()->getIsGuest())
		{
			Yii::app()->getUser()->loginRequired();
		}
		else
		{
			$mod = $this->getModule() !== null ? $this->getModule()->id : "";
			$access = $mod . ucfirst($this->id) . ucfirst($this->action->id);
			$error["code"] = "403";
			$error["title"] = Yii::t('srbac', 'You are not authorized for this action');
			$error["message"] = Yii::t('srbac', 'Error while trying to access') . ' ' . $mod . "/" . $this->id . "/" . $this->action->id . ".";
			//You may change the view for unauthorized access
			if (Yii::app()->getRequest()->getIsAjaxRequest())
			{
				$this->renderPartial($this->getModule()->notAuthorizedView, array("error" => $error));
			}
			else
			{
				$this->render($this->getModule()->notAuthorizedView, array("error" => $error));
			}
			return false;
		}
	}

}

