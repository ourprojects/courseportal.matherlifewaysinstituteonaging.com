<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class TranslateController extends TController
{

	/**
	 * override needed to check if its ajax, the redirect will be by javascript
	 */
	public function redirect($url, $terminate = true, $statusCode = 302)
	{
		if(Yii::app()->getRequest()->getIsAjaxRequest()) 
		{
			if(is_array($url)) 
			{
				$route = isset($url[0]) ? $url[0] : '';
				$url = $this->createUrl($route, array_slice($url, 1));
			}
			Yii::app()->getClientScript()->registerScript('redirect', "window.top.location='$url'");
			if($terminate)
			{
				Yii::app()->end($statusCode);
			}
		}
		else 
		{
			return parent::redirect($url, $terminate, $statusCode);
		}
	}

	public function actionMissingOnPage()
	{
		if(isset($_POST['Message']))
		{
			foreach($_POST['Message'] as $id => $message)
			{
				if(empty($message['translation']))
					continue;
				$model = new Message();
				$message['id'] = $id;
				$model->setAttributes($message);
				$model->save();
			}
			$this->redirect(Yii::app()->getUser()->getReturnUrl());
		}

		$key = str_replace('.', '_', TranslateModule::ID) . '-missing';
		$missing = array();
		if(isset($_POST[$key]))
		{
			$missing = $_POST[$key];
		}
		else if(Yii::app()->getUser()->hasState($key))
		{
			$missing = Yii::app()->getUser()->getState($key);
		}

		$messages = array();
		if(!empty($missing))
		{
			Yii::app()->getUser()->setState($key, $missing);
			foreach($missing as $id => $message)
			{
				$messages[] = new Message;
				end($messages)->setAttributes(array('id' => $id, 'language' => $message['language']));
			}
		}

		$this->render('missing', array('missing' => $missing, 'messages' => $messages));
	}

	public function actionGoogleTranslate($message, $targetLanguage = null, $sourceLanguage = null)
	{
		if(is_numeric($targetLanguage))
		{
			$targetLanguage = Language::model()->findByPk($targetLanguage);
			if($targetLanguage === null)
			{
				throw new CHttpException(400, TranslateModule::t('Unknown target language requested.'));
			}
			$targetLanguage = $targetLanguage->code;
		}
		if(is_numeric($sourceLanguage))
		{
			$sourceLanguage = Language::model()->findByPk($sourceLanguage);
			if($sourceLanguage === null)
			{
				throw new CHttpException(400, TranslateModule::t('Unknown source language requested.'));
			}
			$sourceLanguage = $sourceLanguage->code;
		}
		$translation = TranslateModule::translator()->googleTranslate($message, $targetLanguage, $sourceLanguage);
		if(is_array($message))
		{
			echo CJSON::encode($translation);
		}
		else if(is_array($translation))
		{
			echo $translation[0];
		}
		else
		{
			echo $translation;
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

}