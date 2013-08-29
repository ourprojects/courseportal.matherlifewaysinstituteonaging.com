<?php

class UserController extends AController
{

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionView($id = null)
	{
		$CPUser = isset($id) ? CPUser::model()->findByPk($id) : new CPUser;

		if($CPUser === null)
		{
			throw new CHttpException(404, t('A User with ID {id} could not be found.', array('{id}' => $id)));
		}

		if(!$CPUser->getIsNewRecord())
		{
			$CPUser->setScenario('admin');
		}

		$UserProfile = new UserProfile($CPUser->getScenario());
		$UserProfile->setAttributes($CPUser->getAttributes());
		$UserProfile->isActivated = $CPUser->getIsActivated();

		$Avatar = $CPUser->getRelated('avatar');

		if($Avatar === null)
		{
			$Avatar = new Avatar;
			$Avatar->setAttribute('user_id', $CPUser->getAttribute('id'));
		}

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'profile-form')
		{
			echo CActiveForm::validateTabular(array('UserProfile' => $UserProfile, 'Avatar' => $Avatar));
			Yii::app()->end();
		}

		// collect user input data
		if($UserProfile->loadAttributes() && $UserProfile->validate())
		{
			$CPUser->setAttributes($UserProfile->getAttributes());
			$CPUser->setIsActivated($UserProfile->isActivated);

			$transaction = Yii::app()->db->beginTransaction();
			$exception = null;
			try
			{
				if($CPUser->save())
				{
					$Avatar->user_id = $CPUser->id;
					if($Avatar->image === null || $Avatar->save())
					{
						$transaction->commit();
					}
				}
				$UserProfile->addErrors($CPUser->getErrors());
			}
			catch(Exception $e)
			{
				$exception = $e;
			}
			if($UserProfile->hasErrors() || $Avatar->hasErrors() || isset($exception))
			{
				if(!$Avatar->getIsNewRecord())
				{
					$Avatar->delete();
				}
				$transaction->rollback();
				if(isset($exception))
					throw $exception;
			}
		}

    	$this->render('view', array('CPUser' => $CPUser, 'UserProfile' => $UserProfile, 'Avatar' => $Avatar));
    }

    public function actionDelete($id)
    {
    	if(is_numeric($id))
    	{
    		$model = CPUser::model()->findByPk($id);
    	}
    	elseif(is_string($id))
    	{
    		$model = CPUser::model()->autoQuoteFind(array('or', 't.name' => $id, 't.email' => $id));
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

    public function actionGrid($id, $name)
    {
    	switch($name)
    	{
    		case 'course-grid':
    			$model = new Course('search');
    			$model->with(array('users' => array('condition' => 'users.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = 't.id';
    			$gridPath = '_courseGrid';
    			break;
    		case 'user-grid':
    			$model = new CPUser('search');
    			$model->setAttribute('id', $id);
    			$gridPath = '_grid';
    			break;
    		default:
    			return;
    	}
    	$this->renderPartial($gridPath, array('model' => $model));
    }

}