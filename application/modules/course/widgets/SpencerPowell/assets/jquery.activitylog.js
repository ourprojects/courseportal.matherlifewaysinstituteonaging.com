/**
 * jQuery Spencer Powell User Activity Form plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {

	var methods, scenarios = [];

	methods = {
			
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
				if(value === undefined)
				{
					return element.text();
				}
				return element.text(value);
			},
			
			description: function(value) 
			{
				var element = this.find("p#Activity_description");
				if(value === undefined)
				{
					return element.text();
				}
				return element.text(value);
			},
			
			dimensions: function(value) 
			{
				var element = this.find("select#UserActivity_dimensions");
				if(value === undefined)
				{
					var values = [];
					element.children(":selected").each(function(){
						values[$(this).val()] = $(this).text();
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
				if(value === undefined)
				{
					return element.datepicker("getDate");
				}
				return element.datepicker("setDate", value);
			},
			
			comment: function(value) 
			{
				var element = this.find("input#UserActivity_comment");
				if(value === undefined)
				{
					return element.text();
				}
				return element.val(value);
			},
			
			activity_id: function(value) 
			{
				var element = this.find("input#UserActivity_activity_id");
				if(value === undefined)
				{
					return element.text();
				}
				return element.val(value);
			},
			
			id: function(value) 
			{
				var element = this.find("input#UserActivity_id");
				if(value === undefined)
				{
					return element.text();
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
			}
		
	};

	$.fn.spUserActivityForm = function(method) 
	{
		if(methods[method]) 
		{
			return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
		}
		else if (typeof method === 'object' || !method) 
		{
			return methods.init.apply(this, arguments);
		}
		else
		{
			$.error('Method ' + method + ' does not exist on jQuery.spUserActivityForm');
			return false;
		}
	};

})(jQuery);