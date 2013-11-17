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
		switch($name)
		{
			case 'category-grid':
				$model = new Category('search');
				if(isset($id))
				{
					$model->setAttribute('id', $id);
				}
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
			case 'sourceMessageLanguage-grid':
				$model = new Language('search');
				$model->with(array('sourceMessages.categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../language/_grid';
				break;
			case 'translatedMessageLanguage-grid':
				$model = new Language('search');
				$model->with(array('messages.categories' => array('condition' => 'categories.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
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
		return $this->renderPartial($gridPath, array('model' => $model, 'id' => $name), $return);
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