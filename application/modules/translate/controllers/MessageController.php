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
				'conditions' => 'update'
			)
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

	public function actionAjaxIndex()
	{
		if(isset($_GET['ajax']))
		{
			$this->actionGrid(null, null, $_GET['ajax']);
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionCreate($id, $languageId)
	{
		$message = new Message;
		$message->id = $id;
		$message->language_id = $languageId;

		if(isset($_POST['Message']))
		{
			$message->setAttributes($_POST['Message']);
			if($message->save())
				$this->redirect(Yii::app()->getUser()->getReturnUrl());
		}
		else
		{
			if($referer = Yii::app()->getRequest()->getUrlReferrer())
				Yii::app()->getUser()->setReturnUrl($referer);
		}

		$this->render('view', array('message' => $message));
	}

	public function actionView($id, $languageId)
	{
		// Forwarded to update action
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id, $languageId)
	{
		$message = Message::model()->with('source')->findByPk(array('id' => $id, 'language_id' => $languageId));

		if($message !== null)
		{
			if(isset($_POST['Message']))
			{
				$message->setAttributes($_POST['Message']);
				if($message->save())
					$this->redirect(Yii::app()->getUser()->getReturnUrl());
			}
			else
			{
				if($referer = Yii::app()->getRequest()->getUrlReferrer())
					Yii::app()->getUser()->setReturnUrl($referer);
			}
			$this->render('view', array('message' => $message));
		}
		else
		{
			throw new CHttpException(404, TranslateModule::t('The requested message does not exist.'));
		}
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

	/**
	 * Deletes a record
	 * @param integer $id the ID of the model to be deleted
	 */
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