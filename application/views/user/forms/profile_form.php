<div class="form">
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
		<span class="required">*</span>
		<?php echo t('Required'); ?>
		.
	</p>
	<?php echo $form->errorSummary(array($Avatar, $CPUser)); ?>

	<div class="row">
		<?php echo $form->labelEx($Avatar, 'image'); ?>
		<?php echo CHtml::image($this->createUrl("avatar/{$Avatar->user_id}"), $Avatar->getAttributeLabel('image')); ?>
		<?php echo $form->fileField($Avatar, 'image'); ?>
		<?php echo $form->error($Avatar, 'image'); ?>
		<?php if(!$Avatar->getIsNewRecord()): ?>
		<?php echo CHtml::linkButton('{t}Delete Avatar{/t}', array('href' => $this->createUrl('/avatar/delete'))); ?>
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

	<div class="row submit">
		<?php echo CHtml::submitButton(t('Save Changes')); ?>
	</div>

	<?php $this->endWidget();?>

</div>
