<?php
class LanguageSelector extends CWidget {
	
    public function run() {
        $this->render('languageSelector', 
        		array(
        				'currentLang' => Yii::app()->locale->getLanguageID(Yii::app()->language), 
        				'languages' => Yii::app()->translate->acceptedLanguages)
        		);
    }
    
}
?>