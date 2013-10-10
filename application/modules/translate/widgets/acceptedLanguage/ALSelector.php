<?php

/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 *
 */
class ALSelector extends CWidget
{

	public function run()
	{
		$this->render('ALSelector',
				array(
					'currentLang' => Yii::app()->getLanguage(),
					'languages' => TranslateModule::translator()->getAcceptedLanguages())
		);
	}

}
?>