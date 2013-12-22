<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class LanguageController extends TController
{

	public function filters()
	{
		return array_merge(parent::filters(), array(
			'ajaxOnly + ajaxIndex, ajaxView, ajaxCreate',
			'postOnly + create, ajaxCreate',
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + index',
				'conditions' => 'ajaxIndex + ajax'
			),
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + view',
				'conditions' => 'ajaxView + ajax'
			),
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + create',
				'conditions' => 'ajaxCreate + ajax'
			)
		));
	}

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
		$this->render('view', array('language' => Language::model()->findByPk($id)));
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
			case 'translatedMessageCategory-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid', 'missingMessageSource-grid', 'sourceMessageCategory-grid');
				$data['model'] = new Category('search');
				$data['model']->languageMessage($id);
				$gridPath = '../category/_grid';
				break;
			case 'sourceMessageCategory-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid', 'missingMessageSource-grid', 'translatedMessageCategory-grid');
				$data['model'] = new Category('search');
				$data['model']->languageMessageSource($id);
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$data['relatedGrids'] = array('missingMessageSource-grid', 'message-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->language($id);
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array('missingMessageSource-grid');
				$data['model'] = new Message('search');
				$data['model']->language($id);
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Language('search');
				if(isset($id))
				{
					$data['model']->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array('viewSource-grid', 'view-grid');
				$data['model'] = new Route('search');
				$data['model']->language($id);
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$data['relatedGrids'] = array('view-grid');
				$data['model'] = new ViewSource('search');
				$data['model']->language($id);
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				$data['model']->language($id);
				$gridPath = '../view/_grid';
				break;
			case 'missingTranslationsCategory-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid');
				$data['model'] = new Category('search');
				$data['model']->missingTranslations($id);
				$gridPath = '../category/_grid';
				$data['languageId'] = $id;
				break;
			case 'missingTranslationsMessageSource-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->missingTranslations($id);
				$gridPath = '../messageSource/_grid';
				$data['languageId'] = $id;
				break;
			case 'missingTranslationsRoute-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid', 'viewSource-grid', 'view-grid');
				$data['model'] = new Route('search');
				$data['model']->missingTranslations($id);
				$gridPath = '../route/_grid';
				$data['languageId'] = $id;
				break;
			case 'missingTranslationsViewSource-grid':
				$data['relatedGrids'] = array('messageSource-grid', 'message-grid', 'view-grid');
				$data['model'] = new ViewSource('search');
				$data['model']->missingTranslations($id);
				$gridPath = '../viewSource/_grid';
				$data['languageId'] = $id;
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}
	
	public function actionTranslateMessageSource($id, array $MessageSource = array(), $dryRun = true)
	{
		$translator = TranslateModule::translator();
		if(!$translator->canUseGoogleTranslate())
		{
			throw new CHttpException(501, TranslateModule::t("Google translate is not available. Please check your system configuration."));
		}
		unset($_GET['MessageSource']);
		$model = new MessageSource('search');
		$model->setAttributes($MessageSource);
		$model->missingTranslations($id);
	
		if(is_array($MessageSource['id']))
		{
			$condition = $model->createCondition('id', $MessageSource['id']);
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
				$language = Language::model()->findByPk($id);
				if($language === null)
				{
					throw new CHttpException(404, TranslateModule::t('A language with ID {id} could not be found.', array('{id}' => $id)));
				}
	
				$source = $translator->getMessageSourceComponent();
				foreach($model->with('sourceLanguage')->findAll($condition) as $record)
				{
					try
					{
						$translation = $translator->googleTranslate($record->message, $language->code, $record->sourceLanguage->code);
						if($translation !== false)
						{
							$translation = trim($translation);
							if($source->addTranslation($record->id, $language->code, $translation) === null)
							{
								Yii::log("Message with ID '{$record->id}' could not be added to the message source component after translating it to language '{$language->code}'", CLogger::LEVEL_ERROR, TranslateModule::ID);
								$translationErrors++;
								continue;
							}
						}
						else
						{
							Yii::log("Message with ID '{$record->id}' could not be translated to '{$language->code}' by Google translate.", CLogger::LEVEL_ERROR, TranslateModule::ID);
							$translationErrors++;
							continue;
						}
					}
					catch(CharacterLimitExceededException $clee)
					{
						Yii::log("Message with ID '{$record->id}' could not be translate to language '{$language->code}' because the message is too long.", CLogger::LEVEL_ERROR, TranslateModule::ID);
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

	public function actionTranslateViewSource($id, array $ViewSource = array(), $dryRun = true)
	{
		$translator = TranslateModule::translator();
		if(!$translator->canUseGoogleTranslate())
		{
			throw new CHttpException(501, TranslateModule::t("Google translate is not available. Please check your system configuration."));
		}
		unset($_GET['ViewSource']);
		$model = new ViewSource('search');
		$model->setAttributes($ViewSource);
		$model->missingTranslations($id);
	
		if(is_array($ViewSource['id']))
		{
			$condition = $model->createCondition('id', $ViewSource['id']);
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
				$language = Language::model()->findByPk($id);
				if($language === null)
				{
					throw new CHttpException(404, TranslateModule::t('A language with ID {id} could not be found.', array('{id}' => $id)));
				}

				$viewRenderer = Yii::app()->getViewRenderer();
				foreach($model->findAll($condition) as $record)
				{
					try
					{
						if($record->getIsReadable())
						{
							$viewRenderer->generateViewFile($record->path, $viewRenderer->getViewFile($record->path, $language->code), null, $translator->messageSource, $language->code, false);
						}
						else
						{
							Yii::log('Unable to translate source view with ID "'.$record->id.'". Its path is not readable.', CLogger::LEVEL_ERROR, TranslateModule::ID);
							$translationErrors++;
							continue;
						}
					}
					catch(CException $ce)
					{
						Yii::log($ce->getMessage(), CLogger::LEVEL_ERROR, TranslateModule::ID);
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
				'message' => TranslateModule::t('This action will create {translationsCreated} new view translations. Are you sure that you would like to continue?', array('{translationsCreated}' => $translationsCreated))
			);
		}
		else if($translationErrors > 0)
		{
			$message = array(
				'status' => 'warning',
				'message' => TranslateModule::t('{translationErrors} errors occurred while creating the view translations. Only {translationsCreated} new view translations were created. Please see the system\'s logs for details.', array('{translationsCreated}' => $translationsCreated, '{translationErrors}' => $translationErrors))
			);
		}
		else
		{
			$message = array(
				'status' => 'success',
				'message' => TranslateModule::t('{translationsCreated} new view translations have been created.', array('{translationsCreated}' => $translationsCreated))
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
	
	public function actionCreate($id)
	{
		$model = new Language;
		$model->id = $id;

		$success = $model->save();

		if($model->save())
		{
			Yii::app()->getUser()->setFlash('success', 'The language has been created.');
		}
		else
		{
			Yii::app()->getUser()->setFlash('error', 'The language could not be created.');
		}

		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

	public function actionAjaxCreate(array $Language = array(), $ajax = null)
	{
		if(isset($ajax))
		{
			if($ajax === 'accepted-language-create-form')
			{
				$language = new Language;
				$language->setAttributes($Language);
				echo CActiveForm::validate($language);
			}
		}
	}

	/**
	 * Deletes a Language and any associated AcceptedLanguages, MessageSources, Messages, and Views
	 * 
	 * @param integer $id the ID of the Language to be deleted
	 */
	public function actionDelete(array $Language = array(), $dryRun = true, array $scopes = array())
	{
		unset($_GET['Language']);
		$model = new Language('search');
		$model->setAttributes($Language);
		
		foreach($scopes as $scope => $scopeParameters)
		{
			switch($scope)
			{
				case 'viewSource':
				case 'messageSource':
				case 'route':
				case 'categoryMessage':
				case 'categoryMessageSource':
					call_user_func_array(array($model, $scope), $scopeParameters);
					break;
			}
		}
		
		if(is_array($Language['id']))
		{
			$condition = $model->createCondition('id', $Language['id']);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}

		$messagesDeleted = 0;
		$sourceMessagesDeleted = 0;
		$viewsDeleted = 0;
		$acceptedLanguagesDeleted = 0;
		$languagesDeleted = 0;
		
		$transaction = Language::model()->getDbConnection()->beginTransaction();
		try
		{
			if(empty($Language))
			{
				if($dryRun)
				{
					$messagesDeleted = Message::model()->count();
					$sourceMessagesDeleted = MessageSource::model()->count();
					$viewsDeleted = View::model()->count();
					$acceptedLanguagesDeleted = AcceptedLanguage::model()->count();
					$languagesDeleted = Language::model()->count();
				}
				else 
				{
					$messagesDeleted = Message::model()->deleteAll();
					$sourceMessagesDeleted = MessageSource::model()->deleteAll();
					$viewsDeleted = View::model()->deleteAll();
					$acceptedLanguagesDeleted = AcceptedLanguage::model()->deleteAll();
					$languagesDeleted = Language::model()->deleteAll();
					ViewMessage::model()->deleteAll();
					CategoryMessage::model()->deleteAll();
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
					$messagesDeleted = Message::model()->languageSelfOrSource($primaryKeys)->count();
					$sourceMessagesDeleted = MessageSource::model()->language($primaryKeys)->count();
					$viewsDeleted = View::model()->language($primaryKeys)->count();
					$acceptedLanguagesDeleted = AcceptedLanguage::model()->countByAttributes(array('id' => $primaryKeys));
					$languagesDeleted = count($primaryKeys);
				}
				else
				{
					$messagesDeleted = Message::model()->language($primaryKeys)->deleteAll();
					$sourceMessagesDeleted = MessageSource::model()->language($primaryKeys)->deleteAll();
					$viewsDeleted = View::model()->language($primaryKeys)->deleteAll();
					$acceptedLanguagesDeleted = AcceptedLanguage::model()->deleteAllByPk($primaryKeys);
					$languagesDeleted = Language::model()->deleteAllByPk($primaryKeys);
					ViewMessage::model()->deleteAllByAttributes(array('message_id' => $primaryKeys));
					CategoryMessage::model()->deleteAllByAttributes(array('message_id' => $primaryKeys));
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
			$message = TranslateModule::t('This action will deleted {languages} languages, {acceptedLanguages} accepted languages, {sourceMessages} source messages, {messages} translations, and {views} translated views. Are you sure that you would like to continue?', array('{languages}' => $languagesDeleted, '{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted, '{acceptedLanguages}' => $acceptedLanguagesDeleted, '{views}' => $viewsDeleted));
		}
		else
		{
			$message = TranslateModule::t('{languages} languages, {acceptedLanguages} accepted languages, {sourceMessages} source messages, {messages} translations, and {views} translated views have been deleted.', array('{languages}' => $languagesDeleted, '{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted, '{acceptedLanguages}' => $acceptedLanguagesDeleted, '{views}' => $viewsDeleted));
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