<?php $this->breadcrumbs = array(t('Activation Failed')); ?>
<p class="header">
	<?php echo t('Oops! An error occurred while trying to activate your account.'); ?>
</p>
<p class="header">
	<?php echo t('Please') . ' ' . CHtml::link(t('email'), $this->createUrl('home/contact')). ' ' .
	t('us if you need assistance completing the registration process.'); ?>
</p>
