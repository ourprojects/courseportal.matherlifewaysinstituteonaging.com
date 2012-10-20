<?php

$translator = TranslateModule::translator();
$message = $messages[$data->id];

if($google)
    $tagId = MPTranslate::ID."-{$data->id}";

echo CHtml::openTag('tr');

echo CHtml::tag('td', array(),
    CHtml::tag('span', array('margin:0 5px'), $message['category'])
);
echo CHtml::tag('td', array(),
    CHtml::tag('span', array(
            'margin:0 5px',
            'class' => MPTranslate::ID.'-google-message'
        ), $message['message']
    )
);
echo CHtml::tag('td', array(),
    CHtml::activeTextArea($data, "[$data->id]translation", array('id' => $google ? $tagId : null, 'class' => MPTranslate::ID.'-google-translation', 'cols' => 35, 'rows' => 2)).
    CHtml::activeHiddenField($data, "[$data->id]language")
);
if($google) {
    echo CHtml::tag('td', array(),
            CHtml::ajaxLink(TranslateModule::t('Translate'),
                $this->createUrl('translate/googleTranslate'),
                array(
                    'type' => 'post',
                    'data' => array(
                        'message' => $message['message'],
                        'messageLanguage' => Yii::app()->getLanguage(),
                        'sourceLanguage' => Yii::app()->sourceLanguage
                    ),
                    'success' => "js:function(response){
                        \$('#{$tagId}').val(response);
                        \$('#{$tagId}-button').hide();
                    }",
                    'error' => 'js:function(xhr){alert(xhr.responseText);}',
                ),
                array(
                    'margin:0 5px',
                    'class' => MPTranslate::ID."-google-button",
                    'id' => "$tagId-button",
                )
            )
    );
}
echo CHtml::closeTag('tr');