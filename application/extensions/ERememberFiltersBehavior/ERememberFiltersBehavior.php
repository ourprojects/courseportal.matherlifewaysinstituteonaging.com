<?php
/**
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

 * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * ERememberFiltersBehavior class file.
 *
 * @author Pentium10 http://www.yiiframework.com/forum/index.php?/user/8824-pentium10/
 * @link http://www.yiiframework.com/
 * @version 1.2

 *
 * Overhauled with many performance enhancements, code reductions, and feature additions by:
 * @author Louis DaPrato
 *
 * Changes and additions:
 * - Refactored all code for performance and simplicity.
 * - rememberScenario is now the only scenario that will be saved and stored (Defaults to 'search').
 * The rememberScenario may also be an array of scenarios where if any match the current CActiveRecord scenario this behavior will be activated.
 * Previously this behavior would always save the 'search' scenario or the scenario defined by rememberScenario.
 * - Added an id to differentiate the saved filter data between multiple same model usages (multiple gridviews usign the same model).
 * - Made the state save key prefix more sensible.
 * It follows this format: `this class name`-`attached model class name`-`remember scenario`-`save ID`-`saved attribute name`
 * - Added a flag to indicate whether the afterConstruct method has been called. This eliminates the need to call doReadSave multiple
 * times if the CActiveRecord that owns this behavior has not even been constructed yet.
 *

 * Copyright (c) 2011, Pentium10
 * All rights reserved.

 * The ERememberFiltersBehavior extension adds up some functionality to the default
 * possibilites of CActiveRecord/Model implementation.
 *
 * It will detect the search scenario and it will save the filters from the GridView.
 * This comes handy when you need to store them for later use. For heavy navigation and
 * heavy filtering this function can be activated by just a couple of lines.
 *
 * To use this extension, just copy this file to your components/ directory,
 * add 'import' => 'application.components.ERememberFiltersBehavior', [...] to your
 * config/main.php and paste the following code to your behaviors() method of your model
 *
 * public function behaviors() {
 *        return array(
 *            'ERememberFiltersBehavior' => array(
 *                'class' => 'application.components.ERememberFiltersBehavior',
 *                'defaults' => array(),
 *                'defaultStickOnClear' => false
 *            ),
 *        );
 * }
 *
 * 'defaults' is a key value pair array, that will hold the defaults for your filters.
 * For example when you initially want to display `active products`, you set to array('status'=>'active').
 * You can of course put multiple default values.
 *
 * 'defaultStickOnClear'=>true can be used, if you want the default values to be put back when the user clears the filters
 * The default set is 'false' so if the user clears the filters, also the defaults are cleared out.
 *
 * You can use `scenarios` to remember the filters on multiple states of the same model. This is helpful when you use the same
 * model on different views and you want to remember the state separated from each other.
 * Known limitations: the views must be in different actions (not on the same view)
 *
 * To set a scenario add the set call after the instantiation
 * Fragment from actionAdmin():
 *
 * $model=new Persons('search');
 * $model->setRememberScenario('scene1');
 *
 *
 * CHANGELOG
 *
 * 2011-06-02
 * v1.2
 * Added support for 'scenarios'.
 * You can now tell your model to use custom scenario.
 *
 * 2011-03-06
 * v1.1
 * Added support for 'defaults' and 'defaultStickOnClear'.
 * You can now tell your model to set default filters for your form using this extension.
 *
 * 2011-01-31
 * v1.0
 * Initial release
 *
 * This extension has also a pair Clear Filters Gridview
 * http://www.yiiframework.com/extension/clear-filters-gridview
 *
 * Please VOTE this extension if helps you at:
 * http://www.yiiframework.com/extension/remember-filters-gridview
 */

class ERememberFiltersBehavior extends CModelBehavior
{

	/**
	 * Array that holds any default filter value like array('active'=>'1')
	 *
	 * @var array
	 */
	public $defaults = array();

	/**
	 * When this flag is true, the default values will be used also when the user clears the filters
	 *
	 * @var boolean
	*/
	public $defaultStickOnClear = false;

	/**
	 * A list of model scenarios that will be remembered. Defaults to 'search' only.
	 *
	 * @var array
	 */
	private $_rememberScenario = array('search');

	/**
	 * A unique ID for saving states of this model.
	 * This is useful when a model's states need to be saved and loaded separately depending on where the model is used.
	 * For example a page containing multiple grid views using the same model class with the same rememberScenario would
	 * need different save ids to avoid conflicts when storing their filter values.
	 * Defaults to 'default'.
	 *
	 * @var string
	 */
	private $_id = 'default';

	/**
	 * The state key ID for the current scenario
	 *
	 * @var string
	 */
	private $_stateKeyPrefix;

	/**
	 * Flag indicating whether the afterConstruct event callback has happened yet.
	 *
	 * @var bool
	 */
	private $_afterConstructCalled = false;

	public function getStateKeyPrefix()
	{
		if(!isset($this->_stateKeyPrefix))
		{
			$this->_stateKeyPrefix = __CLASS__ . '-' . get_class($this->getOwner()) . '-' . $this->_id;
		}
		return $this->_stateKeyPrefix;
	}

