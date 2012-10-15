<?php defined('BASEPATH') or exit('No direct script access allowed');  

class HTTP_DownloadAction extends CAction {
	
	/**
	 * @var string the name of the GET parameter that contains the requested file name. Defaults to 'file'.
	 */
	public $fileParam = 'file';
	/**
	 * @var string the name of the default file when {@link fileParam} GET parameter is not provided by user. Defaults to 'index'.
	 * This should be in the format of 'path.to.file', similar to that given in
	 * the GET parameter.
	 * @see basePath
	 */
	public $defaultFile;
	/**
	 * @var string the name of the file to be rendered. This property will be set
	 * once the user requested file is resolved.
	 */
	public $file;
	/**
	 * @var string the name of the file to be sent in client download. This property will be set
	 * once the user requested file is resolved if it has not already been set.
	 */
	public $fileName;
	/**
	 * @var string the content type of the file to be sent to the client. This property will be set
	 * once the user requested file is resolved if it has not already been set.
	 */
	public $contentType;
	/**
	 * @var string the base path for the files. Defaults to 'pages'.
	 * The base path will be prefixed to any user-specified page file.
	 * For example, if a user requests for <code>tutorial.chap1</code>, the corresponding file name will
	 * be <code>pages/tutorial/chap1</code>, assuming the base path is <code>pages</code>.
	 * The actual file file is determined by {@link CController::getFileFile}.
	 * @see CController::getFileFile
	 */
	public $basePath = 'downloads';
	
	private $_filePath;
	
	public function __construct($controller, $id) {
		parent::__construct($controller, $id);
	}

	/**
	 * @return string id of this action
	 */
	public function getId() {
		return $this->getRequestedFile();
	}

	/**
	 * Returns the name of the file requested by the user.
	 * If the user doesn't specify any file, the {@link defaultFile} will be returned.
	 * @return string the name of the file requested by the user.
	 * This is in the format of 'path.to.file'.
	 */
	public function getRequestedFile() {
		if($this->_filePath === null) {
			if(!empty($_GET[$this->fileParam])) {
				$this->_filePath = $_GET[$this->fileParam];
			} else if(!empty($_GET)) {
				Yii::app()->loadHelper('Utilities');
				$this->_filePath = flattenAndImplode($_GET, '.');
			} else if(!empty($this->defaultFile)) {
				$this->_filePath = $this->defaultFile;
			} else {
				throw new CHttpException(400, Yii::t('HTTP_Download', 'A file to download was not specified.'));
			}
		}
		return $this->_filePath;
	}

	/**
	 * Resolves the user-specified file into a valid file name.
	 * @param string $filePath user-specified file in the format of 'path.to.file'.
	 * @return string fully resolved file in the format of 'path/to/file'.
	 * @throw CHttpException if the user-specified file is invalid
	 */
	protected function resolveFile($filePath) {
		// start with a word char and have word chars, dots and dashes only
		if(preg_match('/^\w[\w\.\-\/]*$/', $filePath)) {
			$file = strtr($filePath, array('.' => DIRECTORY_SEPARATOR, '/' => DIRECTORY_SEPARATOR));
			if(!empty($this->basePath))
				$file = $this->getController()->getViewPath() . DIRECTORY_SEPARATOR . $this->basePath . DIRECTORY_SEPARATOR . $file;

			if(is_file($file)) {
				$this->file = $file;
				if(!isset($this->fileName))
					$this->fileName = basename($this->file);
				if(!isset($this->contentType))
					$this->contentType = mime_content_type($this->file);
				return;
			}
		}
		throw new CHttpException(404, Yii::t('HTTP_Download', 'File "{file}" does not exist.', 
				array('{file}' => $file)));
	}

	/**
	 * Runs the action.
	 * This method displays the file requested by the user.
	 * @throws CHttpException if the file is invalid
	 */
	public function run() {
		$this->resolveFile($this->getRequestedFile());

		$this->onBeforeDownload($event = new CEvent($this));
		if(!$event->handled) {
			Yii::import('ext.HTTP_Download.HTTP_Download', true);
			HTTP_Download::staticSend(
					array(
						'file' => $this->file,
						'contenttype' => $this->contentType,
						'contentdisposition' => array(HTTP_DOWNLOAD_ATTACHMENT, $this->fileName),
					), 
					false);
			$this->onAfterDownload(new CEvent($this));
		}
	}

	/**
	 * Raised right before the action invokes the render method.
	 * Event handlers can set the {@link CEvent::handled} property
	 * to be true to stop further file rendering.
	 * @param CEvent $event event parameter
	 */
	public function onBeforeDownload($event) {
		$this->raiseEvent('onBeforeRender',$event);
	}

	/**
	 * Raised right after the action invokes the render method.
	 * @param CEvent $event event parameter
	 */
	public function onAfterAfter($event) {
		$this->raiseEvent('onAfterRender',$event);
	}

}
