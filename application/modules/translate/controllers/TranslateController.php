<?php
class TranslateController extends TController {
	
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
    
    public function actionGoogleTranslateMissing() {
    	if(isset($_REQUEST['MessageSource'])) {
    		$source = new MessageSource('search');
    		$source->attributes = $_REQUEST['MessageSource'];
    		if($source->language !== TranslateModule::translator()->getLanguageID(Yii::app()->sourceLanguage)) {
	    		$errors = array();
		    	foreach($source->findAll($source->getMissingSearchCriteria()) as $message) {
		    		if(($messageModel = Message::model()->find('id = :id AND language = :language', array('id' => $message->id, 'language' => $message->language))) === null) {
		    			$translation = $message['message'];
		    			 
		    			preg_match_all('/\{(.*?)\}/', $translation, $matches);
		    			$matches = $matches[0];
		    			for($i = 0; $i < count($matches); $i++)
		    				$translation = str_replace($matches[$i], "_{$i}_", $translation);
		    				 
	    				$translation = TranslateModule::translator()->googleTranslate(
	    						$translation,
	    						$message->language,
	    						Yii::app()->sourceLanguage
	    				);
	    				if($translation === false) {
	    					$errors[$message->id] = TranslateModule::t('Message could not be translated by Google.');
	    				} else {
	    					for($i = 0; $i < count($matches); $i++)
	    						$translation = str_replace("_{$i}_", $matches[$i], $translation);
	    					 
	    					$messageModel = new Message;
	    					$messageModel->attributes = array('id' => $message->id, 'category' => $message->category, 'language' => $message->language, 'translation' => $translation);
		    				if(!$messageModel->save())
		    					$errors[$message->id] = TranslateModule::t('Failed to save translated message.');
		    			}
			    	}
			    }
			    $errors['success'] = empty($errors);
			    echo CJSON::encode($errors);
    		}
    	} else
    		throw new CHttpException(400, "A message language was not specified.");
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
    		case 'AcceptedLanguage':
    			$model = AcceptedLanguage::model()->findByPk($id);
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
    			'MessageSource' => new MessageSource('missing'),
    			'AcceptedLanguage' => new AcceptedLanguage('search'),
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
    				return $this->renderPartial('_message_source_grid', array('MessageSource' => $models['MessageSource'], 'id' => 'missing-translations-grid'));
    			case 'accepted-languages-grid':
    				return $this->renderPartial('_accepted_languages_grid', array('AcceptedLanguage' => $models['AcceptedLanguage']));
    		}
    	}
    	$this->render('index', $models);
    }
    
}