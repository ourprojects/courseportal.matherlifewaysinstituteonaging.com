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
			$categories->setAttributes($_GET['Category']);

		$this->render('index', array('categories' => $categories));
	}
	
	public function actionAjaxIndex()
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'category-detailed-grid':
					$categories = new Category('search');
					$this->renderPartial(
							'_detailed_grid', 
							array(
									'filter' => $categories, 
									'dataProvider' => new CActiveDataProvider($categories, array('criteria' => $categories->with('messageCount')->search()->getDbCriteria()))
							)
					);
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
		$category = Category::model()->findByPk($id);
		
		$sourceMessages = new MessageSource('search');
		$sourceMessages->with(array('categories' => array('condition' => 'categories.id='.$id, 'together' => true)));
			
		if(isset($_GET['MessageSource']))
			$sourceMessages->setAttributes($_GET['MessageSource']);
		
		$messages = new Message('search');
		$messages->with(array('source' => array('joinType' => 'INNER JOIN', 'with' => array('categories' => array('condition' => 'categories.id='.$id, 'together' => true)), 'together' => true)));
		
		if(isset($_GET['Message']))
			$messages->setAttributes($_GET['Message']);
		
		$this->render('view', array('category' => $category, 'sourceMessages' => $sourceMessages, 'messages' => $messages));
	}
	
	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'messageSource-detailed-grid':
					$sourceMessages = new MessageSource('search');
					$sourceMessages->with(array('categories' => array('condition' => 'categories.id='.$id, 'together' => true)));
					$this->renderPartial(
							'../messageSource/_detailed_grid',
							array(
									'filter' => $sourceMessages,
									'dataProvider' => new CActiveDataProvider($sourceMessages, array('criteria' => $sourceMessages->search()->getDbCriteria()))
							)
					);
					break;
				case 'message-detailed-grid':
					$messages = new Message('search');
					$messages->with(array('source' => array('with' => array('categories' => array('condition' => 'categories.id='.$id, 'together' => true)), 'together' => true)));
					$this->renderPartial(
							'../message/_detailed_grid',
							array(
									'filter' => $messages,
									'dataProvider' => new CActiveDataProvider($messages, array('criteria' => $messages->search()->getDbCriteria()))
							)
					);
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