<?php
$action = $CPUser->getIsNewRecord() ? '{t}Create{/t}' : '{t}Update{/t}';

$this->breadcrumbs = array(
		'{t}Admin{/t}' => $this->createUrl('/admin'),
		'{t}Users{/t}' => $this->createUrl('/admin/user'),
		'{t}User{/t} '.$action
);

$session = $CPUser->getSession();
?>
<?php if(!$CPUser->getIsNewRecord()): ?>
<div id="sidebar">
	<div class="box-sidebar">
		<h3>{t}Statistics{/t}</h3>
		<table>
			<tr>
				<th>{t}User Since:{/t}</th>
				<td><?php echo $CPUser->created; ?></td>
			</tr>
			<tr>
				<th>{t}Activated:{/t}</th>
				<td><?php echo $CPUser->getIsActivated() ? $CPUser->activated->date : '{t}Never{/t}'; ?></td>
			</tr>
			<tr>
				<th>{t}Last Seen:{/t}</th>
				<td><?php echo $CPUser->getLastSeen(); ?></td>
			</tr>
			<tr>
				<th>{t}Online Now:{/t}</th>
				<td><?php echo $CPUser->getIsOnline() ? '{t}Yes{/t}' : '{t}No{/t}'; ?></td>
			</tr>
			<tr>
				<th>{t}Last Agent:{/t}</th>
				<td><?php echo $CPUser->last_agent; ?></td>
			</tr>
			<tr>
				<th>{t}Last IP:{/t}</th>
				<td><?php echo $CPUser->last_ip; ?></td>
			</tr>
		</table>
	</div>
</div>
<?php endif; ?>
<div class="<?php echo $CPUser->getIsNewRecord() ? 'single-column' : 'column-wide'; ?>">
	<h1>
		<?php echo '{t}User{/t} '.$action; ?>
	</h1>
	<br />
	<div class="form box-white">
		<?php $form = $this->beginWidget(
				'CActiveForm',
				array(
						'id' => 'profile-form',
						'enableAjaxValidation' => true,
						'enableClientValidation' => true,
						'htmlOptions' => array('enctype' => 'multipart/form-data'),
				));
		?>
		<p class="note">
			<span class="required">*</span>{t}Required{/t}.
		</p>
		<?php echo $form->errorSummary(array($Avatar, $CPUser)); ?>

		<div class="row">
			<?php echo $form->labelEx($Avatar, 'image'); ?>
			<?php echo CHtml::image($this->createUrl('/avatar/'.$Avatar->user_id), $Avatar->getAttributeLabel('image')); ?>
			<?php echo $form->fileField($Avatar, 'image'); ?>
			<?php echo $form->error($Avatar, 'image'); ?>
			<?php if(!$Avatar->getIsNewRecord()): ?>
			<?php echo CHtml::linkButton('{t}Delete Avatar{/t}', array('href' => $this->createUrl('avatarDelete', array('user_id' => $Avatar->user_id)))); ?>
			<?php endif; ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'name'); ?>
			<?php echo $form->textField($CPUser, 'name'); ?>
			<?php echo $form->error($CPUser, 'name'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'email'); ?>
			<?php echo $form->emailField($CPUser, 'email'); ?>
			<?php echo $form->error($CPUser, 'email'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'group_id'); ?>
			<?php echo $form->dropDownList($CPUser, 'group_id', CHtml::listData(Group::model()->findAll(), 'id', 'name')); ?>
			<?php echo $form->error($CPUser, 'group_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'language'); ?>
			<?php echo $form->dropDownList($CPUser, 'language', Yii::app()->translate->getLocaleDisplayNames()); ?>
			<?php echo $form->error($CPUser, 'language'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'firstname'); ?>
			<?php echo $form->textField($CPUser, 'firstname'); ?>
			<?php echo $form->error($CPUser, 'firstname'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'lastname'); ?>
			<?php echo $form->textField($CPUser, 'lastname'); ?>
			<?php echo $form->error($CPUser, 'lastname'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'location'); ?>
			<?php echo $form->textField($CPUser, 'location'); ?>
			<?php echo $form->error($CPUser, 'location'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'country_iso'); ?>
			<?php echo $form->dropDownList($CPUser, 'country_iso', Yii::app()->translate->getTerritoryDisplayNames()); ?>
			<?php echo $form->error($CPUser, 'country_iso'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($CPUser, 'isActivated'); ?>
			<?php echo $form->checkBox($CPUser, 'isActivated'); ?>
			<?php echo $form->error($CPUser, 'isActivated'); ?>
		</div>

		<?php if($CPUser->getIsNewRecord()): ?>
			<div class="row">
				<?php echo $form->labelEx($CPUser, 'new_password'); ?>
				<?php echo $form->passwordField($CPUser, 'new_password'); ?>
				<?php echo $form->error($CPUser, 'new_password'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($CPUser, 'new_password_repeat'); ?>
				<?php echo $form->passwordField($CPUser, 'new_password_repeat'); ?>
				<?php echo $form->error($CPUser, 'new_password_repeat'); ?>
			</div>
		<?php 
		else:
			echo $form->hiddenField($CPUser, 'id');
		endif; 
		?>
		<div class="row submit">
			<?php echo CHtml::submitButton($action); ?>
		</div>

		<?php $this->endWidget();?>
	</div>
	<?php if(!$CPUser->getIsNewRecord()): ?>
	<div class="box-white">
		<p>{t}Agreements{/t}</p>
		<br />
		<?php
		$agreements = $CPUser->agreements;
		if(empty($agreements)):
		echo '{t}None{/t}';
	  	else:?>
		<ul>
			<?php foreach($agreements as $agreement): ?>
			<li><a
				href="<?php echo $this->createUrl('/agreement/view', array('id' => $agreement->id, 'userId' => $CPUser->id)) ?>"
				target='_blank'><?php echo t($agreement->name); ?> </a>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php
		endif;
		?>
	</div>
	<?php endif; ?>
</div>
