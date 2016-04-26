(function () {
	$('.support-form').on('submit', function (e) {
		e.preventDefault();
		var phoneInput = $('#intl-phone-number'),
			countryInfo = phoneInput.intlTelInput("getSelectedCountryData");

		phoneInput.val(countryInfo.dialCode + phoneInput.val());

		$.post('/contacts/rapid', $(this).serialize(), function (response) {
			$('.rapid-contact-feedback').css('background', 'green').html('Your contact was send.');
		}).fail(function () {
			$('.rapid-contact-feedback').css('background', 'red').html('Please try again.');
		}).always(function () {
			$('#rapidresponse').modal('toggle');
		});
	});

	$('.type-select').on('change', function (e) {
		$('.hidden-fields').hide();

		if ($(this).val() == 'call') {
			$('.phone-field').show();
		} else if ($(this).val() == 'skype') {
			$('.skype-field').show();
		}
	});

	$('#intl-phone-number').intlTelInput();
})();
