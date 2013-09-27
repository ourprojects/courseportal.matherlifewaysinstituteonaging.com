<?php 

class HTTP_DownloadAction extends CAction 
{
	
	const ID = 'HTTP_Download.components.HTTP_DownloadAction';
	
	/**
	 * @var string regex used to clean requested file and path names. Matches any string starting 
	 * with a word character containing any number of word characters, dots or dashes in the middle, and 
	 * ending with a word character. If file name requirments are too strict change this in configuration.
	 */
	public $pathEscapeRegex = '/^\w([\w\.\-]*\w\z)?$/';
	
	/**
	 * @var string the name of the GET parameter that contains the path relative to {@link basePath} of the file being requested.
	 * @see basePath
	 */
	public $getParam = 'filePath';

	/**
	 * @var string the name of the default file when {@link fileParam} GET parameter is not provided by user. Defaults to 'index'.
	 * This should be in the format of 'path.to.file' relative to {@link basePath}, similar to that given in
	 * the GET parameter.
	 * @see basePath
	 */
	public $defaultFile = 'index';
	
	/**
	 * @var string raw data to send.
	 * @see HTTP_Download::setData
	 */
	public $data = null;
	
	/**
	 * @var string The filename to serve this download action's file or data as.
	 * If not set the basename of the file path to serve will be used.
	 */
	public $filename = null;
	
	/**
	 * @var string the mime type to use when serving the file associated with this action.
	 * If not set the mime type will be determined automatically.
	 */
	public $mime = null;
	
	/**
	 * @var string the base path to directory where requested files will be served from.
	 * This path is relative to the path returned by {@link CController::getViewPath controller view path} 
	 * Defaults to 'downloads'.
	 * @see CController::getViewPath
	 */
	public $basePath = 'downloads';
	
	/**
	 * @var string $magicFile name of a magic database file, usually something like /path/to/magic.mime.
	 * This will be passed as the second parameter to {@link HTTP_DownloadAction::resolveFile} if this action is not serving raw data.
	 * @see HTTP_DownloadAction::resolveFile
	 */
	public $magicFile = null;

	private $_filePath;
	private $_id = 'download';

	/**
	 * @return string id of this action
	 */
/*	public function getId() 
	{
		if($this->_id === null)
		{
			$this->_id = parent::getId() . '.' . strtr($this->getRequestedFile(), DIRECTORY_SEPARATOR, '.');
		}
		return $this->_id;
	}
*/
	/**
	 * Returns the name of the file requested by the user.
	 * If the user doesn't specify any file, the {@link defaultFile} will be returned.
	 * @return string the name of the file requested by the user.
	 * This is in the format of 'path.to.file'.
	 */
	public function getRequestedFile() 
	{
		if($this->_filePath === null) 
		{
			if(isset($_GET[$this->getParam])) 
			{
				$this->_filePath = implode(DIRECTORY_SEPARATOR, array_filter(explode('/', $_GET[$this->getParam]), array(new CPregMatch($this->pathEscapeRegex), 'match')));
			} 
			else if($_GET !== array()) 
			{
				$this->_filePath = implode(DIRECTORY_SEPARATOR, array_filter(CArray::array_flatten($_GET), array(new CPregMatch($this->pathEscapeRegex), 'match')));
			}
			
			if($this->_filePath === '') 
			{
				if(isset($this->defaultFile))
				{
					$this->_filePath = $this->defaultFile;
				}
				else
				{
					throw new CHttpException(400, Yii::t(self::ID, 'A file to download was not specified.'));
				}
			}
		}
		return $this->_filePath;
	}

	/**
	 * Resolves the user-specified file into a file name, a valid path to the file, and an mime type for the file.
	 * @param string $filePath file path to be resolved.
	 * @param string $magicFile name of a magic database file, usually something like /path/to/magic.mime.
	 * This will be passed as the second parameter to {@link CFileHelper::getMimeType}.
	 * @throw CHttpException if the user-specified file is invalid
	 */
	protected function resolveFile($filePath, $magicFile = null) 
	{
		$file = realpath($this->getController()->getViewPath() . DIRECTORY_SEPARATOR . $this->basePath . DIRECTORY_SEPARATOR . $filePath);

		if($file !== false && is_file($file)) 
		{
			return array(
					'path' => $file,
					'name' => isset($this->filename) ? $this->filename : basename($file),
					'mime' => isset($this->mime) ? $this->mime : CFileHelper::getMimeType($file, $magicFile)
				);
		} 
		throw new CHttpException(404, Yii::t(self::ID, 'File path "{file}" is invalid or does not exist.', array('{file}' => $filePath)));
	}

	/**
	 * Runs the action.
	 * This method displays the file requested by the user.
	 * @throws CHttpException if the file is invalid
	 */
	public function run() 
	{
		if(isset($this->data))
		{
			if(!isset($this->filename) || !isset($this->mime))
			{
				throw new Exception(Yii::t(self::ID, 'A filename and mime type must be specified for raw data. Please check your HTTP_DownloadAction configuration.'));
			}
			$fileInfo = array(
						'name' => $this->filename,
						'mime' => $this->mime,
					);
		}
		else
		{
			$fileInfo = $this->resolveFile($this->getRequestedFile(), $this->magicFile);
		}
		
		$this->onBeforeDownload($event = new CEvent($this));
		if(!$event->handled) 
		{
			Yii::import('application.extensions.HTTP_Download.HTTP_Download', true);
			$params = array(
					'contenttype' => $fileInfo['mime'],
					'contentdisposition' => array(HTTP_Download::ATTACHMENT, $fileInfo['name']),
				);
			if(isset($this->data))
			{
				$params['data'] = $this->data;
			}
			else
			{
				$params['file'] = $fileInfo['path'];
			}
			HTTP_Download::staticSend($params, false);
			$this->onAfterDownload(new CEvent($this));
		}
	}

	/**
	 * Raised right before the action invokes the render method.
	 * Event handlers can set the {@link CEvent::handled} property
	 * to be true to stop further file rendering.
	 * @param CEvent $event event parameter
	 */
	public function onBeforeDownload($event) 
	{
		$this->raiseEvent('onBeforeDownload',$event);
	}

	/**
	 * Raised right after the action invokes the render method.
	 * @param CEvent $event event parameter
	 */
	public function onAfterDownload($event) 
	{
		$this->raiseEvent('onAfterDownload',$event);
	}

}
