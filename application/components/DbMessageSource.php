<?php

class DbMessageSource extends CDbMessageSource {
	
	public $acceptedLanguageTable;

	/**
	 * Loads the messages from database.
	 * You may override this method to customize the message storage in the database.
	 * @param string $category the message category
	 * @param string $language the target language
	 * @return array the messages loaded from database
	 * @since 1.1.5
	 */
	protected function loadMessagesFromDb($category, $language) {
		return parent::loadMessagesFromDb($category, Yii::app()->getLocale()->getLanguageID($language));
	}
	
}