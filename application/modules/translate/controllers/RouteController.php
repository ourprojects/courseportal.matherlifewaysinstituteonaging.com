<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class RouteController extends TController
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
	 * View all Categories.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAjaxIndex($ajax)
	{
		$this->actionGrid(null, $ajax);
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

	public function actionAjaxView($id, $ajax)
	{
		$this->actionGrid($id, $ajax);
	}

	public function actionGrid($id, $name)
	{
		$this->internalActionGrid($id, $name);
	}

	public function internalActionGrid($id, $name, $return = false)
	{
		$data = array('id' => $name);
		switch($name)
		{
			case 'category-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid');
				$data['model'] = new Category('search');
				$data['model']->route($id);
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array('message-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->route($id);
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Message('search');
				$data['model']->route($id);
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid', 'view-grid');
				$data['model'] = new Language('search');
				$data['model']->route($id);
				$gridPath = '../language/_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Route('search');
				if(isset($id))
				{
					$data['model']->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'viewSource-grid':
				$data['relatedGrids'] = array('view-grid');
				$data['model'] = new ViewSource('search');
				$data['model']->route($id);
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				$data['model']->route($id);
				$gridPath = '../view/_grid';
				break;
			case 'missingTranslationsLanguage-grid':
				$data['relatedGrids'] = array('language-grid', 'view-grid', 'messageSource-grid', 'message-grid');
				$data['model'] = new Language('search');
				$data['model']->missingTranslationsRoute($id);
				$data['routeId'] = $id;
				$gridPath = '../language/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}
	
	public function actionTranslate($id, array $Route = array(), $dryRun = true)
	{
		// @ TODO
		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

	/**
	 * Deletes a Route and all associated ViewSources and Views
	 *
	 * @param integer $id the ID of the Route to be deleted
	 */
	public function actionDelete(array $Route = array(), $dryRun = true, array $scopes = array())
	{
		unset($_GET['Route']);
		$model = new Route('search');
		$model->setAttributes($Route);
		
		foreach($scopes as $scope => $scopeParameters)
		{
			switch($scope)
			{
				case 'viewSource':
				case 'view':
				case 'messageSource':
				case 'language':
				case 'category':
				case 'message':
					call_user_func_array(array($model, $scope), $scopeParameters);
					break;
			}
		}
		
		if(is_array($Route['id']))
		{
			$condition = $model->createCondition('id', $Route['id']);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}

		$routesDeleted = 0;
		$viewsDeleted = 0;
		$sourceViewsDeleted = 0;
		
		$transaction = Route::model()->getDbConnection()->beginTransaction();
		try
		{
			if(empty($Route))
			{
				if($dryRun)
				{
					$routesDeleted = Route::model()->count();
					$viewsDeleted = View::model()->count();
					$sourceViewsDeleted = ViewSource::model()->count();
				}
				else 
				{
					$viewsDeleted = View::model()->deleteAll();
					$sourceViewsDeleted = ViewSource::model()->deleteAll();
					$routesDeleted = Route::model()->deleteAll();
					RouteView::model()->deleteAll();
				}
			}
			else
			{
				$primaryKeys = array();
				foreach($model->filter($model->findAll($condition)) as $record)
				{
					$primaryKeys[] = $record['id'];
				}
				
				if($dryRun)
				{
					$routesDeleted = count($primaryKeys);
					$viewsDeleted = View::model()->route($primaryKeys)->count();
					$sourceViewsDeleted = ViewSource::model()->route($primaryKeys)->count();
				}
				else
				{
					$viewsDeleted = View::model()->route($primaryKeys)->deleteAll();
					$sourceViewsDeleted = ViewSource::model()->route($primaryKeys)->deleteAll();
					$routesDeleted = Route::model()->deleteByPk($primaryKeys);
					RouteView::model()->deleteAllByAttributes(array('route_id' => $primaryKeys));
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
			$message = TranslateModule::t('This action will delete {routes} routes, {sourceViews} source views, and {views} translated views. Are you sure that you would like to continue?', array('{routes}' => $routesDeleted, '{sourceViews}' => $sourceViewsDeleted, '{views}' => $viewsDeleted));
		}
		else
		{
			$message = TranslateModule::t('{routes} routes, {sourceViews} source views, and {views} translated views have been deleted.', array('{routes}' => $routesDeleted, '{sourceViews}' => $sourceViewsDeleted, '{views}' => $viewsDeleted));
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