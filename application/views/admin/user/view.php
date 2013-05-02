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
  <h1><?php echo t('Viewing User ') . $user->id; ?></h1>
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
		<?php echo $form->errorSummary(array($Avatar, $user)); ?>
		
		<div class="row">
			<?php echo $form->labelEx($Avatar, 'image'); ?>
			<?php echo CHtml::image($this->createUrl("avatar/{$Avatar->user_id}"), $Avatar->getAttributeLabel('image')); ?>
			<?php echo $form->fileField($Avatar, 'image'); ?>
			<?php echo $form->error($Avatar, 'image'); ?>
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
			<?php echo $form->labelEx($user, 'group_id'); ?>
			<?php echo $form->dropDownList($user, 'group_id', CHtml::listData(Group::model()->findAll(), 'id', 'name')); ?>
			<?php echo $form->error($user, 'group_id'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($user, 'language'); ?>
			<?php echo CHTML::dropDownList('language', Yii::app()->translate->getLanguageID($user->language), Yii::app()->translate->getLocaleDisplayNames()); ?>
			<?php echo $form->error($user, 'language'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($user, 'firstname'); ?>
			<?php echo $form->textField($user, 'firstname'); ?>
			<?php echo $form->error($user, 'firstname'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($user, 'lastname'); ?>
			<?php echo $form->textField($user, 'lastname'); ?>
			<?php echo $form->error($user, 'lastname'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($user, 'location'); ?>
			<?php echo $form->textField($user, 'location'); ?>
			<?php echo $form->error($user, 'location'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($user, 'country_iso'); ?>
			<?php echo $form->dropDownList($user, 'country_iso', Yii::app()->translate->getTerritoryDisplayNames()); ?>
			<?php echo $form->error($user, 'country_iso'); ?>
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