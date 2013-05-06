<?php
Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('index.css')); 
$this->breadcrumbs = array(t('Admin'));
?>
<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('159325162.png'); ?>);">
  <h1 class="bottom"><?php echo t('Administrator'); ?></h1>
</div>
<div class="column-wide">
  <h2 class="flowers"><?php echo t('Administrator Controls / Site Configuration'); ?></h2>
  <hr />
  <ul id="categories">
    <li>
      <h2><?php echo CHtml::link(t('API Keys'), $this->createUrl('apiKeys'), array('class' => 'button')); ?></h2>
    </li>
    <li>
      <h2><?php echo CHtml::link(t('Courses'), $this->createUrl('course'), array('class' => 'button')); ?></h2>
    </li>
    <li>
      <h2><?php echo CHtml::link(t('Translations &amp; Languages'), $this->createUrl('/translate/translate'), array('class' => 'button')); ?></h2>
    </li>
    <li>
      <h2><?php echo CHtml::link('phpBB Administration Control Panel', Yii::app()->phpBB->getACPUrl(), array('class' => 'button')); ?></h2>
    </li>
    <li>
      <h2><?php echo CHtml::link(t('Users'), $this->createUrl('users'), array('class' => 'button')); ?></h2>
    </li>
    <li>
      <h2><?php echo CHtml::link(t('HostMySite CPanel Login'), 'https://my.hostmysite.com/single.html', array('class' => 'button')); ?></h2>
    </li>
  </ul>
</div>