<?php
class ALSelector extends CWidget {
	
    public function run() {
        $this->render('ALSelector', 
        		array(
        				'currentLang' => Yii::app()->getLanguage(), 
        				'languages' => TranslateModule::translator()->getAcceptedLanguages())
        		);
    }
    
}
?>