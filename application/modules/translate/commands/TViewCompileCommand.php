<?php

class TViewCompileCommand extends CConsoleCommand
{

	const ID = 'module.translate.commands.TViewCompileCommand';

	public $defaultAction = 'compileView';
	
	public function actionStripTags($sourcePath, $compiledPath, $filePermission = 0755)
	{
		if(!is_dir(dirname($compiledPath)))
			mkdir(dirname($compiledPath), $filePermission, true);
	
		file_put_contents($compiledPath, preg_replace('/\{t(?:\s+category\s*=\s*(\w+?))?\}\s*(.+?)\s*\{\/t\}/s', '$2', file_get_contents($sourcePath)));
		@chmod($compiledPath, $filePermission);
	}

	public function actionCompileView($sourcePath, $compiledPath, $id, $language, $filePermission = 0755, $useTransaction = true)
	{
		$messageSource = TranslateModule::translator()->getMessageSource();
		$viewSource = TranslateModule::translator()->getViewSource();
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
				$categorizedMessages[$category][$matches[2][$i]] = $i;
				$matches[2][$i] = Yii::t($category, $matches[2][$i], array(), null, null);
			}

			// Replace messages with respective translations in source and write to compiled path.
			file_put_contents($compiledPath, str_replace($matches[0], $matches[2], $subject));
			@chmod($compiledPath, $filePermission);

			// Add any missing view messages associations and confirm all source messages and their respective categories were added to the DB.
			$cmd = $viewSource->getDbConnection()->createCommand()
					->select('vmt.message_id AS id')
					->from($viewSource->viewMessageTable.' vmt')
					->where('vmt.view_id=:view_id', array(':view_id' => $id));
			$viewMessages = array();
			foreach($cmd->queryAll() as $row)
				$viewMessages[$row['id']] = $row['id'];

			foreach($categorizedMessages as $category => &$messages)
			{
				$cmd = $messageSource->getDbConnection()->createCommand()
							->select(array('MIN(ct.id) AS category_id', 'smt.id AS message_id', 'smt.message AS message'))
							->from($messageSource->sourceMessageTable.' smt')
							->leftJoin($messageSource->categoryMessageTable.' cmt', 'smt.id=cmt.message_id')
							->leftJoin($messageSource->categoryTable.' ct', array('and', 'cmt.category_id=ct.id', 'ct.category=:category'), array(':category' => $category))
							->where(array('in', 'smt.message', array_keys($messages)))
							->group('smt.id');
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
			$viewSource->updateViewCreated($id, $language);
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