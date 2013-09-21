/**
 * jQuery Yii Active Form + loadJSON plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {

	/**
	 * populates the input for a particular attribute.
	 * @param attribute JSON object containing the attributes and their values to be populated.
	 */
	$.fn.yiiactiveformLoadJSON = function (data) 
	{
		var success = data.success;
		delete data.success;
		$el = this.find("p.message");
		if(data.message) 
		{
			$el.removeClass("hide");
		} 
		else 
		{
			$el.addClass("hide");
		}
		if(success) 
		{
			this[0].reset();
			$el.css({"background": "#E6EFC2", "color": "#264409", "border-color": "#C6D880"});
			this.loadJSON(data);
		} 
		else 
		{
			$el.css({"background": "#FBE3E4", "color": "#8A1F11", "border-color": "#FBC2C4"});
			$.fn.yiiactiveform.updateSummary(this, data);
		}
	};

})(jQuery);