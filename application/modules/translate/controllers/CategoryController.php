<?php
class CategoryController extends TController
{

	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
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

	public function actionTranslateMissing($id = null, $class = 'Message')
	{

	}

	/**
	 * View all Categories.
	 */
	public function actionIndex()
	{
		$categories = new Category('search');
			
		if(isset($_GET['Category']))
			$categories->attributes = $_GET['Category'];

		$this->render('index', array('sources' => $categories));
	}

	/**
	 * View a Category's details
	 *
	 * @param integer $id The ID of the category to show details for
	 */
	public function actionView($id)
	{

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