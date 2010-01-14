$(function() {
	var url = window.location.href;
	var regex = new RegExp('\/services\/([a-z]+)$');
	var matches = regex.exec(url);
	if (matches.length > 1) {
		for (var i = 0; i < Tabs.panels.length; i++) {
			if (Tabs.panels[i].id == matches[1]) {
				Tabs.showPanel(Tabs.panels[i]);
				break;
			}
		}
	}
});