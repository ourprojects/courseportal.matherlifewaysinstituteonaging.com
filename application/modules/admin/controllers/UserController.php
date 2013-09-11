<?php

class UserController extends AController
{

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionView($id = null, array $CPUser = array(), $ajax = null)
	{
		if(isset($id))
		{
			$CPUserModel = CPUser::model()->findByPk($id);
			if($CPUserModel === null)
			{
				throw new CHttpException(404, t('A User with ID {id} could not be found.', array('{id}' => $id)));
			}
			$CPUserModel->setScenario('adminUpdate');
		}
		else
		{
			$CPUserModel = new CPUser('adminInsert');
		}

		$Avatar = isset($CPUserModel->avatar) ? $CPUserModel->avatar : new Avatar();
		
		if(Yii::app()->getRequest()->getIsPostRequest())
		{
			$CPUserModel->setAttributes($CPUser, $CPUserModel->getSafeAttributeNames());
			$Avatar->setAttribute('user_id', $CPUserModel->getAttribute('id'));
			if(isset($ajax) && $ajax === 'profile-form')
			{
				echo CActiveForm::validateTabular(array($CPUserModel, $Avatar), null, false);
				return;
			}
			elseif($CPUserModel->validate() && $Avatar->validate())
			{
				$transaction = Yii::app()->db->beginTransaction();
				try
				{
					if($CPUserModel->save(false) && (!isset($Avatar->image) || $Avatar->save(false)))
					{
						$transaction->commit();
					}
					else
					{
						$models['CPUser']->delete(); // needed for phpBB
						$transaction->rollback();
					}
				}
				catch(Exception $e)
				{
					$models['CPUser']->delete(); // needed for phpBB
					$transaction->rollback();
					throw $e;
				}
			}
		}
		$this->render('view', array('CPUser' => $CPUserModel, 'Avatar' => $Avatar));
	}

    public function actionDelete($id)
    {
    	if(is_numeric($id))
    	{
    		$model = CPUser::model()->findByPk($id);
    	}
    	elseif(is_string($id))
    	{
    		$model = CPUser::model()->autoQuoteFind(array('or', CPUser::model()->getTableAlias().'.name' => $id, CPUser::model()->getTableAlias().'.email' => $id));
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
    			$model->with(array('users' => array('condition' => 'users.id=:id', 'params' => array(':id' => $id))))->together()->getDbCriteria()->group = $model->getTableAlias().'.id';
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

	public function actionAvatarDelete($user_id)
	{
		$avatar = Avatar::model()->findByPk($user_id);
		if($avatar === null)
		{
			throw new CHttpException(404, t('Avatar with ID {id} could not be found.', array('{id}' => $user_id)));
		}
		$avatar->delete();
		$this->redirect(Yii::app()->getRequest()->getUrlReferrer());
	}

}