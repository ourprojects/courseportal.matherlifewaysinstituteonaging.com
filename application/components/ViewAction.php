<?php defined('BASEPATH') or exit('No direct script access allowed');  

class ViewAction extends CViewAction {

	public function __construct($controller, $id) {
		Yii::app()->loadHelper('Utilities');
		$this->defaultView = flattenArrayToString($_GET, DIRECTORY_SEPARATOR);
		parent::__construct($controller, strtr($this->defaultView, array('/' => '.', DIRECTORY_SEPARATOR => '.')));
	}

	/**
	 * Resolves the user-specified view into a valid view name.
	 * @param string $viewPath user-specified view in the format of 'path.to.view'.
	 * @return string fully resolved view in the format of 'path/to/view'.
	 * @throw CHttpException if the user-specified view is invalid
	 */
	protected function resolveView($viewPath) {
		// start with a word char and have word chars, dots and dashes only
		if(preg_match('/^\w[\w\.\-\/]*$/',$viewPath))
		{
			$view = strtr($viewPath, array('.' => DIRECTORY_SEPARATOR, '/' => DIRECTORY_SEPARATOR));
			if(!empty($this->basePath))
				$view = $this->basePath . DIRECTORY_SEPARATOR . $view;

			if($this->getController()->getViewFile($view)!==false)
			{
				$this->view = $view;
				return;
			}
		}
		throw new CHttpException(404,Yii::t('yii','The requested view "{name}" was not found.',
			array('{name}'=>$viewPath)));
	}

}