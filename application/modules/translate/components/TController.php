<?php
class TController extends CController {
	
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs = array();

	public function filters() {
		return array_merge(parent::filters(), TranslateModule::translator()->managementActionFilters);
	}

	public function accessRules() {
		return array_merge(parent::accessRules(), TranslateModule::translator()->managementAccessRules);
	}
	
}