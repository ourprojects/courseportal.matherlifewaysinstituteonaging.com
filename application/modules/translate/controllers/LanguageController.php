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
		$acceptedLanguages = new AcceptedLanguage('search');
		 
		if(isset($_GET['AcceptedLanguage']))
		{
			$acceptedLanguages->setAttributes($_GET['AcceptedLanguage']);
		}

		$this->render('index', array('acceptedLanguages' => $acceptedLanguages, 'model' => $acceptedLanguage));
	}

	public function ajaxIndex()
	{
		if(isset($_GET['ajax']))
		{
			$acceptedLanguages = new AcceptedLanguage('search');
			switch($_GET['ajax'])
			{
				case 'language-accepted-grid':
					$this->renderPartial('_accepted_grid', array('filter' => $acceptedLanguages, 'dataProvider' => new CActiveDataProvider($acceptedLanguages, array('criteria' => $acceptedLanguages->search()->getDbCriteria()))));
					break;
				case 'language-requested-grid':
					$this->renderPartial('_requested_grid', array('requestedLanguages' => $acceptedLanguages));
					break;
			}
		}
	}

	public function actionView($id)
	{
		$source = AcceptedLanguage::model()->findByPk($id);

		$translations = new Message('search');

		if(isset($_REQUEST['Message']))
			$translations->setAttributes($_REQUEST['Message']);

		$translations->setAttribute('language', $id);

		$this->render('view', array('source' => $source, 'translations' => $translations));
	}

	public function actionAjaxView($id)
	{
		if(isset($_GET['ajax']))
		{
			switch($_GET['ajax'])
			{
				case 'message-grid':
					$translations = new Message('search');
					$translations->setAttribute('language', $id);
					$this->renderPartial(
							'../message/_grid',
							array(
									'filter' => $translations,
									'dataProvider' => new CActiveDataProvider($translations, array('criteria' => $translations->search()->getDbCriteria()))
							)
					);
					break;
				case 'language-missing-grid':
					$model = MessageSource::model();
					$this->renderPartial('_missing_translations_grid', array('filter' => $model, 'dataProvider' => new CActiveDataProvider('MessageSource', array('criteria' => $model->missingTranslations($id)->getDbCriteria()))));
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
			if($model->delete()) {
				$message = 'The accepted language has been deleted.';
			} else {
				$message = 'The accepted language could not be deleted.';
			}
		} else {
			$message = 'The accepted language could not be found.';
		}

		if(Yii::app()->getRequest()->getIsAjaxRequest())
			echo TranslateModule::t($message);
		else
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

}