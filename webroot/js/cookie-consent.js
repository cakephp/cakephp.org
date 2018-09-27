function cookieConsent(server) {
	window.cookieconsent.initialise({
		palette: {
			"popup": {
				"background": "#000"
			},
			"button": {
				"background": "#f1d600"
			}
		},
		type: "opt-out",
		content: {
			"href": "/pages/privacy"
		},
		cookieconsent : {
			status: 'deny'
		},
		cookie : {
			domain: server
		},
		position : "top",
		onInitialise: function (status) {
			var type = this.options.type;
			var didConsent = this.hasConsented();
			if (didConsent) {
				setTimeout(function() {
					$( document ).ready( function () {
						$('.cc-allow')[0].click();
					})
				});
			} else {
				var popup = this;
				setTimeout(function() {
					popup.open();
				});
			}
		},
		onStatusChange: function(status, chosenBefore) {},
		onRevokeChoice: function() {},
	})
});
