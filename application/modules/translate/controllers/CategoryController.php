<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class CategoryController extends TController
{

	public function filters()
	{
		return array_merge(parent::filters(), array(
				'ajaxOnly + ajaxIndex, ajaxView',
				array(
						'ext.EForwardActionFilter.EForwardActionFilter + index, view',
						'map' => array(
								'index' => 'ajaxIndex + ajax',
								'view' => 'ajaxView + ajax',
						)
				)
		));
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
			$this->actionGrid(null, $_GET['ajax']);
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
			$this->actionGrid($id, $_GET['ajax']);
		}
	}
	
	public function actionGrid($id, $name)
	{
		$this->internalActionGrid($id, $name);
	}

	public function internalActionGrid($id, $name, $return = false)
	{
		switch($name)
		{
			case 'category-grid':
				$model = new Category('search');
				$model->setAttribute('id', $id);
				$gridPath = '_grid';
				break;
			case 'messageSource-grid':
				$model = new MessageSource('search');
				$model->with(array('categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$model = new Message('search');
				$model->with(array('source.categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$model = new Language('search');
				$model->with(array('messageSources.categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../language/_grid';
				break;
			case 'route-grid':
				$model = new Route('search');
				$model->with(array('viewSources.messageSources.categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$model = new ViewSource('search');
				$model->with(array('messageSources.categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$model = new View('search');
				$model->with(array('sourceView.messageSources.categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, array('model' => $model), $return);
	}

	/**
	 * Deletes a Category
	 * @param integer $id the ID of the Category to be deleted
	 */
	public function actionDelete($id)
	{
		$model = Category::model()->findByPk($id);
		if($model !== null)
		{
			if($model->delete())
			{
				$message = 'The category and its translations have been deleted.';
			}
			else
			{
				$message = 'The category could not be deleted.';
			}
		}
		else
		{
			$message = 'The category could not be found.';
		}

		if(Yii::app()->getRequest()->getIsAjaxRequest())
			echo TranslateModule::t($message);
		else
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

}