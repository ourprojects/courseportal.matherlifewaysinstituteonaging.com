<?php $this->breadcrumbs = array(t('Admin')); ?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('159325162r.jpeg'); ?>);">
  <h1 class="bottom"><?php echo t('Administrator'); ?></h1>
</div>
<div id="sidebar"> 
  
  <!-- sidebar #1 here -->
  
  <div class="box-sidebar one">
    <h3>Administrator Login</h3>
    <p>Please be careful! Changes here effect the entire site!</p>
  </div>
  
  <!-- sidebar #2 here -->
  
  <div class="box-sidebar one">
    <h3>Planned Configurations</h3>
    <p>We are planning to configure and sync the authentication process for our course portal login/registration and phpbb.</p>
    <p>We will also be cleaning-up the translation system soon too.</p>
  </div>
  
  <!-- sidebar #3 here -->
  
  <div class="box-sidebar one">
    <h3>RSS</h3>
    <p>RSS = Real Simple Syndication; we are planning to add a RSS config link / tool here.</p>
  </div>
  
  <!-- need this final closing div for 'sidebar' --> 
</div>
<div class="column-wide">
  <h2 class="flowers"><?php echo t('Administrator Controls / Site Configuration'); ?></h2>
  <br />
  <p><?php echo t('These admin controls are for editing the various areas of this course portal. Changes here can be permanent. Please be careful when making changes here. If you need help or are confused, please contact the Program Director.'); ?></p>
  <br />
  <div class="box-white">
    <h4><?php echo t('Configurations'); ?></h4>
    <p><?php echo t('Please select the area below that you would like to configure.'); ?></p>
    <hr />
    <h2><?php echo CHtml::link(t('API Keys'), $this->createUrl('apiKeys')); ?></h2>
    <p><?php echo t('Keys to sync our web service with Plan B, Chicago: Shopping cart for MLIA site.'); ?></p>
    <br />
    <h2><?php echo CHtml::link(t('Courses'), $this->createUrl('course')); ?></h2>
    <p><?php echo t('Courses developed by MLIA, Rush, Alzheimer\'s Association'); ?></p>
    <br />
    <h2><?php echo CHtml::link(t('Translations And Languages'), $this->createUrl('/translate/translate')); ?></h2>
    <p><?php echo t('Google Translate API Project'); ?></p>
    <br />
    <h2><?php echo CHtml::link('phpBB', Yii::app()->phpBB->getForumUrl()); ?></h2>
    <p><?php echo t('Open Source Bulletin Board Software'); ?></p>
    <br />
    <h2><?php echo CHtml::link(t('Users'), $this->createUrl('users')); ?></h2>
    <p><?php echo t('Course Portal Users'); ?></p>
    <br />
    <h2><?php echo CHtml::link(t('HostMySite CPanel Login'), 'https://my.hostmysite.com/single.html'); ?></h2>
    <p><?php echo t('HostMySite CPanel Login'); ?></p>
    <br />
  </div>
</div>
