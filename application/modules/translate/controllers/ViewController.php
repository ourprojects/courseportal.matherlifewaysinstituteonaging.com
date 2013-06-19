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
				case 'view-detailed-grid':
					$this->renderPartial('_detailed_grid', array('model' => new ViewSource('search')));
					break;
			}
		}
	}

	/**
	 * View a ViewSource's details
	 *
	 * @param integer $id The ID of the view to show details for
	 */
	public function actionView($id)
	{
		$this->render('view', array('view' => ViewSource::model()->findByPk($id)));
	}
	
	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'route-detailed-grid':
					$model = new Route('search');
					$model->with(array('viewSources' => array('together' => true, 'condition' => 'viewSources.id=:id', 'params' => array(':id' => $id))));
					$this->renderPartial('../route/_detailed_grid', array('model' => $model));
					break;
				case 'messageSource-detailed-grid':
					$model = new MessageSource('search');
					$model->with(array('viewSources' => array('together' => true, 'condition' => 'viewSources.id=:id', 'params' => array(':id' => $id))));
					$this->renderPartial('../messageSource/_detailed_grid', array('model' => $model)); 
					break;
				case 'message-detailed-grid':
					$model = new Message('search');
					$model->with(array('source.viewSources' => array('together' => true, 'condition' => 'viewSources.id=:id', 'params' => array(':id' => $id))));
					$this->renderPartial('../message/_detailed_grid', array('model' => $model)); 
					break;
				case 'compiled-grid':
					$model = new View('search');
					$model->setAttribute('id', $id);
					$this->renderPartial('_compiled_grid', array('model' => $model));
					break;
			}
		}
	}

	/**
	 * Deletes a ViewSource
	 *
	 * @param integer $id the ID of the ViewSource to be deleted
	 */
	public function actionDelete($id)
	{

	}

}