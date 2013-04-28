(function($) {
	$.crud = function(options) {
		var settings = $.extend(crudDefaults, options);

		$('#' + settings.idFieldName).attr('disabled', 'disabled');

		var $rows = $(settings.rows);

		$rows.click(function() {
			var $this = $(this);

			if ($this.hasClass(settings.skipClassName)) return;
			$rows.removeClass(settings.selectedClassName);
			$this.addClass(settings.selectedClassName);

			var data = {};
			for (var i = 0; i < settings.attributes.length; i++) {
				var attr = settings.attributes[i];
				data[attr] = $this.attr(attr);
				$('#' + attr).val(data[attr]);
			}

			$(settings.actionLabel).text(settings.updateText);
			$(settings.deleteButton).removeAttr('disabled');
			$(settings.actionField).val('update');
		});

		$(settings.createButton).click(function() {
			var $this = $(this);
			$rows.removeClass(settings.selectedClassName);
			$(settings.deleteButton).attr('disabled', 'disabled');

			for (var i = 0; i < settings.attributes.length; i++) {
				var attr = settings.attributes[i];
				$('#' + attr).val('');
			}

			$(settings.actionLabel).text(settings.createText);

			$(settings.actionField).val('create');
		});
		$(settings.deleteButton).click(function() {
			var $this = $(this);
			if ($this.attr('disabled')) return;

			var data = {};
			data[settings.idFieldName] = $('#' + settings.idFieldName).val();

			$.post(settings.deleteUrl, data, settings.responseHandler);
		});
		$(settings.submitButton).click(function() {
			var action = $(settings.actionField).val();

			var data = {};
			for (var i = 0; i < settings.attributes.length; i++) {
				var attr = settings.attributes[i];
				data[attr] = $('#' + attr).val();
			}

			switch (action) {
				case "create":
					$.post(settings.createUrl, data, settings.responseHandler);
					break;
				case "update":
					$.post(settings.updateUrl, data, settings.responseHandler);
					break;
			}
		});

	};

	var crudDefaults = {
		selectedClassName: 'selected',
		skipClassName: 'header',
		rows: '.view tr',
		submitButton: '#submit',
		createButton: '#add',
		deleteButton: '#delete',
		attributes: [],
		createUrl: '/',
		updateUrl: '/',
		deleteUrl: '/',
		idFieldName: 'id',
		actionField: '#act',
		actionLabel: '#action',
		updateText: "Редактирование",
		createText: "Добавление",
		responseHandler: function(error) {
			if (error) {
				alert(error);
			} else {
				location.reload();
			}
		}
	};
})(jQuery);