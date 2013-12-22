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
				$data['model']->view($id, $languageId);
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array('message-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->view($id, $languageId);
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Message('search');
				$data['model']->view($id, $languageId);
				$gridPath = '../message/_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Route('search');
				$data['model']->view($id, $languageId);
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
	public function actionDelete(array $View = array(), $dryRun = true, array $scopes = array())
	{
		unset($_GET['View']);
		$model = new View('search');
		$model->setAttributes($View);
		
		foreach($scopes as $scope => $scopeParameters)
		{
			switch($scope)
			{
				case 'viewSource':
				case 'route':
				case 'messageSource':
				case 'language':
				case 'category':
				case 'message':
					call_user_func_array(array($model, $scope), $scopeParameters);
					break;
			}
		}
		
		if(isset($View['id']) && is_array($View['id']) && isset($View['language_id']) && is_array($View['language_id']))
		{
			$condition = $model->createCondition(array('id', 'language_id'), $View, null, true, true);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}

		$viewsDeleted = 0;
		
		$transaction = View::model()->getDbConnection()->beginTransaction();
		try
		{
			if(empty($View))
			{
				if($dryRun)
				{
					$viewsDeleted = View::model()->count();
				}
				else 
				{
					$viewsDeleted = View::model()->deleteAll();
				}
			}
			else
			{
				if($dryRun)
				{
					$viewsDeleted = $model->count($condition);
				}
				else
				{
					$primaryKeys = array();
					foreach($model->filter($model->findAll($condition)) as $record)
					{
						$primaryKeys[] = array('id' => $record['id'], 'language_id' => $record['language_id']);
					}
					$viewsDeleted = View::model()->deleteByPk($primaryKeys);
				}
			}
			$transaction->commit();
		}
		catch(Exception $e)
		{
			$transaction->rollback();
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
		
		if($dryRun)
		{
			$message = TranslateModule::t('This action will delete {views} translated views. Are you sure that you would like to continue?', array('{views}' => $viewsDeleted));
		}
		else
		{
			$message = TranslateModule::t('{views} translated views have been deleted.', array('{views}' => $viewsDeleted));
		}
		
		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo CJavaScript::jsonEncode(array('status' => 'normal', 'message' => $message));
		}
		else
		{
			Yii::app()->getUser()->setFlash(TranslateModule::ID.'-success', $message);
			$this->redirect($this->createUrl('index'));
		}
	}

}