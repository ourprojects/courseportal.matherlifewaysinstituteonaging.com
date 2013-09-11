<?php

class ApiKeyController extends AController
{

	public function actionIndex(array $Key = array(), $ajax = null)
	{
		$model = new Key;

		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$model->setAttributes($Key);
			if(isset($ajax) && $ajax === 'key-create-form')
			{
				echo CActiveForm::validate($model);
				return;
			}
			else
			{
				if($model->save())
				{
					Yii::app()->getUser()->setFlash('success', t('Key saved successfully.'));
				}
				else 
				{
					Yii::app()->getUser()->setFlash('error', t('Key could not be saved.'));
				}
			}
		}
		$this->render('index', array('model' => $model));
	}

	public function actionGenerate()
	{
		echo CBase64::urlEncode(Key::model()->generateIV());
	}

	public function actionDelete($id)
	{
		$model = Key::model()->findByPk($id);

		if($model === null)
		{
			throw new CHttpException(404, t('Key ID {id} not found.', array('{id}' => $id)));
		}

		if($model->delete())
		{
			$response = array('result' => 'success', 'message' => t('Key deleted successfully.'));
		}
		else
		{
			$response = array('result' => 'error', 'message' => t('Key could not be deleted.'));
		}

		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			echo $response['message'];
		}
		else
		{
			Yii::app()->getUser()->setFlash($response['result'], $response['message']);
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
		}
	}

	public function actionGrid(array $Key = array(), $name)
	{
		switch($name)
		{
			case 'apiKey-grid':
				$model = new Key('search');
				$model->setAttributes($Key);
				$gridPath = '_grid';
				break;
			default:
				return;
		}
		$this->renderPartial($gridPath, array('model' => $model));
	}

}