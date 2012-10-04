<?php

class Survey extends CWidget {
	
	private $_data = 
		array(
			'survey' => array(
							'model' => null,
			 				'options' => array(),
						), 
			'title' => array(
							'show' => true,
							'options' => array(),
			 			),
			'description' => array(
							'show' => true,
							'options' => array(),
						),
			'form' => array(
						'show' => true,
						'options' => array(),
					),
			'question' => array(
						'show' => true,
						'options' => array(),
					),
			'submitButton' => array(
						'show' => true,
						'options' => array(),
					)
	   );
	
	public function run() {
		if($this->_data['survey']['model'] === null)
			return;
		$this->render('survey', $this->_data);
	}
	
	public function __set($name, $value) {
		if($name === 'survey_model') {
			$this->_data['survey']['model'] = $value;
			foreach($this->_data as $key => $val) {
				if(!isset($this->_data[$key]['options']['id']))
					$this->_data[$key]['options']['id'] = "{$key}_{$this->_data['survey']['model']->name}";
			}
		} else if(count($names = explode('_', $name)) === 2 && isset($this->_data[$names[0]][$names[1]])) {
			if(is_array($this->_data[$names[0]][$names[1]]) && is_array($value))
				$this->_data[$names[0]][$names[1]] = CMap::mergeArray($this->_data[$names[0]][$names[1]], $value);
			else
				$this->_data[$names[0]][$names[1]] = $value;
		} else
			parent::__set($name, $value);
	}
	
}