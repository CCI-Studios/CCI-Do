window.addEvent('domready', function() {

	$$('.cci-form').each(function (form) {
		var submit = form.getElements('input[type=submit]');
		submit.addEvent('click', function () {
			(function() {
				//window.parent.SqueezeBox.close();
				window.parent.location.reload(true);
			}).delay(100)
		});
	})
	
});