<?php
/**
* obsoleteRemoved.php
*
* @author Spyros Soldatos <spyros@valor.gr>
* @link http://code.google.com/p/srbac/
*/

/**
* The result of the obsolete authItems remove.
* Alist of authItems removed and not removed.
*
* @author Spyros Soldatos <spyros@valor.gr>
* @package srbac.views.authitem.manage
* @since 1.1.1
*/
?>
<?php if($removed):?>
<table class="srbacDataGrid" style="width: 50%">
	<tr>
		<th>
			<?php echo "<b>".Yii::t("srbac", "authItems removed")."</b>"?>:
		</th>
	</tr>
	<tr>
		<td>
		<?php
		foreach ($removed as $item)
		{
			echo "&emsp;".$item."<br >";
		}
		?>
		</td>
	</tr>

</table>
<?php endif; ?>
<?php if($notRemoved): ?>
<table class="srbacDataGrid" style="width: 50%">
	<tr>
		<th style="background-color: red; color: white">
			<?php echo "</b>".Yii::t("srbac", "authItems not removed")."</b>"?>:
		</th>
	</tr>
	<tr>
		<td>
		<?php
		foreach ($notRemoved as $item)
		{
			echo "&emsp;".$item."<br >";
		}
		?>
		</td>
	</tr>

</table>
<?php endif; ?>
