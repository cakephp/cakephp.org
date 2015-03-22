(function ($) {
var defaults = {
    'class': ''
};
$.fn.menuSelect = function (options) {
    options = $.extend({}, defaults, options || {});

    // Append the li & children to target.
    var appendOpt = function (li, target, prefix) {
        li = $(li);
        prefix = prefix || '';

        if (li.find('> ul').length) {
            prefix = li.find('> a').text() + ' - ';
            li.find('li').each(function () {
                appendOpt(this, target, prefix);
            });
        } else {
            var a = li.find('a');
            opt = $('<option />', {
                text: prefix + a.text(),
                value: a.attr('href')
            });
            target.append(opt);
        }
    };

    // Convert the ul + li elements into
    // an optgroup + option elements.
    var convert = function (element) {
        var select = $('<select />', options);
        select.appendTo(element);
        var option = $('<option />', {
            text: 'Go to..',
            selected: 'selected'
        });
        select.append(option);

        $(element).find('> ul > li').each(function () {
            var opt, optgroup;
            var li = $(this);
            if (li.find('ul').length > 0) {
                optgroup = $('<optgroup />', {
                    label: li.find('> a').text()
                });
                select.append(optgroup);
                li.find('> ul > li').each(function () {
                    appendOpt(this, optgroup);
                });
            } else {
                appendOpt(li, select);
            }
        });

        var handleChange = function (event) {
            window.location = $(this).val();
        };

        select.bind('change', handleChange);
    };

    return this.each(function () {
        convert(this);
    });
};
} (jQuery));
