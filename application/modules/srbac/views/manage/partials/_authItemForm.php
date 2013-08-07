<?php
Yii::app()->clientScript->registerScript('hideEffectSuccess', '$("#messageSuccess").animate({opacity: 0}, 2000).fadeOut(500);', CClientScript::POS_READY);
Yii::app()->clientScript->registerScript('hideEffectError', '$("#messageError").animate({opacity: 0}, 6000).fadeOut(400);', CClientScript::POS_READY);
?>
<div id="authItem-form">
<h2><?php echo $model->getIsNewRecord() ? Yii::t('srbac', 'Create New') : Yii::t('srbac', 'Update'); ?></h2>
<div class="srbacForm">
	<p>
		<?php echo Yii::t('srbac','Fields with {span} are required.', array('{span}' => '<span class="required">*</span>')); ?>
	</p>
	<?php
	echo CHtml::beginForm();
	echo CHtml::errorSummary($model);
	?>

	<div class="simple">
		<?php
		echo CHtml::activeLabelEx($model, 'name');
		echo CHtml::activeTextField(
				$model,
				'name',
				$model->name == $this->getModule()->superUser ? array('size' => 20, 'disabled' => 'disabled') : array('size' => 20)
		);
		?>
	</div>
	<div class="simple">
		<?php
		echo CHtml::activeLabelEx($model, 'type');
		echo CHtml::activeDropDownList(
			$model,
			'type',
			AuthItem::$TYPES,
			$model->name == $this->getModule()->superUser || !$model->getIsNewRecord() ? array('disabled' => 'disabled') : array()
		);
		?>
	</div>
	<div class="simple">
		<?php
		echo CHtml::activeLabelEx($model, 'description');
		echo CHtml::activeTextArea($model, 'description', array('rows' => 3, 'cols' => 20));
		?>
	</div>
	<div class="simple">
		<?php
		echo CHtml::activeLabelEx($model, 'bizrule');
		echo CHtml::activeTextArea($model, 'bizrule', array('rows' => 3, 'cols' => 20));
		?>
	</div>
	<div class="simple">
		<?php
		echo CHtml::activeLabelEx($model, 'data');
		echo CHtml::activeTextField($model, 'data', array('size' => 30));
		?>
	</div>
	<?php echo CHtml::hiddenField('AuthItem[id]', $model->getAttribute('id')); ?>
	<div id="messageSuccess" style="color: red; font-weight: bold; font-size: 14px; text-align: center; position: relative; border: solid black 2px; background-color: #DDDDDD; <?php echo Yii::app()->getUser()->hasFlash('updateSuccess') ? '' : ' display: none;'?>">
		<?php echo Yii::app()->getUser()->getFlash('updateSuccess'); ?>
	</div>
	<div id="messageError" style="color: red; font-weight: bold; font-size: 14px; text-align: center; position: relative; border: solid black 2px; background-color: #DDDDDD; <?php echo Yii::app()->getUser()->hasFlash('updateError') ? '' : ' display: none;'?>">
		<?php echo Yii::app()->getUser()->getFlash('updateError'); ?>
	</div>
	<div class="action">
		<?php
		echo CHtml::ajaxButton(
			Yii::t('srbac', 'Save'),
			$this->createUrl('/srbac/manage/authItem', array('ajax' => 'authItem-form')),
			array(
				'type' => 'PUT',
				'beforeSend' => 'function(){$("#authItem-form").addClass("srbacLoading");}',
				'complete' => 'function(){$("#authItem-form").removeClass("srbacLoading");}',
				'success' => 'function(html){$("#authItem-grid").yiiGridView("update");$("#authItem-form").replaceWith(html);}',
			),
			$model->getIsNewRecord() ? array('style' => 'display: none;', 'id' => 'save') : array('id' => 'save')
		);
		echo CHtml::ajaxButton(
			Yii::t('srbac', 'Create'),
			$this->createUrl('/srbac/manage/authItem', array('ajax' => 'authItem-form')),
			array(
				'type' => 'POST',
				'beforeSend' => 'function(){$("#authItem-form").addClass("srbacLoading");}',
				'complete' => 'function(){$("#authItem-form").removeClass("srbacLoading");}',
				'success' => 'function(html){$("#authItem-grid").yiiGridView("update");$("#authItem-form").replaceWith(html);}',
			),
			$model->getIsNewRecord() ? array('id' => 'create') : array('style' => 'display: none;', 'id' => 'create')
		);
		?>
	</div>
	<div id="mess" class="message" style="visibility: hidden"></div>
	<?php echo CHtml::endForm(); ?>
</div>
</div>

