(function () {
    app = {

        // application initialization
        initializate: function () {
            this.setUpListeners();
            this.placeholders();
        },

        // Initialization placeholders for ie8
        placeholders: function () {
            $('input, textarea').placeholder();
        },

        // Listening to events
        setUpListeners: function () {
            $('.add').on('click', this.showForm);
            $('form').on('submit', this.validForm);
            $('form').on('keydown', 'input, textarea', this.destroyTooltipFromInput);
            $('form').on('reset', this.clearForm);
        },

        // Animation time
        DURATION: 300,

        // Show popup
        showForm: function () {
            var popup = $('.popup'),
                popupInner = popup.find('.popup-inner'),
                closeBtn = popup.find('.close');

            popupInner.removeClass('fadeOutRightBig');

            popup.fadeIn(this.DURATION);
            popupInner.addClass('fadeInLeftBig');

            // Events to close popup
            closeBtn.on('click', function (callback) {
                popupInner.removeClass('fadeInLeftBig');
                popupInner.addClass('fadeOutRightBig');
                // Clear fields
                $.each($('input, textarea'), function (index, val) {
                    var elem = $(val);

                    if (elem.attr('type') != 'submit') {
                        elem.val('');
                    }
                });
                popup.fadeOut(this.DURATION);
            })
        },

        // Validation form
        validForm: function (e) {
            e.preventDefault();

            var form = $(this);

            if (app.submitForm(form) === false) return false;

            var str = form.serialize();

            // Ajax form submission method
            $.ajax({
                url: 'php/send_mail.php',
                type: 'POST',
                data: str,
                success: function (result) {
                    // Response from the server
                    var answer = result.slice(-5, result.length);
                    if (answer === 'Error') {
                        var captcha = $('#captcha'),
                                error = 'код введен неверено',
                                position = captcha.data('target'),
                                positionTriangle = captcha.data('class');
                        app.destroyTip(captcha, error, position, positionTriangle);
                        captcha.addClass('error');
                    } else {
                        $('form').remove()
                        $('<div/>').addClass('success').text('Ваше сообщение успешно отослано').prependTo($('form-content'));
                    }
                }
            })


        },

        // Event by pressing the "Send"
        submitForm: function (form) {
            var elems = $('input, textarea'),
                valid = true;

            // Checking the text fields on the number of characters
            $.each(elems, function (index, val) {
                var elem = $(val),
                    val = elem.val(),
                    formGroup = elem.closest('.form-group'),
                    label = formGroup.find('label').text().toLowerCase(),
                    error = 'введите ' + label,
                    positionTriangle = elem.data('class'),
                    position = elem.data('target');

                if (val.length === 0) {

                    // If this field to enter a captcha
                    if (elem.attr('id') === 'captcha') {
                        error = error.substring(7, error.length)
                    }
                    // If this is not the submit button and a reset button forms
                    if ((elem).not('input[type="submit"], input[type="reset"]')) {
                        app.destroyTip(elem, error, position, positionTriangle);
                        elem.addClass('error');

                    }
                    // Validation is not passed successfully
                    valid = false;
                } else {
                    elem
                        .removeClass('error')
                        .qtip('destroy');
                }
            });


            return valid;
        },

        // Remove tooltips from fileds
        destroyTooltipFromInput: function () {
            $(this).removeClass('error').qtip('destroy');
        },

        // Clear form
        clearForm: function () {
            $(this).find('.error').removeClass('error');
            $('.qtip').remove();
        },
        // Removing tooltips about fields
        destroyTip: function (elem, error, position, positionTriangle) {
            elem.qtip({
                content: {
                    text: error
                },
                position: {
                    my: position,
                    at: positionTriangle,
                    viewport: $(window)
                },
                style: {
                    classes: ' qtip-red tooltip'
                }
            })
        }


    }

    // Running the application
    app.initializate();

})();