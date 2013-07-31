<?php
Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('index.css')); 
$this->breadcrumbs = array('{t}Admin{/t}');
?>

<div class="small-masthead" style="background-image: url(<?php echo $this->getImagesUrl('159325162.png'); ?>);">
  <h1 class="bottom">{t}Administrator{/t}</h1>
</div>
<div class="column-wide">
  <h2 class="flowers">{t}Administrator{/t}</h2>
  <p> {t}This Administrator panel gives users within the group "Administrator" the ability to manage this course portal and various interfaces via these listed panels:{/t}</p>
  <h4>{t}Controls and Configurations{/t}</h4>
  <div class="box-white">
    <h5>{t}API Keys{/t}</h5>
    <p>{t}An application programming interface (API) is a protocol intended to be used as an interface by software components to communicate with each other. An API is a library that may include specification for routines, data structures, object classes, and variables.{/t}</p>
    <p id="categories"><a href="<?php echo $this->createUrl('/admin/apiKey'); ?>" class="button">{t}API Keys{/t}</a> </p>
  </div>
  <div class="box-white">
    <h5>{t}Courses{/t}</h5>
    <p>{t}Mather LifeWays Institute on Aging online course portal provides web-based training and education for those who provide services to older adults. Courses target Nurses, CNAs, Social Workers, Geriatric Professionals, professional and non-professional caregivers. {/t}</p>
    <p id="categories"><a href="<?php echo $this->createUrl('/admin/course'); ?>" class="button">{t}Courses{/t}</a> </p>
  </div>
  <div class="box-white">
    <h5>{t}Translation &amp; Languages{/t}</h5>
    <p>{t}With Google Translate, you can dynamically translate text between thousands of language pairs. The Google Translate API lets websites and programs integrate with Google Translate programmatically. Google Translate API is available as a paid service.{/t}</p>
    <p id="categories"> <a href="<?php echo $this->createUrl('/translate/translate'); ?>" class="button">{t}Translations &amp; Languages{/t}</a> </p>
  </div>
  <div class="box-white">
    <h5>{t}phpBB{/t}</h5>
    <p>{t}phpBB is a free flat-forum bulletin board software solution that can be used to stay in touch with a group of people or can power your entire website. With an extensive database of user-created modifications and styles database containing hundreds of style and image packages to customize your board, you can create a very unique forum in minutes.{/t}</p>
    <p id="categories"> <a href="<?php echo Yii::app()->getComponent('phpBB')->getACPUrl(); ?>" class="button">{t}phpBB Administration Control Panel{/t}</a> </p>
  </div>
  <div class="box-white">
    <h5>{t}Course Portal User Table{/t}</h5>
    <p>{t}User registration table records all events and user registration and profile data text input fields. Administrators have access to this table and permissions to edit, add, remove (delete) profiles.{/t}</p>
    <p id="categories"> <a href="<?php echo $this->createUrl('/admin/user'); ?>" class="button">{t}Users{/t}</a> </p>
  </div>
  <div class="box-white">
    <h5>{t}HostMySite.com cPanel{/t}</h5>
    <p>{t}HostMySite is a division of Hosting.com, a leader in enterprise hosting solutions such as Cloud Hosting, Dedicated Hosting, Disaster Recovery, and Business Continuity Services. Hosting.com owns and operates its own data centers and networks, employs more than 325 employees, and has been financially stable and profitable since its inception in 1997. Our passion for customer service and our carrier-class resources and facilities are what enable us to offer enterprise class service at affordable small business prices on HostMySite.{/t}</p>
    <p id="categories"> <a href="https://my.hostmysite.com/single.html" class="button">{t}HostMySite Control Panel{/t}</a> </p>
  </div>
</div>
