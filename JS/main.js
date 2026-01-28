/* responsive navigation */ 
jQuery(function (n) {
    var e = n("#respmenu"),
        o = n("#nav .menu");
    e.on("click", function (n) {
        n.preventDefault(), o.toggleClass("is-open");
    }),
        n(window).on("resize", function () {
            n(window).width() > 768 && o.removeClass("is-open");
        });
});
/* slider */ ("use strict");
jQuery(document).ready(function () {
    jQuery(".content-slider").each(function i(n, r) {
        var o = "adaptive";
        jQuery(r).attr("id", o + n),
            jQuery("#" + o + n).lightSlider({
                item: 4,
                slideMove: 1,
                slideMargin: 15,
                keyPress: !0,
                pager: !1,
                gallery: !0,
                enableDrag: !1,
                freeMove: !1,
                onSliderLoad: function () {
                    $(".content-slider").removeClass("cS-hidden");
                },
                responsive: [
                    { breakpoint: 1260, settings: { item: 4, slideMargin: 12 } },
                    { breakpoint: 1118, settings: { item: 3, slideMargin: 10 } },
                    { breakpoint: 1006, settings: { item: 2, slideMargin: 15 } },
                    { breakpoint: 767, settings: { item: 2, slideMargin: 10, enableTouch: !1 } },
                    { breakpoint: 520, settings: { item: 1, slideMargin: 0, controls: !1 } },
                ],
            });
    });
    function i() {
        $(window).width() > 768
            ? (initTeaserHeight(),
              $("#" + t + e)
                  .parent()
                  .parent()
                  .find(".lSAction, .lSPager")
                  .remove(),
              $("content-slider").children().removeAttr("style"))
            : (theSlider(), $(".content-slider .col-item").css("width", "100%"));
    }
}),
    // Scroll-to-top button behavior
// - Shows the button when the user scrolls down 100px
// - Smoothly scrolls the page back to the top when clicked

jQuery(document).ready(function () {
    // Toggle visibility of the scroll-to-top button on scroll
    jQuery(window).scroll(function () {
        jQuery(this).scrollTop() > 100
            ? jQuery(".scroll-top").fadeIn()
            : jQuery(".scroll-top").fadeOut();
    });

    // Scroll smoothly to the top when the button is clicked
    jQuery(".scroll-top").click(function () {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false; // Prevent default click behavior
    });
});

/* lazyloading images */ 
// Lazy-loading for elements with the "lazy" class
// Supports modern browsers with IntersectionObserver and falls back to scroll events for older browsers

document.addEventListener("DOMContentLoaded", function () {

    // Check if IntersectionObserver is available
    if ("IntersectionObserver" in window) {

        // Select all elements with class "lazy"
        let lazyElements = document.querySelectorAll(".lazy");

        // Create a new observer
        let observer = new IntersectionObserver(function (entries, observerInstance) {
            entries.forEach(function (entry) {
                // When the element enters the viewport
                if (entry.isIntersecting) {
                    let el = entry.target;
                    el.classList.remove("lazy"); // Remove the lazy class
                    observerInstance.unobserve(el); // Stop observing this element
                }
            });
        });

        // Observe each lazy element
        lazyElements.forEach(function (el) {
            observer.observe(el);
        });

    } else {
        // Fallback for older browsers without IntersectionObserver

        let lazyElements, timeout;

        function lazyFallback() {
            if (timeout) clearTimeout(timeout);

            timeout = setTimeout(function () {
                let scrollTop = window.pageYOffset;

                lazyElements.forEach(function (el) {
                    // If the element is within the viewport
                    if (el.offsetTop < window.innerHeight + scrollTop) {
                        el.src = el.dataset.src; // Load the actual resource
                        el.classList.remove("lazy"); // Remove lazy class
                    }
                });

                // Stop events if all elements are loaded
                if (lazyElements.length === 0) {
                    document.removeEventListener("scroll", lazyFallback);
                    window.removeEventListener("resize", lazyFallback);
                    window.removeEventListener("orientationChange", lazyFallback);
                }
            }, 20); // Throttle checks
        }

        // Select all lazy elements
        lazyElements = document.querySelectorAll(".lazy");

        // Listen for scroll, resize, and orientation changes
        document.addEventListener("scroll", lazyFallback);
        window.addEventListener("resize", lazyFallback);
        window.addEventListener("orientationChange", lazyFallback);
    }

});