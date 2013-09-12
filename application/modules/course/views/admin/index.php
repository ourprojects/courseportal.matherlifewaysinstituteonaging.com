<?php $this->breadcrumbs = array('{t}Courses{/t}' => $this->createUrl('/course'), '{t}Courses & Users{/t}'); ?>
<h1 class="bottom">{t}Courses & Users{/t}</h1>
<div id="single-column">
	<div id="courses">
		<h2>{t}Courses{/t}</h2>
		<div class="box-white">
			<?php 
			$this->renderPartial('_courseGrid', array('Course' => $Course));
			echo CHtml::button('{t}Create{/t}'); 
			?>
		</div>
	</div>
	<div id="users">
		<h2>{t}Users{/t}</h2>
		<div class="box-white">
			<?php $this->renderPartial('_userGrid', array('CourseUser' => $CourseUser)); ?>
		</div>
	</div>
</div>