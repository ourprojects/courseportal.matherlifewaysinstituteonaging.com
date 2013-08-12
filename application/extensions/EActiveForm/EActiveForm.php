<?php
class EActiveForm extends CActiveForm
{

	public $inputIdPrefix = '';

	public function init()
	{
		parent::init();
		if(!is_string($this->inputIdPrefix))
		{
			$this->inputIdPrefix = $this->inputIdPrefix ? $this->htmlOptions['id'] : '';
		}
	}

	public function run()
	{
		if(is_array($this->focus))
			$this->focus = '#'.$this->inputIdPrefix.CHtml::activeId($this->focus[0], $this->focus[1]);
		return parent::run();
	}

	public function error($model,$attribute,$htmlOptions=array(),$enableAjaxValidation=true,$enableClientValidation=true)
	{
		if(!isset($htmlOptions['inputID']))
		{
			$htmlOptions['inputID'] = $this->inputIdPrefix.CHtml::activeId($model,$attribute);
		}
		return parent::error($model, $attribute, $htmlOptions, $enableAjaxValidation, $enableClientValidation);
	}

	public function label($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['for']))
		{
			$htmlOptions['for'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::label($model,$attribute,$htmlOptions);
	}

	public function labelEx($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['for']))
		{
			$htmlOptions['for'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::labelEx($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a url field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeUrlField}.
	 * Please check {@link CHtml::activeUrlField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 * @since 1.1.11
	 */
	public function urlField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::urlField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders an email field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeEmailField}.
	 * Please check {@link CHtml::activeEmailField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 * @since 1.1.11
	 */
	public function emailField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::emailField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a number field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeNumberField}.
	 * Please check {@link CHtml::activeNumberField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 * @since 1.1.11
	 */
	public function numberField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::numberField($model,$attribute,$htmlOptions);
	}

	/**
	 * Generates a range field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeRangeField}.
	 * Please check {@link CHtml::activeRangeField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 * @since 1.1.11
	 */
	public function rangeField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::rangeField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a date field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeDateField}.
	 * Please check {@link CHtml::activeDateField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 * @since 1.1.11
	 */
	public function dateField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::dateField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a text field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeTextField}.
	 * Please check {@link CHtml::activeTextField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 */
	public function textField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::textField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a hidden field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeHiddenField}.
	 * Please check {@link CHtml::activeHiddenField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 */
	public function hiddenField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::hiddenField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a password field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activePasswordField}.
	 * Please check {@link CHtml::activePasswordField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated input field
	 */
	public function passwordField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::passwordField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a text area for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeTextArea}.
	 * Please check {@link CHtml::activeTextArea} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated text area
	 */
	public function textArea($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::textArea($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a file field for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeFileField}.
	 * Please check {@link CHtml::activeFileField} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated input field
	 */
	public function fileField($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::fileField($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a radio button for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeRadioButton}.
	 * Please check {@link CHtml::activeRadioButton} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated radio button
	 */
	public function radioButton($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::radioButton($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a checkbox for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeCheckBox}.
	 * Please check {@link CHtml::activeCheckBox} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated check box
	 */
	public function checkBox($model,$attribute,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::checkBox($model,$attribute,$htmlOptions);
	}

	/**
	 * Renders a dropdown list for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeDropDownList}.
	 * Please check {@link CHtml::activeDropDownList} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data data for generating the list options (value=>display)
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated drop down list
	 */
	public function dropDownList($model,$attribute,$data,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::dropDownList($model,$attribute,$data,$htmlOptions);
	}

	/**
	 * Renders a list box for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeListBox}.
	 * Please check {@link CHtml::activeListBox} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data data for generating the list options (value=>display)
	 * @param array $htmlOptions additional HTML attributes.
	 * @return string the generated list box
	 */
	public function listBox($model,$attribute,$data,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::listBox($model,$attribute,$data,$htmlOptions);
	}

	/**
	 * Renders a checkbox list for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeCheckBoxList}.
	 * Please check {@link CHtml::activeCheckBoxList} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data value-label pairs used to generate the check box list.
	 * @param array $htmlOptions addtional HTML options.
	 * @return string the generated check box list
	 */
	public function checkBoxList($model,$attribute,$data,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::checkBoxList($model,$attribute,$data,$htmlOptions);
	}

	/**
	 * Renders a radio button list for a model attribute.
	 * This method is a wrapper of {@link CHtml::activeRadioButtonList}.
	 * Please check {@link CHtml::activeRadioButtonList} for detailed information
	 * about the parameters for this method.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data value-label pairs used to generate the radio button list.
	 * @param array $htmlOptions addtional HTML options.
	 * @return string the generated radio button list
	 */
	public function radioButtonList($model,$attribute,$data,$htmlOptions=array())
	{
		if(!isset($htmlOptions['id']))
		{
			$htmlOptions['id'] = $this->inputIdPrefix.CHtml::activeId($model, $attribute);
		}
		return parent::radioButtonList($model,$attribute,$data,$htmlOptions);
	}

}