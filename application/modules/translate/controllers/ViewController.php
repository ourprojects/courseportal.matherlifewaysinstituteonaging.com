<?php
class ViewController extends TController
{

	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
				'ajaxOnly + ajaxIndex, ajaxView',
				array(
						'translate.filters.TForwardActionFilter + index, view',
						'map' => array(
								'index' => 'ajaxIndex + ajax',
								'view' => 'ajaxView + ajax',
						)
				)
		);
	}

	public function accessRules()
	{
		return array(
				array('allow',
						'expression' => '$user->getIsAdmin()',
				),
				array('deny',
						'users' => array('*'),
				),
		);
	}

	public function actionTranslateMissing($id = null)
	{

	}

	/**
	 * View all views.
	 */
	public function actionIndex()
	{
		$sourceViews = new ViewSource('search');
			
		if(isset($_GET['Category']))
			$sourceViews->setAttributes($_GET['ViewSource']);

		$this->render('index', array('sourceViews' => $sourceViews));
	}
	
	public function actionAjaxIndex()
	{
		
	}

	/**
	 * View a Category's details
	 *
	 * @param integer $id The ID of the category to show details for
	 */
	public function actionView($id)
	{

	}
	
	public function actionAjaxView($id)
	{
	
	}

	/**
	 * Deletes a record
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{

	}

}