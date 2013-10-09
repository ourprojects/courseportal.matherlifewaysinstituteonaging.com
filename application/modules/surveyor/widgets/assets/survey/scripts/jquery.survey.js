/**
 * jQuery Yii Active Form + loadJSON + Survey plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {
	
	var methods, surveySettings = {};
	
	methods = {
			
		init: function(options)
		{
			var settings = $.extend({
				loadingClass: 'loading',
			}, options || {});
			
			surveySettings = settings;
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
		
		showCharts: function(questions)
		{
			if(questions.success == undefined)
			{
				return;
			}
			$.each(questions.success, function(index, question){
				if(question.textual == 0)
				{
					highcharts[index + '_highchart_'].series[0].setData(question.data, true);
					$('#' + index).css("display", "none");
					$('#' + index + '_highchart_').css("display", "block");
				}
			});
			$('#' + surveySettings.submitButtonId).css("display", "none");
		},
		
		showQuestions: function(questions)
		{
			if(questions.success == undefined)
			{
				return;
			}
			$.each(questions.success, function(index, question){
				$('#' + index + '_highchart_').css("display", "none");
				$('#' + index).css("display", "inline");
			});
			$('#' + surveySettings.submitButtonId).css("display", "inline");
		},
		
		submit: function()
		{
			var $form = $(this);

			$.ajax({
				url: $form.attr('action'),
				type: $form.attr('method'),
				data: $form.serialize(),
				beforeSend: function(){$form.addClass(surveySettings.loadingClass);},
				success: function(data){$form.yiiSurvey("showCharts", $.parseJSON(data));},
				error: function(data){$form.yiiactiveform("updateSummary", $.parseJSON(data));},
				complete: function(){$form.removeClass(surveySettings.loadingClass);}
			});
		}
			
	};
	
	$.fn.yiiSurvey = function (method) 
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
			$.error('Method ' + method + ' does not exist on jQuery.survey');
			return false;
		}
	};

})(jQuery);
