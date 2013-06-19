<?php
class MessageController extends TController
{

	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
				'ajaxOnly + ajaxIndex',
				array(
						'translate.filters.TForwardActionFilter + index, view',
						'map' => array(
								'index' => 'ajaxIndex + ajax',
								'view' => 'update'
						)
				)
		);
	}

	public function accessRules()
	{
		return array(
				array('allow',
						'expression' => '$user->getIsAdmin()',
				),
				array('deny',
						'users' => array('*'),
				),
		);
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
			switch($_GET['ajax'])
			{
				case 'message-detailed-grid':
					$this->renderPartial('_detailed_grid', array('model' => new Message('search')));
					break;
			}
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
		$message->language = $languageId;

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
		$message = Message::model()->with('source')->findByPk(array('id' => $id, 'language' => $languageId));

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

	/**
	 * Deletes a record
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id, $languageId)
	{
		$model = Message::model()->findByPk(array('id' => $id, 'language' => $languageId));
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
			echo TranslateModule::t($message);
		else
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

}