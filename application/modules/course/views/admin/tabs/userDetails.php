<div id="user-details">
	<div class="box-white">
		<?php
		$this->widget('zii.widgets.CDetailView', array(
				'data' => $CourseUser,
				'attributes' => array($CourseUser->getIdColumnName(), $CourseUser->getNameColumnName()),
		));
		?>
	</div>
</div>
		