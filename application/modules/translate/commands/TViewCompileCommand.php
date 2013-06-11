<?php

class TViewCompileCommand extends CConsoleCommand
{

	const ID = 'module.translate.commands.TViewCompileCommand';

	public $defaultAction = 'compileView';
	
	public $viewSource = 'views';
	
	public $messageSource = 'messages';
	
	private $_viewSource;
	
	private $_messageSource;
	
	public function getMessageSource()
	{
		if(!isset($this->_messageSource))
		{
			$this->_messageSource = Yii::app()->getComponent($this->messageSource);
			if($this->_messageSource === null)
				throw new CException(Yii::t(self::ID, 'A message source must be defined.'));
		}
		return $this->_messageSource;
	}
	
	public function getViewSource()
	{
		if(!isset($this->_viewSource))
		{
			$this->_viewSource = Yii::app()->getComponent($this->viewSource);
			if($this->_viewSource === null)
				throw new CException(Yii::t(self::ID, 'A view source component must be defined.'));
		}
		return $this->_viewSource;
	}
	
	public function actionStripTags($sourcePath, $compiledPath, $filePermission = 0755)
	{
		if(!is_dir(dirname($compiledPath)))
			mkdir(dirname($compiledPath), $filePermission, true);
	
		file_put_contents($compiledPath, preg_replace('/\{t(?:\s+category\s*=\s*(\w+?))?\}\s*(.+?)\s*\{\/t\}/s', '$2', file_get_contents($sourcePath)));
		@chmod($compiledPath, $filePermission);
	}

	public function actionCompileView($sourcePath, $compiledPath, $id, $language, $filePermission = 0755, $useTransaction = true)
	{
		$messageSource = $this->getMessageSource();
		$viewSource = $this->getViewSource();
		if($useTransaction)
			$transaction = $viewSource->getDbConnection()->beginTransaction();
		
		try
		{
			if(!is_dir(dirname($compiledPath)))
				mkdir(dirname($compiledPath), $filePermission, true);
			
			$subject = file_get_contents($sourcePath);
			
			// Extract messages
			preg_match_all('/\{t(?:\s+category\s*=\s*(\w+?))?\}\s*(.+?)\s*\{\/t\}/s', $subject, $matches);
			
			// Organize messages by into categories and translate them.
			$categorizedMessages = array();
			for($i = 0; $i < count($matches[2]); $i++)
			{
				$category = $matches[1][$i] === '' ? $messageSource->messageCategory : $matches[1][$i];
				$categorizedMessages[$category][":$i"] = $matches[2][$i];
				$matches[2][$i] = Yii::t($category, $matches[2][$i], array(), null, null);
			}

			// Replace messages with respective translations in source and write to compiled path.
			file_put_contents($compiledPath, str_replace($matches[0], $matches[2], $subject));
			@chmod($compiledPath, $filePermission);

			// Add any missing view messages associations and confirm all source messages and their respective categories were added to the DB.
			$viewMessages = array();
			foreach($viewSource->getCommandBuilder()->createSqlCommand("SELECT vmt.message_id id FROM $viewSource->viewMessageTable vmt WHERE (vmt.view_id=:view_id)", array(':view_id' => $id))->queryAll() as $row)
				$viewMessages[$row['id']] = $row['id'];

			foreach($categorizedMessages as $category => &$messages)
			{
				$cmd = $messageSource->getCommandBuilder()->createSqlCommand(
							'SELECT MIN(ct.id) category_id, smt.id message_id, smt.message message ' .
							"FROM $messageSource->sourceMessageTable smt " .
							"LEFT JOIN $messageSource->categoryMessageTable cmt ON (smt.id=cmt.message_id) " .
							"LEFT JOIN $messageSource->categoryTable ct ON (cmt.category_id=ct.id AND ct.category=:category) " .
							'WHERE (smt.message IN ('.implode(',', array_keys($messages)).')) ' .
							'GROUP BY smt.id')
						->bindValue(':category', $category)
						->bindValues($messages);
				$messages = array_flip($messages);
				foreach($cmd->queryAll() as $messageInfo)
				{
					unset($messages[$messageInfo['message']]);
				 	if($messageInfo['category_id'] === null)
				 	{
						if($messageSource->addMessageToCategory($category, $messageInfo['message_id']) === null)
						{
							throw new CDbException("Failed to add source message with ID '{$messageInfo['message_id']}' to category '$category'.");
						}
				 	}
				 	if(isset($viewMessages[$messageInfo['message_id']]))
				 	{
				 		unset($viewMessages[$messageInfo['message_id']]);
				 	}
				 	elseif($viewSource->addViewMessage($id, $messageInfo['message_id']) === null)
			 		{
			 			throw new CDbException("The view with ID '$id' could not be associated with the source message with ID '{$messageInfo['message_id']}'.");
			 		}
				}
				foreach(array_keys($messages) as $message)
				{
					$messageId = $messageSource->addSourceMessage($message);
					if($messageId === null)
					{
						throw new CDbException("The source message '$message' could not be found in or added to the database.");
					}
					if($messageSource->addMessageToCategory($category, $messageId) === null)
					{
						throw new CDbException("Failed to add source message with ID '$messageId' to category '$category'.");
					}
					if($viewSource->addViewMessage($id, $messageId) === null)
					{
						throw new CDbException("The view with ID '$id' could not be associated with the source message with ID '$messageId'.");
					}
				}
			}
			
			// Delete any view messages not in this view
			$viewSource->deleteViewMessages($id, $viewMessages);
			// Update the created time for the view.
			$this->getViewSource()->updateViewCreated($id, $language);
			if(isset($transaction))
				$transaction->commit();
		}
		catch(Exception $e)
		{
			if(file_exists($compiledPath))
				unlink($compiledPath);
			if(isset($transaction))
				$transaction->rollback();
			throw $e;
		}
	}

}