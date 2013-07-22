<?php   

class AdminController extends OnlineCoursePortalController 
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
		$this->render('index');
	}

}