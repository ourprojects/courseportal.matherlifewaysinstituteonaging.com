<?php
$this->breadcrumbs = array(
		'{t}Courses{/t}' => $this->createUrl('/course'),
		'{t}Course Administration{/t}' => $this->createUrl('/course/admin'),
		'{t}Course Details{/t}'
);
?>
<h1>
	<?php echo $Course->title; ?>
</h1>
<div id="single-column">
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
					'tabs' => array(
							'{t}Details{/t}' => $this->renderPartial('tabs/courseDetails', array('Course' => $Course), true),
							'{t}Objectives{/t}' => $this->renderPartial('tabs/courseObjectives', array('Course' => $Course, 'CourseObjective' => $CourseObjective), true),
							'{t}Users{/t}' => $this->renderPartial('tabs/courseUsers', array('Course' => $Course, 'CourseUser' => $CourseUser), true),
					),
					'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'
			)
	);
	?>
</div>
