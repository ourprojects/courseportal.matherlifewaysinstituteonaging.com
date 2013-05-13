<?php
Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('index.css')); 
$this->breadcrumbs = array(t('Admin'));
?>
<!-- NEED TO FIX THE REST, PLEASE DON'T CHANGE LAYOUT YET -->

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('159325162.png'); ?>);">
  <h1 class="bottom">{t}Administrator{/t}</h1>
</div>
<div class="column-wide">
  <h2 class="flowers">{t}Administrator{/t}</h2>
  <hr />
  <h4>{t}Controls and Configurations{/t}</h4>
  <div class="box-white">
    <h5>{t}API Keys{/t}</h5>
    <p>{t}An application programming interface (API) is a protocol intended to be used as an interface by software components to communicate with each other. An API is a library that may include specification for routines, data structures, object classes, and variables.{/t}</p>
    <p id="categories"><a href="<?php echo $this->createUrl('apiKeys'); ?>" class="button">{t}API Keys{/t}</a> </p>
  </div>
  <ul id="categories">
    <li> <a href="<?php echo $this->createUrl('course'); ?>" class="button">{t}Courses{/t}</a> </li>
    <li> <a href="<?php echo $this->createUrl('/translate/translate'); ?>" class="button">{t}Translations &amp; Languages{/t}</a> </li>
    <li> <a href="<?php echo Yii::app()->phpBB->getACPUrl(); ?>" class="button">{t}phpBB Administration Control Panel{/t}</a> </li>
    <li> <a href="<?php echo $this->createUrl('users'); ?>" class="button">{t}Users{/t}</a> </li>
    <li> <a href="https://my.hostmysite.com/single.html" class="button">{t}HostMySite Control Panel{/t}</a> </li>
  </ul>
</div>
