<?php

interface ITMessageSource extends IApplicationComponent
{
	
	/**
	 * @return string the language that the source messages are written in.
	 */
	public function getLanguage();
	
	/**
	 * @param string $language the language that the source messages are written in.
	 */
	public function setLanguage($language);
	
	/**
	 * Gets the unique identifier for the language of the source messages provided by this message source.
	 *
	 * @param boolean $createIfNotExists Defaults to True. If True and the language does not already exist it will be created.
	 * @return string The unique identifier for the source language of messages within this message source.
	 */
	public function getSourceLanguageId($createIfNotExists = true);
	
	/**
	 * Adds a source message to this message source.
	 * 
	 * @param string $message The source message to add to the source message table
	 * @return array The ID of the source message that was inserted or null if the source message was not added
	 */
	public function addSourceMessage($message, $createLanguageIfNotExists = false);
	
	/**
	 * Adds a category to this message source.
	 *
	 * @param string $message The category to add to the category table
	 * @return string The ID of the category that was inserted or null if the category was not added
	 */
	public function addCategory($category);
	
	/**
	 * Adds a language to this message source.
	 *
	 * @param string $language The language to add to the language table
	 * @return string|null A unique identifier for the language or null if the language could not be added.
	 */
	public function addLanguage($language);
	
	/**
	 * Adds a source message to a category.
	 * 
	 * @param string $messageId The unique identifier of the message being added to this category. 
	 * @param string $category The category of the message.
	 * @param boolean $createCategoryIfNotExists Defaults to False. If True and the message category does not already exist it will be created.
	 * @return string|null A unique identifier for the category or null if the message could not be added to the category.
	 */
	public function addMessageToCategory($messageId, $category, $createCategoryIfNotExists = false);
	
	/**
	 * Adds a translation of a source message.
	 * 
	 * @param string $sourceMessageId The unique identifier of the source message this translation is being added to. 
	 * @param string $language The language of the translation.
	 * @param string $translation The source message translation.
	 * @param boolean $createLanguageIfNotExists Defaults to False. If True and the language does not already exist it will be created.
	 * @return string|null A unique identifier for the language the translation was added for or null if the translation could not be added.
	 */
	public function addTranslation($sourceMessageId, $language, $translation, $createLanguageIfNotExists = false);
	
	/**
	 * Returns all accepted languages.
	 * 
	 * @return array An array of accepted language code strings.
	 */
	public function getAcceptedLanguages();
	
	/**
	 * Gets the unique identifier of a source message.
	 * 
	 * @param string $message The source message.
	 * @param boolean $createIfNotExists Defaults to False. If True and the source message does not already exist it will be created.
	 * @return string|null A unique identifier for the source message or null if the source message is not found. 
	 */
	public function getSourceMessageId($message, $createIfNotExists = false);
	
	/**
	 * Gets the unique identifier of a message category. 
	 * 
	 * @param string $category The category.
	 * @param boolean $createIfNotExists Defaults to False. If True and the message category does not already exist it will be created.
	 * @return string|null The unique identifier for the category or null if the category is not found.
	 */
	public function getCategoryId($category, $createIfNotExists = false);
	
	/**
	 *  Gets the unique identifier of a language.
	 *  
	 * @param string $language The language.
	 * @param boolean $createIfNotExists Defaults to False. If True and the language does not already exist it will be created.
	 * @return string|null The unique identifier for the language or null if the language is not found.
	 */
	public function getLanguageId($language, $createIfNotExists = false);
	
	/**
	 * Gets the translation for a message in a particular language.
	 * 
	 * @param string $category The category of the source message.
	 * @param string $message The source message to find a translation for.
	 * @param string $language The language of the translation to find.
	 * @param boolean $createSourceMessageIfNotExists Defaults to False. If True and the source message does not already exist it will be created.
	 * @return string|null The translation of the message or null if the message has not been translated.
	 */
	public function getTranslation($category, $message, $language, $createSourceMessageIfNotExists = false);

	/**
	 * Translates a message to the specified language.
	 *
	 * Note, if the specified language is the same as
	 * the {@link getLanguage source message language}, messages will NOT be translated.
	 *
	 * If the message is not found in the translations, an {@link onMissingTranslation}
	 * event will be raised. Handlers can mark this message or do some
	 * default handling. The {@link CMissingTranslationEvent::message}
	 * property of the event parameter will be returned.
	 *
	 * @param string $category the message category
	 * @param string $message the message to be translated
	 * @param string $language the target language. If null (default), the {@link CApplication::getLanguage application language} will be used.
	 * @return string the translated message (or the original message if translation is not needed)
	 */
	public function translate($category, $message, $language = null);

}