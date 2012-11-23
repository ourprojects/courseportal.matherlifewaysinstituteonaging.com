<?php
class MessageSourceController extends OnlineCoursePortalController {
    
    /**
     * Deletes a message source and all coresponding translations
     * 
     * @param integer $id the ID of the message source to be deleted
     */
    public function actionDelete($id) {
    	$model = MessageSource::model()->findByPk($id);
    	if($model !== null && $model->delete()) {
    		$message = 'The message source and corresponding translations have been deleted.';
    	} else {
			$message = 'The message source could not be deleted.';
    	}

    	if(Yii::app()->getRequest()->getIsAjaxRequest())
    		echo TranslateModule::t($message);
    	else
    		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
    }
    
    /**
     * Manages all models.
     */
    public function actionIndex() {
    	$sources = new MessageSource('search');
    	$sources->unsetAttributes();
    	if(isset($_REQUEST['MessageSource']))
    		$sources->attributes = $_REQUEST['MessageSource'];
    	
    	if(isset($_GET['ajax']) && $_GET['ajax'] ===  'source-grid') {
    		return $this->renderPartial('_source_grid', array('sources' => $sources));
    	}
    	$this->render('index', array('sources' => $sources));
    }
    
}