<?php
class TController extends OnlineCoursePortalController {

	public function filters() {
		return array_merge(parent::filters(), TranslateModule::translator()->managementActionFilters);
	}

	public function accessRules() {
		return array_merge(parent::accessRules(), TranslateModule::translator()->managementAccessRules);
	}
	
}