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
	public function actionDelete($id)
	{
		$db = Category::model()->getDbConnection();
		$transaction = $db->beginTransaction();
		try
		{
			$categoriesDeleted = Category::model()->deleteByPk($id);
			CategoryMessage::model()->deleteAllByAttributes(array('category_id' => $id));
			$messagesDeleted = Message::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(CategoryMessage::model()->tableName()).' '.$db->quoteTableName('messageCategories').' ON '.$db->quoteColumnName(Message::model()->tableName().'.id').'='.$db->quoteColumnName('messageCategories.message_id'), 'condition' => $db->quoteColumnName('messageCategories.category_id').' IS NULL'));
			$sourceMessagesDeleted = MessageSource::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(CategoryMessage::model()->tableName()).' '.$db->quoteTableName('messageCategories').' ON '.$db->quoteColumnName(MessageSource::model()->tableName().'.id').'='.$db->quoteColumnName('messageCategories.message_id'), 'condition' => $db->quoteColumnName('messageCategories.category_id').' IS NULL'));
			ViewMessage::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(MessageSource::model()->tableName()).' '.$db->quoteTableName('messageSource').' ON '.$db->quoteColumnName(ViewMessage::model()->tableName().'.message_id').'='.$db->quoteColumnName('messageSource.id'), 'condition' => $db->quoteColumnName('messageSource.id').' IS NULL'));
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

		$message = TranslateModule::t('{categories} categories, {sourceMessages} source messages, and {messages} translations have been deleted.', array('{categories}' => $categoriesDeleted, '{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted));

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