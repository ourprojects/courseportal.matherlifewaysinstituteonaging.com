<?php $this->breadcrumbs = array(t('Activation Failed')); ?>
<p class="header">
	<?php echo t('Oops! An error ocurred while trying to activate your acount.'); ?>
</p>
<p class="header">
	<?php echo t('Please') . ' ' . CHtml::link(t('email'), $this->createUrl('home/contact')). ' ' .
	t('us if you need assistance completing the registration process.'); ?>
</p>
