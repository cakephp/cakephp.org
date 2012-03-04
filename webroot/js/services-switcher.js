$(function() {
	var url = window.location.href;
	var regex = new RegExp('\/services\/([a-z]+)$');
	var matches = regex.exec(url);
	console.log(matches);
	if (matches.length > 1) {
		$('a[href="#' + matches[1] + '"]').trigger('click');
	}
});
