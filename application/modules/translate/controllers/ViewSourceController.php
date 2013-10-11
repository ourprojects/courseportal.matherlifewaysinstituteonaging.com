<?php

/**
 * 
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class ViewSourceController extends TController
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

	public function actionTranslateMissing($id = null, $class = 'View')
	{

	}

	/**
	 * View all ViewSources.
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
	 * View a ViewSource's details
	 *
	 * @param integer $id The ID of the view to show details for
	 */
	public function actionView($id)
	{
		$this->render('view', array('viewSource' => ViewSource::model()->findByPk($id)));
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
				$model->with(array('messageSources.viewSources' => array('condition' => 'viewSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$model = new MessageSource('search');
				$model->with(array('viewSources' => array('condition' => 'viewSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$model = new Message('search');
				$model->with(array('views.sourceView' => array('condition' => 'sourceView.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$model = new Language('search');
				$model->with(array('viewSources' => array('condition' => 'viewSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../language/_grid';
				break;
			case 'route-grid':
				$model = new Route('search');
				$model->with(array('viewSources' => array('condition' => 'viewSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$model = new ViewSource('search');
				if(isset($id))
				{
					$model->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'view-grid':
				$model = new View('search');
				if(isset($id))
				{
					$model->setAttribute('id', $id);
				}
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, array('model' => $model), $return);
	}

	/**
	 * Deletes a ViewSource
	 *
	 * @param integer $id the ID of the ViewSource to be deleted
	 */
	public function actionDelete($id)
	{
		$model = ViewSource::model()->findByPk($id);
		if($model !== null)
		{
			if($model->delete())
			{
				$message = 'The source view and its translated views have been deleted.';
			}
			else
			{
				$message = 'The source view could not be deleted.';
			}
		}
		else
		{
			$message = 'The source view could not be found.';
		}

		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo TranslateModule::t($message);
		}
		else
		{
			Yii::app()->getUser()->setFlash(TranslateModule::t($message));
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
		}
	}

}