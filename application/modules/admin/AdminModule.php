<?php

class AdminModule extends CWebModule {

	/**
	 * Initializes the TranslateModule.
	 *
	 * @see CWebModule::init()
	 */
	public function init() {
		$this->defaultController = 'Admin';
		$dirname = basename(dirname(__FILE__));
		$this->setImport(array(
				$dirname . '.components.*',
				$dirname . '.controllers.*',
		));
		return parent::init();
	}

}