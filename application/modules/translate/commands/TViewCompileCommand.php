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

	public function actionCompileView($sourcePath, $compiledPath, $route, $language, $filePermission = 0755, $useTransaction = true)
	{
		$viewSource = TranslateModule::translator()->getViewSource();
		if($useTransaction)
			$transaction = $viewSource->getDbConnection()->beginTransaction();
		
		try
		{
			$view = $viewSource->getView($route, $sourcePath, $language, true);
			
			if($view['id'] === null)
			{
				throw new CException(Yii::t(self::ID, "The source view with path '{path}' could not be found or added to the view source.", array('{path}' => $sourcePath)));
			}
				
			if($view['route_id'] === null)
			{
				throw new CException(Yii::t(self::ID, "The source view with path '{path}' could not be associated with the route {route}.", array('{path}' => $sourcePath, '{route}' => $route)));
			}
			
			if($view['path'] === null)
			{
				if($viewSource->addView($view['id'], $compiledPath, $language, true) === null)
				{
					Yii::log("The source view with path '$path' and compiled path '$compiledPath' could not be added to the view source. This source view will be recompiled for each request until this problem is fixed.", CLogger::LEVEL_ERROR, self::ID);
				}
				else 
				{
					$view['path'] = $compiledPath;
				}
			}
			else if($view['path'] !== $compiledPath)
			{
				throw new CException(Yii::t(self::ID, "The source view with path '{path}' has already been compiled to language '{language}', but its compiled path '{compiledPath}' does not match the requested compiled path '{requestedCompiledPath}'.", 
						array('{path}' => $sourcePath, '{language}' => $language, '{compiledPath}' => $view['path'], '{requestedCompiledPath}' => $compiledPath)));
			}
			
			$view['last_modified'] = $view['last_modified'] === null ? time() : strtotime($view['last_modified']);
			
			if(@filemtime($view['path']) < $view['last_modified'] || @filemtime($view['path']) < @filemtime($sourcePath))
			{
				if(!is_dir(dirname($compiledPath)))
					mkdir(dirname($compiledPath), $filePermission, true);
				
				$subject = file_get_contents($sourcePath);
				
				// Extract messages
				preg_match_all('/\{t(?:\s+category\s*=\s*(\w+?))?\}\s*(.+?)\s*\{\/t\}/s', $subject, $messages);

				$messageSource = TranslateModule::translator()->getMessageSource();
				
				// Load view messages
				$unconfirmedMessages = array();
				foreach($viewSource->getViewMessages($view['id']) as $message)
				{
					$unconfirmedMessages[$message['message']] = $message['id'];
				}
				
				// Translate the messages
				$confirmedMessages = array();
				foreach($messages[2] as $i => &$message)
				{
					if(!isset($confirmedMessages[$message]))
					{
						if(isset($unconfirmedMessages[$message]))
						{
							$confirmedMessages[$message] = $unconfirmedMessages[$message];
							unset($unconfirmedMessages[$message]);
						}
						else 
						{
							$confirmedMessages[$message] = $viewSource->addSourceMessageToView($view['id'], $message, true);
						}
					}
					$message = Yii::t($messages[1][$i] === '' ? $messageSource->messageCategory : $messages[1][$i], $message, array(), null, null);
				}
				
				$viewSource->deleteViewMessages($view['id'], $unconfirmedMessages);
	
				// Replace messages with respective translations in source and write to compiled path.
				file_put_contents($compiledPath, str_replace($messages[0], $messages[2], $subject));
				@chmod($compiledPath, $filePermission);

				// Update the created time for the view.
				$viewSource->updateViewCreated($view['id'], $messageSource->getLanguageId($language, true));
			}
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