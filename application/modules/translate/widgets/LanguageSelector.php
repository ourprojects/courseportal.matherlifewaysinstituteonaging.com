<?php
class LanguageSelector extends CWidget {
	
    public function run() {
        $this->render('modules.translate.widgets.views.languageSelector', 
        		array(
        				'currentLang' => Yii::app()->locale->getLanguageID(Yii::app()->language), 
        				'languages' => Yii::app()->translate->acceptedLanguages)
        		);
    }
    
}
?>