	/**
	 * Sets the unique ID for avoiding conlflicts between multiple uses of the CActiveRecord this behavior is attached to
	 *
	 * @param string $value The unique ID
	 * @return CActiveRecord the AR component that this behavior is attached to.
	 */
	public function setRememberId($value)
	{
		unset($this->_stateKeyPrefix);
		$this->_id = $value;
		if($this->_afterConstructCalled)
			$this->doReadSave();
		return $this->getOwner();
	}

	/**
	 * A unique ID so that CActiveRecord this behavior is attached to may be used multiple times without conflicts
	 *
	 * @return string
	 */
	public function getRememberId()
	{
		return $this->_id;
	}

	/**
	 * Set the scenario(s) that should match the scenario of the CActiveRecord this behavior is attached to before performing any reads/saves.
	 *
	 * @param mixed $value The scenario(s) to match
	 * @return CActiveRecord the AR component that this behavior is attached to.
	 */
	public function setRememberScenario($value)
	{
		if(!is_array($value))
			$value = array($value);
		$this->_rememberScenario = $value;
		if($this->_afterConstructCalled)
			$this->doReadSave();
		return $this->getOwner();
	}

	/**
	 * The scenarios that must be set in the CActiveRecord that this behavior is attached for the filters to be read/saved.
	 *
	 * @return array
	 */
	public function getRememberScenario()
	{
		return $this->_rememberScenario;
	}

	private function doReadSave()
	{
		if(in_array($this->getOwner()->scenario, $this->getRememberScenario()))
		{
			$stateKeyPrefix = $this->getStateKeyPrefix() . '-' . $this->getOwner()->scenario . '-';
			$modelName = get_class($this->getOwner());
			$this->getOwner()->unsetAttributes();

			// read/save sorting order
			$key = $modelName.'_sort';
			if(empty($_GET[$key]))
			{
				$val = Yii::app()->getUser()->getState($stateKeyPrefix . 'system-sort');
				if(!empty($val))
					$_GET[$key] = $val;
			}
			else
			{
				Yii::app()->getUser()->setState($stateKeyPrefix . 'system-sort', $_GET[$key]);
			}

			// read/save page number
			$key = $modelName.'_page';
			if(empty($_GET[$key]))
			{
				// if active page variable was empty check if this is an ajax request (page 1 does not set the page variable, just an ajax flag)
				if(empty($_GET['ajax']))
				{
					// if this is not an ajax request and the state has been previously stored then load the state
					if(Yii::app()->getUser()->hasState($stateKeyPrefix . 'system-page'))
						$_GET[$key] = Yii::app()->getUser()->getState($stateKeyPrefix . 'system-page');
				}
				// Just the ajax flag was set so this must be the first page
				else
				{
					Yii::app()->getUser()->setState($stateKeyPrefix . 'system-page', 1);
				}
			}
			// The active page variable was set so store it
			else
			{
				Yii::app()->getUser()->setState($stateKeyPrefix . 'system-page', $_GET[$key]);
			}

			// If this model's vars are set then set them in this model. Otherwise read the stored model values.
			if(isset($_GET[$modelName]))
			{
				// save search values
				$this->getOwner()->setAttributes($_GET[$modelName]);
				foreach($this->getOwner()->getSafeAttributeNames() as $attribute)
				{
					Yii::app()->getUser()->setState($stateKeyPrefix . $attribute, $this->getOwner()->$attribute);
				}
			}
			else
			{
				// set any default values
				if(is_array($this->defaults) && !Yii::app()->getUser()->hasState($stateKeyPrefix . 'system-defaultsSet'))
				{
					foreach($this->defaults as $attribute => $value)
					{
						if(!Yii::app()->getUser()->hasState($stateKeyPrefix . $attribute))
						{
							Yii::app()->getUser()->setState($stateKeyPrefix . $attribute, $value);
						}
					}
					Yii::app()->getUser()->setState($stateKeyPrefix . 'system-defaultsSet', 1);
				}

				// set values from session
				foreach($this->getOwner()->getSafeAttributeNames() as $attribute)
				{
					if(Yii::app()->getUser()->hasState($stateKeyPrefix . $attribute))
					{
						try
						{
							$this->getOwner()->$attribute = Yii::app()->getUser()->getState($stateKeyPrefix . $attribute);
						}
						catch (Exception $e)
						{
						}
					}
				}
			}
		}
	}

	public function afterConstruct($event)
	{
		$this->doReadSave();
		$this->_afterConstructCalled = true;
	}

	/**
	 * Method is called when we need to unset the filters.
	 * This method does nothing if the current CActiveRecord's scenario is not one of the rememberScenarios
	 *
	 * @return CActiveRecord the AR component that this behavior is attached to.
	 */
	public function unsetFilters()
	{
		if(in_array($this->getOwner()->scenario, $this->getRememberScenario()))
		{
			$stateKeyPrefix = $this->getStateKeyPrefix() . '-' . $this->getOwner()->scenario . '-';
			foreach($this->getOwner()->getSafeAttributeNames() as $attribute)
			{
				if(Yii::app()->getUser()->hasState($stateKeyPrefix . $attribute))
				{
					Yii::app()->getUser()->setState($stateKeyPrefix . $attribute, 1, 1);
				}
			}
			if($this->defaultStickOnClear)
			{
				Yii::app()->getUser()->setState($stateKeyPrefix . 'system-defaultsSet', 1, 1);
			}
		}

		return $this->getOwner();
	}

}
?>