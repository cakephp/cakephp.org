$('#anything').anythingSlider({
    // Appearance
    theme: "default", // Theme name
    mode: "horiz", // Set mode to "horizontal", "vertical" or "fade" (only first letter needed); replaces vertical option
    expand: true, // If true, the entire slider will expand to fit the parent element
    resizeContents: true, // If true, solitary images/objects in the panel will expand to fit the viewport
    aspectRatio: null, // Valid values: null, true, a float e.g. 1.5 (or as 3/2) or a ratio in a string e.g. '3:2'
    showMultiple: false, // Set this value to a number and it will show that many slides at once
    easing: "swing", // Anything other than "linear" or "swing" requires the easing plugin or jQuery UI

    buildArrows: true, // If true, builds the forwards and backwards buttons
    buildNavigation: false, // If true, builds a list of anchor links to link to each panel
    buildStartStop: false, // If true, builds the start/stop button and adds slideshow functionality

    appendForwardTo: null, // Append forward arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendBackTo: null, // Append back arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendControlsTo: null, // Append controls (navigation + start-stop) to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendNavigationTo: null, // Append navigation buttons to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendStartStopTo: null, // Append start-stop button to a HTML element (jQuery Object, selector or HTMLNode), if not null

    toggleArrows: false, // If true, side navigation arrows will slide out on hovering & hide @ other times
    toggleControls: false, // if true, slide in controls (navigation + play/stop button) on hover and slide change, hide @ other times

    startText: "Start", // Start button text
    stopText: "Stop", // Stop button text
    forwardText: "&raquo;", // Link text used to move the slider forward (hidden by CSS, replaced with arrow image)
    backText: "&laquo;", // Link text used to move the slider back (hidden by CSS, replace with arrow image)
    tooltipClass: "tooltip", // Class added to navigation & start/stop button (text copied to title if it is hidden by a negative text indent)

    // Function
    enableArrows: true, // if false, arrows will be visible, but not clickable.
    enableNavigation: true, // if false, navigation links will still be visible, but not clickable.
    enableStartStop: true, // if false, the play/stop button will still be visible, but not clickable. Previously "enablePlay"
    enableKeyboard: true, // if false, keyboard arrow keys will not work for this slider.

    // Navigation
    startPanel: 1, // This sets the initial panel
    changeBy: 1, // Amount to go forward or back when changing panels.
    hashTags: false, // Should links change the hashtag in the URL?
    infiniteSlides: false, // if false, the slider will not wrap & not clone any panels
    navigationFormatter: null, // Details at the top of the file on this use (advanced use)
    navigationSize: false, // Set this to the maximum number of visible navigation tabs; false to disable

    // Slideshow options
    autoPlay: false, // If true, the slideshow will start running; replaces "startStopped" option
    autoPlayLocked: false, // If true, user changing slides will not stop the slideshow
    autoPlayDelayed: false, // If true, starting a slideshow will delay advancing slides; if false, the slider will immediately advance to the next slide when slideshow starts
    pauseOnHover: true, // If true & the slideshow is active, the slideshow will pause on hover
    stopAtEnd: false, // If true & the slideshow is active, the slideshow will stop on the last page. This also stops the rewind effect when infiniteSlides is false.
    playRtl: false, // If true, the slideshow will move right-to-left

    // Times
    delay: 3000, // How long between slideshow transitions in AutoPlay mode (in milliseconds)
    resumeDelay: 15000, // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
    animationTime: 600, // How long the slideshow transition takes (in milliseconds)
    delayBeforeAnimate: 0       // How long to pause slide animation before going to the desired slide (used if you want your "out" FX to show).

});
$('#codeSlider').anythingSlider({
    // Appearance
    theme: "default", // Theme name
    mode: "horizontal", // Set mode to "horizontal", "vertical" or "fade" (only first letter needed); replaces vertical option
    expand: true, // If true, the entire slider will expand to fit the parent element
    resizeContents: true, // If true, solitary images/objects in the panel will expand to fit the viewport
    aspectRatio: null, // Valid values: null, true, a float e.g. 1.5 (or as 3/2) or a ratio in a string e.g. '3:2'
    showMultiple: false, // Set this value to a number and it will show that many slides at once
    easing: "swing", // Anything other than "linear" or "swing" requires the easing plugin or jQuery UI

    buildArrows: true, // If true, builds the forwards and backwards buttons
    buildNavigation: false, // If true, builds a list of anchor links to link to each panel
    buildStartStop: false, // If true, builds the start/stop button and adds slideshow functionality

    appendForwardTo: null, // Append forward arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendBackTo: null, // Append back arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendControlsTo: null, // Append controls (navigation + start-stop) to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendNavigationTo: null, // Append navigation buttons to a HTML element (jQuery Object, selector or HTMLNode), if not null
    appendStartStopTo: null, // Append start-stop button to a HTML element (jQuery Object, selector or HTMLNode), if not null

    toggleArrows: false, // If true, side navigation arrows will slide out on hovering & hide @ other times
    toggleControls: false, // if true, slide in controls (navigation + play/stop button) on hover and slide change, hide @ other times

    startText: "Start", // Start button text
    stopText: "Stop", // Stop button text
    forwardText: "&raquo;", // Link text used to move the slider forward (hidden by CSS, replaced with arrow image)
    backText: "&laquo;", // Link text used to move the slider back (hidden by CSS, replace with arrow image)
    tooltipClass: "tooltip", // Class added to navigation & start/stop button (text copied to title if it is hidden by a negative text indent)

    // Function
    enableArrows: true, // if false, arrows will be visible, but not clickable.
    enableNavigation: true, // if false, navigation links will still be visible, but not clickable.
    enableStartStop: true, // if false, the play/stop button will still be visible, but not clickable. Previously "enablePlay"
    enableKeyboard: true, // if false, keyboard arrow keys will not work for this slider.

    // Navigation
    startPanel: 1, // This sets the initial panel
    changeBy: 1, // Amount to go forward or back when changing panels.
    hashTags: false, // Should links change the hashtag in the URL?
    infiniteSlides: false, // if false, the slider will not wrap & not clone any panels
    navigationFormatter: null, // Details at the top of the file on this use (advanced use)
    navigationSize: false, // Set this to the maximum number of visible navigation tabs; false to disable

    // Slideshow options
    autoPlay: false, // If true, the slideshow will start running; replaces "startStopped" option
    autoPlayLocked: false, // If true, user changing slides will not stop the slideshow
    autoPlayDelayed: false, // If true, starting a slideshow will delay advancing slides; if false, the slider will immediately advance to the next slide when slideshow starts
    pauseOnHover: true, // If true & the slideshow is active, the slideshow will pause on hover
    stopAtEnd: false, // If true & the slideshow is active, the slideshow will stop on the last page. This also stops the rewind effect when infiniteSlides is false.
    playRtl: false, // If true, the slideshow will move right-to-left

    // Times
    delay: 3000, // How long between slideshow transitions in AutoPlay mode (in milliseconds)
    resumeDelay: 15000, // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
    animationTime: 600, // How long the slideshow transition takes (in milliseconds)
    delayBeforeAnimate: 0       // How long to pause slide animation before going to the desired slide (used if you want your "out" FX to show).

});
jQuery(document).ready(function () {

    var owl = jQuery("#owl");

    owl.owlCarousel({
        slideSpeed: 800,
        items: 3, //10 items above 1000px browser width
        itemsDesktop: [1000, 2], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: [0, 1], // itemsMobile disabled - inherit from itemsTablet option
        mouseDrag: false, navigation: false, navigationText: ["", ""], pagination: false
    });

    jQuery(".owl-prev").click(function () {
        var owl = jQuery("#owl").data("owlCarousel");
        owl.prev();
    });
    jQuery(".owl-next").click(function () {
        var owl = jQuery("#owl").data("owlCarousel");
        owl.next();
    });
});
