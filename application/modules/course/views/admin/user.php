<?php
$this->breadcrumbs = array(
		'{t}Courses{/t}' => $this->createUrl('/course'),
		'{t}Courses & Users{/t}' => $this->createUrl('/course/admin'),
		'{t}User Details{/t}'
);
?>
<h1>
	<?php echo $CourseUser->getName(); ?>
</h1>
<div id="single-column">
	<div id="user" class="box-white">
		<div id="user-details">
			<h2>{t}User Details{/t}</h2>
			<div class="box-white">
				<?php
				$this->widget('zii.widgets.CDetailView', array(
						'data' => $CourseUser,
						'attributes' => array($CourseUser->getIdColumnName(), $CourseUser->getNameColumnName()),
				));
				?>
			</div>
		</div>
		<div id="user-courses">
			<h2>{t}User's Courses{/t}</h2>
			<div class="box-white">
				<?php 
				$this->renderPartial('_courseGrid', array('Course' => $Course, 'user_id' => $CourseUser->getId()));
				echo CHtml::button('{t}Add{/t}', array('onclick' => 'js:$("div#course-grid-dialog").dialog("open")'));
				?>
			</div>
			<?php 
			$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
					'id' => 'course-grid-dialog',
					'options' => array(
							'title' => '{t}Add a Course to User{/t} "'.$CourseUser->getName().'"',
							'autoOpen' => false,
							'modal' => true,
							'width' => 950,
					),
			));
			$this->renderPartial('_courseGrid', array('Course' => $Course->resetScope()));
			$this->endWidget('courseUser-grid-dialog');
			?>
		</div>
	</div>
</div>