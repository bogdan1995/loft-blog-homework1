(function () {
	app = {

		initializate : function () {
			this.setUpListeners();
			this.addClassToNav();
		},

		addClassToNav: function () {
			var items = $('.sidebar-items'),
			links = items.find('a'),
			link = location.href.slice(29);

			$.each(links, function (index, val) {
				var item = $(val);
			
				if (item.attr('href') === link) {
					item.closest(items).addClass('active');
				}
			})
		},

		setUpListeners : function () {
			$('.add').on('click', this.showForm);
			$('form').on('submit', this.validForm);
			$('form').on('keydown', 'input', this.destroyTooltipFromInput);
			$('form').on('keydown', 'textarea', this.destroyTooltipFromTextarea);
			$('form').on('reset',  this.cleanForm);
		},

		DURATION : 300,	

		showForm : function () {
			var popup = $('.popup'),
				popupInner = popup.find('.popup-inner');
				closeBtn = popup.find('.close');

			popupInner.removeClass('fadeOutRightBig')

			popup.fadeIn(this.DURATION);
			popupInner.addClass('fadeInLeftBig');

			closeBtn.on('click', function (callback) {
				popupInner.removeClass('fadeInLeftBig');
				popupInner.addClass('fadeOutRightBig');
				popup.fadeOut(this.DURATION);
			})
		},

		validForm : function (e) {
			e.preventDefault();

			var form = $(this);

			if (app.submitForm(form) === false) return false;

            var str = form.serialize();

            $.ajax({
                url: 'php/send_mail.php',
                type: 'POST',
                data: str
            })
                .done(function (msg) {
                    if (msg === "OK") {
                        var result = '<div class="comeClass" >Ваше сообщение успешно отправлено </div>'
                        form.html(result);
                    }else {
                        form.html(msg);
                    }
                })
                .always (function () {
                console.log('sending message');
            });
		},

		submitForm : function(form) {
			var inputs = form.find('input'),
				textarea = form.find('textarea'),
				tooltip = textarea.closest('.form-group').find('.tooltip');

				valid = true;


				$.each(inputs, function(index,val) {
					var input = $(val),
						val = input.val(),
						formGroup = input.closest('.form-group'),
						tooltip = formGroup.find('.tooltip');

						if (val.length === 0) {
							tooltip.addClass('active');
							valid = false;
						} else {
							tooltip.removeClass('active');
						}
				})

				if (textarea.val().length === 0) {
					tooltip.addClass('active');
					valid = false;
				} else {
					tooltip.removeClass('active');
				}

				return valid;
		},

		destroyTooltipFromTextarea : function () {
			$(this).parents('.form-group').find('.tooltip').removeClass('active');
		},
		destroyTooltipFromInput : function () {
			$(this).parents('.form-group').find('.tooltip').removeClass('active');
		},

		cleanForm : function () {
			$(this).find('.tooltip').removeClass('active');
		}
	}

	app.initializate();

})();