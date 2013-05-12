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
  <div class="box-white">
    <h5><?php echo t('Courses'); ?></h5>
    <p><?php echo t('Online courses at Mather LifeWays Institute on Aging are designed from the beginning to give you the tools to succeed, with all the courses information and materials available to you from within the course portal. Every courses is created based on a syllabus and presented online using an ordered, easy-to-follow framework.'); ?></p>
    <p id="categories"><a href="<?php echo $this->createUrl('course'); ?>" class="button"><?php echo t('Courses'); ?></a></p>
  </div>
  <div class="box-white">
    <h5><?php echo t('Translations &amp; Languaegs'); ?></h5>
    <p><?php echo t('With Google Translate, you can dynamically translate text between thousands of language pairs. The Google Translate API lets websites and programs integrate with Google Translate programmatically. Google Translate API is available as a paid service.'); ?></p>
    <p id="categories"> <a href="<?php echo $this->createUrl('/translate/translate'); ?>" class="button"><?php echo t('Translations &amp; Languages'); ?></a> </p>
  </div>
  <div class="box-white">
    <h5><?php echo t('phpBB 3.0.11'); ?></h5>
    <p><?php echo t('phpBB is a free flat-forum bulletin board software solution that can be used to stay in touch with a group of people or can power your entire website. With an extensive database of user-created modifications and styles database containing hundreds of style and image packages to customise your board, you can create a very unique forum in minutes.'); ?></p>
    <p id="categories"> <a href="<?php echo Yii::app()->phpBB->getACPUrl(); ?>" class="button"><?php echo t('phpBB Administration Control Panel'); ?></a> </p>
  </div>
  <div class="box-white">
    <h5><?php echo t('Course Portal Users'); ?></h5>
    <p><?php echo t('Administer and configure the User table. Administrators have access and permissions to add, edit, delete and re-sort users. Several tables are assocaited with each other to produce the layout. Export the table to a .CSV file, by using the buttons in the main container header.'); ?></p>
    <p id="categories"> <a href="<?php echo $this->createUrl('users'); ?>" class="button"><?php echo t('Users'); ?></a> </p>
  </div>
  <div class="box-white">
    <h5><?php echo t('HostMySite cPanel'); ?></h5>
    <p><?php echo t('HostMySite is a division of Hosting.com, a leader in enterprise hosting solutions such as Cloud Hosting, Dedicated Hosting, Disaster Recovery, and Business Continuity Services. Hosting.com owns and operates its own datacenters and networks, employs more than 325 employees, and has been financially stable and profitable since its inception in 1997. Our passion for customer service and our carrier-class resources and facilities are what enable us to offer enterprise class service at affordable small business prices on HostMySite.'); ?></p>
    <p id="categories"> <a href="https://my.hostmysite.com/single.html" class="button"><?php echo t('HostMySite Control Panel'); ?></a> </p>
  </div>
</div>
