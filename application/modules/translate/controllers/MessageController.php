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

	public function actionTranslateMissing($id = null)
	{
		$transaction = Yii::app()->db->beginTransaction();
		try
		{
			foreach(Message::model()->missingTranslations($id)->findAll() as $message)
			{
				$missingTranslations = $id === null ? MessageSource::model()->missingTranslations($message->language)->findAll() :
				MessageSource::model()->missingTranslations($message->language)->findAllByPk($id);
				$translations = TranslateModule::translator()->googleTranslate($missingTranslations, $message->language);

				if(is_array($translations) && count($translations) === count($missingTranslations))
				{
					for($i = 0; $i < count($missingTranslations); $i++)
					{
						$translation = new Message();
						$translation->id = $missingTranslations[$i]->id;
						$translation->language = $message->language;
						$translation->translation = $translations[$i];
						if(!$translation->save())
						{
							$transaction->rollback();
							throw new CHttpException(500, TranslateModule::t('An error occured while saving a translation'));
						}
					}
				}
				else
				{
					throw new CHttpException(500, TranslateModule::t('An error occured translating a message to {language} with google translate.', array('{language}' => $message->language)));
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
			$Message->source = isset($Message->id) ? MessageSource::model()->findByPk($Message->id) : new MessageSource;
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
					foreach(Language::model()->missingTranslations($Message->id)->findAll() as $language)
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
		switch($name)
		{
			case 'category-grid':
				$model = new Category('search');
				$model->with(array('messages' => array('condition' => 'messages.id=:id AND messages.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../category/_grid';
				break;
			case 'message-grid':
				$model = new Message('search');
				if(isset($id))
				{
					$model->setAttribute('id', $id);
				}
				$gridPath = '_grid';
				break;
			case 'route-grid':
				$model = new Route('search');
				$model->with(array('views.messages' => array('condition' => 'messages.id=:id AND messages.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$model = new ViewSource('search');
				$model->with(array('messages' => array('condition' => 'messages.id=:id AND messages.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$model = new View('search');
				$model->with(array('messages' => array('condition' => 'messages.id=:id AND messages.language_id=:language_id', 'params' => array(':id' => $id, ':language_id' => $languageId))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		return $this->renderPartial($gridPath, array('model' => $model), $return);
	}

	public function actionDelete($id, $languageId)
	{
		$model = Message::model()->findByPk(array('id' => $id, 'language_id' => $languageId));
		if($model !== null)
		{
			if($model->delete())
			{
				$message = 'The translation has been deleted.';
			}
			else
			{
				$message = 'The translation could not be deleted.';
			}
		}
		else
		{
			$message = 'The translation could not be found.';
		}

		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo TranslateModule::t($message);
		}
		else
		{
			Yii::app()->getUser()->setFlash(TranslateModule::t($message));
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
		}
	}

}