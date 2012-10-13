<?php defined('BASEPATH') or exit('No direct script access allowed');  

class HTTP_DownloadAction extends CAction {
	
	private $_file;
	
	public function __construct($controller, $id) {
		Yii::app()->loadHelper('Utilities');
		$id = flattenArrayToString($_GET, DIRECTORY_SEPARATOR);
		$this->_file = $controller->getViewPath() . DIRECTORY_SEPARATOR . 'downloads' . DIRECTORY_SEPARATOR . $id;
		parent::__construct($controller, strtr($id, array(DIRECTORY_SEPARATOR => '.')));
	}

	public function run() {
		if(!is_file($this->_file))
			throw new CHttpException(404, Yii::t('HTTP_Download', 'File "{file}" does not exist.', array('{file}' => $this->_file)));
		Yii::import('ext.HTTP_Download.HTTP_Download', true);
		HTTP_Download::staticSend(array(
					'file' => $this->_file,
					'contenttype' => mime_content_type ($this->_file),
					'contentdisposition' => array(HTTP_DOWNLOAD_ATTACHMENT, basename($this->_file)),
				), false);
	}

}
