<?php defined('BASEPATH') or exit('No direct script access allowed');  

class AdminController extends OnlineCoursePortalController {
	
	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
				array('filters.HttpsFilter'),
				'accessControl',
		);
	}
	
	public function accessRules() {
		return array(
				array('allow',
						'expression' => '$user->getIsAdmin()',
				),
				array('deny',
						'users' => array('*'),
				),
		);
	}
	
	public function actionApiKeys() {
		$models = array(
				'searchModel' => new Key('search'),
				'model' => new Key,
		);
		
		if(isset($_POST['ajax'])) {
			if($_POST['ajax'] === 'key-create-form') {
				echo CActiveForm::validate($models['model']);
				Yii::app()->end();
			}
		}
		
		$models['searchModel']->unsetAttributes();
		
		if(isset($_GET['Key']))
			$models['searchModel']->attributes = $_GET['Key'];
		
		if(isset($_POST['Key'])) {
			$models['model']->attributes = $_POST['Key'];
			
			if($models['model']->save())
				Yii::app()->getUser()->setFlash('success', t('Key saved successfully.'));
			else
				Yii::app()->getUser()->setFlash('error', t('Key could not be saved.'));
			
			var_dump($models['model']); die;
		}
		
		$this->render('pages/apiKeys', $models);
	}
	
	public function actionKeyGenerate() {
		if(Yii::app()->getRequest()->getIsAjaxRequest()) {
			$this->loadHelper('Utilities');
			echo base64_url_encode(Key::model()->generateKey());
		}
	}
	
	public function actionKeyDelete($id) {
		$model = Key::model()->findByPk($id);
		 
		if($model === null)
			throw new CHttpException(404, t('Key ID {id} not found.', array('{id}' => $id)));
		 
		if($model->delete()) {
			$response = array('result' => 'success', 'message' => t('Key deleted successfully.'));
		} else {
			$response = array('result' => 'error', 'message' => t('Key could not be deleted.'));
		}
		 
		if(Yii::app()->getRequest()->getIsAjaxRequest()) {
			echo $response['message'];
		} else {
			Yii::app()->getUser()->setFlash($response['result'], $response['message']);
			$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
		}
	}
	
	public function actionCourse() {
		$models = array(
				'searchModel' => new Course('search'), 
				'model' => new Course, 
		);
		
		if(isset($_POST['ajax'])) {
			if($_POST['ajax'] === 'course-create-form') {
				echo CActiveForm::validate($models['model']);
				Yii::app()->end();
			}
		}
		
		$models['searchModel']->unsetAttributes();
		
		if(isset($_GET['Course']))
			$models['searchModel']->attributes = $_GET['Course'];
		
		if(isset($_POST['Course'])) {
			$models['model']->attributes = $_POST['Course'];
			if($models['model']->save())
				Yii::app()->getUser()->setFlash('success', t('Course saved successfully.'));
			else
				Yii::app()->getUser()->setFlash('error', t('Course could not be saved.'));
		}
		
		$this->render('pages/course', $models);
	}
	
	public function actionCourseDelete($id) {
	    $model = Course::model()->findByPk($id);
	    
	    if($model === null)
	    	throw new CHttpException(404, t('Course ID {id} not found.', array('{id}' => $id)));
	    
	    if($model->delete()) {
	    	$response = array('result' => 'success', 'message' => t('Course deleted successfully.'));
	    } else {
	    	$response = array('result' => 'error', 'message' => t('Course could not be deleted.'));
	    }
	    
        if(Yii::app()->getRequest()->getIsAjaxRequest()) {
        	echo $response['message'];
        } else {
        	Yii::app()->getUser()->setFlash($response['result'], $response['message']);
        	$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
        }
	}

}