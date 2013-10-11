<?php
/**
 * Google Analytics Widget
 *
 * @author Louis DaPrato
 */
class LDGoogleAnalytics extends CWidget {

	const ID = 'LDGoogleAnalytics';

	const VIEW_NAME = 'GoogleAnalytics';

	/**
	 * Account ID
	 *
	 * @var string
	 */
	private $_accountID = null;

	/**
	 * Automatically add trackPageview when render is called
	 *
	 * @var bool
	 */
	public $autoTrackPageview = true;

	public $viewName = self::VIEW_NAME;

	/**
	 * Available Google Analytics options as of (May 4, 2012), pulled from
	 * https://developers.google.com/analytics/devguides/collection/gajs/methods/
	 *
	 * @var array
	 */
	protected $_availableOptions = array
	(
		'_addIgnoredOrganic',
		'_addIgnoredRef',
		'_addItem',
		'_addOrganic',
		'_addTrans',
		'_anonymizeIp',
		'_clearIgnoredOrganic',
		'_clearIgnoredRef',
		'_clearOrganic',
		'_cookiePathCopy',
		'_createTracker',
		'_deleteCustomVar',
		# @TODO: Allow for the link* methods to be called
		#'_link',
		#'_linkByPost',
		'_setAccount',
		'_setAllowAnchor',
		'_setAllowLinker',
		'_setCampContentKey',
		'_setCampMediumKey',
		'_setCampNOKey',
		'_setCampNameKey',
		'_setCampSourceKey',
		'_setCampTermKey',
		'_setCampaignCookieTimeout',
		'_setCampaignTrack',
		'_setClientInfo',
		'_setCookiePath',
		'_setCustomVar',
		'_setDetectFlash',
		'_setDetectTitle',
		'_setDomainName',
		'_setLocalGifPath',
		'_setLocalRemoteServerMode',
		'_setLocalServerMode',
		'_setReferrerOverride',
		'_setRemoteServerMode',
		'_setSampleRate',
		'_setSessionCookieTimeout',
		'_setSiteSpeedSampleRate',
		'_setVisitorCookieTimeout',
		'_trackEvent',
		'_trackPageview',
		'_trackSocial',
		'_trackTiming',
		'_trackTrans',
	);

	/**
	 * An array of all the methods called for _gaq
	 *
	 * @var array
	*/
	protected $_calledOptions = array();

	/**
	 * Method data to be pushed into the _gaq object
	 *
	 * @var array
	*/
	private $_data = array();

	public function run() {
		// Check to see if we need to throw in the trackPageview call
		if(!in_array('_trackPageview', $this->_calledOptions) && $this->autoTrackPageview)
			$this->_trackPageview();

		$this->render($this->viewName, $this->_data, false);
	}

	/**
	 * Render the Google Analytics code
	 *
	 * @param boolean $return Whether to return Google Analytics JavaScript code as a string or not. See render method of Yii CWidget for details.
	 * @return mixed
	 */
	public function render($view, $data = array(), $return = false) {
		if($this->_accountID !== null)
		{
			$js = parent::render($view, array('_data' => $data), true);

			return $return ? $js : Yii::app()->getClientScript()->registerScript($this->getId(), $js, CClientScript::POS_BEGIN);
		}
		else
		{
			Yii::log(Yii::t(self::ID, self::ID . '- Google Analytics account ID has not been set. Google Analytics will be disabled until the account ID is set.', array(), 'en', Yii::app()->sourceLanguage), CLogger::LEVEL_WARNING);
		}
	}

	/**
	 * Setter for the Google Analytics account ID.
	 * Cleans up and verifies the Google Analytics account ID before setting it.
	 *
	 * @param string $accountID A valid Google Analytics account ID.
	 */
	public function setAccountID($accountID) {
		if(preg_match('~^(UA|MO)-\d{4,10}-\d{1,3}$~i', $accountID))
		{
			$this->_accountID = strtoupper($accountID);
			$this->_setAccount($this->_accountID);
		}
		elseif($accountID !== null)
		{
			throw new CHttpException(500, Yii::t(self::ID, self::ID . '- Invalid Google Analytics account ID.', array(), 'en'));
		}
	}

	/**
	 * Magic Method for options. If the name is not an available option CWidget's __call method is used instead.
	 *
	 * @param string $name The name of the option to set arguments for.
	 * @param array  $arguments The arguments to be set for the named option.
	 */
	public function __call($name, $arguments) {
		if($name[0] === '_' && in_array($name, $this->_availableOptions))
		{
			array_push($this->_data, array_merge(array($name), $arguments));
			$this->_calledOptions[] = $name;
			return true;
		}
		return parent::__call($name, $arguments);
	}

}