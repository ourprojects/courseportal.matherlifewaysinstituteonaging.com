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

	public function ajaxIndex()
	{
		if(isset($_GET['ajax']))
		{
			$this->actionGrid(null, $_GET['ajax']);
		}
	}

	public function actionView($id)
	{
		$this->render('view', array('language' => Language::model()->findByPk($id)));
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
				$model->with(array('messages.language' => array('condition' => 'language.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../category/_grid';
				break;
			case 'messageSource-grid':
				$model = new MessageSource('search');
				$model->with(array('languages' => array('condition' => 'languages.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../messageSource/_grid';
				break;
			case 'message-grid':
				$model = new Message('search');
				$model->with(array('language' => array('condition' => 'language.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../message/_grid';
				break;
			case 'language-grid':
				$model = new Language('search');
				$model->setAttribute('id', $id);
				$gridPath = '_grid';
				break;
			case 'route-grid':
				$model = new Route('search');
				$model->with(array('views.language' => array('condition' => 'language.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../route/_grid';
				break;
			case 'viewSource-grid':
				$model = new ViewSource('search');
				$model->with(array('languages' => array('condition' => 'languages.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
				$gridPath = '../viewSource/_grid';
				break;
			case 'view-grid':
				$model = new View('search');
				$model->with(array('language' => array('condition' => 'language.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id, t.language_id';
				$gridPath = '../view/_grid';
				break;
			default:
				return;
		}
		$this->renderPartial($gridPath, array('model' => $model));
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

	public function actionAjaxCreate()
	{
		if(isset($_POST['ajax']))
		{
			if($_POST['ajax'] === 'accepted-language-create-form')
			{
				$language = new Language;
				if(isset($_POST['Language']))
					$language->setAttributes($_POST['Language']);
				echo CActiveForm::validate($language);
			}
		}
	}

	/**
	 * Deletes a record
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = Language::model()->findByPk($id);
		if($model !== null) {
			if($model->delete()) 
			{
				$message = 'The language has been deleted.';
			} 
			else 
			{
				$message = 'The language could not be deleted.';
			}
		} 
		else 
		{
			$message = 'The language could not be found.';
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