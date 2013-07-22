<?php   

class CourseController extends OnlineCoursePortalController 
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
	
	public function actionIndex() {
		$searchModel = new Course('search');
		
		$searchModel->unsetAttributes();
		
		if(isset($_GET['Course']))
			$searchModel->setAttributes($_GET['Course']);
		
		$this->render('index', array('searchModel' => $searchModel));
	}
	
    public function actionView($id = null) 
    {
    	$models = isset($id) ? array(
    			'course' => Course::model()->findByPk($id),
    			'objectiveSearchModel' => new CourseObjective('search'),
    			'courseObjective' => new CourseObjective
    	) : array(
    			'course' => new Course,
    	);
    	
    	if(!$models['course']->getIsNewRecord()) 
    	{
	    	$models['objectiveSearchModel']->unsetAttributes();
	    	
	    	$models['objectiveSearchModel']->course_id = $id;
	    	$models['courseObjective']->course_id = $id;
    	}
    	
    	if(isset($_POST['ajax'])) 
    	{
    		if($_POST['ajax'] === 'course-form') 
    		{
    			echo CActiveForm::validate($models['course']);
    			Yii::app()->end();
    		} 
    		elseif(!$models['course']->getIsNewRecord() && $_POST['ajax'] === 'course-objective-form') 
    		{
    			echo CActiveForm::validate($models['courseObjective']);
    			Yii::app()->end();
    		}
    	}	
    	
    	if(isset($_POST['Course'])) 
    	{
    		$wasNew = $models['course']->getIsNewRecord();
    		$models['course']->setAttributes($_POST['Course']);
    		if($models['course']->save()) 
    		{
    			Yii::app()->getUser()->setFlash('success', t('Course saved successfully.'));
    			if($wasNew)
    				$this->redirect($this->createUrl('courseView', array('id' => $models['course']->id)));
    		} 
    		else 
    		{
    			Yii::app()->getUser()->setFlash('error', t('Course could not be saved.'));
    		}
    	} 
    	elseif(!$models['course']->getIsNewRecord() && isset($_POST['CourseObjective'])) 
    	{
    		$models['courseObjective']->attributes = $_POST['CourseObjective'];
    		if($models['courseObjective']->save())
    		{
    			Yii::app()->getUser()->setFlash('success', t('Course objective saved successfully.'));
    		}
    		else
    		{
    			Yii::app()->getUser()->setFlash('error', t('Course objective could not be saved.'));
    		}
    	} 
    	elseif(!$models['course']->getIsNewRecord() && isset($_GET['CourseObjective'])) 
    	{
    		$models['objectiveSearchModel']->attributes = $_GET['CourseObjective'];
    	}
    	
    	$this->render('view', $models);
    }
    
    
    public function actionObjectiveDelete($id) 
    {
    	$model = CourseObjective::model()->findByPk($id);
    	 
    	if($model === null)
    	{
    		throw new CHttpException(404, t('Course objective with ID {id} not found.', array('{id}' => $id)));
    	}
    	 
    	if($model->delete()) 
    	{
    		$response = array('result' => 'success', 'message' => t('Course objective deleted successfully.'));
    	} 
    	else 
    	{
    		$response = array('result' => 'error', 'message' => t('Course objective could not be deleted.'));
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
    
    public function actionDelete($id) 
    {
    	$model = Course::model()->findByPk($id);
    	 
    	if($model === null)
    	{
    		throw new CHttpException(404, t('Course ID {id} not found.', array('{id}' => $id)));
    	}
    	 
    	if($model->delete()) 
    	{
    		$response = array('result' => 'success', 'message' => t('Course deleted successfully.'));
    	} 
    	else 
    	{
    		$response = array('result' => 'error', 'message' => t('Course could not be deleted.'));
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