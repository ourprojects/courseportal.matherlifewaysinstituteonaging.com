<?php
$this->breadcrumbs = array(
		t('Admin') => $this->createUrl('admin'), 
		t('Users') => $this->createUrl('users'), 
		t('User Details')
);
?>
<div id="sidebar"> 
  <div class="box-sidebar">
  	<table>
  		<tr>
  			<th><?php echo t('Statistics'); ?></th>
  		</tr>
  		<tr>
  			<th><?php echo t('User Since:'); ?></th><td><?php echo $user->created; ?></td>
  		</tr>
  		<tr>
  			<th><?php echo t('Last Seen:'); ?></th><td><?php echo $user->last_login; ?></td>
  		</tr>
  		<tr>
  			<th><?php echo t('Last Agent:'); ?></th><td><?php echo $user->last_agent; ?></td>
  		</tr>
  		<tr>
  			<th><?php echo t('Last IP:'); ?></th><td><?php echo $user->last_ip; ?></td>
  		</tr>
  	</table>
  </div>
</div>
<div class="column-wide">
  <h2><?php echo t('Viewing User #') . $user->id; ?></h2>
  <br />
  <div class="box-white">
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
			<span class="required">*</span><?php echo t('Required'); ?>.
		</p>
		<?php echo $form->errorSummary(array($Avatar, $Profile)); ?>
		
		<div class="row">
			<?php echo $form->labelEx($Avatar, 'image'); ?>
			<?php echo CHtml::image($this->createUrl("avatar/{$Avatar->user_id}"), $Avatar->getAttributeLabel('image')); ?>
			<?php echo $form->fileField($Avatar, 'image'); ?>
			<?php echo $form->error($Avatar, 'image'); ?>
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
  </div>
  <div class="box-white">
  	<p><?php echo t('Agreements Made');?></p>
  	<br />
  	<?php 
  	$agreements = $user->agreements;
  	if(!empty($agreements)): ?>
  	<ul>
  		<?php foreach($agreements as $agreement): ?>
  		<li>
  			<?php echo t($agreement->name); ?>
  		</li>
  		<?php endforeach; ?>
  	</ul>
  	<?php 
  	else:
		echo t('None');
	endif; 
	?>
  </div>
</div>