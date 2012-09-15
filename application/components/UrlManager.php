<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UrlManager extends CUrlManager {

	public function createUrl($route, $params = array(), $ampersand = '&') {
        if (!isset($params['language']))
            $params['language'] = Yii::app()->language;
       	$route = "{$params['language']}/$route";
        unset($params['language']);
        return parent::createUrl($route, $params, $ampersand);
    }

}
?>