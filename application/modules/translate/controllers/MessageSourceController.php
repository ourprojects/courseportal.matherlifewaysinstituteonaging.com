<?php
class MessageSourceController extends TController
{

	public function filters()
	{
		return array_merge(parent::filters(), array(
				'ajaxOnly + ajaxIndex, ajaxView',
				array(
						'ext.EForwardActionFilter.EForwardActionFilter + index, view',
						'map' => array(
								'index' => 'ajaxIndex + ajax',
								'view' => 'ajaxView + ajax',
						)
				)
		));
	}

	public function actionTranslateMissing($id = null, $class = 'Message')
	{
		$transaction = Yii::app()->db->beginTransaction();
		try {
			$missingTranslations = MessageSource::model()->missingTranslations($id)->findAll();
			if($id === null) {
				foreach($missingTranslations as $messageSource)
					$translations[] = TranslateModule::translator()->googleTranslate(
							$messageSource,
							call_user_func(array($class, 'model'))->missingTranslations($messageSource->id)->findAll()
					);
				for($i = 0; $i < count($missingTranslations); $i++) {
					if($translations[$i] === false)
						throw new CHttpException(500, TranslateModule::t('An error occured translating message {message} with google translate.', array('{message}' => $missingTranslations[$i]->message)));
					foreach($translations[$i] as $language => $t) {
						$translation = new Message();
						$translation->setAttributes(array(
								'id' => $missingTranslations[$i]->id,
								'language' => $language,
								'translation' => $t
						));

						if(!$translation->save()) {
							$transaction->rollback();
							throw new CHttpException(500, TranslateModule::t('An error occured while saving a translation'));
						}
					}
				}
			} else {
				$translations = TranslateModule::translator()->googleTranslate($missingTranslations, $id);
				if(is_array($translations) && count($translations) === count($missingTranslations)) {
					for($i = 0; $i < count($missingTranslations); $i++) {
						$translation = new Message();
						$translation->setAttributes(array(
								'id' => $missingTranslations[$i]->id,
								'language' => $id,
								'translation' => $translations[$i]
						));

						if(!$translation->save()) {
							$transaction->rollback();
							throw new CHttpException(500, TranslateModule::t('An error occured while saving a translation'));
						}
					}
				} else {
					throw new CHttpException(500, TranslateModule::t('An error occured translating a message to {language} with google translate.', array('{language}' => $acceptedLanguage->id)));
				}
			}
		} catch(Exception $e) {
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
			$this->actionGrid($id, $_GET['ajax']);
		}
	}

	public function actionView($id)
	{
		$this->render('view', array('messageSource' => MessageSource::model()->findByPk($id)));
	}

	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			$this->actionGrid($id, $_GET['ajax']);
		}
	}

	public function actionGrid($id, $name)
	{
		switch($name)
		{
			case 'category-grid':
				$model = new Category('search');
				$model->with(array('messageSources' => array('condition' => 'messageSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$model = new MessageSource('search');
				$model->setAttribute('id', $id);
				$gridPath = '_grid';
				break;
			case 'message-grid':
				$model = new Message('search');
				$model->with(array('source' => array('condition' => 'source.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$model = new Language('search');
				$model->with(array('messageSources' => array('condition' => 'messageSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../language/_grid';
				break;
			case 'missingLanguage-grid':
				$model = new Language('search');
				$model->missingTranslations($id);
				$this->renderPartial('../language/_grid', array('model' => $model, 'messageId' => $id));
				return;
			case 'route-grid':
				$model = new Route('search');
				$model->with(array('viewSources.messageSources' => array('condition' => 'messageSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$model = new ViewSource('search');
				$model->with(array('messageSources' => array('condition' => 'messageSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$model = new View('search');
				$model->with(array('sourceView.messageSources' => array('condition' => 'messageSources.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		$this->renderPartial($gridPath, array('model' => $model));
	}

	/**
	 * Deletes a record
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = MessageSource::model()->findByPk($id);
		if($model !== null)
		{
			if($model->delete())
			{
				$message = 'The message source and its translations have been deleted.';
			}
			else
			{
				$message = 'The message source could not be deleted.';
			}
		}
		else
		{
			$message = 'The message source could not be found.';
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