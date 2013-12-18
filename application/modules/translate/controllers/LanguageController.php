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

	public function actionTranslateMissing($id = null)
	{
		$transaction = Yii::app()->db->beginTransaction();
		try {
			foreach(Language::model()->missingTranslations($id)->findAll() as $language) {
				$missingTranslations = $id === null ? MessageSource::model()->missingTranslations($language->id)->findAll() :
				MessageSource::model()->missingTranslations($language->id)->findAllByPk($id);
				$translations = TranslateModule::translator()->googleTranslate($missingTranslations, $language->id);

				if(is_array($translations) && count($translations) === count($missingTranslations)) {
					for($i = 0; $i < count($missingTranslations); $i++) {
						$translation = new Message();
						$translation->id = $missingTranslations[$i]->id;
						$translation->language = $language->id;
						$translation->translation = $translations[$i];
						if(!$translation->save()) {
							$transaction->rollback();
							throw new CHttpException(500, TranslateModule::t('An error occured while saving a translation'));
						}
					}
				} else {
					throw new CHttpException(500, TranslateModule::t('An error occured translating a message to {language} with google translate.', array('{language}' => $language->id)));
				}
			}
		} catch(Exception $e) {
			$transaction->rollback();
			throw $e;
		}
		$transaction->commit();
		return true;
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
			case 'missingMessageSource-grid':
				$data['relatedGrids'] = array('messageSource-grid');
				$data['model'] = new MessageSource('search');
				$data['model']->missingTranslations($id);
				$gridPath = '../messageSource/_grid';
				$data['languageId'] = $id;
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
			default:
				return;
		}
		return $this->renderPartial($gridPath, $data, $return);
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
	public function actionDelete($id)
	{
		$db = Language::model()->getDbConnection();
		$transaction = $db->beginTransaction();
		try
		{
			$messagesDeleted = Message::model()->deleteAllByAttributes(array('language_id' => $id));
			$sourceMessagesDeleted = MessageSource::model()->deleteAllByAttributes(array('language_id' => $id));
			$viewsDeleted = View::model()->deleteAllByAttributes(array('language_id' => $id));
			$acceptedLanguagesDeleted = AcceptedLanguage::model()->deleteByPk($id);
			$languagesDeleted = Language::model()->deleteByPk($id);
			ViewMessage::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(MessageSource::model()->tableName()).' '.$db->quoteTableName('messageSource').' ON '.$db->quoteColumnName(ViewMessage::model()->tableName().'.message_id').'='.$db->quoteColumnName('messageSource.id'), 'condition' => $db->quoteColumnName('messageSource.id').' IS NULL'));
			CategoryMessage::model()->deleteAll(array('join' => 'LEFT OUTER JOIN '.$db->quoteTableName(MessageSource::model()->tableName()).' '.$db->quoteTableName('messageSource').' ON '.$db->quoteColumnName(CategoryMessage::model()->tableName().'.message_id').'='.$db->quoteColumnName('messageSource.id'), 'condition' => $db->quoteColumnName('messageSource.id').' IS NULL'));
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

		$message = TranslateModule::t('{languages} languages, {acceptedLanguages} accepted languages, {sourceMessages} source messages, {messages} translations, and {views} translated views have been deleted.', array('{languages}' => $languagesDeleted, '{sourceMessages}' => $sourceMessagesDeleted, '{messages}' => $messagesDeleted, '{acceptedLanguages}' => $acceptedLanguagesDeleted, '{views}' => $viewsDeleted));
		
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