<?php
class CategoryController extends TController
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

	public function actionTranslateMissing($id = null, $class = 'Category')
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
				case 'category-detailed-grid':
					$this->renderPartial('_detailed_grid', array('model' => new Category('search')));
					break;
			}
		}
	}

	/**
	 * View a Category's details
	 *
	 * @param integer $id The ID of the category to show details for
	 */
	public function actionView($id)
	{
		$this->render('view', array('category' => Category::model()->findByPk($id)));
	}
	
	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'messageSource-detailed-grid':
					$model = new MessageSource('search');
					$model->with(array('categories' => array('together' => true, 'condition' => 'categories.id=:id', 'params' => array(':id' => $category->id))));
					$this->renderPartial('../messageSource/_detailed_grid', array('model' => $model)); 
					break;
				case 'message-detailed-grid':
					$model = new Message('search');
					$model->with(array('source.categories' => array('together' => true, 'condition' => 'categories.id=:id', 'params' => array(':id' => $category->id))));
					$this->renderPartial('../message/_detailed_grid', array('model' => $model)); 
					break;
			}
		}
	}

	/**
	 * Deletes a Category
	 *
	 * @param integer $id the ID of the Category to be deleted
	 */
	public function actionDelete($id)
	{

	}

}