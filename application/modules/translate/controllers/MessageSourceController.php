<?php
class MessageSourceController extends TController {
	
	public function actionTranslateMissing($id = null, $class = 'Message') {
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
						$translation->attributes = array(
								'id' => $missingTranslations[$i]->id,
								'language' => $language,
								'translation' => $t
						);
							
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
						$translation->attributes = array(
								'id' => $missingTranslations[$i]->id,
								'language' => $id,
								'translation' => $translations[$i]
						);
			
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
    public function actionIndex() {
    	$sources = new MessageSource('search');
    	
    	if(isset($_GET['MessageSource']))
    		$sources->attributes = $_GET['MessageSource'];

    	if(isset($_GET['ajax']) && $_GET['ajax'] === 'source-grid') {
    		$this->widget('translate.widgets.messageSource.SourceGrid', array('id' => 'source-grid', 'sources' => $sources));
    	} else {
    		$this->render('index', array('sources' => $sources));
    	}
    }
    
    public function actionView($id) {
    	$source = MessageSource::model()->findByPk($id);
    	
    	$translations = new Message('search');
    	
    	if(isset($_REQUEST['Message']))
    		$translations->attributes = $_REQUEST['Message'];
    	
    	$translations->id = $id;

    	if(isset($_GET['ajax']) && $_GET['ajax'] === 'translation-grid') {
    		$this->widget('translate.widgets.messageSource.translationGrid', array('id' => 'translation-grid', 'translations' => $translations));
    	} else {
    		$this->render('view', array('source' => $source, 'translations' => $translations));
    	}
    }
    
    /**
     * Deletes a record
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
    	$model = MessageSource::model()->findByPk($id);
    	if($model !== null) {
    		if($model->delete()) {
	    		$message = 'The message source and its translations have been deleted.';
	    	} else {
	    		$message = 'The message source could not be deleted.';
	    	}
    	} else {
    		$message = 'The message source could not be found.';
    	}
	    	
    	if(Yii::app()->getRequest()->getIsAjaxRequest())
    		echo TranslateModule::t($message);
    	else
    		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
    }
    
}