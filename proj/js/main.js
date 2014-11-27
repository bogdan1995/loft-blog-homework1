﻿(function () {
    app = {

        initializate: function () {
            this.setUpListeners();
            this.placeholders();
        },

        placeholders: function () {
            $('input, textarea').placeholder();
        },

        setUpListeners: function () {
            $('.add').on('click', this.showForm);
            $('form').on('submit', this.validForm);
            $('form').on('keydown', 'input, textarea', this.destroyTooltipFromInput);
            $('form').on('reset', this.cleanForm);
        },

        DURATION: 300,

        showForm: function () {
            var popup = $('.popup'),
                popupInner = popup.find('.popup-inner');
            closeBtn = popup.find('.close');

            popupInner.removeClass('fadeOutRightBig')

            popup.fadeIn(this.DURATION);
            popupInner.addClass('fadeInLeftBig');

            closeBtn.on('click', function (callback) {
                popupInner.removeClass('fadeInLeftBig');
                popupInner.addClass('fadeOutRightBig');
                $.each($('input, textarea'), function (index, val) {
                    var elem = $(val);

                    if (elem.attr('type') != 'submit') {
                        elem.val('');
                    }


                });
                popup.fadeOut(this.DURATION);
            })
        },

        validForm: function (e) {
            e.preventDefault();

            var form = $(this);

            if (app.submitForm(form) === false) return false;

            var str = form.serialize();

            $.ajax({
                url: 'php/send_mail.php',
                type: 'POST',
                data: str,
                success : function (result) {

                    var answer = result.slice(-5, result.length);
                    if (answer === 'Error') {
                        $('#captcha').qtip({
                            content: {
                                text: 'неверный код'
                            },
                            position: {
                                my: 'left center',
                                at: 'right center',
                                viewport: $(window)
                            },
                            style: {
                                classes: ' qtip-red tooltip'
                            }
                        })
                        .addClass('error');
                    } else {
                        $('form').remove()
                        $('<div/>').addClass('success').text('Ваше сообщение успешно отослано').prependTo($('form-content'));
                    }
                }
            })


        },

        submitForm: function (form) {
            var elems = $('input, textarea'),
                valid = true;


            $.each(elems, function (index, val) {
                var elem = $(val),
                    val = elem.val(),
                    formGroup = elem.closest('.form-group'),
                    label = formGroup.find('label').text().toLowerCase(),
                    error = 'введите ' + label,
                    positionTriangle = elem.data('class'),
                    position = elem.data('target');

                if (val.length === 0) {
                    if (elem.attr('id') === 'captcha') {
                        error = error.substring(7, error.length)
                    }
                    if ((elem).not('input[type="file"], input[type="reset"]')) {
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
                            .addClass('error')

                    }
                    valid = false;
                } else {
                    elem
                        .removeClass('error')
                        .qtip('destroy');
                }
            });


            return valid;
        },


        destroyTooltipFromInput: function () {
            $(this).removeClass('error').qtip('destroy');
        },

        cleanForm: function () {
            $(this).find('.error').removeClass('error');
            $('.qtip').remove();
        }
    }

    app.initializate();

})();