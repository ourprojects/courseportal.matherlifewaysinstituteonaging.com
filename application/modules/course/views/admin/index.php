<?php $this->breadcrumbs = array('{t}Courses{/t}' => $this->createUrl('/course'), '{t}Course Administration{/t}'); ?>
<h1 class="bottom">{t}Course Administration{/t}</h1>
<div id="single-column">
	<?php 
	$this->widget(
			'zii.widgets.jui.CJuiTabs',
			array(
					'tabs' => array(
							'{t}Courses{/t}' => $this->renderPartial('tabs/courses', array('Course' => $Course), true),
							'{t}Users{/t}' => $this->renderPartial('tabs/users', array('CourseUser' => $CourseUser), true),
					),
					'headerTemplate' => '<li><a href="{url}" title="{title}">{title}</a></li>'
			)
	);
	?>
</div>