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
	<?php echo $form->errorSummary(array($avatar, $Profile)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($avatar, 'image'); ?>
		<?php echo CHtml::image($this->createUrl("avatar/{$avatar->user_id}"), $avatar->getAttributeLabel('image')); ?>
		<?php echo $form->fileField($avatar, 'image'); ?>
		<?php echo $form->error($avatar, 'image'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($Profile, 'name'); ?>
		<?php echo $form->textField($Profile, 'name'); ?>
		<?php echo $form->error($Profile, 'name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($Profile, 'email'); ?>
		<?php echo $form->emailField($Profile, 'email'); ?>
		<?php echo $form->error($Profile, 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Profile, 'firstname'); ?>
		<?php echo $form->textField($Profile, 'firstname'); ?>
		<?php echo $form->error($Profile, 'firstname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($Profile, 'lastname'); ?>
		<?php echo $form->textField($Profile, 'lastname'); ?>
		<?php echo $form->error($Profile, 'lastname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($Profile, 'location'); ?>
		<?php echo $form->textField($Profile, 'location'); ?>
		<?php echo $form->error($Profile, 'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Profile, 'country_iso'); ?>
		<?php echo $form->dropDownList($Profile, 'country_iso', Yii::app()->translate->getTerritoryDisplayNames()); ?>
		<?php echo $form->error($Profile, 'country_iso'); ?>
	</div>
			
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Save Changes')); ?>
	</div>

	<?php $this->endWidget();?>

</div>
