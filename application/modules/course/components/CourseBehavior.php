<?php

class CourseBehavior extends CActiveRecordBehavior
{
	
	private $courseUser;
	
	public function __construct()
	{
		Yii::import('course.models.*');
	}

	protected function afterConstruct($event)
	{
		$this->updateCourseUser();
	}
	
	protected function afterFind($event)
	{
		$this->updateCourseUser();
	}
	
	protected function afterSave($event)
	{
		$this->updateCourseUser('update');
	}
	
	protected function afterDelete($event)
	{
		$this->updateCourseUser();
	}
	
	protected function updateCourseUser($scenario = 'insert')
	{
		if(!isset($this->courseUser))
		{
			$this->courseUser = new CourseUser();
		}
		$this->courseUser->setId($this->getOwner()->{$this->courseUser->getIdColumnName()});
		$this->courseUser->setName($this->getOwner()->{$this->courseUser->getNameColumnName()});
		$this->courseUser->setScenario($scenario);
	}
	
	public function relations()
	{
		return $this->courseUser->relations();
	}
	
	public function attributeLabels()
	{
		return $this->courseUser->attributeLabels();
	}

	public function hasCourse($courseId, $hasCourse = true)
	{
		return $this->courseUser->hasCourse($courseId, $hasCourse);
	}

}
