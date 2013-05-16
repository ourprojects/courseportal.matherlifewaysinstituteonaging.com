<?php

class DbMessageSource extends CDbMessageSource {
	
	public $acceptedLanguageTable;
	
	public $localeSpecific = false;
	
	public function getLanguage()
	{
		return $this->localeSpecific ? parent::getLanguage() : TranslateModule::translator()->getLanguageID(parent::getLanguage());
	}

	public function translate($category, $message, $language = null) {
		return parent::translate($category, $message, $this->localeSpecific ? $language : TranslateModule::translator()->getLanguageID($language));
	}
	
}