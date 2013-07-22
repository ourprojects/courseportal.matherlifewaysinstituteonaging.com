<?php $this->breadcrumbs = array('{t}Admin{/t}' => Yii::app()->createUrl('admin'), '{t}Users{/t}'); ?>
<h1>{t}Users{/t}</h1>
<div id="single-column">
<?php $this->renderPartial('_grid', array('model' => $searchModel)); ?>
</div>