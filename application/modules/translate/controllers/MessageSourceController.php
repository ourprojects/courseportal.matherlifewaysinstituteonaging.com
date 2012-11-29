<?php
class MessageSourceController extends TController {
    
    /**
     * Manages all models.
     */
    public function actionIndex() {
    	$sources = new MessageSource('search');
    	
    	if(isset($_REQUEST['MessageSource']))
    		$sources->attributes = $_REQUEST['MessageSource'];

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