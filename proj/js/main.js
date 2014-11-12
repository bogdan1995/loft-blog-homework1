(function () {
	app = {

		initializate : function () {
			this.setUpListeners();
		},
		setUpListeners : function () {
			$('.add').on('click', this.showForm);
			$('.project').on('hover', this.func);
		},

		DURATION : 300,

		func : function () {
			var proj = $('.project'),
				hover = proj.find('.hover');

				hover.fadeIn(DURATION);
		},		

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