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
      <a href="<?php echo $this->createUrl('apiKeys'); ?>" class="button"><?php echo t('API Keys'); ?></a>
    </li>
    <li>
      <a href="<?php echo $this->createUrl('course'); ?>" class="button"><?php echo t('Courses'); ?></a>
    </li>
    <li>
      <a href="<?php echo $this->createUrl('/translate/translate'); ?>" class="button"><?php echo t('Translations &amp; Languages'); ?></a>
    </li>
    <li>
      <a href="<?php echo Yii::app()->phpBB->getACPUrl(); ?>" class="button"><?php echo t('phpBB Administration Control Panel'); ?></a>
    </li>
    <li>
      <a href="<?php echo $this->createUrl('users'); ?>" class="button"><?php echo t('Users'); ?></a>
    </li>
    <li>
      <a href="https://my.hostmysite.com/single.html" class="button"><?php echo t('HostMySite Control Panel'); ?></a>
    </li>
  </ul>
</div>