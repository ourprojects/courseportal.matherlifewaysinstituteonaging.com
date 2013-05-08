<?php
Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('index.css')); 
$this->breadcrumbs = array(t('Admin'));
?>
<!-- NEED TO FIX THE REST, PLEASE DON'T CHANGE LAYOUT YET -->

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('159325162.png'); ?>);">
  <h1 class="bottom"><?php echo t('Administrator'); ?></h1>
</div>
<div class="column-wide">
  <h2 class="flowers"><?php echo t('Administrator'); ?></h2>
  <hr />
  <h4><?php echo t('Controls and Configurations'); ?></h4>
  <div class="box-white">
    <h5><?php echo t('API Keys'); ?></h5>
    <p><?php echo t('An application programming interface (API) is a protocol intended to be used as an interface by software components to communicate with each other. An API is a library that may include specification for routines, data structures, object classes, and variables.'); ?></p>
    <p id="categories"><a href="<?php echo $this->createUrl('apiKeys'); ?>" class="button"><?php echo t('API Keys'); ?></a> </p>
  </div>
  <ul id="categories">
    <li> <a href="<?php echo $this->createUrl('course'); ?>" class="button"><?php echo t('Courses'); ?></a> </li>
    <li> <a href="<?php echo $this->createUrl('/translate/translate'); ?>" class="button"><?php echo t('Translations &amp; Languages'); ?></a> </li>
    <li> <a href="<?php echo Yii::app()->phpBB->getACPUrl(); ?>" class="button"><?php echo t('phpBB Administration Control Panel'); ?></a> </li>
    <li> <a href="<?php echo $this->createUrl('users'); ?>" class="button"><?php echo t('Users'); ?></a> </li>
    <li> <a href="https://my.hostmysite.com/single.html" class="button"><?php echo t('HostMySite Control Panel'); ?></a> </li>
  </ul>
</div>
