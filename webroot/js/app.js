/* Foundation v2.1.1 http://foundation.zurb.com */
$(document).ready(function() {

	/* Use this js doc for all application specific JS */

	/* TABS --------------------------------- */
	/* Remove if you don't need :) */
	
	var tabs = $('dl.tabs');
		tabsContent = $('ul.tabs-content')
	
	tabs.each(function(i) {
		//Get all tabs
		var tab = $(this).children('dd').children('a');
		tab.click(function(e) {
			
			//Get Location of tab's content
			var contentLocation = $(this).attr("href")
			contentLocation = contentLocation + "Tab";
			
			//Let go if not a hashed one
			if(contentLocation.charAt(0)=="#") {
			
				e.preventDefault();
			
				//Make Tab Active
				tab.removeClass('active');
				$(this).addClass('active');
				
				//Show Tab Content
				$(contentLocation).parent('.tabs-content').children('li').css({"display":"none"});
				$(contentLocation).css({"display":"block"});
				
			} 
		});
	});
	
	
	/* PLACEHOLDER FOR FORMS ------------- */
	/* Remove this and jquery.placeholder.min.js if you don't need :) */
	
	$('input, textarea').placeholder();
	
	
	/* DISABLED BUTTONS ------------- */
	/* Gives elements with a class of 'disabled' a return: false; */
	

	var nav = $('#cakephp-global-navigation');
	var unbind = function () {
		nav.undelegate('click', '> ul > li');
	};

	var bind = function () {
		nav.delegate('ul > li', 'click', function (e) {
			e.preventDefault();
			$(this).find('ul').toggle();
		});
		$("#cakephp-global-navigation ul li a.empty").unbind('click')
			.parent().unbind('mouseleave mouseenter');
	};
	
	// toggle the accordian mode
	$(window).bind('resize', function () {
		var win = $(this);
		if (win.width() < 727) {
			bind();
		} else {
			unbind();
		}
	});

	if ($(window).width() < 727) {
		bind();
	}

	
});
