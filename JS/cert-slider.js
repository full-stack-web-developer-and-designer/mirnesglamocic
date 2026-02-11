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
 * Updated: 2026-01-28
 *
 * Usage:
 * Include this JS file only on the certificates pages:
 * <script src="/JS/cert-slider.js"></script>
 */

"use strict";

jQuery(document).ready(function () {
  // Initialize each content slider
  jQuery(".content-slider").each(function (index, element) {
    // Give each slider a unique ID
    var sliderId = "adaptive" + index;
    jQuery(element).attr("id", sliderId);

    // Initialize LightSlider
    jQuery("#" + sliderId).lightSlider({
      item: 4,
      slideMove: 1,
      slideMargin: 15,
      keyPress: true,
      pager: false,
      gallery: true,
      enableDrag: false,
      freeMove: false,
      onSliderLoad: function () {
        // Make the slider visible after loading
        jQuery(".content-slider").removeClass("cS-hidden");
        // ✅ Add rel="nofollow" to navigation buttons
        jQuery("#" + sliderId)
          .parent()
          .find("a.lSPrev, a.lSNext")
          .attr("rel", "nofollow");
      },
      responsive: [
        { breakpoint: 1260, settings: { item: 4, slideMargin: 12 } },
        { breakpoint: 1118, settings: { item: 3, slideMargin: 10 } },
        { breakpoint: 1006, settings: { item: 2, slideMargin: 15 } },
        {
          breakpoint: 767,
          settings: { item: 2, slideMargin: 10, enableTouch: false },
        },
        {
          breakpoint: 520,
          settings: { item: 1, slideMargin: 0, controls: false },
        },
      ],
    });
  });

  // Adjust slider on resize or initial load for mobile
  function adjustSlider() {
    if (jQuery(window).width() > 768) {
      // Desktop: reset any mobile changes
      jQuery(".content-slider").children().removeAttr("style");
    } else {
      // Mobile: destroy LightSlider if initialized and stack items
      jQuery(".content-slider").each(function () {
        var slider = jQuery(this).data("lightSlider");
        if (slider) slider.destroy();
        jQuery(this).children().css("width", "100%");
      });
    }
  }

  // Call on page load and window resize
  adjustSlider();
  jQuery(window).resize(adjustSlider);
});
