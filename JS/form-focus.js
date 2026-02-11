/**
 * form-focus.js
 *
 * Enhances form usability by highlighting input and textarea fields
 * when they receive focus and restoring default styles on blur.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-28
 *
 * Usage:
 * Include this JS file on pages that contain forms:
 * <script src="/JS/form-focus.js"></script>
 */

"use strict";

jQuery(document).ready(function ($) {
  // Highlight text inputs on focus
  $("input:text").focus(function () {
    $(this).css({
      "background-color": "#FF9",
      color: "#0B60D4",
    });
  });

  // Restore text input styles on blur
  $("input:text").blur(function () {
    $(this).css({
      "background-color": "#FFF",
      color: "#000",
    });
  });

  // Highlight textarea on focus
  $("textarea").focus(function () {
    $(this).css({
      "background-color": "#FF9",
      color: "#0B60D4",
    });
  });

  // Restore textarea styles on blur
  $("textarea").blur(function () {
    $(this).css({
      "background-color": "#FFF",
      color: "#000",
    });
  });
});
