<?php

Yii::import('zii.widgets.CDetailView');

class EDetailView extends CDetailView
{

	/**
	 * This method is used by run() to render item row
	 *
	 * @param array $options config options for this item/attribute from {@link attributes}
	 * @param string $templateData data that will be inserted into {@link itemTemplate}
	 * @since 1.1.11
	 */
	protected function renderItem($options, $templateData)
	{
		$templateData['{attribute}'] = $options['name'];
		echo strtr(isset($options['template']) ? $options['template'] : $this->itemTemplate, $templateData);
	}
	
}