<?php $this->breadcrumbs = array(TranslateModule::t('Messages')); ?>
<h1><?php echo TranslateModule::t('Messages'); ?></h1>
<div id="single-column">
	<div id="messages" class="box-white">
		<?php
		$model = new MessageSource('search');
		// @ TODO this is very inefficient. Need to find a better way.
		$dataProvider = $model->search();
		$this->renderPartial('_detailed_grid', array('model' => $model));
		
		if(TranslateModule::translator()->canUseGoogleTranslate()) {
			foreach($dataProvider->getData() as $item)
			{
				if($item->isMissingTranslations())
				{
					echo CHtml::ajaxButton(
							TranslateModule::t('Google Translate Missing'),
							$this->createUrl('messageSource/translateMissing'),
							array(
									'beforeSend' => 'js:function(jqXHR, settings){$("#missingTranslations").addClass("loading");}',
									'complete' => 'js:function(jqXHR, textStatus){$("#missingTranslations").removeClass("loading");}',
									'success' => 'js:function(data){alert(data);$.fn.yiiGridView.update("messageSource-detailed-grid");}',
									'error' => 'js:function(xhr){alert(xhr.responseText);}'
							),
							array('id' => 'missingTranslations')
					);
					break;
				}
			}
		}
		?>
	</div>
</div>