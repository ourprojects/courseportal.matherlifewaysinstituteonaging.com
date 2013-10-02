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
	foreach(array(
			'precourse',
			'postcourse') as $surveyName)
	{
		$survey = $this->createWidget(
				'modules.surveyor.widgets.Survey',
				array(
						'id' => $surveyName,
						'options' => array(
								'htmlOptions' => array('style' => 'display:none;'),
								'title' => array('htmlOptions' => array('class' => 'flowers')),
								'form' => array('options' =>
										array(
												'enableAjaxValidation' => true,
												'enableClientValidation' => true
										)),
						)
				)
		);
		$survey->model->user_id = Yii::app()->getUser()->getId();
		echo '<li>';
		echo '<a id="survey_link_'.$survey->getId().'" href="#survey_'.$survey->getId().'" title="'.t($survey->model->title).'">'.t($survey->model->title).'</a>';
		$survey->run();
		echo '</li>';
	}
	?>
</ul>