<div id="users">
	<h2>{t}Users{/t}</h2>
	<div class="box-white">
		<?php $this->renderPartial('grids/userGrid', array('CourseUser' => $CourseUser, 'gridId' => 'user-grid')); ?>
	</div>
</div>