<?php   

class ApiKeyController extends OnlineCoursePortalController 
{
	
	/**
	 * @return array action filters
	 */
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
	
	public function actionIndex() 
	{
		$model = new Key;
		
		if(isset($_POST['ajax'])) 
		{
			if($_POST['ajax'] === 'key-create-form') 
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
		}
		
		if(isset($_POST['Key'])) 
		{
			$model->setAttributes($_POST['Key']);
			
			if($model->save())
				Yii::app()->getUser()->setFlash('success', t('Key saved successfully.'));
			else
				Yii::app()->getUser()->setFlash('error', t('Key could not be saved.'));
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
	
	public function actionGrid($id, $name)
	{
		switch($name)
		{
			case 'apiKey-grid':
				$model = new Key('search');
				$model->setAttribute('id', $id);
				$gridPath = '_grid';
				break;
			default:
				return;
		}
		$this->renderPartial($gridPath, array('model' => $model));
	}

}