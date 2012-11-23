<?php
class MessageController extends OnlineCoursePortalController {
	
	/**
	 * override needed to check if its ajax, the redirect will be by javascript
	 */
	public function redirect($url, $terminate = true, $statusCode = 302) {
		if(Yii::app()->getRequest()->getIsAjaxRequest()) {
			if(is_array($url)) {
				$route = isset($url[0]) ? $url[0] : '';
				$url = $this->createUrl($route, array_slice($url, 1));
			}
			Yii::app()->getClientScript()->registerScript('redirect', "window.top.location='$url'");
			if($terminate)
				Yii::app()->end($statusCode);
		} else {
			return parent::redirect($url, $terminate, $statusCode);
		}
	}
	
	public function actionMissingOnPage() {
        if(isset($_POST['Message'])) {
            foreach($_POST['Message'] as $id => $message){
                if(empty($message['translation']))
                    continue;
                $model = new Message();
                $message['id'] = $id;
                $model->setAttributes($message);
                $model->save();
            }
            $this->redirect(Yii::app()->getUser()->getReturnUrl());
        }
        if(($referer = Yii::app()->getRequest()->getUrlReferrer()) && $referer !== $this->createUrl('index'))
            Yii::app()->getUser()->setReturnUrl($referer);
        $translator = TranslateModule::translator();
        $key = $translator::ID."-missing";
        $postMissing = array();
        if(isset($_POST[$key]))
            $postMissing = $_POST[$key];
        else if(Yii::app()->getUser()->hasState($key))
            $postMissing = Yii::app()->getUser()->getState($key);
        $models = array();
        if(count($postMissing)) {
            Yii::app()->getUser()->setState($key, $postMissing); 
            $cont = 0;
            foreach($postMissing as $id => $message){
                $models[$cont] = new Message;
                $models[$cont]->setAttributes(array('id' => $id, 'language' => $message['language']));
                $cont++;
            }
        }
        
        $data = array('messages' => $postMissing, 'models' => $models);
        
        $this->render('missing', $data);
	}
	
    public function actionGoogleTranslate() {
    	$translation = TranslateModule::translator()->googleTranslate($_REQUEST['message'], $_REQUEST['messageLanguage'], $_REQUEST['sourceLanguage']);
        if(is_array($translation))
            echo CJSON::encode($translation);
        else
            echo $translation;
    }
    
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionCreate($id, $messageLanguage) {
    	$model = new Message;
    	$model->id = $id;
    	$model->language = $messageLanguage;
    
    	if(isset($_POST['Message'])){
    		$model->attributes = $_POST['Message'];
    		if($model->save())
    			$this->redirect(Yii::app()->getUser()->getReturnUrl());
    	} else {
	    	if($referer = Yii::app()->getRequest()->getUrlReferrer())
	    		Yii::app()->getUser()->setReturnUrl($referer);
    	}
    
    	$this->render('create_update', array('model' => $model));
    }
    
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id, $messageLanguage) {
    	$model = Message::model()->findByPk(array('id' => $id, 'language' => $messageLanguage));
    	if($model !== null) {
	    	if(isset($_POST['Message'])) {
	    		$model->attributes = $_POST['Message'];
	    		if($model->save())
	    			$this->redirect(Yii::app()->getUser()->getReturnUrl());
	    	} else {
		    	if($referer = Yii::app()->getRequest()->getUrlReferrer())
		    		Yii::app()->getUser()->setReturnUrl($referer);
	    	}
	    	$this->render('create_update', array('model' => $model));
    	} else {
    		throw new CHttpException(404, TranslateModule::t('The requested message does not exist.'));
    	}
    }
    
    /**
     * Deletes a record
     * @param integer $id the ID of the model to be deleted
     * @param string $language the language of the model to de deleted
     */
    public function actionDelete($model, $id, $messageLanguage = null) {
    	$message = '';
    	switch($model) {
    		case 'Message':
    			$result = false;
    			if($messageLanguage !== null) {
    				$model = Message::model()->findByPk(array('id' => $id, 'language' => $messageLanguage));
    				if($model !== null)
    					$result = $model->delete();
    			} else {
    				$result = Message::model()->deleteAll('id=:id', array(':id' => $id));
    			}
    			$message = empty($result) ? 'An error occurred deleting the message' : 'Message deleted successfully';
    			break;
    		case 'AcceptedLanguages':
    			$model = AcceptedLanguages::model()->findByPk($id);
    			$message =  ($model !== null && $model->delete()) ? 'Language deleted successfully' : 'An error occurred deleting the language';
    			break;
    		case 'MessageSource':
    			$model = MessageSource::model()->findByPk($id);
    			if($model !== null && $model->delete()) {
    				Message::model()->deleteAll('id=:id', array(':id' => $id));
					$message = 'Message source deleted successfully';
    			} else {
    				$message = 'An error occurred deleting the message source';
    			}
    			break;
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
    	$models = array(
    			'Message' => new Message('search'),
    			'MessageSource' => new MessageSource('search'),
    			'AcceptedLanguages' => new AcceptedLanguages('search'),
    	);
    	foreach($models as $name => $model) {
    		$model->unsetAttributes();
    		if(isset($_REQUEST[$name]))
    			$model->attributes = $_REQUEST[$name];
    	}
    	
    	if(isset($_GET['ajax'])) {
    		switch($_GET['ajax']) {
    			case 'translations-grid':
    				return $this->renderPartial('_translations_grid', array('Message' => $models['Message']));
    			case 'missing-translations-grid':
    				return $this->renderPartial('_missing_translations_grid', array('MessageSource' => $models['MessageSource']));
    			case 'accepted-languages-grid':
    				return $this->renderPartial('_accepted_languages_grid', array('AcceptedLanguages' => $models['AcceptedLanguages']));
    		}
    	}
    	$this->render('index', $models);
    }
    
}