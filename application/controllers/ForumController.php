<?php

class ForumController extends CoursePortalController
{

	public function accessRules()
	{
		return array(
				array('allow',
						'users' => array('@'),
				),
				array('deny',
						'users' => array('*'),
				),
		);
	}

}