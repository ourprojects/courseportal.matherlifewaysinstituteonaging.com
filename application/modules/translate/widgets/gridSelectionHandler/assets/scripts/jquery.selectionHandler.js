/**
 * jQuery Translator message viewer/editor plugin file.
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * 
 */

(function ($) {

	var attributes;

	attributes = {
			
			init: function(options)
			{
				$dialog = $(this);
				
				settings = $.extend({
					gridId: '',
					url: document.URL,
					activeRecordClassName: '',
					scopes: [],
					keys: ['id'],
					keyDelimiter: ',',
					statusClass: 'status',
					hiddenClass: 'hide',
					errorClass: 'error',
					warningClass: 'warning',
					successClass: 'success',
					dialogNoCloseClass: 'no-close',
					loadingText: 'Loading...',
					confirmButtons: {
						'Cancel': function() {
							$dialog.dialog("close");
						},
						'Confirm': function() {
							$dialog.tSelectionHandler("handleSelection");
						}
					},
					completeButtons: {
						'Close': function() {
							$dialog.dialog("close");
							$dialog.tSelectionHandler("status");
						}
					}
				}, options || {});
				
				settings.gridSelector = 'div#' + settings.gridId;
				settings.statusSelector ='p.' + settings.statusClass;
				
				$dialog.data('selectionSettings', settings);

				return $dialog;
			},
			
			status: function(status)
			{
				var settings = $(this).data('selectionSettings'),
					$status = $(this).find(settings.statusSelector);

				if(status && status.message)
				{
					$status.text(status.message);
					$status.removeClass([settings.hiddenClass, settings.errorClass, settings.warningClass, settings.successClass].join(' '));
					switch(status.status)
					{
						case 'success':
							$status.addClass(settings.successClass);
							break;
						case 'warning':
							$status.addClass(settings.warningClass);
							break;
						case 'error':
							$status.addClass(settings.errorClass);
							break;
						default:
							break;
					}
				}
				else
				{
					$status.text("");
					$status.addClass(settings.hiddenClass);
					$status.removeClass([settings.errorClass, settings.warningClass, settings.successClass].join(' '));
				}
			},
			
			serializeSelection: function()
			{
				var settings = $(this).data('selectionSettings'),
					$selection = $(settings.gridSelector),
					selection = $selection.yiiGridView('getSelection');
				
				if(selection.length == 0)
				{
					return $.param({scopes: settings.scopes})+'&'+$($selection.yiiGridView.settings[settings.gridId].filterSelector).serialize();
				}

				data = {
						scopes: settings.scopes,
				};
				data[settings.activeRecordClass] = {};
				
				for(var i = 0; i < selection.length; i++)
				{
					var keys = selection[i].split(settings.keyDelimiter);
					for(var j = 0; j < keys.length; j++)
					{
						if(data[settings.activeRecordClass][settings.keys[j]] === undefined)
						{
							data[settings.activeRecordClass][settings.keys[j]] = [];
						}
						data[settings.activeRecordClass][settings.keys[j]].push(keys[j]);
					}
				}

				return $.param(data);
			},
			
			open: function()
			{
				var $dialog = $(this),
					settings = $dialog.data('selectionSettings');

				$dialog.tSelectionHandler('sendRequest', $dialog.tSelectionHandler('serializeSelection')+'&dryRun=1');
				$dialog.dialog("option", "buttons", settings.confirmButtons);
				$dialog.dialog('open');
			},
			
			handleSelection: function()
			{
				var $dialog = $(this),
					settings = $dialog.data('selectionSettings');

				$dialog.tSelectionHandler('sendRequest', $dialog.tSelectionHandler('serializeSelection')+'&dryRun=0', true);
				$dialog.dialog("option", "buttons", settings.completeButtons);
			},
			
			sendRequest: function(data, updateGridOnComplete) 
			{
				var $dialog = $(this),
					settings = $dialog.data('selectionSettings'),
					$progress = $dialog.find(settings.progressBarSelector);
				
				$.ajax({
					url: settings.url,
					type: 'GET',
					data: data,
					beforeSend: function(){
						$dialog.tSelectionHandler('status', {status: 'normal', message: settings.loadingText});
						$progress.removeClass(settings.hiddenClass);
						$dialog.dialog('option', 'dialogClass', settings.dialogNoCloseClass);
						$dialog.dialog("option", "position", ['center', 'center']);
						return true;
					},
					success: function(data){
						$dialog.tSelectionHandler('status', $.parseJSON(data));
						$dialog.dialog("option", "position", ['center', 'center']);
						return true;
					},
					error: function(jqXHR, textStatus, errorThrown){
						$dialog.tSelectionHandler('status', {'status': 'error', 'message': errorThrown});
						$dialog.dialog("option", "position", ['center', 'center']);
						return true;
					},
					complete: function(){
						if(updateGridOnComplete !== undefined & updateGridOnComplete)
						{
							$(settings.gridSelector).yiiGridView('update');
						}
						$progress.addClass(settings.hiddenClass);
						$dialog.dialog('option', 'dialogClass', '');
						$dialog.dialog("option", "position", ['center', 'center']);
						return true;
					}
				});
			}

	};

	$.fn.tSelectionHandler = function(method) 
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
			$.fn.yiiGridView.update(this);
		}
	};
	
	/**
	 * Returns the configuration for the specified form.
	 * The configuration contains all needed information to perform ajax-based validation.
	 * @param form jquery the jquery representation of the form
	 * @return object the configuration for the specified form.
	 */
	$.fn.tSelectionHandler.getSettings = function (selection) {
		return $(selection).data('selectionSettings');
	};

})(jQuery);