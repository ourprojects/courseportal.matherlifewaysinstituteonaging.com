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
		$models = array(
				'searchModel' => new Key('search'),
				'model' => new Key,
		);
		
		if(isset($_POST['ajax'])) 
		{
			if($_POST['ajax'] === 'key-create-form') {
				echo CActiveForm::validate($models['model']);
				Yii::app()->end();
			}
		}
		
		$models['searchModel']->unsetAttributes();
		
		if(isset($_GET['Key']))
			$models['searchModel']->setAttributes($_GET['Key']);
		
		if(isset($_POST['Key'])) 
		{
			$models['model']->setAttributes($_POST['Key']);
			
			if($models['model']->save())
				Yii::app()->getUser()->setFlash('success', t('Key saved successfully.'));
			else
				Yii::app()->getUser()->setFlash('error', t('Key could not be saved.'));
		}
		
		$this->render('index', $models);
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

}