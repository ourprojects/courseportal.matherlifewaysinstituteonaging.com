<?php
class LanguageController extends TController
{

	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
				'ajaxOnly + ajaxIndex, ajaxView, ajaxCreate',
				'postOnly + create, ajaxCreate',
				array(
						'translate.filters.TForwardActionFilter + index, view, create',
						'map' => array(
								'index' => 'ajaxIndex + ajax',
								'view' => 'ajaxView + ajax',
								'create' => 'ajaxCreate + create, post',
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
		try {
			foreach(AcceptedLanguage::model()->missingTranslations($id)->findAll() as $acceptedLanguage) {
				$missingTranslations = $id === null ? MessageSource::model()->missingTranslations($acceptedLanguage->id)->findAll() :
				MessageSource::model()->missingTranslations($acceptedLanguage->id)->findAllByPk($id);
				$translations = TranslateModule::translator()->googleTranslate($missingTranslations, $acceptedLanguage->id);

				if(is_array($translations) && count($translations) === count($missingTranslations)) {
					for($i = 0; $i < count($missingTranslations); $i++) {
						$translation = new Message();
						$translation->id = $missingTranslations[$i]->id;
						$translation->language = $acceptedLanguage->id;
						$translation->translation = $translations[$i];
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
		$acceptedLanguage = new AcceptedLanguage;
		 
		if(isset($_GET['AcceptedLanguage']))
			$acceptedLanguage->setAttributes($_GET['AcceptedLanguage']);

		$this->render('index', array('acceptedLanguage' => $acceptedLanguage));
	}

	public function ajaxIndex()
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'language-accepted-grid':
					$this->renderPartial('_accepted_grid', array('model' => new AcceptedLanguage('search')));
					break;
				case 'language-other-grid':
					// @ TODO This needs to be other languages not accepted languages.
					$this->renderPartial('_other_grid', array('model' => new AcceptedLanguage('search')));
					break;
			}
		}
	}

	public function actionView($id)
	{
		$this->render('view', array('language' => AcceptedLanguage::model()->findByPk($id)));
	}

	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'message-grid':
					$model = new Message('search');
					$model->setAttribute('language', $id);
					$this->renderPartial('../message/_grid', array('model' => $model));
					break;
				case 'language-missing-grid':
					$model = new MessageSource('search');
					$this->renderPartial('_missing_translations_grid', array('model' => $model->missingTranslations($id)));
					break;
			}
		}
	}

	public function actionCreate($id)
	{
		$model = new AcceptedLanguage;
		$model->id = $id;

		$success = $model->save();

		if($model->save())
		{
			Yii::app()->getUser()->setFlash('success', 'The accepted language has been created.');
		}
		else
		{
			Yii::app()->getUser()->setFlash('error', 'The accepted language could not be created.');
		}
		 
		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

	public function actionAjaxCreate()
	{
		if(isset($_POST['ajax']))
		{
			if($_POST['ajax'] === 'accepted-language-create-form')
			{
				$acceptedLanguage = new AcceptedLanguage;
				if(isset($_POST['AcceptedLanguage']))
					$acceptedLanguage->setAttributes($_POST['AcceptedLanguage']);
				echo CActiveForm::validate($acceptedLanguage);
			}
		}
	}

	/**
	 * Deletes a record
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = AcceptedLanguage::model()->findByPk($id);
		if($model !== null) {
			if($model->delete()) 
			{
				$message = 'The accepted language has been deleted.';
			} 
			else 
			{
				$message = 'The accepted language could not be deleted.';
			}
		} 
		else 
		{
			$message = 'The accepted language could not be found.';
		}

		if(Yii::app()->getRequest()->getIsAjaxRequest())
			echo TranslateModule::t($message);
		else
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

}