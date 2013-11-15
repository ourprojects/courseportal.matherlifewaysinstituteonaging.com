<?php
Yii::app()->getClientScript()->registerCssFile($this->getStylesUrl('index.css'));
try
{
	$translator = TranslateModule::translator();
}
catch(Exception $e){}
try
{
	if(isset($translator))
	{
		$messageSource = $translator->getMessageSourceComponent();
	}
}
catch(Exception $e){}
try
{
	if(isset($translator))
	{
		$viewSource = $translator->getViewSourceComponent();
	}
}
catch(Exception $e){}
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
			<?php if(isset($messageSource) && $messageSource->getIsInstalled()): ?>
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
			<?php if(isset($viewSource) && $viewSource->getIsInstalled()): ?>
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
			<?php else: ?>
			<tr>
				<th></th>
				<td>
					<?php echo TranslateModule::t('View statistics not available. The view source is not installed.'); ?>
				</td>
			</tr>
			<?php endif; ?>
			<?php else: ?>
			<tr>
				<th></th>
				<td>
					<?php echo TranslateModule::t('Not available. The system is not installed.'); ?>
				</td>
			</tr>
			<?php endif; ?>
		</table>
	</div>
	<?php if(isset($translator) && $translator->canUseGoogleTranslate()): ?>
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
		<?php if(isset($messageSource) && $messageSource->getIsInstalled()): ?>
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
		<?php if(isset($viewSource) && $viewSource->getIsInstalled()): ?>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Routes'), $this->createUrl('route/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Source Views'), $this->createUrl('viewSource/')); ?>
			</li>
			<li>
				<?php echo CHtml::link(TranslateModule::t('Translated Views'), $this->createUrl('view/')); ?>
			</li>
		<?php else: ?>
			<li><?php echo TranslateModule::t('View components not available. View source is not installed.'); ?></li>
		<?php endif; ?>
		<?php else: ?>
			<li><?php echo TranslateModule::t('Not available. The system is not installed.'); ?></li>
		<?php endif; ?>
		</ul>
	</div>
	<h2 class="flowers">
		<?php echo TranslateModule::t('System Status'); ?>
	</h2>
	<div id="systemStatus" class="box-white">
		<table class="systemGrid">
			<!-- General System Information -->
			<tr>
				<th colspan="2" class="center"><?php echo TranslateModule::t('General'); ?></th>
			</tr>
			<?php if(!isset($translator)): ?>
			<tr>
				<th colspan="2" class="fill translateError"><?php echo TranslateModule::t('The translation component named "{name}" could not be found. Please check your application\'s configuration.', array('{name}' => TranslateModule::$translatorComponentName)); ?></th>
			</tr>
			<?php else: ?>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Language Variable Name:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('languageVarName'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('The name of the request variable specifying the language to translate content to.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Language Cookie Expire Time:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('cookieExpire'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Expire time in seconds of the cookie specifying the client\'s preferred language.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Define a global translate function:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('defineGlobalTranslateFunction'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Whether to define a global function "{t}" to help simplify translating messages.', array('{t}' => 't()')); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Use Transactions:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('useTransaction'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Use Generic Locales:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('genericLocale'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Whether to use generic locales. If enabled the locale protion of requested languages will be stripped off and only the generic language code will be considered.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Force Accepted Languages Only:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('forceAcceptedLanguage'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Whether to only allow accepted languages. If enabled pages requested in a non-accepted language will not be translated.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Caching Duration:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('cacheDuration'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Duration to cache locale display names.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('View Source Component Name:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('viewSource'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Message Source Component Name:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('messageSource'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Name of the message source component.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<!-- Google Translate Information -->
			<tr>
				<th class="right"><?php echo TranslateModule::t('Google Translate API Key:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('googleApiKey'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : ($translator->autoTranslate ? 'translateError' : 'translateWarning'); ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('The API key to use for translating messages using Google Translate.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t($translator->autoTranslate ? 'Error:' : 'Warning:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck).($translator->autoTranslate ? '' : ' - This is only a warning because auto translate is disabled making a Google API key unecessary.'); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Google Translate Enabled:'); ?></th>
				<?php $settingCheck = $translator->checkSetting('autoTranslate'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Whether to try to automatically translate messages using Google translate.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<!-- Message Source Information -->
			<tr>
				<th colspan="2" class="center"><?php echo TranslateModule::t('Message Source'); ?></th>
			</tr>
			<?php if(!isset($messageSource)): ?>
			<tr>
				<th colspan="2" class="fill translateError"><?php echo TranslateModule::t('The message source component named "{name}" could not be found. Please check your application\'s configuration.', array('{name}' => $translator->messageSource)); ?></th>
			</tr>
			<?php else: ?>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Installed:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('isInstalled'); ?>
				<td class="fill break"><?php echo $messageSource->getIsInstalled() ? TranslateModule::t('Yes') : TranslateModule::t('No'); ?></td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Type:'); ?></th>
				<td class="fill"><?php echo get_class($messageSource); ?></td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Source Message Table:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('sourceMessageTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">sourceMessageTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->sourceMessageTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing source messages.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Translated Message Table:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('translatedMessageTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">translatedMessageTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->translatedMessageTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing message translations.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Language Table:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('languageTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">languageTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->languageTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing languages. This table includes the languages of all source messages and translations ever handled by the system.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Accepted Language Table:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('acceptedLanguageTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">acceptedLanguageTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->acceptedLanguageTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing accepted languages.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Category Table:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('categoryTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">categoryTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->language; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing message categories.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Category Message Table:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('categoryMessageTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">categoryMessageTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->categoryMessageTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing the links between source messages and message categories.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Default Message Category:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('messageCategory'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">messageCategory</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->messageCategory; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The default category to assign messages when a category is not specified via the translate function.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Database Connection ID:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('connectionID'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">connectionID</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->connectionID; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The name of the database connection component.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Caching Duration:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('cachingDuration'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">cachingDuration</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->cachingDuration; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The time in seconds to cache translated messages in the caching component.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Cache Component:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('cacheID'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateWarning'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">cacheID</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->cacheID; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The name of the caching component for caching message translations.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Warning:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Force Translations:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('forceTranslation'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">forceTranslation</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->forceTranslation; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('If false and the source message language is the same as the language to translate the message to then the translation will be skipped and the original message will be returned immediately. Otherwise the message will be translated.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Language:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('language'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">language</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->language; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The source language of the messages translated by this source.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Profiling Enabled:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('enableProfiling'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">enableProfiling</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->enableProfiling ? TranslateModule::t('True') : TranslateModule::t('False'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to profile each message translation.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronize Events:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('synchronizeEvents'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">synchronizeEvents</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $messageSource->synchronizeEvents ? TranslateModule::t('True') : TranslateModule::t('False'); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Whether to synchronize missing message translation events.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronization Lock File Permissions:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('eventSyncLockFilePermissions'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">eventSyncLockFilePermissions</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo decoct($messageSource->eventSyncLockFilePermissions); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Permissions of the event synchronization lock file.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronization Lock File Path:'); ?></th>
				<?php $settingCheck = $messageSource->checkSetting('eventSyncLockFile'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">eventSyncLockFile</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill break"><?php echo $messageSource->getEventSyncLockFile(); ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('Path to the event synchronization lock file.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<?php endif; ?>
			<!-- View Source Information -->
			<tr>
				<th colspan="2" class="center"><?php echo TranslateModule::t('View Source'); ?></th>
			</tr>
			<?php if(!isset($viewSource)): ?>
			<tr>
				<th colspan="2" class="fill translateError"><?php echo TranslateModule::t('The view source component named "{name}" could not be found. Please check your application\'s configuration.', array('{name}' => $translator->viewSource)); ?></th>
			</tr>
			<?php else: ?>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Installed:'); ?></th>
				<td class="fill break"><?php echo $viewSource->getIsInstalled() ? TranslateModule::t('Yes') : TranslateModule::t('No'); ?></td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Type:'); ?></th>
				<td class="fill break"><?php echo get_class($viewSource); ?></td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Route Table:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('routeTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">routeTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->routeTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing requested routes.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Route View Table:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('routeViewTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">routeViewTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->routeViewTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing associations of routes with views.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('View Source Table:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('viewSourceTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">viewSourceTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->viewSourceTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing source views.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('View Table:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('viewTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">viewTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->viewTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing translated views.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('View Message Table:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('viewMessageTable'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">viewMessageTable</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->viewMessageTable; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The database table containing the associations of messages and views.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Database Timestamp Format:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('databaseTimestampFormat'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">databaseTimestampFormat</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->databaseTimestampFormat; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('A PHP date format string matching the format of timestamp data type in your DBMS.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Database Connection ID:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('connectionID'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">connectionID</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->connectionID; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The name of the database connection component.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Caching Duration:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('cachingDuration'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">cachingDuration</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->cachingDuration; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The time in seconds to cache translated view in the caching component.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Cache Component:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('cacheID'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateWarning'; ?>">
					<table class="attributesGrid">
						<tr>
							<th class="right"><?php echo TranslateModule::t('Attribute:'); ?></th>
							<td class="fill">cacheID</td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Value:'); ?></th>
							<td class="fill"><?php echo $viewSource->cacheID; ?></td>
						</tr>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Description:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t('The name of the caching component for caching view translations.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Warning:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Profiling Enabled:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('enableProfiling'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronize Events:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('synchronizeEvents'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronization Lock File Permissions:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('eventSyncLockFilePermissions'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
							<td class="fill break"><?php echo TranslateModule::t('Permissions of the event synchronization lock file.'); ?></td>
						</tr>
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<tr>
				<th class="right"><?php echo TranslateModule::t('Synchronization Lock File Path:'); ?></th>
				<?php $settingCheck = $viewSource->checkSetting('eventSyncLockFile'); ?>
				<td class="fill <?php echo $settingCheck === true ? 'translateNoError' : 'translateError'; ?>">
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
						<?php if($settingCheck !== true): ?>
						<tr>
							<th class="right"><?php echo TranslateModule::t('Error:'); ?></th>
							<td class="fill break"><?php echo TranslateModule::t($settingCheck); ?></td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<?php endif; ?>
			<?php endif; ?>
		</table>
	</div>
</div>
