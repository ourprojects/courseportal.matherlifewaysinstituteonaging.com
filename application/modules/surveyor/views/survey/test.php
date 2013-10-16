<ul>
	<?php
	$this->widget(
		'ext.fancybox.EFancyBox',
		array(
			'id' => 'a[id^="survey_link_"]',
			'config' => array(
				'width' => '95%',
				'height' => '95%',
				'arrows' => false,
				'autoSize' => false,
				'mouseWheel' => false,
			)
		)
	);
	$survey = $this->createWidget(
		'surveyor.widgets.Survey',
		array(
			'id' => 'test',
			'options' => array(
				'htmlOptions' => array('style' => 'display:none;'),
				'title' => array('htmlOptions' => array('class' => 'flowers')),
			)
		)
	);
	$survey->model->user_id = 4;
	echo '<li>';
	echo '<a id="survey_link_'.$survey->getId().'" href="#survey_'.$survey->getId().'" title="'.t($survey->model->title).'">'.t($survey->model->title).'</a>';
	$survey->run();
	echo '</li>';
	?>
</ul>
