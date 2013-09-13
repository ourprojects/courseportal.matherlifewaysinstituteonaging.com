<div id="courses">
	<h2>{t}Courses{/t}</h2>
	<div class="box-white">
		<?php 
		$this->renderPartial('grids/courseGrid', array('Course' => $Course, 'gridId' => 'course-grid'));
		echo CHtml::button('{t}Create{/t}'); 
		?>
	</div>
</div>
	