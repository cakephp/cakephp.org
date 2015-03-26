jQuery(document).ready(function (jQuery) {
    jQuery('.hide-me').hide();
    jQuery('.click-me').click(function () {
        jQuery('.hide-me').hide();
        jQuery('.click-me').removeClass('clicked');
        jQuery(this).addClass('clicked');
        jQuery(this).nextUntil('li.click-me').fadeToggle(500);
    });
});
