<?php
$this->pageTitle = Yii::app()->name .' - '.t('Activation Failed');
?>
<p class="header"><?php echo t('Oops! An error ocurred while trying to activate your
	acount.'); ?></p>
<p class="header">
	<?php echo t('Please'); ?> <a href="<?php echo $this->createUrl('home/contact'); ?>"
		title="Support"><?php echo t('email'); ?></a> <?php echo t('us if you need assistance completing the
	registration process.'); ?>
</p>
