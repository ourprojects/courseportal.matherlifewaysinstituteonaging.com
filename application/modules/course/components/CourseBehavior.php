<?php

class CourseBehavior extends CActiveRecordBehavior
{
	
	private $courseUser;

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
		$this->courseUser->{Yii::app()->getModule(self::COURSE_MODULE_NAME)->userId} = $this->getOwner()->{Yii::app()->getModule(self::COURSE_MODULE_NAME)->userId};
		$this->courseUser->{Yii::app()->getModule(self::COURSE_MODULE_NAME)->userName} = $this->getOwner()->{Yii::app()->getModule(self::COURSE_MODULE_NAME)->userName};
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

	public function hasCourse($course)
	{
		return $this->courseUser->hasUser($course);
	}

}
