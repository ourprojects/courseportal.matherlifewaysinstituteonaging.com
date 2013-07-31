<?php $this->breadcrumbs = array('{t}Admin{/t}' => Yii::app()->createUrl('admin'), '{t}Users{/t}'); ?>

<h1>{t}User Table Administration{/t}</h1>
<div id="single-column">
  <?php $this->actionGrid(null, 'user-grid'); ?>
  <br />
  <?php echo CHtml::link('{t}Create New User{/t}', $this->createUrl('view'), array('class' => 'button')); ?> </div>
