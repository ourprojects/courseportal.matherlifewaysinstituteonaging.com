<?php
class TranslateController extends OnlineCoursePortalController {
	
	public function filters() {
		return array_merge(parent::filters(), TranslateModule::translator()->managementActionFilters);
	}
	
	public function accessRules() {
		return array_merge(parent::accessRules(), TranslateModule::translator()->managementAccessRules);
	}
	
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
	
	/**
	 * override needed to, in case of ajax requests, use renderPartial and disable the jquery
	 */
	public function render($view, $data = array(), $return = false) {
		if(Yii::app()->getRequest()->getIsAjaxRequest()) {
			Yii::app()->getClientScript()->scriptMap = array(
					'jquery.js' => false,
					'jquery.min.js' => false,
					'jquery.ui.js' => false,
					'jquery.ui.min.js' => false
			);
			return parent::renderPartial($view, $data, false, true);
		} else {
			return parent::render($view, $data, $return);
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
            $postMissing=$_POST[$key];
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
        
        $data=array('messages' => $postMissing, 'models' => $models);
        
        $this->render('missing', $data);
	}
	
    public function actionGoogleTranslate() {
        if(Yii::app()->getRequest()->getIsPostRequest()) {
            $translation = TranslateModule::translator()->googleTranslate($_POST['message'], $_POST['language'], $_POST['sourceLanguage']);
            if(is_array($translation))
                echo CJSON::encode($translation);
            else
                echo $translation;
        } else
            throw new CHttpException(400);
    }
    
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionCreate($id, $messageLanguage) {
    	$model = new Message('create');
    	$model->id = $id;
    	$model->language = $messageLanguage;
    
    	if(isset($_POST['Message'])){
    		$model->attributes = $_POST['Message'];
    		if($model->save())
    			$this->redirect(array('missing'));
    	}
    
    	$this->render('create_update', array('model' => $model));
    }
    
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id, $messageLanguage) {
    	$model = $this->translateLoadModel($id, $messageLanguage);
    
    	if(isset($_POST['Message'])) {
    		$model->attributes = $_POST['Message'];
    		if($model->save())
    			$this->redirect(array('admin'));
    	}
    
    	$this->render('create_update', array('model' => $model));
    }
    
    /**
     * Deletes a message record
     * @param integer $id the ID of the model to be deleted
     * @param string $language the language of the model to de deleted
     */
    public function actionDelete($id, $messageLanguage) {
    	if(Yii::app()->getRequest()->getIsPostRequest()) {
    		$model = $this->translateLoadModel($id, $messageLanguage);
    		if($model->delete()) {
    			if(Yii::app()->getRequest()->getIsAjaxRequest()) {
    				echo TranslateModule::t('Message deleted successfully');
    				Yii::app()->end();
    			} else
    				$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
    		}
    	} else
    		throw new CHttpException(400);
    }
    
    /**
     * Deletes an accepted language record
     * @param integer $id the ID of the model to be deleted
     * @param string $language the language of the model to de deleted
     */
    public function actionAcceptedLanguageDelete($id) {
    	if(Yii::app()->getRequest()->getIsPostRequest()) {
    		if(AcceptedLanguages::model()->findByPk($id)->delete()) {
    			if(Yii::app()->getRequest()->getIsAjaxRequest()) {
    				echo TranslateModule::t('Language deleted successfully');
    				Yii::app()->end();
    			} else
    				$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
    		}
    	} else
    		throw new CHttpException(400);
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

    /**
     * Deletes a record
     * @param integer $id the ID of the model to be deleted
     * @param string $language the language of the model to de deleted
     */
    public function actionMissingDelete($id) {
    	if(Yii::app()->getRequest()->getIsPostRequest()) {
    		$model = MessageSource::model()->findByPk($id);
    		if($model->delete()) {
    			if(Yii::app()->getRequest()->getIsAjaxRequest()) {
    				echo TranslateModule::t('Message deleted successfully');
    				Yii::app()->end();
    			} else
    				$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
    		}
    	} else
    		throw new CHttpException(400);
    }
    
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function translateLoadModel($id, $messageLanguage) {
    	$model = Message::model()->findByPk(array('id' => $id, 'language' => $messageLanguage));
    	if($model === null)
    		throw new CHttpException(404, 'The requested page does not exist.');
    	return $model;
    }
    
}