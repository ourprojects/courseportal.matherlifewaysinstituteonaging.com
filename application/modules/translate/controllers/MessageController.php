<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class MessageController extends TController
{

	public function filters()
	{
		return array_merge(parent::filters(), array(
			'ajaxOnly + ajaxIndex',
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + index',
				'conditions' => 'ajaxIndex + ajax'
			),
			array(
				'ext.LDConditionChainFilter.LDForwardActionFilter.LDForwardActionFilter + view',
				'conditions' => array(
					'update + put',
					'create + post'
				)
			),
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
		$this->actionGrid(null, null, $ajax);
	}

	public function actionCreate(array $Message = array(), $ajax = null)
	{
		$message = new Message;
		$message->setAttributes($Message);
		if(isset($ajax))
		{
			$message->validate();
		}
		else
		{
			$message->save();
		}
		return $this->internalActionView($message, TranslateModule::t($message->hasErrors() ? 'Error creating translation.' : 'Translation created.'));
	}

	public function actionView($id, $languageId)
	{
		$Message = Message::model()->with('source')->findByPk(array('id' => $id, 'language_id' => $languageId));
		if($Message === null)
		{
			$Message = new Message;
			$Message->id = $id;
			$Message->language_id = $languageId;
		}
			
		return $this->internalActionView($Message, null);
	}
	
	public function internalActionView($Message, $statusMessage)
	{
		if($Message === null)
		{
			throw new CHttpException(404, TranslateModule::t('Message not found.'));
		}
		
		if(!isset($Message->language))
		{
			$Message->language = isset($Message->language_id) ? Language::model()->findByPk($Message->language_id) : new Language;
		}
		
		if(!isset($Message->source))
		{
			if(!isset($Message->id))
			{
				$Message->source = new MessageSource;
				$Message->source->sourceLanguage = new Language;
			}
			else
			{
				$Message->source = MessageSource::model()->with('sourceLanguage')->findByPk($Message->id);
			}
		}
		
		$status = array('success' => $Message->hasErrors() ? 'warning' : 'success', 'message' => $statusMessage);
		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			$result = array('status' => $status);
			if($Message->hasErrors())
			{
				foreach($Message->getErrors() as $attribute => $errors)
				{
					$result[CHtml::activeId($Message, $attribute)] = $errors;
				}
			}
			else
			{
				$result['scenario'] = $Message->getScenario();
				$result['title'] = TranslateModule::t(($Message->getIsNewRecord() ? 'Create' : 'Update').' Message Translation');
				$result['id'] = $Message->id;
				$result['message'] = $Message->source->message;
				$result['translation'] = $Message->translation;
				if($Message->getIsNewRecord())
				{
					foreach(Language::model()->missingTranslationsMessageSource($Message->id)->findAll() as $language)
					{
						$result['language_id'][$language->id] = array('text' => $language->name, 'selected' => false);
					}
					$result['language_id'][$Message->language_id]['selected'] = true;
				}
				else
				{
					$result['language_id'] = $Message->language_id;
					$result['language'] = $Message->language->getName();
				}
				$result['source_language_id'] = $Message->source->language_id;
				$result['source_language'] = $Message->source->sourceLanguage->getName();
			}
			echo function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
		}
		else
		{
			$this->render('view', array('Message' => $Message, 'MessageSource' => $Message->source, 'id' => $Message->getIsNewRecord() ? 'message-create-form' : 'message-update-form', 'clientOptions' => array('status' => $status)));
		}
	}

	public function actionUpdate(array $Message = array(), $ajax = null)
	{
		if(!isset($Message['id']) || !isset($Message['language_id']))
		{
			throw new CHttpException(400, TranslateModule::t('The source message ID and language ID of the translation to be updated must be specified.'));
		}
		$messageModel = Message::model()->with('source')->findByPk(array('id' => $Message['id'], 'language_id' => $Message['language_id']));

		if($messageModel !== null)
		{
			$messageModel->setAttributes($Message);
			if(isset($ajax))
			{
				$messageModel->validate();
			}
			else
			{
				$messageModel->save();
			}
		}
		
		return $this->internalActionView($messageModel, TranslateModule::t($messageModel->hasErrors() ? 'Error updating translation!' : 'Translation updated.'));
	}

	public function actionGrid($id, $languageId, $name)
	{
		$this->internalActionGrid($id, $languageId, $name);
	}

	public function internalActionGrid($id, $languageId, $name, $return = false)
	{
		$data = array('id' => $name);
		switch($name)
		{
			case 'category-grid':
				$data['relatedGrids'] = array('message-grid');
				$data['model'] = new Category('search');
				$data['model']->message($id, $languageId);
				$gridPath = '../category/_grid';
				break;
			case 'message-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new Message('search');
				if(isset($id))
				{
					$data['model']->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'route-grid':
				$data['relatedGrids'] = array('viewSource-grid', 'view-grid');
				$data['model'] = new Route('search');
				$data['model']->message($id, $languageId);
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$data['relatedGrids'] = array('view-grid', 'route-grid');
				$data['model'] = new ViewSource('search');
				$data['model']->message($id, $languageId);
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$data['relatedGrids'] = array();
				$data['model'] = new View('search');
				$data['model']->message($id, $languageId);
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
	}

	/**
	 * Deletes a Message
	 * 
	 * @param integer $id The message's ID
	 * @param integer $languageId The ID of the message's language
	 */
	public function actionDelete(array $Message = array(), $dryRun = true, array $scopes = array())
	{
		unset($_GET['Message']);
		$model = new Message('search');
		$model->setAttributes($Message);
		
		foreach($scopes as $scope => $scopeParameters)
		{
			switch($scope)
			{
				case 'viewSource':
				case 'view':
				case 'route':
				case 'messageSource':
				case 'language':
				case 'category':
					call_user_func_array(array($model, $scope), $scopeParameters);
					break;
			}
		}
		
		if(isset($Message['id']) &&  is_array($Message['id']) && isset($Message['language_id']) && is_array($Message['language_id']))
		{
			$condition = $model->createCondition(array('id', 'language_id'), $Message, null, true, true);
		}
		else
		{
			$condition = $model->getSearchCriteria();
		}

		$messagesDeleted = 0;
		
		$transaction = Message::model()->getDbConnection()->beginTransaction();
		try
		{
			if(empty($Message))
			{
				if($dryRun)
				{
					$messagesDeleted = Message::model()->count();
				}
				else 
				{
					$messagesDeleted = Message::model()->deleteAll();
				}
			}
			else
			{
				if($dryRun)
				{
					$messagesDeleted = $model->count($condition);
				}
				else
				{
					$primaryKeys = array();
					foreach($model->filter($model->findAll($condition)) as $record)
					{
						$primaryKeys[] = array('id' => $record['id'], 'language_id' => $record['language_id']);
					}
					$messagesDeleted = Message::model()->deleteByPk($primaryKeys);
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
			$message = TranslateModule::t('This action will delete {messages} translations. Are you sure that you would like to continue?', array('{messages}' => $messagesDeleted));
		}
		else
		{
			$message = TranslateModule::t('{messages} translations have been deleted.', array('{messages}' => $messagesDeleted));
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