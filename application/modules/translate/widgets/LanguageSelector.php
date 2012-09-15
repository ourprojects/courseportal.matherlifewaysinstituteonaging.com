<?php
class LanguageSelector extends CWidget {
	
    public function run() {
        $currentLang = Yii::app()->language;
        $this->render('modules.translate.widgets.views.languageSelector', 
        		array('currentLang' => $currentLang, 'languages' => Yii::app()->translate->acceptedLanguages));
    }
    
}
?>