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
	 * View all ViewSources.
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
	 * View a ViewSource's details
	 *
	 * @param integer $id The ID of the view to show details for
	 */
	public function actionView($id)
	{
		$this->render('view', array('viewSource' => ViewSource::model()->findByPk($id)));
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
				$data['model']->viewSource($id);
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array('message-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->viewSource($id);
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Message('search');
				$data['model']->viewSource($id);
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid', 'view-grid');
				$data['model'] = new Language('search');
				$data['model']->viewSource($id);
				$gridPath = '../language/_grid';
				break;
			case 'missingLanguage-grid':
				$data['relatedGrids'] = array('language-grid', 'view-grid');
				$data['model'] = new Language('search');
				$data['model']->missingViewTranslations($id);
				$data['viewId'] = $id;
				$gridPath = '../language/_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array('view-grid');
				$data['model'] = new Route('search');
				$data['model']->viewSource($id);
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new ViewSource('search');
				if(isset($id))
				{
					$data['model']->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				if(isset($id))
				{
					$data['model']->viewSource($id);
					$data['viewId'] = $id;
				}
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}

	/**
	 * Deletes a ViewSource and all associated Views
	 *
	 * @param integer $id the ID of the ViewSource to be deleted
	 */
	public function actionDelete(array $ViewSource = array(), $dryRun = true, $scope = null, $scopeParameters = array())
	{
		unset($_GET['ViewSource']);
		$model = new ViewSource('search');
		$model->setAttributes($ViewSource);
		
		switch($scope)
		{
			case 'route':
			case 'messageSource':
			case 'language':
			case 'category':
			case 'message':
				call_user_func_array(array($model, $scope), $scopeParameters);
				break;
		}
		
		$viewsDeleted = 0;
		$sourceViewsDeleted = 0;
		$transaction = ViewSource::model()->getDbConnection()->beginTransaction();
		try
		{
			if(!empty($ViewSource))
			{
				$primaryKeys = array();
				foreach($model->filter($model->findAll($model->getSearchCriteria())) as $record)
				{
					$primaryKeys[] = $record['id'];
				}
			}
			if($dryRun)
			{
				if(empty($ViewSource))
				{
					$viewsDeleted = View::model()->count();
					$sourceViewsDeleted = ViewSource::model()->count();
				}
				else
				{
					$viewsDeleted = View::model()->countByAttributes(array('id' => $primaryKeys));
					$sourceViewsDeleted = ViewSource::model()->countByAttributes(array('id' => $primaryKeys));
				}
			}
			else
			{
				if(empty($ViewSource))
				{
					$viewsDeleted = View::model()->deleteAll();
					$sourceViewsDeleted = ViewSource::model()->deleteAll();
					ViewMessage::model()->deleteAll();
				}
				else
				{
					$viewsDeleted = View::model()->deleteAllByAttributes(array('id' => $primaryKeys));
					$sourceViewsDeleted = ViewSource::model()->deleteByPk($primaryKeys);
					ViewMessage::model()->deleteAllByAttributes(array('view_id' => $primaryKeys));
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
			$message = TranslateModule::t('This action will delete {sourceViews} source views and {views} translated views. Are you sure that you would like to continue?', array('{sourceViews}' => $sourceViewsDeleted, '{views}' => $viewsDeleted));
		}
		else
		{
			$message = TranslateModule::t('{sourceViews} source views and {views} translated views have been deleted.', array('{sourceViews}' => $sourceViewsDeleted, '{views}' => $viewsDeleted));
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
	
	/**
	 * Flushes the cache of the translator's view source component.
	 */
	public function actionFlushCache()
	{
		TranslateModule::translator()->getViewSourceComponent()->flushCache();
	}

}