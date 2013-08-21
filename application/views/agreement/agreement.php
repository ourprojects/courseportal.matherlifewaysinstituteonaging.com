<?php $this->breadcrumbs = array(t($agreement->name)); ?>

<div id="agreement">
  <div id="errors">
    <?php 
		if($userAgreement != null) 
			echo CHtml::errorSummary($userAgreement); 
		?>
  </div>
  <div id="text">
    <?php $this->renderPartial('agreementPartial', array('agreement' => $agreement, 'user' => $user, 'userAgreement' => $userAgreement)); ?>
  </div>
  <table id="options">
    <tr>
      <?php if($user != null && ($userAgreement == null || $userAgreement->getIsNewRecord())): ?>
      <td class="text-center"><?php echo CHtml::link(t('Agree'), $this->createUrl('agree', array('id' => $agreement->id))); ?></td>
      <?php endif; ?>
      <td class="text-center"><?php echo CHtml::link(t('Download'), $this->createUrl('download', array('id' => $agreement->id)), array('target' => '_blank')); ?></td>
    </tr>
  </table>
</div>
