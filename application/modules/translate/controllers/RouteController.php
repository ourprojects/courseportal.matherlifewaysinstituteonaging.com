<?php
class RouteController extends TController
{

	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
				'ajaxOnly + ajaxIndex, ajaxView',
				array(
						'translate.filters.TForwardActionFilter + index, route',
						'map' => array(
								'index' => 'ajaxIndex + ajax',
								'route' => 'ajaxView + ajax',
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

	public function actionTranslateMissing($id = null, $class = 'View')
	{

	}

	/**
	 * View all Categories.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionAjaxIndex()
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'route-detailed-grid':
					$model = new Route('search');
					$model->with('viewSourceCount');
					$this->renderPartial('_detailed_grid', array('model' => $model));
					break;
			}
		}
	}

	/**
	 * View a Route's details
	 *
	 * @param integer $id The ID of the route to show details for
	 */
	public function actionView($id)
	{
		$this->render('view', array('route' => Route::model()->findByPk($id)));
	}
	
	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'view-detailed-grid':
					$views = new ViewSource('search');
					$this->renderPartial('_detailed_grid', array('model' => $views->route($id)->with('routeCount', 'messageCount', 'viewCount')));
					break;
			}
		}
	}

	/**
	 * Deletes a Route
	 *
	 * @param integer $id the ID of the Route to be deleted
	 */
	public function actionDelete($id)
	{

	}

}