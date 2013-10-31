<?php
Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('index.css'));
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
				<th>
					<?php echo TranslateModule::t('Messages:');?>
				</th>
				<td>
					<?php echo MessageSource::model()->count() . '&nbsp;' . TranslateModule::t('Total'); ?>
				</td>
			</tr>
			<tr>
				<th></th>
				<td>
					<?php echo Category::model()->count() . '&nbsp;' . TranslateModule::t('Categories'); ?>
				</td>
			</tr>
			<tr>
				<th>
					<?php echo TranslateModule::t('Languages:');?>
				</th>
				<td>
					<?php echo AcceptedLanguage::model()->count() . '&nbsp;' . TranslateModule::t('Accepted'); ?>
				</td>
			</tr>
			<tr>
				<th></th>
				<td>
					<?php echo Language::model()->notAccepted()->count() . '&nbsp;' . TranslateModule::t('Other'); ?>
				</td>
			</tr>
			<tr>
				<th>
					<?php echo TranslateModule::t('Translations:');?>
				</th>
				<td>
					<?php echo Message::model()->count() . '&nbsp;' . TranslateModule::t('Total'); ?>
				</td>
			</tr>
			<tr>
				<th></th>
				<td>
					<?php echo ViewSource::model()->count() . '&nbsp;' . TranslateModule::t('Views'); ?>
				</td>
			</tr>
			<tr>
				<th></th>
				<td>
					<?php echo Route::model()->count() . '&nbsp;' . TranslateModule::t('Routes'); ?>
				</td>
			</tr>
		</table>
	</div>
	<?php if(TranslateModule::translator()->canUseGoogleTranslate()): ?>
	<div class="box-sidebar one">
		<h3>
			<?php echo TranslateModule::t('Google Translate'); ?>
		</h3>
		<img id="GoogleTranslateLogo" src="<?php echo $this->getImagesUrl('Google-Translate_Logo.png'); ?>" alt="<?php echo TranslateModule::t('Google Translate'); ?>" />
		<p class="text-center bold">
			<a href="https://developers.google.com/translate/" target="_blank"><?php echo TranslateModule::t('Login'); ?> </a>
		</p>
	</div>
	<?php endif; ?>
</div>
<div class="column-wide">
	<h2 class="flowers">
		<?php echo TranslateModule::t('Components Configuration'); ?>
	</h2>
	<div class="box-white">
		<ul id="configOptions">
			<li>
				<?php echo CHtml::link(TranslateModule::t('Message Categories'), $this->createUrl('category/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Source Messages'), $this->createUrl('messageSource/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Translated Messages'), $this->createUrl('message/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Languages'), $this->createUrl('language/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Routes'), $this->createUrl('route/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Source Views'), $this->createUrl('viewSource/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Translated Views'), $this->createUrl('view/')); ?>
			</li>
		</ul>
	</div>
	<h2 class="flowers">
		<?php echo TranslateModule::t('System Status'); ?>
	</h2>
	<?php 
	$translator = TranslateModule::translator();
	$messageSource = $translator->getMessageSourceComponent();
	$viewSource = $translator->getViewSourceComponent();
	?>
	<div id="systemStatus" class="box-white">
		<table class="systemGrid">
			<tr>
				<th colspan="2" class="center"><?php echo TranslateModule::t('Google Translate'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Configured:'); ?></th>
				<td class="fill translateNoError"><?php echo $translator->canUseGoogleTranslate() ? TranslateModule::t('Yes') : TranslateModule::t('No'); ?></td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('API Key:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">googleApiKey</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill break"><?php echo $translator->googleApiKey; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The API key to use for translating messages with using Google translate.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Enabled:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">autoTranslate</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->autoTranslate ? TranslateModule::t('Yes') : TranslateModule::t('No'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Enables or disables automatic translations using Google translate.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th colspan="2" class="center"><?php echo TranslateModule::t('General'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Language Variable Name:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">languageVarName</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill break"><?php echo $translator->languageVarName; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The name of the request variable specifying the language to translate any request content to.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Language Cookie Expire Time:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">cookieExpire</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->cookieExpire.' '.TranslateModule::t('seconds'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Expire time in seconds of the cookie specifying the client\'s prefered language.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Define a global translate function:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">defineGlobalTranslateFunction</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->defineGlobalTranslateFunction ? TranslateModule::t('Yes') : TranslateModule::t('No'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to define a global function "{t}" to simplify translations in code.', array('{t}' => 't()')); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Use Transactions:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">useTransaction</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->useTransaction ? TranslateModule::t('Yes') : TranslateModule::t('No'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to use database transactions when translating messages.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Use Generic Locales:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">genericLocale</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->genericLocale ? TranslateModule::t('Yes') : TranslateModule::t('No'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to use generic locales. If enabled the local protion of requested languages will be stripped off.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Force Accepted Languages Only:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">forceAcceptedLanguage</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->forceAcceptedLanguage ? TranslateModule::t('Yes') : TranslateModule::t('No');; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to only allow accepted languages. If enabled pages request in a non-accepted langauge will not be translated.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Caching Duration:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">cacheDuration</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->cacheDuration.' '.TranslateModule::t('seconds'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Duration to cache locale display name.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronize Translations:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">synchronizeTranslations</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $translator->synchronizeTranslations ? TranslateModule::t('Yes') : TranslateModule::t('No');; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to synchronize translations. If enabled only one translation will be performed at a time across requests.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Translation Synchronization Lock File Permissions:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">translateSyncLockFilePermissions</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo decoct($translator->translateSyncLockFilePermissions); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Permissions for translation synchronization lock file.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Translation Synchronization Lock File Path:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">translateSyncLockFile</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill break"><?php echo $translator->getTranslateSyncLockFile(); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Name of the message source component.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('View Source Component Name:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">viewSource</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill break"><?php echo $translator->viewSource; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Name of the view source component.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Message Source Component Name:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">messageSource</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill break"><?php echo $translator->messageSource; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Expire time in seconds of the cookie specifying the client\'s prefered language.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th colspan="2" class="center"><?php echo TranslateModule::t('Message Source'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Type:'); ?></th>
				<td class="fill translateNoError"><?php echo get_class($messageSource); ?></td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Language:'); ?></th>
				<td class="fill translateNoError break"><?php echo $messageSource->getLanguage(); ?></td>
			</tr>
			<tr>
				<th colspan="2" class="center"><?php echo TranslateModule::t('View Source'); ?></th>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Type:'); ?></th>
				<td class="fill translateNoError break"><?php echo get_class($viewSource); ?></td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Profiling Enabled:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">enableProfiling</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->enableProfiling ? TranslateModule::t('True') : TranslateModule::t('False'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to profile each view translation.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronize Events:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">synchronizeEvents</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->synchronizeEvents ? TranslateModule::t('True') : TranslateModule::t('False'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to synchronize missing view translation events.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronization Lock File Permissions:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">eventSyncLockFilePermissions</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo decoct($viewSource->eventSyncLockFilePermissions); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Permissions to set for event synchronization lock file.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronization Lock File Path:'); ?></th>
				<td class="fill <?php echo 'translateNoError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">eventSyncLockFile</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill break"><?php echo $viewSource->getEventSyncLockFile(); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Path to the event synchronization lock file.'); ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>
