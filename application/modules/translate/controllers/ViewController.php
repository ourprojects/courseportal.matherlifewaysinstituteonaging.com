<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class ViewController extends TController
{

	public function filters()
	{
		return array_merge(parent::filters(), array(
			'ajaxOnly + ajaxIndex, ajaxView',
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + index',
				'conditions' => 'ajaxIndex + ajax'
			),
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + view',
				'conditions' => 'ajaxView + ajax'
			)
		));
	}

	public function actionTranslateMissing($id = null, $class = 'View')
	{

	}

	/**
	 * View all Views.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAjaxIndex($ajax)
	{
		$this->actionGrid(null, null, $ajax);
	}

	/**
	 * View a View's details
	 *
	 * @param integer $id The ID of the view to show details for
	 * @param integer $languageId The ID of the view's language to show details for
	 */
	public function actionView($id, $languageId)
	{
		$this->render('view', array('view' => View::model()->with(array('sourceView', 'language'))->findByPk(array('id' => $id, 'language_id' => $languageId))));
	}

	/**
	 * Get a View's detailed info grid. Ajax only.
	 *
	 * @param integer $id The ID of the view to get an info grid for
	 * @param integer $languageId The ID of the view's language to show details for
	 */
	public function actionAjaxView($id, $languageId, $ajax)
	{
		$this->actionGrid($id, $languageId, $ajax);
	}

	public function actionGrid($id, $languageId, $name)
	{
		$this->internalActionGrid($id, $languageId, $name);
	}

	public function internalActionGrid($id, $languageId, $name, $return = false)
	{
		$data = array('id' => $name);
		switch($name)
		{
			case 'category-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid');
				$data['model'] = new Category('search');
				$data['model']->with(array('messageSources.views' => array('condition' => 'views.id=:id AND views.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array('message-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->with(array('views' => array('condition' => 'views.id=:id AND views.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Message('search');
				$data['model']->with(array('views' => array('condition' => 'views.id=:id AND views.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../message/_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Route('search');
				$data['model']->with(array('views' => array('condition' => 'views.id=:id AND views.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../route/_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				if(isset($id))
				{
					$data['model']->setAttribute('id', $id);
				}
				if(isset($languageId))
				{
					$data['model']->setAttribute('language_id', $languageId);
				}
				$gridPath = '_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}

	/**
	 * Deletes a View
	 *
	 * @param integer $id the ID of the View to be deleted
	 * @param integer $languageId The ID of the view's language to be deleted
	 */
	public function actionDelete($id, $languageId)
	{
		try
		{
			$recordsDeleted = View::model()->deleteByPk(array('id' => $id, 'language_id' => $languageId));
		}
		catch(Exception $e)
		{
			if(Yii::app()->getRequest()->getIsAjaxRequest())
			{
				throw $e;
			}
			else
			{
				Yii::app()->getUser()->setFlash(TranslateModule::ID.'-error', $e->getMessage());
				$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
			}
		}
		
		$message = TranslateModule::t('{recordCount} translated views have been deleted.', array('{recordCount}' => $recordsDeleted));

		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo $message;
		}
		else
		{
			Yii::app()->getUser()->setFlash(TranslateModule::ID.'-success', $message);
			$this->redirect($this->createUrl('index'));
		}
	}

}