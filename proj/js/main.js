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
		}
	}

	app.initializate();

})();