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
	
    public function actionGoogleTranslate($message, $targetLanguage = null, $sourceLanguage = null) {
    	$translation = TranslateModule::translator()->googleTranslate($message, $targetLanguage, $sourceLanguage);
        if(is_array($message))
            echo CJSON::encode($translation);
        elseif(is_array($translation))
            echo $translation[0];
        else 
        	echo $translation;
    }
    
    /**
     * Manages all models.
     */
    public function actionIndex() {
    	$this->render('index');
    }
    
}