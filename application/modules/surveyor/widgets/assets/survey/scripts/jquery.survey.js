/**
 * jQuery Yii Active Form + loadJSON + Survey plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {
	
	var methods;
	
	methods = {
			
		init: function(options)
		{
			var settings = $.extend({
				loadingClass: 'loading',
			}, options || {});

			$(this).data('surveySettings', settings);
		},
			
		loadJSON: function (data) 
		{
			var success = data.success;
			delete data.success;
			$el = this.find("p.message");
			if(data.message) 
			{
				$el.css("display", "");
			} 
			else 
			{
				$el.css("display", "none");
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
			$(this).yiiSurvey('hideQuestions', questions);
			$.each(questions, function(index, question){
				if(question.textual == 0)
				{
					highcharts[index + '_highchart_'].series[0].setData(question.data, true);
					$('#' + index + '_highchart_').css("display", "");
				}
			});
		},
		
		hideCharts: function(questions)
		{
			$.each(questions, function(index, question){
				$('#' + index + '_highchart_').css("display", "none");
			});
		},
		
		showQuestions: function(questions)
		{
			$(this).yiiSurvey("hideCharts", questions);
			$.each(questions, function(index, question){
				$('#' + index).css("display", "");
			});
			$('#' + $(this).data('surveySettings').submitButtonId).css("display", "");
		},
		
		hideQuestions: function(questions)
		{
			$.each(questions, function(index, question){
				$('#' + index).css("display", "none");
			});
			$('#' + $(this).data('surveySettings').submitButtonId).css("display", "none");
		},
		
		showRows: function(questions)
		{
			$.each(questions, function(index, question){
				$('#' + index + "_row_").css("display", "");
			});
		},
		
		hideRows: function(questions)
		{
			$.each(questions, function(index, question){
				$('#' + index + "_row_").css("display", "none");
			});
			$('#' + $(this).data('surveySettings').submitButtonId).css("display", "none");
		},
		
		showMessage: function(message)
		{
			$message = $('#'+$(this).data('surveySettings').messageId);
			$message.html(message);
			$message.css("display", "");
		},
		
		hideMessage: function()
		{
			$('#'+$(this).data('surveySettings').messageId).css("display", "none");
		},
		
		submit: function()
		{
			var $survey = $(this), $form = $survey.find("form");
			
			$.ajax({
				url: $form.attr('action'),
				type: $form.attr('method'),
				data: $form.serialize(),
				beforeSend: function(){
					$form.find('#' + $survey.data('surveySettings').submitButtonId).attr('disabled', 'disabled');
					$form.addClass($survey.data('surveySettings').loadingClass);
				},
				success: function(data){
					$data = $.parseJSON(data);
					settings = $survey.data('surveySettings');
					if(settings.messageShow)
					{
						$survey.yiiSurvey("showMessage", $data.message);
					}
					if($data.success)
					{
						if(settings.highchartsShow)
						{
							$survey.yiiSurvey("showCharts", $data.success);
						}
						else
						{
							$survey.yiiSurvey("hideRows", $data.success);
						}
					}
				},
				error: function(data){
					$form.yiiactiveform("updateSummary", $.parseJSON(data));
				},
				complete: function(){
					$form.removeClass($survey.data('surveySettings').loadingClass);
					$form.find('#' + $survey.data('surveySettings').submitButtonId).removeAttr('disabled');
				}
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
