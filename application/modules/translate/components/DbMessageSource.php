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
	
	protected function loadMessagesFromDb($category, $language)
	{
		$command = $this->getDbConnection()->createCommand(
				'SELECT t1.id AS id, t1.message AS message, t2.translation AS translation ' .
				'FROM '.$this->sourceMessageTable.' t1 ' .
				'INNER JOIN '.$this->translatedMessageTable.' t2 ON t1.id = t2.id ' .
				'WHERE t1.category = :category AND t2.language = :language');
		$command->bindValue(':category', $category);
		$command->bindValue(':language', $language);
		$messages = array();
		foreach($command->queryAll() as $row)
			$messages[$row['message']] = array('translation' => $row['translation'], 'id' => $row['id']);
	
		return $messages;
	}
	
	protected function translateMessage($category, $message, $language)
	{
		$translation = parent::translateMessage($category, $message, $language);
		if(is_array($translation))
		{
			$this->getDbConnection()->createCommand('UPDATE '.$this->sourceMessageTable.' SET last_use = :last_use WHERE id = :id')
									->execute(array(':id' => $translation['id'], ':last_use' => time()));
			return $translation['translation'];
		}
		return $translation;
	}
	
}