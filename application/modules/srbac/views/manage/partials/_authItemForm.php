<?php
Yii::app()->clientScript->registerScript('hideEffectSuccess', '$("#'.$formId.'_messageSuccess").animate({opacity: 0}, 2000).fadeOut(500);', CClientScript::POS_READY);
Yii::app()->clientScript->registerScript('hideEffectError', '$("#'.$formId.'_messageError").animate({opacity: 0}, 6000).fadeOut(400);', CClientScript::POS_READY);
?>
<div id="<?php echo $formId; ?>">
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
					$model->name == $this->getModule()->superUser || $model->generated ? array('size' => 20, 'disabled' => 'disabled') : array('size' => 20)
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
		<?php echo CHtml::activeHiddenField($model, 'id', array('value' => $model->getAttribute('id'))); ?>
		<div id="<?php echo $formId; ?>_messageSuccess" style="color: green; font-weight: bold; font-size: 14px; text-align: center; position: relative; border: solid black 2px; background-color: #DDDDDD; <?php echo Yii::app()->getUser()->hasFlash('updateSuccess') ? '' : ' display: none;'?>">
			<?php echo Yii::app()->getUser()->getFlash('updateSuccess'); ?>
		</div>
		<div id="<?php echo $formId; ?>_messageError" style="color: red; font-weight: bold; font-size: 14px; text-align: center; position: relative; border: solid black 2px; background-color: #DDDDDD; <?php echo Yii::app()->getUser()->hasFlash('updateError') ? '' : ' display: none;'?>">
			<?php echo Yii::app()->getUser()->getFlash('updateError'); ?>
		</div>
		<div class="action">
			<?php
			echo CHtml::ajaxButton(
				Yii::t('srbac', 'Save'),
				$this->createUrl('/srbac/manage/authItem', array('ajax' => $formId)),
				array(
					'type' => 'PUT',
					'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
					'complete' => 'function(){$("#'.$formId.'").removeClass("srbacLoading");}',
					'success' => 'function(html){$("#'.$gridId.'").yiiGridView("update");$("#'.$formId.'").replaceWith(html);}',
				),
				$model->getIsNewRecord() ? array('style' => 'display: none;', 'id' => $formId.'_save') : array('id' => $formId.'_save')
			);
			echo CHtml::ajaxButton(
				Yii::t('srbac', 'Create'),
				$this->createUrl('/srbac/manage/authItem', array('ajax' => $formId)),
				array(
					'type' => 'POST',
					'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
					'complete' => 'function(){$("#'.$formId.'").removeClass("srbacLoading");}',
					'success' => 'function(html){$("#'.$gridId.'").yiiGridView("update");$("#'.$formId.'").replaceWith(html);}',
				),
				$model->getIsNewRecord() ? array('id' => $formId.'_create') : array('style' => 'display: none;', 'id' => $formId.'_create')
			);
			?>
		</div>
		<?php echo CHtml::endForm(); ?>
	</div>
</div>
