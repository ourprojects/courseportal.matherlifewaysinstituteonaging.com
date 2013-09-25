/**
 * jQuery Spencer Powell User Activity Form plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {

	var attributes;

	attributes = {
			
			init: function(options)
			{
				this.spUserActivityForm("name", "");
				this.spUserActivityForm("description", "");
				this.find("form")[0].reset();
				if(!options)
				{
					options = {};
				}
				if(options.scenario === undefined) 
				{
					options.scenario = "create";
				}
				if(options.loading === undefined)
				{
					options.loading = true;
				}
				this.spUserActivityForm("scenario", options.scenario);
				this.spUserActivityForm("loading", options.loading);
				return this;
			},
		
			name: function(value) 
			{
				var element = this.find("h2#Activity_name");
				if(value === undefined || value === null)
				{
					return element.text("");
				}
				return element.text(value);
			},
			
			description: function(value) 
			{
				var element = this.find("p#Activity_description");
				if(value === undefined || value === null)
				{
					return element.text("");
				}
				return element.text(value);
			},
			
			dimensions: function(value) 
			{
				var element = this.find("select#UserActivity_dimensions");
				if(value === undefined || value === null)
				{
					var values = [];
					element.children(":selected").each(function(){
						values[$(this).val()] = $(this).text("");
					});
					return values;
				}
				element.empty();
				$.each(value, function (value, attributes) {
					element.append($("<option></option>").val(value).text(attributes.text).attr('selected', attributes.selected));
				});
				return element;
			},

			dateCompleted: function(value) 
			{
				var element = this.find("input#UserActivity_dateCompleted");
				if(value === undefined || value === null)
				{
					return element.datepicker("getDate");
				}
				return element.datepicker("setDate", value);
			},
			
			comment: function(value) 
			{
				var element = this.find("textarea#UserActivity_comment");
				if(value === undefined || value === null)
				{
					return element.text("");
				}
				return element.text(value);
			},
			
			activity_id: function(value) 
			{
				var element = this.find("input#UserActivity_activity_id");
				if(value === undefined || value === null)
				{
					return element.text("");
				}
				return element.val(value);
			},
			
			id: function(value) 
			{
				var element = this.find("input#UserActivity_id");
				if(value === undefined || value === null)
				{
					return element.text("");
				}
				return element.val(value);
			},
			
			scenario: function(scenario)
			{
				switch(scenario)
				{
					case 'update':
						this.find("input[type='submit']").val("Save");
						this.find("input[name='_method']").val("PUT");
						break;
					default:
						this.find("input[type='submit']").val("Create");
						this.find("input[name='_method']").val("POST");
						break;
				}
				return this;
			},
			
			loading: function(loading)
			{
				if(loading)
				{
					return this.addClass("loading");
				}
				return this.removeClass("loading");
			},
			
			message: function(message)
			{
				var $message = this.find("p.message");
				if(message)
				{
					$message.text(message);
					$message.removeClass("hide");
				}
				else
				{
					$message.text("");
					$message.addClass("hide");
				}
			},

	};

	$.fn.spUserActivityForm = function(method) 
	{
		if(attributes[method]) 
		{
			return attributes[method].apply(this, Array.prototype.slice.call(arguments, 1));
		}
		else if(typeof method === 'object' || !method) 
		{
			return attributes.init.apply(this, arguments);
		}
		else
		{
			var error = {};
			error[method] = Array.prototype.slice.call(arguments, 1);
			$.fn.yiiactiveform.updateSummary(this.find("form"), error);
		}
	};

})(jQuery);