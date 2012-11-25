<?php
class Selector extends CWidget {
	
    public function run() {
        $this->render('selector', 
        		array(
        				'currentLang' => TranslateModule::translator()->getLanguageID(), 
        				'languages' => TranslateModule::translator()->getAdminAcceptedLanguages())
        		);
    }
    
}
?>