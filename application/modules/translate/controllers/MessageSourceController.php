<?php
class MessageSourceController extends TController
{

	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
				'ajaxOnly + ajaxIndex, ajaxView',
				array(
						'translate.filters.TForwardActionFilter + index, view',
						'map' => array(
								'index' => 'ajaxIndex + ajax',
								'view' => 'ajaxView + ajax',
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
			switch($_GET['ajax'])
			{
				case 'messageSource-detailed-grid':
					$this->renderPartial('_detailed_grid', array('model' => new MessageSource('search')));
					break;
			}
		}
	}

	public function actionView($id)
	{
		$this->render('view', array('source' => MessageSource::model()->findByPk($id)));
	}

	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'message-grid':
					$model = new Message('search');
					$model->setAttribute('id', $id);
					$this->renderPartial('../message/_grid', array('model' => $model));
					break;
				case 'messageSource-accepted-translations-grid':
					$model = new AcceptedLanguage('search');
					$this->renderPartial('_missing_accepted_translation_grid', array('model' => $model->missingTranslations($id)));
					break;
				case 'messageSource-other-translations-grid':
					$model = new Message('search');
					$this->renderPartial('_missing_other_translation_grid', array('model' => $model->missingTranslations($id)));
					break;
			}
		}
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
			echo TranslateModule::t($message);
		else
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

}