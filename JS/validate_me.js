'use strict';
jQuery(document).ready(function () {

	jQuery.validator.addMethod('validName', function (value, element) {
		if (/^[a-zšđčćžA-ZŠĐČĆŽ' ]+$/gi.test(value)) {
			return true;
		} else {
			return false;
		};
	});

	jQuery.validator.addMethod('validEmail', function (value, element) {
		if (/^([a-zA-Z0-9_\-\.]+)\+?([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value)) {
			return true;
		} else {
			return false;
		};
	});

	jQuery.validator.addMethod('validMessage', function (value, element) {
		if (/^[a-zšđčćžA-ZŠĐČĆŽ 0-9 .,!?:;-]+$/gi.test(value)) {
			return true;
		} else {
			return false;
		};
	});

	jQuery("#contact_me").submit(function (e) {
		e.preventDefault();
	}).validate({
		rules: {
			name: {
				required: true,
				validName: true,
				minlength: 6
			},
			phone: {
				required: true,
				validPhone: true
			},
			email: {
				required: true,
				email: true,
				validEmail: true
			},
			message: {
				required: true,
				validMessage: true,
				maxlength: 1000
			}
		}, // rules
		messages: {
			name: {
				required: 'Please enter your name!',
				validName: 'The name can only contain letters!',
				minlength: 'The name must have at least 6 letters!'
			},
			email: {
				required: 'Please enter your email!',
				validEmail: 'E-mail adresa nije ispravna!',
				email: 'Please enter <em>a valid</em> email address!'
			},
			message: {
				required: 'Please enter your message!',
				validMessage: 'Sadržaj poruke ne mogu biti specijalni znaci!',
				maxlength: 'Poruka može da sadrži maksimalno 1000 karaktera!'
			}
		}, // messages
		submitHandler: function (_form) {
			//Your code for AJAX starts    
			var values = jQuery('#contact_me').serialize();
			console.log(values);
			jQuery.ajax({
				url: "/classes/Form_process.class.php",
				type: "post",
				data: values,
				dataType: 'json',
				cache: false,
				success: function (text) {
					//alert("success");
					jQuery("#response").text(text.message);
					console.log(text);
					//console.log(escape(text));
					console.log(text.hasOwnProperty('message'));
				},
				error: function (jqXHR, textStatus, errorThrown) {
					console.log(JSON.stringify(jqXHR));
					console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
				  }
			}); //Your code for AJAX Ends
			// Clear all data after submit
			var form_contact = document.getElementById('contact_me').reset();
			return false;
		} //submitHandler
	}); // validate
}); // document.ready