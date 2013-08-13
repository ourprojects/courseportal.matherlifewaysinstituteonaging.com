<?php
class UserController extends SBaseController
{

	public function actionIndex()
	{
		$this->render('index', array('userModel' => $this->getModule()->getNewUserModel('search')));
	}

	public function actionView($id = null)
	{
		$params = array();
		if(isset($id))
		{
			$params['user'] = $this->getModule()->getStaticUserModel()->findByPk($id);
			$params['roles'] = AuthItem::model()->userAssigned($id)->type(EAuthItem::TYPE_ROLE)->findAll();
		}
		if(Yii::app()->getRequest()->getIsAjaxRequest())
		{
			$this->renderPartial('partials/_view', $params);
		}
		else
		{
			$params['userModel'] = $this->getModule()->getNewUserModel('search');
			$this->render('index', $params);
		}
	}

}