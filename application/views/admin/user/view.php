<?php
$this->breadcrumbs = array(
		'{t}Admin{/t}' => $this->createUrl('admin'), 
		'{t}Users{/t}' => $this->createUrl('users'), 
		'{t}User Details{/t}'
);
?>
<div id="sidebar"> 
  <div class="box-sidebar">
  	<h3>{t}Statistics{/t}</h3>
  	<table>
  		<tr>
  			<th>{t}User Since:{/t}</th><td><?php echo $user->created; ?></td>
  		</tr>
  		<tr>
  			<th>{t}Activated:{/t}</th><td><?php echo $user->getIsActivated() ? $user->activated->date : 'No'; ?></td>
  		</tr>
  		<tr>
  			<th>{t}Last Seen:{/t}</th><td><?php echo $user->last_login; ?></td>
  		</tr>
  		<tr>
  			<th>{t}Last Agent:{/t}</th><td><?php echo $user->last_agent; ?></td>
  		</tr>
  		<tr>
  			<th>{t}Last IP:{/t}</th><td><?php echo $user->last_ip; ?></td>
  		</tr>
  	</table>
  </div>
</div>
<div class="column-wide">
  <h1>{t}Viewing User{/t}&nbsp;<?php echo $user->id; ?></h1>
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
			<span class="required">*</span>{t}Required{/t}.
		</p>
		<?php echo $form->errorSummary(array($Avatar, $Profile)); ?>
		
		<div class="row">
			<?php echo $form->labelEx($Avatar, 'image'); ?>
			<?php echo CHtml::image($this->createUrl('avatar/'.$Avatar->user_id), $Avatar->getAttributeLabel('image')); ?>
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
			<?php echo $form->labelEx($Profile, 'group_id'); ?>
			<?php echo $form->dropDownList($Profile, 'group_id', CHtml::listData(Group::model()->findAll(), 'id', 'name')); ?>
			<?php echo $form->error($Profile, 'group_id'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($Profile, 'language'); ?>
			<?php echo $form->dropDownList($Profile, 'language', Yii::app()->translate->getLocaleDisplayNames()); ?>
			<?php echo $form->error($Profile, 'language'); ?>
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
		
		<div class="row">
			<?php echo $form->labelEx($Profile, 'isActivated'); ?>
			<?php echo $form->checkBox($Profile, 'isActivated'); ?>
			<?php echo $form->error($Profile, 'isActivated'); ?>
		</div>
				
		<div class="row submit">
			<?php echo CHtml::submitButton('{t}Save Changes{/t}'); ?>
		</div>

		<?php $this->endWidget();?>
	</div>
  </div>
  <div class="box-white">
  	<p>{t}Agreements Made{/t}</p>
  	<br />
  	<?php 
  	$agreements = $user->agreements;
  	if(empty($agreements)): 
  		echo '{t}None{/t}';
  	else:?>
  	<ul>
  		<?php foreach($agreements as $agreement): ?>
  		<li>
  			<a href="<?php echo $this->createUrl('/agreement/view', array('id' => $agreement->id, 'userId' => $user->id)) ?>" target='_blank'><?php echo t($agreement->name); ?></a>
  		</li>
  		<?php endforeach; ?>
  	</ul>
  	<?php
	endif; 
	?>
  </div>
</div>