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
						'expression' => '!$user->isGuest && $user->group->name === \'admin\'',
				),
				array('deny',
						'users' => array('*'),
				),
		);
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
				Yii::app()->user->setFlash('success', t('Course added successfully'));
		}
		
		$this->render('pages/course', $models);
	}
	
	public function actionCourseDelete($id) {
	    $model = Course::model()->findByPk($id);
	    if($model === null)
	    	throw new CHttpException(404, t('Course ID {id} not found.', array('{id}' => $id)));
        if($model->delete()) {
            if(Yii::app()->getRequest()->getIsAjaxRequest()) {
                echo t('Course deleted successfully');
                Yii::app()->end();
            } else {
            	Yii::app()->user->setFlash('success', t('Course deleted successfully'));
                $this->redirect(Yii::app()->getRequest()->getUrlReferrer());
            }
        }
	}

}