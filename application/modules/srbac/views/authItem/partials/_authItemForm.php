<?php
if(!isset($updateGridIds))
{
	$updateGridIds = array();
}
else if(!is_array($updateGridIds))
{
	$updateGridIds = array($updateGridIds);
}
$gridUpdateJs = $this->generateGridUpdateJS($updateGridIds);
?>
<div id="<?php echo $formId; ?>" <?php if($model->getIsNewRecord()) echo 'style="display: none;"'?>>
	<h2><?php echo $model->getIsNewRecord() ? SrbacModule::t('Create New') : SrbacModule::t('Update'); ?></h2>
	<div class="srbacForm">
		<p class="note">
			<?php echo SrbacModule::t('Fields with {span} are required.', array('{span}' => '<span class="required">*</span>')); ?>
		</p>
		<?php
		$form = $this->beginWidget(
			'ext.EActiveForm.EActiveForm',
			array(
				'id' => $formId.'_form',
				'inputIdPrefix' => true
			)
		);
		?>
		<?php echo $form->errorSummary($model); ?>
		<div class="simple">
			<?php
			echo $form->labelEx($model, 'name');
			if($model->getIsSuperUser() || $model->generated)
			{
				echo $form->textField($model, 'name', array('size' => 20, 'disabled' => 'disabled'));
				echo $form->hiddenField($model, 'name');
			}
			else
			{
				echo $form->textField($model, 'name', array('size' => 20));
			}
			echo $form->error($model, 'name');
			?>
		</div>
		<div class="simple">
			<?php
			echo $form->labelEx($model, 'type');
			echo $form->dropDownList(
				$model,
				'type',
				AuthItem::$TYPES,
				$model->getIsSuperUser() || !$model->getIsNewRecord() ? array('disabled' => 'disabled') : array()
			);
			echo $form->error($model, 'type');
			?>
		</div>
		<div class="simple">
			<?php
			echo $form->labelEx($model, 'description');
			echo $form->textArea($model, 'description', array('rows' => 3, 'cols' => 20));
			echo $form->error($model, 'description');
			?>
		</div>
		<div class="simple">
			<?php
			echo $form->labelEx($model, 'bizrule');
			echo $form->textArea($model, 'bizrule', array('rows' => 3, 'cols' => 20));
			echo $form->error($model, 'bizrule');
			?>
		</div>
		<div class="simple">
			<?php
			echo $form->labelEx($model, 'data');
			echo $form->textField($model, 'data', array('size' => 30));
			echo $form->error($model, 'data');
			?>
		</div>
		<?php
		echo $form->hiddenField($model, 'id');
		echo $form->hiddenField($model, 'generated');
		?>
		<div class="action">
			<?php
			echo CHtml::ajaxButton(
				SrbacModule::t('Save'),
				$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem/authItem', array('ajax' => $formId)),
				array(
					'type' => 'PUT',
					'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
					'success' => 'function(html){$("#'.$formId.'").replaceWith(html);'.$gridUpdateJs.'}',
				),
				$model->getIsNewRecord() ? array('style' => 'display: none;', 'id' => $formId.'_save') : array('id' => $formId.'_save')
			);
			echo CHtml::ajaxButton(
				SrbacModule::t('Create'),
				$this->createUrl('/'.SrbacUtilities::SRBAC_MODULE_NAME.'/authItem/authItem', array('ajax' => $formId)),
				array(
					'type' => 'POST',
					'beforeSend' => 'function(){$("#'.$formId.'").addClass("srbacLoading");}',
					'success' => 'function(html){$("#'.$formId.'").replaceWith(html);$("#'.$formId.'").css("display", "block");'.$gridUpdateJs.'}',
					'error' => 'function(html){$("#'.$formId.'").removeClass("srbacLoading");}'
				),
				$model->getIsNewRecord() ? array('id' => $formId.'_create') : array('style' => 'display: none;', 'id' => $formId.'_create')
			);
			?>
		</div>
		<?php $this->endWidget(); ?>
		<div class="message" id="loadMessage<?php echo $formId; ?>">
			&nbsp;<?php echo Yii::app()->getUser()->getFlash($this->getModule()->flashKey, null, true); ?>
		</div>
	</div>
</div>
