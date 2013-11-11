/**
 * jQuery Yii Active Form + loadJSON + ContactUs plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {
	
	var methods, contactUsSettings = {};
	
	methods = {
			
		init: function(options)
		{
			var settings = $.extend({
				loadingClass: 'loading',
			}, options || {});
			
			contactUsSettings = settings;
		},
			
		loadJSON: function (data) 
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
			console.debug($el);
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
		},
		
		submit: function()
		{
			var $form = $(this);

			$.ajax({
				url: $form.attr('action'),
				type: $form.attr('method'),
				data: $form.serialize(),
				beforeSend: function(){$form.addClass(contactUsSettings.loadingClass);},
				success: function(data){$form.yiiContactUs("loadJSON", $.parseJSON(data));},
				error: function(data){$form.yiiactiveform("updateSummary", $.parseJSON(data));},
				complete: function(){$form.removeClass(contactUsSettings.loadingClass);}
			});
		}
			
	};
	
	$.fn.yiiContactUs = function (method) 
	{
		if (methods[method]) 
		{
			return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
		} 
		else if (typeof method === 'object' || !method) 
		{
			return methods.init.apply(this, arguments);
		} 
		else 
		{
			$.error('Method ' + method + ' does not exist on jQuery.contactUs');
			return false;
		}
	};

})(jQuery);
