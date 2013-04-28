<?php defined('BASEPATH') or exit('No direct script access allowed');  

class ViewAction extends CViewAction {
	
	public $renderData = array();
	
	private $_viewPath;
	
	/**
	 * Returns the name of the view requested by the user.
	 * If the user doesn't specify any view, the {@link defaultView} will be returned.
	 * @return string the name of the view requested by the user.
	 * This is in the format of 'path.to.view'.
	 */
	public function getRequestedView() {
		if($this->_viewPath === null) {
			$this->_viewPath = parent::getRequestedView();
			if($this->_viewPath === $this->defaultView && !empty($_GET))
				$this->_viewPath = implode('.', CArray::array_flatten($_GET));
			$this->_viewPath = preg_replace('/[\/]+/', '.', $this->_viewPath);
			$this->_viewPath = trim($this->_viewPath, '.');
		}
		return $this->_viewPath;
	}

	/**
	 * Resolves the user-specified view into a valid view name.
	 * @param string $viewPath user-specified view in the format of 'path.to.view'.
	 * @return string fully resolved view in the format of 'path/to/view'.
	 * @throw CHttpException if the user-specified view is invalid
	 */
	protected function resolveView($viewPath) {
		// start with a word char and have word chars, dots and dashes only
		if(preg_match('/^\w[\w\.\-\/]*$/', $viewPath)) {
			$view = preg_replace('/[.]+/', DIRECTORY_SEPARATOR, $viewPath);
			if(!empty($this->basePath))
				$view = $this->basePath . DIRECTORY_SEPARATOR . $view;

			if($this->getController()->getViewFile($view) !== false) {
				$this->view = $view;
				return;
			}
		}
		throw new CHttpException(404, Yii::t('yii','The requested view "{name}" was not found.',
			array('{name}' => $viewPath)));
	}

	/**
	 * Runs the action.
	 * This method displays the view requested by the user.
	 * @throws CHttpException if the view is invalid
	 */
	public function run() 
	{
		$this->resolveView($this->getRequestedView());
		$controller = $this->getController();
		if($this->layout !== null) 
		{
			$layout = $controller->layout;
			$controller->layout = $this->layout;
		}

		$this->onBeforeRender($event = new CEvent($this));
		if(!$event->handled) 
		{
			if($this->renderAsText) 
			{
				$text=file_get_contents($controller->getViewFile($this->view));
				$controller->renderText($text);
			}
			else
				$controller->render($this->view, $this->renderData);
			$this->onAfterRender(new CEvent($this));
		}

		if($this->layout !== null)
			$controller->layout=$layout;
	}

}