<?php
$action = $course->getIsNewRecord() ? '{t}Create{/t}' : '{t}Update{/t}';

$this->breadcrumbs = array(
		'{t}Admin{/t}' => $this->createUrl('admin'), 
		'{t}Courses{/t}' => $this->createUrl('/admin/course'), 
		t("Course $action")
);
?>
<h1><?php echo t("$action Course") . ($course->getIsNewRecord() ? '' : " - $course->title"); ?></h1>
<div id="single-column">
	<div id="course" class="box-white">
		<div id="course-form" class="form">
			<?php 
			$form = $this->beginWidget('CActiveForm', 
					array(
						'id' => 'course-form',
						'enableAjaxValidation' => true,
						'enableClientValidation' => true,
					)
			);
			?>
			<p class="note">
				<?php echo t('Fields with {required} are required.', array('{required}' => '<span class="required">*</span>')); ?>
			</p>
			<div class="row">
		        <?php echo $form->labelEx($course, 'rank'); ?>
		        <?php echo $form->numberField($course, 'rank'); ?>
		        <?php echo $form->error($course,'rank'); ?>
		    </div>
		    <div class="row">
		        <?php echo $form->labelEx($course, 'name'); ?>
		        <?php echo $form->textField($course, 'name'); ?>
		        <?php echo $form->error($course,'name'); ?>
		    </div>
		    <div class="row">
		        <?php echo $form->labelEx($course, 'title'); ?>
		        <?php echo $form->textField($course, 'title'); ?>
		        <?php echo $form->error($course,'title'); ?>
		    </div>
		    <div class="row">
		        <?php echo $form->labelEx($course, 'description'); ?>
		        <?php echo $form->textArea($course, 'description'); ?>
		        <?php echo $form->error($course,'description'); ?>
		    </div>
			<div class="row buttons">
				<?php echo CHtml::submitButton(t($action)); ?>
			</div>
			<?php $this->endWidget(); ?>
		</div>
		<?php if(!$course->getIsNewRecord()): ?>
		<div id="objectives">
			<h2>{t}Objectives{/t}</h2>
			<?php 
			$source = CourseObjective::model()->findAll('course_id=:course_id', array(':course_id' => $course->id));
			$this->widget('zii.widgets.grid.CGridView', array(
				'id' => 'course-objective-grid',
				'dataProvider' => $objectiveSearchModel->search(),
				'filter' => $objectiveSearchModel,
				'columns' => array(
			        array(
			            'name' => 'rank',
			            'filter' => CHtml::listData($source, 'rank', 'rank'),
			        ),
			        array(
			            'name' => 'text',
			            'filter' => CHtml::listData($source, 'text', 'text'),
			        ),
			        array(
			            'class' => 'CButtonColumn',
			            'template' => '{delete}',
			            'deleteButtonUrl' => 'Yii::app()->getController()->createUrl("objectiveDelete", array("id" => $data->id))',
			        )
				),
			)); ?>
			<h2>{t}Create New Objective{/t}</h2>
			<div class="form">
				<?php $form = $this->beginWidget('CActiveForm', array(
						'id' => 'course-objective-form',
						'enableAjaxValidation' => true,
						'enableClientValidation' => true,
			));
				
				echo $form->errorSummary($courseObjective); ?>
				<div class="row">
				<?php
					echo $form->labelEx($courseObjective, 'rank');
					echo $form->numberField($courseObjective, 'rank');
					echo $form->error($courseObjective, 'rank');
				?>
				</div>
				<div class="row">
				<?php
					echo $form->labelEx($courseObjective, 'text');
					echo $form->textField($courseObjective, 'text');
					echo $form->error($courseObjective, 'text');
				?>
				</div>
				<div class="row submit">
					<?php echo CHtml::submitButton('{t}Add Objective{/t}'); ?>
				</div>
				<?php $this->endWidget(); ?>
			</div>
		</div>
	</div>
	<div id="users" class="box-white">
	<h2>{t}Registered Users{/t}</h2>
	<?php $this->actionGrid($course->id, 'user-grid'); ?>
	<?php endif; ?>
	</div>
</div>