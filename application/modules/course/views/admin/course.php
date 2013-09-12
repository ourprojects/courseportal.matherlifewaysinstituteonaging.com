<?php
$this->breadcrumbs = array(
		'{t}Courses{/t}' => $this->createUrl('/course'),
		'{t}Courses & Users{/t}' => $this->createUrl('/course/admin'),
		'{t}Course Details{/t}'
);
?>
<h1>
	<?php echo $Course->title; ?>
</h1>
<div id="single-column">
	<div id="course" class="box-white">
		<div id="course-details">
			<h2>{t}Course Details{/t}</h2>
			<div class="box-white">
				<?php
				$this->widget('zii.widgets.CDetailView', array(
						'data' => $Course,
						'attributes' => array(
								'id',
								'name',
								'rank',
								'title',
								'description',
						),
				));
				echo CHtml::button('{t}Edit{/t}', array('onclick' => 'js:$("div#course-form-dialog").dialog("open")'));
				?>
			</div>
			<?php 
			$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
					'id' => 'course-form-dialog',
					'options' => array(
							'title' => '{t}Update Course{/t} "'.$Course->title.'"',
							'autoOpen' => false,
							'modal' => true,
							'width' => 700,
					),
			));
			$this->renderPartial('_courseForm', array('Course' => $Course));
			$this->endWidget('course-form-dialog'); 
			?>
		</div>
		<div id="course-objectives">
			<h2>{t}Course Objectives{/t}</h2>
			<div class="box-white">
				<?php
				$this->renderPartial('_objectiveGrid', array('CourseObjective' => $CourseObjective));
				echo CHtml::button('{t}Add{/t}', array('onclick' => 'js:$("div#courseObjective-form-dialog").dialog("open")'));
				?>
			</div>
			<?php 
			$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
					'id' => 'courseObjective-form-dialog',
					'options' => array(
							'title' => '{t}Create Course Objective for{/t} "'.$Course->title.'"',
							'autoOpen' => false,
							'modal' => true,
							'width' => 400,
					),
			));
			$this->renderPartial('_objectiveForm', array('CourseObjective' => $CourseObjective));
			$this->endWidget('courseObjective-form-dialog'); 
			?>
		</div>
		<div id="course-users">
			<h2>{t}Course Users{/t}</h2>
			<div class="box-white">
				<?php 
				$this->renderPartial('_userGrid', array('CourseUser' => $CourseUser, 'course_id' => $Course->id));
				echo CHtml::button('{t}Add{/t}', array('onclick' => 'js:$("div#courseUser-grid-dialog").dialog("open")'));
				?>
			</div>
			<?php 
			$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
					'id' => 'courseUser-grid-dialog',
					'options' => array(
							'title' => '{t}Add a User to Course{/t} "'.$Course->title.'"',
							'autoOpen' => false,
							'modal' => true,
							'width' => 700,
					),
			));
			$this->renderPartial('_userGrid', array('CourseUser' => $CourseUser->resetScope()));
			$this->endWidget('courseUser-grid-dialog');
			?>
		</div>
	</div>
</div>
