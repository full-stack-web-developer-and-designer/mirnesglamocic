/**
 * validate_me.js
 *
 * Handles client-side validation and AJAX submission
 * for the contact form using jQuery Validation Plugin.
 *
 * Features:
 * - Custom validation rules for name, email, and message fields
 * - Accessible error handling with inline messages
 * - Visual feedback via error class toggling
 * - AJAX form submission without page reload
 * - Displays server response and resets the form on success
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-02-08
 *
 * Dependencies:
 * - jQuery
 * - jQuery Validation Plugin
 *
 * Usage:
 * Include this file on pages containing the contact form:
 * <script src="/JS/validate_me.js"></script>
 */

"use strict";

jQuery(document).ready(function () {

  jQuery.validator.addMethod("validName", function (value) {
    return /^[a-zšđčćžA-ZŠĐČĆŽ' ]+$/.test(value);
  });

  jQuery.validator.addMethod("validEmail", function (value) {
    return /^([a-zA-Z0-9_\-\.]+)\+?([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value);
  });

  jQuery.validator.addMethod("validMessage", function (value) {
    return /^[a-zšđčćžA-ZŠĐČĆŽ0-9 .,!?:;\-$€\n\r\t]+$/.test(value);
  });

  jQuery("#contact_me").validate({
    rules: {
      name: { required: true, validName: true, minlength: 6 },
      email: { required: true, email: true, validEmail: true },
      message: { required: true, validMessage: true, maxlength: 1000 },
    },

    messages: {
      name: {
        required: "Please enter your name!",
        validName: "The name can only contain letters!",
        minlength: "The name must have at least 6 letters!",
      },
      email: {
        required: "Please enter your email!",
        validEmail: "The e-mail address is not valid!",
        email: "Please enter a valid email address!",
      },
      message: {
        required: "Please enter your message!",
        validMessage: "Message contains unsupported characters.",
        maxlength: "The message can contain a maximum of 1000 characters!",
      },
    },

    errorPlacement: function (error, element) {
      element.parent("div").find("span.error").html(error);
    },

    highlight: function (element) {
      jQuery(element).closest(".form-control").addClass("error");
    },

    unhighlight: function (element) {
      jQuery(element).closest(".form-control").removeClass("error");
    },

    submitHandler: function () {
      var data = jQuery("#contact_me").serialize();

      jQuery.ajax({
        url: "form_process.php",
        type: "post",
        data: data,
        dataType: "json",
        cache: false,
        success: function (response) {
          jQuery("#response").text(response.message);

                // log success/error to console
                if(response.response === "success") {
                    console.log("SUCCESS:", response.message);
                } else if(response.response === "error") {
                    console.error("ERROR:", response.message || response.errors);
                }
            },
        error: function (xhr, status, error) {
          console.log("AJAX error:", status, error);
        },
      });

      document.getElementById("contact_me").reset();
      return false; // prevent normal form submit
    },
  });
});
