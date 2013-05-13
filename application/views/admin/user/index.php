<?php $this->breadcrumbs = array(t('Admin') => Yii::app()->createUrl('admin'), t('Users')); ?>
<h1>{t}Users{/t}</h1>
<div id="single-column">
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'user-grid',
	'dataProvider' => $searchModel->search(),
	'filter' => $searchModel,
	'columns' => array(
        'id', 'group', 'email', 'name', 'firstname', 'lastname', 'location', 'country', 'created', 'last_login', 'last_ip',
		array(
				'name' => 'activated',
				'value' => '$data->activated === null ? "No" : $data->activated->date'
		),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{delete}',
        	'viewButtonLabel' => TranslateModule::t('View User Details'),
        	'viewButtonUrl' => 'Yii::app()->getController()->createUrl("userView", array("id" => $data->id))',
            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("userDelete", array("id" => $data->id))',
        	'deleteConfirmation' => t('Are you sure you would like to delete this user? All of this user\'s data will be lost forever.')
        )
	),
)); ?>
</div>