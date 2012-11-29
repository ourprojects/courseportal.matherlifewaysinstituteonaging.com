<?php
class ALSelector extends CWidget {
	
    public function run() {
        $this->render('ALSelector', 
        		array(
        				'currentLang' => TranslateModule::translator()->getLanguageID(), 
        				'languages' => TranslateModule::translator()->getAdminAcceptedLanguages())
        		);
    }
    
}
?>