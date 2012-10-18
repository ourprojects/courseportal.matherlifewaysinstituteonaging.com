<?php
class LanguageSelector extends CWidget {
	
    public function run() {
        $this->render('languageSelector', 
        		array(
        				'currentLang' => Yii::app()->translate->getLanguageID(), 
        				'languages' => Yii::app()->translate->getAdminAcceptedLanguages())
        		);
    }
    
}
?>