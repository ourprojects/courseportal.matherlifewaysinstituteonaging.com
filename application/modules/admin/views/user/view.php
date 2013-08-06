<?php
$action = $CPUser->getIsNewRecord() ? '{t}Create{/t}' : '{t}Update{/t}';

$this->breadcrumbs = array(
		'{t}Admin{/t}' => $this->createUrl('/admin'),
		'{t}Users{/t}' => $this->createUrl('/admin/user'),
		t("User $action")
);
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
				<td><?php echo $CPUser->last_login; ?></td>
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
		<?php echo t("User $action"); ?>
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
		<?php echo $form->errorSummary(array($Avatar, $UserProfile)); ?>

		<div class="row">
			<?php echo $form->labelEx($Avatar, 'image'); ?>
			<?php echo CHtml::image($this->createUrl('/avatar/'.$Avatar->user_id), $Avatar->getAttributeLabel('image')); ?>
			<?php echo $form->fileField($Avatar, 'image'); ?>
			<?php echo $form->error($Avatar, 'image'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'name'); ?>
			<?php echo $form->textField($UserProfile, 'name'); ?>
			<?php echo $form->error($UserProfile, 'name'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'email'); ?>
			<?php echo $form->emailField($UserProfile, 'email'); ?>
			<?php echo $form->error($UserProfile, 'email'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'group_id'); ?>
			<?php echo $form->dropDownList($UserProfile, 'group_id', CHtml::listData(Group::model()->findAll(), 'id', 'name')); ?>
			<?php echo $form->error($UserProfile, 'group_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'language'); ?>
			<?php echo $form->dropDownList($UserProfile, 'language', Yii::app()->translate->getLocaleDisplayNames()); ?>
			<?php echo $form->error($UserProfile, 'language'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'firstname'); ?>
			<?php echo $form->textField($UserProfile, 'firstname'); ?>
			<?php echo $form->error($UserProfile, 'firstname'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'lastname'); ?>
			<?php echo $form->textField($UserProfile, 'lastname'); ?>
			<?php echo $form->error($UserProfile, 'lastname'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'location'); ?>
			<?php echo $form->textField($UserProfile, 'location'); ?>
			<?php echo $form->error($UserProfile, 'location'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'country_iso'); ?>
			<?php echo $form->dropDownList($UserProfile, 'country_iso', Yii::app()->translate->getTerritoryDisplayNames()); ?>
			<?php echo $form->error($UserProfile, 'country_iso'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($UserProfile, 'isActivated'); ?>
			<?php echo $form->checkBox($UserProfile, 'isActivated'); ?>
			<?php echo $form->error($UserProfile, 'isActivated'); ?>
		</div>

		<?php if($CPUser->getIsNewRecord()): ?>
			<div class="row">
				<?php echo $form->labelEx($UserProfile, 'new_password'); ?>
				<?php echo $form->passwordField($UserProfile, 'new_password'); ?>
				<?php echo $form->error($UserProfile, 'new_password'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($UserProfile, 'new_password_repeat'); ?>
				<?php echo $form->passwordField($UserProfile, 'new_password_repeat'); ?>
				<?php echo $form->error($UserProfile, 'new_password_repeat'); ?>
			</div>
		<?php endif; ?>

		<div class="row submit">
			<?php echo CHtml::submitButton('{t}Save Changes{/t}'); ?>
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
	<div class="box-white">
		<h2>{t}Courses{/t}</h2>
		<?php $this->actionGrid($CPUser->id, 'course-grid'); ?>
	</div>
	<?php endif; ?>
</div>
