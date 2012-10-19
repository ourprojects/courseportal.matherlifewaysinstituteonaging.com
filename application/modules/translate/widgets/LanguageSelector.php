<?php
class LanguageSelector extends CWidget {
	
    public function run() {
        $this->render('languageSelector', 
        		array(
        				'currentLang' => TranslateModule::translator()->getLanguageID(), 
        				'languages' => TranslateModule::translator()->getAdminAcceptedLanguages())
        		);
    }
    
}
?>