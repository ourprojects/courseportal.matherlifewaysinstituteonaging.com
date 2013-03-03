<div class="form">
	<?php $form = $this->beginWidget(
			'CActiveForm',
			array(
					'id' => 'profile-form',
					'enableAjaxValidation' => true,
					'htmlOptions' => array('enctype' => 'multipart/form-data'),
			));
	?>
	<p class="note">
		<span class="required">*</span><?php echo t('Required'); ?>.
	</p>
	<?php echo $form->errorSummary(array($avatar, $user, $user_profile)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($avatar, 'image'); ?>
		<?php echo CHtml::image($this->createUrl("avatar/{$avatar->user_id}"), $avatar->getAttributeLabel('image')); ?>
		<?php echo $form->fileField($avatar, 'image'); ?>
		<?php echo $form->error($avatar, 'image'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($user, 'name'); ?>
		<?php echo $form->textField($user, 'name'); ?>
		<?php echo $form->error($user, 'name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($user, 'email'); ?>
		<?php echo $form->emailField($user, 'email'); ?>
		<?php echo $form->error($user, 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_profile, 'firstname'); ?>
		<?php echo $form->textField($user_profile, 'firstname'); ?>
		<?php echo $form->error($user_profile, 'firstname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($user_profile, 'lastname'); ?>
		<?php echo $form->textField($user_profile, 'lastname'); ?>
		<?php echo $form->error($user_profile, 'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_profile, 'country_iso'); ?>
		<?php echo $form->dropDownList($user_profile, 'country_iso', Yii::app()->translate->getTerritoryDisplayNames()); ?>
		<?php echo $form->error($user_profile, 'country_iso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_profile, 'city'); ?>
		<?php echo $form->textField($user_profile, 'city'); ?>
		<?php echo $form->error($user_profile, 'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_profile, 'state_id'); ?>
		<?php echo $form->dropDownList($user_profile, 'state_id', 
				CHtml::listData(
					States::model()->findAll(), 'id', 'name'),
					array('prompt' => 'Select a State')
					); 
		?>
		<?php echo $form->error($user_profile, 'state_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_profile, 'zip_code'); ?>
		<?php echo $form->textField($user_profile, 'zip_code'); ?>
		<?php echo $form->error($user_profile, 'zip_code'); ?>
	</div>
				
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Save Changes')); ?>
	</div>

	<?php $this->endWidget();?>

</div>
