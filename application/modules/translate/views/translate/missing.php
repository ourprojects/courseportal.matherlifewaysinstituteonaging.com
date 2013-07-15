<?php 
if(empty($missing)):
echo '<h2>' . TranslateModule::t('All messages translated') . '</h2>';
else:

$google = !empty(TranslateModule::translator()->googleApiKey);
?>
<h2>
	<?php echo TranslateModule::t('Translate to {lang}', array('{lang}' => TranslateModule::translator()->getLanguageDisplayName()));?>
</h2>
<?php
if($google)
{
	echo CHtml::link(TranslateModule::t('Translate all with google translate'), '#', array('id' => MPTranslate::ID."-google-translateall"));
	echo CHtml::script(
			'$("#'.MPTranslate::ID.'-google-translateall").click(function(){' .
			'var messages=[];' .
			'$("'.MPTranslate::ID.'-google-message").each(function(count){' .
			'messages[count]=$(this).html();' .
			'});' .
			CHtml::ajax(array(
					'url' => $this->createUrl('translate/googleTranslate'),
					'type' => 'post',
					'dataType' => 'json',
					'data' => array(
							'language' => Yii::app()->getLanguage(),
							'sourceLanguage' => Yii::app()->sourceLanguage,
							'message' => 'js:messages'
					),
					'success' => 'js:function(response){' .
					'$("'.MPTranslate::ID.'-google-translation").each(function(count){' .
					'$(this).val(response[count]);' .
					'});' .
					'$("'.MPTranslate::ID.'-google-button, #'.MPTranslate::ID.'-google-translateall").hide();' .
					'},',
					'error' => 'js:function(xhr){alert(xhr.statusText);}',
			)) .
			'return false;' .
			'});');
	if(Yii::app()->getRequest()->isAjaxRequest)
	{
		echo CHtml::script(
                '$("#'.MPTranslate::ID.'-pager a").click(function(){' .
                    '$dialog = $("#'.MPTranslate::ID.'-dialog").load($(this).attr("href"));' .
                    'return false;' .
                '});');
	}
}
?>
<div class="form">
	<?php echo CHtml::beginForm(); ?>
	<?php
	$this->widget('zii.widgets.CListView', array(
                'dataProvider' => new CArrayDataProvider($messages),
                'pager' => array(
                    'id' => MPTranslate::ID.'-pager',
                    'class' => 'CLinkPager',
                ),
                'viewData' => array(
                    'missing' => $missing,
                    'google' => $google,
                ),
                'itemView' => '_missing_message',
            ));
        ?>
	<?php echo CHtml::submitButton(TranslateModule::t('Translate'));?>
	<?php echo CHtml::endForm()?>
</div>
<?php endif; ?>