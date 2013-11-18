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
				$data['model']->with(array('messageSources.viewSources.routes' => array('condition' => 'routes.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array('message-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->with(array('viewSources.routes' => array('condition' => 'routes.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Message('search');
				$data['model']->with(array('views.sourceView.routes' => array('condition' => 'routes.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid', 'view-grid');
				$data['model'] = new Language('search');
				$data['model']->with(array('views.sourceView.routes' => array('condition' => 'routes.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
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
				$data['model']->with(array('routes' => array('condition' => 'routes.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				$data['model']->with(array('sourceView.routes' => array('condition' => 'routes.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}

	/**
	 * Deletes a Route and all associated ViewSources and Views
	 *
	 * @param integer $id the ID of the Route to be deleted
	 */
	public function actionDelete($id)
	{
		$db = Route::model()->getDbConnection();
		$transaction = $db->beginTransaction();
		try
		{
			$routesDeleted = Route::model()->deleteByPk($id);
			RouteView::model()->deleteAllByAttributes(array('route_id' => $id));
			$viewsDeleted = View::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(RouteView::model()->tableName()).' '.$db->quoteTableName('viewRoutes').' ON '.$db->quoteColumnName(View::model()->tableName().'.id').'='.$db->quoteColumnName('viewRoutes.view_id'), 'condition' => $db->quoteColumnName('viewRoutes.route_id').' IS NULL'));
			$sourceViewsDeleted = ViewSource::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(RouteView::model()->tableName()).' '.$db->quoteTableName('viewRoutes').' ON '.$db->quoteColumnName(ViewSource::model()->tableName().'.id').'='.$db->quoteColumnName('viewRoutes.view_id'), 'condition' => $db->quoteColumnName('viewRoutes.route_id').' IS NULL'));
			ViewMessage::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(ViewSource::model()->tableName()).' '.$db->quoteTableName('viewSource').' ON '.$db->quoteColumnName(ViewMessage::model()->tableName().'.view_id').'='.$db->quoteColumnName('viewSource.id'), 'condition' => $db->quoteColumnName('viewSource.id').' IS NULL'));
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

		$message = TranslateModule::t('{routes} routes, {sourceViews} source views, and {views} translated views have been deleted.', array('{routes}' => $routesDeleted, '{sourceViews}' => $sourceViewsDeleted, '{views}' => $viewsDeleted));
		
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