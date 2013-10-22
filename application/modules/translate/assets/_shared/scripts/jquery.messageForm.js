/**
 * jQuery Translator message viewer/editor plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {

	var attributes, messageSettings = {};

	attributes = {
			
			init: function(options)
			{
				messageSettings = $.extend({
					loadingClass: 'loading',
					scenario: "create",
					loading: true,
					saveText: "Save",
					createText: "Create"
				}, options || {});
				
				this.tMessageForm("message", "");
				this.find("form")[0].reset();
				this.tMessageForm("scenario", messageSettings.scenario);
				this.tMessageForm("loading", messageSettings.loading);

				return this;
			},
			
			id: function(value) 
			{
				var element = this.find("input#Message_id");
				if(value)
				{
					return element.val(value);
				}
				return element.val("");
			},
			
			language: function(value) 
			{
				var element = this.find("input#Message_language");
				if(value)
				{
					return element.val(value);
				}
				return element.val("");
			},
			
			categories: function(value) 
			{
				var element = this.find("select#MessageSource_categories");
				if(value)
				{
					element.empty();
					$.each(value, function (value, attributes) {
						element.append($("<option></option>").val(value).text(attributes.text).attr('selected', attributes.selected));
					});
					return element;
				}
				var values = [];
				element.children(":selected").each(function(){
					values[$(this).val()] = $(this).text("");
				});
				return values;
			},
			
			message: function(value) 
			{
				var element = this.find("textarea#MessageSource_message");
				if(value)
				{
					return element.text(value);
				}
				return element.text("");
			},
			
			translation: function(value) 
			{
				var element = this.find("textarea#Message_translation");
				if(value)
				{
					return element.text(value);
				}
				return element.text("");
			},
			
			scenario: function(scenario)
			{
				switch(scenario)
				{
					case 'update':
						this.find("input[type='submit']").val(messageSettings.saveText);
						this.find("input[name='_method']").val("PUT");
						break;
					default:
						this.find("input[type='submit']").val(messageSettings.createText);
						this.find("input[name='_method']").val("POST");
						break;
				}
				return this;
			},
			
			status: function(success, message)
			{
				var $status = this.find("p.status");
				if(message)
				{
					$status.text(message);
					$status.removeClass('hide error warning success');
					switch(success)
					{
						case 'error':
							$status.addClass('success');
							break;
						case 'warning':
							$status.addClass('warning');
							break;
						default:
							$status.addClass('error');
					}
				}
				else
				{
					$status.text("");
					$status.addClass('hide');
					$status.removeClass('error warning success');
				}
			},
			
			title: function(title)
			{
				this.parent("div#message-form-dialog").dialog("option", "title", title);
			},
			
			submit: function()
			{
				var $form = $(this);

				$.ajax({
					url: $form.attr('action'),
					type: $form.attr('method'),
					data: $form.serialize(),
					beforeSend: function(){$form.addClass(messageSettings.loadingClass);},
					success: function(data){
						$.each($.parseJSON(data), function(attribute, value) {
							$form.tMessageForm(attribute, value);
						});
					},
					error: function(jqXHR, textStatus, errorThrown){
						$form.tMessageForm('status', 'error', errorThrown);
					},
					complete: function(){$form.removeClass(messageSettings.loadingClass);}
				});
			},
			
			load: function(href)
			{
				var $form = $(this);

				$.ajax({
					url: href,
					type: 'GET',
					beforeSend: function(){$form.addClass(messageSettings.loadingClass);},
					success: function(data){
						$.each($.parseJSON(data), function(attribute, value) {
							$form.tMessageForm(attribute, value);
						});
					},
					error: function(jqXHR, textStatus, errorThrown){
						$form.tMessageForm('status', 'error', errorThrown);
					},
					complete: function(){$form.removeClass(messageSettings.loadingClass);}
				});
			}

	};

	$.fn.tMessageForm = function(method) 
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