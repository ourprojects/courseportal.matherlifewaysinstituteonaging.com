<?php

class CourseBehavior extends CActiveRecordBehavior
{

	public function hasCourse($course)
	{
		if(is_int($course)) {
			$this->getDbCriteria()->mergeWith(array(
					'with' => 'userCourses',
					'condition' => 'userCourses.course_id=:course_id',
					'params' => array(':course_id' => $course)
			));
		} else if(is_string($course)) {
			$this->getDbCriteria()->mergeWith(array(
					'with' => 'courses',
					'condition' => 'course.name=:name',
					'params' => array(':name' => $course)
			));
		} else if($course instanceof Course) {
			return $this->hasCourse($course->id);
		}
		return $this;
	}

}
