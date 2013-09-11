<?php

class AdminController extends CoursePortalController
{
	
	public function accessRules()
	{
		return array(array('deny'));
	}

	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionView($id = null, $ajax = null, array $Course = array(), array $CourseObjective = array())
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

    	if(isset($ajax))
    	{
    		if($ajax === 'course-form')
    		{
    			echo CActiveForm::validate($models['course']);
    			Yii::app()->end();
    		}
    		elseif(!$models['course']->getIsNewRecord() && $ajax === 'course-objective-form')
    		{
    			echo CActiveForm::validate($models['courseObjective']);
    			Yii::app()->end();
    		}
    	}

    	if(Yii::app()->getRequest()->getIsPostRequest())
    	{
	    	$wasNew = $models['course']->getIsNewRecord();
	    	$models['course']->setAttributes($Course);
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
	
	    	if(!$models['course']->getIsNewRecord() && isset($CourseObjective))
	    	{
	    		$models['courseObjective']->setAttributes($CourseObjective);
	    		if($models['courseObjective']->save())
	    		{
	    			Yii::app()->getUser()->setFlash('success', t('Course objective saved successfully.'));
	    		}
	    		else
	    		{
	    			Yii::app()->getUser()->setFlash('error', t('Course objective could not be saved.'));
	    		}
	    	}
    	}
    	else
    	{
    		$models['objectiveSearchModel']->setAttributes($CourseObjective);
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

    public function actionGrid($id, $name)
    {
    	switch($name)
    	{
    		case 'course-grid':
    			$model = new Course('search');
    			$model->setAttribute('id', $id);
    			$gridPath = '_courseGrid';
    			break;
    		case 'user-grid':
    			$model = new CourseUser('search');
    			$model->with(array('courses' => array('condition' => 'courses.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = $model->getDbConnection()->quoteColumnName($model->getTableAlias().'.id');
    			$gridPath = '_userGrid';
    			break;
    		default:
    			return;
    	}
    	$this->renderPartial($gridPath, array('model' => $model));
    }

}