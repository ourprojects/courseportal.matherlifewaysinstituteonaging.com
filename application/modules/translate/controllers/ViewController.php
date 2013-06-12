<?php
class ViewController extends TController {
	
	public function filters()
	{
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
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
    
    public function actionTranslateMissing($id = null) {
/*    	$transaction = Yii::app()->db->beginTransaction();
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
    	return true;*/
    }
    
    /**
     * Manages all models.
     */
    public function actionIndex() {
/*        $acceptedLanguages = new AcceptedLanguage('search');

    	if(isset($_GET['AcceptedLanguage']))
    		$acceptedLanguages->attributes = $_GET['AcceptedLanguage'];
    	
    	if(isset($_GET['ajax']) && $_GET['ajax'] == 'acceptedLanguages-grid') {
    		$this->widget('translate.widgets.acceptedLanguage.AcceptedLanguageGrid', array('id' => 'acceptedLanguages-grid', 'acceptedLanguagesModel' => $acceptedLanguages));
    		Yii::app()->end();
    	}
    	
    	$acceptedLanguage = new AcceptedLanguage;

    	if(isset($_POST['ajax'])) {
    		if($_POST['ajax'] === 'accepted-language-create-form') {
    			echo CActiveForm::validate($acceptedLanguage);
    			Yii::app()->end();
    		}
    	}

    	if(isset($_POST['AcceptedLanguage'])) {
    		$acceptedLanguage->attributes = $_POST['AcceptedLanguage'];
    		if($acceptedLanguage->save())
    			Yii::app()->getUser()->setFlash('success', TranslateModule::t('Language saved successfully.'));
    		else
    			Yii::app()->getUser()->setFlash('error', TranslateModule::t('Language could not be saved.'));
    	}

    	$this->render('index', array('acceptedLanguages' => $acceptedLanguages, 'model' => $acceptedLanguage));*/
    }
    
    public function actionView($id) {
/*    	$source = AcceptedLanguage::model()->findByPk($id);
    	 
    	$translations = new Message('search');
    
    	if(isset($_REQUEST['Message']))
    		$translations->attributes = $_REQUEST['Message'];
    
    	$translations->language = $id;
    	 
    	if(isset($_GET['ajax']) && $_GET['ajax'] === 'translation-grid') {
    		$this->widget('translate.widgets.messageSource.translationGrid', array('id' => 'translation-grid', 'translations' => $translations));
    	} else {
    		$this->render('view', array('source' => $source, 'translations' => $translations));
    	}*/
    }
    
    /**
     * Deletes a record
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
/*    	$model = AcceptedLanguage::model()->findByPk($id);
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
    		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());*/
    }
    
}