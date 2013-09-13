<?php
$this->breadcrumbs = array(
		'{t}Courses{/t}' => $this->createUrl('/course'),
		'{t}Course Administration{/t}' => $this->createUrl('/course/admin'),
		'{t}User Details{/t}'
);
?>
<h1>
	<?php echo $CourseUser->getName(); ?>
</h1>
<div id="single-column">
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
					'tabs' => array(
							'{t}Details{/t}' => $this->renderPartial('tabs/userDetails', array('CourseUser' => $CourseUser), true),
							'{t}Courses{/t}' => $this->renderPartial('tabs/userCourses', array('CourseUser' => $CourseUser, 'Course' => $Course), true),
					),
					'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'
			)
	);
	?>
</div>