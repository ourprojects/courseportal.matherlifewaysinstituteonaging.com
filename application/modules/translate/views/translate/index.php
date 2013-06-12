<h1><?php echo TranslateModule::t('Translation Management'); ?></h1>

<div id="sidebar"> 
  <div class="box-sidebar one">
  	<h3><?php echo TranslateModule::t('Configure'); ?></h3>
	<ul id="config_options">
		<li><?php echo CHtml::link(TranslateModule::t('Message Categories'), $this->createUrl('category/')); ?></li>
		<li><?php echo CHtml::link(TranslateModule::t('Source Messages'), $this->createUrl('messageSource/')); ?></li>
		<li><?php echo CHtml::link(TranslateModule::t('Translations'), $this->createUrl('message/')); ?></li>
		<li><?php echo CHtml::link(TranslateModule::t('Translated Views'), $this->createUrl('view/')); ?></li>
		<li><?php echo CHtml::link(TranslateModule::t('Languages'), $this->createUrl('language/')); ?></li>
	</ul>
  </div>
</div>
<div class="column-wide">
  <h2><?php echo TranslateModule::t('Statistics'); ?></h2>
  <br />
  <div class="box-white">
  	<table>
  		<tr>
  			<th><?php echo 'Messages';?></th>
  			<td><?php echo MessageSource::model()->count(); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo 'Message Categories';?></th>
  			<td><?php echo Category::model()->count(); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo 'Message Translations';?></th>
  			<td><?php echo Message::model()->count(); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo 'Accepted Languages';?></th>
  			<td><?php echo AcceptedLanguage::model()->count(); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo 'Other Languages With Translations';?></th>
  			<td><?php echo Message::model()->notAcceptedLanguage()->count(array('select' => '1', 'group' => 'language')); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo 'View Translations';?></th>
  			<td><?php echo ViewSource::model()->count(); ?></td>
  		</tr>
  		<tr>
  			<th><?php echo 'Routes With Translations';?></th>
  			<td><?php echo Route::model()->count(); ?></td>
  		</tr>
  	</table>
  </div>
</div>