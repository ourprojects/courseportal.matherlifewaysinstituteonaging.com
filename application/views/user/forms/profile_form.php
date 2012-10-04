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
		<?php echo t('Fields with <span class="required">*</span> are required.'); ?>
	</p>
	<?php echo $form->errorSummary($models); ?>
	
	<div class="row">
		<?php echo $form->labelEx($models['user'], 'email'); ?>
		<?php echo $form->emailField($models['user'], 'email', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user'], 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['user_profile'], 'firstname'); ?>
		<?php echo $form->textField($models['user_profile'], 'firstname', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user_profile'], 'firstname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($models['user_profile'], 'lastname'); ?>
		<?php echo $form->textField($models['user_profile'], 'lastname', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user_profile'], 'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['avatar'], 'image'); ?>
		<?php echo CHtml::image($this->createUrl("avatar/{$models['avatar']->user_id}"), $models['avatar']->getAttributeLabel('image')); ?>
		<?php echo $form->fileField($models['avatar'], 'image'); ?>
		<?php echo $form->error($models['avatar'], 'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['user_profile'], 'country_iso'); ?>
		<?php echo $form->dropDownList($models['user_profile'], 'country_iso', Yii::app()->localeManager->getTerritories()); ?>
		<?php echo $form->error($models['user_profile'], 'country_iso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['user_profile'], 'city'); ?>
		<?php echo $form->textField($models['user_profile'], 'city', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user_profile'], 'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['user_profile'], 'state_id'); ?>
		<?php echo $form->dropDownList($models['user_profile'], 'state_id', 
				CHtml::listData(
					States::model()->findAll(), 'id', 'name'),
					array('prompt' => 'Select a State')
					); 
		?>
		<?php echo $form->error($models['user_profile'], 'state_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($models['user_profile'], 'zip_code'); ?>
		<?php echo $form->textField($models['user_profile'], 'zip_code', array('class' => 'wide_200px')); ?>
		<?php echo $form->error($models['user_profile'], 'zip_code'); ?>
	</div>
	
	<?php 
	$this->widget(
			'modules.surveyor.widgets.Survey', 
			array('survey_model' => $models['profile_questions'], 
				  'title_show' => false,
				  'description_show' => false,
				  'form_show' => false,
				  'question_options' => array('class' => 'row'))
		); 
	?>
				
	<div class="row submit">
		<?php echo CHtml::submitButton(t('Save Changes')); ?>
	</div>

	<?php $this->endWidget();?>

</div>
