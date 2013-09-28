<?php $this->breadcrumbs = array('{t}Admin{/t}' => $this->createUrl('/admin'), '{t}Users{/t}'); ?>

<h1>{t}User Administration{/t}</h1>
<div id="sidebar">
	<div class="box-sidebar">
		<h3>{t}Statistics{/t}</h3>
		<table>
			<tr>
				<th>{t}Users:{/t}</th>
				<td><?php echo CPUser::model()->count(); ?></td>
			</tr>
			<tr>
				<th>{t}Activated:{/t}</th>
				<td><?php echo CPUser::model()->activated()->count(); ?></td>
			</tr>
			<tr>
				<th>{t}Online:{/t}</th>
				<td><?php echo CPUser::model()->online()->count(); ?></td>
			</tr>
			<tr>
				<th>{t}Offline:{/t}</th>
				<td><?php echo CPUser::model()->online(false)->count(); ?></td>
			</tr>
			<tr>
				<th>{t}Online Guests:{/t}</th>
				<td><?php echo EUserHttpSession::model()->guest()->count(); ?></td>
			</tr>
		</table>
	</div>
</div>
<div class="column-wide">
	<div class="box-white">
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
</div>
