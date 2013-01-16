<?php

/**
 * EHighcharts class file.
 *
 * @author Milo Schuman <miloschuman@gmail.com>
 * @link http://yii-highcharts.googlecode.com/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @version 0.5
 */

/**
 * EHighcharts encapsulates the {@link http://www.highcharts.com/Highcharts}
 * charting library's Chart object.
 *
 * To use this widget, you may insert the following code in a view:
 * <pre>
 * $this->Widget('ext.highcharts.EHighcharts', array(
 *    'options'=>array(
 *       'title' => array('text' => 'Fruit Consumption'),
 *       'xAxis' => array(
 *          'categories' => array('Apples', 'Bananas', 'Oranges')
 *       ),
 *       'yAxis' => array(
 *          'title' => array('text' => 'Fruit eaten')
 *       ),
 *       'series' => array(
 *          array('name' => 'Jane', 'data' => array(1, 0, 4)),
 *          array('name' => 'John', 'data' => array(5, 7, 3))
 *       )
 *    )
 * ));
 * </pre>
 *
 * By configuring the {@link $options} property, you may specify the options
 * that need to be passed to the EHighcharts JavaScript object. Please refer to
 * the demo gallery and documentation on the {@link http://www.highcharts.com/
 * EHighcharts website} for possible options.
 *
 * Alternatively, you can use a valid JSON string in place of an associative
 * array to specify options:
 *
 * <pre>
 * $this->Widget('ext.highcharts.EHighcharts', array(
 *    'options'=>'{
 *       "title": { "text": "Fruit Consumption" },
 *       "xAxis": {
 *          "categories": ["Apples", "Bananas", "Oranges"]
 *       },
 *       "yAxis": {
 *          "title": { "text": "Fruit eaten" }
 *       },
 *       "series": [
 *          { "name": "Jane", "data": [1, 0, 4] },
 *          { "name": "John", "data": [5, 7,3] }
 *       ]
 *    }'
 * ));
 * </pre>
 *
 * Note: You must provide a valid JSON string (e.g. double quotes) when using
 * the second option. You can quickly validate your JSON string online using
 * {@link http://jsonlint.com/ JSONLint}.
 *
 * Note: You do not need to specify the <code>chart->renderTo</code> option as
 * is shown in many of the examples on the EHighcharts website. This value is
 * automatically populated with the id of the widget's container element. If you
 * wish to use a different container, feel free to specify a custom value.
 */
class EHighcharts extends CWidget {
	
	const ID = 'EHighcharts';

	public $options = array();
	public $htmlOptions = array();

	/**
	 * Renders the widget.
	 */
	public function run() {
		$this->htmlOptions['id'] = $this->getId();

		echo CHtml::openTag('div', $this->htmlOptions);
		echo CHtml::closeTag('div');

		// check if options parameter is an array or a json string
		if(!is_array($this->options) && is_string($this->options) && !$this->options = CJSON::decode($this->options))
			throw new CException(Yii::t(self::ID, 'The options parameter is not an array or a valid JSON string.'));

		// merge options with default values
		$this->options = CMap::mergeArray($this->getDefaultOptions(), $this->options);
		$this->registerScripts(__CLASS__ . "#{$this->htmlOptions['id']}", 'highcharts["'.$this->htmlOptions['id'].'"] = new Highcharts.Chart('.CJavaScript::encode($this->options).');');
	}
	
	public function getDefaultOptions() {
		return array('chart' => array('renderTo' => $this->getId()), 'exporting' => array('enabled' => true));
	}

	/**
	 * Publishes and registers the necessary script files.
	 *
	 * @param string the id of the script to be inserted into the page
	 * @param string the embedded script to be inserted into the page
	 */
	protected function registerScripts($id, $embeddedScript) {
		$assetsDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR;
		
		if(is_dir($assetsDir)) {
			$baseUrl = Yii::app()->getAssetManager()->publish($assetsDir, false, 1, YII_DEBUG);
			
			$cs = Yii::app()->getClientScript();
			$cs->registerCoreScript('jquery');
			$cs->registerScriptFile("$baseUrl/" . (YII_DEBUG ? 'highcharts.src.js' : 'highcharts.js'));
	
			// register exporting module if enabled via the 'exporting' option
			if($this->options['exporting']['enabled']) {
				$cs->registerScriptFile("$baseUrl/modules/" . (YII_DEBUG ? 'exporting.src.js' : 'exporting.js'));
			}
			
			// register global theme if specified via the 'theme' option
			if(isset($this->options['theme'])) {
				$cs->registerScriptFile("$baseUrl/themes/{$this->options['theme']}.js");
			}
			$cs->registerScript('highchartsGlobalVariable', 'var highcharts = [];', CClientScript::POS_HEAD);
			$cs->registerScript($id, $embeddedScript, CClientScript::POS_LOAD);
		} else {
			throw new CException(Yii::t(
					self::ID,
					self::ID.' - Error: Couldn\'t find assets to publish. Please make sure directory exists and is readable {dir_name}',
					array('{dir_name}' => $assetsDir))
			);
		}
	}
}