<?php $this->breadcrumbs = array('{t}Admin{/t}' => $this->createUrl('/admin'), '{t}Users{/t}'); ?>

<h1>{t}User Administration{/t}</h1>
<div id="single-column">
	<?php 
		echo CHtml::button(
				'{t}View Detailed User Grid{/t}', 
				array(
					'onclick' => 'js:$("div#user-detailed-grid-dialog").dialog("open");'
				)
		);
		$this->renderPartial('_grid', array('model' => $CPUser));
		$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
				'id' => 'user-detailed-grid-dialog',
				'options' => array(
						'title' => '{t}Detailed User Grid{/t}',
						'autoOpen' => false,
						'modal' => true,
						'width' => 'auto',
				),
		));
		$this->renderPartial('_grid', array('model' => $CPUser, 'detailed' => true));
		$this->endWidget('user-detailed-grid-dialog');
	?>
	<br />
	<?php echo CHtml::link('{t}Create New User{/t}', $this->createUrl('/admin/user/view'), array('class' => 'button')); ?>
</div>
