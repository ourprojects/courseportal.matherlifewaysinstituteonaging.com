<?php   

class UserController extends OnlineCoursePortalController 
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
    			'searchModel' => new CPUser('search'),
    	);
    	
    	$models['searchModel']->unsetAttributes();
    	
    	if(isset($_GET['CPUser']))
    	{
    		$models['searchModel']->setAttributes($_GET['CPUser']);
    	}
    	
    	$this->render('index', $models);
    }
    
    public function actionView($id)
    {
		$models = array('user' => CPUser::model()->findByPk($id));
		
		if($models['user'] === null)
		{
			throw new CHttpException(404, t('A User with ID {id} could not be found.', array('{id}' => $id)));
		}
		
		$models['user']->setScenario('admin');
		
		$models['Profile'] = new UserProfile('admin');
		$models['Profile']->setAttributes($models['user']->getAttributes());
		$models['Profile']->isActivated = $models['user']->getIsActivated();
		
		$models['Avatar'] = $models['user']->getRelated('avatar');

		if($models['Avatar'] === null)
		{
			$models['Avatar'] = new Avatar;
			$models['Avatar']->setAttribute('user_id', $models['user']->getAttribute('id'));
		}

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'profile-form') 
		{
			echo CActiveForm::validateTabular($models);
			Yii::app()->end();
		}

		// collect user input data
		if($models['Profile']->loadAttributes() && $models['Profile']->validate() && $models['Avatar']->validate())
		{
			$models['user']->setAttributes($models['Profile']->getAttributes());
			$models['user']->setIsActivated($models['Profile']->isActivated);
				
			if($models['user']->validate())
			{
				$transaction = Yii::app()->db->beginTransaction();
				$exception = null;
				try 
				{
					if((!isset($models['Avatar']->image) || (($models['user']->avatar === null || $models['user']->avatar->delete()) && $models['Avatar']->save())) && $models['user']->save())
					{
						$transaction->commit();
					}
					$models['Profile']->addErrors($models['user']->getErrors());
				} 
				catch(Exception $e) 
				{
					$exception = $e;
				}
				if($models['Profile']->hasErrors() || $models['Avatar']->hasErrors() || isset($exception))
				{
					if(!$models['Avatar']->getIsNewRecord())
					{
						$models['Avatar']->delete();
					}
					$transaction->rollback();
					if(isset($exception))
						throw $exception;
				}
			}
		}
    	 
    	$this->render('view', $models);
    }
    
    public function actionDelete($id) 
    {
    	if(is_numeric($id))
    	{
    		$model = CPUser::model()->findByPk($id);
    	}
    	elseif(is_string($id))
    	{
    		$model = CPUser::model()->find('name = :name OR email = :name', array(':name' => $id));
    	}
    	else
    	{
    		throw new CException(t('Invalid user identifier specified.'));
    	}
    
    	if($model === null)
    	{
    		throw new CHttpException(404, t('User {id} could not be found.', array('{id}' => $id)));
    	}
    
    	if($model->delete()) 
    	{
    		$response = array('result' => 'success', 'message' => t('User {id} deleted successfully.', array('{id}' => $id)));
    	} 
    	else 
    	{
    		$response = array('result' => 'error', 'message' => t('User {id} could not be deleted.', array('{id}' => $id)));
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