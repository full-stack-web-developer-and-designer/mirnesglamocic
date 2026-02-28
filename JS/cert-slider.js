/**
 * cert-slider.js
 *
 * Handles content sliders on the Certificates page.
 * Initializes LightSlider for each .content-slider element and
 * applies responsive settings for different screen sizes.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-02-20
 *
 * Usage:
 * Include this JS file only on the certificates pages:
 * <script src="/JS/cert-slider.js"></script>
 */
"use strict";

jQuery(document).ready(function () {

  let sliderInstance = null; // store LightSlider instance

  function initSlider() {
    // Initialize slider only if width >= 521px
    if (jQuery(window).width() >= 521 && !sliderInstance) {
      sliderInstance = jQuery(".content-slider").lightSlider({
        item: 4,
        slideMove: 1,
        slideMargin: 15,
        keyPress: true,
        pager: false,
        gallery: true,
        enableDrag: false,
        freeMove: false,
        responsive: [
          { breakpoint: 1260, settings: { item: 4, slideMargin: 12 } },
          { breakpoint: 1118, settings: { item: 3, slideMargin: 10 } },
          { breakpoint: 1006, settings: { item: 2, slideMargin: 15 } },
          { breakpoint: 767,  settings: { item: 2, slideMargin: 10 } },
          { breakpoint: 520,  settings: { item: 1, slideMargin: 0, controls: false } }
        ]
      });
    } 

    // Destroy slider if width < 521px
    if (jQuery(window).width() < 521 && sliderInstance) {
      sliderInstance.destroy();
      sliderInstance = null;

      // make images 100% width stacked
      jQuery(".content-slider li").css({
        width: "100%",
        float: "none",
        display: "block",
        marginBottom: "12px"
      });
    }
  }

  // Init on page load
  initSlider();

  // Re-run on window resize
  jQuery(window).resize(function () {
    initSlider();
  });

});
