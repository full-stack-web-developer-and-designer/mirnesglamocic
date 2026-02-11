/**
 * main.js
 *
 * Global JavaScript used across the website.
 * Handles:
 * - Responsive navigation toggle
 * - Scroll-to-top button behavior
 * - Lazy loading for images and sections
 *
 * Page-specific functionality is intentionally excluded
 * and moved into dedicated JS files where needed.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-28
 *
 * Usage:
 * Included globally (e.g. in footer.php) on all pages:
 * <script src="/JS/main.js"></script>
 */

"use strict";

/* ========================================
   Responsive navigation
======================================== */
jQuery(function (n) {
  var e = n("#respmenu"),
    o = n("#nav .menu");

  e.on("click", function (n) {
    n.preventDefault();
    o.toggleClass("is-open");
  });

  n(window).on("resize", function () {
    if (n(window).width() > 768) {
      o.removeClass("is-open");
    }
  });
});

/* ========================================
   Scroll-to-top button
   - Shows after scrolling 100px
   - Smooth scroll to top on click
======================================== */
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    jQuery(this).scrollTop() > 100
      ? jQuery(".scroll-top").fadeIn()
      : jQuery(".scroll-top").fadeOut();
  });

  jQuery(".scroll-top").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});

/* ========================================
   Lazy loading elements
   - Uses IntersectionObserver when available
   - Falls back to scroll-based detection
======================================== */
document.addEventListener("DOMContentLoaded", function () {
  if ("IntersectionObserver" in window) {
    let lazyElements = document.querySelectorAll(".lazy");

    let observer = new IntersectionObserver(function (
      entries,
      observerInstance,
    ) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          let el = entry.target;
          el.classList.remove("lazy");
          observerInstance.unobserve(el);
        }
      });
    });

    lazyElements.forEach(function (el) {
      observer.observe(el);
    });
  } else {
    // Fallback for older browsers

    let lazyElements, timeout;

    function lazyFallback() {
      if (timeout) clearTimeout(timeout);

      timeout = setTimeout(function () {
        let scrollTop = window.pageYOffset;

        lazyElements.forEach(function (el) {
          if (el.offsetTop < window.innerHeight + scrollTop) {
            el.src = el.dataset.src;
            el.classList.remove("lazy");
          }
        });

        if (lazyElements.length === 0) {
          document.removeEventListener("scroll", lazyFallback);
          window.removeEventListener("resize", lazyFallback);
          window.removeEventListener("orientationChange", lazyFallback);
        }
      }, 20);
    }

    lazyElements = document.querySelectorAll(".lazy");

    document.addEventListener("scroll", lazyFallback);
    window.addEventListener("resize", lazyFallback);
    window.addEventListener("orientationChange", lazyFallback);
  }
});
