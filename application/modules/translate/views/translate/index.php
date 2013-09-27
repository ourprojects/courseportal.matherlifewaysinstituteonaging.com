<?php
Yii::app()->getClientScript()->registerCss($this->getId(), '#statistics th { text-align: right; } #statistics td { text-align: left; } #configOptions li { margin: 10px 2px; }');
?>

<h1>
	<?php echo TranslateModule::t('Translation Management'); ?>
</h1>
<div id="sidebar">
	<div class="box-sidebar one">
		<h3>
			<?php echo TranslateModule::t('Statistics'); ?>
		</h3>
		<table id="statistics">
			<tr>
				<th><?php echo TranslateModule::t('Messages:');?></th>
				<td><?php echo MessageSource::model()->count() . '&nbsp;' . TranslateModule::t('Total'); ?></td>
			</tr>
			<tr>
				<th></th>
				<td><?php echo Category::model()->count() . '&nbsp;' . TranslateModule::t('Categories'); ?></td>
			</tr>
			<tr>
				<th><?php echo TranslateModule::t('Languages:');?></th>
				<td><?php echo AcceptedLanguage::model()->count() . '&nbsp;' . TranslateModule::t('Accepted'); ?></td>
			</tr>
			<tr>
				<th></th>
				<td><?php echo Language::model()->notAccepted()->count() . '&nbsp;' . TranslateModule::t('Other'); ?></td>
			</tr>
			<tr>
				<th><?php echo TranslateModule::t('Translations:');?></th>
				<td><?php echo Message::model()->count() . '&nbsp;' . TranslateModule::t('Total'); ?></td>
			</tr>
			<tr>
				<th></th>
				<td><?php echo ViewSource::model()->count() . '&nbsp;' . TranslateModule::t('Views'); ?></td>
			</tr>
			<tr>
				<th></th>
				<td><?php echo Route::model()->count() . '&nbsp;' . TranslateModule::t('Routes'); ?></td>
			</tr>
		</table>
	</div>
	<div class="box-sidebar one">
		<h3><?php echo TranslateModule::t('Translation Management'); ?></h3>
		<p class="text-center bold">
			<a href="https://developers.google.com/translate/" target="_blank"><?php echo TranslateModule::t('Google Translate API - Login'); ?></a>
		</p>
		<p>
			<img class="block center" src="<?php echo $this->getImagesUrl('googledeveloperslogo.png', $this->getId()); ?>" alt="Google Developers">
		</p>
		<p>
			<?php echo TranslateModule::t('With Google Translate, you can dynamically translate text between thousands of language pairs. The Google Translate API lets websites and programs integrate with Google Translate programmatically. This Google Translate API widget is available as a paid service. See the sidebar for login instructions and access.'); ?>
		</p>
		<p class="text-center bold">
			<a href="https://translate.google.com/manager/website/" target="_blank"><?php echo TranslateModule::t('Google Website Translator Gadget'); ?></a>
		</p>
	</div>
</div>
<div class="column-wide">
	<h2 class="flowers"><?php echo TranslateModule::t('Translation Management'); ?></h2>
	<p>
	<?php echo TranslateModule::t('Please use this interface to administer our Google Translate API subscription.'); ?>
	</p>
	<div class="box-white">
		<h2>
			<?php echo TranslateModule::t('Select the area below you would like to configure:'); ?>
		</h2>
		<ul id="configOptions">
			<li><?php echo CHtml::link(TranslateModule::t('Message Categories'), $this->createUrl('category/')); ?></li>
			<li><?php echo CHtml::link(TranslateModule::t('Source Messages'), $this->createUrl('messageSource/')); ?></li>
			<li><?php echo CHtml::link(TranslateModule::t('Translated Messages'), $this->createUrl('message/')); ?></li>
			<li><?php echo CHtml::link(TranslateModule::t('Languages'), $this->createUrl('language/')); ?></li>
			<li><?php echo CHtml::link(TranslateModule::t('Routes'), $this->createUrl('route/')); ?></li>
			<li><?php echo CHtml::link(TranslateModule::t('Source Views'), $this->createUrl('viewSource/')); ?></li>
			<li><?php echo CHtml::link(TranslateModule::t('Translated Views'), $this->createUrl('view/')); ?></li>
		</ul>
	</div>
</div>
