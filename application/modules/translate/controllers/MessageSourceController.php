<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class MessageSourceController extends TController
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

	public function actionTranslateMissing($id = null, $class = 'Message')
	{
		$transaction = Yii::app()->db->beginTransaction();
		try
		{
			$missingTranslations = MessageSource::model()->missingTranslations($id)->findAll();
			if($id === null)
			{
				foreach($missingTranslations as $messageSource)
				{
					$translations[] = TranslateModule::translator()->googleTranslate(
							$messageSource,
							call_user_func(array($class, 'model'))->missingTranslations($messageSource->id)->findAll()
					);
				}
				for($i = 0; $i < count($missingTranslations); $i++)
				{
					if($translations[$i] === false)
					{
						throw new CHttpException(500, TranslateModule::t('An error occured translating message {message} with google translate.', array('{message}' => $missingTranslations[$i]->message)));
					}
					foreach($translations[$i] as $language => $t)
					{
						$translation = new Message();
						$translation->setAttributes(array(
							'id' => $missingTranslations[$i]->id,
							'language' => $language,
							'translation' => $t
						));

						if(!$translation->save())
						{
							$transaction->rollback();
							throw new CHttpException(500, TranslateModule::t('An error occured while saving a translation'));
						}
					}
				}
			}
			else
			{
				$translations = TranslateModule::translator()->googleTranslate($missingTranslations, $id);
				if(is_array($translations) && count($translations) === count($missingTranslations))
				{
					for($i = 0; $i < count($missingTranslations); $i++)
					{
						$translation = new Message();
						$translation->setAttributes(array(
							'id' => $missingTranslations[$i]->id,
							'language' => $id,
							'translation' => $translations[$i]
						));

						if(!$translation->save())
						{
							$transaction->rollback();
							throw new CHttpException(500, TranslateModule::t('An error occured while saving a translation'));
						}
					}
				}
				else
				{
					throw new CHttpException(500, TranslateModule::t('An error occured translating a message to {language} with google translate.', array('{language}' => $acceptedLanguage->id)));
				}
			}
		}
		catch(Exception $e)
		{
			$transaction->rollback();
			throw $e;
		}
		$transaction->commit();
		return true;
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAjaxIndex($ajax)
	{
		$this->actionGrid(null, $ajax);
	}

	public function actionView($id)
	{
		$this->render('view', array('messageSource' => MessageSource::model()->findByPk($id)));
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
				$data['relatedGrids'] = array('message-grid');
				$data['model'] = new Category('search');
				$data['model']->messageSource($id);
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new MessageSource('search');
				if(isset($id))
				{
					$data['model']->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array('missingLanguage-grid');
				$data['model'] = new Message('search');
				$data['model']->messageSource($id);
				$data['messageId'] = $id;
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$data['relatedGrids'] = array('missingLanguage-grid', 'message-grid');
				$data['model'] = new Language('search');
				$data['model']->messageSource($id);
				$gridPath = '../language/_grid';
				break;
			case 'missingLanguage-grid':
				$data['relatedGrids'] = array('language-grid', 'message-grid');
				$data['model'] = new Language('search');
				$data['model']->missingTranslations($id);
				$data['messageId'] = $id;
				$gridPath = '../language/_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array('viewSource-grid', 'view-grid');
				$data['model'] = new Route('search');
				$data['model']->messageSource($id);
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$data['relatedGrids'] = array('view-grid');
				$data['model'] = new ViewSource('search');
				$data['model']->messageSource($id);
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				$data['model']->messageSource($id);
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}

	/**
	 * Deletes a MessageSource and all associated Messages
	 * 
	 * @param integer $id the ID of the MessageSource to be deleted
	 */
	public function actionDelete(array $MessageSource = array(), $dryRun = true, array $scopes = array())
	{
		unset($_GET['MessageSource']);
		$model = new MessageSource('search');
		$model->setAttributes($MessageSource);
		
		foreach($scopes as $scope => $scopeParameters)
		{
			switch($scope)
			{
				case 'viewSource':
				case 'view':
				case 'route':
				case 'language':
				case 'category':
					call_user_func_array(array($model, $scope), $scopeParameters);
					break;
			}
		}
		
		if(is_array($MessageSource['id']))
		{
			$condition = $model->createCondition('id', $MessageSource['id']);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}

		$sourceMessagesDeleted = 0;
		$messagesDeleted = 0;
		
		$transaction = MessageSource::model()->getDbConnection()->beginTransaction();
		try
		{
			if(empty($MessageSource))
			{
				if($dryRun)
				{
					$messagesDeleted = Message::model()->count();
					$sourceMessagesDeleted = MessageSource::model()->count();
				}
				else 
				{
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
					$messagesDeleted = Message::model()->countByAttributes(array('id' => $primaryKeys));
					$sourceMessagesDeleted = count($primaryKeys);
				}
				else
				{
					$messagesDeleted = Message::model()->deleteAllByAttributes(array('id' => $primaryKeys));
					$sourceMessagesDeleted = MessageSource::model()->deleteByPk($primaryKeys);
					CategoryMessage::model()->deleteAllByAttributes(array('message_id' => $primaryKeys));
					ViewMessage::model()->deleteAllByAttributes(array('message_id' => $primaryKeys));
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
			$message = TranslateModule::t('This action will delete {sourceMessages} source messages and {messages} translations. Are you sure that you would like to continue?', array('{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted));
		}
		else
		{
			$message = TranslateModule::t('{sourceMessages} source messages and {messages} translations have been deleted.', array('{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted));
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
	 * Flushes the cache of the translator's message source component.
	 */
	public function actionFlushCache()
	{
		TranslateModule::translator()->getMessageSourceComponent()->flushCache();
	}

}