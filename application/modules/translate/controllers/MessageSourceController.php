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
				$data['model']->missingTranslationsMessageSource($id);
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
	
	public function actionTranslate($id, array $Language = array(), $dryRun = true)
	{
		$translator = TranslateModule::translator();
		if(!$translator->canUseGoogleTranslate())
		{
			throw new CHttpException(501, TranslateModule::t("Google translate is not available. Please check your system configuration."));
		}
		unset($_GET['Language']);
		$model = new Language('search');
		$model->setAttributes($Language);
		$model->missingTranslationsMessageSource($id);
		
		if(is_array($Language['id']))
		{
			$condition = $model->createCondition('id', $Language['id']);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}
		
		$translationsCreated = 0;
		$translationErrors = 0;
		
		$transaction = Yii::app()->db->beginTransaction();
		try
		{
			if($dryRun)
			{
				$translationsCreated = $model->count($condition);
			}
			else
			{
				$messageSource = MessageSource::model()->with('sourceLanguage')->findByPk($id);
				if($messageSource === null)
				{
					throw new CHttpException(404, TranslateModule::t('A source message with ID {id} could not be found.', array('{id}' => $id)));
				}

				$source = $translator->getMessageSourceComponent();
				foreach($model->findAll($condition) as $record)
				{
					try
					{
						$translation = $translator->googleTranslate($messageSource->message, $record->code, $messageSource->sourceLanguage->code);
						if($translation !== false)
						{
							$translation = trim($translation);
							if($source->addTranslation($messageSource->id, $record->code, $translation) === null)
							{
								Yii::log("Message with ID '{$messageSource->id}' could not be added to the message source component after translating it to language '{$record->code}'", CLogger::LEVEL_ERROR, TranslateModule::ID);
								$translationErrors++;
								continue;
							}
						}
						else
						{
							Yii::log("Message with ID '{$messageSource->id}' could not be translated to '{$record->code}' by Google translate.", CLogger::LEVEL_ERROR, TranslateModule::ID);
							$translationErrors++;
							continue;
						}
					}
					catch(CharacterLimitExceededException $clee)
					{
						Yii::log("Message with ID '{$messageSource->id}' could not be translate to language '{$record->code}' because the message is too long.", CLogger::LEVEL_ERROR, TranslateModule::ID);
						$translationErrors++;
						continue;
					}
					$translationsCreated++;
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
			$message = array(
				'status' => 'success',
				'message' => TranslateModule::t('This action will create {translationsCreated} new translations. Are you sure that you would like to continue?', array('{translationsCreated}' => $translationsCreated))
			);
		}
		else if($translationErrors > 0)
		{
			$message = array(
				'status' => 'warning',
				'message' => TranslateModule::t('{translationErrors} errors occurred while creating the translations. Only {translationsCreated} new translations were created. Please see the system\'s logs for details.', array('{translationsCreated}' => $translationsCreated, '{translationErrors}' => $translationErrors))
			);
		}
		else
		{
			$message = array(
				'status' => 'success',
				'message' => TranslateModule::t('{translationsCreated} new translations have been created.', array('{translationsCreated}' => $translationsCreated))
			);
		}
		
		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo CJavaScript::jsonEncode($message);
		}
		else
		{
			Yii::app()->getUser()->setFlash(TranslateModule::ID.'-'.$message['status'], $message['message']);
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
		}
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