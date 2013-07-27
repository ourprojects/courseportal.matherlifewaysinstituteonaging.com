<?php
/**
 * admin.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * It's not used anymore
 * Replaced by manage/manage
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem
 * @since 1.0.0
 * @obsolete
 */
?>
<h2>
	<?php echo Yii::t('srbac','Managing AuthItem')?>
</h2>

<div class="actionBar">
	[
	<?php echo SHtml::link(Yii::t('srbac','AuthItem List'),array('list')); ?>
	] [
	<?php echo SHtml::link(Yii::t('srbac','New AuthItem'),array('create')); ?>
	]
</div>

<table class="srbacDataGrid">
	<tr>
		<th><?php echo $sort->link('name'); ?></th>
		<th><?php echo $sort->link('type'); ?></th>
		<th><?php echo Yii::t('srbac','Actions') ?></th>
	</tr>
	<?php foreach($models as $n=>$model): ?>
	<tr class="<?php echo $n%2?'even':'odd';?>">
		<td><?php echo SHtml::link($model->name,array('show','id'=>$model->name)); ?>
		</td>
		<td><?php echo SHtml::encode(AuthItem::$TYPES[$model->type]); ?></td>
		<td><?php echo SHtml::link(Yii::t('srbac','Update'),array('update','id'=>$model->name)); ?>
			<?php if ($model->name !=  Yii::app()->getModule('srbac')->superUser) { ?>
			<?php echo SHtml::linkButton(Yii::t('srbac','Delete'),array(
					'submit'=>'',
					'params'=>array('command'=>'delete','id'=>$model->name),
					'confirm'=>"Are you sure to delete #{$model->name}?")); ?> <?php } ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<br />
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>