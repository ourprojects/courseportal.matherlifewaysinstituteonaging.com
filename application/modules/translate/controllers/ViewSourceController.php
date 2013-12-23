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
				$data['relatedGrids'] = array('missingLanguage-grid', 'view-grid', 'message-grid', 'messageSource-grid', 'category-grid');
				$data['model'] = new Language('search');
				$data['model']->viewSource($id);
				$gridPath = '../language/_grid';
				break;
			case 'missingLanguage-grid':
				$data['relatedGrids'] = array('language-grid', 'view-grid', 'message-grid', 'messageSource-grid', 'category-grid');
				$data['model'] = new Language('search');
				$data['model']->missingTranslationsViewSource($id);
				$data['viewId'] = $id;
				$gridPath = '../language/_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array('view-grid', 'viewSource-grid');
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
				$data['relatedGrids'] = array('language-grid', 'missingLanguage-grid');
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
	
	public function actionTranslate(array $ViewSource = array(), array $Language = array(), $dryRun = true, array $scopes = array())
	{
		$translator = TranslateModule::translator();
		if(!$translator->canUseGoogleTranslate())
		{
			throw new CHttpException(501, TranslateModule::t("Google translate is not available. Please check your system configuration."));
		}
		unset($_GET['Language']);
		$languageModel = new Language('search');
	
		if(isset($Language['id']) && is_array($Language['id']))
		{
			$languageCondition = $languageModel->createCondition('id', $Language['id']);
		}
		else
		{
			$languageModel->setAttributes($Language);
			$languageCondition = $languageModel->getSearchCriteria();
		}
	
		unset($_GET['ViewSource']);
		$viewSourceModel = new ViewSource('search');
	
		foreach($scopes as $scope => $scopeParameters)
		{
			switch($scope)
			{
				case 'route':
				case 'messageSource':
				case 'language':
				case 'category':
				case 'message':
					call_user_func_array(array($viewSourceModel, $scope), $scopeParameters);
					break;
			}
		}
	
		if(isset($ViewSource['id']) && is_array($ViewSource['id']))
		{
			$viewSourceCondition = $viewSourceModel->createCondition('id', $ViewSource['id']);
		}
		else
		{
			$viewSourceModel->setAttributes($ViewSource);
			$viewSourceCondition = $viewSourceModel->getSearchCriteria();
		}
	
		$translationsCreated = 0;
		$viewsTranslated = 0;
		$languagesCount = 0;
		$translationErrors = 0;
	
		$transaction = Yii::app()->db->beginTransaction();
		try
		{
			$languageIds = array();
			foreach($languageModel->missingTranslationsViewSource()->findAll($languageCondition) as $language)
			{
				$languageIds[] = $language->id;
			}
			$criteria = new CDbCriteria($languageModel->createCondition('id', $languageIds, 'missingTranslationsLanguages'));
			$criteria->mergeWith($viewSourceCondition);
			$viewSources = $viewSourceModel->with('missingTranslationsLanguages')->findAll($criteria);
			if($dryRun)
			{
				$languageIds = array();
				foreach($viewSources as $viewSource)
				{
					foreach($viewSource->missingTranslationsLanguages as $language)
					{
						$languageIds[$language->id] = $language->id;
						$translationsCreated++;
					}
					$viewsTranslated++;
				}
				$languagesCount = count($languageIds);
			}
			else
			{
				$viewRenderer = Yii::app()->getViewRenderer();
				$languageIds = array();
				foreach($viewSources as $viewSource)
				{
					if($viewSource->getIsReadable())
					{
						foreach($viewSource->missingTranslationsLanguages as $language)
						{
							$languageIds[$language->id] = $language->id;
							try
							{
								$viewRenderer->generateViewFile($viewSource->path, $viewRenderer->getViewFile($viewSource->path, $language->code), null, $translator->messageSource, $language->code, false);
							}
							catch(CException $ce)
							{
								Yii::log($ce->getMessage(), CLogger::LEVEL_ERROR, TranslateModule::ID);
								$translationErrors++;
								continue;
							}
							$translationsCreated++;
						}
						$viewsTranslated++;
					}
					else
					{
						Yii::log('The source view with ID "'.$viewSource->id.'" could not be translated because its path not readable.', CLogger::LEVEL_ERROR, TranslateModule::ID);
						$translationErrors++;
					}
				}
				$languagesCount = count($languageIds);
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
				Yii::app()->getUser()->setFlash(TranslateModule::ID.'-error', $e->getView());
				$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
			}
		}
	
		if($dryRun)
		{
			$message = array(
				'status' => 'success',
				'message' => TranslateModule::t('This action will translate {viewsTranslated} source views into {languagesCount} languages. {translationsCreated} view translations in total will be created. Are you sure that you would like to continue?', array('{translationsCreated}' => $translationsCreated, '{languagesCount}' => $languagesCount, '{viewsTranslated}' => $viewsTranslated))
			);
		}
		else if($translationErrors > 0)
		{
			$message = array(
				'status' => 'warning',
				'message' => TranslateModule::t('{translationErrors} views could not be translated. Only {translationsCreated} views were successfully translated. Please see the system\'s logs for details.', array('{translationsCreated}' => $translationsCreated, '{translationErrors}' => $translationErrors))
			);
		}
		else
		{
			$message = array(
				'status' => 'success',
				'message' => TranslateModule::t('{translationsCreated} view translations have been created for {viewsTranslated} source views in {languagesCount} languages.', array('{translationsCreated}' => $translationsCreated, '{languagesCount}' => $languagesCount, '{viewsTranslated}' => $viewsTranslated))
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
	 * Deletes a ViewSource and all associated Views
	 *
	 * @param integer $id the ID of the ViewSource to be deleted
	 */
	public function actionDelete(array $ViewSource = array(), $dryRun = true, array $scopes = array())
	{
		unset($_GET['ViewSource']);
		$model = new ViewSource('search');
		$model->setAttributes($ViewSource);
		
		foreach($scopes as $scope => $scopeParameters)
		{
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
		}
		
		if(isset($ViewSource['id']) && is_array($ViewSource['id']))
		{
			$condition = $model->createCondition('id', $ViewSource['id']);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}

		$viewsDeleted = 0;
		$sourceViewsDeleted = 0;
		
		$transaction = ViewSource::model()->getDbConnection()->beginTransaction();
		try
		{
			if(empty($ViewSource))
			{
				if($dryRun)
				{
					$viewsDeleted = View::model()->count();
					$sourceViewsDeleted = ViewSource::model()->count();
				}
				else
				{
					$viewsDeleted = View::model()->deleteAll();
					$sourceViewsDeleted = ViewSource::model()->deleteAll();
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
					$viewsDeleted = View::model()->countByAttributes(array('id' => $primaryKeys));
					$sourceViewsDeleted = count($primaryKeys);
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