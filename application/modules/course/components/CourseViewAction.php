<?php

class CourseViewAction extends ViewAction
{

	/**
	 * Returns the name of the view requested by the user.
	 * If the user doesn't specify any view, the {@link defaultView} will be returned.
	 * @return string the name of the view requested by the user.
	 * This is in the format of 'path.to.view'.
	 */
	public function getRequestedView()
	{
		unset($_GET[$this->viewParam]);
		return parent::getRequestedView();
	}

	/**
	 * Runs the action.
	 * This method displays the view requested by the user.
	 * @throws CHttpException if the view is invalid
	 */
	public function run()
	{
		$this->renderData['course'] = Course::model()->with('objectives')->autoQuoteFind(array('and', Course::model()->getTableAlias().'.name' => $this->defaultView));
		parent::run();
	}

}