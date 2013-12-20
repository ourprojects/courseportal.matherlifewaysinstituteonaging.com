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
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + index',
				'conditions' => 'ajaxIndex + ajax'
			),
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + view',
				'conditions' => 'ajaxView + ajax'
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

	public function actionAjaxIndex($ajax)
	{
		$this->actionGrid(null, $ajax);
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
				$data['relatedGrids'] = array();
				$data['model'] = new Category('search'); 
				if(isset($id))
				{
					$data['model']->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array('message-grid', 'missingMessageSource-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->category($id);
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array('missingMessageSource-grid');
				$data['model'] = new Message('search');
				$data['model']->category($id);
				$gridPath = '../message/_grid';
				break;
			case 'sourceMessageLanguage-grid':
				$data['relatedGrids'] = array('translatedMessageLanguage-grid', 'messageSource-grid', 'message-grid');
				$data['model'] = new Language('search');
				$data['model']->categoryMessageSource($id);
				$gridPath = '../language/_grid';
				break;
			case 'translatedMessageLanguage-grid':
				$data['relatedGrids'] = array('sourceMessageLanguage-grid', 'messageSource-grid', 'message-grid');
				$data['model'] = new Language('search');
				$data['model']->categoryMessage($id);
				$gridPath = '../language/_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array('viewSource-grid', 'view-grid');
				$data['model'] = new Route('search');
				$data['model']->category($id);
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$data['relatedGrids'] = array('view-grid');
				$data['model'] = new ViewSource('search');
				$data['model']->category($id);
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				$data['model']->category($id);
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}

	/**
	 * Deletes a Category and any associated Messages and MessageSources.
	 * 
	 * @param integer $id the ID of the Category to be deleted
	 */
	public function actionDelete(array $Category = array(), $dryRun = true, array $scopes = array())
	{
		unset($_GET['Category']);
		$model = new Category('search');
		$model->setAttributes($Category);
		
		foreach($scopes as $scope => $scopeParameters)
		{
			switch($scope)
			{
				case 'viewSource':
				case 'view':
				case 'route':
				case 'messageSource':
				case 'languageMessage':
				case 'languageMessageSource':
				case 'message':
					call_user_func_array(array($model, $scope), $scopeParameters);
					break;
			}
		}
		
		if(is_array($Category['id']))
		{
			$condition = $model->createCondition('id', $Category['id']);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}

		$categoriesDeleted = 0;
		$messagesDeleted = 0;
		$sourceMessagesDeleted = 0;
		
		$transaction = Category::model()->getDbConnection()->beginTransaction();
		try
		{
			if(empty($Category))
			{
				if($dryRun)
				{
					$categoriesDeleted = Category::model()->count();
					$messagesDeleted = Message::model()->count();
					$sourceMessagesDeleted = MessageSource::model()->count();
				}
				else 
				{
					$categoriesDeleted = Category::model()->deleteAll();
					$messagesDeleted = Message::model()->deleteAll();
					$sourceMessagesDeleted = MessageSource::model()->deleteAll();
					CategoryMessage::model()->deleteAll();
					ViewMessage::model()->deleteAll();
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
					$categoriesDeleted = count($primaryKeys);
					$messagesDeleted = Message::model()->category($primaryKeys)->count();
					$sourceMessagesDeleted = MessageSource::model()->category($primaryKeys)->count();
				}
				else
				{
					$categoriesDeleted = Category::model()->deleteAllByPk($primaryKeys);
					$messagesDeleted = Message::model()->category($primaryKeys)->deleteAll();
					$sourceMessagesDeleted = MessageSource::model()->category($primaryKeys)->deleteAll();
					CategoryMessage::model()->deleteAllByAttributes(array('category_id' => $primaryKeys));
					ViewMessage::model()->deleteAllByAttributes(array('category_id' => $primaryKeys));
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
			$message = TranslateModule::t('This action will deleted {categories} categories, {sourceMessages} source messages, and {messages} translations. Are you sure that you would like to continue?', array('{categories}' => $categoriesDeleted, '{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted));
		}
		else
		{
			$message = TranslateModule::t('{categories} categories, {sourceMessages} source messages, and {messages} translations have been deleted.', array('{categories}' => $categoriesDeleted, '{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted));
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